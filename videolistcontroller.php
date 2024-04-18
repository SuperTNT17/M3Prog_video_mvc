<?php



//include de videocontext.php, letop doe dit once!

include_once "db/videocontext.php";
// maak een variable `model`

// vul (assign) `model` het resultaat van `createStubData`
$model[] = createStubData();

//include hier videolistview.php
include "view/videolistview.php";

