<?php echo $__env->make('components.link_home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if (isset($component)) { $__componentOriginal3e998df84aa2d7b51ebf4dfa01170474 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e998df84aa2d7b51ebf4dfa01170474 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.link_home','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('link_home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3e998df84aa2d7b51ebf4dfa01170474)): ?>
<?php $attributes = $__attributesOriginal3e998df84aa2d7b51ebf4dfa01170474; ?>
<?php unset($__attributesOriginal3e998df84aa2d7b51ebf4dfa01170474); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e998df84aa2d7b51ebf4dfa01170474)): ?>
<?php $component = $__componentOriginal3e998df84aa2d7b51ebf4dfa01170474; ?>
<?php unset($__componentOriginal3e998df84aa2d7b51ebf4dfa01170474); ?>
<?php endif; ?>

<body class="text-gray-700 pt-9 sm:pt-10">
   <!-- =========={ NAVBAR }==========  -->

  <?php if (isset($component)) { $__componentOriginalbfafbdc620c314bd0c060955d67eddb7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbfafbdc620c314bd0c060955d67eddb7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.navbar_home','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar_home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbfafbdc620c314bd0c060955d67eddb7)): ?>
<?php $attributes = $__attributesOriginalbfafbdc620c314bd0c060955d67eddb7; ?>
<?php unset($__attributesOriginalbfafbdc620c314bd0c060955d67eddb7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbfafbdc620c314bd0c060955d67eddb7)): ?>
<?php $component = $__componentOriginalbfafbdc620c314bd0c060955d67eddb7; ?>
<?php unset($__componentOriginalbfafbdc620c314bd0c060955d67eddb7); ?>
<?php endif; ?>
  
  <!-- =========={ MAIN }==========  -->
  <main id="content">
    <!-- advertisement -->
    <div class="bg-gray-50 py-4 hidden">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="mx-auto table text-center text-sm">
          <a class="uppercase" href="#">Advertisement</a>
          <a href="#">
            <img src="src/img/ads/ads_728.jpg" alt="advertisement area">
          </a>
        </div>
      </div>
    </div>

    <!-- hero big grid -->
    <div class="bg-white py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <!-- big grid 1 -->
        <div class="flex flex-row flex-wrap">
          <!--Start left cover-->
          <div class="flex-shrink max-w-full w-full lg:w-1/2 pb-1 lg:pb-0 lg:pr-1">
            <div class="relative hover-img max-h-98 overflow-hidden">
              <a href="#">
                <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img1.jpg" alt="Image description">
              </a>
              <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                <a href="#">
                  <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                </a>
                <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>
                <div class="pt-2">
                  <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe</div>
                </div>
              </div>
            </div>
          </div>

          <!--Start box news-->
          <div class="flex-shrink max-w-full w-full lg:w-1/2">
            <div class="box-one flex flex-row flex-wrap">
              <article class="flex-shrink max-w-full w-full sm:w-1/2">
                <div class="relative hover-img max-h-48 overflow-hidden">
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img2.jpg" alt="Image description">
                  </a>
                  <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                    <a href="#">
                      <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">News magazines are becoming obsolete, replaced by gadgets</h2>
                    </a>
                    <div class="pt-1">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Techno</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="flex-shrink max-w-full w-full sm:w-1/2">
                <div class="relative hover-img max-h-48 overflow-hidden">
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img3.jpg" alt="Image description">
                  </a>
                  <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                    <a href="#">
                      <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Minimalist designs are starting to be popular with the next generation</h2>
                    </a>
                    <div class="pt-1">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Architecture</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="flex-shrink max-w-full w-full sm:w-1/2">
                <div class="relative hover-img max-h-48 overflow-hidden">
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img4.jpg" alt="Image description">
                  </a>
                  <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                    <a href="#">
                      <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Tips for decorating the interior of the living room</h2>
                    </a>
                    <div class="pt-1">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Interior</div>
                    </div>
                  </div>
                </div>
              </article>
              <article class="flex-shrink max-w-full w-full sm:w-1/2">
                <div class="relative hover-img max-h-48 overflow-hidden">
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img5.jpg" alt="Image description">
                  </a>
                  <div class="absolute px-4 pt-7 pb-4 bottom-0 w-full bg-gradient-cover">
                    <a href="#">
                      <h2 class="text-lg font-bold capitalize leading-tight text-white mb-1">Online taxi users are increasing drastically ahead of the new year</h2>
                    </a>
                    <div class="pt-1">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Lifestyle</div>
                    </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-white">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- Left -->
          <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Europe
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img6.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img7.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img8.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img9.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img10.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img11.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- right -->
          <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
            <div class="w-full bg-gray-50 h-full">
              <div class="text-sm py-6 sticky">
                <div class="w-full text-center">
                  <a class="uppercase" href="#">Advertisement</a>
                  <a href="#">
                    <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- slider news -->
    <div class="relative bg-gray-50" style="background-image: url('src/img/bg.jpg');background-size: cover;background-position: center center;background-attachment: fixed">
      <div class="bg-black bg-opacity-70">
        <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
          <div class="flex flex-row flex-wrap">
            <div class="flex-shrink max-w-full w-full py-12 overflow-hidden">
              <div class="w-full py-3">
                <h2 class="text-white text-2xl font-bold text-shadow-black">
                  <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>American
                </h2>
              </div>
              <div id="post-carousel" class="splide post-carousel">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide">
                      <div class="w-full pb-3">
                        <div class="hover-img bg-white">
                          <a href="">
                            <img class="max-w-full w-full mx-auto" src="src/img/dummy/img14.jpg" alt="alt title">
                          </a>
                          <div class="py-3 px-6">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                              <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                            </h3>
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="w-full pb-3">
                        <div class="hover-img bg-white">
                          <a href="">
                            <img class="max-w-full w-full mx-auto" src="src/img/dummy/img15.jpg" alt="alt title">
                          </a>
                          <div class="py-3 px-6">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                              <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                            </h3>
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="w-full pb-3">
                        <div class="hover-img bg-white">
                          <a href="">
                            <img class="max-w-full w-full mx-auto" src="src/img/dummy/img16.jpg" alt="alt title">
                          </a>
                          <div class="py-3 px-6">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                              <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                            </h3>
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="w-full pb-3">
                        <div class="hover-img bg-white">
                          <a href="">
                            <img class="max-w-full w-full mx-auto" src="src/img/dummy/img17.jpg" alt="alt title">
                          </a>
                          <div class="py-3 px-6">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                              <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                            </h3>
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="w-full pb-3">
                        <div class="hover-img bg-white">
                          <a href="">
                            <img class="max-w-full w-full mx-auto" src="src/img/dummy/img18.jpg" alt="alt title">
                          </a>
                          <div class="py-3 px-6">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                              <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                            </h3>
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="splide__slide">
                      <div class="w-full pb-3">
                        <div class="hover-img bg-white">
                          <a href="">
                            <img class="max-w-full w-full mx-auto" src="src/img/dummy/img1.jpg" alt="alt title">
                          </a>
                          <div class="py-3 px-6">
                            <h3 class="text-lg font-bold leading-tight mb-2">
                              <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                            </h3>
                            <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-white py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <div class="flex-shrink max-w-full w-full overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Africa
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
              <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img19.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img20.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img21.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img22.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img23.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img24.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img25.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 lg:w-1/4 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img26.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-gray-50 py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- Left -->
          <div class="flex-shrink max-w-full w-full lg:w-2/3  overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Asian
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
              <div class="flex-shrink max-w-full w-full px-3 pb-5">
                <div class="relative hover-img max-h-98 overflow-hidden">
                  <!--thumbnail-->
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img2.jpg" alt="Image description">
                  </a>
                  <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                    <!--title-->
                    <a href="#">
                      <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                    </a>
                    <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>                                                  
                    <!-- author and date -->
                    <div class="pt-2">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img27.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img3.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img4.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img5.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img6.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img7.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- right -->
          <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 order-first lg:order-last">
            <div class="w-full bg-white">
              <div class="mb-6">
                <div class="p-4 bg-gray-100">
                  <h2 class="text-lg font-bold">Most Popular</h2>
                </div>
                <ul class="post-number">
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="text-sm py-6 sticky">
              <div class="w-full text-center">
                <a class="uppercase" href="#">Advertisement</a>
                <a href="#">
                  <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- block news -->
    <div class="bg-gray-50 py-6">
      <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
        <div class="flex flex-row flex-wrap">
          <!-- post -->
          <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden">
            <div class="w-full py-3">
              <h2 class="text-gray-800 text-2xl font-bold">
                <span class="inline-block h-5 border-l-3 border-red-600 mr-2"></span>Latest news
              </h2>
            </div>
            <div class="flex flex-row flex-wrap -mx-3">
              <div class="flex-shrink max-w-full w-full px-3 pb-5">
                <div class="relative hover-img max-h-98 overflow-hidden">
                  <!--thumbnail-->
                  <a href="#">
                    <img class="max-w-full w-full mx-auto h-auto" src="src/img/dummy/img15.jpg" alt="Image description">
                  </a>
                  <div class="absolute px-5 pt-8 pb-5 bottom-0 w-full bg-gradient-cover">
                    <!--title-->
                    <a href="#">
                      <h2 class="text-3xl font-bold capitalize text-white mb-3">Amazon Shoppers Are Ditching Designer Belts for This Best-Selling</h2>
                    </a>
                    <p class="text-gray-100 hidden sm:inline-block">This is a wider card with supporting text below as a natural lead-in to additional content. This very helpfull for generate default content..</p>                                                  
                    <!-- author and date -->
                    <div class="pt-2">
                      <div class="text-gray-100"><div class="inline-block h-3 border-l-2 border-red-600 mr-2"></div>Europe</div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img24.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img7.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img17.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img25.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img12.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
              <div class="flex-shrink max-w-full w-full sm:w-1/3 px-3 pb-3 pt-3 sm:pt-0 border-b-2 sm:border-b-0 border-dotted border-gray-100">
                <div class="flex flex-row sm:block hover-img">
                  <a href="">
                    <img class="max-w-full w-full mx-auto" src="src/img/dummy/img8.jpg" alt="alt title">
                  </a>
                  <div class="py-0 sm:py-3 pl-3 sm:pl-0">
                    <h3 class="text-lg font-bold leading-tight mb-2">
                      <a href="#">5 Tips to Save Money Booking Your Next Hotel Room</a>
                    </h3>
                    <p class="hidden md:block text-gray-600 leading-tight mb-1">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a class="text-gray-500" href="#"><span class="inline-block h-3 border-l-2 border-red-600 mr-2"></span>Europe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- sidebar -->
          <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pr-8 lg:pt-14 lg:pb-8 order-first">
            <div class="w-full bg-white">
              <div class="mb-6">
                <div class="p-4 bg-gray-100">
                  <h2 class="text-lg font-bold">Most Popular</h2>
                </div>
                <ul class="post-number">
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Why the world would end without political polls</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Meet The Man Who Designed The Ducati Monster</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">2020 Audi R8 Spyder spy shots release</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">Lamborghini makes Huracán GT3 racer faster for 2019</a>
                  </li>
                  <li class="border-b border-gray-100 hover:bg-gray-50">
                    <a class="text-lg font-bold px-6 py-3 flex flex-row items-center" href="#">ZF plans $14 billion autonomous vehicle push, concept van</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class="text-sm py-6 sticky">
              <div class="w-full text-center">
                <a class="uppercase" href="#">Advertisement</a>
                <a href="#">
                  <img class="mx-auto" src="src/img/ads/250.jpg" alt="advertisement area">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <!-- =========={ FOOTER }==========  -->

  <?php if (isset($component)) { $__componentOriginaldaf068f1b45624afdc481b12ba8422e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldaf068f1b45624afdc481b12ba8422e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer_home','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer_home'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldaf068f1b45624afdc481b12ba8422e4)): ?>
<?php $attributes = $__attributesOriginaldaf068f1b45624afdc481b12ba8422e4; ?>
<?php unset($__attributesOriginaldaf068f1b45624afdc481b12ba8422e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldaf068f1b45624afdc481b12ba8422e4)): ?>
<?php $component = $__componentOriginaldaf068f1b45624afdc481b12ba8422e4; ?>
<?php unset($__componentOriginaldaf068f1b45624afdc481b12ba8422e4); ?>
<?php endif; ?>


  <!-- =========={ SCROLL TO TOP }==========  -->
  <a href="#" class="back-top fixed p-4 rounded bg-gray-100 border border-gray-100 text-gray-500 dark:bg-gray-900 dark:border-gray-800 right-4 bottom-4 hidden" aria-label="Scroll To Top">
    <svg width="1rem" height="1rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v9a.5.5 0 01-1 0V4a.5.5 0 01.5-.5z" clip-rule="evenodd"></path>
      <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 01.708 0l3 3a.5.5 0 01-.708.708L8 3.707 5.354 6.354a.5.5 0 11-.708-.708l3-3z" clip-rule="evenodd"></path>
    </svg>
  </a>

  <!--Vendor js-->
  <script src="src/vendors/hc-sticky/dist/hc-sticky.js"></script>
  <script src="src/vendors/glightbox/dist/js/glightbox.min.js"></script>
  <script src="src/vendors/@splidejs/splide/dist/js/splide.min.js"></script>
  <script src="src/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js"></script>
  
  <!-- Start development js -->
  <script src="src/js/theme.js"></script>
  <!-- End development js -->

</body>
</html><?php /**PATH C:\Users\YouCode\Desktop\Team-A-News_Aggregator\Aggregator_App\resources\views/pages/home.blade.php ENDPATH**/ ?>