@extends('layouts.master')
@section('title','Contact Form')
@section('content')

<div class="create-blog-wrapper">
        <div class="container">


<div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <br>
    <form action="{{url('/contact1')}}" method="POST">
        {{ csrf_field() }}
          <div class="form-group">
            <label name="email">Email</label>
            <input id="email" name="email" class="form-control">
          </div>
           <div class="form-group">
                <label name="subject">Subject</label>
                <input id="subject" name="subject" class="form-control">
            </div>
            <div class="form-group">
                    <label name="message1">Message</label>
                    <textarea id="message1" name="message1" class="form-control" placeholder="Type your text here">
                    </textarea>
                </div>
                 <input type="submit" value="send-message">
               </form>
            </div>
           </div>
        </div>
</div>
@endsection
