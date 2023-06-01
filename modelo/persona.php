<?php
require "conexion/conexionBase.php";
 class Personas {
    private $username;
    private $email;
    private $pass1;
    private $con;

    function __Construct() {
    $this->username="";
    $this->email="";
    $this->pass1="";
    $this->pass2="";
    $this->con=new conexionBase();
    $this->con2=new conexionBase();
    $this->con3=new conexionBase();
    }
    function Asignar ($nom, $valor){
        $this->$nom=$valor;
    }

    function prueba(){
        echo $this->username;
        echo $this->email;
        echo $this->pass1;
        echo $this->pass2;
    }


function validarusuario2()
    {
        $this->con2->CreateConnection();
        $sql = "select * from personas where username ='$this->username'";
       $tesp=$this->con2->ExecuteQuery($sql);
       $ye=$this->con2->GetCountAffectedRows($tesp);
       if($ye>0){
                    echo json_encode(array('error' => 'no'));
                    echo "<br>";
                    echo json_encode(array('Detalles'=>"El usuario existe"));

                }
        else{
            
            echo json_encode(array('error' => 'si'));
            echo "<br>";
            echo json_encode(array('Detalles'=>"El usuario no existe"));

            }
       }

    function validarpass1(){
        $this->con3->CreateConnection();
        
        $sql = "Select * from personas where username='$this->username' and pass1='$this->pass1'";
        $ps= $this->con3->ExecuteQuery($sql);
        $fe=$this->con3->GetCountAffectedRows($ps);
        if($fe>0){
            echo json_encode(array('Inicio' => ': clave Correcta'));
        }
        else{
            echo json_encode(array('Inicio' => ': clave incorrecta'));
            }
            

    }

    function validarusuario()
    {
        
        $this->con->CreateConnection();
        $sql = "select * from personas where username ='$this->username'";
       $resp= $this->con->ExecuteQuery($sql);
       $re=$this->con->GetCountAffectedRows($resp);
       if($re>0){
                    echo json_encode(array('error' => 'Si'));
                    echo "<br>";
                    echo json_encode(array('Detalles'=>"El usuario existe"));
                }
        else{
                $this->registrarPersonas();
            }
       }


       function registrarPersonas(){
        
        $this->con->CreateConnection();
        $pass1=md5($this->pass1);
        $sql = "insert into personas (username,email,pass1,pass2) values 
        ('$this->username','$this->email','$this->pass1','$this->pass2')";
        $resp=$this->con->ExecuteQuery($sql);
        if($resp){
            echo json_encode(array('error' => 'No'));
            echo "<br>";
            echo json_encode(array('Registro exitoso'));


        }

    }
    function mostrar(){
        $this->con->CreateConnection();
        $sql = "select * from personas";
        $resp=$this->con->ExecuteQuery($sql);
        $re=$this->con->GetCountAffectedRows($resp);
        if ($re>0){
            while($row=mysql_fetch_assoc($resp)){
                echo $row['nombres'];
            }
        }
    }


   
    


}