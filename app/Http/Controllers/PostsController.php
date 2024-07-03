<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Models\BlogPost;
use App\Http\Requests\StorePost;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $posts = DB::table('blog_posts')->get();
        return view('posts.index', ['posts' => $posts,], );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePost $request)
    {
        $validated_data = $request->validated();
        // $post = new BlogPost();
        // $post->title = $validated_data['title'];
        // $post->content = $validated_data['content'];

        // $post->saveOrFail();

        $post = BlogPost::create($validated_data); //use mass assignment to BlogPost
        // create an flash message 
        $request->session()->flash('status', 'Post has been created');

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {

        $post = DB::table('blog_posts')->find($id);

        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('posts.edit', ['post' => BlogPost::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePost $request, string $id)
    {
        $post = BlogPost::findOrFail($id);

        $validated_data = $request->validated();
        $post->fill($validated_data);
        $post->save();

        $request->session()->flash('status', 'Blog post was updated!');

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = BlogPost::findOrFail($id);
        $post->delete();

        session()->flash('status', 'The post was deleted');

        return redirect()->route('posts.index');
    }
}
