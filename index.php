<?php

    // include("./enviarDatos.php");

    // function hola (){
    //     echo "hol";
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>

    <!-- <img class="img-bees" src="assets/bees.jpeg" alt="bees">
    <img class="img-tienda" src="assets/tienda.jpeg" alt="tienda"> -->
    <div class="content" >
        <section class="content-section" >
            <form class="form-section" action="enviarDatos.php" method="post" name="form-user">
                <div class="items-section">
                    <div class="item-section  uno">
                        <label class="aa" for="">NOMBRE</label>
                        <input class="item-input" name="nombre" type="text" required >
                    </div>
                    <div class="item-section ">
                        <label for="">APELLIDO</label>
                        <input class="item-input" name="apellido" type="text" required >
                    </div>

                </div>
                <div class="items-section" >
                    <div class="item-section ">
                        <label for="">CORREO(opcional)</label>
                        <input class="item-input" name="correo" type="email" required >
                    </div>
                    <div class="item-section ">
                        <label for="">TELEFONO</label>
                        <input class="item-input" name="telefono" type="number" required >
                    </div>
                    
                </div>

                <input class="btn-abeja"  title="boton enviar" alt="boton enviar" src="./assets/abeja2.jpeg" type="image" />
                <!-- <button type="submit" >enviar</button> -->
                <!-- <img class="btn-abeja" src="./assets/abeja2.jpeg" alt="boton" onclick="<?php ?>"> -->
            </form>
        </section>
    </div>
   

</body>
</html>