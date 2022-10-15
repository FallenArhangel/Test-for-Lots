@extends('layouts.main')
@section('content')

    <a href="{{route('lots.index')}}" role="button" class="btn btn-secondary">Back to Lots</a>

    <ul class="list-group">
        <li class="list-group-item">Lot Title : {{$lot->title}}</li>
        <li class="list-group-item">Lot description : {{$lot->description}}</li>
        <li class="list-group-item">Lot category : {{$lot->category->title}}</li>
    </ul>

@endsection
