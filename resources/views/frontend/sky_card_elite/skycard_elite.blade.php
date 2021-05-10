@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
<section id="elite-header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 elite-desc">
                <div class="row ml-0 mr-0 mt-5">
                    <h1 data-animscroll="fade-up" data-animscroll-delay="100">
                        Sky Cards
                    </h1>
                    <div data-animscroll="fade-up" data-animscroll-delay="100" class="round ml-4">
                        <p>Elite</p>
                    </div>
                </div>
                <h5 data-animscroll="fade-up" data-animscroll-delay="200">For Corporates</h5>

                <div class="arrow mt-5 mb-5">
                    <div class="row m-0" data-animscroll="fade-up" data-animscroll-delay="400">
                        <img src="{{url('light_theme/assets/Rectangle 536.svg')}}" alt="" />
                        <h6>Centralised Business card database
                            <br> with customised CRM
                        </h6>
                    </div>


                </div>

                <a data-animscroll="fade-up" data-animscroll-delay="700" class="theam-btn btn-border-bold" href="#">&nbsp;&nbsp; Inquire Now &nbsp; &nbsp;</a>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 elite-img">
                <img data-animscroll="fade-left" class="right-img" src="{{url('light_theme/assets/Group 544.png')}}" alt="" />
            </div>
        </div>
    </div>
</section>

<section id="elite-features">
    <div class="container">
        <h1 data-animscroll="fade-up">Sky Cards Elite <span> Features </span></h1>
        <div class="admin-sels mt-5">
            <div class="row m-0" data-animscroll="fade-up" data-animscroll-delay="100">
                <div class="left-text">
                    <h2>Admin</h2>
                    <h6>Web based application</h6>
                </div>
                <div class="ml-auto right-text">
                    <h2>Sales Team</h2>
                    <h6>Mobile application
                        (IOS/Android)</h6>
                </div>
            </div>
            <img data-animscroll="fade-up" data-animscroll-delay="200" class="mt-4" width="100%" src="{{url('light_theme/assets/Group 491.png')}}" alt="">
        </div>
        <h3 class="mt-5 pt-4" data-animscroll="fade-up">Centralized Card Manager </h3>
        <h4 data-animscroll="fade-up">Admin Dashboard that controls everything</h4>

        <div class="elite-card row mt-5 pt-5">
            <div class="col-12 col sm-12 col-md-4 col-lg-4 mt-5">
                <div class="card" data-animscroll="fade-up" data-animscroll-delay="100">
                    <div class="round"><img src="{{url('light_theme/assets/Group 536.svg')}}" alt=""></div>
                    <p>The Centralised <br>
                        Business Card <br>
                        database Manager</p>
                </div>
            </div>

            <div class="col-12 col sm-12 col-md-4 col-lg-4 mt-5">
                <div class="card" data-animscroll="fade-up" data-animscroll-delay="100">
                    <div class="round"><img src="{{url('light_theme/assets/Group 541.svg')}}" alt=""></div>
                    <p>Customisable to <br>
                        specific company <br>
                        requirements</p>
                </div>
            </div>

            <div class="col-12 col sm-12 col-md-4 col-lg-4 mt-5">
                <div class="card" data-animscroll="fade-up" data-animscroll-delay="100">
                    <div class="round"><img src="{{url('light_theme/assets/Group 540.svg')}}" alt=""></div>
                    <p>Centralised <br>
                        Business card <br>
                        database with <br>
                        Customised CRM </p>
                </div>
            </div>
        </div>

    </div>
</section>


<section id="scan">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-sm-12 scan-desc">
                <h1 data-animscroll="fade-up" class="animscroll-init animscroll-animate">
                    Scan &amp; Save <br>
                    <span> Business Cards</span>
                </h1>
                <p data-animscroll="fade-up" class="animscroll-init animscroll-animate">
                    Use <span> Sky Card Reader </span> to capture all your business
                    cards and all the contact information can be quickly and
                    accurately read and save to your smartphone.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-sm-12 scan-img">
                <img data-animscroll="fade-left" src="{{url('light_theme/assets/Group 405.png')}}" alt="" class="animscroll-init animscroll-animate">
            </div>
        </div>
    </div>
</section>


<section id="scan">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-sm-12 scan-img">
                <img data-animscroll="fade-up" src="{{url('light_theme/assets/Group 330.png')}}" alt="" />
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-sm-12 scan-desc">

                <img src="{{url('light_theme/assets/Group 545.svg')}}" width="50%" style="width: 60%;" class="mt-5" alt="">
                <p data-animscroll="fade-up">
                    Select from our card designs or create your <br />
                    own <span> <b> Premium Design </b></span> <br /><br />Share your
                    card in all platforms.
                </p>

                <br><br>
                <a data-animscroll="fade-up" data-animscroll-delay="100" href="#" type="button" class="theam-btn">Create your Digital Business Card</a>


            </div>
        </div>
    </div>
</section>





<section id="demo">
    <div class="container pt-5">
        <h4 data-animscroll="fade-up" data-animscroll-delay="100">
            Request for a demo or
        </h4>
        <h3 data-animscroll="fade-up" data-animscroll-delay="100">
            Order Sky Card Elite Today
        </h3>
        <div class="row ml-0 mr-0 mt-5   d-flex justify-content-center">
            <a data-animscroll="fade-right" type="button" class="theam-btn-orange with ml-2 mr-2 pt" href="#">Inquire Now</a>
            <a data-animscroll="fade-left" type="button" class="theam-btn-light ml-2 mr-2 pt" href="#">Call Us +94 778 669 990</a>
        </div>
    </div>
</section>
@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
@captchaScripts
@endif
@endpush