


</div>

<script
        src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"
></script>
<script
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"
></script>
<script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"
></script>

<script>
    $(document).ready(function () {
        var search_status = 0;
        $(".social").click(function () {
            $("#share").removeClass("d-none");
        });

        $("#btn-close").click(function () {
            $("#share").addClass("d-none");
        });

        $("#collapse-btn").click(function () {
            if (!$(".collapse").hasClass("show")) {
                $("#down-icon").removeClass("fa-chevron-down");
                $("#down-icon").addClass("fa-chevron-up");
            } else {
                $("#down-icon").addClass("fa-chevron-down");
                $("#down-icon").removeClass("fa-chevron-up");
            }
        });

        $("#collapse-btn2").click(function () {
            if (!$(".collapse").hasClass("show")) {
                $("#down-icon2").removeClass("fa-chevron-down");
                $("#down-icon2").addClass("fa-chevron-up");
            } else {
                $("#down-icon2").addClass("fa-chevron-down");
                $("#down-icon2").removeClass("fa-chevron-up");
            }
        });

        $("#collapse-btn3").click(function () {
            if (!$(".collapse").hasClass("show")) {
                $("#down-icon3").removeClass("fa-chevron-down");
                $("#down-icon3").addClass("fa-chevron-up");
            } else {
                $("#down-icon3").addClass("fa-chevron-down");
                $("#down-icon3").removeClass("fa-chevron-up");
            }
        });

        $("#collapse-btn4").click(function () {
            if (!$(".collapse").hasClass("show")) {
                $("#down-icon4").removeClass("fa-chevron-down");
                $("#down-icon4").addClass("fa-chevron-up");
            } else {
                $("#down-icon4").addClass("fa-chevron-down");
                $("#down-icon4").removeClass("fa-chevron-up");
            }
        });
    });
</script>



<script>
    $( document ).ready(function() {
        //First Name
        $(".sky_temp_first_name").html("{{$name_seperation[0]}}");
        //Last Name
        $(".sky_temp_last_name").html('{{$name_seperation[1]}}');
        //Phone Number
        $(".sky_temp_phone_number1").html("{{$phone_number->phone_number1}}");
        //Address
        $(".sky_temp_address").html("{{$card_details->address}}");
        //Company Name
        $(".sky_temp_company_name").html("{{$company_details->brand_name}}");
        //Email
        $(".sky_temp_email_address").html("{{$card_details->email}}");
        //Website
        $(".sky_temp_website").html("{{$card_details->website}}");




        $(".sky_temp_facebook_link").attr("href", "https://www.facebook.com/{{json_decode($card_details->social_media_links)->facebook_link}}");
        $(".sky_temp_twitter_link").attr("href", "https://www.twitter.com/{{json_decode($card_details->social_media_links)->facebook_link}}");
        $(".sky_temp_linkedin_link").attr("href", "sky_temp_linkedin_link");
        $(".sky_temp_instargram_link").attr("href", "sky_temp_instargram_link");







        //profile_picture
        @if($card_details->avatar_image != null)

            $('.sky_temp_profile_picture').attr("src", "{{url('files/preview_files/')}}/{{$card_details->avatar_image}}");
        @else
            @if($company_details->logo_img != 'no_img.jpg')
              $('.sky_temp_profile_picture').attr("src", "{{url('files/preview_files/')}}/{{$company_details->logo_img}}");
            @else
              $('.sky_temp_profile_picture').attr("src", "https://nichemodels.co/wp-content/uploads/2019/03/user-dummy-pic.png");
            @endif
        @endif



        @if($card_details->cover_image !=null)
        //Cover Photo
        $(".sky_temp_cover_photo").css('background-image','url({{$card_details->cover_image}})');
        @else
        $(".sky_temp_cover_photo").css('background-image','url(https://image.freepik.com/free-vector/flower-seamless-pattern-background-elegant-texture-backgrounds_1217-1124.jpg)');
        @endif

        //Job Title
        $(".sky_temp_job_title").html("{{$card_details->job_position}}");

        $(".sky_temp_description").html("{{$card_details->description}}");
        $('.sky_temp-ca-call').attr("href", "tel:{{$phone_number->phone_number1}}");
        $('.sky_temp_ca-whatsapp').attr("href", "https://api.whatsapp.com/send?phone={{$phone_number->phone_number1}}");
        $('.sky_temp_ca_sms').attr("href", "sms:{{$phone_number->phone_number1}}");
        $('.sky_temp_ca_email').attr("href", "mailto:{{$card_details->email}}");
        $('.sky_temp_ca_vcard').attr("href", "{{route('frontend.companies.vcardgenerator',$card_details->id)}}");

        $("#sky_temp_porfolio_photos_desktop").html('' +
            '<div class="row">' +
                @if(count($portfolio) != 0)
                    @foreach($portfolio as $portfo_item)
                        @if($portfo_item->content_type == 'Images')
                            '<div class="col-6">' +
                            '<img class="mt-2" src="{{$portfo_item->photo_link}}" alt="" width="100%" style="box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);border-radius: 8px;">' +
                            '</div>' +
                        @endif
                    @endforeach
                @endif
            '</div>');
        $("#sky_temp_porfolio_photos_mobile").html('' +
            '' +
                @if(count($portfolio) != 0)
                    @foreach($portfolio as $portfo_item_m)
                        @if($portfo_item_m->content_type == 'Images')
                             '<img class="mt-2" src="{{$portfo_item_m->photo_link}}" alt="" width="100%" style="box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);border-radius: 8px;">' +
                        @endif
                    @endforeach
                @endif
            '');
        $(".sky_temp_porfolio_videos").html('' +
                @if(count($portfolio) != 0)
                    @foreach($portfolio as $portfo_item_youyube_video)
                        @if($portfo_item_youyube_video->content_type == 'Videos')
                             '<iframe width="100%" height="300px" src="https://www.youtube.com/embed/{{$portfo_item_youyube_video->youtube_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>' +
                        @endif
                    @endforeach
                @endif
            '');
        $("#sky_temp_profolio_links_desktop").html('' +
                @if(count($portfolio) != 0)
                    @foreach($portfolio as $web_link)
                            @if($web_link->content_type == 'Website Links')
                                '<div class="row m-0" style="sans-serif; font-size: 13px"><p>{{$web_link->caption}} : &nbsp;</p> <a href="{{$web_link->website_links}}" target="_blank">{{$web_link->website_links}}</a> </div>' +
                            @endif
                    @endforeach
                @endif
            '');
        $("#sky_temp_profolio_links").html('' +
                @if(count($portfolio) != 0)
                    @foreach($portfolio as $web_link_m)
                            @if($web_link_m->content_type == 'Website Links')
                                '<div class="row m-0" style="sans-serif; font-size: 13px"><p>{{$web_link_m->caption}} : &nbsp;</p> <a href="{{$web_link_m->website_links}}" target="_blank">{{$web_link_m->website_links}}</a> </div>' +
                            @endif
                    @endforeach
                @endif
            '');
    });
</script>

</body>
</html>
