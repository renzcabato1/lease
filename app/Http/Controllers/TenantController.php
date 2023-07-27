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
    public function index()
    {
        $tenants = Tenant::orderBy('trade_name')->get();
        return view(
            'tenants.index',
            array(
                'tenants' => $tenants,
            )
        );
    }

    public function create()
    {
        return view(
            'tenants.create',
        );
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'trade_name' => 'required',
            'company' => 'required',
            'category' => 'required',
            'status' => 'required',
            'record_type',
            'personal_title',
            'first_name',
            'middle_name',
            'last_name',
            'personal_suffix',
            'customer_group',
            'classification_group',
            'tin_no',
            'gender',
            'marital_status',
            'age',
            'citizenship',
            'country',
            'language',
            'company_name',
            'company_address',
            'address_desc',
            'address',
            'address_purpose',
            'address_primary',
            'contact_desc',
            'contact_type',
            'contact_no',
            'contact_address',
            'contact_ext',
            'contact_primary',
            'prev_unit',
            'new_unit',
            'space_type',
            'area_size',
            'current_start',
            'current_end',
            'rent',
            'cusa',
            'monthly_rent',
            'monthly_cusa',


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
            $tenant_details->address_desc = $request->address_desc;
            $tenant_details->address = $request->address;
            $tenant_details->address_purpose = $request->address_purpose;
            $tenant_details->address_primary = $request->address_primary;
            $tenant_details->contact_desc = $request->contact_desc;
            $tenant_details->contact_type = $request->contact_type;
            $tenant_details->contact_no = $request->contact_no;
            $tenant_details->contact_address = $request->contact_address;
            $tenant_details->contact_ext = $request->contact_ext;
            $tenant_details->contact_primary = $request->contact_primary;
            $tenant_details->prev_unit = $request->prev_unit;
            $tenant_details->new_unit = $request->new_unit;
            // $tenant_details->space_type = $request->space_type;
            // $tenant_details->area_size = $request->area_size;
            // $tenant_details->current_start = $request->current_start;
            // $tenant_details->current_end = $request->current_end;
            // $tenant_details->rent = $request->rent;
            // $tenant_details->cusa = $request->cusa;
            // $tenant_details->monthly_rent = $request->monthly_rent;
            // $tenant_details->monthly_cusa = $request->monthly_cusa;

            $tenant_details->save();
            DB::commit();

            Alert::success('Successfully Save to Tenants')->persistent('Dismiss');
            return redirect('tenants');
        } catch(\Exception $e) {
            DB::rollback();
            $error_description = 'Failed to Save to Tenants';
            $error_status = 1;
            Alert::error($error_description);
            return back();
        }

    }
    public function show($id)
    {
        //
        $tenant = Tenant::findOrFail($id);
        $tenants = Tenant::leftJoin('tenant_details', function($join) {
            $join->on('tenants.id', '=', 'tenant_details.tenant_id');
          })
        ->where('tenants.id',$id)
        ->orderBy('tenants.id')->get();
        return view(
            'tenants.view',
        array(
            'tenants' => $tenants,
        )
        );
    }

    public function showUnit($id)
    {
        $tenant = Tenant::findOrFail($id);
        $tenants = Tenant::leftJoin('tenant_details', function($join) {
            $join->on('tenants.id', '=', 'tenant_details.tenant_id');
          })
        ->where('tenants.id',$id)
        ->orderBy('tenants.id')->get();
        return view(
            'tenants.view2',
        array(
            'tenants' => $tenants,
        )
        );
        // dd('nesty');
    }

    public function edit($id)
    {
        $tenant = Tenant::findOrFail($id);
        $tenants = Tenant::leftJoin('tenant_details', function($join) {
            $join->on('tenants.id', '=', 'tenant_details.tenant_id');
          })
        ->where('tenants.id',$id)
        ->orderBy('tenants.id')->get();

        return view('tenants.update', ['tenants' => $tenants]);
    }

    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'trade_name' => 'required',
            'company' => 'required',
            'category' => 'required',
            'status' => 'required',
            'record_type',
            'personal_title',
            'first_name',
            'middle_name',
            'last_name',
            'personal_suffix',
            'customer_group',
            'classification_group',
            'tin_no',
            'gender',
            'marital_status',
            'age',
            'citizenship',
            'country',
            'language',
            'company_name',
            'company_address',
            'address_desc',
            'address',
            'address_purpose',
            'address_primary',
            'contact_desc',
            'contact_type',
            'contact_no',
            'contact_address',
            'contact_ext',
            'contact_primary',

        ]);
        try {
            DB::beginTransaction();
            $tenant->trade_name = $request->trade_name;
            $tenant->company = $request->company;
            $tenant->category = $request->category;
            $tenant->status = $request->status;
            $tenant->save();

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
            $tenant_details->address_desc = $request->address_desc;
            $tenant_details->address = $request->address;
            $tenant_details->address_purpose = $request->address_purpose;
            $tenant_details->address_primary = $request->address_primary;
            $tenant_details->contact_desc = $request->contact_desc;
            $tenant_details->contact_type = $request->contact_type;
            $tenant_details->contact_no = $request->contact_no;
            $tenant_details->contact_address = $request->contact_address;
            $tenant_details->contact_ext = $request->contact_ext;
            $tenant_details->contact_primary = $request->contact_primary;

            $tenant_details->save();
            DB::commit();

            Alert::success('Successfully Updated to Tenants')->persistent('Dismiss');
            return redirect('tenants');
        } catch(\Exception $e) {
            DB::rollback();
            $error_description = 'Task Failed to Update';
            $error_status = 1;
            Alert::error($error_description);
            return back();
        }
    }

    public function destroy($id)
    {
        $tenant = Tenant::findOrFail($id);
        if ($tenant) {
        $tenant->delete();
        Alert::success('Successfully Deleted to Tenants')->persistent('Dismiss');
        return redirect('tenants');
            } else {
        return redirect()->route('tenants.index')->with('error', 'Tenant not found.');
            }
    }
}
