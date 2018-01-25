<p>Podaci</p><br />
<div id="prikaz"></div>



<script type="text/javascript">

	var xhr = new XMLHttpRequest();
	var div = document.getElementById("prikaz");
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 4 && xhr.status ==200 ) {
		var podatak = xhr.responseText;
		div.innerHTML = podatak;
	}
	}
	xhr.open("GET","naslovna.php",true);
	xhr.send(null);



</script>
