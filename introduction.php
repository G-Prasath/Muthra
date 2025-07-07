<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>

    <?php include_once './_templates/head.php'; ?>
</head>

<body>

    <?php include_once './_templates/navbar.php'; ?>


    <!-- =============== Intoducction Banner ================= -->
    <div class="relative w-full md:h-screen aspect-video overflow-hidden" data-aos="fade-down" data-aos-duration="1000">
        <img src="https://images.pexels.com/photos/6646918/pexels-photo-6646918.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop"
            class="w-full h-full" alt="about Banner">
        <div class="w-full h-full bg-black/30 z-20 absolute top-0 flex items-center justify-center">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="index.php"
                            class="text-white ml-1 inline-flex text-md font-bold text-gray-800 hover:underline md:ml-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="mr-3 h-5 w-5">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <span class="mx-2.5 text-white text-[18px]">/</span>
                            <span class="ml-1 text-md font-bold text-gray-800 hover:underline md:ml-2 text-white">
                                Introduction
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

    </div>


    <!-- ====================== Introduction Section ======================  -->
    <section class="pt-10 overflow-hidden bg-gray-50 dark:bg-gray-800 md:pt-0 sm:pt-16">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid items-center grid-cols-1 md:grid-cols-2">

                <div>
                    <h2 class="text-3xl font-bold leading-tight text-black dark:text-white sm:text-4xl lg:text-5xl" data-aos="fade-down" data-aos-duration="1000">Hey
                        👋 I
                        am
                        <br class="block sm:hidden" />John loan
                    </h2>
                    <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 dark:text-gray-300 md:mt-8" data-aos="fade-up" data-aos-duration="1000">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur cum voluptates unde neque
                        ut facilis, vitae et dicta tenetur laboriosam.
                    </p>

                    <p class="mt-4 text-xl text-gray-600 dark:text-gray-300 md:mt-8" data-aos="fade-up" data-aos-duration="1000">
                        <span class="relative inline-block">
                            <span
                                class="absolute inline-block w-full bottom-0.5 h-2 bg-yellow-300 dark:bg-gray-900"></span>
                            <span class="relative"> Have a question? </span>
                        </span>
                        <br class="block sm:hidden" />Ask me on <a href="contact_us.php" title=""
                            class="transition-all duration-200 text-sky-500 dark:text-sky-400 hover:text-sky-600 dark:hover:text-sky-500 hover:underline">Conatct
                            Us</a>
                    </p>
                </div>

                <div class="relative" data-aos="zoom-in" data-aos-duration="2000">
                    <img class="absolute inset-x-0 bottom-0 -mb-48 -translate-x-1/2 left-1/2"
                        src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg" alt="" />

                    <img class="relative w-full xl:mx-auto " src="./img/person.png" alt="" />
                </div>

            </div>
        </div>
    </section>


    <!-- ============================= Services Section =========================== -->
    <div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">

        <div class="border-b mb-5 flex justify-between text-sm" data-aos="fade-down" data-aos-duration="1000">
            <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
                <svg class="h-6 mr-3" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 455.005 455.005"
                    style="enable-background:new 0 0 455.005 455.005;" xml:space="preserve">
                    <g>
                        <path
                            d="M446.158,267.615c-5.622-3.103-12.756-2.421-19.574,1.871l-125.947,79.309c-3.505,2.208-4.557,6.838-2.35,10.343 c2.208,3.505,6.838,4.557,10.343,2.35l125.947-79.309c2.66-1.675,4.116-1.552,4.331-1.432c0.218,0.12,1.096,1.285,1.096,4.428 c0,8.449-6.271,19.809-13.42,24.311l-122.099,76.885c-6.492,4.088-12.427,5.212-16.284,3.084c-3.856-2.129-6.067-7.75-6.067-15.423 c0-19.438,13.896-44.61,30.345-54.967l139.023-87.542c2.181-1.373,3.503-3.77,3.503-6.347s-1.323-4.974-3.503-6.347L184.368,50.615 c-2.442-1.538-5.551-1.538-7.993,0L35.66,139.223C15.664,151.815,0,180.188,0,203.818v4c0,23.63,15.664,52.004,35.66,64.595 l209.292,131.791c3.505,2.207,8.136,1.154,10.343-2.35c2.207-3.505,1.155-8.136-2.35-10.343L43.653,259.72 C28.121,249.941,15,226.172,15,207.818v-4c0-18.354,13.121-42.122,28.653-51.902l136.718-86.091l253.059,159.35l-128.944,81.196 c-20.945,13.189-37.352,42.909-37.352,67.661c0,13.495,4.907,23.636,13.818,28.555c3.579,1.976,7.526,2.956,11.709,2.956 c6.231,0,12.985-2.176,19.817-6.479l122.099-76.885c11.455-7.213,20.427-23.467,20.427-37.004 C455.004,277.119,451.78,270.719,446.158,267.615z">
                        </path>
                        <path
                            d="M353.664,232.676c2.492,0,4.928-1.241,6.354-3.504c2.207-3.505,1.155-8.136-2.35-10.343l-173.3-109.126 c-3.506-2.207-8.136-1.154-10.343,2.35c-2.207,3.505-1.155,8.136,2.35,10.343l173.3,109.126 C350.916,232.303,352.298,232.676,353.664,232.676z">
                        </path>
                        <path
                            d="M323.68,252.58c2.497,0,4.938-1.246,6.361-3.517c2.201-3.509,1.14-8.138-2.37-10.338L254.46,192.82 c-3.511-2.202-8.139-1.139-10.338,2.37c-2.201,3.51-1.14,8.138,2.37,10.338l73.211,45.905 C320.941,252.21,322.318,252.58,323.68,252.58z">
                        </path>
                        <path
                            d="M223.903,212.559c-3.513-2.194-8.14-1.124-10.334,2.39c-2.194,3.514-1.124,8.14,2.39,10.334l73.773,46.062 c1.236,0.771,2.608,1.139,3.965,1.139c2.501,0,4.947-1.251,6.369-3.529c2.194-3.514,1.124-8.14-2.39-10.334L223.903,212.559z">
                        </path>
                        <path
                            d="M145.209,129.33l-62.33,39.254c-2.187,1.377-3.511,3.783-3.503,6.368s1.345,4.983,3.54,6.348l74.335,46.219 c1.213,0.754,2.586,1.131,3.96,1.131c1.417,0,2.833-0.401,4.071-1.201l16.556-10.7c3.479-2.249,4.476-6.891,2.228-10.37 c-2.248-3.479-6.891-4.475-10.37-2.228l-12.562,8.119l-60.119-37.38l48.2-30.355l59.244,37.147l-6.907,4.464 c-3.479,2.249-4.476,6.891-2.228,10.37c2.249,3.479,6.894,4.476,10.37,2.228l16.8-10.859c2.153-1.392,3.446-3.787,3.429-6.351 c-0.018-2.563-1.344-4.94-3.516-6.302l-73.218-45.909C150.749,127.792,147.647,127.795,145.209,129.33z">
                        </path>
                        <path
                            d="M270.089,288.846c2.187-3.518,1.109-8.142-2.409-10.329l-74.337-46.221c-3.518-2.188-8.143-1.109-10.329,2.409 c-2.187,3.518-1.109,8.142,2.409,10.329l74.337,46.221c1.232,0.767,2.601,1.132,3.953,1.132 C266.219,292.387,268.669,291.131,270.089,288.846z">
                        </path>
                        <path
                            d="M53.527,192.864c-2.187,3.518-1.109,8.142,2.409,10.329l183.478,114.081c1.232,0.767,2.601,1.132,3.953,1.132 c2.506,0,4.956-1.256,6.376-3.541c2.187-3.518,1.109-8.142-2.409-10.329L63.856,190.455 C60.338,188.266,55.714,189.346,53.527,192.864z">
                        </path>
                    </g>
                </svg>
                <a href="javascript:;" class="font-semibold inline-block">Services</a>
            </div>
        </div>


        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">

            <!-- CARD 1 -->
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <div class="relative">
                    <img class="w-full"
                        src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                        alt="Sunset in the mountains"
                        data-aos="zoom-in" data-aos-duration="2000">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </div>
                <div class="px-6 py-4 mb-auto">
                    <a href="javascript:;"
                        class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2" data-aos="fade-up" data-aos-duration="1000">Lorem
                        Ipsum</a>
                    <p class="text-gray-500 text-sm text-justify" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                </div>
            </div>



            <!-- CARD 2 -->
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <div class="relative">
                    <img class="w-full"
                        src="https://images.pexels.com/photos/1600727/pexels-photo-1600727.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                        alt="Sunset in the mountains"
                        data-aos="zoom-in" data-aos-duration="2000">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </div>
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2" data-aos="fade-up" data-aos-duration="1000">Lorem
                        ipsum</a>
                    <p class="text-gray-500 text-sm text-justify" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                        dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">

                </div>
            </div>



            <!-- CARD 3 -->
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <div class="relative">
                    <img class="w-full"
                        src="https://images.pexels.com/photos/6086/food-salad-healthy-vegetables.jpg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                        alt="Sunset in the mountains"
                        data-aos="zoom-in" data-aos-duration="2000">
                    <div
                        class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                    </div>
                </div>
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                        class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2" data-aos="fade-up" data-aos-duration="1000">Lorem
                        ipsum</a>
                    <p class="text-gray-500 text-sm text-jsustify" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                </div>
            </div>

        </div>

    </div>


    <!-- ============================ Books Gallery =========================== -->
    <div>
        <div class="text-center py-4 mb-4" data-aos="fade-down" data-aos-duration="1000">
            <h2 class="font-semibold text-3xl" data-aos="fade-down" data-aos-duration="1000">Our Books</h2>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:px-16 px-3 pb-16">

            <div class="group cursor-pointer relative" data-aos="zoom-in" data-aos-duration="1300">
                <img src="https://images.unsplash.com/photo-1470071459604-3b5ec3a7fe05?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw1fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">

                </div>
            </div>

            <div class="group cursor-pointer relative" data-aos="zoom-in" data-aos-duration="1300">
                <img src="https://images.unsplash.com/photo-1441974231531-c6227db76b6e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw5fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">

                </div>
            </div>

            <div class="group cursor-pointer relative" data-aos="zoom-in" data-aos-duration="1300">
                <img src="https://images.unsplash.com/photo-1501854140801-50d01698950b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">

                </div>
            </div>

            <div class="group cursor-pointer relative" data-aos="zoom-in" data-aos-duration="1300">
                <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">

                </div>
            </div>

            <div class="group cursor-pointer relative" data-aos="zoom-in" data-aos-duration="1300">
                <img src="https://images.unsplash.com/photo-1505765050516-f72dcac9c60e?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxNHx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">

                </div>
            </div>

            <div class="group cursor-pointer relative" data-aos="zoom-in" data-aos-duration="1300">
                <img src="https://images.unsplash.com/photo-1475924156734-496f6cac6ec1?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMXx8bmF0dXJlfGVufDB8MHx8fDE2OTQwOTk3Mjl8MA&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">

                </div>
            </div>

            <div class="group cursor-pointer relative" data-aos="zoom-in" data-aos-duration="1300">
                <img src="https://images.unsplash.com/photo-1465146344425-f00d5f5c8f07?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHw0fHxuYXR1cmV8ZW58MHwwfHx8MTY5NDA5OTcyOXww&ixlib=rb-4.0.3&q=80&w=1080"
                    alt="Image 1"
                    class="w-full h-48 object-cover rounded-lg transition-transform transform scale-100 group-hover:scale-105" />
                <div
                    class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">

                </div>
            </div>
        </div>
    </div>


    <!-- ============================ Certificate Section =========================== -->
    <div>
         <div class="text-center py-4 mb-4">
            <h2 class="font-semibold text-3xl" data-aos="fade-down" data-aos-duration="1000">Our Certifications</h2>
        </div>
        <div class="flex flex-wrap justify-center gap-4 p-4 mb-16">

            <div class="flex justify-center items-center border h-32 w-48 bg-blue-100" data-aos="zoom-in" data-aos-duration="1300">
                <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688025668.png"
                    alt="Gallery image" />
            </div>

            <div class="flex justify-center items-center border h-32 w-48 bg-blue-100" data-aos="zoom-in" data-aos-duration="1300">
                <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029344.png"
                    alt="Gallery image" />
            </div>

            <div class="flex justify-center items-center border h-32 w-48 bg-blue-100" data-aos="zoom-in" data-aos-duration="1300">
                <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029370.png"
                    alt="Gallery image" />
            </div>

            <div class="flex justify-center items-center border h-32 w-48 bg-blue-100" data-aos="zoom-in" data-aos-duration="1300">
                <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029384.png"
                    alt="Gallery image" />
            </div>

            <div class="flex justify-center items-center border h-32 w-48 bg-blue-100" data-aos="zoom-in" data-aos-duration="1300">
                <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029394.png"
                    alt="Gallery image" />
            </div>

            <div class="flex justify-center items-center border h-32 w-48 bg-blue-100" data-aos="zoom-in" data-aos-duration="1300">
                <img class="h-auto max-w-full rounded-lg" src="https://pagedone.io/asset/uploads/1688029408.png"
                    alt="Gallery image" />
            </div>

        </div>
    </div>






    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>