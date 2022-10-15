@extends('layouts.main')
@section('content')

    <h1>{{$category->title}}</h1>

    <ul class="list-group">
        @foreach($category->lots as $lot)
        <li class="list-group-item">
            {{$lot->title}}
        </li>
        @endforeach
    </ul>

@endsection
