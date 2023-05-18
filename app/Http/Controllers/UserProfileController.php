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
            'cheked' => 'required'
        ]);
        $dataB = UserProfile::where('user_id', $id)->first();
        $dataB->name = $req->input('name');
        $dataB->lastname = $req->input('lastname');
        $dataB->company = $req->input('company');
        $dataB->tel = $req->input('tel');
        $dataB->website = $req->input('website');
        $dataB->cheked = 1;
        $dataB->save();
        $data = $dataB;
        return view('profile', compact('data'));
    }
}
