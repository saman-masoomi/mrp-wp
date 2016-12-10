<?php get_header(); ?>
   
    <div class="row index-content">
        <div class="container col-xs-12 logo-container">
            <a id="mrp" class="play"></a>
        </div>
        <form method="get" action="http://www.google.com/search" class="google-search">
            <table>
                <tr>
                    <td>
                        <input type="text" name="q" maxlength="255" value="" class="search-input" /> </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Google Search" class="search-bottun" /> </td>
                    <td>
                        <input type="submit" value="Mandegar24.com" class="search-bottun" name="sitesearch" /> </td>
                </tr>
            </table>
        </form>
    </div>
    
        
        
    <div class="row">
        <div class="news-box">
           <section>
                <ul>
                   <?php if(have_posts()) : ?> <?php while(have_posts()) : the_post(); ?>
                    <li>
                        <figure> <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' ); if ($image) : ?> <img src="<?php echo $image[0]; ?>" alt="" /> <?php endif; ?>
                           
                            <figcaption>
                                <a href="<?php the_permalink() ?>" target="_blank">
                                    <p class="news-title"><?php the_title(); ?></p>
                                </a>
                                <p class="news-time"><?php
                                  $days = round((date('U') - get_the_time('U')) / (60*60*24));
                                   if ($days==0) {
                                         echo "امروز";
                                        }
                                   elseif ($days==1) {
                                         echo "دیروز";
                                        }
                                   else {
                                         echo "" . $days . " روز پیش";
                                 }
                                ?></p>
                                <p class="news-source"><?php the_author(); ?></p>
                            </figcaption>
                        </figure>
                    </li>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </section>
            <a href="#"><p class="more-news">بیشتر</p></a>
        </div>
    </div>
    
<?php get_footer(); ?>