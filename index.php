<?php include ('lib/constante.php')?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio Tipo Prueba</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link href="css/estiloprincipal.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div id="contenedor">
            <div id="tituloSitio"></div>
            <div id="menu"><?php include('menu.php');?></div>
            <div id="tituloPag"></div>
            <div id="contenido"></div>
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
    
    <script>
        $("#menuIngreso").click(function(){
            
        if ($("[id*=subProducto]").css("display")!="none"){
            $("[id*=subProducto]").css("display"),"none");
        }
        else{
            $("[id*=subProducto]").show();
            $("[id*=subProducto]").css("display"),"block");
        }
        });
    </script>
</html>
