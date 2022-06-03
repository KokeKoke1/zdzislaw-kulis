<?php



require_once("app/functions/main.php");

$site = new Main;
$site->createSite("nav");

if (isset($_GET["articles"])) {
    $site->createNavigation("Artykuły");
    $site->createSite("articles");
} else if (isset($_GET["biography"])) {
    $site->createNavigation("Biografia");
    $site->createSite("biography");
} else if (isset($_GET["poems"])) {
        $site->createNavigation("Wiersze");
        $site->createSite("poems");
} else if (isset($_GET["gallery"])) {
    if ($_GET["gallery"] != "") {
        $site->createNavigation("Galeria", "gallery", "Galeria: ".$_GET["gallery"]);
        $site->createGalery($_GET["gallery"]);
    } else {
        $site->createNavigation("Galeria");
        $site->createSite("gallery");
    }
} else if (isset($_GET["article"])) { 
    if ($_GET["article"] != "") {
        $site->createNavigation("Artykuły", "articles", "Artykuł: ".$_GET["title"]);
        $site->createArticle("articles");
    } 
} else if (!isset($_GET[""])) {
    $site->createSite("index");
}
$site->createSite("footer");
?>

