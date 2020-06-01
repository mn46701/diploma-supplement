<?php
/* @var array $students */
?>
@extends('layouts.default')

@section('content')

    <div class="subjects-wrapper">
        @foreach($students as $student)
            <a href="/report/{{$student->id}}" class="background-gradient">
                <div class="flex-center">{{$student->name}}</div>
            </a>
        @endforeach
    </div>


@endsection
