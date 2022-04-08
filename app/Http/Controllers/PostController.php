<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Models\User;
use App\Models\Like;

class PostController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return ($request);
        if (!$request->image)
            return response()->json(["No se encuentra la imagen a subir ",$request], 404); 

        //return ($request);

        $post = Post::updateOrCreate(
            ['id' => $request->post_id],
            ['title' => $request['title'], 
            'body' => $request['body'],
            'user_id' => $request->user_id]
        );

        $file = $request->file('image');
        $name = time() . $file->getClientOriginalName();
        $file->move(public_path() . '/images/', $name);
        $filename = $file->getClientOriginalName();
        $request->merge(['image' => $filename]);

        $image = Image::create([
            'url_image' => 'images/' . $name,
            'post_id' => $post->id,
        ]);

        return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::with(['likes','comments','images','user'])->findOrFail($id);
        $users = User::all();
        return view('home.show',get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id)->delete();
        return Response::json($post);
    }

    /**
     * Method that likes the post
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function like(Request $request)
    {
        $post = Post::findOrFail($id)->delete();
        return Response::json($post);
    }
}
