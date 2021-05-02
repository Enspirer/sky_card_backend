@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')
    <style>
        .card-box {
            padding: 20px;
            border-radius: 3px;
            margin-bottom: 30px;
            background-color: #fff;
        }

        .social-links li a {
            border-radius: 50%;
            color: rgba(121, 121, 121, .8);
            display: inline-block;
            height: 30px;
            line-height: 27px;
            border: 2px solid rgba(121, 121, 121, .5);
            text-align: center;
            width: 30px
        }

        .social-links li a:hover {
            color: #797979;
            border: 2px solid #797979
        }
        .thumb-lg {
            height: 88px;
            width: 88px;
        }
        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
            max-width: 100%;
            height: auto;
        }
        .text-pink {
            color: #ff679b!important;
        }
        .btn-rounded {
            border-radius: 2em;
        }
        .text-muted {
            color: #98a6ad!important;
        }
        h4 {
            line-height: 22px;
            font-size: 18px;
        }
    </style>

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-display1 icon-gradient bg-premium-dark">
                            </i>
                        </div>
                        <div>Companies
                            <div class="page-title-subheading">Wide selection of forms controls, using the Bootstrap 4 code base, but built with React.
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">

                    </div>
                </div>
            </div>


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
                            <div class="main-card mb-3 card" style="padding-top: 100px;padding-bottom: 100px;text-align: center">
                                <div class="card-body">
                                    <i class="fa fa-plus" style="font-size: 40px;text-align: center;margin-bottom: 10px;"></i>
                                    <h5 class="card-title" style="text-align: center">Create Company</h5>
                                    <p style="text-align: center;line-height: normal">Create your own company<br> with SkyCards</p><br>
                                </div>
                            </div>
                        </div>
                        @include('frontend.user.companies.sections.company_card_item')
                    </div>
                </div>


                <div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">

                </div>
                <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">

                </div>
            </div>
        </div>
    </div>


@endsection
