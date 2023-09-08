<?php
include "config.php";
include "delete.php";

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Mahasiswa</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="container">
            <h1>Data Mahasiswa</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Nama Mahasiswa</th>
                            <th>Mata Kuliah</th>
                            <th>Grade</th>
                            <th>Nilai Rata-rata</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row['nama'] . "</td>";
                                echo "<td>" . $row['matkul'] . "</td>";
                                echo "<td>" . $row['grade'] . "</td>";
                                echo "<td>" . $row['nilai_rata_rata'] . "</td>";
                                echo '<td>';
                                echo '<form method="post">';
                                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                                echo '<a class="button" href="edit.php?id=' . $row['id'] . '">Update</a>';
                                echo '<button class="button button2" type="submit" name="delete" onclick="return confirm(\'Apakah anda yakin ingin menghapus data ini?\')">Delete</button>';
                                echo '</form>';
                                echo '</td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No records found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table><br><br>
                <form action="tambah.php">
                    <input type="submit" value="Tambah Data" />
                </form>
            <?php
            $conn->close();
            ?>
        </div>
    </body>
</html>
