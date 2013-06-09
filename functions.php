<?php
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 350, 600 );
	add_image_size( 'single-thumb', 800, 9999 ); //300 pixels wide (and unlimited height)
}
if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menu( 'top_navigation', 'Main navigation' );
}
add_editor_style('editor-style.css');

?>
<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-06.jpg', 'bg-07.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>