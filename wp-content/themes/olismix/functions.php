<?php 

function wpdocs_remove_menus(){
   
	remove_menu_page( 'index.php' );                  //Dashboard
	remove_menu_page( 'jetpack' );                    //Jetpack* 
	remove_menu_page( 'edit.php' );                   //Posts
	// remove_menu_page( 'upload.php' );                 //Media
	remove_menu_page( 'edit.php?post_type=page' );    //Pages
	remove_menu_page( 'edit-comments.php' );          //Comments
	remove_menu_page( 'themes.php' );                 //Appearance
	//  remove_menu_page( 'plugins.php' );                //Plugins
	remove_menu_page( 'users.php' );                  //Users
	remove_menu_page( 'tools.php' );                  //Tools
    remove_menu_page( 'options-general.php' );        //Settings
	remove_menu_page( 'edit.php?post_type=acf-field-group' );
  }
  add_action( 'admin_menu', 'wpdocs_remove_menus' );

  function dashboard_redirect(){
    wp_redirect(admin_url('admin.php?page=beranda-website'));
}
add_action('load-index.php','dashboard_redirect');

function my_login_page_remove_back_to_link() { ?>
    <style type="text/css">
body.login.js.login-action-login.wp-core-ui.locale-en-us {
        background-color: #111 !important;
		background-image: url("https://api.olismix.com/wp-content/uploads/2021/09/joanna-kosinska-RE-8WswW95o-unsplash.jpg") !important;
		background-size: cover;
}

.login form {
    background-color: #00000000 !important;
    color: #fff !important;
    border: none !important;
    box-shadow: unset !important;
}

form#loginform > p, form#loginform > .user-pass-wrap {
    background: #0000005e;
    margin-bottom: 20px;
    padding: 10px 30px;
    margin-top: 20px;
    border-radius: 35px;
}

.login .button.wp-hide-pw {
    border-color: unset !important;
    box-shadow: unset;
    outline: 2px solid transparent;
    color: #860707 !important;
}

p.forgetmenot {
    display: none;
}

p.submit {
    width: 100%;
}

p.submit input {
    width: 100%;
    padding: 10px 30px !important;
    font-size: 20px !important;
    font-weight: 900;
    border-radius: 32px !important;
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

div#login_error {
    width: 228px;
    margin: auto !important;
    padding: 20px !important;
    border-radius: 16px;
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
    background-image: url(https://api.olismix.com/wp-content/uploads/2021/09/olismix_web.png) !important;
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
        'position' => 2
	));	
	
	acf_add_options_page(array(
		'page_title' => 'Beranda Website',
        'menu_title' => 'Beranda Website',
        'menu_slug' => 'beranda-website',
        'capability' => 'edit_posts',
        'icon_url' => 'dashicons-admin-home', // Add this line and replace the second inverted commas with class of the icon you like
        'position' => 1
	));

    acf_add_options_page(array(
		'page_title' => 'Profile',
        'menu_title' => 'Profile',
        'menu_slug' => 'my-bio',
        'capability' => 'edit_posts',
        'icon_url' => 'dashicons-id', // Add this line and replace the second inverted commas with class of the icon you like
        'position' => 3
	));

	
}

