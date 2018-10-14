
      
      <div class="container">
          <h3>Lista de facturas.  <a href="<?= base_url()?>index.php/facturas/nueva_factura" class="btn btn-primary" data-toggle="modal" >-AÑADIR-</a></h3>

          <div class="table-responsive ajuste">
                  
                  <table class="table">
                      
                      <thead class="tabla_head">
                        <tr>
                          <th>ID </th>
                          <th>NOMBRE </th>
                          <th>FECHA </th>
                          <th>ADJUNTO</th>
                          <th>ID_CONTRATO </th>
                          <th>PRECIO </th>
                          <th>IVA </th>
                          <th>TOTAL€ </th>
                          <th>Acciones </th>
                        </tr>  
                    </thead>
                      <?php
                      foreach ($facturas->result() as $factura) { ?>
                      
                         <tr>
                            <td><?= $factura->id ?></td>
                             <td><?= $factura->nombre ?></td>
                             <td><?= $factura->fecha ?></td>
                             <td><?= $factura->adjunto ?></td>
                             <td><?= $factura->id_contrato ?></td>
                             <td><?= $factura->precio ?></td>
                             <td><?= $factura->iva ?></td>
                             <td><?= $factura->total ?></td>
                            <td><a href="<?= base_url()?>index.php/facturas/modificarFactura/<?= $factura->id;?>"class="btn btn-warning" data-toggle="modal" >Editar</a>
                             <a href="<?= base_url()?>index.php/facturas/delete?id=<?= $factura->id;?>" class="btn btn-danger" data-toggle="modal" >Eliminar</a></td>
                                        
                         </tr> 
                      
                      
                      
                      <?php  } ?>
                      

                  
                  </table>
                  
              </div>
              
      </div>


  </body>
</html>