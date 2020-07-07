<?php


namespace App\Http\Controllers;

use DB;
use App\Post;


class PostsController extends Controller
{
    public function Show($slug)
    {
        //$post = DB::table('posts')->where('slug', $slug)->first();

        $post = Post::where('slug', $slug)->firstorfail();

        if(! $post){
            abort(404);
        }
        return view('post', [
                'post' => $post
            ]);

    }

}
