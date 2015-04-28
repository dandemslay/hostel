<?php
//optener el ultimo numero de factura
$nfact = "SELECT n_fact FROM sys_t_facts ORDER BY n_fact DESC LIMIT 1";
 // buscar registro por numero de factura
$brow_fact = "SELECT * FROM sys_t_facts WHERE n_fact = '".$nfact."'";

$brow_fact = "SELECT LAST_INSERT_ID(num) FROM t_registry";

//Buscar Factar por Cliente, fecha , Rango de Fecha, Mes, Ano

//Registrar la informacion de la factura #Factura, Fecha, Cliente, producto, sub total, desc, iv, Monto t, Commentario 

//Registar el detralle de la Factura Productos, Cantidad, Monto/U

//Status de Factura Contado, Credito, Pagada, Anulada, Pandiente

requiere_once "dblog.php";
$connection =
    new mysqli($db_hostname, $db_username, $db_password, $db_database);
if ($connection->connect_error) die($connection->connect_error);

$query = "SELECT id FROM hostel-reg.t_registry ORDER BY id DESC LIMIT 1 t_registry ";
$result = $connection->query($query);
if (!$result) die($connection->error);
?>