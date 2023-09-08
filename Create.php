<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $grade = $_POST['grade'];

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

    if ($nilai_rata_rata !== null) {
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO mahasiswa (nama, matkul, grade, nilai_rata_rata)
                VALUES ('$nama', '$matkul', '$grade', '$nilai_rata_rata')";

        if ($conn->query($sql) === TRUE) {
            echo '<script>
            alert("Data berhasil ditambah."); 
            window.location.href = "index.php";
            </script>';
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    } else {
        echo 'Pilih grade yang valid (A, B, C, D, atau E).';
    }
}
?>
