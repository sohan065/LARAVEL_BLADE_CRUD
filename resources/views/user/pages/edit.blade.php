@extends('user.layout.master')

@section('title', 'Update')


@section('content')

    <div class="row">
        @include('user.pages.message')
        <div class="col-md-6">

            <div class="card">
                <div class="card-body">
                    <h1 style="text-align:center ;">Image Update Form</h1>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('image.update', $selectedStudent->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Image Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $selectedStudent->name }}"
                                id="exampleInputEmail1" aria-describedby="emailHelp" required auto-focus>

                        </div>
                        <div class="mb-3">
                            <img style="width: 100px;" src="{{ asset('images/products/' . $selectedStudent->image_name) }}">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" name="image" id="image">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection
