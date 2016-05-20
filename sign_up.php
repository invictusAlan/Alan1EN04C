<?php 

       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "alan";
       $connection = mysql_connect($servername, $username, $password) or die("Connection_error");
       mysql_select_db($dbname) or die("cannot select DB"); 
       $login = $_POST['login'];
       $password = $_POST['password'];
       $name = $_POST['name'];
       $surname = $_POST['surname'];
       
       mysql_query("INSERT INTO users (login, password, name, surname) VALUES ('$login', '$password', '$name', '$surname')");
       header('Location:idexe.php');
 ?>