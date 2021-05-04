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
        $("#sky_temp_cover_photo").css('background-image','url("https://picsum.photos/119")');
        //Job Title
        $("#sky_temp_job_title").html("{{$card_details->job_position}}");



    });
</script>

</body>
</html>












