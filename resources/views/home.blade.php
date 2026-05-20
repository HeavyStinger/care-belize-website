@extends('layouts.app')

@section('title', 'Home')

@push('styles')
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
	<link rel="stylesheet" href="{{ asset('css/scroll-pills.css') }}">
	<link rel="stylesheet" href="{{ asset('css/more-offers.css') }}">
	<link rel="stylesheet" href="{{ asset('css/re-assurance.css') }}">
	<link rel="stylesheet" href="{{ asset('css/secondary-cta.css') }}">
@endpush

@push('scripts')
	<script src="{{ asset('js/scroll-pills.js') }}"></script>
@endpush

@section('content')
	@include('components.navbar')

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
				<a href="{{ route('contact') }}" class="cta-button primary">Get Care Now</a>
				<a href="{{ route('about') }}" class="cta-button secondary">Learn More</a>
			</div>
		</div>
		<div class="partners-wrapper">
			<div class="partners-track track1">
				<img src="{{ asset('images/partners/alaia.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/best-western-plus.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/chaa-creek.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/dekenz-transfers.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/muyono.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/ramada-by-wyndham.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/renova-med-spa.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/sleeping-giant.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
			</div>

			<div class="partners-track track2">
				<img src="{{ asset('images/partners/alaia.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/best-western-plus.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/chaa-creek.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/dekenz-transfers.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/muyono.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/ramada-by-wyndham.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/renova-med-spa.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">
				<img src="{{ asset('images/partners/sleeping-giant.png') }}" style="height: 35px" alt="Alaia Mariott Hotel">	
			</div>
		</div>
	</section>
	
	<section class="re-assurance-strip">
		<div class="re-assurance-item">
			<i class="bi bi-check-circle"></i>
			<h6>24/7 Support</h6>
		</div>
		<div class="re-assurance-item">
			<i class="bi bi-translate"></i>
			<h6>English Speaking Doctors</h6>
		</div>
		<div class="re-assurance-item">
			<i class="bi bi-building"></i>
			<h6>We come to you</h6>
		</div>
		<div class="re-assurance-item">
			<i class="bi bi-clock"></i>
			<h6>24/7 Support</h6>
		</div>
	</section>

	<main>
		<!-- <div class="stepper">

			<div class="progress-line">
				<div class="progress-fill"></div>
			</div>

			<div class="step completed">
				<div class="circle">
					✓
				</div>

				<div class="content">
					<span class="label">STEP 1</span>
					<h3>1st Step</h3>
					<span class="badge completed">Completed</span>
				</div>
			</div>

			<div class="step active">
				<div class="circle">
					2
				</div>

				<div class="content">
					<span class="label">STEP 2</span>
					<h3>2nd Step</h3>
					<span class="badge active">In Progress</span>
				</div>
			</div>

			<div class="step">
				<div class="circle">
					3
				</div>

				<div class="content">
					<span class="label">STEP 3</span>
					<h3>3rd Step</h3>
					<span class="badge pending">Pending</span>
				</div>
			</div>

		</div> -->
		
		<div class="stepper">

			<div class="progress-line">
				<div class="progress-fill"></div>
			</div>

			<div class="step">
				<div class="circle">
					1
				</div>

				<div class="content">
					<span class="label">STEP 1</span>
					<h3>Tell us what's wrong</h3>
					<span class="badge pending">Pending</span>
				</div>
			</div>

			<div class="step">
				<div class="circle">
					2
				</div>

				<div class="content">
					<span class="label">STEP 2</span>
					<h3>You're assigned a doctor</h3>
					<span class="badge pending">Pending</span>
				</div>
			</div>

			<div class="step">
				<div class="circle">
					3
				</div>

				<div class="content">
					<span class="label">STEP 3</span>
					<h3>Feel better fast</h3>
					<span class="badge pending">Pending</span>
				</div>
			</div>

		</div>

		<!-- Scrolling pills -->
		@include('components.scroll-pills')

		<!-- More offers -->
		@include('components.more-offers')

		<!-- Re assurance -->
		@include('components.re-assurance')

		<!-- Areas -->
		<section class="areas-section">

			<div class="areas-container">

				<h2 class="section-title">
					We cover all major tourist areas in Belize
				</h2>

				<div class="areas-list">

					<button class="area-btn pill">
						<span><i class="bi bi-geo-alt"></i></span>
						San Pedro
					</button>

					<button class="area-btn pill">
						<span><i class="bi bi-geo-alt"></i></span>
						Placencia
					</button>

					<button class="area-btn pill">
						<span><i class="bi bi-geo-alt"></i></span>
						Caye Caulker
					</button>

					<button class="area-btn pill">
						<span><i class="bi bi-geo-alt"></i></span>
						Hopkins
					</button>

					<button class="area-btn pill">
						<span><i class="bi bi-geo-alt"></i></span>
						Belize City
					</button>

					<button class="area-btn pill">
						<span><i class="bi bi-geo-alt"></i></span>
						Corozal
					</button>

					<button class="area-btn pill">
						<!-- <span><i class="bi bi-geo-alt"></i></span> -->
						+ Many more
					</button>

				</div>

				<!-- <button class="more-btn">
					...
					<span>+ more</span>
				</button> -->

			</div>

		</section>

		<!-- Secondary CTA -->
		@include('components.secondary-cta')
	</main>

	@include('components.footer')

@endsection