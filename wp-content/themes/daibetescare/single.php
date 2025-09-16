<?php get_header(); 
  the_post()
?>

<div class="main">


<div class="container-fuild">
    <?php the_post_thumbnail() ?>
<div class="container bg-light py-3">
 <h3> <?php the_title(); ?></h3>
  <p><?php the_excerpt()?> </p>
  <?php echo the_content()?>
  <?php comment_form()?>


<?php //$imagepath= wp_get_attachment_image_src(get_post_thumbnail_id());
// print_r($imagepath)
?>
</div>
</div>







<?php get_footer(); ?>