@extends('adminNew.layout.master')

@section('title', 'Category')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div style="width: 300px; margin: 0 auto;">

        @if (isset($category->id))
            <form action="{{ route('category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
            @else
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
        @endif
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                value="{{ isset($category->id) ? $category->name : '' }}">

        </div>
        <div class="mb-3">
            <label for="logo" class="form-label">Icon</label>
            <input type="file" class="form-control" name="icon">
        </div>

        @if (isset($category->id))
            <button type="submit" class="btn btn-primary">update</button>
        @else
            <button type="submit" class="btn btn-primary">Submit</button>
        @endif
        </form>

    </div>


@endsection
