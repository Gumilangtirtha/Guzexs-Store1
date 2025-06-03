@extends('layouts.simple')

@section('title', 'Guzexs Gaming Official - Jelajahi Dunia Gaming Bersama Kami')

@section('content')
<!-- Hero Section -->
<section class="hero-section" id="hero">
    <!-- Animated Background Elements -->
    <div class="position-absolute w-100 h-100" style="top: 0; left: 0; overflow: hidden; z-index: 1; opacity: 0.3;">
        <div class="position-absolute bg-primary rounded-circle" style="top: 20%; left: 10%; width: 100px; height: 100px; animation: float 6s ease-in-out infinite;"></div>
        <div class="position-absolute bg-warning rounded-circle" style="top: 60%; right: 15%; width: 150px; height: 150px; animation: float 8s ease-in-out infinite reverse;"></div>
        <div class="position-absolute bg-success rounded-circle" style="top: 40%; left: 70%; width: 80px; height: 80px; animation: float 7s ease-in-out infinite;"></div>
    </div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <!-- Gaming Brand -->
                <div class="mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-gamepad text-primary me-3 pulse" style="font-size: 3rem;"></i>
                        <div class="gaming-font">
                            <div class="text-primary" style="font-size: 1.2rem; font-weight: 700;">OFFICIAL</div>
                        </div>
                    </div>
                </div>
                
                <h1 class="hero-title">
                    GUZEXS<br>
                    <span class="text-warning">GAMING</span>
                </h1>
                
                <div class="mb-4" style="font-size: 1.5rem; color: var(--primary-yellow);">
                    Jelajahi Dunia Gaming Bersama Guzexs! 🎮
                </div>
                
                <p class="lead text-light mb-4">
                    Channel YouTube gaming terbaik dengan konten eksklusif, tutorial gaming, review game terbaru, dan 
                    <span class="text-warning fw-bold">produk digital berkualitas tinggi</span> untuk para gamers sejati.
                </p>
                
                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="#" class="btn btn-gaming btn-lg pulse">
                        <i class="fab fa-youtube me-2"></i>
                        Tonton Channel YouTube
                    </a>
                    <a href="#" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-download me-2"></i>
                        Jelajahi Produk Digital
                    </a>
                </div>
                
                <!-- Live Status -->
                <div class="mb-4">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-danger pulse me-3">
                            <i class="fas fa-circle me-1" style="font-size: 0.6rem;"></i>
                            LIVE
                        </span>
                        <small class="text-muted">Sedang streaming: "Epic Gaming Session #127"</small>
                    </div>
                </div>
                
                <!-- Gaming Stats -->
                <div class="row mt-5">
                    <div class="col-4">
                        <div class="gaming-card text-center p-3">
                            <h3 class="gaming-font text-primary mb-0" id="subscribers">125,000</h3>
                            <small class="text-muted">Subscribers</small>
                            <i class="fab fa-youtube text-danger mt-2" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="gaming-card text-center p-3">
                            <h3 class="gaming-font text-warning mb-0" id="videos">2,500</h3>
                            <small class="text-muted">Videos</small>
                            <i class="fas fa-play-circle text-primary mt-2" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="gaming-card text-center p-3">
                            <h3 class="gaming-font text-success mb-0" id="products">350</h3>
                            <small class="text-muted">Digital Products</small>
                            <i class="fas fa-download text-success mt-2" style="font-size: 1.5rem;"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="position-relative text-center">
                    <!-- Main Gaming Visual -->
                    <div class="gaming-setup-container">
                        <div class="gaming-monitor mb-4">
                            <i class="fas fa-desktop" style="font-size: 8rem; color: var(--primary-blue); opacity: 0.8;"></i>
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <i class="fas fa-play text-warning pulse" style="font-size: 2rem;"></i>
                            </div>
                        </div>
                        
                        <!-- Gaming Peripherals -->
                        <div class="d-flex justify-content-center gap-4">
                            <div class="gaming-item text-center">
                                <i class="fas fa-gamepad text-primary float" style="font-size: 3rem;"></i>
                                <div class="small text-muted mt-2">Controller</div>
                            </div>
                            <div class="gaming-item text-center">
                                <i class="fas fa-keyboard text-warning float" style="font-size: 3rem; animation-delay: 0.5s;"></i>
                                <div class="small text-muted mt-2">Keyboard</div>
                            </div>
                            <div class="gaming-item text-center">
                                <i class="fas fa-mouse text-success float" style="font-size: 3rem; animation-delay: 1s;"></i>
                                <div class="small text-muted mt-2">Mouse</div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating Achievement Icons -->
                    <div class="position-absolute top-0 start-0 w-100 h-100">
                        <div class="position-absolute float" style="top: 15%; left: 15%;">
                            <div class="gaming-card p-2 text-center">
                                <i class="fas fa-medal text-warning" style="font-size: 1.5rem;"></i>
                                <div class="small mt-1">Pro Gamer</div>
                            </div>
                        </div>
                        <div class="position-absolute float" style="top: 25%; right: 15%; animation-delay: 1s;">
                            <div class="gaming-card p-2 text-center">
                                <i class="fas fa-crown text-warning" style="font-size: 1.5rem;"></i>
                                <div class="small mt-1">Content King</div>
                            </div>
                        </div>
                        <div class="position-absolute float" style="bottom: 25%; left: 20%; animation-delay: 2s;">
                            <div class="gaming-card p-2 text-center">
                                <i class="fas fa-fire text-danger" style="font-size: 1.5rem;"></i>
                                <div class="small mt-1">Trending</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4">
        <div class="text-center">
            <small class="text-muted d-block mb-2">Scroll untuk melihat lebih banyak</small>
            <i class="fas fa-chevron-down text-primary" style="animation: bounce 2s infinite;"></i>
        </div>
    </div>
