<?php
$testimonials = [
    [
        "name" => "Arul Das",
        "location" => "Malaysia",
        "img" => "./img/info.png",
        "contact" => "+60 13-6362431",
        "audio" => "./uploads/Arul_Dos.opus",
        "text" => "Great service!"
    ],
    [
        "name" => "Krishnakumar",
        "location" => "Malaysia",
        "img" => "./img/info.png",
        "contact" => "+60 12-3694072",
        "audio" => "./uploads/Krishnakumar.opus",
        "text" => "Great service!"
    ],
   
];


?>





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
        <img src="./img/testimonials_banner.avif" class="w-full" alt="about Banner">
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
                                Testimonials
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

    </div>


    <!-- ==================== Testimonials Section ===================  -->
    <div class="py-16 bg-gray-50">
        <div class="px-4 mx-auto md:w-[80%] w-full sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold sm:text-4xl" data-aos="fade-up" data-aos-duration="1000">
                    What Users Are Saying
                </h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="300">
                    Hear from tools that have successfully listed on our platform
                </p>
            </div>



            <!-- Testimonial Cards Grid -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-aos="zoom-in" data-aos-duration="1500"
                data-aos-delay="200">
                <?php foreach ($testimonials as $t): ?>
                    <div
                        class="p-6 bg-white rounded-lg shadow-md transition-transform hover:shadow-lg hover:-translate-y-1">

                        <!-- Profile -->
                        <div class="flex items-start mb-4">
                            <div class="flex-shrink-0 mr-4">
                                <img class="w-12 h-12 rounded-full" src="<?= htmlspecialchars($t['img']) ?>"
                                    alt="Profile image" />
                            </div>
                            <div>
                                <h3 class="font-bold"><?= htmlspecialchars($t['name']) ?> <span class="font-normal text-sm text-gray-700">(<?= htmlspecialchars($t['location']) ?>)</span></h3>
                            </div>
                        </div>

                        <!-- Replace text with voice feedback -->
                        <?php if (!empty($t['audio'])): ?>
                            <audio controls class="w-full mt-2">
                                <source src="<?= htmlspecialchars($t['audio']) ?>" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        <?php else: ?>
                            <p class="text-gray-700 text-justify"><?= htmlspecialchars($t['text']) ?></p>
                        <?php endif; ?>

                        <!-- Contact -->
                        <div class="flex items-center mt-4 text-gray-500">
                            <?php if (!empty($t['contact'])): ?>
                                <span class="text-sm">Contact : <?= htmlspecialchars($t['contact']) ?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>




    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>