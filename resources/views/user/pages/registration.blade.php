@extends('user.layout.master')

@section('title','Registration Form')




@section('content')



<div class="card">
    <div class="card-body">
        <h1 style="text-align:center ;">Registration Form</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{route('create.student')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Student Name</label>
                <input type="text" class="form-control" name="student_name" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Registration Number</label>
                <input type="number" class="form-control" name="registration_no" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Department Name</label>
                {{-- <input type="text" class="form-control" name="department_name" id="exampleInputPassword1"> --}}
                <select class="form-select" name="department_name" aria-label="Default select example">
                <option selected>select department</option>
                @foreach($dept as $dept)
                <option value="{{$dept->name}}">{{$dept->name}}</option>
                @endforeach
             </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <textarea class="form-control" name="info" id="exampleFormControlTextarea1" rows="3" cell="16"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>




@endsection