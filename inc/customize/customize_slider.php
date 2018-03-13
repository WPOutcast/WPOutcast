<?php

// Custom control for carousel category
 
if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Category_Control extends WP_Customize_Control {
 
        public function render_content() {
   
            $dropdown = wp_dropdown_categories( 
                array(
                    'name'              => '_customize-dropdown-category-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => __( '&mdash; Select &mdash;', 'wpoutcast' ),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),
                     
                )
            );
 
            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
  
            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
                $this->label,
                $dropdown
            );
        }
    }
}
 
// Register slider customizer section 
 
add_action( 'customize_register' , 'wpoutcast_carousel_options' );
 
function wpoutcast_carousel_options( $wp_customize ) {
 
$wp_customize->add_section(
    'carousel_section',
    array(
		'title'    => __( 'Carousel Settings', 'wpoutcast' ),
        'priority'  => 202,
        'capability'  => 'edit_theme_options',
    )
);
 
$wp_customize->add_setting(
    'carousel_setting',
     array(
    'default'   => '1',
	'sanitize_callback' => 'sanitize_text_field',
  )
);
 
$wp_customize->add_control(
    new WP_Customize_category_Control(
        $wp_customize,
        'carousel_category',
        array(
			'label'          => __( 'Category', 'wpoutcast' ),
            'settings' => 'carousel_setting',
            'section'  => 'carousel_section'
        )
    )
);
 
$wp_customize->add_setting(
    'count_setting',
     array(
    'default'   => '4',
	'sanitize_callback' => 'sanitize_text_field',
 
  )
);
 
$wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'carousel_count',
        array(
            'label'          => __( 'Number of posts', 'wpoutcast' ),
            'section'        => 'carousel_section',
            'settings'       => 'count_setting',
            'type'           => 'text',
        )
    )
);
 
}

?>