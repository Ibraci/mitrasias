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
                    <td><a href="{{ route('students.show', $student) }}">{{ $student->first_name }}</a></td>
                    <td><a href="{{ route('students.show', $student) }}">{{ $student->last_name }}</a></td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student) }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: red"></i>
                        </a> &nbsp;&nbsp;&nbsp;
                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button style="background:none; border: none;" type="submit">
                                <i class="fa fa-trash-o" aria-hidden="true" style="color: red"></i>
                            </button>
                        </form> &nbsp;&nbsp;&nbsp;
                    </td>
                </tr>
            @endforeach

        </tbody>
        {{ $students->links() }}
    </table>

    @section('button-float')
        <div class="fixed-action-btn horizontal">
            <a href="{{ route('students.create') }}" class="btn-floating btn-large red">
                <i class="large material-icons">add</i>
            </a>
        </div>
    @endsection

@endsection
