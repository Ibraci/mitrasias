@extends('layouts.master', ['title' => 'Course Details'])

@section('content')
    <table class="striped centered">
        <tbody>
            <tr>
                <td><h5>Course Name:</h5></td>
                <td><h5>{{ $course->course_name }}</h5></td>
            </tr>
            <tr>
                <td><h5>Course Subject:</h5></td>
                <td><h5>{{ $course->course_subjects }}</h5></td>
            </tr>
            <tr>
                <td><h5>Course Fees:</h5></td>
                <td><h5>₹ {{ $course->course_fees }}</h5></td>
            </tr>
            <tr>
                <td><h5>Course Code:</h5></td>
                <td><h5>{{ $course->course_code }}</h5></td>
            </tr>
            <tr>
                <td><h5>Course Type:</h5></td>
                <td><h5>{{ $course->course_type}}</h5></td>
            </tr>
            <tr>
                <td><h5>Course Shift:</h5></td>
                <td><h5>{{ $course->course_shift }}</h5></td>
            </tr>
        </tbody>
    </table>

    @section('button-float')
        <div class="fixed-action-btn horizontal click-to-toggle">
            <a class="btn-floating btn-large red">
                <i class="material-icons">menu</i>
            </a>
            <ul>
                <li>
                    <a href="{{ route('courses.edit', $course) }}"  class="btn-floating red">
                        <i class="material-icons">edit</i>
                    </a>
                </li>
                <li>
                    <form action="{{ route('courses.destroy', $course) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="btn-floating red" type="submit">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    @endsection
@endsection
