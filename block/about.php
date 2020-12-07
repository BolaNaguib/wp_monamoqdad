<?php
// ACF FIELDS 
$title_tag = get_field('title_tag') ? get_field('title_tag') : 'About ME';
$title = get_field('title') ? get_field('title') : 'I am working on freelance on web design and software.';
$caption = get_field('caption') ? get_field('caption') : 'For instance, whenever I go back to the guest house during the morning to copy out the contract, these gentlemen are always still sitting there eating their breakfasts.';
$sign = get_field('sign');
$image = get_field('image');
?>
<section class="py-24">
    <!-- START container mx-auto px-4 -->
    <div class='container mx-auto px-4'>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <div>
                <h5 class="block text-royal"><?php echo $title ?></h5>
                <span class="text-gray-900 mb-4 block"><?php echo $title_tag ?></span>
                <br />
                <p>
                    <?php echo $caption ?>
                </p>
				<div class='text-center'>
								<img class="h-32 inline-block" src="<?php echo $sign['url'] ?>" >
	
				</div>
            </div>
            <div class="flex justify-end">
                <div class="lg:w-4/6 text-right bg-royal">
                    <img class="w-full transform lg:-translate-y-8 lg:-translate-x-12 shadow-xl" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                </div>
            </div>
        </div>
    </div>
    <!-- END container mx-auto px-4 -->
</section>