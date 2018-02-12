@extends('layouts.master', ['title' => 'Student Details'])

@section('content')
    <table class="striped centered">
        <tbody>
            <h3>Student Details</h3>
            <tr>
                <td><h6>Roll Number:</h6></td>
                <td><h6>{{ $student->rollno }}</h6></td>
            </tr>

            <tr>
                <td><h6>First Name:</h6></td>
                <td><h6>{{ $student->first_name }}</h6></td>
            </tr>

            <tr>
                <td><h6>Middle Name:</h6></td>
                <td><h6>{{ $student->middle_name }}</h6></td>
            </tr>

            <tr>
                <td><h6>Last Name:</h6></td>
                <td><h6>{{ $student->last_name }}</h6></td>
            </tr>

            <tr>
                <td><h6>Email Address:</h6></td>
                <td><h6>{{ $student->email }}</h6></td>
            </tr>

            <tr>
                <td><h6>Phone Number:</h6></td>
                <td><h6>{{ $student->phone }}</h6></td>
            </tr>

            <tr>
                <td><h6>Gender:</h6></td>
                <td><h6>{{ $student->gender }}</h6></td>
            </tr>

            <tr>
                <td><h6>Address:</h6></td>
                <td><h6>{{ $student->address }}</h6></td>
            </tr>

            <tr>
                <td><h6>Date of Birth:</h6></td>
                <td><h6>{{ $student->date_of_birth }}</h6></td>
            </tr>

            <tr>
                <td><h6>School/Colege:</h6></td>
                <td><h6>{{ $student->school_college}}</h6></td>
            </tr>
        </tbody>
    </table>
    <table class="striped centered">
        <tbody>
            <h3>Guardian Details</h3>
            <tr>
                <td><h6>First Name:</h6></td>
                <td><h6>{{ $student->guardian_first_name }}</h6></td>
            </tr>

            <tr>
                <td><h6>Middle Name:</h6></td>
                <td><h6>{{ $student->guardian_middle_name }}</h6></td>
            </tr>

            <tr>
                <td><h6>Last Name:</h6></td>
                <td><h6>{{ $student->guardian_last_name }}</h6></td>
            </tr>

            <tr>
                <td><h6>Email Address:</h6></td>
                <td><h6>{{ $student->guardian_email }}</h6></td>
            </tr>

            <tr>
                <td><h6>Phone Number:</h6></td>
                <td><h6>{{ $student->guardian_phone }}</h6></td>
            </tr>

            <tr>
                <td><h6>Gender:</h6></td>
                <td><h6>{{ $student->guardian_gender }}</h6></td>
            </tr>

            <tr>
                <td><h6>Relationship:</h6></td>
                <td><h6>{{ $student->guardian_relationship }}</h6></td>
            </tr>

            <tr>
                <td><h6>Occupation:</h6></td>
                <td><h6>{{ $student->guardian_occupation }}</h6></td>
            </tr>
        </tbody>
    </table>

    <table class="striped centered">
        <tbody>
            <h3>Course Details</h3>
            <tr>
                <td><h6>Course Name:</h6></td>
                <td><h6>{{ $student->course_name }}</h6></td>
            </tr>

            <tr>
                <td><h6>Course Quantity:</h6></td>
                <td><h6>{{ $student->course_quantity }}</h6></td>
            </tr>

            <tr>
                <td><h6>Academic Year:</h6></td>
                <td><h6>{{ $student->course_academic_year }}</h6></td>
            </tr>

            <tr>
                <td><h6>Payment Method:</h6></td>
                <td><h6>{{ $student->payment_method }}</h6></td>
            </tr>

            <tr>
                <td><h6>Payment Installment:</h6></td>
                <td><h6>{{ $student->payment_installment }}</h6></td>
            </tr>

            <tr>
                <td><h6>Course Fees:</h6></td>
                <td><h6>₹ {{ $student->course_fees * $student->course_quantity }}</h6></td>
            </tr>

            <tr>
                <td><h6>Course Fees per Installmet:</h6></td>
                <td><h6>₹ {{ $student->course_fees / $student->payment_installment }}</h6></td>
            </tr>

            {{-- <tr>
                <td><h6>Course Fees Paid:</h6></td>
                <td><h6>₹ {{ $student-> }}</h6></td>
            </tr> --}}

            {{-- <tr>
                <td><h6>Course Fees Remaning:</h6></td>
                <td><h6>₹ {{ $student->guardian_occupation }}</h6></td>
            </tr> --}}
        </tbody>
    </table>

    @section('button-float')
        <div class="fixed-action-btn horizontal click-to-toggle">
            <a class="btn-floating btn-large red">
                <i class="material-icons">menu</i>
            </a/>
            <ul>
                <li>
                    <a href="{{ route('students.edit', $student) }}" class="btn-floating red">
                        <i class="material-icons">edit</i>
                    </a>
                </li>
                <li>
                    <form action="{{ route('students.destroy', $student) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    @endsection
@endsection
