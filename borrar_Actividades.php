<?php 
    $id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/styleBorrar.css" />
    <title>Borrar</title>
</head>

<body>

    <div class="register-container">
        <form action="borrar2_Actividades.php" method="POST" class="form-register">

            <label for="register-input-user" class="register__label">
                <H1>¿Estas seguro que quieres borrar esta actividad?</H1>
            </label>




            <div id="botons">
                <div id="contenidos">
                    <div id="boton1"><a href="borrar2_Actividades.php?id=<?php echo $id; ?>"><input type="button"
                                class="edit__submit" value=" SI "></a></div>
                    <div id="boton2"><a href="actividades_Admin.php"><input type="button" class="edit__submit2"
                                value="NO"></a></div>
                </div>


            </div>
        </form>
    </div>






</body>

</html>