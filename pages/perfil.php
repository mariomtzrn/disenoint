<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");
?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">

<?php

	$profile_table = $_GET["tipo"];
	switch($profile_table){
		case 'paciente':
			$profile_table = 'pacientes';
			$ID = 'paciente_id';
		break;
		case 'medico':
			$profile_table = 'medicos';
			$ID = 'medico_id';
		break;
	}
	
	$profile = mysql_query("SELECT * FROM {$profile_table} WHERE {$ID} = '".$_GET["id"]."' ");
	if(mysql_num_rows($profile)>0){
		while($data=mysql_fetch_assoc($profile)){
?>					
                        <div class="row">
                            <div class="col-md-12">
                                <div class="p-0 text-center">
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="../uploads/img/profile/<?php echo $data["picture"]; ?>" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-5"><?php if($_GET["tipo"]=='medico'){ echo $data["fullname"]; } else if($_GET["tipo"]=='paciente'){ echo $data["nombre_completo"]; } ?></h4>
                                        </div>
                                    </div>

                                </div> <!-- end card-box -->

                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="m-t-30">
                            <ul class="nav nav-tabs tabs-bordered">
                                <li class="active">
                                    <a href="#home-b1" data-toggle="tab" aria-expanded="true">
                                        Profile
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="home-b1">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Personal Information</h3>
                                                </div>
                                                <div class="panel-body">
												<?php if($data["phone"]){ ?>
                                                    <div class="m-b-20">
                                                        <strong>Telefono</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $data["phone"]; ?></p>
                                                    </div>
												<?php } ?>
												<?php if($data["email"]){ ?>
                                                    <div class="m-b-20">
                                                        <strong>Email</strong>
                                                        <br>
                                                        <p class="text-muted"><?php echo $data["email"]; ?></p>
                                                    </div>
												<?php } ?>
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->
                                        </div>


                                        <div class="col-md-8">
                                            <!-- Personal-Information -->
                                            <div class="panel panel-default panel-fill">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title">Historial medico</h3>
                                                </div>
                                                <div class="panel-body">
													
													
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="timeline timeline-left">
<?php
	$filtrar_historial='';
	if($_GET["tipo"]=='medico'){
		$filtro_historial = " AND m.medico_id='".$_GET["id"]."'  ";
	} else
	if($_GET["tipo"]=='paciente') {
		$filtro_historial = " AND p.paciente_id='".$_GET["id"]."'  ";
	}
 	$MostrarDatos = mysql_query("SELECT a.*, c.*, m.*, p.* FROM areas_medicas as a JOIN calendario_citas as c JOIN medicos as m JOIN pacientes as p WHERE a.id_area=m.area_id AND p.paciente_id=c.paciente_id AND m.medico_id=c.medico_id {$filtro_historial} ");
	if(mysql_num_rows($MostrarDatos)>0){
		echo '
                                    <article class="timeline-item alt">
                                        <div class="text-left">
                                            <div class="time-show first">
                                                <a href="#" class="btn btn-custom">Linea temporal</a>
                                            </div>
                                        </div>
                                    </article>
		';
	while($info=mysql_fetch_assoc($MostrarDatos)){ ?>
                                    <article class="timeline-item">
                                        <div class="timeline-desk">
                                            <div class="panel">
                                                <div class="timeline-box">
                                                    <span class="arrow"></span>
                                                    <span class="timeline-icon"><i class="mdi mdi-checkbox-blank-circle-outline"></i></span>
                                                    <h4 class="text-muted"><?php echo $info["startdate"]; ?></h4>
                                                    <p class="timeline-date text-muted"><small><?php echo $info["title"]; ?></small></p>
                                                    <p><?php if($_GET["tipo"]=='paciente'){ echo '<b>Medico: </b>'.$info["fullname"]; } else if($_GET["tipo"]=='medico'){ echo '<b>Paciente: </b>'.$info["nombre_completo"]; } ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
	<?php } } else { echo '<p>No hay registros en el historial medico</p>'; } ?>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



													
													
													
													
                                                </div>
                                            </div>
                                            <!-- Personal-Information -->

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
<?php
		}
	} else { echo '<div class="row"><p>Esta persona no existe.</p></div>';  }
?>
						
					
					</div>
                    <!-- end container -->


<?php
include("../tpl/footer.php");
?>