@extends('layouts.home')

@section('title', 'Edit article')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    
        
            <h3>Edite {{$news->title}} </h3>
            <a href="http://localhost/laravel_blog/public/update/imagem/{{$news->id}}"><button  class="btn-block" value="Search Image">Search Image</button></a>
            <br><br>
            <form method="get" action="http://localhost/laravel_blog/public/update/{{$news->id}}">
            @if(isset($showImage))
                {!! $showImage !!}
                <br><br>
        
            {!! csrf_field()!!}
            {!! Form::text('title',$news->title,['class'=>'form-control']) !!}
            <br><br>
            {!! Form::text('author',$news->author,['class'=>'form-control']) !!}
            <br><br>
            {!! Form::hidden('picture',$showImage,['class'=>'form-control']) !!}
            <br><br>
            {!! Form::textarea('news',$news->news,['class'=>'form-control']) !!}
            <br><br>
            @else

            <br><br>
        
            {!! csrf_field()!!}
            {!! Form::text('title',$news->title,['class'=>'form-control']) !!}
            <br><br>
            {!! Form::text('author',$news->author,['class'=>'form-control']) !!}
            <br><br>
            {!! Form::text('picture',$news->picture,['class'=>'form-control']) !!}
            <br><br>
            {!! Form::textarea('news',$news->news,['class'=>'form-control']) !!}
            <br><br>
            @endif
            <button type="submit" class="btn-block" value="Edit article">EDIT</button>
        </form>
<br><br>
@endsection

