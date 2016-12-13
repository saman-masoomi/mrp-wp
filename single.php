<?php get_header(); ?>
	
	<div class="container news-container">
	    <div class="news-content">
        <div class="news-details">
          
           <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
           
            <div class="news-date news-details-top"><img src="<?php bloginfo('template_url'); ?>/images/Calendar.png" alt="News Date"><?php the_time('d M Y'); ?> </div>
            <div class="news-time news-details-top"><img src="<?php bloginfo('template_url'); ?>/images/Watch.png" alt="News Time">10:27</div>
            <div class="news-category news-details-top"><img src="<?php bloginfo('template_url'); ?>/images/Open-Folder.png" alt="News Category"><?php echo get_the_category_list( ', ' ); ?></div>
            <div class="news-author news-details-top"><img src="<?php bloginfo('template_url'); ?>/images/Quill-With-Ink.png" alt="News Author"><?php the_author(); ?></div>
        </div>
	        <div class="news-thumbnail">
	            <img src="<?php if (has_post_thumbnail()){the_post_thumbnail('post-img');}?>
	        </div>
	        
	        <div class="news-org-content">
	            <h1 class="news-content-title"><?php the_title();?></h1>
	            <p class="news-content-content">
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		  </div>
        </div>     
	            </p>
	        </div>

	        <p class="comment-list-title">نظرات</p>
	        <div class="comment-line"></div>
	        <div class="news-content-comment">   
                <?php comments_template(); ?>
	        </div>
	    </div>    
	   
	</div>
	<?php endwhile; ?>
    <?php else : ?>
		<div class="article">
			<p>
				مطلبی پیدا نشد!
			</p>
		</div>
<?php endif; ?>
<?php get_footer(); ?>