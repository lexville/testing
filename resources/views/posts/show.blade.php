@extends('welcome')
@section('content')
    @foreach($posts as $post)
    <p>
        {{ $post->posts }}
    </p>
    @endforeach
@stop
