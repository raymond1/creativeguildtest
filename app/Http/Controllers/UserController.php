<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::with('album')->get();
        return $users;
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
        $user = User::with('album')->find($id);
        //$user->album = $user->albums();
        return $user->toArray();
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
            "message" => "user record updated"
        ], 200);
    }

    public function destroy ($id) {
        $user = User::find($id);
        $user->delete();
        return response()->json([
            "message" => "user record deleted"
        ], 200);
    }
}
