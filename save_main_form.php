<?php
	include "includes/connect2.php";
	include "includes/func_backend.php";

	function notify_message($message,$token){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => LINE_API,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "message=".$message,
        CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer ".$token,
        "Cache-Control: no-cache",
        "Content-type: application/x-www-form-urlencoded"
        ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

	$res = json_decode($result);
	return $res;
	}
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
                                            
<div class="row py-3 py-lg-6">      
    <div class="col-lg-8">
		<div class="d-flex flex-stack pb-10">
			<div class="page-title d-flex flex-column justify-content-left flex-wrap me-3">
				<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">View Forms</h1>
				<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
					<li class="breadcrumb-item text-muted">
						<a href="#" class="text-muted text-hover-primary">Home</a>
					</li>
					<li class="breadcrumb-item">
						<span class="bullet bg-gray-400 w-5px h-2px"></span>
					</li>
					<li class="breadcrumb-item text-muted">Forms</li>
				</ul>
			</div>
			<div class="d-flex align-items-center gap-2 gap-lg-3">
				<a href="main_form_petty.php" class="btn btn-sm fw-bold btn-primary">Petty Cash</a>
			</div>
		</div>
	</div>	
</div>

<div class="row g-7">
	<div class="col-lg-6 col-xl-3">
		<div class="card card-flush">
			<div class="card-header pt-7" id="kt_chat_contacts_header">
				<div class="card-title">
					<h2>Groups</h2>
				</div>
			</div>
			<div class="card-body pt-5">
				<div class="d-flex flex-column gap-5">
					<div class="d-flex flex-stack">
						<a href="main_form.php" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary">Front</a>
						<a href="#" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary">Cashier</a>
					</div>
					<div class="d-flex flex-stack">
						<a href="#" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary">HouseKeeping</a>
						<a href="#" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary">Restaurant</a>
					</div>
					<div class="d-flex flex-stack">
						<a href="#" class="fs-6 fw-bold text-gray-800 text-hover-primary">Kitchen</a>
						<a href="#" class="fs-6 fw-bold text-gray-800 text-hover-primary">Laundry</a>
					</div>
					<div class="d-flex flex-stack">
						<a href="#" class="fs-6 fw-bold text-gray-800 text-hover-primary">Engineer</a>
						<a href="#" class="fs-6 fw-bold text-gray-800 text-hover-primary text-active-primary">Pool</a>
					</div>
					<div class="d-flex flex-stack">
						<a href="#" class="fs-6 fw-bold text-gray-800 text-hover-primary">Taxi</a>
					</div>
				</div>
				<div class="separator my-7"></div>
				<label class="fs-6 fw-semibold form-label">Every One</label>
			</div>
		</div>
	</div>
	<div class="col-xl-6">
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
							<h2><?php echo $_POST['journal2']; ?></h2>
						</div>
					</div>
					<div class="card-body pt-0">
						<div class="d-flex flex-column gap-5 gap-md-5">
							<?php

/////////////////////////////// start close day /////////////////////////////////////////////////////

$create_time = date("d-m-Y G:i");

//$current_date = date("Y-m-d");
$current_date = $_POST['journal'];
$txt1 = explode("-",$_POST['journal']);
$y1 = $txt1[0];
$m1 = $txt1[1];
$d1 = $txt1[2];
$current_date2 = $d1."-".$m1."-".$y1;

$sql = "delete from z_temp_source";
$res = $mysqli -> query($sql);

$sql = "delete from z_temp_age";
$res = $mysqli -> query($sql);


$sql = "select * from tb_booking_villa_number where date_booking = '".$current_date."' ";
$res = $mysqli -> query($sql);
$i = 1;
while($r = $res -> fetch_array(MYSQLI_ASSOC)){
$reservation_id = $r['reservation_id'];
$folio_type = $r['folio_type'];
$room_price = $r['price'];
$room_name = $r['room_name'];
$room_number = $r['room_number'];
$adult = $r['adult'];
$child = $r['child'];
$infants = $r['infants'];

$sql_1 = "select * from tb_booking_villa where id = '".$reservation_id."' and folio_type = '".$folio_type."' and room2 = '' and status_guest != '0' ";
$res_1 = $mysqli -> query($sql_1);
$num_1 = mysqli_num_rows($res_1);

    if($num_1 != 0){

        $current_room_price = $current_room_price + $room_price;

        $sql_11 = "select * from tb_booking_customer where id = '".$reservation_id."' ";
        $res_11 = $mysqli -> query($sql_11);
        $r11 = $res_11 -> fetch_array(MYSQLI_ASSOC);
        $source_booking = $r11['source_booking'];
        $agent = $r11['agent'];


        $sql_12 = "select * from tb_villa_source_status where id = '".$source_booking."' ";
        $res_12 = $mysqli -> query($sql_12);
        $r12 = $res_12 -> fetch_array(MYSQLI_ASSOC);
        $source_name = $r12['name'];

        $sql_13 = "select * from tb_villa_agent where id = '".$agent."' ";
		$res_13 = $mysqli -> query($sql_13);
        $r13 = $res_13 -> fetch_array(MYSQLI_ASSOC);
        $company = $r13['company_sub'];

        if($company == ""){ $company = $source_name; }

        $sql_14 = "insert into z_temp_source values('".$reservation_id."','".$source_name."','".$company."','".$room_name."','".$room_number."','".$room_price."','".$adult."','".$child."','".$infants."')";
        $mysqli -> query($sql_14);


        $sql_15 = "select * from tb_booking_guest_in_room_en where reservation_id = '".$reservation_id."' and folio_type = '".$folio_type."' ";
        $res_15 = $mysqli -> query($sql_15);
        while($r15 = $res_15 -> fetch_array(MYSQLI_ASSOC)){
		$age_group = $r15['age_group'];
        $country = $r15['country'];

        $sql_151 = "insert into z_temp_age values('".$age_group."','".$country."')";
        $mysqli -> query($sql_151);
		

        }

        $sql_16 = "select * from tb_booking_guest_in_room_th where reservation_id = '".$reservation_id."' and folio_type = '".$folio_type."' ";
        $res_16 = $mysqli -> query($sql_16);
        while($r16 = $res_16 -> fetch_array(MYSQLI_ASSOC)){
		$age_group = $r16['age_group'];


        $sql_161 = "insert into z_temp_age values('".$age_group."','THA')";
        $mysqli -> query($sql_161);


        }

    }
}

