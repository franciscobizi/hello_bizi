@extends('layouts.home')

@section('title', 'My Blog')

@section('sidebar')
    @parent

    
@endsection
            
@section('content')
            <div class="blog-header">
                <h1 class="blog-title">LARAVEL BLOG</h1>
                <p class="lead blog-description">The best blog where you can find all about the laravel.</p>
            </div>
    <p>LIST OF ARTICULES</p>
  
        
        <table class="table-striped">
            <tr><td> TITLE </td> <td > AUTHOR </td> <td > ACTIONS </td></tr>
            @foreach($news as $new)
            <tr><td >{{ $new->title }} </td> <td >{{ $new->author }} </td> <td ><a href="http://localhost/laravel_blog/public/delete/{{ $new->id }}">Delete</a> / <a href="http://localhost/laravel_blog/public/edit/{{$new->id}}">Edit</a></td></tr>
            @endforeach
            
        </table>
       
        
    
    
@endsection