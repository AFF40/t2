<?php
include "modelo/persona.php";
$per=new Personas();

$username=htmlspecialchars($_POST["username"]);
$email=htmlspecialchars($_POST["email"]);
$pass1=htmlspecialchars($_POST["pass1"]);
$pass2=htmlspecialchars($_POST["pass2"]);

if($pass1!=$pass2){
    alert("las contraseñas no coinciden");
}
else{
    
    $per->asignar("username",$username);
    $per->asignar("email",$email);
    $per->asignar("pass1",$pass1);
    $per->asignar("pass2",$pass2);
    $per->validarusuario();

}
