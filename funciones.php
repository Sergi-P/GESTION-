<?php function editar($Id) {

    include 'db.php';



    $nombre=$_POST['Nombre'];
    $max=$_POST['max'];
  

    if( !$con) {
        die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
    }

    else {
        mysqli_set_charset($con, "utf8");

        $sql="UPDATE `daw2`.`activitats` SET `nom` = '$nombre', `quantitat_maxima` = '$max' WHERE `activitats`.`act_id` =$Id";
        $consulta=mysqli_query($con, $sql);



        if( !$consulta) {
            die("No se ha podido realizar la actualizacion");
        }

        else {
            echo "La actualizacion se ha realizado correctamente";
            header('Location: ./actividades_Admin.php');


        }
    }
}

function editarU($Id) {

    include 'db.php';



    $nombre=$_POST['Nombre'];
    $apellidos=$_POST['Apellidos'];
    $correo=$_POST['correo'];
    $admin=$_POST['admin'];

    if( !$con) {
        die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
    }

    else {
        mysqli_set_charset($con, "utf8");
        $sql="UPDATE `daw2`.`usuarios` SET `Nombre` = '$nombre',`Apellidos` = '$apellidos',`Correo` = '$correo',`admin` = '$admin' WHERE `usuarios`.`id` =$Id";

        $consulta=mysqli_query($con, $sql);



        if( !$consulta) {
            die("No se ha podido realizar la actualizacion");
        }

        else {
            echo "La actualizacion se ha realizado correctamente";
            header('Location: ./usuarios_Admin.php');


        }
    }
}

function borrar($Id) {

    include 'db.php';

    session_start();

    if( !$con) {
        die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
    }

    else {
        mysqli_set_charset($con, "utf8");

        $sql="DELETE FROM `daw2`.`activitats` WHERE `activitats`.`act_id` = $Id";
        $consulta=mysqli_query($con, $sql);



        if( !$consulta) {
            die("No se ha podido realizar la actualizacion");
        }

        else {
            echo "La actualizacion se ha realizado correctamente";
            header('Location: ./actividades_Admin.php');


        }
    }
}

function borrarU($Id) {

    include 'db.php';

    session_start();

    if( !$con) {
        die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
    }

    else {
        mysqli_set_charset($con, "utf8");

        $sql="DELETE FROM `daw2`.`usuarios` WHERE `usuarios`.`id` = $Id";
        $consulta=mysqli_query($con, $sql);



        if( !$consulta) {
            die("No se ha podido realizar la actualizacion");
        }

        else {
            echo "La actualizacion se ha realizado correctamente";
            header('Location: ./usuarios_Admin.php');


        }
    }
}




?>