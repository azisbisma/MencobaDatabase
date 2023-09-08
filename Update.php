<?php
include "config.php";

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $grade = $_POST['grade'];

    // Fungsi konversi grade ke nilai_rata_rata
    switch ($grade) {
        case 'A':
            $nilai_rata_rata = 4.0;
            break;
        case 'B':
            $nilai_rata_rata = 3.0;
            break;
        case 'C':
            $nilai_rata_rata = 2.0;
            break;
        case 'D':
            $nilai_rata_rata = 1.0;
            break;
        case 'E':
            $nilai_rata_rata = 0.0;
            break;
        default:
            $nilai_rata_rata = null;
    }

    $sql = "UPDATE mahasiswa SET nama='$nama', matkul='$matkul', grade='$grade', nilai_rata_rata='$nilai_rata_rata' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diupdate.'); window.location.href = 'index.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $nama = $row['nama'];
        $matkul = $row['matkul'];
        $grade = $row['grade'];
        $nilai_rata_rata = $row['nilai_rata_rata'];
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>