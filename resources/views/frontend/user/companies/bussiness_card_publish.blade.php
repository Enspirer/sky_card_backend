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


