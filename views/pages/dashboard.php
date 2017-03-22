<h1>BIENVENIDO <?php echo $_SESSION["usuario"]; ?></h1>
<a href="index.php?c=main&a=close"><button name="buttoncerrar">CERRAR SESION</button></a>
<div>
  <header>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#oda">
          <span class="sr-only">Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Mentalidad Fitness</a>

        </div>
        <div class="collapse navbar-collapse" id="oda">
          <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">Comidas<span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="?c=alimento">Alimentos</a></li>
                <li class="divider"></li>
                <li><a href="?c=desayuno">Desayunos</a></li>
                <li class="divider"></li>
                <li><a href="?c=almuerzo">Almuerzos</a></li>
                <li class="divider"></li>
                <li><a href="?c=snack">Snacks</a></li>
                <li class="divider"></li>
                <li><a href="?c=comida">Cena</a></li>
                <li class="divider"></li>
                <li><a href="?c=dieta">Dieta</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button">Seguridad<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="?c=rol">Rol</a></li>
              <li class="divider"></li>
              <li><a href="?c=pagina">Pagina</a></li>
              <li class="divider"></li>
              <li><a href="?c=usuario">Usuario</a></li>
            </ul>
          </li>
            <li><a href="?c=ejercicio">Ejercicios</a></li>
          </ul>
          </div>
        </div>
        <div class="container-responsive">
            <div class="fondo">
              <img src="views/assets/img/MF.jpg">
            </div>
        </div>
      </div>
    </nav>
  </header>
</div>
