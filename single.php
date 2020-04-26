<?php get_header() ?>

<div class="container">

    <div class="content">
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-center align-self-center">
                        <h1><?php the_title() ?></h1>
                    </div>
                    <?php if (the_post_thumbnail()) : ?>
                        <div class="col-lg-6 d-flex justify-content-center align-self-center">
                            <img src=" <?php the_post_thumbnail_url('post_image') ?>" alt="
                ">
                        </div>
                    <?php endif ?>
                </div>
                <div class="row">
                    <div class="col-lg-3 ">
                        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
                                <div class="blog-post">
                                    <?php the_content() ?>
                                </div>
                        <?php endwhile;
                        endif ?>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-center">
                        <div class="sidebar">
                            <?php get_sidebar() ?>
                        </div>
                    </div>
                </div>


            </div>

        </section>
    </div>

</div>


<?php get_footer() ?>