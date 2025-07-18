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
                                Muthra
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

    </div>


    <!-- ======================= Video Grid Sections ===============  -->
    <div class="container max-w-[1200px] mx-auto md:p-4 p-2 grid grid-cols-1 md:grid-cols-2 gap-5">

        <!-- Video 1 -->
        <div class="bg-[whitesmoke] p-4" data-aos="zoom-in" data-aos-duration="1300">
            <h3 class="border-b font-semibold text-[18px] mb-2">Video 1 Title</h3>
            <div class="relative w-full pt-[56.25%]">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/VIDEO_ID_1?rel=0"
                    title="Video 1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <p class="mt-3"><strong>Summary:</strong> Description for video 1.</p>
        </div>

        <!-- Video 2 -->
        <div class="bg-[whitesmoke] p-4" data-aos="zoom-in" data-aos-duration="1300">
            <h3 class="border-b font-semibold text-[18px] mb-2">Video 2 Title</h3>
            <div class="relative w-full pt-[56.25%]">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/VIDEO_ID_2?rel=0"
                    title="Video 2" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <p class="mt-3"><strong>Summary:</strong> Description for video 2.</p>
        </div>

        <!-- Video 3 -->
        <div class="bg-[whitesmoke] p-4" data-aos="zoom-in" data-aos-duration="1300">
            <h3 class="border-b font-semibold text-[18px] mb-2">Video 3 Title</h3>
            <div class="relative w-full pt-[56.25%]">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/VIDEO_ID_3?rel=0"
                    title="Video 3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <p class="mt-3"><strong>Summary:</strong> Description for video 3.</p>
        </div>

        <!-- Video 4 -->
        <div class="bg-[whitesmoke] p-4" data-aos="zoom-in" data-aos-duration="1300">
            <h3 class="border-b font-semibold text-[18px] mb-2">Video 4 Title</h3>
            <div class="relative w-full pt-[56.25%]">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/VIDEO_ID_4?rel=0"
                    title="Video 4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <p class="mt-3"><strong>Summary:</strong> Description for video 4.</p>
        </div>

        <!-- Video 5 -->
        <div class="bg-[whitesmoke] p-4" data-aos="zoom-in" data-aos-duration="1300">
            <h3 class="border-b font-semibold text-[18px] mb-2">Video 5 Title</h3>
            <div class="relative w-full pt-[56.25%]">
                <iframe class="absolute top-0 left-0 w-full h-full" src="https://www.youtube.com/embed/VIDEO_ID_5?rel=0"
                    title="Video 5" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <p class="mt-3"><strong>Summary:</strong> Description for video 5.</p>
        </div>


    </div>
    <!-- END OF GRID -->



    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>