        <div class="continer">

            <FORM ACTION="<?= base_url()?>index.php/facturas/addFactura" METHOD=POST>
                <div>
                    <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" required >
                </div>
                <br>
                <div>
                    <label>Fecha</label>
 
                <input id="fechaCont" type="date" readonly class="form-control" name="fecha" value="">
                </div>
                <br>
                <div>
                    <label>Adjuntar documento:</label>
                <input type="file" class="form-control" name="adjunto">
                </div>
                <br>
                <div>
                    <label>ID_CONTRATO</label>
                <input type="text" class="form-control" name="id_contrato" required>
                </div>
                <br>
                <div>
                    <label>Precio €</label>
                <input type="number" class="form-control" name="precio" >
                </div>
                <br>
                <div>

                    <label>El IVA y el TOTAL se rellenaran automaticamente.</label>
                    
                </div>
                
                
                
                <br>
                
                <input type="submit" class="btn btn-primary" name="" value="Modificar">
                <input type="reset" class="btn btn-danger" name="" value="Limpiar">

            </FORM>

        </div>    

    </body>
</html>

<script>

    var d = new Date();
    var strDate = d.getFullYear() + "-" + (d.getMonth()+1) + "-" + d.getDate();
    $("#fechaCont").val(strDate);
    
</script>