<?php
  if ($_COOKIE['sesja'] == true)
  {
    echo "";
  }else{
    header("Refresh: 0; index.php");
  }
  ?>
  <?php
    require_once 'dbconnect.php';

    $db = SQL::getInstance();
  ?>
  <?php
    $z = $_POST['1'];
    $query = "INSERT INTO Aktualnosci (`Data`,`Naglowek`,`Tekst`) VALUES (NOW(), '', '$z')";
    $stmt = $db->dbh->prepare($query);
    $stmt->execute();
    $stmt->commit();
  ?>
  <?php
    header("Refresh: 5; where.php");
  ?>
