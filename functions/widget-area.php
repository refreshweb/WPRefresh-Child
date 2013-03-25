<?php

function refreshweb_child_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Child Sidebar', 'refreshweb' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'refreshweb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'refreshweb_child_widgets_init' );

?>