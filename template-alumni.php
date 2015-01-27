<?php
/*
Template Name: Alumni page
*/
?>
<?php get_header(); ?>
<main class="ibac">
	<section class="info">
		<div class="container">
			<header class="fourteen columns offset-by-one ibac-board-title">
				<h1 class='lobster'>Iota Beta Alumni Corporation</h1>
				<p>IBAC is the Alumni Corporation founded to keep Iota Beta’s Alumni up-to-date with what is happening in the fraternity, in addition to information regarding dates for Alumni events.
				</p>
			</header>
		</div>
	</section>
	<section class="blogs">
		<div id="container" class="container">
			<header class="fourteen columns offset-by-one blogs-title">
				<h1 class='lobster'>Upcoming Alumni Events</h1>
			</header>
			<div class="sixteen columns blog">
				<div class="eight columns alpha blog-image" style="background-image: url('<?php echo $url; ?>');"></div>
				<div class="eight columns omega blog-post">
					<h2 class="entry-title"><a href="http://kdrib.org/25rrf/">25th Red Rose Formal </a></h2>
					<p>On May 2nd, 2015 we will celebrate our 25th Anniversary at the Rochester Doubletree. We have a block of rooms at the DoubleTree at a rate of $109.00/night.
					<a class="more-link" href="http://kdrib.org/25rrf/">Continue reading <i class="fa fa-arrow-right"></i></a>
					</p>
				</div>
			</div>
			<div class="sixteen columns blog">
				<div class="eight columns alpha blog-post">
					<h2 class="entry-title"><a href="http://kdrib.org/2014-oktoberfest-alumni-weekend/">Oktoberfest Alumni Weekend</a></h2>
					<p>Hello bros, Hopefully this message finds all of you well as you prepare to see the brothers of Iota Beta this October! The itinerary for this year’s Oktoberfest is as follows:
					<a class="more-link" href="http://kdrib.org/2014-oktoberfest-alumni-weekend/">Continue reading <i class="fa fa-arrow-right"></i></a>
					</p>
				</div>
				<div class="eight columns omega blog-image" style="background-image: url('<?php echo $url; ?>');"></div>
			</div>
		</div>
	</section>
	<section class="mailing">
		<div id="container" class="container">
			<header class="fourteen columns offset-by-one blogs-title">
				<h1 class='lobster'>Mailing List Signup</h1>
			</header>
			<form action="" method="post" enctype="text/plain">
                <input class="four columns" type="text" name="first" placeholder="First Name" />
                <input class="four columns" type="text" name="first" placeholder="Last Name" />
				<input class="eight columns" type="text" name="email" placeholder="Email" />
				<select class="sixteen columns" multiple="multiple" required="required">
                	<option value="Active chapter minutes">Active chapter minutes</option>
                	<option value="IBAC annual meeting minutes">IBAC annual meeting minutes</option>
                	<option value="Newsletters">Newsletters</option>
                	<option value="Announcements">Announcements</option>
                	<option value="Only annual events">Only annual events</option>
                	<option value="KDR IB Rochester events">KDR IB Rochester events</option>
                	<option value="Career Opportunities">Career Opportunities</option>
                </select>

                <input class="sixteen columns" type='submit' value='Sign Up'>
            </form>
		</div>
	</section>
	<section class="support">
		<div id="container" class="container">
			<header class="fourteen columns offset-by-one blogs-title">
				<h1 class='lobster'>Support KDR IB</h1>
				<p>
				By making a pledge to the Iota Beta Alumni Corporation‘s Capital Campaign you are ensuring that our chapter at RIT will be going strong for years to come.  The capital campaign rewards the chapter for their accomplishments in recruitment, academic success and Greek life.
				At a time when liability insurance alone costs each of our undergraduate brothers over $1,250 over four years, your monthly pledge will make a HUGE impact.
				Please consider a monthly pledge of $20.00 for 30 months.  For less than the cost of filling up your car with a tank of gas we can put our chapter on sound financial footing.
				  Support your brothers today!</p>
			</header>
			<form action="" method="post" enctype="text/plain">
                <h3 class="sixteen columns">Installments</h3>
                <ul class="sixteen columns custom-radio">
                	<li class="one-third column alpha">
                		<input type="radio" id="12m" name="length" value="12 Months">
                		<label for="12m">12 Months</label>
                	</li>
                	<li class="one-third column">
                		<input type="radio" id="24m" name="length" value="24 Months">
                		<label for="24m">24 Months</label>
                	</li>
                	<li class="one-third column omega">
                		<input type="radio" id="30m" name="length" value="30 Months" checked>
                		<label for="30m">30 Months</label>
                	</li>
            	</ul>	
                <h3 class="sixteen columns">Monthly Amount</h3>
                <ul class="sixteen columns custom-radio">
                	<li class="two columns alpha">
                		<input type="radio" id="10" name="amount" value="$10">
                		<label for="10">$10</label>
                	</li>
					<li class="two columns">
		                <input type="radio" id="15" name="amount" value="$15">
		                <label for="15">$15</label>
	                </li>
					<li class="two columns">
		                <input type="radio" id="20" name="amount" value="$20" checked>
		                <label for="20">$20</label>
	                </li>
					<li class="two columns">
		                <input type="radio" id="25" name="amount" value="$25">
		                <label for="25">$25</label>
	                </li>
					<li class="two columns">
		                <input type="radio" id="30" name="amount" value="$30">
		                <label for="30">$30</label>
	                </li>
					<li class="two columns">
		                <input type="radio" id="35" name="amount" value="$35">
		                <label for="35">$35</label>
	                </li>
					<li class="two columns">
		                <input type="radio" id="40" name="amount" value="$40">
		                <label for="40">$40</label>
	                </li>
					<li class="two columns omega">
		                <input type="radio" id="50" name="amount" value="$50">
		                <label for="50">$50</label>
	                </li>
					<li class="two columns alpha">
		                <input type="radio" id="75" name="amount" value="$75">
		                <label for="75">$75</label>
	                </li>
					<li class="two columns omega">
		                <input type="radio" id="100" name="amount" value="$100">
		                <label for="100">$100</label>
	                </li>
                </ul>
                <input class="sixteen columns" type='submit' value='Donate'>
            </form>
		</div>
	</section>
</main>
<?php get_footer(); ?>