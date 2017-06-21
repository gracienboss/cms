<?php
$content ="
    <h1>coucou</h1>
";
require_once('../Controllers/IndexController.php');
$index = new Index('accueil', $content);
$index->display();
