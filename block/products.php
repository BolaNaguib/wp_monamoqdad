<section>
    <!-- START container mx-auto px-4 -->
    <div class='container mx-auto px-4'>
        <div class="grid grid-cols-4 gap-6">
            <?php for ($i = 1; $i < 10; $i++) : ?>
                <div class="text-center border p-4">
                    <img style="max-height: 200px;" class="inline-block max-h-full" src="<?php echo get_template_directory_uri() ?>/assets/img/horse/Layer-<?php echo $i ?>.png" alt="">
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <!-- END container mx-auto px-4 -->
</section>