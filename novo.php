<button id="btn" onclick="">Click me!!</button>
<div id="prikaz2"></div><br />
<ul id="Ulista">
	
</ul>

<script type="text/javascript">
	var prikaz = document.getElementById('Ulista');
	var text = "";

function Data(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 4 && xhr.status == 200) {
			data(xhr);
		}
	}
	xhr.open("GET","http://mysafeinfo.com/api/data?list=calendar&format=json",true);
	xhr.send();
}

function data(xhr){
	var data = xhr.responseText;
	var podaci = JSON.parse(data);
    podaci.forEach(function(e,i){
    	text += "<li>"+ e.dt.+"</li>";
    });
    Ulista.innerHTML = text;
}
</script>
