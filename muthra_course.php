<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>

    <?php include_once './_templates/head.php'; ?>
</head>

<body>
    <?php
    $videos = [
        [
            'title' => 'Diabetic',
            'id' => '6KmsgkkccCM',
            'summary' => 'One time food normal the sugar level. With a mudra.'
        ],
        [
            'title' => 'Heart problems ',
            'id' => '-s2BtYsmQ_Y',
            'summary' => ' Panchacharam juice remove all ailments within 10 days + a  mudra'
        ],
        [
            'title' => 'cold and cough',
            'id' => 'zQbOpRvMeOk',
            'summary' => 'Mudra helps relieve cold and cough by increasing the body&apos;s warmth and reducing mucus naturally.',
        ],
        [
            'title' => 'Kidney',
            'id' => 'Yb0TFX8ZDlA',
            'summary' => ' Even dialysis can stop by cleaning the Kidneys easily'
        ],
        [
            'title' => 'Cholesterol',
            'id' => 'W4K56gC0vGI',
            'summary' => 'Mudra  &  a food minimise the cholesterol within a week'
        ],
        [
            'title' => 'Body pain',
            'id' => '7uJAUF4pT5Y',
            'summary' => 'All pains in body, removed within 3 days,, through an exercise and a drink'
        ],

    ];
    ?>

    <?php include_once './_templates/navbar.php'; ?>

    <!-- =============== About us Banner ================= -->
    <div class="relative w-full mx-auto overflow-hidden" data-aos="fade-down" data-aos-duration="1000">
        <img src="./img/muthra_banner.avif" class="w-full" alt="about Banner">
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
        <?php foreach ($videos as $video): ?>
            <div class="bg-[whitesmoke] p-4" data-aos="zoom-in" data-aos-duration="1300">
                <h3 class="border-b font-semibold text-[18px] mb-2"><?= htmlspecialchars($video['title']) ?></h3>
                <div class="relative w-full pt-[56.25%]">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.youtube.com/embed/<?= htmlspecialchars($video['id']) ?>?rel=0"
                        title="<?= htmlspecialchars($video['title']) ?>" frameborder="0" allow="autoplay; encrypted-media"
                        allowfullscreen></iframe>
                </div>
                <p class="mt-3"><strong>Summary:</strong> <?= htmlspecialchars($video['summary']) ?></p>
            </div>
        <?php endforeach; ?>
    </div>



    <!-- ========================= Google Form Link =========================  -->
    <section class="w-full bg-gray-50 py-12 px-4 flex justify-center items-center">
        <div class="w-full max-w-5xl bg-white rounded-2xl shadow-lg p-6 border border-green-500">
            <h2 class="text-xl font-bold text-center text-gray-800 mb-6">
                Course Registration Form
            </h2>

            <!-- Responsive Google Form -->
            <a href="https://forms.gle/2ZTCLBhKgVpR9X5b7" target="_blank"
                class="flex justify-center px-6 py-3 w-full hover:bg-green-500 border border-green-500 font-semibold rounded-lg shadow-md bg-green-600 text-white transition duration-300">
                Click Here
            </a>
        </div>
    </section>




    <!-- ======================== Q & A Video Section ==========================  -->
    <div class="md:w-[80%] w-full mx-auto my-8">
        <div class="text-center py-4 mt-4">
            <h2 class="font-semibold text-3xl" data-aos="fade-down" data-aos-duration="1000">Q & A Videos</h2>
        </div>
        <div class="flex items-center justify-center" data-aos="zoom-in" data-aos-duration="1500">
            <iframe class="rounded w-[350px] h-[300px] md:w-[700px] md:h-[400px] min-[2560px]:hidden"
                src="https://www.youtube.com/embed/3JhcdflXapg?si=KWbMMTRKM6YZiA1p" title="YouTube video player"
                frameborder="0" loading="lazy"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>

            <iframe class="rounded w-[1300px] h-[800px] hidden min-[2560px]:block border border-red-500"
                src="https://www.youtube.com/embed/3JhcdflXapg?si=KWbMMTRKM6YZiA1p" title="YouTube video player"
                frameborder="0" loading="lazy"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>

    </div>


    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>