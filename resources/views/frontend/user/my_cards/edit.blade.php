@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <div class="app-main__outer">
        <div class="app-main__inner">
            @include('frontend.user.dashboard_components.title_bar',[
                        'title_icon' => 'fa fa-building',
                        'title_description' => 'You can create your own company page with SkyCards',
                        'title_name'=>'Create Company']
                        )

            <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                <li class="nav-item">
                    <a role="tab" class="nav-link active show" id="tab-0" data-toggle="tab" href="#tab-content-0" aria-selected="true">
                        <span>Edit Card Details</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link show" id="tab-1" data-toggle="tab" href="#tab-content-1" aria-selected="false">
                        <span>Published Item</span>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
                    <div class="row">

                    </div>
                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                    <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
                        <div class="row">

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
