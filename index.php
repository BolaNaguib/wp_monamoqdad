<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body class="bg-black wrapper overflow-hidden ">

    <div class="banner relative h-screen">
        <h1 id="text"> MONAMOQDAD</h1>
        <div class="clouds">
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud1.png" style="--i:1;" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud2.png" style="--i:2;" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud3.png" style="--i:3;" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud4.png" style="--i:4;" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud5.png" style="--i:5;" alt=""> -->
            <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud1.png" style="--i:10;" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud2.png" style="--i:9;" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud3.png" style="--i:8;" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud4.png" style="--i:7;" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clouds/cloud5.png" style="--i:6;" alt=""> -->
            <img src="http://tavonline.net/html/cloud/Html/images/cloud-2.png" style="--i:2;" alt="">
            <img src="http://tavonline.net/html/cloud/Html/images/cloudd.png" style="--i:3;" alt="">

        </div>
    </div>

    <div class="h-screen relative">
        <div class="">
            <div data-relative-input="true" id="scene">
                <div data-depth="0.2">My first Layer!</div>
                <div data-depth="0.6">My second Layer!</div>
            </div>
            <!-- <div id="scene" data-relative-input="true">
                <div class="layer l1 " data-depth="0.5"><img src="http://tavonline.net/html/cloud/Html/images/cloudd.png" alt=""></div>
                <!-- <li class="layer l2" data-depth="0.15"><img src="http://tavonline.net/html/cloud/Html/images/cloud-2.png" alt=""></li>
                <li class="layer l3" data-depth="0.17"><img src="http://tavonline.net/html/cloud/Html/images/cloud-2.png" alt=""></li> --
        </div> -->
        </div>
    </div>

    <style>
        .banner .clouds {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .banner .clouds img {
            position: absolute;
            bottom: 0;
            max-width: 100%;
            animation: animate calc(10s * var(--i)) linear infinite;
        }

        @keyframes animate {
            0% {
                opacity: 1;
                transform: scale(1);
            }

            25%,
            75% {
                opacity: 1;
            }

            100% {
                opacity: 0;

                transform: scale(1.1);
            }
        }
    </style>

    <?php wp_footer() ?>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene, {
            relativeInput: true
        });
    </script>

</body>

</html>