<?php
$con = new mysqli("localhost", "root", "", "elettrica");
/*Controlla se il codice di errore è diverso da 0*/
if ($con->connect_errno)
    die("Errore connessione database " . $con->connect_errno . " " . $con->connect_error);
$codAuto=$_POST["idAuto"];
$codUt=$_POST["idUser"];
$turno=$_POST["turno"];
$data=$_POST["data"];
//$data=date("Y-m-d",strtotime($data));

if(strcmp($turno,"t1")==0)
    $sql = "INSERT INTO testdrive (data, t1, codAuto, codUtente) values (CAST('$data' AS DATE) , 1, $codAuto, $codUt)";
else if(strcmp($turno,"t2")==0)
    $sql = "INSERT INTO testdrive (data, t2, codAuto, codUtente) values (CAST('$data' AS DATE) , 1, $codAuto, $codUt)";
else
    $sql = "INSERT INTO testdrive (data, t3, codAuto, codUtente) values (CAST('$data' AS DATE) , 1, $codAuto, $codUt)";

/*Il metodo query lancia la query sql e restituisce il recordset corrispondente*/
$rs = $con->query($sql);
/*Controlla se il recordset esiste o no cioè se ci sono stati degli errori*/
if (!$rs)
    die("Errore nella query " . $con->errno . " " . $con->error);
else
    echo("OK");
$con->close();
?>