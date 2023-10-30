@extends('frontend.layouts.main')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')
    <!-- Page Content Wrap -->
    <div class="page_content_wrap page_paddings_yes">
        <div class="content_wrap">
            <!-- Content -->
            <div class="content">
                <!-- Quote Post -->
                <article class="post_item post_item_excerpt odd post">
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="post-quote.html">Quote</a>
                        </h3>
                        <div class="post_descr">
                            <blockquote cite="#" class="sc_quote">
                                <p>Jadikan bola sebagai sahabatmu lebih hebat lagi jadikan bola sebagai bagian dari dirimu sehingga
                                    anda bisa mengontrol kemana ingin mengarahkan.

                                    kemudian jadikan raket adalah sebagian dari tanganmu maka anda bisa mengendalikan bola dari musuh sekalipun
                                    mendapatkan pukulan yang rumit.
                                </p>
                                <p class="sc_quote_title">
                                    <a href="#">Mersi Budiono</a>
                                </p>
                            </blockquote>
                        </div>
                    </div>
                </article>
                <!-- /Quote Post -->
                <!-- Video Post -->
                <article class="post_item post_item_excerpt even post">
                    <div class="post_featured">
                        <div class="sc_video_player">
                            <div class="sc_video_frame sc_video_play_button hover_icon hover_icon_play" data-width="770"
                                data-height="433"
                                data-video='<video class="video_frame" width="770" height="433" controls>
                                    <source src="/assets/bermaintenis.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>'>
                                    <img alt="/assets/backgroundtennis.jpeg" src="/assets/backgroundtennis.jpeg">
                            </div>
                        </div>
                    </div>
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="post-video.html">Video Post</a>
                        </h3>
                        <div class="post_descr">
                            <p>berikut adalah salah satu cara melakukan gamme dalam permainan tenis lapangan .</p>
                        </div>
                    </div>
                </article>
                <!-- /Video Post -->
                <!-- Audio Post
                <article class="post_item post_item_excerpt odd post">
                    <div class="post_featured">
                        <div class="sc_audio_player sc_audio sc_audio_info" data-width="" data-height="">
                            <div class="sc_audio_header">
                                <div class="sc_audio_author">
                                    <span class="sc_audio_author_name">Frank Sinatra</span>
                                </div>
                                <h6 class="sc_audio_title">Insert Audio Title Here</h6>
                            </div>
                            <div class="__sc_audio_container">
                                <audio class="__sc_audio" src="media/Dream-Music-Relax.mp3"
                                    data-title="Insert Audio Title Here" data-author="Frank Sinatra"></audio>
                            </div>
                        </div>
                    </div>
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="post-audio.html">Audio Post</a>
                        </h3>
                        <div class="post_descr">
                            <p>Sed ac egestas nisl. Sed vestibulum ac diam sit amet porta. Vivamus est neque, tristique quis
                                tempor at, consequat a velit. Morbi sapien sem, posuere quis tellus a, volutpat efficitur
                                odio. Sed in neque in turpis fermentum fermentum. Mauris non...</p>
                        </div>
                    </div>
                </article>
                /Audio Post -->
                <!-- Post without image -->
                <article class="post_item post_item_excerpt even post">
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="post-without-image.html">Berikut adalah gambar sekilas contoh posisi badan yang benar</a>
                        </h3>
                        <div class="post_descr">
                            <p>Posisi badan sangat laah berpengaruh pada setiap pukulan karna jika posisi badan tidak benar maka
                                akan mempengaruhi arah bola dan tujuan bola yang di tuju tidak akan sesuai dengan keinginan kita
                                , seringkali orang lain meremehkan posisi badan se enaknya sehingga tidaklah mudah dalam mengontrol
                                bola dari lawan. kecepatan reflek dan posisi badan sangat diperlukan dalam bermain tenis lapangan.</p>
                        </div>
                    </div>
                </article>
                <!-- /Post without image -->
                <!-- Gallery Post -->
                <article class="post_item post_item_excerpt odd post">
                    <div class="post_featured">
                        <div id="sc_slider_3"
                            class="sc_slider sc_slider_swiper swiper-slider-container sc_slider_controls sc_slider_pagination"
                            data-old-width="770" data-old-height="434" data-interval="7977">
                            <div class="slides swiper-wrapper height_434">
                                <div class="swiper-slide slider3_slide1">
                                    <a href="post-gallery.html">
                                        <img src="\assets\gayaforhand.png" alt="Deskripsi Gambar">
                                    </a>
                                </div>
                                <div class="swiper-slide slider3_slide2">
                                    <a href="post-gallery.html"></a>
                                </div>
                                <div class="swiper-slide slider3_slide3">
                                    <a href="post-gallery.html"></a>
                                </div>
                                <div class="swiper-slide slider3_slide4">
                                    <a href="post-gallery.html"></a>
                                </div>
                                <div class="swiper-slide slider3_slide5">
                                    <a href="post-gallery.html"></a>
                                </div>
                            </div>
                            <div class="sc_slider_controls_wrap">
                                <a class="sc_slider_prev" href="#"></a>
                                <a class="sc_slider_next" href="#"></a>
                            </div>
                            <div class="sc_slider_pagination_wrap"></div>
                        </div>
                    </div>
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="post-gallery.html">Foto di atas adalah bentuk cara memukul forehand</a>
                        </h3>
                        <div class="post_descr">
                            <p>pada saat melakukan pukulan forehand usahakan posisi badan sesuai dengan yang ada foto di atas
                                maka jika teknik sudah benar maka selanjutnya titik bola agar sesuai pas mengenai senar raket
                                yang ada di tengah sehingga dapat melakukan pukulan yang sangat sempurna.</p>
                        </div>
                    </div>
                </article>
                <!-- /Gallery Post -->
                <!-- Link Post -->
                <article class="post_item post_item_excerpt post_format_link even post">
                    <div class="post_content clearfix">
                        <h3 class="post_title">
                            <a href="http://themeforest.net/user/themerex/portfolio">Link Post</a>
                        </h3>
                        <div class="post_descr">
                            <p>
                                <a href="https://www.youtube.com/watch?v=_J0CDqMLW94" title="lanjut ke video youtube"
                                    target="_blank">https://www.youtube.com/watch?v=_J0CDqMLW94</a>
                            </p>
                        </div>
                    </div>
                </article>
                <!-- /Link Post -->
            </div>
            <!-- /Content -->
        </div>
    </div>
    <!-- /Page Content Wrap -->
@endsection


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
