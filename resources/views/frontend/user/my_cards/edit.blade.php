@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <link rel="stylesheet" href="{{url('light_theme/preview_mobile/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    
    <div class="app-main__outer">
        <div class="app-main__inner">
            @include('frontend.user.dashboard_components.title_bar',[
                        'title_icon' => 'fa fa-id-card',
                        'title_description' => 'You can create your own company page with SkyCards',
                        'title_name'=>'Edit My Card']
                        )

            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                <li class="nav-item">
                    <a role="tab" class="nav-link active show" id="tab-0" data-toggle="tab" href="#tab-content-0" aria-selected="true">
                        <span>Edit Card Details</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link show" id="tab-1" data-toggle="tab" href="#tab-content-1" aria-selected="false">
                        <span>Change Template</span>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    @include('frontend.user.companies.sections.card_settings_page',['card_details' => $cardDetails])

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                    <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        @include('frontend.user.companies.sections.design_engine.designer',[
                                        'cardDetaials' => $cardDetails,
                                        'cardTempletes' => $templates,
                                        'companyDetails' => $companyDetails
                                        ])
                                    </div>
                                </div>
                            </div>

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
