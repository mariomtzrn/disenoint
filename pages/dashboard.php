<?php
include("../config.php");
include("../tpl/header.php");
include("../tpl/aside.php");

//Stats -- contador
if(!function_exists("count_stats")){	//recive el nombre de tabla y cuenta los registros
	function count_stats($table){
		if($table=='ingresos'){
			$Stats = mysql_query("SELECT SUM(precio_consulta) as total FROM calendario_citas");
		} else {
			$Stats = mysql_query("SELECT COUNT(*) as total FROM {$table}");
		}
		$Count = mysql_fetch_assoc($Stats);
		echo $Count["total"];
	}
}
?>

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">

                        <div class="row">
							<div class="col-sm-12">
								<div class="card-box widget-inline">
									<div class="row">
										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-primary mdi mdi-heart-pulse"></i> <b data-plugin="counterup"><?php echo count_stats("calendario_citas"); ?></b></h3>
												<p class="text-muted">Consultas Totales</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-custom mdi mdi-stethoscope"></i> <b data-plugin="counterup"><?php echo count_stats("medicos"); ?></b></h3>
												<p class="text-muted">Medicos</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center">
												<h3 class="m-t-10"><i class="text-info mdi mdi-clipboard-account"></i> <b data-plugin="counterup"><?php echo count_stats("pacientes"); ?></b></h3>
												<p class="text-muted">Pacientes</p>
											</div>
										</div>

										<div class="col-lg-3 col-sm-6">
											<div class="widget-inline-box text-center b-0">
												<h3 class="m-t-10"><i class="text-danger mdi mdi-currency-usd"></i> <b data-plugin="counterup"><?php echo count_stats("ingresos"); ?></b></h3>
												<p class="text-muted">Ingresos</p>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
                        <!--end row -->


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Pacientes registrados</h4>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Hombres</h5>
                                            </li>
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-muted"></i>Mujeres</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-bar-stacked" style="height: 300px;"></div>
                                </div>
                            </div> <!-- end col -->

                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Analisis de ingresos</h4>
                                    <div class="text-center">
                                        <ul class="list-inline chart-detail-list">
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Citas</h5>
                                            </li>
                                            <li>
                                                <h5 class="font-normal"><i class="fa fa-circle m-r-10 text-info"></i>Medicamentos</h5>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="dashboard-line-chart" style="height: 300px;"></div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->





                       <div class="row">
                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Area Chart with Point</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Muestra los pacientes nuevos
                                    </p>
                                    <div id="morris-area-with-dotted" style="height: 320px;"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Medicos por area</h5>
                                    <div id="morris-donut-example" style="height: 320px;"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Multiple Statistics</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        Stacked chart not only shows the trends over time, you can also see the cumulative
                                        sum of all data.Your awesome text goes here.
                                    </p>

                                    <div id="website-stats" style="height: 320px;" class="flot-chart"></div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="p-20 m-b-20">
                                    <h5 class="m-t-0">Realtime Statistics</h5>
                                    <p class="text-muted font-13 m-b-30">
                                        You can update a chart periodically to get a real-time effect by using a timer
                                        to insert the new data in the plot and redraw it.
                                    </p>

                                    <div id="flotRealTime" style="height: 320px;" class="flot-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->




<!--                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0">Contacts</h4>
                                    <div class="table-responsive">



                                    </div>
                                </div>
                            </div>
                        </div>-->


                    </div>
                    <!-- end container -->

<?php
include("../tpl/footer.php");
?>

<script>

/**
* Theme: SimpleAdmin Admin Template
* Author: Coderthemes
* Morris Chart
*/

