<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Image;
use App\Models\User;
use App\Models\Like;
use App\Models\Comment;
use App\Models\Profile;

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
            'user_id' => auth()->user()->id]
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
        $profile = Profile::find($post->user_id)->url_image;
        $users = User::all();
        return view('home.show',get_defined_vars());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->post;
        $post = NULL;
        try {
            $post = Post::findOrFail($id)->delete();    
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->json($post,404);
        }
        $image = Image::where('post_id',$id)->delete();   
        return response()->json($id, 202);
    }

    /**
     * Method that likes the post
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function like(Request $request)
    {
        $heart = $request->heart;
        //return $heart;
        $post_id = $request->post;
        $post = Post::findOrFail($post_id);
        $user_id = $request->user;
        if($heart == 1){    
            $like = Like::create([
            'post_id' => $post_id, 
            'user_id' => auth()->id(),
        ]);
            return response()->json($request, 201);
        }else{
            $like = Like::where('user_id',$user_id)->delete();
            return response()->json($request, 202);
        }

        return Response::json($like);
    }

    /**
     * Method that comments the post
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function comment(Request $request)
    {
        $comment = $request->comment;
        //return $heart;
        $post_id = $request->post;
        $post = Post::findOrFail($post_id);
        $user_id = $request->user;
        $comment = Comment::create([
            'body' => $comment,
            'post_id' => $post_id,
            'user_id' => auth()->user()->id,
        ]);
        return response()->json($request, 201);
    }
}
