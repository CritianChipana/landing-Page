<?php


    include('./Conection/conection.php');

    if(!isset( $_POST['form-user'] )){
        
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $telefono = $_POST['telefono'];
            
            $result = mysqli_query($conection,"insert into user (nombre, apellido, correo, telefono) values('$nombre', '$apellido', '$correo', '$telefono')");
            
        
            
            if($result){
                echo "<script language='javascript'> 
                    alert('se agrego usuario correctamente '); 
                    location.href='index.html';
                </script>";
                // header('Location:index.php');
            }else {
                echo "<script> alert('se mandaron datos'); </script>";
                header('Location:index.html');
            }
        

    }

