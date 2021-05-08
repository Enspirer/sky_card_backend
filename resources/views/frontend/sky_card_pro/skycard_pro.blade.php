@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')

<section id="pro-header">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row ml-0 mr-0 mt-5">
                    <h1 data-animscroll="fade-up" data-animscroll-delay="100">
                        Sky Cards
                    </h1>
                    <div
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                            class="round ml-4"
                    >
                        <p>Pro</p>
                    </div>
                </div>

                <div class="arrow mt-5 mb-5">
                    <div
                            class="row m-0"
                            data-animscroll="fade-up"
                            data-animscroll-delay="400"
                    >
                        <img src="{{url('light_theme/assets/Rectangle 536.svg')}}" alt="" />
                        <h6>Scan, save and share business cards</h6>
                    </div>

                    <div
                            class="row ml-0 mr-0 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="400"
                    >
                        <img src="{{url('light_theme/assets/Rectangle 536.svg')}}" alt="" />
                        <h6>Create your own digital card</h6>
                    </div>
                </div>

                <a
                        data-animscroll="fade-up"
                        data-animscroll-delay="700"
                        class="theam-btn btn-border-bold"
                        href="#"
                >&nbsp;&nbsp; Join Now &nbsp; &nbsp;</a
                >
            </div>
            <div class="col-6">
                <img
                        data-animscroll="fade-left"
                        class="right-img"
                        src="{{url('light_theme/assets/Group454.png')}}"
                        alt=""
                />
            </div>
        </div>
    </div>
</section>

<section id="features-pro">
    <div class="container">
        <h1 data-animscroll="fade-up">Sky Card Pro <span> Features </span></h1>
        <div class="row ml-0 mr-0 mt-5">
            <div class="col-4">
                <div
                        class="card mt-3"
                        data-animscroll="fade-right"
                        data-animscroll-delay="300"
                >
                    <h2>Business Card <span> Reader </span></h2>
                    <p>Scan and save to contacts directly</p>
                    <div class="round">
                        <img class="icon" src="{{url('light_theme/assets/Group 455.svg')}}" alt="" />
                    </div>
                </div>

                <div
                        class="card mt-3"
                        data-animscroll="fade-right"
                        data-animscroll-delay="400"
                >
                    <h2>Sky <span> Club </span></h2>
                    <p>Join the business club and share contacts</p>
                    <div class="round">
                        <img class="icon" src="{{url('light_theme/assets/Path 2269.svg')}}" alt="" />
                    </div>
                </div>

                <div
                        class="card mt-3"
                        data-animscroll="fade-right"
                        data-animscroll-delay="500"
                >
                    <h2>Sky <span> VIP </span></h2>
                    <p>Enjoy exclusive offers</p>
                    <div class="round">
                        <img class="icon" src="{{url('light_theme/assets/Group 383.svg')}}" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-4">
                <img
                        data-animscroll="fade-up"
                        src="{{url('light_theme/assets/Rectangle 546.png')}}"
                        alt=""
                />
            </div>
            <div class="col-4">
                <div
                        class="card mt-3"
                        data-animscroll="fade-left"
                        data-animscroll-delay="600"
                >
                    <h2>
                        Create your own

                        <span> Digital Business Card </span>
                    </h2>

                    <div class="round">
                        <img class="icon" src={{url('light_theme/assets/Group 16.svg')}}" alt="" />
                    </div>
                </div>

                <div
                        class="card mt-3"
                        data-animscroll="fade-left"
                        data-animscroll-delay="700"
                >
                    <h2>Share <span> On </span></h2>
                    <div class="row" style="max-width: 80%">
                        <div class="col-4"><i class="fab fa-whatsapp"></i></div>
                        <div class="col-4"><i class="fas fa-sms"></i></div>
                        <div class="col-4"><i class="fas fa-envelope"></i></div>
                        <div class="col-4 mt-3">
                            <i class="fab fa-facebook-square"></i>
                        </div>
                        <div class="col-4 mt-3"><i class="fab fa-twitter"></i></div>
                        <div class="col-4 mt-3"><i class="fab fa-linkedin"></i></div>
                    </div>
                    <div class="round">
                        <img class="icon" src="{{url('light_theme/assets/Path 17.svg')}}" alt="" />
                    </div>
                </div>

                <div
                        class="card mt-3"
                        data-animscroll="fade-left"
                        data-animscroll-delay="800"
                >
                    <h2>Card <span> Organizer </span></h2>
                    <p>
                        Never lose new contacts Accessible from anywhere, any device
                    </p>
                    <div class="round">
                        <img class="icon" src="{{url('light_theme/assets/Group 12.svg')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="scan">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 data-animscroll="fade-up">
                    Scan & Save <br />
                    <span> Business Cards</span>
                </h1>
                <p data-animscroll="fade-up">
                    Use <span> Sky Card Reader </span> to capture all your business
                    cards and all the contact information can be quickly and
                    accurately read and save to your smartphone.
                </p>
            </div>
            <div class="col-6">
                <img
                        data-animscroll="fade-left"
                        src="{{url('light_theme/assets/Group 405.png')}}"
                        alt=""
                />
            </div>
        </div>
    </div>
</section>

<section id="scan">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img
                        data-animscroll="fade-up"
                        src="{{url('light_theme/assets/Group 330.png')}}"
                        alt=""
                />
            </div>
            <div class="col-6 pl-5">

                <img src="{{url('light_theme/assets/Group 545.svg')}}" width="50%" style="width: 60%;" class="mt-5" alt="">
                <p data-animscroll="fade-up">
                    Select from our card designs or create your <br />
                    own <span> <b> Premium Design </b></span> <br /><br />Share your
                    card in all platforms.
                </p>

                <br><br>
                <a
                        data-animscroll="fade-up"
                        data-animscroll-delay="100"
                        href="#"
                        type="button"
                        class="theam-btn"
                >Create your Digital Business Card</a
                >


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


