@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section id="card-holder">
        <div class="row m-0">
            <div class="left-cards">
                <div class="container pl-50">
                    <div id="counter-connect">
                        <div class="counter-card" data-animscroll="fade-up">
                            <div class="row">
                                <div class="col-3 p-0">
                                    <div class="border-card-right">
                                        <h1>1150 +</h1>
                                        <div class="row m-0 d-flex justify-content-center">
                                            <!-- <img src="assets/Group 81.svg" alt="" /> -->
                                            <i class="fas fa-globe"></i>
                                            <h3>Websites</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="border-card-right">
                                        <h1>28,500 +</h1>
                                        <div class="row m-0 d-flex justify-content-center">
                                            <!-- <img src="assets/Group 82.svg" alt="" /> -->
                                            <i class="fas fa-users"></i>
                                            <h3>People</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 p-0">
                                    <div class="border-card-right">
                                        <h1>110,000 +</h1>
                                        <div class="row m-0 d-flex justify-content-center">
                                            <!-- <img src="assets/Icon material-mail-outline.svg" alt="" /> -->
                                            <i class="fas fa-envelope"></i>
                                            <h3>Active email base</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <h1 class="orange-card-heading">Connect</h1>
                                        <h4>Now</h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="search-new ">
                        <div class="search-content">
                            <div class="row m-0">
                                <h6 class="mt-1 industry">Industry</h6>
                                <div class="form-group mt-1 industry-option">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Any Industry</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="col form-group mt-1 ml-5 position-relative industry-search">
                                    <input type="text" name="search" />
                                    <button type="submit position-absolute">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row m-0 mr-0 ">
                        <div class="col-4">
                            <a href="#" class="theam-btn-pick d-blocl-btn">Premium Cards</a>
                        </div>
                        <div class="col-4">
                            <a href="#" class="theam-btn-orange-light d-blocl-btn"
                            >Latest Cards</a
                            >
                        </div>
                        <div class="col-4">
                            <a href="#" class="theam-btn-blue d-blocl-btn">Lorem Ipsum</a>
                        </div>
                    </div>

                    <div class="row m-0 mt-5">
                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/aia.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>AIA Life</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/bennconsortium.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>Benn Consortium</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/excello.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>Excello</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/food studio.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>Food Studio</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/lanka tiles.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>Lanka Tiles</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/logo.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>Kenton Bike</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/logologo.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>Jetwing Travels</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/swisstek ceylon logo.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>Swisstek Ceylon</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-4 mb-3">
                            <div class="card">
                                <div class="row m-0">
                                    <div class="image-holder">
                                        <img src="{{url('light_theme/assets/logo/union logo.png')}}" alt="" />
                                    </div>
                                    <div class="name-and-desegnation ml-3">
                                        <h5>Union Assurance</h5>
                                        <h6>Production Manager</h6>
                                    </div>
                                </div>
                                <div class="contact-details mt-4 d-none">
                                    <p>
                                        <strong>Address : </strong> 16/3 Eliot place, colombo 6
                                    </p>
                                    <p><strong>Website : </strong> www.enspirer.com</p>
                                    <p><strong>Email : </strong> Jay@enspirer.com</p>
                                    <p><strong>Mobile : </strong> +94 711 111 343</p>
                                    <div class="row mt-3">
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-sm">Connect</a>
                                        </div>
                                        <div class="col-6 d-flex">
                                            <a href="#" class="theam-btn-blue-outline-sm">Share</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row ml-0 mt-3 mr-0">
                                    <div class="company-name">
                                        <a href="#">Tallentor International</a>
                                    </div>
                                    <a id="card-expand" class="ml-auto" href="#">
                                        <i
                                                id="card-drop-icon"
                                                class="fas fa-chevron-down ml-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="mt-5">

                    <section id="latest-connections" class="latest-connections mt-100">
                        <div class="container">
                            <h1 class="text-left black" data-animscroll="fade-up">Latest Connections</h1>

                            <div class="auto-card-connection mt-1">
                                <div class="swiper-container swiper-container-daily-latest">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div

                                                    data-animscroll="fade-up"
                                                    data-animscroll-delay="100"
                                            >
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <img
                                                                    src="{{url('light_theme/assets/companylogo/aia.png')}}"
                                                                    class="logo-company"
                                                                    alt=""
                                                                    srcset=""
                                                            />
                                                        </div>
                                                        <div class="col-7">
                                                            <h1>AIA Insurance</h1>
                                                            <h5>Financial</h5>
                                                            <h6>www.aialife.com.lk</h6>
                                                        </div>
                                                    </div>
                                                    <a href="#"
                                                    ><img
                                                                class="plus-img"
                                                                src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                                alt=""
                                                                srcset=""
                                                        /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div

                                                    data-animscroll="fade-up"
                                                    data-animscroll-delay="100"
                                            >
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <img
                                                                    src="{{url('light_theme/assets/companylogo/benn.png')}}"
                                                                    class="logo-company"
                                                                    alt=""
                                                                    srcset=""
                                                            />
                                                        </div>
                                                        <div class="col-7">
                                                            <h1 style="display: block;width: 100px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">Benn Consortium</h1>
                                                            <h5>Construction</h5>
                                                            <h6 style="display: block;width: 100px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">www.bennconsortium.com</h6>
                                                        </div>
                                                    </div>
                                                    <a href="#"
                                                    ><img
                                                                class="plus-img"
                                                                src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                                alt=""
                                                                srcset=""
                                                        /></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div

                                                    data-animscroll="fade-up"
                                                    data-animscroll-delay="100"
                                            >
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <img
                                                                    src="{{url('light_theme/assets/companylogo/ceylonbeatz.png')}}"
                                                                    class="logo-company"
                                                                    alt=""
                                                                    srcset=""
                                                            />
                                                        </div>
                                                        <div class="col-7">
                                                            <h1 style="">Ceylon Beats</h1>
                                                            <h5>Website</h5>
                                                            <h6 style="display: block;width: 100px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;">www.ceylonbeats.com</h6>
                                                        </div>
                                                    </div>
                                                    <a href="#"
                                                    ><img
                                                                class="plus-img"
                                                                src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                                alt=""
                                                                srcset=""
                                                        /></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div

                                                    data-animscroll="fade-up"
                                                    data-animscroll-delay="100"
                                            >
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <img
                                                                    src="{{url('light_theme/assets/companylogo/chatham.png')}}"
                                                                    class="logo-company"
                                                                    alt=""
                                                                    srcset=""
                                                            />
                                                        </div>
                                                        <div class="col-7">
                                                            <h1 style="display: block;width: 100px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis">Chatham Luxury</h1>
                                                            <h5>Store/Shopping</h5>
                                                            <h6 style="display: block;width: 100px;overflow: hidden;white-space: nowrap;text-overflow: ellipsis">www.chathamluxury.com/</h6>
                                                        </div>
                                                    </div>
                                                    <a href="#"
                                                    ><img
                                                                class="plus-img"
                                                                src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                                alt=""
                                                                srcset=""
                                                        /></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="swiper-slide">
                                            <div

                                                    data-animscroll="fade-up"
                                                    data-animscroll-delay="100"
                                            >
                                                <div class="card">
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <img
                                                                    src="{{url('light_theme/assets/companylogo/excello.png')}}"
                                                                    class="logo-company"
                                                                    alt=""
                                                                    srcset=""
                                                            />
                                                        </div>
                                                        <div class="col-7">
                                                            <h1>Exello</h1>
                                                            <h5>Construction</h5>
                                                            <h6>www.excello.lk/h6>
                                                        </div>
                                                    </div>
                                                    <a href="#"
                                                    ><img
                                                                class="plus-img"
                                                                src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                                alt=""
                                                                srcset=""
                                                        /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    <section id="latest-connections" class="populer-connections">
                        <div class="container">
                            <h1 class="text-left black" data-animscroll="fade-up">Popular Connections</h1>

                            <div class="auto-card-connection">
                                <div class="row">
                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="100"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/aia.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>AIA Insurance</h1>
                                                    <h5>Financial</h5>
                                                    <h6>www.aialife.com.lk</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/benn.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Benn Consortium</h1>
                                                    <h5>Construction</h5>
                                                    <h6>www.bennconsortium.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="300"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/ceylonbeatz.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Ceylon Beatz</h1>
                                                    <h5>Online Store</h5>
                                                    <h6>www.ceylonbeats.lk</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>



                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/chatham.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Chatham Luxury Watchers</h1>
                                                    <h5>Store/Shopping</h5>
                                                    <h6>www.chathamluxury.com/</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/excello.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Exello Construction </h1>
                                                    <h5>Construction</h5>
                                                    <h6>www.jatholdings.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/foodstudio.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Food Studio</h1>
                                                    <h5>Restaurant/Bar</h5>
                                                    <h6>www.foodstudio.lk</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/futureworld.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Future World</h1>
                                                    <h5>Online Store</h5>
                                                    <h6>www.futureworld.com.lk</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/hnbassurence.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>HNB Assurance</h1>
                                                    <h5>Finacial</h5>
                                                    <h6>www.hnbassurance.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/jetwing.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Jetwings Travels</h1>
                                                    <h5>Traveling Company</h5>
                                                    <h6>www.jetwingtravels.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/kenton.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Kenton</h1>
                                                    <h5>Store/Shopping</h5>
                                                    <h6>www.kentonbike.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/lankatiles.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Lanka Tiles</h1>
                                                    <h5>Company/Store</h5>
                                                    <h6>www.lankatiles.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>


                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/ceylincolife.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Ceylinco Life</h1>
                                                    <h5>Financial</h5>
                                                    <h6>www.ceylincolife.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/softlogicfinance.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Softlogic Finance</h1>
                                                    <h5>Financial</h5>
                                                    <h6>www.softlogicfinance.lk</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>
                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >

                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/swisstek.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>SwissTek</h1>
                                                    <h5>Construction </h5>
                                                    <h6>www.swisstekceylon.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >

                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/talentor.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Tallentor International</h1>
                                                    <h5>Software Company</h5>
                                                    <h6>www.tallentor.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >

                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/tswa.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>TSW Architecture</h1>
                                                    <h5>Construction Company</h5>
                                                    <h6>www.tswa.lk</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>

                                    <div
                                            class="col-4 mt-4"
                                            data-animscroll="fade-up"
                                            data-animscroll-delay="200"
                                    >

                                        <div class="card">
                                            <div class="row">
                                                <div class="col-5">
                                                    <img
                                                            src="{{url('light_theme/assets/companylogo/unionassurence.png')}}"
                                                            class="logo-company"
                                                            alt=""
                                                            srcset=""
                                                    />
                                                </div>
                                                <div class="col-7">
                                                    <h1>Union Assurence</h1>
                                                    <h5>Financial</h5>
                                                    <h6>wwww.unionassurance.com</h6>
                                                </div>
                                            </div>
                                            <a href="#"
                                            ><img
                                                        class="plus-img"
                                                        src="{{url('light_theme/assets/Icon ionic-md-add-circle.svg')}}"
                                                        alt=""
                                                        srcset=""
                                                /></a>
                                        </div>
                                    </div>












                                </div>
                            </div>
                        </div>
                    </section>
                </div>




            </div>
            <div id="right-holder" class="right-holder" style="position: fixed;right: 0; box-shadow: -4px 2.5px 10px 0 rgba(0, 80, 160, 0.21); ">
                <h1>
                    My Card <br />
                    Holder
                </h1>
                <div class="image-holder">
                    <img src="{{url('light_theme/assets/Group 149.svg')}}" alt="" />
                </div>
                <p class="mt-5">
                    Please log in to drag and drop cards in to your card holder
                </p>
                <div class="login-register mt-5">
                    <a class="mb-4 theam-btn-orange-light pl-5 pr-5" href="#">Log In</a>
                    <div class="separator">or</div>
                    <a class="mt-4 theam-btn-orange-outline pl-5 pr-5" href="#"
                    >Register</a
                    >
                </div>
            </div>
        </div>
    </section>
@endsection

@push('after-scripts')
<script>
    var swiper = new Swiper(".swiper-container-daily-latest", {
        slidesPerView: 4,
        spaceBetween: 1,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });
    var mySwiper = document.querySelector(".swiper-container-daily-latest")
        .swiper;

    $(".swiper-container").mouseenter(function () {
        mySwiper.autoplay.stop();
    });

    $(".swiper-container").mouseleave(function () {
        mySwiper.autoplay.start();
    });
</script>
@if(config('access.captcha.contact'))
    @captchaScripts
@endif
@endpush