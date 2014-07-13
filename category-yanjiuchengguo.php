<?php get_header(); ?> 
<div id="yearNav">
<a href="publication_list.php?year=2014">2014</a> | <a href="publications.php">2013</a> | <a href="publication_list.php?year=2012">2012</a> | <a href="publication_list.php?year=2011">2011</a> |<a href="publication_list.php?year=2010"> 2010 </a>| <a href="publication_list.php?year=2009">2009</a> |&nbsp;&nbsp;<a href="publication_list.php?year=2008">2008</a> | <a href="publication_list.php?year=2007">2007</a>
</div>
<ol class="mcol" style="list-style:decimal;">
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
            <li class="article" id="post-<?php the_ID(); ?>" style="list-style:decimal">

                <div class="article-over">
                    <?php the_title(); ?> &nbsp;&nbsp;
                    <?= get_the_excerpt(); ?>
                </div>
            </li> <?php ?>
        <?php endwhile; ?>
    <?php else : ?>
        <h1 id="error"><?php _e("暂无内容！"); ?></h1>


    <?php endif; ?>
</ol>



<?php if (function_exists('wp_pagenavi')) {
    wp_pagenavi();
} ?>
<?php get_footer(); ?>