<?php

$localhost = "localhost";
$username = "root";
$pass = "";
$database = "landingpage_cvfarhan";


//mengkoneksi ke database
$conn = mysqli_connect($localhost, $username, $pass, $database);

//mengambil setiap data dari query yang ditentukan dan mengembalikan nilainya di variable rows
function query($q){
    global $conn;
    $result = mysqli_query($conn, $q);
    $rows = [];
    while($row =  mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    // Mengambil data dari form dan mengamankan input untuk mencegah SQL Injection
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $rating = (int)$_POST['rating']; 
    $user_id = 1; 

    $sql = "INSERT INTO testimony (ID_user, writer_testimony, rating, message_testimony) 
            VALUES ('$user_id', '$name', '$rating', '$message')";

    // Eksekusi query dan tangani kesalahan
    if (mysqli_query($conn, $sql)) {
        // Redirect ke halaman yang sama atau halaman konfirmasi setelah data berhasil dimasukkan
        header("Location: {$_SERVER['PHP_SELF']}?status=success");
        exit; // Jangan lupa untuk exit agar tidak ada proses lebih lanjut
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}