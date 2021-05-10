<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="card user-card">
            <div class="card-block">
                <div class="">
                    @if($companyDetails->logo_img == "no_img.jpg")
                        <div class="" style="background-image: url('https://nichemodels.co/wp-content/uploads/2019/03/user-dummy-pic.png');height: 100px;background-repeat: no-repeat;background-position: center;background-size: contain"></div>
                    @else
                        <div class="" style="background-image: url('{{url('files/preview_files')}}/{{$companyDetails->logo_img}}');height: 100px;background-repeat: no-repeat;background-position: center;background-size: contain"></div>
                    @endif
                </div>
                <h6 class="f-w-600 m-t-25 m-b-10">{{$companyDetails->brand_name}}</h6>
                <p class="text-muted">{{$companyDetails->website}} | {{$companyDetails->category}}</p>
                <hr>
                <p class="text-muted m-t-15">Activity Level: 87%</p>
                <ul class="list-unstyled activity-leval">
                    <li class="active"></li>
                    <li class="active"></li>
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                </ul>
                <div class="bg-c-blue counter-block m-t-10 p-20">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-comment"></i>
                            <p>00</p>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-user"></i>
                            <p>00</p>
                        </div>
                        <div class="col-4">
                            <i class="fa fa-suitcase"></i>
                            <p>00</p>
                        </div>
                    </div>
                </div>
                <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                <hr>
                <div class="row justify-content-center user-social-link">
                    <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                    <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                    <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>