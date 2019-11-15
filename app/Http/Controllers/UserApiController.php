<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function index() {
        return User::all();
    }

    public function store(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->profile_picture = $request->profile_picture;
        $user->save();
    
        return response()->json([
            "message" => "user record created"
        ], 201);
    }

    public function show($id) {
        return User::find($id);
    }

    public function update(Request $request, $id) {
        $user = User::find($id);
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->bio = $request->bio;
        $user->profile_picture = $request->profile_picture;
        $user->save();
    
        return response()->json([
            "message" => "user record created"
        ], 200);
    }

    public function deleteUser ($id) {
    }
}
