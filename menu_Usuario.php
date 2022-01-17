<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/styleMenu.css" />
    <title>Document</title>
</head>

    <?php session_start();?>
    
<body>
    <nav class="arriba">
        <!-- <a class="dreta" href="login.html" ><u>Log In</u></a> -->

       
    </nav>
    <nav class="abajo"> 
        <a><b>Home</b></a>
       
    </nav>


    <span class="ir-arriba icon-arrow-up2">🔼</span>

	<section class="contenido">
	<p>

    <div class="actividades">
        
    </div>
   
    </p>
  
	</section> 
    <?php
    include 'login.html';
    ?>
            
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>  
<script>

    
        // console.log('VA')
        // $(document).ready(function(){
        //     $(".actividades").load("mostrar.php");
        // });
   



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
</body>
</html>