<?php
/**
 * Created by PhpStorm.
 * User: yves
 * Date: 10/15/2017
 * Time: 5:57 PM
 */

namespace App\Http\Controllers;

use App\Post;


class PostController extends Controller
{
    public function posts() {
        $posts = Post::all();

        return view('posts', compact('posts', $posts));
    }

    public function post($id) {
        $post = Post::find($id);

        return view('post', compact('post', $post));
    }
}