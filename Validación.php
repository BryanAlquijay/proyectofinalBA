<?php
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Contraseña'];




if ($Usuario=="admin" and $Contraseña=="mensajes") {
header("location:msjs.php");
}else{
    echo '<script lenguage="javascript">';
    echo 'alert("Usuario o contraseña son incorrectas")';
    echo '</script>';

}

?>