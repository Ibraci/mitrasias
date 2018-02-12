@extends('layouts.master', ['title' => 'Send Email'])

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
        <form class="col s12" method="POST" action="{{ route('emails.store') }}">

            {{ csrf_field() }}

            <div class="row">
                <div class="col s12">
                    <h5 class="admission-details-title">Send Email</h4>
                    <hr>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="emailId" type="text" class="validate" name="emailId">
                    <label for="emailId">Email*</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">bookmark</i>
                    <input id="emailSubject" type="text" class="validate" name="emailSubject">
                    <label for="emailSubject">Subject*</label>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">description</i>
                    <textarea id="emailMessage" name="emailMessage" class="materialize-textarea"></textarea>
                    <label for="emailMessage">Text*</label>
                </div>

                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="submit">Send
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
