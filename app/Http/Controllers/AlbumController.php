<?php

namespace App\Http\Controllers;
use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index() {
        return Album::all();
    }

    public function store(Request $request) {
        $album = new Album;
        $album->user_id = $request->user_id;
        $album->title = $request->title;
        $album->description = $request->description;
        $album->img = $request->img;
        $album->date = $request->date;
        $album->featured = $request->has('featured')?true:false;
        $album->save();
    
        return response()->json([
            "message" => "album created"
        ], 201);
    }

    public function show($id) {
        return Album::find($id);
    }
/*
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
    }*/
}
