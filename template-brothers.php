<?php
/*
Template Name: Brothers page
*/
?>
<?php get_header(); ?>
<?php include (TEMPLATEPATH . '/includes/eboard-variables.php'); ?>
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
				<?php $url = get_template_directory_uri() . "/images/brothers/" . $praetor_info->pin . ".jpg"; ?>
				<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
				<h4>Praetor</h4>
				<div class="border-bottom transition-right"></div>
				<p><span><?php echo $praetor_info->first_name; ?></span><span><?php echo $praetor_info->last_name; ?></span><span>#<?php echo $praetor_info->pin; ?></span></p>		
			</div>
			<div class="one-fifth column e-board-fifths">
				<?php $url = get_template_directory_uri() . "/images/brothers/" . $jt_info->pin . ".jpg"; ?>
				<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
				<h4>Junior Tribune</h4>
				<div class="border-bottom transition-right"></div>
				<p><span><?php echo $jt_info->first_name; ?></span><span><?php echo $jt_info->last_name; ?></span><span>#<?php echo $jt_info->pin; ?></span></p>		
			</div>
			<div class="one-fifth column e-board-fifths">
				<?php $url = get_template_directory_uri() . "/images/brothers/" . $consul_info->pin . ".jpg"; ?>
				<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
				<h4>Consul</h4>
				<div class="border-bottom transition-center"></div>
				<p><span><?php echo $consul_info->first_name; ?></span><span><?php echo $consul_info->last_name; ?></span><span>#<?php echo $consul_info->pin; ?></span></p>		
			</div>
			<div class="one-fifth column e-board-fifths">
				<?php $url = get_template_directory_uri() . "/images/brothers/" . $st_info->pin . ".jpg"; ?>
				<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
				<h4>Senior Tribune</h4>
				<div class="border-bottom transition-left"></div>
				<p><span><?php echo $st_info->first_name; ?></span><span><?php echo $st_info->last_name; ?></span><span>#<?php echo $st_info->pin; ?></span></p>	
			</div>
			<div class="one-fifth column e-board-fifths">
				<?php $url = get_template_directory_uri() . "/images/brothers/" . $quaestor_info->pin . ".jpg"; ?>
				<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
				<h4>Quaestor</h4>
				<div class="border-bottom transition-left"></div>
				<p><span><?php echo $quaestor_info->first_name; ?></span><span><?php echo $quaestor_info->last_name; ?></span><span>#<?php echo $quaestor_info->pin; ?></span></p>	
			</div>
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
								  $missing_url = get_template_directory_uri() . "/images/brothers/no_pic.jpg"; 
								  $check_path = TEMPLATEPATH . "/images/brothers/" . $user_info->pin . ".jpg";
							?>
							<?php if(file_exists ( $check_path)){ ?><div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
							<?php } else{ ?><div class="portrait" style="background-image: url('<?php echo $missing_url; ?>');"></div><?php } ?>
							<p><span><?php echo $user_info->first_name ?></span><span><?php echo $user_info->last_name ?></span><span>#<?php echo $user_info->pin ?></span></p> 
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
								  $missing_url = get_template_directory_uri() . "/images/brothers/no_pic.jpg"; 
								  $check_path = TEMPLATEPATH . "/images/brothers/" . $user_info->pin . ".jpg";
							?>
							<?php if(file_exists ( $check_path)){ ?><div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
							<?php } else{ ?><div class="portrait" style="background-image: url('<?php echo $missing_url; ?>');"></div><?php } ?>
							<p><span><?php echo $user_info->first_name ?></span><span><?php echo $user_info->last_name ?></span><span>#<?php echo $user_info->pin ?></span></p> 
						</div>				
			<?php
				 	}
				}
			?>
		</div>
	</section>
</main>
<?php get_footer(); ?>