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
                            {{-- <input type="text" class="search-input" placeholder="Type to search"> --}}
                            {{-- <button class="search-icon"><span></span></button> --}}
                        </div>
                        <button class="close"></button>
                    </div>
                    <!--<ul class="header-menu nav">-->
                    <!--<li class="nav-item">-->
                    <!--    <a href="javascript:void(0);" class="nav-link">-->
                    <!--        <i class="nav-link-icon fa fa-database"> </i>-->
                    <!--        Statistics-->
                    <!--    </a>-->
                    <!--</li>-->
                    <!--<li class="btn-group nav-item">-->
                    <!--    <a href="javascript:void(0);" class="nav-link">-->
                    <!--        <i class="nav-link-icon fa fa-edit"></i>-->
                    <!--        Projects-->
                    <!--    </a>-->
                    <!--</li>-->
                    <!--<li class="dropdown nav-item">-->
                    <!--<a href="javascript:void(0);" class="nav-link">-->
                    <!--    <i class="nav-link-icon fa fa-cog"></i>-->
                    <!--    Settings-->
                    <!--</a>-->
                    <!--</li>-->
                    <!--</ul>-->
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
                                            {{-- <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <h6 tabindex="-1" class="dropdown-header">Header</h6>
                                            <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Dividers</button> --}}
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="widget-content-left  ml-3 header-user-info">
                                            <div class="widget-heading">
                                                Alina Mclourd
                                            </div>
                                            <div class="widget-subheading">
                                                VP People Manager
                                            </div>
                                        </div>
                                        <div class="widget-content-right header-user-info ml-3">
                                            <button type="button"
                                                class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                                <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                            </button>
                                        </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui-theme-settings">
            {{-- <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button> --}}
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Layout Options
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class"
                                                    data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Header
                                                </div>
                                                <div class="widget-subheading">Makes the header top fixed, always
                                                    visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class"
                                                    data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Sidebar
                                                </div>
                                                <div class="widget-subheading">Makes the sidebar left fixed, always
                                                    visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class"
                                                    data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle"
                                                            data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Fixed Footer
                                                </div>
                                                <div class="widget-subheading">Makes the app footer bottom fixed, always
                                                    visible!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Header Options
                            </div>
                            <button type="button"
                                class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class"
                                data-class="">
                                Restore Default
                            </button>
                        </h3>
                        
                        <h3 class="themeoptions-heading">
                            <div>Main Content Options</div>
                            <button type="button"
                                class="btn-pill btn-shadow btn-wide ml-auto active btn btn-focus btn-sm">Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Page Section Tabs
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div role="group" class="mt-2 btn-group">
                                            <button type="button"
                                                class="btn-wide btn-shadow btn-primary btn btn-secondary switch-theme-class"
                                                data-class="body-tabs-line">
                                                Line
                                            </button>
                                            <button type="button"
                                                class="btn-wide btn-shadow btn-primary active btn btn-secondary switch-theme-class"
                                                data-class="body-tabs-shadow">
                                                Shadow
                                            </button>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
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
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">QR Scan</li>
                            <li>
                                @if(Session::get('in_entry') == 1)
                                <a href="{{url('/view_home')}}" class="mm-active" id="in_entry">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    HOME
                                </a>
                                @endif
                            </li>
                            <li>
                                <a href="{{url('/truck/data/scan')}}" id="in_entry">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    Truck Scan
                                </a>
                            </li>
                            <li>
                                @if(Session::get('out_entry') == 1)
                                <a href="{{url('/out_entry')}}" id="out_entry">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    OUT ENTRY
                                </a>
                                @endif
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-car"></i>
                                    REGISTER
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        @if(Session::get('read_in_out') == 1)
                                        <a href="{{url('/in_out_register')}}" id="in_out_value">
                                            <i class="metismenu-icon">
                                            </i>IN / OUT REGISTER
                                        </a>
                                        @endif
                                    </li>
                                    <li>
                                        @if(Session::get('read_visitor') == 1)
                                        <a href="{{url('/visitor_register')}}" id="read_visitor">
                                            <i class="metismenu-icon">
                                            </i>VISITOR REGISTER
                                        </a>
                                        @endif
                                    </li>
                                </ul>
                            </li>
                            <?php $type_ne = Session::get('type'); ?>
                            @if(@$type_ne == 0)
                            <li class="app-sidebar__heading">Party</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diamond"></i>
                                    Elements
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="{{url('/register')}}">
                                            <i class="metismenu-icon"></i>
                                            Register User
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/company')}}">
                                            <i class="metismenu-icon"></i>
                                            Company
                                        </a>
                                    </li>
                                    <li >
                                        <a href="{{url('/master/party/home')}}" >
                                            <i class="metismenu-icon"></i>
                                            Party
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/master/party/list')}}">
                                            <i class="metismenu-icon"></i>
                                            Party List
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/party_wise_tt')}}">
                                            <i class="metismenu-icon"></i>
                                            Truck
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/party_wise_tt/list')}}">
                                            <i class="metismenu-icon"></i>
                                            Truck List
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-3 card">
                                @if(@$data)
                                <div class="alert alert-info" role="alert">
                                    {{@$data}}
                                </div>
                                @endif
                                <div class="card-header-tab card-header-tab-animation card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                        QR Scan Preview
                                    </div>

                                </div>
                                <style>
                                    img {
                                        vertical-align: middle;
                                        border-style: none;
                                        width: 100%;
                                    }
                                </style>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form method="POST" action="{{url('/store_image')}}">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <video id="preview"></video>
                                                        </div>
                                                        <div class="col-md-7 mt-5">
                                                            <select class="form-control" name="" id="id_one"
                                                                onchange="window_change()">
                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            Input Field
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="POST" action="{{url('/store_visitor_data')}}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <h4>Personal Details</h4>
                                                                <br>
                                                            </div>
                                                            <!-- Fields for entry-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">ID Number</label>
                                                                    <input type="text" class="form-control"
                                                                        name="adhar_no" id="box_1"
                                                                        aria-describedby="helpId"
                                                                        placeholder="Enter ID Number" required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Full Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="full_name" id="box_2"
                                                                        aria-describedby="helpId"
                                                                        placeholder="Enter Full Name" required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Gender</label>
                                                                    <select class="form-control" name="gender"
                                                                        id="box_3" required>
                                                                        <option value="">Select</option>
                                                                        <option value="M">Male</option>
                                                                        <option value="F">Female</option>
                                                                        <option value="Other">Other</option>
                                                                    </select>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">DOB <small class="text-warning">
                                                                            Format (DD-MM-YYYY) - if month and date are
                                                                            in single digit add 0 infront of it
                                                                        </small></label>
                                                                    <input type="text" class="form-control" name="yob"
                                                                        id="box_4" aria-describedby="helpId"
                                                                        placeholder="Enter date of birth (dd-mm-yyyy)"
                                                                        required>
                                                                    <small id="helpId" style="display:inline"
                                                                        class="form-text text-primary">Required</small>
                                                                    <small id="helpId_date"
                                                                        style="display:inline;color:red;display:none"
                                                                        class="form-text text">Invalid date entry
                                                                        check (DD-MM-YYYY)</small>
                                                                </div>
                                                            </div>




                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Mobile No</label>
                                                                    <input type="text" class="form-control"
                                                                        name="mobile" id="mobile"
                                                                        aria-describedby="helpId"
                                                                        placeholder="Enter Mobile No">

                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Email</label>
                                                                    <input type="text" class="form-control"
                                                                        name="mobile" id="email"
                                                                        aria-describedby="helpId"
                                                                        placeholder="Enter Email">

                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-2">
                                                                <div class="form-group">
                                                                    <label for="">Address</label>
                                                                    <input type="text" class="form-control" name="house"
                                                                        id="box_5" aria-describedby="helpId"
                                                                        placeholder="Enter Address">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mt-4">
                                                                <h4>Professional Details</h4>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Name</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_details" aria-describedby="helpId"
                                                                        placeholder="Enter compay name" required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Address</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_address" aria-describedby="helpId"
                                                                        placeholder="Enter compay name" required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Designation</label>
                                                                    <input type="text" class="form-control"
                                                                        name="designation" aria-describedby="helpId"
                                                                        placeholder="Enter compay name" required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Website</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_website" aria-describedby="helpId"
                                                                        placeholder="Enter compay name">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Email</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_email" aria-describedby="helpId"
                                                                        placeholder="Enter compay name">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Mobile No</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_mobile" aria-describedby="helpId"
                                                                        placeholder="Enter mobile no">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-12 mt-4">
                                                                <h4>Visit Details</h4>
                                                                <br>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Person to Meet</label>
                                                                    <input type="text" class="form-control"
                                                                        name="whome_to_meet" aria-describedby="helpId"
                                                                        placeholder="Enter whome to meet" required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Departiment</label>
                                                                    <input type="text" class="form-control"
                                                                        name="department" aria-describedby="helpId"
                                                                        placeholder="Enter person to meet" required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Details</label>
                                                                    <input type="text" class="form-control"
                                                                        name="details" aria-describedby="helpId"
                                                                        placeholder="Enter details" required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <!-- Fields for entry End-->
                                                            <div class="col-md-8 mt-4">
                                                                <button type="button" onclick="validatedate()"
                                                                    class="btn btn-primary">Next</button>
                                                                <button type="submit" style="display:none"
                                                                    id="at_submit" class="btn btn-primary">Next</button>
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
                        {{-- <div class="col-md-12 col-lg-6">
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title">
                                        <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                        QR Scan Snap
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="results"> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                    </div>

                </div>
                <div class="app-wrapper-footer">
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
                </div>
            </div>
            <!--<script src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
        </div>
    </div>
    <script type="text/javascript" src="{{url('public/assets/scripts/main.js')}}"></script>
    <script type="text/javascript" src="{{url('public/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    {{-- <script type="text/javascript" src="{{url('public/qr/instascan.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    {{-- <script language="JavaScript">
        Webcam.set({
            width: 450,
            height: 390,
            image_format: 'png',
            jpeg_quality: 100
        });

        Webcam.attach('#my_camera');

        function take_snapshot() {
            Webcam.snap(function (data_uri) {
                $(".image-tag").val(data_uri);
                document.getElementById('results').innerHTML = '<img  src="' + data_uri + '"/>';
            });
        }
    </script> --}}
    {{-- <script>
        function check() {
            var image = $('#image').val();
            if (image) {
                $('#at_submit').click();
            } else {
                alert('Cannot Be submited without a snapshot');
            }
        }
    </script> --}}


    <script>
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        scanner.addListener('scan', function (content) {
            // alert(content);
            // console.log(content);

            //Work on XML
            var XML_data = content;
            var check_adar = XML_data.split('"');
            var xml_value_data = '<';
            var xml_l = '?xml version=';
            var full = xml_value_data + xml_l;
            var data_val = String(full);
            if (check_adar[0] == data_val) {
                console.log(full);
                //Data stored on variable
                var XML_split = XML_data.split('"');
                //C as default
                var c = 1;
                //For loop for getting index no for these files
                for (i = 5; i <= 29; i++) {

                    //for calculating odd numbers
                    if (i % 2 != 0) {
                        //Putting data in variable
                        var XML_val = XML_split[i];
                        var temp_text_id = '#box_' + c;

                        if (c == 3) {
                            if (XML_val == 'M') {
                                $(temp_text_id).append('<option value="' + XML_val +
                                    '" selected>Male</option>');
                            } else if (XML_val == 'F') {
                                $(temp_text_id).append('<option value="' + XML_val +
                                    '" selected>Female</option>');
                            } else {
                                $(temp_text_id).append('<option value="' + XML_val +
                                    '" selected>Other</option>');
                            }
                        } else {
                            if ((i == 13) || (i == 23) || (i == 29)) {} else {
                                if (c == 5) {
                                    var temp_value_id = $(temp_text_id).val();
                                    $(temp_text_id).val(temp_value_id + ' ' + XML_val);
                                } else {
                                    $(temp_text_id).val(XML_val);
                                }
                            }

                        }

                        //increamenting C 
                        if (c == 5) {} else {
                            c = c + 1;
                        }
                        // console.log(c);
                    }

                }

                //Static values IGNORE
                // 11
                // 15 17 19 21 25 27
                // console.log(XML_split[5]);
                // console.log(XML_split[7]);
                // console.log(XML_split[9]);
                // console.log(XML_split[11]);
                // console.log(XML_split[13]);
                // console.log(XML_split[15]);
                // console.log(XML_split[17]);
                // console.log(XML_split[19]);
                // console.log(XML_split[21]);
                // console.log(XML_split[23]);
                // console.log(XML_split[25]);
                // console.log(XML_split[27]);
                // console.log(XML_split[29]);

                //END Ignore

                // window.open(content, "_blank");
            } else {
                var c = 2;
                // 2, 4, 1
                var f = 0;
                //split pan detail
                var PAN = XML_data.split(':');
                for (var j = 0; j <= 4; j++) {
                    // var pan_split = new Array()

                    pan_split = PAN[j].split("\n");
                    // var val_temp_id = '#box_' + c;
                    if (f == 0) {
                        f++;
                    } else if (f == 1) {
                        //split spaces
                        var value = pan_split[0].replace(/^\s+|\s+$/g, '');
                        $('#box_2').val(value);
                        f++;
                    } else if (f == 2) {
                        f++;
                    } else if (f == 3) {
                        //split spaces
                        var value = pan_split[0].replace(/^\s+|\s+$/g, '');
                        $('#box_4').val(value);
                        f++;
                    } else if (f == 4) {
                        //split spaces
                        var value = pan_split[0].replace(/^\s+|\s+$/g, '');
                        $('#box_1').val(value);
                        f++;
                    }

                }

            }


            alert('Scan Complete');
        });

        function isMobileDevice() {
            return (typeof window.orientation !== "undefined") || (navigator.userAgent
                .indexOf('IEMobile') !== -1);
        }

        Instascan.Camera.getCameras().then(function (cameras) {
            console.log(cameras);
            if (cameras.length > 0) {
                var val = cameras.length;
                for (i = 0; i < val; i++) {
                    $('#id_one').append('<option value="' + i + '">Camera ' + i + '</option>');
                    // alert(i);
                }
                scanner.start(cameras[0]);
            } else {
                console.error("Not found!");
            }
        });
    </script>

    <script>
        function load() {
            scanner.addListener('scan', function (content) {
                alert('done' + content);
                window.open(content, "_blank");
            });
        }
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
        function validatedate() {
            var date_input_text = $('#box_4').val();
            var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
            // Match the date format through regular expression
            if (date_input_text.match(dateformat)) {
                $('#helpId_date').focus();
                //Test which seperator is used '/' or '-'
                var opera1 = date_input_text.split('/');
                var opera2 = date_input_text.split('-');
                lopera1 = opera1.length;
                lopera2 = opera2.length;
                // Extract the string into month, date and year
                if (lopera1 > 1) {
                    // var pdate = date_input_text.split('/');
                    $('#helpId_date').show(500);
                    $('#helpId_date').focus();
                    alert("invalid date Format");
                } else if (lopera2 > 1) {
                    var pdate = date_input_text.split('-');
                }
                var dd = parseInt(pdate[0]);
                var mm = parseInt(pdate[1]);
                var yy = parseInt(pdate[2]);
                // Create list of days of a month [assume there is no leap year by default]
                var ListofDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
                if (mm == 1 || mm > 2) {
                    if (dd > ListofDays[mm - 1]) {
                        $('#helpId_date').show(500);
                        $('#helpId_date').focus();
                        alert("invalid date");
                    } else {
                        $('#helpId_date').hide(500);
                        $('#at_submit').click();
                    }
                }
                if (mm == 2) {
                    var lyear = false;
                    if ((!(yy % 4) && yy % 100) || !(yy % 400)) {
                        lyear = true;
                        $('#helpId_date').hide(500);
                        $('#at_submit').click();
                    }
                    if ((lyear == false) && (dd >= 29)) {
                        $('#helpId_date').show(500);
                        $('#helpId_date').focus();
                        alert("invalid date");
                    }
                    if ((lyear == true) && (dd > 29)) {
                        $('#helpId_date').show(500);
                        $('#helpId_date').focus();
                        alert("invalid date");
                    }

                }
            } else {
                $('#helpId_date').show(500);
                $('#helpId_date').focus();
                alert("invalid date");
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


</body>

</html>