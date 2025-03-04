<?php
// photos.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery Photos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Global Styles */
        body {
            font-family: 'Noto Sans KR', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f9fc; /* Soft off-white background */
            overflow-x: hidden;
            background-image: url('images/korean-idol-background.jpg'); /* Soft pastel background */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        /* Navbar Styles */
        .navbar {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8), rgba(160, 200, 255, 0.5)); /* Soft gradient */
            padding: 15px 30px; /* Smaller padding */
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 0 0 30px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-height: 70px; /* Smaller height */
        }

        /* Left-aligned brand */
        .navbar .navbar-brand {
            font-size: 24px;
            font-weight: 700;
            color: #333;
        }

        /* Centered menu items */
        .navbar .menu {
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            margin: 0 12px;
        }

        .navbar ul li a {
            color: #333;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease;
            padding: 10px 18px;
            border-radius: 8px;
        }

        .navbar ul li a:hover {
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 20px;
        }

        /* Gallery Styles */
        .gallery {
            display: flex;
            flex-direction: column;
            gap: 70px;
            padding: 130px 10px 50px; /* Adjusted padding for header size */
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 34px;
            font-weight: bold;
            color: #444;
            margin-top: 60px;
            text-transform: uppercase;
            letter-spacing: 3px;
            background: linear-gradient(135deg, #ff9a8b, #ff6a9f); /* Soft gradient */
            -webkit-background-clip: text;
            color: transparent;
            padding-bottom: 18px;
        }

        .photo-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr); /* 3 images per row */
            gap: 25px;
            justify-items: center;
        }

        .photo-frame {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
            max-width: 320px;
            height: 420px;
            margin: 0 auto;
            padding: 10px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background-image: linear-gradient(to bottom right, #ffffff, #e0f7fa);
        }

        .photo-frame:hover {
            transform: scale(1.05) rotate(1deg);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.2);
        }

        .photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 18px;
        }

        /* Footer Styles */
        footer {
            background-color: #ffe6f1; /* Soft pink background */
            padding: 50px 20px;
            text-align: center;
            color: #444;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 80px;
            border-top: 3px solid #ff6f61; /* Light coral border */
        }

        footer p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        footer .social-icon {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        footer .social-icon li {
            margin: 0 20px;
        }

        footer .social-icon li a {
            font-size: 30px;
            color: #444;
            transition: color 0.3s ease;
        }

        footer .social-icon li a:hover {
            color: #ff6f61; /* Soft coral hover color */
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .gallery {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 20px;
            }

            .photo-frame {
                max-width: 90%;
                margin: 0 auto;
            }

            .section-title {
                font-size: 28px;
                padding-bottom: 15px;
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
    <a href="#" class="navbar-brand">Wiiarts-Page</a>
    <div class="menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="galery.php">Gallery</a></li>
            <li><a href="portofolio.php">Portofolio</a></li>
            <li><a href="index.php.#contact" class="smoothScroll">Contact</a></li>
        </ul>
    </div>
</div>

<!-- Gallery -->
<section class="gallery">
    <!-- Style ke kampus -->
    <div class="section-title">Style ke Kampus</div>
    <div class="photo-row">
        <div class="photo-frame">
            <img src="images/kuliah1.jpg" alt="Photo 1">
        </div>
        <div class="photo-frame">
            <img src="images/kuliah2.jpg" alt="Photo 2">
        </div>
        <div class="photo-frame">
            <img src="images/kuliah3.jpg" alt="Photo 3">
        </div>
    </div>
    <div class="photo-row">
        <div class="photo-frame">
            <img src="images/kuliah4.jpg" alt="Photo 4">
        </div>
        <div class="photo-frame">
            <img src="images/kuliah5.jpg" alt="Photo 5">
        </div>
        <div class="photo-frame">
            <img src="images/kuliah6.jpg" alt="Photo 6">
        </div>
    </div>

    <!-- Style kerja -->
    <div class="section-title">Style Kerja</div>
    <div class="photo-row">
        <div class="photo-frame">
            <img src="images/kerja1.jpg" alt="Photo 7">
        </div>
        <div class="photo-frame">
            <img src="images/kerja2.jpg" alt="Photo 8">
        </div>
        <div class="photo-frame">
            <img src="images/kerja3.jpg" alt="Photo 9">
        </div>
    </div>
    

    <!-- Liburan -->
    <div class="section-title">Liburan</div>
    <div class="photo-row">
        <div class="photo-frame">
            <img src="images/santai1.jpg" alt="Photo 13">
        </div>
        <div class="photo-frame">
            <img src="images/santai5.jpg" alt="Photo 14">
        </div>
        <div class="photo-frame">
            <img src="images/santai3.jpg" alt="Photo 15">
        </div>
    </div>
    <div class="photo-row">
        <div class="photo-frame">
            <img src="images/santai4.jpg" alt="Photo 16">
        </div>
        <div class="photo-frame">
            <img src="images/santai6.jpg" alt="Photo 17">
        </div>
        <div class="photo-frame">
            <img src="images/santai2.jpg" alt="Photo 18">
        </div>
    </div>
    <div class="photo-row">
        <div class="photo-frame">
            <img src="images/santai7.jpg" alt="Photo 10">
        </div>
        <div class="photo-frame">
            <img src="images/santai8.jpg" alt="Photo 11">
        </div>
        <div class="photo-frame">
            <img src="images/santai9.jpg" alt="Photo 12">
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>© 2024 Wiiarts. All Rights Reserved.</p>
    <ul class="social-icon">
        
        <li><a href="https://www.facebook.com/profile.php?id=100008343195279" class="fa fa-facebook"></a></li>
        <li><a href="https://www.instagram.com/arif_putera_wijaya/" class="fa fa-instagram"></a></li>
        <li><a href="https://www.linkedin.com/in/arif-200117ar/" class="fa fa-linkedin"></a></li>
        
    </ul>
</footer>

</body>
</html>
