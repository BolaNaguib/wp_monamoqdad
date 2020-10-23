<?php
// ACF Fields
$title = get_field('title') ? get_field('title') : 'Contact us immediately';
$address = get_field('address') ? get_field('address') : '243 naser st';
$email = get_field('email') ? get_field('email') : 'info@monaalmoqdad.com';
$number = get_field('number') ? get_field('number') : '01023989330';
$iframe = get_field('iframe') ? get_field('iframe') : '<iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.934313664098!2d31.469106750101346!3d30.038742281795493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583f9c3f5ad639%3A0x755e8b0d6e6135d0!2sINETWORK%20Middle%20East%20LLC!5e0!3m2!1sen!2seg!4v1600050872042!5m2!1sen!2seg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>';
?>
<!-- Contact -->
<section class="py-24">
    <!-- START container mx-auto px-4 -->
    <div class='container mx-auto px-4 text-center'>
        <h3 class="mb-12 text-royal"><?php echo $title ?></h3>
        <div class="grid md:grid-cols-3 gap-4 relative">
            <hr class="hidden md:block absolute w-4/6 ml-48 mt-8 border z-0">
            <div class="text-center  relative z-10">
                <div class="inline-block border p-6 bg-white text-royal">
                    <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16">
                        <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                    </svg>
                </div>
                <b class="block my-4">Number</b>
                <a href="tel:<?php echo $number ?>" class="block text-gray-600"><?php echo $number ?></a>
            </div>
            <div class="text-center  relative z-10">
                <div class="inline-block border p-6 bg-white text-royal">
                    <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="map-marked-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-map-marked-alt fa-w-18">
                        <path fill="currentColor" d="M288 0c-69.59 0-126 56.41-126 126 0 56.26 82.35 158.8 113.9 196.02 6.39 7.54 17.82 7.54 24.2 0C331.65 284.8 414 182.26 414 126 414 56.41 357.59 0 288 0zm0 168c-23.2 0-42-18.8-42-42s18.8-42 42-42 42 18.8 42 42-18.8 42-42 42zM20.12 215.95A32.006 32.006 0 0 0 0 245.66v250.32c0 11.32 11.43 19.06 21.94 14.86L160 448V214.92c-8.84-15.98-16.07-31.54-21.25-46.42L20.12 215.95zM288 359.67c-14.07 0-27.38-6.18-36.51-16.96-19.66-23.2-40.57-49.62-59.49-76.72v182l192 64V266c-18.92 27.09-39.82 53.52-59.49 76.72-9.13 10.77-22.44 16.95-36.51 16.95zm266.06-198.51L416 224v288l139.88-55.95A31.996 31.996 0 0 0 576 426.34V176.02c0-11.32-11.43-19.06-21.94-14.86z" class=""></path>
                    </svg>
                </div>
                <b class="block my-4">address</b>
                <span class="block text-gray-600"><?php echo $address ?></span>
            </div>
            <div class="text-center  relative z-10">
                <div class="inline-block border p-6 bg-white text-royal">
                    <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="at" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-at fa-w-16">
                        <path fill="currentColor" d="M256 8C118.941 8 8 118.919 8 256c0 137.059 110.919 248 248 248 48.154 0 95.342-14.14 135.408-40.223 12.005-7.815 14.625-24.288 5.552-35.372l-10.177-12.433c-7.671-9.371-21.179-11.667-31.373-5.129C325.92 429.757 291.314 440 256 440c-101.458 0-184-82.542-184-184S154.542 72 256 72c100.139 0 184 57.619 184 160 0 38.786-21.093 79.742-58.17 83.693-17.349-.454-16.91-12.857-13.476-30.024l23.433-121.11C394.653 149.75 383.308 136 368.225 136h-44.981a13.518 13.518 0 0 0-13.432 11.993l-.01.092c-14.697-17.901-40.448-21.775-59.971-21.775-74.58 0-137.831 62.234-137.831 151.46 0 65.303 36.785 105.87 96 105.87 26.984 0 57.369-15.637 74.991-38.333 9.522 34.104 40.613 34.103 70.71 34.103C462.609 379.41 504 307.798 504 232 504 95.653 394.023 8 256 8zm-21.68 304.43c-22.249 0-36.07-15.623-36.07-40.771 0-44.993 30.779-72.729 58.63-72.729 22.292 0 35.601 15.241 35.601 40.77 0 45.061-33.875 72.73-58.161 72.73z" class=""></path>
                    </svg>
                </div>
                <b class="block my-4">email</b>
                <span class="block text-gray-600"><?php echo $email ?></span>
            </div>

        </div>
        <div class="forminput mt-32">
            <?php echo do_shortcode('[contact-form-7 id="53" title="Contact form 1"]') ?>
        </div>
    </div>
    <!-- END container mx-auto px-4 -->
</section>
<div class="iframe">
    <?php echo $iframe ?>
</div>
<style>
    .iframe iframe {
        width: 100%;
    }
</style>