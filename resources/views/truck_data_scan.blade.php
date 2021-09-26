<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">

    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        @include('script&css')

</head>

<body>
        @include('header')

        <div class="app-main">
            @include('sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>

                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-danger">1'st Step
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                Form Complete</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-danger">2'nd Step
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                Upload Picture</button>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <button type="button" class="btn btn-danger">3'rd Step
                                                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                                                Download PDF</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <form id="form1" method="POST" novalidate id="registervalidation" role="form"
                                enctype="multipart/form-data" action="{{url('/truck/data/add')}}">
                                @csrf
                                <div class="mb-3 card">
                                    @if(@$data)
                                    <div class="alert alert-info" role="alert">
                                        {{@$data}}
                                    </div>
                                    @endif
                                    <div class="card-header-tab card-header-tab-animation card-header"
                                        style="background-color: #F79646">
                                        <div class="card-header-title text-light">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss "> </i>
                                            Enter Your Aadhar Number
                                        </div>

                                    </div>
                                    <style>
                                        img {
                                            vertical-align: middle;
                                            border-style: none;
                                            width: 100%;
                                        }
                                    </style>
                                    <!-- <div class="form-floating">
                                        <input type="text" name="user_id" class="form-control" id="floatingInput" placeholder="ID****">
                                        <label for="floatingInput">User ID</label>
                                    
                                    </div> -->

                                    <div class="card-body" id="scan_part">
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="input-group flex-nowrap">
                                                        <input type="number"  aria-describedby="addon-wrapping"
                                                            class="form-control" name="adhar_no"
                                                            onKeyUp="CheckAadhar(this.value)" id="adhar_no"
                                                            aria-describedby="helpId" placeholder="Enter Aadhar Number"
                                                            required>
                                                        <span class="input-group-text" id="addon-wrapping">Check for
                                                            BLACKLISTED Numbers</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" style="display: none" id="PDetails">
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header"
                                            style="background-color: #F79646">
                                            <div class="card-header-title text-light" style="font-size:18px">
                                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                Personal Details
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="row">
                                                            <!-- <div class="col-md-12">
                                                                <h4>Personal Details</h4>
                                                                <br>
                                                            </div> -->
                                                            <!-- Fields for entry-->
                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <select class="form-control" name="party"
                                                                    onChange="loadAjax(this.value)" id="floatingInput"
                                                                    required>
                                                                    <option value="">Select</option>
                                                                    @foreach($party_master as $value)
                                                                    <option value="{{$value->sap_code}}">
                                                                        {{$value->party_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <label for="floatingInput">Party</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <select class="form-control" id="truck_no"
                                                                    name="truck_no" required required>
                                                                    <option value="">Select</option>
                                                                </select>
                                                                <label for="truck_no">Truck Number    <b class="text-danger">*</b> </label>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <select class="form-control" id="floatingInput" name="type" required
                                                                    required>
                                                                    <option value="">Select</option>
                                                                    <option value="Driver">Driver</option>
                                                                    <option value="Helper">Helper</option>
                                                                    <option value="Labour">Labour</option>
                                                                </select>
                                                                <label for="floatingInput">Type    <b class="text-danger">*</b></label>

                                                                </div>
                                                            </div>



                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <input type="date" class="form-control" name="yob"
                                                                    id="floatingInput" aria-describedby="helpId"
                                                                    placeholder="Enter date of birth (dd-mm-yyyy)"
                                                                    required>
                                                                    <label for="floatingInput">DOB   <b class="text-danger">*</b></label>
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                    name="full_name" id="floatingInput"
                                                                    placeholder="Enter Full Name" required>
                                                                    <label for="floatingInput">Full Name   <b class="text-danger">*</b></label>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                    name="fathers_name" id="floatingInput"
                                                                    aria-describedby="helpId"
                                                                    placeholder="Enter Name" required>
                                                                    <label for="floatingInput">Fathers Name   <b class="text-danger">*</b></label>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4" style="display: none">
                                                                <div class="form-floating">
                                                                    <select class="form-control" name="gender"
                                                                    id="floatingInput" required>
                                                                    <option value="">Select</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="F">Female</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                                <label for="floatingInput">Gender</label>

                                                                </div>
                                                            </div>






                                                            <div class="col-md-4">
                                                                <div class="form-floating">
                                                                    <input type="number" class="form-control"
                                                                    name="mobile" id="floatingInput"
                                                                    aria-describedby="helpId"
                                                                    placeholder="Enter Number">
                                                                    <label for="floatingInput">Phone Number</label>

                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6" style="display: none">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="e"
                                                                    id="floatingInput" aria-describedby="helpId"
                                                                    placeholder="Enter Email">
                                                                    <label for="floatingInput">Email</label>


                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-2">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="house"
                                                                    id="floatingInput" aria-describedby="helpId" required
                                                                    placeholder="Enter Address">
                                                                    <label for="floatingInput">Address   <b class="text-danger">*</b></label>
                                                                    

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mt-2">
                                                                <div class="form-floating">
                                                                    <input type="date" class="form-control"
                                                                    name="valid_up_to" id="floatingInput"
                                                                    aria-describedby="helpId" required
                                                                    placeholder="Enter Address">
                                                                    <label for="floatingInput">Valid Up To   <b class="text-danger">*</b></label>


                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mt-2">
                                                                <div class="form-floating">
                                                                    <select class="form-control" name="eye_sight"
                                                                    id="floatingInput" required>
                                                                    <option value="">Select</option>
                                                                    <option value="OK">OK</option>
                                                                    <option value="SPECTS">SPECTS</option>
                                                                </select>
                                                                <label for="floatingInput">Eye sight</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mt-2">
                                                                <div class="form-floating">
                                                                    <select class="form-control" name="blood_group"
                                                                    id="floatingInput" required>
                                                                    <option value="">Select</option>
                                                                    <option value="A">A</option>
                                                                    <option value="B">B</option>
                                                                    <option value="O">O</option>
                                                                </select>
                                                                <label for="floatingInput">Blood Group</label>


                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mt-2">
                                                                <div class="form-floating">
                                                                    <select class="form-control"
                                                                    name="insurance_twelve_rupee" id="floatingInput"
                                                                    required>
                                                                    <option value="">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                                <label for="floatingInput">Insurance ₹12</label>


                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mt-2">
                                                                <div class="form-floating">
                                                                    <select class="form-control"
                                                                    name="insurance_three_thirty_rupee" id="floatingInput"
                                                                    required>
                                                                    <option value="">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                                <label for="floatingInput">Insurance ₹330</label>


                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 mt-2">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                    name="nominee_name" id="floatingInput"
                                                                    aria-describedby="helpId" required
                                                                    placeholder="Enter">
                                                                    <label for="floatingInput">Nominee Name</label>


                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mt-2">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                    name="bank_ac" id="floatingInput"
                                                                    aria-describedby="helpId" required
                                                                    placeholder="Enter">
                                                                    <label for="floatingInput">Bank Account</label>


                                                                </div>
                                                            </div>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3 card" style="display: none" id="PFDetails">
                                        <div class="card-header-tab card-header-tab-animation card-header"
                                            style="background-color: #F79646">
                                            <div class="card-header-title text-light" style="font-size:18px">
                                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                Professional Details
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <div class="row">


                                                            <!-- <div class="col-md-12 mt-4">
                                                                <h4>Professional Details</h4>
                                                                <br>
                                                            </div> -->



                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="dl_no"
                                                                    id="floatingInput" aria-describedby="helpId"
                                                                    placeholder="Enter Number" required>
                                                                    <label for="floatingInput">DL Number  <b class="text-danger">*</b></label>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <input type="date" class="form-control"
                                                                    name="issue_date" id="floatingInput"
                                                                    aria-describedby="helpId"
                                                                    placeholder="Enter Date" required>
                                                                    <label for="floatingInput">Issue Date  <b class="text-danger">*</b></label>

                                                                </div>
                                                            </div>

                                                            

                                                            <div class="col-md-4">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                    name="issueing_rto" id="floatingInput"
                                                                    aria-describedby="helpId" placeholder="Enter">
                                                                    <label for="floatingInput">Issueing RTO</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>



                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <select class="form-control" name="from_j" id="floatingInput"
                                                                    >
                                                                    <option value="">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                                <label for="floatingInput">From J</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>


                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <select class="form-control" name="from_h" id="floatingInput"
                                                                    >
                                                                    <option value="">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                                <label for="floatingInput">From H</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <select class="form-control"
                                                                    name="police_verification" id="floatingInput" required>
                                                                    <option value="">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                                <label for="floatingInput">Police Verification</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control" name="ref"
                                                                    id="floatingInput" aria-describedby="helpId" required
                                                                    placeholder="Enter Ref">
                                                                    <label for="floatingInput">Ref  <b class="text-danger">*</b></label>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-floating">
                                                                    <input type="text" class="form-control"
                                                                    name="police_station" id="floatingInput"
                                                                    aria-describedby="helpId" placeholder="Enter">
                                                                    <label for="floatingInput">Police Station</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <input type="date" class="form-control"
                                                                    name="valid_from" id="floatingInput"
                                                                    aria-describedby="helpId" placeholder="Enter">
                                                                    <label for="floatingInput">Valid From</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <input type="date" class="form-control"
                                                                    name="valid_to" id="floatingInput"
                                                                    aria-describedby="helpId" placeholder="Enter">
                                                                    <label for="floatingInput">Valid To</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3 mb-3">
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <select class="form-control" name="hg_training"
                                                                    id="floatingInput" >
                                                                    <option value="">Select</option>
                                                                    <option value="Yes">Yes</option>
                                                                    <option value="No">No</option>
                                                                </select>
                                                                <label for="floatingInput">HG Training</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <input type="date" class="form-control"
                                                                    name="valid_from_training" id="floatingInput"
                                                                    aria-describedby="helpId" placeholder="Enter">
                                                                    <label for="floatingInput">Valid From</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <input type="date" class="form-control"
                                                                    name="valid_to_training" id="floatingInput"
                                                                    aria-describedby="helpId" placeholder="Enter">
                                                                    <label for="floatingInput">Valid To</label>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <!-- <div class="col-md-6">

                                                            </div> -->
                                                            
                                                            <div class="col-md-6" style="margin-top:20px">
                                                                <div class="form-floating mb-3">
                                                                    <label class="input-group-text" name="upload_documents" for="inputGroupFile01">Upload Documents</label>
                                                                    <input style="margin-left: 50px;" type="file" class="form-control" id="inputGroupFile01">
                                                                </div>
                                                                <!-- <div class="form-floating">
                                                                    <input class="form-control" name="upload_documents"
                                                                    type="file" id="formFile">
                                                                    <label for="formFile" class="form-label">Upload Documents</label>                                                                    
                                                                </div> -->
                                                            </div>

                                                            <!-- Fields for entry End-->
                                                            <div class="col-md-8 mt-4">
                                                                <button type="submit" id="Sub-button" class="btn"
                                                                    style="background-color: #3f6ad8;color: white; width: 150px">Next</button>
                                                                    <span class="text-danger ml-5">All Fields Marked with <b>*</b> Are Requred</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>

    </div>

    </div>
    <!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
    </div>
    </div>

    <script>
        $(document).ready(function () {
            // Disables all field except one
            $('#form1 input').attr('readonly', 'readonly');
            $('#form1 select').attr('disabled', 'disabled');
            $('#adhar_no').removeAttr('readonly', 'readonly');
            $('#Sub-button').attr('disabled', 'disabled');
        })
    </script>

    <script>
        function window_change() {
            var id_one = $('#id_one').val();
            if (id_one == '') {
                alert('Camera needed to selected')
            } else {

                Instascan.Camera.getCameras().then(cameras => {
                    console.log(cameras);
                    if (cameras.length > 0) {
                        var val = cameras.length;
                        scanner.start(cameras[id_one]);
                    } else {
                        console.error("Not found!");
                    }
                });
            }
        }
    </script>


    <script>
        $('#change_no').click(function () {
            var value_data_one = $('#value_data_one').val();
            if (value_data_one == 0) {
                $('#text_change').html('GES');
                $('#value_data_one').val(1);

            } else {
                $('#text_change').html('gate entry system');
                $('#value_data_one').val(0);
            }
        });
    </script>




    <script>
        function loadAjax(value) {
            $('#truck_no').empty();
            $.ajax({ //create an ajax request to display.php
                type: "GET",
                url: "{{url('truck/ajax/load')}}",
                data: {
                    value: value
                },
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    var tag = `<option value="" selected>Select</option>`;
                    for (var i = 0; i < response.length; i++) {
                        tag += `<option value="` + response[i].id + `" >` + response[i].truck_no +
                            `</option>`
                    }
                    $('#truck_no').append(tag);
                    //alert(response);
                },
                error: function (error) {
                    console.log(response);
                }

            });
        }
    </script>

    <!-- To prevent code form submition -->
    <script>
        $("form").bind("keypress", function (e) {
            if (e.keyCode == 13) {
                $("#btnSearch").attr('value');
                //add more buttons here
                return false;
            }
        });
    </script>


    <script>
        function CheckAadhar(value) {
            if (value.trim() == '' || value.trim().length < 12 || value.trim().length > 12) {
                $('#adhar_no').removeClass('is-valid');
                $('#adhar_no').addClass('is-invalid');
                $('#addon-wrapping').empty();
                $('#addon-wrapping').html('Invalid Aadhar number');
                $('#Sub-button').attr('disabled', 'disabled');

                // Disables all field except one
                $('#form1 input').attr('readonly', 'readonly');
                $('#form1 select').attr('disabled', 'disabled');
                $('#adhar_no').removeAttr('readonly', 'readonly');
            } else {

                if (value) {
                    $.ajax({ //create an ajax for blacklist check
                        type: "GET",
                        url: "{{url('check/blacklist/aadhar-no')}}",
                        data: {
                            value: value
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response == true) {
                                $('#adhar_no').removeClass('is-valid');
                                $('#adhar_no').addClass('is-invalid');
                                $('#addon-wrapping').empty();
                                $('#addon-wrapping').html('Aadhar Number is Blacklisted');
                                $('#Sub-button').attr('disabled', 'disabled');

                                // Disables all field except one
                                $('#form1 input').attr('readonly', 'readonly');
                                $('#form1 select').attr('disabled', 'disabled');
                                $('#adhar_no').removeAttr('readonly', 'readonly');

                            } else {

                                $('#adhar_no').removeClass('is-invalid');
                                $('#adhar_no').addClass('is-valid');
                                $('#addon-wrapping').empty();
                                $('#addon-wrapping').html('Aadhar Number is Valid');
                                $('#Sub-button').removeAttr('disabled', 'disabled');

                                // remove Disables from all field
                                $('#form1 input').removeAttr('readonly', 'readonly');
                                $('#form1 select').removeAttr('disabled', 'disabled');

                                // Show Fields
                                $("#PDetails").show(100);
                                $("#PFDetails").show(100);
                            }
                        },
                        error: function (error) {
                            console.warn(response);
                        }

                    });

                }

            }

        }
    </script>


</body>

</html>