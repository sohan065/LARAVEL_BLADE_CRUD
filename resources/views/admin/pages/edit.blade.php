@extends('admin.layout.master')

@section('title','Update Page')


@section('content')



<div class="card">
    <div class="card-body">
        <h1 style="text-align:center ;">Update Information</h1>

        <form action="{{route('update',$selectedstudent->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student Name</label>
                <input type="text" class="form-control" name="student_name" id="exampleInputEmail1" value="{{$selectedstudent->name}}">

            </div>
            <div class=" mb-3">
                <label for="exampleInputPassword1" class="form-label">Registration Number</label>
                <input type="number" class="form-control" name="registration_no" id="exampleInputPassword1" value="{{$selectedstudent->registration_id}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Department Name</label>
                <input type="text" class="form-control" name="department_name" id="exampleInputPassword1" value="{{$selectedstudent->department_name}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Information</label>
                <textarea class="form-control" name="info" id="exampleFormControlTextarea1" rows="3" cell="16">{{$selectedstudent->info}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
</div>

@endsection