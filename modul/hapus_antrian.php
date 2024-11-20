<?php 
include "../lib/koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM antrian WHERE id=$id";
    $stmt = $conn->prepare($sql);
    if ($stmt->execute()) {
        header("Location: daftar_antrian.php");
    } else {
        // echo "Error:". $conn->error;
    }
}

// $conn->close();
?>