<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>


<?php


include ("../conexion.php");

$usuario = htmlentities($_POST['usuario']);
$contraseña = htmlentities($_POST['contraseña']);
$nombre = htmlentities($_POST['nombre']);
$apellido = htmlentities($_POST['apellido']);
$direccion = htmlentities($_POST['direccion']);
$correo = htmlentities($_POST['correo']);
$fechas_naciemiento = htmlentities($_POST['fechas_nacimiento']);
$telefono = htmlentities($_POST['telefono']);



class usuario {
	
	var $Usuario;d
	var $Contrasena;
	var $Nombre;
	var $Apellido;
	var $Direccion;
	var $Correo;
	var $Fecha_N;
	var $Tono;
	
	public function register( $usuario,$contraseña,$nombre,$apellido,$direccion,$correo,$fechas_naciemiento,$telefono){
		
		
		$this->Usuario = $usuario;
		$this->Contrasena =md5($contraseña);
		$this->Nombre = $nombre;
		$this->Apellido = $apellido;
		$this->Direccion = $direccion;
		$this->Correo = $correo;
		$this->fecha_N =$fechas_naciemiento;
		$this->Fono =$telefono;
		
		
					$config = new config; 
					$config->conexion();
			
			
					$check = sprintf("SELECT Usuario from usuario WHEN Usuario = '%s'", $this->Usuario);
					$qry = mysql($check);
			
	 if (mysql_num_rows($qry)) 
	                {
    		                echo "Lo sentimos, el nombre de usuario ya esta registrado.<br />";
            		        mysql_free_result($qry);
                   		    exit;
                	} 	else 
                {
					$insert = sprintf("INSERT INTO usuario (Usuario,Contraseña,Nombre,Apellido,Direccion,Correo,fechas_N,fono) value('%s','%s','%s','%s','%s','%s','%s','%s')", $this->Usuario,$this->Contraseña,$this->Nombre,$this->Apellido,$this->Direccion,$this->Correo,$this->fechas_N,$this->Fono );
					
					
					$qry = mysql_query($insert);
					 if(mysql_affected_rows())
                        {
                     	         echo "El Usuario $this->user se Registro Correctamente";
                       	} 
                        		else
                        {
                       		     echo "Error Ingresando datos"; 
                       
					    }
                   				 exit;

				
				
						}
				}
		}
		
	
	 $registrando = new registro_usuarios();
    $registrando->register($usuario, $password, $mail, $nombre);  
?>









</body>
</html>