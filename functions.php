<?php
function custom_feed_link($output, $feed)
{
	$feed_url = 'http://feeds.feedburner.com/thinkclay';
 
	$feed_array = array(
		'rss' => $feed_url,
		'rss2' => $feed_url,
		'atom' => $feed_url,
		'rdf' => $feed_url,
		'comments_rss2' => ''
	);
	$feed_array[$feed] = $feed_url;
	$output = $feed_array[$feed];
 
	return $output;
}
add_filter('feed_link','custom_feed_link', 1, 2);


add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
set_post_thumbnail_size( 300, 200, true );
remove_action('wp_head', 'wp_generator');


	register_sidebar(array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));
    
	// Area 3, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'First Footer Widget Area', 'twentyten' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The first footer widget area', 'twentyten' ),
		'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
	) );

	// Area 4, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Second Footer Widget Area', 'twentyten' ),
		'id' => 'second-footer-widget-area',
		'description' => __( 'The second footer widget area', 'twentyten' ),
		'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
	) );

	// Area 5, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Third Footer Widget Area', 'twentyten' ),
		'id' => 'third-footer-widget-area',
		'description' => __( 'The third footer widget area', 'twentyten' ),
		'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
	) );
	
	
$themename = "ThinkClay";
$shortname = "ThinkClay";

//create options page
function thinkclay() {
   if (function_exists('add_theme_page')) {
		add_theme_page('', 'Theme Settings', 8, basename(__FILE__), 'thinkclayPage');
    }
}

