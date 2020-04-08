    // Make sure page is loaded
$(document).ready(function()
{
  var yTrigger = document.body.scrollHeight - window.innerHeight - 200; // How far down on the page you need to scroll, to trigger the popup
  var hasTriggered = false;
  
  // Create an eventlistener, that hides the popup when the close div is clicked
  $(".pClose").click(function(){
  	// Hide popup
    $(".pMainShell").css("display", "none");
    $(".pFadeBack").css("display", "none");
  });
  
  // Create an eventlistener, that hides the popup when background is clicked
  $(".pFadeBack").click(function(){
  	// Hide popup
    $(".pMainShell").css("display", "none");
    $(".pFadeBack").css("display", "none");
  });
 
  // Create an eventlistener, that runs every millisecond
  window.setInterval(function()
  {
  	// When page is scrolled below the yTrigger, show the popup
    if (window.scrollY > yTrigger && hasTriggered === false) 
    {
      // Make sure it doesn't pop up multiple times
      hasTriggered = true; 
      
      // Show popup
      $(".pMainShell").css("display", "block");
      $(".pFadeBack").css("display", "block");
    }
    
    // Update the position of the popup, to always fit on screen
    
    $(".pMainShell").css("top", window.pageYOffset + $(window).height() - 2800);
  }, 1);
});