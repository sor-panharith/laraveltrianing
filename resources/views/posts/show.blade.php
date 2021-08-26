@extends('layouts.app')

@section('content')
<a href="http://localhost:7882/laraveltraning/public/posts">Go Back</a>
<h1>{{$post->title}}</h1> {{--show individual id--}} 
<div>
    {{$post->body}} {{--body is the name of the field--}}
</div>
<small>Witten on {{$post->created_at}}</small>
<a href="{{$post->id}}/edit">Edit</a>

{!!Form::open(['route'=> ['posts.destroy', $post->id], 'method' => 'POST'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete')}}
{!!Form::close()!!}

@endsection