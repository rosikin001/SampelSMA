<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Konfigurasi email tujuan
    $to = "projectsikinid@gmail.com"; // Ganti dengan email tujuan
    $subject = "Pesan dari Formulir Kontak";
    $body = "Nama: $name\nEmail: $email\nPesan:\n$message";
    $headers = "From: $email";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Pesan berhasil dikirim!</h2>";
        echo "<p>Terima kasih telah menghubungi kami, $name. Kami akan segera merespons pesan Anda.</p>";
    } else {
        echo "<h2>Maaf, terjadi kesalahan.</h2>";
        echo "<p>Pesan Anda tidak dapat dikirimkan. Silakan coba lagi nanti.</p>";
    }
} else {
    echo "<h2>Akses ditolak</h2>";
    echo "<p>Formulir hanya dapat diakses melalui metode POST.</p>";
}
?>
