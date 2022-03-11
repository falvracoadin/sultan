<div>
    <div class="first-widget parallax" id="portfolioId">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">{{$portofolio['nama_portofolio']}}</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Portofolio</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row project-single">
			<div class="col-md-8">
				<div class="project-img">
					<img src="{{asset('storage/'.$portofolio['file'])}}" alt="Project Image 1">
				</div> <!-- /.project-img -->
			</div> <!-- /.col-md-8 -->
			<div class="col-md-4">
				<div class="project-info">
                    {!! $portofolio['deskripsi'] !!}
				</div> <!-- /.project-info -->
			</div> <!-- /.col-md-4 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	<div class="static-info-project">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<p class="larger-text">Interested to hire us? Go ahead and talk with us on the <a href="{{url('/contact')}}">contact page</a>. We'll be pleased to answer you within a few hours.</p>
				</div> <!-- /.col-md-8 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.static-info-project -->
    <div class="related-projects">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="section-title">Related Projects</h2>
						<p class="section-desc">These are some projects that you may be interested to see.</p>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->

		<div class="container">
			<div class="row">
				<div class="portfolio-holder">
                    @foreach($related as $rel)
					<div class="portfolio-post col-sm-6 col-md-4">
						<div class="thumb-post">
							<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">{{$rel['kategori']}}</span>
                                    <h3 class="portfolio-title"><a href="{{url('/portofolio/'.$rel['id'])}}">{{$rel['nama_portofolio']}}</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="{{asset('storage/'.$rel['file'])}}" title="Gloss Template">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="{{asset('storage/'.$rel['file'])}}" alt="Gloss Template">
						</div>
					</div> <!-- /.col-md-4 -->
                    @endforeach
				</div> <!-- /.portfolio-holder -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.related-projects -->
</div>
