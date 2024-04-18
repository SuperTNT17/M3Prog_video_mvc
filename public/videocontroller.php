<?php




//include de videocontext.php, letop doe dit once!

include_once "db/videocontext.php";

// haal id uit de $_GET
$id = $_GET["id"];

// maak een variable `model`
// vul (assign) `model` het resultaat van `getVideoById`
$model = getVideoById($id);

//include hier videoview.php
include "view/videoview.php";


