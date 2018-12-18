<?php
require_once "data.php";
require_once "functions.php";

$pageContent = includeMarkupTemplateFile("templates/index.php",
    [
        "categories" => $categories,
        "lotsList" => $lotsList
    ]
);

$layoutContent = includeMarkupTemplateFile("templates/layout.php",
    [
        "content" => $pageContent,
        "title" => "Главная",
        "userName" => $userName,
        "userAvatar" => $userAvatar
    ]
);

print($layoutContent);
