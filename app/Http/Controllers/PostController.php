<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
		$request->validate($this->getRules());

		$post = new Post();

		$post->content = $request->postcontent;
		$post->label = $request->label;
		$post->link = $request->link;
		$post->user_id = $request->user()->id;

		$post->save();

		if($request->hasFile('images')) {
			$post->uploadImages($request->file('images'));
		}

		if($request->hasFile('videos')) {
			$post->uploadVideos($request->file('videos'));
		}

		return redirect()->route('home');
	}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

	public function getRules() {
		return [
			'postcontent' => 'required',
		];
	}
}
