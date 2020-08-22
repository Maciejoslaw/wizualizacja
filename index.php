<?php

	include 'header.html';

	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "test";
	$conn = new mysqli($servername, $username,$password,$dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";

	$sql = "SELECT nazwa,ppd,mulmax,membrana,plg,balast,cykle,czas FROM `prasy` WHERE nazwa LIKE '%PC%'";
	$result = $conn->query($sql);	

	echo '<section title="PRASY PC-X"><h2>PRASY PC-X </h2>	';
	
	while ($row = $result->fetch_assoc()) {
		$data = $row['czas'];
		
		include 'prasy.php';
		
	}
	echo '<div style="clear: both;"></div>
    </section>';

	$sql = "SELECT nazwa,ppd,mulmax,membrana,plg,balast,cykle,czas FROM `prasy` WHERE nazwa LIKE '%HF%'";
	$result = $conn->query($sql);	

	echo '<section title="PRASY HF"><h2>PRASY HF </h2>	';
	
	while ($row = $result->fetch_assoc()) {

		include 'prasy.php';
		
	}
	
	echo '<div style="clear: both;"></div>
    </section>';

	include 'legenda.html';

	include 'footer.html';

?>