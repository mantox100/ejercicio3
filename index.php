
<?php include('lib/constantes.php')?>

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
        <div>
            <form action="<?=URLBASE?>>controladores/accUsuario.php" method="post">
                            Usuario: <input id="usuario" name="usuario" type="text">
                            <br>Clave: <input id="clave" name="clave" type="text">
                            <input type="submit" value="Acceder"  >                     
                        </form>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
