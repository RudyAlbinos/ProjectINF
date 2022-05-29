<?php
  if ($_COOKIE['sesja'] == true)
  {
    echo " ";
  }else{
    header("Refresh: 0; index.php");
  }
  ?>
  <?php
    require_once 'dbconnect.php';

    $db = SQL::getInstance();
  ?>
  <!DOCTYPE html>
  <html lang="pl">
    <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="/styles/style1.css">
    </head>
    <body>
      <form class="box" action="aktaddMySql.php" method="post">
          <input class="wpis" value="" type="text" name="1" placeholder="Informacje"/>
          <input type="submit" name="submit" value="Dodaj do bazy danych" />
      </form>
    </body>
  </html>
