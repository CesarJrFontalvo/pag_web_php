<head>
    <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
    
<?php 

require 'conexion.php';

?>
  <div class="container">     
    <main></main>

    <aside>
      <form  method="POST" action="guardar.php">
      <div id="caja">
          <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
          <br><br>
          <input type="text" name="edad" id="edad" placeholder="Digite su edad"><br><br>
          <input id="submit"  type="submit" name="Submit" value="Enviar" style="color:white"  >
      </div>
      </form>
    </aside>
      
    <div id="content1"><img src="imagen_01.jpg" alt="imagen" /></div>
    
    <?php
      $sql = "SELECT * FROM t_personas";
      $result = mysqli_query($conectar, $sql);
      $numero = mysqli_num_rows($result);
      ?>

    <div id="content2"><table>
        <tr><h2 align="center"> Usuarios</h2></tr>
        <tr>
          <h1 align="center">
            <?php echo   $numero; ?></h1>
          </tr>
      </table></div>

  <footer> </footer>
  <section> <img src="imagen_2.jpg" alt="imagen"  /></section>
  <div id="sidebar"><img src="imagen_3.jpg" alt="imagen" /></div>



  
  