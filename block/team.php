<section class="fw py-24">
    <!-- START container -->
    <div class='container'>

        <!-- START text-center -->
        <div class='text-center mb-8'>
            <span class="text-secondary text-sm lg:text-base font-semibold">TEAM MEMBERS</span>
            <h2 class="font-bold text-2xl lg:text-4xl py-4">Meet With Our Leaders</h2>
            <div class="bottom-dots flex justify-center">
                <span class="dot line-dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <!-- END text-center -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="group cursor-pointer">
                    <div class="overflow-hidden relative" style="height: 350px; ">
                        <img class="transform object-cover  w-full scale-100 group-hover:scale-110 transition duration-500 ease-in-out " style=" height: 350px;" src="https://anvoy.scriptsbundle.com/wp-content/uploads/2020/01/a-350x350.png" alt="<?php echo $thumbnail['alt'] ?>" title="<?php echo $thumbnail['title'] ?>">
                        <div class="flex opacity-0 group-hover:opacity-100 transition duration-300 ease-in-out items-end absolute inset-0 m-4 p-8 justify-center text-white" style="background-color: #0000009e;">
                            <ul class="flex content-center">

                                <li>
                                    <a aria-label="Facebook" href="<?php echo $fb ?>" class="b-custom relative bg-secondary p-2 w-8 h-8 flex justify-center items-center mx-2   ">
                                        <svg style="max-height:15px; min-height:15px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-facebook-f fa-w-10">
                                            <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a aria-label="Instagram" href="<?php echo $ig ?>" class="b-custom relative bg-secondary p-2 w-8 h-8 flex justify-center items-center mx-2 ">
                                        <svg style="max-height:15px; min-height:15px; height: 100%;" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-instagram fa-w-14">
                                            <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" class=""></path>
                                        </svg>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="text-center py-4 ">
                        <span class="block font-bold  text-gray-900">David James</span>
                        <span class="block  text-gray-500 text-sm">Chief Executive Officer (CEO)</span>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <!-- END container -->
</section>