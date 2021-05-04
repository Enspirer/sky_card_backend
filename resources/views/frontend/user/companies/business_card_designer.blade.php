@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

<link href="{{url('light_theme/step_p/style.css')}}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

@section('content')

    <div class="app-main__outer">

        <div class="app-main__inner">
            @include('frontend.user.companies.sections.card_builder_steps_section',['step' => 2])
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title">
                                <i class="header-icon lnr-bicycle icon-gradient bg-love-kiss"> </i>
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-0" class="nav-link show active">Design</a></li>
                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg5-1" class="nav-link show">Preview</a></li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane show active" id="tab-eg5-0" role="tabpanel">
                                   @include('frontend.user.companies.sections.design_engine.designer')
                                </div>
                                <div class="tab-pane show" id="tab-eg5-1" role="tabpanel">
                                    @include('frontend.user.companies.sections.design_engine.preview')
                                </div>
                            </div>
                        </div>
                        <div class="d-block text-right card-footer">
                            <a href="javascript:void(0);" class="btn-wide btn-shadow btn btn-danger">Delete</a>
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


