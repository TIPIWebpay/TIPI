<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
</body>
</html>
<?php


include ("../conexion.php");

$fecha = htmlentities($_POST['fecha_video']);
$comprador = htmlentities($_POST['comprador_video']);
$vendedor = htmlentities($_POST['vendedor_video']);
$calidad = htmlentities($_POST['calidad_video']);
$hora_inicio = htmlentities($_POST['hora_inicio']);
$hora_termino = htmlentities($_POST['hora_termino']);
$comentario = htmlentities($_POST['comentario_video']);





class videoConferencia {
	
	var $fechaV;
	var $compradorV;
	var $vendedorV;
	var $calidadV;
	var $hora_inicioV;
	var $hora_terminoV;
	var $comentarioV;
	
	
	
	public function register(  $fecha,$comprador,$vendedor,$calidad,$hora_inicio,$hora_termino,$comentario){
		
		
		$this->fechaV = $fecha;
		$this->compradorV =$comprador;
		$this->vendedorV = $vendedor;
		$this->calidadV = $calidad;
		$this->hora_inicioV = $hora_inicio;
		$this->hora_terminoV = $hora_termino;
		$this->comentarioV =$comentario;
	
		
		
					$config = new config; 
					$config->conexion();
			
			
		
		
					$insert = sprintf("INSERT INTO VideoConferencia (fecha,comprador,vendedor,calidad,hora_inicio,hora_termino,comentario) value('%s','%s','%s','%s','%s','%s','%s')", $this->fechaV,$this->compradorV,$this->vendedorV,$this->calidadV,$this->hora_inicioV,$this->hora_terminoV,$this->comentarioV);
					
					
					$qry = mysql_query($insert);
					 if(mysql_affected_rows())
                        {
                     	         echo "la video conferencia a sido integrada al registro existosamente.";
                       	} 
                        		else
                        {
                       		     echo "Error Ingresando datos"; 
                       
					    }
                   				 exit;

				
				
						}
				}
		
		//aqui tengo que ver que pasa, no me acuerdo por que va esto
	
	 $registrando = new registro_usuarios();
    $registrando->register($usuario, $password, $mail, $nombre);  
?>
