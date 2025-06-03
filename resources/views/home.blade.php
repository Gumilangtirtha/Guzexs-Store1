@extends('layouts.app')

@section('title', 'Guzexs Gaming Official - Jelajahi Dunia Gaming Bersama Kami')
@section('description', 'Channel YouTube gaming terbaik dengan konten eksklusif dan produk digital berkualitas tinggi. Bergabunglah dengan komunitas gaming Guzexs!')

@section('content')
<!-- Particle Background -->
<div class="particles" id="particles-bg"></div>

<!-- Hero Section with Advanced Parallax -->
<section class="hero-section" id="hero">
    <div class="hero-bg parallax-element" data-speed="0.3"></div>

    <!-- Animated Gaming Elements -->
    <div class="position-absolute w-100 h-100" style="top: 0; left: 0; overflow: hidden; z-index: 1;">
        <!-- Gaming Controller Icons -->
        <div class="position-absolute bg-shape" style="top: 15%; left: 8%; width: 120px; height: 120px;"></div>
        <div class="position-absolute bg-shape" style="top: 65%; right: 12%; width: 180px; height: 180px; animation-delay: -2s;"></div>
        <div class="position-absolute bg-shape" style="top: 35%; left: 75%; width: 100px; height: 100px; animation-delay: -4s;"></div>

        <!-- Floating Gaming Icons -->
        <div class="position-absolute" style="top: 25%; left: 15%; animation: float 4s ease-in-out infinite;">
            <i class="fas fa-star text-warning" style="font-size: 2rem; opacity: 0.7;"></i>
        </div>
        <div class="position-absolute" style="top: 45%; right: 20%; animation: float 5s ease-in-out infinite reverse;">
            <i class="fas fa-trophy text-warning" style="font-size: 2.5rem; opacity: 0.6;"></i>
        </div>
        <div class="position-absolute" style="bottom: 35%; left: 25%; animation: float 6s ease-in-out infinite;">
            <i class="fas fa-rocket text-primary" style="font-size: 2rem; opacity: 0.8;"></i>
        </div>
        <div class="position-absolute" style="top: 30%; right: 35%; animation: float 3.5s ease-in-out infinite;">
            <i class="fas fa-gamepad text-primary" style="font-size: 1.8rem; opacity: 0.7;"></i>
        </div>
    </div>

    <div class="container hero-content">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                <!-- Gaming Logo/Brand -->
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-gamepad text-primary me-3 pulse" style="font-size: 3rem;"></i>
                        <div class="gaming-font">
                            <div class="text-primary" style="font-size: 1.2rem; font-weight: 700;">OFFICIAL</div>
                        </div>
                    </div>
                </div>

                <h1 class="hero-title neon-glow">
                    <span class="glitch" data-text="GUZEXS">GUZEXS</span><br>
                    <span class="text-warning">GAMING</span>
                </h1>

                <div class="hero-subtitle mb-4">
                    <span class="slide-in-left">Jelajahi Dunia Gaming Bersama Guzexs!</span>
                    <span class="ms-2" style="font-size: 2rem;">🎮</span>
                </div>

                <p class="lead text-light mb-4 slide-in-left" style="animation-delay: 0.3s;">
                    Channel YouTube gaming terbaik dengan konten eksklusif, tutorial gaming, review game terbaru, dan
                    <span class="text-warning fw-bold">produk digital berkualitas tinggi</span> untuk para gamers sejati.
                </p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="{{ route('youtube') }}" class="btn btn-gaming btn-lg pulse">
                        <i class="fab fa-youtube me-2"></i>
                        Tonton Channel YouTube
                    </a>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-download me-2"></i>
                        Jelajahi Produk Digital
                    </a>
                </div>

                <!-- Live Status Indicator -->
                <div class="live-status mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="d-flex align-items-center">
                        <div class="live-indicator me-3">
                            <span class="badge bg-danger pulse">
                                <i class="fas fa-circle me-1" style="font-size: 0.6rem;"></i>
                                LIVE
                            </span>
                        </div>
                        <small class="text-muted">Sedang streaming: "Epic Gaming Session #127"</small>
                    </div>
                </div>

                <!-- Gaming Stats -->
                <div class="row mt-5">
                    <div class="col-4" data-aos="zoom-in" data-aos-delay="600">
                        <div class="gaming-card text-center p-3">
                            <h3 class="gaming-font text-primary mb-0 neon-glow" data-count="125000">0</h3>
                            <small class="text-muted">Subscribers</small>
                            <i class="fab fa-youtube text-danger mt-2" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div class="col-4" data-aos="zoom-in" data-aos-delay="700">
                        <div class="gaming-card text-center p-3">
                            <h3 class="gaming-font text-warning mb-0" data-count="2500">0</h3>
                            <small class="text-muted">Videos</small>
                            <i class="fas fa-play-circle text-primary mt-2" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div class="col-4" data-aos="zoom-in" data-aos-delay="800">
                        <div class="gaming-card text-center p-3">
                            <h3 class="gaming-font text-success mb-0" data-count="350">0</h3>
                            <small class="text-muted">Digital Products</small>
                            <i class="fas fa-download text-success mt-2" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                <div class="position-relative">
                    <!-- Main Gaming Visual -->
                    <div class="text-center position-relative">
                        <!-- Gaming Setup Illustration -->
                        <div class="gaming-setup-container">
                            <div class="gaming-monitor">
                                <i class="fas fa-desktop" style="font-size: 8rem; color: var(--primary-blue); opacity: 0.8;"></i>
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play text-warning pulse" style="font-size: 2rem;"></i>
                                </div>
                            </div>

                            <!-- Gaming Peripherals -->
                            <div class="gaming-peripherals mt-4">
                                <div class="d-flex justify-content-center gap-4">
                                    <div class="gaming-item" data-aos="flip-left" data-aos-delay="900">
                                        <i class="fas fa-gamepad text-primary" style="font-size: 3rem;"></i>
                                        <div class="small text-muted mt-2">Controller</div>
                                    </div>
                                    <div class="gaming-item" data-aos="flip-left" data-aos-delay="1000">
                                        <i class="fas fa-keyboard text-warning" style="font-size: 3rem;"></i>
                                        <div class="small text-muted mt-2">Keyboard</div>
                                    </div>
                                    <div class="gaming-item" data-aos="flip-left" data-aos-delay="1100">
                                        <i class="fas fa-mouse text-success" style="font-size: 3rem;"></i>
                                        <div class="small text-muted mt-2">Mouse</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Achievement Icons -->
                    <div class="position-absolute top-0 start-0 w-100 h-100">
                        <div class="position-absolute" style="top: 15%; left: 15%; animation: float 4s ease-in-out infinite;">
                            <div class="achievement-badge">
                                <i class="fas fa-medal text-warning" style="font-size: 2rem;"></i>
                                <div class="small text-center mt-1">Pro Gamer</div>
                            </div>
                        </div>
                        <div class="position-absolute" style="top: 25%; right: 15%; animation: float 5s ease-in-out infinite reverse;">
                            <div class="achievement-badge">
                                <i class="fas fa-crown text-warning" style="font-size: 2rem;"></i>
                                <div class="small text-center mt-1">Content King</div>
                            </div>
                        </div>
                        <div class="position-absolute" style="bottom: 25%; left: 20%; animation: float 6s ease-in-out infinite;">
                            <div class="achievement-badge">
                                <i class="fas fa-fire text-danger" style="font-size: 2rem;"></i>
                                <div class="small text-center mt-1">Trending</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4" data-aos="fade-up" data-aos-delay="1000">
        <div class="text-center">
            <small class="text-muted d-block mb-2">Scroll untuk melihat lebih banyak</small>
            <i class="fas fa-chevron-down text-primary" style="animation: bounce 2s infinite;"></i>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5" style="background: var(--gradient-dark);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="gaming-font text-primary mb-4">Tentang Guzexs Gaming</h2>
                <p class="lead text-light">
                    Guzexs Gaming adalah channel YouTube gaming yang berdedikasi untuk memberikan konten gaming terbaik, tutorial mendalam, dan review game terbaru untuk komunitas gaming Indonesia.
                </p>
                <p class="text-muted">
                    Kami tidak hanya membuat konten, tetapi juga menyediakan produk digital eksklusif seperti template video, preset audio, aset grafis, dan tools gaming yang akan membantu para content creator dan gamers meningkatkan kualitas konten mereka.
                </p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>Konten Gaming Berkualitas</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>Produk Digital Eksklusif</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>Komunitas Gaming Aktif</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-check-circle text-success me-3"></i>
                            <span>Support 24/7</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left">
                <div class="gaming-card p-4 text-center">
                    <i class="fas fa-users text-primary mb-3" style="font-size: 4rem;"></i>
                    <h4 class="gaming-font text-warning">Join Our Community</h4>
                    <p class="text-muted">
                        Bergabunglah dengan ribuan gamers lainnya dan dapatkan akses eksklusif ke konten premium, early access produk baru, dan diskusi gaming yang seru!
                    </p>
                    <a href="#" class="btn btn-gaming">
                        <i class="fab fa-discord me-2"></i>
                        Join Discord
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Content Section -->
<section class="py-5" style="background: var(--dark-bg);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="gaming-font text-primary">Konten Unggulan</h2>
            <p class="lead text-muted">Video terbaru dan terpopuler dari channel Guzexs Gaming</p>
        </div>

        <div class="row" id="featured-videos">
            <!-- Videos will be loaded here via JavaScript/API -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="gaming-card">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/400x225/0a0e27/007bff?text=Loading..." class="card-img-top" alt="Video Thumbnail">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fas fa-play-circle text-primary" style="font-size: 3rem; opacity: 0.8;"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-light">Loading Latest Videos...</h5>
                        <p class="card-text text-muted">Menampilkan video terbaru dari channel YouTube Guzexs Gaming</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4" data-aos="fade-up">
            <a href="{{ route('youtube') }}" class="btn btn-gaming btn-lg">
                <i class="fab fa-youtube me-2"></i>
                Lihat Semua Video
            </a>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-5" style="background: var(--gradient-dark);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="gaming-font text-primary">Produk Digital Unggulan</h2>
            <p class="lead text-muted">Template, preset, dan aset digital eksklusif untuk content creator</p>
        </div>

        <div class="row">
            @for($i = 1; $i <= 3; $i++)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                <div class="gaming-card h-100">
                    <div class="position-relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x250/0a0e27/007bff?text=Product+{{ $i }}" class="card-img-top" alt="Product {{ $i }}">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-warning">Featured</span>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-light">Gaming Template Pack {{ $i }}</h5>
                        <p class="card-text text-muted flex-grow-1">
                            Template video gaming profesional dengan efek visual yang menakjubkan dan mudah dikustomisasi.
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-muted text-decoration-line-through">Rp 150.000</span>
                                <span class="text-warning fw-bold ms-2">Rp 99.000</span>
                            </div>
                            <div>
                                <button class="btn btn-sm btn-gaming">
                                    <i class="fas fa-cart-plus me-1"></i>
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                        <div class="mt-2">
                            <div class="d-flex align-items-center">
                                <div class="text-warning me-2">
                                    @for($j = 1; $j <= 5; $j++)
                                        <i class="fas fa-star{{ $j <= 4 ? '' : '-o' }}"></i>
                                    @endfor
                                </div>
                                <small class="text-muted">(24 reviews)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div class="text-center mt-4" data-aos="fade-up">
            <a href="{{ route('products.index') }}" class="btn btn-gaming btn-lg">
                <i class="fas fa-store me-2"></i>
                Lihat Semua Produk
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5" style="background: var(--dark-bg);">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="gaming-font text-primary">Apa Kata Mereka</h2>
            <p class="lead text-muted">Testimoni dari komunitas gaming Guzexs</p>
        </div>

        <div class="row">
            @php
            $testimonials = [
                [
                    'name' => 'Ahmad Gaming',
                    'role' => 'Content Creator',
                    'avatar' => 'https://via.placeholder.com/80x80/007bff/ffffff?text=AG',
                    'text' => 'Template dari Guzexs Gaming sangat membantu channel YouTube saya! Kualitasnya professional dan mudah digunakan.',
                    'rating' => 5
                ],
                [
                    'name' => 'Sarah Streamer',
                    'role' => 'Twitch Streamer',
                    'avatar' => 'https://via.placeholder.com/80x80/ffc107/000000?text=SS',
                    'text' => 'Preset audio dari Guzexs membuat stream saya terdengar lebih professional. Highly recommended!',
                    'rating' => 5
                ],
                [
                    'name' => 'Budi Gamer',
                    'role' => 'Gaming Enthusiast',
                    'avatar' => 'https://via.placeholder.com/80x80/28a745/ffffff?text=BG',
                    'text' => 'Konten YouTube Guzexs selalu update dan informatif. Channel gaming terbaik di Indonesia!',
                    'rating' => 5
                ]
            ];
            @endphp

            @foreach($testimonials as $index => $testimonial)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                <div class="gaming-card h-100 p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}" class="rounded-circle me-3" width="60" height="60">
                        <div>
                            <h6 class="text-light mb-0">{{ $testimonial['name'] }}</h6>
                            <small class="text-muted">{{ $testimonial['role'] }}</small>
                        </div>
                    </div>

                    <div class="text-warning mb-3">
                        @for($i = 1; $i <= $testimonial['rating']; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </div>

                    <p class="text-muted mb-0">
                        "{{ $testimonial['text'] }}"
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5" style="background: var(--gradient-primary);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="gaming-font text-white mb-3">Stay Updated!</h2>
                <p class="text-white mb-0">
                    Dapatkan notifikasi untuk video terbaru, produk baru, dan penawaran eksklusif dari Guzexs Gaming.
                </p>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <form class="d-flex gap-3" id="newsletter-form">
                    <input type="email" class="form-control form-control-lg" placeholder="Masukkan email Anda" required>
                    <button type="submit" class="btn btn-dark btn-lg px-4">
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }

    /* Gaming Setup Styles */
    .gaming-setup-container {
        position: relative;
        padding: 2rem;
    }

    .gaming-monitor {
        position: relative;
        display: inline-block;
    }

    .gaming-item {
        text-align: center;
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .gaming-item:hover {
        transform: translateY(-5px) scale(1.1);
    }

    .achievement-badge {
        background: var(--card-bg);
        border: 2px solid var(--primary-blue);
        border-radius: 15px;
        padding: 10px;
        text-align: center;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .achievement-badge:hover {
        transform: scale(1.1);
        border-color: var(--primary-yellow);
        box-shadow: var(--shadow-glow);
    }

    /* Enhanced Card Hover Effects */
    .gaming-card:hover .card-img-top {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    .card-img-top {
        transition: transform 0.3s ease;
    }

    /* Glitch Text Effect */
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

    /* Particle System */
    .particle {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
    }

    /* Live Indicator */
    .live-indicator .badge {
        animation: pulse-live 1.5s infinite;
    }

    @keyframes pulse-live {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }

    /* Enhanced Button Styles */
    .btn-outline-light {
        border: 2px solid var(--primary-blue);
        color: var(--primary-blue);
        transition: all 0.3s ease;
    }

    .btn-outline-light:hover {
        background: var(--primary-blue);
        border-color: var(--primary-blue);
        color: white;
        transform: translateY(-3px);
        box-shadow: var(--shadow-glow);
    }
</style>
@endpush

@push('scripts')
<script>
    // Particle System
    function createParticleSystem() {
        const particlesContainer = document.getElementById('particles-bg');
        const particleCount = 50;

        for (let i = 0; i < particleCount; i++) {
            createParticle(particlesContainer);
        }

        // Create new particles periodically
        setInterval(() => {
            if (particlesContainer.children.length < particleCount) {
                createParticle(particlesContainer);
            }
        }, 2000);
    }

    function createParticle(container) {
        const particle = document.createElement('div');
        particle.className = 'particle';

        // Random properties
        const size = Math.random() * 4 + 2;
        const left = Math.random() * 100;
        const animationDuration = Math.random() * 3 + 4;
        const opacity = Math.random() * 0.5 + 0.3;

        // Random colors from gaming palette
        const colors = ['#2A9DF4', '#FFD700', '#00FF88', '#FF4757'];
        const color = colors[Math.floor(Math.random() * colors.length)];

        particle.style.cssText = `
            width: ${size}px;
            height: ${size}px;
            left: ${left}%;
            background: ${color};
            opacity: ${opacity};
            animation: float-particles ${animationDuration}s infinite linear;
            animation-delay: ${Math.random() * 2}s;
        `;

        container.appendChild(particle);

        // Remove particle after animation
        setTimeout(() => {
            if (particle.parentNode) {
                particle.parentNode.removeChild(particle);
            }
        }, animationDuration * 1000);
    }

    // Enhanced Counter Animation
    function animateCounters() {
        const counters = document.querySelectorAll('[data-count]');

        counters.forEach((counter, index) => {
            const target = parseInt(counter.getAttribute('data-count'));
            const duration = 2500; // 2.5 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;

            // Add delay for staggered effect
            setTimeout(() => {
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        current = target;
                        clearInterval(timer);
                        // Add completion effect
                        counter.style.transform = 'scale(1.1)';
                        setTimeout(() => {
                            counter.style.transform = 'scale(1)';
                        }, 200);
                    }
                    counter.textContent = Math.floor(current).toLocaleString();
                }, 16);
            }, index * 200);
        });
    }

    // Gaming Item Interactions
    function initGamingItems() {
        const gamingItems = document.querySelectorAll('.gaming-item');

        gamingItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.1) rotate(5deg)';
            });

            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1) rotate(0deg)';
            });

            item.addEventListener('click', function() {
                // Add click effect
                this.style.transform = 'translateY(-10px) scale(1.2) rotate(10deg)';
                setTimeout(() => {
                    this.style.transform = 'translateY(-5px) scale(1.1) rotate(5deg)';
                }, 150);
            });
        });
    }

    // Achievement Badge Interactions
    function initAchievementBadges() {
        const badges = document.querySelectorAll('.achievement-badge');

        badges.forEach(badge => {
            badge.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.15) rotate(5deg)';
                this.style.boxShadow = '0 0 30px rgba(42, 157, 244, 0.6)';
            });

            badge.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1) rotate(0deg)';
                this.style.boxShadow = '';
            });
        });
    }

    // Glitch Effect Control
    function initGlitchEffect() {
        const glitchElement = document.querySelector('.glitch');
        if (glitchElement) {
            // Trigger glitch effect randomly
            setInterval(() => {
                if (Math.random() < 0.1) { // 10% chance every interval
                    glitchElement.style.animation = 'glitch 0.3s ease-in-out';
                    setTimeout(() => {
                        glitchElement.style.animation = '';
                    }, 300);
                }
            }, 3000);
        }
    }

    // Intersection Observer for animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.id === 'hero') {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            }
        });
    }, { threshold: 0.5 });

    // Newsletter form with enhanced feedback
    function initNewsletterForm() {
        const form = document.getElementById('newsletter-form');
        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                const button = this.querySelector('button');

                // Show loading state
                button.innerHTML = '<span class="loading-spinner"></span> Subscribing...';
                button.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    button.innerHTML = '<i class="fas fa-check me-2"></i> Subscribed!';
                    button.classList.remove('btn-gaming');
                    button.classList.add('btn-success');

                    setTimeout(() => {
                        this.reset();
                        button.innerHTML = 'Subscribe';
                        button.disabled = false;
                        button.classList.remove('btn-success');
                        button.classList.add('btn-gaming');
                    }, 2000);
                }, 1500);
            });
        }
    }

    // Load YouTube videos with enhanced UI
    function loadFeaturedVideos() {
        const container = document.getElementById('featured-videos');
        if (container) {
            // Simulate loading state
            container.innerHTML = `
                <div class="col-12 text-center">
                    <div class="loading-spinner mx-auto mb-3"></div>
                    <p class="text-muted">Loading latest videos from Guzexs Gaming...</p>
                </div>
            `;

            // Simulate API call delay
            setTimeout(() => {
                // This would be replaced with actual YouTube API data
                container.innerHTML = `
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up">
                        <div class="gaming-card">
                            <div class="position-relative">
                                <img src="https://via.placeholder.com/400x225/2A9DF4/ffffff?text=Latest+Gaming+Video" class="card-img-top" alt="Latest Video">
                                <div class="position-absolute top-50 start-50 translate-middle">
                                    <i class="fas fa-play-circle text-warning" style="font-size: 3rem; opacity: 0.9;"></i>
                                </div>
                                <div class="position-absolute top-0 end-0 m-2">
                                    <span class="badge bg-danger">NEW</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-light">Epic Gaming Montage #127</h5>
                                <p class="card-text text-muted">Highlights dari gaming session terbaru dengan gameplay yang menakjubkan!</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">2 hours ago</small>
                                    <div class="text-warning">
                                        <i class="fas fa-eye me-1"></i> 15.2K views
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
            }, 2000);
        }
    }

    // Initialize all functions when DOM is loaded
    document.addEventListener('DOMContentLoaded', function() {
        createParticleSystem();
        initGamingItems();
        initAchievementBadges();
        initGlitchEffect();
        initNewsletterForm();
        loadFeaturedVideos();

        // Observe hero section for counter animation
        const heroSection = document.getElementById('hero');
        if (heroSection) {
            observer.observe(heroSection);
        }

        // Add smooth scrolling for internal links
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
    });
</script>
@endpush
