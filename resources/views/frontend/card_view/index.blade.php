@include('frontend.card_view.secion.header')
<body>
<div
        id="web"
        class="head-gradient"
        style="position: relative; display: flex; justify-content: center"
>
    <div class="container" style="position: absolute; bottom: 0; width: 100%">
        <div class="btns" style="position: absolute; bottom: 20px; right: 0">
            <div class="row m-0">
                <div class="add">
                    <div class="row m-0">
                        <i
                                class="fa fa-user-plus"
                                style="color: white"
                                aria-hidden="true"
                        ></i>
                        <a href="" class="sky_temp_ca_vcard" style="color: #fff; margin-left: 10px">Add To Contacts</a>
                    </div>
                </div>

                <div class="add ml-5">
                    <div class="row m-0">
                        <i
                                class="fa fa-share-alt"
                                style="color: white"
                                aria-hidden="true"
                        ></i>
                        <p class="social" style="color: #fff; margin-left: 10px">Share Now</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="white-space pb-5"">
    <div class="container">
        <div class="row mb-5 pb-5">
            <div class="col-4" style="padding: 100px 0">
                <div
                        style="
                position: absolute;
                width: 100%;
                top: -80px;
                box-shadow: 0px 0px 19px -4px rgba(0, 0, 0, 0.75);
                margin-bottom: 100px;
                padding-bottom: 40px;
              "
                >




                    <div
                            class="background sky_temp_cover_photo"
                            id="sky_temp_cover_photo"
                            style="
              background: linear-gradient(
                333deg,
                rgba(0, 22, 72, 1) 0%,
                rgba(112, 184, 189, 1) 100%
              );
              background-image: url('https://www.focus2move.com/wp-content/uploads/2020/01/Tesla-Roadster-2020-1024-03.jpg'),linear-gradient(
                333deg,
                rgba(0, 22, 72, 1) 0%,
                rgba(112, 184, 189, 1) 100%
              );
              background-size: cover;
              background-position: center;
              width: 100%;
              height: 935px;
            "
                    >

                        <div class="gradient" style="background: linear-gradient(0deg, rgba(112,184,189,0) 0%, rgba(0,0,0,1) 100%);width: 100%;height: 100px;"></div>
                        <a id="sky_temp_ca_vcard" href="#">   <i style="color: rgba(255, 255, 255, 0.699);box-shadow: 10px 10px 47px -9px rgba(0,0,0,0.95);position: absolute; right: 20px; top: 20px;font-size: 13px;" class="fas fa-user-plus"></i></a>



                        <div style="background: #fff;width: 100%;height: 100%; top:150px ; position: absolute;bottom: 0;border-radius: 20px 20px 0 0;">
                            <div class="row ml-5 mr-1">
                                <img id="sky_temp_profile_picture" class="sky_temp_profile_picture" src="assets/Mask Group 23.png" style="position: absolute; top: -55px;left: 40px;filter: drop-shadow(1px 1px 5px rgba(0, 0, 0, 0.089));width: 125px;" alt="">
                                <div class="name" style="margin-left: 130px;margin-top: 10px;">
                                    <h6 id="sky_temp_first_name" class="sky_temp_first_name" style="text-align: left;margin: 0;font-family: 'Montserrat', sans-serif;font-size: 14px;">FIRST NAME</h6>
                                    <h1 id="sky_temp_last_name" class="sky_temp_last_name" style="text-align: left; margin: 0;font-family: 'Montserrat', sans-serif;font-size: 22px;font-weight: 900;">LAST NAME</h1>
                                    <p id="sky_temp_job_title" class="sky_temp_job_title" style="text-align: left; margin: 0;font-family: 'Montserrat', sans-serif;font-size: 12px;">JOB TITLE</p>
                                </div>
                            </div>

                            <div style="margin-top: 40px;" class="ml-4 mr-1">
                                <div class="row mb-3 ml-1 mr-1">
                                    <a
                                            style="

          background: #ecf5f7;
          width: 60px;
          height: 60px;
          border-radius: 50%;
          box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
          display: flex;
          justify-content: center;
        "
                                            href="#"
                                    ><i style="color: #1b9dfd" class="fas fa-phone m-auto"></i
                                        ></a>
                                    <p
                                            id="sky_temp_phone_number1" class="sky_temp_phone_number1"
                                            style="
        margin: 25px 0 0 20px;
        line-height: 1;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
      "
                                    >
                                        mobile number
                                    </p>
                                </div>

                                <div class="row mb-3 ml-1 mr-1">
                                    <a
                                            style="

          background: #ecf5f7;
          width: 60px;
          height: 60px;
          border-radius: 50%;
          box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
          display: flex;
          justify-content: center;
        "
                                            href="#"
                                    ><i style="color: #1b9dfd" class="fas fa-building m-auto"></i
                                        ></a>
                                    <p
                                            id="sky_temp_company_name" class="sky_temp_company_name"
                                            style="
        margin: 25px 0 0 20px;
        line-height: 1;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
      "
                                    >
                                        company name
                                    </p>
                                </div>

                                <div class="row mb-3 ml-1 mr-1">
                                    <a
                                            style="

          background: #ecf5f7;
          width: 60px;
          height: 60px;
          border-radius: 50%;
          box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
          display: flex;
          justify-content: center;
        "
                                            href="#"
                                    ><i style="color: #1b9dfd" class="fas fa-envelope m-auto"></i
                                        ></a>
                                    <p
                                            id="sky_temp_email_address" class="sky_temp_email_address"
                                            style="
        margin: 25px 0 0 20px;
        line-height: 1;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
      "
                                    >
                                        email address
                                    </p>
                                </div>

                                <div class="row mb-3 ml-1 mr-1">
                                    <a
                                            style="

          background: #ecf5f7;
          width: 60px;
          height: 60px;
          border-radius: 50%;
          box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
          display: flex;
          justify-content: center;
        "
                                            href="#"
                                    ><i style="color: #1b9dfd" class="fas fa-globe m-auto"></i
                                        ></a>
                                    <p
                                            id="sky_temp_website" class="sky_temp_website"
                                            style="
        margin: 25px 0 0 20px;
        line-height: 1;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
      "
                                    >
                                        web site
                                    </p>
                                </div>

                                <div class="row mb-3 ml-1 mr-1">
                                    <a
                                            style="

          background: #ecf5f7;
          width: 60px;
          height: 60px;
          border-radius: 50%;
          box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
          display: flex;
          justify-content: center;
        "
                                            href="#"
                                    ><i style="color: #1b9dfd" class="fas fa-address-book m-auto"></i
                                        ></a>
                                    <p
                                            id="sky_temp_address" class="sky_temp_address"
                                            style="
        margin: 25px 0 0 20px;
        line-height: 1;
        font-family: 'Montserrat', sans-serif;
        font-size: 14px;
      "
                                    >
                                        address
                                    </p>
                                </div>


                            </div>





                            <div class="row ml-3 mr-3 mt-5 pb-5">
                                <div class="col-6 pr-2">

                                    <a type="button" class="social" style="text-align: center;margin: auto;display: flex;justify-content: center;background: #017B8D; border-radius: 50px;color: #fff;padding: 10px 0;">Share</a>
                                </div>
                                <div class="col-6 pl-2">
                                    <a type="button" data-toggle="modal" data-target="#exampleModalCenter" style="text-align: center;margin: auto;display: flex;justify-content: center;background: #fff;border: 1px solid #017B8D; border-radius: 50px;color: #017B8D;padding: 10px 0;">Sky Chat</a>
                                </div>
                            </div>





                            <div class="follow pb-5">
                                <h6
                                        style="
              line-height: 1;
              font-family: 'Montserrat', sans-serif;
              text-align: center;
              color: #1b9dfd;
            "
                                >
                                    Follow me
                                </h6>

                                <div class="row" style="margin: 25px auto 0px auto; max-width: 200px">
                                    <a
                                            style="
                margin: auto;
                text-decoration: none;
                display: flex;
                justify-content: center;
              "
                                            href="#"
                                    ><i
                                                style="color: #3b5998; font-size: 25px"
                                                class="fab fa-facebook-square m-auto"
                                        ></i
                                        ></a>

                                    <a
                                            style="
                margin: auto;
                text-decoration: none;
                display: flex;
                justify-content: center;
              "
                                            href="#"
                                    ><i
                                                style="color: #00acee; font-size: 25px"
                                                class="fab fa-twitter m-auto"
                                        ></i
                                        ></a>

                                    <a
                                            style="
                margin: auto;
                text-decoration: none;
                display: flex;
                justify-content: center;
              "
                                            href="#"
                                    ><i
                                                style="color: #0072b1; font-size: 25px"
                                                class="fab fa-linkedin m-auto"
                                        ></i
                                        ></a>

                                    <a
                                            style="
                margin: auto;
                text-decoration: none;
                display: flex;
                justify-content: center;
              "
                                            href="#"
                                    ><i
                                                style="color: #000; font-size: 25px"
                                                class="fab fa-instagram m-auto"
                                        ></i
                                        ></a>
                                </div>
                            </div>

                            <div class="powerd pb-5" style="box-shadow: 0px 10px 12px -4px rgb(0 0 0 / 37%);
    }">
                                <p
                                        style="
              font-family: 'Montserrat', sans-serif;
              text-align: center;
              color: #017b8d;
              font-size: 12px;
              line-height: 1;
              margin: 0 0 8px 0;
            "
                                >
                                    Powered by <a href="http://skycards.lk/"> Sky Cards </a>
                                </p>
                                <p
                                        style="
            margin-top: 17px;
              font-family: 'Montserrat', sans-serif;
              text-align: center;
              color: #ff8a45;
              font-size: 10px;
            "
                                >
                                    Your Digital Business Card Companion <br>
                                    <a href="http://skycards.lk/" style="font-weight: 800;text-transform: uppercase;color: #ff8a45;"> Get yours today </a>
                                </p>
                            </div>


                        </div>
                    </div>







                </div>
            </div>

            <div class="col-8 pt-5">

                <div class="collaps" style="padding: 0 20px">
                    <div id="accordion">
                        <div
                                class="card"
                                style="
                    border: transparent;
                    box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    border-radius: 8px;
                  "
                        >
                            <div
                                    class="card-header p-0"
                                    id="headingOne"
                                    style="border: transparent"
                            >
                                <h5 class="mb-0">
                                    <button
                                            id="collapse-btn"
                                            class=""
                                            data-toggle="collapse"
                                            data-target="#collapseOne"
                                            aria-expanded="false"
                                            aria-controls="collapseOne"
                                            style="
                          font-family: 'Montserrat', sans-serif;
                          color: #1b9dfd;
                          width: 100%;
                          background: #f7f9f9 !important;
                          padding: 10px;
                          outline: none;
                          border: transparent;
                          border-radius: 8px;
                        "
                                    >
                                        <div class="row">
                                            <div
                                                    class="col-10"
                                                    style="text-align: left; text-decoration: none"
                                            >
                                                <i style="font-size: 14px" class="fas fa-info-circle"></i>
                                                &nbsp;
                                                <span style="font-size: 15px; font-weight: 500">
                              About me
                            </span>
                                            </div>
                                            <div class="col-2">
                                                <i
                                                        id="down-icon"
                                                        class="fa fa-chevron-down ml-auto"
                                                        style="font-size: 15px"
                                                        aria-hidden="true"
                                                ></i>
                                            </div>
                                        </div>
                                    </button>
                                </h5>
                            </div>

                            <div
                                    id="collapseOne"
                                    class="collapse"
                                    aria-labelledby="headingOne"
                                    data-parent="#accordion"
                            >
                                <div
                                        class="card-body"
                                        style="background: #f7f9f9; border-top: 1px solid #017a8d18"
                                >
                                    <p
                                            id="sky_temp_description" class="sky_temp_description"
                                            style="font-family: 'Montserrat', sans-serif; font-size: 12px"
                                    >
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                        non cupidatat skateboard dolor brunch. Food truck quinoa
                                        nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                        aliqua put a bird on it squid single-origin coffee nulla
                                        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft
                                        beer labore wes anderson cred nesciunt sapiente ea proident.
                                        Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                        beer farm-to-table, raw denim aesthetic synth nesciunt you
                                        probably haven't heard of them accusamus labore sustainable
                                        VHS.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div
                                class="card mt-2"
                                style="
                    border: transparent;
                    box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    border-radius: 8px;
                  "
                        >
                            <div
                                    class="card-header p-0"
                                    id="headingOne"
                                    style="border: transparent"
                            >
                                <h5 class="mb-0">
                                    <button
                                            id="collapse-btn2"
                                            class=""
                                            data-toggle="collapse"
                                            data-target="#collapseTwo"
                                            aria-expanded="false"
                                            aria-controls="collapseOne"
                                            style="
                          font-family: 'Montserrat', sans-serif;
                          color: #1b9dfd;
                          width: 100%;
                          background: #f7f9f9 !important;
                          padding: 10px;
                          outline: none;
                          border: transparent;
                          border-radius: 8px;
                        "
                                    >
                                        <div class="row">
                                            <div
                                                    class="col-10"
                                                    style="text-align: left; text-decoration: none"
                                            >
                                                <i style="font-size: 14px" class="fas fa-image"></i>
                                                &nbsp;
                                                <span style="font-size: 15px; font-weight: 500">
                              Photos
                            </span>
                                            </div>
                                            <div class="col-2">
                                                <i
                                                        id="down-icon2"
                                                        class="fa fa-chevron-down ml-auto"
                                                        style="font-size: 15px"
                                                        aria-hidden="true"
                                                ></i>
                                            </div>
                                        </div>
                                    </button>
                                </h5>
                            </div>

                            <div
                                    id="collapseTwo"
                                    class="collapse"
                                    aria-labelledby="headingOne"
                                    data-parent="#accordion"
                            >
                                <div
                                        class="card-body"
                                        style="background: #f7f9f9; border-top: 1px solid #017a8d18"
                                >
                                    <div class="row" id="sky_temp_porfolio_photos_desktop">
                                        <div class="col-6">
                                            <img
                                                    class="mt-2"
                                                    src="assets/covernewSML-02.jpg"
                                                    alt=""
                                                    width="100%"
                                                    style="
                          box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                          border-radius: 8px;
                        "
                                            />
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div
                                class="card mt-2"
                                style="
                    border: transparent;
                    box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    border-radius: 8px;
                  "
                        >
                            <div
                                    class="card-header p-0"
                                    id="headingOne"
                                    style="border: transparent"
                            >
                                <h5 class="mb-0">
                                    <button
                                            id="collapse-btn3"
                                            class=""
                                            data-toggle="collapse"
                                            data-target="#collapseThree"
                                            aria-expanded="false"
                                            aria-controls="collapseOne"
                                            style="
                          font-family: 'Montserrat', sans-serif;
                          color: #1b9dfd;
                          width: 100%;
                          background: #f7f9f9 !important;
                          padding: 10px;
                          outline: none;
                          border: transparent;
                          border-radius: 8px;
                        "
                                    >
                                        <div class="row">
                                            <div
                                                    class="col-10"
                                                    style="text-align: left; text-decoration: none"
                                            >
                                                <i style="font-size: 14px" class="fas fa-video"></i>
                                                &nbsp;
                                                <span style="font-size: 15px; font-weight: 500">
                              Videos
                            </span>
                                            </div>
                                            <div class="col-2">
                                                <i
                                                        id="down-icon3"
                                                        class="fa fa-chevron-down ml-auto"
                                                        style="font-size: 15px"
                                                        aria-hidden="true"
                                                ></i>
                                            </div>
                                        </div>
                                    </button>
                                </h5>
                            </div>

                            <div
                                    id="collapseThree"
                                    class="collapse"
                                    aria-labelledby="headingOne"
                                    data-parent="#accordion"
                            >
                                <div
                                        id="sky_temp_porfolio_videos"
                                        class="card-body sky_temp_porfolio_videos"
                                        style="background: #f7f9f9; border-top: 1px solid #017a8d18"
                                >
                                    <iframe
                                            width="100%"
                                            height="300px"
                                            src="https://www.youtube.com/embed/ScMzIvxBSi4"
                                            title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen
                                    ></iframe>
                                </div>
                            </div>
                        </div>

                        <div
                                class="card mt-2"
                                style="
                    border: transparent;
                    box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                    border-radius: 8px;
                  "
                        >
                            <div
                                    class="card-header p-0"
                                    id="headingOne"
                                    style="border: transparent"
                            >
                                <h5 class="mb-0">
                                    <button
                                            id="collapse-btn4"
                                            class=""
                                            data-toggle="collapse"
                                            data-target="#collapseFour"
                                            aria-expanded="false"
                                            aria-controls="collapseOne"
                                            style="
                          font-family: 'Montserrat', sans-serif;
                          color: #1b9dfd;
                          width: 100%;
                          background: #f7f9f9 !important;
                          padding: 10px;
                          outline: none;
                          border: transparent;
                          border-radius: 8px;
                        "
                                    >
                                        <div class="row">
                                            <div
                                                    class="col-10"
                                                    style="text-align: left; text-decoration: none"
                                            >
                                                <i style="font-size: 14px" class="fas fa-link"></i> &nbsp;
                                                <span style="font-size: 15px; font-weight: 500">
                              Links
                            </span>
                                            </div>
                                            <div class="col-2">
                                                <i
                                                        id="down-icon4"
                                                        class="fa fa-chevron-down ml-auto"
                                                        style="font-size: 15px"
                                                        aria-hidden="true"
                                                ></i>
                                            </div>
                                        </div>
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body" style="background: #f7f9f9; border-top: 1px solid #017a8d18" id="sky_temp_profolio_links_desktop">
                                    <div class="row m-0" style="font-family: 'Montserrat', sans-serif; font-size: 13px">
                                        <p>Dribble : &nbsp;</p>
                                        <a href="#" target="_blank">www.dribble.com/firstname</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>









