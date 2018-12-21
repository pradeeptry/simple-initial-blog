@extends('layouts.master')
@section('title','Update Blog')

@section('content')

<div class="create-blog-wrapper">
        <div class="container">
            @include('layouts.messages')
        <form action="{{url("/posts/$post->id")}}" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <h4>Create Blog </h4>
                           <div class="form-group">
                              <label for="title">Title</label>
                           <input type="text" name="title" class="form-control" id="title" value="{{$post->title}}">
                          </div>
                          <div class="form-group">
                             <label for="exampleTextarea">Content</label>
                          <textarea class="form-control" name="content" id="exampleTextarea" rows="6">{{$post->content}}</textarea>
                          </div>
                          <div class="form-group">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" id="author" value="{{$post->author}}" >
                          </div>
                          <div class="form-group">
                                <label for="category">Category</label>
                          <input type="text" name="category" class="form-control" id="category" value="{{$post->category}}" >
                              </div>
                          <button type="submit" class="btn btn-primary">Submit</button>

                      </form>
                      <div class="form-delete">
                            <form action="{{ url("/posts/$post->id" )}}" method="post">
                               {{ csrf_field() }}
                                 <input type="hidden" name="_method" value="DELETE">
                               <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                      </div>
            </div>
        </div>

@endsection
