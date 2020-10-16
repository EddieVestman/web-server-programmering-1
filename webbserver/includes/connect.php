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
	
	
	echo "<table><tr><th>Name</th>
			<th>Descrpition</th>
			<th>Price</th>
			<th>Picture</th>
			</tr>";
	while($row = $result->fetch_assoc()){
	echo "<tr><td>";
	echo $row['name'];
	echo "</td><td>";
	echo $row['description'];
	echo "</td><td>";
	echo $row['price'];
	echo "</td><td>";
	echo $row ['picture'];
	echo "</td></tr>";
	
	}
	echo "</table>";
	
	echo "<br><br>";
	
	$sql = "SELECT users.username, users.email, customers.username, customers.firstname, customers.lastname FROM users
	JOIN customers WHERE users.username = customers.username";
	$res=$dbh->prepare($sql);
	$res->execute();
	$result=$res->get_result();
	
	if(!$result){
		echo "Felaktig SQL fråga";
		exit;
	}
	
	echo "<table><tr><th>Anv namn</th>
			<th>Förnamn</th>
			<th>Efternamn</th>
			<th>Email</th>
			</tr>";
	while($row = $result->fetch_assoc()){
	echo "<tr><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['firstname'];
	echo "</td><td>";
	echo $row['lastname'];
	echo "</td><td>";
	echo $row ['email'];
	echo "</td></tr>";
	
	}
	echo "</table>";
	
			echo "<br>";
	
		$sql = "SELECT customers.adress, customers.zip, customers.city, customers.phone, customers.username FROM customers";
	
	$res=$dbh->prepare($sql);
	$res->execute();
	$result=$res->get_result();
	
	if(!$result){
		echo "Felaktig SQL fråga";
		exit;
	}
	
	echo 	"<table><tr>
			<th>Användare</th>
			<th>Adress</th>
			<th>Zip</th>
			<th>City</th>
			<th>Phone</th>
			</tr>";
	while($row = $result->fetch_assoc()){
	echo "<tr><td>";
	echo $row['username'];
	echo "</td><td>";
	echo $row['adress'];
	echo "</td><td>";
	echo $row['zip'];
	echo "</td><td>";
	echo $row['city'];
	echo "</td><td>";
	echo $row ['phone'];
	echo "</td></tr>";
	
	}
	echo "</table>";
		//$dbh->close();

?>