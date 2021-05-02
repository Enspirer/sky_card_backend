@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )
<link href="{{url('light_theme/dashboard/assets/css/profile.css')}}" rel="stylesheet">

@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            @include('frontend.user.dashboard_components.title_bar',[
            'title_icon' => 'fa fa-building',
            'title_description' => 'SkyCard Company Page',
            'title_name'=>'View Company Dashboard']
            )
            <div class="row">
                <div class="col-md-4">
                    @include('frontend.user.companies.sections.company_dashboard_card')
                </div>
                <div class="col-md-8">
                    <div class="main-card mb-3 card">
                        <div class="main-card mb-3 card">
                           @include('frontend.user.companies.sections.company_dashboard_count_card')
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{route('frontend.user.companies.create_business_card',$companyDetails->id)}}">
                                    <div class="container">
                                        <div style="border-color: grey;border-style: dashed;border-width: 2px;padding: 50px;text-align: center">
                                            <h3>Make a business card </h3>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>


                        <div class="row" style="margin-top: 10px;">
                            <div class="col-md-12">
                                <div class="container">
                                    <div style="border-color: grey;border-style: dashed;border-width: 2px;padding: 50px;text-align: center">
                                        <h3>Add Employees </h3>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <br><br>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
