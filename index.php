<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name=<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
      body {
        background-color:azure;
      }
      .card-body {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 93%;
      }
    </style>
    <title>PHP my site</title>
</head>
<body>
  <?php require "blocks/shapka.php"?>  
  <div class ="container mt-5">
    <h3 class="mb-5">Литература</h3>
    <div class="row">
    <?php
      $titles = [
        "Учебная литература УдГУ",
        "Художественная литература",
        "Книги по программированию"
      ];

      $descriptions = [
        [  "В данном разделе вы найдете учебную литературу, которая отправлена нам от преподавателей УдГУ"
        ],
        [
         "В этой ячейке находится художественная литература, которую я читала или хотела бы прочесть"
        ],
        [
         "Здесь обитают книги для будущих или действующих програмистов"
        ]
      ];
      
      for($i = 0; $i < 3; $i ++):
        //Не выводились заголовки, использую проверку 
        $title = isset($titles[$i]) ? $titles[$i] : "Заголовок отсутствует";
        $descriptionList = isset($descriptions[$i]) ? $descriptions[$i] : ["Описание отсутсвует"];
    ?>
      <div class="col-md-4 mb-4">
          <div class="card rounded-3 shadow-sm"> 
              <div class="card-header py-3 text-center">
                <h4 class="my-0 fw-normal"><?php echo $title; ?></h4> <!--Вывод заголовка-->
              </div>
          </div>
          <div class="card-body">
            <img src="img/<?php echo ($i+1) ?>.jpg" class="img-thumbnail card-img ">
            <ul class="list-unstyled mt-3 mb-4">
              <?php foreach ($descriptionList as $description): ?>
              <li><?php echo $description; ?></li>
              <?php endforeach; ?>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Перейти</button>
          </div>
        </div>
      <?php endfor; ?>
    </div>
  </div>
  <?php require "blocks/shapka.php"?>
</body>
</html>