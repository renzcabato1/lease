<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Property;
use App\Location;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $properties = Property::with('units')->orderBy('name')->get();
        $locations = Location::orderBy('location', 'asc')->get();
        $units = Unit::get();
        return view(
            'properties.index',
            array(
                'properties' => $properties,
                'units' => $units,
                'locations' => $locations,

            )
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'code' => 'unique:properties|required',
            'name' => 'required',
            'type' => 'required',
            'location' => 'required',
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
