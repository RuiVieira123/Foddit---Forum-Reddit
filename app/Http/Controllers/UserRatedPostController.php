<?php

namespace App\Http\Controllers;

use App\UserRatedPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRatedPostController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($post_id)
    {
        $user_rated_posts = UserRatedPost::where('post_id', $post_id)->where('user_id', Auth::id())->get();
        if ($user_rated_posts != null) {
            if ($user_rated_posts->voted == true) {
                $user_rated_posts->voted = true;
            } else {
                $user_rated_posts->voted = false;
            }
        } else {
            $upvote = new UserRatedPost();

            $upvote->save();
        }

        return false;
    }
}
