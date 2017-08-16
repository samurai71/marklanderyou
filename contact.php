<?php
  $pageTitle = "Contact";
	require_once('admin/includes/init.php');
	
	$tbl = "tbl_contact";
	$getContact = getAll($tbl);
  include "includes/header.php";
  include "includes/nav.php";
?>

    <article>
    	<div class="row">
    		<div class="small-12 medium-12 and large-12 columns">
    			<?php
	if(!is_string($getContact)) {
		while($row = mysqli_fetch_array($getContact)) {
			// echo "<img src=\"images/{$row['movies_thumb']}\" alt=\"{$row['movies_title']}\">";
			echo "<h2>{$row['contact_title']}</h2>";
			// echo "<p>{$row['services_text']}</p>";
			// echo "<p>{$row['movies_year']}</p>";
			// echo "<a href=\"details.php?id={$row['movies_id']}\">More Details...</a>";
			// echo "<br><br>";
		}
	}else{
		echo "<p>{$getContact}</p>";
	}
?>
                
                <p>Please feel free to contact me, or to provide comment or feedback, by filling out the contact form below. I look forward to hearing from you</p>
    		</div>
    	</div>
    </article>
    <section>
    <div class="row">
    <div class="small-12 medium-6 large-6 columns">
    <h2 class="hidden">Contact Form</h2>
    <form action="send_email_form.php" method="post" data-abide>
      <div class="name-field">
        <label>Your name <small>required</small>
          <input type="text" name="name" required pattern="[a-zA-Z]+" placeholder="Please type your name here.">
        </label>
        <small class="error">Name is required and must be a string.</small>
      </div>
      <div class="email-field">
        <label>Email <small>required</small>
          <input type="email" name="email" required placeholder="Please enter in your email address here.">
        </label>
        <small class="error">An email address is required.</small>
      </div>
      <div class="phone-field">
                        <label>Phone Number
                         <input type="tel" name="phone" placeholder="Please type your phone number here.">
                        </label>
                         </div>
      <div class="comments-field">
                        <label>Comments <small>required</small>
                        <textarea name="comments" placeholder="None" required></textarea>
                        </label>
                        <small class="error">A comment must be entered</small>
                         </div>
      <button type="submit">Submit</button>
    </form>
    </div>
    </div>
    </section>
    <?php 
      include "includes/socialmediasection.php";
      include "includes/footer.php";
     ?>
