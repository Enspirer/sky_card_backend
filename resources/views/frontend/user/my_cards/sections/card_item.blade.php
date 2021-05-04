<div class="col-md-6">
    <div class="padding">
        <div class="card user-card-full">
            <div class="row m-l-0 m-r-0">
                <div class="col-sm-4 bg-c-lite-green user-profile">
                    <div class="card-block text-center text-white">
                        <div class="m-b-25">
                            <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                        </div>
                        <h6 class="f-w-600">{{$my_cad->name}}</h6>
                        <p>{{$my_cad->position}}</p>
                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card-block">
                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Email</p>
                                <h6 class="text-muted f-w-400">{{$my_cad->email}}</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Phone</p>
                                @php
                                    if($my_cad->phone_number != null)
                                    {
                                        $phone_numberArray = json_decode($my_cad->phone_number);

                                    }else{
                                        $phone_numberArray = null;
                                    }
                                @endphp

                                @if($phone_numberArray)
                                        <h6 class="text-muted f-w-400">{{$phone_numberArray->phone_number1}}</h6>
                                        <h6 class="text-muted f-w-400">{{$phone_numberArray->phone_number2}}</h6>
                                @else
                                    Phone Number not found
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Company Name</p>
                                <h6 class="text-muted f-w-400">{{$my_cad->company_name}}</h6>
                            </div>
                            <div class="col-sm-6">
                                <p class="m-b-10 f-w-600">Email Address</p>
                                <h6 class="text-muted f-w-400">{{$my_cad->email}}</h6>
                            </div>
                        </div>

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