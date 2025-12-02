<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Echo • Sustainable Luxury Indonesia</title>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    :root {
      --sage: #A8C4A2;
      --forest: #5B7B5A;
      --gold: #D4C19D;
      --cream: #F5F2E8;
      --light: #FAFAF7;
      --dark: #2C2C2A;
    }
    * { margin:0; padding:0; box-sizing:border-box; }
    body { font-family:'Poppins',sans-serif; background:var(--light); color:var(--dark); }

    /* Navbar */
    nav {
      position:fixed; width:100%; top:0; z-index:1000; padding:1.8rem 6%;
      display:flex; justify-content:space-between; align-items:center;
      background:transparent; transition:all 0.5s;
    }
    nav.scrolled { background:rgba(255,255,255,0.98); box-shadow:0 12px 40px rgba(0,0,0,0.1); }
    .logo { font-family:'Cinzel',serif; font-size:48px; font-weight:700; color:white; letter-spacing:2px; }
    .logo span { color:var(--gold); }
    nav.scrolled .logo { color:var(--forest); }
    .nav-links a { color:white; margin:0 35px; font-weight:500; text-decoration:none; position:relative; }
    nav.scrolled .nav-links a { color:var(--dark); }
    .nav-links a::after { content:''; width:0; height:2px; bottom:-10px; left:0; position:absolute; background:var(--gold); transition:0.4s; }
    .nav-links a:hover::after { width:100%; }

    /* HERO SLIDESH ArmsOW OTOMATIS - SLOW MOTION */
    .hero-slider { height:100vh; position:relative; overflow:hidden; }
    .slide { position:absolute; top:0; left:0; width:100%; height:100%; opacity:0; transition:opacity 2s ease-in-out; }
    .slide.active { opacity:1; }
    .slide img { width:100%; height:100%; object-fit:cover; filter:brightness(0.7); }
    .slide-content {
      position:absolute; top:50%; left:50%; transform:translate(-50%,-50%);
      text-align:center; color:white; max-width:1100px; padding:20px;
    }
    .slide-content h1 { font-family:'Cinzel',serif; font-size:8vw; letter-spacing:6px; margin-bottom:0.8rem; }
    .slide-content p { font-family:'Playfair Display',serif; font-size:2.1rem; margin:1.5rem 0 3rem; opacity:0.94; }
    .btn-slide { padding:18px 70px; background:transparent; border:2px solid white; border-radius:60px; color:white; font-size:1.3rem; text-decoration:none; transition:0.4s; }
    .btn-slide:hover { background:white; color:var(--forest); }

    /* Card Produk - Fashion & Decoration (sama persis) */
    section { padding:160px 6%; }
    .section-title { font-family:'Cinzel',serif; font-size:4.5rem; text-align:center; margin-bottom:6rem; color:var(--forest); }
    .section-title span { color:var(--sage); }
    .product-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(380px,1fr)); gap:4rem; max-width:1400px; margin:0 auto; }
    .product-card {
      position:relative; border-radius:30px; overflow:hidden; height:640px; cursor:pointer;
      box-shadow:0 25px 60px rgba(0,0,0,0.12); transition:all 0.8s ease;
    }
    .product-card:hover { transform:translateY(-35px); box-shadow:0 70px 110px rgba(0,0,0,0.25); }
    .product-card img { width:100%; height:100%; object-fit:cover; transition:transform 14s ease; }
    .product-card:hover img { transform:scale(1.25); }
    .product-overlay {
      position:absolute; bottom:0; left:0; width:100%; padding:80px 50px 50px;
      background:linear-gradient(transparent,rgba(0,0,0,0.94)); color:white;
      transform:translateY(50px); transition:all 0.9s ease;
    }
    .product-card:hover .product-overlay { transform:translateY(0); }
    .product-overlay h3 { font-size:2.7rem; margin-bottom:0.5rem; }
    .product-overlay p { font-size:1.2rem; opacity:0.9; margin:12px 0; }
    .price { font-weight:600; font-size:1.3rem; color:var(--sage); }

    /* Floating WA */
    .wa-float {
      position:fixed; bottom:30px; right:30px; background:#25D366; color:white; width:68px; height:68px;
      border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:36px;
      box-shadow:0 10px 30px rgba(0,0,0,0.3); z-index:999; animation:pulse 2s infinite;
    }
    @keyframes pulse { 0%{box-shadow:0 0 0 0 rgba(37,211,102,0.7)} 70%{box-shadow:0 0 0 18px rgba(37,211,102,0)} 100%{box-shadow:0 0 0 0 rgba(37,211,102,0)} }

    footer { background:var(--forest); color:white; padding:130px 6% 70px; text-align:center; }
    footer .logo { font-size:60px; margin-bottom:1rem; }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav id="navbar">
    <div class="logo">Echo<span>.</span></div>
    <div class="nav-links">
      <a href="#home">Home</a>
      <a href="#fashion">Fashion</a>
      <a href="#decoration">Decoration</a>
      <a href="news.html">News</a>
      <a href="#contact">Kontak</a>
    </div>
  </nav>

  <!-- HERO SLIDESHOW SLOW MOTION -->
  <div class="hero-slider" id="home">
    <div class="slide active"><img src="https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?auto=format&fit=crop&q=80" alt="">
      <div class="slide-content"><h1>Breath of Nature</h1><p>100% organic linen — ringan, alami, abadi</p><a href="#fashion" class="btn-slide">Explore Fashion</a></div>
    </div>
    <div class="slide"><img src="https://images.unsplash.com/photo-1594221708779-94832f4320d1?auto=format&fit=crop&q=80" alt="">
      <div class="slide-content"><h1>Eternal Silk</h1><p>Kemewahan sutra organik yang menyapa kulit & bumi</p><a href="#fashion" class="btn-slide">Lihat Koleksi</a></div>
    </div>
    <div class="slide"><img src="https://images.unsplash.com/photo-1618220048045-10a6dbdfc8b2?auto=format&fit=crop&q=80" alt="">
      <div class="slide-content"><h1>Earth’s Whisper</h1><p>Kerajinan tanah liat dari tangan Indonesia</p><a href="#decoration" class="btn-slide">Explore Decoration</a></div>
    </div>
    <div class="slide"><img src="https://images.unsplash.com/photo-1618778616585-908f04c8b6e4?auto=format&fit=crop&q=80" alt="">
      <div class="slide-content"><h1>Warm Glow</h1><p>Rotan alami yang menghangatkan rumah Anda</p><a href="#decoration" class="btn-slide">Lihat Koleksi</a></div>
    </div>
  </div>

  <!-- FASHION - Card Style (sama dengan decoration) -->
  <section id="fashion">
    <h2 class="section-title">Fashion <span>Collection</span></h2>
    <div class="product-grid">
      <div class="product-card"><img src="https://images.unsplash.com/photo-1585487000160-6ebcfceb0d03?auto=format&fit=crop&q=80" alt="">
        <div class="product-overlay"><h3>Organic Linen Series</h3><p>Summer 2025</p><span class="price">Rp 690.000 – Rp 1.490.000</span></div>
      </div>
      <div class="product-card"><img src="https://images.unsplash.com/photo-1594221708779-94832f4320d1?auto=format&fit=crop&q=80" alt="">
        <div class="product-overlay"><h3>Eternal Silk</h3><p>Limited Edition</p><span class="price">Rp 1.290.000 – Rp 2.800.000</span></div>
      </div>
      <div class="product-card"><img src="https://images.unsplash.com/photo-1617118460438-5048a6b2c7a5?auto=format&fit=crop&q=80" alt="">
        <div class="product-overlay"><h3>Regenerative Knitwear</h3><p>Winter 2025</p><span class="price">Rp 890.000 – Rp 1.850.000</span></div>
      </div>
    </div>
  </section>

  <!-- DECORATION - Card Style (sama persis dengan fashion) -->
  <section id="decoration" style="background:var(--cream);">
    <h2 class="section-title">Home <span>Decoration</span></h2>
    <div class="product-grid">
      <div class="product-card"><img src="https://images.unsplash.com/photo-1618220048045-10a6dbdfc8b2?auto=format&fit=crop&q=80" alt="">
        <div class="product-overlay"><h3>Handcrafted Ceramic</h3><p>Earth Collection</p><span class="price">Rp 580.000 – Rp 2.800.000</span></div>
      </div>
      <div class="product-card"><img src="https://images.unsplash.com/photo-1618778616585-908f04c8b6e4?auto=format&fit=crop&q=80" alt="">
        <div class="product-overlay"><h3>Rattan Lighting</h3><p>Natural Series</p><span class="price">Rp 950.000 – Rp 3.500.000</span></div>
      </div>
      <div class="product-card"><img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80" alt="">
        <div class="product-overlay"><h3>Organic Textiles</h3><p>Throw & Cushion</p><span class="price">Rp 420.000 – Rp 1.950.000</span></div>
      </div>
    </div>
  </section>

  <footer id="contact">
    <div class="logo">Echo<span>.</span></div>
    <p style="font-size:1.4rem; margin:20px 0;">Go Green • Live Elegant • Love Earth</p>
    <p>© 2025 Echo • Sustainable Luxury from Indonesia<br>hello@echogreen.id | +62 812-3456-7890</p>
  </footer>

  <!-- Floating WhatsApp -->
  <a href="https://wa.me/6281234567890?text=Halo%20Echo,%20saya%20tertarik%20dengan%20koleksi%20Anda" class="wa-float" target="_blank">
    <i class="fab fa-whatsapp"></i>
  </a>

  <script>
    // Navbar scroll
    window.addEventListener('scroll', () => {
      document.getElementById('navbar').classList.toggle('scrolled', window.scrollY > 100);
    });

    // Slideshow otomatis 7 detik
    let slides = document.querySelectorAll('.slide');
    let current = 0;
    setInterval(() => {
      slides[current].classList.remove('active');
      current = (current + 1) % slides.length;
      slides[current].classList.add('active');
    }, 7000);
  </script>
</body>
</html>
