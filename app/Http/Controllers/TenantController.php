<?php

namespace App\Http\Controllers;

use App\Unit;
use App\Property;
use App\Location;
use App\Tenant;
use App\TenantDetails;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tenants = Tenant::orderBy('trade_name')->get();
        // dd($tenants);
        return view(
            'tenants.index',
            array(
                'tenants' => $tenants,
                // 'units' => $units,
                // 'locations' => $locations,

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
            // 'code' => 'unique:properties|required',
            'trade_name' => 'required',
            'company' => 'required',
            'category' => 'required',
            'status' => 'required',
            'record_type' => 'required',
            'personal_title' => 'required',
            'first_name' =>'required',
            'middle_name' =>'required',
            'last_name' =>'required',
            'personal_suffix' =>'required',
            'customer_group' =>'required',
            'classification_group' =>'required',
            'tin_no' =>'required',
            'gender' =>'required',
            'marital_status' =>'required',
            'age' =>'required',
            'citizenship' =>'required',
            'country' =>'required',
            'language' =>'required',
            'company_name' =>'required',
            'company_address' =>'required',

        ]);
        try {
            DB::beginTransaction();
            $tenant = new Tenant;
            $tenant->trade_name = $request->trade_name;
            $tenant->company = $request->company;
            $tenant->category = $request->category;
            $tenant->status = $request->status;
            $tenant->save();

            $tenant_details = new TenantDetails;
            $tenant_details->tenant_id = $tenant->id;
            $tenant_details->account_id = $request->account_id;
            $tenant_details->record_type = $request->record_type;
            $tenant_details->personal_title = $request->personal_title;
            $tenant_details->first_name = $request->first_name;
            $tenant_details->middle_name = $request->middle_name;
            $tenant_details->last_name = $request->last_name;
            $tenant_details->personal_suffix = $request->personal_suffix;
            $tenant_details->customer_group = $request->customer_group;
            $tenant_details->classification_group = $request->classification_group;
            $tenant_details->tin_no = $request->tin_no;
            $tenant_details->gender = $request->gender;
            $tenant_details->marital_status = $request->marital_status;
            $tenant_details->age = $request->age;
            $tenant_details->citizenship = $request->citizenship;
            $tenant_details->country = $request->country;
            $tenant_details->language = $request->language;
            $tenant_details->company_name = $request->company_name;
            $tenant_details->company_address = $request->company_address;
            $tenant_details->save();
            DB::commit();

            Alert::success('Successfully Save to Tenants')->persistent('Dismiss');
            return back();
        } catch(\Exception $e) {
            DB::rollback();
            $error_description = 'Failed to insert task';
            $error_status = 1;
            return back();
        }

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
        $tenant = Tenant::findOrFail($id);
        $tenants = Tenant::leftJoin('tenant_details', function($join) {
            $join->on('tenants.id', '=', 'tenant_details.tenant_id');
          })
        ->where('tenants.id',$id)
        ->orderBy('tenants.id')->get();
        // $tenant_details = TenantDetails::findOrFail($id);
        // $tenants_details = TenantDetails::where('tenant_id',$id)->orderBy('id')->get();
        // $tenants = Tenant::select('*')->take(1)->get();
        // dd($tenant);
        return view(
            'tenants.view',
        array(
            'tenants' => $tenants,
        )
        );
        // dd('renz');
    }

    public function showTenantAdd()
    {
        //
        // $tenant = Tenant::findOrFail($id);
        // $tenants = Tenant::leftJoin('tenant_details', function($join) {
        //     $join->on('tenants.id', '=', 'tenant_details.tenant_id');
        //   })
        // ->where('tenants.id',$id)
        // ->orderBy('tenants.id')->get();
        // $tenant_details = TenantDetails::findOrFail($id);
        // $tenants_details = TenantDetails::where('tenant_id',$id)->orderBy('id')->get();
        // $tenants = Tenant::select('*')->take(1)->get();
        // dd($tenant);
        return view(
            'tenants.create',
        // array(
        //     'tenants' => $tenants,
        // )
        );
        // dd('renz');
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
