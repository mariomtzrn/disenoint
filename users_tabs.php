<div class="container">
  <h3>Usuarios</h3>

  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Usuarios</a></li>
    <li><a data-toggle="tab" href="#menu1">Registrar usuario</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div class="row">
        <div class="col-sm-12">
          <div class="m-b-20">
            <button type="button" class="btn btn-default btn-bordered">Editar</button>
            <button type="button" class="btn btn-default btn-bordered">Eliminar</button>
          </div>
        </div>
      </div>
      <div class="table-responsive">
          <table class="table table-hover mails m-0 table table-actions-bar">
              <thead>
                  <tr>
                      <th>Editar</th>
                      <th>Nombre</th>
                      <th>Apellido</th>
                      <th>Correo</th>
                      <th>Nombre de usuario</th>
                      <th>Rol</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>
                        <button class="btn btn-icon btn-info"> <i class="fa fa-wrench"></i> </button>
                      </td>
                      <td>
                          Stanley
                      </td>
                      <td>
                          Jones
                      </td>
                      <td>
                          stanjones@gmail.com
                      </td>
                      <td>
                          admin
                      </td>
                      <td>
                          Administrador
                      </td>
                  </tr>
                </tbody>
            </table>
          </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <p>Formulario de registro de nuevo usuario</p>
      <form class="form-horizontal" method="post" role="form" action="">
        <div class="form-group">
            <label class="col-md-2 control-label" for="name">Nombre</label>
            <div class="col-md-6">
                <input type="text" required id="name" name="name" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="name">Apellido</label>
            <div class="col-md-6">
                <input type="text" required id="app" name="app" class="form-control" placeholder="Apellido">
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="mail">Correo</label>
            <div class="col-md-6">
                <input type="email" required id="mail" name="mail" class="form-control" placeholder="Correo">
            </div>
        </div>
        <div class="form-group">
          <label class="col-md-2 control-label" for="username">Nombre de usuario</label>
            <div class="col-md-6">
                <input type="text" required id="username" name="username" class="form-control" placeholder="Nombre de usuario">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="passwd">Contraseña</label>
            <div class="col-md-6">
                <input type="password" required id="passwd" name="passwd" class="form-control" placeholder="Contraseña">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="admin">Administrador</label>
            <div class="switchery-demo">
              <input type="checkbox" required ata-plugin="switchery"id="admin" name="admin" data-color="#1bb99a"/>
            </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="m-b-20">
              <button type="button" class="btn btn-success btn-bordered">Registrar</button>
              <button type="button" class="btn btn-danger btn-bordered">Cancelar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
