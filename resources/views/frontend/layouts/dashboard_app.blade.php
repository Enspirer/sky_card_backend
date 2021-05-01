<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SKY CARD</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{url('light_theme/plugin/AnimTrap/css/animtrap.css')}}"/>
        <link rel="stylesheet" href="{{url('light_theme/styles/css/style.css')}}"/>
        <link href="{{url('light_theme/dashboard/assets/css/main.css')}}" rel="stylesheet">
    </head>

    @include('frontend.includes.nav')

    <body>
        @include('includes.partials.read-only')
        @include('includes.partials.logged-in-as')
        @include('includes.partials.messages')
        @yield('content')

        @stack('before-scripts')

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="{{url('light_theme/plugin/AnimTrap/js/anim-trap.js')}}"></script>
        <script src="{{url('light_theme/plugin/AnimTrap/js/anim-scroll.js')}}"></script>
        <script src="{{url('light_theme/js/main.js')}}"></script>
        <script>
            ANIMSCROLL.init({
                easing: "ease-in-out-sine",
            });
        </script>
        @stack('after-scripts')
        @include('includes.partials.ga')
    </body>
</html>