<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @return 'index' view
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Create a new Post model object
        $post = new Post();

        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'body' => 'required',
        ]);
        // Copy request data (representing the form inputs) to the
        // object's properties
        $post->title = $validated['title'];
        $post->slug = $validated['slug'];
        $post->description = $validated['description'];
        $post->body = $validated['body'];

        // Save the model's state to the database
        // (which means inserting a new record in this case)
        $post->save();
        // Redirect to the blog index page
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Request $request, $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'body' => 'required',
        ]);

        $post = Post::findorfail($post);

        $post->update($validated);

        return redirect()->route('posts.show', ['post' => $post->id]);
    }

    public function delete(Post $post)
    {
        return view('posts.delete', [
            'post' => $post
        ]);
    }


    public function destroy(Post $post)
    {

        // Delete the post from the database
        $post->delete();

        // Redirect to the blog show page
        return redirect()->route('posts.index')
            ->with('success', 'Post has been successfully deleted!');
    }

}
