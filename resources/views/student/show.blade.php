@extends('layout.layout')
@section('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            
            <div class="content">
                <div class="title m-b-md">
                    Student's home page
                </div>
                <p>{{$student->id}} - {{ $student->st_name }} - {{ $student->st_lastname }}</p>
            </div>
        </div>
        @endsection