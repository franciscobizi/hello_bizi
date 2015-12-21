@extends('layouts.home')

@section('title', 'My Blog')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    <p>OUR POSTS</p>
        
    <nav>
            <ul class="pagination pagination-sm">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
    </nav>
    
@endsection