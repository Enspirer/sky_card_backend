@extends('frontend.layouts.app')

@section('title','Digital Business card | Centralised Business cards Manager | SkyCards 0778669990')
@section('meta_description','Largest network of websites. Join the network and share your Digital business card with members of professional teams. Create My card Holder to organise your contacts.')

@section('content')


    <section id="contact-header">
        <div class="container pl-5 pr-5">
            <div class="form-card pl-5 pt-5 pl-5" data-animscroll="fade-up">
                <div class="row">
                    <div class="col-6">
                        <h1>Get in touch with us...</h1>
                        <p>
                            We would love to here from you , also <br />
                            <span> Contact us for Sky Cards Elite</span>
                        </p>
                        <img src="{{url('light_theme/assets/Group 544.png')}}" width="100%" alt="" />
                    </div>
                    <div class="col-6 pr-5">
                        <form action="{{route('frontend.contact_us')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Your name</label>
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>

                            <div class="form-group">
                                <label>Company name </label>
                                <input type="text" class="form-control" placeholder="Company name">
                            </div>

                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" placeholder="Enter email">
                            </div>

                            <div class="form-group">
                                <label>Contact number</label>
                                <input type="text" class="form-control" placeholder="Contact number">
                            </div>

                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Message</textarea>
                            </div>

                            <button class="theam-btn-orange-light ml-auto float-right">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="bottom-contact">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card" data-animscroll="fade-up">
                        <div class="round"><img src="{{url('light_theme/assets/Group 554.svg')}}" alt=""></div>
                        <h1>Hotline</h1>
                        <div class="card-body mt-2">
                            <div class="row m-0 d-flex justify-content-center">
                                <i class="fas fa-phone"></i>
                                <p>+94 778 669 990</p>
                            </div>

                            <div class="row m-0 d-flex justify-content-center">
                                <i class="fas fa-envelope"></i>
                                <p>hello@skycards.lk</p>
                            </div>

                            <div class="row m-0 d-flex justify-content-center">
                                <i class="fas fa-globe"></i>
                                <p>www.skycards.lk</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" data-animscroll="fade-up">
                        <div class="round"><img src="{{url('light_theme/assets/Group 557.svg')}}" alt=""></div>
                        <h1>Tech Support</h1>
                        <div class="card-body mt-2">


                            <div class="row m-0 d-flex justify-content-center">
                                <i class="fas fa-envelope"></i>
                                <p>support@skycards.lk</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4">
                    <div class="card" data-animscroll="fade-up">
                        <div class="round"><img src="{{url('light_theme/assets/Group 562.svg')}}" style="width: 50%;" alt=""></div>
                        <h1>Corporate Inquiries</h1>
                        <div class="card-body mt-2">


                            <div class="row m-0 d-flex justify-content-center">
                                <i class="fas fa-envelope"></i>
                                <p>elite@skycards.lk</p>
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














