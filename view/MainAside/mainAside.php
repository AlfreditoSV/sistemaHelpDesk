  
  <?php
  if($_SESSION['rol_id']==1){
  ?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="../../public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Soporte</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../public/dist/img/user<?php echo $_SESSION['user_id']?>-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo "<span>".$_SESSION['user_name']. $_SESSION['user_surname']."</span>"?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
                <a href="../HOME/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../MnUsuario/" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mantenimiento Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../ConsultarTicket/" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../logout/" class="nav-link " id="logout">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrar Sesión</p>
                </a>
              </li>
        
         
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<?php
  }else if($_SESSION['rol_id']==2){
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.html" class="brand-link">
      <img src="../../public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Usuario</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../public/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo "<span>".$_SESSION['user_name']. $_SESSION['user_surname']."</span>"?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../HOME/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../NuevoTicket/" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nuevo Ticket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../ConsultarTicket/" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Consultar Ticket</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
                <a href="../logout/" class="nav-link " id="logout">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cerrar Sesión</p>
                </a>
              </li>
        
         
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<?php
  }
?>