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

$nombreP = htmlentities($_POST['nombre_producto']);
$precioP = htmlentities($_POST['precio_producto']);
$cantidadP = htmlentities($_POST['cantidad_producto']);
$caracteristicasP = htmlentities($_POST['caracteristica']);
$imagenP = htmlentities($_POST['imagen']);
$ubicacionP = htmlentities($_POST['ubicacion_producto']);
$fechaP = htmlentities($_POST['fechas_publicacion']);
$categoriaP = htmlentities($_POST['categoria_producto']);




class producto {
	
	var $Nombre;
	var $precio;
	var $cantidad;
	var $caracteristica;
	var $imagen;
	var $ubicacion;
	var $fecha;
	var $categoria;
	
	public function register( $nombreP,$precioP,$cantidadP,$caracteristicasP,$imagenP,$ubicacionP,$fechaP,$categoriaP){
		
		
		$this->Nombre = $nombreP;
		$this->precio =$precioP;
		$this->cantidad = $cantidadP;
		$this->caracteristica = $caracteristicasP;
		$this->imagen = $imagenP;
		$this->ubicacion = $ubicacionP;
		$this->fecha =$fechaP;
		$this->categoria =$categoriaP;
		
		
					$config = new config; 
					$config->conexion();
			
			
		
		
					$insert = sprintf("INSERT INTO Producto (nombre_producto,precio_producto,cantidad_producto,caracteristica_producto,imagenes_productos,ubicacion_producto,fecha_producto,categoria_producto) value('%s','%s','%s','%s','%s','%s','%s','%s')", $this->Nombre,$this->precio,$this->cantidad,$this->caracteristica,$this->imagen,$this->ubicacion,$this->fecha,$this->categoria );
					
					
					$qry = mysql_query($insert);
					 if(mysql_affected_rows())
                        {
                     	         echo "El Producto se Registro Correctamente";
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
