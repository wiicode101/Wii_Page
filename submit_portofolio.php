<?php
// Include file konfigurasi database
include 'db_config.php';

$response = [
    'status' => 'error',
    'message' => ''
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $judul = trim($_POST['judul']);
    $text_atas = trim($_POST['text_atas']);
    $bahasa = trim($_POST['bahasa']);
    $tools = trim($_POST['tools']);
    $text_bawah = trim($_POST['text_bawah']);

    // Validasi input
    if (empty($judul) || empty($text_atas) || empty($bahasa)) {
        $response['message'] = 'Judul, teks atas, dan bahasa tidak boleh kosong!';
        echo json_encode($response);
        exit;
    }

    // Menangani upload file
    $file_path = '';
    if (isset($_FILES['file_upload']) && $_FILES['file_upload']['error'] == 0) {
        $file = $_FILES['file_upload'];
        $file_name = time() . "_" . basename($file['name']); // Rename file agar unik
        $upload_dir = 'uploads/';

        // Validasi ekstensi file
        $allowed_extensions = ['jpg', 'jpeg', 'png'];
        $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (!in_array($file_extension, $allowed_extensions)) {
            $response['message'] = 'Hanya file PDF dan gambar (JPG, PNG) yang diperbolehkan.';
            echo json_encode($response);
            exit;
        }

        // Validasi ukuran file (misal, maksimal 2MB)
        $max_file_size = 2 * 1024 * 1024; // 2MB
        if ($file['size'] > $max_file_size) {
            $response['message'] = 'Ukuran file terlalu besar. Maksimal 2MB.';
            echo json_encode($response);
            exit;
        }

        // Pindahkan file ke folder uploads
        $file_path = $upload_dir . $file_name;
        if (!move_uploaded_file($file['tmp_name'], $file_path)) {
            $response['message'] = 'Gagal mengunggah file.';
            echo json_encode($response);
            exit;
        }
    }

    // Simpan data ke database menggunakan PDO
    try {
        $sql = "INSERT INTO portofolio (judul, text_atas, file_upload, bahasa, tools, text_bawah) 
                VALUES (:judul, :text_atas, :file_upload, :bahasa, :tools, :text_bawah)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':judul' => htmlspecialchars($judul),
            ':text_atas' => htmlspecialchars($text_atas),
            ':file_upload' => $file_path,
            ':bahasa' => htmlspecialchars($bahasa),
            ':tools' => htmlspecialchars($tools),
            ':text_bawah' => htmlspecialchars($text_bawah)
        ]);

        $response['status'] = 'success';
        $response['message'] = 'Data berhasil disimpan!';
    } catch (PDOException $e) {
        $response['message'] = 'Error: ' . $e->getMessage();
    }

    echo json_encode($response);
}
?>
