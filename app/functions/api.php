<?php

$content = trim(file_get_contents("php://input"));
$content = json_decode($content, true);
$con = mysqli_connect("54.38.50.59", "www7941_strona", "GZlTeXena4BgPYGvDGJJ", "www7941_strona");

if ($content["option"] == "getPosts") {
    $query = mysqli_query($con, "SELECT * FROM `poems`");
    while ($line = mysqli_fetch_assoc($query)) {
        $row[] = $line;
    }
    echo json_encode($row);
} else if ($content["option"] == "getArticles") {
    $query = mysqli_query($con, "SELECT * FROM `articles`");
    while ($line = mysqli_fetch_assoc($query)) {
        $row[] = $line;
    }
    echo json_encode($row);
}

?>