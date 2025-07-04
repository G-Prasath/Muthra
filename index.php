<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">


</head>

<body class="bg-gray-50">

    <?php include_once './_templates/navbar.php'; ?>


    <!-- ======================== Banner Start ========================= -->
    <section class="banner-slider relative h-screen" id="heroSlider">
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




    <script defer src="./js/script.js"></script>
</body>

</html>