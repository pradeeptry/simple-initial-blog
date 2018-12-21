<?php

namespace App\Http\Controllers;

use App\Post;
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

      // $posts=Post::all();
      $posts=Post::paginate(1);
      //$posts=Post::where('category','actor')->paginate(2);             //  search by category equals to acto of the posts and show        //no need of get() method in pagination
       return view('show',compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-posts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $category= ($request->category) ?  $request->category:'Genral';
      $this->validate_form();
      $post = new \App\Post();
      $post->title=$request->title;
      $post->content=$request->content;
      $post->author=$request->author;
      $post->category=$category;
      $post->save();
      return redirect('/posts/create')->with('success','Post successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
    return view('update',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
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
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate(request(),[
            'title'=>'required',
            'content'=>'required',
            'author'=>'required',
            'category'=>'required',
        ]);

        $update_post=Post::find($post->id);
        $update_post->title=$request->title;
        $update_post->content=$request->content;
        $update_post->author=$request->author;
        $update_post->category=$request->category;
        $update_post->save();
        return redirect("posts/$post->id")->with('success','Post Sucessfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
     $post->delete();
     return redirect('/posts')->with('success','Post Successfully Deleted');
    }

    function validate_form(){
        $this->validate(request(),[
            'title'=>'required',
            'content'=>'required',
            'author'=>'required',
        ]

        );
    }
}
