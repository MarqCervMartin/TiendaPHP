<?php 
include('db.php');

if(isset($_POST['guardarUsuario'])){
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $fecha = $_POST['fecha'];
    if(isset($_POST['ocupacion'])){
        $ocupacion = $_POST['ocupacion'];
    }
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];
    
    $query = "INSERT INTO actividades(usuario, email, pass, nombre, paterno, materno, fecha, 
    ocupacion, peso, estatura) VALUES ('$usuario', '$email', '$pass', '$nombre', '$paterno', '$materno', '$fecha', 
    '$ocupacion', '$peso', '$estatura')";
    
    $resul = mysqli_query($conn, $query);
    if(!$resul){
        die("Fallo el query");
    }
    //echo "Guardado";
    $_SESSION['message'] = 'Usuario guardado';
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
    /*
    echo $usuario;
    echo "<br>";
    echo $emai;
    echo "<br>";
    echo $pass;
    echo "<br>";
    echo $nombre;
    echo "<br>";
    echo $paterno;
    echo "<br>";
    echo $materno;
    echo "<br>";
    echo $fecha;
    echo "<br>";
    echo $ocupacion;
    echo "<br>";
    echo $peso;
    echo "<br>";
    echo $estatura;
    */
    
}
?>