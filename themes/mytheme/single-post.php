<?php get_header() ?>

<?php 
// If we have Post and while we have post get its content
if (have_posts()) : while(have_posts()) : the_post();
?>

<!-- HTML Template -->
<div class="blog-item">
    <h1 class="mytitle" style="width: 100%; text-align: center; padding: 1rem 0;" ><?php the_title() ?></h1>
    <img src="<?php the_post_thumbnail_url() ?>" style="width: 100%; height: auto; margin: 1rem 0;" />
    <?php the_content() ?>
</div>
<!-- End HTML Template -->

<?php endwhile; endif; ?>

<?php get_footer() ?>

