<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <img src="images.png">
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
        <script>
            const hamburger = document.querySelector(".hamburger");
            const navMenu = document.querySelector(".nav-menu");

            hamburger.addEventListener("click", mobileMenu);

            function mobileMenu() {
                hamburger.classList.toggle("active");
                navMenu.classList.toggle("active");
            }

            const navLink = document.querySelectorAll(".nav-link");

            navLink.forEach(n => n.addEventListener("click", closeMenu));

            function closeMenu() {
                hamburger.classList.remove("active");
                navMenu.classList.remove("active");
            }
        </script>
</header>

    <div class="inhalt">
        <h1>Herzlich Willkommen</h1>
        <h2>Dies ist ein Blog</h2>
    </div>

    <div class="inhalt-2">
        <h2>Schön, dich hier zu sehen! In meinem kleinen Blog<br>
            erzähle ich dir einiges über mich und meine
            Beschäfti-<br>
            gungen!<br></h2>
        <hr>
    </div>

    <div class="linie">
        <hr>
    </div>

    <div class="footer">
        <p>Datenschutzerklärungen: <a href="https://dsgvo-gesetz.de/">Hier</a><br>
            Impressum: <a href="https://www.e-recht24.de/artikel/datenschutz/209.html#:~:text=Ein%20Impressum%20dient%20als%20Anbieterkennzeichnung,Anspr%C3%BCche%20gegen%20diesen%20gerichtlich%20durchzusetzen.">Hier</a><br>
           Kontaktformular:<br>
           Email: vsantos1331@gmail.com<br>
           Telefon: 0151 19471331<br>
           Instagram: victorr.104<br>
           Post: 33914 Musterstadt<br>
           GitHub: htmldestroyer<br>
           Cisco-Academy: victor.dos<br></p>
    </div>
</body>
</html>