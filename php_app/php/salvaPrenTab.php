<?php
$con = new mysqli("localhost", "root", "", "elettrica");
/*Controlla se il codice di errore è diverso da 0*/
if ($con->connect_errno)
    die("Errore connessione database " . $con->connect_errno . " " . $con->connect_error);
$turno=$_POST["turno"];
$id=$_POST["id"];
//$data=date("Y-m-d",strtotime($data));
if($turno==1)
    $sql = "update testdrive set t1 = 1 where idPrenota = $id";
else if($turno==2)
    $sql = "update testdrive set t2 = 1 where idPrenota = $id";
else
    $sql = "update testdrive set t3 = 1 where idPrenota = $id";
//echo "<script>console.log('pass db: " . $sql . "' );</script>";
/*Il metodo query lancia la query sql e restituisce il recordset corrispondente*/
$rs = $con->query($sql);
/*Controlla se il recordset esiste o no cioè se ci sono stati degli errori*/
if (!$rs)
    die("Errore nella query " . $con->errno . " " . $con->error);
else
    echo("OK");
$con->close();
?>