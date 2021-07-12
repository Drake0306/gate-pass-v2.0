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
                    <i class="metismenu-icon pe-7s-id"></i>
                        CARD
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            
                            

                            <li>
                                <a href="#">
                                <i class="metismenu-icon pe-7s-id"></i>
                                Driver / Helper
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        
                                        <a href="{{url('/truck/data/scan')}}" id="in_entry">
                                            Create
                                        </a>
                                    </li>
                                    <li>
                                        
                                        <a href="{{url('/truck/visit/list')}}" id="in_out_value">
                                            <i class="metismenu-icon">
                                            </i>List
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </li>
                        <li>
                            
                            

                            <li>
                                <a href="#">
                                <i class="metismenu-icon pe-7s-id"></i>
                                Temporary Labour 
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        
                                        <a href="{{url('labour/data/scan')}}" id="in_entry">
                                             Create
                                        </a>
                                    </li>
                                    <li>
                                        
                                    <a href="{{url('labour/data/list')}}" id="in_out_value">
                                        <i class="metismenu-icon">
                                        </i> List
                                    </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <!-- class="mm-active" -->

                </li>

                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-news-paper"></i>
                        REGISTER
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            @if(Session::get('read_in_out') == 1)
                            
                            @endif
                            @if(Session::get('read_in_out') == 1)
                            
                            @endif
                        </li>
                        <!-- <li>
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
                        </li> -->
                    </ul>
                </li>
                <?php $type_ne = Session::get('type'); ?>
                @if(@$type_ne == 0)
                <li class="app-sidebar__heading">Master</li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Party
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        
                        <li>
                            <a href="{{url('/master/party/home')}}">
                                <i class="metismenu-icon"></i>
                                 Create
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/master/party/list')}}">
                                <i class="metismenu-icon"></i>
                                 List
                            </a>
                        </li>
                        

                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Truck
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        
                        <li>
                            <a href="{{url('/party_wise_tt')}}">
                                <i class="metismenu-icon"></i>
                                 Create
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/party_wise_tt/list')}}">
                                <i class="metismenu-icon"></i>
                                 List
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Labour Type
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        
                        <li>
                            <a href="{{url('/labour_type/create')}}">
                                <i class="metismenu-icon"></i>
                                 Create
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/labour_type/list')}}">
                                <i class="metismenu-icon"></i>
                                 List
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Extra
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
                        

                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="metismenu-icon pe-7s-display2"></i>
                        Blacklist
                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="{{url('/blacklist')}}">
                                <i class="metismenu-icon"></i>
                                List
                            </a>
                        </li>

                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</div>