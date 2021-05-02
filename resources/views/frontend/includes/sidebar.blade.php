<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading"></li>
            <li>
                <a href="{{route('frontend.user.dashboard')}}" class="mm{{ Request::segment(1) == 'dashboard' ? '-active' : null }}">
                    <i class="fa fa-newspaper" style="padding-right: 10px;color: dimgrey"></i>
                    Sky Daily Feeds
                </a>
            </li>
            <li>
                <a href="" class="mm">
                    <i class="fa fa-id-card" style="padding-right: 10px;color: dimgrey"></i>
                    My Cards
                </a>
            </li>
            <li>
                <a href="index.html" class="mm">
                    <i class="fa fa-folder" style="padding-right: 10px;color: dimgrey"></i>
                    My Card Holder
                </a>
            </li>
            <li>
                <a href="index.html" class="mm">
                    <i class="fa fa-wallet" style="padding-right: 10px;color: dimgrey"></i>
                    Cards Panel
                </a>
            </li>
            <li>
                <a href="index.html" class="mm">
                    <i class="fa fa-calendar" style="padding-right: 10px;color: dimgrey"></i>
                    My Calender
                </a>
            </li>
            <li class="app-sidebar__heading">My Companies</li>
            <li>
                <a href="{{route('frontend.user.companies')}}" class="mm{{ Request::segment(1) == 'companies' ? '-active' : null }}">
                    <i class="fa fa-plus" style="padding-right: 10px;color: dimgrey"></i>
                    Create Company
                </a>
            </li>



            @if(count($get_company) != 0)
                @foreach($get_company as $sidebar_company)
                    <li class="mm{{ Request::segment(3) == $sidebar_company->id ? '-active' : null }}">
                        <a href="{{route('frontend.user.companies.dashboard',$sidebar_company->id)}}">
                            <i class="fa fa-building" style="padding-right: 10px;color: dimgrey"></i>
                            {{$sidebar_company->brand_name}}
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('frontend.user.companies.dashboard',$sidebar_company->id)}}">
                                    <i class="metismenu-icon"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="elements-dropdowns.html">
                                    <i class="metismenu-icon"></i>
                                    Inbox
                                </a>
                            </li>
                            <li>
                                <a href="elements-icons.html">
                                    <i class="metismenu-icon"></i>
                                    Employees
                                </a>
                            </li>
                            <li>
                                <a href="elements-badges-labels.html">
                                    <i class="metismenu-icon"></i>
                                    Published Post
                                </a>
                            </li>
                            <li>
                                <a href="elements-cards.html">
                                    <i class="metismenu-icon"></i>
                                    Portfolio
                                </a>
                            </li>
                        </ul>
                    </li>
                @endforeach
            @else

            @endif



            <li>
            <li class="app-sidebar__heading">My Workplace</li>
            <li>
                <a href="#">
                    <i class="fa fa-building" style="padding-right: 10px;color: dimgrey"></i>
                    Enspirer PVT (LTD)
                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                </a>
                <ul>
                    <li>
                        <a href="elements-buttons-standard.html">
                            <i class="metismenu-icon"></i>
                            View Feeds
                        </a>
                    </li>
                    <li>
                        <a href="elements-dropdowns.html">
                            <i class="metismenu-icon"></i>
                            Messages
                        </a>
                    </li>
                    <li>
                        <a href="elements-badges-labels.html">
                            <i class="metismenu-icon"></i>
                            My Published Post
                        </a>
                    </li>
                    <li>
                        <a href="elements-cards.html">
                            <i class="metismenu-icon"></i>
                            Event
                        </a>
                    </li>
                </ul>
            </li>

            <li class="app-sidebar__heading">Sky VIP</li>
            <li>
                <a href="dashboard-boxes.html">
                    <i class="metismenu-icon pe-7s-display2"></i>
                    Dashboard Boxes
                </a>
            </li>
        </ul>
    </div>
</div>