<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowUser extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function store(\App\User $user) 
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
