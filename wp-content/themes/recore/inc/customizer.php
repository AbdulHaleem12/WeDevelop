<?php
/**
 * Recore Theme Customizer
 *
 * @package Recore
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function recore_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'recore_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'recore_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'recore_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function recore_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function recore_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function recore_customize_preview_js() {
	wp_enqueue_script( 'recore-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'recore_customize_preview_js' );

/***
    *** Register Customizer Add Panel Function 
***/
function recore_Customizer_Add_Panel_Function( $wp_customize ) {

	// Create Custom Aanel for Home Page.
	$wp_customize->add_panel( 'recore_Panel_Function', array(
		'theme_supports' => '',
		'title'          => __( ' Recore Theme Options ', 'recore' ),
		'priority' => 1,
	) ); 
}
add_action( 'customize_register', 'recore_Customizer_Add_Panel_Function' );
/***
    *** Register Customizer Add Panel Function
***/

/***
    *** Register Customizer Home Banner Section 
***/
class recore_Banner_Customizer {

	public static function recore__Banner_Section( $wp_customize ) {

		// Add Home Banner Section Add Section for home page.
		$wp_customize->add_section( 'recore_For_Home_Page_Banner_Section' , array(
			'title'    => __(' Home Banner Section ','recore'),
			'panel'    => 'recore_Panel_Function',
			'priority' => 1,
		) );

		//  ============================================================
	    //       Home Page Banner Section Image Upload         
	    //  ============================================================
	    $wp_customize->add_setting( 'recore_Banner_Section_Image_Upload', array( 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
	    )); 
	        	   
	    $wp_customize->add_control( new WP_Customize_Image_Control( 
	    	$wp_customize, 'recore_Home_Banner_Section_Image_Upload_Id', array(
	        'label'    => ' Banner Image ',
	        'priority' => 1,
	        'section'  => 'recore_For_Home_Page_Banner_Section',
	        'settings' => 'recore_Banner_Section_Image_Upload',
	        'button_labels' => array(
	                    // All These labels are optional
	                    'select' => __( 'Select Image', 'recore' ),
	                    'remove' => __( 'Remove Image', 'recore' ),
	                    'change' => __( 'Change Image', 'recore' )
	                    )
	    )));

		//  ============================================================
	    //       Home Page Banner Section Section Title        
	    //  ============================================================
		$wp_customize->add_setting( 'recore_Banner_Section_Title_Name', array(
			'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			
		) );

		// Add Banner Title Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'recore_Home_Banner_Section_ID',
			    array(
			        'label'    => __( ' Banner Title ', 'recore' ),
			        'section'  => 'recore_For_Home_Page_Banner_Section',
			        'settings' => 'recore_Banner_Section_Title_Name',
			        'type'     => 'text',
			        'priority' => 2,
			    )
		    )
		);

		//  ============================================================
	    //       Home Page Banner Section Content        
	    //  ============================================================
		$wp_customize->add_setting( 'recore_Banner_Section_Content_Textarea', array(
			'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			
		) );

		// Add Banner Content Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'recore_Banner_Section_Main_Content',
			    array(
			        'label'    => __( ' Banner Content ', 'recore' ),
			        'section'  => 'recore_For_Home_Page_Banner_Section',
			        'settings' => 'recore_Banner_Section_Content_Textarea',
			        'type'     => 'textarea',
			        'priority' => 3,
			    )
		    )
		);

		//  ============================================================
	    //       Home Page Banner Section Button Text         
	    //  ============================================================
		$wp_customize->add_setting( 'recore_Banner_Section_Button_Text', array(
			 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			 
		) );

		// Button Text Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'recore_Home_Banner_Section_Button_Text',
			    array(
			        'label'    => __( ' Button Text ', 'recore' ),
			        'section'  => 'recore_For_Home_Page_Banner_Section',
			        'settings' => 'recore_Banner_Section_Button_Text',
			        'type'     => 'text',
			        'priority' => 4,
			    )
		    )
		);

		//  ============================================================
	    //       Home Page Banner Section Button Url Path          
	    //  ============================================================
		$wp_customize->add_setting( 'recore_Banner_Btn_URl_Path', array(
			 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			 
		) );

		// Add Button Url Path Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'recore_Custom_Button_URl_Path',
			    array(
			        'label'    => __( ' Button Url ', 'recore' ),
			        'section'  => 'recore_For_Home_Page_Banner_Section',
			        'settings' => 'recore_Banner_Btn_URl_Path',
			        'type'     => 'text',
			        'priority' => 5,
			    )
		    )
		);

	    // Sanitize Text Function For Home Banner
		function Home_Banner_Section_Sanitize_Text_Function( $text ) {
		    return sanitize_text_field( $text );
		}
	}
}
add_action( 'customize_register', array('recore_Banner_Customizer', 'recore__Banner_Section') );
/***
    *** Register Customizer Home Banner Section 
***/


