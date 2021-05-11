@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section id="daily">
        <div class="row m-0">
            <div class="left-menu">
                <div class="input-icons">
                    <i class="fa fa-search icon"> </i>
                    <input class="input-field" type="text">
                </div>

                <div class="button-column">
                    <a class="active" href="#">Featured Advertisements </a>
                    <a href="#">Today's Advertisements </a>
                    <a href="#">All Advertisements </a>
                    <a href="#">From Connections</a>
                </div>
            </div>
            <div class="right-content">
                <div class="container">
                    <div class="card-post card-radious">
                        <h1>Create your post</h1>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="row ml-auto pl-4 pr-4 d-flex justify-content-end">
                            <div class="row m-0">
                                <img src="{{url('light_theme/assets/Icon material-add-a-photo.svg')}}" alt="" srcset="">
                                <h6>Add a image</h6>
                            </div>

                            <div class="row m-0 ml-4">
                                <img src="{{url('light_theme/assets/Icon material-video-library.svg')}}" alt="" srcset="">
                                <h6>Add a video</h6>
                            </div>
                        </div>
                    </div>

                    <div class="card-add card-radious">
                        <div class="row m-0">
                            <div class="image-round"><img src="{{url('light_theme/assets/logo1.png')}}" alt=""></div>
                            <div class="name-add-company">
                                <h5>Food Studio</h5>
                                <h6>#food-studio</h6>
                            </div>
                            <div class="share-add ml-auto">
                                <a href="#">Share</a>
                            </div>
                        </div>
                        <h1>New Showroom opens at Kottawa today.  Get 25%
                            off on opening day !</h1>

                        <img class="main-image" src="{{url('light_theme/assets/bn1.png')}}" alt="">

                        <p>230 Views | 28 April 2021</p>
                        <div class="row m-0 d-flex justify-content-end">
                            <a href="#" class="theam-btn-blue">View More</a>
                            <a href="#" class="theam-btn-blue-outline ml-3">Connect</a>
                        </div>
                    </div>


                    <div class="card-add card-radious">
                        <div class="row m-0">
                            <div class="image-round"><img src="{{url('light_theme/assets/logo3.png')}}" alt=""></div>
                            <div class="name-add-company">
                                <h5>Lanka Tiles PLC</h5>
                                <h6>#lankatiles</h6>
                            </div>
                            <div class="share-add ml-auto">
                                <a href="#">Share</a>
                            </div>
                        </div>
                        <h1>New Showroom opens at Kottawa today.  Get 25%
                            off on opening day !</h1>

                        <img class="main-image" src="{{url('light_theme/assets/bn2.png')}}" alt="">

                        <p>230 Views | 28 April 2021</p>
                        <div class="row m-0 d-flex justify-content-end">
                            <a href="#" class="theam-btn-blue">View More</a>
                            <a href="#" class="theam-btn-blue-outline ml-3">Connect</a>
                        </div>
                    </div>


                    <div class="card-add card-radious">
                        <div class="row m-0">
                            <div class="image-round"><img src="{{url('light_theme/assets/logo2.png')}}" alt=""></div>
                            <div class="name-add-company">
                                <h5>Ceylinco Life</h5>
                                <h6>#ceylinco_life</h6>
                            </div>
                            <div class="share-add ml-auto">
                                <a href="#">Share</a>
                            </div>
                        </div>
                        <h1>New Showroom opens at Kottawa today.  Get 25%
                            off on opening day !</h1>

                        <img class="main-image" src="{{url('light_theme/assets/bn3.png')}}" alt="">

                        <p>230 Views | 28 April 2021</p>
                        <div class="row m-0 d-flex justify-content-end">
                            <a href="#" class="theam-btn-blue">View More</a>
                            <a href="#" class="theam-btn-blue-outline ml-3">Connect</a>
                        </div>
                    </div>


                    <div class="card-add card-radious">
                        <div class="row m-0">
                            <div class="image-round"><img src="{{url('light_theme/assets/JAT-Paints.png')}}" alt=""></div>
                            <div class="name-add-company">
                                <h5>JAT Holdings</h5>
                                <h6>#jatpaints</h6>
                            </div>
                            <div class="share-add ml-auto">
                                <a href="#">Share</a>
                            </div>
                        </div>
                        <h1>New Showroom opens at Kottawa today.  Get 25%
                            off on opening day !</h1>

                        <img class="main-image" src="{{url('light_theme/assets/Mask Group 72.png')}}" alt="">

                        <p>230 Views | 28 April 2021</p>
                        <div class="row m-0 d-flex justify-content-end">
                            <a href="#" class="theam-btn-blue">View More</a>
                            <a href="#" class="theam-btn-blue-outline ml-3">Connect</a>
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
