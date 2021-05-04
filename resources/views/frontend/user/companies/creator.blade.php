@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <style>
        .col-ting {
            width: 25em;
            margin: 0 auto;
            margin-top: 3em;
            margin-bottom: 3em;
        }

        .file-upload .image-box {
            margin: 0 auto;
            margin-top: 1em;
            background: #ffffff;
            cursor: pointer;
            overflow: hidden;
            border-style: dashed;
            border-width: 2px;
            border-color: gray;
        }
        .file-upload .image-box img {
            height: 100%;
            display: none;
        }
        .file-upload .image-box p {
            position: relative;
            top: 45%;
        }
    </style>
    <div class="app-main__outer">
        <div class="app-main__inner">
            @include('frontend.user.dashboard_components.title_bar',[
            'title_icon' => 'fa fa-building',
            'title_description' => 'You can create your own company page with SkyCards',
            'title_name'=>'Create Company']
            )
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form class="" action="{{route('frontend.user.companies.store')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}


                        <div  class="row">
                            <div class="col-md-6">
                                <div class="control-group file-upload" id="file-upload1" style="background: transparent;padding-top: 0px;padding-bottom: 0px;padding-left: 0px;padding-right: 0px;object-fit: cover;">
                                    <div class="image-box text-center" style="background: transparent;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;margin-top: 0px;height: 490px;">
                                        <p style="line-height: normal">
                                           Upload your Company/Brand/Organization<br> Photo or Logo
                                        </p>
                                        <img src="" alt="" style="display: inline;height: 480px;">
                                    </div>
                                    <div class="controls" style="display: none;">
                                        <input type="file" name="profile_picture"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                    @include('frontend.user.companies.sections.create_company_form')
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>


        @push('after-scripts')
            <script>
                $(".image-box").click(function(event) {
                    var previewImg = $(this).children("img");
                    $(this)
                        .siblings()
                        .children("input")
                        .trigger("click");
                    $(this)
                        .siblings()
                        .children("input")
                        .change(function() {
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var urll = e.target.result;
                                $(previewImg).attr("src", urll);
                                previewImg.parent().css("background", "transparent");
                                previewImg.show();
                                previewImg.siblings("p").hide();
                            };
                            reader.readAsDataURL(this.files[0]);
                        });
                });
            </script>
        @endpush



@endsection
