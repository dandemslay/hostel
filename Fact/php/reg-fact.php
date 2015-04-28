<?
    if(!$Identification || !$client || !$room || !$amount || !$commments )
        {
            echo ""
                ."";
                exit;
        }

    $foo = addslashes($foo);
    $num = addslashes($num);
    $Identification = addslashes($Identification);

    $client = addslashes($client);
    $room = addslashes($room);
    $foo = addslashes($foo);
    $amount = addslashes($amount);
    $commments = addslashes($commments);
        
    requiere_once 'dblog.php';

    $connection =
    new mysqli($db_hostname, $db_username, $db_password, $db_database);
    if ($connection->connect_error) die($connection->connect_error);

    $query = "INSERT INTO t_registry values ('".$foo."','".$num."','".$Identification."','".$client."','".$room."','".$amount."','".$commments."')";
    $result = $connection->query($query);
    if (!$result) die($connection->error);

?>