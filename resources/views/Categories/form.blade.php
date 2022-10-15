@extends('layouts.main')
@section('content')
    <a href="{{route('categories.index')}}" role="button" class="btn btn-secondary">Back to Category</a>

    <form method="POST"
          @if(isset($category))
              action="{{route('categories.update', $category)}}"
          @else
              action="{{route('categories.store')}}" method="POST"
        @endif
    >
        @isset($category)
            @method('PUT')
        @endisset
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Category title</label>
            <input type="text" value="{{isset($category) ? $category->title: null}}" placeholder="Category title" class="form-control" id="title" aria-describedby="title" name="title">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
