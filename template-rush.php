<?php
/*
Template Name: Rush page
*/
?>
<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/includes/position-variables.php'); ?>
<main class="rush">
	<section class="schedule">
		<div class="container">
			<header class="fourteen columns offset-by-one calendar-title">
				<h1 class='lobster'>Our Rush Schedule</h1>
				<p>Below you'll find our rush schedule, come hang out with us! All events start KDR House, located in Res Hall A</p>
			</header>
			<div class="twelve columns offset-by-two">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>DAY</th>
							<th>DATE</th>
							<th>EVENT</th>
							<th>TIME</th>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>Monday</td>
							<td>Feb 2nd</td>
							<td>Ritchies</td>
                            <td>5pm - 7pm</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>Feb 4th</td>
                            <td>Dodgeball</td>
							<td>7pm - 9pm</td>
						</tr>
						<tr>
							<td>Friday</td>
							<td>Feb 6th</td>
							<td>Sledding at Glacier Ridge Tubing</td>
							<td>7pm - 9pm. Meet at house at 6pm</td>
						</tr>
						<tr>
							<td>Tuesday</td>
							<td>Feb 10th</td>
							<td>DIY Pizza Night</td>
							<td>5pm - 8pm</td>
						</tr>
						<tr>
							<td>Thursday</td>
							<td>Feb 12th</td>
							<td>Game Night</td>
							<td>7pm - End</td>
						</tr>
						<tr>
							<td>Saturday</td>
							<td>Feb 14th</td>
							<td>Formal Dinner (Invite Only)</td>
							<td>---</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>
    <section class="interview">
        <div class="container">
            <div class="sixteen columns">
                <div class="link">
                    <a href="http://kdrib.youcanbook.me">Schedule an Interview</a>
                </div>
            </div>
        </div>
    </section>
	<section class="why" id="slides">
		<div class='gradient'></div>
		<div class="container">
			<header class="fourteen columns offset-by-one why-title">
				<h1 class='lobster'>Why Should You Join Us?</h1>
			</header>
		</div>
		<ul class='slides-container'>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/bbq.jpg" width='1366' height='911' alt='Bright Day'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                    	<p>A common rush event that we have is an outdoor block party, complete with hot tub, bbq, and foursquare</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/bbq_carlos.jpg" width='1366' height='911' alt='Glassblowing'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                    	<p>A bunch of brothers can be seen here with RIT students hanging out during the block party</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/bbq_far.jpg" width='1366' height='911' alt='Library'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                        <p>You can see our outdoor hot tub set up for our block party here.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/bowling.jpg" width='1366' height='911' alt='Gordon Field House'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                    	<p>We've previously had bowling rush events</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/carlos_bowling.jpg" width='1366' height='911' alt='Justin Peterson'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                        <p>Some brothers are definitely better than others at bowling.</p>
                    </div>                    
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/vg_night.jpg" width='1366' height='911' alt='Really annoying kid'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                        <p>Another fan favorite is video game night, where we chill inside and play video games and board games.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/weinke.jpg" width='1366' height='911' alt='Really annoying kid'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                        <p>We like sports too. Seen here is Andrew Weinke going hard at Dodgeball.</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/group_skyzone.jpg" width='1366' height='911' alt='TJ Boyle'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                        <p>We've also done rush events at Sky Zone, a huge trampoline park</p>
                    </div>
                </div>
            </li>
            <li>
                <img src="<?php bloginfo('template_directory'); ?>/images/rush/zach_skyzone.jpg" width='1366' height='911' alt='Really annoying kid'>
                <div class='container desc'>
                    <div class='fourteen columns offset-by-one'>
                        <p>As you can see, skyzone is a ton of fun.</p>
                    </div>
                </div>
            </li>
        </ul>	
        <nav class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-chevron-right fa-5x"></i></a>
            <a href="#" class="prev"><i class="fa fa-chevron-left fa-5x"></i></a>
        </nav>
	</section>
    <section class="who">
        <div class="container">
            <header class="fourteen columns offset-by-one who-title">
                <h1 class='lobster'>Who Should You Contact?</h1>
                <p>Don't be afraid to reach out to us if you have any questions. We're open to talking any time.</p>
            </header>
        </div>
        <div class="container">
            <div class="one-third column rush-thirds">
                <?php $url = get_template_directory_uri() . "/images/brothers/" . $st_info->pin . ".jpg";  
                      $missing_url = get_template_directory_uri() . "/images/brothers/no_pic.jpg"; 
                      $check_path = TEMPLATEPATH . "/images/brothers/" . $st_info->pin . ".jpg";
                ?>
                <?php if(file_exists ( $check_path)){ ?><div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
                <?php } else{ ?><div class="portrait" style="background-image: url('<?php echo $missing_url; ?>');"></div><?php } ?>
                <h4>Senior Tribune</h4>
                <div class="border-bottom transition-right"></div>
                <p><span><?php echo $st_info->first_name; ?></span><span><?php echo $st_info->last_name; ?></span><span><a href="mailto:seniortribune@kdrib.org">seniortribune@kdrib.org</a></span></p>
            </div>
            <div class="one-third column rush-thirds">
                <?php $url = get_template_directory_uri() . "/images/brothers/" . $rush_info->pin . ".jpg";  
                      $missing_url = get_template_directory_uri() . "/images/brothers/no_pic.jpg"; 
                      $check_path = TEMPLATEPATH . "/images/brothers/" . $rush_info->pin . ".jpg";
                ?>
                <?php if(file_exists ( $check_path)){ ?><div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
                <?php } else{ ?><div class="portrait" style="background-image: url('<?php echo $missing_url; ?>');"></div><?php } ?>
                <h4>Rush Chair</h4>
                <div class="border-bottom transition-center"></div>
                <p><span><?php echo $rush_info->first_name; ?></span><span><?php echo $rush_info->last_name; ?></span><span><a href="mailto:<?php echo $rush_info->user_email;?>"><?php echo $rush_info->user_email; ?></a></span></p>
            </div>
            <div class="one-third column rush-thirds">
                <div class="portrait" id="brother"></div>
                <h4>Any Brother</h4>
                <div class="border-bottom transition-left"></div>
                <p>Mr. Gentleman</p>
            </div>
        </div>
    </section>
</main>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/superslides/superslides.js"></script>
<script>
$('#slides').superslides();
</script>
<?php get_footer(); ?>