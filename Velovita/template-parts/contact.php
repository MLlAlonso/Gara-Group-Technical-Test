<form method="post" class="contact-form">
  <input type="hidden" name="velovita_contact_nonce" value="<?php echo wp_create_nonce('velovita_contact'); ?>">

  <input type="text" name="cf_name" placeholder="Your Name" required>
  <input type="email" name="cf_email" placeholder="Your Email" required>
  <textarea name="cf_message" placeholder="Your Message" required></textarea>

  <button type="submit">Send Message</button>
</form>
