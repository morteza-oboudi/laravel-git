@extends('layouts.app')
@section('content')
    <div dir="rtl">
        @if (count($people))
         <ul>
             @foreach($people as $person)
                <li>
                    {{$person}}
                </li>
             @endforeach
         </ul>

        @endif
    </div>
@stop