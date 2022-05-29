<?php
  $haslo = $_POST['haslo'];
  $kod = '2115';

  if($haslo == $kod){
    setcookie("sesja", "CiastkoLogowania");
    header('Location: where.php');
  }
  else {
    header('Location: index.php');
  }
?>
