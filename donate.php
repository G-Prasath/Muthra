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

    <!-- =============== About us Banner ================= -->
    <div class="relative w-full mx-auto overflow-hidden" data-aos="fade-down" data-aos-duration="1000">
        <img src="./img/intro-banner.avif" class="w-full" alt="about Banner">
        <div class="w-full h-full bg-black/30 z-20 absolute top-0 flex items-center justify-center">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="index.php"
                            class="text-white ml-1 inline-flex md:text-md text-sm font-bold text-gray-800 hover:underline md:ml-2">
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
                            <span
                                class="ml-1 md:text-md text-sm font-bold text-gray-800 hover:underline md:ml-2 text-white">
                                Donate
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

    </div>



    <!-- ======================= Donate Section ==================   -->
    <div class="md:px-[15%] px-4 py-16 ">
        <div>
            <h2 class="text-xl font-bold tracki text-center mt-4 sm:text-3xl" data-aos="fade-up" data-aos-duration="1000">Offline Contribute</h2>
        </div>
        <div class="mt-12 space-y-12 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8">
            <div
                class="relative p-8  border border-gray-200 rounded-2xl shadow-md hover:shadow-xl flex flex-col border-2 border-emerald-500" data-aos="zoom-in" data-aos-duration="2500">
                <div class="flex-1">
                    <p class="mt-4 flex items-baseline ">
                        <span class="text-2xl font-extrabold font-normal tracking-tight">DD and Cheque</span>
                    </p>
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="flex-shrink-0 w-6 h-6 text-emerald-500" aria-hidden="true">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg><span class="ml-3 ">You can donate through cheque or DD using the given
                                address.</span></li>
                        <li class="flex"><span class="ml-3 ">Addres Line 1</span></li>
                        <li class="flex"><span class="ml-3 ">Addres Line 2</span></li>
                        <li class="flex"><span class="ml-3 ">Addres Line 3</span></li>

                        <!-- <li class="flex"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="flex-shrink-0 w-6 h-6 text-emerald-500" aria-hidden="true">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg><span class="ml-3 ">Quizz (1 credits) </span></li> -->
                    </ul>
                </div>
            </div>

            <div
                class="relative p-8  border border-gray-200 rounded-2xl shadow-md hover:shadow-xl flex flex-col border-2 border-emerald-500" data-aos="zoom-in" data-aos-duration="2500" data-aos-delay="500">
                <div class="flex-1">
                    <p class="mt-4 flex items-baseline ">
                        <span class="text-2xl font-normal tracking-tight">Account Number</span>
                    </p>
                    <ul role="list" class="mt-6 space-y-6">
                        <li class="flex"><span class="ml-3 ">Name : </span></li>
                        <li class="flex"><span class="ml-3 ">Bank : </span></li>
                        <li class="flex"><span class="ml-3 ">A/C No : </span></li>
                        <li class="flex"><span class="ml-3 ">IFCS Code : </span></li>
                        <li class="flex"><span class="ml-3 ">Address : </span></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>


    <!-- ========================= Thank You Section =========================  -->
    <div>
        <div class="flex justify-center items-center mb-16">
            <div class="md:w-1/2 w-full shadow-xl rounded-2xl md:p-10 p-4 border">
                <div class="flex justify-around gap-11 items-center md:flex-row flex-col">
                    <div data-aos="zoom-in" data-aos-duration="1500">
                        <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwxMnx8cHJvZmlsZXxlbnwwfDB8fHwxNzA2NzQ5NjEyfDA&ixlib=rb-4.0.3&q=80&w=1080"
                            alt="" class="rounded-2xl">
                    </div>
                    <div>
                        <h5 class=" font-medium mb-3 md:text-3xl text-xl" data-aos="fade-up" data-aos-duration="1000">Thank For Donation</h5>
                        <p class="md:font-normal font-thin text-justify text-sm" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, deserunt nobis. Similique ducimus pariatur ad. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore corporis ea minus voluptate deleniti. Debitis qui accusantium iure ea commodi?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>