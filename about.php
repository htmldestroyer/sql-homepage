<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Über mich</title>
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
                <li class="nav-item">
                    <a href="inhalte.php" class="nav-link">Exklusive Inhalte</a>
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

    <div class="content">
        <h1>Über mich</h1>
        <h2>Hier erfährst du einiges über mich</h2>
        <hr>
    </div>

    <div class="content-2">
        <h1>Hi!</h1>
        <h2>Mein Name ist Victor Dos Santos<br>
            Ich bin 2005 in Brasilien geboren und bin 17 Jahre alt.<br>
            Aktuell mache ich mein Fachabitur im IT-Bereich.<br>
            Unten erzähle ich einiges über mein Fachabitur bisher.</h2>
    </div>

    <div class="content-3">
        <h1 id="hallo">Wie läuft mein Fachabitur?</h1>
        <h2>
            Ich habe es im August 2022 im ATIW Berufskolleg angefangen.<br>
            Dort gibt es sehr viele IT-bezogene Fächer, wie zum Beispiel GIT, ITN (IT-Netzwerke), <br>
            ITS (IT-Systeme) und AEW (Anwendungsentwicklung [Programmiersprache: Python]). Zudem gibt es auch<br>
            Wirtschaftsbetriebslehre, Deutsch, Mathe, Englisch, Sport und Politik.<br>
            Mein Lieblingsfach ist mit Abstand AEW, da ich in diesem Fach kreativ sein kann und viele neue<br>
            Programme coden kann.<br>
        </h2>
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