<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AmenitiesRequest;
use App\Services\AmenitiesServices;

class AmenitiesController extends Controller
{

    public function __construct( protected AmenitiesServices $serviceAmenities ){ }

    public function allAmenities(){
        return view('backend.amenities.all_amenities');
    }

    public function indexAmenities(){
        return view('backend.amenities.add_amenities');
    }

    public function storeAmenities(AmenitiesRequest $request){
        $request->validated();
        $this->serviceAmenities->addAmenities($request);
        return redirect()->route('all.amenities')->with('success', 'Property Type Added Successfully');
    }

    public function editAmenities($id){
        $amenities = Amenities::findOrFail($id);
        return view('backend.amenities.edit_amenities', compact('amenities'));
    }

    public function updateAmenities(AmenitiesRequest $request, $id){
        $request->validated();
        $this->serviceAmenities->updateAmenities($request, $id);
        return redirect()->route('all.amenities')->with('success', 'Property Type Updated Successfully');
    }

    public function deleteAmenities($id){
        $this->serviceAmenities->deleteAmenities($id);
        return redirect()->route('all.amenities')->with('success', 'Property Type Deleted Successfully');
    }
}
