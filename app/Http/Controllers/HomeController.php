<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{

    public function index(){
        $posts = Post::with(['likes','comments','images','user'])->get();
        return view('index',get_defined_vars());
    }


}
