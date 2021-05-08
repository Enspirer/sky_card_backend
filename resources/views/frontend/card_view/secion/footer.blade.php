


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
        //profile_picture
        $('.sky_temp_profile_picture').attr("src", "{{url('files/preview_files/')}}/{{$company_details->logo_img}}");
        //Cover Photo
        $(".sky_temp_cover_photo").css('background-image','url({{$card_details->cover_image}})');
        //Job Title
        $(".sky_temp_job_title").html("{{$card_details->job_position}}");

        $(".sky_temp_description").html("{{$card_details->description}}");
        $('.sky_temp-ca-call').attr("href", "tel:{{$phone_number->phone_number1}}");
        $('.sky_temp_ca-whatsapp').attr("href", "https://api.whatsapp.com/send?phone={{$phone_number->phone_number1}}");
        $('.sky_temp_ca_sms').attr("href", "sms:{{$phone_number->phone_number1}}");
        $('.sky_temp_ca_vcard').attr("href", "{{route('frontend.user.companies.vcardgenerator',$card_details->id)}}");

        $("#sky_temp_porfolio_photos_desktop").html('' +
            '<div class="row">' +
                    @foreach($portfolio as $portfo_item)
                        @if($portfo_item->content_type == 'Images')
                            '<div class="col-6">' +
                            '<img class="mt-2" src="{{$portfo_item->photo_link}}" alt="" width="100%" style="box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);border-radius: 8px;">' +
                            '</div>' +
                        @endif
                    @endforeach
            '</div>');
        $("#sky_temp_porfolio_photos_mobile").html('' +
            '' +
                @foreach($portfolio as $portfo_item_m)
                    @if($portfo_item_m->content_type == 'Images')
                         '<img class="mt-2" src="{{$portfo_item_m->photo_link}}" alt="" width="100%" style="box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);border-radius: 8px;">' +
                    @endif
                @endforeach
            '');
        $(".sky_temp_porfolio_videos").html('' +
                @foreach($portfolio as $portfo_item_youyube_video)
                    @if($portfo_item_youyube_video->content_type == 'Videos')
                         '<iframe width="100%" height="300px" src="https://www.youtube.com/embed/{{$portfo_item_youyube_video->youtube_link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>' +
                    @endif
                @endforeach
            '');
        $("#sky_temp_profolio_links_desktop").html("<h2>desktop</h2>");
        $("#sky_temp_profolio_links").html("<h2>tack</h2>");







    });
</script>

</body>
</html>
