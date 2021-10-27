<?php
/**
 * Template Name: Tags
 */

get_header();

while (have_posts()) :
    the_post();

    ?>
    <div class="row">
        <div class="two columns">&nbsp;</div>
        <div id="primary" class="eight columns">
            <div class="entry-right">
                <header class="entry-header">
                    <h5 class="entry-title" id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h5>
                </header>
                <div class="metadata">
                    <?php
                    $tags = get_tags(array(
                        'hide_empty' => false
                    ));
                    echo '<ul>';
                    foreach ($tags as $tag) {
                        echo '<li><a href="'. get_term_link($tag->term_id) .'">' . $tag->name . '</a></li>';
                    }
                    echo '</ul>';
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php

endwhile; // End of the loop.


get_footer();
