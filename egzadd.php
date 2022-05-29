<?php
  if ($_COOKIE['sesja'] == true)
  {
    echo " ";
  }else{
    header("Refresh: 0; index.php");
  }
  ?>
  <?php
    require_once './egzaminy/dbconnect.php';

    $db = SQL::getInstance();
  ?>
  <!DOCTYPE html>
  <html lang="pl">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="/styles/style1.css">
    </head>
    <body>
      <form class="box" action="egzaddMySql.php" method="post">
          <input class="wpis" value="" type="text" name="1" placeholder="Tytuł"/>
          <textarea class="wpis" id="content" name="2" placeholder="Napisz coś.." style="height:200px" required></textarea>
          <input type="submit" name="submit" value="Dodaj do bazy danych"/>
      </form>
    </body>
  </html>
