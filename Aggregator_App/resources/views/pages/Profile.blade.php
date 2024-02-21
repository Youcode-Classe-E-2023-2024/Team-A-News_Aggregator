@include('components.link_home')
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
<x-link_home />
<style>
   :root {
       --main-color: #4a76a8;
   }

   .bg-main-color {
       background-color: var(--main-color);
   }

   .text-main-color {
       color: var(--main-color);
   }

   .border-main-color {
       border-color: var(--main-color);
   }
</style>

<body class="text-gray-700 pt-9 sm:pt-10">
   <!-- =========={ NAVBAR }==========  -->



   <header class="fixed top-0 left-0 right-0 z-50">
      <nav class="bg-black">
         <div class="xl:container mx-auto px-3 sm:px-4 xl:px-2">
           <div class="flex justify-between">
             <div class="mx-w-10 text-2xl font-bold capitalize text-white flex items-center">News</div>
             
             <div class="flex flex-row">
               <!-- nav menu -->
               <ul class="navbar hidden lg:flex lg:flex-row text-gray-400 text-sm items-center font-bold">
                 <li class="active relative border-l border-gray-800 hover:bg-gray-900">
                   <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Home</a>
                 </li>
                 <li class="relative border-l border-gray-800 hover:bg-gray-900">
                   <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Techno</a>
                 </li>
                 <li class="relative border-l border-gray-800 hover:bg-gray-900">
                   <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Worklife</a>
                 </li>
                 <li class="relative border-l border-gray-800 hover:bg-gray-900">
                   <a class="block py-3 px-6 border-b-2 border-transparent" href="#">Future</a>
                 </li>
                 <li class="relative border-l border-gray-800 hover:bg-gray-900">
                   <a class="block py-3 px-6 border-b-2 border-transparent" href="#">More</a>
                 </li>
               </ul>
  
               <!-- search form & mobile nav -->
               <div class="flex flex-row items-center text-gray-300">
                 <div class="search-dropdown relative border-r lg:border-l border-gray-800 hover:bg-gray-900">
                   <button class="block py-3 px-6 border-b-2 border-transparent">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="open bi bi-search" viewBox="0 0 16 16">
                       <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                     </svg>
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="close bi bi-x-lg" viewBox="0 0 16 16">
                       <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                       <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                     </svg>
                   </button>
                   <div class="dropdown-menu absolute left-auto right-0 top-full z-50 text-left bg-white text-gray-700 border border-gray-100 mt-1 p-3" style="min-width: 15rem;">
                     <div class="flex flex-wrap items-stretch w-full relative">
                       <input type="text" class="flex-shrink flex-grow flex-shrink max-w-full leading-5 w-px flex-1 relative py-2 px-5 text-gray-800 bg-white border border-gray-300 overflow-x-auto focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="text" placeholder="Search..." aria-label="search">
                       <div class="flex -mr-px">
                         <button class="flex items-center py-2 px-5 -ml-1 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0" type="submit">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                             <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                           </svg>
                         </button>
                       </div>
                     </div>
                   </div>
                 </div>
  
                 <div class="relative hover:bg-gray-800 block lg:hidden">
                   <button type="button" class="menu-mobile block py-3 px-6 border-b-2 border-transparent">
                     <span class="sr-only">Mobile menu</span>
                     <svg class="inline-block h-6 w-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                       <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                     </svg> Menu
                   </button>
                 </div>
               </div>
             </div>
           </div>
         </div>
      </nav>
   </header>
     <!-- Mobile menu -->
     <div class="side-area fixed w-full h-full inset-0 z-50">
      <!-- bg open -->
      <div class="back-menu fixed bg-gray-900 bg-opacity-70 w-full h-full inset-x-0 top-0">
        <div class="cursor-pointer text-white absolute right-64 p-2">
          <svg class="bi bi-x" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
            <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"></path>
          </svg>
        </div>
      </div>
  
      <!-- Mobile navbar -->
      <nav id="mobile-nav" class="side-menu flex flex-col right-0 w-64 fixed top-0 bg-white dark:bg-gray-800 h-full overflow-auto z-40">
        <div class="mb-auto">
          <!--navigation-->
          <nav class="relative flex flex-wrap">
            <div class="text-center py-4 w-full font-bold border-b border-gray-100">TAILNEWS</div>
            <ul id="side-menu" class="w-full float-none flex flex-col">
              <li class="relative">
                <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Home</a>
              </li>
  
              <!-- dropdown with submenu-->
              <li class="dropdown relative">
                <a class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="javascript:;">
                  News
                </a>
  
                <!-- dropdown menu -->
                <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800 mb-4" style="min-width: 12rem">
                  <!--submenu-->
                  <li class="subdropdown relative">
                    <a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="javascript:;">
                      Dropdown item
                    </a>
  
                    <!--dropdown submenu-->
                    <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800" style="min-width: 12rem">
                      <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                      <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                      <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                      <li><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                    </ul>
                  </li><!--end submenu-->
                  <li class="relative"><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown item</a></li>
                  <li class="relative"><a class="block w-full py-2 px-5 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown item</a></li>
                </ul>
              </li>
  
              <li class="relative">
                <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Sport</a>
              </li>
  
              <li class="relative">
                <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Travel</a>
              </li>
  
              <li class="relative">
                <a href="#" class="block py-2 px-5 border-b border-gray-100 hover:bg-gray-50">Techno</a>
              </li>

            </ul>
          </nav>
        </div>
        <!-- copyright -->
        <div class="py-4 px-6 text-sm mt-6 text-center">
          <p>Copyright <a href="#">Tailnews</a> - All right reserved</p>
        </div>
      </nav>
    </div><!-- End Mobile menu -->


