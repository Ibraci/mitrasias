@extends('layouts.master', ['title' => 'Enquiry'])


@section('content')

    <div class="row">
        <form class="col s12" method="POST" action="">
            <!-- <div class="row"> -->
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s3"><a class="active" href="#test1">Student Details</a></li>
                    <li class="tab col s3"><a href="#test2">School/College</a></li>
                    <li class="tab col s3"><a href="#test3">Marketing</a></li>
                    <li class="tab col s3"><a href="#test4">Course</a></li>
                </ul>
            </div>
            <div id="test1" class="col s12">
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
                    <select name="gender" id="gender">
                        <option value="" disabled selected>Choose your option</option>

                            <option value="male">Male</option>
                            <option value="female">Female</option>

                    </select>
                    <label>Gender</label>
                </div>

                <!-- <div class="input-field col s6"> -->
                    <div class="switch col s3">
                        Email
                        <label>
                          Off
                          <input type="checkbox" name="notif_email">
                          <span class="lever"></span>
                          On
                        </label>
                    </div><br>

                    <div class="switch col s3">
                        SMS
                        <label>
                          Off
                          <input type="checkbox" name="notif_sms">
                          <span class="lever"></span>
                          On
                        </label>
                    </div>
                <!-- </div> -->

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
                    <input id="mapsLocation" type="text" class="validate" name="mapsLocation">
                    <label for="icon_prefix">Enter your city</label>
                </div>

                <div class="input-field col s6">
                    <div class="card col s6" id="my_camera">

                    </div>
                    <div class="card col s6" id="results">

                    </div>
                    <div class="input-field col s12">
                        <input class="btn waves-effect waves-light" type="button" value="Take Snapshot" onClick="take_snapshot()">
                    </div>
                </div>
            </div>
            <div id="test2" class="col s12">
                <div class="input-field col s12">
                    <select name="college">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="IIT Delhi">IIT Delhi</option>
                        <option value="central university">central university</option>
                        <option value="Local college">Local college</option>
                        <option value="NITs">NITs</option>
                        <option value="Regional college">Regional college</option>
                        <option value="State board">State board</option>
                    </select>
                    <label>School/College</label>
                </div>
                <div class="input-field col s12">
                    <select name="academic_status">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="passed">Passed</option>
                        <option value="failed">Failed</option>
                        <option value="studying">Studying</option>
                    </select>
                    <label>Status</label>
                </div>
                <div class="input-field col s12">
                    <select name="board">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="cbse">CBSE</option>
                        <option value="icse">ICSE</option>
                        <option value="state">State Board</option>
                    </select>
                    <label>Board</label>
                </div>
            </div>
            <div id="test3" class="col s12">
                <div class="input-field col s12">
                    <select name="councellor">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="name">role</option>
                        {{-- Fecth All role from the database --}}
                    </select>
                    <label>Councellor</label>
                <div class="input-field col s12">
                    <select name="category">
                        <option value="" disabled selected>Choose your option</option>

                        <option value="hot">Hot</option>
                        <option value="warm">Warm</option>
                        <option value="cold">Cold</option>
                        <option value="admitted">Admitted</option>
                        <option value="rejected">Rejected</option>
                        <option value="not_interested">Not interested</option>
                        <option value="Pending">Pending</option>
                    </select>
                    <label>Category</label>
                </div>
            </div>
            <div id="test4" class="col s12">
                <div class="input-field col s12">
                    <select name="pref" id="pref">
                        <option value="" disabled selected>Choose your option</option>
                        {{-- Fecth All Course from the database --}}
                        <option value="id">Course</option>
                    </select>
                    <label>Course Preference</label>
                </div>
                <div id="op" class="input-field col s12"></div>
                <div class="input-field col s12">
                    <select name="where" id="where">
                        <option value="" disabled selected>Choose your option</option>
                        <option value="internet">Internet</option>
                        <option value="advertisement">Advertisement</option>
                        <option value="friend">Friend</option>

                    </select>
                    <label>Where did you find us</label>
                </div>
                <div id="wh_op" class="input-field col s12"></div>
            </div>
            <p>Make sure you've filled every required field in every tab before clicking submit.</p>
            <div class="input-field col s6">
                <button class="btn waves-effect waves-light " type="submit" name="submit">Submit
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </form>
    </div>

    {{-- <div class="card">
        <div class="card-content"> --}}
            {{-- require '../requires/enquiry_valid.php';  --}}
        {{-- </div> --}}
            {{-- require 'enquiry_list_test.php' --}}
    {{-- </div> --}}
@endsection
