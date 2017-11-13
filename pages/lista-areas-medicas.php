<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");
?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Areas medicas</h4>
                                    <div class="table-responsive">

<?php
//Agregar
if(isset($_GET["add"]) && $_GET["add"]=='true' && isset($_POST["agregar"])){
	mysql_query("INSERT INTO areas_medicas SET nombre_area='".$_POST["nombre_area"]."'");
	header("Location: lista-areas-medicas.php");
}
//Borrar
if(isset($_GET["delete"])){
	echo '&iquest;Seguro que desea borrarlo "#'.$_GET["delete"].'"? <br><a href="?confirm_delete='.$_GET["delete"].'">aceptar</a> - <a href="javascript:history.back()">cancelar</a>';
}
//Confirmar => Borrar
if(isset($_GET["confirm_delete"])){
	mysql_query("DELETE FROM areas_medicas WHERE id_area='".$_GET["confirm_delete"]."'");
	header("Location: lista-areas-medicas.php");
}
//Editar
if(isset($_POST["save"])){
	mysql_query("UPDATE areas_medicas SET nombre_area='".$_POST["nombre_area"]."' WHERE id_area='".$_GET["editar"]."'");
	header("Location: lista-areas-medicas.php");
}
?>
                                    <table id="NOdatatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
<form action="?add=true" method="post">
<?php //si en ese momento se esta editando el producto, ocultamos el form para agregar para no confundir al usuario
if(isset($_GET["editar"])){} else{ ?>
<tr><td><input type="text" placeholder="Nombre de area" name="nombre_area"/></td><td><input type="submit" value="agregar" name="agregar"></td></tr>
<?php } ?>
</form>
<?php $sql = mysql_query("SELECT * FROM areas_medicas ORDER BY id_area ASC");
$total = "";
while($row=mysql_fetch_assoc($sql)){
	if(isset($_GET["editar"])){
		//Si se va a editar
		//Buscamos si el ID que se edita es el mismo del $row[...] y mostramos el formulario unicamente ahi ||| Sino seguimos mostrando el resto de registros
		if($_GET["editar"]==$row["id_area"]){
			echo '<form action="" method="post">';
			echo'<tr><td><input type="text" value="'.$row["nombre_area"].'" name="nombre_area"/></td></td><td><input type="submit" value="guardar" name="save"> - <a href="javascript:history.back()">cancelar</a></td></tr>';
			echo '</form>';
		}
	} else { //Solo mostramos los registros
		echo'<tr><td>'.$row["nombre_area"].'</td><td><a href="?editar='.$row["id_area"].'">editar</a> - <a href="?delete='.$row["id_area"].'">borrar</a></td></tr>';
	}
} ?>
</tbody>
</table>
									
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end container -->


<?php
include("../tpl/footer.php");
?>