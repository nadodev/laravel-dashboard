<?php

namespace App\Services;

use App\Models\PropertyType;
use App\Http\Requests\PropertyTypeRequest;

class ServicePropertyTypes

{

    public function storeTypes(PropertyTypeRequest $request){

        $type = new PropertyType();
        $type->type_name = $request->type_name;
        $type->type_icon = $request->type_icon;
        $type->save();

    }

    public function destroyTypes($id){
        $type = PropertyType::findOrFail($id);
        $type->delete();
    }

    public function editTypes($id){
        $type = PropertyType::findOrFail($id);
        return $type;
    }

    public function updateTypes(PropertyTypeRequest $request, $id){
        $type = PropertyType::findOrFail($id);
        $type->type_name = $request->type_name;
        $type->type_icon = $request->type_icon;
        $type->save();
    }



}

