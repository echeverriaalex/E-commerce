<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">

               <h2 class="mb-4">Listado de todas los productos</h2>
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
                         <?php 
                         foreach($productosList as $producto){
                         ?>
                              <tr>
                                   <?php // var_dump($producto); ?>
                                   <td> <?php echo $producto->getproductoId();?></td>
                                   <td> <img class="img-fluid" src="<?php echo $producto->getimagen();?>"> </td>
                                   <td> <?php echo $producto->getnombre();?></td>
                                   <td> <?php echo $producto->getprecio();?></td>
                                   <td> <?php echo $producto->getcategoriaId(); ?> </td>
                                   <td> <?php echo $producto->getemail();?> </td>
                                   <td> 
                                        <form class="bg-light-alpha" action="<?php echo FRONT_ROOT ?>Producto/Detail">
                                             <div class="row">
                                                  <div class="col-lg-2">
                                                       <div class="form-group">                                                            
                                                            <input name="id" value="<?php echo $producto->getproductoId();?>" hidden>
                                                            <input name="img" value="<?php echo $producto->getimagen();?>" hidden>
                                                            <input name="nombre" value="<?php echo $producto->getnombre();?>" hidden>
                                                            <input name="precio" value="<?php echo $producto->getprecio();?>" hidden>
                                                            <input name="categoria" value="<?php echo $producto->getcategoriaId();?>" hidden>
                                                            <input name="email" value="<?php echo $producto->getemail();?>" hidden>
                                                            <button type="submit" class="btn btn-dark ml-auto d-block">Ver detalle </button>
                                                       </div>
                                                  </div>                         
                                             </div>
                                        </form>
                                   </td>
                              </tr>
                         <?php
                         }
                         ?>
                    </tbody>
               </table>
          </div>
     </section>
</main>