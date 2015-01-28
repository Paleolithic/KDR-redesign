<?php
/*
Template Name: Alumni dues page
*/
?>
<?php get_header(); ?>
<main class="ibac-dues">
	<section class="dues">
		<div class="container">
			<header class="fourteen columns offset-by-one">
				<h1 class='lobster'>Alumni Dues</h1>
				<p>As alumni, keeping up with your alumni dues grants you access to the many events we have throughout the years. If you want to stay in touch with the fraternity and its progress remember the importance of paying your alumni dues. Alumni dues are $25 / year and are now payable via PayPal. You can set up scheduled payments for multiple years below.</p>
			</header>
        </div>
        <div class="container">
			<form action="" method="post" enctype="text/plain">
                <h3 class="sixteen columns">Installments</h3>
                <ul class="sixteen columns custom-radio">
                	<li class="four columns alpha">
                		<input type="radio" onclick="selectDuration(0);" id="2y" name="length" value="$25 for 2 year" checked>
                		<label for="2y">$25 for 2 years</label>
                	</li>
                	<li class="four columns">
                		<input type="radio" onclick="selectDuration(1);" id="3y" name="length" value="$25 for 3 years">
                		<label for="3y">$25 for 3 years</label>
                	</li>
                	<li class="four columns">
                		<input type="radio" onclick="selectDuration(2);" id="4y" name="length" value="$25 for 4 years">
                		<label for="4y">$25 for 4 years</label>
                	</li>
                	<li class="four columns omega">
                		<input type="radio" onclick="selectDuration(3);" id="5y" name="length" value="$25 for 5 years">
                		<label for="5y">$25 for 5 years</label>
                	</li>
            	</ul>	
                <input class="sixteen columns" type='submit' onclick="gotoPayPal();" value='Pay'>
            </form>
		</div>
	</section>
</main>
<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/paypal-functions.js"/></script>
<script type="text/javascript">
    //        2 years    3 years    4 years    5 years
    codes = [[7979808], [7979885], [7979904], [7979934]];

    var durationId = 0;
    var amountId = 0;
</script>