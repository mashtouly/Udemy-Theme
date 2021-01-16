<?php

    function ud_misc_setting($wp_customize){

        $wp_customize->add_section('ud_misc_setting',array(
            'title'     => __('Udemy Misc Settings','udemy'),
            'priority'  => 30
        ));


        $wp_customize->add_setting('ud_top_search',array('default' => 'yes'));
        $wp_customize->add_setting('ud_cart',array('default' => 'yes'));
        $wp_customize->add_setting('ud_copyright',array('default' => 'Copyrights © 2019 All Rights Reserved by Mashtouly.
        '));
        $wp_customize->add_setting('ud_term',array('default' => 0));
        $wp_customize->add_setting('ud_privacy',array('default' => 0));

        $wp_customize->add_setting( 'ud_show_header_popular_posts_widget', array(
            'default'                   =>  false
        ));
    
        $wp_customize->add_setting( 'ud_popular_posts_widget_title', array(
            'default'                   =>  'Breaking News'
        ));
        
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_top_search_input',
                array(
                    'label'          => __( 'Show Top Search', 'udemy' ),
                    'section'        => 'ud_misc_setting',
                    'settings'       => 'ud_top_search',
                    'type'           => 'checkbox',
                    'choices'        => array(
                        'yes'           => __('Yes' , 'udemy')
                    )
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_cart_input',
                array(
                    'label'          => __( 'Show Cart', 'udemy' ),
                    'section'        => 'ud_misc_setting',
                    'settings'       => 'ud_cart',
                    'type'           => 'checkbox',
                    'choices'        => array(
                        'yes'           => __('Yes' , 'udemy')
                    )
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_copyright',
                array(
                    'label'          => __( 'Copyrights', 'udemy' ),
                    'section'        => 'ud_misc_setting',
                    'settings'       => 'ud_copyright'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_term',
                array(
                    'label'          => __( 'Term Page', 'udemy' ),
                    'section'        => 'ud_misc_setting',
                    'settings'       => 'ud_term',
                    'type'           => 'dropdown-pages'
                )
            )
        );
       
        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_privacy',
                array(
                    'label'          => __( 'Privacy Page', 'udemy' ),
                    'section'        => 'ud_misc_setting',
                    'settings'       => 'ud_privacy',
                    'type'           => 'dropdown-pages'
                )
            )
        );

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'ud_show_header_popular_posts_widget_input',
            array(
                'label'                 =>  __( 'Show Popular Posts', 'udemy' ),
                'section'               => 'ud_misc_setting',
                'settings'              => 'ud_show_header_popular_posts_widget',
                'type'                  =>  'checkbox',
                'choices'               =>  array(
                    'yes'               =>  __( 'Yes', 'udemy' )
                )
            )
        ));
    
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'ud_popular_posts_widget_title_input',
            array(
                'label'                 =>  __( 'Popular Posts Title', 'udemy' ),
                'section'               => 'ud_misc_setting',
                'settings'              => 'ud_popular_posts_widget_title'
            )
        ));

    }