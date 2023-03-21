<?php
session_start();

if (($_SESSION["login"]=="principal")) {

}else{
        header("Location: 0316_A1103307_error.php"); 
    }


?>
<html>
    <head>
        <meta charset="UTF-8">
        
    </head>
    <body >
    
    歡迎進入校長網頁<br>
    將網址中的principal更改為teacher即可進入老師網頁<br>
    
       
    </body>
</html>