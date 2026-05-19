<nav class="{{ request()->routeIs('home') ? 'home' : '' }}">
    <div class="logo">
        <!-- <img src="{{ asset('images/logo.png') }}" style="height: 35px;" alt="Care Belize Logo" /> -->
        <p>
            CARE <span>BELIZE</span>
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