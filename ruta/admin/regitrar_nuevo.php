<?php
    include("header.php");
    $id_administrador = $_SESSION["id_administrador"];
    // $consulta = "SELECT * FROM administrador WHERE idadministrador = $id_administrador";
    // echo $consulta;
    // $resltado = mysqli_query($conexion, $consulta);
    // if($resltado){
    //     echo mysqli_fetch_array($resltado)["nombre"];
    //     echo "si";
    // }
?>
    <div class="container">
        <h3 class="text-center">Registro de nuevo Edificio</h3>
        <div class="row">
            <div class="col-md-12">
                <br>
                <form action="agregar_hoja_ruta.php" method="POST">
                    <div class="row">
                        <input type="hidden" readonly="readonly" name="id_administrador" value="<?php echo $id_administrador?>">
                        <div class="col-md-6">
                            <label for="edificio">Nombre del Edificio: </label>
                            <input type="text" name="edificio" class="form-control" value="" placeholder="Ingrese el nombre del Edificio" required >    
                        </div>
                        <div class="col-md-6">
                            <label for="edificio">Cantidad de compropietarios: </label>
                            <input type="number" name="cant_copropietarios" value="0" class="form-control" min="0">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="edificio">Zona: </label>
                            <!-- <input type="text" name="zona" class="form-control">     -->
                            <select name="zona" id="" class="form-control" required>
                                <option value="">Seleccione la Zona</option>
                                <option value="Calacoto">Calacoto</option>
                                <option value="Achumani">Achumani</option>
                                <option value="Cota Cota">Cota Cota</option>
                                <option value="Irpavi">Irpavi</option>
                                <option value="Miraflores">Miraflores</option>
                                <option value="Obrajes">Obrajes</option>
                                <option value="Sopocachi">Sopocachi</option>
                                <option value="Central">Central</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="edificio">Nombre del Contacto: </label>
                            <input type="text" name="contacto" class="form-control" placeholder="Ingrese el nombre del contacto" required>    
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="edificio">Celular del Contacto: </label>
                            <input type="number" name="celular" class="form-control" value="0" min="0" >
                        </div>
                        <br> <br>
                        <div class="col-md-4">
                        <br>
                            <label for="">Servicios: </label>
                            <div class="row" style="border: 1px solid; border-radius: 12px;">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="informe_economico" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1" >Informe Economico</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="mantenimiento_general" class="form-check-input" id="exampleCheck2">
                                        <label class="form-check-label" for="exampleCheck2">Mantenimiento en General</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="personeria" class="form-check-input" id="exampleCheck3">
                                        <label class="form-check-label" for="exampleCheck3">Personeria Jurídica</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="auditoria" class="form-check-input" id="exampleCheck4">
                                        <label class="form-check-label" for="exampleCheck4">Auditorías</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="Limpieza_vidrio" class="form-check-input" id="exampleCheck5">
                                        <label class="form-check-label" for="exampleCheck5">Limpieza de Vidrios</label>
                                    </div>
                                </div>
                                <div class="col-md-6 borde">
                                    <div class="form-check">
                                        <input type="checkbox" name="administracion" class="form-check-input" id="exampleCheck6">
                                        <label class="form-check-label" for="exampleCheck6">Administración</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="porteria" class="form-check-input" id="exampleCheck7">
                                        <label class="form-check-label" for="exampleCheck7">Portería</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="jardineria" class="form-check-input" id="exampleCheck8">
                                        <label class="form-check-label" for="exampleCheck8">Jardinería</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="limpieza" class="form-check-input" id="exampleCheck9">
                                        <label class="form-check-label" for="exampleCheck9">Limpieza</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="bomba" class="form-check-input" id="exampleCheck10">
                                        <label class="form-check-label" for="exampleCheck10">Mantenimiento de Bombas de agua</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="edificio">Observaciones: </label>
                            <!-- <input type="t" name="observaciones" class="form-control">     -->
                            <textarea name="observacion" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                    <br>
                    <center>
                        <button class="btn-success btn-block    ">Agregar</button>
                    </center>
                </form>
            </div>
        </div>
    </div>
<?php
    include("footer.php");
?>