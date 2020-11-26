<?php
$columns = get_field('columns');
?>
<!-- 360  -->
<section class="py-24">
    <!-- START container mx-auto -->
    <div class='container mx-auto text-center'>
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-<?php echo $columns ?>" >
   <?php if (have_rows('grid')) : ?>
                <?php while (have_rows('grid')) : the_row();
// ACF FIELDS 
$title = get_sub_field('title') ? get_sub_field('title') : 'Arabian Horse';
$folder_name = get_sub_field('folder_name') ? get_sub_field('folder_name') : 'horse';
$file_name = get_sub_field('file_name') ? get_sub_field('file_name') : 'Layer';
$url = get_sub_field('url') ? get_sub_field('url') : '#';
$url_title = get_sub_field('url_title') ? get_sub_field('url_title') : 'Detailes';
            ?>
        
        <div class="block text-center">
            <div class="cloudimage-360" data-lazyload data-folder="<?php echo get_template_directory_uri() ?>/uploads/<?php echo $folder_name ?>/" data-filename="<?php echo $file_name ?>-{index}.png" data-amount="36"></div>
            <h2><?php echo $title ?></h2>
            <a class="bg-royal hover:bg-black transition duration-300 ease-in-out text-white py-4 px-6 inline-block mt-4" href="<?php echo $url ?>"><?php echo $url_title ?></a>
        </div>
          <?php endwhile; ?>
            <?php endif; ?>
</div>
    </div>
    <!-- END container mx-auto -->
</section>