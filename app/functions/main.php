<?php

use function PHPSTORM_META\type;

class Main 
{
    public function __construct() {
        echo '<link rel="stylesheet" href="app/style.css">';
        echo '<script src="https://kit.fontawesome.com/96ee6c43cf.js" crossorigin="anonymous"></script>';
        echo '<title>Zdzislaw Kulis</title>';
        echo '<meta name="viewport" content="width=device-width, user-scalable=no" />';
    }
    function createNavigation(string $nameOfSite, string $link = null, string $nameOfSiteTwo = null) {
        echo '
        <div class="navigation">
            <div class="container">';
            if ($link != null) {
                echo '<a href="?">Strona glowna</a> / <a href="?'.$link.'"> '.$nameOfSite.' </a> / '.$nameOfSiteTwo.'</a>';
            } else {
                echo '<a href="?">Strona glowna</a> / '.$nameOfSite.'';
            }
        echo '</div>
        </div>
        ';
    }
    function createGalery($name) {
        $files = glob('app/images/gallery/'.$name.'/*.{jpg,png,gif}', GLOB_BRACE);

        echo '<style>img {cursor: pointer;} </style><div class="container">
        <div class="row gallery">';
        foreach($files as $file) {
            echo '<img class="galeryImage" src="'.$file.'">';
        }
        echo '</div>
        </div><script src="app/js/imageSize.js"></script>';
    }
    function createArticle() {
        $con = mysqli_connect("54.38.50.59", "www7941_strona", "GZlTeXena4BgPYGvDGJJ", "www7941_strona");

        $query = mysqli_query($con, "SELECT * FROM `articles`");

        $row = mysqli_fetch_assoc($query);

        echo '<style>img {cursor: pointer;} </style><div class="container articleInNews">
        <h2>'.$row["TITLE"].'</h2>
        '.$row["TEXT"].'
        </div><script src="app/js/imageSize.js"></script>';
    }
    function createSite(string $nameOfSite) {
        if ($nameOfSite == "poems") {
            echo '<div class="container article">
            <div class="row poems" id="poems"></div>
            <div class="centerbutton"><button class="btnloadsite"><i class="fas fa-arrow-down"></i></button></div>
            </div>
            <script src="app/js/main.js"></script>';
        }
        if ($nameOfSite == "index") {
echo <<<_END
                <div class="jumbotron">
                    <div class="slider">
                        <div class="slide current">
                            <div class="content">
                                <h1>Promocja ksiażek.</h1>
                                <p>
                                Ksiązki Zdzisława były pisane poezją jak i prozą, wydawał również książki zawierające galerie przeróżnych zdjęć.
                                </p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="content">
                            <h2>Zdzisław w domu</h2>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="content">
                                <h1>Poezja</h1>
                                <p>
                                Zdzisław pisał wiersze na rózny temat.
                                </p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="content">
                                <h1>Fotografia</h1>
                                <p>
                                Zdzisław również zajmował się fotografią, jego zdjecia możemy ujrzeć na stronie lub w galeri sztuki.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                    <button id="prev"><i class="fas fa-arrow-left"></i></button>
                    <button id="next"><i class="fas fa-arrow-right"></i></button>
                  </div>
                    <script src="app/js/slider.js"></script>
                </div>
                <div class="container center-text" style="margin-top: 100px">
                    <h1>Ksiazki autorstwa Zdzisława Kulisia.</h1>
                    <div class="row pub">
                        <div class="card">
                            <img src="app/images/okładka - front.jpg">
                            <div>Kiedy weźmiecie tę książkę w swe szlachetne dłonie, ukażą się Wam wiersze. Wiersze o tematyce przeróżnej, które tworzą proste rymy,zrozumiałe dla każdego człowieka. Między innymi są wiersze regionalne i okolicznościowe, w których opisałem spostrzeżenia i konkluzje dotyczące naszego regionu. Pomiędzy faktami pobrzmiewa w nich nutka sformułowań żartobliwych, a to dlatego, aby były one weselsze i trafiły do większej rzeszy czytelników.</div></div>

                        <div class="card">
                            <img src="app/images/okładka front.JPG">
                            <div>Z okazji siedemdziesiątej rocznicy zagłady kazimierskich Żydów w październiku 1942 roku w Słonowickim lesie, Zdzisław Kuliś wydał niewielką książkę pt. „Niechaj Słowik Pieśń Zaśpiewa” dla upamiętnienia tego wydarzenia. Znajdziemy w niej wiersz pod tym samym tytułem, a ponadto wiersze: „Podróż w jedną stronę”, „Piekło na ziemi”, „Wszystkich Świętych”, oraz wiersz Antoniego Słonimskiego - „Elegia Miasteczek Żydowskich” i wiersz Agnieszki Osieckiej - „Miasteczko Bełz”. Są też relacje z poprzednich spotkań z Reymondem Fischlerem, które odbyły się w ubiegłym roku w bibliotece w Kazimierzy Wielkiej, a także piękne kolorowe zdjęcia.</div></div>
                        
                        <div class="card">
                            <img src="app/images/okładka-front.jpg">
                            <div>W książce pod tym tytułem znajdują się wiersze. Jest ich 136 i 54 zdjęcia z poprzedniej promocji. Książka ma 230 stron. ...W swoich wierszach opisałem życie ludzi wraz z ich radościami smutkami, ze środowiskiem w którym mieszkają. Nikt z nas nie ma drogi usłanej różami, ma wzloty, ale też i upadki, dlatego ta droga, ta ścieżka naszego życia prowadząca przez lata jest kręta. Chociaż jesteśmy kowalami swojego losu, nie jesteśmy w stanie wykuć go tak, aby z każdego wydzierganego dnia powstał arras naszego życia, a nie zwykła makatka. Ważnym ogniwem ludzkiego życia są przyjaciele. Dlatego dużo wierszy poświęciłem moim przyjaciołom, gdyż mam ich wielu i nie sposób o nich nie pamiętać.</div></div>
                        
                        <div class="card">
                            <img src="app/images/Okładka Historia zegara4.jpg">
                            <div>W książce "Historia pewnego zegara." autor opowiada o jego losach i innych bohaterów podczas drugiej wojny światowej.</div>
                            </div>
                        <div class="card">
                            <img src="app/images/ZDJĘCIE J. MISZCZYK I JA 3_html_m860d64a.jpg">
                            <div></div></div>
                        
                        <div class="card">
                            <img src="app/images/Przygody Franka karierowicza tom II okładka.PNG">
                            <div></div></div>
                        
                    </div>
                </div>
_END;
        }
        else if ($nameOfSite == "nav") {
            echo '
                <nav>
                    <div class="title">Zdzisław Kuliś<button class="toggler"><i class="fas fa-bars"></i></button></div>
                    <div class="menu">
                        <a href="?">Strona glowna</a>
                        <a href="?biography">Biografia</a>
                        <a href="?articles">Artykuły</a>
                        <a href="?poems">Wiersze</a>
                        <a href="?gallery">Galeria</a>
                    </div>
                </nav>
                <script>
                const toggler = document.querySelector(".toggler");
                const menu = document.querySelector(".menu");
                toggler.addEventListener("click", () => {
                    if (menu.style.display != "flex") {
                        menu.style.display = "flex";
                    } else {
                        menu.style.display = "none";
                    }
                });
                </script>
            ';
        }
        else if ($nameOfSite == "footer") {
            echo '
                <footer>
                <div class="up">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3>Przydatne linki</h3>
                                <li><a href="?">Strona glowna</a></li>
                                <li><a href="#">O mnie</a></li>
                                <li><a href="?articles">Artykuły</a></li>
                                <li><a href="#">Publikacje</a></li>
                                <li><a href="#">Galeria</a></li>
                            </div>
                            <div class="col">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="down">
                    Autor strony Kamil Adamski &copy 2021
                </div>
                </footer>
            ';
        } else if ($nameOfSite == "gallery") {

            echo '<style>img {cursor: pointer;} </style><div class="container">
            <div class="row gallery">';
            foreach(glob('app/images/gallery/*') as $file) {
                $name = str_replace("app/images/gallery/", "", $file);
                $list = glob('app/images/gallery/'.$name.'/*');
                foreach($list as $x) {
                    echo '<a href="?gallery='.$name.'"><img class="galeryImage" src="'.$x.'"><p>'.$name.' ('.sizeof($list).')</p></a>';
                    break;
                }
            }
            echo '</div></div>';
        } else if ($nameOfSite == "articles") {
            echo '
                <div class="container">
                    <div class="row articles" id="articles"><h2>Artykuły</h2></div>
                    <div class="centerbutton"><button class="btnloadsite"><i class="fas fa-arrow-down"></i></button></div>
                </div>
                <script src="app/js/articles.js"></script>
            ';
        } else if ($nameOfSite == "biography") {
            echo '
                <div class="container biography">
                <pre>
<div class="row"><div class="col"><img style="max-width: 350px" src="app/images/zdzislaw.jpg"></div><div class="col"><b>Zdzisław Kuliś</b> urodzony 13 września 1940 roku w Chruszczynie Wielkiej, zmarł 15 listopada 2021 roku, mieszkaniec wsi Donosy w gminie Kazimierza Wielka woj. świętokrzyskie. Emerytowany pracownik Urzędu Miasta i Gminy w Kazimierzy Wielkiej, gdzie przepracował 51 lat w tym trzydzieści jako główny księgowy. Posiada wykształcenie ekonomiczne. Przez kilka lat równocześnie z pracą zawodową prowadził filię biblioteczną w Donosach, biorąc żywy udział w życiu kulturalnym środowiska, z którym łączą go więzi rodzinne i miejsce zamieszkania. W 2010 roku ukazał się pierwszy tom jego wierszy zatytułowany Wiersze dla potomnych, w 2011 roku album zawierający fotografie kapliczek, figur i krzyży Ziemi Kazimierskiej pt. Mieszkać wśród Świętych, w 2012 roku poemat poświęcony martyrologii kazimierskich Żydów pt. Niechaj słowik pieśń zaśpiewa.
Gdyby wymienić jego społeczną działalność w tym kulturalną przez okres całego jego życia, to powstałaby dość obszerna książka. Największa jednakże jego działalność przypada na rok 2014.</div></div>Otóż w tymże roku Zdzisław Kuliś wydał trzy publikacje książkowe. W maju odbyła się promocja zbioru wierszy pt. Krętą ścieżką mijających lat. Jest to wydanie, które zawiera 234 strony wypełnione wierszami, których jest ponad 140, średnio mających siedem zwrotek, ale są też poematy trzy i czterokrotnie większe. Następnie w lipcu została wydana broszura w której jest szesnaście wierszy patriotycznych z okazji 70. rocznicy powstania Kazimierskiej Rzeczpospolitej Partyzanckiej pt. Aby czas nie zatarł śladów. Zdzisław Kuliś wydał też we wrześniu broszurę pt. Ocalmy przed wyginięciem. Ponieważ działa również w proszowickim Stowarzyszeniu Hodowców pisze również publikacje poświęcone temu zagadnieniu i ochronie środowiska. Jest też członkiem Kazimierskiego Związku Emerytów, Rencistów i Inwalidów, Odonowskiego Towarzystwa Kulturalnego i Stowarzyszenia Żołnierzy AK w Kazimierzy Wielkiej. Jest także członkiem Komitetu Budowy Pomnika pamięci Kazimierskiej Rzeczpospolitej Partyzanckiej w Kazimierzy Wielkiej.

Zdzisław Kuliś w 2014 roku otrzymał statuetkę scyzoryka w dziedzinie kultura za działalność poetycką. We wrześniu został odznaczony medalem za zasługi dla rolnictwa nadany przez ministra Rolnictwa, a wręczony na Festiwalu w Proszowicach. Był też w roku tym nominowany do tytułu człowieka 25. lecia. W kwietniu otrzymał pisemne podziękowanie od marszałka województwa małopolskiego za działalność w dziedzinie ochrony środowiska. Pan Zdzisław w kwietniu urządził swoją wystawę fotograficzną w holu kazimierskiej biblioteki pt. 220. Rocznica Bitwy pod Racławicami. Tworzyło ją ponad 50 zdjęć formatu A-4. Składała się z trzech rozdziałów: Rekonstrukcja bitwy, Zdjęcia panoramy racławickiej i Widok obecny okolic Racławic z pomnikiem Bartosza Głowackiego. Drugą wystawę fotograficzną urządził w Proszowickim Centrum Kultury w Proszowicach pt. Widok z mojego okna. Była ona podzielona na cztery pory roku: Wiosna, Lato, Jesień, Zima. Każdą porę roku poprzedza wiersz autorstwa pana Zdzisława tematycznie związany z daną porą. Ponadto w 2014 roku wziął udział w 58 różnego rodzaju spotkaniach, w tym też autorskich, koncertach, uroczystościach okolicznościowych patriotycznych, widowiskach. Na wielu imprezach prezentowane były wiersze jego autorstwa. Jak co roku tak i w tym bierze udział w prezentacji swoich zdjęć w Galerii Sztuki Zielona w Busku Zdroju. W dniu 7 czerwca spotkał się osobiście w Proszowicach z naszą kadrą skoczków narciarskich w tym z Kamilem Stochem. Wręczył mu ostatnio wydaną swoją książkę Krętą ścieżką mijających lat, w której jest wiersz pt. Leć Kamil, leć. 26 czerwca brał udział w gali Człowiek 25. lecia w Kielcach. Chociaż nagrody nie otrzymał, to jednak bycie nominowanym do tej nagrody i wzięcie udziału w gali, już było zaszczytem. 18 października spotkał się ze światowej sławy piosenkarką Eleni, która wystąpiła na koncercie w Kazimierskim Ośrodku Kultury. Wręczył artystce książkę swojego autorstwa Wiersze dla potomnych, a w zamian otrzymał podziękowanie, autograf i wspólnie zrobione zdjęcie. Udział w uroczystościach 2014 zakończył 8 grudnia na uroczystej sesji kazimierskiej rady gminy, na ślubowaniu nowo wybranego burmistrza, gdzie również miał swoje 5 minut. W ubiegłym roku Zdzisław Kuliś napisał wiele artykułów prasowych. Od 23 grudnia 2014 roku w Tygodniku Ponidzia był cotygodniowo cyklicznie publikowany jeden Jego wiersz i zabytkowa kapliczka lub figura z terenu gminy Kazimierza Wielka, ale po dwóch miesiącach publikacji zaniechano.

20 września 2015 roku na V Małopolskim Festiwalu w Proszowicach otrzymał puchar Instytutu Zootechniki za popularyzację idei ochrony ras rodzimych i ochrony środowiska.

    

Poza wydanymi książkami, wiersze jego drukowane były w różnych publikacjach, takich jak:

„Szkoła staruszka – jak matka.... czyli 80 lat „Jedynki” w Kazimierzy Wielkiej wydana przez Samorządową Szkołę Podstawową Nr 1. w Kazimierzy Wielkiej 2009. Znajduje się tam wiersz pt. „Szkoła” tematycznie związany z Jedynką.

„Obiektywem przez półwiecze” Zdzisława Pilarskiego z roku 2009. Mieści się w niej wiersz pt. „Od Darola do Bodziocha”. Wiersz ma 74 zwrotki i opisuje 50 lat Kazimierzy Wielkiej.

„25 lat wspólnej drogi” autorstwa ks. Andrzeja Biernackiego, w której jest zamieszczony fragment wiersza pt. „Kraków pod Kazimierzą leży mości Książę”, a w późniejszych wersjach tej książki są jeszcze inne wiersze.

„Produkt lokalny od Wisły po Spisz”. Publikacja wydana w wyniku ogłoszonego w 2010 roku konkursu pn. „Pomysł na produkt lokalny”. W trakcie trwania imprezy zaprezentowano 98 oryginalnych pomysłów na produkt lokalny. Zdzisław Kuliś do udziału w konkursie w kategorii przedsięwzięcie kulturalno- edukacyjne zgłosił tomik poezji pt. „Wiersze dla potomnych”. Za udział otrzymał piękną statuetkę. W tej publikacji wydrukowano wiersz pt. „Moja mała Ojczyzna” i „Od Spisza aż do Wisły”.

Wiersze pana Zdzisława są publikowane w Internetowym Kurierze proszowickim, Głosie proszowickim, a fragmenty w kieleckim Echu Dnia i Tygodniku Ponidzia. Piękny wiersz „Dwudziestolecie i Sztandar” opublikowany został w miesięczniku wydanym przez Zarząd Główny PZHGR i DI z siedzibą w Tarnowie. Kilka wierszy zostało opublikowane w tygodniku „Angora” w tym jeden z nich pt. „Czas”. Bardzo często są odczytywane na uroczystościach organizowanych z okazji różnych okoliczności.

W roku 2017 wydał pierwszą swoją książkę pisaną prozą pt.” WSPOMNIENIA-

HISTORIA PEWNEGO ZEGARA”. Trzysta siedemdziesięcio sześcio stronicowa książka zawiera około sto zdjęć odpowiadających opisywanej sytuacji i około pięćdziesiąt wierszy.

Jest to cykl wspomnień z lat 1961 do 2012 z życia gminnego, które toczy się wokół zegara z 1956 roku. Wydarzenia związane są, najpierw z Gromadzką Radą Narodową w Donosach, a później po zlikwidowaniu jej z terenem gminy Kazimierza Wielka, która istnieje do dziś.

Dwudziestego trzeciego lutego 2018 roku autor odebrał statuetkę i dyplom człowieka roku 2017 w dziedzinie kultura. Ostatnio pracował nad książką pt. Przygody Franka karierowicza, a wolne chwile wypełnia pisaniem wierszy o tematyce różnej. Sztandarowym jego dziełem jest wiersz pt. Narodzona na nowo, poświęcony setnej rocznicy odzyskania przez Polskę niepodległości.

Z tej to okazji zorganizował posadzenie na obrzeżach parku zabytkowego w Donosach dębu 100. lecia z grupą emerytów z kazimierskiego Oddziału Związku w którym to wydarzeniu udział wzięli starosta kazimierski Jan Nowak i burmistrz Kazimierzy Wielkiej Adam Bodzioch.

Ponadto Zdzisław Kuliś ma jeszcze wiele innych mniejszych lub większych osiągnięć. Wymienię jednak jeszcze jedno z nich.

Ostatnio Pan Zdzisław próbował nawet gry na trąbce, gdyż chciał odświeżyć swoją przygodę z instrumentami dętymi z lat młodości. Otóż w wieku 18 lat uczył się grać w cukrownianej orkiestrze dętej w Kazimierzy Wielkiej. Z dużym powodzeniem grał na rogu czyli waltorni, ale wyjazd do pracy w Nowej Hucie pod Krakowem pokrzyżował mu te zamiary.

Jego działalność nie wpisuje się w pracę zawodową i nie osiąga sukcesów dzięki pracy zawodowej. Cała jego działalność jest wykonywana z wielką pasją, społecznie. Poświęca swój czas, a często i pieniądze.
                </pre>
                </div>
            ';
        }
    }
}


?>

