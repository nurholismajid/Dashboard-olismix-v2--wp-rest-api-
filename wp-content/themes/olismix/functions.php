<?php 

function wpdocs_remove_menus(){
   
	remove_menu_page( 'index.php' );                  //Dashboard
	remove_menu_page( 'jetpack' );                    //Jetpack* 
	remove_menu_page( 'edit.php' );                   //Posts
	// remove_menu_page( 'upload.php' );                 //Media
	remove_menu_page( 'edit.php?post_type=page' );    //Pages
	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'themes.php' );                 //Appearance
	// remove_menu_page( 'plugins.php' );                //Plugins
	remove_menu_page( 'users.php' );                  //Users
	remove_menu_page( 'tools.php' );                  //Tools
	// remove_menu_page( 'options-general.php' );        //Settings
	//  remove_menu_page( 'edit.php?post_type=acf-field-group' );
  }
  add_action( 'admin_menu', 'wpdocs_remove_menus' );

  function dashboard_redirect(){
    wp_redirect(admin_url('admin.php?page=identitas-website'));
}
add_action('load-index.php','dashboard_redirect');

function my_login_page_remove_back_to_link() { ?>
    <style type="text/css">
body.login.js.login-action-login.wp-core-ui.locale-en-us {
        background-color: #111 !important;
		background-image: url("http://localhost/dashboard/wp-content/uploads/2021/09/joanna-kosinska-RE-8WswW95o-unsplash.jpg") !important;
		background-size: cover;
}

.login form {
    background-color: #0000006e !important;
    color: #fff !important;
    border: none !important;
}

.wp-core-ui .button-primary {
    background: #860707 !important;
    min-width: 120px;
    border-color: #860707#000 !important;
    color: #fff;
    text-decoration: none;
    text-shadow: none;
}
a {
    color: #860707 !important;
    transition-property: border,background,color;
    transition-duration: .05s;
    transition-timing-function: ease-in-out;
}
.login #login_error, .login .message, .login .success {
    border-left: #860707 !important;
    padding: 12px;
    margin-left: 0;
    color: #fff !important;
    margin-bottom: 20px;
    background-color: #0000005c !important;
    box-shadow: 0 1px 1px 0 rgb(0 0 0 / 10%);
}
p#nav {
    display: none;
}

p#backtoblog {
    display: none;
}

    </style>
<?php }

 //Do Not Remove This Function
add_action( 'login_enqueue_scripts', 'my_login_page_remove_back_to_link' );

function my_login_logo() { ?>
    <style type="text/css">
    #login h1 a, .login h1 a {
    background-image: url(http://localhost/dashboard/wp-content/uploads/2021/09/olismix_web.png) !important;
    height: 100px;
    width: 100%;
    background-size: 100%;
    background-repeat: no-repeat;
    padding-bottom: 30px;
    transform: scale(1.25);
}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' => 'Identitas Website',
        'menu_title' => 'Identitas Website',
        'menu_slug' => 'identitas-website',
        'capability' => 'edit_posts',
        'icon_url' => 'dashicons-id-alt', // Add this line and replace the second inverted commas with class of the icon you like
        'position' => 1
	));	
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'menu_slug' 	=> 'theme-footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	
}


?>