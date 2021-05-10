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
            @include('frontend.user.companies.sections.card_builder_steps_section',['step' => 3])
            <br><br>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form class="" action="{{route('frontend.user.companies.save_social_media')}}" method="post">
                                {{csrf_field()}}
                                <input type="hidden" value="{{$company_details->id}}" name="company_id">
                                <input type="hidden" value="{{$card_details->id}}" name="card_id">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Facebook</label>
                                            <input type="url" name="facebook_link" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Instagram</label>
                                            <input type="url" name="instagram_link" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Twitter</label>
                                            <input type="url" name="twitter_link" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">LinkedIn</label>
                                            <input type="url" name="linkedin_link" class="form-control">
                                        </div>
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail" class="">Youtube</label>
                                            <input type="url" name="youtube_link" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleEmail" class="">About Yourself</label>
                                            <textarea class="form-control" rows="10" name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Card Publish Type</label>
                                            <select class="form-control" name="is_public">
                                                <option value="public" selected>Public</option>
                                                <option value="private">My Private Card</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-primary">Save and Next</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{url('light_theme/step_p/script.js')}}"></script>


@endsection
