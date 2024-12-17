<?php
session_start();

if ($_SESSION['sess_kt_admin'] == "y" or $_SESSION['sess_kt_front'] == "y" or $_SESSION['sess_kt_reservation'] == "y"){ 
	$allow_page = "y";
}

if ($allow_page == ""){ 
	header( "Location: index.html"); exit(); 
}


include "includes/connect2.php";
include "includes/func_backend.php";

if($_SESSION['sess_kt_name'] == "MD" or $_SESSION['sess_kt_name'] == "KOJI" or $_SESSION['sess_kt_name'] == "8002" or $_SESSION['sess_kt_name'] == "8004"){


$sql_1 = "select AVG(adr) AS avg_adr from z_dash_board_adr where date_booking BETWEEN '".$_SESSION['sess_kt_date_adr_s']."' AND '".$_SESSION['sess_kt_date_adr_e']."' ";
$res_1 = $mysqli -> query($sql_1);
$r1 = $res_1 -> fetch_array(MYSQLI_ASSOC);
$avg_adr = $r1['avg_adr'];

$sql_2 = "select AVG(rev) AS avg_rev from z_dash_board_adr where date_booking BETWEEN '".$_SESSION['sess_kt_date_adr_s']."' AND '".$_SESSION['sess_kt_date_adr_e']."' ";
$res_2 = $mysqli -> query($sql_2);
$r2 = $res_2 -> fetch_array(MYSQLI_ASSOC);
$avg_rev = $r2['avg_rev'];

$sql_3 = "select AVG(occ) AS avg_occ from z_dash_board_adr where date_booking BETWEEN '".$_SESSION['sess_kt_date_adr_s']."' AND '".$_SESSION['sess_kt_date_adr_e']."' ";
$res_3 = $mysqli -> query($sql_3);
$r3 = $res_3 -> fetch_array(MYSQLI_ASSOC);
$avg_occ = $r3['avg_occ'];

$avg_occ = $avg_occ / 100;

$avg_occ = strDec($avg_occ);

}


/////////////////// START GRAPH 9 ///////////////////////////////

$_POST['year'] = date("Y");

$year_1 = $_POST['year']."-01-01";
$year_11 = $_POST['year'].date("-m-d");

$old_year = $_POST['year'] - 1;

$year_2 = $old_year."-01-01";
$year_22 = $old_year.date("-m-d");

/////////////////// END GRAPH 9 ///////////////////////////////


?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />

		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->



		<style type="text/css">
			body, html {
				    height: 100%;
				    margin: 0;
				    padding: 0;
				    -webkit-font-smoothing: antialiased;
				    -moz-osx-font-smoothing: grayscale;
				    font-size: 15px!important;
				    font-weight: 400;
				    font-family: Inter,Helvetica,sans-serif;
				}
		</style>


	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default" data-kt-app-page-loading-enabled="true" data-kt-app-page-loading="on">

	

		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<?php include "includes/menu_top.php"; ?>
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<?php include "includes/menu_side_bar.php"; ?>	
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Dashboards</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">

									<?php 
									if($_SESSION['sess_kt_name'] == "MD" or $_SESSION['sess_kt_name'] == "KOJI" or $_SESSION['sess_kt_name'] == "8002" or $_SESSION['sess_kt_name'] == "8004"){
									?>	
									<input class="form-control form-control-solid w-160px" placeholder="Pick date rage" id="kt_daterangepicker_4" onchange="func_dash_board_01(this.value),func_dash_board_02(this.value),func_dash_board_03(this.value),func_dash_board_04(this.value),func_dash_board_08(this.value);" />

									<?php } ?>


									<?php if($_SESSION['sess_kt_reservation'] == "y" or $_SESSION['sess_kt_admin'] == "y" or $_SESSION['sess_kt_front'] == "y"){ ?>

									<a href="add_new_reservation.php" class="btn btn-sm fw-bold btn-primary">
										<i class="bi bi-calendar"></i>
									</a>

									<?php } ?>

									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->






