@extends('layouts.master', ['title' => 'Courses'])

@section('content')
    <span class="card-title">Courses</span>
    <table class="responsive-table bordered">
        <thead>
        <tr>
            <th>Code</th>
            <th>Name</th>
            <th>Fees</th>
            <th>Types</th>
            <th>Shift</th>
            <th style="width: 100px">Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>₹ {{ $course->course_fees }}</td>
                    <td>{{ $course->course_type }}</td>
                    <td>{{ $course->course_shift }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course) }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true" style="color: red"></i>
                        </a> &nbsp;&nbsp;&nbsp;
                        <form action="{{ route('courses.destroy', $course) }}" method="POST">
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
    </table>

    @section('button-float')
        <div class="fixed-action-btn horizontal">
            <a href="{{ route('courses.create') }}" class="btn-floating btn-large red">
                <i class="large material-icons">add</i>
            </a>
        </div>
    @endsection

@endsection
