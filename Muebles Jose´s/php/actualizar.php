<?php 
    include 'conexion.php';
    

$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE id_usuario='$id'";
$query=mysqli_query($conexion,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link  rel="stylesheet"  href="">
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="nombre_completo" placeholder="nombre_completo" value="<?php echo $row['nombre_completo']  ?>">
                                <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
                                <input type="text" class="form-control mb-3" name="usuario" placeholder="usuario" value="<?php echo $row['usuario']  ?>">
                                <input type="text" class="form-control mb-3" name="contraseña" placeholder="contraseña" value="<?php echo $row['contraseña']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>