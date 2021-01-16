<?php

    function ud_social_customize($wp_customize){
        $wp_customize->add_setting('ud_facebook_handle',array('default' => ''));
        $wp_customize->add_setting('ud_twitter_handle',array('default' => ''));
        $wp_customize->add_setting('ud_instegram_handle',array('default' => ''));
        $wp_customize->add_setting('ud_phone_handle',array('default' => ''));
        $wp_customize->add_setting('ud_mail_handle',array('default' => ''));

        $wp_customize->add_section('ud_social_section',array(
            'title'     => __('Udemy Socail Section','udemy'),
            'priority'  => 30
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_social_facebook_input',
                array(
                    'label'          => __( 'Facebook Link', 'udemy' ),
                    'section'        => 'ud_social_section',
                    'settings'       => 'ud_facebook_handle'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_social_twitter_input',
                array(
                    'label'          => __( 'Twitter Link', 'udemy' ),
                    'section'        => 'ud_social_section',
                    'settings'       => 'ud_twitter_handle'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_social_instegram_input',
                array(
                    'label'          => __( 'Instegram Link', 'udemy' ),
                    'section'        => 'ud_social_section',
                    'settings'       => 'ud_instegram_handle'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_social_phone_input',
                array(
                    'label'          => __( 'Phone Number', 'udemy' ),
                    'section'        => 'ud_social_section',
                    'settings'       => 'ud_phone_handle'
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'ud_social_mail_input',
                array(
                    'label'          => __( 'Mail Link', 'udemy' ),
                    'section'        => 'ud_social_section',
                    'settings'       => 'ud_mail_handle'
                )
            )
        );

    }