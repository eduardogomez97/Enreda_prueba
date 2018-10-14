        <div class="continer">

            <FORM ACTION="<?= base_url()?>index.php/facturas/updateFactura" METHOD=POST>
                <div >
                    <label>ID</label>
                <input type="text" readonly="true" class="form-control" name="id" value="<?= $factura->id ?>">
                </div>
                <br>
                <div>
                    <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $factura->nombre ?>">
                </div>
                <br>
                <div>
                    <label>Fecha</label>
                <input type="date" class="form-control" name="fecha" value="<?= $factura->fecha ?>">
                </div>
                <br>
                <div>
                    <label>Adjunto: <?= $factura->adjunto ?></label>
                <input type="file" class="form-control" name="adjunto" value="<?= $factura->adjunto ?>">
                </div>
                <br>
                <div>
                    <label>ID_CONTRATO</label>
                <input type="text" class="form-control" name="id_contrato" value="<?= $factura->id_contrato ?>">
                </div>
                <br>
                <div>
                    <label>Precio €</label>
                <input type="number" class="form-control" name="precio" value="<?= $factura->precio ?>">
                </div>
                <br>
                <div>
                    <label>IVA</label>
                    <?php $iva = ($factura->precio * 21) / 100; ?>
                <input type="number" readonly="true" class="form-control" name="iva" value="<?= $iva ?>">
                </div>
                <br>
                <div>
                    <label>TOTAL</label>
                    <?php $total = $factura->precio + $iva; ?>
                <input type="number" readonly="true" class="form-control" name="total" value="<?= $total ?>">
                </div>
                <br>
                
                <input type="submit" class="btn btn-primary" name="" value="Modificar">
                <input type="reset" class="btn btn-danger" name="" value="Limpiar">

            </FORM>

        </div>    

    </body>
</html>