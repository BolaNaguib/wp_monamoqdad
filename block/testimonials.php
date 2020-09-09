<section class="fw py-24 bg-gray-100">
    <!-- START container -->
    <div class='container'>

        <!-- START text-center -->
        <div class='text-center mb-8'>
            <span class="text-secondary text-sm lg:text-base font-semibold">OUR TRUST</span>
            <h2 class="font-bold text-2xl lg:text-4xl py-4">Feedback From Our Clients</h2>
            <div class="bottom-dots flex justify-center">
                <span class="dot line-dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <!-- END text-center -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-0">
            <?php for ($i = 0; $i < 6; $i++) : ?>
                <div class="relative bg-white border p-6 lg:p-12 relative z-0 transform hover:scale-105 hover:z-10 hover:rounded hover:shadow-lg transition duration-300 ease-in-out">
                    <div class="text-left ">
                        <a class="inline-flex items-center">
                            <img alt="blog" src="https://anvoy.scriptsbundle.com/wp-content/uploads/2020/01/022.jpg" class="w-16 h-16 rounded-full flex-shrink-0 object-cover object-center">
                            <span class="flex-grow flex flex-col pl-4">
                                <span class="title-font font-bold text-gray-900">Holden Caulfield</span>
                                <span class="text-gray-500 text-sm">UI DEVELOPER</span>
                            </span>
                        </a>
                        <p>
                            They have got my project on time with the competition with a highly skilled, well-organized experienced team of professional Engineers well document.
                        </p>
                    </div>
                    <div class=" h-24 absolute right-0 bottom-0 mr-8 z-10 mb-8 opacity-25 text-secondary ">
                        <svg class="h-full fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="quote-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-quote-left fa-w-16">
                            <path fill="currentColor" d="M464 256h-80v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8c-88.4 0-160 71.6-160 160v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48zm-288 0H96v-64c0-35.3 28.7-64 64-64h8c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24h-8C71.6 32 0 103.6 0 192v240c0 26.5 21.5 48 48 48h128c26.5 0 48-21.5 48-48V304c0-26.5-21.5-48-48-48z" class=""></path>
                        </svg>
                    </div>

                </div>
            <?php endfor; ?>
        </div>
    </div>
    <!-- END container -->
</section>