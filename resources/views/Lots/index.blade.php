@extends('layouts.main')
@section('content')

    <a href="{{route('lots.create')}}" role="button" class="btn btn-secondary">Create new Lot</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope>Description</th>
            <th scope>Category</th>
            <th scope>Created at</th>
            <th scope>Updated at</th>
            <th scope>Edit</th>

            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lots as $lot)
            <tr>
                <td>{{$lot->id}}</td>
                <td><a href="{{route('lots.show', $lot)}}"> {{$lot->title}} </a></td>
                <td>{{$lot->description}}</td>
                <td>{{$lot->category->title}}</td>
                <td>{{$lot->created_at}}</td>
                <td>{{$lot->updated_at}}</td>
                <td><p data-placement="top" data-toggle="tooltip" title="Edit">
                        <a href="{{route('lots.edit', $lot)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                    </p>
                </td>
                <td>
                    <form method="POST" action="{{route('lots.destroy', $lot)}}">
                        @csrf
                        @method('DELETE')
                        <p data-placement="top" data-toggle="tooltip" title="Delete">
                            <button class="btn btn-danger btn-xs" data-title="Delete"
                                    data-toggle="modal" data-target=""><span
                                    class="glyphicon glyphicon-trash"></span></button>
                        </p>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
