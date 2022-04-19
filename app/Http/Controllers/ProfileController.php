<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Post;

class ProfileController extends Controller
{
    function index(){
        $profile = Profile::with('user')->findOrFail(auth()->user()->id);
        //dd($profile);
        $posts = Post::where('user_id',$profile->user->id);
        return view('profile.index', get_defined_vars());
    }

    function show($id){
        $profile = Profile::with('user')->findOrFail($id);
        //dd($profile);
        $posts = Post::where('user_id',$profile->user->id);
        return view('profile.show', get_defined_vars());
    }
}
