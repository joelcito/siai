<?php
    $id_edificio= $_GET['id'];
    include("header.php");
    include("../coneccion.php");
    $consulta = "SELECT * FROM hoja_ruta WHERE idhoja_ruta = $id_edificio";
    $resultado = mysqli_query($conexion,$consulta);
    if($resultado){
        $dato = mysqli_fetch_array($resultado);
    ?>
    <div class="container">
        <h3 class="text-center">Registro de nuevo Edificio</h3>
        <div class="row">
            <div class="col-md-12">
                <br>
                <form action="update_hoja_ruta.php" method="POST">
                    <div class="row">
                        <input type="hidden" readonly="readonly" name="id_edificio" value="<?php echo $id_edificio?>">
                        <div class="col-md-6">
                            <label for="edificio">Nombre del Edificio: </label>
                            <input type="text" name="edificio" class="form-control" value="<?php echo $dato['edificio']; ?>" required >    
                        </div>
                        <div class="col-md-6">
                            <label for="edificio">Cantidad de compropietarios: </label>
                            <input type="number" name="cant_copropietarios" value="<?php echo $dato['nro_copropietario']; ?>" class="form-control" min="0">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="edificio">Zona: </label>
                            <!-- <input type="text" name="zona" class="form-control">     -->
                            <select name="zona" id="" class="form-control" required>
                                <option value="<?php echo $dato['zona']; ?>"><?php echo $dato['zona']; ?></option>
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
                            <input type="text" name="contacto" class="form-control" placeholder="Ingrese el nombre del contacto" value="<?php echo $dato['nom_contacto']; ?>" required>    
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="edificio">Celular del Contacto: </label>
                            <input type="number" name="celular" class="form-control" value="<?php echo $dato['celular']; ?>" min="0" >
                        </div>
                        <div class="col-md-4">
                            <label for="">Servicios:</label>
                            <div class="row" style="border: 1px solid; border-radius: 12px;">
                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input type="checkbox" name="informe_economico" class="form-check-input" id="exampleCheck1"  <?php $haber=($dato['inf_economico'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck1" >Informe Economico</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="mantenimiento_general" class="form-check-input" id="exampleCheck2" <?php $haber=($dato['man_general'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck2">Mantenimiento en General</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="personeria" class="form-check-input" id="exampleCheck3" <?php $haber=($dato['per_juridica'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck3">Personeria Jurídica</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="auditoria" class="form-check-input" id="exampleCheck4" <?php $haber=($dato['audi'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck4">Auditorías</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="Limpieza_vidrio" class="form-check-input" id="exampleCheck5" <?php $haber=($dato['lim_vidrio'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck5">Limpieza de Vidrios</label>
                                    </div>
                                </div>
                                <div class="col-md-6 borde">
                                    <div class="form-check">
                                        <input type="checkbox" name="administracion" class="form-check-input" id="exampleCheck6" <?php $haber=($dato['administracion'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck6">Administración</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="porteria" class="form-check-input" id="exampleCheck7" <?php $haber=($dato['porteria'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck7">Portería</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="jardineria" class="form-check-input" id="exampleCheck8" <?php $haber=($dato['jardineria'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck8">Jardinería</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="limpieza" class="form-check-input" id="exampleCheck9" <?php $haber=($dato['limpieza'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck9">Limpieza</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" name="bomba" class="form-check-input" id="exampleCheck10" <?php $haber=($dato['mas_bombas'] == 1)? 'checked' : ''; echo $haber;?>>
                                        <label class="form-check-label" for="exampleCheck10">Mantenimiento de Bombas de agua</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="edificio">Observaciones: </label>
                            <!-- <input type="t" name="observaciones" class="form-control">     -->
                            <textarea name="observacion" id="" cols="30" rows="5" class="form-control"><?php echo $dato['observaciones']; ?></textarea>
                        </div>
                    </div>
                    <br>
                        <div class="row">
                            <div class="col-md-6">
                                 <button class="btn btn-success btn-block">Actualizar <i class="fas fa-pen-square"></i></button>
                            </div>
                            <div class="col-md-6">
                                <a href="mostrar_edificio.php" class="btn btn-block btn-danger">Cancelar <i class="fas fa-window-close"></i></a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    }
    include("footer.php");
?>