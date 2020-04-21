<?php
/*
* Plugin Name: Popup
* Plugin URI: http://www.designosaurus.dk/
* Description: Laver en popup
* Version: 2.0.7
* Author: Oliver Bates, Sofie Honar, Rigmor Dahl-Jensen
* Author: http://www.designosaurus.dk/
* License: GPL2
*/

function popup_form()
{
    $content = '';
    $content .= '
<!-- Background -->
<div class="pFadeBack"></div>
<div class="pMainShell">
  <img class="pBackground" src="http://designosaurus.dk/kogle/wp-content/plugins/popupPlugin/img/ppBackground.png">
</div>

<div class="pMainShell">
  <!-- Text -->
  <div class="pTextAnimationShell">
    <img class="pText" src="http://designosaurus.dk/kogle/wp-content/plugins/popupPlugin/img/ppText.png">
  </div>
  
  <!-- Facebook Icon -->
  <div class="pFacebookAnimationShell">
    <a src="https://www.facebook.com/koglebryg/">
      <img class="pFacebook" src="http://designosaurus.dk/kogle/wp-content/plugins/popupPlugin/img/ppFacebook.png">
    </a>
  </div>
  
  <!-- Instagram Icon -->
  <div class="pInstagramAnimationShell">
    <a src="https://www.instagram.com/koglebryg/">
      <img class="pInstagram" src="http://designosaurus.dk/kogle/wp-content/plugins/popupPlugin/img/ppInsta.png">
    </a>
  </div>
  
  <!-- Close button -->
  <div class="pClose">
  </div>
</div>
';

    return $content;
}

#Shortcode
add_shortcode('show_popup', 'popup_form');

#Activate scripts and styles
add_action('wp_enqueue_scripts', 'load_css_and_js');

function load_css_and_js()
{
    #Load stylesheets
    wp_enqueue_style('CustomStylesheet', plugins_url('popupPlugin/css/styles.css'));
    
    #Load jquery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), "3.1.1", true);
    wp_enqueue_script('customScript', plugins_url('popupPlugin/js/scripts.js'), array('jquery'), "2.0.7", true);
}








