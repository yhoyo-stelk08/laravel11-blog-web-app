<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $posts = DB::table('blog_posts')->get();
        return view('posts.index', ['posts' => $posts,],);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'bail|required|min:5|max:30',
            'content' => 'required|min:10',
        ]);
        $post = new BlogPost();
        $post->title = $request->input('title');
        $post->content = $request->input('content');

        $post->saveOrFail();

        return redirect()->route('posts.show',['post' => $post->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        
        $post = DB::table('blog_posts')->find($id);

        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
