<nav class="navbar-top">
    <div class="container">
        <div class="row">
            <div class=" web-menu col-md-5 col-5">
                <div class="row">
                    <ul>
                        <li><a class="navigation-link {{ Request::segment(1) === null ? 'active' : null }}" href="{{url('/')}}">Home</a></li>
                        <li>
                            <a id="dopd-btn" class="navigation-link" href="#">Sky Cards App</a>
                        </li>
                        <div id="dropd" class="dropd d-none">
                            <a href="{{route('frontend.sky_card_pro')}}">
                                <div class="hr-line row m-0 pl-3 pr-3 mb-3 pb-2">
                                    <h6>Sky Cards</h6>
                                    <div class="round orange">
                                        <p>Pro</p>
                                    </div>
                                </div>
                            </a>
                            <a href="{{route('frontend.sky_card_elite')}}">
                                <div class="row m-0 pl-3 pr-3 mt-3">
                                    <h6>Sky Cards</h6>
                                    <div class="round blue">
                                        <p>Elite</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <li><a class="navigation-link {{ Request::segment(1) === 'sky-connect' ? 'active' : null }}" href="{{route('frontend.sky_card_connect')}}">Sky Connect</a></li>
                        <li><a class="navigation-link {{ Request::segment(1) === 'sky-daily' ? 'active' : null }}" href="{{route('frontend.sky_daily')}}">Sky Daily</a></li>
                    </ul>
                </div>
            </div>

            <!-- -------------- mob -----  -->
            <div class="mob-menu-btn d-none2 col-md-5 col-sm-4 col-4">
                <a href="#"> <i class="fas fa-user"></i></a>
            </div>


            <div class="col-2 col-md-2 col-sm-4 col-4 d-flex justify-content-center p-0">
                <img src="{{url('light_theme/assets/logo compressed.png')}}" class="default-logo header-logo" alt="" />
                <img src="{{url('light_theme/assets/logo compressed.png')}}" class="sticky-logo d-none" alt="" />
            </div>

            <div class=" web-menu col-md-5 col-5">
                <div class="row">
                    <ul>
                        <li><a class="navigation-link {{ Request::segment(1) === 'sky-card-club' ? 'active' : null }}" href="{{route('frontend.sky_card_club')}}">Sky Club</a></li>
                        <li><a class="navigation-link {{ Request::segment(1) === 'sky-card-pricing' ? 'active' : null }}" href="{{route('frontend.sky_card_pricing')}}">Pricing</a></li>
                        <li><a class="navigation-link {{ Request::segment(1) === 'contact' ? 'active' : null }}" href="{{route('frontend.sky_card_contact')}}">Contact Us</a></li>
                        @auth
                        <li>
                            <div id="login-user" class="login-user row">
                                <img src="{{auth()->user()->picture}}" alt="">
                                <h6>{{auth()->user()->first_name}}</h6>
                                <i id="login-icon" class="fas fa-sort-down"></i>
                            </div>
                            <div id="dropdown-login" class="dropdown-login d-none">
                                <a href="{{route('frontend.user.dashboard')}}">
                                    <div class="row hr-bottum">
                                        <div class="col-2"><i class="fa fa-tachometer-alt" aria-hidden="true"></i></div>
                                        <div class="col-10">
                                            <h5>Dashboard</h5>
                                        </div>
                                    </div>
                                </a>


                                <a href="{{route('frontend.auth.logout')}}">
                                    <div class="row hr-bottum mt-3">
                                        <div class="col-2">
                                            <i class="red fa fa-sign-out" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-10">
                                            <h5 class="red">Log Out</h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                        @else
                        <li>
                            <a class="navigation-link reg" href="{{route('frontend.auth.login')}}">Register/Log In</a>
                        </li>

                        @endauth
                    </ul>
                </div>
            </div>

            <!-- -------------- Mob -------------  -->
            <div class="menu-mob col-4 col-md-5 col-sm-4 d-none2">
                <input type="checkbox" id="overlay-input" />
                <label for="overlay-input" id="overlay-button"><span></span></label>
                <div id="overlay">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sky Cards App</a></li>
                        <ul class="ul-sub">
                            <li><a href="#">Sky Cards Pro</a></li>
                            <li><a href="#">Sky Cards Elite</a></li>
                        </ul>

                        <li><a href="#">Sky Contact</a></li>
                        <li><a href="#">Sky Daily</a></li>
                        <li><a href="#">Sky Club</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</nav>