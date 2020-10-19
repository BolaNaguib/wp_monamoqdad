<!doctype html>
<html lang="en">

<head>
    <?php wp_head() ?>

    <title>Cloud Freelancer & Agency Portfolio Template</title>
    <meta charset="UTF-8">
    <meta name="description" content="Cloud Freelancer & Agency Portfolio Template">
    <meta name="keywords" content="personal, portfolio, agency">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/ss.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/extra/color.min.css" id="color" />
    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Font icons -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/extra/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/extra/flaticon.min.css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Preloading -->
    <div id="preloader">
        <div class="spinner">
        </div>
    </div>
    <div class="wrapper bg-black">
        <section class=" absolute w-full top-0 mt-2 block">
            <!-- START container mx-auto px-5 -->
            <div class='container mx-auto px-5'>
                <nav class="bg-transparent text-black  flex items-center justify-between overflow-hidden  ">
                    <div class="flex items-center pl-1">
                        <!-- <img class="w-12 h-12 rounded-full mr-4" src="http://tavonline.net/html/cloud/Html/images/logo.jpg" alt="logo"> -->
                        <span>  
                                                 <img class=" h-24  mr-4" style='filter: brightness(1);' src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
</span></div>
                    <div>
                        <ul class='lg:block hidden'>
                            <li class="inline-block">
                                <a class="hover:bg-royal text-white py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url('/') ?>">Home</a>
                            </li>
                            <li class="inline-block">
                                <a class="hover:bg-royal text-white py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url() ?>/about/">About</a>
                            </li>
                            <li class="inline-block">
                                <a class="hover:bg-royal text-white py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url() ?>/products/">products</a>
                            </li>
                            <li class="inline-block">
                                <a class="hover:bg-royal text-white py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url() ?>/singleproduct/">singleproduct</a>
                            </li>

                            <li class="inline-block">
                                <a class="hover:bg-royal  text-white py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url() ?>/contact/">Contact</a>
                            </li>
                        </ul>
                        <div class="-mr-2 flex items-center justify-end lg:hidden col-span-2">
                        <button id="main-menu" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" id="main-menu" aria-label="Main menu" aria-haspopup="true">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                </div>
                    </div>
                </nav>
            </div>
            <!-- END container mx-auto px-5 -->
        </section>

    <!-- MENU NAVBAR -->
    <div id="dropDownMenu" class="fixed top-0 mt-12 inset-x-0 p-2 transition transform origin-center scale-0 md:hidden z-50">
        <div class="rounded-lg shadow-md">
            <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu" aria-orientation="vertical" aria-labelledby="main-menu">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                    <!-- <img class=" h-8  mr-4" style='filter: brightness(1);' src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""> -->


                    </div>
                    <div class="-mr-2">
                        <button id="menuCloseButton" type="button" class="main-menu inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" aria-label="Close menu">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <style>
                    .xx {
                        display: block;
                        height: 100%;
                        height: 0px;
                        overflow: hidden;
                        transition: 300ms;
                    }
                </style>
                <ul class="px-2 pt-2 pb-3">
             
                    <li class="block">
                                <a class="hover:bg-royal text-royal py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url('/') ?>">Home</a>
                            </li>
                            <li class="block">
                                <a class="hover:bg-royal text-royal py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url() ?>/about/">About</a>
                            </li>
                            <li class="block">
                                <a class="hover:bg-royal text-royal py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url() ?>/products/">products</a>
                            </li>
                            <li class="block">
                                <a class="hover:bg-royal text-royal py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url() ?>/singleproduct/">singleproduct</a>
                            </li>

                            <li class="block">
                                <a class="hover:bg-royal  text-royal py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo home_url() ?>/contact/">Contact</a>
                            </li>
                </ul>
             
            </div>
        </div>
    </div>

        <?php if (!is_front_page()) : ?>
            <!-- HOME -->
            <div class="cloud-header bg-black bg-transparent " style="background-image: url('https://images-na.ssl-images-amazon.com/images/I/714v6QkGEiL._AC_SL1500_.jpg'); background-color:#000;">
            <!-- <img class="absolute w-full h-full top-0 left-0 z-index-10" src="https://images-na.ssl-images-amazon.com/images/I/714v6QkGEiL._AC_SL1500_.jpg" alt=""> -->
          <div class="absolute bg-black opacity-75 w-full h-full top-0 left-0 z-index-20"></div>
                <div class="text-white  block " style="">

                    <ul id="scene" style="width:110%">
                        <li class="layer l1" data-depth="0.10"><img class="w-full" src="<?php echo get_template_directory_uri() ?>/assets/img/cloud/cloudd.png" alt=""></li>
                        <li class="layer l2" data-depth="0.15"><img src="<?php echo get_template_directory_uri() ?>/assets/img/cloud/cloud-2.png" alt=""></li>
                        <li class="layer l3" data-depth="0.17"><img src="<?php echo get_template_directory_uri() ?>/assets/img/cloud/cloud-2.png" alt=""></li>
                    </ul>
                </div>
            </div>
            <!-- <section class=" pt-32 lg:pt-40">
            <div class="container mx-auto px-5 mt-4 lg:mt-0">
                <div class="singlePageTitle relative pb-8">
                    <h1 class="text-3xl lg:text-5xl"><?php the_title(); ?></h1>

                </div>
            </div>
        </section> -->
        <?php endif; ?>
        <?php if (have_posts()) : ?>
            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>

        <!-- Footer -->
        <footer style="relative" class="bg-black text-gray-500 py-24 text-sm">
            <!-- START container -->
            <div class='container mx-auto px-4'>
                <!-- START grid grid-cols-4 -->
                <div class='grid grid-cols-1 lg:grid-cols-4 gap-6'>
                    <!-- START footer card  -->
                    <div>
                        <span class="pl-4 border-l-4 mb-4 block text-white font-semibold text-xl border-white">About Us</span>
                        <p class="text-gray-600">
                            Proin suscipit luctus orci placerat eat fringilla. Donec hendrerit laoreet risus volutpat mauris. Sed enim bibendum eu forest for ever
                        </p>
                    </div>
                    <!-- END Footer Card  -->
                    <!-- START footer card  -->
                    <div>
                        <span class="pl-4 border-l-4 mb-4 block text-white font-semibold text-xl border-white">Head Office</span>
                        <ul>
                            <li class="flex items-center mb-2">
                                <span class=" w-4 h-4 mr-2 inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </span> <span>
                                    1422 1st St. Santa Rosa,t CA, USA.
                                </span>
                            </li>
                            <li class="flex items-center  mb-2">
                                <span class=" w-4 h-4 mr-2 inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </span> <span>admin@e-mail.com </span>
                            </li>
                            <li class="flex items-center  mb-2">
                                <span class=" w-4 h-4 mr-2 inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                </span> <span>001- 01008431112 </span>
                            </li>
                        </ul>

                    </div>
                    <!-- END Footer Card  -->
                    <!-- START footer card  -->
                    <div>
                        <span class="pl-4 border-l-4 mb-4 block text-white font-semibold text-xl border-white">Links</span>
                        <ul>
                            <li class="flex items-center mb-2">
                                <a class="text-current hover:text-white" href="#">Home</a>
                            </li>
                            <li class="flex items-center mb-2">
                                <a class="text-current hover:text-white" href="#">Home</a>
                            </li>
                            <li class="flex items-center mb-2">
                                <a class="text-current hover:text-white" href="#">Home</a>
                            </li>

                        </ul>

                    </div>
                    <!-- END Footer Card  -->
                    <!-- START footer card  -->
                    <div>
                        <span class="pl-4 border-l-4 mb-4 block text-white font-semibold text-xl border-white">Instagram Feed</span>


                    </div>
                    <!-- END Footer Card  -->
                </div>
                <!-- END grid grid-cols-4 -->
            </div>
            <!-- END container -->

        </footer>
        <div class="bg-black">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-600 text-sm text-center sm:text-left">© 2020 MonaAlMoqdad —
                    <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" rel="noopener noreferrer" target="_blank">Inetwork-ME</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-600">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-600">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-600">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-600">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
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
    <script src="https://cdn.scaleflex.it/plugins/js-cloudimage-360-view/2/js-cloudimage-360-view.min.js"></script>
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
const callback = function (entries) {
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


targets.forEach(function (target) {
  target.classList.add("opacity-0");
  observer.observe(target);
});

</script>

<style>
.js-show-on-scroll:nth-child(1) {animation-delay: 100ms; }
.js-show-on-scroll:nth-child(2) {animation-delay: 300ms; }
.js-show-on-scroll:nth-child(3) {animation-delay: 500ms; }
.js-show-on-scroll:nth-child(4) {animation-delay: 700ms; }
.js-show-on-scroll:nth-child(5) {animation-delay: 900ms; }
.js-show-on-scroll:nth-child(6) {animation-delay: 1100ms; }
.js-show-on-scroll:nth-child(7) {animation-delay: 1300ms; }
.js-show-on-scroll:nth-child(8) {animation-delay: 1500ms; }
.js-show-on-scroll:nth-child(9) {animation-delay: 1700ms; }
.js-show-on-scroll:nth-child(10) {animation-delay: 1900ms; }
.js-show-on-scroll:nth-child(11) {animation-delay: 2100ms; }
.js-show-on-scroll:nth-child(12) {animation-delay: 2300ms; }

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