<?php
    require_once('nav.php');
?>
<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Registrar producto</h2>
               <form class="bg-light-alpha p-5" action="<?php echo FRONT_ROOT?>Producto/Add">
                    <div class="row">
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Categoria</label>
                                   <select name="categoriaId" class="form-control">
                                        <optgroup>
                                             <option disabled selected>Seleccionar...</option>                                        
                                             <?php
                                                  foreach($categoriasList as $categoria){
                                             ?>
                                                       <option value="<?php echo $categoria->getCategoriaId();?>"> <?php echo $categoria->getDescripcion();?> </option>
                                             <?php        
                                                  }
                                             ?>
                                        </optgroup>
                                   </select>
                              </div>
                         </div>
                         
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Imagen del producto</label>
                                   <input name="imagen" type="text" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Nombre del producto</label>
                                   <input name="nombre" type="text" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Precio</label>
                                   <input name="precio" type="text" value="" class="form-control">
                              </div>
                         </div>
                         <div class="col-lg-3">
                              <div class="form-group">
                                   <label for="">Tu Email </label>
                                   <input name="email" type="text" value="" class="form-control">
                              </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-dark ml-auto d-block">Agregar</button>
               </form>
          </div>
     </section>
</main>