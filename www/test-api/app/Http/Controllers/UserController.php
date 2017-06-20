<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return $users;
    }

    public function store(Request $request) {
        $user = User::create($request->input());

        return $user;
    }
}
