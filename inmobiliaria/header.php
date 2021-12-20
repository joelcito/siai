<?php
include("../seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Joel Jonathan Flores Quispe">

  <title>Administracion</title>
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style>
  .joel {
    background-image: url(../../img/inicio/03.jpg);
    width: 100%;
    background-size: 400%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
    animation: movimiento 20s infinite linear alternate;
  }

  @keyframes movimiento {
    from {
      background-position: bottom left;
    }

    to {
      background-position: top right;
    }
  }
</style>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../admin/lista.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
          <?php
          echo $_SESSION['nombre'] . " " . $_SESSION['paterno'];
          ?>
          <sup>
            <?php
            echo $_SESSION['nivel'];
            ?>
          </sup>
        </div>
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <!-- Heading -->
      <?php
      if ($_SESSION['nivel'] == 1) {
      ?>
        <div class="sidebar-heading">
          Menu de Administracion
        </div>
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-users"></i>
            <span>Agente de Venta </span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Componetes:</h6>
              <a class="collapse-item" href="../agente_venta/registroAgente.php">Registrar Agente</a>
              <a class="collapse-item" href="../agente_venta/listaAgente.php">Mostrar Agentes</a>
              <a class="collapse-item" href="#">Buscar Agente</a>
            </div>
          </div>
        </li>


        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Configuracion</span>
          </a>
          <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Configuracioness:</h6>
              <a class="collapse-item" href="../admin/registrarZona.php">Adicionar Zona</a>
              <a class="collapse-item" href="">Reporte</a>
            <!-- <a class="collapse-item" href="#">Animations</a>
            <a class="collapse-item" href="#">Other</a> -->
            </div>
          </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
      <?php
      }
      ?>

      <!-- Heading -->
      <div class="sidebar-heading">
        Inmobiliaria
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#venta" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-cart-plus"></i>
          <span>Regsitro de Inmueble</span>
        </a>
        <div id="venta" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones de Venta:</h6>
            <!-- <a class="collapse-item" href="../venta/registrarCasa.php">Casa</a>
            <a class="collapse-item" href="../venta/registrarOficina.php">Oficina</a>
            <a class="collapse-item" href="../venta/registrarDepartamento.php">Departamento</a>
            <a class="collapse-item" href="../venta/registrarTerreno.php">Terreno</a>
            <a class="collapse-item" href="#">Local Comercial</a> -->
            <a class="collapse-item" href="../venta/registrar_inmueble_venta.php">Registrar Inmueble Venta</a>
            <a class="collapse-item" href="../alquiler/registrar_inmueble_alquiler.php">Registrar Inmueble Alquiler</a>
            <a class="collapse-item" href="../anticretico/registrar_inmueble_anticretico.php">Registrar Inmueble Anticretico</a>


          </div>
        </div>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- aqui comienza lo chido -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#venta" aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-cart-plus"></i><span>Venta</span>
        </a>    
        <div id="venta" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones de Ventas:</h6> -->
      <!-- <a class="collapse-item" href="../venta/registrarVenta.php">Registrar</a> -->
      <!-- <a class="btn btn-facebook text-center" style="margin-left: 20px;" href="#" id="#venta" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
      <!-- <i class="fas fa-cart-plus"></i><span>Venta</span> -->
      <!-- Nueva Venta
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-color: #7388DE;">
                <a class="dropdown-item" href="../venta/registrarVenta.php">Casa</a>
                <a class="dropdown-item" href="#">Oficina</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            <a class="collapse-item" href="#">Buscar</a>
            <a class="collapse-item" href="#">Listar</a>
          </div>
        </div>
      </li> -->
      <!-- aqui termina lo chido -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#alquiler" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Alquiler</span>
        </a>
        <div id="alquiler" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones de Alquiler:</h6>
            <a class="collapse-item" href="../alquiler/registrarCasa.php">Casa</a>
            <a class="collapse-item" href="../alquiler/registrarOficina.php">Oficina</a>
            <a class="collapse-item" href="../alquiler/registrarDepartamento.php">Departamento</a>
            <a class="collapse-item" href="../alquiler/registrarLocalComercial.php">Local Comercial</a>
            <a class="collapse-item" href="../alquiler/registrar_inmueble_alquiler.php">Registrar Inmueble</a>
          </div>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#anticretico" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-truck-moving"></i>
          <span>Anticretico</span>
        </a>
        <div id="anticretico" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones de Anticretico:</h6>
            <a class="collapse-item" href="../anticretico/registrarAnticretico.php">Casa</a>
            <a class="collapse-item" href="../anticretico/registrarAnticretico.php">Oficina</a>
            <a class="collapse-item" href="../anticretico/registrarDepartamento.php">Departamento</a>
            <a class="collapse-item" href="#">Local Comercial</a>
            <a class="collapse-item" href="../anticretico/registrar_inmueble_anticretico.php">Registrar Inmueble Anticretico</a>
          </div>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pre_venta" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-marker"></i>
          <span>Pre Venta</span>
        </a>
        <div id="pre_venta" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Acciones de Pre Venta:</h6>
            <a class="collapse-item" href="#">Casa</a>
            <a class="collapse-item" href="../pre_venta/registrarKyrios.php">Departamento Kyrios</a>
            <a class="collapse-item" href="../pre_venta/registrarEdificio.php">Registrar Edificio</a>
            <a class="collapse-item" href="#">Oficina</a>
            <a class="collapse-item" href="../pre_venta/registrarEdificio.php">Departamento Bethesda</a>
            <a class="collapse-item" href="#">Local Comercial</a>
          </div>
        </div>
      </li> -->
      <hr class="sidebar-divider d-none d-md-block">
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content" class="joel">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <!-- <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li> -->
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">

              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php
                  echo $_SESSION['nombre'] . " " . $_SESSION['paterno'];
                  ?>
                </span>
                <img class="img-profile rounded-circle" src="../../img/inicio/usuario.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../salir.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesion
                </a>
              </div>
            </li>

          </ul>

        </nav>