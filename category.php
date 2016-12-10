<?php get_header(); ?>
	
	<div class="container">
        <div class="category-container">
            <h1>اطلاعیه <?php the_category(', ') ?></h1>
                
            <div class="container-news">
                <ul>
                <?php $cat=hr; ?>
                    <?php query_posts("cat=$cat&showposts=7"); ?>
                        <?php while (have_posts()) : the_post(); ?>
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
                    <?php endwhile;?>
                <?php wp_reset_query(); ?>                 
                </ul>
            </div>
        
            <nav aria-label="Page navigation">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li>
      <a href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
      
       
        </div>
    </div>
    
<?php get_footer(); ?>    