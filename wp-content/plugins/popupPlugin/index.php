<?php
/*
* Plugin Name: Popup
* Plugin URI: http://www.designosaurus.dk/
* Description: Laver en popup
* Version: 1.0.0
* Author: Oliver Bates, Sofie Honar, Rigmor Dahl-Jensen
* Author: http://www.designosaurus.dk/
* License: GPL2
*/

function popup_form()
{
    $content = '';
    $content .= '
<!-- Newsletter Popup -->
<div class="shellBox">
  
  <!-- left box -->
  <div class="leftBox">
    <p class="popupClose">X</p>
    <h2>INTERRESANTE IAGTAGELSER</h2>
    <p>Ja. Blablabla</p>
    <input type="email" placeholder="email" name="email" required> <br>
    <input type="submit" name="submitButton" value="Subscribe!">
    <p>Ja. Blablabla</p>
  </div>
  
  <!-- right box -->
  <div class="rightBox">
    <img class="cover" src="https://functionalmedsystem.com/wp-content/uploads/2016/11/a.s.d.-umbrella-1024x576.jpg">
  </div>
</div>
';

    return $content;
}

#First parameter
add_shortcode('show_popup', 'popup_form');

#Activate
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_stylesheets()
{
    #Load stylesheets
    wp_enqueue_style('fontAwesomeCND', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesomen/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('CustomStylesheet', plugins_url('popupplugin/css/style.css'));

    #Load jquery
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('customScript', plugins_url('popupplugin/js/script.js'), array('jquery'), null, true);
}