$sql_2 = "select SUM(price) AS sum_bill_mini from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '14' and status_bill != '3' ";
$res_2 = $mysqli -> query($sql_2);
$r2 = $res_2 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_mini = $r2['sum_bill_mini'];

$sql_21 = "select SUM(price) AS sum_bill_taxi from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '5' and status_bill != '3' ";
$res_21 = $mysqli -> query($sql_21);
$r21 = $res_21 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_taxi = $r21['sum_bill_taxi'];

$sql_22 = "select SUM(price) AS sum_bill_taxi_boat from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '6' and status_bill != '3' ";
$res_22 = $mysqli -> query($sql_22);
$r22 = $res_22 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_taxi_boat = $r22['sum_bill_taxi_boat'];

$sql_23 = "select SUM(price) AS sum_bill_boat_trip from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '9' and status_bill != '3' ";
$res_23 = $mysqli -> query($sql_23);
$r23 = $res_23 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_boat_trip = $r23['sum_bill_boat_trip'];

$sql_3 = "select SUM(price) AS sum_bill_bed from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '10' and status_bill != '3' ";
$res_3 = $mysqli -> query($sql_3);
$r3 = $res_3 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_bed = $r3['sum_bill_bed'];

$sql_41 = "select SUM(price) AS sum_bill_laundry from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '8' and status_bill != '3' ";
$res_41 = $mysqli -> query($sql_41);
$r41 = $res_41 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_laundry = $r41['sum_bill_laundry'];

$sql_42 = "select SUM(price) AS sum_bill_other from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '11' and status_bill != '3' ";
$res_42 = $mysqli -> query($sql_42);
$r42 = $res_42 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_other = $r42['sum_bill_other'];

$sql_43 = "select SUM(price) AS sum_bill_rental from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '16' and status_bill != '3' ";
$res_43 = $mysqli -> query($sql_43);
$r43 = $res_43 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_rental = $r43['sum_bill_rental'];

$sql_5 = "select SUM(price) AS sum_bill_spa from tb_booking_bill where create_time REGEXP '".$current_date2."' and item_type = '7' and status_bill != '3' ";
$res_5 = $mysqli -> query($sql_5);
$r5 = $res_5 -> fetch_array(MYSQLI_ASSOC);
$sum_bill_spa = $r5['sum_bill_spa'];

$sql_6 = "select * from kt_report_rimlae2 where journal = '".$current_date."' ";
$res_6 = $mysqli -> query($sql_6);
$r6 = $res_6 -> fetch_array(MYSQLI_ASSOC);
$rev_group_inhouse_set = $r6['rev_group_inhouse_set'];
$rev_group_food = $r6['rev_group_food'];
$rev_group_bev = $r6['rev_group_bev'];
$rev_group_alcohol = $r6['rev_group_alcohol'];
$rev_group_dessert = $r6['rev_group_dessert'];
$rev_group_nfood = $r6['rev_group_nfood'];
$rev_group_other = $r6['rev_group_other'];
$breakfast_food = $r6['breakfast_food'];
$beach_food = $r6['beach_food'];
$breakfast_bev = $r6['breakfast_bev'];
$beach_bev = $r6['beach_bev'];
$beach_rm_service = $r6['beach_rm_service'];


$rim_lae_price = $rev_group_inhouse_set + $rev_group_food + $rev_group_bev + $rev_group_alcohol + $rev_group_dessert + $rev_group_nfood + $rev_group_other;

$rimlae_food = $rev_group_food + $breakfast_food + $beach_food;
$rimlae_bev = $rev_group_bev + $rev_group_alcohol + $breakfast_bev + $beach_bev;
$rimlae_rm_service = $beach_rm_service;
$rimlae_pool = $beach_food + $beach_bev; 


$sum_transport = $sum_bill_taxi + $sum_bill_taxi_boat + $sum_bill_boat_trip;
$sum_other = $sum_bill_laundry + $sum_bill_other + $sum_bill_rental;


$hotel_price = $current_room_price + $sum_bill_mini + $sum_bill_taxi + $sum_bill_taxi_boat + $sum_bill_boat_trip + $sum_bill_bed + $sum_bill_laundry + $sum_bill_other + $sum_bill_rental;


$sql_71 = "select DISTINCT company from z_temp_source where source_name != '' ";
$res_71 = $mysqli -> query($sql_71);
while($r71 = $res_71 -> fetch_array(MYSQLI_ASSOC)){
$company = $r71['company'];

$sql_711 = "select * from z_temp_source where company = '".$company."' ";
$res_711 = $mysqli -> query($sql_711);
$num_711 = mysqli_num_rows($res_711);

$sql_712 = "select SUM(room_price) AS sum_room_price from z_temp_source where company = '".$company."' ";
$res_712 = $mysqli -> query($sql_712);
$r712 = $res_712 -> fetch_array(MYSQLI_ASSOC);
$sum_room_price = $r712['sum_room_price'];

$sql_713 = "select DISTINCT reservation_id from z_temp_source where company = '".$company."' ";
$res_713 = $mysqli -> query($sql_713);
$x = 0;
$total_date = 0;
while($r713 = $res_713 -> fetch_array(MYSQLI_ASSOC)){
        $reservation_id = $r713['reservation_id'];


        $sql_251 = "select * from tb_booking_customer where id = '".$reservation_id."' ";
        $res_251 = $mysqli -> query($sql_251);
        $r251 = $res_251 -> fetch_array(MYSQLI_ASSOC);
        $check_in = $r251['check_in'];
        $create_date = $r251['create_date'];

        $txt1 = explode("/",$create_date);
        $d1 = $txt1[0];
        $m1 = $txt1[1];
        $y1 = $txt1[2];

        $create_date = $y1."-".$m1."-".$d1;

        $txt2 = explode("/",$check_in);
        $d2 = $txt2[0];
        $m2 = $txt2[1];
        $y2 = $txt2[2];

        $check_in = $y2."-".$m2."-".$d2;

        $num_date = DateDiff($create_date,$check_in);

        //echo $source_agent." > ".$reservation_id." > ".$create_date."-".$check_in." = ".$num_date."<br>";

        $total_date = $total_date + $num_date; 

        $x = $x + 1;

}

$total_date = $total_date / $x;


$sql_x2 = "insert into tb_kt_report_company values('".$current_date."','".$company."','".$num_711."','".$sum_room_price."','".$x."','".$total_date."','".$create_time."','".$_SESSION['sess_kt_name']."')";
$mysqli -> query($sql_x2);

}




