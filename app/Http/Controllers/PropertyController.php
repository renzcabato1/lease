<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Property;
use App\Location;
use App\TenantDetails;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        //
        $properties = Property::all();
        $properties = Property::with('units')->orderBy('name')->get();
        $locations = Location::orderBy('location', 'asc')->get();
        $units = Unit::get();
        $tenants = Unit::leftJoin('tenant_details', 'units.tenant_id', '=', 'tenant_details.tenant_id')
        ->select('units.*', 'tenant_details.*')
        ->get();

        return view(
            'properties.index',
            compact('properties', 'units', 'locations', 'tenants'),
            array(
                'properties' => $properties,
                'units' => $units,
                'locations' => $locations,
                'tenants' => $tenants,
            )
        );
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'code' => 'unique:properties|required',
            'name' => 'required',
            'type' => 'required',
            'location',
        ]);

        $property = new Property;
        $property->user_id = auth()->user()->id;
        $property->code = $request->code;
        $property->type = $request->type;
        $property->location = $request->location;
        $property->name = $request->name;
        $property->save();

        Alert::success('Successfully Save to Property')->persistent('Dismiss');
        return back();
    }

    public function show($id)
    {

    $property = Property::with('units')->findOrFail($id);

    return view(
        'properties.view',
    array(
        'properties' => $property,
    )
    );
    }

    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        if ($property) {
        $property->delete();
        Alert::success('Successfully Deleted to Properties')->persistent('Dismiss');
        return redirect('properties');
            } else {
        return redirect()->route('properties.index')->with('error', 'Property not found.');
            }
    }
}
