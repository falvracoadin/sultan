<div>
    <style>
        .counter-container {
            border-top: 1px solid rgba(83, 83, 83, 0.279);
            padding-top: 40px;
        }

        .counter {
            width: 200px;
            background-color: rgba(223, 223, 223, 0.116);
            height: 100px;
            display: inline-block;
            border-radius: 25px 25px 60px 60px;
        }

        .counter i {
            color: #71ac71;
        }

        .counter h4 {
            margin-top: 20px;
            font-size: 15px;
            color: rgba(68, 68, 68, 0.578);
            font-weight: bold;
            font-family: Verdana, Geneva, Tahoma, sans-serif
        }

        .count {
            color: #99a799;
            font-size: 20px;
        }

        .flag-container {
            position: fixed;
            bottom: 10px;
            right: 10px;
            width: 130px;
            height: 140px;
            padding: 10px 20px;
            background-color: rgba(0, 0, 0, 0.219);
            border-radius: 20px;
        }
        .country-count{
            font-family: "Raleway", sans-serif;
            font-weight: bold;
            font-size: 24px;
        }
    </style>
    <section id="homeIntro" class="parallax first-widget">
        <div class="parallax-overlay">
            <div class="container home-intro-content">
                <div class="row">
                    <div class="col-md-12">
                        <h2>{{ config('app.name') ?? 'NamaWeb' }}</h2>
                        <p>{{ $banner['deskripsi'] }}</p>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </section> <!-- /#homeIntro -->

    <section class="cta clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="cta-title"><strong>Need our service?</strong></h4>
                    <a href="{{ url('/contact') }}" class="main-button accent-color">Contact Us<i
                            class="icon-button fa fa-arrow-right"></i></a>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.cta -->

    <section class="light-content services">
        <div class="container">

            @for ($i = 0; $i < sizeof($servis) / 3; $i++)
                <div class="row">
                    @for ($j = $i * 3; $j < min($i * 3 + 3, sizeof($servis)); $j++)
                        <div class="col-md-4 col-sm-4">
                            <div class="service-box-wrap">
                                <div class="service-icon-wrap">
                                    <i class="fa fa-suitcase fa-2x"></i>
                                </div> <!-- /.service-icon-wrap -->
                                <div class="service-cnt-wrap">
                                    <h3 class="service-title">{{ $servis[$j]['nama_servis'] }}</h3>
                                    <p>{{ $servis[$j]['deskripsi'] }}</p>
                                </div> <!-- /.service-cnt-wrap -->
                            </div> <!-- /.service-box-wrap -->
                        </div> <!-- /.col-md-4 -->
                    @endfor
                </div>
            @endfor
        </div> <!-- /.container -->
    </section> <!-- /.services -->

    <section class="light-content counter-container">
        <div class="container">
            <div class="d-flex p-2 flex-row justify-content-around">
                <div class="counter">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-person fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <h4>Pengunjung Harian</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <p class="count">{{ $visitor['day'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <i class="fa-solid fa-people-arrows-left-right fa-2xl"></i>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <h4>Pengunjung Bulanan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-center">
                                <p class="count">{{ $visitor['month'] }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dark-content portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title">Portofolio Kami</h2>
                        <p class="section-desc"></p>
                    </div> <!-- /.section-header -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->

        <div id="portfolio-carousel" class="portfolio-carousel portfolio-holder">
            @foreach ($portofolio as $por)
                <div class="item">
                    <div class="thumb-post">
                        <div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">{{ $por['nama_portofolio'] }}</span>
                                    <h3 class="portfolio-title"><a
                                            href="{{ url('/portofolio/' . $por['id']) }}">{{ $por['deskripsi'] }}</a>
                                    </h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="{{ asset('storage/' . $por['file']) }}">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="{{ asset('storage/' . $por['file']) }}">
                    </div>
                </div> <!-- /.item -->
            @endforeach
        </div> <!-- /#owl-demo -->
    </section> <!-- /.portfolio-holder -->

    <section class="testimonials-widget">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="bxslider">
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Andy Colin - Architect</span>
                                <p class="testimonial-description">Thank you for all your good work in creating theme.
                                    They have a 'presence' which feels right.</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">Thomas Teddy - Design Writer</span>
                                <p class="testimonial-description">I love the logo. Particularly how the mark can stand
                                    on its own. Nice work! It feels tall and proud and powerful — and I love that.
                                    That's what I was after.</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial-content">
                                <span class="testimonial-author">John Willy - Developer</span>
                                <p class="testimonial-description">You're pretty awesome to work with. Incredibly
                                    organized, easy to communicate with, responsive with next iterations, and beautiful
                                    work.</p>
                            </div>
                        </div>
                    </div> <!-- /.bxslider -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.testimonials-widget -->

    <section class="light-content our-team">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2 class="section-title">Meet our happy staff</h2>
                        <p class="section-desc">Deskripsi</p>
                    </div> <!-- /.section-header -->
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
        <div class="team-members">
            <div class="container">
                @for ($i = 0; $i < sizeof($staff) / 3; $i++)
                    <div class="row">
                        @for ($j = $i * 3; $j < min($i * 3 + 3, sizeof($staff)); $j++)
                            <div class="col-md-4 col-sm-4">
                                <div class="team-member">
                                    <div class="thumb-post">
                                        <img src="{{ asset($staff[$j]['file'] == null ? '/images/includes/member1.jpg' : 'storage/' . $staff[$j]['file']) }}"
                                            alt="">
                                        <span class="member-role">{{ $staff[$j]['posisi'] }}</span>
                                    </div>
                                    <div class="member-content">
                                        <h4 class="member-name">{{ $staff[$j]['nama_staff'] }}</h4>
                                        <p>{{ $staff[$j]['deskripsi'] }}</p>
                                    </div>
                                </div> <!-- /.team-member -->
                            </div> <!-- /.col-md-4 -->
                        @endfor
                    </div> <!-- /.row -->
                @endfor
            </div> <!-- /.container -->
        </div> <!-- /.team-members -->
    </section> <!-- /.our-team -->

    <section id="blogPosts" class="parallax">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <h2 class="section-title">Recent from our article</h2>
                            <p class="section-desc">Deskripsi</p>
                        </div> <!-- /.section-header -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
                <div class="row latest-posts">
                    @foreach ($artikel as $ark)
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post clearfix">
                                <div class="thumb-post">
                                    <a href="blog-single.html"><img
                                            src="{{ asset($ark['gambar'] == null ? 'images/includes/blogthumb1.jpg' : 'storage/' . $ark['gambar']) }}"
                                            alt="" class="img-circle"></a>
                                </div>
                                <div class="blog-post-content">
                                    <h4 class="post-title"><a
                                            href="{{ url('/artikel/' . $ark['id']) }}">{{ $ark['nama_artikel'] }}</a>
                                    </h4>
                                    <span
                                        class="meta-post-date">{{ date('d M Y', strtotime($ark['tanggal_terbit'])) }}</span>
                                </div>
                            </div> <!-- /.blog-post -->
                        </div> <!-- /.col-md-4 -->
                    @endforeach
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </section> <!-- /#blogPosts -->
    <div class="flag-container">
        @foreach($countryVisitor as $cv)
            <div class="row mt-2">
                <div class="col-4">
                    <img src="https://flagcdn.com/36x27/{{strtolower($cv['kode'])}}.png" width="36" height="27" alt="{{$cv['kode']}}">
                </div>
                <div class="col-7 country-count">
                    : {{$cv['jumlah']}}
                </div>
            </div>
        @endforeach
    </div>
</div>
