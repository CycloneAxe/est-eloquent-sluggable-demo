<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

use App\Http\Requests;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at', '<=', Carbon::now())
                ->orderBy('published_at', 'desc')
                ->paginate(config('blog.posts_per_page'));

        return view('blogs.index', compact('posts'));
    }

    public function showPost($id)
    {
        $post = Post::whereId($id)->firstOrFail();
        return view('blogs.post')->withPost($post);
    }
}
