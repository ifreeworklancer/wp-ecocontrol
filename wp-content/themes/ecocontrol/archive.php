<?php


get_header(secondary);

?>


    <!-- Events -->
    <section id="archive">
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();

                        echo '<div class="col-sm-7 col-lg-4">'
                            . '<div class="custom-post-prev custom-post-prev--news">'
                            . '<div class="img" style="background-image:url(' . get_post_first_image_src() . ');"></div>'
                            . '<div class="content">'
                            . '<h6 class="title"><a href="' . get_post_permalink() . '">' . __(get_the_title()) . '</a></h6>'
                            . '<div class="subtitle">' . get_the_excerpt()  . '</div>'
                            . '</div>'
                            . '</div>'
                            . '</div>';
                    }
                }
                $args = array(
                    'show_all' => false,
                    'end_size' => 1,
                    'mid_size' => 1,
                    'prev_next' => true,
                    'prev_text' => __(''),
                    'next_text' => __(''),
                    'add_args' => false,
                    'add_fragment' => '',
                    'screen_reader_text' => __('Posts navigation'),
                );
                the_posts_pagination($args);
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

<?php
get_footer('secondary');