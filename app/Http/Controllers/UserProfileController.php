<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $userProfile = UserProfile::where('user_id', $id)->first();
        if ($userProfile === NULL) {
            $userProfile = new UserProfile();
            $userProfile->user_id = $id;
            $userProfile->save();
        }

        $data = UserProfile::where('user_id', $id)->first();
        return view('profile', compact('data'));
    }
    public function store(Request $req)
    {
        /* dd($req->all()); */
        $id = Auth::id();
        $data = $req->validate([
            'name' => 'required',
            'lastname' => 'required',
            'company' => 'required',
            'tel' => 'required',
            'website' => 'required',
        ]);
        $data = UserProfile::where('user_id', $id)->first();
        $data->name = $req->input('name');
        $data->lastname = $req->input('lastname');
        $data->company = $req->input('company');
        $data->tel = $req->input('tel');
        $data->website = $req->input('website');
        $data->cheked = 1;
        $data->save();
        return view('profile', compact('data'));
    }
}
