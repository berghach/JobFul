<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $validatedData = $request->validated();

        $post = new Post();
        $post->post_type = $validatedData['post_type'];
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->industry = $validatedData['industry'];
        $post->function = $validatedData['function'];
        $post->location = $validatedData['location'];
        $post->user_id = $validatedData['user_id']; 

        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $validatedData = $request->validated();

        $post->update([
            'post_type' => $validatedData['post_type'],
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'industry' => $validatedData['industry'],
            'function' => $validatedData['function'],
            'location' => $validatedData['location'],
        ]);

        if (isset($validatedData['section'])) {
            foreach ($validatedData['section'] as $section) {
                $post->sections()->updateOrCreate(
                    ['key' => $section['key']],
                    ['value' => $section['value']]
                );
            }
        }

        // Redirect or return a response as needed
        return redirect()->route('posts.show', $post)->with('success', 'Post updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
    }
}