/***
    *** Register Customizer Blog Section 
***/
class recore_Blog_Customizer {

	public static function recore_Blog_section( $wp_customize ) {

		// Add Blog Section
		$wp_customize->add_section( 'recore__for_Blog_section' , array(
			'title'    => __(' Blog Section ','recore'),
			'panel' => 'recore_Panel_Function',
		) );

		/*******************************************************************************
		                    Blog Section Title Text Code 
		********************************************************************************/
		$wp_customize->add_setting( 'recore_Blog_Section_Title', array(
	       'sanitize_callback' => 'recore_Blog_Section_Page_Sanitize_Text',
		) );

		// Add Blog Section Title Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'recore_Blog_Section_ID',
			    array(
			        'label'    => __( ' Blog Section Title ', 'recore' ),
			        'section'  => 'recore__for_Blog_section',
			        'settings' => 'recore_Blog_Section_Title',
			        'type'     => 'text',
			        'priority' => 1,
			    )
		    )
		);

		/*******************************************************************************
		                    Blog Section Title Description Code 
		********************************************************************************/
		$wp_customize->add_setting( 'recore_Blog_Section_Description', array(
	       'sanitize_callback' => 'recore_Blog_Section_Page_Sanitize_Text',
		) );

		// Add Blog Section Description Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'recore_Blog_Section_Description_Id',
			    array(
			        'label'    => __( ' Blog Section Description ', 'recore' ),
			        'section'  => 'recore__for_Blog_section',
			        'settings' => 'recore_Blog_Section_Description',
			        'type'     => 'textarea',
			        'priority' => 2,
			    )
		    )
		);

	    // Sanitize Text Function For Home Blog  Section
		function recore_Blog_Section_Page_Sanitize_Text( $text ) {
		    return sanitize_text_field( $text );
		}	
	}
}
add_action( 'customize_register', array('recore_Blog_Customizer', 'recore_Blog_section') );
/***
    *** Register Customizer Blog Section 
***/

/***
    *** Register Customizer 404 Page Section Code start Here
***/
class recore_error_Page_Section_Customizer {

	public static function recore_Customizer_For_error_Page_Section( $wp_customize ) {

		// Add 404 Page Section
		$wp_customize->add_section( 'recore_Theme_Section_For_error_Page_Section' , array(
			'title'    => __(' 404 Page Section ','recore'),
			'panel' => 'recore_Panel_Function',
		) );
		

		/*******************************************************************************
		                    404 Page Section For Button Label In 404 Page
		********************************************************************************/
		$wp_customize->add_setting( 'recore_Setting_For_error_Page_Section_Button_Label', array(
	       'sanitize_callback' => 'recore_error_Page_Section_Page_Sanitize_Text',
		) );

		// Add 404 Page Section Button Label Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'recore_Theme_error_Page_Section',
			    array(
			        'label'    => __( ' Button Label For 404 Page ', 'recore' ),
			        'section'  => 'recore_Theme_Section_For_error_Page_Section',
			        'settings' => 'recore_Setting_For_error_Page_Section_Button_Label',
			        'type'     => 'text',
			        'priority' => 1,
			    )
		    )
		);


		//  ============================================================
	    //       Home Page error Section Image Upload         
	    //  ============================================================
	    $wp_customize->add_setting( 'recore_error_Section_Image_Upload', array( 'sanitize_callback' => 'recore_error_Page_Section_Page_Sanitize_Text',
	    )); 
	        	   
	    $wp_customize->add_control( new WP_Customize_Image_Control( 
	    	$wp_customize, 'recore_Home_error_Section_Image_Upload_Id', array(
	        'label'    => ' Error Image ',
	        'priority' => 1,
	        'section'  => 'recore_Theme_Section_For_error_Page_Section',
	        'settings' => 'recore_error_Section_Image_Upload',
	        'button_labels' => array(
	                    // All These labels are optional
	                    'select' => __( 'Select Image', 'recore' ),
	                    'remove' => __( 'Remove Image', 'recore' ),
	                    'change' => __( 'Change Image', 'recore' )
	                    )
	    )));

		/**
		 * Text sanitization callback
		*/
		function recore_error_Page_Section_Page_Sanitize_Text( $text ) {
		    return sanitize_text_field( $text );
		}	

	}
}
add_action( 'customize_register', array('recore_error_Page_Section_Customizer', 'recore_Customizer_For_error_Page_Section') );
/***
    *** Register Customizer 404 Page Section 
***/