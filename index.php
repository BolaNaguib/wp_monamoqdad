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
    <!-- <link rel="stylesheet" href="http://tavonline.net/html/cloud/Html/css/bootstrap.min.css" /> -->
    <!-- <link rel="stylesheet" href="http://tavonline.net/html/cloud/Html/css/reset.min.css" /> -->
    <!-- <link rel="stylesheet" href="http://tavonline.net/html/cloud/Html/css/owl.theme.min.css" /> -->
    <!-- <link rel="stylesheet" href="http://tavonline.net/html/cloud/Html/css/owl.carousel.min.css" /> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/ss.css" />
    <link rel="stylesheet" href="http://tavonline.net/html/cloud/Html/css/color.min.css" id="color" />
    <!-- Google Web fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Font icons -->
    <link rel="stylesheet" href="http://tavonline.net/html/cloud/Html/icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="http://tavonline.net/html/cloud/Html/icon-fonts/web-design/flaticon.min.css" />
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
        <!-- HOME -->
        <div class="home type-2 bg-black bg-transparent " style="background-image: none; background-color:#000;">
            <div class="text-white  block mt-24" style="">
                <div class="container mx-auto mb-24">
                    <nav class="bg-white text-black rounded-full flex items-center justify-between px-6">
                        <div>Mona Al Moqdad</div>
                        <div>
                            <ul>
                                <li class="inline-block">
                                    <a class="hover:bg-gray-900 py-4 block px-4 hover:text-white transition duration-300 ease-in-out" href="#">HOME</a>
                                </li>
                                <li class="inline-block">
                                    <a class="hover:bg-gray-900 py-4 block px-4 hover:text-white transition duration-300 ease-in-out" href="#">HOME</a>
                                </li>
                                <li class="inline-block">
                                    <a class="hover:bg-gray-900 py-4 block px-4 hover:text-white transition duration-300 ease-in-out" href="#">HOME</a>
                                </li>
                                <li class="inline-block">
                                    <a class="hover:bg-gray-900 py-4 block px-4 hover:text-white transition duration-300 ease-in-out" href="#">HOME</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="container mx-auto flex justify-between items-center ">
                    <div>
                        <h1>Hello! <br />I'm <span class="element" data-text1="Mona Moqdad" data-text2="an Artist" data-text3="from Egypt" data-loop="true" data-backdelay="3500"></span></h1>
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                    </div>
                </div>
            </div>
            <ul id="scene" style="width:110%">
                <li class="layer l1" data-depth="0.10"><img src="http://tavonline.net/html/cloud/Html/images/cloudd.png" alt=""></li>
                <li class="layer l2" data-depth="0.15"><img src="http://tavonline.net/html/cloud/Html/images/cloud-2.png" alt=""></li>
                <li class="layer l3" data-depth="0.17"><img src="http://tavonline.net/html/cloud/Html/images/cloud-2.png" alt=""></li>
            </ul>
        </div>
        <!-- 360  -->
        <section class="py-24">
            <!-- START container mx-auto -->
            <div class='container mx-auto text-center'>
                <div class="block text-center">
                    <div class="cloudimage-360" data-folder="<?php echo get_template_directory_uri() ?>/assets/img/horse/" data-filename="Layer-{index}.png" data-amount="36"></div>
                    <h2>Arabian Horse</h2>
                    <a class="bg-black text-white py-4 px-6 inline-block mt-4" href="#">DETAILES</a>
                </div>

            </div>
            <!-- END container mx-auto -->
        </section>

        <!-- START productCategory -->
        <div class='productCategory relative bg-black'>
            <div class="absolute w-full h-full z-10 overflow-hidden">
                <img id="1" class="object-cover w-full bgonhover active transition duration-1000 ease-linear " src="https://i.pinimg.com/originals/86/3e/ef/863eef974d1011a0d3c7a2698591bb3e.jpg">
                <img id="2" class="object-cover w-full bgonhover  transition duration-1000 ease-linear" src="https://i.pinimg.com/originals/86/3e/ef/863eef974d1011a0d3c7a2698591bb3e.jpg">
                <img id="3" class="object-cover w-full bgonhover  transition duration-1000 ease-linear" src="https://i.pinimg.com/originals/86/3e/ef/863eef974d1011a0d3c7a2698591bb3e.jpg">
            </div>


            <!-- START container mx-auto -->
            <div class='container mx-auto relative z-20  py-64 '>
                <div class="grid grid-cols-3 gap-6 ">

                    <div data-id="1" class="test">
                        <a href="#"> hello </a>
                    </div>
                    <div data-id="2" class="test">
                        <a href="#"> hello </a>
                    </div>
                    <div data-id="3" class="test">
                        <a href="#"> hello </a>
                    </div>
                </div>
            </div>
            <!-- END container mx-auto -->
        </div>
        <!-- END productCategory -->

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
                <p class="text-gray-600 text-sm text-center sm:text-left">© 2020 Navico —
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

    <!-- Javascripts -->
    <script src="http://tavonline.net/html/cloud/Html/js/jquery-1.12.4.min.js"></script>
    <script src="http://tavonline.net/html/cloud/Html/js/main.min.js"></script>
    <script src="http://tavonline.net/html/cloud/Html/js/bootstrap.min.js"></script>
    <script src="http://tavonline.net/html/cloud/Html/js/parallax.min.js"></script>
    <script src="http://tavonline.net/html/cloud/Html/js/isotope.pkgd.min.js"></script>
    <script src="http://tavonline.net/html/cloud/Html/js/typed.min.js"></script>
    <script src="http://tavonline.net/html/cloud/Html/js/owl.carousel.min.js"></script>
    <!-- for color alternatives -->
    <script src="http://tavonline.net/html/cloud/Html/js/jquery.cookie-1.4.1.min.js"></script>
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

</body>


</html>