<?php include 'header.php';?>
		
			<section class="maincontent">
			<hr/>

		<?php 
			$array_one  = array(
				"a" => "blue", 
				"b" => "red",
				"c" => "green",
				"d" => "blue"
			);

			$array_two = array(
				"a" => "blue", 
				"b" => "red",
				"c" => "blue",
				
			);

			$array_three = array(
				"a" => "blue", 
				"b" => "red",
				"c" => "yellow",
				
			);

			$different = array_diff($array_one, $array_two, $array_three);

			print("<pre>");

			print_r($different);

			print("</pre>");
			
		 ?>


			
				
					

	</section>
	
<?php include 'footer.php';?>
