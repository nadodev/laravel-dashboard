<?php

namespace App\Http\Controllers;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

use App\Models\User;


class UserController extends Controller
{


    public function profile()
    {
        return view('frontend.dashboard.edit_profile');
    }

    public function store(ProfileUpdateRequest $request)
    {
        $id = Auth::id();

        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;

        if($request->file('photo')){

            $file = $request->file('photo');
            @unlink(public_path().'/storage/upload/user_images/'.$data->photo);
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path().'/storage/upload/user_images/', $filename);
            $data['photo'] = $filename;
        }

       $data->save();

        return Redirect::route('profile.user')->with('status', 'profile-updated');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
