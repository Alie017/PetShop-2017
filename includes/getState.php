<?php ob_start();
@session_start();
?>
<?php

// Developed by TechnologyMantraBlog.com
// Author : Mr. Hrishabh Sharma
// FB : https://www.facebook.com/hrishabh123
// Website : http://technologymantrablog.com/

	include("config.php");
	
	$film_id = $_GET['film_id'];
	
	
	echo '<select onchange="getCity(this.value);" name="gun_id" id="gun_id">';
	$q = "SELECT * FROM gun WHERE film_id = {$film_id}";
	if($res = $mysqli->query($q))
	{
				while($obj = $res->fetch_object())
		{
			echo'<option value="'. $obj->gun_id .'">'. $obj->tarih .'</option>';
			
		}
	}
	echo'</select>';
?>
