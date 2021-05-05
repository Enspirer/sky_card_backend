@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.auth.register_box_title'))

@section('content')
    <section id="login-body">
        <div class="container">
            <div class="row">
                <div class="col-5 p-5">
                    <div class="card animscroll-init animscroll-animate" data-animscroll="fade-right">
                        <h1>
                            Welcome,
                        </h1>
                        <h6>
                            Create your Sky account
                        </h6>
                        @include('includes.partials.messages')

                        <form class="form mt-4" action="{{route('frontend.auth.register.post')}}" method="post">
                            {{csrf_field()}}


                            <div class="form-group mb-2">
                                <label for="exampleInputEmail1">First Name</label>
                                <input name="first_name" type="text" class="input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
                            </div>

                            <div class="form-group mb-2">
                                <label for="exampleInputEmail1">Last Name</label>
                                <input name="last_name" type="text" class="input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Last Name">
                            </div>

                            <div class="form-group mb-2">
                                <label for="exampleInputEmail1">Email</label>
                                <input name="email" type="email" class="input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>

                            <div class="form-group mb-2">
                                <label for="exampleInputEmail1">Password</label>
                                <input name="password" type="password" class="input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
                            </div>

                            <div class="form-group mb-2">
                                <label for="exampleInputEmail1">Confirm Password</label>
                                <input name="password_confirmation" type="password" class="input form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Conform Password">
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">By joining I agree to
                                    <a href="#">Terms and Conditions</a></label>
                            </div>

                            <button class="mt-5" type="submit">
                                Register Now
                            </button>
                        </form>

                        <div class="not-member mt-4">
                            <p>Already have an account?<a href="{{route('frontend.auth.login')}}">Log In</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-7 pt-3">
                    <img class="mt-5 animscroll-init animscroll-animate" data-animscroll="fade-left" src="{{url('light_theme/assets/Group 353.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>




    {{--<div class="row justify-content-center align-items-center">--}}
        {{--<div class="col col-sm-8 align-self-center">--}}
            {{--<div class="card">--}}
                {{--<div class="card-header">--}}
                    {{--<strong>--}}
                        {{--@lang('labels.frontend.auth.register_box_title')--}}
                    {{--</strong>--}}
                {{--</div><!--card-header-->--}}

                {{--<div class="card-body">--}}
                    {{--{{ html()->form('POST', route('frontend.auth.register.post'))->open() }}--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-12 col-md-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--{{ html()->label(__('validation.attributes.frontend.first_name'))->for('first_name') }}--}}

                                    {{--{{ html()->text('first_name')--}}
                                        {{--->class('form-control')--}}
                                        {{--->placeholder(__('validation.attributes.frontend.first_name'))--}}
                                        {{--->attribute('maxlength', 191)--}}
                                        {{--->required()}}--}}
                                {{--</div><!--col-->--}}
                            {{--</div><!--row-->--}}

                            {{--<div class="col-12 col-md-6">--}}
                                {{--<div class="form-group">--}}
                                    {{--{{ html()->label(__('validation.attributes.frontend.last_name'))->for('last_name') }}--}}

                                    {{--{{ html()->text('last_name')--}}
                                        {{--->class('form-control')--}}
                                        {{--->placeholder(__('validation.attributes.frontend.last_name'))--}}
                                        {{--->attribute('maxlength', 191)--}}
                                        {{--->required() }}--}}
                                {{--</div><!--form-group-->--}}
                            {{--</div><!--col-->--}}
                        {{--</div><!--row-->--}}

                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--{{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}--}}

                                    {{--{{ html()->email('email')--}}
                                        {{--->class('form-control')--}}
                                        {{--->placeholder(__('validation.attributes.frontend.email'))--}}
                                        {{--->attribute('maxlength', 191)--}}
                                        {{--->required() }}--}}
                                {{--</div><!--form-group-->--}}
                            {{--</div><!--col-->--}}
                        {{--</div><!--row-->--}}

                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--{{ html()->label(__('validation.attributes.frontend.password'))->for('password') }}--}}

                                    {{--{{ html()->password('password')--}}
                                        {{--->class('form-control')--}}
                                        {{--->placeholder(__('validation.attributes.frontend.password'))--}}
                                        {{--->required() }}--}}
                                {{--</div><!--form-group-->--}}
                            {{--</div><!--col-->--}}
                        {{--</div><!--row-->--}}

                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group">--}}
                                    {{--{{ html()->label(__('validation.attributes.frontend.password_confirmation'))->for('password_confirmation') }}--}}

                                    {{--{{ html()->password('password_confirmation')--}}
                                        {{--->class('form-control')--}}
                                        {{--->placeholder(__('validation.attributes.frontend.password_confirmation'))--}}
                                        {{--->required() }}--}}
                                {{--</div><!--form-group-->--}}
                            {{--</div><!--col-->--}}
                        {{--</div><!--row-->--}}

                        {{--@if(config('access.captcha.registration'))--}}
                            {{--<div class="row">--}}
                                {{--<div class="col">--}}
                                    {{--@captcha--}}
                                    {{--{{ html()->hidden('captcha_status', 'true') }}--}}
                                {{--</div><!--col-->--}}
                            {{--</div><!--row-->--}}
                        {{--@endif--}}

                        {{--<div class="row">--}}
                            {{--<div class="col">--}}
                                {{--<div class="form-group mb-0 clearfix">--}}
                                    {{--{{ form_submit(__('labels.frontend.auth.register_button')) }}--}}
                                {{--</div><!--form-group-->--}}
                            {{--</div><!--col-->--}}
                        {{--</div><!--row-->--}}
                    {{--{{ html()->form()->close() }}--}}

                    {{--<div class="row">--}}
                        {{--<div class="col">--}}
                            {{--<div class="text-center">--}}
                                {{--@include('frontend.auth.includes.socialite')--}}
                            {{--</div>--}}
                        {{--</div><!--/ .col -->--}}
                    {{--</div><!-- / .row -->--}}
                {{--</div><!-- card-body -->--}}
            {{--</div><!-- card -->--}}
        {{--</div><!-- col-md-8 -->--}}
    {{--</div><!-- row -->--}}
@endsection

@push('after-scripts')
    @if(config('access.captcha.registration'))
        @captchaScripts
    @endif
@endpush
