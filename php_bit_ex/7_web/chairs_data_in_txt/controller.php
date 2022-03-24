<?php

include('./functions.php'); 

//fill form for edit
if ('GET' == $_SERVER['REQUEST_METHOD'] && ($_GET['id'] ?? false)) {
    $chair = edit();
}    

//store
if ('POST' == $_SERVER['REQUEST_METHOD'] && !isset($_POST['id'])) {  //&& isset($_POST['name'])
    
    store();
    header('Location: ./index.php');
    die;
}
//destroy
if ('POST' == $_SERVER['REQUEST_METHOD'] && !isset($_POST['name'])) {
    destroy();
    header('Location: ./index.php');
    die;
}

//update
if ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['id'])) { // && isset($_POST['name'])
    update();
    header('Location: ./index.php');
    die;
}

