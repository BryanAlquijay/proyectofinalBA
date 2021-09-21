<?php include("bd.php"); 
?>
<!doctype html>
<html lang="es">
  <head >
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Inicio</title>
  </head>
  <body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

<div class="btn-group w-100" role="group" aria-label="Basic example">
<button type="button" class="btn btn-warning"><a href="index.html" style="text-decoration: none;">Inicio</a></button>
<button type="button" class="btn btn-info"><a href="tiendas.html" style="text-decoration: none;">Tiendas</a></button>
<button type="button" class="btn btn-danger"><a href="contactenos.php" style="text-decoration: none;">Contáctenos</a></button>
<button type="button" class="btn btn-warning"><a href="sesión.html" style="text-decoration: none;">Ver Mensajes</a></button>
</div>
<br><br>
<h1>Contáctenos</h1>
<br>

<div class="container">
  <form action="guardar.php" method="POST">
      <div class="form-group">
          <label for="nombre">Nombres *</label>
          <input type="text" name="nombre" class="form-control" placeholder="Ingrese sus nombres y Apellidos" >
          
        </div>
        <div class="form-group">
          <label for="telefono">Telefono / Celular</label>
          <input type="text" name="telefono" class="form-control" placeholder="Ingrese su número  de celular"  >
          
        </div>
      <div class="form-group">
        <label for="correo">Correo Electronico *</label>
        <input type="email" name="correo" class="form-control" placeholder="Ingrese su correo electrónico" >
        
      </div>
      <div class="form-group">
        <label for="mensaje">Mensaje *</label>
        <input type="text"  name="mensaje" class="form-control"   >
      </div>
      <br>
     <center> <input type="submit" class="btn btn-primary" value="Enviar Mensaje" name="enviar"></center>
    </form>
</div>

<br>
<br>
<br>
<br>
<footer style="height: 50px;">
  <table class="table" style="height: 70px;width: 1280px;background: rgb(47, 40, 88)"> 
   
      <tr>
        
        <th scope="col" ><font color="white"><h6>PBX: 36494932 - Dirección: 3ra av 0-46 Ciudad Real1 Zona12</h6></font></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th scope="col"><font color="white"><h6>Carnet: 2020-40118</h6></font></th>
        <th scope="col"><font color="white"><h6>Nombre: Bryan Josué Alquijay López</h6></font></th>
        
        
        
      </tr>
   
    </table>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>



