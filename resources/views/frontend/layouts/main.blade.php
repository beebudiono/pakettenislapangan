<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
    <title>Tennis Club</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic"
        type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontello/css/fontello.min.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('frontend/js/vendor/revslider/css/settings.min.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('frontend/css/woocommerce/woocommerce-layout.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/woocommerce/woocommerce-smallscreen.css') }}" type="text/css"
        media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" href="{{ asset('frontend/css/woocommerce/woocommerce.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('frontend/css/wp-cloudy/wpcloudy.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/wp-cloudy/wpcloudy-anim.min.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/core.animation.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/css/shortcodes.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('frontend/css/plugin.woocommerce.min.css') }}" type="text/css"
        media="all" />

    <link rel="stylesheet" href="{{ asset('frontend/css/skin.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('frontend/js/core.messages/core.messages.min.css') }}" type="text/css"
        media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/js/magnific/magnific-popup.min.css') }}" type="text/css"
        media="all" />
    @stack('style-alt')
    <link rel="stylesheet" href="{{ asset('frontend/css/core.portfolio.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('frontend/js/swiper/swiper.min.css') }}" type="text/css" media="all" />
</head>

<body
    class="home page tennisclub_body body_style_wide body_filled article_style_stretch top_panel_show top_panel_above sidebar_hide">
    <div class="body_wrap">
        <div class="page_wrap">
            @include('frontend.layouts.navbar')
            <!-- Page Content Wrap -->
            @yield('content')
            <!-- /Page Content Wrap -->

            <footer class="footer_wrap widget_area scheme_original">
                <div class="footer_wrap_inner widget_area_inner">
                    <div class="content_wrap">
                        <div class="columns_wrap">
                            <!-- Widget: Socials -->
                            <aside class="column-1_4 widget widget_socials">
                                <div class="widget_inner">
                                    <div class="logo">
                                        <a href="index.html">
                                            <img src="{{ asset("assets/Lapangantenis.jpg") }}" class="logo_main" alt="">
                                        </a>
                                    </div>
                                    <div class="logo_descr">Lokasi Tempat Lapangan Tenis Unniversitas Negeri Surabaya pelatihan tenis memiliki 1 indor dan 1 outdor lapangan..</div>
                                </div>
                            </aside><!-- /Widget: Socials --><!-- Widget: Recent Entries -->
                            <aside class="column-1_4 widget widget_text">
                                <h5 class="widget_title">Contact us</h5>
                                <div class="textwidget">
                                    <strong>Alamat</strong>
                                    <p> Jl. Lidah Wetan V No. 45, Lidah Wetan, Lakarsantri 60213 Surabaya Jawa Timur</p>
                                    <strong>No telp</strong>
                                    <p>+62 812-3315-1168</p>
                                    <strong>Email</strong>
                                    <p>unesa.ac.id</p>
                                </div>
                            </aside><!-- /Widget: Text --><!-- Widget: RecentPosts -->

                            <!-- /Widget: RecentPosts -->
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Copyright -->
            <div class="copyright_wrap copyright_style_menu">
                <div class="copyright_wrap_inner">
                    <div class="content_wrap">
                        <div class="copyright_text">ThemeREX © 2016 All Rights Reserved
                            <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Copyright -->
        </div>
    </div>
    <!-- Side block with weather plugin -->
    <a href="#" class="scroll_to_top icon-up" title="Scroll to top"></a>

    <script type="text/javascript" src="{{ asset('frontend/js/jquery/jquery.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontend/js/_packed.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/global.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontend/js/vendor/revslider/jquery.themepunch.tools.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('frontend/js/vendor/revslider/jquery.themepunch.revolution.min.js') }}">
    </script>
    <script type="text/javascript"
        src="{{ asset('frontend/js/vendor/revslider/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('frontend/js/vendor/revslider/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript"
        src="{{ asset('frontend/js/vendor/revslider/extensions/revolution.extension.navigation.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontend/js/vendor/woocommerce/woocommerce.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/vendor/woocommerce/cart-fragments.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontend/js/core.utils.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/core.init.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/theme.init.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/shortcodes.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/core.messages/core.messages.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('frontend/js/swiper/swiper.min.js') }}"></script>

    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key="></script>
    <script type="text/javascript" src="{{ asset('frontend/js/core.googlemap.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @stack('script-alt')
</body>

</html>