<?php 
if($_SESSION['sess_kt_name'] == "MD" or $_SESSION['sess_kt_name'] == "KOJI" or $_SESSION['sess_kt_name'] == "8002" or $_SESSION['sess_kt_name'] == "8004"){
?>	
<!-- ///////////////// START CONTENT ///////////////////////////-->
<div id="kt_app_content" class="app-content flex-column-fluid">
	<div id="kt_app_content_container" class="app-container container-xxl"> 

		<div class="row">
			<div class="col-sm-12 col-md-6 col-lg-6 mb-5" id="show_dash_board_01">
				<span class="spinner-border spinner-border-sm align-middle text-primary ms-2"></span>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 mb-5" id="show_dash_board_02">
				<span class="spinner-border spinner-border-sm align-middle text-primary ms-2"></span>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 mb-5" id="show_dash_board_03">
				<span class="spinner-border spinner-border-sm align-middle text-primary ms-2"></span>
			</div>

			<div class="col-sm-12 col-md-6 col-lg-6 mb-5" id="show_dash_board_04">
				<span class="spinner-border spinner-border-sm align-middle text-primary ms-2"></span>
			</div>

		</div>


		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-8 mb-5">

				<div class="row">

					<div class="col-lg-12 mb-5">
						<div class="card">
							<div class="card-header">
								<h3 class="pt-10 d-none d-sm-block d-lg-block">Room <spna class="fs-6">(Division)</span></h3>
								<h3 class="pt-10 d-block d-sm-none d-lg-none">Room <spna class="fs-6"><br>(Division)</span></h3>
								<div class="card-toolbar">
									<span class="fs-6 pt-5 text-muted">
									<input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_5" onchange="setTimeout(func_dash_board_05(this.value), 5000);" style="width:170px;" />
									</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center" id="show_dash_board_05">
								<div id="kt_charts_5" class="min-h-auto h-200px w-800px">
									<span class="spinner-border spinner-border-sm align-middle text-primary ms-2"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 mb-5">
						<div class="card">
							<div class="card-header">
								<h3 class="pt-10 d-none d-sm-block d-lg-block">F&B <spna class="fs-6">(Division)</span></h3>
								<h3 class="pt-10 d-block d-sm-none d-lg-none">F&B <spna class="fs-6"><br>(Division)</span></h3>
								<div class="card-toolbar">
									<span class="fs-6 pt-5 text-muted">
									<input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_7" onchange="setTimeout(func_dash_board_07(this.value), 5000);" style="width:170px;" />
									</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center" id="show_dash_board_07">
								<div id="kt_charts_7" class="min-h-auto h-200px w-800px">
									<span class="spinner-border spinner-border-sm align-middle text-primary ms-2"></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-12 mb-5">
						<div class="card">
							<div class="card-header">
								<h3 class="pt-10 d-none d-sm-block d-lg-block">ADR <spna class="fs-6">Average Daily Rate</span></h3>
								<h3 class="pt-10 d-block d-sm-none d-lg-none">ADR <br><spna class="fs-6">AVG. Daily Rate</span></h3>
								<div class="card-toolbar">
									<span class="fs-6 pt-5 text-muted">
									<input class="form-control form-control-solid" placeholder="Pick date rage" id="kt_daterangepicker_6" onchange="setTimeout(func_dash_board_06(this.value), 5000);" style="width:170px;" />
									</span>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center" id="show_dash_board_061">
								<div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
									<div class="me-0">
										<div class="d-flex mb-2 mt-3">
											<span class="fs-2hx fw-bold text-gray-800 me-1 lh-1 ls-n2">
												<?php echo number_format($avg_adr); ?>
											</span>
										</div>
										<span class="fs-6 fw-semibold text-primary">ADR</span>
									</div>
									<div class="border-start-dashed border-end-dashed border-1 border-gray-300 ps-4 pe-4">
										<div class="d-flex mb-2 mt-3">
											<span class="fs-2hx fw-bold text-gray-800 me-1  lh-1 ls-n2">
											<?php echo number_format($avg_rev); ?>
											</span>
										</div>
										<span class="fs-6 fw-semibold text-success">REV/PAR</span>
									</div>
									<div class="border-end-dashed border-1 border-gray-300 pe-2">
										<div class="d-flex mb-2 mt-3">
											<span class="fs-2hx fw-bold text-gray-800 me-1 lh-1 ls-n2">
											<?php echo $avg_occ; ?>
											</span>
										</div>
										<span class="fs-6 fw-semibold text-info">OCC</span>
									</div>
								</div>
								<div id="kt_charts_6" class="min-h-auto h-200px w-800px">
									<span class="spinner-border spinner-border-sm align-middle text-primary ms-2"></span>
								</div>
							</div>
						</div>
					</div>



				</div>

			</div>

			<div class="col-sm-12 col-md-12 col-lg-4 mb-5">
				<div class="row">
					<div class="col-lg-12 mb-5" id="show_dash_board_08">
						<span class="spinner-border spinner-border-sm align-middle text-primary ms-2"></span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 mb-5">
						

						<div class="card d-none d-md-block d-lg-block">
							<div class="card-header">
								<h3 class="pt-10">Occupancy By Type</h3>
								<div class="card-toolbar">
								<select class="form-select form-select-transparent" aria-label="Select example" onchange="func_dash_board_09(this.value);">
									<option value="2021">2021</option>
									<option value="2022">2022</option>
									<option value="2023">2023</option>
									<option value="2024" selected>2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
								</select>
								</div>
							</div>
							<div class="card-body pt-2 pb-4 d-flex align-items-center">
								<div class="d-flex flex-column content-justify-center flex-row-fluid" id="show_dash_board_09">
									<div id="kt_charts_9" style="min-width: 380px; min-height: 380px"></div>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>
		</div>







		




	</div>
</div>
<!-- ///////////////// END CONTENT ///////////////////////////-->

<?php } ?>


					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->
		
		

		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->

		
		
		
		
		


		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<!--end::Custom Javascript-->
		<?php
		if($_SESSION['sess_kt_name'] == "MD" or $_SESSION['sess_kt_name'] == "KOJI" or $_SESSION['sess_kt_name'] == "8002" or $_SESSION['sess_kt_name'] == "8004"){
		?>
		<script>

		var start = moment().subtract(8, "days");
		var end = moment().subtract(2, "days");

		function cb(start, end) {
			$("#kt_daterangepicker_4").html(start.format("DD/MM/YYYY") + " - " + end.format("DD/MM/YYYY"));
		}

		$("#kt_daterangepicker_4").daterangepicker({
			locale: {
                  format: 'DD/MM/YY'
            },
			startDate: start,
			endDate: end,
			ranges: {
			"Today": [moment(), moment()],
			"Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
			"Last 7 Days": [moment().subtract(6, "days"), moment()],
			"Last 30 Days": [moment().subtract(29, "days"), moment()],
			"This Month": [moment().startOf("month"), moment().endOf("month")],
			"Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}, cb);

		cb(start, end);

        	function func_dash_board_01(page1){
				$.post( 
					"func_dash_board_01.php",
					{date_chk: page1
					 },
					function(data) {
						$('#show_dash_board_01').html(data);
					}
				  );
        	}

			function func_dash_board_02(page1){
				$.post( 
					"func_dash_board_02.php",
					{date_chk: page1
					 },
					function(data) {
						$('#show_dash_board_02').html(data);
					}
				  );
        	}

			function func_dash_board_03(page1){
				$.post( 
					"func_dash_board_03.php",
					{date_chk: page1
					 },
					function(data) {
						$('#show_dash_board_03').html(data);
					}
				  );
        	}

			function func_dash_board_04(page1){
				$.post( 
					"func_dash_board_04.php",
					{date_chk: page1
					 },
					function(data) {
						$('#show_dash_board_04').html(data);
					}
				  );
        	}

			function func_dash_board_08(page1){
				$.post( 
					"func_dash_board_08.php",
					{date_chk: page1
					 },
					function(data) {
						$('#show_dash_board_08').html(data);
					}
				  );
        	}

		var start2 = moment().subtract(7, "days");
		var end2 = moment().subtract(1, "days");

		function cb2(start2, end2) {
			$("#kt_daterangepicker_5").html(start.format("DD/MM/YYYY") + " - " + end.format("DD/MM/YYYY"));
		}

		$("#kt_daterangepicker_5").daterangepicker({
			locale: {
                  format: 'DD/MM/YY'
            },
			startDate: start2,
			endDate: end2,
			ranges: {
			"Today": [moment(), moment()],
			"Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
			"Last 7 Days": [moment().subtract(6, "days"), moment()],
			"Last 30 Days": [moment().subtract(29, "days"), moment()],
			"This Month": [moment().startOf("month"), moment().endOf("month")],
			"Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}, cb2);

        cb2(start2, end2);



			function func_dash_board_05(page1){
					$.post( 
						"func_dash_board_051.php",
						{date_chk: page1
						},
						function(data) {
							$('#show_dash_board_05').html(data);
						}
					);
			}






		var start3 = moment().subtract(30, "days");
		var end3 = moment().subtract(1, "days");

		function cb3(start3, end3) {
			$("#kt_daterangepicker_6").html(start.format("DD/MM/YYYY") + " - " + end.format("DD/MM/YYYY"));
		}

		$("#kt_daterangepicker_6").daterangepicker({
			locale: {
                  format: 'DD/MM/YY'
            },
			startDate: start3,
			endDate: end3,
			ranges: {
			"Today": [moment(), moment()],
			"Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
			"Last 7 Days": [moment().subtract(6, "days"), moment()],
			"Last 30 Days": [moment().subtract(29, "days"), moment()],
			"This Month": [moment().startOf("month"), moment().endOf("month")],
			"Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}, cb3);

        cb(start3, end3);

		function func_dash_board_06(page1){
				$.post( 
					"func_dash_board_061.php",
					{date_chk: page1
					 },
					function(data) {
						$('#show_dash_board_061').html(data);
					}
				  );
        }



		var start4 = moment().subtract(7, "days");
		var end4 = moment().subtract(1, "days");

		function cb4(start4, end4) {
			$("#kt_daterangepicker_7").html(start.format("DD/MM/YYYY") + " - " + end.format("DD/MM/YYYY"));
		}

		$("#kt_daterangepicker_7").daterangepicker({
			locale: {
                  format: 'DD/MM/YY'
            },
			startDate: start4,
			endDate: end4,
			ranges: {
			"Today": [moment(), moment()],
			"Yesterday": [moment().subtract(1, "days"), moment().subtract(1, "days")],
			"Last 7 Days": [moment().subtract(6, "days"), moment()],
			"Last 30 Days": [moment().subtract(29, "days"), moment()],
			"This Month": [moment().startOf("month"), moment().endOf("month")],
			"Last Month": [moment().subtract(1, "month").startOf("month"), moment().subtract(1, "month").endOf("month")]
			}
		}, cb4);

        cb4(start4, end4);



			function func_dash_board_07(page1){
					$.post( 
						"func_dash_board_07.php",
						{date_chk: page1
						},
						function(data) {
							$('#show_dash_board_07').html(data);
						}
					);
			}



			function func_dash_board_09(page1){
				$.post( 
					"func_dash_board_09.php",
					{year: page1
					 },
					function(data) {
						$('#show_dash_board_09').html(data);
					}
				  );
        	}		

	// Class definition
	var KTChartsWidget09 = (function () {
	// Private methods
	var initChart1 = function () {
		// Check if amchart library is included
		if (typeof am5 === "undefined") {
			return;
		}

		var element = document.getElementById("kt_charts_9");

		if (!element) {
			return;
		}

		var chart;
		var root;

		var init = function() {
			// Create root element
			// https://www.amcharts.com/docs/v5/getting-started/#Root_element
			root = am5.Root.new(element);

			// Set themes
			// https://www.amcharts.com/docs/v5/concepts/themes/
			root.setThemes([am5themes_Animated.new(root)]);

			// Create chart
			// https://www.amcharts.com/docs/v5/charts/radar-chart/
			chart = root.container.children.push(
				am5radar.RadarChart.new(root, {
					panX: false,
					panY: false,
					wheelX: "panX",
					wheelY: "zoomX",
					innerRadius: am5.percent(40),
					radius: am5.percent(70),
					arrangeTooltips: false,
				})
			);

			var cursor = chart.set(
				"cursor",
				am5radar.RadarCursor.new(root, {
					behavior: "zoomX",
				})
			);

			cursor.lineY.set("visible", false);

			// Create axes and their renderers
			// https://www.amcharts.com/docs/v5/charts/radar-chart/#Adding_axes
			var xRenderer = am5radar.AxisRendererCircular.new(root, {
				minGridDistance: 30,
			});
			
			xRenderer.labels.template.setAll({
				textType: "radial",
				radius: 10,
				paddingTop: 0,
				paddingBottom: 0,
				centerY: am5.p50,
				fontWeight: "400",
				fontSize: 11,
				fill: am5.color(KTUtil.getCssVariableValue("--kt-gray-800")),
			});

			xRenderer.grid.template.setAll({
				location: 0.5,
				strokeDasharray: [2, 2],
				stroke: KTUtil.getCssVariableValue('--kt-gray-400')
			});

			var xAxis = chart.xAxes.push(
				am5xy.CategoryAxis.new(root, {
					maxDeviation: 0,
					categoryField: "name",
					renderer: xRenderer,
				})
			);

			var yRenderer = am5radar.AxisRendererRadial.new(root, {
				minGridDistance: 30,
			});

			yRenderer.labels.template.setAll({
				fontWeight: "500",
				fontSize: 12,
				fill: am5.color(KTUtil.getCssVariableValue("--kt-gray-700")),
			});

			var yAxis = chart.yAxes.push(
				am5xy.ValueAxis.new(root, {
					renderer: yRenderer,
				})
			);

			yRenderer.grid.template.setAll({
				strokeDasharray: [2, 2],
				stroke: KTUtil.getCssVariableValue('--kt-gray-400')				
			});

			// Create series
			// https://www.amcharts.com/docs/v5/charts/radar-chart/#Adding_series
			var series1 = chart.series.push(
				am5radar.RadarLineSeries.new(root, {
					name: "<?php echo $old_year; ?>",
					xAxis: xAxis,
					yAxis: yAxis,
					valueYField: "value1",
					categoryXField: "name",
					fill: am5.color(KTUtil.getCssVariableValue("--kt-primary")),
				})
			);

			series1.strokes.template.setAll({
				strokeOpacity: 0,
			});

			series1.fills.template.setAll({
				visible: true,
				fill: am5.color(KTUtil.getCssVariableValue("--kt-primary")),
				fillOpacity: 0.5,
			});

			var series2 = chart.series.push(
				am5radar.RadarLineSeries.new(root, {
					name: "<?php echo $_POST['year']; ?>",
					xAxis: xAxis,
					yAxis: yAxis,
					valueYField: "value2",
					categoryXField: "name",
					stacked: true,
					tooltip: am5.Tooltip.new(root, {
						labelText: "<?php echo $old_year; ?>: {value1}\n<?php echo $_POST['year']; ?>:{value2}",
					}),
					fill: am5.color(KTUtil.getCssVariableValue("--kt-success")),
				})
			);

			series2.strokes.template.setAll({
				strokeOpacity: 0,
			});

			series2.fills.template.setAll({
				visible: true,
				fill: am5.color(KTUtil.getCssVariableValue("--kt-primary")),
				fillOpacity: 0.5,
			});

			var legend = chart.radarContainer.children.push(
				am5.Legend.new(root, {
					width: 150,
					centerX: am5.p50,
					centerY: am5.p50
				})
			);
			legend.data.setAll([series1, series2]);

			legend.labels.template.setAll({
				fontWeight: "600",
				fontSize: 13,
				fill: am5.color(KTUtil.getCssVariableValue("--kt-gray-700")),
			});

			// Set data
			// https://www.amcharts.com/docs/v5/charts/radar-chart/#Setting_data
			var data = [

                <?php
                $sql = "select DISTINCT name from tb_villa_room_id where name != 'OWNER HOUSE' order by room_sort asc";
                $res = $mysqli -> query($sql);
                while($r = $res -> fetch_array(MYSQLI_ASSOC)){
                $name = $r['name'];
                
                $sql_0 = "select * from tb_villa_room_id where name = '".$name."' ";
                $res_0 = $mysqli -> query($sql_0);
                $r0 = $res_0 -> fetch_array(MYSQLI_ASSOC);
                $nick_name = $r0['nick_name'];
                
                $sql_1 = "select SUM(qty) AS sum_new_qty_1 from tb_kt_report_room_type where room_type = '".$name."' and date_booking BETWEEN '".$year_1."' and '".$year_11."' order by date_booking asc";
                $res_1 = $mysqli -> query($sql_1);
                $r1 = $res_1 -> fetch_array(MYSQLI_ASSOC);
                $sum_new_qty_1 = $r1['sum_new_qty_1'];

                $sql_2 = "select SUM(qty) AS sum_old_qty_1 from tb_kt_report_room_type where room_type = '".$name."' and date_booking BETWEEN '".$year_2."' and '".$year_22."' order by date_booking asc";
                $res_2 = $mysqli -> query($sql_2);
                $r2 = $res_2 -> fetch_array(MYSQLI_ASSOC);
                $sum_old_qty_1 = $r2['sum_old_qty_1'];


                ?>
                
                {
					name: "<?php echo $nick_name; ?>",
					value1: <?php echo $sum_old_qty_1; ?>,
					value2: <?php echo $sum_new_qty_1; ?>,
				},
                
                <?php } ?>

			];

			series1.data.setAll(data);
			series2.data.setAll(data);
			xAxis.data.setAll(data);

			// Animate chart and series in
			// https://www.amcharts.com/docs/v5/concepts/animations/#Initial_animation
			series1.appear(1000);
			series2.appear(1000);
			chart.appear(1000, 100);
		}

		// On amchart ready
		am5.ready(function () {
			init();
		}); // end am5.ready()

		// Update chart on theme mode change
		KTThemeMode.on("kt.thememode.change", function() {     
			// Destroy chart
			root.dispose();

			// Reinit chart
			init();
		});
	};

	// Public methods
	return {
		init: function () {
			initChart1();
		}
	};
})();

// Webpack support
if (typeof module !== "undefined") {
	module.exports = KTChartsWidget09;
}

// On document ready
KTUtil.onDOMContentLoaded(function () {
	KTChartsWidget09.init();
});

			
</script>
<?php } ?>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>