$sql_72 = "select DISTINCT source_name from z_temp_source where source_name != '' ";
$res_72 = $mysqli -> query($sql_72);
while($r72 = $res_72 -> fetch_array(MYSQLI_ASSOC)){
$source_name = $r72['source_name'];

$sql_721 = "select * from z_temp_source where source_name = '".$source_name."' ";
$res_721 = $mysqli -> query($sql_721);
$num_721 = mysqli_num_rows($res_721);

$sql_x3 = "insert into tb_kt_report_source values('".$current_date."','".$source_name."','".$num_721."','".$create_time."','".$_SESSION['sess_kt_name']."')";
$mysqli -> query($sql_x3);

}

$sql_73 = "select DISTINCT room_name from z_temp_source where source_name != '' ";
$res_73 = $mysqli -> query($sql_73);
while($r73 = $res_73 -> fetch_array(MYSQLI_ASSOC)){
$room_name = $r73['room_name'];


$sql_731 = "select * from z_temp_source where room_name = '".$room_name."' ";
$res_731 = $mysqli -> query($sql_731);
$num_731 = mysqli_num_rows($res_731);

$sql_732 = "select SUM(room_price) AS sum_room_price from z_temp_source where room_name = '".$room_name."' ";
$res_732 = $mysqli -> query($sql_732);
$r732 = $res_732 -> fetch_array(MYSQLI_ASSOC);
$sum_room_price = $r732['sum_room_price'];

$sql_733 = "select * from tb_villa_room_id where name = '".$room_name."' ";
$res_733 = $mysqli -> query($sql_733);
$r733 = $res_733 -> fetch_array(MYSQLI_ASSOC);
$cat_room = $r733['cat_room'];
$room_sort = $r2['room_sort'];

$sql_x4 = "insert into tb_kt_report_room_type values('".$current_date."','".$cat_room."','".$room_name."','".$room_sort."','".$num_731."','".$sum_room_price."','".$create_time."','".$_SESSION['sess_kt_name']."')";
$mysqli -> query($sql_x4);

}

$sql_74 = "select * from z_temp_source where source_name != '' ";
$res_74 = $mysqli -> query($sql_74);
while($r74 = $res_74 -> fetch_array(MYSQLI_ASSOC)){
$room_number = $r74['room_number'];
$room_price = $r74['room_price'];

$sql_x5 = "insert into tb_kt_report_room_number values('".$current_date."','".$room_number."','".$room_price."','".$create_time."','".$_SESSION['sess_kt_name']."')";
$mysqli -> query($sql_x5);

}

$sql_751 = "select SUM(adult) AS sum_adult from z_temp_source where source_name != '' ";
$res_751 = $mysqli -> query($sql_751);
$r751 = $res_751 -> fetch_array(MYSQLI_ASSOC);
$sum_adult = $r751['sum_adult'];

$sql_752 = "select SUM(child) AS sum_child from z_temp_source where source_name != '' ";
$res_752 = $mysqli -> query($sql_752);
$r752 = $res_752 -> fetch_array(MYSQLI_ASSOC);
$sum_child = $r752['sum_child'];

$sql_753 = "select SUM(infant) AS sum_infant from z_temp_source where source_name != '' ";
$res_753 = $mysqli -> query($sql_753);
$r753 = $res_753 -> fetch_array(MYSQLI_ASSOC);
$sum_infant = $r753['sum_infant'];

$sql_76 = "select DISTINCT age from z_temp_age order by age asc";
$res_76 = $mysqli -> query($sql_76);
while($r76 = $res_76 -> fetch_array(MYSQLI_ASSOC)){
$age = $r76['age'];

$sql_761 = "select * from z_temp_age where age = '".$age."' ";
$res_761 = $mysqli -> query($sql_761);
$num_761 = mysqli_num_rows($res_761);

$sql_x6 = "insert into tb_kt_report_age values('".$current_date."','".$age."','".$num_761."','".$create_time."','".$_SESSION['sess_kt_name']."')";
$mysqli -> query($sql_x6);

}

$sql_77 = "select DISTINCT nationality from z_temp_age ";
$res_77 = $mysqli -> query($sql_77);
while($r77 = $res_77 -> fetch_array(MYSQLI_ASSOC)){
$nationality = $r77['nationality'];

$sql_771 = "select * from z_temp_age where nationality = '".$nationality."' ";
$res_771 = $mysqli -> query($sql_771);
$num_771 = mysqli_num_rows($res_771);

$sql_x7 = "insert into tb_kt_report_nation values('".$current_date."','".$nationality."','".$num_771."','".$create_time."','".$_SESSION['sess_kt_name']."')";
$mysqli -> query($sql_x7);

}


$sql_x1 = "insert into tb_kt_report_resort values('".$current_date."','".$hotel_price."','".$rim_lae_price."','".$sum_bill_spa."','0','".$current_room_price."','".$sum_bill_mini."','".$sum_transport."','".$sum_bill_bed."','".$sum_other."','".$rimlae_food."','".$rimlae_bev."','".$rimlae_rm_service."','".$rimlae_pool."','".$sum_adult."','".$sum_child."','".$sum_infant."','".$create_time."','".$_SESSION['sess_kt_name']."')";
$mysqli -> query($sql_x1);



