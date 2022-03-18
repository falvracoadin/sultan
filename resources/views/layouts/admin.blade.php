<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN | {{config('app.name')}}</title>
	<link rel="stylesheet" href="{{asset('admin/fontawesome/css/all.min.css')}}"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/templatemo-xtra-blog.css')}}" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
    @livewireStyles
    @livewireScripts
<!--
    
TemplateMo 553 Xtra Blog

https://templatemo.com/tm-553-xtra-blog

-->
</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">Admin</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item {{$artikel ?? ''}}"><a href="{{url('/admin/artikel')}}" class="tm-nav-link">
                        Artikel
                    </a></li>
                    <li class="tm-nav-item {{$banner ?? ''}}"><a href="{{url('/admin/banner')}}" class="tm-nav-link">
                        Banner
                    </a></li>
                    <li class="tm-nav-item {{$portofolio ?? ''}}"><a href="{{url('/admin/portofolio')}}" class="tm-nav-link">
                        Portofolio
                    </a></li>
                    <li class="tm-nav-item {{$servis ?? ''}}"><a href="{{url('/admin/servis')}}" class="tm-nav-link">
                        Servis
                    </a></li>
                    <li class="tm-nav-item {{$staff ?? ''}}"><a href="{{url('/admin/staff')}}" class="tm-nav-link">
                        Staff
                    </a></li>
                    <li class="tm-nav-item {{$contactUs ?? ''}}"><a href="{{url('/admin/contact-us')}}" class="tm-nav-link">
                        Contact Us
                    </a></li>
                    <li class="tm-nav-item {{$footer ?? ''}}"><a href="{{url('/admin/footer')}}" class="tm-nav-link">
                        Footer
                    </a></li>
                    @if(! empty($reset))
                    <li class="tm-nav-item {{$reset ?? ''}}"><a href="{{url('/ubah-password')}}" class="tm-nav-link">
                        Reset Password
                    </a></li>
                    @endif
                    <li class="tm-nav-item"><a href="{{url('/admin/logout')}}" class="tm-nav-link">
                        Logout
                    </a></li>
                </ul>
            </nav>
        </div>
    </header>

    @yield('slot')
    
    <script src="js/templatemo-script.js"></script>
</body>
</html>