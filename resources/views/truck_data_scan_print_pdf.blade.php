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

    <style>
        @font-face {
            font-family: 'Kruti Dev 010';
            src: url('{{url("public/assets/fonts/KrutiDev010.woff2")}}') format('woff2'),
            url('{{url("public/assets/fonts/KrutiDev010.woff")}}') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        .KrutiDev_hindi_text {
            font-family: 'Kruti Dev 010';
            font-weight: normal;
            font-style: normal;
        }

        .page {
            width: 21cm;
            min-height: 29.7cm;
            padding: 2cm;
            margin: 1cm auto;
            border: 1px #D3D3D3 solid;
            border-radius: 5px;
            background: white;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .subpage {
            padding: 1cm;
            border: 5px red solid;
            height: 237mm;
            outline: 2cm white solid;
        }

        @page {
            size: A4;
            margin: 0;
        }

        @media print {
            .page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }
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
                                    <style>
                                        #my_camera_snap {
                                            -webkit-transform: scaleX(-1);
                                            transform: scaleX(-1);
                                        }
                                    </style>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            @if($truck_data->process_stage > 0)
                                                            <a type="button" class="btn btn-success"
                                                                href="{{url('truck/data/scan/edit/'.$truck_data->id)}}">
                                                                1 Step Form Complete <i class="fa fa-check-circle"
                                                                    aria-hidden="true"></i> </a>
                                                            @else
                                                            <a type="button" class="btn btn-danger text-light" href="#">
                                                                1 Step Form Complete <i class="fa fa-lock"
                                                                    aria-hidden="true"></i> </a>
                                                            @endif

                                                        </div>
                                                        <div class="col-md-4">
                                                            @if($truck_data->process_stage > 1)
                                                            <a type="button" class="btn btn-success"
                                                                href="{{url('/truck/data/update/file/upload/section/'.$truck_data->id)}}">
                                                                2 Step Upload / Take picture <i
                                                                    class="fa fa-check-circle" aria-hidden="true"></i>
                                                            </a>
                                                            @else
                                                            <a type="button" class="btn btn-danger text-light" href="#">
                                                                2 Step Upload / Take picture <i class="fa fa-lock"
                                                                    aria-hidden="true"></i> </a>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-3">
                                                            @if($truck_data->process_stage > 1)
                                                            <a type="button" class="btn btn-info"
                                                                href="{{url('/truck/data/pdf/print/'.$truck_data->id)}}">
                                                                3 Step Print PDF <i class="fa fa-check-circle"
                                                                    aria-hidden="true"></i> </a>
                                                            @else
                                                            <a type="button" class="btn btn-danger text-light" href="#">
                                                                3 Step Print PDF <i class="fa fa-lock"
                                                                    aria-hidden="true"></i> </a>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- <div class="col-md-12" id="input_part" style="display: none"> -->
                            <form method="POST" novalidate id="registervalidation" role="form"
                                enctype="multipart/form-data"
                                action="{{url('/truck/data/image/upload/'.$truck_data->id)}}">
                                @csrf
                                <div class="col-md-12" id="input_part">
                                    <div class="mb-3 card">
                                        <div class="card-header-tab card-header-tab-animation card-header"
                                            style="background-color: #F79646">
                                            <div class="card-header-title text-light" style="font-size:18px">
                                                <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                                Print / Download PDF
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-6 mt-5">
                                                                <a href="{{url('/truck/data/pdf/print/now/'.$truck_data->id)}}"
                                                                    target="_blank" class="btn btn-danger"> <i
                                                                        class="fa fa-file-pdf" aria-hidden="true"></i>
                                                                    &nbsp;PRINT / DOWNLOAD</a>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-12 mt-5">
                                                                <div class="">
                                                                    <table width="100%" >
                                                                        <tr>
                                                                            <th>&nbsp;</th>
                                                                            <th>&nbsp;</th>

                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 350px" >
                                                                                <table width="100%"
                                                                                    style="border: 1px solid black; font-size:11px; padding: 0px">
                                                                                    <tr>
                                                                                        <th>Image</th>
                                                                                        <th style="text-align:center">
                                                                                            <p><u
                                                                                                    class="KrutiDev_hindi_text">bafM;u
                                                                                                    v‚;y
                                                                                                    d‚j~iksZjs'ku
                                                                                                    fyfeVsM</u>
                                                                                                <br>
                                                                                                <b>Indian Oil Corporation
                                                                                                Limited</b> 
                                                                                            </p>
                                                                                            <p> <u
                                                                                                    class="KrutiDev_hindi_text">¼ fpÙkkSM+x<+ VfeZuy ½</u> &nbsp;
                                                                                                        Chittorgarh
                                                                                                        Terminal</p>
                                                                                                        <p> <u
                                                                                                            class="KrutiDev_hindi_text">¼
                                                                                                            vkxarqd
                                                                                                            izos'k irz
                                                                                                            ½</u> &nbsp;
                                                                                                        <u>Visitor's
                                                                                                            Pass</u>
                                                                                            </p>
                                                                                        </th>
                                                                                        <th style="width: 60px" >&nbsp;</th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td> <p> <u class="KrutiDev_hindi_text"> ¼la[;k½  </u> &nbsp; Sr No. COR-1</p></td>
                                                                                        <td colspan="2" style="text-align: right" > <p> <u class="KrutiDev_hindi_text"> ¼ frfFk ½  </u> &nbsp; Date. December 15, 2017 &nbsp;</p></td>
                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" > <p> <u class="KrutiDev_hindi_text"> ¼uke½  </u> &nbsp; Name. PRANAV PANKAJ</p></td>                                                                                        
                                                                                        <td rowspan="7" >Image</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" > <p> <u class="KrutiDev_hindi_text"> irk½  </u> &nbsp; Address. COMSYS IT DELH</p></td>                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" > <p> <u class="KrutiDev_hindi_text"> ¼Qksu½  </u> &nbsp; Phone. 9911331144</p></td>                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" > <p> <u class="KrutiDev_hindi_text"> xkgh la[;k½  </u> &nbsp; Vechile No: </p></td>                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" > <p> <u class="KrutiDev_hindi_text"> ¼feyus ckys C;fDr½  </u> &nbsp; Person to meet: Finance</p></td>                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" > <p> <u class="KrutiDev_hindi_text"> ¼m}s";½  </u> &nbsp; Purpose. Official</p></td>                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="2" > <p> <u class="KrutiDev_hindi_text"> ¼C;fDr;ks dk la[;k½  </u> &nbsp; No. of Persons: 1</p></td>                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="1" > <p> <u class="KrutiDev_hindi_text"> ços'k le;½  </u> &nbsp; In Time: 12:38:05</p></td>                                                                                        
                                                                                        <td colspan="2" > <p> <u class="KrutiDev_hindi_text"> ckgj tkus dk le;½  </u> &nbsp; Out time: 12:38:05</p></td>                                                                                        
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td colspan="1" > <p> <u class="KrutiDev_hindi_text"> ¼ xkMZ dk gLrk{kj ½  </u> <br> Signature of Security</p></td>                                                                                        
                                                                                        <td colspan="1" > <p> <u class="KrutiDev_hindi_text"> ¼ vf/kdkjh dk gLrk{kj ½  </u> <br> Signature of officer</p></td>                                                                                        
                                                                                        <td colspan="1" style="width: 100px" > <p> <u class="KrutiDev_hindi_text"> ¼ vkxarqd dk gLrk{kj ½  </u> <br> Signature of visitor</p></td>                                                                                        
                                                                                    </tr>

                                                                                </table>
                                                                            </td>
                                                                            <td style="width: 350px">
                                                                                <table width="100%"
                                                                                    style="border: 1px solid black">
                                                                                    <tr>
                                                                                        <th style="text-align:center">
                                                                                            <p><u class="KrutiDev_hindi_text">egRoiq.kZ funsZ'k</u>
                                                                                            <br>
                                                                                            <u>IMPORTANT INSTRUCTION</u>
                                                                                            </p>
                                                                                        </th>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>sda</td>
                                                                                    </tr>

                                                                                </table>
                                                                            </td>

                                                                        </tr>

                                                                    </table>


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
    <script type="text/javascript" src="{{url('public/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    {{-- <script type="text/javascript" src="{{url('public/qr/instascan.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>

</html>