<?php

$conn = new mysqli("localhost","root","","spisakradnika");

$q = $conn->query("select * from radnici");

$rez = [];

while ($rw = $q->fetch_object()) {
	$res[] = $rw;
}
echo json_encode($res);

?>