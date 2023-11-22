@extends('adminNew.layout.master')

@section('title', 'Brand')

@section('content')

    <div class="card">

        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="title text-center">
                    <h6>Brands</h6>
                </div>
                <a href="{{ route('brand.store') }}" class="btn btn-primary">add</a>
            </div>
            <table class="table table-success table-striped">
                <thead>

                    <tr bg-color="red">
                        <th scope="col">id</th>
                        <th scope="col"> name</th>
                        <th scope="col">logo</th>
                        <th scope="col">Actions</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <th scope="row">{{ $brand->id }}</th>
                            <td>{{ $brand->name }}</td>
                            <td><img src="{{ $brand->logo }}" alt="Brand Logo" style="max-width: 50px;"></td>
                            <td>
                                <a href="{{ route('edit', $brand->id) }}" class="btn btn-success">Edit</a>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"> Delete </a>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

@endsection
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <a href="{{ route('delete', $brand->id) }}" class="btn btn-danger"> Yes</a> --}}

            </div>
        </div>
    </div>
</div>
