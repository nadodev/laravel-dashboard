<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile()
    {
        return view('admin.profile', [
            'user' => $request->user(),
        ]);
    }
}
