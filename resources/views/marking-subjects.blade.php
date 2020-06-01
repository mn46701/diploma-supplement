@extends('layouts.default')

@section('content')
    <div class="subjects-wrapper">
        @foreach($subjects as $subject)

                <a href="/marking/{{$subject->id}}" class="background-gradient">
                    <div class="flex-center">{{$subject->name}}</div>
                </a>

        @endforeach
    </div>
@endsection
