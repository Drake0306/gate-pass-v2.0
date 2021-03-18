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
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class"
                                            data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class"
                                            data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class"
                                            data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class"
                                            data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class"
                                            data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class"
                                            data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class"
                                            data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class"
                                            data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class"
                                            data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class"
                                            data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class"
                                            data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class"
                                            data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class"
                                            data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class"
                                            data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class"
                                            data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class"
                                            data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class"
                                            data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class"
                                            data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class"
                                            data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class"
                                            data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class"
                                            data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class"
                                            data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class"
                                            data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class"
                                            data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class"
                                            data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class"
                                            data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class"
                                            data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class"
                                            data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class"
                                            data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class"
                                            data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class"
                                            data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class"
                                            data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class"
                                            data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class"
                                            data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class"
                                            data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class"
                                            data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Sidebar Options</div>
                            <button type="button"
                                class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class"
                                data-class="">
                                Restore Default
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Choose Color Scheme
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class"
                                            data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class"
                                            data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class"
                                            data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class"
                                            data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class"
                                            data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class"
                                            data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class"
                                            data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class"
                                            data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class"
                                            data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class"
                                            data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class"
                                            data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class"
                                            data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class"
                                            data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class"
                                            data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class"
                                            data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class"
                                            data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class"
                                            data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class"
                                            data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class"
                                            data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class"
                                            data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class"
                                            data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class"
                                            data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class"
                                            data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class"
                                            data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class"
                                            data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class"
                                            data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class"
                                            data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class"
                                            data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class"
                                            data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class"
                                            data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class"
                                            data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class"
                                            data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class"
                                            data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class"
                                            data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class"
                                            data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class"
                                            data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
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
                                <a href="{{url('/view_home')}}">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    HOME
                                </a>
                                @endif
                            </li>
                            <li>
                                @if(Session::get('out_entry') == 1)
                                <a href="{{url('/out_entry')}}">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    OUT ENTRY
                                </a>
                                @endif
                            </li>
                            <li>
                                <a href="#" class="mm-active">
                                    <i class="metismenu-icon pe-7s-car"></i>
                                    REGISTER
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        @if(Session::get('read_in_out') == 1)
                                        <a href="{{url('/in_out_register')}}" class="mm-active">
                                            <i class="metismenu-icon">
                                            </i>IN / OUT REGISTER
                                        </a>
                                        @endif
                                    </li>
                                    <li class="mm-active">
                                        @if(Session::get('read_in_out') == 1)
                                        <a href="{{url('/edit_visit_entry/'.$id)}}" class="mm-active">
                                            <i class="metismenu-icon">
                                            </i>EDIT <i class="fa fa-angle-up" aria-hidden="true"></i>
                                        </a>
                                        @endif
                                    </li>
                                    <li>
                                        @if(Session::get('read_visitor') == 1)
                                        <a href="{{url('/visitor_register')}}">
                                            <i class="metismenu-icon">
                                            </i>VISITOR REGISTER
                                        </a>
                                        @endif
                                    </li>
                                </ul>
                            </li>
                            <?php $type_ne = Session::get('type'); ?>
                            @if(@$type_ne == 0)
                            <li class="app-sidebar__heading">Admin</li>
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
                                    {{-- <li>
                                        <a href="elements-dropdowns.html">
                                            <i class="metismenu-icon">
                                            </i>IN OUT REGISTER
                                        </a>
                                    </li>
                                     <li>
                                        <a href="elements-icons.html">
                                            <i class="metismenu-icon">
                                            </i>Icons
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-badges-labels.html">
                                            <i class="metismenu-icon">
                                            </i>Badges
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-cards.html">
                                            <i class="metismenu-icon">
                                            </i>Cards
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-list-group.html">
                                            <i class="metismenu-icon">
                                            </i>List Groups
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-navigation.html">
                                            <i class="metismenu-icon">
                                            </i>Navigation Menus
                                        </a>
                                    </li>
                                    <li>
                                        <a href="elements-utilities.html">
                                            <i class="metismenu-icon">
                                            </i>Utilities
                                        </a>
                                    </li> --}}
                                </ul>
                            </li>
                            @endif

                            {{-- <li>
                                        <a href="components-accordions.html">
                                            <i class="metismenu-icon">
                                            </i>Accordions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-notifications.html">
                                            <i class="metismenu-icon">
                                            </i>Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-modals.html">
                                            <i class="metismenu-icon">
                                            </i>Modals
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-progress-bar.html">
                                            <i class="metismenu-icon">
                                            </i>Progress Bar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-tooltips-popovers.html">
                                            <i class="metismenu-icon">
                                            </i>Tooltips &amp; Popovers
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-carousel.html">
                                            <i class="metismenu-icon">
                                            </i>Carousel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-calendar.html">
                                            <i class="metismenu-icon">
                                            </i>Calendar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-pagination.html">
                                            <i class="metismenu-icon">
                                            </i>Pagination
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-scrollable-elements.html">
                                            <i class="metismenu-icon">
                                            </i>Scrollable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="components-maps.html">
                                            <i class="metismenu-icon">
                                            </i>Maps
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="tables-regular.html">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Tables
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Widgets</li>
                            <li>
                                <a href="dashboard-boxes.html">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Dashboard Boxes
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Forms</li>
                            <li>
                                <a href="forms-controls.html">
                                    <i class="metismenu-icon pe-7s-mouse">
                                    </i>Forms Controls
                                </a>
                            </li>
                            <li>
                                <a href="forms-layouts.html">
                                    <i class="metismenu-icon pe-7s-eyedropper">
                                    </i>Forms Layouts
                                </a>
                            </li>
                            <li>
                                <a href="forms-validation.html">
                                    <i class="metismenu-icon pe-7s-pendrive">
                                    </i>Forms Validation
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Charts</li>
                            <li>
                                <a href="charts-chartjs.html">
                                    <i class="metismenu-icon pe-7s-graph2">
                                    </i>ChartJS
                                </a>
                            </li>
                            <li class="app-sidebar__heading">PRO Version</li>
                            <li>
                                <a href="https://dashboardpack.com/theme-details/architectui-dashboard-html-pro/"
                                    target="_blank">
                                    <i class="metismenu-icon pe-7s-graph2">
                                    </i>
                                    Upgrade to PRO
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">

                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="mb-3 card">

                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 card">
                                    @if(Session::get('edit_in_out') == 0)
                                    <div class="alert alert-danger" role="alert">
                                        <b>You Don't Have The Permission To Edit This</b>
                                    </div>
                                    @endif
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            Input Field ( Edit )
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="POST" action="{{url('/update_visitor_data/'.$id)}}">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="row">


                                                                    <div class="col-md-12">
                                                                        <h4>Personal Details <small
                                                                                style="font-size:14px;color:rgb(229, 12, 12);text-transform:uppercase">(
                                                                                !!! Personal Details section cannot be
                                                                                updated from here - go to visitor
                                                                                register
                                                                                to update these !!! )</small></h4>
                                                                        <br>
                                                                    </div>
                                                                    <!-- Fields for entry-->
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">ID Number</label>
                                                                            <input type="text" class="form-control"
                                                                                name="adhar_no" id="box_1"
                                                                                aria-describedby="helpId"
                                                                                value="{{$no_of_visit->uid}}"
                                                                                placeholder="Enter ID Number" readonly
                                                                                required>
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
                                                                                value="{{$visitor->name}}"
                                                                                placeholder="Enter Full Name" readonly
                                                                                required>
                                                                            <small id="helpId"
                                                                                class="form-text text-primary">Required</small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Gender</label>
                                                                            <select class="form-control" disabled
                                                                                name="gender" id="box_3" required>
                                                                                @if($visitor->gender == "M")
                                                                                <option value="{{$visitor->gender}}">
                                                                                    Male
                                                                                </option>
                                                                                @endif
                                                                                @if($visitor->gender == "F")
                                                                                <option value="{{$visitor->gender}}">
                                                                                    Female
                                                                                </option>
                                                                                @endif
                                                                                @if($visitor->gender == "O")
                                                                                <option value="{{$visitor->gender}}">
                                                                                    Other
                                                                                </option>
                                                                                @endif
                                                                                <option value="" disabled>-----</option>
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
                                                                            <label for="">DOB <small class="text"
                                                                                    style="color:rgb(196, 114, 45)">
                                                                                    Format (DD/MM/YYYY) - if month and
                                                                                    date
                                                                                    are
                                                                                    in single digit add 0 infront of it
                                                                                </small></label>
                                                                            <input type="text" class="form-control"
                                                                                name="yob" id="box_4" readonly
                                                                                aria-describedby="helpId"
                                                                                placeholder="Enter Year Of Birth (dd/mm/yy)"
                                                                                value="{{$visitor->yob}}" required>
                                                                            <small id="helpId" style="display:inline"
                                                                                class="form-text text-primary">Required</small>
                                                                            <small id="helpId_date"
                                                                                style="display:inline;color:red;display:none"
                                                                                class="form-text text">Invalid date
                                                                                entry
                                                                                check (DD/MM/YYYY)</small>
                                                                        </div>
                                                                    </div>




                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="">Mobile No</label>
                                                                            <input type="text" class="form-control"
                                                                                name="mobile" id="mobile" readonly
                                                                                aria-describedby="helpId" maxlength="10"
                                                                                value="{{$visitor->mobile_no}}"
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
                                                                                aria-describedby="helpId" readonly
                                                                                value="{{$visitor->email}}"
                                                                                placeholder="Enter Email">

                                                                            <small id="helpId"
                                                                                class="form-text text-primary">Required</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mt-2">
                                                                        <div class="form-group">
                                                                            <label for="">Address</label>
                                                                            <input type="text" class="form-control"
                                                                                name="house" id="box_5"
                                                                                value="{{$visitor->house}}" readonly
                                                                                aria-describedby="helpId"
                                                                                placeholder="Enter Address">

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <hr>
                                                                    </div>
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
                                                                        placeholder="Enter compay name"
                                                                        id="company_details"
                                                                        value="{{$no_of_visit->company_details}}"
                                                                        required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Address</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_address" aria-describedby="helpId"
                                                                        placeholder="Enter compay name"
                                                                        id="company_address"
                                                                        value="{{$no_of_visit->company_address}}"
                                                                        required>
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Designation</label>
                                                                    <input type="text" class="form-control"
                                                                        name="designation" aria-describedby="helpId"
                                                                        placeholder="Enter compay name" required
                                                                        id="designation"
                                                                        value="{{$no_of_visit->designation}}">
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Website</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_website" aria-describedby="helpId"
                                                                        placeholder="Enter compay name"
                                                                        id="company_website"
                                                                        value="{{$no_of_visit->company_website}}">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Email</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_email" aria-describedby="helpId"
                                                                        placeholder="Enter compay name"
                                                                        id="company_email"
                                                                        value="{{$no_of_visit->company_email}}">

                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Company Mobile No</label>
                                                                    <input type="text" class="form-control"
                                                                        name="company_mobile" aria-describedby="helpId"
                                                                        placeholder="Enter mobile no"
                                                                        id="company_mobile"
                                                                        value="{{$no_of_visit->company_mobile}}">

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
                                                                        placeholder="Enter whome to meet" required
                                                                        id="whome_to_meet"
                                                                        value="{{$no_of_visit->whome_to_meet}}">
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Departiment</label>
                                                                    <input type="text" class="form-control"
                                                                        name="department" aria-describedby="helpId"
                                                                        placeholder="Enter person to meet" required
                                                                        id="department"
                                                                        value="{{$no_of_visit->department}}">
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Details</label>
                                                                    <input type="text" class="form-control"
                                                                        name="details" aria-describedby="helpId"
                                                                        id="details" placeholder="Enter details"
                                                                        required value="{{$no_of_visit->details}}">
                                                                    <small id="helpId"
                                                                        class="form-text text-primary">Required</small>
                                                                </div>
                                                            </div>

                                                            <!-- Fields for entry End-->
                                                            <div class="col-md-8 mt-4">
                                                                <button type="button" id="next" onclick="validatedate()"
                                                                    class="btn btn-primary">Update Fields</button>
                                                                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
                                                                {{-- <a href="{{url('/snap_edit/'.$id)}}"
                                                                target="_blank" id="update_visitor_picture"
                                                                class="btn btn-info"
                                                                style="color:white;display:none">Update Visitor
                                                                Picture</a> --}}

                                                                <button type="button" onclick="snappic()" id="snap_pic"
                                                                    class="btn btn-info">Update Visitor Picture</button>

                                                                &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;

                                                                <a href="{{ url("/print_pdf_new_updated/".$id) }}"
                                                                    onclick="window.location=''" target="_blank"
                                                                    class="btn btn-danger text-light">PRINT PDF</a>
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

    <script>
        function validatedate() {
            //     var date_input_text = $('#box_4').val();
            //     var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/;
            //     // Match the date format through regular expression
            //     if (date_input_text.match(dateformat)) {
            //         $('#helpId_date').focus();
            //         //Test which seperator is used '/' or '-'
            //         var opera1 = date_input_text.split('/');
            //         var opera2 = date_input_text.split('-');
            //         lopera1 = opera1.length;
            //         lopera2 = opera2.length;
            //         // Extract the string into month, date and year
            //         if (lopera1 > 1) {
            //             var pdate = date_input_text.split('/');
            //         } else if (lopera2 > 1) {
            //             var pdate = date_input_text.split('-');
            //         }
            //         var dd = parseInt(pdate[0]);
            //         var mm = parseInt(pdate[1]);
            //         var yy = parseInt(pdate[2]);
            //         // Create list of days of a month [assume there is no leap year by default]
            //         var ListofDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
            //         if (mm == 1 || mm > 2) {
            //             if (dd > ListofDays[mm - 1]) {
            //                 $('#helpId_date').show(500);
            //                 $('#helpId_date').focus();
            //                 alert("invalid date");
            //             } else {
            //                 $('#helpId_date').hide(500);
            //                 $('#at_submit').click();
            //             }
            //         }
            //         if (mm == 2) {
            //             var lyear = false;
            //             if ((!(yy % 4) && yy % 100) || !(yy % 400)) {
            //                 lyear = true;
            //                 $('#helpId_date').hide(500);
            //                 $('#at_submit').click();
            //             }
            //             if ((lyear == false) && (dd >= 29)) {
            //                 $('#helpId_date').show(500);
            //                 $('#helpId_date').focus();
            //                 alert("invalid date");
            //             }
            //             if ((lyear == true) && (dd > 29)) {
            //                 $('#helpId_date').show(500);
            //                 $('#helpId_date').focus();
            //                 alert("invalid date");
            //             }

            //         }
            //     } else {
            //         $('#helpId_date').show(500);
            //         $('#helpId_date').focus();
            //         alert("invalid date");
            //     }
            // }
            $('#at_submit').click();
        }
    </script>

    @if(Session::get('edit_in_out') == 0)
    <script>
        $('#department').attr('readonly', 'readonly');
        $('#details').attr('readonly', 'readonly');
        $('#whome_to_meet').attr('readonly', 'readonly');
        $('#company_mobile').attr('readonly', 'readonly');
        $('#company_email').attr('readonly', 'readonly');
        $('#company_website').attr('readonly', 'readonly');
        $('#designation').attr('readonly', 'readonly');
        $('#company_address').attr('readonly', 'readonly');
        $('#company_details').attr('readonly', 'readonly');
        $('#box_5').attr('readonly', 'readonly');
        $('#email').attr('readonly', 'readonly');
        $('#mobile').attr('readonly', 'readonly');
        $('#box_4').attr('readonly', 'readonly');
        $('#box_3').attr('disabled', 'disabled');
        $('#box_2').attr('readonly', 'readonly');
        $('#box_1').attr('readonly', 'readonly');
        $('#snap_pic').attr('disabled', 'disabled');
        $('#next').attr('disabled', 'disabled');
    </script>
    @else
    <script>
        function snappic() {
            // $('#update_visitor_picture').click();
            window.open('{{url("/snap_edit/".$id)}}', '_blank');
        }
    </script>
    @endif
    <script>
        $(document).keypress(
            function (event) {
                if (event.which == '13') {
                    event.preventDefault();
                }
            });
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