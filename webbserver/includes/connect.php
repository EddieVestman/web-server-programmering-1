<?php
	$dbh = new mysqli("localhost", "dbUser", "qwe123", "webbshop");
	
	if(!$dbh) {
		echo "Ingen kontakt med databasen";
		exit;
	}
	
	$sql = "SELECT * FROM products";	
	$res=$dbh->prepare($sql);
	$res->execute();
	$result=$res->get_result();
	
	
	if(!$result){
		echo "Felaktig SQL fråga";
		exit;
	}
	
	$dbh->close();
	//var_dump($result);
	
	while($row = $result->fetch_assoc()){
	echo $row['name'];
	echo "<br>";
	echo $row ['price']," kronor";
	}
	
?>