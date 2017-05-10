<?php /* Template Name: Demo Page Template */ ; ?>

	<main role="main">
		<!-- section -->
        <section>

	        <h2>form</h2>
	        <form >
	            <input type="email" name="email" value="" placeholder="Your email">
	            <button type="submit">Submit</button>
	        </form>
			<?php
				date_default_timezone_set('UTC');
				if (isset($_GET['email'])){
					$wpdb->insert(
							'form',
							array(	'email' => $_GET['email'],
						)
					);
				};
			 ?>
		</section>
		<!-- /section -->
	</main>
