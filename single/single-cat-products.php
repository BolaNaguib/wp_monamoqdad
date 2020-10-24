<?php get_header();
// general Attr
$id = get_the_ID();
$title = get_the_title() ? get_the_title() : 'product name';
$category = get_the_category($id);
$thumbnail = get_the_post_thumbnail_url();
$folder_name = get_field('folder_name') ? get_field('folder_name') : 'horse';
$file_name = get_field('file_name') ? get_field('file_name') : 'Layer';
$description = get_field('description') ? get_field('description') : 'Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.';
?>
<?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="container px-2 mx-auto mt-8">


            <section class="text-gray-700 body-font overflow-hidden">
                <div class="container px-5 py-24 mx-auto">
                    <div class="grid md:grid-cols-2 gap-6 mx-auto flex flex-wrap my-12">
                        <div class=" flex items-center justify-center border text-center p-12  overflow-hidden">
                            <?php if ($thumbnail) : ?>
                                <img src="<?php echo $thumbnail['url'] ?>" alt="<?php echo $thumbnail['alt'] ?>" title="<?php echo $thumbnail['title'] ?>">
                            <?php else : ?>
                                <div class="cloudimage-360" data-folder="<?php echo get_template_directory_uri() ?>/uploads/<?php echo $folder_name ?>/" data-filename="<?php echo $file_name ?>-{index}.png" data-amount="36"></div>

                            <?php endif; ?>
                        </div>

                        <div class="py-6">
                            <h4 class="text-gray-900 text-3xl title-font font-medium mb-1 text-royal"><?php echo $title ?></h4>
                            <!-- <h2 class="text-sm title-font text-gray-900 tracking-widest divide-x divide-gray-400"><?php foreach ($category as $cd) : ?>
                                    <a class="pl-2" href="<?php echo get_permalink($cd->cat_ID)  ?>"> <?php echo $cd->cat_name ?> </a>
                                <?php endforeach; ?></h2> -->
                            <div class="flex mb-4 justify-between text-royal">
                                <!-- <span class="title-font font-medium text-2xl text-black">$58.00</span> -->

                                <span class="flex items-center ">
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-black" viewBox="0 0 24 24">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                    </svg>
                                </span>

                            </div>
                            <hr class="block mb-6">
                            <p class="leading-relaxed mb-4"><?php echo $description ?></p>

                            <!-- <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">


                </div> -->
                            <!-- <div class="block">
                    <button class="flex ml-auto w-full justify-center text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-gray-900 rounded">Request a Quote</button>
                    <hr>
                    <br>

                </div> -->

                        </div>
                    </div>
                    <div class="text-center">
                        <b class="text-lg md:text-3xl block mb-4 text-royal">Request a Quote</b>
                    </div>
                    <div class="forminput ">
                        <?php echo do_shortcode('[contact-form-7 id="53" title="Contact form 1"]') ?>
                    </div>
                    <div class="text-center">
                        <b class="text-lg md:text-3xl block mb-4 text-royal">Gallery</b>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                        <?php if (have_rows('gallery')) : ?>
                            <?php while (have_rows('gallery')) : the_row();
                                //ACF Fields
                                $image = get_sub_field('image');
                            ?>


                                <div class="text-center js-show-on-scroll border p-4 relative group  transform hover:scale-150 bg-white hover:shadow-2xl relative z-0 hover:z-10 transition duration-500 ease-in-out">
                                    <a href="#">
                                        <!-- <div class="bg-black text-white absolute top-0 left-0 h-full w-full flex items-center opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
                            <div class="text-left p-4 relative">
                                <span class="block transform -translate-y-12 group-hover:translate-y-0 transition duration-500 ease-in-out">Product Name</span>
                                <small class="block transform translate-y-12  group-hover:translate-y-0 transition duration-500 ease-in-out">Description</small>
                            </div>

                        </div> -->
                                        <img style="max-height: 200px;" class="inline-block max-h-full transform" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                                    </a>

                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>



        </div>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<?php get_footer(); ?>