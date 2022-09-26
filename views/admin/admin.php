<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="assets/Img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MarkeTech</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../public/assets/Img/avatar/<?php echo $_SESSION['Img'] ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="?url=config" class="d-block"><?php echo $_SESSION['User'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a  href="?url=home" class="nav-link">
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?url=Productos" class="nav-link ">
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?url=config" class="nav-link ">
                  <p>Actualizar Avatar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?url=CRUD" class="nav-link ">
                  <p>CRUD</p>
                </a>
              </li>
          <?php 
            if(isset($_SESSION['Logged'])){
                echo '<li class="nav-item">
                        <a class="nav-link" href="?url=Logout">Cerrar Sesión</a>
                      </li>';
            }else{
              echo '<li class="nav-item">
                      <a class="nav-link" href="?url=Login">Login</a>
                    </li>';
            }
          ?>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
  