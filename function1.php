<?php 
    function db($userDB1,$passwordDB1){        
        require_once 'connection.php';        
        $mysqli = new mysqli($host,$user,$password,$database);
        if($mysqli -> connect_errno) {
            echo 'не успешно' . $mysqli->connect_errno . " " . $mysqli->connect_error . "<br />";
        }
        else {
            echo 'успешно <br />';
        }        
        // #echo "SELECT id FROM mix_users where username='".$userDB1."' and password='".$passwordDB1."';";
        $res=$mysqli->query("SELECT id FROM mix_users where username='".$userDB1."' and password='".$passwordDB1."';");   
        // echo date("Y-m-d H:i:s");     
        // $res=$mysqli->query("insert into mix_users (username,password,time) values ('Maria','qwerty','".date("Y-m-d H:i:s")."');");         
        if(!$res){
            echo 'не удалось выполнить запрос <br />';
        }
        else {
            echo 'успешно<br />';
        }
        $row=$res->fetch_assoc();
        return $row['id'];
        // while($row=$res->fetch_assoc())
        // {
        //     echo $row['id']. "<br />";
        // }
        
    }

?>