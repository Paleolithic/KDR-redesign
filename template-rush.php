<?php
/*
Template Name: Rush page
*/
?>
<?php get_header(); ?>
<main class="rush">
	<section class="calendar">
		<div class="container calendar-title">
			<div class="fourteen columns offset-by-one info-title">
				<h1 class='lobster'>Our Rush Schedule</h1>
				<p>Nam adipiscing. Nullam dictum felis eu pede mollis pretium. Donec mi odio, faucibus at.</p>
			</div>
		</div>
		<div class="main">
			<div class="custom-calendar-wrap">
				<div id="custom-inner" class="custom-inner">
					<div class="custom-header clearfix">
						<nav>
							<span id="custom-prev" class="custom-prev"></span>
							<span id="custom-next" class="custom-next"></span>
						</nav>
						<h2 id="custom-month" class="custom-month"></h2>
						<h3 id="custom-year" class="custom-year"></h3>
					</div>
					<div id="calendar" class="fc-calendar-container"></div>
				</div>
			</div>
		</div>
	</section>
	<section class="why">
		<header class="container why-title">
			<div class="fourteen columns offset-by-one info-title">
				<h1 class='lobster'>Why Should You Join Us?</h1>
				<p>Nam adipiscing. Nullam dictum felis eu pede mollis pretium. Donec mi odio, faucibus at.</p>
			</div>
		</header>		
	</section>
	<div id="results"></div>
</main>

<script type='text/javascript' src="<?php bloginfo('template_directory'); ?>/scripts/calendario/modernizr.custom.63321.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/calendario/jquery.calendario.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/calendario/data.js"></script>
<script type="text/javascript">
	var mykey = 'AIzaSyBHaekAYx15wxw9tDU_tbvX-2z1Hhim0F8'; // typically like Gtg-rtZdsreUr_fLfhgPfgff
	var calendarid = 'paleolithicster@gmail.com'; // will look somewhat like 3ruy234vodf6hf4sdf5sd84f@group.calendar.google.com

	$.ajax({
	    type: 'GET',
	    url: encodeURI('https://www.googleapis.com/calendar/v3/calendars/paleolithicster@gmail.com/events?key=AIzaSyBHaekAYx15wxw9tDU_tbvX-2z1Hhim0F8'),
	    dataType: 'json',
	    success: function (response) {
	        events = response.items;
	        formatEventsArray(events);
	    },
	    error: function (response) {
	        console.log("OH GOD NO"); 
	    }
	});

	console.log(codropsEvents);
	// var codropsEvents = [];
	
	function formatEventsArray (events_array){


		jQuery.each( events_array, function(index, value){
			console.log("start.dateTime: " + value.start.dateTime + " summary: " + value.summary );
			
			full_date = value.start.dateTime;
			split_date = full_date.split(/[-T]+/)
			organized_date = split_date[1] + "-" + split_date[2] + "-" + split_date[0];
			summary = value.summary;

			// console.log(organized_date);

			codropsEvents[organized_date] = summary;
		});
		
		console.log(codropsEvents);
	
	}
</script>
<script type="text/javascript">	
	$(function() {
	
		var transEndEventNames = {
				'WebkitTransition' : 'webkitTransitionEnd',
				'MozTransition' : 'transitionend',
				'OTransition' : 'oTransitionEnd',
				'msTransition' : 'MSTransitionEnd',
				'transition' : 'transitionend'
			},
			transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
			$wrapper = $( '#custom-inner' ),
			$calendar = $( '#calendar' ),
			cal = $calendar.calendario( {
				onDayClick : function( $el, $contentEl, dateProperties ) {

					if( $contentEl.length > 0 ) {
						showEvents( $contentEl, dateProperties );
					}

				},
				caldata : codropsEvents,
				displayWeekAbbr : true
			} ),
			$month = $( '#custom-month' ).html( cal.getMonthName() ),
			$year = $( '#custom-year' ).html( cal.getYear() );

		$( '#custom-next' ).on( 'click', function() {
			cal.gotoNextMonth( updateMonthYear );
		} );
		$( '#custom-prev' ).on( 'click', function() {
			cal.gotoPreviousMonth( updateMonthYear );
		} );

		function updateMonthYear() {				
			$month.html( cal.getMonthName() );
			$year.html( cal.getYear() );
		}

		// just an example..
		function showEvents( $contentEl, dateProperties ) {

			hideEvents();
			
			var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
				$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );

			$events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
			
			setTimeout( function() {
				$events.css( 'top', '0%' );
			}, 25 );

		}
		function hideEvents() {

			var $events = $( '#custom-content-reveal' );
			if( $events.length > 0 ) {
				
				$events.css( 'top', '100%' );
				Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();

			}

		}
	
	});
</script>


<?php get_footer(); ?>