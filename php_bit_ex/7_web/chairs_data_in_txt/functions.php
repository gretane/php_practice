<?php

init();

// init
function init() {
    if(!file_exists("./data.txt")) {
        file_put_contents("./data.txt", "[]");
        file_put_contents("./id.txt", 0);
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
        
    foreach(getData() as $chair) {
        if ($_GET['id'] == $chair['id']) {
            return $chair;
        }
    }
    
}

function getData(){
    $array = json_decode( file_get_contents('./data.txt'), 1);
    foreach ($array as &$entry) {
        $entry = (array) $entry;
    }
    return $array;
}
function setData($array){
    file_put_contents('./data.txt', json_encode($array));
}

function newId(){
    $id = file_get_contents('./id.txt') ;
    $id++;
    file_put_contents('./id.txt',$id);
    return $id;
}


//store
function store() {
    $data = getData();
    $chair['id'] = newId();
    $chair['name'] = $_POST['name'];
    $chair['legs'] = $_POST['legs'];
    $chair['foldable'] = $_POST['foldable'];
    $chair['chairs_left'] = $_POST['chairs_left'];

    $data[] = $chair;
    setData($data);

}

//destroy
function destroy() {
    $data = getData();
    foreach($data as $key => $chair) {
        if ($_POST['id'] == $chair['id']) {
            unset($data[$key]);
            setData($data);
            return;
        }
    }
}

//update
function update() {
    $data = getData();
    foreach($data as &$chair) {
        if ($_POST['id'] == $chair['id']) {
            $chair['name'] = $_POST['name'];
            $chair['legs'] = $_POST['legs'];
            $chair['foldable'] = $_POST['foldable'];
            $chair['chairs_left'] = $_POST['chairs_left'];
            setData($data);
            return;
        }
    }

}
