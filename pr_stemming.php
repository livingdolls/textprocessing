<?php

include 'conn.php';
// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();

// stem
// $sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
// $output   = $stemmer->stem($sentence);

// echo $output . "\n";
// ekonomi indonesia sedang dalam tumbuh yang bangga

// echo $stemmer->stem('Mereka meniru-nirukannya') . "\n";
// mereka tiru


    $teks = $conn->query("SELECT * FROM `tb_filtering`");

    // $st = new IDNstemmer();
    
    foreach($teks as $row)
    {
        $judul =  $row['judul'];
        $dokumen = $row['dokumen'];
        $hasil = $stemmer->stem($row['term']);
        $conn->query("INSERT INTO `tb_stemming`(`judul`, `term`, `dokumen`) VALUES ('$judul','$hasil','$dokumen')");
    }

    header("location: v_stemming.php");
?>