  <!-- START main service section -->
  <section class="fw py-24">
      <div class="container ">
          <!-- START text-center -->
          <div class='text-center mb-8'>
              <span class="text-secondary text-sm lg:text-base font-semibold">OUR SERVICES</span>
              <h2 class="font-bold text-2xl lg:text-4xl py-4">Main Services</h2>
              <div class="bottom-dots flex justify-center">
                  <span class="dot line-dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
              </div>
          </div>
          <!-- END text-center -->
          <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
              <?php for ($i = 0; $i < 4; $i++) : ?>
                  <div class=''>
                      <div class="grid grid-cols-1 lg:grid-cols-2 group">
                          <div class="transform group-hover:-translate-y-2 ">
                              <img class=" object-cover h-48 w-full" src="https://www.navico-eg.com/wp-content/uploads/2019/11/banner2-1024x512.jpg" alt="">
                          </div>
                          <div class="p-4 bg-gray-100 rounded group-hover:bg-gray-200">
                              <a class="block text-center font-semibold title-underline relative pb-4" href="#">
                                  Ocean Freight
                              </a>
                              <span class='block py-4'>
                                  Do eiusmod tempor incididunt ut labore et dolore magna
                              </span>
                              <div class='block text-center'>

                                  <a class='inline-block bg-secondary rounded-full px-4 py-2 text-white' href="#">
                                      Read More
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endfor; ?>
          </div>
      </div>
  </section>