@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
                <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                           {{$error}}<br/>
                        @endforeach
                </div>
        @endif

        {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title', 'عنوان', ['class' => 'control-label']) !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description', 'توضیحات', ['class' => 'control-label']) !!}
            {!! Form::textarea('description',null,['class'=>'form-control']) !!}
        </div>
            <div class="form-group">
                {!! Form::label('file', 'تصویر اصلی', ['class' => 'control-label']) !!}
                {!! Form::file('file',['class'=>'form-control']) !!}
            </div>
        <div class="form-group">
            {!! Form::submit('ذخیره',null,['class'=>'btn btn-primary']) !!}
        </div>
        {!! Form::close() !!}
    </div>



@stop