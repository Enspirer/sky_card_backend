<link rel="stylesheet" href="{{url('light_theme/preview_mobile/style.css')}}">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<!-- partial:index.partial.html -->

<div id="inner_wrap">
    <div class="row">

        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <style>
                        .swiper-container {width: 100%;padding-top: 50px;padding-bottom: 50px;}.swiper-slide {background-position: center;background-size: cover;width: 300px;height: 300px;}.swiper-slide img {display: block;width: 100%;}
                    </style>

                    <h3>You can select new Cards idea</h3>

                    <!-- Swiper -->
                    <div class="swiper-container mySwiper swiper-container-coverflow swiper-container-3d swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events" style="cursor: grab; width: 100%;">
                        <div class="swiper-wrapper" id="swiper-wrapper-2c5e10d39c101c99210" aria-live="polite" style="transition-duration: 0ms; transform: translate3d(-550px, 0px, 0px);">
                           @foreach($cardTempletes as $cardTemp)
                                <div class="swiper-slide" role="group" aria-label="1 / 9" onclick="select_template({{$cardTemp->id}})" style="transition-duration: 0ms; transform: translate3d(0px, 0px, -225px) rotateX(0deg) rotateY(112.5deg) scale(1); z-index: -1;">
                                    <img src="{{url('img/cards/1.png')}}">
                                    <div class="swiper-slide-shadow-left" style="opacity: 2.25; transition-duration: 0ms;"></div>
                                    <div class="swiper-slide-shadow-right" style="opacity: 0; transition-duration: 0ms;"></div>
                                </div>
                           @endforeach

                        </div>
                        <div class="swiper-pagination swiper-pagination-bullets"><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <br>
                    <h3>Select Cover Photos</h3> <br>


                    <div class="row" style="margin-bottom: 30px">
                        <div class="col-md-4">
                            <div class="card">
                                <div style="border-style: dashed;padding-top: 90px;padding-bottom:90px;text-align: center;color: grey;border-width: 2px;" data-toggle="modal" data-target="#cover_photo_picker">
                                    Add Cover Photo
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div style="background: url('https://swiperjs.com/demos/images/nature-3.jpg');height: 200px;background-repeat: no-repeat;background-size: cover;"></div>
                            </div>
                        </div>

                    </div>



                    <button class="btn btn-primary"  data-toggle="modal" data-target=".bd-example-modalmodal-lg">How to make own Template</button>





                    <!-- Swiper JS -->
                    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

                    <!-- Initialize Swiper -->
                    <script>
                        var swiper = new Swiper(".mySwiper", {
                            effect: "coverflow",
                            grabCursor: true,
                            centeredSlides: true,
                            slidesPerView: "auto",
                            coverflowEffect: {
                                rotate: 50,
                                stretch: 0,
                                depth: 100,
                                modifier: 1,
                                slideShadows: true,
                            },
                            pagination: {
                                el: ".swiper-pagination",
                            },
                            breakpoints: {
                                300: {
                                    slidesPerView: 2,
                                    spaceBetween: 6,
                                },
                                200: {
                                    slidesPerView: 4,
                                    spaceBetween: 40,
                                },
                                650: {
                                    slidesPerView: 2,
                                    spaceBetween: 1,
                                }
                            }
                        });
                    </script>
                </div>
            </div>

        </div>
        <div class="col-md-5">
            <div id="wrapper" style="perspective: 1300px;">
                <div class="phone view_2" id="phone_1" style="width: 375px;height: 667px;margin-top: 0px;">

                            <iframe src="{{route('frontend.user.companies.iframe_preview',[1,1,1])}}" style="background-color: white;" id="frame_1"></iframe>


                </div>
            </div>
            <div id="controls">


            </div>

            <div id="phone-controls">

            </div>
        </div>
    </div>


</div>


@push('before-scripts')
<script>
    function select_template(id) {
        document.getElementById('frame_1').src = '{{url('card-preview/'.$cardDetaials->id.'/'.$companyDetails->id)}}/'+id;
        document.getElementById('template_field').value = id;
    }
</script>
@endpush

@push('dialog-push')
@include('frontend.user.companies.sections.design_engine.dialogs.file_manager')
@endpush


<!-- partial -->
<script  src="{{url('light_theme/preview_mobile/script.js')}}"></script>