<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="shortcut icon" href="/src/favicon.ico" type="image/x-icon">
    <script src="/js/purecookie.js" async></script>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <title>Egzaminy.net.pl</title>
</head>
<body>
    <div id="main">
        <nav class="navbar">
            <div class="navbar-container">
                <a href="/#" class="navbar-logo">Egzaminy.net.pl</a>
                <div  class="navbar-links-container">
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
            <header class="home-header">
                <h1>Skontaktuj się z nami</h1>
            </header>
        </div>
        <div class="contact-form">
                <form class="contact-header" action="https://getform.io/f/cd832102-3d3b-4124-833b-1de26ff20cd7" method="POST">
                    <label for="imie">Imię</label>
                    <input type="text" id="imie" name="Imię" placeholder="Imię..." required>
                    <label for="emial">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="E-mail..." required>
                    <label for="wiadomosc">Wiadomość</label>
                    <textarea type="text" id="wiadomosc" name="Wiadomość" placeholder="Wiadomość..." required></textarea>
                    <button type="submit">Wyślij</button>
                </form>
            </header>
        </div>
        <footer class="footer">
            <span>Copyright &copy; 2022 Jan Przyborowski Łukasz Bombała
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
</body>
</html>