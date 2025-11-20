<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Katalog Produk</title>
    <!-- Menggunakan Bootstrap 5 via CDN untuk tampilan yang rapi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4 text-center">Daftar Katalog Produk</h2>

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                Data Katalog
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>ID Produk</th>
                                <th>Foto</th>
                                <th>Nama Produk</th>
                                <th>Harga (Rp)</th>
                                <th>Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($produk_list) && is_array($produk_list)) : ?>
                            <?php foreach ($produk_list as $produk) : ?>
                            <tr>
                                <td><?= esc($produk['id_produk']); ?></td>
                                <td>
                                    <!-- Asumsi foto disimpan di folder public/images/ -->
                                    <!-- Menampilkan nama file jika gambar tidak ditemukan -->
                                    <img src="/images/<?= esc($produk['foto_produk']); ?>"
                                        alt="<?= esc($produk['foto_produk']); ?>" style="width: 80px; height: auto;"
                                        class="img-thumbnail">
                                </td>
                                <td><?= esc($produk['nama_produk']); ?></td>
                                <td>Rp <?= number_format($produk['harga_produk'], 0, ',', '.'); ?></td>
                                <td>
                                    <span class="badge bg-<?= ($produk['stok_produk'] > 0) ? 'success' : 'danger'; ?>">
                                        <?= esc($produk['stok_produk']); ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                            <?php else : ?>
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data produk.</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>