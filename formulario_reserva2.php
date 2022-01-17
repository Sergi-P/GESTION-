<?php
include 'db.php';
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellido'];
$dni=$_POST['dni'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$fecha=$_POST['fecha'];

$plazas=$_POST['plazas'];
$fecha2=$_POST['fecha2'];
$id_act=$_POST['id'];



if(!$con){
    die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
}else{
    mysqli_set_charset($con,"utf8");

    

    $sql4="SELECT * FROM `daw2`.`client` WHERE `dni`= '$dni'";
    $consulta=mysqli_query($con,$sql4);
    $filas = $consulta->num_rows;

    if($filas>0){

    while($fila2=$consulta->fetch_assoc()){
        $bd_nom=$fila2['nom'];
        $bd_cognom=$fila2['cognom'];
        $bd_correu=$fila2['correu'];
        $bd_dni=$fila2['dni'];
        $bd_telefon=$fila2['telefon'];
        $bd_data=$fila2['data_naixement'];
    }

    if(($bd_nom == $nombre) && ($bd_cognom == $apellidos) && ($bd_correu == $correo) && ($bd_dni == $dni) && ($bd_telefon == $telefono) && ($bd_data == $fecha)){
        
        
        $sql3="SELECT `client_id` FROM `daw2`.`client` WHERE `dni`= '$dni'";
    $consulta=mysqli_query($con,$sql3);

    while($fila3=$consulta->fetch_assoc()){
        $id_client=$fila3["client_id"];
        
    }
        
        $sql2="INSERT INTO `reserves` ( `reserva_id` , `data_reserva` , `id_activitat` , `id_client` , `Plazas` ) VALUES (NULL , $fecha2, $id_act, $id_client, $plazas)";
        $consulta=mysqli_query($con,$sql2);
   
    }else{

        $sql="INSERT INTO `daw2`.`client` (`client_id`, `nom`, `cognom`, `correu`, `dni`, `telefon`, `data_naixement`) VALUES (NULL, '$nombre', '$apellidos', '$correo', '$dni', '$telefono', '$fecha')";
        $consulta=mysqli_query($con,$sql);


        $sql3="SELECT `client_id` FROM `daw2`.`client` WHERE `dni`= '$dni'";
        $consulta=mysqli_query($con,$sql3);
    
        while($fila3=$consulta->fetch_assoc()){
            $id_client=$fila3["client_id"];
            
        }


        $sql2="INSERT INTO `reserves` ( `reserva_id` , `data_reserva` , `id_activitat` , `id_client` , `Plazas` ) VALUES (NULL , $fecha2, $id_act, $id_client, $plazas)";
        $consulta=mysqli_query($con,$sql2);

    }
}else{
    $sql="INSERT INTO `daw2`.`client` (`client_id`, `nom`, `cognom`, `correu`, `dni`, `telefon`, `data_naixement`) VALUES (NULL, '$nombre', '$apellidos', '$correo', '$dni', '$telefono', '$fecha')";
    $consulta=mysqli_query($con,$sql);


    $sql3="SELECT `client_id` FROM `daw2`.`client` WHERE `dni`= '$dni'";
    $consulta=mysqli_query($con,$sql3);

    while($fila3=$consulta->fetch_assoc()){
        $id_client=$fila3["client_id"];
        
    }


    $sql2="INSERT INTO `reserves` ( `reserva_id` , `data_reserva` , `id_activitat` , `id_client` , `Plazas` ) VALUES (NULL , $fecha2, $id_act, $id_client, $plazas)";
    $consulta=mysqli_query($con,$sql2);


}
    

    if(!$consulta){
        die("No se ha podido realizar el insert");
        
    }
    else{
        echo "El insert se ha realizado correctamente";
        echo"<br> Te has registrado correctamente.";          
        header('Location: ./menu_Admin.php');
            
        
       
    }
?>


<?php
}
?>