
       
            <?php 


            include 'funciones.php';
            include 'db.php';
            
           
                $sql2="SELECT * FROM `activitats`";
                $consulta=mysqli_query($con,$sql2);
            
            ?>
            <script src="https://code.jquery.com/jquery-3.2.1.js"></script>  
            <script>
                $(".login__submit2").click(function() {

                    var id = $(this).attr("id");
                    window.location.href='formulario_reserva.php?idAct='+id;
                });
            </script>
            </script>
            <?php
            while($fila=$consulta->fetch_assoc()){?>

                    <div class="login-container">
                        
                        <div class="form-login">

                            <ul class="login-nav">
                                <li class="login-nav__item">
                                    <a class="enviar" value="<?php echo $fila["act_id"]; ?>"><u>Nombre:</u><br> <?php echo $fila["nom"]; ?></a>
                                </li>
                            </ul>   
                            <label for="login-input-user" class="login__label">
                            <u>Cantidad de plazas:</u><br> <?php echo $fila["quantitat_maxima"]; ?><br>
                            </label><br>
                            
                            <a><input type="button" class="login__submit2"id="<?php echo $fila["act_id"]; ?>" value="Continuar"></a>

                        </div> <br>
                        
                    </div>
                    <?php 
                } 
                
               
                
?> 
               