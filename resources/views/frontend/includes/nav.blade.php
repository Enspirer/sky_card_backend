<nav class="navbar-top">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="row">
                    <ul>
                        <li><a class="navigation-link active" href="{{url('/')}}">Home</a></li>
                        <li>
                            <a id="dopd-btn" class="navigation-link" href="#"
                            >Sky Cards App</a
                            >
                        </li>
                        <div id="dropd" class="dropd d-none">
                            <a href="{{route('frontend.sky_card_pro')}}">
                                <div class="hr-line row m-0 pl-3 pr-3 mb-3 pb-2">
                                    <h6>Sky Cards</h6>
                                    <div class="round orange"><p>Pro</p></div>
                                </div></a
                            >
                            <a href="{{route('frontend.sky_card_elite')}}">
                                <div class="row m-0 pl-3 pr-3 mt-3">
                                    <h6>Sky Cards</h6>
                                    <div class="round blue"><p>Elite</p></div>
                                </div>
                            </a>
                        </div>
                        <li><a class="navigation-link" href="{{route('frontend.sky_card_club')}}">Sky Connect</a></li>
                        <li><a class="navigation-link" href="{{route('frontend.sky_daily')}}">Sky Daily</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <img
                        src="{{url('light_theme/assets/logo compressed.png')}}"
                        class="default-logo header-logo"
                        alt=""
                />
                <img
                        src="{{url('light_theme/assets/logo compressed.png')}}"
                        class="sticky-logo d-none"
                        alt=""
                />
            </div>
            <div class="col-5">
                <div class="row">
                    <ul>
                        <li><a class="navigation-link" href="#">Sky Card Holder</a></li>
                        <li><a class="navigation-link" href="#">Contact</a></li>
                        <li><a class="navigation-link" href="#">About</a></li>
                        @auth
                        <li>
                            <div id="login-user" class="login-user row">
                                <img src="{{auth()->user()->picture}}" alt="">
                                <h6>{{auth()->user()->first_name}}</h6>
                                <i id="login-icon" class="fas fa-sort-down    "></i>
                            </div>
                            <div id="dropdown-login" class="dropdown-login d-none">
                                <a href="{{route('frontend.user.dashboard')}}">  <div class="row hr-bottum">
                                        <div class="col-2"><i class="fa fa-tachometer-alt" aria-hidden="true"></i></div>
                                        <div class="col-10"><h5>Dashboard</h5></div>
                                    </div></a>


                                <a href="{{route('frontend.auth.logout')}}">  <div class="row hr-bottum mt-3">
                                        <div class="col-2"><i class="red fa fa-sign-out" aria-hidden="true"></i></div>
                                        <div class="col-10"><h5 class="red">Log Out</h5></div>
                                    </div></a>
                            </div>
                            <!-- <a class="navigation-link reg" href="#">Register/Log In</a> -->
                        </li>
                        @elseauth


                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>