$sql_z = "select DISTINCT reservation_id from tb_booking_villa_number where date_booking = '".$_POST['journal']."' ";
$res_z = $mysqli -> query($sql_z);
while($rz = $res_z -> fetch_array(MYSQLI_ASSOC)){
$reservation_id = $rz['reservation_id'];




        $sql_z0 = "select * from tb_booking_villa where id = '".$reservation_id."' and room2 = '' and status_guest != '0' ";
        $res_z0 = $mysqli -> query($sql_z0);
        $num_z0 = mysqli_num_rows($res_z0);

        if($num_z0 == 1){

        $sql_z1 = "select * from tb_booking_customer where id = '".$reservation_id."' ";
        $res_z1 = $mysqli -> query($sql_z1);
        $rz1 = $res_z1 -> fetch_array(MYSQLI_ASSOC);
        $check_in = $rz1['check_in'];
        $create_date = $rz1['create_date'];
        $source_booking = $rz1['source_booking'];
        $agent = $rz1['agent'];

        $sql_z2 = "select * from tb_villa_source_status where id = '".$source_booking."' ";
        $res_z2 = $mysqli -> query($sql_z2);
        $rz2 = $res_z2 -> fetch_array(MYSQLI_ASSOC);
        $source_name = $rz2['name'];

        $sql_z3 = "select * from tb_villa_agent where id = '".$agent."' ";
		$res_z3 = $mysqli -> query($sql_z3);
        $rz3 = $res_z3 -> fetch_array(MYSQLI_ASSOC);
        $company = $rz3['company_sub'];

        if($company == ""){ $company = $source_name; }


        $txt1 = explode("/",$create_date);
        $d1 = $txt1[0];
        $m1 = $txt1[1];
        $y1 = $txt1[2];

        $create_date = $y1."-".$m1."-".$d1;

        $txt2 = explode("/",$check_in);
        $d2 = $txt2[0];
        $m2 = $txt2[1];
        $y2 = $txt2[2];

        $check_in = $y2."-".$m2."-".$d2;

        $num_date = DateDiff($create_date,$check_in);

        if($create_date != ""){

        $sql_x4 = "insert into tb_kt_report_mode2 values('".$_POST['journal']."','".$company."','".$num_date."','".$create_time."','".$_SESSION['sess_kt_name']."')";
        $mysqli -> query($sql_x4);

        }

    }

}


$sql_x = "select * from tb_booking_villa_number where date_booking = '".$current_date."' ";
$res_x = $mysqli -> query($sql_x);
while($rx = $res_x -> fetch_array(MYSQLI_ASSOC)){
    $reservation_id_x = $rx['reservation_id'];
    $price_x = $rx['price'];


	$sql_x1 = "select * from tb_booking_customer where id = '".$reservation_id_x."' and (status_res != '4' or status_res != '5' or status_res != '12') ";
	$res_x1 = $mysqli -> query($sql_x1);
	$rx1 = $res_x1 -> fetch_array(MYSQLI_ASSOC);
	//$status_res = $r1['status_res'];
	$num_x1 = mysqli_num_rows($res_x1);

    if($num_x1 != 0){ $sum_room_price_pre = $sum_room_price_pre + $price_x; }

}

$sql_x14 = "insert into tb_kt_report_pre values('".$current_date."','".$sum_room_price_pre."')";
$mysqli -> query($sql_x14);




