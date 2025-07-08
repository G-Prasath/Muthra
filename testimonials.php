<?php
$testimonials = [
    [
        "img" => "https://randomuser.me/api/portraits/women/6.jpg",
        "name" => "SynthGen AI",
        "text" => "Listing on EliteAI.tools gave us a 40% boost in signups! The quality of traffic is incredible - these are users who are actually looking for AI solutions. Worth every penny!",
        "contact" => "+91 999 555 1234",

    ],
    [
        "img" => "https://randomuser.me/api/portraits/men/24.jpg",
        "name" => "NeuralScribe",
        "text" => "Fast-tracking our listing was the best marketing decision we made. Went from zero to 500+ daily users in just two weeks! EliteAI.tools put us in front of the perfect audience.",
        "contact" => "+91 999 888 1234",
    ],
    [
        "img" => "https://randomuser.me/api/portraits/men/54.jpg",
        "name" => "QuantumWrite",
        "text" => "As a bootstrapped startup, we needed cost-effective promotion. The Boosted plan delivered incredible ROI - our demo requests increased 3x in the first month alone. Highly recommend!",
        "contact" => "+91 999 888 1234",
    ],
    [
        "img" => "https://randomuser.me/api/portraits/women/53.jpg",
        "name" => "VoiceGenius",
        "text" => "The SEO boost from being listed on EliteAI.tools is incredible. We've climbed to the first page for several key search terms. The quality of traffic converts at nearly 2x our other channels.",
        "contact" => "+91 999 888 1234",
    ],
    [
        "img" => "https://randomuser.me/api/portraits/women/43.jpg",
        "name" => "DataSage",
        "text" => "We tried several directories but EliteAI.tools stands out. The curation process means you're alongside other quality tools, which gives users confidence. Our conversions are up 35% from this traffic!",
        "contact" => "+91 999 888 1234",
    ],
    [
        "img" => "https://randomuser.me/api/portraits/men/62.jpg",
        "name" => "CopyMuse",
        "text" => "Investors actually mentioned seeing us on EliteAI.tools during our seed round! The directory has become a go-to resource for the industry. Still getting consistent traffic 6 months after listing.",
        "contact" => "+91 999 888 1234",
    ]
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
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="mb-12 text-center">
                <h2 class="mb-4 text-3xl font-bold sm:text-4xl" data-aos="fade-up" data-aos-duration="1000">
                    What Users Are Saying
                </h2>
                <p class="max-w-2xl mx-auto text-lg text-gray-600" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                    Hear from tools that have successfully listed on our platform
                </p>
            </div>



            <!-- Testimonial Cards Grid -->
            <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="200">
                <?php foreach ($testimonials as $t): ?>
                    <div
                        class="p-6 bg-white rounded-lg shadow-md transition-transform hover:shadow-lg hover:-translate-y-1">
                        <div class="flex items-start mb-4">
                            <div class="flex-shrink-0 mr-4">
                                <img class="w-12 h-12 rounded-full" src="<?= htmlspecialchars($t['img']) ?>"
                                    alt="Profile image" />
                            </div>
                            <div>
                                <h3 class="font-bold"><?= htmlspecialchars($t['name']) ?></h3>
                            </div>
                        </div>
                        <p class="text-gray-700 text-justify"><?= htmlspecialchars($t['text']) ?></p>
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