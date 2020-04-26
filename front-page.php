<?php get_header() ?>


<div id="hero">
    <div class="container d-flex align-items-center">
        <h1>Welcome to my shop</h1>
    </div>
</div>
<div class="content">
    <section class="section">
        <div class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                    <?php the_content() ?>



            <?php endwhile;

            endif ?>
        </div>
    </section>
</div>

<?php get_footer() ?>