      <img src="views/assets/img/Logo.png" id="logo">
      <img  src="views/assets/img/1fit.png" style="width:100%" id="img2">
      <img src="views/assets/img/triangulo.png" id="triangulo" style="width: 100%">
      <form action="?c=main&a=login" method="post" name="form1">
        <div class="form-group" id="campo1">
          <input type="email" class="form-control" placeholder="Email" required="Este campo es obligatorio" name="data[]">
          <span class="glyphicon glyphicon-user" aria-hidden="true" id="contrasena"></span>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Contraseña" required="Este campo es obligatorio" name="data[]">
          <span class="glyphicon glyphicon-lock" aria-hidden="true" id="contrasena"></span>
        </div>
        <button  type="submit" class="btn btn-primary btn-lg btn-block">INICIAR SESIÓN</button>
      </form>

        <p>
          <button  type="button" class="btn btn-default btn-lg" id="btn1">REGISTRATE</button>
          <button  type="button" class="btn btn-default btn-lg" id="btn2">RECUPERAR CUENTA</button>
        </p>
