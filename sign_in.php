<?php 
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "alan";
       $connection = mysql_connect($servername, $username, $password) or die("Connection_error");
       mysql_select_db($dbname) or die("cannot select DB"); 
       $login = $_POST['login'];
       $password = $_POST['password'];
       $result = mysql_query("SELECT * FROM users WHERE login = '$login' AND password = '$password'");
       $array=mysql_fetch_array($result);
       if(empty($array['login']) or $login == "" or $password == "")
        {
   	     header ('Location: index.php');
        }
        else 
        {
   	     header ('Location: idexe.php');
        }
?>