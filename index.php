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
    <section data-aos="fade-up" class="banner-slider relative md:h-screen w-full aspect-video" id="heroSlider">
        <!-- Slide 1 - Fade Effect -->
        <div class="slide fade-effect active"
            style="background-image: url('https://images.pexels.com/photos/6646918/pexels-photo-6646918.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
            <div class="hero-overlay absolute inset-0"></div>
        </div>

        <!-- Slide 2 - Slide Effect -->
        <div class="slide slide-effect"
            style="background-image: url('https://images.pexels.com/photos/6995220/pexels-photo-6995220.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
            <div class="hero-overlay absolute inset-0"></div>
        </div>

        <!-- Slide 3 - Zoom Effect -->
        <div class="slide zoom-effect"
            style="background-image: url('https://images.pexels.com/photos/6646917/pexels-photo-6646917.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
            <div class="hero-overlay absolute inset-0"></div>
        </div>

        <!-- Slide 4 - Rotate Effect -->
        <div class="slide rotate-effect"
            style="background-image: url('https://images.pexels.com/photos/6646919/pexels-photo-6646919.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
            <div class="hero-overlay absolute inset-0"></div>
        </div>

        <!-- Navigation Arrows -->
        <button class="slider-nav prev" id="prevSlide">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="slider-nav next" id="nextSlide">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Navigation Dots -->
        <div class="slider-dots" id="sliderDots">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
            <span class="dot" data-slide="3"></span>
        </div>

        <!-- Progress Bar -->
        <div class="progress-bar">
            <div class="progress-fill" id="progressFill"></div>
        </div>
    </section>
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
        class="bg-[#f2bd3b] flex justify-center items-center md:py-16 md:px-8 py-4 px-2">
        <div class="flex gap-4 p-4 bg-gray-200 rounded" data-aos="zoom-in" data-aos-delay="500"
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