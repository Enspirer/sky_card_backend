<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SKY CARD</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="{{url('light_theme/styles/css/style.css')}}"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <link href="{{url('light_theme/dashboard/assets/css/main.css')}}" rel="stylesheet">
        <style></style>

    </head>

    @include('frontend.includes.dashboard_nav')

    <body>
        @include('includes.partials.read-only')
        @include('includes.partials.logged-in-as')
        @include('includes.partials.messages')
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>
                    @include('frontend.includes.sidebar')
                </div>
        @yield('content')

        @stack('before-scripts')
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
        </div>



        <script src="{{url('light_theme/dashboard/assets/scripts/main.js')}}"></script>
        <script>
            ANIMSCROLL.init({
                easing: "ease-in-out-sine",
            });
        </script>
        @stack('after-scripts')
        @include('includes.partials.ga')
    </body>
</html>