<?php
	include "includes/connect.php";
	include "includes/func_backend.php";
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

				.form-label,.form-control{ font-size:19px; }
		</style>


	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<?php include "includes/menu_top2.php"; ?>
				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<?php include "includes/menu_side_bar2.php"; ?>	
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">




<!-- ///////////////// START CONTENT ///////////////////////////-->

<div class="row g-7">
	<div class="col-xl-6" style="margin-top:50px;">
		<div class="row mb-3">
			<div class="col-4">
				<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
				    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">View Forms</h1>
				    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
						<li class="breadcrumb-item text-muted">
							<a href="#" class="text-muted text-hover-primary">Home</a>
						</li>
						<li class="breadcrumb-item">
							<span class="bullet bg-gray-400 w-5px h-2px"></span>
						</li>
						<li class="breadcrumb-item text-muted">Forms</li>
						<li class="breadcrumb-item text-muted">Front</li>
					</ul>
				</div>
			</div>
			<div class="col-8">
                <div class="d-flex align-items-center gap-2 gap-lg-3"  style="float: right;">
                    <div class="card-toolbar">
                        <select class="form-select d-flex align-items-center px-4" onchange="func_form_report(this.value)">
							<option value="0">Dept.</option>
							<option value="1">Front</option>
							<option value="2">Cashier</option>
							<option value="3">HouseKeeping</option>
							<option value="4">Restaurant</option>
							<option value="5">Kitchen</option>
							<option value="6">Laundry</option>
							<option value="7">Engineer</option>
							<option value="8">Pool</option>
							<option value="9">Taxi</option>
							<option value="10">Every One</option>
						</select>
	                </div>
			        <a href="main_form_petty.php" class="btn btn-sm fw-bold btn-primary">Petty Cash</a>
			    </div>
			</div>
		</div>



		<div class="card card-flush h-lg-100" id="kt_contacts_main">
			<div class="card-header pt-7" id="kt_chat_contacts_header">
				<div class="card-title">
					<span class="svg-icon svg-icon-1 me-2">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
							<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
						</svg>
					</span>
					<h2>Front Reception</h2>
				</div>
			</div>
			<div class="card-body pt-5">
				<div class="card card-flush">
					<div class="card-header">
						<div class="card-title align-items-center">
							<h2>
							<?php
							if($_GET[old_day] == "y"){

							$current_day1 = date("Y-m-d", strtotime("-1 day",strtotime(date("Y-m-d"))));
							$current_day2 = date("D j/m/y", strtotime("-1 day",strtotime(date("Y-m-d"))));

							}else{

								$current_day1 = date("Y-m-d");
								$current_day2 = date("D j/m/y");

							}

							$current_day = date("Y-m-d");
							$chk_date = DateDiff($current_day1, $current_day);

							//// START EDIT DATE ////////////

							//$current_day1 = "2024-12-11";
							//$current_day2 = "Wed 11/12/24";

							//// END EDIT DATE ////////////

							?>
							<?php if($chk_date < 1){ ?>
								<a href="main_form.php?old_day=y">
									<span class="badge  px-4 fs-3 badge-light-primary"><</span>
								</a>
							<?php } ?>

							<?php echo  $current_day2; ?>

							<?php if($chk_date == 1){ ?>
								<a href="main_form.php?old_day=n">
									<span class="badge  px-4 fs-3 badge-light-primary">></span>
								</a>
							<?php } ?>

							</h2>
							&nbsp;&nbsp;&nbsp;<span style="color:#ff4444;font-size:14px;">* จำเป็นต้องใส่ข้อมูลภายในวัน<br>** ระบบจะล๊อก หากไม่ใส่ข้อมูลเกิน 1 วัน</span>
						</div>
					</div>
					<div class="card-body" style="padding:0;">
						<form action="save_main_form.php" method="post">
							<input type="hidden" name="journal" value="<?php echo $current_day1; ?>">
							<input type="hidden" name="journal2" value="<?php echo $current_day2; ?>">
							<div class="d-flex flex-column gap-5 gap-md-5">
								<div class="card-title" style="margin-bottom:-10px;">
									<h2>MORNING</h2>
								</div>
								<div class="row">
									<div class="col">
										<label class="form-label">CHECK IN</label>
										<input class="form-control" name="chk_in_1" placeholder="ROOM" id="chk_in_1" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
									<div class="col">
										<label class="form-label">ADULT</label>
										<input class="form-control" name="adult_1" placeholder="PAX" id="adult_1" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
									<div class="col">
										<label class="form-label">CHILD</label>
										<input class="form-control" name="child_1" placeholder="PAX" id="child_1" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<label class="form-label">CHECK OUT</label>
										<input class="form-control" name="chk_out_1" placeholder="ROOM" id="chk_out_1" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
								</div>

								<div class="card-title" style="margin-bottom:-10px;">
									<h2>AFTERNOON</h2>
								</div>

								<div class="row">
									<div class="col">
										<label class="form-label">CHECK IN</label>
										<input class="form-control" name="chk_in_2" placeholder="ROOM" id="chk_in_2" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
									<div class="col">
										<label class="form-label">ADULT</label>
										<input class="form-control" name="adult_2" placeholder="PAX" id="adult_2" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
									<div class="col">
										<label class="form-label">CHILD</label>
										<input class="form-control" name="child_2" placeholder="PAX" id="child_2" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
								</div>

								<div class="row">
									<div class="col-4">
										<label class="form-label">CHECK OUT</label>
										<input class="form-control" name="chk_out_2" placeholder="ROOM" id="chk_out_2" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
									<div class="col">&nbsp;</div>
									<div class="col">&nbsp;</div>
								</div>

								<div class="row">
									<div class="col">
										<label class="form-label">NO SHOW</label>
										<input class="form-control" name="no_show" placeholder="ROOM" id="no_show" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
									<div class="col">
										<label class="form-label">H.Use/ Comp</label>
										<input class="form-control" name="huc" placeholder="ROOM" id="huc" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
									</div>
								</div>
														
								<div class="row">
									<div class="col">
										<label class="form-label">Out of Service</label>
										<div class="input-group mb-5">
											<input type="text" name="out_service" class="form-control" placeholder="Rm" style="max-width:60px;" id="out_service" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
											<span class="input-group-text">#</span>
											<input type="text" name="out_service_num" class="form-control" placeholder="xx,xx" id="out_service_num" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
										</div>
									</div>
									<div class="col">
										<label class="form-label">Vacant(x)</label>
											<div class="input-group mb-5">
												<input type="text" name="vacant" class="form-control" placeholder="Rm" style="max-width:60px;" id="vacant" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
												<span class="input-group-text">#</span>
												<input type="text" name="vacant_num" class="form-control" placeholder="xx,xx" id="vacant_num" onkeyup="func_main_form(document.getElementById('chk_out_1').value,document.getElementById('chk_out_2').value,document.getElementById('chk_in_1').value,document.getElementById('chk_in_2').value,document.getElementById('adult_1').value,document.getElementById('adult_2').value,document.getElementById('child_1').value,document.getElementById('child_2').value,document.getElementById('no_show').value,document.getElementById('huc').value,document.getElementById('out_service').value,document.getElementById('out_service_num').value,document.getElementById('vacant').value,document.getElementById('vacant_num').value);" />
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col">
											<label class="form-label">Room Revenue</label>
											<input class="form-control" name="room_rev" placeholder="Baht" />
										</div>
										<div class="col">
											<label class="form-label">Mini Bar</label>
											<input class="form-control" name="mini_bar" placeholder="Baht" />
										</div>
									</div>

									<div class="row">
										<div class="col">
											<label class="form-label">F&B Post</label>
											<input class="form-control" name="fb_post" placeholder="Baht" />
										</div>
										<div class="col">
											<label class="form-label">Bank Fee</label>
											<input class="form-control" name="bank_fee" placeholder="Baht" />
										</div>
									</div>

									<div class="row">
										<div class="col">
											<label class="form-label">Rental</label>
											<input class="form-control" name="rental" placeholder="Baht" />
										</div>
										<div class="col">
											<label class="form-label">Boat/Taxi</label>
											<input class="form-control" name="boat_taxi" placeholder="Baht" />
										</div>
									</div>

									<div class="row">
										<div class="col">
											<label class="form-label">Laundry</label>
											<input class="form-control" name="laundry" placeholder="Baht" />
										</div>
										<div class="col">
											<label class="form-label">Other</label>
											<input class="form-control" name="other" placeholder="Baht" />
										</div>
									</div>

									<div class="row">
										<div class="col">
											<label class="form-label">CASH</label>
											<input class="form-control" name="cash" placeholder="Baht" />
										</div>
										<div class="col">
											<label class="form-label">CREDIT</label>
											<input class="form-control" name="credit" placeholder="Baht" />
										</div>
									</div>

									<div class="row">
										<div class="col">
											<label class="form-label">Money transfer</label>
											<input class="form-control" name="money_transfer" placeholder="Baht" />
										</div>
									</div>

									<div class="col">
										<label class="fs-6 fw-semibold form-label mt-3">
											<span>Remark</span>
										</label>
										<textarea class="form-control" name="remark"></textarea>
									</div>

									<?php
									$sql = "select * from kt_report_front where journal = '".$current_day1."' ";
									$res = mysql_db_query($dbname,$sql);
									$num = mysql_num_rows($res);
									if($num == 0){
					
									?>
									<div class="separator mb-6"></div>
									<div class="d-flex justify-content-end">
										<input type="reset" class="btn btn-sm btn-light me-3" value="Cancel">
										<input type="submit" class="btn btn-sm btn-primary" value="Send">
									</div>

									<?php } ?>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="col-xl-6" style="margin-top:150px;" >
		<h3>Aday Report KTC: <?php echo $current_day2; ?></h3>
		<div id="show_main_form"></div>
	</div>	
