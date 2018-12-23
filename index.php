<?php    
    require_once 'function1.php';   
    $res=db($_POST['login'],$_POST['password1']);  
    echo $res;      
    if( $res == 1 || $res == 3)    
    {                
        header('Location: admin.php');        
        die();                
    } 
    elseif( $res > 3 ) {
        header('Location: function.php');        
        die();
    }
    // elseif( $res < 5 || $res > 3) {
    //     header('Location: admin.php');        
    //     die();                
    // }
    elseif($_POST['login']!='' && $_POST['password1']!='')
    {
        {             
            echo "<script>alert('Неправильный Логин или пароль!');</script>"; 
        }
    }
    else{
        echo "<script>alert('Введите логин и пароль!');</script>"; 
    }        
    include 'index.html';
?>