@extends('layouts.app')

@section('content')
    <h3><a href="{{Route('posts.edit',$post->id)}}">{{$post->title}}</a></h3>
    <div>{{$post->content}}</div>

@stop