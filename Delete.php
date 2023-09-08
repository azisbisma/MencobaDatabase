<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $delete_sql = "DELETE FROM mahasiswa WHERE id = $id";

        if ($conn->query($delete_sql) === TRUE) {
            echo '<script>alert("Data berhasil dihapus.");</script>';
            header("Location: index.php");
            exit();
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

if ($conn->connect_error) {
    $conn->close();
}
?>
