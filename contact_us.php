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
        <img src="./img/contact_banner.avif" class="w-full" alt="about Banner">
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
                                Contact Us
                            </span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>

    </div>


    <!-- ====================== Enquiry Form Section ===================  -->
    <div class="py-16">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-4xl">
            <div class="hidden lg:block md:w-1/2 lg:w-[80%] bg-cover" data-aos="zoom-in" data-aos-duration="1300"
                style="background-image:url('./img/contact-profile.avif')">
            </div>
            <div class="w-full p-8 md:w-1/2 lg:w-[80%]">
                <h2 class="text-2xl font-semibold text-gray-700 text-center" data-aos="fade-up"
                    data-aos-duration="1000">Welcome</h2>
                <div class="mt-4 flex items-center justify-between" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="300">
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">Send Your Enquiry via Email</a>
                    <span class="border-b w-1/5 lg:w-1/4"></span>
                </div>
                <form method="POST" action="mail.php" class="mt-6" data-aos="zoom-in"
                    data-aos-duration="1000" data-aos-delay="600">
                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="text" name="name" autocomplete="off" required />
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="email" name="email" autocomplete="off" required />
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                        <input
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="text" name="phone" autocomplete="off" required />
                    </div>

                    <div class="mt-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                        <textarea
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            name="message" rows="4" autocomplete="off"></textarea>
                    </div>

                    <div class="mt-8">
                        <button type="submit"
                            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded hover:bg-gray-600">Sumbit</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <!-- =========================== Map with Contact Details ==============  -->
    <section class="bg-gray-100">
        <div class="md:w-[80%] w-full mx-auto py-16 px-4 sm:px-6 lg:py-20 lg:px-8">
            <div class="max-w-2xl lg:max-w-4xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900" data-aos="fade-up" data-aos-duration="1000">Visit Our
                    Location</h2>
                <p class="mt-4 text-lg text-gray-500" data-aos="fade-up" data-aos-duration="1100" data-aos-delay="300">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="mt-16 lg:mt-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="rounded-lg overflow-hidden" data-aos="zoom-in" data-aos-duration="1300">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11672.945750644447!2d-122.42107853750231!3d37.7730507907087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858070cc2fbd55%3A0xa71491d736f62d5c!2sGolden%20Gate%20Bridge!5e0!3m2!1sen!2sus!4v1619524992238!5m2!1sen!2sus"
                            width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div>
                        <div class="max-w-full mx-auto rounded-lg overflow-hidden">
                            <div class="px-6 py-4" data-aos="fade-up" data-aos-duration="1500">
                                <h3 class="text-lg font-medium text-gray-900">Address</h3>
                                <p class="mt-1 text-gray-600">S. M. Panneerselvam, 3,Vivekananda road,<br/> P. N. Pudur, Coimbatore641041</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4" data-aos="fade-up" data-aos-duration="1300"
                                data-aos-delay="300">
                                <h3 class="text-lg font-medium text-gray-900">Visting Hours</h3>
                                <p class="mt-1 text-gray-600">Monday - Sunday: 10am - 7pm</p>
                            </div>
                            <div class="border-t border-gray-200 px-6 py-4" data-aos="fade-up" data-aos-duration="1000"
                                data-aos-delay="300">
                                <h3 class="text-lg font-medium text-gray-900">Contact</h3>
                                <p class="mt-1 text-gray-600"><a href="mailto:info@selvalakshmifoundation.org" target="_blank">Email: info@selvalakshmifoundation.org</a></p>
                                <p class="mt-1 text-gray-600"><a href="tel:+918072887131" target="_blank">Phone: +91 8072 887 131</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <?php include_once './_templates/cta.php'; ?>

    <?php include_once './_templates/footer.php'; ?>

    <?php include_once './_templates/floating.php'; ?>

    <?php include_once './_templates/script.php'; ?>


</body>

</html>