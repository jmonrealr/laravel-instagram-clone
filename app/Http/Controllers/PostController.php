<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;

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
        if ($request['image'])
            return response()->json(["No se encuentra la imagen a subir ",$request], 404); 

        return ($request);

        $post = Post::updateOrCreate(
            ['id' => $request->post_id],
            ['title' => $request->input['title'], 
            'body' => $request->input['body'],
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

        return Response::json($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = findOrFail($id)->first();
        return Response::json($post);
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
}