function wpdocs_codex_bidang_init() {
    $labels = array(
        'name'                  => _x( 'Bidang & Keahlian', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Bidang & Keahlian', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Bidang & Keahlian', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Bidang & Keahlian', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Tambah baru', 'textdomain' ),
        'add_new_item'          => __( 'Tambah baru Bidang & Keahlian', 'textdomain' ),
        'new_item'              => __( 'Bidang & Keahlian baru', 'textdomain' ),
        'edit_item'             => __( 'Ubah Bidang & Keahlian', 'textdomain' ),
        'view_item'             => __( 'Lihat Bidang & Keahlian', 'textdomain' ),
        'all_items'             => __( 'Semua Bidang & Keahlian', 'textdomain' ),
        'search_items'          => __( 'Pencarian Bidang & Keahlian', 'textdomain' ),
        'parent_item_colon'     => __( 'Master Bidang & Keahlian:', 'textdomain' ),
        'not_found'             => __( 'Bidang & Keahlian tidak tersedia.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Bidang & Keahlian tidak tersedia di keranjang sampah.', 'textdomain' ),
        'featured_image'        => _x( 'Sampul Bidang & Keahlian', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Sampul Foto', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Hapus Sampul foto', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Gunakan Sampul Foto', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Berkas Bidang & Keahlian', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Masukan Bidang & Keahlian', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Bidang & Keahlian Terupload disini', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Bidang & Keahlian list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Daftar Navigasi Bidang & Keahlian', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Daftar Bidang & Keahlian', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-hammer',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'bidang-keahlian' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 4,
        'supports'           => array( 'title' ),
    );
 
    register_post_type( 'bidang-keahlian', $args );
}
 
add_action( 'init', 'wpdocs_codex_bidang_init' );


function wpdocs_codex_project_init() {
    $labels = array(
        'name'                  => _x( 'Projek', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Projek', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Projek', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Projek', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Tambah baru', 'textdomain' ),
        'add_new_item'          => __( 'Tambah baru Projek', 'textdomain' ),
        'new_item'              => __( 'Projek baru', 'textdomain' ),
        'edit_item'             => __( 'Ubah Projek', 'textdomain' ),
        'view_item'             => __( 'Lihat Projek', 'textdomain' ),
        'all_items'             => __( 'Semua Projek', 'textdomain' ),
        'search_items'          => __( 'Pencarian Projek', 'textdomain' ),
        'parent_item_colon'     => __( 'Master Projek:', 'textdomain' ),
        'not_found'             => __( 'Projek tidak tersedia.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Projek tidak tersedia di keranjang sampah.', 'textdomain' ),
        'featured_image'        => _x( 'Sampul Projek', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Sampul Foto', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Hapus Sampul foto', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Gunakan Sampul Foto', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Berkas Projek', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Masukan Projek', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Projek Terupload disini', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Projek list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Daftar Navigasi Projek', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Daftar Projek', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-schedule',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projek' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title' ),
    );
 
    register_post_type( 'projek', $args );
}
 
add_action( 'init', 'wpdocs_codex_project_init' );


function wpdocs_codex_youtube_init() {
    $labels = array(
        'name'                  => _x( 'Youtube', 'Post type general name', 'textdomain' ),
        'singular_name'         => _x( 'Youtube', 'Post type singular name', 'textdomain' ),
        'menu_name'             => _x( 'Youtube', 'Admin Menu text', 'textdomain' ),
        'name_admin_bar'        => _x( 'Youtube', 'Add New on Toolbar', 'textdomain' ),
        'add_new'               => __( 'Tambah baru', 'textdomain' ),
        'add_new_item'          => __( 'Tambah baru Youtube', 'textdomain' ),
        'new_item'              => __( 'Youtube baru', 'textdomain' ),
        'edit_item'             => __( 'Ubah Youtube', 'textdomain' ),
        'view_item'             => __( 'Lihat Youtube', 'textdomain' ),
        'all_items'             => __( 'Semua Youtube', 'textdomain' ),
        'search_items'          => __( 'Pencarian Youtube', 'textdomain' ),
        'parent_item_colon'     => __( 'Master Youtube:', 'textdomain' ),
        'not_found'             => __( 'Youtube tidak tersedia.', 'textdomain' ),
        'not_found_in_trash'    => __( 'Youtube tidak tersedia di keranjang sampah.', 'textdomain' ),
        'featured_image'        => _x( 'Sampul Youtube', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'set_featured_image'    => _x( 'Set Sampul Foto', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'remove_featured_image' => _x( 'Hapus Sampul foto', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'use_featured_image'    => _x( 'Gunakan Sampul Foto', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
        'archives'              => _x( 'Berkas Youtube', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
        'insert_into_item'      => _x( 'Masukan Youtube', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
        'uploaded_to_this_item' => _x( 'Youtube Terupload disini', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
        'filter_items_list'     => _x( 'Filter Youtube list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
        'items_list_navigation' => _x( 'Daftar Navigasi Youtube', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
        'items_list'            => _x( 'Daftar Youtube', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'menu_icon'          => 'dashicons-video-alt3',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projek' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'supports'           => array( 'title' ),
    );
 
    register_post_type( 'youtube', $args );
}
 
add_action( 'init', 'wpdocs_codex_youtube_init' );


add_action('admin_head', 'my_custom_style');
function my_custom_style() {
  echo '<style>
    
  #adminmenu, #adminmenuback, #adminmenuwrap {
    background: #000000;
}

#adminmenu li.current a.menu-top {
    color: #fff;
    background: #860707;
}

#adminmenu li.wp-not-current-submenu:hover a.menu-top {
    color: #fff;
    background: #860707;
}

#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu {
    background: #860707;
}

li#wp-admin-bar-updates {
    display: none;
}

li#wp-admin-bar-comments {
    display: none;
}

li#wp-admin-bar-new-content {
    display: none;
}

#wpadminbar {
    color: #fff;
    background: #860707;
}

div#screen-meta-links {
    display: none;
}

#adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top {
    color: #fff;
    background: #860707;
}

.wp-core-ui .button-primary {
    background: #860707;
    border-color: #860707;
    color: #fff;
}

p#footer-left {
    display: none;
}

p#footer-upgrade {
    display: none;
}

  </style>';
}
function wpb_custom_logo() {
    echo '
    <style type="text/css">
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
    background-image: url(http://api.olismix.com/wp-content/uploads/2021/10/favicon.png) !important;
    background-position: 0 0;
    color:rgba(0, 0, 0, 0);
    width: 100%;
    height: 100%;
    background-size: 100%;
    }
    #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
    background-position: 0 0;
    }
    </style>
    ';
    }
     
    //hook into the administrative header output
    add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

    function favicon4admin() {
        echo '<link rel="Shortcut Icon" type="image/x-icon" href="http://api.olismix.com/wp-content/uploads/2021/10/favicon.png" />';
        }
        add_action( 'admin_head', 'favicon4admin' );
    
    
?>