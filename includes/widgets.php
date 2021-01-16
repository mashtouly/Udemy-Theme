<?php

function ud_widgets(){
    register_sidebar(array(
        'name'          => __( 'Sidebar name', 'udemy' ),
        'id'            => 'ud_widget',    
        'description'   =>  __( 'My First Widget', 'udemy' ),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>' ));
}