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
    <link rel="stylesheet" href="{{asset('front/css')}}/dashoardstudent.css">
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
				<img src="{{asset('front/img')}}/logostudent.png">
				<p>{{Session::get('name')}}</p>
				<p>{{Session::get('lastname')}}</p>
			</div>
			<ul>
				<li>
					<a href="/studentpage">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Kursevi</span>
					</a>
				</li>
				<li>
					<a href="/studentcourse">
						<i  class="fa fa-info-circle" aria-hidden="true"></i>
						<span><small>Moji Kursevi</small></span>
					</a>
				</li>
				<li>
					<a href="/studentresult">
						<i class="fa fa-bar-chart" aria-hidden="true"></i>
						<span>Rezultati</span>
					</a>
				</li>

				<li>
					<a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                                  <i class="fa fa-power-off" aria-hidden="true"></i>
                     {{ __('Logout') }}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
					</a>
				</li>
			</ul>
		</nav>