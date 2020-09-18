<!DOCTYPE html>
<html lang="sv">
  <head>
     <meta charset="utf-8">
     <title>Produkter</title>
		 <link rel="stylesheet" href="css/stilmall.css">
  </head>
  <body id="produkter">
    <div id="wrapper">
      
      <?php
		require "masthead.php";
		require "menu.php";
		require "../html/varor.php";
		
		?>	
		
		
		
		<main> <!--Huvudinnehåll-->
			<section id="content">
				<h2>Varor</h2>
				<table>
					<thead>
						<tr>
							<th>Namn</th>
							<th>Beskrivning</th>
							<th>Bild</th>
							<th>Pris</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					 <?php
			   		 foreach($varor as $vara){
						echo "<tr><td>";
						echo $vara[0];
						echo "</td><td>";
					    echo $vara[1];
						echo "</td><td><img src='";
					    echo $vara[3];
						echo "'alt='";
						echo $vara[1];
						echo "'></td><td>";
						echo $vara[2];
						echo "</td></tr>";


					 }
					?>	
					</tbody>
				</table>

			</section>
		</main>
	
		<?php
		require "footer.php";
		?>
	</div>
  </body>
</html>