</div>



































<div id="mob" class="d-none">

    <div
            class="background sky_temp_cover_photo"
            id="sky_temp_cover_photo"
            style="
          background: linear-gradient(
            333deg,
            rgba(0, 22, 72, 1) 0%,
            rgba(112, 184, 189, 1) 100%
          );
          background-image: url('https://www.focus2move.com/wp-content/uploads/2020/01/Tesla-Roadster-2020-1024-03.jpg'),linear-gradient(
            333deg,
            rgba(0, 22, 72, 1) 0%,
            rgba(112, 184, 189, 1) 100%
          );
          background-size: cover;
          background-position: center;
          width: 100%;
          height: 30vh;
        "
    >

        <div class="gradient" style="background: linear-gradient(0deg, rgba(112,184,189,0) 0%, rgba(0,0,0,1) 100%);width: 100%;height: 100px;"></div>
        <a id="sky_temp_ca_vcard" class="sky_temp_ca_vcard" href="#">   <i style="color: rgba(255, 255, 255, 0.699);box-shadow: 10px 10px 47px -9px rgba(0,0,0,0.95);position: absolute; right: 20px; top: 20px;font-size: 13px;" class="fas fa-user-plus"></i></a>

        <div style="background: #fff;width: 100%;height: 74%;position: absolute;bottom: 0;border-radius: 20px 20px 0 0;">
            <div class="row ml-5 mr-1">
                <img id="sky_temp_profile_picture" class="sky_temp_profile_picture" src="assets/Mask Group 23.png" style="position: absolute; top: -55px;left: 40px;filter: drop-shadow(1px 1px 5px rgba(0, 0, 0, 0.089));width: 125px;" alt="">
                <div class="name" style="margin-left: 130px;margin-top: 10px;">
                    <h6 id="sky_temp_first_name" class="sky_temp_first_name" style="text-align: left;margin: 0;font-family: 'Montserrat', sans-serif;font-size: 14px;">FIRST NAME</h6>
                    <h1 id="sky_temp_last_name" class="sky_temp_last_name" style="text-align: left; margin: 0;font-family: 'Montserrat', sans-serif;font-size: 22px;font-weight: 900;">LAST NAME</h1>
                    <p id="sky_temp_job_title" class="sky_temp_job_title" style="text-align: left; margin: 0;font-family: 'Montserrat', sans-serif;font-size: 12px;">JOB TITLE</p>
                </div>
            </div>

            <div style="margin-top: 40px;" class="ml-4 mr-1">
                <div class="row mb-3 ml-1 mr-1">
                    <a
                            style="

            background: #ecf5f7;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
          "
                            href="#"
                    ><i style="color: #1b9dfd" class="fas fa-phone m-auto"></i
                        ></a>
                    <p
                            id="sky_temp_phone_number1"
                            class="sky_temp_phone_number1"
                            style="
          margin: 25px 0 0 20px;
          line-height: 1;
          font-family: 'Montserrat', sans-serif;
          font-size: 14px;
        "
                    >
                        mobile number
                    </p>
                </div>

                <div class="row mb-3 ml-1 mr-1">
                    <a
                            style="

            background: #ecf5f7;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
          "
                            href="#"
                    ><i style="color: #1b9dfd" class="fas fa-building m-auto"></i
                        ></a>
                    <p
                            id="sky_temp_company_name"
                            class="sky_temp_company_name"
                            style="
          margin: 25px 0 0 20px;
          line-height: 1;
          font-family: 'Montserrat', sans-serif;
          font-size: 14px;
        "
                    >
                        company name
                    </p>
                </div>

                <div class="row mb-3 ml-1 mr-1">
                    <a
                            style="

            background: #ecf5f7;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
          "
                            href="#"
                    ><i style="color: #1b9dfd" class="fas fa-envelope m-auto"></i
                        ></a>
                    <p
                            id="sky_temp_email_address"
                            class="sky_temp_email_address"
                            style="
          margin: 25px 0 0 20px;
          line-height: 1;
          font-family: 'Montserrat', sans-serif;
          font-size: 14px;
        "
                    >
                        email address
                    </p>
                </div>

                <div class="row mb-3 ml-1 mr-1">
                    <a
                            style="

            background: #ecf5f7;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
          "
                            href="#"
                    ><i style="color: #1b9dfd" class="fas fa-globe m-auto"></i
                        ></a>
                    <p
                            id="sky_temp_website"
                            class="sky_temp_website"
                            style="
          margin: 25px 0 0 20px;
          line-height: 1;
          font-family: 'Montserrat', sans-serif;
          font-size: 14px;
        "
                    >
                        web site
                    </p>
                </div>

                <div class="row mb-3 ml-1 mr-1">
                    <a
                            style="

            background: #ecf5f7;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            box-shadow: 10px 13px 36px -16px rgba(0, 0, 0, 0.75);
            display: flex;
            justify-content: center;
          "
                            href="#"
                    ><i style="color: #1b9dfd" class="fas fa-address-book m-auto"></i
                        ></a>
                    <p
                            id="sky_temp_address"
                            class="sky_temp_address"
                            style="
          margin: 25px 0 0 20px;
          line-height: 1;
          font-family: 'Montserrat', sans-serif;
          font-size: 14px;
        "
                    >
                        address
                    </p>
                </div>


            </div>


            <br />

            <hr />

            <br />

            <div class="collaps" style="padding: 0 20px">
                <div id="accordion">
                    <div
                            class="card"
                            style="
                  border: transparent;
                  box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                  border-radius: 8px;
                "
                    >
                        <div
                                class="card-header p-0"
                                id="headingOne"
                                style="border: transparent"
                        >
                            <h5 class="mb-0">
                                <button
                                        id="collapse-btn"
                                        class=""
                                        data-toggle="collapse"
                                        data-target="#collapseOne"
                                        aria-expanded="false"
                                        aria-controls="collapseOne"
                                        style="
                        font-family: 'Montserrat', sans-serif;
                        color: #1b9dfd;
                        width: 100%;
                        background: #f7f9f9 !important;
                        padding: 10px;
                        outline: none;
                        border: transparent;
                        border-radius: 8px;
                      "
                                >
                                    <div class="row">
                                        <div
                                                class="col-10"
                                                style="text-align: left; text-decoration: none"
                                        >
                                            <i style="font-size: 14px" class="fas fa-info-circle"></i>
                                            &nbsp;
                                            <span style="font-size: 15px; font-weight: 500">
                            About me
                          </span>
                                        </div>
                                        <div class="col-2">
                                            <i
                                                    id="down-icon"
                                                    class="fa fa-chevron-down ml-auto"
                                                    style="font-size: 15px"
                                                    aria-hidden="true"
                                            ></i>
                                        </div>
                                    </div>
                                </button>
                            </h5>
                        </div>

                        <div
                                id="collapseOne"
                                class="collapse"
                                aria-labelledby="headingOne"
                                data-parent="#accordion"
                        >
                            <div
                                    class="card-body"
                                    style="background: #f7f9f9; border-top: 1px solid #017a8d18"
                            >
                                <p id="sky_temp_description" class="sky_temp_description" style=" font-family: 'Montserrat', sans-serif;font-size: 12px;">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life
                                    accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                    non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                    put a bird on it squid single-origin coffee nulla assumenda
                                    shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                    wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                    excepteur butcher vice lomo. Leggings occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably
                                    haven't heard of them accusamus labore sustainable VHS.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div
                            class="card mt-2"
                            style="
                  border: transparent;
                  box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                  border-radius: 8px;
                "
                    >
                        <div
                                class="card-header p-0"
                                id="headingOne"
                                style="border: transparent"
                        >
                            <h5 class="mb-0">
                                <button
                                        id="collapse-btn2"
                                        class=""
                                        data-toggle="collapse"
                                        data-target="#collapseTwo"
                                        aria-expanded="false"
                                        aria-controls="collapseOne"
                                        style="
                        font-family: 'Montserrat', sans-serif;
                        color: #1b9dfd;
                        width: 100%;
                        background: #f7f9f9 !important;
                        padding: 10px;
                        outline: none;
                        border: transparent;
                        border-radius: 8px;
                      "
                                >
                                    <div class="row">
                                        <div
                                                class="col-10"
                                                style="text-align: left; text-decoration: none"
                                        >
                                            <i style="font-size: 14px" class="fas fa-image"></i>
                                            &nbsp;
                                            <span style="font-size: 15px; font-weight: 500">
                            Photos
                          </span>
                                        </div>
                                        <div class="col-2">
                                            <i
                                                    id="down-icon2"
                                                    class="fa fa-chevron-down ml-auto"
                                                    style="font-size: 15px"
                                                    aria-hidden="true"
                                            ></i>
                                        </div>
                                    </div>
                                </button>
                            </h5>
                        </div>

                        <div
                                id="collapseTwo"
                                class="collapse"
                                aria-labelledby="headingOne"
                                data-parent="#accordion"
                        >
                            <div    id="sky_temp_porfolio_photos_mobile"
                                    class="card-body"
                                    style="background: #f7f9f9; border-top: 1px solid #017a8d18"
                            >
                                <img
                                        class="mt-2"
                                        src="assets/covernew-02.jpg"
                                        alt=""
                                        width="100%"
                                        style="
                        box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                        border-radius: 8px;
                      "
                                />
                                <img
                                        class="mt-2"
                                        src="assets/covernewSML-02.jpg"
                                        alt=""
                                        width="100%"
                                        style="
                        box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                        border-radius: 8px;
                      "
                                />
                                <img
                                        class="mt-2"
                                        src="assets/covernew-04.jpg"
                                        alt=""
                                        width="100%"
                                        style="
                        box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                        border-radius: 8px;
                      "
                                />
                            </div>
                        </div>
                    </div>

                    <div
                            class="card mt-2"
                            style="
                  border: transparent;
                  box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                  border-radius: 8px;
                "
                    >
                        <div
                                class="card-header p-0"
                                id="headingOne"
                                style="border: transparent"
                        >
                            <h5 class="mb-0">
                                <button
                                        id="collapse-btn3"
                                        class=""
                                        data-toggle="collapse"
                                        data-target="#collapseThree"
                                        aria-expanded="false"
                                        aria-controls="collapseOne"
                                        style="
                        font-family: 'Montserrat', sans-serif;
                        color: #1b9dfd;
                        width: 100%;
                        background: #f7f9f9 !important;
                        padding: 10px;
                        outline: none;
                        border: transparent;
                        border-radius: 8px;
                      "
                                >
                                    <div class="row">
                                        <div
                                                class="col-10"
                                                style="text-align: left; text-decoration: none"
                                        >
                                            <i style="font-size: 14px" class="fas fa-video"></i>
                                            &nbsp;
                                            <span style="font-size: 15px; font-weight: 500">
                            Videos
                          </span>
                                        </div>
                                        <div class="col-2">
                                            <i
                                                    id="down-icon3"
                                                    class="fa fa-chevron-down ml-auto"
                                                    style="font-size: 15px"
                                                    aria-hidden="true"
                                            ></i>
                                        </div>
                                    </div>
                                </button>
                            </h5>
                        </div>

                        <div
                                id="collapseThree"
                                class="collapse"
                                aria-labelledby="headingOne"
                                data-parent="#accordion"
                        >
                            <div id="sky_temp_porfolio_videos"
                                    class="card-body sky_temp_porfolio_videos"
                                    style="background: #f7f9f9; border-top: 1px solid #017a8d18"
                            >
                                <iframe
                                        width="100%"
                                        src="https://www.youtube.com/embed/ScMzIvxBSi4"
                                        title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>

                    <div
                            class="card mt-2"
                            style="
                  border: transparent;
                  box-shadow: 10px 10px 17px -12px rgba(0, 0, 0, 0.35);
                  border-radius: 8px;
                "
                    >
                        <div
                                class="card-header p-0"
                                id="headingOne"
                                style="border: transparent"
                        >
                            <h5 class="mb-0">
                                <button
                                        id="collapse-btn4"
                                        class=""
                                        data-toggle="collapse"
                                        data-target="#collapseFour"
                                        aria-expanded="false"
                                        aria-controls="collapseOne"
                                        style="
                        font-family: 'Montserrat', sans-serif;
                        color: #1b9dfd;
                        width: 100%;
                        background: #f7f9f9 !important;
                        padding: 10px;
                        outline: none;
                        border: transparent;
                        border-radius: 8px;
                      "
                                >
                                    <div class="row">
                                        <div
                                                class="col-10"
                                                style="text-align: left; text-decoration: none"
                                        >
                                            <i style="font-size: 14px" class="fas fa-link"></i> &nbsp;
                                            <span style="font-size: 15px; font-weight: 500">
                            Links
                          </span>
                                        </div>
                                        <div class="col-2">
                                            <i
                                                    id="down-icon4"
                                                    class="fa fa-chevron-down ml-auto"
                                                    style="font-size: 15px"
                                                    aria-hidden="true"
                                            ></i>
                                        </div>
                                    </div>
                                </button>
                            </h5>
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body" style="background: #f7f9f9; border-top: 1px solid #017a8d18" id="sky_temp_profolio_links">
                                <div class="row m-0" style="font-family: 'Montserrat', sans-serif; font-size: 13px">
                                    <p>Dribble : &nbsp;</p>
                                    <a href="#" target="_blank">www.dribble.com/firstname</a>
                                </div>
                                <div class="row m-0" style="font-family: 'Montserrat', sans-serif; font-size: 13px">
                                    <p>Dribble : &nbsp;</p>
                                    <a href="#" target="_blank">www.dribble.com/firstname</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <div class="row ml-3 mr-3 mt-5 pb-5">
                <div class="col-6 pr-2">

                    <a type="button" class="social" style="text-align: center;margin: auto;display: flex;justify-content: center;background: #017B8D; border-radius: 50px;color: #fff;padding: 10px 0;">Share</a>
                </div>
                <div class="col-6 pl-2">
                    <a type="button" data-toggle="modal" data-target="#exampleModalCenter" style="text-align: center;margin: auto;display: flex;justify-content: center;background: #fff;border: 1px solid #017B8D; border-radius: 50px;color: #017B8D;padding: 10px 0;">Sky Chat</a>
                </div>
            </div>





            <div class="follow pb-5">
                <h6
                        style="
                line-height: 1;
                font-family: 'Montserrat', sans-serif;
                text-align: center;
                color: #1b9dfd;
              "
                >
                    Follow me
                </h6>

                <div class="row" style="margin: 25px auto 0px auto; max-width: 200px">
                    <a
                            style="
                  margin: auto;
                  text-decoration: none;
                  display: flex;
                  justify-content: center;
                "
                            href="#"
                    ><i
                                style="color: #3b5998; font-size: 25px"
                                class="fab fa-facebook-square m-auto"
                        ></i
                        ></a>

                    <a
                            style="
                  margin: auto;
                  text-decoration: none;
                  display: flex;
                  justify-content: center;
                "
                            href="#"
                    ><i
                                style="color: #00acee; font-size: 25px"
                                class="fab fa-twitter m-auto"
                        ></i
                        ></a>

                    <a
                            style="
                  margin: auto;
                  text-decoration: none;
                  display: flex;
                  justify-content: center;
                "
                            href="#"
                    ><i
                                style="color: #0072b1; font-size: 25px"
                                class="fab fa-linkedin m-auto"
                        ></i
                        ></a>

                    <a
                            style="
                  margin: auto;
                  text-decoration: none;
                  display: flex;
                  justify-content: center;
                "
                            href="#"
                    ><i
                                style="color: #000; font-size: 25px"
                                class="fab fa-instagram m-auto"
                        ></i
                        ></a>
                </div>
            </div>

            <div class="powerd pb-5">
                <p
                        style="
                font-family: 'Montserrat', sans-serif;
                text-align: center;
                color: #017b8d;
                font-size: 12px;
                line-height: 1;
                margin: 0 0 8px 0;
              "
                >
                    Powered by <a href="http://skycards.lk/"> Sky Cards </a>
                </p>
                <p
                        style="
              margin-top: 17px;
                font-family: 'Montserrat', sans-serif;
                text-align: center;
                color: #ff8a45;
                font-size: 10px;
              "
                >
                    Your Digital Business Card Companion <br>
                    <a href="http://skycards.lk/" style="font-weight: 800;text-transform: uppercase;color: #ff8a45;"> Get yours today </a>
                </p>
            </div>


        </div>

    </div>

</div>






@include('frontend.card_view.secion.functions')






@include('frontend.card_view.secion.footer')