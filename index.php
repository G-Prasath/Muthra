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
    <div class="md:w-[90%] md:h-[80vh] mx-auto md:my-4 my-2 relative overflow-hidden w-full ">
        <!-- Carousel Wrapper -->
        <div id="carousel" class="flex transition-transform duration-700 ease-in-out">
            <!-- Slide 1 -->
            <img src="./img/chk.jpeg" class="w-full h-full flex-shrink-0 object-cover" alt="slide 1">
            <!-- Slide 2 -->
            <img src="./img/chk.jpeg" class="w-full h-full flex-shrink-0 object-cover" alt="slide 2">
            <!-- Slide 3 -->
            <img src="./img/chk.jpeg" class="w-full h-full flex-shrink-0 object-cover" alt="slide 3">
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
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center md:items-center md:space-x-12">
            <!-- Text Content -->
            <div class="w-full md:w-1/2">
                <h1 class="md:text-4xl text-xl font-bold mb-4 border-b-4 border-blue-500 inline-block"
                    data-aos="fade-up" data-aos-duration="2500">About Us</h1>

                <p class="mb-4 text-gray-300 leading-relaxed text-justify" data-aos="fade-up" data-aos-duration="2000">
                    We are committed to delivering innovative solutions with a focus on quality and customer
                    satisfaction. Our team of experts works tirelessly to bring your ideas to life and help your
                    business grow. Join us on our journey to make a difference in the industry through creativity,
                    dedication, and
                    excellence.
                </p>
                <p class="mb-4 text-gray-300 leading-relaxed text-justify" data-aos="fade-up" data-aos-duration="2000">
                    We are committed to delivering innovative solutions with a focus on quality and customer
                    satisfaction. Our team of experts works tirelessly to bring your ideas to life and help your
                    business grow.
                </p>

                <div class="flex items-center justify-end w-full" data-aos="fade-up" data-aos-duration="1000">
                    <a href="#contact"
                        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg mt-8 transition duration-300">
                        Book
                    </a>
                </div>
            </div>

            <!-- Image -->
            <div class="w-full md:w-1/2 mt-8 md:mb-0" data-aos="zoom-in" data-aos-duration="1500">
                <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.4&auto=format&fit=crop&w=800&q=80"
                    alt="Our Team" class="rounded-lg shadow-lg object-cover w-full h-full" />
            </div>
        </div>
    </section>
    <!-- ============================ About Section End ======================= -->


    <!-- =========================== Video Section Start =========================  -->
    <section data-aos="zoom-in" data-aos-duration="1000"
        class="bg-[#f0fdf4] flex justify-center items-center md:py-16 md:px-8 py-4 px-2">
        <div class="flex gap-4 p-4 bg-[#c3ffd9] rounded" data-aos="zoom-in" data-aos-delay="500"
            data-aos-duration="1000">
            <video
                src="https://raw.githubusercontent.com/jonathan-eduardo/JavaScript30/main/challenges/28%20-%20Video%20Speed%20Controller/video.mp4"
                class="rounded" controls
                poster="https://raw.githubusercontent.com/jonathan-eduardo/JavaScript30/main/challenges/28%20-%20Video%20Speed%20Controller/video-screenshot.png"></video>
        </div>
    </section>

    <!-- =========================== Video Section End =========================  -->


    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>