<?php 
	$praetorA = get_users(array(
   		'meta_key' => 'position',
   		'meta_value' => 'praetor',
   		'meta_compare' => '='
		));
	$praetor = $praetorA[0];
	$praetor_info = get_userdata($praetor->ID);

	$jtA = get_users(array(
   		'meta_key' => 'position',
   		'meta_value' => 'jt',
   		'meta_compare' => '='
		));
	$jt = $jtA[0];
	$jt_info = get_userdata($jt->ID);

	$consulA = get_users(array(
   		'meta_key' => 'position',
   		'meta_value' => 'consul',
   		'meta_compare' => '='
		));
	$consul = $consulA[0];
	$consul_info = get_userdata($consul->ID);

	$stA = get_users(array(
   		'meta_key' => 'position',
   		'meta_value' => 'st',
   		'meta_compare' => '='
		));
	$st = $stA[0];
	$st_info = get_userdata($st->ID);

	$quaestorA = get_users(array(
   		'meta_key' => 'position',
   		'meta_value' => 'quaestor',
   		'meta_compare' => '='
		));
	$quaestor = $quaestorA[0];
	$quaestor_info = get_userdata($quaestor->ID);

	$rushA = get_users(array(
   		'meta_key' => 'position',
   		'meta_value' => 'rush',
   		'meta_compare' => '='
		));
	$rush = $rushA[0];
	$rush_info = get_userdata($rush->ID);
?>