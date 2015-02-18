<?php 
	include (TEMPLATEPATH . '/includes/position-variables.php'); 
	$missing_url = get_template_directory_uri() . "/images/brothers/no_pic.jpg"; 
?>
<div class="one-fifth column e-board-fifths">
	<?php $url = get_template_directory_uri() . "/images/brothers/" . $praetor_info->pin . ".jpg";  
		  $check_path = TEMPLATEPATH . "/images/brothers/" . $praetor_info->pin . ".jpg"; ?>
	<?php if(file_exists ( $check_path)){ ?>
		<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
	<?php } else{ ?>
		<div class="portrait missing" style="background-image: url('<?php echo $missing_url; ?>');"></div>
	<?php } ?>
	<h4>Praetor</h4>
	<div class="border-bottom transition-right"></div>
	<p>
		<span><?php echo $praetor_info->first_name; ?></span>
		<span><?php echo $praetor_info->last_name; ?></span>
		<span>#<?php echo $praetor_info->pin; ?></span>
	</p>		
</div>
<div class="one-fifth column e-board-fifths">
	<?php $url = get_template_directory_uri() . "/images/brothers/" . $jt_info->pin . ".jpg";
		  $check_path = TEMPLATEPATH . "/images/brothers/" . $jt_info->pin . ".jpg"; ?>
	<?php if(file_exists ( $check_path)){ ?>
		<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
	<?php } else{ ?>
		<div class="portrait missing" style="background-image: url('<?php echo $missing_url; ?>');"></div>
	<?php } ?>
	<h4>Junior Tribune</h4>
	<div class="border-bottom transition-right"></div>
	<p>
		<span><?php echo $jt_info->first_name; ?></span>
		<span><?php echo $jt_info->last_name; ?></span>
		<span>#<?php echo $jt_info->pin; ?></span>
	</p>		
</div>
<div class="one-fifth column e-board-fifths">
	<?php $url = get_template_directory_uri() . "/images/brothers/" . $consul_info->pin . ".jpg";  
		  $check_path = TEMPLATEPATH . "/images/brothers/" . $consul_info->pin . ".jpg"; ?>
		<?php if(file_exists ( $check_path)){ ?>
			<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
	<?php } else{ ?>
		<div class="portrait missing" style="background-image: url('<?php echo $missing_url; ?>');"></div>
	<?php } ?>
	<h4>Consul</h4>
	<div class="border-bottom transition-center"></div>
	<p>
		<span><?php echo $consul_info->first_name; ?></span>
		<span><?php echo $consul_info->last_name; ?></span>
		<span>#<?php echo $consul_info->pin; ?></span>
	</p>		
</div>
<div class="one-fifth column e-board-fifths">
	<?php $url = get_template_directory_uri() . "/images/brothers/" . $st_info->pin . ".jpg";  
		  $check_path = TEMPLATEPATH . "/images/brothers/" . $st_info->pin . ".jpg"; ?>				
	<?php if(file_exists ( $check_path)){ ?>	
		<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
	<?php } else{ ?>
		<div class="portrait missing" style="background-image: url('<?php echo $missing_url; ?>');"></div>
	<?php } ?>
	<h4>Senior Tribune</h4>
	<div class="border-bottom transition-left"></div>
	<p>
		<span><?php echo $st_info->first_name; ?></span>
		<span><?php echo $st_info->last_name; ?></span>
		<span>#<?php echo $st_info->pin; ?></span>
	</p>	
</div>
<div class="one-fifth column e-board-fifths">
	<?php $url = get_template_directory_uri() . "/images/brothers/" . $quaestor_info->pin . ".jpg";  
		  $check_path = TEMPLATEPATH . "/images/brothers/" . $quaestor_info->pin . ".jpg"; ?>			
	<?php if(file_exists ( $check_path)){ ?>
		<div class="portrait" style="background-image: url('<?php echo $url; ?>');"></div>
	<?php } else{ ?>
		<div class="portrait missing" style="background-image: url('<?php echo $missing_url; ?>');"></div>
	<?php } ?>
	<h4>Quaestor</h4>
	<div class="border-bottom transition-left"></div>
	<p>
		<span><?php echo $quaestor_info->first_name; ?></span>
		<span><?php echo $quaestor_info->last_name; ?></span>
		<span>#<?php echo $quaestor_info->pin; ?></span>
	</p>	
</div>