<?php
session_start();

if (($_SESSION["login"]=="stu") ||($_SESSION["login"]=="teacher")) {

}else{
        header("Location: 0316_A1103307_error.php"); 
    }


?>
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body >
    
    歡迎進入學生網頁<br>
    
       
    </body>
</html>