<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/styleLogin.css" />

    <title>Document</title>
</head>
<body>
<nav class="abajo"> 
    <?php  
            session_start();
            if(isset($_SESSION['id'])){
                ?>
                <a href="menu_Admin.php"><b>Home</b></a>
            <?php  
            }else{
                ?>   
                <a href="menu_Usuario.php"><b>Home</b></a>
                <?php  
            }
                
        $id_act=$_GET['idAct'];

            ?>
      </nav>


    <div class="login-container">
        <form action="formulario_reserva2.php" method="POST" class="form-login">
            <ul class="login-nav">

                <li class="login-nav__item active">
                    <a >Reserva tu actividad!</a>
                </li>
            </ul>
           
            <input id="login-input-user" type="hidden" class="login__input" value="<?php echo $id_act;?>" name="id" autocomplete="off" />

           <label for="login-input-user" class="login__label">
                Nombre
            </label>
            <input id="login-input-user" class="login__input" type="text" name="nombre" autocomplete="off" />
 

            <label for="login-input-user" class="login__label">
                Apellidos
            </label>
            <input id="login-input-user" class="login__input" type="text" name="apellido" autocomplete="off" />
           
            <label for="login-input-user" class="login__label">
                DNI
            </label>
            <input id="login-input-user" class="login__input" type="text" name="dni" autocomplete="off" />


            <label for="login-input-user" class="login__label">
                Correo
            </label>
            <input id="login-input-user" class="login__input" type="email" name="correo" autocomplete="off" />
            
            <label for="login-input-user" class="login__label">
                Telefono
            </label>
            <input id="login-input-user" class="login__input" type="number" name="telefono" autocomplete="off" />
            <label for="login-input-user" class="login__label">
                Fecha de nacimiento
            </label>
            <input id="login-input-user" class="login__input" type="date" name="fecha" autocomplete="off" /> 

            <label for="login-input-user" class="login__label">
                Plazas
            </label>
            <input id="login-input-user" class="login__input" type="number" name="plazas" autocomplete="off" />


            <label for="login-input-user" class="login__label">
                fecha
            </label>
            <input id="login-input-user" class="login__input" type="date" name="fecha2" autocomplete="off" />



            <input type="submit" value="Continuar" class="login__submit">
            <a href="menu_Admin.php"><input type="button" class="login__submit2" value="Volver"></a>



        </form>
    </div>
    </body>
</html>