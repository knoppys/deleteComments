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
/*
How to use this plugin

1. Install it like any other plugin, you may need to download the file and zip it into a folder with the same name as the file (knoppys-delete-comments.zip)
2. Once activated, edit the plugin file and add your own post ID's to list below.
3. Go to your website homepage, add ?deletereviews=go onto the end of your URL and click go. This will run the function below. 
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
