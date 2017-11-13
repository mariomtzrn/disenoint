<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");

if(isset($_POST["actualizar"])){
	$datos = mysql_query("UPDATE calendario_citas SET title='".$_POST["title"]."', paciente_id='".$_POST["paciente_id"]."', medico_id='".$_POST["medico_id"]."', precio_consulta='".$_POST["precio_consulta"]."' WHERE id='".$_GET["id"]."'");
	if($datos){
		echo '<script>alert("Exito");</script>';
	} else {
		echo '<script>alert("Fallo");</script>';
	}
}

?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">
                    <div class="container">
                        <div class="row">
						
							<div class="col-sm-12">
                                <h4 class="m-b-20 header-title">Resultados de busqueda <?php if(isset($_POST["q"])){ echo 'para "'.$_POST["q"].'"'; } ?></h4>

<?php
	include('../config.php');
	$q=$_POST['q'];//se recibe la cadena que queremos buscar
	if(isset($q)){
		$admin_res=mysql_query("select * from pacientes where (nombre_completo like '%$q%' or email like '%$q%' or phone like '%$q%') order by paciente_id LIMIT 5");
		if(mysql_num_rows($admin_res)>0){
			while($p=mysql_fetch_array($admin_res)){ ?>
			
                            <div class="col-md-4">
                        		<div class="text-center card-box">
                                    <div class="clearfix"></div>
                                    <div class="member-card">
                                        <div class="thumb-xl member-thumb m-b-10 center-block">
                                            <img src="../uploads/img/profile/<?php echo $p["picture"];?>" class="img-circle img-thumbnail" alt="profile-image">
                                            <i class="mdi mdi-information-outline member-star text-muted" title="unverified user"></i>
                                        </div>
                                        <div class="">
                                            <h4 class="m-b-5"><?php echo $p["nombre_completo"];?></h4>
                                        </div>
                                        <?php echo '<a href="perfil.php?tipo=paciente&id='.$p["paciente_id"].'"><button type="button" class="btn btn-default btn-sm m-t-10">View Profile</button></a>'; ?>

                                    </div>

                                </div>

                            </div> <!-- end col -->

<?php			}
		} else {
			echo 'sin resultados';
		}
	} else {
		echo 'sin resultados';
	}

?>
						
							</div>
						</div>
                    <!-- end container -->


<?php
include("../tpl/footer.php");
?>