!function($) {
    "use strict";

    var Dashboard = function() {};

    //creates line chart
    Dashboard.prototype.createLineChart = function(element, data, xkey, ykeys, labels, opacity, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Line({
          element: element,
          data: data,
          xkey: xkey,
          ykeys: ykeys,
          labels: labels,
          fillOpacity: opacity,
          pointFillColors: Pfillcolor,
          pointStrokeColors: Pstockcolor,
          behaveLikeLine: true,
          gridLineColor: '#eef0f2',
          hideHover: 'auto',
          lineWidth: '3px',
          pointSize: 0,
          preUnits: '$',
          resize: true, //defaulted to true
          lineColors: lineColors
        });
    },

    //creates Stacked chart
    Dashboard.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },







    //creates area chart with dotted
    Dashboard.prototype.createAreaChartDotted = function(element, pointSize, lineWidth, data, xkey, ykeys, labels, Pfillcolor, Pstockcolor, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 3,
            lineWidth: 1,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            hideHover: 'auto',
            pointFillColors: Pfillcolor,
            pointStrokeColors: Pstockcolor,
            resize: true,
            smooth: false,
            gridLineColor: '#eef0f2',
            lineColors: lineColors
        });
    },


    //creates Donut chart
    Dashboard.prototype.createDonutChart = function(element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true, //defaulted to true
            colors: colors
        });
    },


    Dashboard.prototype.init = function() {

        //create line chart
        var $data  = [
             { y: '2008', a: 50, b: 0 },
            { y: '2009', a: 75, b: 50 },
            { y: '2010', a: 30, b: 80 },
            { y: '2011', a: 50, b: 50 },
            { y: '2012', a: 75, b: 10 },
            { y: '2013', a: 50, b: 40 },
            { y: '2014', a: 75, b: 50 },
            { y: '2015', a: 100, b: 70 }
          ];
        this.createLineChart('dashboard-line-chart', $data, 'y', ['a', 'b'], ['Mobiles', 'Tablets'],['0.1'],['#ffffff'],['#999999'], ['#458bc4', '#23b195']);

        //creating Stacked chart
        var $stckedData  = [
            { y: '2005', a: 45, b: 180 },
            { y: '2006', a: 75,  b: 65 },
            { y: '2007', a: 100, b: 90 },
            { y: '2008', a: 75,  b: 65 },
            { y: '2009', a: 100, b: 90 },
            { y: '2010', a: 75,  b: 65 },
            { y: '2011', a: 50,  b: 40 },
            { y: '2012', a: 75,  b: 65 },
            { y: '2013', a: 50,  b: 40 },
            { y: '2014', a: 75,  b: 65 },
            { y: '2015', a: 100, b: 90 }
        ];
        this.createStackedChart('dashboard-bar-stacked', $stckedData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#458bc4', '#ebeff2']);








        //creating area chart with dotted
        var $areaDotData = [
            { y: '2016', a: 5},
            { y: '2017', a: 3},
            { y: '2017', a: 12},
            { y: '2018', a: 8},
            { y: '2019', a: 15},
        ];
        this.createAreaChartDotted('morris-area-with-dotted', 0, 0, $areaDotData, 'y', ['a'], ['Pacientes'],['#ffffff'],['#999999'], ['#626773']);


        //creating donut chart
        var $donutData = [

<?php
$EnlistarAreas = mysql_query("SELECT * FROM areas_medicas ");
while($CualArea=mysql_fetch_assoc($EnlistarAreas)){

	$ListarPorArea = mysql_query("SELECT COUNT(m.area_id) as total_de_area, a.*, m.* FROM areas_medicas as a JOIN medicos as m WHERE a.id_area=m.area_id AND m.area_id='".$CualArea["id_area"]."'");
	while($Contador = mysql_fetch_assoc($ListarPorArea)){ ?>
				{label: "<?php echo $CualArea["nombre_area"]; ?>", value: <?php echo $Contador["total_de_area"]; ?>},
<?php }
} ?>
                {label: "", value: 0}	//Me ahorro concatenar las commmas (,)
            ];

<?php
function get_random_color() {
    for ($i = 0; $i<6; $i++)
    {
        $c .=  dechex(rand(0,15));
    }
    //return "#$c";
echo "#".$c;
} ?>


<?php
//Como no jalo el for:
/*$final=count_stats("areas_medicas");	//Previamente contamos cuantas areas medicas existen (declarado en dashboard)
for($i=0; $i<$final; $i++){
	//echo "'".get_random_color()."',";	//Obtener un color random para cada area medica
}*/
//...tuve que poner colores de mas por si a caso le ponen mas areas... el for era para dar colores random
//Se van rellenando mientras aparecen mas elementos
?>

	//Colores
    this.createDonutChart('morris-donut-example', $donutData, ['red','blue','green','gray','brown','skyblue','yellow','black','#FFFFFF']);	//Inivisble y no batallar con comma
    },



    //init
    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.Dashboard.init();
}(window.jQuery);
</script>
