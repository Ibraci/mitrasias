@extends('layouts.master', ['title' => 'Edit Student'])

@section('content')
    @if ($errors->any())
        <div class="row" id="alert_box">
            <div class="col s12 m12">
                <div class="card alert-color darken-1">
                    <div class="row">
                        <div class="col s12 m10">
                        @foreach ($errors->all() as $error)
                            <div class="card-content red-text">{{ $error }}</div>
                        @endforeach
                        </div>
                        <div class="col s12 m2">
                            <i class="fa fa-times icon_style" id="alert_close" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="row">
        <form class="col s12" method="POST" action="{{ route('students.update', $student) }}">

            {{ csrf_field() }}

            {{ method_field('PUT') }}

            <div class="row">
                <div class="col s12">
                    <h5 class="admission-details-title">Student Details</h4>
                    <hr>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="first_name" type="text" class="validate" name="first_name" value="{{ $student->first_name }}">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="middle_name" type="text" class="validate" name="middle_name" value="{{ $student->middle_name }}">
                    <label for="middle_name">Middle Name</label>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="last_name" type="text" class="validate" name="last_name">
                    <label for="last_name">Last Name</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="phone" type="tel" class="validate" name="phone" value="{{ $student->phone }}">
                    <label for="phone">Telephone</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" name="email" value="{{ $student->email }}">
                    <label for="email">Email</label>
                </div>

                <div class="input-field col s4">
                    <input name="date_of_birth" value="{{ $student->date_of_birth }}" id="date_of_birth" type="text" class="datepicker">
                    <label for="date_of_birth">Choose Date of Birth</label>
                </div>

                <div class="col s8">
                    <div class="col s3">
                        <p>Gender</p>
                    </div>

                    <div class="col s4">
                        <p>
                            <input name="gender" value="{{ $student->gender }}" type="radio" id="male" value="Male"/>
                            <label for="male">Male</label>
                        </p>
                    </div>

                    <div class="col s4">
                        <p>
                            <input name="gender" value="{{ $student->gender }}" type="radio" id="female" value="Female"/>
                            <label for="female">Female</label>
                        </p>
                    </div>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">school</i>
                    <input id="school_college" type="text" class="validate" name="school_college" value="{{ $student->school_college }}">
                    <label for="school_college">School/College</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">map</i>
                    <input id="address" type="text" class="validate" name="address" value="{{ $student->address }}">
                    <label for="address">Address</label>
                </div>
                <div class="file-field input-field">

                <div class="col s6">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Document</span>
                            <input type="file" name="document" value="{{ $student->document }}">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>

                <div class="col s6">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Pictures</span>
                            <input type="file" name="pictures" value="{{ $student->pictures }}">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>

                <div class="col s12">
                    <h5 class="admission-details-title">Guardian Details</h4>
                    <hr>
                </div>
                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="guardian_first_name" type="text" class="validate" name="guardian_first_name">
                    <label for="guardian_first_name">First Name</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="guardian_middle_name" type="text" class="validate" name="guardian_middle_name">
                    <label for="guardian_middle_name">Middle Name</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="guardian_last_name" type="text" class="validate" name="guardian_last_name">
                    <label for="guardian_last_name">Last Name</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">work</i>
                    <input id="guardian_occupation" type="text" class="validate" name="guardian_occupation">
                    <label for="guardian_occupation">Occupation</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">group</i>
                    <select>
                        <option disabled selected>Relationship</option>
                        <option value="Father">Father</option>
                        <option value="Mother">Mother</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="guardian_phone" type="tel" class="validate" name="guardian_phone">
                    <label for="guardian_phone">Telephone</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="guardian_email" type="email" class="validate" name="guardian_email">
                    <label for="guardian_email">Email</label>
                </div>

                <div class="col s12">
                    <div class="col s3">
                        <p>Gender</p>
                    </div>

                    <div class="col s3">
                        <p>
                            <input name="guardian_gender" type="radio" id="guardian_male" value="Male"/>
                            <label for="guardian_male">Male</label>
                        </p>
                    </div>

                    <div class="col s3">
                        <p>
                            <input name="guardian_gender" type="radio" id="guardian_female" value="Female"/>
                            <label for="guardian_female">Female</label>
                        </p>
                    </div>
                </div>

                <div class="col s12">
                    <h5 class="admission-details-title">Course Details</h4>
                    <hr>
                </div>

                <div class="input-field col s8">
                    <i class="material-icons prefix">book</i>
                    <select name="course_name">
                        <option value="" disabled selected>Choose the option</option>

                        @foreach ($courses as $course)
                            <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                    <label>Courses</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">forward_10</i>
                    <select name="course_quantity">
                        <option disabled selected>Choose the option</option>

                        @for ($qty = 1; $qty <= 10; $qty++)
                            <option value="{{ $qty }}">{{ $qty }}</option>
                        @endfor
                    </select>
                    <label>Course Quantity</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">date_range</i>
                    <select name="course_academic_year">
                        <option value="" disabled selected>Choose the option</option>
                        <option value="{{ date('Y') + 1 }} - {{ date('Y') + 2 }}">{{ date('Y') + 1 }} - {{ date('Y') + 2 }}</option>
                        <option value="{{ date('Y') }} - {{ date('Y') + 1 }}">{{ date('Y') }} - {{ date('Y') + 1 }}</option>
                        <option value="{{ date('Y') - 1 }} - {{ date('Y') }}">{{ date('Y') - 1 }} - {{ date('Y') }}</option>
                    </select>
                    </select>
                    <label>Academic Year</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">payment</i>
                    <select name="payment_method">
                        <option disabled selected>Choose the option</option>
                        <option value="Cash">Cash</option>
                        <option value="Debit Card - Credit Card ">Debit Card - Credit Card </option>
                        <option value="Bank Transfert">Bank Transfert</option>
                        <option value="Cashier">Cashier</option>
                        <option value="Wallet">Wallet</option>
                        <option value="Other">Other</option>
                    </select>
                    <label>Payment Method</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">forward_10</i>
                    <select name="payment_installment">
                        <option value="" disabled selected>Choose the option</option>

                        @for ($installment = 1; $installment <= 10; $installment++)
                            <option value="{{ $installment }}">{{ $installment }}</option>
                        @endfor
                    </select>
                    <label>Payment Installmet</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">account_balance</i>
                    <input id="course_fees" type="text" class="validate" name="course_fees">
                    <label for="course_fees">Course Fees</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">payment</i>
                    <select name="course_discount_method">
                        <option disabled selected>Choose the option</option>
                        <option value="Percentage">Percentage</option>
                        <option value="Amount">Amount</option>
                    </select>
                    <label>Discount Method</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">assignment_returned</i>
                    <input id="course_discount" type="text" class="validate" name="course_discount">
                    <label for="course_discount">Discount</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">description</i>
                    <textarea id="course_notes" class="materialize-textarea"></textarea>
                    <label>Notes</label>
                </div>

                {{-- Roll Number --}}
                <input type="hidden" name="rollno" value="{{ date('Y') }}-">

                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" onclick="viewData()" name="submit">Submit
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
@stop

@section('script')
    <script type="text/javascript">
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 200, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            close: 'Ok',
            closeOnSelect: true, // Close upon selecting a date,
            format: 'yyyy-mm-dd',
            formatSubmit: 'yyyy-mm-dd'
        });

        // alert box
        $('#alert_close').click(function(){
            $( "#alert_box" ).fadeOut( "slow", function() {
            });
        });
    </script>
@endsection
