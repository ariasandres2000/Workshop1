<html lang="es">

    <head>
        <title>WorkShop1 </title>
        <link rel="stylesheet" href="main.css"/>
    </head>

    <body>
    
        <p id="texto"> Esta es la fecha de manera estatica </p>
        <h4> 07/02/2022 14:55 pm</h4>

        <p id="texto"> Esta es la fecha de manera dinamica </p>


        <?php

        date_default_timezone_set("America/Costa_Rica");

        $fecha = date("d-m-Y h:i a");
        $var = 'verde';
        ?>

        <p id="<?php echo $var; ?>"><?php echo $fecha ?></p>

    </body>


</html>