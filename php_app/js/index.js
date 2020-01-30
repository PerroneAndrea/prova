"use strict";
let vetAuto=new Array();
let idPrec=0;
$(document).ready(function(){
    send_request("php/auto.php","POST","",caricaAuto);
    $("#selAuto").on("change",visPrenotazioni);
    $("#secPrenotazioni").hide();
    $("#btnLogin").on("click",login);
    $("#pError").hide();
    $("#btnPrenota").on("click",prenotaForm);
    $("#moduloPren").hide();
    $("#btnSalva").on("click",salvaPren);
});

function login() {
    $("#pError").show();
}

function impostaSessione() {
    send_request("php/setSession.php","POST","",sessionSettata)
}

function sessionSettata() {
    alert("sessione impostata");
}

function caricaP2() {
    window.location="p2.php";
}

function caricaAuto(responseText) {
    let jsonAuto=JSON.parse(responseText);
    let combo=$("#selAuto");
    for(let i=0;i<jsonAuto.length;i++) {
        combo.append(new Option(jsonAuto[i]["marca"] + " " + jsonAuto[i]["modello"], jsonAuto[i]["codAuto"]));
        vetAuto[jsonAuto[i]["codAuto"]]=jsonAuto[i]["marca"]+";"+jsonAuto[i]["modello"]+";"+jsonAuto[i]["potenza"];
    }
    combo.val([]);//messa qua sono certo che viene fatto in sequenza al caricamento della combo
}

function visPrenotazioni() {
    send_request("php/prenotazioni.php","POST","id="+$("#selAuto").val(),caricaPrenotazioni);
}

function caricaPrenotazioni(responseText) {
    let tBoby=$("#tBodyPrenotazioni");
    tBoby.html("");
    $("#secPrenotazioni").show();
    if(responseText=="Nessuna prenotazione per l'auto selezionata"){
        //Form di inserimento prenotazione
        let tr=$("<tr align='center'></tr>");
        let newRow="<td colspan='5'>" + responseText + "</td>";
        tr.append(newRow);
        tBoby.append(tr);
    }
    else{
        //alert(responseText);
        let jsonAuto=JSON.parse(responseText);
        for(let i=0;i<jsonAuto.length;i++){
            let tr=$("<tr align='center' id='" + jsonAuto[i]["idPrenotazione"] + "r'></tr>");
            let newRow="<td>" + jsonAuto[i]["idPrenota"] + "</td><td id='td" + jsonAuto[i]["idPrenota"]  + "'>" + jsonAuto[i]["data"] + "</td>";
            tr.append(newRow);
            let id=jsonAuto[i]["idPrenota"];
            //alert(id);
            let td=$("<td></td>");
            if(jsonAuto[i]["t1"]==1)
                td.css("background-color","red");
            else{
                td.css("background-color","lightgreen");
                td.on("click",function () {
                    //alert("t1");
                    $(this).css("background-color","red");
                    //$(this).html("PRENOTATO");
                    updatePren(id,1);
                });
            }
            tr.append(td);
            let td1=$("<td></td>");
            if(jsonAuto[i]["t2"]==1)
                td1.css("background-color","red");
            else{
                td1.css("background-color","lightgreen");
                td1.on("click",function () {
                    //alert("t2");
                    $(this).css("background-color","red");
                    //$(this).html("PRENOTATO");
                    updatePren(id,2);
                });
            }
            tr.append(td1);
            let td2=$("<td></td>");
            if(jsonAuto[i]["t3"]==1)
                td2.css("background-color","red");
            else{
                td2.css("background-color","lightgreen");
                td2.on("click",function () {
                    //alert("t3");
                    $(this).css("background-color","red");
                    //$(this).html("PRENOTATO");
                    updatePren(id,3);
                });
            }
            tr.append(td2);
            tBoby.append(tr);
            $("#imgAuto").attr("src","img/"+$("#selAuto").val()+".jpg");
            let datiAuto=vetAuto[$("#selAuto").val()].split(';');
            $("#modello").html("Modello: " + datiAuto[1]);
            $("#marca").html("Marca: " + datiAuto[0]);
            $("#potenza").html("Potenza: " + datiAuto[2] + "kw");
        }
    }
}

function updatePren(id,m) {
    //alert(id + "  " + m);
    //alert($("#td"+id).html());
    send_request("php/salvaPrenTab.php","POST","turno="+m+"&id="+id,confermaPren);
}

function prenotaForm() {
    $("#moduloPren").show();
}

function salvaPren() {
    //alert("data="+$("#data").val()+"&mattina="+$("#radioM").val()+"&idDott="+$("#selAuto").val()+"idPaz=1");
    send_request("php/salvaPren.php","POST","data="+$("#data").val()+"&turno="+$('input[name=radioT]:checked').val()+"&idAuto="+$("#selAuto").val()+"&idUser=1",confermaPren);
}

function confermaPren(responseText) {
    if(responseText=="OK") {
        //alert(responseText);
        //location.reload();
        //window.location.reload(true);
        //self.location.reload();
        visPrenotazioni();
    }
    else
        alert(responseText);
}