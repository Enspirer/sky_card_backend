<div class="col-md-4">
    <div class="text-center card-box">
        <div class="member-card pt-2 pb-2">
            <div class="thumb-lg member-thumb mx-auto">
                <img src="{{url('img/frontend/box2.jpg')}}" class="rounded-circle img-thumbnail" style="object-fit: contain;height: 80px;width: 80px;" alt="profile-image"></div>
            <div class="">
                <h4>{{$df_company_title}}</h4>
                <p class="text-muted">{{$df_company_category}} <span>| </span><span><a href="#" class="text-pink">{{$df_company_website}}</a></span></p>
            </div>
            <a href="" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">View Company</a>
            <a href="{{route('frontend.user.companies.dashboard',$df_company_id)}}" style="color: white;" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">Dashboard</a>
            <div class="mt-4">
                <div class="row">
                    <div class="col-4">
                        <div class="mt-3">
                            <h4>23</h4>
                            <p class="mb-0 text-muted">Employees</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mt-3">
                            <h4>6952</h4>
                            <p class="mb-0 text-muted">Following</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mt-3">
                            <h4>1125</h4>
                            <p class="mb-0 text-muted">Reach Count</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>