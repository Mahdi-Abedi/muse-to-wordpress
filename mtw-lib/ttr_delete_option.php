<?php
$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require_once( $parse_uri[0] . 'wp-load.php' );

if(is_user_logged_in() && current_user_can("administrator")){

	delete_option("muse_linker_replace_".strtolower($_POST['project']));

	header("Location: ".$_SERVER['HTTP_REFERER']);
	exit();
}
else
echo 'Nice try, this page is protected';
?>