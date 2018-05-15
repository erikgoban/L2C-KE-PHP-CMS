<?php

require_once dirname(__FILE__).'/../framework/helpers.php';
$result = db_select("SELECT * FROM pages");

foreach ($result as $page){
    echo $page->title."-".$page->content; 
} 
?>