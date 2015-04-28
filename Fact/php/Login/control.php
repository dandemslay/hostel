<?php
include("conexion.php");

/*
https://www.youtube.com/watch?v=4aACkVVPGUo

CREATE TABLE `empresas`.`emp_t_usuarios` (
  `id_usuario` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` TEXT NULL,
  `password` TEXT NULL,
  `privilegios` INT(11) NULL,
  PRIMARY KEY (`id_usuario`));
  
  INSERT INTO `empresas`.`emp_t_usuarios` (`nombre`, `usuario`, `password`, `privilegios`) VALUES ('Administrador', 'admin', md5('Admin.123'), '2');
INSERT INTO `empresas`.`emp_t_usuarios` (`nombre`, `usuario`, `password`, `privilegios`) VALUES ('Manager', 'mang', md5('Manage.123'), '1');
INSERT INTO `empresas`.`emp_t_usuarios` (`nombre`, `usuario`, `password`, `privilegios`) VALUES ('Editor', 'edit', md5('Edit.123'), '0');
  
*/
$usuario = $_POST['usuario'];
$password = $_POST['password'];

$query = "SELECT * FROM emp_t_usuarios WHERE usuario = '".$usuario."' AND password = md5('".$password."')";
$result = mysql_query($query);
if (!$result) die ("Database access failed: " . mysql_error());
$rows = mysql_num_rows($result);
echo ($rows);
// Close the data base connection
mysql_close($db_server);

function get_post($var)
{
    return mysql_real_escape_string($_POST[$var]);
}
?>