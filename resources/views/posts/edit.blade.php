@extends('layouts.app')

@section('content')

    <h3>ویرایش پست</h3>
    <div class="container">
        @if (\Illuminate\Support\Facades\Auth::user()->can('update',$post))
        {!! Form::model($post,['method'=>'PATCH', 'action'=>['PostsController@update',$post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title', 'عنوان', ['class' => 'control-label']) !!}
            {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'توضیحات', ['class' => 'control-label']) !!}
            {!! Form::textarea('description',$post->content,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('به روزرسانی',['class'=>'btn btn-warning']) !!}
        </div>
        {!! Form::model($post,['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('حذف ',['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    {!! Form::close() !!}

        @endif

@stop