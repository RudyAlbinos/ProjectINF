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
    require_once 'dbconnect1.php';

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
            <form class="" action="egzedit3.php" method="post">
              <?php
                $nid = $_GET['id'];
                $query = "SELECT * FROM `Dane` WHERE id=$nid";
                $stmt = $db->dbh->prepare($query);
                $stmt->execute();
                $output = $stmt->fetchAll();
                if(!empty($output))
                {
                  foreach ($output as $row)
                  {
                    echo "<textarea type=\"text\" name=\"tekst\" rows=\"20\" cols=\"50\">" . $row['zawartosc'] . "</textarea>";
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
