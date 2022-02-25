<div>
    <div class="first-widget parallax" id="portfolio" wire:ignore>
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Latest Brief</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Latest Brief</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container" wire:ignore>	
		<div class="row">
			<div class="col-md-12">
				<ul id="filters" class="mixitup-controls">
					<li class="filter" data-filter="all" wire:click='changeCategory("all")'>All</li>
                    @foreach($allCategories as $ctg)
                    <li class="filter" data-filter="{{$ctg['kategori']}}" wire:click="changeCategory('{{$ctg['kategori']}}')">{{$ctg['kategori']}}</li>
                    @endforeach
				</ul>
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	<div class="container">
		<div class="row">
			<div class="portfolio-holder" id="Grid">
                @foreach($portofolios as $portofolio)
				<div class="portfolio-post col-sm-6 col-md-4 mix illustration">
					<div class="thumb-post">
						<div class="overlay">
                            <div class="overlay-inner">
                                <div class="portfolio-infos">
                                    <span class="meta-category">{{$portofolio['kategori']}}</span>
                                    <h3 class="portfolio-title"><a href="project-slideshow.html">{{$portofolio['nama_portofolio']}}</a></h3>
                                </div>
                                <div class="portfolio-expand">
                                    <a class="fancybox" href="images/includes/project1.jpg" title="Visual Admin">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <img src="{{asset($portofolio['file'] == null ? 'images/includes/project1.jpg' : $portofolio['file'])}}" alt="{{$portofolio['kategori']}}">
					</div>
				</div> <!-- /.col-md-4 -->
				@endforeach
			</div> <!-- /.portfolio-holder -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="pages">
                @if($currentPage <3)
                    @for($i = 0; $i < 3; $i++)
                        @if($i == $currentPage)
                            <li wire:click="show({{$i}})"><a class="active"">{{$i+1}}</a></li>
                        @else
					        <li wire:click="show({{$i}})"><a>{{$i+1}}</a></li>
                        @endif
                    @endfor
					<li><a>...</a></li>
					<li wire:click="show({{$maxPage-1}})"><a>{{$maxPage}}</a></li>
                @elseif($currentPage >= 3 and $currentPage < $maxPage - 3)
					<li><a href="#" wire:click="show(0)">1</a></li>
					<li><a href="#">...</a></li>
					@for($i = $currentPage-1; $i < $currentPage + 2; $i++)
						<li wire:click="show({{$i}})"><a>{{$i+1}}</a></li>
					@endfor
					<li><a>...</a></li>
					<li wire:click="show({{$maxPage-1}})"><a>{{$maxPage}}</a></li>
				@elseif($currentPage >= $maaxPage -3)
					<li><a href="#" wire:click="show(0)">1</a></li>
					<li><a href="#">...</a></li>
					@for($i = $maxPage-3; $i < $maxPage; $i++)
                        @if($i == $currentPage)
                            <li wire:click="show({{$i}})"><a class="active"">{{$i+1}}</a></li>
                        @else
					        <li wire:click="show({{$i}})"><a>{{$i+1}}</a></li>
                        @endif
                    @endfor
				@endif
                </ul>
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</div>
