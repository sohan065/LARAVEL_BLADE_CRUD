@extends('user.layout.master')

@section('title','Home Page')


@section('content')

<div class="card">

    <div class="card-body">
        <h1 style="text-align: center;">Student Management System</h1>
        <table class="table table-success table-striped">
            <thead>

                <tr bg-color="red">
                    <th scope="col">#</th>
                    <th scope="col">Registration Id</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Information</th>
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
                </tr>
                @endforeach

            </tbody>
        </table>

    </div>
</div>



@endsection