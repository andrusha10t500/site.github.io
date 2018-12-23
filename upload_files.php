<?php
require_once 'connection.php';
$photo=array();
$int=0;
foreach($_FILES["pictures"] as $key => $error) {
    
    if($error == UPLOAD_ERR_OK) {

        $tmp_name = $_FILES["pictures"][$key];
        
        $name = basename($_FILES["pictures"][$key]);
        
        $bool=move_uploaded_file($tmp_name, "./images/$name.jpg"); 
        
        $photo[$int]="./images/$name.jpg";
        $int++;
    }          
}
$mysqli = new mysqli($host,$user,$password,$database);
    echo $photo[2];
    // for($i=0; $i<=count($photo); $i++){
    $mysqli->query("insert into mix_podelki (photo,users,time,note) values ('".$photo[2]."','zhora','".date("Y-m-d H:i:s")."','photo');");
        // if(!$res){
        //     echo 'не вышло';
        // }
    // }  
header("location: admin.php");
?>