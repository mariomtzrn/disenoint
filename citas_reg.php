<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>SimpleAdmin - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Plugins css-->
        <link href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css" rel="stylesheet" />
        <link rel="stylesheet" href="assets/plugins/switchery/switchery.min.css">
        <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    		<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    		<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    		<link href="assets/plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
    		<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="assets/css/metisMenu.min.css" rel="stylesheet">
        <!-- Icons CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="assets/css/style.css" rel="stylesheet">
    </head>

    <body>
      <div id="page-wrapper">
        <?php include("nav.php"); ?>
              <!-- START PAGE CONTENT -->
              <div id="page-right-content">
                <div class="container">
                  <h3>Registro de cita</h3>
                  <div class="container">
                    <form class="form-horizontal" method="post" role="form" action="">
                      <div class="form-group">
                          <label class="col-md-2 control-label" for="name">Nombre de paciente</label>
                          <div class="col-md-6">
                              <input type="text" required id="namePaciente" name="namePaciente" class="form-control" placeholder="Nombre del paciente">
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label" for="nameMedico">Nombre de medico</label>
                          <div class="col-md-6">
                              <input type="text" required id="nameMedico" name="nameMedico" class="form-control" placeholder="Nombre de medico">
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label" for="horaCita">Hora de cita</label>
                          <div class="col-md-6">
                            <div class="input-group">
                                <input id="timepicker" required id="horaCita" name="horaCita" type="text" class="form-control">
                                <span class="input-group-addon"><i class="mdi mdi-clock"></i></span>
                            </div><!-- input-group -->
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="col-md-2 control-label" for="fechaCita">Fecha de cita</label>
                          <div class="col-md-6">
                            <div>
                                <div class="input-group">
                                    <input type="text" required name="nameCita" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                    <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                </div><!-- input-group -->
                            </div>
                          </div>
                      </div>
                      <div class="form-group">
                          <label class="col-md-2 control-label" for="salaCita">Sala</label>
                          <div class="col-md-6">
                            <select class="form-control select2">
                              <option>Seleccione</option>
                              <option value="1">Sala 1</option>
                              <option value="2">Sala 2</option>
                              <option value="3">Sala 3</option>
                              <option value="4">Sala 4</option>
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
      </div>
      <!-- End #page-wrapper -->

      <!-- js placed at the end of the document so the pages load faster -->
          <script src="assets/js/jquery-2.1.4.min.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
          <script src="assets/js/metisMenu.min.js"></script>
          <script src="assets/js/jquery.slimscroll.min.js"></script>

          <script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js"></script>
          <script src="assets/plugins/select2/js/select2.min.js" type="text/javascript"></script>
          <script src="assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript"></script>
          <script src="assets/plugins/switchery/switchery.min.js"></script>
          <script type="text/javascript" src="assets/plugins/parsleyjs/parsley.min.js"></script>

          <script src="assets/plugins/moment/moment.js"></script>
         	<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
         	<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
         	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
         	<script src="assets/plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
       	  <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
          <script src="assets/plugins/summernote/summernote.min.js"></script>

          <!-- form advanced init js -->
          <script src="assets/pages/jquery.form-advanced.init.js"></script>

          <!-- App Js -->
          <script src="assets/js/jquery.app.js"></script>
    </body>
</html>
