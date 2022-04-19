<?php

namespace App\Http\Controllers;

use App\Models\Follower;
use App\Models\User;
use Illuminate\Http\Request;

class FollowersController extends Controller
{
    /**
     *
     * Store the resource
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request){
        $request->validate([
            'user_id' => 'required'
        ]);
        $user = User::findOrFail($request['user_id']);
        Follower::create(['user_id' => $request['user_id'], 'user_follower_id' => auth()->user()->id]);
        return redirect()->route('profile.index', $user->name);
    }

    /**
     *
     * Delete the resource
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete(Request $request, $id){

        $follower = Follower::findOrFail($id);
        $follower->delete();
        $user = User::findOrFail($request['user_id']);
        return redirect()->route('profile.index', $user->name);
    }
}
