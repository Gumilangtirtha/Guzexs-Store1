<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Guzexs Gaming Official - Gaming Content & Digital Products')</title>
    <meta name="description" content="@yield('description', 'Official website of Guzexs Gaming. Discover exclusive digital products, gaming content, and join our vibrant gaming community.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        :root {
            --primary-blue: #2A9DF4;
            --primary-yellow: #FFD700;
            --accent-green: #00FF88;
            --accent-red: #FF4757;
            --accent-orange: #FF6B35;
            --dark-bg: #0a0e27;
            --darker-bg: #050814;
            --card-bg: rgba(42, 157, 244, 0.1);
            --text-light: #ffffff;
            --text-muted: #b0b3b8;
            --gradient-primary: linear-gradient(135deg, var(--primary-blue), var(--primary-yellow));
            --gradient-dark: linear-gradient(135deg, var(--dark-bg), var(--darker-bg));
            --gradient-gaming: linear-gradient(45deg, var(--primary-blue), var(--accent-green), var(--primary-yellow));
            --shadow-glow: 0 0 30px rgba(42, 157, 244, 0.3);
            --shadow-glow-yellow: 0 0 30px rgba(255, 215, 0, 0.3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rajdhani', sans-serif;
            background: var(--dark-bg);
            color: var(--text-light);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .gaming-font {
            font-family: 'Orbitron', monospace;
        }

        /* Header Styles */
        .navbar-gaming {
            background: rgba(10, 14, 39, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid var(--primary-blue);
            transition: all 0.3s ease;
        }

        .navbar-gaming.scrolled {
            background: rgba(5, 8, 20, 0.98);
            box-shadow: 0 4px 20px rgba(0, 123, 255, 0.3);
        }

        .navbar-brand {
            font-family: 'Orbitron', monospace;
            font-weight: 900;
            font-size: 1.8rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
        }

        .nav-link:hover {
            color: var(--primary-yellow) !important;
            transform: translateY(-2px);
        }

        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 50%;
            background: var(--gradient-primary);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            background: var(--gradient-dark);
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%"><stop offset="0%" stop-color="%23007bff" stop-opacity="0.1"/><stop offset="100%" stop-color="%23007bff" stop-opacity="0"/></radialGradient></defs><circle cx="200" cy="200" r="100" fill="url(%23a)"/><circle cx="800" cy="300" r="150" fill="url(%23a)"/><circle cx="400" cy="700" r="120" fill="url(%23a)"/></svg>') no-repeat center center;
            background-size: cover;
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-family: 'Orbitron', monospace;
            font-size: 4rem;
            font-weight: 900;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            text-shadow: 0 0 30px rgba(0, 123, 255, 0.5);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: var(--text-muted);
            margin-bottom: 2rem;
        }

        /* Buttons */
        .btn-gaming {
            background: var(--gradient-primary);
            border: none;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-gaming:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.4);
            color: white;
        }

        .btn-gaming::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-gaming:hover::before {
            left: 100%;
        }

        /* Gaming Cards Enhanced */
        .gaming-card {
            background: var(--card-bg);
            backdrop-filter: blur(15px);
            border: 2px solid rgba(42, 157, 244, 0.3);
            border-radius: 20px;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            overflow: hidden;
            position: relative;
        }

        .gaming-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--gradient-gaming);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: -1;
        }

        .gaming-card:hover {
            transform: translateY(-15px) scale(1.02);
            border-color: var(--primary-yellow);
            box-shadow: var(--shadow-glow);
        }

        .gaming-card:hover::before {
            opacity: 0.1;
        }

        /* Glitch Effect */
        .glitch {
            position: relative;
            animation: glitch 2s infinite;
        }

        @keyframes glitch {
            0%, 100% { transform: translate(0); }
            20% { transform: translate(-2px, 2px); }
            40% { transform: translate(-2px, -2px); }
            60% { transform: translate(2px, 2px); }
            80% { transform: translate(2px, -2px); }
        }

        /* Neon Glow Effect */
        .neon-glow {
            text-shadow:
                0 0 5px var(--primary-blue),
                0 0 10px var(--primary-blue),
                0 0 15px var(--primary-blue),
                0 0 20px var(--primary-blue);
            animation: neon-flicker 2s infinite alternate;
        }

        @keyframes neon-flicker {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.8; }
        }

        /* Particle Background */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .particle {
            position: absolute;
            background: var(--primary-blue);
            border-radius: 50%;
            animation: float-particles 6s infinite linear;
        }

        @keyframes float-particles {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        /* Animated Background Shapes */
        .bg-shape {
            position: absolute;
            border-radius: 50%;
            background: var(--gradient-gaming);
            opacity: 0.1;
            animation: float-shapes 8s infinite ease-in-out;
        }

        @keyframes float-shapes {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }

        /* Pulse Animation */
        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Slide In Animations */
        .slide-in-left {
            animation: slideInLeft 0.8s ease-out;
        }

        .slide-in-right {
            animation: slideInRight 0.8s ease-out;
        }

        @keyframes slideInLeft {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        /* Footer */
        .footer-gaming {
            background: var(--darker-bg);
            border-top: 2px solid var(--primary-blue);
            padding: 3rem 0 1rem;
        }

        /* Parallax */
        .parallax-element {
            transition: transform 0.1s ease-out;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-subtitle {
                font-size: 1.2rem;
            }
        }

        /* Loading Animation */
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: var(--primary-yellow);
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Glow Effects */
        .glow-blue {
            box-shadow: 0 0 20px rgba(0, 123, 255, 0.5);
        }

        .glow-yellow {
            box-shadow: 0 0 20px rgba(255, 193, 7, 0.5);
        }
    </style>

    @stack('styles')
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-gaming fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-gamepad me-2"></i>
                GUZEXS GAMING
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Digital Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('youtube') }}">YouTube Channel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('cart.index') }}">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge bg-primary ms-1" id="cart-count">0</span>
                        </a>
                    </li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user"></i>
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('orders.index') }}">My Orders</a></li>
                                <li><a class="dropdown-item" href="{{ route('wishlist.index') }}">Wishlist</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer-gaming">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="gaming-font text-primary">GUZEXS GAMING</h5>
                    <p class="text-muted">
                        Jelajahi dunia gaming bersama Guzexs! Channel YouTube resmi dengan konten gaming terbaik dan produk digital eksklusif.
                    </p>
                    <div class="social-links">
                        <a href="#" class="text-primary me-3"><i class="fab fa-youtube fa-2x"></i></a>
                        <a href="#" class="text-primary me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="#" class="text-primary me-3"><i class="fab fa-tiktok fa-2x"></i></a>
                        <a href="#" class="text-primary me-3"><i class="fab fa-discord fa-2x"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-uppercase text-primary">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}" class="text-muted">Home</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-muted">Products</a></li>
                        <li><a href="{{ route('youtube') }}" class="text-muted">YouTube</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-muted">Blog</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-uppercase text-primary">Support</h6>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('contact') }}" class="text-muted">Contact</a></li>
                        <li><a href="{{ route('faq') }}" class="text-muted">FAQ</a></li>
                        <li><a href="{{ route('terms') }}" class="text-muted">Terms</a></li>
                        <li><a href="{{ route('privacy') }}" class="text-muted">Privacy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 mb-4">
                    <h6 class="text-uppercase text-primary">Newsletter</h6>
                    <p class="text-muted">Subscribe untuk update terbaru dari Guzexs Gaming!</p>
                    <form class="d-flex">
                        <input type="email" class="form-control me-2" placeholder="Your email">
                        <button class="btn btn-gaming" type="submit">Subscribe</button>
                    </form>
                </div>
            </div>

            <hr class="border-primary">

            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted mb-0">&copy; {{ date('Y') }} Guzexs Gaming Official. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-muted mb-0">Made with <i class="fas fa-heart text-danger"></i> for Gamers</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Custom JS -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar-gaming');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Parallax effect
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax-element');

            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                const yPos = -(scrolled * speed);
                element.style.transform = `translateY(${yPos}px)`;
            });
        });

        // Cart count update
        function updateCartCount() {
            fetch('/cart/count')
                .then(response => response.json())
                .then(data => {
                    document.getElementById('cart-count').textContent = data.count;
                })
                .catch(error => console.error('Error:', error));
        }

        // Update cart count on page load
        document.addEventListener('DOMContentLoaded', updateCartCount);
    </script>

    @stack('scripts')
</body>
</html>
