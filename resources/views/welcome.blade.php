<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
    <link href="{{url('public/style.css')}}" rel="stylesheet">
    <link href="{{url('public/main.css')}}" rel="stylesheet">
    <style>
        .fixed-sidebar .app-main .app-main__outer {
            z-index: 9;
            padding-left: 0px;
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
                        <!-- <button type="button" id="change_no" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button> -->
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

                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">

            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                        Log In
                                    </div>
                                </div>
                                <style>
                                    /* img {
                                        vertical-align: middle;
                                        border-style: none;
                                        width: 100%;
                                    } */
                                </style>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form method="POST" action="{{url('/log_in')}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">USER ID</label>
                                                                <input type="text" class="form-control" name="user_id"
                                                                    id="" aria-describedby="helpId"
                                                                    placeholder="Enter id" required>
                                                                @if(@$error == 1)
                                                                <small id="helpId" style="color:red"
                                                                    class="form-text">Wrong Password or User Id</small>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-4">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="">PASSWORD</label>
                                                                <input type="password" minlength="6"
                                                                    class="form-control" name="password" id=""
                                                                    aria-describedby="helpId"
                                                                    placeholder="Enter Password" required>
                                                                @if(@$error == 1)
                                                                <small id="helpId" style="color:red"
                                                                    class="form-text">Wrong Password or User Id</small>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-5">
                                                        </div>
                                                        <div class="col-md-4" style="margin-left:50px">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-primary">Login
                                                                    &nbsp; <i class="fa fa-angle-right"
                                                                        aria-hidden="true"></i> </button>
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



                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <!-- <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                
                                            </a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <!-- <div class="badge badge-success mr-1 ml-0">
                                                    <p>Developed by &nbsp;: &nbsp;</p>
                                                </div> -->
                                                COMSYS IT
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="app-footer-right">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            </div>
        </div>
        <script type="text/javascript" src="{{url('public/assets/scripts/main.js')}}"></script>
        <script type="text/javascript" src="{{url('public/script.js')}}"></script>


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

</body>

</html>