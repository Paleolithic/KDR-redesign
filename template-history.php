<?php
/*
Template Name: History page
*/
?>
<?php get_header(); ?>
<script src="<?php bloginfo('template_directory'); ?>/scripts/icons-filling-effect/modernizr.js"></script> 
<main class="history">
	<section class="header">
		<div class="container">
			<header class="fourteen columns offset-by-one calendar-title">
				<h1 class='lobster'>Chapter History</h1>
				<p>Below you'll find our rush schedule, come hang out with us! All events start KDR House, located in Res Hall A</p>
			</header>
		</div>
	</section>
	<div id="filler"></div>
	<section class="timeline">
		<div class="container">
			<ul id="cd-container" class="sixteen columns cd-container">
				<li class="cd-service cd-service-divider"></li>

				<li class="cd-service cd-service-1">
					<h2>Web Design</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis pariatur tenetur quod veritatis nulla aspernatur architecto! Fugit, reprehenderit amet deserunt molestiae ut libero facere quasi velit perferendis ullam quis necessitatibus!</p>
				</li> <!-- cd-service -->

				<li class="cd-service cd-service-2">
					<h2>Responsive Approach</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis pariatur tenetur quod veritatis nulla aspernatur architecto! Fugit, reprehenderit amet deserunt molestiae ut libero facere quasi velit perferendis ullam quis necessitatibus!</p>
				</li> <!-- cd-service -->

				<li class="cd-service cd-service-3">
					<h2>E-commerce</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis pariatur tenetur quod veritatis nulla aspernatur architecto! Fugit, reprehenderit amet deserunt molestiae ut libero facere quasi velit perferendis ullam quis necessitatibus!</p>
				</li> <!-- cd-service -->

				<li class="cd-service cd-service-4">
					<h2>CMS Integration</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis pariatur tenetur quod veritatis nulla aspernatur architecto! Fugit, reprehenderit amet deserunt molestiae ut libero facere quasi velit perferendis ullam quis necessitatibus!</p>
				</li> <!-- cd-service -->

				<li class="cd-service cd-service-divider"></li>
			</ul> <!-- cd-services -->
		</div>
	</section>
</main>
<footer>	
</footer>
<script src="<?php bloginfo('template_directory'); ?>/scripts/icons-filling-effect/jquery-2.1.1.js"></script>
<script>
	jQuery(document).ready(function($) {
		//store service items
		var fillingBlocks = $('.cd-service').not('.cd-service-divider');

		//store service items top position into an array
		var topValueFillingBlocks = [];
		fillingBlocks.each(function(index){
			var topValue = $(this).offset().top;
			topValueFillingBlocks[topValueFillingBlocks.length] = topValue;
		});

		//add the .focus class to the first service item
		fillingBlocks.eq(0).addClass('focus');

		$(window).on('scroll', function(){
			//check which service item is in the viewport and add the .focus class to it
			updateOnFocusItem(fillingBlocks.slice(1));
			//evaluate the $(window).scrollTop value and change the body::after and body::before background accordingly (using the new-color-n classes)
			bodyBackground(topValueFillingBlocks);
		});

		$("#filler").css("height",$("#cd-container").height())
	});

	function updateOnFocusItem(items) {
		items.each(function(){
			( $(this).offset().top - $(window).scrollTop() <= $(window).height()/2 ) ? $(this).addClass('focus') : $(this).removeClass('focus');
		});
	}

	function bodyBackground(itemsTopValues) {
		var topPosition = $(window).scrollTop() + $(window).height()/2,
			servicesNumber = itemsTopValues.length;
		$.each(itemsTopValues, function(key, value){
			if ( (itemsTopValues[key] <= topPosition && itemsTopValues[key+1] > topPosition) || (itemsTopValues[key] <= topPosition && key+1 == servicesNumber ) ) {	
				$('body').removeClass('new-color-'+(key-1)+' new-color-'+(key+1)).addClass('new-color-'+key);
			}
		});
	}
</script>