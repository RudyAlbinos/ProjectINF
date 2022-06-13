<?php
  if ($_COOKIE['sesja'] == true)
  {
    echo "";
  }else{
    header("Refresh: 0; index.php");
  }
  ?>
  <!DOCTYPE html>
  <html lang="pl" dir="ltr">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="/styles/style1.css">
    </head>
    <body>
      <div class="box">
        <a class="text" href="aktadd.php">Dodanie informacji w aktualnościach</a>
        <a class="text" href="aktedit1.php">Edycja informacji w aktualnościach</a>
        <a class="text" href="egzadd.php">Dodanie informacji w egzaminach</a>
        <a class="text" href="egzedit1.php">Edycja informacji w egzaminach</a>
      </div>
    </body>
  </html>
