<?php get_header(); ?> 
				  

              <ul class="mcol">
              <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
              	<li class="article" id="post-<?php the_ID(); ?>">

                    <div class="article-over" style="border-bottom:dotted 1px #ccc;">
                      <h2 style="text-align:center;"><?php the_title(); ?></h2>
                      <div>
                      <?php the_content();?>
                      <div>
                    </div>
                </li> <?php ?>
            <?php endwhile; ?>
            <?php else : ?>


            <?php endif; ?>
            </ul>

            <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
            <?php endwhile; ?>
            <?php else : ?>
                <h1 id="error"><?php _e("暂无研究方向"); ?></h1>
            <?php endif; ?>


            <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
<?php get_footer(); ?>