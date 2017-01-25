<?php
	require_once('admin/includes/init.php');
	
	$tbl = "tbl_portfolio";
	$getPortfolio = getAll($tbl);
  include "includes/header.php";
  include "includes/nav.php";
?>
    <article>
    	<div class="row">
    		<div class="small-12 medium-12 and large-12 columns">
    			<h1>Portfolio</h1>
          <div class="stacked-for-small button-group">
           <a class="button">All</a>
           <a class="button">Web</a>
           <a class="button">Illustration/Painting</a>
           <a class="button">Photoshop Work</a>
          </div>
    		</div>
    	</div>
    </article>
    <section>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
        <li><img src="images/thumbs/LCC_thumb.png" alt="Landtech Computer Consulting"></li>
        <li><img src="images/thumbs/LCC1_thumb.png" alt="Landtech Computer Consulting WordPress"></li>
        <li><img src="images/thumbs/Energyworksnaturally_thumb.png" alt="Energy Works Naturally"></li>
        <li><img src="images/thumbs/GDR_thumb.png" alt="Golf Destination Review"></li>
        <li><img src="images/thumbs/THG_thumb.png" alt="The Hair Garage"></li>
        <li><img src="images/thumbs/LDALC_thumb.png" alt="Learning Disabilities Assoc of Lambton County"></li>
        <li><img src="images/thumbs/Clay_and_Gemma_thumb.png" alt="Clay and Gemma from SOA"></li>
        <li><img src="images/thumbs/Jim_Morrison_1968-painting_thumb.png" alt="Young Jim Morrison"></li>
        <li><img src="images/thumbs/yoda_thumb.jpg" alt="Master Yoda"></li>
        <li><img src="images/thumbs/ketchupbottle_thumb.jpg" alt="Ketchup Bottle"></li>
        <li><img src="images/thumbs/jukebox_thumb.jpg" alt="Jukebox"></li>
      </ul>
    </section>
    <section>
      <div class="row small-up-1 medium-up-2 large-up-4">
      
  <!-- <div class="column"> -->
  
    <!-- <!-- <img src="images/thumbs/LCC_thumb.png" class="thumbnail" alt="Landtech Computer Consulting"> -->
<!--   </div> -->
  <!-- <div class="column"> -->
    <!-- <img src="images//thumbs/LCC1_thumb.png" class="thumbnail" alt="Landtech Computer Consulting Wordpress">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/Energyworksnaturally_thumb.png" class="thumbnail" alt="Energy Works Naturally Wordpress">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/GDR_thumb.png" class="thumbnail" alt="Golf Destination Review">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/THG_thumb.png" class="thumbnail" alt="The Hair Garage Wordpress">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/LDALC_thumb.png" class="thumbnail" alt="Learning Disabilities Assoc of Lambton Country">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/Clay_and_Gemma_thumb.png" class="thumbnail" alt="Clay and Gemma">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/Jim_Morrison_1968-painting_thumb.png" class="thumbnail" alt="Young Jim Morrison">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/yoda_thumb.jpg" class="thumbnail" alt="Master Yoda">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/ketchupbottle_thumb.jpg" class="thumbnail" alt="Ketchup Bottle">
  </div> -->
  <!-- <div class="column">
    <img src="images/thumbs/jukebox_thumb.jpg" class="thumbnail" alt="Jukebox">
  </div>
</div> -->
<!-- <div class="large reveal" id="exampleModal1" data-reveal>
  <h2>Landtech Computer Consulting</h2>
  <img class="float-left" src="images/LCC.png" alt="Landtech Computer Consulting">
  <p class="lead">This Site was done in HTML5 and CSS3</p>
  <button class="close-button" data-close aria-label="Close reveal" type="button">
    <span aria-hidden="true">&times;</span>
  </button> --> 
</div>
    </section>
    <?php 
      include "includes/socialmediasection.php";
      include "includes/footer.php";
     ?>

  </body>
</html>
