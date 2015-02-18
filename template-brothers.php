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
			<?php include (TEMPLATEPATH . '/includes/eboard.php'); ?>
		</div>
	</section>
	<?php $approvedusers = get_users(array(
			    'meta_query' => array(
			   		array(
				   		'key' => 'pin',
				   		'value' => '000',
				   		'compare' => '>'
		   			)
			   	),
			   'orderby' => 'meta_value',
			   'order' => 'ASC'
			));
	?>
	<section class="active">
		<div class="container">
			<h2 class='sixteen columns'>Active Chapter</h2>
			<?php
				// Active Chapter
				foreach ( $approvedusers as $user ) {
					$user_info = get_userdata($user->ID);
					if($user_info->first_name && $user_info->last_name && $user_info->active_member == "active"){ ?>
						<div class="one-fifth column active-fifths">
							<!-- $directory = bloginfo('stylesheet_directory') . '/images/brothers/test/' . $user_info->pin . '.jpg' -->
							<?php $url = get_template_directory_uri() . "/images/brothers/" . $user_info->pin . ".jpg";
								  $check_path = TEMPLATEPATH . "/images/brothers/" . $user_info->pin . ".jpg"; ?>
							<?php if(file_exists ( $check_path)){ ?>
								<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
							<?php } else{ ?>
								<div class="portrait" style="background-image: url('<?php echo $missing_url; ?>');"></div>
							<?php } ?>
							<p>
								<span><?php echo $user_info->first_name ?></span>
								<span><?php echo $user_info->last_name ?></span>
								<span>#<?php echo $user_info->pin ?></span>
							</p> 
						</div>				
			<?php
				 	}
				}
			?>
		</div>
	</section>
	<section class="alumni">
		<div class="container">
			<h2 class='sixteen columns'>Inactive / Alumni</h2>
			<?php
				// Active Chapter
				foreach ( $approvedusers as $user ) {
					$user_info = get_userdata($user->ID);
					if($user_info->first_name && $user_info->last_name && $user_info->active_member != "active"){ ?>
						<div class="one-fifth column active-fifths">
							<!-- $directory = bloginfo('stylesheet_directory') . '/images/brothers/test/' . $user_info->pin . '.jpg' -->
							<?php $url = get_template_directory_uri() . "/images/brothers/" . $user_info->pin . ".jpg";
								  $check_path = TEMPLATEPATH . "/images/brothers/" . $user_info->pin . ".jpg";
							?>
							<?php if(file_exists ( $check_path)){ ?>
								<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
							<?php } else{ ?>
								<div class="portrait" style="background-image: url('<?php echo $missing_url; ?>');"></div>
							<?php } ?>
							<p>
								<span><?php echo $user_info->first_name ?></span>
								<span><?php echo $user_info->last_name ?></span>
								<span>#<?php echo $user_info->pin ?></span>
							</p> 
						</div>				
			<?php
				 	}
				}
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>