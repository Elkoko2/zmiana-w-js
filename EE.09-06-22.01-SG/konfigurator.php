<?php
    // setcookie('kolor');
    //prawe tło
    if ( isset($_COOKIE['kolor'])) {
        $kolor = $_COOKIE['kolor'];
    }
    else {
        $kolor = 'yellow';
        setcookie('kolor', $kolor, time()-24*3600);
    }
    //lewe tło
    if ( isset($_COOKIE['kolor2'])) {
        $kolor2 = $_COOKIE['kolor2'];
    }
    else {
        $kolor2 = 'green';
        setcookie('kolor2', $kolor2, time()-24*3600);
    }
    //kolor
    if ( isset($_COOKIE['tekst'])) {
        $tekst = $_COOKIE['tekst'];
    }
    else {
        $tekst = 'green';
        setcookie('tekst', $tekst, time()-24*3600);
    }
    //rozmiar
    if ( isset($_COOKIE['rozmiar'])) {
        $rozmiar = $_COOKIE['rozmiar'];
    }
    else {
        $rozmiar = '';
        setcookie('rozmiar', $rozmiar);
    }
    //ramka
    if ( isset($_COOKIE['ramka'])) {
        $ramka = $_COOKIE['ramka'];
    }
    else {
        $ramka = '';
        setcookie('ramka', $ramka);
    }
?>
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="styl6.css">
            <title>Style w Css</title>
            <script src="script.js"></script>
        </head>
        <body>
            <section id="lewy"  style="background-color:<?php echo $kolor2;?>">
                <h1>Konfigurator stylu</h1>
                <p>Podaj kolor tła</p>
                <button type="submit" id="Indigo" onclick="kolor('Indigo');">Indigo</button>
                <button type="submit" id="SteelBlue" onclick="kolor('SteelBlue');">SteelBlue</button>
                <button type="submit" id="Olive" onclick="kolor('Olive');">Olive</button>
                <button type="submit" id="red" onclick="kolor2('red');">red</button>
                <button type="submit" id="blue" onclick="kolor2('blue');">blue</button>
                <button type="submit" id="black" onclick="kolor2('black');">black</button>

                <p>Podaj kolor czcionki</p>
                <select id="czcionka" onchange="kolorek()">
                    <option value="White">White</option>
                    <option value="Tan">Tan</option>
                    <option value="Bisque">Bisque</option>
                    <option value="Plum">Plum</option>
                </select>

                <p>Podaj rozmiar czcionki w procentach</p>
                <input type="number" value="<?php echo $rozmiar ?>" onkeyup="wielkosc()" id="wielk">
                <p>czy rysunek ma mieć ramkę?</p>
                <input type="checkbox" onclick="ramka()" id="rama" value="1">Rysuj ramkę
                <p>Jaki jest typ punktora listy?</p>

                <input type="radio" name="1" checked value="1" id="1" onclick="radio()">Dysk
                <input type="radio" name="1" value="2" id="2" onclick="radio()">Kwadrat
                <input type="radio" name="1" value="3" id="3" onclick="radio()">Okrąg
                <p>zmiana zdjięcia</p>
                <button type="submit" id="zdj1" onclick="zdj1()">zmień obraz 1</button>
                <button type="submit" id="zdj2" onclick="zdj2()">zmień obraz 2</button>
                <button type="submit" id="zdj3" onclick="zdj3()">zmień obraz 3</button>

            </section>
            <section id="prawy" style="background-color:<?php echo $kolor;?>">
                <div class="obraz">
                    <img src="gibraltar.png" id="gora">
                </div>
                <div class="pkt">
                <ul>
                    <li id="ham">Element1</li>
                    <li id="ham2">Element2</li>
                    <li id="ham3">Element3</li>
                </ul>
                </div>
                <div class="text" style="font-size: <?php echo $rozmiar ?>">
                <p id="text" style="color:<?php echo $tekst ?>">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                       Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                </div>
            </section>
            <section id="stopka">
                Autor: 694296662137
            </section>
 
        
        </body>
    </html>