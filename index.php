<?php 
    $pageTitle = "About";
	include "includes/header.php";
    include "includes/nav.php";
 ?>
   <article>
        <div class="row">
            <div class="small-12 medium-12 and large-12 columns">
                 <h2>About</h2>
                 <img src="images/marklanderyou.png" alt="Mark Landeryou Photo" class="left photo">
                 <h4>I'm Mark Landeryou, and I'm an Digital Artisan.</h4>
                 <p>Specializing in<span class="bold"> Web design and development</span>, graphic design, digital illustration and painting, Photoshop work. <br>Mark Landeryou is an Artisan from <span class="bold">London, Ontario Canada</span>. He brings a lot of different experiences to his craft, he utilizes many different mediums for his creations. Mark is also an experienced web developer. So if you need a design or web site created he is your man.</p>
            </div>
        </div>
    </article>
    <section>
        <div class="row">
            <div class="small-10 medium-10 large-10 columns">
                <h2>Work Completed</h2>
                <div class="small-12 medium-12 large-12 large-centered columns">
                <ul class="small-block-grid-1 medium-block-grid-1 large-block-grid-3">
                <li><h4>Web Work</h4><figure class="imghvr-slide-up"><img src="images/thumbs/GDR_thumb.png" alt="Golf Destination Review"><figcaption>Examples of Web work that I have created</figcaption><a href="web.php"></a></figure></li>
                <li><h4>Illustration Work</h4><figure class="imghvr-slide-up"><img src="images/thumbs/yoda_thumb.jpg" alt="Master Yoda Painting"><figcaption>Examples of digital illustrations and digital paintings I have created</figcaption><a href="illustration.php"></a></figure></li>
                <li><h4>Photoshop Work</h4><figure class="imghvr-slide-up"><img src="images/thumbs/jukebox_thumb.jpg" alt="Jukebox"><figcaption>Examples of Photoshop work that I have created</figcaption><a href="photoshop.php"></a></figure></li>
                </ul>
                </div>
            </div>
        </div>
        </section>

		<section>
            
        <div class="row">
        <div class="small-10 medium-6 medium-offset-3 large-offset-4 large-4 columns">
        	<h4>Recent Work</h4>
			<ul class="work-orbit" data-orbit>
			  <li>
			    <img src="images/yoda.jpg" alt="slide 1" />
			    <div class="orbit-caption">
			      Master Yoda Digitally painted.
			    </div>
			  </li>
			  <li class="active">
			    <img src="images/jukebox.jpg" alt="slide 2" />
			    <div class="orbit-caption">
			      Jukebox created using Adobe Photoshop.
			    </div>
			  </li>
			  <li>
			    <img src="images/Prince.jpg" alt="slide 3" />
			    <div class="orbit-caption">
			      Prince Digital Painting
			    </div>
			  </li>
			</ul>
			</div>
        </div>
    </section>
    <!-- <section>
	<div class="row">
	<div class="small-10 medium-10 large-10 columns">
	<h2>For Sale</h2>
	</div>
	</div>
    </section> -->
    
    <?php 
    	include "includes/socialmediasection.php";
        include "includes/footer.php";
     ?>
