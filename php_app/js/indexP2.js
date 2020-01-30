$(document).ready(function(){
    send_request("php/ctrl_session.php","POST","",gestioneSessione);
});

function gestioneSessione(responseText) {
    //alert(responseText);
    if(responseText=="No Session"){
        alert("Non hai effettuato l'accesso. Sarai reindirizzato sulla Home Page");
        window.location="index.php";
    }
    else{
        $("#tipoCampionato").html($("#tipoCampionato").html() + ": " + responseText);
    }
}