@extends('layouts.app')

@section('title', 'Services')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/services.js') }}"></script>
@endpush

@section('content')
	@include('components.navbar')

    <section class="hero">
        <p class="eyebrow">Our Services</p>
        <h1>Crafted <span>solutions</span> for skin, body & wellness</h1>
        <p class="lede">Advanced facials and aesthetic treatments designed to refresh, restore and enhance — guided by medical expertise.</p>
        <div class="hero-cta">
            <a href="#facials" class="cta-button primary">Explore Facials</a>
            <a href="#aesthetic" class="cta-button secondary">Aesthetic Services</a>
        </div>
    </section>

    <main>
        <section id="facials" class="facials">
            <h2 class="section-title">
                All facials are 1 hour long
            </h2>

            <div class="bento">
                <!-- 01 Renova Glow — hero tile, image background with overlay text -->
                <article class="bento-tile tile-feature tile-glow" style="--bg: url({{ asset('images/facials/facial-glow.jpg') }})">
                    <div class="tile-bg" aria-hidden="true"></div>
                    <div class="tile-content">
                        <span class="num">01</span>
                        <h3>Renova Glow</h3>
                        <p>Deep hydrating facial — cleansing, double cleansing, light exfoliation, Vitamin C treatment, mask, and our signature Glow Spritz.</p>
                        <ul class="chips">
                            <li>Hydration</li><li>Vitamin C</li><li>Glow</li>
                        </ul>
                    </div>
                </article>

                <!-- 02 Deep Cleansing — wide image tile -->
                <article class="bento-tile tile-image tile-wide">
                    <img src="{{ asset('images/facials/facial-cleansing.jpg') }}" alt="Green clay cleansing mask with eucalyptus" loading="lazy" />
                    <div class="tile-caption">
                        <span class="num">02</span>
                        <h3>Deep Cleansing</h3>
                        <p>Pore-purifying with extractions to refresh congested skin.</p>
                    </div>
                </article>

                <!-- 03 Relaxing — square image -->
                <article class="bento-tile tile-image">
                    <img src="{{ asset('images/facials/facial-relaxing.jpg') }}" alt="Woman receiving a relaxing facial massage" loading="lazy" />
                    <div class="tile-caption">
                        <span class="num">03</span>
                        <h3>Relaxing</h3>
                        <p>Extended facial massage with neck and hand massage.</p>
                    </div>
                </article>

                <!-- 04 Chocolate — text + small image accent -->
                <article class="bento-tile tile-image">
                    <img src="{{ asset('images/facials/facial-chocolate.jpg') }}" alt="Chocolate spa flatlay" loading="lazy" />
                    <div class="tile-caption">
                        <span class="num">04</span>
                        <h3>Chocolate Indulgence</h3>
                        <p>An antioxidant-rich treatment with chocolate mask and lip mask. Nourishes skin, softens texture, leaves you pampered.</p>
                    </div>
                </article>

                <!-- 05 Acne Control — wide image + side text -->
                <article class="bento-tile tile-split">
                    <div class="split-img"><img src="{{ asset('images/facials/facial-acne.jpg') }}" alt="Clinical skin serums on green marble" loading="lazy" /></div>
                    <div class="split-text">
                        <span class="num">05</span>
                        <h3>Acne Control</h3>
                        <p>Deep pore-cleansing for acne-prone skin, with acne-control products and a light peel to target congestion and scars.</p>
                    </div>
                </article>

                <!-- 06 Gentlemen's — tall image tile with overlay -->
                <article class="bento-tile tile-feature tile-gentlemen" style="--bg:url({{ asset('images/facials/facial-gentlemen.jpg') }}">
                    <div class="tile-bg" aria-hidden="true"></div>
                    <div class="tile-content">
                        <span class="num">06</span>
                        <h3>Gentlemen's Facial<br/>&amp; Beard Care</h3>
                        <p>Crafted for men's skin and beard care — cleansing, skin refreshment, and dedicated beard-area attention.</p>
                    </div>
                </article>
            </div>
        </section>
        

        <h2 class="section-title" style="margin-top: var(--spacing-page-y);">Aesthetic Services</h2>
        <section id="services" class="bento-aesthetic" aria-label="Aesthetic services">
            <article class="card card-tall card-feature">
                <div class="card-head">
                <span class="badge">01 · Skin Rejuvenation</span>
                <h2>Restore the glow you were born with.</h2>
                </div>
                <ul class="treatments">
                <li><span>Microneedling</span><i>Collagen induction</i></li>
                <li><span>RF Microneedling</span><i>Tightening + texture</i></li>
                <li><span>Laser Treatments</span><i>Tone &amp; pigment</i></li>
                <li><span>Deep Serums w/ Air Pusher</span><i>Hydration boost</i></li>
                <li><span>PRP Treatments</span><i>Platelet-rich plasma</i></li>
                <li><span>Skin Boosters</span><i>Injectable hydration</i></li>
                </ul>
            </article>

            <article class="card">
                <div class="card-head">
                <span class="badge">02 · Injectables</span>
                <h2>Subtle, expert refinement.</h2>
                </div>
                <ul class="treatments">
                <li><span>Botox</span><i>Wrinkle relaxer</i></li>
                <li><span>Dermal Fillers</span><i>Face &amp; lips</i></li>
                </ul>
            </article>

            <article class="card">
                <div class="card-head">
                <span class="badge">03 · Wellness &amp; Restoration</span>
                <h2>Whole-body confidence.</h2>
                </div>
                <ul class="treatments">
                <li><span>Medical Weight Loss</span><i>Monthly check-ins</i></li>
                <li><span>Hair Restoration</span><i>Regrowth therapy</i></li>
                </ul>
            </article>

            <article class="card card-wide">
                <div class="card-head">
                <span class="badge">04 · Corrective &amp; Specialty</span>
                <h2>Targeted solutions for skin that needs more.</h2>
                </div>
                <div class="treatments-grid">
                <div><strong>Warts &amp; Skin Tag Removal</strong><span>Clean, scar-minimal removal</span></div>
                <div><strong>Scar Treatments</strong><span>Surgical, acne &amp; trauma</span></div>
                <div><strong>Intimate Area Lightening</strong><span>Armpits, thighs, neck</span></div>
                <div><strong>Chemical Peels</strong><span>Light to medium depth</span></div>
                <div><strong>Microdermabrasion</strong><span>Resurfacing &amp; dermaplaning</span></div>
                </div>
            </article>
        </section>

        <h2 class="section-title" style="margin-top: var(--spacing-page-y);">
            Only available in
        </h2>
        <section id="locations" class="locations">
            <div class="loc">
                <span class="pin">San Pedro</span>
                <p>3.5 miles north — by appointment.</p>
            </div>
            <div class="divider" aria-hidden="true"></div>
            <div class="loc">
                <span class="pin">Belize City</span>
                <p>Coral Grove Medical &amp; Pediatric Center.</p>
            </div>
        </section>
    </main>

    @include('components.footer')
@endsection