<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style/styleActividad.css" />
</head>
<?php session_start();?>

<body>
  <nav class="arriba">
  <a class="dreta"><u>Hola <?php echo $_SESSION['nombre']; ?>!</u></a>
        <a class="dreta" href="logout.php">Exit</a>


  </nav>
  <nav class="abajo"> 
        <a href="menu_Admin.php">Home</a>
        <a href="actividades_Admin.php">Lista de actividades</a>
        <a><b>Lista de reservas</b></a>
        <a href="clientes_Admin.php">Lista de clientes</a>

    </nav>
    
 

    <span class="ir-arriba icon-arrow-up2">🔼</span>



  
    

   
    <div class="container">
	<table>
     <thead> 
        <tr>
        <th>Id </th>
        <!-- <th>Editar</th>
        <th>Borrar</th> -->
        <th>Fecha reserva </th>
        <th>id activitat </th>
        <th>id client </th>
        <th>Nom </th>
        <th>Plazas </th>
        </tr>
      </thead>
		<tbody>
			
    <tr>
    <?php
        include 'db.php';
        $sql="SELECT * FROM `reserves`";

        $consulta=mysqli_query($con,$sql);        
        
       

    while($fila=$consulta->fetch_assoc()){
     $id= $fila['id_client'];
     $sql2="SELECT nom FROM `client` WHERE client_id=$id";
     $consulta2=mysqli_query($con,$sql2);        

     
     ?>
          <tr>
          <th id="id"><?php echo $fila["reserva_id"]; ?></th>
          <!-- <td id="edit"><input class="editar" type="button" value="✏️"></td>
          <td id="del"><input class="borrar" type="button" value="🗑️"></td> -->
          <td><?php echo $fila["data_reserva"]; ?></td>
          <td><?php echo $fila["id_activitat"]; ?></td>
          <td><?php echo $fila["id_client"]; ?></td>
          <?php
          while($fila2=$consulta2->fetch_assoc()){
            ?>
          <td><?php echo $fila2["nom"]; ?></td>

          <?php
      }
      ?>
          <td><?php echo $fila["Plazas"]; ?></td>

      <?php
    }
    ?>
			</tr>
		
		</tbody>
	</table>
    <!-- <div id="botones">
        <a href="anadir_Actividades.html"><input class="login__submit" type="button" value="+"></a>

      </div> -->
    </div>

	

</body>

</html>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>  

<script>
  document.querySelectorAll('.editar').forEach((element) => {
    element.addEventListener('click', (eventoEdit) => {
        const elemento = eventoEdit.target.parentElement.parentElement;
        el1 = elemento.querySelector("#id");
        id = el1.innerHTML;
        window.location.href = 'editar_Actividades.php?id=' + id + '';

      }


    )
  });

  document.querySelectorAll('.borrar').forEach((element) => {
    element.addEventListener('click', (eventoEdit) => {
        const elemento = eventoEdit.target.parentElement.parentElement;
        el1 = elemento.querySelector("#id");
        id = el1.innerHTML;
        window.location.href = 'borrar_Actividades.php?id=' + id + '';

      }


    )
  });


 //boton arriba
 $(document).ready(function(){

$('.ir-arriba').click(function(){
    $('body, html').animate({
        scrollTop: '0px'
    }, 300);
});

$(window).scroll(function(){
    if( $(this).scrollTop() > 0 ){
        $('.ir-arriba').slideDown(300);
    } else {
        $('.ir-arriba').slideUp(300);
    }
});

});

</script>