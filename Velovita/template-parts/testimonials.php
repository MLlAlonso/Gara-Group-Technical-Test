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
                  <?php if (has_post_thumbnail()) : ?>
                      <div class="testimonial-img">
                          <?php the_post_thumbnail('thumbnail'); ?>
                      </div>
                  <?php endif; ?>
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
