<?php
/*
Template Name: Alumni page
*/
?>
<?php get_header(); ?>
<?php ini_set('display_errors',1); ?>
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
				<?php $url = get_template_directory_uri() . "/images/rrf.jpg"; ?>
				<div class="eight columns alpha blog-image" style="background-image: url('<?php echo $url; ?>');"></div>
				<div class="eight columns omega blog-post">
					<h2 class="entry-title"><a href="http://kdrib.org/25rrf/">25th Red Rose Formal </a></h2>
					<p>On May 2nd, 2015 we will celebrate our 25th Anniversary at the Rochester Doubletree. We have a block of rooms at the DoubleTree at a rate of $109.00/night.
					<a class="more-link" href="http://kdrib.org/25rrf/">Continue reading <i class="fa fa-arrow-right"></i></a>
					</p>
				</div>
			</div>
			<div class="sixteen columns blog">
				<?php $url = get_template_directory_uri() . "/images/oktoberfest.jpg"; ?>
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
		<div class="container">
			<header class="fourteen columns offset-by-one blogs-title">
				<h1 class='lobster'>Mailing List Signup</h1>
			</header>

			<form id="email-signup" method="post" enctype="text/plain">
                <input class="four columns" type="text" id="first_name" name="first_name" placeholder="First Name" />
                <input class="four columns" type="text" id="last_name" name="last_name" placeholder="Last Name" />
				<input class="eight columns" type="text" id="email" name="email" placeholder="Email" />
				<select id="mailing_options" class="sixteen columns" multiple="multiple" name="list[]" required="required">
                	<option value="Active chapter minutes" selected>Active chapter minutes</option>
                	<option value="IBAC annual meeting minutes">IBAC annual meeting minutes</option>
                	<option value="Newsletters">Newsletters</option>
                	<option value="Announcements">Announcements</option>
                	<option value="Only annual events">Only annual events</option>
                	<option value="KDR IB Rochester events">KDR IB Rochester events</option>
                	<option value="Career Opportunities">Career Opportunities</option>
                </select>

                <input id="mailing_submit" class="sixteen columns" type='submit' value='Sign Up'>
            </form>
		</div>
	</section>
	<section class="support">
		<div class="container">
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
                		<input type="radio" onclick="selectDuration(0);" id="12m" name="length" value="12 Months">
                		<label for="12m">12 Months</label>
                	</li>
                	<li class="one-third column">
                		<input type="radio" onclick="selectDuration(1);" id="24m" name="length" value="24 Months">
                		<label for="24m">24 Months</label>
                	</li>
                	<li class="one-third column omega">
                		<input type="radio" onclick="selectDuration(2);" id="30m" name="length" value="30 Months" checked>
                		<label for="30m">30 Months</label>
                	</li>
            	</ul>	
                <h3 class="sixteen columns">Monthly Amount</h3>
                <ul class="sixteen columns custom-radio">
                	<li class="two columns alpha">
                		<input type="radio" onclick="selectAmount(0);" id="10" name="amount" value="$10">
                		<label for="10">$10</label>
                	</li>
					<li class="two columns">
		                <input type="radio" onclick="selectAmount(1);" id="15" name="amount" value="$15">
		                <label for="15">$15</label>
	                </li>
					<li class="two columns">
		                <input type="radio" onclick="selectAmount(2);" id="20" name="amount" value="$20" checked>
		                <label for="20">$20</label>
	                </li>
					<li class="two columns">
		                <input type="radio" onclick="selectAmount(3);" id="25" name="amount" value="$25">
		                <label for="25">$25</label>
	                </li>
					<li class="two columns">
		                <input type="radio" onclick="selectAmount(4);" id="30" name="amount" value="$30">
		                <label for="30">$30</label>
	                </li>
					<li class="two columns">
		                <input type="radio" onclick="selectAmount(5);" id="35" name="amount" value="$35">
		                <label for="35">$35</label>
	                </li>
					<li class="two columns">
		                <input type="radio" onclick="selectAmount(6);" id="40" name="amount" value="$40">
		                <label for="40">$40</label>
	                </li>
					<li class="two columns omega">
		                <input onclick="selectAmount(7);" type="radio" id="50" name="amount" value="$50">
		                <label for="50">$50</label>
	                </li>
					<li class="two columns alpha">
		                <input onclick="selectAmount(8);" type="radio" id="75" name="amount" value="$75">
		                <label for="75">$75</label>
	                </li>
					<li class="two columns omega">
		                <input onclick="selectAmount(9);" type="radio" id="100" name="amount" value="$100">
		                <label for="100">$100</label>
	                </li>
                </ul>
                <input class="sixteen columns" type='submit' onclick="gotoPayPal();" value='Donate'>
            </form>
		</div>
	</section>
</main>
<?php get_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/paypal-functions.js"/></script>
<script type="text/javascript">
    //                   10       15       20       25       30       35       40       50       75       100
    codes[0] = new Array(3026390, 3026356, 3026334, 3026311, 3026301, 3026283, 3026268, 3026249, 3026191, 3005979); //12 month 
    codes[1] = new Array(3026717, 3026660, 3026642, 3026612, 3026586, 3026527, 3026499, 3026480, 3026458, 3026425); //24 month
    codes[2] = new Array(3027046, 3027015, 3026958, 3026925, 3026898, 3026882, 3026863, 3026831, 3026796, 3026770); //30 month

    var durationId = 2;
    var amountId = 2;
</script>
<script type="text/javascript">
	 (function($){
	 	// $first_name, $last_name, $email;
		// Function to validate username, password, and email input on client side
        var first_nameInput = document.getElementById("first_name");
        var last_nameInput = document.getElementById("last_name");
        var emailInput = document.getElementById("email"); 
	    
	    function validate()
	    {
	        $first_name = first_nameInput.value;
	        $last_name = last_nameInput.value;
	        $email = emailInput.value;

	        $validFName  = $first_name != "";
	        $validLName  = $last_name != "";
	        $validEmail = $email != "" && $email.indexOf("@") >= 0; 

	        $color = $validFName ? "grey" : "red";
	        first_nameInput.style.border="1px solid " + $color;

	        $color = $validLName ? "grey" : "red";
	        last_nameInput.style.border="1px solid " + $color;

	        $color = $validEmail ? "grey" : "red";
	        emailInput.style.border="1px solid " + $color;

	        if ($validFName && $validLName && $validEmail) {return true;}
	        
	        return false;
	    }
	
		$("#email-signup").submit(function(e){
			console.log("submitted");
			e.preventDefault();

			if(validate()){
				$submit = $("#mailing_submit");
				$submit.toggleClass("loading");
				$submit.prop("value", "Loading...");
				
				var selectedOptions = [];
				$("#mailing_options").each(function(){
					selectedOptions.push($(this).val()); 
				});

				console.log(selectedOptions);
				$.ajax({
					url: "<?php bloginfo('template_directory');?>/includes/send_email.php",
					type: "POST",
					data: {
						"first_name": $first_name,
						"last_name": $last_name,
						"email": $email,
						"list": selectedOptions
					},
					success: function(res){
						console.log(res);

						first_nameInput.value = "";
						last_nameInput.value = "";
						emailInput.value = "";

						first_nameInput.style.border = "1px solid grey";
						last_nameInput.style.border = "1px solid grey";
						emailInput.style.border = "1px solid grey";

						$("#mailing_options").val("Active chapter minutes");

						// $submit = $("#mailing_submit");
						$submit.toggleClass("loading complete");
						$submit.prop("disabled", true);
						$submit.prop("value", "Success!");

					}
				});				
			}
		});
	}(jQuery));
</script>