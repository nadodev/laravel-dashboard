<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyType;

class HomeController extends Controller
{
    public function index()
    {

        $propertyTypes =  PropertyType::all();
        return view('frontend.index', compact('propertyTypes'));
    }
}
