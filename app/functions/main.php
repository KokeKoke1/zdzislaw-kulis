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
                                <h1>Promocja ksia??ek.</h1>
                                <p>
                                Ksi??zki Zdzis??awa by??y pisane poezj?? jak i proz??, wydawa?? r??wnie?? ksi????ki zawieraj??ce galerie przer????nych zdj????.
                                </p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="content">
                            <h2>Zdzis??aw w domu</h2>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="content">
                                <h1>Poezja</h1>
                                <p>
                                Zdzis??aw pisa?? wiersze na r??zny temat.
                                </p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="content">
                                <h1>Fotografia</h1>
                                <p>
                                Zdzis??aw r??wnie?? zajmowa?? si?? fotografi??, jego zdjecia mo??emy ujrze?? na stronie lub w galeri sztuki.
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
                    <h1>Ksiazki autorstwa Zdzis??awa Kulisia.</h1>
                    <div class="row pub">
                        <div class="card">
                            <img src="app/images/ok??adka - front.jpg">
                            <div>Kiedy we??miecie t?? ksi????k?? w swe szlachetne d??onie, uka???? si?? Wam wiersze. Wiersze o tematyce przer????nej, kt??re tworz?? proste rymy,zrozumia??e dla ka??dego cz??owieka. Mi??dzy innymi s?? wiersze regionalne i okoliczno??ciowe, w kt??rych opisa??em spostrze??enia i konkluzje dotycz??ce naszego regionu. Pomi??dzy faktami pobrzmiewa w nich nutka sformu??owa?? ??artobliwych, a to dlatego, aby by??y one weselsze i trafi??y do wi??kszej rzeszy czytelnik??w.</div></div>

                        <div class="card">
                            <img src="app/images/ok??adka front.JPG">
                            <div>Z okazji siedemdziesi??tej rocznicy zag??ady kazimierskich ??yd??w w pa??dzierniku 1942 roku w S??onowickim lesie, Zdzis??aw Kuli?? wyda?? niewielk?? ksi????k?? pt. ???Niechaj S??owik Pie???? Za??piewa??? dla upami??tnienia tego wydarzenia. Znajdziemy w niej wiersz pod tym samym tytu??em, a ponadto wiersze: ???Podr???? w jedn?? stron?????, ???Piek??o na ziemi???, ???Wszystkich ??wi??tych???, oraz wiersz Antoniego S??onimskiego - ???Elegia Miasteczek ??ydowskich??? i wiersz Agnieszki Osieckiej - ???Miasteczko Be??z???. S?? te?? relacje z poprzednich spotka?? z Reymondem Fischlerem, kt??re odby??y si?? w ubieg??ym roku w bibliotece w Kazimierzy Wielkiej, a tak??e pi??kne kolorowe zdj??cia.</div></div>
                        
                        <div class="card">
                            <img src="app/images/ok??adka-front.jpg">
                            <div>W ksi????ce pod tym tytu??em znajduj?? si?? wiersze. Jest ich 136 i 54 zdj??cia z poprzedniej promocji. Ksi????ka ma 230 stron. ...W swoich wierszach opisa??em ??ycie ludzi wraz z ich rado??ciami smutkami, ze ??rodowiskiem w kt??rym mieszkaj??. Nikt z nas nie ma drogi us??anej r????ami, ma wzloty, ale te?? i upadki, dlatego ta droga, ta ??cie??ka naszego ??ycia prowadz??ca przez lata jest kr??ta. Chocia?? jeste??my kowalami swojego losu, nie jeste??my w stanie wyku?? go tak, aby z ka??dego wydzierganego dnia powsta?? arras naszego ??ycia, a nie zwyk??a makatka. Wa??nym ogniwem ludzkiego ??ycia s?? przyjaciele. Dlatego du??o wierszy po??wi??ci??em moim przyjacio??om, gdy?? mam ich wielu i nie spos??b o nich nie pami??ta??.</div></div>
                        
                        <div class="card">
                            <img src="app/images/Ok??adka Historia zegara4.jpg">
                            <div>W ksi????ce "Historia pewnego zegara." autor opowiada o jego losach i innych bohater??w podczas drugiej wojny ??wiatowej.</div>
                            </div>
                        <div class="card">
                            <img src="app/images/ZDJ??CIE J. MISZCZYK I JA 3_html_m860d64a.jpg">
                            <div></div></div>
                        
                        <div class="card">
                            <img src="app/images/Przygody Franka karierowicza tom II ok??adka.PNG">
                            <div></div></div>
                        
                    </div>
                </div>
