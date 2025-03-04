<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css\style_master.css"> <!-- Menyertakan file CSS eksternal -->
</head>
<body>

    

    <div id="wrapper">
        <!-- Sidebar / Navbar Vertikal -->
        <div id="sidebar">
            <ul>
                <li><a href="#" id="menuAdmin">Admin</a></li>
                <li><a href="#" id="menuPortofolio">Portofolio</a></li>
                <li><button id="logoutButton">Logout</button></li>
            </ul>
        </div>

        <!-- Konten Utama -->
        <div id="content">
            <!-- Konten akan dimuat di sini -->
        </div>
    </div>

    <script>
        // Tombol Logout
        document.getElementById('logoutButton').addEventListener('click', function() {
            window.location.href = 'logout.php'; // Redirect ke skrip logout
        });

        // Script untuk memuat konten berdasarkan menu yang dipilih
        document.getElementById('menuAdmin').addEventListener('click', function() {
            document.getElementById('content').innerHTML = `
                <h2>Ubah Password</h2>
                <form action="admin.php" method="POST">
                    <label for="old_password">Password Lama:</label>
                    <input type="password" id="old_password" name="old_password" required>
                    <br>
                    <label for="new_password">Password Baru:</label>
                    <input type="password" id="new_password" name="new_password" required>
                    <br>
                    <label for="confirm_password">Konfirmasi Password Baru:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <br>
                    <button type="submit">Ubah Password</button>
                </form>
            `;
        });

        document.getElementById('menuPortofolio').addEventListener('click', function() {
            document.getElementById('content').innerHTML = `
                <h2>Input Portofolio</h2>
                <form action="submit_portofolio.php" method="POST" enctype="multipart/form-data">
                    <label for="judul">Judul:</label>
                    <input type="text" id="judul" name="judul" required>
                    <br>
                    <label for="text_atas">Teks Atas:</label>
                    <textarea id="text_atas" name="text_atas" required></textarea>
                    <br>
                    <label for="file_upload">Upload File Gambar (JPG/JPEG/PNG):</label>
                    <input type="file" id="file_upload" name="file_upload">
                    <br>
                    <label for="bahasa">Bahasa:</label>
                    <input type="text" id="bahasa" name="bahasa" required>
                    <br>
                    <label for="tools">Tools:</label>
                    <input type="text" id="tools" name="tools">
                    <br>
                    <label for="text_bawah">Teks Bawah:</label>
                    <textarea id="text_bawah" name="text_bawah"></textarea>
                    <br>
                    <button type="submit">Submit Portofolio</button>
                </form>
            `;
        });

                // Menangani formulir submit
        document.getElementById('menuPortofolio').addEventListener('click', function() {
            document.getElementById('content').innerHTML = `
                <h2>Input Portofolio</h2>
                <form id="portofolioForm" action="submit_portofolio.php" method="POST" enctype="multipart/form-data">
                    <label for="judul">Judul:</label>
                    <input type="text" id="judul" name="judul" required>
                    <br>
                    <label for="text_atas">Teks Atas:</label>
                    <textarea id="text_atas" name="text_atas" required></textarea>
                    <br>
                    <label for="file_upload">Upload File (PDF/Gambar):</label>
                    <input type="file" id="file_upload" name="file_upload">
                    <br>
                    <label for="bahasa">Bahasa:</label>
                    <input type="text" id="bahasa" name="bahasa" required>
                    <br>
                    <label for="tools">Tools:</label>
                    <input type="text" id="tools" name="tools">
                    <br>
                    <label for="text_bawah">Teks Bawah:</label>
                    <textarea id="text_bawah" name="text_bawah"></textarea>
                    <br>
                    <button type="submit">Submit Portofolio</button>
                </form>
                <div id="responseMessage"></div>
            `;

            // Menggunakan AJAX untuk mengirimkan formulir
            document.getElementById('portofolioForm').addEventListener('submit', function(e) {
                e.preventDefault(); // Mencegah formulir dari submit normal

                var formData = new FormData(this);
                
                // Kirim data menggunakan AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'submit_portofolio.php', true);
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);
                        // Tampilkan pesan ke pengguna
                        document.getElementById('responseMessage').innerHTML = response.message;
                        if (response.status === 'success') {
                            document.getElementById('portofolioForm').reset(); // Reset form jika sukses
                        }
                    }
                };
                xhr.send(formData);
            });
        });

    </script>

</body>
</html>
