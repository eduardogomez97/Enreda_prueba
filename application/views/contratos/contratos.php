
      
      <div class="container">
          <h3>Lista de contratos.  <a href="<?= base_url()?>index.php/contratos/nuevo_contrato" class="btn btn-primary" data-toggle="modal" >-AÑADIR-</a> </h3>

          <div class="table-responsive ajuste">
                  
                  <table class="table">
                      
                      <thead class="tabla_head">
                        <tr>
                          <th>ID </th>
                          <th>NOMBRE </th>
                          <th>FECHA </th>
                            <th>Acciones </th>
                        </tr>  
                    </thead>
                      <?php
                      foreach ($contratos->result() as $contrato) { ?>
                      
                         <tr>
                            <td><?= $contrato->id ?></td>
                             <td><?= $contrato->nombre ?></td>
                             <td><?= $contrato->fecha ?></td>
                             <td><a href="<?= base_url()?>index.php/contratos/modificarContrato/<?= $contrato->id;?>" class="btn btn-warning" data-toggle="modal" >Editar</a>
                             <a href="<?= base_url()?>index.php/contratos/delete?id=<?= $contrato->id;?>" class="btn btn-danger" data-toggle="modal" >Eliminar</a></td>
                                        
                         </tr> 
                      
                      
                      
                      <?php  } ?>
                      

                  
                  </table>
                  
              </div>
              
      </div>


  </body>
</html>