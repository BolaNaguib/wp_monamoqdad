<?php

$block_title = get_field('block_title') ? get_field('block_title') : 'Black Horses';
?>
<!-- START productCategory -->
<div class='productCategory relative bg-white'>


    <!-- START container mx-auto relative z-20 py-64 -->
    <div class='container mx-auto relative z-20 py-12'>
        <div class="text-center">

            <h3 class="mb-12"><?php echo $block_title ?></h3>
        </div>
        <div class="grid grid-cols-3 gap-6 ">
            <?php if (have_rows('categories')) : ?>
                <?php while (have_rows('categories')) : the_row();
                    //ACF Fields
                    $url = get_sub_field('url') ? get_sub_field('url') : '#';
                    $title = get_sub_field('title') ? get_sub_field('title') : 'Category name';
                    $img = get_sub_field('img');
                ?>
                    <div class=" relative h-64 overflow-hidden">
                        <a class="shadow-xl group " href="<?php echo $url ?>">
                            <img class="absolute object-cover group-hover:scale-125 transform transition duration-300 ease-in-out  w-full " src="<?php echo $img ? $img['url'] : get_template_directory_uri(); ?>/assets/img/horses.jpg" alt="<?php echo $img['alt'] ?>" title="<?php echo $img['title'] ?>">
                            <div class="absolute z-20 w-full h-full indent-0 flex justify-center text-center items-end shadow bg-gradient-to-t from-black">
                                <span class="px-4 text-white  py-2  "> <?php echo $title ?> </span>

                            </div>

                        </a>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
    <!-- END container mx-auto relative z-20 py-64 -->
</div>
<!-- END productCategory -->