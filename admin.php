<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit;
}

include 'db_config.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mendapatkan input password
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi: pastikan password baru dan konfirmasi password baru sama
    if ($new_password === $confirm_password) {
        try {
            // Ambil ID pengguna dari session
            $user_id = $_SESSION['id']; // Asumsi ID pengguna disimpan di session saat login

            // Periksa apakah password lama benar
            $stmt = $pdo->prepare("SELECT password FROM users WHERE id = :id");
            $stmt->execute([':id' => $user_id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($old_password, $user['password'])) {
                // Hash password baru
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Perbarui password di database
                $update_stmt = $pdo->prepare("UPDATE users SET password = :password WHERE id = :id");
                $update_stmt->execute([
                    ':password' => $hashed_password,
                    ':id' => $user_id
                ]);

                echo "Password berhasil diperbarui!";
            } else {
                echo "Password lama salah!";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "Password baru dan konfirmasi tidak cocok!";
    }
}
?>

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
