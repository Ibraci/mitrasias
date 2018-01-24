@extends('layouts.master', ['title' => 'Leads'])


@section('content')
    <span class="card-title">Leads</span>
    <table class="responsive-table bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th style="width: 100px">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Ibrahim CISSE</td>
            <td>ibraci1960@gmail.com</td>
            <td>Phone</td>
            <td>
                <a href="#"> <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
                <a data-panel-id="id" id="myBtn2" onClick="deletedc(this)"> <i class="fa fa-trash-o" aria-hidden="true" style="color: red"></i></a> &nbsp;&nbsp;&nbsp;
            </td>
        </tr>
        </tbody>
    </table>
@endsection
