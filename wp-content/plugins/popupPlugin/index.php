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
  <img class="pBackground" src="https://i.imgur.com/lWz6D4g.png">
</div>

<div class="pMainShell">
  <!-- Text -->
  <div class="pTextAnimationShell">
    <img class="pText" src="https://i.imgur.com/cfeRSvs.png">
  </div>
  
  <!-- Facebook Icon -->
  <div class="pFacebookAnimationShell">
    <a src="https://www.facebook.com/koglebryg/">
      <img class="pFacebook" src="https://i.imgur.com/lRcdMob.png">
    </a>
  </div>
  
  <!-- Instagram Icon -->
  <div class="pInstagramAnimationShell">
    <a src="https://www.instagram.com/koglebryg/">
      <img class="pInstagram" src="https://i.imgur.com/kWZMPgP.png">
    </a>
  </div>
  
  <!-- Close button -->
  <div class="pClose">
  </div>
</div>
';

    return $content;
}

#First parameter
add_shortcode('show_popup', 'popup_form');

#Activate scripts and styles
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_stylesheets()
{
    #Load stylesheets
    wp_enqueue_style('CustomStylesheet', plugins_url('popupPlugin/css/styles.css'));
    
    #Load jquery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), "3.1.1", true);
    wp_enqueue_script('customScript', plugins_url('popupPlugin/js/scripts.js'), array('jquery'), "2.0.7", true);
}








