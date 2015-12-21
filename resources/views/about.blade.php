@extends('layouts.home')

@section('title', 'Articles')

@section('sidebar')
    
        <div class="blog-masthead">
            <div class="container">
              <nav class="blog-nav">
                <a class="blog-nav-item " href="http://localhost/laravel_blog/public/">Home</a>
                <a class="blog-nav-item " href="http://localhost/laravel_blog/public/create">New article</a>
                <a class="blog-nav-item active" href="http://localhost/laravel_blog/public/About">About</a>
                
                
              </nav>
            </div>
        </div>    
@endsection

@section('content')
    <br><br>
    <p>ABOUT US</p>
    <p>
        Wi are the team from laravel that help you to work with the best PHP framework. The laravel blog it's an place where you can learn more about this framework and to show you the best way to build pawerfull web app.  
    </p>
 
@endsection
