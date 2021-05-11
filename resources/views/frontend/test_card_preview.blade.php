
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
    />
    <link
            rel="stylesheet"
            href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
            integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
            crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet"
    />
    <style>
        * {
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>
<div
        class="background"
        id="sky_temp_cover_photo"
        style="
        background: linear-gradient(
          333deg,
          rgba(0, 22, 72, 1) 0%,
          rgba(112, 184, 189, 1) 100%
        );
        background-image: url('http://thechaptersrilanka.com/2025.png'),linear-gradient(
          333deg,
          rgba(0, 22, 72, 1) 0%,
          rgba(112, 184, 189, 1) 100%
        );
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 300px;
      "
>
    <div style="background: #fff;width: 100%;height: 54vh;position: absolute;bottom: 0;border-radius: 20px 20px 0 0;margin-top: 5vh;">
        <div class="row ml-5 mr-1">
            <img id="sky_temp_profile_picture" src="http://thechaptersrilanka.com/theekshana/sky/assets/logo%20compressed.png" style="position: absolute; top: -45px;left: 30px;filter: drop-shadow(1px 1px 5px rgba(0, 0, 0, 0.089));border-radius: 50%;width: 100px;" alt="">
            <div class="name row" style="margin-top: 10px;">

                <div class="col-10 name-group" style="padding-left: 100px;padding-right: 0;">
                    <h6 id="sky_temp_first_name" style="text-align: left;margin: 0;font-family: 'Montserrat', sans-serif;font-size: 16px;font-weight: 700;">Kashun</h6>
                    <h1 id="sky_temp_last_name" style="text-align: left; margin: 0;font-family: 'Montserrat', sans-serif;font-size: 18px;font-weight: 900;">Ramanayake</h1>
                    <p id="sky_temp_job_title" style="text-align: left; margin: 0;font-family: 'Montserrat', sans-serif;font-size: 12px;">Director Marketing</p>
                </div>

                <div class="col-2"">
                <a
                        style="
                      margin: auto;
                      background: #ecf5f7;
                      width: 40px;
                      height: 40px;
                      text-decoration: none;
                      border-radius: 50%;
                      box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
                      display: flex;
                      justify-content: center;
                    "
                        type="button" id="social"
                ><i style="color: #1b9dfd" class="fas fa-share-alt m-auto"></i
                    ></a>
            </div>

        </div>
    </div>



    <div class="row" style="margin: 35px auto 0 auto;">

        <a
                style="
                margin: auto;
                background: #0066CC;
                width: 50px;
                height: 50px;
                text-decoration: none;
                border-radius: 50%;
                box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
                display: flex;
                justify-content: center;
              "
                href="tel:94777009990"
        ><i style="color: #ecf5f7" class="fas fa-phone m-auto"></i
            ></a>
        <a href="https://api.whatsapp.com/send?phone=94777009990"
           style="
                margin: auto;
                background: #0066CC;
                width: 50px;
                height: 50px;
                text-decoration: none;
                border-radius: 50%;
                box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
                display: flex;
                justify-content: center;
              "
           type="button"
        ><i style="color: #ecf5f7;font-size: 20px;" class="fab fa-whatsapp m-auto"></i
            ></a>
        <a
                style="
                margin: auto;
                background: #0066CC;
                width: 50px;
                height: 50px;
                text-decoration: none;
                border-radius: 50%;
                box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
                display: flex;
                justify-content: center;
              "
                type="button" data-toggle="modal" data-target="#exampleModalCenter"
        ><i style="color: #ecf5f7" class="fas fa-comments m-auto"></i
            ></a>
        <a
                style="
              margin: auto;
              background: #0066CC;
              width: 50px;
              height: 50px;
              text-decoration: none;
              border-radius: 50%;
              box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
              display: flex;
              justify-content: center;
            "
                href="sms:94777009990"
        ><i style="color: #ecf5f7" class="fas fa-envelope m-auto"></i
            ></a>
        <a
                style="
            margin: auto;
            background: #0066CC;
            width: 50px;
            height: 50px;
            text-decoration: none;
            border-radius: 50%;
            box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
          "
                href="{{url('easer_card/kashun_ramanayake.vcf')}}"
        ><i style="color: #ecf5f7" class="fas fa-user-plus m-auto"></i
            ></a>
    </div>


    <div style="margin-top: 40px;" class="ml-1 mr-1">


        <div class="row ml-2 mr-2">
            <div class="col-12 pl-1 pr-1">
                <div
                        class="row m-0"
                        style="
                      background: #f7f9f9;
                      border-radius: 8px;
                      margin: auto;
                      display: flex;
                      padding: 15px 15px;
                      box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    "
                >
                    <i class="fas fa-building" style="color: #1b9dfd"></i>
                    <p
                            id="sky_temp_company_name"
                            style="
                        margin: 0 0 0 10px;
                        line-height: 1;
                        font-family: 'Montserrat', sans-serif;
                        font-size: 14px;
                      "
                    >
                        SkyCards Global
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-3 ml-2 mr-2">
            <div class="col-12 pl-1 pr-1">
                <div
                        class="row m-0"
                        style="
                      background: #f7f9f9;
                      border-radius: 8px;
                      margin: auto;
                      display: flex;
                      padding: 15px 15px;
                      box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    "
                >
                    <i class="fas fa-mobile" style="color: #1b9dfd"></i>
                    <p
                            id="sky_temp_phone_number1"
                            style="
                        margin: 0 0 0 10px;
                        line-height: 1;
                        font-family: 'Montserrat', sans-serif;
                        font-size: 14px;
                      "
                    >
                        +94 777 009 990
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-3 ml-2 mr-2">
            <div class="col-12 pl-1 pr-1">
                <div
                        class="row m-0"
                        style="
                      background: #f7f9f9;
                      border-radius: 8px;
                      margin: auto;
                      display: flex;
                      padding: 15px 15px;
                      box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    "
                >
                    <i class="fas fa-phone" style="color: #1b9dfd"></i>
                    <p
                            id="sky_temp_phone_number1"
                            style="
                        margin: 0 0 0 10px;
                        line-height: 1;
                        font-family: 'Montserrat', sans-serif;
                        font-size: 14px;
                      "
                    >
                        +94 778 669 990
                    </p>
                </div>
            </div>
        </div>

        <div class="row mt-3 ml-2 mr-2">
            <div class="col-12 pl-1 pr-1">
                <div
                        class="row m-0"
                        style="
                      background: #f7f9f9;
                      border-radius: 8px;
                      margin: auto;
                      display: flex;
                      padding: 15px 15px;
                      box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    "
                >
                    <i class="fas fa-envelope" style="color: #1b9dfd"></i>
                    <p
                            id="sky_temp_email_address"
                            style="
                        margin: 0 0 0 10px;
                        line-height: 1;
                        font-family: 'Montserrat', sans-serif;
                        font-size: 14px;
                      "
                    >
                        dm@skycards.lk
                    </p>
                </div>
            </div>
        </div>


        <div class="row mt-3 ml-2 mr-2">
            <div class="col-12 pl-1 pr-1">
                <div
                        class="row m-0"
                        style="
                      background: #f7f9f9;
                      border-radius: 8px;
                      margin: auto;
                      display: flex;
                      padding: 15px 15px;
                      box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    "
                >
                    <i class="fas fa-globe" style="color: #1b9dfd"></i>
                    <p
                            id="sky_temp_website"
                            style="
                        margin: 0 0 0 10px;
                        line-height: 1;
                        font-family: 'Montserrat', sans-serif;
                        font-size: 14px;
                      "
                    >
                        www.skycards.lk
                    </p>
                </div>
            </div>
        </div>



    </div>

    <div class="follow mt-5 pb-5" >
        <h6 style="line-height: 1;
            font-family: 'Montserrat', sans-serif;text-align: center;color: #1b9dfd;">Follow me </h6>

        <div class="row " style="margin: 25px auto 0px auto; max-width: 200px">

            <a
                    style="
        margin: auto;
        text-decoration: none;
        display: flex;
        justify-content: center;
      "
                    href="#"
            ><i style="color: #3b5998;font-size: 25px;" class="fab fa-facebook-square m-auto"></i
                ></a>

            <a
                    style="
      margin: auto;
      text-decoration: none;
      display: flex;
      justify-content: center;
    "
                    href="#"
            ><i style="color: #00acee ;font-size: 25px;" class="fab fa-twitter m-auto"></i
                ></a>

            <a
                    style="
    margin: auto;
    text-decoration: none;
    display: flex;
    justify-content: center;
  "
                    href="#"
            ><i style="color: #0072b1;font-size: 25px;" class="fab fa-linkedin m-auto"></i
                ></a>

            <a
                    style="
  margin: auto;
  text-decoration: none;
  display: flex;
  justify-content: center;
"
                    href="#"
            ><i style="color: #000;font-size: 25px;" class="fab fa-instagram m-auto"></i
                ></a>

        </div>
    </div>

    <div class="powerd pb-5">
        <p style="font-family: 'Montserrat', sans-serif;text-align: center;color: #017B8D;font-size: 12px;line-height: 1;margin: 0 0 8px 0;">Powered by Sky Cards</p>
        <p style="font-family: 'Montserrat', sans-serif;text-align: center;color: #FF8A45;font-size: 10px;">Your Digital Business Card Companion - it's free get yours today </p>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Contact Me</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea type="text" class="form-control" rows="10"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send Message</button>
            </div>
        </div>
    </div>
</div>

<div id="share" class="share d-none" style="width: 100%;height: 100vh;background: rgba(0, 0, 0, 0.90);position: absolute;top: 0;left: 0;z-index: 99999999;overflow-y: scroll;position: fixed;">
    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="whatsapp://send?text=*This%20is%20my%20digital%20business%20card:*%20https://www.skycards.lk/card_preview">
            <i style="font-size: 50px;color: #fff;" class="fab fa-whatsapp"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Whatsapp</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="sms:94777009990">
            <i style="font-size: 50px;color: #fff;" class="far fa-comments"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">SMS</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="mailto:?subject=Kashun Ramanayake &amp;body=This is my digital business card: https://www.skycards.lk/card_preview">
            <i style="font-size: 50px;color: #fff;" class="far fa-envelope"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Email</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="#">
            <i style="font-size: 50px;color: #fff;" class="fab fa-facebook-f"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Facebook</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="#">
            <i style="font-size: 50px;color: #fff;" class="fab fa-twitter"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Twitter</h4>
        </a>
    </div>

    <div class="row ml-1 mr-1 mt-3 pl-4 pt-3">
        <a style="display: contents;text-decoration: none;" href="#">
            <i style="font-size: 50px;color: #fff;" class="fab fa-linkedin-in"></i>
            <h4 style="font-family: 'Montserrat', sans-serif;font-size: 30px; color: #fff;margin-left: 15px;margin-top: 5px;">Linkedin</h4>
        </a>
    </div>

    <div style="position: absolute;top: 20px;right: 20px;" class="close"><i id="btn-close" style="color: #fff;" class="fas fa-times"></i></div>
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
        $("#social").click(function () {
            $("#share").removeClass("d-none");
        });

        $("#btn-close").click(function () {
            $("#share").addClass("d-none");
        });
    });
</script>


</body>
</html>
