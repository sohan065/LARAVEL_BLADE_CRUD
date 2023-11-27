@extends('adminNew.layout.master')

@section('title', 'Brand')

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
    <div class="card card-primary">
        <div class="card-header">
            @if (isset($brand->id))
                <h1>Update Brand</h1>
            @else
                <h1>Add Brand</h1>
            @endif
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        @if (isset($brand->id))
            <form action="{{ route('brand.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
            @else
                <form action="{{ route('brand.store') }}" method="POST" enctype="multipart/form-data">
        @endif

        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                    value="{{ isset($brand->id) ? $brand->name : '' }}">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="logo">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            @if (isset($brand->id))
                <button type="submit" class="btn btn-primary">Update</button>
            @else
                <button type="submit" class="btn btn-primary">Submit</button>
            @endif
        </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
