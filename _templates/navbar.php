<!-- Navigation -->
<nav class="bg-white shadow-lg sticky top-0 z-50 h-auto py-2 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0 flex items-center">
                    <a href="">
                        <!-- <i class="fas fa-heart text-white text-2xl"></i> -->
                        <img class="w-[80px]" src="./img/logo.avif" alt="logo">
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
                        Intro
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
                            <a href="muthra_course.php"
                                class="flex items-center text-gray-700 text-sm p-2 hover:bg-green-50 transition-all duration-200">
                                Comming Soon ...
                            </a>
                            <a href="muthra_course.php"
                                class="flex items-center text-gray-700 text-sm p-2 hover:bg-green-50 transition-all duration-200">
                                Comming Soon ...
                            </a>
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
                    <option value="af" class="lang-btn">AF</option>
                    <option value="sq" class="lang-btn">SQ</option>
                    <option value="am" class="lang-btn">AM</option>
                    <option value="ar" class="lang-btn">AR</option>
                    <option value="hy" class="lang-btn">HY</option>
                    <option value="az" class="lang-btn">AZ</option>
                    <option value="eu" class="lang-btn">EU</option>
                    <option value="be" class="lang-btn">BE</option>
                    <option value="bn" class="lang-btn">BN</option>
                    <option value="bs" class="lang-btn">BS</option>
                    <option value="bg" class="lang-btn">BG</option>
                    <option value="ca" class="lang-btn">CA</option>
                    <!-- <option value="ceb" class="lang-btn">CEB</option> -->
                    <!-- <option value="zh-CN" class="lang-btn">ZH-CN</option>
                        <option value="zh-TW" class="lang-btn">ZH-TW</option> -->
                    <option value="co" class="lang-btn">CO</option>
                    <option value="hr" class="lang-btn">HR</option>
                    <option value="cs" class="lang-btn">CS</option>
                    <option value="da" class="lang-btn">DA</option>
                    <option value="nl" class="lang-btn">NL</option>
                    <option value="en" class="lang-btn" selected>EN</option>
                    <option value="eo" class="lang-btn">EO</option>
                    <option value="et" class="lang-btn">ET</option>
                    <option value="fi" class="lang-btn">FI</option>
                    <option value="fr" class="lang-btn">FR</option>
                    <option value="fy" class="lang-btn">FY</option>
                    <option value="gl" class="lang-btn">GL</option>
                    <option value="ka" class="lang-btn">KA</option>
                    <option value="de" class="lang-btn">DE</option>
                    <option value="el" class="lang-btn">EL</option>
                    <option value="gu" class="lang-btn">GU</option>
                    <option value="ht" class="lang-btn">HT</option>
                    <option value="ha" class="lang-btn">HA</option>
                    <!-- <option value="haw" class="lang-btn">HAW</option> -->
                    <option value="he" class="lang-btn">HE</option>
                    <option value="hi" class="lang-btn">HI</option>
                    <!-- <option value="hmn" class="lang-btn">HMN</option> -->
                    <option value="hu" class="lang-btn">HU</option>
                    <option value="is" class="lang-btn">IS</option>
                    <option value="ig" class="lang-btn">IG</option>
                    <option value="id" class="lang-btn">ID</option>
                    <option value="ga" class="lang-btn">GA</option>
                    <option value="it" class="lang-btn">IT</option>
                    <option value="ja" class="lang-btn">JA</option>
                    <option value="jv" class="lang-btn">JV</option>
                    <option value="kn" class="lang-btn">KN</option>
                    <option value="kk" class="lang-btn">KK</option>
                    <option value="km" class="lang-btn">KM</option>
                    <option value="rw" class="lang-btn">RW</option>
                    <option value="ko" class="lang-btn">KO</option>
                    <option value="ku" class="lang-btn">KU</option>
                    <option value="ky" class="lang-btn">KY</option>
                    <option value="lo" class="lang-btn">LO</option>
                    <option value="la" class="lang-btn">LA</option>
                    <option value="lv" class="lang-btn">LV</option>
                    <option value="lt" class="lang-btn">LT</option>
                    <option value="lb" class="lang-btn">LB</option>
                    <option value="mk" class="lang-btn">MK</option>
                    <option value="mg" class="lang-btn">MG</option>
                    <option value="ms" class="lang-btn">MS</option>
                    <option value="ml" class="lang-btn">ML</option>
                    <option value="mt" class="lang-btn">MT</option>
                    <option value="mi" class="lang-btn">MI</option>
                    <option value="mr" class="lang-btn">MR</option>
                    <option value="mn" class="lang-btn">MN</option>
                    <option value="my" class="lang-btn">MY</option>
                    <option value="ne" class="lang-btn">NE</option>
                    <option value="no" class="lang-btn">NO</option>
                    <option value="ny" class="lang-btn">NY</option>
                    <option value="or" class="lang-btn">OR</option>
                    <option value="ps" class="lang-btn">PS</option>
                    <option value="fa" class="lang-btn">FA</option>
                    <option value="pl" class="lang-btn">PL</option>
                    <option value="pt" class="lang-btn">PT</option>
                    <option value="pa" class="lang-btn">PA</option>
                    <option value="ro" class="lang-btn">RO</option>
                    <option value="ru" class="lang-btn">RU</option>
                    <option value="sm" class="lang-btn">SM</option>
                    <option value="gd" class="lang-btn">GD</option>
                    <option value="sr" class="lang-btn">SR</option>
                    <option value="st" class="lang-btn">ST</option>
                    <option value="sn" class="lang-btn">SN</option>
                    <option value="sd" class="lang-btn">SD</option>
                    <option value="si" class="lang-btn">SI</option>
                    <option value="sk" class="lang-btn">SK</option>
                    <option value="sl" class="lang-btn">SL</option>
                    <option value="so" class="lang-btn">SO</option>
                    <option value="es" class="lang-btn">ES</option>
                    <option value="su" class="lang-btn">SU</option>
                    <option value="sw" class="lang-btn">SW</option>
                    <option value="sv" class="lang-btn">SV</option>
                    <option value="tg" class="lang-btn">TG</option>
                    <option value="ta" class="lang-btn">TA</option>
                    <option value="tt" class="lang-btn">TT</option>
                    <option value="te" class="lang-btn">TE</option>
                    <option value="th" class="lang-btn">TH</option>
                    <option value="tr" class="lang-btn">TR</option>
                    <option value="tk" class="lang-btn">TK</option>
                    <option value="uk" class="lang-btn">UK</option>
                    <option value="ur" class="lang-btn">UR</option>
                    <option value="ug" class="lang-btn">UG</option>
                    <option value="uz" class="lang-btn">UZ</option>
                    <option value="vi" class="lang-btn">VI</option>
                    <option value="cy" class="lang-btn">CY</option>
                    <option value="xh" class="lang-btn">XH</option>
                    <option value="yi" class="lang-btn">YI</option>
                    <option value="yo" class="lang-btn">YO</option>
                    <option value="zu" class="lang-btn">ZU</option>

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
                Intro
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
                <div class="nested-menu ml-4 mt-2 space-y-1 border-l border-gray-200 pl-4">
                    <a href="muthra_course.php"
                        class="text-gray-600 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Comming
                        soon ...</a>
                </div>
                <div class="nested-menu ml-4 mt-2 space-y-1 border-l border-gray-200 pl-4">
                    <a href="muthra_course.php"
                        class="text-gray-600 hover:text-green-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Comming
                        soon ...</a>
                </div>
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



<script>

</script>