/////////////////////////////// end close day /////////////////////////////////////////////////////






							$sql = "select * from tb_booking_villa_number where date_booking = '".$_POST['journal']."' ";
							$res = $mysqli -> query($sql);
							while($r = $res -> fetch_array(MYSQLI_ASSOC)){
							$reservation_id = $r['reservation_id'];
							$folio_type = $r['folio_type'];
							$price = $r['price'];
							$extra_bed = $r['extra_bed'];

								$sql_0 = "select * from tb_booking_customer where id = '".$reservation_id."' and status_res = '3' ";
								$res_0 = $mysqli -> query($sql_0);
								$num_0 = mysqli_num_rows($res_0);

								$sql_1 = "select * from tb_booking_villa where id = '".$reservation_id."' and folio_type = '".$folio_type."' and room2 = '' and (status_guest = '1' or status_guest = '3') ";
								$res_1 = $mysqli -> query($sql_1);
								$num_1 = mysqli_num_rows($res_1);

								$sql_2 = "select * from tb_booking_bill where reservation_id = '".$reservation_id."' and status_bill = '1' ";
								$res_2 = $mysqli -> query($sql_2);
								$num_2 = mysqli_num_rows($res_2);

								if($num_1 != 0 or $num_0 != 0 or $num_2 != 0){

									$day_price = $day_price + $price + $extra_bed;
									$num_room = $num_room + 1;

								}

							}

							$adr = $day_price / $num_room;
							$rev_par = $day_price / 55;
							$occ_adr = $num_room / 55;
							$occ_adr = $occ_adr * 10000;

							$adr = (int)$adr;
							$rev_par = (int)$rev_par;
							$occ_adr = (int)$occ_adr;

							$sql_3 = "insert into z_dash_board_adr values('','".$_POST['journal']."','".$adr."','".$rev_par."','".$occ_adr."','ADMIN')";
							$mysqli -> query($sql_3);




							$sql_z = "select * from kt_report_front where journal = '".$_POST['journal']."' ";
							$res_z = $mysqli -> query($sql_z);
							$num_z = mysqli_num_rows($res_z);

							if($num_z == 0){
															
							$create_time = date("d-m-Y G:i");
							$create_name = "FOM";

							$old_day = date("Y-m-d", strtotime("-1 day",strtotime($_POST['journal'])));

							//$_POST[remark] = preg_replace('[[:space:]]+', ' ', trim($_POST[remark]));
							//$_POST[remark] = addslashes($_POST[remark]);

							$sql_x = "select * from kt_report_front where journal = '".$old_day."' ";
							$res_x = $mysqli -> query($sql_x);
							$rx = $res_x -> fetch_array(MYSQLI_ASSOC);
							$in_house_old = $rx['in_house'];

							$occ_inhouse = $in_house_old - ($_POST['chk_out_1'] + $_POST['chk_out_2']);
							$occ_inhouse = $occ_inhouse + ($_POST['chk_in_1'] + $_POST['chk_in_2']);
							//$occ = $occ - $_POST[no_show];
							$occ_room = $occ_inhouse - $_POST['huc'];
							$occ_per = $occ_room / 55;
							$occ_per = $occ_per * 100;
							//$occ_per = ไม่เอาจุดทศนิยม

							$journal_3 = substr($_POST['journal'],0,-3);

							$total = $_POST['room_rev'] + $_POST['mini_bar'] + $_POST['fb_post'] + $_POST['bank_fee'] + $_POST['rental'] + $_POST['boat_taxi'] + $_POST['laundry'] + $_POST['other'];

							$sql = "insert into kt_report_front values('',
							'".$_POST['journal']."','".$_POST['journal2']."','".$journal_3."',
							'".$_POST['chk_in_1']."','".$_POST['chk_out_1']."',
							'".$_POST['adult_1']."','".$_POST['child_1']."',
							'".$_POST['chk_in_2']."','".$_POST['chk_out_2']."',
							'".$_POST['adult_2']."','".$_POST['child_2']."',
							'".$_POST['no_show']."','".$occ_inhouse."',
							'".$_POST['huc']."','".$_POST['out_service']."','".$_POST['out_service_num']."',
							'".$_POST['vacant']."','".$_POST['vacant_num']."',
							'".$_POST['room_rev']."','".$_POST['mini_bar']."',
							'".$_POST['fb_post']."','".$_POST['bank_fee']."',
							'".$_POST['rental']."','".$_POST['boat_taxi']."',
							'".$_POST['laundry']."','".$_POST['other']."',
							'".$_POST['cash']."','".$_POST['credit']."','".$_POST['money_transfer']."','".$total."',
							'".$_POST['remark']."',
							'".$create_time."','".$_SESSION['sess_kt_name']."')";
							$mysqli -> query($sql);
							
							$total = number_format($total);

							$_POST['room_rev'] = number_format($_POST['room_rev']);
							$_POST['mini_bar'] = number_format($_POST['mini_bar']);
							$_POST['fb_post'] = number_format($_POST['fb_post']);
							$_POST['bank_fee'] = number_format($_POST['bank_fee']);
							$_POST['rental'] = number_format($_POST['rental']);
							$_POST['boat_taxi'] = number_format($_POST['boat_taxi']);
							$_POST['laundry'] = number_format($_POST['laundry']);
							$_POST['other'] = number_format($_POST['other']);
							$_POST['cash'] = number_format($_POST['cash']);
							$_POST['credit'] = number_format($_POST['credit']);
							$_POST['money_transfer'] = number_format($_POST['money_transfer']);


							define('LINE_API',"https://notify-api.line.me/api/notify");

							//$token = "pKxYPmnVwT45UKkcjYo05HXSz5YUz25jvPlaq8MzEcN"; //ใส่Token ที่copy เอาไว้
							$token = "rrIfYBBDQC17zn2EI433UAU5aFq59zCO5F1csCORhdt";
							$token2 = "uC1XGHQ3CNdvjGgDBCw4b1wy7Q3r3XLI8bJXVJwn7JS";

							$occ_per = number_format($occ_per);

							$str =  $_POST['journal2']."\n";
							$str .= 'Received        '.$total.'.-'."\n";
							$str .= 'Occ.           '.$occ_room.' Rm '.$occ_per.' percent '."\n";
							$str .= 'In house.     '.$occ_inhouse.' Rm'."\n";

							$str .= "\n";

							$str .= 'MORNING'."\n";
							$str .= 'ch.IN          '.$_POST['chk_in_1'].'  pax '.$_POST['adult_1'].','.$_POST['child_1'].''."\n";
							$str .= 'ch.OUT       '.$_POST['chk_out_1'].' Rm'."\n";

							$str .= "\n";

							$str .= 'AFTERNOON'."\n";
							$str .= 'ch.IN           '.$_POST['chk_in_2'].'  pax'.$_POST['adult_2'].','.$_POST['child_2'].''."\n";
							$str .= 'ch.OUT       '.$_POST['chk_out_2'].' Rm'."\n";
							$str .= 'NO SHOW   '.$_POST['no_show'].' Rm'."\n";

							$str .= "\n";


							if($_POST['huc'] != 0){
							$str .= 'House Use   '.$_POST['huc'].' Rm'."\n";
							}

							$str .= 'Out of Serv  '.$_POST['out_service'].' Rm  '.$_POST['out_service_num']."\n";

							if($_POST['vacant'] != 0){
							$str .= 'Vacant x     '.$_POST['vacant'].' Rm  '.$_POST['vacant_num']."\n";
							}

							$str .= "\n";

							$str .= 'Room Rev    '.$_POST['room_rev'].'.-'."\n";
							$str .= 'Mini Bar        '.$_POST['mini_bar'].'.-'."\n";
							$str .= 'F and B Post       '.$_POST['fb_post'].'.-'."\n";
							//$str .= 'Bank Fee       '.$_POST[bank_fee].'.-'."\n";
							$str .= 'Rental               '.$_POST['rental'].'.-'."\n";
							$str .= 'Boat and Taxi                '.$_POST['boat_taxi'].'.-'."\n";
							$str .= 'Laundry        '.$_POST['laundry'].'.-'."\n";
							$str .= 'Other         '.$_POST['other'].'.-'."\n";
							
							$sql_x = "select * from kt_report_front where journal_3 = '".$journal_3."' ";
							$res_x = $mysqli -> query($sql_x);
							$all_total = 0;
							while($rx = $res_x -> fetch_array(MYSQLI_ASSOC)){
							$total_x = $rx['total'];
							$all_total = $all_total + $total_x;

							}

							$all_total = number_format($all_total);
								
							$str .=  "MTD : ฿ ".$all_total;
							
							$str .= '..................................'."\n";

							$str .= 'CASH           '.$_POST['cash'].'.-'."\n";
							$str .= 'CREDIT        '.$_POST['credit'].'.-'."\n";
							$str .= 'M.Transfer    '.$_POST['money_transfer'].'.-'."\n";

							$str .= $_POST['remark'];

							notify_message($str,$token);
															
							
							$str .= '..................................'."\n\n";
							$str .= 'System Report Front KT'."\n";


							$sql_1 = "select * from tb_booking_villa_number where date_booking = '".$old_day."' ";
							$res_1 = $mysqli -> query($sql_1);
							while($r1 = $res_1 -> fetch_array(MYSQLI_ASSOC)){
							$reservation_id = $r1['reservation_id'];

								$sql_11 = "select * from tb_booking_villa where id = '".$reservation_id."' and (status_guest = '1' or status_guest = '3') ";
								$res_11 = $mysqli -> query($sql_11);
								$num_11 = mysqli_num_rows($res_11);

								if($num_11 != 0){ $in_house_old2 = $in_house_old2 + 1; }


								$sql_12 = "select * from tb_booking_villa where id = '".$reservation_id."' and status_guest = '0' and room2 = ''";
								$res_12 = $mysqli -> query($sql_12);
								$num_12 = mysqli_num_rows($res_12);

								if($num_12 != 0){ $no_show2 = $no_show2 + 1; }

							}

							$current_day = date("Y-m-d");
							$current_day1 = date("d-m-Y")." 00:01";
							$current_day2 = date("d-m-Y")." 12:00";
							$current_day3 = date("d-m-Y")." 12:01";
							$current_day4 = date("d-m-Y")." 24:00";
							$current_day5 = date("d-m-Y");
							$start_date = date("Y-m-d", strtotime("first day of this month"));
							$end_date = date("Y-m-d", strtotime("last day of this month"));


							$sql_2 = "select * from tb_booking_customer where search_check_out = '".$current_day."' and (status_res = '3' or status_res = '11')";
							$res_2 = $mysqli -> query($sql_2);
							while($r2 = $res_2 -> fetch_array(MYSQLI_ASSOC)){
							$reservation_id = $r2['id'];

								$sql_21 = "select DISTINCT folio_type from tb_booking_villa where id = '".$reservation_id."' and status_guest = '3' and room2 = '' ";
								$res_21 = $mysqli -> query($sql_21);
								$num_21 = mysqli_num_rows($res_21);

								if($num_21 != 0){ $chk_out_today = $chk_out_today + $num_21; }

							}


							$sql_3 = "select * from tb_booking_customer where search_check_in = '".$current_day."' and (status_res = '3' or status_res = '11') ";
							$res_3 = $mysqli -> query($sql_3);
							while($r3 = $res_3 -> fetch_array(MYSQLI_ASSOC)){
							$reservation_id = $r3['id'];

								$sql_31 = "select DISTINCT folio_type from tb_booking_villa where id = '".$reservation_id."' and status_guest = '1' and room2 = '' ";
								$res_31 = $mysqli -> query($sql_31);
								$num_31 = mysqli_num_rows($res_31);

								if($num_31 == 1){ $chk_in_today = $chk_in_today + $num_31; }

								$sql_32 = "select * from tb_booking_offer_room_reason where reservation_id = '".$reservation_id."' and status_offer = '1' and (reason_type = '9' or reason = '4')";
								$res_32 = $mysqli -> query($sql_32);
								$num_32 = mysqli_num_rows($res_32);

								if($num_32 != 0){

									$sql_33 = "select * from tb_booking_offer_room where reservation_id = '".$reservation_id."' and date_booking = '".$current_day."' ";
									$res_33 = $mysqli -> query($sql_33);
									$num_33 = mysqli_num_rows($res_33);

									$huc_today = $huc_today + $huc_33;


								}



							}


							$occ_inhouse2 = $in_house_old2 - $chk_out_today;
							$occ_inhouse2 = $occ_inhouse2 + $chk_in_today;
							//$occ = $occ - $_POST[no_show];
							$occ_room2 = $occ_inhouse2 - $huc_today;
							$occ_per2 = $occ_room2 / 55;
							$occ_per2 = $occ_per2 * 100;

							$occ_per2 = number_format($occ_per2);


							$sql_4 = "select * from tb_booking_villa_number where date_booking = '".$current_day."' ";
							$res_4 = $mysqli -> query($sql_4);
							while($r4 = $res_4 -> fetch_array(MYSQLI_ASSOC)){
							$reservation_id = $r4['reservation_id'];
							$folio_type = $r4['folio_type'];
							$room_price = $r4['price'];
							$extra_bed = $r4['extra_bed'];
							$room_number = $r4['room_number'];

							$sql_41 = "select * from tb_booking_villa where folio_type = '".$folio_type."' and id = '".$reservation_id."' and status_guest = '1' and room2 = '' ";
							$res_41 = $mysqli -> query($sql_41);
							$num_41 = mysqli_num_rows($res_41);

								if($num_41 == 1){
									$all_room_price = $all_room_price + $room_price + $extra_bed;
								}

							}	



							$sql_51 = "select * from tb_booking_bill where edit_time REGEXP '".$current_day5."' and status_bill = '1' and item_type != '3' ";
							$res_51 = $mysqli -> query($sql_51);
							while($r51 = $res_51 -> fetch_array(MYSQLI_ASSOC)){
							$bill_price = $r51['price'];

							$all_bill_price = $all_bill_price + $bill_price;

							}

							
							$sql_52 = "select * from tb_booking_bill where edit_time REGEXP '".$current_day5."' and status_bill = '1' and item_type = '14' ";
							$res_52 = $mysqli -> query($sql_52);
							while($r52 = $res_52 -> fetch_array(MYSQLI_ASSOC)){
							$bill_price_52 = $r52['price'];

							$mini_bar_2 = $mini_bar_2 + $bill_price_52;

							}


							$sql_53 = "select * from tb_booking_bill where edit_time REGEXP '".$current_day5."' and status_bill = '1' and item_type = '4' ";
							$res_53 = $mysqli -> query($sql_53);
							while($r53 = $res_53 -> fetch_array(MYSQLI_ASSOC)){
							$bill_price_53 = $r53['price'];

							$fb_post_2 = $fb_post_2 + $bill_price_53;

							}


							$sql_54 = "select * from tb_booking_bill where edit_time REGEXP '".$current_day5."' and status_bill = '1' and item_type = '15' ";
							$res_54 = $mysqli -> query($sql_54);
							while($r54 = $res_54 -> fetch_array(MYSQLI_ASSOC)){
							$bill_price_54 = $r54['price'];

							$bank_fee_2 = $bank_fee_2 + $bill_price_54;

							}


							$sql_55 = "select * from tb_booking_bill where edit_time REGEXP '".$current_day5."' and status_bill = '1' and item_type = '16' ";
							$res_55 = $mysqli -> query($sql_55);
							while($r55 = $res_55 -> fetch_array(MYSQLI_ASSOC)){
							$bill_price_55 = $r55['price'];

							$rental_2 = $rental_2 + $bill_price_55;

							}

							$sql_56 = "select * from tb_booking_bill where edit_time REGEXP '".$current_day5."' and status_bill = '1' and (item_type = '5' or item_type = '6' or item_type = '9') ";
							$res_56 = $mysqli -> query($sql_56);
							while($r56 = $res_56 -> fetch_array(MYSQLI_ASSOC)){
							$bill_price_56 = $r56['price'];

							$boat_taxi_2 = $boat_taxi_2 + $bill_price_56;

							}


							$sql_57 = "select * from tb_booking_bill where edit_time REGEXP '".$current_day5."' and status_bill = '1' and item_type = '8' ";
							$res_57 = $mysqli -> query($sql_57);
							while($r57 = $res_57 -> fetch_array(MYSQLI_ASSOC)){
							$bill_price_57 = $r57['price'];

							$laundry_2 = $laundry_2 + $bill_price_57;

							}


							$sql_58 = "select * from tb_booking_bill where edit_time REGEXP '".$current_day5."' and status_bill = '1' and item_type = '11' ";
							$res_58 = $mysqli -> query($sql_58);
							while($r58 = $res_58 -> fetch_array(MYSQLI_ASSOC)){
							$bill_price_58 = $r58['price'];

							$other_2 = $other_2 + $bill_price_58;

							}


							$sql_61 = "select * from tb_booking_villa where edit_time between '".$current_day1."' and '".$current_day2."' and status_guest = '1' and chk_in = '".$current_day."' ";
							$res_61 = $mysqli -> query($sql_61);
							$chk_in_am = mysqli_num_rows($res_61);
							
							$sql_62 = "select * from tb_booking_villa where edit_time between '".$current_day3."' and '".$current_day4."' and status_guest = '1' and chk_in = '".$current_day."' ";
							$res_62 = $mysqli -> query($sql_62);
							$chk_in_pm = mysqli_num_rows($res_62);

							$sql_63 = "select * from tb_booking_villa where edit_time between '".$current_day1."' and '".$current_day2."' and status_guest = '3' and chk_out = '".$current_day."' ";
							$res_63 = $mysqli -> query($sql_63);
							$chk_out_am = mysqli_num_rows($res_63);

							$sql_64 = "select * from tb_booking_villa where edit_time between '".$current_day3."' and '".$current_day4."' and status_guest = '3' and chk_out = '".$current_day."' ";
							$res_64 = $mysqli -> query($sql_64);
							$chk_out_pm = mysqli_num_rows($res_64);


							$sql_651 = "select SUM(adult) AS adult_sum from tb_booking_villa where edit_time between '".$current_day1."' and '".$current_day2."' and status_guest = '1' and chk_in = '".$current_day."' ";
							$res_651 = $mysqli -> query($sql_651);
							$r651 = $res_651 -> fetch_array(MYSQLI_ASSOC);
							$adult_sum_am = $r651['adult_sum'];

							$sql_652 = "select SUM(child) AS child_sum from tb_booking_villa where edit_time between '".$current_day1."' and '".$current_day2."' and status_guest = '1' and chk_in = '".$current_day."' ";
							$res_652 = $mysqli -> query($sql_652);
							$r652 = $res_652 -> fetch_array(MYSQLI_ASSOC);
							$child_sum_am = $r652['child_sum'];

							$sql_661 = "select SUM(adult) AS adult_sum from tb_booking_villa where edit_time between '".$current_day3."' and '".$current_day4."' and status_guest = '1' and chk_in = '".$current_day."' ";
							$res_661 = $mysqli -> query($sql_661);
							$r661 = $res_661 -> fetch_array(MYSQLI_ASSOC);
							$adult_sum_pm = $r661['adult_sum'];

							$sql_662 = "select SUM(child) AS child_sum from tb_booking_villa where edit_time between '".$current_day3."' and '".$current_day4."' and status_guest = '1' and chk_in = '".$current_day."' ";
							$res_662 = $mysqli -> query($sql_662);
							$r662 = $res_662 -> fetch_array(MYSQLI_ASSOC);
							$child_sum_pm = $r662['child_sum'];

							/*
							$sql_a = "select * from tb_booking_customer where search_check_in between '".$start_date."' and '".$end_date."' ";
							$res_a = mysql_db_query($dbname,$sql_a);
							while($ra = mysql_fetch_array($res_a)){
							$reservation_id = $ra[id];

								$sql_a1 = "select * from tb_booking_villa where id = '".$reservation_id."' and (status_guest = '1' or status_guest = '3') and room2 = '' ";
								$res_a1 = mysql_db_query($dbname,$sql_a1);
								while($ra1 = mysql_fetch_array($res_a1)){
									$reservation_id_1 = $ra1[id];
									$folio_type = $ra1[folio_type];

									$sql_ra2 = "select * from tb_booking_villa_number where date_booking between '".$start_date."' and '".$end_date."' and folio_type = '".$folio_type."' and reservation_id = '".$reservation_id_1."' ";
									$res_ra2 = mysql_db_query($dbname,$sql_ra2);
									while($ra2 = mysql_fetch_array($res_ra2)){
									$room_price2 = $ra2[price];
									$extra_bed2 = $ra2[extra_bed2];

									$all_room_price3 = $all_room_price3 + $room_price2 + $extra_bed2;

									}
								}
							}

							$date = date_in_period($start_date, $end_date);

							foreach($date as $day){
	
								$sql_b = "select * from tb_booking_bill where edit_time REGEXP '".$day."' and status_bill = '1' and item_type != '3' ";
								$res_b = mysql_db_query($dbname,$sql_b);
								while($rb = mysql_fetch_array($res_b)){
								$bill_price = $rb[price];

								$all_bill_price3 = $all_bill_price3 + $bill_price;

								}
							}
							$total_month = $all_room_price3 + $all_bill_price3;

							*/

							$date_s = date("Y-m-d", strtotime("first day of this month"));
							$date_e = date("Y-m-d");

							/*
							$sql = "select * from tb_booking_villa_number where date_booking BETWEEN '".$date_s."' and '".$date_e."' order by date_booking asc";
							$res = $mysqli -> query($sql);
							while($r = $res -> fetch_array(MYSQLI_ASSOC)){
								$reservation_id = $r['reservation_id'];
								$folio_type = $r['folio_type'];
								$price = $r['price'];
								$extra_bed = $r['extra_bed'];

								$sql_1 = "select * from tb_booking_villa where id = '".$reservation_id."' and folio_type = '".$folio_type."' and room2 = '' and status_guest != '0' ";
								$res_1 = $mysqli -> query($sql_1);
								$num_1 = mysqli_num_rows($res_1);

								if($num_1 != 0){

									$sum_room = $sum_room + ($price + $extra_bed);


								}

							}
							*/

							$sql_2 = "select DISTINCT reservation_id,folio_type from tb_booking_villa_number where date_booking BETWEEN '".$date_s."' and '".$date_e."' order by date_booking asc";
							$res_2 = $mysqli -> query($sql_2);
							while($r2 = $res_2 -> fetch_array(MYSQLI_ASSOC)){
							$reservation_id2 = $r2['reservation_id'];
							$folio_type2 = $r2['folio_type'];


								$sql_21 = "select * from tb_booking_villa where id = '".$reservation_id2."' and folio_type = '".$folio_type2."' and room2 = '' and status_guest != '0' ";
								$res_21 = $mysqli -> query($sql_21);
								$num_21 = mysqli_num_rows($res_21);

								if($num_21 != 0){

									$sql_22 = "select SUM(price) AS sum_bill_price from tb_booking_bill where reservation_id = '".$reservation_id2."' and status_bill = '1' ";
									$res_22 = $mysqli -> query($sql_22);
									$r22 = $res_22 -> fetch_array(MYSQLI_ASSOC);
									$sum_bill_price = $r22['sum_bill_price'];
									
									
									$sql_23 = "select SUM(price) AS sum_bill_rimlae from tb_booking_bill where reservation_id = '".$reservation_id2."' and status_bill = '1' and item_type = '4' ";
									$res_23 = $mysqli -> query($sql_23);
									$r23 = $res_23 -> fetch_array(MYSQLI_ASSOC);
									$sum_bill_rimlae = $r23['sum_bill_rimlae'];

									/*
									$sql_24 = "select SUM(price) AS sum_bill_room from tb_booking_bill where reservation_id = '".$reservation_id2."' and status_bill = '1' and item_type = '3' ";
									$res_24 = $mysqli -> query($sql_24);
									$r24 = $res_24 -> fetch_array(MYSQLI_ASSOC);
									$sum_bill_room = $r24['sum_bill_room'];

									$sql_25 = "select SUM(price) AS sum_bill_extra from tb_booking_bill where reservation_id = '".$reservation_id2."' and status_bill = '1' and item_type = '10' ";
									$res_25 = $mysqli -> query($sql_25);
									$r25 = $res_25 -> fetch_array(MYSQLI_ASSOC);
									$sum_bill_extra = $r25['sum_bill_extra'];
									*/


									$total_month = $total_month + ($sum_bill_price - ($sum_bill_room + $sum_bill_extra + $sum_bill_rimlae));


								}



							}


							
							
							$total2 = $total2 + $all_room_price + $all_bill_price;


							$total2 = number_format($total2);
							$all_room_price = number_format($all_room_price);
							$mini_bar_2 = number_format($mini_bar_2);
							$fb_post_2 = number_format($fb_post_2);
							$bank_fee_2 = number_format($bank_fee_2);
							$rental_2 = number_format($rental_2);
							$boat_taxi_2 = number_format($boat_taxi_2);
							$laundry_2 = number_format($laundry_2);
							$other_2 = number_format($other_2);

							$total_month = number_format($total_month);



							$str .= 'TOTAL        '.$total2.'.-'."\n";
							$str .= 'Occ.           '.$occ_room2.' Rm '.$occ_per2.' percent '."\n";
							$str .= 'In house.     '.$occ_inhouse2.' Rm'."\n";


							$str .= 'MORNING'."\n";
							$str .= 'ch.IN          '.$chk_in_am.'  pax '.$adult_sum_am.','.$child_sum_am.''."\n";
							$str .= 'ch.OUT       '.$chk_out_am.' Rm'."\n";


							$str .= 'AFTERNOON'."\n";
							$str .= 'ch.IN           '.$chk_in_pm.'  pax'.$adult_sum_pm.','.$child_sum_pm.''."\n";
							$str .= 'ch.OUT       '.$chk_out_pm.' Rm'."\n";

							if($no_show2 != ""){
							$str .= 'NO SHOW   '.$no_show2.' Rm'."\n";
							}

							if($huc_today != ""){
							$str .= 'House Use   '.$huc_today.' Rm'."\n";
							}

							$str .= 'Room Rev    '.$all_room_price.'.-'."\n";
							$str .= 'Mini Bar        '.$mini_bar_2.'.-'."\n";
							$str .= 'F and B Post       '.$fb_post_2.'.-'."\n";
							//$str .= 'Bank Fee       '.$bank_fee_2.'.-'."\n";
							$str .= 'Rental               '.$rental_2.'.-'."\n";
							$str .= 'Boat and Taxi                '.$boat_taxi_2.'.-'."\n";
							$str .= 'Laundry        '.$laundry_2.'.-'."\n";
							$str .= 'Other         '.$other_2.'.-'."\n";

								
							$str .=  "SYS MTD : ฿ ".$total_month;

                            notify_message($str,$token2);

                            }
							?>

														
							<h2><?php if($num_z == 0){ echo "SAVE OK"; }else{ echo "NOT SAVE"; } ?></h2>
							<div class="d-flex align-items-center gap-2 gap-lg-3">

								<?php if($_POST['btn_back'] == 2){ ?>

								<a href="main_form_acc.php" class="btn btn-sm fw-bold btn-primary">BACK</a>

								<?php }else{ ?>

								<a href="main_form.php" class="btn btn-sm fw-bold btn-primary">BACK</a>

								<?php } ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>