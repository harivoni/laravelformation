<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\AssignOp\Pow;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();


        return view('articles', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('form');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('article', [
            'post' => $post
        ]);
    }


    public function store(Request $request)
    {
        //dd($request);
        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;

        // $post->save();

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('welcome');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect()->route('welcome');
    }

    public function updateshow($id)
    {
        $post = Post::find($id);

        return view('articleShowUpdate', [
            'post' => $post
        ]);
    }
    public function update(Request $request)
    {
        $post = Post::find($request->id);
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect()->route('post.show', $id = "$request->id");
    }

    public function contact()
    {
        return view('contact');
    }
}
