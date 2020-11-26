<!doctype html>
<html lang="en">

<head>
    <?php wp_head() ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (!is_front_page()) : ?>
        <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php else : ?>
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description') ?></title>

    <?php endif; ?>
    <?php $favicon = get_field('favicon', 'options') ?>
    <meta name="title" content=" <?php the_field('meta_title'); ?> " />
    <meta name="keywords" content=" <?php the_field('meta_keywords'); ?> " />
    <meta name="description" content=" <?php the_field('meta_description'); ?> " />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $favicon['url'] ?>" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/ss.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/extra/color.min.css" id="color" />
    <!-- Google Web fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Xanh+Mono&display=swap" rel="stylesheet">
    <!-- Font icons -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/extra/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/extra/flaticon.min.css" />
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<?php
$logo = get_field('logo', 'options');
$url = home_url('/');
?>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="102105988329631"
  theme_color="#7d0121">
      </div>
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
                        <a href="<?php echo $url ?>">
                        <img class=" h-24  mr-4" src="<?php echo $logo['url']; ?>"
                         alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title'] ?>">
                                                </a>

                            <!-- <img class=" h-24  mr-4" style='filter: brightness(1);' src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""> -->
                        </span></div>
                    <div>
                        <ul class='lg:block hidden'>
                        <?php if (have_rows('menu', 'options')) : ?>
                                <?php while (have_rows('menu', 'options')) : the_row();
                                    //ACF Fields
                                    $page_title = get_sub_field('page_title');
                                    $page_link = get_sub_field('page_link');

                                ?>
                            <li class="inline-block hoverMenu  transition duration-300 ease-in-out">
                                <a class="hover:bg-royal text-white py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo $page_link ?>"><?php echo $page_title ?></a>
                                <?php if (have_rows('sub_menu')) : ?>
                                            <div class="absolute showme  transition duration-300 ease-in-out">
                                                <div class=" shadow overflow-hidden">
                                                    <div class="z-20 bg-royal">
                                                        <?php while (have_rows('sub_menu')) : the_row();
                                                            //ACF Fields
                                                            $page_title = get_sub_field('page_title');
                                                            $page_link = get_sub_field('page_link');

                                                        ?>
                                                            <a href="<?php echo $page_link ?>" . class="text-sm block px-4 py-2 text-white hover:bg-white hover:text-royal transition duration-300 ease-out"><?php echo $page_title ?></a>

                                                        <?php endwhile; ?>
                                                    </div>

                                                </div>
                                            </div>

                                        <?php endif; ?>

                            </li>
                                <?php  endwhile;endif; ?>
                            
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
                    <?php if (have_rows('menu', 'options')) : ?>
                                <?php while (have_rows('menu', 'options')) : the_row();
                                    //ACF Fields
                                    $page_title = get_sub_field('page_title');
                                    $page_link = get_sub_field('page_link');

                                ?>
                        <li class="block">
                            <a class="hover:bg-royal text-royal py-4 block px-4 text-sm hover:text-white transition duration-300 ease-in-out" href="<?php echo $page_link ?>"><?php echo $page_title ?></a>
                            

                        </li>
                                                        <?php  endwhile;endif; ?>
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