@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
    <section id="login-body">
        <div class="container">
            <div class="row">
                <div class="col-5 p-5">
                    <div class="card animscroll-init animscroll-animate" data-animscroll="fade-right">
                        <h1 data-animscroll="fade-up" data-animscroll-delay="100" class="animscroll-init animscroll-animate">Hello there,</h1>
                        <h6 data-animscroll="fade-up" data-animscroll-delay="200" class="animscroll-init animscroll-animate">Please Sign In to continue</h6>

                        <div class="btn-group mt-5">
                            <a data-animscroll="fade-up" data-animscroll-delay="300" class="btn-fb mt-3 animscroll-init animscroll-animate" href="#"><i class="fab fa-facebook-square"></i>&nbsp;&nbsp;Continue With Facebook</a>
                            <a data-animscroll="fade-up" data-animscroll-delay="400" class="btn-google mt-2 animscroll-init animscroll-animate" href="#"><i class="fab fa-google"></i>&nbsp;&nbsp;Continue With Google</a>
                        </div>

                        <div data-animscroll="fade-up" data-animscroll-delay="500" class="separator mt-4 mb-4 animscroll-init animscroll-animate">or</div>
                        @include('includes.partials.messages')

                        <form class="form" action="{{route('frontend.auth.login.post')}}" method="post">
                            {{csrf_field()}}

                            <input name="email" data-animscroll="fade-up" data-animscroll-delay="600" class="input animscroll-init animscroll-animate" type="email" placeholder="Email / Username">
                            <input name="password" data-animscroll="fade-up" data-animscroll-delay="700" class="input mt-2 animscroll-init animscroll-animate" type="password" placeholder="Password">

                            <button data-animscroll="fade-up" data-animscroll-delay="800" class="mt-5 animscroll-init animscroll-animate" type="submit">Continue</button>
                            <div class="row ml-0 mr-0 mt-2">
                                <div class="form-check">
                                    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <div class="forget ml-auto">
                                    <a href="{{ route('frontend.auth.password.reset') }}">Forget Password?</a>
                                </div>
                            </div>
                        </form>

                        <div class="not-member mt-4">
                            <p>Not a member yet? <a href="{{route('frontend.auth.register')}}">Register Now</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-7"><img  src="{{url('light_theme/assets/Group 69.png')}}" alt=""></div>
            </div>
        </div>
    </section>
@endsection

@push('after-scripts')
    @if(config('access.captcha.login'))
        @captchaScripts
    @endif
@endpush
