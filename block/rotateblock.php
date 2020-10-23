<?php
// ACF FIELDS 
$title = get_field('title') ? get_field('title') : 'Arabian Horse';
?>
<!-- 360  -->
<section class="py-24">
    <!-- START container mx-auto -->
    <div class='container mx-auto text-center'>
        <div class="block text-center">
            <div class="cloudimage-360" data-folder="<?php echo get_template_directory_uri() ?>/assets/img/horse/" data-filename="Layer-{index}.png" data-amount="36"></div>
            <h2><?php echo $title ?></h2>
            <a class="bg-royal hover:bg-black transition duration-300 ease-in-out text-white py-4 px-6 inline-block mt-4" href="#">DETAILES</a>
        </div>

    </div>
    <!-- END container mx-auto -->
</section>