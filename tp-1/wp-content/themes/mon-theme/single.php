<?php get_header()?>
<p>je suis la page single.php </p>
<div class="row">
    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : ?>
            <?php the_post() ?>
             <h1><?= the_title() ?></h1>
             <div>
                 <?= the_content() ?>
             </div>
        <?php endwhile ?>
    <?php endif ?>
</div>

<?php get_footer()?>