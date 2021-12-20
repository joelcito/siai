<?php
    include("../header.php");
    include("../coneccion.php");
?>
    <div class="container"> 
        <h4 style="color: white; text-align: center;">Registro de Inmueble en Alquiler</h4>       
        <form action="agregar_inmueble_alquiler.php" method="POST" enctype="multipart/form-data" id="filesForm">
            <input type="hidden" value="<?=$_SESSION['id_agente_venta']?>" name="id_agente_venta">
            <input type="hidden" value="alquiler" name="tipo">
            <div class="row">
                <div class="col-md-2">
                    <label for="" style="color: white;">Elija el Inmueble: </label>
                    <select name="inmueble" class="for form-control" id="">
                        <option value="Oficina">Oficina</option>
                        <option value="Departamento">Departamento</option>
                        <option value="Casa">Casa</option>
                        <option value="Local_Comercial">Local Comercial</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="" class="disabledTextInput" style="color: white;">Zona</label>
                    <select name="zona" id="" class="form-control">
                        <?php
                        $consulta = "SELECT * FROM zona";
                        if($consulta){
                            $datos = mysqli_query($conexion,$consulta);
                            while($mostrar = mysqli_fetch_array($datos)){
                        ?>
                                <option class="form-control" value="<?=$mostrar['nombre'];?>"><?php echo $mostrar['nombre']?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="" class="disabledTextInput" style="color: white;">Cocina </label>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="#" class="btn btn-success btn-circle" id="sumar"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        <div class="col-md-6">
                            <input type="number" class="form-control" value="0" name="num_cocina" id="num_cocina">
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-danger btn-circle" id="resta" ><i class="fas fa-minus-circle fa-2x"></i></a>
                        </div>
                    </div>
                    <!-- <select name="num_cocina" class="form-control" id="">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select> -->
                </div>
                <div class="col-md-2">
                    <label for="" class="disabledTextInput" style="color: white;">Baños</label>
                    <select name="num_baños" id="" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select> 
                </div>
                <div class="col-md-2">
                    <label for="" class="disabledTextInput" style="color: white;">Dormitorio</label>
                    <select name="num_dormitorio" id="" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="" class="disabledTextInput" style="color: white;">Lavanderia</label>
                    <select name="num_lavanderia" id="" class="form-control">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select> 
                </div>
            </div>
            
            <!-- <input type="text" value="Oficina" name="inmueble"> -->
            <br>
            
            <br>
            
            <br>
            
            <br>
            
            <br>
            
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Baulera</label>
            <select name="num_bauleras" id="" class="form-control">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Precio</label>
            <input type="number" class="form-control" name="precio">
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Precio en</label>
            <select name="tipo_pago" class="form-control" id="">
                <option value="$us">$us</option>
                <option value="Bs">Bs</option>
            </select>
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Superficie(m<sup>2</sup>)</label>
            <input type="number" class="form-control" name="matraje">
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Parqueo para </label>
            <select name="num_parqueos" class="form-control" id="">
                <option value="0">0 Vehiculos</option>
                <option value="1">1 Vehiculos</option>
                <option value="2">2 Vehiculos</option>
                <option value="3">3 Vehiculos</option>
                <option value="4">4 Vehiculos</option>
                <option value="5">5 Vehiculos</option>
            </select>
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Garantia</label>
            <input type="text" class="form-control" name="garantia">
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Link de You Tube</label>
            <input type="text" class="form-control" name="link_youtube">
            <!-- <input type="text" class="form-control" name="nombre"> --> <br>
            <label for="disabledTextInput" style="color: white;">Registro de Imagenes</label>
            <input type="file" class="form-control" multiple name="fotos[]" required><br>
            <label for="disabledTextInput" style="color: white;">Registro de Browsour</label>
            <input type="file" class="form-control" name="archivo" accept="application/pdf"><br>
            <button type="submit" class="btn btn-primary" name="registrar">Registrar</button>
        </form>
    </div>
    
    <br>
    
<?php
    include("../footer.php");
?>
<script>
    var  c = 0;
    $('document').ready(function(){
        $('#sumar').click(function(){
            var c = $("#num_cocina").val();
            c++;
             document.getElementById("num_cocina").value = c;
        });
        $('#resta').click(function(){
            var c = $("#num_cocina").val();
            if(c >= 1){
                c--;
            }
             document.getElementById("num_cocina").value = c;
        });
    });
</script>
    <!-- </body>

</html>
<script type="text/javascript">
    function subir(){
        var Form  = new FormData($('#filesForm')[0]);
        $.ajax({
            url: "agregarVenta.php",
            type: "post",
            data: Form,
            processData: false,
            contentType: false,
            success: function(data){
                alert('archivos agregados!');
            }
        });
    }
</script> -->
