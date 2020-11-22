<?php
// ACF FIELDS 
$block_title = get_field('block_title') ? get_field('block_title') : 'Category name ';
?>
<section class="py-24">
    <!-- START container mx-auto px-4 -->
    <div class='container mx-auto px-4'>
        <div class="text-center">

            <h3 class="mb-12"><?php echo $block_title ?></h3>
        </div>

        <div class="grid md:grid-cols-4 gap-6 animationx">
            <?php if (have_rows('products')) : ?>
                <?php while (have_rows('products')) : the_row();
                    //ACF Fields
                    $url = get_field('url') ? get_field('url') : '#';
                    $title = get_field('title') ? get_field('title') : 'Product Name';
                    $main_image = get_field('main_image');
                    $sub_image = get_field('sub_image');
                ?>
                    <div class="text-center border p-4 relative group js-show-on-scroll overflow-hidden">
                        <a href="<?php echo $url ?>">
                            <div class="bg-black text-white absolute z-index-40 bottom-0 left-0  flex items-center opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">


                            </div>
                            <div class='w-full absolute bg-white opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out'>
                                <img style="max-height: 200px;" class="inline-block max-h-full " src="<?php echo $sub_image ? $sub_image['url'] : get_template_directory_uri() ?>/assets/img/horse/Layer-<?php echo $i + 1 ?>.png" alt="">
                            </div>

                            <img style="max-height: 200px;" class="inline-block max-h-full" src="<?php echo $main_image ? $main_image['url'] : get_template_directory_uri() ?>/assets/img/horse/Layer-<?php echo $i ?>.png" alt="">
                            <div>
                            </div>
                        </a>

                        <div>
                            <br>
                            <span class='bg-royal text-white px-2'><?php echo $title; ?></span>

                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
    <!-- END container mx-auto px-4 -->
</section>