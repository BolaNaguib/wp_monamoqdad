<?php get_header();

$thumbnail = get_the_post_thumbnail_url();
?>


<!-- START container -->
<div class='container mx-auto px-4 prose lg:prose-xl py-24 text-gray-900'>
    <h1 class="text-3xl lg:text-5xl text-royal"><?php the_title(); ?></h1>
    <img class="py-12" src="<?php echo $thumbnail; ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">

    <?php  ?>
    <?php if (have_posts()) : ?>
        <?php /* Start the Loop */ ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
</div>
<!-- END container -->
<?php get_footer(); ?>