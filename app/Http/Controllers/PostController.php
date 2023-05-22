<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function create()
    {
        $id = Auth::id();
        $userProfile = Post::where('user_id', $id)->paginate(25);
        return view('dashboard', ['data' => $userProfile]);
    }
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $id = Auth::id();
        $userPost = $request->validate([
            'texted' => 'required|min:50|Max:3000',
            'category' => 'required',
        ]);
        $post = Post::firstOrCreate(
            [
                'user_id' => $id,
                'text' => $request->input('texted'),
                'category' => $request->input('category'),
            ],
            [
                'status' => 1,
            ]
        );
        $userPost = Post::where('user_id', $id)->paginate(25);
        return redirect()->route('Post', ['data' => $userPost]);
        /* return redirect()->route('Post', compact('data')); */
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
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
