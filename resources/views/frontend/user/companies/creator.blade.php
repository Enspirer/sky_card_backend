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
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form class="" action="{{route('frontend.user.companies.store')}}" method="post">
                        {{csrf_field()}}
                        <div  class="row">
                            <div class="col-md-6">
                                <div class="" style="border-style: dashed;padding: 200px;border-color: grey;border-width: 2px;text-align: center">
                                    <i class="fa fa-images" style="font-size: 100px;color: grey"></i><br><br>
                                    Company Image
                                </div>
                            </div>

                            <div class="col-md-6">
                                    @include('frontend.user.companies.sections.create_company_form')
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
