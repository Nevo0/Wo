<?php get_header() ?>

<div class="container">

    <div class="content">
        <section class="section">
            <div class="row">
                <div class="col-lg-3">
                    <div class="sidebar">
                        <?php get_sidebar() ?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <?php if (have_posts()) : while (have_posts()) : the_post() ?>

                            <div class="col-lg-12">
                                <a href="<?php the_permalink() ?>">
                                    <h1><?php the_title() ?></h1>
                                </a>
                            </div>
                            <?php if (the_post_thumbnail()) : ?>
                                <div class="col-lg-12"><a href="<?php the_permalink() ?>">
                                        <img src=" <?php the_post_thumbnail_url('post_image') ?>" alt="
                "></a>
                                </div>
                            <?php endif ?>

                            <div class="col-lg-12">
                                <?php the_excerpt() ?>
                            </div>

                    <?php endwhile;

                    endif ?>



                </div>
            </div>

        </section>
    </div>

</div>


<?php get_footer() ?>