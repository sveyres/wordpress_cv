<?php get_header()  ?>
<aside class="index_cat">
    <?php global $post;
    $categories = get_categories( array( 'orderby' => 'name'));
    foreach ($categories as $category):
    printf('<a href="#%s"><h2>%s</h2></a>', $category->slug, $category->name);
    endforeach;

    ?>
</aside>
<main>
<?php global $post;
$categories = get_categories( array( 'orderby' => 'name'));
    foreach ($categories as $category):
        printf( '<article id="%s">', $category->slug);
        printf( '<h2>%s</h2>', $category->name);
        $args = array(
            'posts_per_page'   => 5,
            'category'    => $category->cat_ID
        );
        $posts_array = get_posts( $args );
            foreach ($posts_array as $post) : setup_postdata( $post ); ?>
            <div>
                <h3 href="<?php the_permalink(); ?>"><?php the_title(); ?></h3>
                <p><?php the_content() ?></p>
            </div>
            <?php
            endforeach;
        printf('</article>');
    endforeach;
    ?>
</main>

<?php get_footer() ?>
