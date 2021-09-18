<?php
$con = mysqli_connect("localhost", "root", "", "prueba_fidanto");



/*<?php
                    try {
                      $sql = "SELECT id_pro, nombre, precio, nombre_cat, url_foto FROM productos";
                      $resultado = $con->query($sql);
                    } catch (Exception $e) {
                      $error = $e->getMessage();
                      echo $error;
                    }
                    while ($producto = $resultado->fetch_assoc()) {?>
                <tr>
                  <td><?php echo $producto['nombre'] ?></td>
                  <td><?php echo $producto['precio'] ?></td>
                  <td><?php echo $producto['nombre_cat'] ?></td>
                  <td><center><img loading = "lazy" src="../../assets/images/<?php echo $producto['url_foto']; ?>" alt="Productos del catalo de amora" width="200" height ="100"></center></td>
                  <td>
                    <a href="editar-productos.php?id=<?php echo $producto['id_pro']?>"
                      class="btn btn-warning btn-flat margin" title="Editar">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                    <a href="#" data-id="<?php echo $producto['id_pro']?>" data-tipo="productos"
                      class="btn btn-danger btn-flat margin borrar_registro" title="Eliminar">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php } ?>*/