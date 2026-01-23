<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <h1>A Community of Rewards and Lifestyle</h1>
    <p>With Velovita®, you’re not just joining a company; you’re joining a movement built on love, belonging, and passion for truly living!</p>

    <a href="https://velovita.com/" class="hero-cta">Discover the Velovita® Way</a>
  </div>

  <img
    src="<?php echo get_template_directory_uri(); ?>/assets/images/hero_life.png"
    alt="Hero Image"
  />
</section>

<?php get_template_part('template-parts/products'); ?>

<?php get_template_part('template-parts/features'); ?>

<?php get_template_part('template-parts/team'); ?>

<?php get_template_part('template-parts/testimonials'); ?>

<?php get_footer(); ?>

<!-- MODAL -->
<div id="promo-modal" class="modal">
  <div class="modal-overlay"></div>
  <div class="modal-content">
    <button class="modal-close">&times;</button>
    <h2>Join the Velovita® Community!</h2>
    <p>Sign up today and start earning rewards, enjoying wellness tips, and connecting with like-minded people.</p>
    <a href="https://velovita.com/join" class="modal-cta">Get Started</a>
  </div>
</div>
