<div id="main front" class="row">
  <div class="small-12 columns">
    <ul class="example-orbit" data-orbit>
    <li>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/BW1.png" />
    </li>
    <li>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/BW2.png" />
    </li>
    <li>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/BW3.png" />
    </li>
    </ul>
  </div>
</div>

<div class="row">
  <div class="small-12 columns">
    <?php get_template_part( 'partials/form', 'signup' ); ?>       
  </div>
</div>

<div id="class-img" class="row">
  <div class="small-3 columns mt">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/BW1.png" />
    <div class="overlay">
      <h2>Muay Thai</h2>
      <p>The art of 8 limbs</p>
    </div>
  </div>

  <div class="small-3 columns mma">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/BW2.png" />
    <div class="overlay">
      <h2>Mixed Martial Arts</h2>
      <p>...</p>
    </div>
  </div>

  <div class="small-3 columns box">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/BW3.png" />
    <div class="overlay">
      <h2>Boxing</h2>
      <p>The sweet science</p>
    </div>
  </div>

  <div class="small-3 columns youth">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/library/images/BW1.png" />
    <div class="overlay">
      <h2>Youth Martial Arts</h2>
      <p>Teach your kid's the Muay Thai Kick Boxing ABC's</p>
    </div>
  </div>  
</div>

<div class="row">
  <div class="small-8 columns">
    <h2>Welcome to Boxing Works</h2>
    <p>We are the premier location for Championship level martial arts instruction and fitness classes in the Los Angeles South Bay ( Hermosa Beach, Redondo Beach, Manhattan Beach, Torrance area) area.</p>
    <p>We offer World Class Instruction in Muay Thai, MMA, Boxing, and Kickboxing.  Whether you wish to burn fat, learn self defense, get a killer workout, or become a professional fighter, the staff at Boxing Works will help you achieve your fitness goals—all in a fun, high-energy atmosphere.</p>
    <p>Contact us today!</p>
  </div>

  <div class="small-4 columns">
    <div class="">
      <h2>Latest</h2>
    </div>
  </div>
</div>

<!-- Testimonials -->
<div class="row">
  <div class="small-12 small-centered columns">
    <h2 class="text-center">Testimonials<br>
    <small>See what our clients are saying!</small></h2>

    <?php if ( is_active_sidebar( 'testimonials' ) ) : ?>

      <?php dynamic_sidebar( 'testimonials' ); ?>

    <?php endif; ?>
  </div>
</div>