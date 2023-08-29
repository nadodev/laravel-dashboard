<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PropertyTypeRequest;
use App\Services\ServicePropertyTypes;
use Illuminate\Http\Request;
use App\Models\PropertyType;

class PropertyTypeController extends Controller
{


    public function __construct( protected ServicePropertyTypes $servicePropertyTypes ){ }

    public function allType()
    {
        return view('backend.type.all_type');
    }

    public function addType()
    {
        return view('backend.type.add_type');
    }

    public function storeType(PropertyTypeRequest  $request)
    {
       $request->validated();
       $this->servicePropertyTypes->storeTypes($request);
        return redirect()->route('all.type')->with('success', 'Property Type Added Successfully');

    }

    function deleteType($id){
            $this->servicePropertyTypes->destroyTypes($id);
            return redirect()->route('all.type')->with('success', 'Property Type Deleted Successfully');
    }

    public function editType(PropertyTypeRequest $request)
    {
        $type = $this->servicePropertyTypes->editTypes($request->id);
        return view('backend.type.edit_type', compact('type'));
    }

    public function updateType(PropertyTypeRequest $request)
    {

        $this->servicePropertyTypes->updateTypes($request, $request->id);
        return redirect()->route('all.type')->with('success', 'Property Type Updated Successfully');
    }
}
