<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index($user)
    {

        $user=\App\User::findOrFail($user);

        return view('profiles.index', [
            'user'=> $user,
        ]);
    }


    public function edit(\App\User $user){

        $this->authorize('update',$user->profile);
        return view('profiles.edit', compact('user'));
    }


    public function update(User $user){

        $this->authorize('update',$user->profile);
        $data=request()->validate([
            'description'=>'required',
        ]);

        auth()->user()->profile->update($data);

        return redirect("/profile/{$user->id}");
    }
}
