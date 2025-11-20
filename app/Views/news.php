<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Kami</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background: #f4f4f4;
        padding: 40px 20px;
    }

    .about-container {
        max-width: 900px;
        margin: auto;
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 36px;
        color: #2e7d32;
    }

    .about-text p {
        line-height: 1.7;
        font-size: 16px;
        margin-bottom: 18px;
        color: #444;
    }

    .mission-section,
    .vision-section {
        margin-top: 30px;
    }

    h2 {
        font-size: 24px;
        color: #1b5e20;
        margin-bottom: 10px;
    }

    ul {
        margin-left: 20px;
        margin-top: 10px;
    }

    ul li {
        margin-bottom: 8px;
        line-height: 1.6;
    }

    .team-section {
        margin-top: 40px;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .team-card {
        background: #fafafa;
        border-radius: 15px;
        padding: 20px;
        text-align: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .team-card img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 12px;
    }

    .team-card h3 {
        font-size: 18px;
        color: #2e7d32;
    }

    .team-card p {
        font-size: 14px;
        color: #555;
        margin-top: 6px;
    }
    </style>
</head>

<body>

    <div class="about-container">
        <h1>Tentang Kami</h1>

        <div class="about-text">
            <p>Kami adalah usaha kreatif yang fokus pada pembuatan tas ramah lingkungan berbahan dasar daur ulang.
                Dengan memanfaatkan limbah plastik dan material bekas lainnya, kami berkomitmen menghadirkan produk yang
                tidak hanya fungsional dan berkualitas, tetapi juga berkontribusi dalam menjaga kelestarian lingkungan.
            </p>

            <p>Didirikan pada tahun 2020, kami telah berkembang menjadi salah satu produsen tas daur ulang lokal yang
                dipercaya banyak pelanggan. Setiap produk dibuat dengan proses teliti, sentuhan kreatif, dan tetap
                menjaga keberlanjutan sebagai prioritas utama.</p>
        </div>

        <div class="mission-section">
            <h2>Misi Kami</h2>
            <ul>
                <li>Mengurangi limbah melalui inovasi produk berbahan dasar daur ulang.</li>
                <li>Mengedukasi masyarakat tentang pentingnya gaya hidup ramah lingkungan.</li>
                <li>Menyediakan produk berkualitas dengan desain modern dan fungsional.</li>
            </ul>
        </div>

        <div class="vision-section">
            <h2>Visi Kami</h2>
            <p>Menjadi brand tas daur ulang terkemuka di Indonesia yang menginspirasi gerakan peduli lingkungan.</p>
        </div>

        <div class="team-section">
            <h2>Tim Kami</h2>
            <div class="team-grid">
                <div class="team-card">
                    <img src="https://via.placeholder.com/120" alt="Tim 1">
                    <h3>Rani Wijaya</h3>
                    <p>Founder & Creative Director</p>
                </div>
                <div class="team-card">
                    <img src="https://via.placeholder.com/120" alt="Tim 2">
                    <h3>Dimas Pratama</h3>
                    <p>Product Designer</p>
                </div>
                <div class="team-card">
                    <img src="https://via.placeholder.com/120" alt="Tim 3">
                    <h3>Sinta Lestari</h3>
                    <p>Marketing & Branding</p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>