<?php
// Koneksi ke database
include 'db_config.php';

// Tentukan berapa banyak item yang ingin ditampilkan per halaman
$items_per_page = 1;  // Menampilkan 1 portofolio per halaman

// Tentukan halaman saat ini
$page = isset($_GET['page']) ? intval($_GET['page']) : 1; // Default halaman 1 jika tidak ada parameter
$offset = ($page - 1) * $items_per_page; // Hitung offset untuk query

// Query untuk mengambil data portofolio berdasarkan ID
$stmt = $pdo->prepare("SELECT * FROM portofolio ORDER BY id LIMIT :limit OFFSET :offset");
$stmt->bindParam(':limit', $items_per_page, PDO::PARAM_INT);
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

// Mengambil hasilnya
$portofolio = $stmt->fetch(PDO::FETCH_ASSOC);

// Redirect jika data tidak ditemukan
if (!$portofolio) {
    echo "Data portofolio tidak ditemukan.";
    exit;
}

// Ambil jumlah total data untuk menghitung jumlah halaman
$stmt_total = $pdo->prepare("SELECT COUNT(*) FROM portofolio");
$stmt_total->execute();
$total_items = $stmt_total->fetchColumn();
$total_pages = ceil($total_items / $items_per_page);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($portofolio['judul']); ?> | Wiiarts-Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Custom CSS */
        .custom-navbar {
            background-color: #2c3e50;
            color: white;
            border: none;
        }

        .custom-navbar .navbar-brand {
            color: #1abc9c;
        }

        .custom-navbar .navbar-nav li a {
            color: white;
        }

        .custom-navbar .navbar-nav li a:hover {
            color: #1abc9c;
        }

        .footer-copyright {
            text-align: center;
            margin: 20px 0;
            color: #999;
        }

        .social-icon li {
            display: inline;
            margin: 0 10px;
        }

        .social-icon li a {
            color: #1abc9c;
            font-size: 20px;
        }

        .content-wrapper {
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }

        .content-wrapper img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }

        .tools-languages {
            font-size: 16px;
            color: #555;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .pagination a {
            padding: 10px 15px;
            margin: 0 5px;
            border: 1px solid #ccc;
            color: #333;
            text-decoration: none;
            border-radius: 5px;
            background-color: #fff;
        }

        .pagination a:hover {
            background-color: #f1f1f1;
        }

        .pagination .prev, .pagination .next {
            font-weight: bold;
        }

        .pagination span {
            font-weight: bold;
            margin: 0 10px;
        }
        .social-icon {
            text-align: center; /* Centers the icons */
            padding: 0;
            list-style-type: none;
        }

        .social-icon li {
            display: inline-block;
            margin: 0 15px; /* Adjust spacing between icons */
        }

        .social-icon li a {
            color: #1abc9c;
            font-size: 20px;
        }

    </style>
</head>
<body>
    <!-- Header/Navbar -->
    <div class="navbar navbar-fixed-top custom-navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Wiiarts-Page</a>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="galery.php">Gallery</a></li>
                    <li><a href="portofolio.php">Portofolio</a></li>
                    <li><a href="index.php.#contact" class="smoothScroll">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container">
        <div class="content-wrapper">
            <h1><?= htmlspecialchars($portofolio['judul']); ?></h1>
            <p><?= nl2br(htmlspecialchars($portofolio['text_atas'])); ?></p>
            <?php if (!empty($portofolio['file_upload'])): ?>
                <img src="<?= htmlspecialchars($portofolio['file_upload']); ?>" alt="<?= htmlspecialchars($portofolio['judul']); ?>">
            <?php endif; ?>
            <p class="tools-languages">
                <strong>Bahasa:</strong> <?= htmlspecialchars($portofolio['bahasa']); ?> 
                || <strong>Tools:</strong> <?= htmlspecialchars($portofolio['tools']); ?>
            </p>
            <p><?= nl2br(htmlspecialchars($portofolio['text_bawah'])); ?></p>
        </div>

        <!-- Pagination -->
        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=<?= $page - 1; ?>" class="prev">Previous</a>
            <?php endif; ?>

            <span>Page <?= $page; ?> of <?= $total_pages; ?></span>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?= $page + 1; ?>" class="next">Next</a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="wow fadeInUp footer-copyright">
                        <p>Copyright &copy; Wiiarts-page </p>
                    </div>
                    <ul class="wow fadeInUp social-icon">
                        <li><a href="https://www.facebook.com/profile.php?id=100008343195279" class="fa fa-facebook"></a></li>
                        <li><a href="https://www.instagram.com/arif_putera_wijaya/" class="fa fa-instagram"></a></li>
                        <li><a href="https://www.linkedin.com/in/arif-200117ar/" class="fa fa-linkedin"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
