<?php

    function ud_customize_register($wp_customize){
        ud_social_customize($wp_customize);
        ud_misc_setting($wp_customize);
    }