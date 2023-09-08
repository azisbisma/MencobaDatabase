<?php

include "config.php";
include "create.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Nilai Rata-Rata Mahasiswa</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div class="container">
        <h1>Kalkulator Nilai Rata-Rata Mahasiswa</h1>
        <form id="nilaiForm" method="POST" action="create.php">
            <label for="nama">Nama Mahasiswa:</label>
            <input type="text" id="nama" name="nama" required>
            <label for="matkul">Mata Kuliah:</label>
            <input type="text" id="matkul" name="matkul" required>
            <label for="grade">Grade:</label>
            <select id="grade" name="grade">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>

            <input type="submit" name="submit"><br>
            <a class="button" href="index.php">Kembali</a>
        </form>