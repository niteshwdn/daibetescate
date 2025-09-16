<?php get_header(); 
  the_post()
?>

<div class="main">


<div class="container-fuild">
<?php the_post_thumbnail() ?>
<div class="container">
<?php echo the_content()?>
</div>
</div>







<?php get_footer(); ?>

