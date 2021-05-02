@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

<link href="{{url('light_theme/step_p/style.css')}}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            @include('frontend.user.dashboard_components.title_bar',[
            'title_icon' => 'fa fa-id-card',
            'title_description' => 'You can create your own company business card with SkyCards',
            'title_name'=>'Create Business Card']
            )
            @include('frontend.user.companies.sections.card_builder_steps_section',['step' => 1])

            <br><br>


            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="row" style="padding-bottom: 30px;">
                            <div class="col-md-4">
                                <div class="container">
                                    <div style="background: url('{{url('light_theme/dashboard/assets/images/business-card.png')}}');height: 210px;background-size: contain;background-repeat: no-repeat;background-position: center;"></div>
                                    <h4 style="text-align: center">Create own Business Card</h4>
                                    <div style="padding-left: 30px;padding-right:30px;line-height: normal">
                                        <p style="line-height: normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet
                                            justo ullamcorper tincidunt pellentesque. Nulla sit amet leo purus.
                                        </p>
                                        <button class="btn btn-primary">Quick Demo</button>
                                        <button class="btn btn-primary">Help and Support</button>
                                    </div>


                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <form class="" action="">
                                        {{csrf_field()}}
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Your Name</label>
                                            <input name="first_name" id="exampleEmail" placeholder="Your Name" type="text" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Address</label>
                                            <input name="last_name" id="exampleEmail" placeholder="with a Address" type="text" class="form-control">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="examplePassword" class="">Phone Number 1</label>
                                                    <input name="phone_number1" id="examplePassword" placeholder="Phone Number 1" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleText" class="">Phone Number 2 (Optional)</label>
                                                    <input name="phone_number2" id="examplePassword" placeholder="Phone Number 2" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleText" class="">Fax Number</label>
                                                    <input name="fax_number" id="examplePassword" placeholder="Fax Number" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleText" class="">Card Type</label>
                                                    <select class="form-control">
                                                        <option value="public">Public Card</option>
                                                        <option value="private">Personal Use</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleText" class="">Email</label>
                                                    <input name="fax_number" id="examplePassword" placeholder="Email" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="position-relative form-group">
                                                    <label for="exampleText" class="">Website</label>
                                                    <input name="website" id="examplePassword" placeholder="Website" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleText" class="">Job Role</label>
                                                    <input name="job_role" id="examplePassword" placeholder="Website" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group">
                                                    <label for="exampleText" class="">City</label>
                                                    <input name="city" id="examplePassword" placeholder="Website" type="text" class="form-control">
                                                </div>

                                            </div>
                                        </div>




                                        <button class="mt-1 btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{url('light_theme/step_p/script.js')}}"></script>


@endsection
