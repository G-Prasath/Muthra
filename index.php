<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>

    <?php include_once './_templates/head.php'; ?>
</head>

<body class="bg-gray-50">

    <?php include_once './_templates/navbar.php'; ?>


    <!-- ======================== Banner Start ========================= -->
    <div class="md:w-[80%] md:h-[70%] mx-auto md:my-4 my-2 relative overflow-hidden w-full">
        <!-- Carousel Wrapper -->
        <div id="carousel" class="flex transition-transform duration-700 ease-in-out">
            <!-- Slide 1 -->
            <img src="./img/banner-1.avif" class="w-full h-full flex-shrink-0 object-cover object-center" alt="slide 1">
            <img src="./img/banner-2.avif" class="w-full h-full flex-shrink-0 object-cover object-center" alt="slide 2">
            <img src="./img/banner-3.avif" class="w-full h-full flex-shrink-0 object-cover object-center" alt="slide 3">
            <img src="./img/banner-4.avif" class="w-full h-full flex-shrink-0 object-cover object-center" alt="slide 4">
        </div>

        <!-- Navigation buttons -->
        <button id="prevBtn"
            class="absolute top-1/2 left-4 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full">❮</button>
        <button id="nextBtn"
            class="absolute top-1/2 right-4 -translate-y-1/2 bg-black/50 text-white p-2 rounded-full">❯</button>
    </div>
    <!-- ========================== Banner End ======================== -->

    <!-- ========================= About Section Start =========================  -->
    <section class="relative bg-gray-900 text-white md:py-16 md:px-8 py-8 px-4 overflow-hidden">
        <!-- Container Content -->
        <div class="md:w-[80%] w-full mx-auto flex flex-col md:flex-row items-center md:items-center md:space-x-12">
            <!-- Text Content -->
            <div class="w-full md:w-1/2">
                <h1 class="md:text-4xl text-xl font-bold mb-4 border-b-4 border-blue-500 inline-block"
                    data-aos="fade-up" data-aos-duration="2500">Foundation</h1>

                <p class="mb-4 text-gray-300 leading-relaxed text-justify" data-aos="fade-up" data-aos-duration="2000">
                   Selva Lakshmi Foundation offers simple, natural, and cost-free methods for healing through Mudras, Acupressure, and wholesome food practices - taught under the Rosini Mudra Training Centre.
                </p>
                <p class="mb-4 text-gray-300 leading-relaxed text-justify" data-aos="fade-up" data-aos-duration="2000">
                    Students trained here gain the knowledge to become certified Health Consultants, empowering themselves and others with holistic wellness.
                </p>

                <div class="flex items-center justify-end w-full" data-aos="fade-up" data-aos-duration="1000">
                    <a href="https://calendly.com/selvalakshmi-foundation/30min"
                        target="_blank"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg mt-8 transition duration-300">
                        Appointment
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="w-full md:w-1/2 mt-8 md:mb-0" data-aos="zoom-in" data-aos-duration="1500">
                <iframe class="rounded w-[325px] h-[300px] md:w-[600px] md:h-[350px] min-[2560px]:hidden"
                    src="https://www.youtube.com/embed/3JhcdflXapg?si=KWbMMTRKM6YZiA1p" title="YouTube video player"
                    frameborder="0" loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>

                <iframe class="rounded w-[1800px] h-[1000px] hidden min-[2560px]:block border border-red-500"
                    src="https://www.youtube.com/embed/3JhcdflXapg?si=KWbMMTRKM6YZiA1p" title="YouTube video player"
                    frameborder="0" loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        </div>
    </section>
    <!-- ============================ About Section End ======================= -->



    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>