<?php ob_start();
@session_start();
?>
<?php

// Developed by TechnologyMantraBlog.com
// Author : Mr. Hrishabh Sharma
// FB : https://www.facebook.com/hrishabh123
// Website : http://technologymantrablog.com/

	include("config.php");
	
	echo '<select onchange="getState(this.value);" name="film_id" id="film_id">';
	$q = "SELECT * FROM film";
	if($res = $mysqli->query($q))
	{
		while($obj = $res->fetch_object())
		{
			?>
			<option value="<?php echo $obj->film_id; ?>"> <?php echo $obj->film_adi; ?></option>
			
			<?php
		}
	}
	echo'</select>';
?>