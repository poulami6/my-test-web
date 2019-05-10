<?php
/**
* Plugin Name: web-sign-up
* Description: This is the very first plugin I ever created.
* Version: 1.0
* Author: DAPL
**/


defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );

class web_sign_up{

    function __construct(){
       add_shortcode( 'cr_custom_registration', array( $this, 'registration_form') );
       
       function sign_up_scripts() {   
            wp_register_script('my-js', plugins_url('assets/js/script.js', __FILE__), array('jquery'),'1.1', true);
            wp_enqueue_script( 'my-js');
            //wp_register_script('my-validate-js', plugins_url('assets/js/jquery.validate.js', __FILE__), array('jquery'),'1.1', true);
           // wp_enqueue_script( 'my-validate-js');
            wp_enqueue_script('validate-js', plugins_url('assets/js/jquery.validate.js',__FILE__), array('jquery'), true);

         }/*end of sign_up_scripts*/
         add_action('wp_enqueue_scripts', 'sign_up_scripts');


         /*ajax-submission function*/
         
         add_action( 'wp_ajax_partner_submit_data', 'partner_submit_data' );
         add_action('wp_ajax_nopriv_partner_submit_data', 'partner_submit_data');

         function partner_submit_data(){
            echo "hello123";
            $business_name = $_REQUEST['business_name'];
            $first_name = $_REQUEST['first_name'];
            $last_name = $_REQUEST['last_name'];
            $displayname = $first_name.' '.$last_name;
            $apt_no = $_REQUEST['apt_no'];
            $street_name = $_REQUEST['street_name'];
            $city_name = $_REQUEST['city_name'];
            $country_name = $_REQUEST['country_name'];
            $phone_number = $_REQUEST['phone_number'];
            $user_password = $_REQUEST['user_password'];
            $email_address = $_REQUEST['email_address'];
            $user_type = $_REQUEST['user_type'];
            $created_date = date('Y-m-d H:i:s');

            global $wpdb;
        $tab1 = $wpdb->prefix.'users';
        $datum = $wpdb->get_results("SELECT * FROM $tab1 WHERE user_email = '".$email_address."'");
        if($wpdb->num_rows > 0) { 
            echo "<p style='color:red;'>Email Already Exist</p>";    
            exit;
        } 
        else 
        {        
            //$user_id = wp_create_user( $email_address, $user_password, $email_address );
            $partnerdata = array(
                'user_login'  =>  $email_address,
                'user_pass' =>   $user_password,
                'display_name'=> $displayname ,
                'user_nicename'=> $displayname,
                'user_email'=>  $email_address,
                'role' => $user_type
            );            
            $user_id = wp_insert_user( $partnerdata ) ;
            $user = new WP_User($user_id);
            $auser = get_user_by( 'ID', $user_id );
            $auser->set_role( '' );
            $auser->add_role( $user_type );

            echo '<p style="color:green;">Registration successful! Click <a style="color:#922B5F" href='.home_url('sign-in').'>here</a> to continue</p>';


        }


         }
          /*partner_submit_data*/
         /*ajax-submission function*/

         
        

    }/*end of construct*/

    function registration_form() {
        include( plugin_dir_path( __FILE__ ).'includes/sign-up.php' );  
        //echo plugin_dir_path( __FILE__ ).'includes/sign-up.php';         
    }

   
}/*end of class*/

new web_sign_up;
    

    