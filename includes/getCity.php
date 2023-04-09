<?php ob_start();
@session_start();
?>
<?php

// Developed by TechnologyMantraBlog.com
// Author : Mr. Hrishabh Sharma
// FB : https://www.facebook.com/hrishabh123
// Website : http://technologymantrablog.com/

	include("config.php");
	
	$gun_id = $_GET['gun_id'];
	
	
	echo '<select name="city" id="city">';
	$q = "SELECT * FROM seans where gun_id={$gun_id} and film_id ={$gun_id}"; //gun_gun_id={$gun} gun_film_id = {$gun} $gun = $_GET['gun_film_id'];
	
	if($res = $mysqli->query($q))
	{
		while($obj = $res->fetch_object())
		{
			echo'<option>'. $obj->seans_saati .'</option>';
			
		}
	}
	echo'</select>';
?>
