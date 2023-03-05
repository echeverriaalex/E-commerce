<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">

               <h2 class="mb-4">Detalle del producto</h2>
               <table class="table bg-light-alpha">
                    <thead>                         
                         <th>Código</th>
                         <th>Imagen</th>
                         <th>Nombre</th>
                         <th>Precio</th>
                         <th>Categoria</th>
                         <th>Email</th>
                         <th>Opcion</th>
                    </thead>
                    <tbody>
                            <tr>
                                <td> <?php echo $id;?></td>
                                <td> <img class="img-fluid" src="<?php echo $img;?>"> </td>
                                <td> <?php echo $nombre;?></td>
                                <td> <?php echo $precio;?></td>
                                <td> <?php echo $categoria; ?> </td>
                                <td> <?php echo $email;?> </td>
                                <td> 
                                    <form class="bg-light-alpha" action="<?php echo FRONT_ROOT ?>Producto/AddToCart">
                                            <div class="row">
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <input name="productoId" value="<?php echo $id;?>" hidden>
                                                        <button type="submit" class="btn btn-dark ml-auto d-block">Agregar al carrito </button>
                                                    </div>
                                                </div>                         
                                            </div>
                                    </form>
                                </td>
                            </tr>
                    </tbody>
               </table>
          </div>
     </section>
</main>