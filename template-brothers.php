<?php
/*
Template Name: Brothers page
*/
?>
<?php get_header(); ?>
<main class="brothers">
	<section class="e-board">
		<div class="container">
			<header class="fourteen columns offset-by-one e-board-title">
				<h1 class='lobster'>Our Brothers</h1>
				<p>These are the gentlemen who keep our fraternity alive and well. They each have a specific job in managing our day to day activities, and do their best to keep us efficient
				</p>
			</header>
			<h2 class="sixteen columns">Executive Board</h2>
			<div class="one-fifth column e-board-fifths">
				<div class="portrait" id="praetor"></div>
				<h4>Praetor</h4>
				<div class="border-bottom transition-right"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column e-board-fifths">
				<div class="portrait" id="jt"></div>
				<h4>Junior Tribune</h4>
				<div class="border-bottom transition-right"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column e-board-fifths">
				<div class="portrait" id="consul"></div>
				<h4>Consul</h4>
				<div class="border-bottom transition-center"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column e-board-fifths">
				<div class="portrait" id="st"></div>
				<h4>Senior Tribune</h4>
				<div class="border-bottom transition-left"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column e-board-fifths">
				<div class="portrait" id="quaestor"></div>
				<h4>Quaestor</h4>
				<div class="border-bottom transition-left"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
		</div>
	</section>
	<section class="active">
		<div class="container">
			<?php
				$allusers = $wpdb->get_results("SELECT DISTINCT um1.meta_value 'pin', um2.meta_value 'big_pin', um3.meta_value 'first_name', um4.meta_value 'last_name' FROM wp_users");
				// $allusers= $wpdb->get_results("
				// 	SELECT DISTINCT um1.meta_value 'pin', um2.meta_value 'big_pin', um3.meta_value 'first_name', um4.meta_value 'last_name' FROM wp_users u LEFT JOIN ( SELECT * FROM wp_usermeta wum WHERE wum.meta_key = 'pin' ) um1 ON u.ID = um1.user_id LEFT JOIN ( SELECT * FROM wp_usermeta wum WHERE wum.meta_key = 'big_pin' ) um2 ON u.ID = um2.user_id LEFT JOIN ( SELECT * FROM wp_usermeta wum WHERE wum.meta_key = 'first_name' ) um3 ON u.ID = um3.user_id LEFT JOIN ( SELECT * FROM wp_usermeta wum WHERE wum.meta_key = 'last_name' ) um4 ON u.ID = um4.user_id WHERE um1.meta_value IS NOT NULL ORDER BY `um1`.`meta_value` ASC 
				// 	");
					
				$numBrothersPHP = 0;
					
					var_dump($allusers);
				foreach($allusers as $user) {
					if ($user->pin != null) {
						echo "brotherArray[Number('".$user->pin."')] = \"".$user->first_name." ".$user->last_name."\";\r\n";
						echo "bigArray[Number('".$user->pin."')] = Number('".$user->big_pin."');\r\n";
						if ($user->pin > $numBrothersPHP) {
							$numBrothersPHP = $user->pin;
						}
					}
				}
				echo "numBrothers = ".$numBrothersPHP.";";

				$blogusers = get_users(  );
				// Array of WP_User objects.
				foreach ( $blogusers as $user ) {
					echo '<span>' . esc_html( $user->user_email ) . '</span>';
				}
			?>
			<h2 class="sixteen columns">Active Chapter</h2>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
		</div>
	</section>
	<section class="alumni">
		<div class="container">
			<h2 class="sixteen columns">Alumni</h2>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="praetor"></div>
				<p>Will Hammond <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="jt"></div>
				<p>Jaime Geiger <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="consul"></div>
				<p>Justin Peterson <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="st"></div>
				<p>Kyle Chrysler <span>#xxx</span></p>
			</div>
			<div class="one-fifth column active-fifths">
				<div class="portrait" id="quaestor"></div>
				<p>Xavier Hocquet <span>#xxx</span></p>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>