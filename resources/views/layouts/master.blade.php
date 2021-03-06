<!doctype html>
<html lang>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0 maximum-scale=1.0 minimum-scale=1.0">
        <meta htttp-equiv="X-UA-Compatible" content="ie-edge">
        <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('/css/app.css') }}">
    <link rel="stylesheet" href="{{url('/css/blog.css') }}">

<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">My Blogs</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor02">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/posts/create')}}">Create Blogs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Update Blogs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/posts')}}">View Blogs</a>
                    </li>

                    <li class="nav-item">
                            <a class="nav-link" href="{{url('/contact')}}">Contact Form</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link float-right " href="{{url('login/google')}}">Login</a>
                                </li>
                  </ul>

                </div>
              </nav>

@yield('content')



<script src="{{url('/js/app.js')}}"></script>
<script src="{{url('/vue/vue.js')}}"></script>
</body>
</html>
