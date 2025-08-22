<!-- Navigation -->
<nav class="w-full bg-white shadow-lg sticky top-0 z-50 h-auto py-2 relative">
    <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php">
                        <!-- <i class="fas fa-heart text-white text-2xl"></i> -->
                        <img class="w-[80px]" src="./img/logo.jpeg" alt="logo">
                    </a>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center justify-between">
                <div class="ml-10 flex items-baseline">
                    <a href="index.php"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50">
                        Home
                    </a>

                    <a href="about_us.php"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50">
                        About us
                    </a>

                    <a href="introduction.php"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50">
                        Founder
                    </a>

                    <!-- Get Involved Dropdown -->
                    <div class="relative dropdown">
                        <button
                            class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-green-50 flex items-center">
                            Courses
                            <i
                                class="fas fa-chevron-down ml-2 text-xs dropdown-arrow transition-transform duration-200"></i>
                        </button>
                        <div
                            class="dropdown-menu absolute left-0 mt-2 w-64 glass-effect rounded-xl border border-gray-200 p-2">
                            <a href="muthra_course.php"
                                class="flex items-center text-gray-700 text-sm p-2 hover:bg-green-50 transition-all duration-200">
                                Muthra
                            </a>
                            <!-- <a href="muthra_course.php"
                                class="flex items-center text-gray-700 text-sm p-2 hover:bg-green-50 transition-all duration-200">
                                Comming Soon ...
                            </a>
                            <a href="muthra_course.php"
                                class="flex items-center text-gray-700 text-sm p-2 hover:bg-green-50 transition-all duration-200">
                                Comming Soon ...
                            </a> -->
                        </div>
                    </div>

                    <a href="testimonials.php"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50">
                        Testimonials
                    </a>
                    <a href="contact_us.php"
                        class="text-gray-700 hover:text-green-600 px-3 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50">
                        Contact us
                    </a>
                </div>

                <a href="donate.php"
                    class="flex items-center mx-2 px-3 py-3 bg-green-50 hover:bg-green-100 transition-all duration-200 rounded-md">
                    <i class="fas fa-donate text-green-500 mr-3"></i>
                    <div>
                        <h4 class="font-medium text-gray-800">Donate</h4>
                        <p class="text-xs text-gray-600">Make a contribution</p>
                    </div>
                </a>

                <!-- ====================== Language Selector START ======================  -->
                <div id="google_translate_element" style="display:none;"></div>


                <!-- ====================== Language Selector END ======================  -->


            </div>



            <!-- ----------- Lang Selector ----------- -->
            <div class="relative inline-block text-left notranslate">
                <select id="customLangSelect"
                    class="text-sm max-w-max px-3 py-1 border-2 rounded-md border-green-600 focus:outline-none focus:ring-0 snap-none">
                    <option value="ta" class="lang-btn">தமிழ்</option>
                    <option value="te" class="lang-btn">తెలుగు</option>
                    <option value="ml" class="lang-btn">മലയാളം</option>
                    <option value="kn" class="lang-btn">ಕನ್ನಡ</option>
                    <option value="en" class="lang-btn" selected>English</option>
                </select>
            </div>


            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button
                    class="hamburger inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-green-600 hover:bg-blue-50 transition-all duration-200"
                    id="mobile-menu-button">
                    <span class="sr-only">Open main menu</span>
                    <div class="space-y-1">
                        <span class="block w-6 h-0.5 bg-current"></span>
                        <span class="block w-6 h-0.5 bg-current"></span>
                        <span class="block w-6 h-0.5 bg-current"></span>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="mobile-menu lg:hidden bg-white border-t border-gray-200" id="mobile-menu">
        <div class="px-4 pt-2 pb-3 space-y-1">
            <a href="index.php"
                class="text-gray-700 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-base font-medium transition-all duration-200">
                Home
            </a>

            <a href="about_us.php"
                class="text-gray-700 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-base font-medium transition-all duration-200">
                About Us
            </a>

            <a href="introduction.php"
                class="text-gray-700 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-base font-medium transition-all duration-200">
                Founder
            </a>


            <!-- Mobile Get Involved -->
            <div class="mobile-dropdown">
                <button
                    class="mobile-dropdown-button text-gray-700 hover:text-green-600 hover:bg-blue-50 w-full text-left px-3 py-2 rounded-md text-base font-medium transition-all duration-200 flex items-center justify-between">
                    <span>Courses</span>
                    <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                </button>
                <div class="nested-menu ml-4 mt-2 space-y-1 border-l border-gray-200 pl-4">
                    <a href="muthra_course.php"
                        class="text-gray-600 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Muthra</a>
                </div>
                <!-- <div class="nested-menu ml-4 mt-2 space-y-1 border-l border-gray-200 pl-4">
                    <a href="muthra_course.php"
                        class="text-gray-600 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Comming
                        soon ...</a>
                </div>
                <div class="nested-menu ml-4 mt-2 space-y-1 border-l border-gray-200 pl-4">
                    <a href="muthra_course.php"
                        class="text-gray-600 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Comming
                        soon ...</a>
                </div> -->
            </div>


            <a href="testimonials.php"
                class="text-gray-700 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-base font-medium transition-all duration-200">
                Testimonials
            </a>
            <a href="contact_us.php"
                class="text-gray-700 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-base font-medium transition-all duration-200">
                Contact us
            </a>
        </div>
        <a href="donate.php"
            class="flex items-center mx-2 px-3 py-3 bg-blue-50 hover:bg-blue-100 transition-all duration-200 rounded-md">
            <i class="fas fa-donate text-green-500 mr-3"></i>
            <div>
                <h4 class="font-medium text-gray-800">Donate</h4>
                <p class="text-xs text-gray-600">Make a contribution</p>
            </div>
        </a>
    </div>
</nav>