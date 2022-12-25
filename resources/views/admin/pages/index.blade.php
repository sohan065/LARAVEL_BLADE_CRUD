@extends('admin.layout.master')

@section('title','Home Page')


@section('content')

<div class="card">

    <div class="card-body">
        <h1 style="text-align: center;">Student Management System</h1>
        <table class="table table-success table-striped">
            <thead>

                <tr bg-color="red">
                    <th scope="col">id</th>
                    <th scope="col">Registration Id</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Information</th>
                    <th scope="col">Actions</th>
                </tr>

            </thead>
            <tbody>
                @foreach($allstudent as $students)
                <tr>
                    <th scope="row">{{$students->id}}</th>
                    <td>{{$students->registration_id}}</td>
                    <td>{{$students->name}}</td>
                    <td>{{$students->department_name}}</td>
                    <td>{{$students->info}}</td>
                    <td>
                        <a href="{{route('edit',$students->id)}}" class="btn btn-success">Edit</a>
                        <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"> Delete </a>
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
                <a href="{{route('delete',$students->id)}}" class="btn btn-danger"> Yes</a>

            </div>
        </div>
    </div>
</div>