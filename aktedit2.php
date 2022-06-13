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
            <form class="" action="aktedit3.php" method="post">
              <?php
                $nid = $_GET['id'];
                $query = "SELECT * FROM `Aktualnosci` WHERE id=$nid";
                $stmt = $db->dbh->prepare($query);
                $stmt->execute();
                $output = $stmt->fetchAll();
                if(!empty($output))
                {
                  foreach ($output as $row)
                  {
                    echo "<input type=\"text\" name=\"tekst\" value=\"". $row['Tekst'] . "\">";
                    echo "<input type=\"text\" value=\"" . $nid . "\" name=\"zmienna\" readonly>";
                  }
                }
                else
                {
                  echo "Błąd komunikacji z bazą danych";
                }
              ?>
              <input type="submit" value="Zmień">
            </form>
          </ul>
        </div>
      </div>
  </body>
</html>
