<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $array = array("Nome" => "carlos Fernandes", "idade" => 25);

        $aux = 'qr_img0.50j/php/qr_img.php?';
        $aux .= 'd=http://www.buscodigital.com.br';
        //$aux .= 'e=h&';
        //$aux .= 't=4&';
        //$aux .= 't=p&';
        //$aux .= $array["Nome"]." ".$array["idade"];
        ?>
        
        <div style="float: left; border: 1px solid;">
            <img src="<?php echo $aux; ?>"
        </div>
    </body>
</html>
