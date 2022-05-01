<?php
$articles = ["first post", "second post", "third post"];
foreach ($articles as $article) {
    echo $article . ",";
    echo "\n";
}

foreach ($articles as $index => $article) {
    echo $index . "-" . $article;
    echo "\n";
}
