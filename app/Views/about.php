<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Kontak</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
    }

    body {
        background: #eef2f3;
        padding: 40px 20px;
    }

    .contact-container {
        max-width: 700px;
        margin: auto;
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        font-size: 32px;
        color: #00796b;
    }

    .contact-info {
        margin-bottom: 30px;
        font-size: 16px;
        line-height: 1.6;
    }

    .contact-info p strong {
        color: #004d40;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input,
    textarea {
        padding: 12px;
        border: 1px solid #bbb;
        border-radius: 10px;
        font-size: 14px;
        width: 100%;
    }

    textarea {
        resize: vertical;
        height: 130px;
    }

    button {
        padding: 12px;
        background: #00796b;
        color: white;
        font-size: 16px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.3s;
    }

    button:hover {
        background: #004d40;
    }

    .social-links a {
        margin-right: 15px;
        text-decoration: none;
        color: white;
        background: #4facfe;
        padding: 10px 18px;
        border-radius: 30px;
        font-size: 14px;
        transition: 0.3s;
    }

    .social-links a:hover {
        background: #00c6ff;
    }
    </style>
</head>

<body>

    <div class="contact-container">
        <h1>Hubungi Kami</h1>

        <div class="contact-info">
            <p><strong>Alamat:</strong> Jl. By Ngurah Rai GG. Maharaja 1 - Kuta</p>
            <p><strong>Email:</strong> rekreasi.id@gmail.com</p>
            <p><strong>Telepon:</strong> +62 812-3456-7890</p>

            <div class="social-links">
                <a href="#">Instagram</a>
                <a href="#">Tiktok</a>
                <a href="#">Facebook</a>
                <a href="#">LinkedIn</a>
            </div>
        </div>

        <form>
            <input type="text" placeholder="Nama Anda" required>
            <input type="email" placeholder="Email Anda" required>
            <textarea placeholder="Pesan Anda" required></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>
    </div>

</body>

</html>