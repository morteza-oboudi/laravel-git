@extends('layouts.app')

@section('content')
    <h1>{{__('message.welcome',['name' => 'مرتضی'])}}</h1>
    <h1>{{trans_choice('message.cars', 0, ['value'=>210])}}</h1>
@stop