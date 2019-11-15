<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public function getAllUsers() {

    }
  
    public function createUser(Request $request) {
        $user = new User;
        $user->name = $request->name;
        $user->course = $request->course;
        $user->save();
    
        return response()->json([
            "message" => "user record created"
        ], 201);
    }

    public function getUser($id) {
    }

    public function updateUser(Request $request, $id) {
    }

    public function deleteUser ($id) {
    }
}
