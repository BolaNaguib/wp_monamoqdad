<section class="py-24">
    <!-- START container mx-auto px-4 -->
    <div class='container mx-auto px-4'>
        <div class="text-center">

            <h3 class="mb-12">Black Horses</h3>
        </div>

        <div class="grid grid-cols-4 gap-6">
            <?php for ($i = 1; $i < 13; $i++) : ?>
                <div class="text-center border p-4 relative group">
                    <a href="<?php echo home_url() ?>/singleproduct/">
                        <div class="bg-black text-white absolute top-0 left-0 h-full w-full flex items-center opacity-0 group-hover:opacity-100 transition duration-500 ease-in-out">
                            <div class="text-left p-4 relative">
                                <span class="block transform -translate-y-12 group-hover:translate-y-0 transition duration-500 ease-in-out">Product Name</span>
                                <small class="block transform translate-y-12  group-hover:translate-y-0 transition duration-500 ease-in-out">Description</small>
                            </div>

                        </div>
                        <img style="max-height: 200px;" class="inline-block max-h-full" src="<?php echo get_template_directory_uri() ?>/assets/img/horse/Layer-<?php echo $i ?>.png" alt="">
                    </a>

                </div>
            <?php endfor; ?>
        </div>
    </div>
    <!-- END container mx-auto px-4 -->
</section>