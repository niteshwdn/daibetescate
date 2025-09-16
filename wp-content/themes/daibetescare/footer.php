<footer id="footer" class="footer light-background">
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-12 col-md-3 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">DaibetesCare</span>
          </a>
          <div class="footer-contact">
          <p>Diabetes care involves balanced nutrition, daily exercise, regular health checkups, stress management, and proper treatment to effectively control blood sugar and complications.</p>
          </div>
          <div class="social-links d-flex mt-4">
          <a href="<?php echo get_theme_mod('rs_facebook') ?>" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?php echo get_theme_mod('rs_instagram') ?>" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?php echo get_theme_mod('rs_linkedin') ?>" class="linkedin"><i class="bi bi-linkedin"></i></a>
          <a href="<?php echo get_theme_mod('rs_twitter') ?>" class="twitter"><i class="bi bi-twitter"></i></a>
          </div>
        </div>

        <div class="col-12 col-md-3 footer-links">
          <h4 class="ms-3">Address:</h4>
          <div class="d-flex footer-address" style="height:63px">
            <div class="icon-footer mt-2">
              <a href="https://maps.app.goo.gl/amUrGmumNA73fNsE6"> <i class="bi bi-geo-alt"></i></a>
            </div>
              <p><?php echo get_theme_mod('rs_address') ?></p>
             </div>
             <div class="d-flex footer-address">
            <div class="icon-footer">
              <a href="tel:<?php echo get_theme_mod('rs_contact_number'); ?>"><i class="bi bi-phone"></i></a>
            </div>
             <p><a href="tel:<?php echo get_theme_mod('rs_contact_number'); ?>">
            <?php echo get_theme_mod('rs_contact_number') ?></p>
           </a>
             </div>
             <div class="d-flex footer-address">
            <div class="icon-footer">
              <a href="mailto:<?php echo get_theme_mod('rs_email') ?>"><i class="bi bi-envelope"></i></a>
            </div>
              <p><a href="mailto:<?php echo get_theme_mod('rs_email') ?>"><?php echo get_theme_mod('rs_email') ?></a></p>
             </div>

        </div>

        <div class="col-6 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="<?php echo site_url() ?>">Home</a></li>
            <li><a href="http://localhost/wordpress/about-us/">About Us</a></li>
             <li><a href="http://localhost/wordpress/daibetes/">Daibetes</a></li>
             <li><a href="#"> Privacy Policy</a></li>
            <li><a href="#"> Terms & Conditions</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-3 footer-links category-li">
        <h4 class="ms-2" >Category</h4>
        <?php
        $daibetes = get_categories([
        'taxonomy' => 'category', 
        'orderby'  => 'name',    
        'order'    => 'ASC',    
        'number'   => 4         
        ]);


       if (!empty($daibetes)) {
       echo '<ul>';
        foreach ($daibetes as $category) {
        $taxonomy_img = get_taxonomy_image($category->term_id);

        echo '<li>';
        if (!empty($taxonomy_img)) {
            echo '<img class="img-fuild img-category" src="' . esc_url($taxonomy_img) . '" alt="' . esc_attr($category->name) . '">';
        }
        echo '<a class="p-1" href="' . esc_url(get_category_link($category->term_id)) . '">'
            . esc_html($category->name) . ' (' . $category->count . ')'
            . '</a>';
        echo '</li>';
    }
    echo '</ul>';
}
?>

        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4 d-flex justify-content-center fs-6">
      <a href="<?php site_url() ?>" class="text-dark mx-1 text-decoration-underline">© <?php echo get_the_date('x') ?> <span><?php echo get_theme_mod('rs_footer_copy') ?></span></a>
      <strong class="text-dark">| <span class="text-dark text-uppercase"><?php echo get_theme_mod('rs_footer_text') ?></span></strong>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>

</body>

</html>