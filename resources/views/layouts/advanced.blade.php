<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Guzexs Gaming Official')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
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
            --text-muted: #8892b0;
            --gradient-primary: linear-gradient(135deg, var(--primary-blue), var(--primary-yellow));
            --gradient-dark: linear-gradient(135deg, var(--dark-bg), var(--darker-bg));
            --gradient-gaming: linear-gradient(45deg, var(--primary-blue), var(--accent-green), var(--primary-yellow));
            --shadow-glow: 0 0 30px rgba(42, 157, 244, 0.5);
            --shadow-neon: 0 0 20px var(--primary-blue), 0 0 40px var(--primary-blue), 0 0 60px var(--primary-blue);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Rajdhani', sans-serif;
            background: var(--gradient-dark);
            color: var(--text-light);
            min-height: 100vh;
            overflow-x: hidden;
            line-height: 1.6;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: var(--darker-bg);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--primary-blue);
        }

        /* Typography */
        .gaming-font {
            font-family: 'Orbitron', monospace;
        }

        /* Particle Background */
        .particles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
            opacity: 0.7;
            animation: float-particles 15s infinite linear;
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

        /* Navigation */
        .navbar-gaming {
            background: rgba(10, 14, 39, 0.95);
            backdrop-filter: blur(15px);
            border-bottom: 2px solid var(--primary-blue);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .navbar-gaming.scrolled {
            background: rgba(5, 8, 20, 0.98);
            box-shadow: var(--shadow-glow);
        }

        .navbar-brand {
            font-family: 'Orbitron', monospace;
            font-weight: 900;
            font-size: 1.8rem;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: scale(1.05);
            filter: drop-shadow(0 0 10px var(--primary-blue));
        }

        .nav-link {
            color: var(--text-light) !important;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: -100%;
            width: 100%;
            height: 2px;
            background: var(--gradient-primary);
            transition: left 0.3s ease;
        }

        .nav-link:hover::before {
            left: 0;
        }

        .nav-link:hover {
            color: var(--primary-yellow) !important;
            transform: translateY(-2px);
        }

        /* Buttons */
        .btn-gaming {
            background: var(--gradient-primary);
            border: none;
            color: white;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 12px 30px;
            border-radius: 50px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-gaming::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-gaming:hover::before {
            left: 100%;
        }

        .btn-gaming:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-glow);
            color: white;
        }

        /* Gaming Cards */
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

        /* Hero Section */
        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 120%;
            height: 120%;
            background: var(--gradient-dark);
            z-index: -1;
        }

        .hero-title {
            font-family: 'Orbitron', monospace;
            font-size: clamp(3rem, 8vw, 6rem);
            font-weight: 900;
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            text-shadow: var(--shadow-neon);
        }

        /* Animations */
        .pulse {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        .bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        /* Glitch Effect */
        .glitch {
            position: relative;
            display: inline-block;
        }

        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch::before {
            animation: glitch-1 0.5s infinite;
            color: var(--accent-red);
            z-index: -1;
        }

        .glitch::after {
            animation: glitch-2 0.5s infinite;
            color: var(--accent-green);
            z-index: -2;
        }

        @keyframes glitch-1 {
            0%, 14%, 15%, 49%, 50%, 99%, 100% {
                transform: translate(0, 0);
            }
            15%, 49% {
                transform: translate(-2px, -2px);
            }
        }

        @keyframes glitch-2 {
            0%, 20%, 21%, 62%, 63%, 99%, 100% {
                transform: translate(0, 0);
            }
            21%, 62% {
                transform: translate(2px, 2px);
            }
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

        /* Loading Animation */
        .loading-spinner {
            width: 20px;
            height: 20px;
            border: 2px solid transparent;
            border-top: 2px solid currentColor;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            display: inline-block;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .navbar-brand {
                font-size: 1.5rem;
            }
            
            .btn-gaming {
                padding: 10px 20px;
                font-size: 0.9rem;
            }
        }

        /* Custom Utilities */
        .text-gradient {
            background: var(--gradient-primary);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .bg-gaming {
            background: var(--gradient-gaming);
        }

        .border-gaming {
            border: 2px solid var(--primary-blue);
        }

        .shadow-gaming {
            box-shadow: var(--shadow-glow);
        }
    </style>

    @stack('styles')
</head>

<body>
    <!-- Particle Background -->
    <div class="particles-container" id="particles-container"></div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-gaming fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="fas fa-gamepad me-2 pulse"></i>
                GUZEXS GAMING
            </a>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="text-light">
                    <i class="fas fa-bars"></i>
                </span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">
                            <i class="fas fa-home me-1"></i>Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-download me-1"></i>Digital Products
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fab fa-youtube me-1"></i>YouTube Channel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-blog me-1"></i>Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-info-circle me-1"></i>About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-envelope me-1"></i>Contact
                        </a>
                    </li>
                </ul>
                
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge bg-primary position-absolute top-0 start-100 translate-middle rounded-pill">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-heart me-1"></i>Wishlist
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user me-1"></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="position: relative; z-index: 2;">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-5" style="background: var(--darker-bg); border-top: 2px solid var(--primary-blue);">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <h5 class="gaming-font text-gradient mb-3">GUZEXS GAMING</h5>
                    <p class="text-muted">
                        Channel YouTube gaming terbaik dengan konten eksklusif dan produk digital berkualitas tinggi untuk para gamers sejati.
                    </p>
                    <div class="d-flex gap-3">
                        <a href="#" class="text-primary fs-4"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="text-primary fs-4"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-primary fs-4"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-primary fs-4"><i class="fab fa-discord"></i></a>
                        <a href="#" class="text-primary fs-4"><i class="fab fa-twitch"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-light mb-3">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Home</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Products</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">YouTube</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-light mb-3">Support</h6>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-muted text-decoration-none">Help Center</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Contact Us</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Privacy Policy</a></li>
                        <li><a href="#" class="text-muted text-decoration-none">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 mb-4">
                    <h6 class="text-light mb-3">Newsletter</h6>
                    <p class="text-muted small">Subscribe untuk mendapatkan update terbaru!</p>
                    <form class="d-flex gap-2">
                        <input type="email" class="form-control" placeholder="Your email">
                        <button type="submit" class="btn btn-gaming">Subscribe</button>
                    </form>
                </div>
            </div>
            <hr class="my-4" style="border-color: var(--primary-blue);">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-muted mb-0">&copy; 2024 Guzexs Gaming Official. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-muted mb-0">Made with <i class="fas fa-heart text-danger"></i> for Gamers</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // Particle System
        function createParticleSystem() {
            const container = document.getElementById('particles-container');
            const colors = ['#2A9DF4', '#FFD700', '#00FF88', '#FF4757', '#FF6B35'];
            
            function createParticle() {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                const size = Math.random() * 4 + 2;
                const left = Math.random() * 100;
                const animationDuration = Math.random() * 10 + 10;
                const color = colors[Math.floor(Math.random() * colors.length)];
                
                particle.style.cssText = `
                    width: ${size}px;
                    height: ${size}px;
                    left: ${left}%;
                    background: ${color};
                    animation-duration: ${animationDuration}s;
                    animation-delay: ${Math.random() * 5}s;
                `;
                
                container.appendChild(particle);
                
                setTimeout(() => {
                    if (particle.parentNode) {
                        particle.parentNode.removeChild(particle);
                    }
                }, animationDuration * 1000);
            }
            
            // Create initial particles
            for (let i = 0; i < 30; i++) {
                setTimeout(() => createParticle(), i * 200);
            }
            
            // Continue creating particles
            setInterval(createParticle, 2000);
        }

        // Navbar scroll effect
        function handleNavbarScroll() {
            const navbar = document.getElementById('navbar');
            
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        // Smooth scrolling for anchor links
        function initSmoothScrolling() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        }

        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            createParticleSystem();
            handleNavbarScroll();
            initSmoothScrolling();
        });
    </script>

    @stack('scripts')
</body>
</html>
