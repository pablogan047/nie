<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remont</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
    <h1>Malowanie i gipsowanie</h1>
    </header>

    <main>
        <nav><a href="kontakt.html">kontakt</a>
        <a href="https://remonty.pl">partnerzy</a>
        </nav>
         <aside>
        <img src="tapeta_lewa.png" alt="usługi">
        <img src="tapetaprawa.png" alt="do zmiany na tapeta prawo">
        <img src="tapeta_lewa.png" alt="usługi">
        </aside>
<select>
<!--bedzie skrypt 2 tutej-->
        </select>

        </form>
        <ul>
<!-- tutej skrpyt 3-->
        </ul>


        <section id="lewa">
            <h2>Dla klientów</h2>
            <form method="post" action="zlecenia.php">
<label for="pracownicy">ilu conajmniej pracowników potrzebujesz?</label><br></br>
<input type="number" name="pracownicy-name" id="pracwonicy">
                <button type="submit">szukaj firm</button>
            </form>

            <?php
            $polaczenie = new mysqli("localhost", "root", "", "remonty");
            if (!empty($_POST['pracownicy-name'])) {
        echo    $_POST["pracownicy-name"];
            }
            $sql = "SELECT liczba_pracownikow FROM wykonawcy WHERE liczba_pracownikow >= ".$_POST["pracownicy-name"] . ";";
            echo $sql;
            ?>
    
        </section>

        <section id="srodkowy">
        <h2>Dla wykonawców</h2>
        <input type="radio" id="wykonanie">
           <label for="malowanie">malowanie</label>
        <br></br>

        <input type="radio" id="wykonanie">
        <label for="gipsowanie">gipsowanie</label>
        <input type="submit" value="Szukaj klientów">
        </section>
        </main>

    <footer>strone wykonał: paweł</footer>
</body>
</html>

<?php
$polaczenie->close();
?>