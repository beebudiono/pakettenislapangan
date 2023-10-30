@extends('frontend.layouts.main')

@section('content')
    @include('frontend.layouts.slider')

    <div class="page_content_wrap page_paddings_no">
        <div class="content_wrap">
            <!-- Content -->
            <div class="content">
                <div class="post_item post_item_single page type-page">
                    <div class="post_content">
                        <!-- General info section -->
                        <div class="padding_top_20_imp padding_bottom_20_imp">
                            <div class="sc_section general_info_section margin_top_huge margin_bottom_huge">
                                <div class="sc_section_inner">
                                    <div class="sc_section_overlay">
                                        <div class="sc_section_content padding_on">
                                            <div
                                                class="columns_wrap sc_columns columns_nofluid no_margins sc_columns_count_2">
                                                <div class="column-1_2 sc_column_item sc_column_item_1 odd first"></div>
                                                <div
                                                    class="column-1_2 sc_column_item sc_column_item_2 custom_shadow1 even text_align_center">
                                                    <div class="sc_column_item_inner add_color_2_bg">
                                                        <h3
                                                            class="sc_title sc_title_regular margin_top_medium margin_bottom_tiny color_white font_weight_600 font_size_3_929em">
                                                            Selamat datang latihan tenis lapangan</h3>
                                                        <h6
                                                            class="sc_title sc_title_regular sc_align_center text_uppercase accent1 margin_bottom_medium ltr-spc2 text_align_center font_weight_400 font_size_0_857em">
                                                            Latihan tenis lapangan</h6>
                                                        <div class="margin_top_tiny-">
                                                            <p class="color_white width_90_per margin_auto">sejak 2022
                                                                Kelas latihan tenis ini di bukan untuk segala kalangan umum
                                                                siapapun boleh belajar tenis tanpa mengenal umur
                                                                asakan ada tekat dan niatan semua akan mudah di pelajari.</p>
                                                        </div>
                                                        <figure class="sc_image sc_image_shape_square margin_bottom_medium">
                                                            <img src="{{ url('/') }}/assets/tennisterbaru.jpg" class="logo_fixed" alt=""></a>
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /General info section -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials Block -->
    <div class="sc_section margin_top_null margin_bottom_null aligncenter testimonials_custom_block_2">
        <div class="sc_section_inner">
            <div class="sc_section_overlay">
                <div class="sc_section_content padding_on">
                    <div class="sc_content content_wrap">
                        <div id="sc_testimonials_3"
                            class="sc_testimonials sc_testimonials_style_testimonials-1 margin_top_huge margin_bottom_huge width_66_per">
                            <h2 class="sc_testimonials_title sc_item_title">Testimonials</h2>
                            <div class="sc_slider_swiper swiper-slider-container sc_slider_nopagination sc_slider_controls sc_slider_controls_bottom"
                                data-interval="8906" data-slides-min-width="250">
                                <div class="slides swiper-wrapper">
                                    <div class="swiper-slide width_66_per" data-style="width:66%;">
                                        <div id="sc_testimonials_3_1" class="sc_testimonial_item">
                                            <div class="sc_testimonial_content">
                                                <p>Excellent project that helps discovering young talents and keep us
                                                    healthy. Professional coaches and staff are doing great job!</p>
                                            </div>
                                            <div class="sc_testimonial_author">
                                                <span class="sc_testimonial_author_name">Martin Moore, Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide width_66_per" data-style="width:66%;">
                                        <div id="sc_testimonials_2_2" class="sc_testimonial_item">
                                            <div class="sc_testimonial_content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                                    vulputate sed lorem a congue. Donec consequat et sem in porta.</p>
                                            </div>
                                            <div class="sc_testimonial_author">
                                                <span class="sc_testimonial_author_name">John Snow, CEO</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide width_66_per" data-style="width:66%;">
                                        <div id="sc_testimonials_2_3" class="sc_testimonial_item">
                                            <div class="sc_testimonial_content">
                                                <p>Phasellus dapibus eleifend leo, sit amet accumsan risus ornare in. Mauris
                                                    vitae euismod quam. Maecenas aliquet orci eleifend quam pretium
                                                    scelerisque..</p>
                                            </div>
                                            <div class="sc_testimonial_author">
                                                <span class="sc_testimonial_author_name">Lisa Kudrow, Manager</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sc_slider_controls_wrap">
                                    <a class="sc_slider_prev" href="#"></a>
                                    <a class="sc_slider_next" href="#"></a>
                                </div>
                                <div class="sc_slider_pagination_wrap"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Testimonials Block -->
@endsection
