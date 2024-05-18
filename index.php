<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name=<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>PHP my site</title>
</head>
<body>
  <?php require "blocks/header.php"?>  
  <div class ="container mt-5">
    <h3 class="mb-5">Наши книги</h3>
    <div class="row">
    <?php
      for($i = 0; $i < 3; $i ++):
    ?>
      <div class="col-md-4 mb-4">
          <div class="card rounded-3 shadow-sm"> 
              <div class="card-header py-3"></div>
            <h4 class="my-0 fw-normal">Учебная литература УдГУ</h4>
          </div>
          <div class="card-body">
            <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail card-img ">
            <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
  <?php require "footer/footer.php"?>
</body>
</html>