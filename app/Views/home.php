<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aco • Fashion & Eco Decoration</title>
    <meta name="description" content="Fashion berkelanjutan dan dekorasi alami. Minimal. Elegan. Ramah bumi." />

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
    :root {
        --green: #719f79;
        --white: #fff;
        --text: #1a1a1a;
        --light: #fafafa;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: #fff;
        color: var(--text);
        line-height: 1.7;
    }

    /* NAVBAR DENGAN PRODUK & NEWS */
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        padding: 24px 5%;
        background: var(--green);
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        z-index: 1000;
        transition: .3s;
        box-shadow: 0 4px 20px rgba(113, 159, 121, .15);
    }

    .navbar.scrolled {
        padding: 18px 5%;
    }

    .logo {
        font-family: 'Playfair Display', serif;
        font-size: 31px;
        font-weight: 700;
        color: white;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        margin: 0 28px;
        font-weight: 500;
        font-size: 15.5px;
        opacity: .95;
    }

    .nav-links a:hover {
        opacity: 1;
        text-decoration: underline;
    }

    .cart-icon {
        position: relative;
        font-size: 23px;
        cursor: pointer;
        color: white;
    }

    .cart-count {
        position: absolute;
        top: -9px;
        right: -12px;
        background: white;
        color: var(--green);
        font-size: 11px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 600;
    }

    /* HERO SLIDESHOW */
    .hero-slider {
        height: 100vh;
        position: relative;
        overflow: hidden;
    }

    .slide {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        opacity: 0;
        transition: opacity 1.6s ease;
    }

    .slide.active {
        opacity: 1;
    }

    .slide::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, .45);
    }

    .slide-content {
        position: relative;
        max-width: 900px;
        padding: 20px;
    }

    .slide h1 {
        font-family: 'Playfair Display', serif;
        font-size: 5.4rem;
        margin-bottom: 24px;
        font-weight: 400;
    }

    .slide p {
        font-size: 1.45rem;
        margin-bottom: 50px;
        opacity: .95;
    }

    .btn {
        background: white;
        color: var(--green);
        padding: 17px 50px;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        font-size: 16px;
        cursor: pointer;
        transition: .3s;
    }

    .btn:hover {
        background: #f0f0f0;
        transform: translateY(-4px);
    }

    .dots {
        position: absolute;
        bottom: 50px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 14px;
    }

    .dot {
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .5);
        cursor: pointer;
    }

    .dot.active {
        background: white;
        transform: scale(1.4);
    }

    section {
        padding: 160px 5% 120px;
    }

    .section-title {
        font-family: 'Playfair Display', serif;
        font-size: 3.2rem;
        color: var(--green);
        text-align: center;
        margin-bottom: 60px;
    }

    /* PRODUK KOSONG (coming soon) */
    .coming-soon {
        text-align: center;
        padding: 80px 20px;
        background: var(--light);
        border-radius: 20px;
        max-width: 700px;
        margin: auto;
    }

    .coming-soon h3 {
        font-size: 2rem;
        color: var(--green; margin-bottom:20px;
        }

        .coming-soon p {
            font-size:1.15rem; color:#555;
        }

        /* NEWS / BLOG */
        .news-grid {
            display:grid; grid-template-columns:repeat(auto-fit, minmax(340px, 1fr)); gap:40px; max-width:1200px; margin:auto;
        }

        .news-card {
            background:white; border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0, 0, 0, .08); transition:.3s;
        }

        .news-card:hover {
            transform:translateY(-10px);
        }

        .news-card img {
            width:100%; height:240px; object-fit:cover;
        }

        .news-body {
            padding:28px;
        }

        .news-body h4 {
            font-size:1.35rem; margin-bottom:12px; color:var(--text);
        }

        .news-body p {
            font-size:1rem; color:#666; margin-bottom:16px;
        }

        .news-body a {
            color:var(--green); text-decoration:none; font-weight:500;
        }

        footer {
            background:var(--green); color:white; text-align:center; padding:90px 20px; font-size:15px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR + PRODUK & NEWS -->
    <nav class="navbar" id="navbar">
        <div class="logo">Aco</div>
        <div class="nav-links">
            <a href="home">Beranda</a>
            <a href="about">Tentang</a>
            <a href="products">Produk</a>
            <a href="news">News</a>
            <a href="contact">Kontak</a>
        </div>
        <div class="cart-icon" onclick="openCart()">
            <i class="fas fa-shopping-bag"></i>
            <span class="cart-count" id="cart-count">0</span>
        </div>
    </nav>

    <!-- HERO -->
    <div class="hero-slider" id="home">
        <div class="slide active"
            style="background-image:url('https://images.unsplash.com/photo-1490481651871-ab68de7d43df?w=1920');">
            <div class="slide-content">
                <h1>Elegan<br>dan Ramah Bumi</h1>
                <p>Fashion & dekorasi dari bahan alami dan daur ulang</p>
            </div>
        </div>
        <div class="slide"
            style="background-image:url('https://images.unsplash.com/photo-1501696461415-6bd6660c6743?w=1920');">
            <div class="slide-content">
                <h1>Setiap Pilihan<br>Berarti</h1>
                <p>100% berkelanjutan · Zero waste · Dukung pengrajin lokal</p>
            </div>
        </div>
        <div class="dots">
            <span class="dot active" onclick="currentSlide(0)"></span>
            <span class="dot" onclick="currentSlide(1)"></span>
        </div>
    </div>

    <!-- TENTANG -->
    <section id="about" style="background:var(--light);">
        <h2 class="section-title">Tentang Aco</h2>
        <div style="max-width:800px; margin:auto; text-align:center; font-size:1.2rem; color:#444;">
            <p>
                Kami menciptakan produk indah yang tidak merusak bumi.<br>
                Setiap jahitan dan anyaman dibuat dengan cinta, etika, dan tanggung jawab.
            </p>
        </div>
    </section>

    <!-- PRODUK (coming soon) -->
    <section id="products">
        <div class="coming-soon">
            <h3>Koleksi Segera Hadir</h3>
            <p>
                Kami sedang menyiapkan koleksi terbaru dari bahan alami & daur ulang.<br>
                Pantau terus atau hubungi kami untuk info pre-order.
            </p>
            <br><br>
            <a href="#contact" class="btn">Hubungi Kami</a>
        </div>
    </section>

    <!-- NEWS / BLOG -->
    <section id="news" style="background:var(--light);">
        <h2 class="section-title">News & Stories</h2>
        <div class="news-grid">
            <div class="news-card">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2b033f?w=800" alt="News">
                <div class="news-body">
                    <h4>Mengapa Memilih Bahan Daur Ulang?</h4>
                    <p>Mengurangi limbah tekstil sambil tetap stylish itu mungkin...</p>
                    <a href="#">Baca selengkapnya →</a>
                </div>
            </div>
            <div class="news-card">
                <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=800" alt="News">
                <div class="news-body">
                    <h4>Proses Pembuatan Rotan Kami</h4>
                    <p>Setiap lampu rotan dibuat tangan oleh pengrajin perempuan di desa...</p>
                    <a href="#">Baca selengkapnya →</a>
                </div>
            </div>
            <div class="news-card">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=800" alt="News">
                <div class="news-body">
                    <h4>Tips Merawat Linen Agar Awet</h4>
                    <p>Linen adalah bahan terbaik untuk iklim tropis. Ini cara merawatnya...</p>
                    <a href="#">Baca selengkapnya →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- KERANJANG MODAL -->
    <div class="modal" id="cart-modal">
        <div class="modal-content">
            <span class="close" onclick="closeCart()">×</span>
            <h2 style="text-align:center; color:var(--green); margin-bottom:30px;">Keranjang</h2>
            <p style="text-align:center; padding:40px 0; color:#888;">Koleksi sedang disiapkan.<br>Hubungi kami untuk
                pre-order atau info lebih lanjut.</p>
            <div style="text-align:center;">
                <a href="#contact" class="btn" style="background:var(--green); color:white; padding:16px 40px;">Hubungi
                    via WhatsApp</a>
            </div>
        </div>
    </div>

    <footer id="contact">
        <p>© 2025 Aco • Fashion & Eco Decoration • Dibuat dengan cinta untuk Bumi</p>
    </footer>

    <script>
    // SLIDESHOW
    let slideIndex = 0;
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".dot");

    function showSlide(n) {
        slides.forEach(s => s.classList.remove("active"));
        dots.forEach(d => d.classList.remove("active"));
        slides[n].classList.add("active");
        dots[n].classList.add("active");
    }
    setInterval(() => {
        slideIndex = (slideIndex + 1) % slides.length;
        showSlide(slideIndex);
    }, 7000);

    // NAV SCROLL EFFECT
    window.addEventListener("scroll", () => {
        document.getElementById("navbar").classList.toggle("scrolled", scrollY > 60);
    });

    // KERANJANG (kosongkan)
    function openCart() {
        document.getElementById("cart-modal").style.display = "flex";
    }

    function closeCart() {
        document.getElementById("cart-modal").style.display = "none";
    }
    </script>

</body>

</html>