<?php
    include 'conn.php';

    $data_korpus = $conn->query("SELECT * FROM korpus");

    foreach($data_korpus as $row)
    {

        $word_chill = strtolower($row['isi']);
        
        $hilangkan = preg_replace("/[^a-zA-Z]/", ' ', $word_chill);
        $hilangkan2 = preg_replace ("/ +/", " ", $hilangkan); # convert all multispaces to space        
        $hilangkan3 = preg_replace ("/^ /", "", $hilangkan2);  # remove space from start
        $hilangkan4 = preg_replace ("/ $/", "", $hilangkan3);  # and end

        $kata = explode(" ",$hilangkan4);
        $judul = $row['judul'];
        $dokumen = $row['dokumen'];
        foreach($kata as $isi)
        {
            $sql = "INSERT INTO `tb_tokenisasi` VALUES ('$judul','$isi','$dokumen')";
            $cek = $conn->query($sql);
            if(!$cek)
            {
                echo mysqli_error($conn);
            }

        }
    }

    header("location: v_tokenisasi.php");
?>