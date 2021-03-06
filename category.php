<?php
/*
Template Name: Archive
*/
 get_header(); ?>	
	<div class="container">
        <div class="category-container">
            <h1><?php wp_title('', true,''); ?></h1>
                
            <div class="container-news">
               <section>
                   <?php 
                    $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>5)); ?>
                    <?php if (have_posts() ) : ?>
                    <ul>
                        <?php while (have_posts() ) : the_post(); ?>
                            <li>
                                <figure>
                                    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); if ($image) : ?> <img src="<?php echo $image[0]; ?>" alt="" /> <?php endif; ?>
                                    <figcaption>
                                        <a href="<?php the_permalink() ?>"><p class="category-news-title"><?php the_title(); ?></p></a>
                                        <p class="category-news-date"><?php the_time('d M Y'); ?></p>
                                        <p class="category-news-time"><?php echo get_the_time(); ?></p>
                                    </figcaption>
                                </figure>
                            </li>
                        <?php endwhile; ?>              
                    </ul>
                     <?php if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'posts' );?>
                    <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php _e( 'متاسفانه هیچ مطلبی یافت نشد.' ); ?></p>
                        <?php endif; ?>
                </section>
            </div>
        </div>
    </div>  
<?php get_footer(); ?>   