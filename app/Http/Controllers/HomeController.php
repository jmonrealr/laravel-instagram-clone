<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{

    public function index(){
        $posts = Post::with(['likes','comments','images','user'])->get();
        $users = User::all();
        return view('index',get_defined_vars());
    }


}
