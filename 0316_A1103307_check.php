<?php
session_start();

$principalID="aa";  
$principalPWD="1111";

$teacherID="bb";  
$teacherPWD="2222";

$stuID="cc";  
$stuPWD="3333";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($principalID==$id)&&($principalPWD==$pwd)){
   $_SESSION["login"]="principal";
   header("Location: 0316_A1103307_principal.php"); 
}elseif(($teacherID==$id)&&($teacherPWD==$pwd)){
   $_SESSION["login"]="teacher";
    header("Location: 0316_A1103307_teacher.php"); 
}elseif(($stuID==$id)&&($stuPWD==$pwd)){
   $_SESSION["login"]="stu";
    header("Location: 0316_A1103307_stu.php");  
}else{ 
   $_SESSION["login"]="No";
   header("Location: 0316_A1103307_fail.php");
}