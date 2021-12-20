<?php
    include("../header.php");
?>
<style>
    label{
        color: white;
    }
</style>
    <div class="container">        
        <h4 style="color: white;">Registro de Agente</h4>
        <form action="agregarAgente.php" class="" method="POST">
            <label for="" class="disabledTextInput">Nombres:</label>
            <input type="text" class="form-control" name="nombre"><br>
            <label for="" class="disabledTextInput">Apellido Paterno:</label>
            <input type="text" class="form-control" name="paterno"><br>
            <label for="" class="disabledTextInput">Apellido Materno:</label>
            <input type="text" class="form-control" name="materno"><br>
            <label for="" class="disabledTextInput">Carnet de identidad:</label>
            <input type="text" class="form-control" name="carnet"><br>
            <label for="" class="disabledTextInput">Numero de celular:</label>
            <input type="number" class="form-control" name="celular"><br>
            <label for="" class="disabledTextInput">Cargo:</label>
            <select name="cargo" id="" class="form-control">
                <option value="1">Administrador</option>
                <option value="2">Agente de venta</option>
            </select><br>
            <label for="" class="disabledTextInput">Usuario:</label>
            <input type="text" class="form-control" name="usuario"><br>
            <label for="" class="disabledTextInput">Contraseña:</label>
            <input type="text" class="form-control" name="password"><br>
            <center>
                <button type="submit" class="btn btn-success">Registrar</button>
            </center>
            <br>
            <br>
        </form>
    </div>
<?php
    include("../footer.php");
?>