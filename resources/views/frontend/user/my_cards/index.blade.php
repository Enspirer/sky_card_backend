@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )

@section('content')

    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="row">

                @foreach($my_cards  as $my_cads)
                    <div class="col-md-4">
                        <div class="card">
                            {{$my_cads->brand_name}}
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>





@endsection
