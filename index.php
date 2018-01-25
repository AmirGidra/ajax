<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="javascript:void(0)">Naslovna</a>
	<a href="javascript:void(0)">O nama</a>
	<a href="javascript:void(0)">Kontakt</a>
	<a href="javascript:void(0)" onclick="loadData()">Mostovi</a>
<div id="strana"></div>
</body>
</html>
<?php

$strane = [
	"1" => "naslovna.php",
	"2" => "onama.php",
	"3" => "kontakt.php"
];
?>
<script>
	function loadData(){
		var ispis = document.getElementById("strana");
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 4 && xhr.status == 200) {
			var podaci = JSON.parse(xhr.responseText);
			console.debug(podaci);
			for(var i=0; i < podaci.length; i++){
				ispis.innerHTML += "<li>"+podaci[i].ime+" "+podaci[i].prezime+"</li>";
			}
		}
	}
	xhr.open("get","korisnici.php",true);
	xhr.send(null);
}

</script>