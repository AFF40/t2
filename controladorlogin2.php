<?php
require "modelo/persona.php";
$per=new Personas();

$username=htmlspecialchars($_POST["username"]);
$pass1=htmlspecialchars($_POST["pass1"]);
$per->Asignar("username",$username);
$per->Asignar("pass1",$pass1);


$per->validarusuario2();
echo "<br>";
$per->validarpass1();
