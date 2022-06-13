<!DOCTYPE html>
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
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/styles/style.css">
  </head>
  <body>
    <div class="news">
      <h1>Aktualności</h1>
        <div class="news-container">
          <ul>
            <?php
              $query = "SELECT * FROM `Aktualnosci` ORDER BY id";
              $stmt = $db->dbh->prepare($query);
              $stmt->execute();
              $output = $stmt->fetchAll();
              if(!empty($output))
              {
                foreach ($output as $row)
                {
                  echo "<li>" . "<a href=\"aktedit2.php?id=" . $row['id']."\">" . $row['Tekst']  . "</li>";
                }
              }
              else
              {
                echo "Błąd komunikacji z bazą danych";
              }
            ?>
          </ul>
        </div>
      </div>
  </body>
</html>
