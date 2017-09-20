<?php
/*
Plugin Name:       SCP Bookings
Plugin URI:        https://github.com/knoppys/deleteComments.git
Description:       
Version:           1
Author:            Knoppys Digital Limited
License:           GNU General Public License v2
License URI:       http://www.gnu.org/licenses/gpl-2.0.html
GitHub Plugin URI: https://github.com/knoppys/deleteComments.git
GitHub Branch:     master
*/


//Add the function into the WP Head
add_action('wp_head', 'delete_reviews');

//Here is the callback
function delete_reviews() {

	//If the query on the end of the URL is deletereviews and the parameter is go.
    if ($_GET['deletereviews'] == 'go') {

    	//Add your list of Post ID's here
    	$post_ids = array(1,2,3,4,5,6,7,8,9);

    	//Get the comments ready for deletion
    	$comments = get_comments( $args );

    	//loop through delete each comment
    	foreach ($comments as $comment ) {
    		
    		wp_delete_comment( $comment->ID, true);

    	}

    }
}