_END;
        }
        else if ($nameOfSite == "nav") {
            echo '
                <nav>
                    <div class="title">Zdzis??aw Kuli??<button class="toggler"><i class="fas fa-bars"></i></button></div>
                    <div class="menu">
                        <a href="?">Strona glowna</a>
                        <a href="?biography">Biografia</a>
                        <a href="?articles">Artyku??y</a>
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
                                <li><a href="?articles">Artyku??y</a></li>
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
                    <div class="row articles" id="articles"><h2>Artyku??y</h2></div>
                    <div class="centerbutton"><button class="btnloadsite"><i class="fas fa-arrow-down"></i></button></div>
                </div>
                <script src="app/js/articles.js"></script>
            ';
        } else if ($nameOfSite == "biography") {
            echo '
                <div class="container biography">
                <pre>
<div class="row"><div class="col"><img style="max-width: 350px" src="app/images/zdzislaw.jpg"></div><div class="col"><b>Zdzis??aw Kuli??</b> urodzony 13 wrze??nia 1940 roku w Chruszczynie Wielkiej, zmar?? 15 listopada 2021 roku, mieszkaniec wsi Donosy w gminie Kazimierza Wielka woj. ??wi??tokrzyskie. Emerytowany pracownik Urz??du Miasta i Gminy w Kazimierzy Wielkiej, gdzie przepracowa?? 51 lat w tym trzydzie??ci jako g????wny ksi??gowy. Posiada wykszta??cenie ekonomiczne. Przez kilka lat r??wnocze??nie z prac?? zawodow?? prowadzi?? fili?? biblioteczn?? w Donosach, bior??c ??ywy udzia?? w ??yciu kulturalnym ??rodowiska, z kt??rym ????cz?? go wi??zi rodzinne i miejsce zamieszkania. W 2010 roku ukaza?? si?? pierwszy tom jego wierszy zatytu??owany Wiersze dla potomnych, w 2011 roku album zawieraj??cy fotografie kapliczek, figur i krzy??y Ziemi Kazimierskiej pt. Mieszka?? w??r??d ??wi??tych, w 2012 roku poemat po??wi??cony martyrologii kazimierskich ??yd??w pt. Niechaj s??owik pie???? za??piewa.
Gdyby wymieni?? jego spo??eczn?? dzia??alno???? w tym kulturaln?? przez okres ca??ego jego ??ycia, to powsta??aby do???? obszerna ksi????ka. Najwi??ksza jednak??e jego dzia??alno???? przypada na rok 2014.</div></div>Ot???? w tym??e roku Zdzis??aw Kuli?? wyda?? trzy publikacje ksi????kowe. W maju odby??a si?? promocja zbioru wierszy pt. Kr??t?? ??cie??k?? mijaj??cych lat. Jest to wydanie, kt??re zawiera 234 strony wype??nione wierszami, kt??rych jest ponad 140, ??rednio maj??cych siedem zwrotek, ale s?? te?? poematy trzy i czterokrotnie wi??ksze. Nast??pnie w lipcu zosta??a wydana broszura w kt??rej jest szesna??cie wierszy patriotycznych z okazji 70. rocznicy powstania Kazimierskiej Rzeczpospolitej Partyzanckiej pt. Aby czas nie zatar?? ??lad??w. Zdzis??aw Kuli?? wyda?? te?? we wrze??niu broszur?? pt. Ocalmy przed wygini??ciem. Poniewa?? dzia??a r??wnie?? w proszowickim Stowarzyszeniu Hodowc??w pisze r??wnie?? publikacje po??wi??cone temu zagadnieniu i ochronie ??rodowiska. Jest te?? cz??onkiem Kazimierskiego Zwi??zku Emeryt??w, Rencist??w i Inwalid??w, Odonowskiego Towarzystwa Kulturalnego i Stowarzyszenia ??o??nierzy AK w Kazimierzy Wielkiej. Jest tak??e cz??onkiem Komitetu Budowy Pomnika pami??ci Kazimierskiej Rzeczpospolitej Partyzanckiej w Kazimierzy Wielkiej.

Zdzis??aw Kuli?? w 2014 roku otrzyma?? statuetk?? scyzoryka w dziedzinie kultura za dzia??alno???? poetyck??. We wrze??niu zosta?? odznaczony medalem za zas??ugi dla rolnictwa nadany przez ministra Rolnictwa, a wr??czony na Festiwalu w Proszowicach. By?? te?? w roku tym nominowany do tytu??u cz??owieka 25. lecia. W kwietniu otrzyma?? pisemne podzi??kowanie od marsza??ka wojew??dztwa ma??opolskiego za dzia??alno???? w dziedzinie ochrony ??rodowiska. Pan Zdzis??aw w kwietniu urz??dzi?? swoj?? wystaw?? fotograficzn?? w holu kazimierskiej biblioteki pt. 220. Rocznica Bitwy pod Rac??awicami. Tworzy??o j?? ponad 50 zdj???? formatu A-4. Sk??ada??a si?? z trzech rozdzia????w: Rekonstrukcja bitwy, Zdj??cia panoramy rac??awickiej i Widok obecny okolic Rac??awic z pomnikiem Bartosza G??owackiego. Drug?? wystaw?? fotograficzn?? urz??dzi?? w Proszowickim Centrum Kultury w Proszowicach pt. Widok z mojego okna. By??a ona podzielona na cztery pory roku: Wiosna, Lato, Jesie??, Zima. Ka??d?? por?? roku poprzedza wiersz autorstwa pana Zdzis??awa tematycznie zwi??zany z dan?? por??. Ponadto w 2014 roku wzi???? udzia?? w 58 r????nego rodzaju spotkaniach, w tym te?? autorskich, koncertach, uroczysto??ciach okoliczno??ciowych patriotycznych, widowiskach. Na wielu imprezach prezentowane by??y wiersze jego autorstwa. Jak co roku tak i w tym bierze udzia?? w prezentacji swoich zdj???? w Galerii Sztuki Zielona w Busku Zdroju. W dniu 7 czerwca spotka?? si?? osobi??cie w Proszowicach z nasz?? kadr?? skoczk??w narciarskich w tym z Kamilem Stochem. Wr??czy?? mu ostatnio wydan?? swoj?? ksi????k?? Kr??t?? ??cie??k?? mijaj??cych lat, w kt??rej jest wiersz pt. Le?? Kamil, le??. 26 czerwca bra?? udzia?? w gali Cz??owiek 25. lecia w Kielcach. Chocia?? nagrody nie otrzyma??, to jednak bycie nominowanym do tej nagrody i wzi??cie udzia??u w gali, ju?? by??o zaszczytem. 18 pa??dziernika spotka?? si?? ze ??wiatowej s??awy piosenkark?? Eleni, kt??ra wyst??pi??a na koncercie w Kazimierskim O??rodku Kultury. Wr??czy?? artystce ksi????k?? swojego autorstwa Wiersze dla potomnych, a w zamian otrzyma?? podzi??kowanie, autograf i wsp??lnie zrobione zdj??cie. Udzia?? w uroczysto??ciach 2014 zako??czy?? 8 grudnia na uroczystej sesji kazimierskiej rady gminy, na ??lubowaniu nowo wybranego burmistrza, gdzie r??wnie?? mia?? swoje 5 minut. W ubieg??ym roku Zdzis??aw Kuli?? napisa?? wiele artyku????w prasowych. Od 23 grudnia 2014 roku w Tygodniku Ponidzia by?? cotygodniowo cyklicznie publikowany jeden Jego wiersz i zabytkowa kapliczka lub figura z terenu gminy Kazimierza Wielka, ale po dw??ch miesi??cach publikacji zaniechano.

20 wrze??nia 2015 roku na V Ma??opolskim Festiwalu w Proszowicach otrzyma?? puchar Instytutu Zootechniki za popularyzacj?? idei ochrony ras rodzimych i ochrony ??rodowiska.

    

Poza wydanymi ksi????kami, wiersze jego drukowane by??y w r????nych publikacjach, takich jak:

???Szko??a staruszka ??? jak matka.... czyli 80 lat ???Jedynki??? w Kazimierzy Wielkiej wydana przez Samorz??dow?? Szko???? Podstawow?? Nr 1. w Kazimierzy Wielkiej 2009. Znajduje si?? tam wiersz pt. ???Szko??a??? tematycznie zwi??zany z Jedynk??.

???Obiektywem przez p????wiecze??? Zdzis??awa Pilarskiego z roku 2009. Mie??ci si?? w niej wiersz pt. ???Od Darola do Bodziocha???. Wiersz ma 74 zwrotki i opisuje 50 lat Kazimierzy Wielkiej.

???25 lat wsp??lnej drogi??? autorstwa ks. Andrzeja Biernackiego, w kt??rej jest zamieszczony fragment wiersza pt. ???Krak??w pod Kazimierz?? le??y mo??ci Ksi?????????, a w p????niejszych wersjach tej ksi????ki s?? jeszcze inne wiersze.

???Produkt lokalny od Wis??y po Spisz???. Publikacja wydana w wyniku og??oszonego w 2010 roku konkursu pn. ???Pomys?? na produkt lokalny???. W trakcie trwania imprezy zaprezentowano 98 oryginalnych pomys????w na produkt lokalny. Zdzis??aw Kuli?? do udzia??u w konkursie w kategorii przedsi??wzi??cie kulturalno- edukacyjne zg??osi?? tomik poezji pt. ???Wiersze dla potomnych???. Za udzia?? otrzyma?? pi??kn?? statuetk??. W tej publikacji wydrukowano wiersz pt. ???Moja ma??a Ojczyzna??? i ???Od Spisza a?? do Wis??y???.

Wiersze pana Zdzis??awa s?? publikowane w Internetowym Kurierze proszowickim, G??osie proszowickim, a fragmenty w kieleckim Echu Dnia i Tygodniku Ponidzia. Pi??kny wiersz ???Dwudziestolecie i Sztandar??? opublikowany zosta?? w miesi??czniku wydanym przez Zarz??d G????wny PZHGR i DI z siedzib?? w Tarnowie. Kilka wierszy zosta??o opublikowane w tygodniku ???Angora??? w tym jeden z nich pt. ???Czas???. Bardzo cz??sto s?? odczytywane na uroczysto??ciach organizowanych z okazji r????nych okoliczno??ci.

W roku 2017 wyda?? pierwsz?? swoj?? ksi????k?? pisan?? proz?? pt.??? WSPOMNIENIA-

HISTORIA PEWNEGO ZEGARA???. Trzysta siedemdziesi??cio sze??cio stronicowa ksi????ka zawiera oko??o sto zdj???? odpowiadaj??cych opisywanej sytuacji i oko??o pi????dziesi??t wierszy.

Jest to cykl wspomnie?? z lat 1961 do 2012 z ??ycia gminnego, kt??re toczy si?? wok???? zegara z 1956 roku. Wydarzenia zwi??zane s??, najpierw z Gromadzk?? Rad?? Narodow?? w Donosach, a p????niej po zlikwidowaniu jej z terenem gminy Kazimierza Wielka, kt??ra istnieje do dzi??.

Dwudziestego trzeciego lutego 2018 roku autor odebra?? statuetk?? i dyplom cz??owieka roku 2017 w dziedzinie kultura. Ostatnio pracowa?? nad ksi????k?? pt. Przygody Franka karierowicza, a wolne chwile wype??nia pisaniem wierszy o tematyce r????nej. Sztandarowym jego dzie??em jest wiersz pt. Narodzona na nowo, po??wi??cony setnej rocznicy odzyskania przez Polsk?? niepodleg??o??ci.

Z tej to okazji zorganizowa?? posadzenie na obrze??ach parku zabytkowego w Donosach d??bu 100. lecia z grup?? emeryt??w z kazimierskiego Oddzia??u Zwi??zku w kt??rym to wydarzeniu udzia?? wzi??li starosta kazimierski Jan Nowak i burmistrz Kazimierzy Wielkiej Adam Bodzioch.

Ponadto Zdzis??aw Kuli?? ma jeszcze wiele innych mniejszych lub wi??kszych osi??gni????. Wymieni?? jednak jeszcze jedno z nich.

Ostatnio Pan Zdzis??aw pr??bowa?? nawet gry na tr??bce, gdy?? chcia?? od??wie??y?? swoj?? przygod?? z instrumentami d??tymi z lat m??odo??ci. Ot???? w wieku 18 lat uczy?? si?? gra?? w cukrownianej orkiestrze d??tej w Kazimierzy Wielkiej. Z du??ym powodzeniem gra?? na rogu czyli waltorni, ale wyjazd do pracy w Nowej Hucie pod Krakowem pokrzy??owa?? mu te zamiary.

Jego dzia??alno???? nie wpisuje si?? w prac?? zawodow?? i nie osi??ga sukces??w dzi??ki pracy zawodowej. Ca??a jego dzia??alno???? jest wykonywana z wielk?? pasj??, spo??ecznie. Po??wi??ca sw??j czas, a cz??sto i pieni??dze.
                </pre>
                </div>
            ';
        }
    }
}


?>

