@extends('adminNew.layout.master')

@section('title', 'Brand')

@section('content')

    <div style="width: 300px; margin: 0 auto;">
        <form action="{{ route('create.brand') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" name="logo">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    {{-- <div class="card">
        <div class="card-body">
            <h1 style="text-align:center ;">Add Brand</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('create.brand') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Brand Name</label>
                    <input type="text" class="form-control" name="brand_name">

                </div>
                <div class="mb-3">
                    <label class="form-label">Logo</label>
                    <input type="file" class="form-control" name="logo">
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>

        </div>
    </div> --}}


@endsection
