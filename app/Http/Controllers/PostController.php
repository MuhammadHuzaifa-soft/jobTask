<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_posts = Post::orderBy('id' , 'DESC')->with('skills')->simplePaginate(20);
   $posts = Post::where('user_id' , auth()->user()->id)->orderBy('id' , 'DESC')->with('skills')->simplePaginate(20);
   return view('posts.index' , ['posts' => $posts , 'all_posts' => $all_posts]);
    }
        public function filters(Request $request)
        {
            // dd($request);
             $all_posts = Post::filter($request)->orWhere('Full-Time' , $request->Full_Time)->orWhere('job_type',$request->job_type )->orderBy('id' ,
             'DESC')->with('skills')->simplePaginate(20);


               $post = Post::filter($request)->orWhere('Full-Time' ,$request->Full_Time)->orWhere('job_type',$request->job_type )->orderBy('id' ,'DESC')->with('skills')->simplePaginate(20);

               if($post || $all_posts){
                       return view('posts.index' , ['posts' => $post , 'all_posts' => $all_posts]);
               }
               else{
                     return redirect()->route('posts.index')->with('status' , 'Post not found');
               }



       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $post = new Post;
            $skills = Skill::get();
        return view('posts.create' , ['post' => $post , 'skills' => $skills]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $post = auth()->user()->posts()->create($request->all());
        $post->skills()->sync($request->skills);
         return redirect()->route('posts.index')->with('status' , 'Post created successfully');
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
     * @param  \App\Http\Requests\UpdatePostRequest  $request
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
}
