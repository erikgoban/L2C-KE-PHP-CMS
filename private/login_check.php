<?php

require_once dirname(__FILE__).'/../framework/helpers.php';

if(!empty($_POST)){ 
    if (!empty($_POST['email']) && !empty($_POST['password'])){
        $user = db_single("SELECT * FROM Users WHERE email='".$_POST['email']."'");
        if(!empty($user)){
            if ($user->password==$_POST['password']){
                echo "login sucess <3";
            } else { 
                echo "nespravne heslo";
            } 
        } else { echo "neexistujuci pouzivatel";
                
        }
    } else { echo "chybajuce parametre";
                
    }
} else { echo "post empty";
                
            }



?>

