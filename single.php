<?php get_header(); ?> 
            <div id="main">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<div class="entry">
                <h1><?php the_title(); ?></h1>
                <div class="article" id="post-<?php the_ID(); ?>">
                    <?php the_content(); ?>
                </div>
                <div id="comments">
					<?php comments_template(); ?>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <h1 id="error"><?php _e(""); ?></h1>
            <?php endif; ?>
            </div>
            </div>

<?php get_footer(); ?>
