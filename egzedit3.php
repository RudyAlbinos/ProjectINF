<?php
  if ($_COOKIE['sesja'] == true)
  {
    echo "";
  }else{
    header("Refresh: 0; index.php");
  }
  ?>
  <?php
    require_once 'dbconnect1.php';

    $db = SQL::getInstance();
  ?>
  <?php
    $x = $_POST['tekst'];
    $y = $_POST['zmienna'];
    $query = "UPDATE `Dane` SET `zawartosc`='$x' WHERE id=$y";
    $stmt = $db->dbh->prepare($query);
    $stmt->execute();
    $stmt->commit();
  ?>
