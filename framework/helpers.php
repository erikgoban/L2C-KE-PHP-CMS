<?php
function db_connect(){
    require_once dirname(__FILE__).'/../config/database.php';
    return mysqli_connect($database["host"], $database["user"], $database["pass"], $database["name"], $database["port"]);
}

function db_query($sql_string){
    $link = db_connect();
    return mysqli_query($link, $sql_string);
}

function db_select($sql_string){
    $result = db_query($sql_string);
    $data = [];

    while ($object = mysqli_fetch_object($result)){
        $data[] = $object;
        //array_push($data, $object);
    }
    return $data;
}

?>