@extends('layouts.master', ['title' => 'Edit Batch'])

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
        <form class="col s12" method="POST" action="{{ route('batches.update', $batch) }}">

            {{ csrf_field() }}

            <div class="row">
                <div class="col s12">
                    <h5 class="admission-details-title">Edit Batch</h4>
                    <hr>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">book</i>
                    <input id="batch_name" type="text" class="validate" name="batch_name" value="{{ $batch->batch_name }}">
                    <label for="batch_name">Batch Name</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">bookmark</i>
                    <input id="batch_subject" type="text" class="validate" name="batch_subject" value="{{ $batch->batch_subject }}">
                    <label for="batch_subject">Batch Subject</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">book</i>
                    <select name="batch_course">
                        <option disabled selected>Batch Course</option>

                        @foreach ($courses as $course)
                            <option value="{{ $course->course_name }}" selected="{{ $batch->batch_course }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">date_range</i>
                    <select name="batch_academic_year">
                        <option value="" disabled selected>Choose the option</option>
                        <option value="{{ date('Y') + 1 }} - {{ date('Y') + 2 }}">{{ date('Y') + 1 }} - {{ date('Y') + 2 }}</option>
                        <option value="{{ date('Y') }} - {{ date('Y') + 1 }}">{{ date('Y') }} - {{ date('Y') + 1 }}</option>
                        <option value="{{ date('Y') - 1 }} - {{ date('Y') }}">{{ date('Y') - 1 }} - {{ date('Y') }}</option>
                    </select>
                    </select>
                    <label>Academic Year</label>
                </div>

                <div class="input-field col s4">
                    <i class="material-icons prefix">bookmark</i>
                    <input id="batch_number" type="text" class="validate" name="batch_number" value="{{ $batch->batch_number }}">
                    <label for="batch_number">Batch Number</label>
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
