@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-4 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="100">
                    <div class="price-card">
                        <div class="card-header blue-bg">
                            <img src="{{url('light_theme/assets/Group 565.svg')}}" alt="">
                            <h1>Pelicon</h1>

                        </div>
                        <div class="card-body">
                            <h2 class="blue">$0 / Year</h2>
                            <p class="blue">It's Free...! <br>
                                forever</p>

                            <h3 class="mt-5">What's Included ?</h3>
                            <ul>
                                <li>Sky Card Pro Features</li>
                                <li>Create Digital card</li>
                                <li>Select design from templates</li>
                                <li>Cover photo</li>
                                <li>Share on all platforms</li>
                                <li>Sky Connect</li>
                                <li>Join the Business Club and share contact</li>
                            </ul>

                            <div class="bottom-btn d-flex mt-5">
                                <a href="#" class="theam-btn-blue m-auto b-none">Start Now</a>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-4 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="300">
                    <div class="price-card">
                        <div class="card-header green-bg">
                            <img src="{{url('light_theme/assets/Group 570.svg')}}" alt="">
                            <h1>Falcon</h1>

                        </div>
                        <div class="card-body">
                            <h2 class="green">$20 / Year</h2>
                            <p class="green">Not only a Business card. <br>
                                It's a lifestyle</p>

                            <h3 class="mt-5">All features of Pelicon</h3>
                            <ul>
                                <li>Customised design options</li>
                                <li>6 images in Portfolio</li>
                                <li>3 Videos in video gallery</li>
                                <li>Unlimited custom links</li>
                                <li>Sky Daily</li>
                                <li>share your messages with the members
                                    Sky Club</li>
                                <li>Exclusive offers with Sky VIP card</li>
                            </ul>

                            <div class="bottom-btn d-flex mt-5">
                                <a href="#" class="theam-btn-blue m-auto green-bg b-none">Start Now</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-4 animscroll-init animscroll-animate" data-animscroll="fade-up" data-animscroll-delay="500">
                    <div class="price-card">
                        <div class="card-header orange-bg">
                            <img src="{{url('light_theme/assets/Group 571.svg')}}" alt="">
                            <h1>Eagle</h1>

                        </div>
                        <div class="card-body">
                            <h2 class="orange">Tailor - Made</h2>
                            <p class="orange">Corporate Solution for your <br>
                                organization</p>

                            <h3 class="mt-5">All features of Falcon</h3>
                            <ul>
                                <li>Sky Cards Elite Features</li>
                                <li>Customised CRM</li>
                                <li>Designs with Corporate themes</li>
                                <li>Manage cards of large teams</li>
                                <li>Dedicated account manager</li>
                                <li>Monthly payment options</li>

                            </ul>

                            <div class="bottom-btn d-flex mt-5">
                                <a href="#" class="theam-btn-blue m-auto b-none orange-bg">Start Now</a>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection

@push('after-scripts')
@if(config('access.captcha.contact'))
    @captchaScripts
@endif
@endpush
