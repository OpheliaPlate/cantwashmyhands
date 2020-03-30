<?php
get_header();

$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations['header-menu']);
$menu_items = wp_get_nav_menu_items( $menu->term_id, array('order' => 'DESC'));
$menu_item = $menu_items[0];
$id = get_post_meta($menu_item->ID, '_menu_item_object_id', true);
global $post;
$post = get_page($id);
setup_postdata($post);
?>
<script>
window.onkeyup = function(e) {
    e = e || window.event;

    if (e.keyCode == '37') {
        document.getElementById("overflow-protector").style.top = "-3000px";
    }
}
</script>
        <main>
            <div id="banner" style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/banner-3.jpg');">
                <div id="banner-footer" class="bg-white">
                    <h1><?php echo get_the_title(); ?></h1>
                    <a href="https://wirvsvirushackathon.org" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Logo_Projekt_01.png"></a>
                    <p>Foto: © <a href="https://ze.tt/gewalt-corona-hoffnung-eine-fotografin-beschreibt-die-aktuelle-lage-im-camp-moria-fotografie-alea-horst/?fbclid=IwAR0dUPmWXmxPL-kK9YknUZcD5hGiC3W4chN7BtSPPhGeVvF9MimMjHAuyKc" target="_blank">Alea Horst</a><p>
                </div>
                <div id="banner-footer-slope" class="bg-white"></div>
            </div>
            <section>
                <?php echo the_content();

if (is_user_logged_in()) {
    // Development instagram instagram feed
}

for ($i = 1; $i < sizeof($menu_items); $i+=1) {
    $menu_item = $menu_items[$i];
    $id = get_post_meta($menu_item->ID, '_menu_item_object_id', true);
    global $post;
    $post = get_page($id);
    setup_postdata($post); ?>
                <div class="section-footer bg-primary"><h1 id="<?php echo $post->post_name; ?>"><?php echo get_the_title(); ?></h1></div>
                <div class="section-footer-slope bg-primary"></div>
            </section>
            <section>
                <?php echo the_content(); ?>
<?php } ?>
            </section>
        </main>
<?php get_footer(); ?>
