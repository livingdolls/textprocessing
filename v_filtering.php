<?php

    include 'conn.php';
    $filtering = $conn->query("SELECT * FROM tb_filtering");

    $jumlah = mysqli_num_rows($filtering);

?> 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Text Processing, Filtering</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
         Hasil Filtering
          </a>
    </nav>

    <div class="container">
    <div class="alert alert-primary mt-2" role="alert">
        Jumlah Data = <?= $jumlah; ?>
    </div>

    <a href="pr_stemming.php" type="button" class="btn btn-primary btn-lg btn-block">Stemming</a>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">Judul</th>
                <th scope="col">Term</th>
                <th scope="col">Dokumen</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach($filtering as $row) : ?>
                    <tr>
                        <td><?= $row['judul']; ?></td>
                        <td><?= $row['term']; ?></td>
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