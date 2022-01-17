<?php
session_start();
$email=$_POST['gmail'];
$contrasena=$_POST['pass'];
// $contraEncriptada2=hash("sha256", $contraseña2);

include 'db.php';


if(!$con){
    die("No se ha podido realizar la conexion_".mysqli_connect_error()."<br>");
}else{
    mysqli_set_charset($con,"utf8");
    //echo "Se ha establecido correctamente la conexion a la base de datos<br>";

    $sql="SELECT * FROM `operaris` WHERE `correu` = '$email'";
    $consulta=mysqli_query($con,$sql);

    if(!$consulta){
        die("No se ha podido realizar el select");
    }else
        //echo "El select se ha realizado correctamente";
        
        $filas = $consulta->num_rows;

        if($filas>0){
            $row=$consulta->fetch_assoc();
            $_SESSION['id']=$row["operari_id"];
            $_SESSION['nombre']=$row["nom"];
            $_SESSION['cognom']=$row["cognom"];
            $_SESSION['correu']=$row["correu"];
            $_SESSION['dni']=$row["dni"];
            $_SESSION['telefon']=$row["telefon"];
            $_SESSION['data_naixement']=$row["data_naixement"];
            $_SESSION['reserves_realitzades']=$row["reserves_realitzades"];
            $_SESSION['contrasena']=$row["contrasena"];
                

            if($contrasena==$row["contrasena"]){
                                        header('location: ./menu_Admin.php');

            }else{
                    echo'<script type="text/javascript">
                    alert("La contraseña no es correcta.");
                    window.location.href="menu_Usuario.php";
                    </script>';
        
                    }
                 }
                    
                    
                }
        
    

?>