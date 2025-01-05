<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description');?></title>
<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="site-header">
        <?php if (is_home()) : ?>
    <h1 class="header" id="site-title">
        <?php the_custom_logo();?>
        <a href="<?php echo esc_url(home_url()); ?>"><span class="site-title-text"><?php bloginfo('name'); ?></span></a>
    </h1>
    <p class="description"><?php bloginfo('description'); ?></p>
            <?php else : ?>
    <p class="header" id="site-title"><a href="<?php echo esc_url(home_url()); ?>"><span class="site-title-text"><?php bloginfo('name'); ?></span></a></p>
    <p class="description"><?php bloginfo('description'); ?></p>
    <?php endif;?>
    </header>
    <?php
    wp_nav_menu( [
        'theme_location' => 'primary',
        'container_class' => 'primary-navigation',
        'container' => 'nav',
        'menu_class' => 'ul',
        'link_before' =>'<span class="link-text">',
        'link_after' => '</span>',
        'fallback_cb' => '__return_false',
        'depth'       => 1,

    ])
    ?>
       
    <main>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
            
                the_title('<h1><a href="'. get_permalink().'">', '</a></h1>');
                the_excerpt();
                wp_link_pages();
                
            endwhile;
        else :
            echo '<p>No content found</p>';
        endif;
        ?>
    </main>
    <?php the_posts_pagination(); ?>
    <nav class="pagination">
        <a href="#" class="prev">Previous</a>
        <a href="#" class="next">Next</a>
    </nav>
    <footer class="site-footer">
        Copyright &copy; 2024
    </footer>
    <?php wp_footer(); ?>
</body>
</html>