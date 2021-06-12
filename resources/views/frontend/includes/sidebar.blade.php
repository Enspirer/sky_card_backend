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
                <a href="{{route('frontend.user.my_cards')}}" class="mm{{ Request::segment(1) == 'my_cards' ? '-active' : null }}">
                    <i class="fa fa-id-card" style="padding-right: 10px;color: dimgrey"></i>
                    My Cards
                </a>
            </li>
            <li>
                <a href="{{route('frontend.user.my_card_holder.index')}}" class="mm{{ Request::segment(1) == 'my_card_holder' ? '-active' : null }}">
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
                                <a href="{{route('frontend.user.companies.inbox',[$sidebar_company->id,1,1])}}">
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
                                <a href="{{route('frontend.user.companies.portfolio',[$sidebar_company->id])}}">
                                    <i class="metismenu-icon"></i>
                                    Portfolio
                                </a>
                            </li>
                        </ul>
                    </li>
                @endforeach
            @else

            @endif
        </ul>
    </div>
</div>