<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background: #f5f5f5;
        color: #333;
    }

    header {
        width: 100%;
        padding: 20px 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 0;
        left: 0;
        z-index: 100;
    }

    header h1 {
        font-size: 24px;
        font-weight: bold;
    }

    nav a {
        margin-left: 20px;
        text-decoration: none;
        color: #333;
        font-weight: 500;
    }

    .hero {
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0 20px;
        text-align: center;
        background: linear-gradient(to right, #4facfe, #00f2fe);
        color: white;
    }

    .hero h2 {
        font-size: 48px;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 18px;
        max-width: 600px;
        margin-bottom: 30px;
    }

    .btn-primary {
        padding: 12px 30px;
        background: #fff;
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
        border-radius: 30px;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background: #e2e2e2;
    }

    .features {
        padding: 80px 40px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    .feature-box {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .feature-box h3 {
        margin-bottom: 15px;
    }

    footer {
        padding: 20px;
        text-align: center;
        background: #333;
        color: white;
        margin-top: 40px;
    }
    </style>
</head>

<body>

    <header>
        <h1>BrandName</h1>
        <nav>
            <a href="#home">Home</a>
            <a href="#features">Fitur</a>
            <a href="#contact">Kontak</a>
        </nav>
    </header>

    <section class="hero" id="home">
        <h2>Solusi Digital Terbaik Untuk Anda</h2>
        <p>Kami membantu bisnis Anda berkembang melalui teknologi modern dan desain yang profesional.</p>
        <a href="#features" class="btn-primary">Pelajari Lebih Lanjut</a>
    </section>

    <section class="features" id="features">
        <div class="feature-box">
            <h3>Desain Modern</h3>
            <p>Desain elegan dan responsif untuk semua kebutuhan digital Anda.</p>
        </div>
        <div class="feature-box">
            <h3>Kecepatan Optimal</h3>
            <p>Performa website cepat dan ringan untuk pengalaman terbaik.</p>
        </div>
        <div class="feature-box">
            <h3>Dukungan 24/7</h3>
            <p>Kami siap membantu kapan saja ketika Anda membutuhkannya.</p>
        </div>
    </section>

    <footer id="contact">
        <p>© 2025 BrandName. Semua Hak Dilindungi.</p>
    </footer>

</body>

</html>