</div>
<!-- ///////////////// END CONTENT ///////////////////////////-->



							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

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
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/new-target.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->

		<script type="text/javascript">
			function func_form_report(page1){


				if(page1 == 1){

					window.location.assign("https://kohtaocabana.com/backend3/main_form.php");
				}

				if(page1 == 3){

					window.location.assign("https://kohtaocabana.com/backend3/main_form_housekeeping.php");
				}

				if(page1 == 4){

					window.location.assign("https://kohtaocabana.com/backend3/main_form_rimlae.php");
				}

				if(page1 == 6){

					window.location.assign("https://kohtaocabana.com/backend3/main_form_laundry.php");
				}

				if(page1 == 8){

					window.location.assign("https://kohtaocabana.com/backend3/main_form_pool_report.php");
				}


			}


			function func_main_form(page1,page2,page3,page4,page5,page6,page7,page8,page9,page10,page11,page12,page13,page14)
		      {

		         $.post( 
		               "func_main_form.php",
		                {chk_out_1: page1,
		                 chk_out_2: page2,
		                 chk_in_1: page3,
		                 chk_in_2: page4,
		                 adult_1: page5,
		                 adult_2: page6,
		                 child_1: page7,
		                 child_2: page8,
		                 no_show: page9,
		                 huc: page10,
		                 out_service: page11,
		                 out_service_num: page12,
		                 vacant: page13,
		                 vacant_num: page14,
		                 journal: '<?php echo $current_day1; ?>',
		                 journal2: '<?php echo $current_day2; ?>'
		                },
		               function(data) {
		               $('#show_main_form').html(data);
		               }
		         );

		      }



		</script>

		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>