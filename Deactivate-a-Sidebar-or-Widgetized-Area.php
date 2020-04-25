<?php

//add to the functions.php file
//this snippet deactivates sidebar-1

function remove_some_widgets(){

	// Unregister sidebar
	unregister_sidebar( 'sidebar-1' );
	
}
add_action( 'widgets_init', 'remove_some_widgets', 11 );

?>