function thinkclayPage() {
  if (isset($_POST['info_update'])) { ?>
		<div id="message" class="updated fade">
		<p><strong>
<?php
	if($_POST['style_switch']){
		update_option('style_switch', $_POST['style_switch']);
	}else{
		update_option('style_switch', 'style');
	}
	if($_POST['v_flickr']){
       update_option('v_flickr', $_POST['v_flickr']);
    }else{
       update_option('v_flickr', '');
    }
    if($_POST['v_facebook']){
       update_option('v_facebook', $_POST['v_facebook']);
    }else{
       update_option('v_facebook', '');
    }
    if($_POST['v_twitter']){
       update_option('v_twitter', $_POST['v_twitter']);
    }else{
       update_option('v_twitter', '');
    }
    if($_POST['v_friendfeed']){
       update_option('v_friendfeed', $_POST['v_friendfeed']);
    }else{
       update_option('v_friendfeed', '');
    }
    if($_POST['v_friendster']){
       update_option('v_friendster', $_POST['v_friendster']);
    }else{
       update_option('v_friendster', '');
    }
   	if($_POST['v_lastfm']){
       update_option('v_lastfm', $_POST['v_lastfm']);
    }else{
       update_option('v_lastfm', '');
    }
    if($_POST['v_linkedin_first']){
       update_option('v_linkedin_first', $_POST['v_linkedin_first']);
    }else{
       update_option('v_linkedin_first', '');
    }
    if($_POST['v_linkedin_last']){
       update_option('v_linkedin_last', $_POST['v_linkedin_last']);
    }else{
       update_option('v_linkedin_last', '');
    }
    if($_POST['v_livejournal']){
       update_option('v_livejournal', $_POST['v_livejournal']);
    }else{
       update_option('v_livejournal', '');
    }
    if($_POST['v_mixx']){
       update_option('v_mixx', $_POST['v_mixx']);
    }else{
       update_option('v_mixx', '');
    }
    
    
    if($_POST['contact_email']){
       update_option('contact_email', $_POST['contact_email']);
    }else{
       update_option('contact_email', '');
    }
    if($_POST['contact_subject']){
       update_option('contact_subject', $_POST['contact_subject']);
    }else{
       update_option('contact_subject', '');
    }
    if($_POST['contact_success']){
       update_option('contact_success', $_POST['contact_success']);
    }else{
       update_option('contact_success', '');
    }	
?>
			OPTIONS UPDATED
        </strong></p>
        </div>
<?php } ?>

  	<div class="wrap">
	<form method="post">
	<h2>Social Media Links</h2>
	<table class="form-table" style="margin:0; width:auto">
	<tr>
		<td><label for="v_flickr"><h3>Flickr:</h3></label></td>
		<td><input type="text" name="v_flickr" id="v_flickr" maxlength="60" size="25" value="<?php echo get_option('v_flickr'); ?>" /></td>
		<td>Enter your <strong>Flickr Username</strong>.</td>
	</tr>
	<tr>
		<td><label for="v_facebook"><h3>Facebook:</h3></label></td>
		<td><input type="text" name="v_facebook" id="v_facebook" maxlength="60" size="25" value="<?php echo get_option('v_facebook'); ?>" /></td>
		<td>Enter your <strong>Facebook Public Address</strong>. You can find this by searching on google for your name plus facebook and copy the full address into the input box. <em>Example: http://www.facebook.com/people/Clay-McIlrath/40006440</em></em></td>
	</tr>
	<tr>
		<td><label for="v_twitter"><h3>Twitter:</h3></label></td>
		<td><input type="text" name="v_twitter" id="v_twitter" maxlength="60" size="25" value="<?php echo get_option('v_twitter'); ?>" /></td>
		<td>Enter your <strong>Twitter Username</strong></td>
	</tr>
	<tr>
		<td><label for="v_friendfeed"><h3>Friendfeed:</h3></label></td>
		<td><input type="text" name="v_friendfeed" id="v_friendfeed" maxlength="60" size="25" value="<?php echo get_option('v_friendfeed'); ?>" /></td>
		<td>Enter your <strong>Friendfeed Username</strong></td>
	</tr>
	<tr>
		<td><label for="v_friendster"><h3>Friendster:</h3></label></td>
		<td><input type="text" name="v_friendster" id="v_friendster" maxlength="60" size="25" value="<?php echo get_option('v_friendster'); ?>" /></td>
		<td>Enter your <strong>Friendster ID</strong>. You can find this by viewing your profile and copying the number at the end of the url. <em>Example: http://profiles.friendster.com/<strong>80786101</strong></em></td>
	</tr>
	<tr>
		<td><label for="v_lastfm"><h3>Last.fm:</h3></label></td>
		<td><input type="text" name="v_lastfm" id="v_lastfm" maxlength="60" size="25" value="<?php echo get_option('v_lastfm'); ?>" /></td>
		<td>Enter your <strong>Last.fm Username</strong></td>
	</tr>
	<tr>
		<td><h3>LinkedIn:</h3></td>
		<td>
			<label for="v_linkedin_first">First Name:</label><br />
			<input type="text" name="v_linkedin_first" id="v_linkedin_first" maxlength="60" size="25" value="<?php echo get_option('v_linkedin_first'); ?>" />
		</td>
		<td>
			<label for="v_linkedin_last">Last Name:</label><br />
			<input type="text" name="v_linkedin_last" id="v_linkedin_last" maxlength="60" size="25" value="<?php echo get_option('v_linkedin_last'); ?>" />
		</td>
	</tr>
	<tr>
		<td><label for="v_livejournal"><h3>Live&nbsp;Journal:</h3></label></td>
		<td><input type="text" name="v_livejournal" id="v_livejournal" maxlength="60" size="25" value="<?php echo get_option('v_livejournal'); ?>" /></td>
		<td>Enter your <strong>Live Journal Username</strong></td>
	</tr>
	<tr>
		<td><label for="v_mixx"><h3>Mixx:</h3></label></td>
		<td><input type="text" name="v_mixx" id="v_mixx" maxlength="60" size="25" value="<?php echo get_option('v_mixx'); ?>" /></td>
		<td>Enter your <strong>Mixx Username</strong></td>
	</tr>
	</table>

     <div class="submit"><input type="submit" name="info_update" value="<?php _e('Update Options', 'English'); ?> &raquo;" /></div>
</form>
</div>

<?php   
}

//set initial defaults for feeds
add_option('v_flickr', '');
add_option('v_facebook', '');
add_option('v_twitter', '');
add_option('v_friendfeed', '');
add_option('v_friendster', '');
add_option('v_lastfm', '');
add_option('v_linkedin_first', '');
add_option('v_linkedin_last', '');
add_option('v_livejournal', '');
add_option('v_mixx', '');

add_option('contact_email', '');
add_option('contact_subject', '');
add_option('contact_success', '');

//add menu
add_action('admin_menu', 'thinkclay');
?>
