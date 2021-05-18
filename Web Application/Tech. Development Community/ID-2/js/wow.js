new WOW().init();


/* http://mynameismatthieu.com/WOW/

wow.js allows you to animate html elements on with animate.css on scroll past.

It is a two step process only

STEP 1 
Add the CSS class="wow" to any HTML element that you wish to animate on scroll past.  It will be invisible until the user scrolls to reveal it.  If you wish to use delay, then only the options in blue below would be invisible until the user scrolls past.

STEP 2
Pick an animation style from animate.css and add the CSS class to the HTML element.

STEP 1 & 2 Example
<div class="wow bounceInUp"> Reveal This </div >

OPTIONAL CHOICES
You can also add data-wow-xxxx to your HTML element from Step 1 & 2.  There are four choices.  It is okay to use all four on one HTML element.

data-wow-duration="2s"
Change the animation duration to 2s;

data-wow-delay=".5s"
Half second delay before the animation starts

data-wow-offset="300"
Distance in pixels to start the animation (related to the bottom of browser viewport and the top of hidden box.  When the user scrolls and reach this distance the hidden box is revealed.

data-wow-iteration="4"
Number of times the animation is repeated

*/