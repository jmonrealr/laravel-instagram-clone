<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Profile;

class HomeController extends Controller
{

    public function index(){
        $posts = Post::with(['likes','comments','images','user'])->orderByDesc('created_at')->get();
        $users = Profile::with('user')->get();

        return view('home.index',get_defined_vars());
    }

}
