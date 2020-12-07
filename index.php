    <?php get_header(); ?>

    <section>
        <div class="container px-6 mx-auto py-24">

            <div class="grid lg:grid-cols-3 gap-6">
                <?php if (have_posts()) :
                    $args = array(
                        'category_name' => 'blog'
                    );
                    query_posts($args);

                ?>
                    <?php /* Start the Loop */ ?>
                    <?php while (have_posts()) : the_post();
                        $title = get_the_title();
                        $thumbnail = get_the_post_thumbnail_url();
                        $excerpt = get_the_excerpt();
                        $permalink = get_permalink();
                        $post_day = get_the_date('d');
                        $post_month = get_the_date('M');
                        $post_year = get_the_date('y');


                    ?>

                        <div class="max-w-2xl mx-auto bg-white overflow-hidden shadow-md rounded-lg">
                            <img class="w-full h-64 object-cover" src="<?php echo $thumbnail; ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">


                            <div class="p-6">
                                <div>
                                    <a href="<?php echo $permalink ?>" class="block text-royal font-semibold text-2xl mt-2 hover:text-gray-600 hover:underline">
                                        <?php echo $title ?></a>
                                    <p class="text-sm text-gray-600 mt-2">
                                        <?php echo $excerpt ?>
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <div class="flex items-center justify-between">
                                        <a href="<?php echo $permalink ?>" class="px-4 py-2 inline-block bg-royal text-white text-sm font-bold uppercase rounded hover:bg-black focus:outline-none focus:bg-gray-700">READ MORE</a>

                                        <span class="mx-1 text-gray-600 text-sm"><?php echo $post_day; ?> / <?php echo $post_month; ?> / <?php echo $post_year; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>

                <?php else : ?>
                <?php endif; ?>
            </div>

        </div>
    </section>
    <?php get_footer(); ?>