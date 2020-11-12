<?php
    $nama1=[
        [
            "nama" => "Satria",
            "kelas" => "RPL 1"],
        [
            "nama" => "Arsyi",
            "kelas" => "RPL 2"],
        [
            "nama" => "Dhika",
            "kelas" => "RPL 3"],
        [
            "nama" => "Evan",
            "kelas" => "RPL 4"],
        [
            "nama" => "Fabian",
            "kelas" => "RPL 5"],
        [
            "nama" => "Irfan",
            "kelas" => "RPL 6"],
        ];

    foreach($nama1 as $post){
        echo "Nama : ".$post["nama"]." Kelas : ".$post["kelas"];
        echo "<br>";
    }
?>