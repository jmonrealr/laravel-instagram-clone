<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Post;

class ProfileController extends Controller
{
    /**
     * Retrieve the profile
     *
     * @param $name
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function index($name){
        $user = User::where('name', '=', $name)->with('profile', 'posts.image', 'followers.user_follower', 'following')->first();
        $data = User::all();
        $posts = Post::where('user_id', '=', $user->id)->get();
        return view('profile.index', get_defined_vars());
    }

    /**
     * Show the resource
     *
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    function show($id){
        $profile = Profile::with('user')->findOrFail($id);
        $posts = Post::where('user_id',$profile->user->id);
        return view('profile.show', get_defined_vars());
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request): \Illuminate\Http\JsonResponse
    {
        $query = explode('?',$request->getRequestUri())[1];
        $users = User::where('name', 'like', '%'."{$query}".'%')->with('profile')->get();
        return response()->json($users->toJson());
    }

    /**
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function searchProfile(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'users' => 'required'
        ]);
        return redirect()->route('profile.index', $request['users']);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $data = User::all();
        return view('profile.edit', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource password.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function change_password()
    {
        $data = User::all();
        return view('profile.password', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource password.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        $data = User::all();
        return view('profile.password', get_defined_vars());
    }
}
