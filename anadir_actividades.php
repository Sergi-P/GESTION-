<?php include 'db.php';
$nombre=$_POST['name'];
$tipo=$_POST['tipo'];
$max=$_POST['max'];



if( !$con) {
    die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
}

else {
    mysqli_set_charset($con, "utf8");
    echo "Se ha establecido correctamente la conexion a la base de datos<br>";


    
    $sql="INSERT INTO `daw2`.`activitats` (`act_id`, `nom`, `tipo`, `quantitat_reservada`, `quantitat_maxima`) VALUES (NULL, '$nombre', '$tipo', '0', '$max');";
    $consulta=mysqli_query($con, $sql);
}


if( !$consulta) {
    die("No se ha podido realizar el insert");
}

else {
    echo "El insert se ha realizado correctamente";
    echo"<br> Se has añadido correctamente.";
    header('Location: ./menu_Admin.php');


}

?>