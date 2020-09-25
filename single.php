<?php get_header(); ?>
        
        <section class="page-post-header">
            <div>
                <h1>Novosti</h1>
                <a href="<?php echo home_url(); ?>"><button>NAZAD NA POČETNU</button></a>
            </div>
        </section>
    </header>

    <section class="post">
        <div class="container">
            <h1><?php echo the_title(); ?></h1>
            <p><?php echo get_the_date('d.m.Y'); ?></p>
            <p class="post-thumbnail"><?php echo the_post_thumbnail(array( 390 )); ?></p>
            <p><?php echo the_content();?></p>
        </div>
    </section>


    <?php get_footer(); ?>