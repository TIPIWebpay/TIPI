<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php
 class config{
        function conexion(){
             $server='localhost';
             $database='usuario';
             $db_user='root';
             $db_pass='VWP';
             mysql_connect($server,$db_user,$db_pass);
             mysql_select_db($database);
        }
    } 

?>
</body>
</html>