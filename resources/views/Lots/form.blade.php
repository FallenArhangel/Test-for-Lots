@extends('layouts.main')
@section('content')

    <a href="{{route('lots.index')}}" role="button" class="btn btn-secondary">Back to Lots</a>

    <form method="POST"
          @if(isset($lot))
              action="{{route('lots.update', $lot)}}"
          @else
              action="{{route('lots.store')}}" method="POST"
        @endif
    >
        @isset($lot)
            @method('PUT')
        @endisset
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Lot title</label>
            <input type="text" value="{{isset($lot) ? $lot->title: null}}" placeholder="Lot title" class="form-control" id="title" aria-describedby="title" name="title">
        </div>
            <div class="mb-3">
                <label for="title" class="form-label">Lot description</label>
                <input type="text" value="{{isset($lot) ? $lot->description: null}}" placeholder="Lot description" class="form-control" id="title" aria-describedby="title" name="description">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Lot category</label>
                <select type="text" placeholder="CategoryProduct title" class="form-control" id="title" aria-describedby="title" name="category_id">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
