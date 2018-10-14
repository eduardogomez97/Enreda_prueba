        <div class="continer">

            <FORM ACTION="<?= base_url()?>index.php/contratos/addContrato" METHOD=POST>
                <div>
                    <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" required >
                </div>
                <br>
                <div>
                    <label>Fecha</label>
 
                <input type="date" class="form-control" name="fecha" value="">
                </div>
                <br>
                
                <input type="submit" class="btn btn-primary" name="" value="Modificar">
                <input type="reset" class="btn btn-danger" name="" value="Limpiar">

            </FORM>

        </div>    

    </body>
</html>