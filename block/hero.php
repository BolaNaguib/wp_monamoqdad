<?php
// ACF FIELDS
$title = get_field('title') ? get_field('title') : 'Mona Al Moqdad';
$caption = get_field('caption') ? get_field('caption') : 'Artist';
$image = get_field('image');
$image_url = $image ? $image['url'] : 'https://images-na.ssl-images-amazon.com/images/I/714v6QkGEiL._AC_SL1500_.jpg'

?>

<style>
    .newfont {
        font-family: 'Xanh Mono', monospace;
    }
</style>
<!-- HOME -->
<div class="home type-2 bg-black bg-transparent h-screen " style="background-image: none; background-color:#000;">
    <img class="absolute w-full h-full top-0 left-0 z-index-10" src="<?php echo $image_url ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>" alt="">
    <div class="absolute bg-black opacity-75 w-full h-full top-0 left-0 z-index-20"></div>
    <div class="text-white  block mt-64 " style="">
        <div class="container mx-auto ">

            <div class="container mx-auto  items-end text-center lg:text-left text-white relative z-index-30 ">
                <!--                 <h1>
                    <?php echo $title ?>

                </h1>
                <br> -->
                <b class=' lg:text-white px-2 pt-32 lg:pt-4 py-4 inline-block newfont text-2xl lg:text-4xl'>
                    <?php echo $caption ?>
                </b>
            </div>
        </div>
        <ul id="scene" style="width:110%">
            <li class="layer l1" data-depth="0.10"><img class="w-full" src="<?php echo get_template_directory_uri() ?>/assets/img/cloud/cloudd.png" alt=""></li>
            <li class="layer l2" data-depth="0.15"><img src="<?php echo get_template_directory_uri() ?>/assets/img/cloud/cloud-2.png" alt=""></li>
            <li class="layer l3" data-depth="0.17"><img src="<?php echo get_template_directory_uri() ?>/assets/img/cloud/cloud-2.png" alt=""></li>
        </ul>
    </div>
</div>