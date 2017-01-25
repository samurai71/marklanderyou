<?php
	require_once('admin/includes/init.php');
	
	$tbl = "tbl_services";
	$getServices = getAll($tbl);
  include "includes/header.php";
  include "includes/nav.php";
?>
    <article>
    	<div class="row">
    		<div class="small-12 medium-12 and large-12 columns">
    			<?php
	if(!is_string($getServices)) {
		while($row = mysqli_fetch_array($getServices)) {
			echo "<h2>{$row['services_title']}</h2>";
			echo "<p>{$row['services_text']}</p>";
			// echo "<p>{$row['movies_year']}</p>";
			// echo "<a href=\"details.php?id={$row['movies_id']}\">More Details...</a>";
			// echo "<br><br>";
		}
	}else{
		echo "<p>{$getServices}</p>";
	}
?>
			<h3>Some Services Provided to clients</h3>
			<ul>
			<li>Web Design and Development</li>
			<li>Graphic Design</li>
			<li>Digital Illustration and Painting</li>
			<li>Photoshop Work</li>
			<li>And more...</li>
			</ul>
    		</div>
    	</div>
    </article>
    
    <?php 
      include "includes/socialmediasection.php";
      include "includes/footer.php";
     ?>
