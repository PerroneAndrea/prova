<?php
    session_start();
    if(isset($_SESSION["user"]))
        echo($_SESSION["campionato"]);
    else
        echo("No Session");
    unset($_SESSION["campionato"]);
    session_unset();
    session_destroy();
?>