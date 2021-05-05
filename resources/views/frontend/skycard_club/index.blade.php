@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@section('content')
    <section id="sky-club">
        <div class="dark-round" data-animscroll="fade-up">
            <div class="container p-4">
                <div class="row">
                    <div class="col-6 pl-5" data-animscroll="fade-right">
                        <h3 data-animscroll="fade-up">Sky <span>Club</span></h3>
                        <h4 data-animscroll="fade-up" data-animscroll-delay="100">
                            Largest Network at <br />
                            your finger tips
                        </h4>
                        <p data-animscroll="fade-up" data-animscroll-delay="200">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr
                        </p>
                        <br />

                        <a
                                data-animscroll="fade-up"
                                data-animscroll-delay="100"
                                href="#"
                                type="button"
                                class="theam-btn-orange"
                        >View My Connections</a
                        >
                    </div>

                    <div class="col-6">
                        <img
                                src="{{url('light_theme/assets/Asset 1skynetwork.png')}}"
                                style="width: 80%; margin-left: 100px"
                                data-animscroll="fade-left"
                        />
                    </div>
                </div>
            </div>
        </div>
        <div
                class="light-round"
                data-animscroll="fade-up"
                data-animscroll-delay="300"
        ></div>
    </section>

    <section id="counter">
        <div class="container counter-container">
            <div class="counter-card" data-animscroll="fade-up">
                <div class="row">
                    <div class="col-3">
                        <div class="border-card-right">
                            <h1>1150 +</h1>
                            <div class="row m-0 d-flex justify-content-center">
                                <img src="{{url('light_theme/assets/Group 81.svg')}}" alt="" />
                                <h3>Websites</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border-card-right">
                            <h1>28,500 +</h1>
                            <div class="row m-0 d-flex justify-content-center">
                                <img src="{{url('light_theme/assets/Group 82.svg')}}" alt="" />
                                <h3>People</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border-card-right">
                            <h1>110,000 +</h1>
                            <div class="row m-0 d-flex justify-content-center">
                                <img src="{{url('light_theme/assets/Icon material-mail-outline.svg')}}" alt="" />
                                <h3>Active email base</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <a href="#">
                            <h1 class="orange-card-heading">MY</h1>
                            <h4>Connections</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="search" class="search width-sm">
        <div class="row">
            <i id="btn-search" class="fas fa-search"></i>
            <h3 class="search-text">Search</h3>
            <div class="search-content">
                <div class="row">
                    <h6 class="mt-1 display-none industry">Industry</h6>
                    <div class="form-group mt-1 display-none industry-option">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Any Industry</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col form-group mt-1 ml-5 position-relative display-none industry-search">
                        <input type="text" name="search" />
                        <button type="submit position-absolute">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="search-filter" class="display-none">
        <div class="container pl-5 pr-5">
            <div class="row m-0">
                <div class="left-result">
                    <p>1150 websites found</p>
                </div>
                <div class="right-filter ml-auto">
                    <div class="row m-0">
                        <p>Sort by</p>
                        <div class="form-group ml-3" style="margin-top: -5px;">
                            <select class="form-control">
                                <option>Latest</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-connections" class="latest-connections">
        <div class="container">
            <h1 data-animscroll="fade-up">Latest Connections</h1>

            <div class="auto-card-connection">
                <div class="swiper-container swiper-container-daily-latest">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div
                                    class="mt-4"
                                    data-animscroll="fade-up"
                                    data-animscroll-delay="100"
                            >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img
                                                    src="{{'light_theme/assets/JAT-Paints.png'}}"
                                                    class="logo-company"
                                                    alt=""
                                                    srcset=""
                                            />
                                        </div>
                                        <div class="col-7">
                                            <h1>JAT Holdings</h1>
                                            <h5>Fashion</h5>
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
                        </div>
                        <div class="swiper-slide">
                            <div
                                    class="mt-4"
                                    data-animscroll="fade-up"
                                    data-animscroll-delay="100"
                            >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img
                                                    src="{{'light_theme/assets/JAT-Paints.png'}}"
                                                    class="logo-company"
                                                    alt=""
                                                    srcset=""
                                            />
                                        </div>
                                        <div class="col-7">
                                            <h1>JAT Holdings</h1>
                                            <h5>Fashion</h5>
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
                        </div><div class="swiper-slide">
                            <div
                                    class="mt-4"
                                    data-animscroll="fade-up"
                                    data-animscroll-delay="100"
                            >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img
                                                    src="{{'light_theme/assets/JAT-Paints.png'}}"
                                                    class="logo-company"
                                                    alt=""
                                                    srcset=""
                                            />
                                        </div>
                                        <div class="col-7">
                                            <h1>JAT Holdings</h1>
                                            <h5>Fashion</h5>
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
                        </div><div class="swiper-slide">
                            <div
                                    class="mt-4"
                                    data-animscroll="fade-up"
                                    data-animscroll-delay="100"
                            >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img
                                                    src="{{'light_theme/assets/JAT-Paints.png'}}"
                                                    class="logo-company"
                                                    alt=""
                                                    srcset=""
                                            />
                                        </div>
                                        <div class="col-7">
                                            <h1>JAT Holdings</h1>
                                            <h5>Fashion</h5>
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
                        </div><div class="swiper-slide">
                            <div
                                    class="mt-4"
                                    data-animscroll="fade-up"
                                    data-animscroll-delay="100"
                            >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img
                                                    src="{{'light_theme/assets/JAT-Paints.png'}}"
                                                    class="logo-company"
                                                    alt=""
                                                    srcset=""
                                            />
                                        </div>
                                        <div class="col-7">
                                            <h1>JAT Holdings</h1>
                                            <h5>Fashion</h5>
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
                        </div><div class="swiper-slide">
                            <div
                                    class="mt-4"
                                    data-animscroll="fade-up"
                                    data-animscroll-delay="100"
                            >
                                <div class="card">
                                    <div class="row">
                                        <div class="col-5">
                                            <img
                                                    src="{{'light_theme/assets/JAT-Paints.png'}}"
                                                    class="logo-company"
                                                    alt=""
                                                    srcset=""
                                            />
                                        </div>
                                        <div class="col-7">
                                            <h1>JAT Holdings</h1>
                                            <h5>Fashion</h5>
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
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-connections" class="populer-connections">
        <div class="container">
            <h1 data-animscroll="fade-up">Popular Connections</h1>

            <div class="auto-card-connection">
                <div class="row">
                    <div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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
                    </div><div
                            class="col-3 mt-4"
                            data-animscroll="fade-up"
                            data-animscroll-delay="100"
                    >
                        <div class="card">
                            <div class="row">
                                <div class="col-5">
                                    <img
                                            src="{{url('light_theme/assets/JAT-Paints.png')}}"
                                            class="logo-company"
                                            alt=""
                                            srcset=""
                                    />
                                </div>
                                <div class="col-7">
                                    <h1>JAT Holdings</h1>
                                    <h5>Fashion</h5>
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

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="search-result" style="display: flex" class="display-none">
        <img
                src="{{url('light_theme/assets/team-leader-teamwork-concept_74855-6671.jpg')}}"
                style="margin: auto"
                alt=""
        />
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