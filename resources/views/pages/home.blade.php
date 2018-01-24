@extends('layouts.master', ['title' => 'Search'])

@section('content')
    <div class="row">
        <form class="col s12" method="GET" action="">
            <div class="row">

                <div class="input-field col s6">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" type="text" class="validate" name="phone">
                    <label for="icon_telephone">Telephone</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">email</i>
                    <input id="icon_telephone" type="email" class="validate" name="email">
                    <label for="icon_telephone">Email</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="f_name">
                    <label for="icon_prefix">First Name</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="m_name">
                    <label for="icon_prefix">Middle Name</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate" name="l_name">
                    <label for="icon_prefix">Last Name</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">book</i>
                    <select name="course">
                        <option value="" disabled selected>Choose your option</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                    <label>Courses</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit" onclick="viewData()" name="submit">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>
@endsection
