<div>
    <section id="homeIntro" class="parallax first-widget">
	    <div class="parallax-overlay">
		    <div class="container home-intro-content">
		        <div class="row">
		        	<div class="col-md-12">
		        		<h2>{{config('app.name') ?? 'NamaWeb'}}</h2>
		        		<p>{{$banner['deskripsi']}}</p>
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
					<a href="#" class="main-button accent-color">Contact Us<i class="icon-button fa fa-arrow-right"></i></a>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.cta -->

	<section class="light-content services">
		<div class="container">

			@for($i = 0; $i < sizeof($servis)/3; $i++)
				<div class="row">
					@for($j = $i*3; $j < min($i*3+3, sizeof($servis)); $j++)
						<div class="col-md-4 col-sm-4">
							<div class="service-box-wrap">
								<div class="service-icon-wrap">
									<i class="fa fa-umbrella fa-2x"></i>
								</div> <!-- /.service-icon-wrap -->
								<div class="service-cnt-wrap">
									<h3 class="service-title">{{$servis[$j]['nama_servis']}}</h3>
									<p>{{$servis[$j]['deskripsi']}}</p>
								</div> <!-- /.service-cnt-wrap -->
							</div> <!-- /.service-box-wrap -->
						</div> <!-- /.col-md-4 -->
					@endfor
				</div>
			@endfor
		</div> <!-- /.container -->
	</section> <!-- /.services -->

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
			@foreach($portofolio as $por)
			<div class="item">
				<div class="thumb-post">
					<div class="overlay">
						<div class="overlay-inner">
							<div class="portfolio-infos">
								<span class="meta-category">{{$por['nama_portofolio']}}</span>
								<h3 class="portfolio-title"><a href="project-slideshow.html">{{$por['deskripsi']}}</a></h3>
							</div>
							<div class="portfolio-expand">
								<a class="fancybox" href="">
									<i class="fa fa-expand"></i>
								</a>
							</div>
						</div>
					</div>
					<img src="images/includes/project1.jpg">
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
								<p class="testimonial-description">Thank you for all your good work in creating theme. They have a 'presence' which feels right.</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">Thomas Teddy - Design Writer</span>
								<p class="testimonial-description">I love the logo. Particularly how the mark can stand on its own. Nice work! It feels tall and proud and powerful — and I love that. That's what I was after.</p>
							</div>
						</div>
						<div class="testimonial">
							<div class="testimonial-content">
								<span class="testimonial-author">John Willy - Developer</span>
								<p class="testimonial-description">You're pretty awesome to work with. Incredibly organized, easy to communicate with, responsive with next iterations, and beautiful work.</p>
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
				@for($i=0; $i < sizeof($staff)/3; $i++)
					<div class="row">
						@for($j= $i*3; $j < min($i*3+3, sizeof($staff));$j++)
							<div class="col-md-4 col-sm-4">
								<div class="team-member">
									<div class="thumb-post">
										<img src="{{asset($staff[$j]['file'] == null ? '/images/includes/member1.jpg' : $staff[$j]['file'])}}" alt="">
										<span class="member-role">{{$staff[$j]['posisi']}}</span>
									</div>
									<div class="member-content">
										<h4 class="member-name">{{$staff[$j]['nama_staff']}}</h4>
										<p>{{$staff[$j]['deskripsi']}}</p>
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
					@foreach($artikel as $ark)
						<div class="col-md-4 col-sm-6">
							<div class="blog-post clearfix">
								<div class="thumb-post">
									<a href="blog-single.html"><img src="{{asset($ark['gambar'] == null ? 'images/includes/blogthumb1.jpg' : $ark['gambar'])}}" alt="" class="img-circle"></a>
								</div>
								<div class="blog-post-content">
									<h4 class="post-title"><a href="blog-single.html">{{$ark['nama_artikel']}}</a></h4>
									<span class="meta-post-date">{{date('d M Y', strtotime($ark['tanggal_terbit']))}}</span>
								</div>
							</div> <!-- /.blog-post -->
						</div> <!-- /.col-md-4 -->
					@endforeach
		        </div> <!-- /.row -->
		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#blogPosts -->
</div>
