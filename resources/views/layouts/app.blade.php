<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>{{$title ?? config('app.name')}}</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">

	<!-- Google Fonts -->
	<link href="http://fonts.googleapis.com/css?family=PT+Serif:400,700,400italic,700itali" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,900,800,700,500,200,100,600" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('bootstrap/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/misc.css')}}">
	<link rel="stylesheet" href="{{asset('css/green-scheme.css')}}">
	<script src="https://kit.fontawesome.com/1dd3312beb.js" crossorigin="anonymous"></script>
	
	<!-- JavaScripts -->
	<script src="{{asset('js/jquery-1.10.2.min.js')}}"></script>
	<script src="{{asset('js/jquery-migrate-1.2.1.min.js')}}"></script>
	@livewireStyles
	@livewireScripts
	<link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon" />

</head>
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/portofolio')}}">Portfolio</a>
            	<ul>
            		<li><a href="{{url('/working-paper')}}">Working Paper</a></li>
            		<li><a href="{{url('/latest-brief')}}">Latest Brief</a></li>
            		<li><a href="{{url('/latest-report')}}">Latest Report</a></li>
            	</ul>
            </li>
            <li><a href="{{url('/artikel')}}">Artikel</a></li>
            <li><a href="{{url('/career')}}">Career</a></li>
			<li><a href="{{url('/contact')}}">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="index.html">
							<img src="{{asset('/images/logo.png')}}" width="150px">
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">

						<nav class="main-nav visible-md visible-lg">
							<ul class="sf-menu">
								<li class="{{$home ?? ''}}"><a href="{{url('/')}}">Home</a></li>
					            <li class="{{$portofolio ?? ''}}"><a href="{{url('/portofolio')}}">Portfolio</a>
					            	<ul>
										<li><a href="{{url('/working-paper')}}">Working Paper</a></li>
										<li><a href="{{url('/latest-brief')}}">Latest Brief</a></li>
										<li><a href="{{url('/latest-report')}}">Latest Report</a></li>
									</ul>
					            </li>
					            <li class="{{$artikel ?? ''}}"><a href="{{url('/artikel')}}">Artikel</a></li>
								<li class="{{$career ?? ''}}"><a href="{{url('/career')}}">Career</a></li>
								<li class="{{$contact ?? ''}}"><a href="{{url('/contact')}}">Contact</a></li>
							</ul> <!-- /.sf-menu -->
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->

	@yield('slot')

	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<ul class="footer-menu">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/portofolio')}}">Portfolio</a></li>
							<li><a href="{{url('/artikel')}}">Artikel</a></li>
							<li><a href="{{url('/career')}}">Career</a></li>
							<li><a href="{{url('/contact')}}">Contact</a></li>
						</ul> <!-- /.footer-menu -->
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<p class="copyright-text">{{App\Models\Footer::getContent()}}</p>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<script src="{{asset('js/min/plugins.min.js')}}"></script>
	<script src="{{asset('js/min/medigo-custom.min.js')}}"></script>

</body>
</html>