<?php
include('../../libs/php/utility.php');
$pUser = $_POST['vUsuario'];
$pPass = $_POST['vPassword'];
$pBan = $_POST['vBandera'];
$pUsuario = 1014294468;
$pFecha = date("Y-m-d");
$pHora = date("H:i:s");

//PREPARANDO INSERT 
if ($_POST['vBandera'] == "1") {

    $qSql = "INSERT INTO `indexcod_0003`.`_0003109` (`usrxxxxx`,`passxxxx`,`regusrxx`,`regfecxx`,`reghorxx`,`regmfecx`,`regmhorx`,`regmusrx`, `regestxx`)  VALUES  (\"{$_POST['vUsuario']}\",\"{$_POST['vPassword']}\",\"{$pUsuario}\",\"{$pFecha}\",\"{$pHora}\",\"{$pFecha}\",\"{$hora}\",\"{$pUsuario}\" ) ";
    $rSql = mysql_query($qSql, $xConexion01);

    ?>
    <script type="text/javascript">
        window.location="http://107.190.139.42/~indexcod/analitica/forms/especiales/gerencia.php";
    </script>
    <?php

//ACA INICIA EL QUERY DEL SELECT 
}else if($_POST['vBandera'] == "2"){
        $qselec = mysql_query("SELECT `identxxx`, `usrxxxxx`, `passxxxx`, `regusrxx`, `regfecxx`, `reghorxx`, `regmfecx`, `regmhorx`, `regmusrx`, `regestxx` FROM `indexcod_0003`.`_0003109`;");
        while ($pResul = mysql_fetch_array($qselec)) {

                    $nId=$pResul["identxxx"];
                    $sUsr=$pResul["usrxxxxx"];
                    $sPass=$pResul["passxxxx"];

                    if ($sUsr == $_POST['vUsuario'] && $sPass == $_POST['vPassword'] ) {

                    ?>
                    <script type="text/javascript">
                    window.location="http://107.190.139.42/~indexcod/analitica/forms/especiales/administrador.php";
                    </script>
                    <?php
                     
                 }else{

                    ?>
                    <script type="text/javascript">
                        alert("USUARIO INCORRECTO");
                    </script>
                    <?php
                 }
             }
             }
?>
<!DOCTYPE html>
<html>
<head>
    <title>GERENCIA</title>
    <script type="text/javascript">
        function f_crear(){

            var sUsers = document.forms["frgrm"]["vUsuario"].value;
            var sPassw = document.forms["frgrm"]["vPassword"].value;

            if (sUsers == "") {

                    alert("Ingrese su Usuario");

            }else if (sPassw == "") {

                    alert("Ingrese su Password");

            }else {
                    document.forms["frgrm"]["vBandera"].value = "0";
                    document.forms["frgrm"].submit();
            }
        }
        function f_login(){
                var sUser = document.forms["frgrm"]["vUsuario"].value;
                var sPass = document.forms["frgrm"]["vPassword"].value;
                if (sUser == "") {
                    alert("Ingresa el Usuario");
                } else if (sPass == "") {
                    alert("Ingrese Password");
                }else {
                    document.forms["frgrm"]["vBandera"].value = "2";
                    document.forms["frgrm"].submit();
                }
        }
    </script>
    <style type="text/css">
        body{
            font-family: Arial;
            text-align: center;
            float: center;
            color : #06AAA9; 
            }


        #botonir {
            background-color: #06AAA9;
            border: none;
            color: white;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 8px;
            }
            #img{
                width: 40%;
            }
    </style>
</head>
<body>
<br><br><br>
    <img src="indexcode.jpg" align="center" id="img">
<form name="frgrm" method="post">
    <input type="hidden" name="vBandera"  id="vBandera" value="0">
    <h2>USUARIO</h2>
    <input id="vCampou" type="text" name="vUsuario">
    <h2>PASSWORD</h2>
    <br>
    <input id="vCampp" type="password" name="vPassword">
    <br>
    <br>
    <br>
    <!--<input type="button" id="botonir" name="vBoton" value ="CREAR" onclick="f_crear()">-->
    <br><br>
    <input type="button" id="botonir" name="vBoton" value ="ENTRAR" onclick="f_login()">


</form>

</body>
</html>




