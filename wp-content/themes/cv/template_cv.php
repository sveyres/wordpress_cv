<?php /* Template Name: CV */ ?>
<?php
get_header();
 ?>
<div>





    <?php

    $my_cat = get_categories();

    foreach ($my_cat as $cat) {
        global $post;
        $args = array( 'posts_per_page' => -1, 'orderby'=>'title', 'category' => $cat->cat_ID );
        $myposts = get_posts( $args );
        if ( $myposts) {
            echo '<article class=""'.$cat->name.'">';
            echo '<h2>' .$cat->name. '</h2>';
            foreach ($myposts as $post) {
                setup_postdata( $post );
                if (has_tag('moi') ) {
                    the_title('<h3 class="auntag" >', '</h3>' );
                }else{
                    the_title('<h3>', '</h3>' );
                }
                echo '<p>' . the_content() . '</p>';
                if ( is_user_logged_in()) {
                    echo '<div>'.edit_post_link().'</div>';
                }
            }

            echo '</article>';
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }
    }

?>



<?php
