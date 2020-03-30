<?php
class Shortcodes {
    function __construct() {
        add_shortcode('cantwashmyhands_news', array($this, 'cantwashmyhands_news_func'));
    }

    // [cantwashmyhands_news]
    function cantwashmyhands_news_func($atts) {
        $a = shortcode_atts(array(
            'link' => ''
        ), $atts);

        ob_start();
        ?>

        <div class="news center">
            <div>
                <h2><?php echo pll__("Newsfeed"); ?></h2>

            <?php
            $search_query = new WP_Query(array(
                'post_type' => array('news'),
                'posts_per_page' => 10
            ));

            while ($search_query->have_posts()) : $search_query->the_post();?>
                <ul>
                    <li>
                        <strong><?php the_title(); ?>:</strong>
                        <?php the_content(); ?>
                    </li>
                </ul>
            <?php
            endwhile;
            ?>

            </div>
        </div>

        <?php
        return ob_get_clean();
    }
}

$shortcodes = new Shortcodes();
?>
