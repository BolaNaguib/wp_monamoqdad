<?php
// ACF FIELDS 
$fb = get_field('facebook', 'option') ? get_field('facebook', 'option') : '#';
$ig = get_field('instagram', 'option') ? get_field('instagram', 'option') : '#';
$tw = get_field('twitter', 'option') ? get_field('twitter', 'option') : '#';
$li = get_field('linkedin', 'option') ? get_field('linkedin', 'option') : '#';

$col1_title = get_field('col1_title', 'option') ? get_field('col1_title', 'option') : 'About Us';
$col1_caption = get_field('col1_caption', 'option') ? get_field('col1_caption', 'option') : 'Proin suscipit luctus orci placerat eat fringilla. Donec hendrerit laoreet risus volutpat mauris. Sed enim bibendum eu forest for ever';
$col2_title = get_field('col2_title', 'option') ? get_field('col2_title', 'option') : 'Head Office';
$email = get_field('email', 'option') ? get_field('email', 'option') : 'admin@admin.com';
$location = get_field('location', 'option') ? get_field('location', 'option') : '154 Av the good, New York ';
$phone = get_field('phone', 'option') ? get_field('phone', 'option') : '01234567890';
$phone_display = get_field('phone_display', 'option') ? get_field('phone_display', 'option') : '01234567890';
$col3_title = get_field('col3_title', 'option') ? get_field('col3_title', 'option') : 'Links';

?>
<!-- Footer -->
<footer style="relative" class="bg-black text-gray-500 py-24 text-sm">
    <!-- START container -->
    <div class='container mx-auto px-4'>
        <!-- START grid grid-cols-4 -->
        <div class='grid grid-cols-1 lg:grid-cols-4 gap-6'>
            <!-- START footer card  -->
            <div>
                <span class="pl-4 border-l-4 mb-4 block text-white font-semibold text-xl border-white"><?php echo $col1_title ?></span>
                <p class="text-gray-600">
                <?php echo $col1_caption ?>
                </p>
            </div>
            <!-- END Footer Card  -->
            <!-- START footer card  -->
            <div>
                <span class="pl-4 border-l-4 mb-4 block text-white font-semibold text-xl border-white"><?php echo $col2_title ?></span>
                <ul>
                    <li class="flex items-center mb-2">
                        <span class=" w-4 h-4 mr-2 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </span> <span>
                        <?php echo $location ?>
                        </span>
                    </li>
                    <li class="flex items-center  mb-2">
                        <span class=" w-4 h-4 mr-2 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span> <span><?php echo $email ?></span>
                    </li>
                    <li class="flex items-center  mb-2">
                        <span class=" w-4 h-4 mr-2 inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </span> <span><a href="tel:<?php echo $phone ?>"><?php echo $phone_display ?></a></span>
                    </li>
                </ul>

            </div>
            <!-- END Footer Card  -->
            <!-- START footer card  -->
            <div>
                <span class="pl-4 border-l-4 mb-4 block text-white font-semibold text-xl border-white"><?php echo $col3_title ?></span>
                <ul>
                <?php if (have_rows('links', 'option')) : ?>
                        <?php while (have_rows('links', 'option')) : the_row();
                            //ACF Fields
                            $page_link = get_sub_field('page_link') ? get_sub_field('page_link') : '#';
                            $page_title = get_sub_field('page_title') ? get_sub_field('page_title') : 'Home';
                        ?>
                            <li class="flex items-center mb-2">
                                <a class="text-current hover:text-white" href="<?php echo $page_link ?>"><?php echo $page_title ?></a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>

            </div>
            <!-- END Footer Card  -->
            <!-- START footer card  -->
            <div>
                <span class="pl-4 border-l-4 mb-4 block text-white font-semibold text-xl border-white">Instagram Feed</span>
                <?php
                    echo do_shortcode('[instagram-feed]');
                    ?>  

            </div>
            <!-- END Footer Card  -->
        </div>
        <!-- END grid grid-cols-4 -->
    </div>
    <!-- END container -->

</footer>
<div class="bg-black">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row justify-between ">
        <p class="text-gray-600 text-sm text-center sm:text-left">© 2020 MonaAlMoqdad — Developed with <svg
		style='
    height: 10px;
    margin: 0px 3px;
'	class='w-3 h-3 mx-1 inline-block' aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16"><path fill="#f00" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" class=""></path></svg>
			By
            <a href="https://inetwork-me.com/" class="text-gray-500 ml-1" rel="noopener noreferrer" target="_blank">Inetwork-ME</a>
        </p>
        <span class="inline-flex sm:ml-auto sm:mt-2 mt-0 justify-center sm:justify-start">
            
			<a href='<?php echo $fb ?>' class="text-gray-600">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
<!--             <a href='<?php echo $tw ?>' class="ml-3 text-gray-600">
                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                </svg>
            </a> -->
            <a href='<?php echo $ig ?>' class="ml-3 text-gray-600">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                </svg>
            </a>
<!--             <a href='<?php echo $li ?>' class="ml-3 text-gray-600">
                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                    <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                    <circle cx="4" cy="4" r="2" stroke="none"></circle>
                </svg>
            </a> -->
        </span>
    </div>
