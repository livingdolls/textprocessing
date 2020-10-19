<?php

    include 'conn.php';

    $tb_tokenisasi = $conn->query("SELECT * FROM `tb_tokenisasi`");
    $get_stopword = file_get_contents("stopword.json");
    $stopword = json_decode($get_stopword,true);

    foreach($tb_tokenisasi as $row)
    {
        $hilang = explode(" ",$row['term']);

        $stop = array_diff($hilang,$stopword);
        $judul = $row['judul'];
        $dokumen = $row['dokumen'];

        foreach($stop as $res)
        {
            echo $row['judul'];
            echo $res;
            echo "<br>";
            $conn->query("INSERT INTO `tb_filtering`(`judul`, `term`, `dokumen`) VALUES ('$judul','$res','$dokumen')");
        }
    }

    header("location: v_filtering.php");

?>