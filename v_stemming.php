<?php

    include 'conn.php';
    $stemming = $conn->query("SELECT fl.term as fl_term, st.term  as st_term, st.judul as judul , st.dokumen as dokumen FROM `tb_stemming` as st JOIN tb_filtering as fl on id_st = fl.id_fl");

    $jumlah = mysqli_num_rows($stemming);

?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Text Processing, Stemming</title>
    <body>
    </head>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
         Hasil Stemming
          </a>
    </nav>

    <div class="container">
    <div class="alert alert-primary mt-2" role="alert">
        Jumlah Data = <?= $jumlah; ?>
    </div>

    <a href="reset.php" type="button" class="btn btn-danger btn-lg btn-block">Bersihkan Semua</a>

        <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">Judul</th>
                <th scope="col">Kata Asli</th>
                <th scope="col">Stemming</th>
                <th scope="col">Dokumen</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($stemming as $row) : ?>
                    <tr>
                        <td><?= $row['judul']; ?></td>
                        <td><?= $row['fl_term']; ?></td>
                        <td><?= $row['st_term']; ?></td>
                        <td><?= $row['dokumen']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
    </table> 
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>