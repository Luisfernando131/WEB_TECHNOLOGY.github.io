<?php
/**
 * @autor Luis Fernando, 2019-10-15
 */
include('../../libs/php/utility.php');
$pTitulo = $_POST['vTitulo'];
$pFecha = $_POST['vFecha'];
$pPrecio = $_POST['vPrecio'];
$pTips = $_POST['vTipo'];
$pBan = $_POST['vBandera'];
$pUsuario = 1014294468;
$pFecha = date("Y-m-d");
$pHora = date("H:i:s");
$pCan = $_POST['vCambio'];
//QUERY DE INSERT
if ($_POST['vBandera'] == "1") {
    $qSql = "INSERT INTO `indexcod_0003`.`_0003108` (`tituloxx`, `fechaxxx`, `precioxxx`, `tipoxxxx`, `regusrxx`, `regfecxx`, `reghorxx`, `regmfecx`, `regmhorx`, `regmusrx`) VALUES  (\"{$_POST['vTitulo']}\" ,\"{$_POST['vFecha']}\",\"{$_POST['vPrecio']}\" , \"{$_POST['vTipo']}\" , \"{$pUsuario}\" , \"{$pFecha}\" , \"{$pHora}\" , \"{$pFecha}\" , \"{$hora}\" , \"{$pUsuario}\" ) ";
    $rSql = mysql_query($qSql, $xConexion01);
    ?>
    <script type="text/javascript">
        window.location="http://107.190.139.42/~indexcod/analitica/forms/especiales/alertaspagos.php";
    </script>
    <?php
}else if ($_POST['vBandera'] == "3") {
//QUERY DE UPDATE 
    $qUpdate = mysql_query("UPDATE `indexcod_0003`.`_0003108` SET `tituloxx`= \"{$_POST['vTitulo']}\" , `fechaxxx`= \"{$_POST['vFecha']}\" , `precioxxx` = \"{$_POST['vPrecio']}\" , `tipoxxxx` = \"{$_POST['vTipo']}\" , `regusrxx` = \"{$pUsuario}\" , `regfecxx` = \"{$pFecha}\" , `reghorxx` = \"{$pHora}\" , `regmfecx` = \"{$pFecha}\" , `regmhorx` = \"{$hora}\" , `regmusrx` = \"{$pUsuario}\" WHERE `identxxx` = \"{$_POST['vCambio']}\" ");
    $rSqlu = mysql_query($qUpdate, $xConexion01);
    ?>
    <script type="text/javascript">
    window.location="http://107.190.139.42/~indexcod/analitica/forms/especiales/alertaspagos.php";
    </script>
    <?php
}else if ($_POST['vBorrado'] == "1") {
    //QUERY DE BORRAR
    $qDelete = mysql_query("DELETE FROM `indexcod_0003`.`_0003108` WHERE `identxxx` = \"{$_POST['vCambio']}\" ");
    $qSqld = mysql_query($qDelete, $xConexion01);
    ?>
    <script type="text/javascript">
        window.location="http://107.190.139.42/~indexcod/analitica/forms/especiales/alertaspagos.php";
    </script>
    <?php
}
?>
<html>
    <head>
      <!--DATAPICKER-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ALERTAS PAGOS</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
    $("#datepicker").datepicker({dateFormat: 'yy-mm-dd'});
    $("#datepicker").datepicker({
                    format: "yyyy-mm-dd",
                    language: "es",
                    clearBtn: true,
                    autoclose: true
                });
     } );
    </script>
        <!--CODIGO PARA EJECUTAR INSERT-->
        <script>
            function f_Enviar() {
                var vTit = document.forms ["frgrm"]["vTitulo"].value;
                var vFech = document.forms["frgrm"]["vFecha"].value;
                var vPrec = document.forms["frgrm"]["vPrecio"].value;
                var vTipo = document.forms["frgrm"]["vTipo"].value;
                if (vTit == "") {
                    alert("Ingresa el titulo");
                } else if (vFech == "") {
                    alert("Ingrese la fecha");
                } else if (vPrec == "") {
                    alert("Ingrese el precio");
                } else if (vTipo == "") {
                    alert("Selecciona una opcion");
                } else {
                    document.forms["frgrm"]["vBandera"].value = "1";
                    document.forms["frgrm"].submit();
                }
            }
            /*CODIGO PARA EJECUTAR LA ACTUALIZACION*/
            function f_Actua() {
                var vTit = document.forms["frgrm"]["vTitulo"].value;
                var vFech = document.forms["frgrm"]["vFecha"].value;
                var vPrec = document.forms["frgrm"]["vPrecio"].value;
                var vTipo = document.forms["frgrm"]["vTipo"].value;
                if (vTit == "") {
                    alert("Ingresa el titulo");
                } else if (vFech == "") {
                    alert("Ingrese la fecha");
                } else if (vPrec == "") {
                    alert("Ingrese el precio");
                } else if (vTipo == "") {
                    alert("Selecciona una opcion");
                } else {
                    document.forms["frgrm"]["vBandera"].value = "3";
                    document.forms["frgrm"].submit();
                }
            } 
            /*CODIGO PARA EJECUTAR EL BORRADO*/
            function f_Borrar() {

                var sConfirmacion = confirm("Esta seguro si desea borrar el dato");

                if (sConfirmacion === true) {
                document.forms["frgrm"]["vBorrado"].value = "1";
                document.forms["frgrm"].submit();
                }else{

                }
            } 
            function f_Cargar(xId,xTit,xFec,xPre,xTip){

              var xTit = document.forms["frgrm"]["vTitulo"].value=xTit;
              var xFec = document.forms["frgrm"]["vFecha"].value=xFec;
              var xPre = document.forms["frgrm"]["vPrecio"].value=xPre;
              var xTip = document.forms["frgrm"]["vTipo"].value=xTip;
              document.forms["frgrm"]["vCambio"].value=xId; 
             }
        </script>
        <style type="text/css">
            body{
                font-family: Arial;  
                text-align: center;
                background-color:  white;
            }
            table{
                width: 70%;
                text-align: center;
                border: 1px solid #000;

                border-collapse: separate;
                border-spacing: 5px ;

            }
            #vtitulo{
            background-color:  #06AAA9;
            } 
            input{
                width: 200px;
            }
            #vLlenado{
                width: 70%;
                text-align: center;
            }
            #vTitulo1{
                width: 100px;
                background-color: #06AAA9;
                font-size: 14;
            }
            #vTitulo2{
                background-color: #06AAA9  ;
          }
            #vTitulo3{
                width: 150px;
                text-align: center;
                background-color: #06AAA9   ;
            }
            #vTitulo4{
            background-color: #06AAA9 ;
            }
            #vTitulo6{
            background-color:  #06AAA9;
                font-size: 50px;
            }
            #vBoton{

            background-color: #ACB8F3;
            }

            select {
              width: 240px;
            }
            td{
            background-color: #ACB8F3;
            /*CDC8C7
            00FFFF*/
            color: black;
            }
            .button1{

            background-color : #06AAA9;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            border: 4px solid green;
            cursor: pointer;

            }
            .button2{
            background-color : #06AAA9;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            border: 4px solid yellow;
            cursor: pointer;

            }
            .button3{
            background-color : #06AAA9;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 4px;
            border: 4px solid red;
            cursor: pointer;

            }
            #Irmenu{
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
            #vCajadetexto{
            background-color:  white;
            text-align: center;
            border-radius: 4px;
            width: 200px;
            }
            #vLink{
            text-decoration: none;
            }
            
            </style>
        </head>
        <body>
        <form name="frgrm" method="post">
        <input type="hidden" name="vBandera"  id="vBandera" value="0" />
        <input type="hidden" name="vCambio" value="0">
        <input type="hidden" name="vBorrado" value="0">
        <input type="button" id="Irmenu" value="REGRESAR" onclick="f_Ir()">
        <script type="text/javascript">
            function f_Ir(){
            window.location="http://107.190.139.42/~indexcod/analitica/forms/especiales/administrador.php";
            }
            
        </script>
        <table  id="vLlenado" border="1px" align="center">
            <th colspan="4"  id="titulo6">FORMULARIO DE REGISTRO</th>
            <tr>
                <th id="vTitulo">TITULO</th>
                <th id="vTitulo">FECHA</th>
                <th id="vTitulo">PRECIO</th>
                <th id="vTitulo">TIPO</th>
            </tr>
            <tr>
                <td><h2><br><input id="vCajadetexto" placeholder="TITULO" type="text" name="vTitulo" ></h2></td>
                <td><h2><br><input  id="vCajadetexto" placeholder="FECHA" type="text" name="vFecha" id="datepicker" value="<?php echo date("Y-m-d"); ?>"></h2></td>
                <td><h2><br><input id="vCajadetexto"  placeholder="PRECIO ($)" type="text" name="vPrecio"></h2></td>
                <td><br><select id="vCajadetexto" name="vTipo">
                <option value="" selected disabled hidden> SELECCIONE UNA OPCION </option>
                <option>MENSUAL</option>
                <option>ANUAL</option>
                </select>
                </td>
            </tr>
            <tr><br>
                <th  rowspan="" id="vBoton"> <input type="button" class="button button1"  name="vBoton" value="GUARDAR" onclick="f_Enviar()" > </th>
                <th colspan="2"  id="vBoton"> <input type="button" class="button button2"  name="vBoton" value="ACTUALIZAR" onclick="f_Actua()"> </th>
                <th colspan="2"  id="vBoton"> <input type="button" class="button button3" name="vBoton" value="BORRAR" onclick="f_Borrar()"> </th><br>
                </tr>
            </table>
            <br><br><br>
            <hr>
            <br><br><br>
            <table width="60%">

                <table  border="1px" align="center">
                    <th colspan="5"  id="vtitulo6">ALERTAS PAGOS </th>
                    <tr align="center">
                        <th id="vTitulo1" >N de Registro</th>
                        <th id="vTitulo2">Titulo</th>
                        <th id="vTitulo3">Fecha</th>
                        <th id="vTitulo4">Precio</th>
                        <th id="vTitulo3">Tipo</th>
                    </tr>
                    <?php
                    $qselec = mysql_query("SELECT `identxxx`, `tituloxx`, `fechaxxx`, `precioxxx` , `tipoxxxx` FROM `indexcod_0003`.`_0003108`;");
                    while ($pResul = mysql_fetch_array($qselec)) {
                    $nformat = number_format($pResul["precioxxx"], 2, ',', '.');

                      $nId=$pResul["identxxx"];
                      $sTit=$pResul["tituloxx"];
                      $dFec=$pResul["fechaxxx"];
                      $sPre=$pResul["precioxxx"];
                      $sTip=$pResul["tipoxxxx"];

                    ?>
                        <tr>
                            <td><a id="vLink" href="#" onclick="javascript:f_Cargar('<?php echo $nId; ?>', '<?php echo $sTit; ?>', '<?php echo $dFec; ?>', '<?php echo $sPre; ?>', '<?php echo $sTip; ?>',)"><?php echo $pResul["identxxx"] ?></a></td>
                            <td><?php echo $pResul["tituloxx"] ?></td>
                            <td><?php echo $pResul["fechaxxx"] ?></td>
                            <td>$ <?php echo $nformat ?> </td>
                            <td><?php echo $pResul["tipoxxxx"] ?> </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
        </form>
        <footer>
            <br>
            <img src="" align="right">
        </footer>
    </body>
</html>