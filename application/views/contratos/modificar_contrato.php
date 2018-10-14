        <div class="continer">

            <FORM ACTION="<?= base_url()?>index.php/contratos/updateContrato" METHOD=POST>
                <div >
                    <label>ID</label>
                <input type="text" readonly="true" class="form-control" name="id" value="<?= $contrato->id ?>">
                </div>
                <br>
                <div>
                    <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="<?= $contrato->nombre ?>">
                </div>
                <br>
                <div>
                    <label>Fecha</label>
                <input type="date" class="form-control" name="fecha" value="<?= $contrato->fecha ?>">
                </div>
                <br>

                
                <input type="submit" class="btn btn-primary" name="" value="Modificar">
                <input type="reset" class="btn btn-danger" name="" value="Limpiar">

            </FORM>

        </div>    

    </body>
</html>