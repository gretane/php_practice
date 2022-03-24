<?php

init();

// init
function init() {

    session_start();

    if (!isset($_SESSION['chairs'])){
        $_SESSION['chairs'] = [];
        $_SESSION['id'] = 1;
    }

}

//edit
function edit() {
    
    //take id
    //check witch chair has the id
    //if the chair fits the id 
    //show it in the form as value=""
    //button "change" in stead of add
    //after changing it set the post value to the chair with the id 
        
    foreach($_SESSION['chairs'] as $key) {
        if ($_GET['id'] == $key['id']) {
            return $key;
        }
    }
    
}

//store
function store() {

    $chair['id'] = $_SESSION['id'];
    $chair['name'] = $_POST['name'];
    $chair['legs'] = $_POST['legs'];
    $chair['foldable'] = $_POST['foldable'];
    $chair['chairs_left'] = $_POST['chairs_left'];

    $_SESSION['id']++;
    $_SESSION['chairs'][] = $chair;

}

//destroy
function destroy() {
    foreach($_SESSION['chairs'] as $key => &$chair) {
        if ($_POST['id'] == $chair['id']) {
            unset($_SESSION['chairs'][$key]);
            return;
        }
    }
}

//update
function update() {
    foreach($_SESSION['chairs'] as &$chair) {
        if ($_POST['id'] == $chair['id']) {
            $chair['name'] = $_POST['name'];
            $chair['legs'] = $_POST['legs'];
            $chair['foldable'] = $_POST['foldable'];
            $chair['chairs_left'] = $_POST['chairs_left'];
            return;
        }
    }

}