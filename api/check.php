<?php include_once "./db.php";
if($Admin->count($_POST)>0){
    $_SESSION['login']=$_POST['acc'];
    to("../back.php");
}else{
    to("../index.php?do=login&error=帳號或密碼輸入錯誤");
}