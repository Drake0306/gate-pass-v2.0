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

    <link href="{{url('public/style.css')}}" rel="stylesheet">
    <link href="{{url('public/main.css')}}" rel="stylesheet">

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="" style="text-transform:uppercase"><b id="text_change">gate entry system</b></div>
                <input type="hidden" name="" id="value_data_one" value="0">
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" id="change_no" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button"
                        class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">

                        </div>
                        <button class="close"></button>
                    </div>

                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                            class="p-0 btn">
                                            <i class="fa fa-user-circle" style="font-size:30px;" aria-hidden="true"></i>
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu dropdown-menu-right">
                                            <a href="{{url('log_out')}}" tabindex="0" class="dropdown-item">Log Out</a>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

                                    <div class="card-body" id="scan_part">
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="input-group flex-nowrap">
                                                        <input type="number" aria-describedby="addon-wrapping"
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
                                                                <div class="form-group">
                                                                    <label for="">Party</label>
                                                                    <select class="form-control" name="party"
                                                                        onChange="loadAjax(this.value)" id="box"
                                                                        required>
                                                                        <option value="">Select</option>
                                                                        @foreach($party_master as $value)
                                                                        <option value="{{$value->sap_code}}">
                                                                            {{$value->party_name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Truck Number    <b class="text-danger">*</b> </label>
                                                                    <select class="form-control" id="truck_no"
                                                                        name="truck_no" required required>
                                                                        <option value="">Select</option>
                                                                    </select>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Type    <b class="text-danger">*</b></label>
                                                                    <select class="form-control" name="type" required
                                                                        id="box" required>
                                                                        <option value="">Select</option>
                                                                        <option value="Driver">Driver</option>
                                                                        <option value="Helper">Helper</option>
                                                                        <option value="Labour">Labour</option>
                                                                    </select>

                                                                </div>
                                                            </div>



                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">DOB   <b class="text-danger">*</b></label>
                                                                    <input type="date" class="form-control" name="yob"
                                                                        id="box_4" aria-describedby="helpId"
                                                                        placeholder="Enter date of birth (dd-mm-yyyy)"
                                                                        required>
                                                                    
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Full Name   <b class="text-danger">*</b></label>
                                                                    <input type="text" class="form-control"
                                                                        name="full_name" id="box_2"
                                                                        aria-describedby="helpId"
                                                                        placeholder="Enter Full Name" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Fathers Name   <b class="text-danger">*</b></label>
                                                                    <input type="text" class="form-control"
                                                                        name="fathers_name" id="box"
                                                                        aria-describedby="helpId"
                                                                        placeholder="Enter Name" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-4" style="display: none">
                                                                <div class="form-group">
                                                                    <label for="">Gender</label>
                                                                    <select class="form-control" name="gender"
                                                                        id="box_3" required>
                                                                        <option value="">Select</option>
                                                                        <option value="M">Male</option>
                                                                        <option value="F">Female</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>

                                                                </div>
                                                            </div>






                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Phone Number</label>
                                                                    <input type="number" class="form-control"
                                                                        name="mobile" id="mobile"
                                                                        aria-describedby="helpId"
                                                                        placeholder="Enter Number">

                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6" style="display: none">
                                                                <div class="form-group">
                                                                    <label for="">Email</label>
                                                                    <input type="text" class="form-control" name="e"
                                                                        id="email" aria-describedby="helpId"
                                                                        placeholder="Enter Email">


                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 mt-2">
                                                                <div class="form-group">
                                                                    <label for="">Address   <b class="text-danger">*</b></label>
                                                                    <input type="text" class="form-control" name="house"
                                                                        id="box_5" aria-describedby="helpId" required
                                                                        placeholder="Enter Address">


                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mt-2">
                                                                <div class="form-group">
                                                                    <label for="">Valid Up To   <b class="text-danger">*</b></label>
                                                                    <input type="date" class="form-control"
                                                                        name="valid_up_to" id="box_5"
                                                                        aria-describedby="helpId" required
                                                                        placeholder="Enter Address">


                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mt-2">
                                                                <div class="form-group">
                                                                    <label for="">Blood Group</label>
                                                                    <select class="form-control" name="blood_group"
                                                                        id="box_3" required>
                                                                        <option value="">Select</option>
                                                                        <option value="A">A</option>
                                                                        <option value="B">B</option>
                                                                        <option value="O">O</option>
                                                                    </select>


                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mt-2">
                                                                <div class="form-group">
                                                                    <label for="">Insurance 12 Rupee</label>
                                                                    <select class="form-control"
                                                                        name="insurance_twelve_rupee" id="box_3"
                                                                        required>
                                                                        <option value="">Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>


                                                                </div>
                                                            </div>
                                                            <div class="col-md-2 mt-2">
                                                                <div class="form-group">
                                                                    <label for="">Insurance 330 Rupee</label>
                                                                    <select class="form-control"
                                                                        name="insurance_three_thirty_rupee" id="box_3"
                                                                        required>
                                                                        <option value="">Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>


                                                                </div>
                                                            </div>

                                                            <div class="col-md-3 mt-2">
                                                                <div class="form-group">
                                                                    <label for="">Nominee Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nominee_name" id="box_5"
                                                                        aria-describedby="helpId" required
                                                                        placeholder="Enter">


                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mt-2">
                                                                <div class="form-group">
                                                                    <label for="">Bank Account</label>
                                                                    <input type="text" class="form-control"
                                                                        name="bank_ac" id="box_5"
                                                                        aria-describedby="helpId" required
                                                                        placeholder="Enter">


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
                                                                <div class="form-group">
                                                                    <label for="">DL Number  <b class="text-danger">*</b></label>
                                                                    <input type="text" class="form-control" name="dl_no"
                                                                        id="box" aria-describedby="helpId"
                                                                        placeholder="Enter Number" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Issue Date  <b class="text-danger">*</b></label>
                                                                    <input type="date" class="form-control"
                                                                        name="issue_date" id="box"
                                                                        aria-describedby="helpId"
                                                                        placeholder="Enter Date" required>

                                                                </div>
                                                            </div>

                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <label for="">Eye sight</label>
                                                                    <select class="form-control" name="eye_sight"
                                                                        id="box" required>
                                                                        <option value="">Select</option>
                                                                        <option value="OK">OK</option>
                                                                        <option value="SPECTS">SPECTS</option>
                                                                    </select>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="">Issueing RTO</label>
                                                                    <input type="text" class="form-control"
                                                                        name="issueing_rto" id="box"
                                                                        aria-describedby="helpId" placeholder="Enter">
                                                                    <!--  -->
                                                                </div>
                                                            </div>



                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">From J</label>
                                                                    <select class="form-control" name="from_j" id="box"
                                                                        >
                                                                        <option value="">Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                    <!--  -->
                                                                </div>
                                                            </div>


                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">From H</label>
                                                                    <select class="form-control" name="from_h" id="box"
                                                                        >
                                                                        <option value="">Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Police Verification</label>
                                                                    <select class="form-control"
                                                                        name="police_verification" id="box" required>
                                                                        <option value="">Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Ref  <b class="text-danger">*</b></label>
                                                                    <input type="text" class="form-control" name="ref"
                                                                        id="box" aria-describedby="helpId" required
                                                                        placeholder="Enter Ref">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Police Station</label>
                                                                    <input type="text" class="form-control"
                                                                        name="police_station" id="box"
                                                                        aria-describedby="helpId" placeholder="Enter">
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Valid From</label>
                                                                    <input type="date" class="form-control"
                                                                        name="valid_from" id="box"
                                                                        aria-describedby="helpId" placeholder="Enter">
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Valid To</label>
                                                                    <input type="date" class="form-control"
                                                                        name="valid_to" id="box"
                                                                        aria-describedby="helpId" placeholder="Enter">
                                                                    <!--  -->
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 mt-3 mb-3">
                                                                <hr>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">HG Training</label>
                                                                    <select class="form-control" name="hg_training"
                                                                        id="box" >
                                                                        <option value="">Select</option>
                                                                        <option value="Yes">Yes</option>
                                                                        <option value="No">No</option>
                                                                    </select>
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Valid From</label>
                                                                    <input type="date" class="form-control"
                                                                        name="valid_from_training" id="box"
                                                                        aria-describedby="helpId" placeholder="Enter">
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="">Valid To</label>
                                                                    <input type="date" class="form-control"
                                                                        name="valid_to_training" id="box"
                                                                        aria-describedby="helpId" placeholder="Enter">
                                                                    <!--  -->
                                                                </div>
                                                            </div>

                                                            <!-- <div class="col-md-6">

                                                            </div> -->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="formFile" class="form-label">Upload
                                                                        Documents</label>
                                                                    <input class="form-control" name="upload_documents"
                                                                        type="file" id="formFile">
                                                                    <!--  -->
                                                                </div>
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
    <script type="text/javascript" src="{{url('public/assets/scripts/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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