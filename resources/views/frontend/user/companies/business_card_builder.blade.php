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
        </div>
    </div>

    <script src="{{url('light_theme/step_p/script.js')}}"></script>


@endsection
