<div class="container">
    <div class="row">
<div class="col-sm-12">
<div class="card-box widget-inline">
<div class="row">
<div class="col-lg-3 col-sm-6">
  <div class="widget-inline-box text-center">
    <h3 class="m-t-10"><i class="text-primary mdi mdi-access-point-network"></i> <b data-plugin="counterup">526</b></h3>
    <p class="text-muted">Total de citas registradas</p>
  </div>
</div>

<div class="col-lg-3 col-sm-6">
  <div class="widget-inline-box text-center">
    <h3 class="m-t-10"><i class="text-custom mdi mdi-airplay"></i> <b data-plugin="counterup">6</b></h3>
    <p class="text-muted">Médicos activos</p>
  </div>
</div>

<div class="col-lg-3 col-sm-6">
  <div class="widget-inline-box text-center">
    <h3 class="m-t-10"><i class="text-info mdi mdi-black-mesa"></i> <b data-plugin="counterup">511</b></h3>
    <p class="text-muted">Pacientes registrados</p>
  </div>
</div>

<div class="col-lg-3 col-sm-6">
  <div class="widget-inline-box text-center b-0">
    <h3 class="m-t-10"><i class="text-danger mdi mdi-cellphone-link"></i> <b data-plugin="counterup">1 325</b></h3>
    <p class="text-muted">Visitas al sitio</p>
  </div>
</div>

</div>
</div>
</div>
</div>
    <!--end row -->


    <div class="row">
        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="m-t-0">Citas</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Series A</h5>
                        </li>
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-muted"></i>Series B</h5>
                        </li>
                    </ul>
                </div>
                <div id="dashboard-bar-stacked" style="height: 300px;"></div>
            </div>
        </div> <!-- end col -->

        <div class="col-lg-6">
            <div class="card-box">
                <h4 class="m-t-0">Sales Analytics</h4>
                <div class="text-center">
                    <ul class="list-inline chart-detail-list">
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Mobiles</h5>
                        </li>
                        <li>
                            <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-info"></i>Tablets</h5>
                        </li>
                    </ul>
                </div>
                <div id="dashboard-line-chart" style="height: 300px;"></div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-t-0">Médicos</h4>
         <!--Tabla doctores------->
               <?php include 'doctores.php';?>
         <!--Tabla doctores------->
            </div>
        </div>
    </div>
</div>
<!-- end container -->
<div class="footer">
    <div>
        <strong>Simple Admin</strong> - Copyright &copy; 2017
    </div>
</div> <!-- end footer -->
</div>
<!-- End #page-right-content -->
