@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

<link href="{{url('light_theme/step_p/style.css')}}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

@section('content')

    <div class="app-main__outer">

        <div class="app-main__inner">
            @include('frontend.user.companies.sections.card_builder_steps_section',['step' => 4])
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 card">
                        <div class="mb-3 card">

                            <div class="card-header">
                                <ul class="nav nav-justified">
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link show active">Publish</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link show">Settings</a></li>
                                    <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link show">Offers</a></li>
                                </ul>
                            </div>
                            <div class="card-body">

                                <div class="tab-content">
                                    <div class="tab-pane show active" id="tab-eg7-0" role="tabpanel">
                                       @include('frontend.user.companies.sections.publish_page_wizard')
                                    </div>
                                    <div class="tab-pane show" id="tab-eg7-1" role="tabpanel">
                                        @include('frontend.user.companies.sections.card_settings_page',['card_details' => $cardDetails])
                                    </div>
                                    <div class="tab-pane show" id="tab-eg7-2" role="tabpanel">
                                        @include('frontend.user.companies.sections.bussiness_card_offers')
                                    </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="{{url('light_theme/step_p/script.js')}}"></script>

    @push('dialog-push')
    @include('frontend.user.companies.sections.design_engine.dialogs.welcome_dialog')
    @endpush

@endsection