<main id="content">

    <!-- End of Navbar -->

    <div class=" mx-auto my-5 p-5">
        <div class="md:flex no-wrap md:-mx-2 ">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
                <!-- Profile Card -->
                <div class="bg-white p-3 border-t-4 border-black">
                    <div class="image overflow-hidden">
                        <img class="h-auto w-full mx-auto"
                            src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                            alt="">
                    </div>

                    <div class="flex items-center">
                     <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" alt="Profile image of Jane Doe" class="rounded-full w-10 h-10 mr-4">
                     <h1 class="text-gray-900 font-bold text-xl leading-8 my-1">Jane Doe</h1>
                   </div>
                   
                    <h3 class="text-gray-600 font-lg text-semibold leading-6">Owner at Her Company Inc.</h3>
                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6">Lorem ipsum dolor sit amet
                        consectetur adipisicing elit.
                        Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                    <ul
                        class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                        <li class="flex items-center py-3">
                            <span>Status</span>
                            <span class="ml-auto"><span
                                    class="bg-green-500 py-1 px-2 rounded text-white text-sm">Active</span></span>
                        </li>
                       
                    </ul>
                </div>
                <!-- End of profile card -->
                <div class="my-4"></div>
                <!-- Friends card -->
                <div class="bg-white p-3 hover:shadow border border-gray-300">
                    <div class="flex items-center space-x-3 font-semibold text-gray-900 text-xl leading-8">
                        <span class="text-green-500">
                            <svg class="h-5 fill-current" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </span>
                        <span>Category</span>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://cdn.australianageingagenda.com.au/wp-content/uploads/2015/06/28085920/Phil-Beckett-2-e1435107243361.jpg"
                                alt="">
                            <a href="#" class="text-main-color">Kojstantin</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://avatars2.githubusercontent.com/u/24622175?s=60&amp;v=4"
                                alt="">
                            <a href="#" class="text-main-color">James</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg"
                                alt="">
                            <a href="#" class="text-main-color">Natie</a>
                        </div>
                        <div class="text-center my-2">
                            <img class="h-16 w-16 rounded-full mx-auto"
                                src="https://bucketeer-e05bbc84-baa3-437e-9518-adb32be77984.s3.amazonaws.com/public/images/f04b52da-12f2-449f-b90c-5e4d5e2b1469_361x361.png"
                                alt="">
                            <a href="#" class="text-main-color">Casey</a>
                        </div>
                    </div>
                </div>
                <!-- End of friends card -->
            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm border border-gray-300">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </span>
                        <span class="tracking-wide">About</span>
                    </div>
                    <div class="text-gray-700">
                        <div class="grid md:grid-cols-2 text-sm">
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">First Name</div>
                                <input type="text" value="Jane" class="px-4 py-2">
                            </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Last Name</div>
                                <input type="text" value="Doe" class="px-4 py-2">
                            </div>

                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Email.</div>
                                <div class="px-4 py-2">
                                    <a class="text-blue-800" href="#">jane@example.com</a>
                                </div>
                                
                            </div>
                            <div class="grid grid-cols-2">
                              <div class="px-4 py-2 font-semibold">Password</div>
                              <input type="password" class="px-2 py-2" value="12345">
                          </div>
                            <div class="grid grid-cols-2">
                                <div class="px-4 py-2 font-semibold">Date account</div>
                                <div class="px-4 py-2">Feb 06, 1998</div>
                            </div>
                        </div>
                    </div>
                    <button
                        class="block w-full text-blue-800 text-sm font-semibold rounded-lg hover:bg-gray-100 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Save</button>
                </div>
                <!-- End of about section -->

                <div class="my-4"></div>

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm border border-gray-300">

                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Experience</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">Education</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Masters Degree in Oxford</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
            </div>
        </div>
    </div>

</main>

<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
  <!-- =========={ FOOTER }==========  -->

  <x-footer_home />