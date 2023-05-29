<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Agenda</a>
    <ul class="navbar-nav d-flex flex-row">
        <li class="nav-item mx-2">
          <a class="nav-link active" aria-current="page" href="#">🏠</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link active" href="#">📜</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link active" href="#">📖</a>
        </li>
      </ul>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Administración</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" id="inicio" href="#">🏠 Inicio</a>
          </li>
           <!--CONTACTOS-->
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              📘 Contacto
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" id="nuevo-contacto" href="#">📜 Nuevo Contacto</a></li>
              <li><a class="dropdown-item" id="contactos" href="#">📖 Ver Contactos</a></li>
            </ul>
          </li>

          <!--USUARIOS-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              👤 Usuario
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" id="nuevo-usuario" href="#">🚹 Crear Usuario</a></li>
              <li><a class="dropdown-item" id="usuarios" href="#">👥 Listar Usuarios</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" id="nuevo-rol" href="#">📋 Crear Rol</a></li>
              <li><a class="dropdown-item" id="config-rol" href="#">🔧 Configurar Rol con Usuario</a></li>
              <li><a class="dropdown-item" id="roles" href="#">📙 Listar Roles</a></li>
            </ul>
          </li>

          <!--PERMISOS-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              🔐 Permisos
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" id="config-permisos" href="#">🔧 Configuración de Permisos</a></li>
              <li><a class="dropdown-item" id="permisos" href="#">📗 Listar Permisos</a></li>
            </ul>
          </li>

          <!--DEPTOS-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              🏢 Departamentos
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" id="nuevo-depto" href="#">🏣 Nuevo Departamento</a></li>
              <li><a class="dropdown-item" id="deptos" href="#">📒 Listar Departamentos</a></li>
            </ul>
          </li>

          <!--MUNICIPIOS-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              🏬 Municipios
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" id="nuevo-municipio" href="#">🏣 Nuevo Municipio</a></li>
              <li><a class="dropdown-item" id="municipios" href="#">📕 Listar Municipios</a></li>
            </ul>
          </li>

        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>