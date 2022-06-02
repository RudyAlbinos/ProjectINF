<!DOCTYPE html>
<?php
//egzamin
  require_once 'dbconnect.php';

  $db = SQL::getInstance();
?>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //egzamin
      $nid = $_GET['id'];
      $query = "SELECT * FROM `Dane` WHERE id=$nid";
      $stmt = $db->dbh->prepare($query);
      $stmt->execute();
      $output = $stmt->fetchAll();
      if(!empty($output))
      {
        foreach ($output as $row)
        {
          echo "<pre>" . stripslashes($row['zawartosc']) . "</pre>";
        }
      }
      else
      {
        echo "Błąd komunikacji z bazą danych";
      }
    ?>
  </body>
</html>
