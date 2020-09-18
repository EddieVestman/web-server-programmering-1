<!DOCTYPE html>
<html lang="sv">
  <head>
     <meta charset="utf-8">
     <title>Produkter</title>
		 <link rel="stylesheet" href="css/stilmall.css">
	</head>
  <body id="sida3">
    <div id="wrapper">
			<?php
		require "masthead.php";
		require "menu.php";
		require "varor.php";
		
		?>	
			
			<main> <!--Huvudinnehåll-->
				<section id="content">
					<h2>Varor</h2>
					
				<?php
				 foreach($varor as $vara){
				 echo <<<FIGURE
				 <figure><img src="$vara[3]" alt="$vara[1]">
				 <figcaption>$vara[0] $vara[2]
				 <p>
				 <a href="#">Köp</a>
				 </p>
				 </figcaption>
				 </figure>
FIGURE;
				 }
				?>
            
			</section>
				
				
			</main>
			
			<aside id="aside">
				   <p>News</p>
			</aside>
		</div>
		<!--Egen fil -->
    <?php
		require "footer.php";
		?>
  </body>
</html>