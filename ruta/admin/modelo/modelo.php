<?php
function plantilla($id){
  include("../coneccion.php");

  $consulta = "SELECT * FROM administrador WHERE idadministrador = $id";
  $datos = mysqli_query($conexion,$consulta);
  $mostar = mysqli_fetch_array($datos);
  $plantilla = 
  '
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <body>
    <header class="clearfix">
      <h1>REPORTE DE EDIFICOS </h1>
      <div class="formulario"><div class="nombre">Nombre: '.$mostar["nombre"].'</div>
        <div class="paterno">A. Paterno: '.$mostar["ap_paterno"].'</div>
        <div class="materno">A. Materno: '.$mostar["ap_materno"].'</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">EDIFICIO</th>
            <th class="desc">ZONA</th>
            <th>NRO. COP.</th>
            <th>CONTACTO</th>
            <th>CELULAR</th>
            <th>OBSERVACIONES</th>
            <th>SERVICIOS</th>
            <th>FECHA</th>
          </tr>
        </thead>
        <tbody>
        ';
        $consulta = "SELECT * FROM hoja_ruta WHERE administrador_idadministrador = $id";
        $datos = mysqli_query($conexion,$consulta);
        while($mostar = mysqli_fetch_array($datos)){
          $ser = "";
          $plantilla .=
            '<tr>
              <td class="service">'.$mostar["edificio"].'</td>
              <td class="desc">'.$mostar["zona"].'</td>
              <td class="unit">'.$mostar["nro_copropietario"].'</td>
              <td class="qty">'.$mostar["nom_contacto"].'</td>
              <td class="total">'.$mostar["celular"].'</td>
              <td class="total">'.$mostar["observaciones"].'</td>
              <td class="total">';
                $ser .= ($mostar['inf_economico'] == 0)? "* Informe Economico<br>":"";
                $ser .= ($mostar['man_general'] == 0)? "* Mantenimiento General<br>":"";
                $ser .= ($mostar['per_juridica'] == 0)? "* Personeria Juridica<br>":"";
                $ser .= ($mostar['audi'] == 0)? "* Auditoria<br>":"";
                $ser .= ($mostar['lim_vidrio'] == 0)? "* Limpieza de Vidrio<br>":"";
                $ser .= ($mostar['administracion'] == 0)? "* Administración<br>":"";
                $ser .= ($mostar['porteria'] == 0)? "* Porteria<br>":"";
                $ser .= ($mostar['jardineria'] == 0)? "* Jardineria<br>":"";
                $ser .= ($mostar['limpieza'] == 0)? "* Limpieza<br>":"";
                $ser .= ($mostar['mas_bombas'] == 0)? "* Mantenimiento Bomba de Agua<br>":"";
              $plantilla .=
              $ser.
              '</td>
              <td class="total">'.date_format(date_create($mostar["ini_fecha"]),"d/m/y").'</td>
            </tr>';
          }
          $plantilla .='
        </tbody>
      </table>
      <div id="notices">
        <div>NOTA:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      </div>
    </main>
    <footer>
      Reporte de Vendedor de Servicio de la Empresa S.I.A. Srl.
    </footer>
  </body>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  ';
  return $plantilla;
}
?>
