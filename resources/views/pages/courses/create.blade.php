@extends('layouts.master', ['title' => 'Create Course'])

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
        <form class="col s12" method="POST" action="{{ route('courses.store') }}">

            {{ csrf_field() }}

            <div class="row">
                <div class="col s12">
                    <h5 class="admission-details-title">Create Course</h4>
                    <hr>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">book</i>
                    <input id="course_name" type="text" class="validate" name="course_name">
                    <label for="course_name">Course Name</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">bookmark</i>
                    <input id="course_sujects" type="text" class="validate" name="course_sujects">
                    <label for="course_sujects">Course Subject</label>
                </div>

                <div class="input-field col s3">
                    <i class="material-icons prefix">label</i>
                    <input id="course_code" type="text" class="validate" name="course_code">
                    <label for="course_code">Course Code</label>
                </div>

                <div class="input-field col s3">
                    <i class="material-icons prefix">portable_wifi_off</i>
                    <select name="course_type">
                        <option disabled selected>Course Type</option>
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>
                </div>

                <div class="input-field col s3">
                    <i class="material-icons prefix">schedule</i>
                    <select name="course_shift">
                        <option disabled selected>Course Shift</option>
                        <option value="Morning">Morning</option>
                        <option value="Afternoon">Afternoon</option>
                        <option value="Evening">Evening</option>
                    </select>
                </div>

                <div class="input-field col s3">
                    <i class="material-icons prefix">payment</i>
                    <input id="course_fees" type="text" class="validate" name="course_fees">
                    <label for="course_fees">Course Fees</label>
                </div>

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
        // alert box
        $('#alert_close').click(function(){
            $( "#alert_box" ).fadeOut( "slow", function() {
            });
        });
    </script>
@endsection
