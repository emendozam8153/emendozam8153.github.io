
<?php
  include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="css/header.css">
        <title>Form</title>
    </head>
    <body>
        <!--Cabecera-->
        <div>
            <header class="enca"> <!---barra-->
                <div class="wrap"> <!--dentro del encabezado-->
                    <div class="logos"> <!--TITULOS-->
                        ELECCIONES 2023

                    </div>
                    <nav> <!--botones-->
                        <a href="">Inicio</a>
                        <a href="mostrar.php">Tabla_Usuarios</a>
                        <a href="">Contactos</a>
                        <a href="">A cerca de</a>
                    </nav>
                </div>
            </header>

            <!--mostrar datos  -->
            <!--https://getbootstrap.com/-->

            <div class="espacio-tabla">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Contraseña</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        <?php
                            $sql="SELECT * from usuarios";
                            $result = mysqli_query($conn,$sql);
                            while ($mostrar=mysqli_fetch_array($result)) {

                        ?>
                            <tr>
                                <td><?php echo $mostrar['ID'] ?>
                                <td><?php echo $mostrar['Nombre'] ?>
                                <td><?php echo $mostrar['Usuario'] ?>
                                <td><?php echo $mostrar['Contraseña'] ?>

                                <td>
                                    <!--Modificar-->
                                    <a class="btn btn-success" href="editar.php?id=<?php echo $mostrar['ID'] ?>">Editar</a>
                        
                                    <!--Eliminar-->
                                    <form action="eliminar.php" method="post">
                                        <input type="hidden"value="<?php echo $mostrar['ID'] ?>" name="txtID"readonly>
                                        <td><input class="btn btn-danger" type="submit"value="Eliminar" name="btnEliminar"></td>
                                    </form>  
                                </td>

                            </tr>
                            <?php
                                }
                            ?>
                    </tbody>
                </table>
                <div class ="reportes"> 
                    <a class="btn btn-warning" href="reportes.php">Imprimir Reportes</a> 
                </div>

            </div>
        </div>                   

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>
