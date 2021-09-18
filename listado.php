<?php
    include_once 'assets/includes/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Prueba para una vacante de empleo para desarrollador frontend">
    <meta name="keywords" content="HTML, CSS, PHP, JS, BOOTSTRAP">
    <title>Prueba Frontend - Fidanto </title>
    <!--CDN BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.2/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center my-3 text-primary">Listado</h1>
                <button class="btn btn-success m-3"><a class="text-decoration-none text-white"
                                    href="index.php">Volver al inicio</a></button>
                <table id="example" class="table table-striped " style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CatName</th>
                            <th>Puesto</th>
                            <th>Titulo</th>
                            <th>Descipcion</th>
                            <th>TipoEmpleo</th>
                            <th>Moneda</th>
                            <th>Sueldo</th>
                            <th>SueldoTipo</th>
                            <th>UbicaciónEstado</th>
                            <th>UbicaciónCiudad</th>
                            <th>Empresa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        try {
                        $sql = "SELECT id, cat_name, puesto, titulo, descri, tipo_empleo, moneda, sueldo, sueldo_tipo, ubicacion_estado, ubicacion_ciudad, empresa FROM listado";
                        $resultado = $con->query($sql);
                        } catch (Exception $e) {
                        $error = $e->getMessage();
                        echo $error;
                        }
                        while ($listado = $resultado->fetch_assoc()) {?>
                        <tr>
                            <td><?php echo $listado['id'] ?></td>
                            <td><?php echo $listado['cat_name'] ?></td>
                            <td><?php echo $listado['puesto'] ?></td>
                            <td><?php echo $listado['titulo'] ?></td>
                            <td><?php echo $listado['descri'] ?></td>
                            <td><?php echo $listado['tipo_empleo'] ?></td>
                            <td><?php echo $listado['moneda'] ?></td>
                            <td><?php echo $listado['sueldo'] ?></td>
                            <td><?php echo $listado['sueldo_tipo'] ?></td>
                            <td><?php echo $listado['ubicacion_estado'] ?></td>
                            <td><?php echo $listado['ubicacion_ciudad'] ?></td>
                            <td><?php echo $listado['empresa'] ?></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>CatName</th>
                            <th>Puesto</th>
                            <th>Titulo</th>
                            <th>Descri</th>
                            <th>TipoEmpleo</th>
                            <th>Moneda</th>
                            <th>Sueldo</th>
                            <th>SueldoTipo</th>
                            <th>UbicaciónEstado</th>
                            <th>UbicaciónCiudad</th>
                            <th>Empresa</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

    <!--CDN BOOTSTRAP-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.2/js/dataTables.bootstrap5.min.js"></script>
    <!--JS PERSONAL-->
    <script src="assets/js/main.js"></script>
</body>

</html>