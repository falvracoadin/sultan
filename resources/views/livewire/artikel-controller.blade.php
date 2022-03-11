<div>
    <div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Article</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Article</span>
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

                        @foreach($articles as $ind => $article)
                            <div class="post-blog">
                                <div class="blog-image">
                                    <a href="{{url('/artikel/'.$article['id'])}}">
                                        <img src="{{asset($article['gambar'] == null ? 'images/includes/blog1.jpg' : 'storage/'.$article['gambar'])}}" alt="">
                                    </a>
                                </div> <!-- /.blog-image -->
                                <div class="blog-content">
                                    <span class="meta-date"><a href="#">{{date('d M Y', strtotime($article['tanggal_terbit']))}}</a></span>
                                    <span class="meta-comments"><a href="#">{{array_key_exists($ind, $numComment) ? $numComment[$ind]['jumlah'] : 0}} Comments</a></span>
                                    <span class="meta-author"><a href="#">{{$penulis[$ind]['nama_staff']}}</a></span>
                                    <h3><a href="{{url('/artikel/'.$article['id'])}}">{{$article['nama_artikel']}}</a></h3>
                                    <p>{{substr($article['nama_artikel'],0,100)}}<a href="{{url('/artikel/'.$article['id'])}}">Continue Reading...</a></p>
                                </div> <!-- /.blog-content -->
                            </div> <!-- /.post-blog -->
                        @endforeach

					</div> <!-- /.col-md-12 -->
					<div class="col-md-12">
						<ul class="pages">
							<li><a href="#" class="active">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">...</a></li>
							<li><a href="#">13</a></li>
						</ul>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h5 class="widget-title">Recent Posts</h5>

                        @foreach($recentArticles as $arc)
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="{{asset($arc['gambar'] == null ? 'images/includes/blogthumb1.jpg' : $arc['gambar'])}}" alt=""></a>
							</div>
							<div class="content">
								<span>{{date('d M Y', strtotime($arc['tanggal_terbit']))}}</span>
								<h4><a href="{{url('/artikel/'.$arc['id'])}}">{{$arc['nama_artikel']}}</a></h4>
							</div>
						</div> <!-- /.last-post -->
                        @endforeach
                    
                    </div> <!-- /.sidebar-widget -->
					<div class="sidebar-widget">
						<h5 class="widget-title">Categories</h5>
						<div class="row categories">
							<div class="col-md-6">
								<ul>
                                    <li ><a href="#all" wire:click="changeCategory('all')">All</a></li>
                                    @for($i = 0; $i < sizeof($allCategories)/2; $i++)
                                        <li><a href="#{{$allCategories[$i]['kategori']}}" wire:click="changeCategory('{{$allCategories[$i]['kategori']}}')">{{$allCategories[$i]['kategori']}}</a></li>
                                    @endfor
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
                                    @for($i = ceil(sizeof($allCategories)/2); $i < sizeof($allCategories); $i++)
									<li><a wire:click="changeCategory('{{$allCategories[$i]['kategori']}}')" href="#{{$allCategories[$i]['kategori']}}">{{$allCategories[$i]['kategori']}}</a></li>
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
</div>