</section>

<!-- Featured Content Section -->
<section class="py-5" style="background: var(--dark-bg);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="gaming-font text-primary">Konten Unggulan</h2>
            <p class="lead text-muted">Video terbaru dan terpopuler dari channel Guzexs Gaming</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gaming-card">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/400x225/2A9DF4/ffffff?text=Latest+Gaming+Video" class="card-img-top" alt="Latest Video" style="border-radius: 20px 20px 0 0;">
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
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gaming-card">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/400x225/FFD700/000000?text=Gaming+Tutorial" class="card-img-top" alt="Tutorial Video" style="border-radius: 20px 20px 0 0;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fas fa-play-circle text-primary" style="font-size: 3rem; opacity: 0.9;"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-light">Pro Gaming Tips & Tricks</h5>
                        <p class="card-text text-muted">Tutorial lengkap untuk meningkatkan skill gaming Anda ke level berikutnya!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">1 day ago</small>
                            <div class="text-warning">
                                <i class="fas fa-eye me-1"></i> 28.5K views
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gaming-card">
                    <div class="position-relative">
                        <img src="https://via.placeholder.com/400x225/00FF88/000000?text=Game+Review" class="card-img-top" alt="Game Review" style="border-radius: 20px 20px 0 0;">
                        <div class="position-absolute top-50 start-50 translate-middle">
                            <i class="fas fa-play-circle text-warning" style="font-size: 3rem; opacity: 0.9;"></i>
                        </div>
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge bg-success">HOT</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-light">Game Review: Latest AAA Title</h5>
                        <p class="card-text text-muted">Review mendalam tentang game terbaru yang sedang trending di dunia gaming!</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">3 days ago</small>
                            <div class="text-warning">
                                <i class="fas fa-eye me-1"></i> 45.8K views
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="#" class="btn btn-gaming btn-lg">
                <i class="fab fa-youtube me-2"></i>
                Lihat Semua Video
            </a>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
<section class="py-5" style="background: var(--gradient-dark);">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="gaming-font text-primary">Produk Digital Unggulan</h2>
            <p class="lead text-muted">Template, preset, dan aset digital eksklusif untuk content creator</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gaming-card h-100">
                    <div class="position-relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x250/2A9DF4/ffffff?text=Gaming+Template+Pack" class="card-img-top" alt="Product 1" style="border-radius: 20px 20px 0 0;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-warning">Featured</span>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-light">Gaming Template Pack Pro</h5>
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
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small class="text-muted">(24 reviews)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gaming-card h-100">
                    <div class="position-relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x250/FFD700/000000?text=Audio+Preset+Pack" class="card-img-top" alt="Product 2" style="border-radius: 20px 20px 0 0;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-success">Best Seller</span>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-light">Audio Preset Collection</h5>
                        <p class="card-text text-muted flex-grow-1">
                            Koleksi preset audio gaming untuk streaming dan recording dengan kualitas studio.
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-warning fw-bold">Rp 75.000</span>
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
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small class="text-muted">(18 reviews)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="gaming-card h-100">
                    <div class="position-relative overflow-hidden">
                        <img src="https://via.placeholder.com/400x250/00FF88/000000?text=Graphics+Asset+Pack" class="card-img-top" alt="Product 3" style="border-radius: 20px 20px 0 0;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-primary">New</span>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-light">Graphics Asset Mega Pack</h5>
                        <p class="card-text text-muted flex-grow-1">
                            Aset grafis lengkap untuk overlay, thumbnail, dan branding channel gaming Anda.
                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <div>
                                <span class="text-muted text-decoration-line-through">Rp 200.000</span>
                                <span class="text-warning fw-bold ms-2">Rp 125.000</span>
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
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <small class="text-muted">(12 reviews)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="#" class="btn btn-gaming btn-lg">
                <i class="fas fa-store me-2"></i>
                Lihat Semua Produk
            </a>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-5" style="background: var(--gradient-primary);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="gaming-font text-white mb-3">Stay Updated!</h2>
                <p class="text-white mb-0">
                    Dapatkan notifikasi untuk video terbaru, produk baru, dan penawaran eksklusif dari Guzexs Gaming.
                </p>
            </div>
            <div class="col-lg-6">
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

<style>
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }
    
    .gaming-item {
        transition: transform 0.3s ease;
        cursor: pointer;
    }
    
    .gaming-item:hover {
        transform: translateY(-5px) scale(1.1);
    }
    
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
    }
</style>

<script>
    // Newsletter form
    document.getElementById('newsletter-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const email = this.querySelector('input[type="email"]').value;
        const button = this.querySelector('button');
        
        // Show loading state
        button.innerHTML = 'Subscribing...';
        button.disabled = true;
        
        // Simulate API call
        setTimeout(() => {
            button.innerHTML = '✓ Subscribed!';
            button.classList.remove('btn-dark');
            button.classList.add('btn-success');
            
            setTimeout(() => {
                this.reset();
                button.innerHTML = 'Subscribe';
                button.disabled = false;
                button.classList.remove('btn-success');
                button.classList.add('btn-dark');
            }, 2000);
        }, 1500);
    });
    
    // Gaming item interactions
    document.querySelectorAll('.gaming-item').forEach(item => {
        item.addEventListener('click', function() {
            this.style.transform = 'translateY(-10px) scale(1.2) rotate(10deg)';
            setTimeout(() => {
                this.style.transform = 'translateY(-5px) scale(1.1) rotate(0deg)';
            }, 150);
        });
    });
</script>
@endsection
