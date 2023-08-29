<?php

namespace App\Services;

use App\Models\Amenities;
use App\Http\Requests\AmenitiesRequest;
class AmenitiesServices
{
    public function addAmenities(AmenitiesRequest $request){
        $amenities = new Amenities();
        $amenities->amenities_name = $request->amenities_name;
        $amenities->save();
    }

    public function updateAmenities(AmenitiesRequest $request, $id){
        $amenities = Amenities::find($id);
        $amenities->amenities_name = $request->amenities_name;
        $amenities->save();
    }

    public function deleteAmenities($id){
        $amenities = Amenities::findOrFail($id);
        $amenities->delete();
    }


}
