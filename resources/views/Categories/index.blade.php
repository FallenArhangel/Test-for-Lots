@extends('layouts.main')
@section('content')
    <a href="{{route('categories.create')}}" role="button" class="btn btn-secondary">Create Category</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Edit</th>

            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td><a href="{{route('categories.show', $category)}}"> {{$category->title}} </a></td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
            <td><p data-placement="top" data-toggle="tooltip" title="Edit">
                    <a href="{{route('categories.edit', $category)}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a>
                </p>
            </td>
            <td>
                <form method="POST" action="{{route('categories.destroy', $category)}}">
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
