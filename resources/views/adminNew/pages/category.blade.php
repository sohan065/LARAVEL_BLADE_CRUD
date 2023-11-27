@extends('adminNew.layout.master')

@section('title', 'Category')

@section('content')

    <div class="card">

        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="title text-center">
                    <h6>Category</h6>
                </div>
                <a href="{{ route('category.create') }}" class="btn btn-primary">add</a>
            </div>
            <table class="table table-success table-striped">
                <thead>

                    <tr bg-color="red">
                        <th scope="col">id</th>
                        <th scope="col"> name</th>
                        <th scope="col">icon</th>
                        <th scope="col">Actions</th>
                    </tr>

                </thead>
                <tbody>
                    @if ($categories)
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td><img src="{{ $category->icon }}" alt="icon" style="max-width: 50px;"></td>
                                <td>
                                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $category->id }}">Delete</a>
                                </td>

                            </tr>


                            <div class="modal fade" id="exampleModal{{ $category->id }}" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel{{ $category->id }}">Delete
                                                Confirmation</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure to delete?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <a href="{{ route('category.destroy', $category->id) }}" class="btn btn-danger">
                                                Yes</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <h1>no brand</h1>
                    @endif
                </tbody>
            </table>

        </div>
    </div>

@endsection
