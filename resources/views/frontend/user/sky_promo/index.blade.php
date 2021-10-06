@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <link href="{{url('light_theme/dashboard/my_card/card_style.css')}}" rel="stylesheet">

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">

                        <div class="card-body" style="text-align: center;">
                            <div style="background-image: url('{{'img/email_marketing.png'}}');height: 300px;text-align: center;background-repeat: no-repeat;background-size: contain;background-position: bottom;margin-bottom: 50px;"></div>

                            <h2 style="text-align: center;">SkyPromo</h2>
                            <p style="text-align: left;font-size: 18px;line-height: 30px;">
                                Join 180,000+ companies growing their business with email marketing.Join 180,000+ companies growing their business with email marketing.
                            </p>

                            <p style="text-align: left;font-size: 18px;line-height: 30px;">
                                Join 180,000+ companies growing their business with email marketing.Join 180,000+ companies growing their business with email marketing.
                            </p>
                            <button class="btn btn-primary">Learn More</button>
                            <button class="btn btn-primary">Packages</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                    <div class="card">
                        <div class="card-body">
                            <h4>Start your campaign.Fill this form</h4><br>

                            <form action="{{route('frontend.user.sky_promo.store')}}"  enctype="multipart/form-data" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Campaign name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="form-group">
                                    <label>Upload Your Email Post</label>
                                    <input type="file" name="email_attached" class="form-control-file" required>

                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea type="text" class="form-control" name="description" rows="8" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea type="text" class="form-control" name="message" rows="6" required></textarea>
                                </div>
                                <button class="btn btn-primary">Submit your Details</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @push('dialog-push')
    @include('frontend.user.my_cards.sections.dialogs.create_business_card')
    @endpush
@endsection
