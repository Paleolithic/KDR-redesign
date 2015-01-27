<?php
/*
Template Name: Alumni dues page
*/
?>
<?php get_header(); ?>
<main class="ibac-dues">
	<section class="dues">
		<div id="container" class="container">
			<header class="fourteen columns offset-by-one blogs-title">
				<h1 class='lobster'>Alumni Dues</h1>
				<p>As alumni, keeping up with your alumni dues grants you access to the many events we have throughout the years. If you want to stay in touch with the fraternity and its progress remember the importance of paying your alumni dues. Alumni dues are $25 / year and are now payable via PayPal. You can set up scheduled payments for multiple years below.</p>
			</header>
			<form action="" method="post" enctype="text/plain">
                <h3 class="sixteen columns">Installments</h3>
                <ul class="sixteen columns custom-radio">
                	<li class="four columns alpha">
                		<input type="radio" id="1y" name="length" value="$25 for 1 year" checked>
                		<label for="1y">$25 for 1 year</label>
                	</li>
                	<li class="four columns">
                		<input type="radio" id="2y" name="length" value="$25 for 2 years">
                		<label for="2y">$25 for 2 years</label>
                	</li>
                	<li class="four columns">
                		<input type="radio" id="3y" name="length" value="$25 for 3 years">
                		<label for="3y">$25 for 3 years</label>
                	</li>
                	<li class="four columns omega">
                		<input type="radio" id="4y" name="length" value="$25 for 4 years">
                		<label for="4y">$25 for 4 years</label>
                	</li>
            	</ul>	
                <input class="sixteen columns" type='submit' value='Pay'>
            </form>
		</div>
	</section>
</main>
<?php get_footer(); ?>