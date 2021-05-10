<div class="col-md-12">
    <div class="padding">
        <div class="card user-card-full" style="">
            <div class="row m-l-0 m-r-0">
                <div class="col-sm-4 bg-c-lite-green user-profile" style="background-image: url('{{$card_details->cover_image}}');">

                    <div class="card-block text-center text-white">
                        <div class="m-b-25">
                            @if($card_details->avatar_image == null)
                                @if($companyDetails->logo_img == 'no_img.jpg')
                                    <div class="" style="background-image: url('https://nichemodels.co/wp-content/uploads/2019/03/user-dummy-pic.png');height: 100px;background-position: center;background-repeat: no-repeat;background-size: cover;border-radius: 50%;width: 100px;margin-left: 30px;"></div>

                                @else
                                    <div class="" style="background-image: url('http://localhost:8000/files/preview_files/{{$companyDetails->logo_img}}');height: 100px;background-position: center;background-repeat: no-repeat;background-size: cover;border-radius: 50%;width: 100px;margin-left: 30px;"></div>

                                @endif
                            @else
                                <div class="col-sm-4 bg-c-lite-green user-profile" style="background-image: url('{{$card_details->avatar_image}}');">
                            @endif
                        </div>
                        <h6 class="f-w-600">Default User</h6>
                        <p>Software Engineer</p>
                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-block">
                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Email</p>
                                <h6 class="text-muted f-w-400">{{$card_details->email}}</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Phone</p>

                                @if($card_details->phone_number)
                                    @foreach(json_decode($card_details->phone_number) as $item)
                                        <h6 class="text-muted f-w-400">{{$item}}</h6>
                                    @endforeach
                                @else

                                @endif

                                <h6 class="text-muted f-w-400"></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Company Name</p>
                                <h6 class="text-muted f-w-400">{{$card_details->company_name}}</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Email Address</p>
                                <h6 class="text-muted f-w-400">{{$card_details->email}}</h6>
                            </div>
                        </div>
                        @if($card_details->card_template == null)
                        <div class="">
                            <div class="alert alert-warning fade show" role="alert" style="font-size: 11px;padding-bottom: 8px;margin-bottom: 0px;">
                                Card Design not selected <span><a href="http://localhost:8000/companiesq/business_card_creator/47/step2/12">Select your design</a></span>
                            </div>
                        </div>
                        @else
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-primary">Share My Card</a>
                        @endif

                        <ul class="social-link list-unstyled m-t-40 m-b-10">
                            <li>
                                <a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true">
                                    <i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true">
                                    <i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true">
                                    <i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>