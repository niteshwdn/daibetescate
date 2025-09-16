<?php get_header(); ?>
<main class="main">
  <div class="container-fluid">
    <div class="container bg-light rounded py-5">

      <?php if (have_posts()) : ?>
        <div class="row row-cols-1 row-cols-md-3 g-4 p-2">
          <?php while (have_posts()) : the_post(); ?>
            <div class="col">
              <div class="card h-100">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                <?php endif; ?>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="fw-blod text-danger"><?php the_date()?></p>
                   </p>
                   <p class=" fw-blod ms-auto"><?php the_author()?> </p>

                  </div>
                  <h5 class="card-title"><?php the_title(); ?></h5>
                  <div class="excerpt">
                  <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
              </div>
               <div class="form-submit pb-3 px-3 d-flex">
                <a href="<?php the_permalink(); ?>" class="btn btn-primary submit ms-auto">Read more</a></div>
                </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p><?php _e('No posts found.', 'textdomain'); ?></p>
      <?php endif; ?>

    </div>
  </div>
</main>
<?php get_footer(); ?>
