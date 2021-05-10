<nav class="navbar-top">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="row">
                    <ul>
                        <li><a class="navigation-link active" href="{{url('/')}}">Home</a></li>
                        <li><a id="dopd-btn" class="navigation-link" href="#">Sky Cards App</a></li>
                        <div id="dropd" class="dropd d-none">
                            <a href="">
                                <div class="hr-line row m-0 pl-3 pr-3 mb-3 pb-2">
                                    <h6>Sky Cards</h6>
                                    <div class="round orange">
                                        <p>Pro</p>
                                    </div>
                                </div>
                            </a>
                            <a href="">
                                <div class="row m-0 pl-3 pr-3 mt-3">
                                    <h6>Sky Cards</h6>
                                    <div class="round blue">
                                        <p>Elite</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <li><a class="navigation-link" href="{{route('frontend.sky_card_club')}}">Sky Connect</a></li>
                        <li><a class="navigation-link" href="{{route('frontend.sky_daily')}}">Sky Daily</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-2 d-flex justify-content-center">
                <img src="{{url('light_theme/assets/logo compressed.png')}}" class="default-logo header-logo" alt="" />
                <img src="{{url('light_theme/assets/logo compressed.png')}}" class="sticky-logo d-none" alt="" />
            </div>
            <div class="col-5">
                <div class="row">
                    <ul>
                        <li><a class="navigation-link" href="{{route('frontend.card_explorer')}}">Sky Club</a></li>
                        <li><a class="navigation-link" href="#">Pricing</a></li>
                        <li><a class="navigation-link" href="#">Contact</a></li>
                        @auth
                        <li>
                            <a class="navigation-link reg" href="{{route('frontend.auth.login')}}">{{auth()->user()->first_name}} {{auth()->user()->last_name}}</a>
                        </li>
                        @else
                        <li>
                            <a class="navigation-link reg" href="{{route('frontend.auth.login')}}">Register/Log In</a>
                        </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>