<?php
/*
 * PhpWord Document Generator
 */

require_once 'PHPWord.php';

// define the wpcf7_before_send_mail callback
function action_wpcf7_before_send_mail( $contact_form ) { 
	$id = $contact_form->id();
	
	require 'tmpl_auto.php';
	require 'tmpl_avia.php';
	require 'tmpl_cargo-modular.php';
	require 'tmpl_containers.php';
};

// add the action 
add_action( 'wpcf7_before_send_mail', 'action_wpcf7_before_send_mail', 10, 1 );
