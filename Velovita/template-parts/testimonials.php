<section class="testimonials">
  <div class="container">
    <h2>What Our Customers Say</h2>

    <div class="testimonials-list">
      <?php
      $args = [
          'post_type' => 'testimonial',
          'posts_per_page' => 5
      ];
      $testimonial_query = new WP_Query($args);

      if ($testimonial_query->have_posts()) :
          while ($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>
              
              <div class="testimonial-item">

                  <div class="testimonial-img">
                      <?php if (has_post_thumbnail()) : ?>
                          <?php the_post_thumbnail('thumbnail'); ?>
                      <?php else : ?>
                          <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                            alt="Velovita logo"
                          />
                      <?php endif; ?>
                  </div>

                  <h3><?php the_title(); ?></h3>
                  <p><?php the_content(); ?></p>

              </div>

          <?php endwhile;
          wp_reset_postdata();
      else : ?>
          <p>No testimonials yet.</p>
      <?php endif; ?>
    </div>
  </div>
</section>
