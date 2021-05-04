@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )
<link href="{{url('light_theme/dashboard/assets/css/company_card.css')}}" rel="stylesheet">

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
                        <span>Published  Companies</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a role="tab" class="nav-link show" id="tab-1" data-toggle="tab" href="#tab-content-1" aria-selected="false">
                        <span>Draft Company</span>
                    </a>
                </li>
            </ul>


            <div class="tab-content">
                <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{route('frontend.user.companies.create')}}">
                            <div class="main-card mb-3 card" style="padding-top: 80px;padding-bottom: 80px;text-align: center">
                                    <div class="card-body">
                                        <i class="fa fa-plus" style="font-size: 40px;text-align: center;margin-bottom: 10px;"></i>
                                        <h5 class="card-title" style="text-align: center">Create Company</h5>
                                        <p style="text-align: center;line-height: normal">Create your own company<br> with SkyCards</p>
                                    </div>
                            </div>
                            </a>
                        </div>
                        @foreach($get_companies as $getcompany)                             @include('frontend.user.companies.sections.company_card_item',[
                            'pb_company_id' => $getcompany->id,
                            'pb_company_title' => $getcompany->brand_name,
                            'pb_company_category' => $getcompany->category,
                            'pb_company_website' => $getcompany->website
                            ])
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
                    <div class="tab-pane tabs-animation fade active show" id="tab-content-0" role="tabpanel">
                        <div class="row">
                            @foreach($df_get_companies as $getcompany_df)
                                @include('frontend.user.companies.sections.company_card_item_draft',[
                                                           'df_company_id' => $getcompany_df->id,
                                                           'df_company_title' => $getcompany_df->brand_name,
                                                           'df_company_category' => $getcompany_df->category,
                                                           'df_company_website' => $getcompany_df->website
                                                           ])
                                @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
