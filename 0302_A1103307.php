<?php
if(isset($_POST["name"])){
    $name=$_POST["name"];
    $ID=$_POST["ID"];
   echo "你的名字是:".$name."<br/>";
   echo "你的學號是:".$ID."<br/>";
   echo "參加意願:";
   if(isset($_POST["yes"])){
    $yes=$_POST["yes"];
    echo "有<br/>";
    }
    
    if(isset($_POST["no"])){
        $no=$_POST["no"];
        echo "沒有<br/>";
    }
    echo "有沒有繳系費:";
    if(isset($_POST["yes"])){
        $yes=$_POST["yes"];
        echo "有<br/>";
    }
    if(isset($_POST["no"])){
        $no=$_POST["no"];
        echo "沒有<br/>";
    }
    echo "吃葷吃素:";
    if(isset($_POST["meat"])){
        $meat=$_POST["meat"];
        echo "葷<br/>";
    }
    if(isset($_POST["vegetable"])){
        $vegetable=$_POST["vegetable"];
        echo "素<br/>";
    }
}else{
    echo "資料輸入錯誤";
}


?>