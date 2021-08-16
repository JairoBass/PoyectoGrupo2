<?php
if(isset($_POST)){

    require_once 'conexion.php';
    $nombre = $_POST['nombre'];  
    $numero = $_POST['numerex'];
    $email = $_POST['email'];
    $comentariex = $_POST['comentariex'];


    $sql ="INSERT INTO comentarios VALUES(null,'$nombre','$numero','$email','$comentariex')";
        $guardar = mysqli_query($conexion, $sql);
        if($guardar){

            echo "registro realizado con exitoff!";
            header('location: index.php');
        }else{
            echo "Fallo en el envio";
        }
}
?>