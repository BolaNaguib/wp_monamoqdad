<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body class="bg-black homer type-2">
    <div class="h-screen relative">
        <ul id="scene">
            <li class="layer l1" data-depth="0.10"><img src="http://tavonline.net/html/cloud/Html/images/cloudd.png" alt=""></li>
            <li class="layer l2" data-depth="0.15"><img src="http://tavonline.net/html/cloud/Html/images/cloud-2.png" alt=""></li>
            <li class="layer l3" data-depth="0.17"><img src="http://tavonline.net/html/cloud/Html/images/cloud-2.png" alt=""></li>
        </ul>
    </div>
    <!-- <div class="overflow-hidden h-screen">
        <div id="scene" class="text-white">
            <div class="absolute" style="left: 100px; top:100px" data-depth="0.2">My first Layer!</div>
            <!-- <div data-depth="0.2">My second Layer!</div> -->
    </div>
    </div> -->

    <?php wp_footer(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script>
        // var scene = document.getElementById('scene');
        // new Parallax(scene);
    </script>



    <style>
        html {
            scroll-behavior: smooth;
        }

        /* .home.type-2 {
            width: 100%;
            display: table;
            position: relative;
            z-index: -1;
            overflow: hidden;
        }

        #scene .l2,
        #scene .l3 img {
            margin-top: 100px
        }
*/
        #scene {
            bottom: 0;
            left: 0;
            position: absolute;
            margin-bottom: -10px;
            z-index: 100
        }

        .cloud-header,
        .cloud-header.full-nav,
        .home.agency {
            overflow: hidden;
            top: 0;
            width: 100%;
            display: table;
            z-index: -1;
            position: relative
        }

        #scene .l1 {
            position: absolute;
            margin-left: -399px
        }

        #scene .l3 img {
            margin-left: 181%
        }

        #scene .l4 img {
            margin-left: 291%;
            margin-top: -310px
        }

        */
    </style>
</body>

</html>