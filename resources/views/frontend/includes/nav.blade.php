<nav class="navbar-top">
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="row">
                    <ul>
                        <li><a class="navigation-link active" href="{{url('/')}}">Home</a></li>
                        <li><a class="navigation-link" href="#">Sky Cards App</a></li>
                        <li><a class="navigation-link" href="#">Sky Club</a></li>
                        <li><a class="navigation-link" href="#">Sky Daily</a></li>
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
                        <li><a class="navigation-link" href="#">Sky Card Holder</a></li>
                        <li><a class="navigation-link" href="#">Contact</a></li>
                        <li><a class="navigation-link" href="#">About</a></li>
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