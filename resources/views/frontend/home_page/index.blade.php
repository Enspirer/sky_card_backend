@extends('frontend.layouts.app')

@section('title', 'Digital Business card | Business card reader app | SkyCards')
@section('meta_description','Share your Business card Digitally with Skycards. You can also scan paper Business cards and save on to your Smart phone and share on all platforms. Join the largest Business card Network and share your Business cards with top professionals to promote your Business')


@section('content')
    {{--@include('frontend.home_page.sections.top_slider')--}}
    {{--@include('frontend.home_page.sections.digital_bussiness_card_section')--}}
    {{--@include('frontend.home_page.sections.sky_club_section')--}}
    {{--@include('frontend.home_page.sections.sky_dialy_section')--}}

    {{--@include('frontend.home_page.sections.sky_vip')--}}

    {{--@include('frontend.home_page.sections.contact_organizer_section')--}}
    {{--@include('frontend.home_page.sections.sky_card_app_section')--}}

    <section id="top-slider-new">
        <div class="container">
            <div class="row">
            <div class=" des-top col col-12 col-md-12 col-lg-6 col-sm-12">
                    <h1 data-animscroll="fade-up">Sky Card <span> App</span></h1>
                    <h5 data-animscroll="fade-up" data-animscroll-delay="100">
                        <span>Touchless</span> Smart Business cards Solution
                    </h5>
                    <div class="row mt-5 top-slider-mt">
                        <div data-animscroll="fade-up" data-animscroll-delay="100" class="mr-3">
                            <a href="{{route('frontend.sky_card_pro')}}">Sky Cards
                                <div class="orange"><p>pro</p></div></a>
                            <p>For individuals</p>
                        </div>
                        <div data-animscroll="fade-up" data-animscroll-delay="100" class="">
                            <a href="{{route('frontend.sky_card_elite')}}">Sky Cards
                                <div class="blue"><p>Elite</p></div></a>
                            <p>For corporates</p>
                        </div>
                    </div>
                </div>
                <div class="img-top col col-12 col-md-12 col-lg-6 col-sm-12">
                    <img data-animscroll="fade-left" data-animscroll-delay="100" src="{{url('light_theme/assets/Asset 7icons.png')}}" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <section id="digital-business-card">
        <div class="container">
            <div class="row">

            <div class="col col-12 col-md-12 col-lg-6 col-sm-12">
                    <img data-animscroll="fade-left" src="{{url('light_theme/assets/Group 330.png')}}" alt=""/>
                </div>

                <div class="col col-12 col-md-12 col-lg-6 col-sm-12 justify-content-center impression">
                    <img src="{{url('light_theme/assets/digital_f.png')}}" width="50%" style="width: 60%;" class="mt-5" alt="">

                    <p data-animscroll="fade-up" data-animscroll-delay="200">
                        Select from our card designs or create your <br />
                        own <span> <b> Premium Design </b></span> <br /><br />Share your
                        card in all platforms.
                    </p>
                    <br/>
                    <br/>
                    <br/>
                    <a data-animscroll="fade-up" data-animscroll-delay="100" href="#" type="button" class="theam-btn">Create your Digital Business Card</a>
                </div>
            </div>
        </div>
    </section>

    <section id="sky-club">
        <div class="dark-round" data-animscroll="fade-up">
            <div class="container p-4">
                <div class="row">
                <div class="col-12 col col-md-12 col-lg-6 col-sm-12 d-flex justify-content-center">
                        <img src="{{url('light_theme/assets/Asset 1skynetwork.png')}}" style="width: 80%" data-animscroll="fade-right"/>
                    </div>
                    <div class="col-12 col  col-md-12 col-lg-6 col-sm-12 connect" data-animscroll="fade-left">
                        <h1 data-animscroll="fade-up">Sky <span>Connect</span></h1>
                        <h5 data-animscroll="fade-up" data-animscroll-delay="100">
                            The largest<b> Network of websites </b> with <br>
                            <b> Digital Business card holder</b> solution
                        </h5>
                        <p data-animscroll="fade-up" data-animscroll-delay="200">
                            Connect, communicate and share within the largest network of
                            active websites.
                        </p>
                        <br/>
                        <br/>
                        <br/>
                        <a data-animscroll="fade-up" data-animscroll-delay="100" href="{{route('frontend.sky_card_connect')}}" type="button" class="theam-btn-light">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="light-round" data-animscroll="fade-up" data-animscroll-delay="300"></div>
    </section>

    <section id="sky-daily">
        <div class="container">
            <div class="row">
            <div class="col-12 col col-md-12 col-lg-6 col-sm-12 desc-daily" data-animscroll="fade-right">
                    <h1 data-animscroll="fade-up">Sky <span> Promo</span></h1>
                    <h5 data-animscroll="fade-up">The ultimate marketing solution with <br>exclusive client database</h5>
                    <br/>
                    <br/>
                    <div class="buttons-daily" style="max-width: 250px">
                        <a type="button" style="width: 100%" data-animscroll="fade-up" class="theam-btn-blue" href="#">E-mail marketing solution</a>
                        <br/>
                        <br/>
                        <a type="button" style="width: 100%" data-animscroll="fade-up" class="theam-btn-blue" href="#">SMS marketing Solution</a>
                    </div>

                    <p data-animscroll="fade-up" data-animscroll-delay="200">
                        Promote your business to Registered and authenticated websites and
                        members of largest sky cards community.
                    </p>
                    <br/>
                    <br/>
                    <a data-animscroll="fade-up" data-animscroll-delay="300" href="#" class="theam-btn" type="button">Learn More</a>
                </div>
                <div class="col-12 col col-md-12 col-lg-6 col-sm-12 image-daily" data-animscroll="fade-left">
                    <img src="{{url('light_theme/assets/Group 70.png')}}" style="width: 100%" alt="" />
                </div>
            </div>
        </div>
    </section>

    <section id="sky-vip">
        <div class="left-blue" data-animscroll="fade-right" data-animscroll-delay="100"></div>
        <div class="container vip-container">
            <div class="row">
            <div class="col-12 col col-md-12 col-lg-6 col-sm-12 vip-desc">
                    <div class="details">
                        <h1 data-animscroll="fade-up">Sky <span>Club</span></h1>
                        <h5 data-animscroll="fade-up">
                            Become a member to get your Sky VIP <br />
                            card today, and enjoy
                        </h5>
                        <h4 data-animscroll="fade-up">Exclusive Offers</h4>
                        <div class="button-set">
                            <a data-animscroll="fade-up" data-animscroll-delay="100" href="#" class="theam-btn-light" type="button" style="padding: 10px 50px">Hotels</a>
                            <a data-animscroll="fade-up" data-animscroll-delay="200" href="#" class="theam-btn-light" type="button" style="padding: 10px 50px">Restaurants</a>
                            <a data-animscroll="fade-up" data-animscroll-delay="300" href="#" class="theam-btn-light" type="button">Clubs</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col col-md-12 col-lg-6 col-sm-12 vip-card">
                    <img data-animscroll="fade-left" style="width: 80%" src="{{url('light_theme/assets/Layer 2.png')}}" alt=""/>
                </div>
            </div>
        </div>
    </section>

    <section id="contract-organizer">
        <div class="container">
            <div class="row">
            <div class="col-12 col col-md-12 col-lg-6 col-sm-12" data-animscroll="fade-right">
                    <img src="{{url('light_theme/assets/Group 702.png')}}" style="width: 100%" alt="" />
                </div>
                <div class="col-12 col pl-5 col-md-12 col-lg-6 col-sm-12" data-animscroll="fade-left">
                    <h1 data-animscroll="fade-up">
                        My Business <br />
                        <span> Card Holder</span>
                    </h1>
                    <h5 data-animscroll="fade-up" data-animscroll-delay="100">
                        Organise your contact the way you want
                    </h5>
                    <p data-animscroll="fade-up" data-animscroll-delay="200">
                        All contacts are stored in a cloud and synchronized across your
                        devices, allowing access from your smartphone, tablet or computer.
                    </p>
                    <a data-animscroll="fade-up" data-animscroll-delay="300" href="#" class="theam-btn mt-4" type="button">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <section id="sky-card-app">
        <div class="dark-round" data-animscroll="fade-up" data-animscroll-delay="100">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-12 col-md-12 col-lg-7 col-sm-12 pl-5 app-desc" data-animscroll="fade-right">
                        <h1 data-animscroll="fade-up" data-animscroll-delay="100">
                            Sky Card App
                        </h1>
                        <br/>
                        <h5 data-animscroll="fade-up" data-animscroll-delay="200">
                            Enter business cards into your smartphone
                        </h5>
                        <h6 data-animscroll="fade-up" data-animscroll-delay="200">
                            Fast, easy and accurate.
                        </h6>
                        <p data-animscroll="fade-up" data-animscroll-delay="300">
                            Use your smartphone to scan business cards and save all the data
                            to your contact list.
                        </p>
                        <br/>
                        <br/>
                        <h5 data-animscroll="fade-up" data-animscroll-delay="100">
                            Share your contacts
                        </h5>
                        <h6 data-animscroll="fade-up" data-animscroll-delay="200">
                            Touchless in 2021
                        </h6>
                        <p data-animscroll="fade-up" data-animscroll-delay="300">
                            Network and share your contact details with just one tap.
                            Sending an e-mail with your digital business card now only takes
                            a few seconds.
                        </p>
                        <br/>
                        <div class="row download-app">
                            <div class="col-4" data-animscroll="fade-up" data-animscroll-delay="300">
                                <a href="#">
                                    <img src="{{url('light_theme/assets/Mask Group 6.png')}}" style="width: 100%" alt=""/>
                                </a>
                            </div>
                            <div class="col-4" data-animscroll="fade-up" data-animscroll-delay="400">
                                <a href="#">
                                    <img src="{{url('light_theme/assets/Mask Group 7.png')}}" style="width: 100%" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>

                 
            <div class="col-12 col-md-12 col-lg-4 col-sm-12 app-img" data-animscroll="fade-left">
                        <img src="{{url('light_theme/assets/Group 71.png')}}" style="width: 100%" alt="" />
                    </div>
                </div>
            </div>
        </div>
        <div class="light-round" data-animscroll="fade-up" data-animscroll-delay="200"></div>
    </section>

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif
@endpush














