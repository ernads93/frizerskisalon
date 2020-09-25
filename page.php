<?php get_header(); ?>
        
        <section class="page-post-header">
            <div>
                <h1><?php echo the_title(); ?></h1>
                <a href="<?php echo home_url(); ?>"><button>NAZAD NA POČETNU</button></a>
            </div>
        </section>
    </header>

    <!-- Blog starts here -->
    <section class="blog" id="blog-start">
        <div class="section-headings">
            <h2 data-aos="fade-up" style="font-size: 1.5rem;">Sve novosti iz MD frizerskog salona Tuzla na jednom mjestu!</h2>
        </div>
        <div class="blog-container" style="margin-top: 5rem;">
            <?php 
                $allPostsWPQuery = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));
                if($allPostsWPQuery->have_posts()) {
                    while($allPostsWPQuery->have_posts()) {
                        $allPostsWPQuery->the_post();  
                            $excerpt = get_the_excerpt(); 
                            $excerpt = substr( $excerpt, 0, 150 );
                            $result = substr( $excerpt, 0, strrpos( $excerpt, ' ' ) );

                     
            ?>
            <div class="post-card">
                <p class="post-thumbnail"><?php echo the_post_thumbnail(array( 340 )); ?></p>
                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <p class="post-date"><?php echo get_the_date('d.m.Y'); ?></p>
                <p class="post-excerpt"><?php echo "$result ..."; ?></p>
                <p class="post-more"><a href="<?php the_permalink(); ?>">Više...</a></p>
            </div>
            <?php 
                        
                    }
                } else {
                    echo "<p>No content found</p>";
                }
            ?>
        </div>
    </section>

<?php get_footer(); ?>