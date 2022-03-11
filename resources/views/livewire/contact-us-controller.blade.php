<div>
    <div class="first-widget parallax" id="contact">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Contact</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Contact</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">

			<div class="col-md-8 blog-posts">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrapper">
							<h3>Get In Touch With Us</h3>
							<p>deskripsi</p>
							<div class="contact-map">
			                    <div class="google-map-canvas" id="map-canvas" style="height: 320px;">
			                    </div>
			                </div>
						</div> <!-- /.contact-wrapper -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
                    <div class="col-md-12">
						@if(!$status)
							<div class="contact-form">
								<h3>Send a Direct Message</h3>
								<div class="widget-inner">
								<form method="post" id="myForm">
									<div class="row">
										@if($errors->any())
											<div class="alert alert-danger" role="alert">
												{{implode(' ,', $errors->all())}}
											</div>
										@endif
									</div>
									<div class="row">
										<div class="col-md-4">
											<p>
												<label for="name">Your Name:</label>
												<input wire:model.debounce.500ms="nama" type="text" name="name" id="name">
											</p>
										</div>
										<div class="col-md-4">
											<p>
												<label for="email">Email Address:</label>
												<input wire:model.debounce.500ms="email" type="email" name="email" id="email">
											</p>
										</div>
										<div class="col-md-4">
											<p>
												<label for="subject">Subject:</label>
												<input wire:model.debounce.500ms="subjek" type="text" name="subject" id="subject">
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<p>
												<label for="message">Your message:</label>
												<textarea wire:model.debounce.500ms="deskripsi" name="message" id="message"></textarea>
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div id="result"></div>
										</div> <!-- /.col-md-12 -->
									</div> <!-- /.row -->
								</form>
							</div> <!-- /.widget-inner -->
							</div> <!-- /.contact-form -->
							<div class="row">
								<div class="col-md-12">
									<button wire:click="send" class="mainBtn" id="submit">Send Message</button>
								</div>
							</div>
						@else
							<div class="row">
								<div class="col-md-12">
									<div class="alert alert-success" role="alert">
										Terkirim!
									</div>
								</div>
							</div>
						@endif
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h5 class="widget-title">Recent Posts</h5>

                        @foreach($recentArticles as $recent)
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="{{asset($recent['gambar'] == null ? 'images/includes/blogthumb1.jpg' : $recent['gambar'])}}" alt=""></a>
							</div>
							<div class="content">
								<span>{{date('d M Y', strtotime($recent['tanggal_terbit']))}}</span>
								<h4><a href="{{url('/artikel/'.$recent['id'])}}">{{$recent['nama_artikel']}}</a></h4>
							</div>
						</div> <!-- /.last-post -->
                        @endforeach
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Categories</h5>
						<div class="row categories">
							<div class="col-md-6">
								<ul>
                                    <li ><a href="{{url('/artikel/cat/all')}}">All</a></li>
                                    @for($i = 0; $i < sizeof($allCategories)/2; $i++)
                                        <li><a href="{{url("/artikel/cat/".$allCategories[$i]['kategori'])}}" >{{$allCategories[$i]['kategori']}}</a></li>
                                    @endfor
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
                                    @for($i = ceil(sizeof($allCategories)/2); $i < sizeof($allCategories); $i++)
										<li><a href="{{url("/artikel/cat/".$allCategories[$i]['kategori'])}}">{{$allCategories[$i]['kategori']}}</a></li>
                                    @endfor
								</ul>
							</div>
						</div> <!-- /.row -->
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Flickr Feed</h5>
						<ul id="flickr-feed" class="thumbs"></ul>
					</div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Text Widget</h5>
						<p class="light-text">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient… </p>
					</div> <!-- /.sidebar-widget -->
				</div> <!-- /.sidebar -->
			</div> <!-- /.col-md-4 -->

		</div> <!-- /.row -->
	</div> <!-- /.container -->	
	<script>
        $('#myform').on('keyup keypress', function(e) {
            var keyCode = e.keyCode || e.which;
            if (keyCode === 13) { 
                e.preventDefault();
                return false;
            }
        });
    </script>
</div>
