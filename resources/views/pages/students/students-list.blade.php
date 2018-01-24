@extends('layouts.master', ['title' => 'Students List'])

@section('content')
    <span class="card-title">Students</span>
    <table class="responsive-table bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th style="width: 100px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->fisrt_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>
                <a href="#"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
                <a data-panel-id="id" id="myBtn2" onClick="deletedc(this)"> <i class="fa fa-trash-o" aria-hidden="true" style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
