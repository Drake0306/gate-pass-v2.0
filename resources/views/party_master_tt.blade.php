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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link href="{{url('public/style.css')}}" rel="stylesheet">
    <link href="{{url('public/main.css')}}" rel="stylesheet">
    <style>
        div.app-container.app-theme-white.body-tabs-shadow.fixed-sidebar.fixed-header {
            /* font-size: 12px; */
        }
    </style>
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
                    <ul class="header-menu nav">
                    <li class="nav-item">
                       <a href="javascript:void(0);" class="nav-link">
                           <i class="nav-link-icon fa fa-database"> </i>
                           Statistics
                       </a>
                    </li>
                    <li class="btn-group nav-item">
                       <a href="javascript:void(0);" class="nav-link">
                           <i class="nav-link-icon fa fa-edit"></i>
                           Projects
                       </a>
                    </li>
                    <li class="dropdown nav-item">
                    <a href="javascript:void(0);" class="nav-link">
                       <i class="nav-link-icon fa fa-cog"></i>
                       Settings
                    </a>
                    </li>
                    </ul>
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

                            <div class="col-md-12">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3 card">
                                            <div class="card-header-tab card-header-tab-animation card-header">
                                                <div class="card-header-title">
                                                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss">
                                                    </i>
                                                    Truck Master</div>

                                            </div>
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <form action="{{url('/master/party_master_tt/create')}}" >
                                                                @csrf
                                                                <div class="row">
                                                                    {{-- <div class="col-md-12">
                                                                        <h4>Personal Details</h4>
                                                                        <br>
                                                                    </div> --}}
                                                                    <!-- Fields for entry-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">SAP Code</label>
                                                                            <select class="form-control"
                                                                                id="sap_code"
                                                                                name="sap_code"
                                                                                type="text"
                                                                                aria-describedby="helpId"
                                                                                required>
                                                                                <option selected value="" >Select</option>
                                                                                @foreach($sap_code_list as $item)
                                                                                <option value="{{$item->sap_code}}" >{{$item->party_name}}</option>
                                                                                @endforeach
                                                                            </select>
                                                                            <small id="helpId"
                                                                                class="form-text text-primary">Required</small>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Truck Number</label>
                                                                            <input type="text" class="form-control"
                                                                                id="truck_no"
                                                                                name="truck_no"
                                                                                aria-describedby="helpId" value=""
                                                                                placeholder="Enter Truck No"
                                                                                required>
                                                                            <small id="helpId"
                                                                                class="form-text text-primary">Required</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Calibration Date</label>
                                                                            <input class="form-control"
                                                                                id="calibration_date"
                                                                                type="date"
                                                                                name="calibration_date"
                                                                                aria-describedby="helpId" value=""
                                                                                placeholder="Enter Date"
                                                                                required>
                                                                            <small id="helpId"
                                                                                class="form-text text-primary">Required</small>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Green Card</label>
                                                                            <select class="form-control"
                                                                                id="green_card"
                                                                                name="green_card"
                                                                                type="text"
                                                                                aria-describedby="helpId"
                                                                                required>
                                                                                <option selected value="" >Select</option>
                                                                                <option value="Yes" >Yes</option>
                                                                                <option value="No" >No</option>
                                                                            </select>
                                                                            <small id="helpId"
                                                                                class="form-text text-primary">Required</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Valid From</label>
                                                                            <input class="form-control"
                                                                                id="gc_valid_form"
                                                                                type="date"
                                                                                name="gc_valid_form"
                                                                                aria-describedby="helpId" value=""
                                                                                placeholder="Enter Date"
                                                                                required>
                                                                            <small id="helpId"
                                                                                class="form-text text-primary">Required</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Valid To</label>
                                                                            <input class="form-control"
                                                                                id="gc_valid_to"
                                                                                type="date"
                                                                                name="gc_valid_to"
                                                                                aria-describedby="helpId" value=""
                                                                                placeholder="Enter Date"
                                                                                required>
                                                                            <small id="helpId"
                                                                                class="form-text text-primary">Required</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-12 mt-4">
                                                                        <hr>
                                                                    </div>
                                                                    <!-- Fields for entry End-->
                                                                    <div class="col-md-8 mt-1">
                                                                        <button type="submit" id="next"
                                                                            class="btn btn-primary">Create</button>
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
                    <!-- <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
            </div>
        </div>
        <script type="text/javascript" src="{{url('public/assets/scripts/main.js')}}"></script>
        <script type="text/javascript" src="{{url('public/script.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
        <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js">
        </script>
        {{-- <script type="text/javascript" src="{{url('public/qr/instascan.min.js')}}"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $('#user_role_name').keyup(function () {
                var user_role_name_non_tream = $('#user_role_name').val();
                var usr_role_trim = user_role_name_non_tream.trim();
                if (usr_role_trim == '') {
                    $('#error').show(500);
                } else {
                    $('#error').hide(500);
                }
            });
        </script>
        <script>
            function register_role() {
                var user_role_name_non_tream = $('#user_role_name').val();
                var usr_role_trim = user_role_name_non_tream.trim();
                if (usr_role_trim == '') {
                    $('#error').show(500);
                } else {
                    $('#error').hide(500);
                    var in_entry = document.getElementById("in_entry").checked;
                    var out_entry = document.getElementById("out_entry").checked;
                    var in_out_register = document.getElementById("in_out_register").checked;
                    var visitor_register = document.getElementById("visitor_register").checked;
                    var in_out_read = document.getElementById("in_out_read").checked;
                    var visitor_read = document.getElementById("visitor_read").checked;
                    //AJAX
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'POST',
                        url: '{{url("/create_user_roll")}}',
                        data: {
                            in_entry: in_entry,
                            out_entry: out_entry,
                            in_out_register: in_out_register,
                            visitor_register: visitor_register,
                            in_out_read: in_out_read,
                            visitor_read: visitor_read,
                            usr_role_trim: usr_role_trim
                        },
                        success: function (data) {
                            if (data == 0) {
                                alert('CHANGE USER ROLE NAME SAME NAME EXIST');
                            } else {
                                console.log(data);
                                document.getElementById("in_entry").checked = true;
                                document.getElementById("out_entry").checked = true;
                                document.getElementById("in_out_register").checked = false;
                                document.getElementById("visitor_register").checked = false;
                                document.getElementById("in_out_read").checked = false;
                                document.getElementById("visitor_read").checked = false;
                                $('#user_role_name').val('');
                                alert('user role created');

                                $.ajax({
                                    type: 'GET',
                                    url: '{{url("/create_new_user")}}',
                                    success: function (data) {
                                        // console.log(data);
                                        $('#user_role_create').empty();
                                        for (var i = 0; i <= data.length - 1; i++) {
                                            var item = data[i];
                                            // console.log(item.name);
                                            var tag = `<option value="` + item.id + ` | ` + item
                                                .name + `">` + item.name + `</option>`;
                                            $('#user_role_create').append(tag);
                                        }
                                    },
                                    error: function (data) {
                                        // console.log(data);
                                        alert('Internal Server error');
                                    }
                                });
                            }

                        },
                        error: function (data) {
                            alert('Internal Server error');
                        }
                    });


                }
            }
        </script>

        @if(Session::get('edit_visitor') == 0)
        <script>
            $('#box_5').attr('readonly', 'readonly');
            $('#email').attr('readonly', 'readonly');
            $('#mobile').attr('readonly', 'readonly');
            $('#box_4').attr('readonly', 'readonly');
            $('#box_3').attr('disabled', 'disabled');
            $('#box_2').attr('readonly', 'readonly');
            $('#box_1').attr('readonly', 'readonly');
            $('#next').attr('disabled', 'disabled');
        </script>
        @endif
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
            function run_get_user_role() {
                $.ajax({
                    type: 'GET',
                    url: '{{url("/create_new_user")}}',
                    success: function (data) {
                        // console.log(data);
                        $('#user_role_create').empty();
                        var tag = `<option value="">Select User Role</option>`;
                        for (var i = 0; i <= data.length - 1; i++) {
                            var item = data[i];
                            // console.log(item.name);
                            tag += `<option value="` + item.id + ` | ` + item.name + `">` + item.name +
                                `</option>`;
                        }
                        $('#user_role_create').append(tag);
                    },
                    error: function (data) {
                        // console.log(data);
                        alert('Internal Server error');
                    }
                });
            }

            //RUN AT START UP
            $(document).ready(function () {
                run_get_user_role()
            });
        </script>
        {{-- validation--}}
        <script>
            $('#user_id_new').keyup(function () {
                var user_id_new = $('#user_id_new').val();
                var regularExpression = /^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/;
                var valid = regularExpression.test(user_id_new);
                if (valid == false) {
                    $('#error_new').show(500);
                } else {
                    $('#error_new').hide(500);
                }
            });

            $('#password').keyup(function () {
                var password = $('#password').val();
                var regularExpression = /^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/;
                var valid = regularExpression.test(password);
                if (valid == false) {
                    $('#error_password').show(500);
                } else {
                    var data = password.length;
                    if ((data > 7)) {
                        $('#error_password').hide(500);
                    } else {
                        $('#error_password').show(500);
                    }
                }
            });

            $('#confirm_password').keyup(function () {
                var password = $('#password').val();
                var confirm_password = $('#confirm_password').val();
                if (password == confirm_password) {
                    $('#error_confirm_password').hide(500);
                } else {
                    $('#error_confirm_password').show(500);
                }
            });
        </script>
        {{-- End validation--}}
        {{-- check same name--}}
        <script>
            $('#user_id_new').keyup(function () {
                var user_id_new = $('#user_id_new').val();
                $.ajax({
                    type: 'GET',
                    url: '{{url("/check_new_user_id")}}',
                    data: {
                        user_id_new: user_id_new
                    },
                    success: function (data) {
                        // console.log(data);
                        if (data == 1) {
                            alert('Same user id exist');
                        }
                    },
                    error: function (data) {
                        console.log(data);
                        alert('Internal Server error');
                    }
                });
            });
        </script>
        {{-- END check same name--}}
        <script>
            function validate() {
                //validate
                var regularExpression = /^(?=.*[0-9])(?=.*[a-zA-Z])([a-zA-Z0-9]+)$/;
                var user_id_new = $('#user_id_new').val();
                var password = $('#password').val();
                var full_name_non_trim = $('#full_name').val();
                var confirm_password = $('#confirm_password').val();
                var user_role_create = $('#user_role_create').val();

                var full_name = full_name_non_trim.trim();
                var valid_user_id_new = regularExpression.test(user_id_new);
                var valid_password = regularExpression.test(password);

                var a = 0;
                var b = 0;
                var c = 0;
                var d = 0;
                var e = 0;
                //for confirm password
                if (password == confirm_password) {
                    $('#error_confirm_password').hide(500);
                    a = 0;
                } else {
                    $('#error_confirm_password').show(500);
                    b = 1;
                }
                //for password
                if (valid_password == false) {
                    $('#error_password').show(500);
                } else {
                    var data = password.length;
                    if ((data > 7)) {
                        $('#error_password').hide(500);
                        b = 0;
                    } else {
                        $('#error_password').show(500);
                        b = 1;
                    }
                }
                //for user id
                if (valid_user_id_new == false) {
                    $('#error_new').show(500);
                    c = 1;
                } else {
                    $('#error_new').hide(500);
                    c = 0;
                }
                // user name
                if (full_name_non_trim == '') {
                    d = 1;
                    alert('user name cannot be empty !!');
                } else {
                    d = 0;
                }
                // for select user role
                if (user_role_create == '') {
                    alert('Select user role');
                    e = 1;
                } else {
                    e = 0;
                }

                //main
                if ((a == 0) && (b == 0) && (c == 0) && (d == 0) && (e == 0)) {
                    //AJAX
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'POST',
                        url: '{{url("/create_new_user_/")}}',
                        data: {
                            full_name: full_name,
                            user_id_new: user_id_new,
                            password: password,
                            user_role_create: user_role_create

                        },
                        success: function (data) {
                            console.log(data);
                            if (data == 1) {
                                alert('USER ID ALREADY EXIST ENTER NEW ONE');
                            } else {
                                $('#full_name').val('');
                                $('#user_id_new').val('');
                                $('#password').val('');
                                $('#confirm_password').val('');
                                run_get_user_role()
                                alert('User Created');
                            }

                        },
                        error: function (data) {
                            alert('Internal Server error');
                        }
                    });

                } else {
                    alert('missing details');
                }

            }
        </script>
</body>

</html>