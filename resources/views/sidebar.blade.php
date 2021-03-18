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
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
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
                    <!-- <a href="{{url('/view_home')}}" id="in_entry">
                                    <i class="metismenu-icon pe-7s-rocket"></i>
                                    HOME
                                </a> -->
                    @endif
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-align-center" style="color: grey; text-align: left;" aria-hidden="true"></i>
                        CARD
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('/truck/data/scan')}}" id="in_entry">
                                <i class="fa fa-truck" style="color: grey; text-align: left;" aria-hidden="true"></i>
                                Driver / Helper
                            </a>
                        </li>
                        <li>
                            <a href="{{url('labour/data/scan')}}" id="in_entry">
                                <i class="fa fa-briefcase" style="color: grey; text-align: left;"
                                    aria-hidden="true"></i>
                                Temp Labour
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <!-- class="mm-active" -->

                </li>

                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-truck"></i>
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
                        <li>
                            <a href="{{url('/master/party/home')}}">
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