<div>
    <div class="first-widget parallax" id="blogId">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Artikel | {{$article['nama_artikel']}}</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Artikel</span>
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
						<div class="post-blog">
							<div class="blog-image">
								<img src="images/includes/blog2.jpg" alt="">
							</div> <!-- /.blog-image -->
							<div class="blog-content">
								<span class="meta-date"><a href="#">{{date('d M Y', strtotime($article['tanggal_terbit']))}}</a></span>
								<span class="meta-comments"><a href="#blog-comments">{{sizeof($comments)}} Comments</a></span>
								<span class="meta-author"><a href="#blog-author">{{$staff['nama_staff']}}</a></span>
								<h3>{{$article['nama_artikel']}}</h3>
								<p>{{$article['deskripsi']}}</p>
							</div> <!-- /.blog-content -->
						</div> <!-- /.post-blog -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div id="blog-author" class="clearfix">
                            <a href="#" class="blog-author-img pull-left">
                                <img src="{{asset($staff['file'] == null ? 'images/includes/author.png' : $staff['file'])}}" alt="">
                            </a>
                            <div class="blog-author-info">
                                <h4 class="author-name"><a href="#">{{$staff['nama_staff']}}</a></h4>
                                <p>{{$staff['deskripsi']}}</p>
                            </div>
                        </div>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
                        <div id="blog-comments" class="blog-post-comments">
                            <h3>{{sizeof($comments)}} Comments</h3>
                            <div class="blog-comments-content">

								@foreach($comments as $comment)
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="media-object" src="images/includes/comment2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                        	<h4>{{$comment['nama']}}</h4> 
                                        	<a><span>{{date('d M Y', strtotime($comment['waktu']))}}</span></a>
                                        </div>
                                        <p>{{$comment['komentar']}}</p>
                                    </div>
                                </div>
								@endforeach

                            </div> <!-- /.blog-comments-content -->
                        </div> <!-- /.blog-post-comments -->
                    </div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
                    <div class="col-md-12">
                        <div class="comment-form">
                            <h3>Leave a comment</h3>
							@if($errors->any())
							<div class="alert alert-danger" role="alert">
								{{implode(', ', $errors->all())}}
							</div>
							@endif
                            <div class="widget-inner">
                            	<form wire:ignore>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>
                                            <label for="name-id">Your Name:</label>
                                            <input type="text" id="name-id" name="name-id" wire:model.lazy="newComment.nama">
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            <label for="email-id">Email Address:</label>
                                            <input type="text" id="email-id" name="email-id" wire:model.lazy="newComment.email">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>
                                            <label for="comment">Your comment:</label>
                                            <textarea name="comment" id="comment" rows="5" wire:model.lazy='newComment.komentar'></textarea>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input class="mainBtn" value="Send" id="submit" wire:click="comment" style="text-align: center;cursor: pointer;">
                                    </div>
                                </div>
                                </form>
                            </div> <!-- /.widget-inner -->
                        </div> <!-- /.widget-main -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<h5 class="widget-title">Recent Posts</h5>

						@foreach($recentArticle as $recent)
						<div class="last-post clearfix">
							<div class="thumb pull-left">
								<a href="#"><img src="{{asset($recent['gambar'] == null ? 'images/includes/blogthumb1.jpg' : $recent['file'])}}" alt=""></a>
							</div>
							<div class="content">
								<span>{{date('d M Y', strtotime($recent['tanggal_terbit']))}}</span>
								<h4><a href="#">{{$recent['nama_artikel']}}</a></h4>
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
</div>
