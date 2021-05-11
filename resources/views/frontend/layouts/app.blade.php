<!DOCTYPE html>
<html lang="en">
    <head>
        <title> @yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content="@yield('meta_description')">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="{{url('light_theme/plugin/AnimTrap/css/animtrap.css')}}"/>
        <link rel="stylesheet" href="{{url('light_theme/styles/css/style.css')}}"/>
        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-T98CJZ5');
        </script>
        <!-- End Google Tag Manager -->

        <link href="{{url('light_theme/dashboard/assets/css/main.css')}}" rel="stylesheet"></head>
    </head>
    @include('frontend.includes.nav')

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T98CJZ5" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->


    <body>
       @include('includes.partials.read-only')
       @include('includes.partials.logged-in-as')
       @yield('content')

       @stack('before-scripts')
       @include('frontend.includes.footer')

       <!--Start of Tawk.to Script-->
       <script type="text/javascript">
           var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
           (function(){
               var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
               s1.async=true;
               s1.src='https://embed.tawk.to/6094e255185beb22b30af431/1f52p87sq';
               s1.charset='UTF-8';
               s1.setAttribute('crossorigin','*');
               s0.parentNode.insertBefore(s1,s0);
           })();
       </script>
       <!--End of Tawk.to Script-->

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