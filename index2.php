<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-ajax-dischi</title>

  <!-- BOOTSTRAP -->
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"
  />


  <!-- FONT AWESOME -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <!-- LINK CSS -->
  <link rel="stylesheet" href="style/style.css" />

</head>

<body>


<!--start  header -->
<header>
    <img src="img/spotify-logo.png" alt="logo spotify">
</header>

<!-- Start main where is the main content -->
<main class="container pb-1 pt-1 d-flex justify-content-center">

    <!-- row where are the albums -->
    <div class="row gap-2 w-75 m-auto">

          <!-- Here i insert the code PHP and include the datas -->
          <?php

          include("data/dataDischi.php");
          // echo($dischi);

          foreach ($dischi as $album) {
          ?>

              <!-- here i use the code HTML and code PHP inside to prinout the albums -->
              <div class='card-rf me-1 col-12 col-md-3 col-xl-2'>
                  <img src="<?= $album['poster'] ?>" alt="<?= $album['title']?>" class="img-fluid pb-4">
                  <h6> <?= $album['title']?> </h6>
                  <span> <?= $album['author']?> </span>
                  <span class="d-block"> <?= $album['year']?> </span>
              </div>

          <?php
          }
          ?>

    </div>

</main>
</body>
</html>