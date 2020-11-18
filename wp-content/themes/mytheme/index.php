<?php get_header() ?>

<!-- HTML Template -->
<div class="blog">
    <h1>Retouvez ici quelques projets</h1>
    <!-- If there is Articles -->
    <?php if (have_posts()) : ?>
        <div class="row article-container">
        <!-- While there is Articles  get its data and put it in template with functions -->
        <?php while(have_posts()) : the_post(); ?>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'style' => 'height: auto;']) ?>
                <div class="card-body">
                    <h5 class="card-title">
                        <?php the_title()?></h5>
                    <p class="card-text"><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink() ?>" class="card-link">Voir plus...</a>
                </div>
            </div>
        </div>
        <?php endwhile ?>
    </div>
<!-- End HTML Template -->
    <?php else : ?>
</div>


<?php endif; ?>

<?php get_footer() ?>

