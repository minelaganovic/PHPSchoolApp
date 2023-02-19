<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PHPŠkola</title>
    <link rel="icon" href="{{asset('front/img')}}/logoend.png">
    <link rel="stylesheet" href="{{asset('front/css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('front/css')}}/style.css">
    <link rel="stylesheet" href="{{asset('front/css')}}/dashboard.css">
    @yield('styles')
</head>

<body>
    <input type="checkbox" id="checkbox">
	<header id="header" class="main_menu home_menu">
		<a style="color:rgb(65, 103, 159);font-size:35px;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="navbar-brand" href="/">
			<img src="{{asset('front/img')}}/logoend.png" style="height: 60px; padding-bottom:11px" alt="logo">ŠKOLA</a>
	</header>
	<div class="body">
		<nav class="side-bar">
            <label for="checkbox">
                <i id="navbtn" class="fa fa-angle-double-right" aria-hidden="true"></i>
            </label>
			<div class="user-p">
				<img src="{{asset('front/img')}}/logoadmin.webp">
				<h4>{{Session::get('name')}}</h4>
			</div>
			<ul>
				<li class="notification" >
					<span class="badge">3</span>
					<a href="/adminpage">
						<i class="fa fa-bell" aria-hidden="true"></i>
						<span>Korisnici</span>
					</a>
				</li>
				<li>
					<a href="/news">
						<i class="fa fa-newspaper-o" aria-hidden="true"></i>
						<span>Novosti</span>
					</a>
				</li>
				<li>
					<a href="/coontact">
						<i class="fa fa-cog" aria-hidden="true"></i>
						<span>Kontakt</span>
					</a>
				</li>
				<li>
					<a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="fa fa-power-off" aria-hidden="true"></i>
                     {{ __('Odjavi se') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
					</a>
				</li>
			</ul>
		</nav>