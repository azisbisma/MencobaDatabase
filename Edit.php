<?php
include "update.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="container">
        <h1>Update Data Mahasiswa</h1>
            <form method="post" action="">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="nama">Nama Mahasiswa:</label>
                <input type="text" name="nama" value="<?php echo $nama; ?>" required><br>
                <label for="matkul">Mata Kuliah:</label>
                <input type="text" name="matkul" value="<?php echo $matkul; ?>" required><br>
                <label for="grade">Grade:</label>
                    <select id="grade" name="grade" required>
                        <option value="A" <?php if ($grade === 'A') echo 'selected'; ?>>A</option>
                        <option value="B" <?php if ($grade === 'B') echo 'selected'; ?>>B</option>
                        <option value="C" <?php if ($grade === 'C') echo 'selected'; ?>>C</option>
                        <option value="D" <?php if ($grade === 'D') echo 'selected'; ?>>D</option>
                        <option value="E" <?php if ($grade === 'E') echo 'selected'; ?>>E</option>
                    </select><br>
                <input type="submit" name="update" value="Update"><br>
                <a class="button" href="index.php">Kembali</a>
            </form>
    </div>
</body>
</html>
