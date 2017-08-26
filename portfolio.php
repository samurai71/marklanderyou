<?php
  $pageTitle = "Portfolio";
	require_once('admin/includes/init.php');
	
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
           <!-- <a class="button">Photoshop Work</a> -->
          <!-- </div>
    		</div>
    	</div>
    </article> -->
    <section>
      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
        <li><a href="lcc.php"><img src="images/thumbs/LCC_thumb.png" class="web" alt="Landtech Computer Consulting"></a></li>
        <li><a href="lcc1.php"><img src="images/thumbs/LCC1_thumb.png" class="web" alt="Landtech Computer Consulting WordPress"></a></li>
        <li><a href="ewn.php"><img src="images/thumbs/Energyworksnaturally_thumb.png" class="web" alt="Energy Works Naturally"></a></li>
        <li><a href="gdr.php"><img src="images/thumbs/GDR_thumb.png" class="web" alt="Golf Destination Review"></a></li>
        <li><a href="thg.php"><img src="images/thumbs/THG_thumb.png" class="web" alt="The Hair Garage"></a></li>
        <li><a href="ldalc.php"><img src="images/thumbs/LDALC_thumb.png" class="web" alt="Learning Disabilities Assoc of Lambton County"></a></li>
        <li><a href="clayandgemma.php"><img src="images/thumbs/Clay_and_Gemma_thumb.png" class="illustration" alt="Clay and Gemma from SOA"></a></li>
        <li><a href="jimmorrison.php"><img src="images/thumbs/Jim_Morrison_1968-painting_thumb.png" class="illustration" alt="Young Jim Morrison"></a></li>
        <li><a href="yoda.php"><img src="images/thumbs/yoda_thumb.jpg" class="illustration" alt="Master Yoda"></a></li>
        <li><a href="ketchup.php"><img src="images/thumbs/ketchupbottle_thumb.jpg" class="photoshop" alt="Ketchup Bottle"></a></li>
        <li><a href="jukebox.php"><img src="images/thumbs/jukebox_thumb.jpg" class="photoshop" alt="Jukebox"></a></li>
      </ul>
    </section>
   
    <?php 
      include "includes/socialmediasection.php";
      include "includes/footer.php";
     ?>

  </body>
</html>
