<?php
    include("../header.php");
?>
    <div class="container"> 
        <h4 style="color: white; text-align: center;">Registro de Departamento</h4>       
        <form action="agregarEdificio.php" method="POST" enctype="multipart/form-data" id="filesForm">
            <input type="hidden" value="<?=$_SESSION['id_agente_venta']?>" name="id_agente_venta">
            <input type="hidden" value="pre_venta" name="tipo">
            <input type="hidden" value="Kyrios" name="inmueble">
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Zona</label>
            <select name="zona" id="" class="form-control">
                <option value="Calacoto">Calacoto</option>
                <option value="Achumani">Achumani</option>
                <option value="Obrajes">Obrajes</option>
                <option value="Sopocachi">Sopocachi</option>
                <option value="Miraflores">Miraflores</option>
                <option value="Irpavi">Irpavi</option>
                <option value="Los Pinos">Los Pinos</option>
                <option value="San Jorge">San Jorge</option>
                <option value="San Pedro">San Pedro</option>
                <option value="Central (Prado)">Central (Prado)</option>
                <option value="Chasquipampa">Chasquipampa</option>
                <option value="Cota Cota">Cota Cota</option>
                <option value="Sopocachi">Sopocachi</option> 
                <!-- <option value="Irpavi">Irpavi</option>
                <option value="Los Pinos">Los Pinos</option>
                <option value="Achocalla">Achocalla</option> -->
            </select>
            <br>
            <label for="" class="disabledTextInput" style="color: white;">Cocina </label>
            <select name="num_cocina" class="form-control" id="">
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
            <br>
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
            <br>
            <br>
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
            <!-- <input type="text" class="form-control" name="nombre"> -->
            <label for="disabledTextInput" style="color: white;">Imagenes</label>
            <input type="file" class="form-control" multiple name="fotos[]"><br>
            <button type="submit" class="btn btn-primary">Registrar</button>
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
            var c = $("#resul").val();
            c++;
             document.getElementById("resul").value = c;
        });
        $('#resta').click(function(){
            var c = $("#resul").val();
            if(c >= 1){
                c--;
            }
             document.getElementById("resul").value = c;
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
