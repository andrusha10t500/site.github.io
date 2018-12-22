<?php    
    require_once 'function1.php';    
    if(db($_POST['login'],$_POST['password1'])!="")    
    {                
        header('Location: function.php');        
        die();        
        // require_once('function.php');
    }
    elseif(db($_POST['login'],$_POST['password1'])<3)
    {
        
    }
    elseif($_POST['login']!='' && $_POST['password1']!='')
    {
        {             
            echo "<script>alert('Неправильный Логин или пароль!');</script>"; 
        }
    }
    else{
        echo "<script>alert('Введите логин и пароль!');</script>"; 
    }        
    require_once('index.html');
?>