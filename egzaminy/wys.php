<!DOCTYPE html>
<?php
//egzamin
require_once 'dbconnect.php';

$db = SQL::getInstance();
?>
<?php
setcookie("sesja", "CiastkoLogowania", time() - 3600);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/styles/style.css">
  <link rel="shortcut icon" href="/src/favicon.ico" type="image/x-icon">
  <script src="/js/purecookie.js" async></script>
  <script src="/js/jquery-3.6.0.min.js"></script>
  <script src="/js/loader.js"></script>
  <title>Egzaminy.net.pl</title>
</head>

<body>
  <div id="main">
    <nav class="navbar">
      <div class="navbar-container">
        <a href="/#" class="navbar-logo">Egzaminy.net.pl</a>
        <div class="navbar-links-container">
          <div class="mobile-menu">
            <a href="#mobile-menu-modal">
              <img src="/src/menu_icon.png" alt="">
            </a>
          </div>
          <a href="/#" class="navbar-link">Home</a>
          <a href="/egzaminy/" class="navbar-link">Egzaminy</a>
          <a href="/kontakt/" class="navbar-link">Kontakt</a>
        </div>
      </div>
    </nav>
    <div class="content">
      <header class="home-header"></header>
      <div class="exam-container">
        <div class="exam-title">
          <?php
          //egzamin
          $nid = $_GET['id'];
          $query = "SELECT * FROM `Dane` WHERE id=$nid";
          $stmt = $db->dbh->prepare($query);
          $stmt->execute();
          $output = $stmt->fetchAll();
          if (!empty($output)) {
            foreach ($output as $row) {
              echo "<h2>" . stripslashes($row['tytul']) . "</h2>";
            }
          } else {
            echo "Błąd komunikacji z bazą danych";
          }
          ?>
        </div>
        <?php
        //egzamin
        $nid = $_GET['id'];
        $query = "SELECT * FROM `Dane` WHERE id=$nid";
        $stmt = $db->dbh->prepare($query);
        $stmt->execute();
        $output = $stmt->fetchAll();
        if (!empty($output)) {
          foreach ($output as $row) {
            echo "<pre>" . stripslashes($row['zawartosc']) . "</pre>";
          }
        } else {
          echo "Błąd komunikacji z bazą danych";
        }
        ?>
      </div>
      <footer class="footer">
        <span>Copyright &copy; 2022 Jan Przyborowski Łukasz Bombała Krzysztof Jeżewski
          <span data-tooltip="Kliknij mnie!" data-flow="bottom">
            <a href="https://github.com/RudyAlbinos/ProjectINF" target="_blank">Github</a>
          </span>
        </span>
      </footer>
      <div id="mobile-menu-modal" class="modal">
        <div class="modal_content">
          <div class="modal-links-container">
            <a href="/#" class="modal-link">Home</a>
            <a href="/egzaminy/" class="modal-link">Egzaminy</a>
            <a href="/kontakt/" class="modal-link">Kontakt</a>
          </div>
          <a href="#" class="modal__close">&times;</a>
        </div>
      </div>
    </div>
    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

</body>

</html>