<?php
  if ($_COOKIE['sesja'] == true)
  {
    echo "";
  }else{
    header("Refresh: 0; index.php");
  }
  ?>
  <?php
    require_once 'egzaminy/dbconnect.php';

    $db = SQL::getInstance();
  ?>
  <?php
    $z = $_POST['1'];
    $y = addslashes($_POST['2']);
    $query = "INSERT INTO Dane (`data`,`tytul`,`zawartosc`) VALUES (NOW(), '$z', '$y')";
    $stmt = $db->dbh->prepare($query);
    $stmt->execute();
    $stmt->commit();

    header("Refresh: 0; where.php");
  ?>
