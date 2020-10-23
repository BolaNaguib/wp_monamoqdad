<?php
// ACF FIELDS 
$title = get_field('title') ? get_field('title') : 'Hand Crafted Art.';
$caption = get_field('caption') ? get_field('caption') : 'For instance, whenever I go back to the guest house during the morning to copy out the contract, these gentlemen are always still sitting there eating their breakfasts.';
$image = get_field('image');

?>
<section class="py-24">
    <!-- START container mx-auto px-4 -->
    <div class='container mx-auto px-4'>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 flex items-center">
            <div>
                <h5 class="mb-4 block text-royal"><?php echo $title ?></h5>
                <p>
                    <?php echo $caption ?>
                </p>
            </div>
            <div class="flex justify-end">
                <div class="lg:w-4/6 text-right">
                    <img class="w-full transform lg:-translate-y-8 lg:-translate-x-12 " src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                </div>
            </div>
        </div>
    </div>
    <!-- END container mx-auto px-4 -->
</section>