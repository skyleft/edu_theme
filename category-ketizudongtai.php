<?php get_header(); ?> 
				  

              <ul class="mcol">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
              	<li class="article" id="post-<?php the_ID(); ?>">

                    <div class="article-over">
                      <h6><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a><?php the_time(__('F jS, Y', 'kubrick')) ?></h6>
                      
                      <!-- <div class="postmetadata">
                          Posted: <?php the_time(__('F jS, Y', 'kubrick')) ?>&nbsp;&#721;&nbsp;
                          <?php comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments'), '', __('Comments Closed') ); ?><br />
                          <?php printf(__('Filled under: %s'), get_the_category_list(', ')); ?>
                      </div> -->
                    </div>
                </li> <?php ?>
            <?php endwhile; ?>
            <?php else : ?>


            <?php endif; ?>
            </ul>

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <h1 id="error"><?php _e("Sorry, but you are looking for something that isn&#8217;t here."); ?></h1>
            <?php endif; ?>


            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php get_footer(); ?>