<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <style>
        * {
            padding: 0;
            margin: 0;
        }
        a{
            text-decoration: none;
        }
    </style>
</head>


{!! $tempaltes->card_body !!}




<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form action="" method="post">
                {{csrf_field()}}
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Contact Me</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Your Name</label>
                        <input name="client_name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" rows="4" class="form-control" required></textarea>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
            </form>
        </div>

    </div>
</div>



<div id="share" class="share d-none" style="width: 100%;height: 100vh;background: rgba(0, 0, 0, 0.90);position: absolute;top: 0;left: 0;z-index: 99999999;overflow-y: scroll;position: fixed;">
    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="whatsapp://send?text=*This%20is%20my%20digital%20business%20card:*%20https://www.skycards.lk/c/{{$card_details->slug}}">
            <i style="font-size: 50px;color: #fff;" class="fab fa-whatsapp"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Whatsapp</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="sms:?body=This%20is%20my%20digital%20business%20card:%20https://www.skycards.lk/c/{{$card_details->slug}}">
            <i style="font-size: 50px;color: #fff;" class="far fa-comments"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">SMS</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="mailto:?subject={{$card_details->name}} &amp;body=This is my digital business card: https://www.skycards.lk/c/{{$card_details->slug}}">
            <i style="font-size: 50px;color: #fff;" class="far fa-envelope"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Email</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="https://www.facebook.com/sharer/sharer.php?u=https://www.skycards.lk/card_preview&amp;quote=This is my digital business card: https://www.skycards.lk/c/{{$card_details->slug}}">
            <i style="font-size: 50px;color: #fff;" class="fab fa-facebook-f"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Facebook</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" target="_blank" href="http://twitter.com/home?status=This is my digital business card: https://www.skycards.lk/c/{{$card_details->slug}}">
            <i style="font-size: 50px;color: #fff;" class="fab fa-twitter"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Twitter</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.skycards.lk/c/{{$card_details->slug}}&amp;title=This is my digital business card:&amp;summary=&amp;source=">
            <i style="font-size: 50px;color: #fff;" class="fab fa-linkedin-in"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Linkedin</h4>
        </a>
    </div>

    <div style="position: absolute;top: 20px;right: 20px;" class="close"><i id="btn-close" style="color: #fff;" class="fas fa-times"></i></div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        var search_status = 0;
        $("#social").click(function () {
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
        $("#sky_temp_first_name").html("{{$name_seperation[0]}}");
        //Last Name
        $("#sky_temp_last_name").html('{{$name_seperation[1]}}');
        //Phone Number
        $("#sky_temp_phone_number1").html("{{$phone_number->phone_number1}}");
        //Address
        $("#sky_temp_address").html("{{$card_details->address}}");
        //Company Name
        $("#sky_temp_company_name").html("{{$company_details->brand_name}}");
        //Email
        $("#sky_temp_email_address").html("{{$card_details->email}}");
        //Website
        $("#sky_temp_website").html("{{$card_details->website}}");
        //profile_picture
        $('#sky_temp_profile_picture').attr("src", "{{url('files/preview_files/')}}/{{$company_details->logo_img}}");
        //Cover Photo
        $("#sky_temp_cover_photo").css('background-image','url({{$card_details->cover_image}})');
        //Job Title
        $("#sky_temp_job_title").html("{{$card_details->job_position}}");

        $("#sky_temp_description").html("{{$card_details->description}}");
        $('#sky_temp-ca-call').attr("href", "tel:{{$phone_number->phone_number1}}");
        $('#sky_temp_ca-whatsapp').attr("href", "https://api.whatsapp.com/send?phone={{$phone_number->phone_number1}}");
        $('#sky_temp_ca_sms').attr("href", "sms:{{$phone_number->phone_number1}}");
        $('#sky_temp_ca_vcard').attr("href", "{{route('frontend.user.companies.vcardgenerator',$card_details->id)}}");



    });
</script>

</body>
</html>












