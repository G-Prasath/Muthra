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
    $faqs = [
        [
            "q" => "Is Your Fridge Harming Your Health? Discover a Natural Solution.",
            "a" => "Many people wrongly believe that storing both cooked and uncooked food in the fridge is harmless, but this practice alters the nutrients in the food and can cause health issues affecting the body and mind. Our approach helps remove stress and tension naturally—without medicine—by practicing simple Mudras and exercises."
        ],
        [
            "q" => "How Can I Become the Doctor of My Own Home?",
            "a" => "You can learn to diagnose and treat yourself, creating natural medicine in the form of fireless food that tastes like cooked meals. With minimal cost and the convenience of online courses, our Foundation empowers you to take control of your health right from home, providing great benefits at a low investment."
        ],
        [
            "q" => "Can Chronic Diseases Be Healed with Simple Food Changes?",
            "a" => "Many chronic conditions such as diabetes, blood pressure, heart problems, and body pain can be effectively managed or cured through small dietary changes learned in our training programs."
        ],
        [
            "q" => "How Does This Training Support Healing by Regulating Glandular Balance?",
            "a" => "Our training helps regulate glandular secretions in the body, restoring balance and promoting the healing of various diseases naturally."
        ],
        [
            "q" => "Can Kidney Health Be Improved Naturally?",
            "a" => "Our program supports kidney cleansing techniques that can help halt the need for dialysis, promoting better kidney function with ease."
        ],
        [
            "q" => "Can Cancer Recovery Be Supported Naturally?",
            "a" => "Cancer can be effectively managed and supported through dietary and lifestyle changes combined with acupressure techniques."
        ],
        [
            "q" => "How Can Diabetes Be Managed Naturally?",
            "a" => "Normalize blood sugar levels with simple dietary changes and the practice of Mudras."
        ],
        [
            "q" => "How Can Heart Health Be Supported Naturally?",
            "a" => "Panchacharam juice combined with a Mudra practice can help remove heart-related ailments within 10 days."
        ],
        [
            "q" => "Can Cholesterol Levels Be Reduced Naturally?",
            "a" => "Mudra practice combined with specific foods can help minimize cholesterol levels within a week."
        ],
        [
            "q" => "Can Blood Pressure Be Normalized Quickly?",
            "a" => "High blood pressure is not a disease and can return to normal within 5 minutes using simple techniques."
        ],
        [
            "q" => "Can Body Pain Be Relieved Fast?",
            "a" => "All types of body pain can be alleviated within 3 days through targeted exercises and a special drink."
        ],
    ];
    ?>


    <?php include_once './_templates/navbar.php'; ?>


    <!-- =============== About us Banner ================= -->
    <div class="relative w-full mx-auto overflow-hidden" data-aos="fade-down" data-aos-duration="1000">
        <img src="./img/about_banner.avif" class="w-full" alt="about Banner">
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
                                About Us
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

    </div>


    <!-- ==================== Profile Section ==================  -->
    <section class="bg-gray-100 ">
        <div class="max-md:container md:w-[80%] w-full mx-auto py-16 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <div data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">About Us</h2>
                    <p class="mt-4 text-gray-600 text-md text-justify"> The Foundation is dedicated to training a large
                        number of Mudra coaches who can provide affordable healing to the general public. Our approach
                        is simple and easy to learn, empowering individuals to become “doctors at home.” With minimal
                        investment, you can become a certified Mudra trainer, equipped to treat a wide range of ailments
                        from the comfort of your own home. Our mission is to train thousands of Mudra trainers over the
                        next five years, expanding access to natural and cost-effective healing.</p>
                </div>
                <div class="mt-12 md:mt-0" data-aos="fade-up" data-aos-delay="500" data-aos-duration="900">
                    <img src="./img/about-profile.avif" alt="About Us Image" class="object-cover rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>


    <!-- =========================== Vision Mission Qiality =====================================  -->
    <div class="w-full h-auto bg-gray-200 py-12 p-4">
        <div class="grid gap-14 md:grid-cols-3 md:gap-5">
            <div class="rounded-xl bg-white p-6 text-center shadow-xl">
                <div
                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full bg-teal-400 shadow-lg shadow-teal-500/40">
                    <svg viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                        <path
                            d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                            fill="white"></path>
                    </svg>
                </div>
                <h5 class="text-darken mb-3 text-xl font-medium lg:px-14" data-aos="fade-up" data-aos-duration="500">
                    VISION</h5>
                <p class="px-4 text-gray-500 text-justify" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1000">In today’s world, many people live in fear of illness and death caused by
                    various diseases.</p>
            </div>
            <div class="rounded-xl bg-white p-6 text-center shadow-xl">
                <div
                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-rose-500 shadow-rose-500/40">
                    <svg viewBox=" 0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                        <path
                            d="M12 0C11.0532 0 10.2857 0.767511 10.2857 1.71432V5.14285H13.7142V1.71432C13.7142 0.767511 12.9467 0 12 0Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M36 0C35.0532 0 34.2856 0.767511 34.2856 1.71432V5.14285H37.7142V1.71432C37.7143 0.767511 36.9468 0 36 0Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M42.8571 5.14282H37.7143V12C37.7143 12.9468 36.9468 13.7143 36 13.7143C35.0532 13.7143 34.2857 12.9468 34.2857 12V5.14282H13.7142V12C13.7142 12.9468 12.9467 13.7143 11.9999 13.7143C11.0531 13.7143 10.2856 12.9468 10.2856 12V5.14282H5.14285C2.30253 5.14282 0 7.44535 0 10.2857V42.8571C0 45.6974 2.30253 48 5.14285 48H42.8571C45.6975 48 48 45.6974 48 42.8571V10.2857C48 7.44535 45.6975 5.14282 42.8571 5.14282ZM44.5714 42.8571C44.5714 43.8039 43.8039 44.5714 42.857 44.5714H5.14285C4.19605 44.5714 3.42854 43.8039 3.42854 42.8571V20.5714H44.5714V42.8571Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M13.7142 23.9999H10.2857C9.33889 23.9999 8.57138 24.7674 8.57138 25.7142C8.57138 26.661 9.33889 27.4285 10.2857 27.4285H13.7142C14.661 27.4285 15.4285 26.661 15.4285 25.7142C15.4285 24.7674 14.661 23.9999 13.7142 23.9999Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M25.7143 23.9999H22.2857C21.3389 23.9999 20.5714 24.7674 20.5714 25.7142C20.5714 26.661 21.3389 27.4285 22.2857 27.4285H25.7143C26.6611 27.4285 27.4286 26.661 27.4286 25.7142C27.4286 24.7674 26.6611 23.9999 25.7143 23.9999Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M37.7143 23.9999H34.2857C33.3389 23.9999 32.5714 24.7674 32.5714 25.7142C32.5714 26.661 33.3389 27.4285 34.2857 27.4285H37.7143C38.6611 27.4285 39.4286 26.661 39.4286 25.7142C39.4286 24.7674 38.661 23.9999 37.7143 23.9999Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M13.7142 30.8571H10.2857C9.33889 30.8571 8.57138 31.6246 8.57138 32.5714C8.57138 33.5182 9.33889 34.2857 10.2857 34.2857H13.7142C14.661 34.2857 15.4285 33.5182 15.4285 32.5714C15.4285 31.6246 14.661 30.8571 13.7142 30.8571Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M25.7143 30.8571H22.2857C21.3389 30.8571 20.5714 31.6246 20.5714 32.5714C20.5714 33.5182 21.3389 34.2857 22.2857 34.2857H25.7143C26.6611 34.2857 27.4286 33.5182 27.4286 32.5714C27.4286 31.6246 26.6611 30.8571 25.7143 30.8571Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M37.7143 30.8571H34.2857C33.3389 30.8571 32.5714 31.6246 32.5714 32.5714C32.5714 33.5182 33.3389 34.2857 34.2857 34.2857H37.7143C38.6611 34.2857 39.4286 33.5182 39.4286 32.5714C39.4285 31.6246 38.661 30.8571 37.7143 30.8571Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M13.7142 37.7142H10.2857C9.33889 37.7142 8.57138 38.4817 8.57138 39.4286C8.57138 40.3754 9.33889 41.1428 10.2857 41.1428H13.7142C14.661 41.1428 15.4285 40.3753 15.4285 39.4284C15.4285 38.4816 14.661 37.7142 13.7142 37.7142Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M25.7143 37.7142H22.2857C21.3389 37.7142 20.5714 38.4817 20.5714 39.4285C20.5714 40.3754 21.3389 41.1429 22.2857 41.1429H25.7143C26.6611 41.1429 27.4286 40.3754 27.4286 39.4285C27.4286 38.4817 26.6611 37.7142 25.7143 37.7142Z"
                            fill="#F5F5FC"></path>
                        <path
                            d="M37.7143 37.7142H34.2857C33.3389 37.7142 32.5714 38.4817 32.5714 39.4285C32.5714 40.3754 33.3389 41.1429 34.2857 41.1429H37.7143C38.6611 41.1429 39.4286 40.3754 39.4286 39.4285C39.4286 38.4817 38.661 37.7142 37.7143 37.7142Z"
                            fill="#F5F5FC"></path>
                    </svg>
                </div>
                <h5 class="text-darken mb-3 text-xl font-medium lg:px-14" data-aos="fade-up" data-aos-duration="500">
                    MISSION</h5>
                <p class="px-4 text-gray-500 text-justify" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="1000">Our mission is to remove this fear by spreading awareness and training. We
                    aim to train a minimum of 500 individuals by 2027, with a target of reaching 2000 trained
                    individuals by 2030, creating a healthier and more confident society.</p>
            </div>
            <div class="rounded-xl bg-white p-6 text-center shadow-xl">
                <div
                    class="mx-auto flex h-16 w-16 -translate-y-12 transform items-center justify-center rounded-full shadow-lg bg-sky-500 shadow-sky-500/40">
                    <svg viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white">
                        <path
                            d="M8.25 19.25C11.2836 19.25 13.75 16.7836 13.75 13.75C13.75 10.7164 11.2836 8.25 8.25 8.25C5.21641 8.25 2.75 10.7164 2.75 13.75C2.75 16.7836 5.21641 19.25 8.25 19.25ZM46.75 19.25C49.7836 19.25 52.25 16.7836 52.25 13.75C52.25 10.7164 49.7836 8.25 46.75 8.25C43.7164 8.25 41.25 10.7164 41.25 13.75C41.25 16.7836 43.7164 19.25 46.75 19.25ZM49.5 22H44C42.4875 22 41.1211 22.6102 40.1242 23.5984C43.5875 25.4977 46.0453 28.9266 46.5781 33H52.25C53.7711 33 55 31.7711 55 30.25V27.5C55 24.4664 52.5336 22 49.5 22ZM27.5 22C32.8195 22 37.125 17.6945 37.125 12.375C37.125 7.05547 32.8195 2.75 27.5 2.75C22.1805 2.75 17.875 7.05547 17.875 12.375C17.875 17.6945 22.1805 22 27.5 22ZM34.1 24.75H33.3867C31.5992 25.6094 29.6141 26.125 27.5 26.125C25.3859 26.125 23.4094 25.6094 21.6133 24.75H20.9C15.4344 24.75 11 29.1844 11 34.65V37.125C11 39.4023 12.8477 41.25 15.125 41.25H39.875C42.1523 41.25 44 39.4023 44 37.125V34.65C44 29.1844 39.5656 24.75 34.1 24.75ZM14.8758 23.5984C13.8789 22.6102 12.5125 22 11 22H5.5C2.46641 22 0 24.4664 0 27.5V30.25C0 31.7711 1.22891 33 2.75 33H8.41328C8.95469 28.9266 11.4125 25.4977 14.8758 23.5984Z"
                            fill="white"></path>
                    </svg>
                </div>
                <h5 class="text-darken mb-3 text-xl font-medium lg:px-14" data-aos="fade-up" data-aos-duration="900">
                    TARGET</h5>
                <p class="px-4 text-gray-500 text-justify" data-aos="fade-up" data-aos-delay="500"
                    data-aos-duration="500">Our short-term goal is to certify 500 Mudra trainers within one year to
                    spread affordable healing widely. Over the next five years, we aim to train 5,000 Mudra trainers and
                    health consultants, building a strong network of dedicated healers committed to transforming lives
                    and promoting wellness in every community</p>
            </div>
        </div>

    </div>


    <!-- ===================================== FAQ =====================================  -->
    <div class="md:w-[80%] w-full mx-auto px-5 my-16">

        <div class="border-b flex justify-between text-sm" data-aos="fade-down" data-aos-duration="1000">
            <div class="text-indigo-600 flex items-center pb-2 pr-2 border-b-2 border-indigo-600 uppercase">
                <div class="font-semibold inline-block">Frequently asked Questions</div>
            </div>
        </div>


        <div class="flex justify-center items-center p-10">

            <!-- Component Start -->
            <div class="flex flex-col">
                <?php foreach ($faqs as $faq): ?>
                    <button class="faq-btn group border border-black focus:outline-none my-1 rounded-lg w-full text-left">
                        <div class="flex items-center justify-between h-12 px-3 font-semibold hover:bg-gray-200">
                            <span class="truncate"><?= htmlspecialchars($faq['q']) ?></span>
                            <span class="faq-icon text-xl font-bold">+</span>
                        </div>
                        <div class="faq-answer max-h-0 overflow-hidden duration-300">
                            <p class="text-md text-justify text-gray-500 p-5">
                                <?= htmlspecialchars($faq['a']) ?>
                            </p>
                        </div>
                    </button>
                <?php endforeach; ?>
            </div>
            <!-- Component End  -->

        </div>
    </div>


    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>