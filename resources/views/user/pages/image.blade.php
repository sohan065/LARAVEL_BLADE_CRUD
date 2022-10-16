@extends('user.layout.master')

@section('title','ImageCurd Page')


@section('content')



<div class="row">
    <div class="col-md-6">

        <div class="card">
            <div class="card-body">
                <h1 style="text-align:center ;">Image Upload Form</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" required auto-focus>

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
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <table class="table table-success table-striped">
                    <thead>

                        <tr bg-color="red">

                            <th scope="col"> Id</th>
                            <th scope="col">Student Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Actions</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach($selectAll as $students)
                        <tr>
                            <th scope="row">{{$students->id}}</th>
                            <td>{{$students->name}}</td>
                            <td>
                                <img style="width: 100px;" src="{{asset('images/products/'.$students->image_name)}}">

                            </td>

                            <td>
                                <a href="{{route('image.edit',$students->id)}}" class="btn btn-success">edit</a>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Delete </a>

                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
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
                <a href="{{route('image.delete',$students->id)}}" class="btn btn-danger"> Yes</a>

            </div>
        </div>
    </div>
</div>