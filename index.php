<?php
session_start();
if(!isset($_SESSION['LS'])){
    $_SESSION['LS'] =   false;
}
else{
    $_SESSION['LS'] =   true;
}
$LS = $_SESSION['LS'];
if($LS  ==  false){
    //echo 'if';
    include_once 'newHomePage.php';
}
else{
    //echo 'else';
    include_once 'localStorageReflector.php';
}
/*
echo '<pre>';
print_r($_SESSION);
?>
*/