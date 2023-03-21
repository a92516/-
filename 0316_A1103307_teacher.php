<?php
session_start();

if (($_SESSION["login"]=="teacher") || ($_SESSION["login"]=="principal")) {

}else{
        header("Location: 0316_A1103307_error.php"); 
    }


?>
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body >
    
    歡迎進入老師網頁<br>
    將網址中的teacher更改為stu即可進入學生網頁<br>
    
       
    </body>
</html>