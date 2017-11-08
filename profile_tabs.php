<div class="container">
  <h3>Perfil de usuario</h3>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">cuenta</a></li>
    <li><a data-toggle="tab" href="#ajustes">Ajustes</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="panel panel-default">
        <div class="panel-heading">Información de Cuenta</div>
        <div class="panel-body">
          <p><b>Nombre: </b>Stanley</p><br>
          <p><b>Apellido: </b>Jones</p><br>
          <p><b>Rol: </b>Administrador</p><br>
          <p><b>Nombre de usuario: </b>admin</p><br>
        </div>
      </div>
    </div>
    <div id="ajustes" class="tab-pane fade">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
              Modificar contraseña</a>
            </h4>
          </div>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <label for="oldpwd">Contraseña anterior:</label>
                    <input type="password" class="form-control" id="oldpwd">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Nueva contraseña:</label>
                    <input type="password" class="form-control" id="pwd">
                  </div>
                  <div class="form-group">
                    <label for="pwdconf">Confirmar contraseña:</label>
                    <input type="password" class="form-control" id="pwdconf">
                  </div>
                  <button type="submit" class="btn btn-default">Modificar</button>
                </form>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                Modificar correo</a>
              </h4>
            </div>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-body">
                <form>
                  <div class="form-group">
                    <label for="email">Nuevo correo:</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <button type="submit" class="btn btn-default">Modificar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer">
      <div>
          <strong>Simple Admin</strong> - Copyright &copy; 2017
      </div>
  </div> <!-- end footer -->

</div>
