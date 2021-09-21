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
</div>
<br><br>
<h1>Mensajes Recibidos</h1>
<br>

    
<table class="table table-info table-hover" style="width: 1280px;" >
  <thead>
    <tr>
      <th scope="col" style="width: 400px;">Nombre:</th>
      <th scope="col" style="width: 400px;">Teléfono:</th>
      <th scope="col" style="width: 400px;">Correo Electronico:</th>
      <th scope="col" style="width: 600px;">Mensaje:</th>
    </tr>
</thead>
<tbody>
<?php
$query="SELECT * FROM mensajes";
$resultat=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($resultat)){?>

<tr>
    <td><?php echo $row['nombre'] ?> </td>
    <td><?php echo $row['telefono'] ?> </td>
    <td><?php echo $row['correo'] ?> </td>
    <td><?php echo $row['mensaje'] ?> </td>
    <td>

    </td>
</tr>

<?php } ?>

</tbody>    
</table>
    </div>
  </div>


  
<br>
<br>
<br>
<br>

<footer style="height: 50px;">
  <table class="table" style="height: 68px;width: 1280px;background: rgb(47, 40, 88)"> 
   
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
  
      