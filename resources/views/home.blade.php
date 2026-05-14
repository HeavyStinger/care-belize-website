<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- style -->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    </head>
    <body>
        <nav class="home">
			<div class="logo">
				<!-- <img src="{{ asset('images/logo.png') }}" style="height: 35px;" alt="Care Belize Logo" /> -->
				<p>
					Care <span>Belize</span>
				</p>
			</div>

			<div class="wrapper">
				<ul class="nav-links">
					<li><a href="/">Home</a></li>
					<li><a href="/sustainability">Sustainability</a></li>
					<li><a href="/safety">Safety</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/contact">Contact</a></li>
                    <a href="/contact.html" class="cta-button primary">Get Care Now</a>
				</ul>
			</div>

			<a href="/contact.html" class="cta-button primary">Get Care Now</a>
			
			<div class="hamburger-wrapper" onclick="toggleMenu()">
				<div class="hamburger">
					<input
						class="menu-btn"
						type="checkbox"
                        id="menu-btn"
					/>
					<label class="menu-icon">
						<span class="navicon"></span>
					</label>
				</div>
			</div>
		</nav>
		<section class="hero">
			<div class="content">
				<span class="pill pill-dot">
					<div class="dot"></div>
					The Best TeleMedicine Service
				</span>
				<h1 class="headline">
					Our Care
					<br/>
					<span>Your Vacation</span>
				</h1>
				<p>
					Vacation should be relaxing, not stressful. With Care Belize, expert medical care is just a click away, so you can enjoy your trip worry-free.
				</p>
				<div class="buttons">
					<a href="/destinations" class="cta-button primary">Get Care Now</a>
					<a href="/contact" class="cta-button secondary">Learn More</a>
				</div>
			</div>
			<!-- <div class="partners-wrapper">
                <div class="partners-track track1">
                    
                </div>
                <div class="partners-track track2">
                    
                </div>
            </div> -->
		</section>
    </body>
    <script src="{{ asset('js/main.js') }}"></script>
</html>
