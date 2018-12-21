@extends('layouts.master')
@section('title','Blogs')
@section('content')
<div class="jumbotron">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is a simple Blog Posting site.</p>
        <hr class="my-4">
        <div class="col-md-6"> <!-- left unspecified, .bmd-form-group will be automatically added (inspect the code) -->
            <label for="formGroupExampleInput" class="bmd-label-floating">Enter First Name</label>
            <input type="text" class="col-md-4" id="formGroupExampleInput">
          </div>
        <div class="col-md-6"> <!-- manually specified -->
            <label for="formGroupExampleInput2" class="bmd-label-floating">Enter last Name</label>
            <input type="text"  class="col-md-4" id="formGroupExampleInput2">
          </div>

        <p> Create a New Blog</p>
        <p class="lead">
        <a class="btn btn-primary btn-lg" href="{{url('/posts/create')}}" role="button">Create New Blog</a>
        </p>
      </div>


      <script>
      var app =new Vue({
el:'#app',
data:{
message:'Hello Vue World'
}


})
      </script>
@endsection
