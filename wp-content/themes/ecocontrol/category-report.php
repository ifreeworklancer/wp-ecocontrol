<?php

get_header(light);

global $wp;
$url = home_url($wp->request);

$args = array(
    'category_name' => 'report',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => -1,
);

$query = new WP_Query($args);

$dates = [];

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post();

        $date = explode('-', date('Y-m', strtotime($post->post_date)));

        if (!$dates[$date[0]]) {
            $dates[$date[0]] = [];
        }

        if (in_array($date[1], $dates[$date[0]])) continue;


        array_push($dates[$date[0]], $date[1]);
    }
}

wp_reset_postdata();

$current_year = !empty($_GET['report_year']) ? $_GET['report_year'] : get_the_date('Y');
?>

    <!-- Calendar -->
    <section id="archive-report">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-10 mx-auto">

                    <?php if (count($dates)) : ?>
                        <div class="archive-report-header">
                            <div class="filter filter-year">
                                <?php
                                foreach ($dates as $key => $date) {
                                    echo '<a href="' . $url . '?report_year=' . $key . '" class="filter-link ';
                                    if ($current_year == $key) {
                                        echo 'active';
                                    }
                                    echo '">' . $key . '</a>';
                                }
                                ?>
                            </div>
                            <div class="filter filter-month">
                                <?php
                                foreach ($dates[$current_year] as $month) {
                                    echo '<a href="' . $url . '?report_year=' . $current_year . '&report_month=' . $month . '" class="filter-link ';
                                    if (($_GET['report_month']) == $month) {
                                        echo 'active';
                                    }
                                    echo '">' . convert_month($month) . '</a>';
                                }
                                ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <table class="table table-bordered table-responsive-md text-center">
                        <thead>
                        <tr>
                            <th scope="col"><?= __('[:ru]На что потрачено[:ua]На що витрачено[:]') ?></th>
                            <th scope="col" class="bg-light"><?= __('[:ru]Когда потрачено[:ua]Коли витрачено[:]') ?></th>
                            <th scope="col"><?= __('[:ru]Сколько потрачено[:ua]Скільки витрачено[:]') ?></th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $query = new WP_Query(array_merge($args, [
                            'year' => !empty($_GET['report_year']) ? $_GET['report_year'] : get_the_date('Y'),
                            'monthnum' => !empty($_GET['report_month']) ? $_GET['report_month'] : null,
                        ]));
                        while ($query->have_posts()) {
                            $query->the_post();
                            echo
                                '<tr>'
                                . '<td>' . get_the_title() . '</td>'
                                . '<td class="bg-light">' .  date('d.m.Y', strtotime($post->post_date)) . '</td>'
                                . '<td>' . get_field('report_value') . ' грн</td>'
                                . '</tr>';
                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

<?php wp_reset_postdata(); ?>

    <script>

    </script>


<?php

get_footer('simple');