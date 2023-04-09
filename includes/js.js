// Developed by TechnologyMantraBlog.com
// Author : Mr. Hrishabh Sharma
// FB : https://www.facebook.com/hrishabh123
// Website : http://technologymantrablog.com/

function getCountry() {
	
		if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
	  } else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
		  document.getElementById("countryList").innerHTML=xmlhttp3.responseText;
		}
	  }
	  xmlhttp3.open("GET","includes/getCountry.php",true);
	  xmlhttp3.send();
	   var selectid = document.getElementById("filmii");
		   if (selectid !=""){
			   var filmii = selectid.value;
			   
		   }
	}
	
	
	function getState(film_id) {
		if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
	  } else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
		  document.getElementById("stateList").innerHTML=xmlhttp3.responseText;
		}
	  }
	  xmlhttp3.open("GET","includes/getState.php?film_id="+film_id,true);
	  xmlhttp3.send();
	}
	
	
	function getCity(gun_id) {
		if (window.XMLHttpRequest) {
		xmlhttp3 = new XMLHttpRequest();
	  } else { 
		xmlhttp3 = new ActiveXObject("Microsoft.XMLHTTP");
	  }
	  xmlhttp3.onreadystatechange=function() {
		if (xmlhttp3.readyState==4 && xmlhttp3.status==200) {
		  document.getElementById("cityList").innerHTML=xmlhttp3.responseText;
		}
	  }
	  xmlhttp3.open("GET","includes/getCity.php?gun_id="+gun_id,true);//
	  xmlhttp3.send();
	}
	
	}
	$(document).ready(function(e)){
		$("#iller").bind('change',postet);
	}
	function postet(){
		
		$.post('onayindex.php',{filmmmm:$("#filmler").val()}.function(output)){
			$("#ilceler option").remove();
			$("#ilceler").append(output);
			
		}
		
		
	}



