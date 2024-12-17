<?php
	
	function date_in_period($start, $end){
		$output = array();
		$days = floor((strtotime($end) - strtotime($start))/86400);
		for($i=0;$i<=$days;$i++){
			array_push($output, date("d-m-Y",strtotime("+" . $i . " day", strtotime($start))));
		}
		return $output;
	}

	function date_in_period2($start, $end){
		$output = array();
		$days = floor((strtotime($end) - strtotime($start))/86400);
		for($i=0;$i<=$days;$i++){
			array_push($output, date("Y-m-d",strtotime("+" . $i . " day", strtotime($start))));
		}
		return $output;
	}


	function daysinmonth($date_start, $date_end){
		$loop = round((strtotime($date_end) - strtotime($date_start)) / 86400);
		for($i=0;$i<=$loop;$i++){
			$month = date("m",strtotime($date_start . " +" . $i . " day"));
			if(isset($daycount[$month])){
				$daycount[$month] = intval($daycount[$month]) + 1;
			}else{
				$daycount[$month] = 1;
			}
		}
		return $daycount;
	}


	function DateDiff($strDate1,$strDate2)
	 {
				return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }

	 function strDec($str){
        $ex = explode('.',$str);
        $s = substr($ex[1],0,2);
        if($s == ''){
            $s = '00';
        }
        if($ex[0] == ''){
            $ex[0] = '0';
        }
        $dec =  $ex[0].".".$s;
        return $dec;
    }


    function txt_cost($txt,$qty){
		$e = explode(")", $txt);
		$txt = str_replace(",", "", $e[1]);
		$txt = $txt * $qty;

		return $txt;
	}


	function getAge($birthday) {
	$then = strtotime($birthday);
	return(floor((time()-$then)/31556926));
	}

	




?>