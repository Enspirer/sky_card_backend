@extends('frontend.layouts.dashboard_app')

@section('title', app_name() . ' | ' . __('navs.frontend.dashboard') )
<link href="{{url('light_theme/dashboard/assets/css/company_card.css')}}" rel="stylesheet">

<style>
    .chat-online {
        color: #34ce57
    }

    .chat-offline {
        color: #e4606d
    }

    .chat-messages {
        display: flex;
        flex-direction: column;
        max-height: 800px;
        overflow-y: scroll
    }

    .chat-message-left,
    .chat-message-right {
        display: flex;
        flex-shrink: 0
    }

    .chat-message-left {
        margin-right: auto
    }

    .chat-message-right {
        flex-direction: row-reverse;
        margin-left: auto
    }
    .py-3 {
        padding-top: 1rem!important;
        padding-bottom: 1rem!important;
    }
    .px-4 {
        padding-right: 1.5rem!important;
        padding-left: 1.5rem!important;
    }
    .flex-grow-0 {
        flex-grow: 0!important;
    }
    .border-top {
        border-top: 1px solid #dee2e6!important;
    }
</style>

@section('content')
    <div class="app-main__outer">
        <div class="">
            <main class="">
                <div class="">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-12 col-lg-5 col-xl-3 border-right">
                                @include('frontend.user.companies.sections.inbox.message_sidebar')
                            </div>
                            <div class="col-12 col-lg-7 col-xl-9">
                                @include('frontend.user.companies.sections.inbox.message_title')

                                <div class="position-relative">
                                    @include('frontend.user.companies.sections.inbox.message_content')
                                </div>

                                <div class="flex-grow-0 py-3 px-4 border-top">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Type your message">
                                        <button class="btn btn-primary">Send</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
