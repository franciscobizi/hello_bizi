@extends('layouts.home')

@section('title', 'Articles')

@section('sidebar')
    
        <div class="blog-masthead">
            <div class="container">
              <nav class="blog-nav">
                <a class="blog-nav-item " href="http://localhost/laravel_blog/public/">Home</a>
                <a class="blog-nav-item active" href="http://localhost/laravel_blog/public/create">New article</a>
                <a class="blog-nav-item " href="http://localhost/laravel_blog/public/about">About</a>
                
                
              </nav>
            </div>
        </div>    
@endsection

@section('content')
    <br><br>
    <p>CREATE NEW ARTICLE</p>
        
     <form method="get" action="http://localhost/laravel_blog/public/store">
        
        {!! csrf_field()!!}
            {!! Form::text('title','',['class'=>'form-control','placeholder'=>'Title']) !!}
            <br>
            {!! Form::text('author','',['class'=>'form-control','placeholder'=>'Author']) !!}
            <br>
            {!! Form::hidden('picture','Picture',['class'=>'form-control']) !!}
          
            {!! Form::textarea('news','',['class'=>'form-control','placeholder'=>'Description']) !!}
            <br>
            
            <button class="btn btn-block" value="Create news">Create</button>
    </form>
   
        
     
@endsection