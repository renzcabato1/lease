<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $this->validate($request, [
            'property_id' => 'required',
            'prev_unit' => 'required',
            'new_unit' => 'required',
            'space_type',
            'area_size',
            'status',
            'unit_tag',
            // Add more validation rules for other fields
        ]);

        // Create and save the new unit
        $unit = new Unit;
        $unit->property_id = $request->property_id;
        $unit->prev_unit = $request->prev_unit;
        $unit->new_unit = $request->new_unit;
        $unit->space_type = $request->space_type;
        $unit->area_size = $request->area_size;
        $unit->status = $request->status;
        $unit->unit_tag = $request->unit_tag;

        // Set other fields as needed
        $unit->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Unit added successfully.');
    }
}