</div>
</div> <!-- wrapper end -->

<?php wp_footer(); ?>
<!-- Javascripts -->
<script src="<?php echo get_template_directory_uri() ?>/extra/js/jquery-1.12.4.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/extra/js/main.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/extra/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/extra/js/parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/extra/js/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/extra/js/typed.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/extra/js/owl.carousel.min.js"></script>
<!-- for color alternatives -->
<script src="<?php echo get_template_directory_uri() ?>/extra/js/jquery.cookie-1.4.1.min.js"></script>
<!-- <script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script> -->
<script src="https://cdn.scaleflex.it/filerobot/js-cloudimage-360-view/v2.0.0.lazysizes.min.js"></script>

<style>
    .cloudimage-360 canvas {
        width: unset !important;
        max-height: 400px;
        display: inline-block;
    }

    footer {
        position: unset !important;
    }

    body {
        padding: 0px !important;
    }

    .bgonhover {
        opacity: 0;
        transition: 3s;
        position: absolute;
        transform: scale(1);

    }

    .bgonhover.active {
        opacity: 1;
        transition: 3s;
        transform: scale(1.5);
    }
</style>
<script>
    const hoverBlock = document.querySelectorAll('.test');
    const bgonhover = document.querySelectorAll('.bgonhover');
    console.log(hoverBlock);
    for (let i = 0; i < hoverBlock.length; i++) {
        console.log(i);
        hoverBlock[i].addEventListener('mouseenter', function(e) {
            const dataID = e.target.getAttribute('data-id');
            const targetDiv = document.getElementById(dataID);
            console.log(bgonhover);
            for (let i = 0; i < bgonhover.length; i++) {
                console.log(bgonhover[i].classList.remove('active'));
            }
            targetDiv.classList.add('active');



        })
    }
</script>

<script>
    const callback = function(entries) {
        entries.forEach((entry) => {
            console.log(entry);

            if (entry.isIntersecting) {
                entry.target.classList.add("animate-fadeIn");
            } else {
                //   entry.target.classList.remove("animate-fadeIn");
            }
        });
    };

    const observer = new IntersectionObserver(callback);

    const targets = document.querySelectorAll(".js-show-on-scroll");


    targets.forEach(function(target) {
        target.classList.add("opacity-0");
        observer.observe(target);
    });
</script>

<style>
    .js-show-on-scroll:nth-child(1) {
        animation-delay: 100ms;
    }

    .js-show-on-scroll:nth-child(2) {
        animation-delay: 300ms;
    }

    .js-show-on-scroll:nth-child(3) {
        animation-delay: 500ms;
    }

    .js-show-on-scroll:nth-child(4) {
        animation-delay: 700ms;
    }

    .js-show-on-scroll:nth-child(5) {
        animation-delay: 900ms;
    }

    .js-show-on-scroll:nth-child(6) {
        animation-delay: 1100ms;
    }

    .js-show-on-scroll:nth-child(7) {
        animation-delay: 1300ms;
    }

    .js-show-on-scroll:nth-child(8) {
        animation-delay: 1500ms;
    }

    .js-show-on-scroll:nth-child(9) {
        animation-delay: 1700ms;
    }

    .js-show-on-scroll:nth-child(10) {
        animation-delay: 1900ms;
    }

    .js-show-on-scroll:nth-child(11) {
        animation-delay: 2100ms;
    }

    .js-show-on-scroll:nth-child(12) {
        animation-delay: 2300ms;
    }
</style>
<style>
    .hoverMenu .showme {
        transform: scale(0);
        transition: 500ms;
    }

    .hoverMenu:hover .showme {
        transform: scale(1);
        display: block;
        transition: 500ms;
    }

    #dropDownMenu {
        transform: scale(0);
        transition: 500ms;
    }

    #dropDownMenu.showDropDownMenu {
        transform: scale(1);
        transition: 500ms;
    }

    .subPhoneDropdown {
        display: block;
        height: 0px;
        overflow: hidden;
        transition: 300ms;
    }

    .subPhoneDropdown.open {
        height: 100%;
        transition: 300ms;
    }
	.cloud-header{
		    padding-top: 430px;
	}
</style>
<script>
    const menuButton = document.getElementById('main-menu');
    const menuCloseButton = document.getElementById('menuCloseButton');
    const dropDownMenu = document.getElementById('dropDownMenu');
    menuButton.addEventListener('click', function() {
        dropDownMenu.classList.toggle('showDropDownMenu');
    })
    menuCloseButton.addEventListener('click', function() {
        dropDownMenu.classList.toggle('showDropDownMenu');
    })

    const openSubPhone = document.querySelectorAll('.openSubPhone');
    console.log(openSubPhone);
    for (let i = 0; i < openSubPhone.length; i++) {
        console.log(i);
        openSubPhone[i].addEventListener('click', function(e) {
            let parent = this.parentElement.parentElement.nextElementSibling;
            console.log(parent.nextElementSibling);
            parent.classList.toggle('open')
            console.log(parent);

        })
    }
</script>
</body>


</html>