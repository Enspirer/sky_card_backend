@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section id="vip-header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h1  data-animscroll="fade-up"
                         data-animscroll-delay="100">Sky <span>Club</span></h1>
                    <h5 data-animscroll="fade-up"
                        data-animscroll-delay="200">Join the most prestigious club today and enjoy</h5>
                    <h3  data-animscroll="fade-up"
                         data-animscroll-delay="300">Exclusive offers</h3>

                    <div class="arrow mt-4 mb-5">
                        <div class="row m-0"  data-animscroll="fade-up"
                             data-animscroll-delay="400">
                            <img src="{{url('light_theme/assets/Group 158.svg')}}" alt="">
                            <h6>Black</h6>
                        </div>

                        <div class="row ml-0 mr-0 mt-2"  data-animscroll="fade-up"
                             data-animscroll-delay="500">
                            <img src="{{url('light_theme/assets/Group 158.svg')}}" alt="">
                            <h6>Gold</h6>
                        </div>

                        <div class="row ml-0 mr-0 mt-2"  data-animscroll="fade-up"
                             data-animscroll-delay="600">
                            <img src="{{url('light_theme/assets/Group 158.svg')}}" alt="">
                            <h6>Platinum</h6>
                        </div>
                    </div>

                    <a  data-animscroll="fade-up"
                        data-animscroll-delay="700" class="theam-btn-orange-light" href="#">&nbsp;&nbsp; Join Now &nbsp; &nbsp;</a>
                </div>
                <div class="col-6"><img  data-animscroll="fade-left"
                                         class="right-img" src="{{url('light_theme/assets/skyvip.png')}}" alt=""></div>
            </div>
        </div>
    </section>


    <section id="vip-body-top">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card" data-animscroll="fade-up"
                         data-animscroll-delay="100">
                        <img class="img-sm" src="{{url('light_theme/assets/Mask Group 78.png')}}" alt="">
                        <div class="card-body">
                            <h6>April 30, 2021 - By Nikitha Restaurants </h6>
                            <h3>6 Abu Dhabi Iftars to try this Ramadan</h3>
                            <p>We should all be appreciating our Mums all year round
                                but when…</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" data-animscroll="fade-up"
                         data-animscroll-delay="200">
                        <img class="img-sm" src="{{url('light_theme/assets/Mask Group 79.png')}}" alt="">
                        <div class="card-body">
                            <h6>April 30, 2021 - By Nikitha Restaurants </h6>
                            <h3>Most romantic trip ever</h3>
                            <p>We should all be appreciating our Mums all year round
                                but when…</p>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" data-animscroll="fade-up"
                         data-animscroll-delay="300">
                        <img class="img-sm" src="{{url('light_theme/assets/Mask Group 80.png')}}" alt="">
                        <div class="card-body">
                            <h6>April 30, 2021 - By Nikitha Restaurants </h6>
                            <h3>Spicy dishes overflow</h3>
                            <p>We should all be appreciating our Mums all year round
                                but when…</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-3">
                    <div class="card color-card" data-animscroll="fade-up"
                         data-animscroll-delay="100">

                        <h1>Join the VIP
                            club today</h1>
                        <h6 class="mt-2">Please register with SKY VIP to receive
                            more offers just like this  </h6>

                        <form action="#" class="mt-4">
                            <input type="text" placeholder="Email Address">
                            <input class="mt-3" type="password" placeholder="Password">

                            <button class="mt-4" type="submit">Register Now</button>
                        </form>
                    </div>
                </div>

                <div class="col-9">
                    <div class="row">
                        <div class="col-6">
                            <div class="card" data-animscroll="fade-up"
                                 data-animscroll-delay="200">
                                <img class="img-lg" src="{{url('light_theme/assets/Mask Group 81.png')}}" alt="">
                                <div class="card-body">
                                    <h6>April 30, 2021 - By Nikitha Restaurants </h6>
                                    <h3>Most romantic trip ever</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card" data-animscroll="fade-up"
                                 data-animscroll-delay="300">
                                <img class="img-lg" src="{{url('light_theme/assets/Mask Group 82.png')}}" alt="">
                                <div class="card-body">
                                    <h6>April 30, 2021 - By Nikitha Restaurants </h6>
                                    <h3>Spicy dishes overflow</h3>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section id="load-more" data-animscroll="fade-up">
        <a class="theam-btn-orange-light" href="#">Load More</a>
    </section>





@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif
@endpush
