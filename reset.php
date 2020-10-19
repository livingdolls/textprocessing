<?php

    include 'conn.php';

    $tb_tokenisasi = $conn->query("DELETE FROM tb_tokenisasi");
    $tb_filtering  = $conn->query("DELETE FROM tb_filtering");
    $tb_stemming  = $conn->query("DELETE FROM tb_stemming");

    header("location:index.php");

?>