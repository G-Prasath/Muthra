<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'inter': ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-down': 'slideDown 0.3s ease-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                        'bounce-gentle': 'bounceGentle 2s ease-in-out infinite',
                        'pulse-glow': 'pulseGlow 2s ease-in-out infinite',
                        'slide-in-right': 'slideInRight 1s ease-out',
                        'slide-in-left': 'slideInLeft 1s ease-out',
                        'zoom-in': 'zoomIn 1s ease-out',
                        'fade-up': 'fadeUp 1s ease-out',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideDown: {
                            '0%': { opacity: '0', transform: 'translateY(-10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        slideUp: {
                            '0%': { opacity: '1', transform: 'translateY(0)' },
                            '100%': { opacity: '0', transform: 'translateY(-10px)' },
                        },
                        bounceGentle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        pulseGlow: {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(59, 130, 246, 0.3)' },
                            '50%': { boxShadow: '0 0 30px rgba(59, 130, 246, 0.6)' },
                        },
                        slideInRight: {
                            '0%': { opacity: '0', transform: 'translateX(100px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        slideInLeft: {
                            '0%': { opacity: '0', transform: 'translateX(-100px)' },
                            '100%': { opacity: '1', transform: 'translateX(0)' },
                        },
                        zoomIn: {
                            '0%': { opacity: '0', transform: 'scale(0.8)' },
                            '100%': { opacity: '1', transform: 'scale(1)' },
                        },
                        fadeUp: {
                            '0%': { opacity: '0', transform: 'translateY(50px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .dropdown-menu {
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        
        .dropdown-menu.show {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .mobile-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease;
        }
        
        .mobile-menu.show {
            max-height: 800px;
        }
        
        .nested-menu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .nested-menu.show {
            max-height: 500px;
        }
        
        .hamburger span {
            transition: all 0.3s ease;
        }
        
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(6px, 6px);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(6px, -6px);
        }
        
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.95);
        }
        
        .hero-overlay {
            background: linear-gradient(135deg, rgba(59, 130, 246, 0.8) 0%, rgba(147, 51, 234, 0.8) 100%);
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, #3b82f6 0%, #8b5cf6 100%);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(59, 130, 246, 0.3);
        }
        
        .section-padding {
            padding: 80px 0;
        }
        
        @media (max-width: 768px) {
            .section-padding {
                padding: 60px 0;
            }
        }

        /* Banner Slider Styles */
        .banner-slider {
            position: relative;
            overflow: hidden;
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: all 1s ease-in-out;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .slide.active {
            opacity: 1;
        }

        /* Slide Transition Effects */
        .slide.fade-effect {
            transition: opacity 1.5s ease-in-out;
        }

        .slide.slide-effect {
            transform: translateX(100%);
            transition: transform 1s ease-in-out, opacity 0.5s ease-in-out;
        }

        .slide.slide-effect.active {
            transform: translateX(0);
        }

        .slide.zoom-effect {
            transform: scale(1.1);
            transition: transform 1.2s ease-in-out, opacity 1s ease-in-out;
        }

        .slide.zoom-effect.active {
            transform: scale(1);
        }

        .slide.rotate-effect {
            transform: rotate(2deg) scale(1.05);
            transition: transform 1.3s ease-in-out, opacity 1s ease-in-out;
        }

        .slide.rotate-effect.active {
            transform: rotate(0deg) scale(1);
        }

        /* Slide Content Animation */
        .slide-content {
            opacity: 0;
            transform: translateY(50px);
            transition: all 0.8s ease-out;
            transition-delay: 0.3s;
        }

        .slide.active .slide-content {
            opacity: 1;
            transform: translateY(0);
        }

        /* Navigation Dots */
        .slider-dots {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 12px;
            z-index: 20;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid rgba(255, 255, 255, 0.8);
        }

        .dot.active {
            background: white;
            transform: scale(1.2);
        }

        /* Navigation Arrows */
        .slider-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 20;
        }

        .slider-nav:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-50%) scale(1.1);
        }

        .slider-nav.prev {
            left: 30px;
        }

        .slider-nav.next {
            right: 30px;
        }

        /* Progress Bar */
        .progress-bar {
            position: absolute;
            bottom: 0;
            left: 0;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            z-index: 20;
            width: 100%;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #3b82f6, #8b5cf6);
            width: 0%;
            transition: width linear;
        }

        @media (max-width: 768px) {
            .slider-nav {
                width: 40px;
                height: 40px;
            }
            
            .slider-nav.prev {
                left: 15px;
            }
            
            .slider-nav.next {
                right: 15px;
            }
            
            .slider-dots {
                bottom: 20px;
            }
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-3 rounded-xl">
                            <i class="fas fa-heart text-white text-2xl"></i>
                        </div>
                        <div class="ml-4">
                            <h1 class="text-2xl font-bold text-gray-800">Hope Foundation</h1>
                            <p class="text-sm text-gray-600">Charity & Trust</p>
                        </div>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:block">
                    <div class="ml-10 flex items-baseline space-x-1">
                        <a href="#home" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50">
                            <i class="fas fa-home mr-2"></i>Home
                        </a>

                        <!-- About Dropdown -->
                        <div class="relative dropdown">
                            <button class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50 flex items-center">
                                <i class="fas fa-info-circle mr-2"></i>About Us
                                <i class="fas fa-chevron-down ml-2 text-xs dropdown-arrow transition-transform duration-200"></i>
                            </button>
                            <div class="dropdown-menu absolute left-0 mt-2 w-64 glass-effect rounded-xl shadow-xl border border-gray-200 py-2">
                                <a href="#mission" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-bullseye text-blue-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Our Mission</h4>
                                        <p class="text-xs text-gray-600">Making a difference</p>
                                    </div>
                                </a>
                                <a href="#vision" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-eye text-purple-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Our Vision</h4>
                                        <p class="text-xs text-gray-600">Future we envision</p>
                                    </div>
                                </a>
                                <a href="#team" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-users text-green-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Our Team</h4>
                                        <p class="text-xs text-gray-600">Meet our volunteers</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Programs Dropdown -->
                        <div class="relative dropdown">
                            <button class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50 flex items-center">
                                <i class="fas fa-hands-helping mr-2"></i>Programs
                                <i class="fas fa-chevron-down ml-2 text-xs dropdown-arrow transition-transform duration-200"></i>
                            </button>
                            <div class="dropdown-menu absolute left-0 mt-2 w-72 glass-effect rounded-xl shadow-xl border border-gray-200 py-2">
                                <a href="#education" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-graduation-cap text-blue-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Education Support</h4>
                                        <p class="text-xs text-gray-600">Empowering through education</p>
                                    </div>
                                </a>
                                <a href="#healthcare" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-heartbeat text-red-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Healthcare</h4>
                                        <p class="text-xs text-gray-600">Medical aid & support</p>
                                    </div>
                                </a>
                                <a href="#food" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-utensils text-orange-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Food Security</h4>
                                        <p class="text-xs text-gray-600">Fighting hunger together</p>
                                    </div>
                                </a>
                                <a href="#shelter" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-home text-green-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Shelter & Housing</h4>
                                        <p class="text-xs text-gray-600">Safe homes for all</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Get Involved Dropdown -->
                        <div class="relative dropdown">
                            <button class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50 flex items-center">
                                <i class="fas fa-hand-holding-heart mr-2"></i>Get Involved
                                <i class="fas fa-chevron-down ml-2 text-xs dropdown-arrow transition-transform duration-200"></i>
                            </button>
                            <div class="dropdown-menu absolute left-0 mt-2 w-64 glass-effect rounded-xl shadow-xl border border-gray-200 py-2">
                                <a href="#volunteer" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-hands text-purple-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Volunteer</h4>
                                        <p class="text-xs text-gray-600">Join our mission</p>
                                    </div>
                                </a>
                                <a href="#donate" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-donate text-green-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Donate</h4>
                                        <p class="text-xs text-gray-600">Make a contribution</p>
                                    </div>
                                </a>
                                <a href="#fundraise" class="flex items-center px-4 py-3 hover:bg-blue-50 transition-all duration-200">
                                    <i class="fas fa-chart-line text-blue-500 mr-3"></i>
                                    <div>
                                        <h4 class="font-medium text-gray-800">Fundraise</h4>
                                        <p class="text-xs text-gray-600">Start a campaign</p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <a href="#news" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50">
                            <i class="fas fa-newspaper mr-2"></i>News
                        </a>
                        <a href="#contact" class="text-gray-700 hover:text-blue-600 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-blue-50">
                            <i class="fas fa-envelope mr-2"></i>Contact
                        </a>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button class="hamburger inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:text-blue-600 hover:bg-blue-50 transition-all duration-200" id="mobile-menu-button">
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
                <a href="#home" class="text-gray-700 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-base font-medium transition-all duration-200">
                    <i class="fas fa-home mr-2"></i>Home
                </a>
                
                <!-- Mobile About -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-button text-gray-700 hover:text-blue-600 hover:bg-blue-50 w-full text-left px-3 py-2 rounded-md text-base font-medium transition-all duration-200 flex items-center justify-between">
                        <span><i class="fas fa-info-circle mr-2"></i>About Us</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                    </button>
                    <div class="nested-menu ml-4 mt-2 space-y-1 border-l border-gray-200 pl-4">
                        <a href="#mission" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Our Mission</a>
                        <a href="#vision" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Our Vision</a>
                        <a href="#team" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Our Team</a>
                    </div>
                </div>

                <!-- Mobile Programs -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-button text-gray-700 hover:text-blue-600 hover:bg-blue-50 w-full text-left px-3 py-2 rounded-md text-base font-medium transition-all duration-200 flex items-center justify-between">
                        <span><i class="fas fa-hands-helping mr-2"></i>Programs</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                    </button>
                    <div class="nested-menu ml-4 mt-2 space-y-1 border-l border-gray-200 pl-4">
                        <a href="#education" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Education Support</a>
                        <a href="#healthcare" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Healthcare</a>
                        <a href="#food" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Food Security</a>
                        <a href="#shelter" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Shelter & Housing</a>
                    </div>
                </div>

                <!-- Mobile Get Involved -->
                <div class="mobile-dropdown">
                    <button class="mobile-dropdown-button text-gray-700 hover:text-blue-600 hover:bg-blue-50 w-full text-left px-3 py-2 rounded-md text-base font-medium transition-all duration-200 flex items-center justify-between">
                        <span><i class="fas fa-hand-holding-heart mr-2"></i>Get Involved</span>
                        <i class="fas fa-chevron-down text-xs transition-transform duration-200"></i>
                    </button>
                    <div class="nested-menu ml-4 mt-2 space-y-1 border-l border-gray-200 pl-4">
                        <a href="#volunteer" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Volunteer</a>
                        <a href="#donate" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Donate</a>
                        <a href="#fundraise" class="text-gray-600 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-sm transition-all duration-200">Fundraise</a>
                    </div>
                </div>

                <a href="#news" class="text-gray-700 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-base font-medium transition-all duration-200">
                    <i class="fas fa-newspaper mr-2"></i>News
                </a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600 hover:bg-blue-50 block px-3 py-2 rounded-md text-base font-medium transition-all duration-200">
                    <i class="fas fa-envelope mr-2"></i>Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Auto-Sliding Hero Banner -->
    <section class="banner-slider relative h-screen" id="heroSlider">
        <!-- Slide 1 - Fade Effect -->
        <div class="slide fade-effect active" style="background-image: url('https://images.pexels.com/photos/6646918/pexels-photo-6646918.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
            <div class="hero-overlay absolute inset-0"></div>
            <div class="relative z-10 flex items-center justify-center h-full">
                <div class="slide-content text-center text-white px-4 max-w-4xl mx-auto">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">
                        Making a <span class="text-yellow-300">Difference</span> Together
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90">
                        Join us in our mission to create positive change and build a better world for everyone
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="btn-primary text-white px-8 py-4 rounded-full text-lg font-semibold">
                            <i class="fas fa-donate mr-2"></i>Donate Now
                        </button>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full text-lg font-semibold border border-white/30 hover:bg-white/30 transition-all duration-300">
                            <i class="fas fa-play mr-2"></i>Watch Our Story
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2 - Slide Effect -->
        <div class="slide slide-effect" style="background-image: url('https://images.pexels.com/photos/6995220/pexels-photo-6995220.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
            <div class="hero-overlay absolute inset-0"></div>
            <div class="relative z-10 flex items-center justify-center h-full">
                <div class="slide-content text-center text-white px-4 max-w-4xl mx-auto">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">
                        <span class="text-green-300">Education</span> for All
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90">
                        Empowering communities through quality education and learning opportunities
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="btn-primary text-white px-8 py-4 rounded-full text-lg font-semibold">
                            <i class="fas fa-graduation-cap mr-2"></i>Support Education
                        </button>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full text-lg font-semibold border border-white/30 hover:bg-white/30 transition-all duration-300">
                            <i class="fas fa-book mr-2"></i>Learn More
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3 - Zoom Effect -->
        <div class="slide zoom-effect" style="background-image: url('https://images.pexels.com/photos/6646917/pexels-photo-6646917.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
            <div class="hero-overlay absolute inset-0"></div>
            <div class="relative z-10 flex items-center justify-center h-full">
                <div class="slide-content text-center text-white px-4 max-w-4xl mx-auto">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">
                        <span class="text-red-300">Healthcare</span> Access
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90">
                        Providing essential medical care and health services to underserved communities
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="btn-primary text-white px-8 py-4 rounded-full text-lg font-semibold">
                            <i class="fas fa-heartbeat mr-2"></i>Support Healthcare
                        </button>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full text-lg font-semibold border border-white/30 hover:bg-white/30 transition-all duration-300">
                            <i class="fas fa-stethoscope mr-2"></i>Our Programs
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 4 - Rotate Effect -->
        <div class="slide rotate-effect" style="background-image: url('https://images.pexels.com/photos/6646919/pexels-photo-6646919.jpeg?auto=compress&cs=tinysrgb&w=1920&h=1080&fit=crop');">
            <div class="hero-overlay absolute inset-0"></div>
            <div class="relative z-10 flex items-center justify-center h-full">
                <div class="slide-content text-center text-white px-4 max-w-4xl mx-auto">
                    <h1 class="text-5xl md:text-7xl font-bold mb-6">
                        <span class="text-orange-300">Food Security</span>
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90">
                        Fighting hunger and malnutrition by providing nutritious meals to those in need
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="btn-primary text-white px-8 py-4 rounded-full text-lg font-semibold">
                            <i class="fas fa-utensils mr-2"></i>Fight Hunger
                        </button>
                        <button class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full text-lg font-semibold border border-white/30 hover:bg-white/30 transition-all duration-300">
                            <i class="fas fa-hands-helping mr-2"></i>Volunteer
                        </button>
                    </div>
                </div>
            </div>
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

    <!-- Breadcrumb -->
    <div class="bg-gray-100 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center space-x-2 text-sm text-gray-600">
                <a href="#" class="hover:text-blue-600 transition-colors duration-200">
                    <i class="fas fa-home mr-1"></i>Home
                </a>
                <i class="fas fa-chevron-right text-gray-400"></i>
                <span class="text-gray-800">About Us</span>
            </nav>
        </div>
    </div>

    <!-- Main Content Section -->
    <section class="section-padding">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Profile/About Section -->
                <div class="space-y-6">
                    <div class="bg-white rounded-2xl shadow-lg p-8 card-hover">
                        <div class="flex items-center mb-6">
                            <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-4 rounded-xl">
                                <i class="fas fa-heart text-white text-3xl"></i>
                            </div>
                            <div class="ml-4">
                                <h2 class="text-2xl font-bold text-gray-800">Our Foundation</h2>
                                <p class="text-gray-600">Established 2010</p>
                            </div>
                        </div>
                        <p class="text-gray-700 leading-relaxed mb-6">
                            Hope Foundation has been dedicated to creating positive change in communities worldwide for over a decade. Our mission is to provide essential services, support, and hope to those who need it most.
                        </p>
                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div class="bg-blue-50 rounded-lg p-4">
                                <h3 class="text-2xl font-bold text-blue-600">50K+</h3>
                                <p class="text-sm text-gray-600">Lives Impacted</p>
                            </div>
                            <div class="bg-purple-50 rounded-lg p-4">
                                <h3 class="text-2xl font-bold text-purple-600">200+</h3>
                                <p class="text-sm text-gray-600">Volunteers</p>
                            </div>
                            <div class="bg-green-50 rounded-lg p-4">
                                <h3 class="text-2xl font-bold text-green-600">15</h3>
                                <p class="text-sm text-gray-600">Countries</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Content -->
                <div class="space-y-6">
                    <div class="bg-white rounded-2xl shadow-lg p-8 card-hover">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6">Our Impact Areas</h3>
                        <div class="space-y-4">
                            <div class="flex items-center p-4 bg-blue-50 rounded-lg">
                                <i class="fas fa-graduation-cap text-blue-500 text-2xl mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Education</h4>
                                    <p class="text-sm text-gray-600">Providing quality education to underprivileged children</p>
                                </div>
                            </div>
                            <div class="flex items-center p-4 bg-red-50 rounded-lg">
                                <i class="fas fa-heartbeat text-red-500 text-2xl mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Healthcare</h4>
                                    <p class="text-sm text-gray-600">Medical aid and health awareness programs</p>
                                </div>
                            </div>
                            <div class="flex items-center p-4 bg-green-50 rounded-lg">
                                <i class="fas fa-utensils text-green-500 text-2xl mr-4"></i>
                                <div>
                                    <h4 class="font-semibold text-gray-800">Food Security</h4>
                                    <p class="text-sm text-gray-600">Fighting hunger and malnutrition</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="bg-gray-100 section-padding">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-6">See Our Work in Action</h2>
            <p class="text-xl text-gray-600 mb-8">Watch how your contributions are making a real difference in communities around the world</p>
            <div class="relative bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
                <div class="aspect-video bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                    <button class="bg-white/20 backdrop-blur-sm rounded-full p-6 hover:bg-white/30 transition-all duration-300 animate-pulse-glow">
                        <i class="fas fa-play text-white text-4xl ml-1"></i>
                    </button>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Hope in Action: 2024 Impact Report</h3>
                    <p class="text-gray-600">A comprehensive look at our achievements and the lives we've touched this year</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-700 section-padding text-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold mb-6">Ready to Make a Difference?</h2>
            <p class="text-xl mb-8 opacity-90">Join thousands of supporters who are helping us create positive change in communities worldwide</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-white text-blue-600 px-8 py-4 rounded-full text-lg font-semibold hover:bg-gray-100 transition-all duration-300 hover:scale-105">
                    <i class="fas fa-donate mr-2"></i>Start Donating
                </button>
                <button class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full text-lg font-semibold border border-white/30 hover:bg-white/30 transition-all duration-300">
                    <i class="fas fa-hands mr-2"></i>Become a Volunteer
                </button>
                <button class="bg-white/20 backdrop-blur-sm text-white px-8 py-4 rounded-full text-lg font-semibold border border-white/30 hover:bg-white/30 transition-all duration-300">
                    <i class="fas fa-share-alt mr-2"></i>Spread the Word
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-center mb-4">
                        <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-2 rounded-lg">
                            <i class="fas fa-heart text-white text-xl"></i>
                        </div>
                        <div class="ml-3">
                            <h3 class="text-xl font-bold">Hope Foundation</h3>
                            <p class="text-sm text-gray-400">Charity & Trust</p>
                        </div>
                    </div>
                    <p class="text-gray-400 mb-4">Creating positive change and building a better world for everyone through compassion and action.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Our Programs</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Get Involved</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">News & Events</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Support</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Donate</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Volunteer</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Fundraise</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors duration-200">Corporate Partners</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Info</h4>
                    <div class="space-y-2 text-gray-400">
                        <p><i class="fas fa-map-marker-alt mr-2"></i>123 Hope Street, City, State 12345</p>
                        <p><i class="fas fa-phone mr-2"></i>+1 (555) 123-4567</p>
                        <p><i class="fas fa-envelope mr-2"></i>info@hopefoundation.org</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Hope Foundation. All rights reserved. | Privacy Policy | Terms of Service</p>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Banner Slider Functionality
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.dot');
            const prevBtn = document.getElementById('prevSlide');
            const nextBtn = document.getElementById('nextSlide');
            const progressFill = document.getElementById('progressFill');
            
            let currentSlide = 0;
            let slideInterval;
            let progressInterval;
            const slideDelay = 5000; // 5 seconds per slide
            const progressUpdateInterval = 50; // Update progress every 50ms

            // Slide transition effects array
            const effects = ['fade-effect', 'slide-effect', 'zoom-effect', 'rotate-effect'];

            function showSlide(index) {
                // Remove active class from all slides and dots
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                // Add active class to current slide and dot
                slides[index].classList.add('active');
                dots[index].classList.add('active');

                // Reset progress bar
                progressFill.style.width = '0%';
                
                // Start progress animation
                startProgressAnimation();
            }

            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }

            function startProgressAnimation() {
                let progress = 0;
                clearInterval(progressInterval);
                
                progressInterval = setInterval(() => {
                    progress += (progressUpdateInterval / slideDelay) * 100;
                    progressFill.style.width = progress + '%';
                    
                    if (progress >= 100) {
                        clearInterval(progressInterval);
                    }
                }, progressUpdateInterval);
            }

            function startSlideShow() {
                clearInterval(slideInterval);
                slideInterval = setInterval(nextSlide, slideDelay);
            }

            function stopSlideShow() {
                clearInterval(slideInterval);
                clearInterval(progressInterval);
            }

            // Event listeners
            nextBtn.addEventListener('click', () => {
                stopSlideShow();
                nextSlide();
                startSlideShow();
            });

            prevBtn.addEventListener('click', () => {
                stopSlideShow();
                prevSlide();
                startSlideShow();
            });

            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    stopSlideShow();
                    currentSlide = index;
                    showSlide(currentSlide);
                    startSlideShow();
                });
            });

            // Pause on hover
            const slider = document.getElementById('heroSlider');
            slider.addEventListener('mouseenter', stopSlideShow);
            slider.addEventListener('mouseleave', startSlideShow);

            // Touch/swipe support for mobile
            let touchStartX = 0;
            let touchEndX = 0;

            slider.addEventListener('touchstart', (e) => {
                touchStartX = e.changedTouches[0].screenX;
            });

            slider.addEventListener('touchend', (e) => {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            });

            function handleSwipe() {
                const swipeThreshold = 50;
                const diff = touchStartX - touchEndX;

                if (Math.abs(diff) > swipeThreshold) {
                    stopSlideShow();
                    if (diff > 0) {
                        nextSlide(); // Swipe left - next slide
                    } else {
                        prevSlide(); // Swipe right - previous slide
                    }
                    startSlideShow();
                }
            }

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    stopSlideShow();
                    prevSlide();
                    startSlideShow();
                } else if (e.key === 'ArrowRight') {
                    stopSlideShow();
                    nextSlide();
                    startSlideShow();
                }
            });

            // Initialize slider
            showSlide(0);
            startSlideShow();

            // Mobile menu functionality
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburger = document.querySelector('.hamburger');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('show');
                hamburger.classList.toggle('active');
            });

            // Desktop dropdown functionality
            const dropdowns = document.querySelectorAll('.dropdown');
            let activeDropdown = null;
            let timeoutId = null;

            dropdowns.forEach(dropdown => {
                const button = dropdown.querySelector('button');
                const menu = dropdown.querySelector('.dropdown-menu');
                const arrow = dropdown.querySelector('.dropdown-arrow');

                button.addEventListener('mouseenter', function() {
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                    }
                    
                    // Close other dropdowns
                    if (activeDropdown && activeDropdown !== dropdown) {
                        activeDropdown.querySelector('.dropdown-menu').classList.remove('show');
                        activeDropdown.querySelector('.dropdown-arrow').style.transform = 'rotate(0deg)';
                    }
                    
                    menu.classList.add('show');
                    arrow.style.transform = 'rotate(180deg)';
                    activeDropdown = dropdown;
                });

                dropdown.addEventListener('mouseleave', function() {
                    timeoutId = setTimeout(() => {
                        menu.classList.remove('show');
                        arrow.style.transform = 'rotate(0deg)';
                        activeDropdown = null;
                    }, 150);
                });

                dropdown.addEventListener('mouseenter', function() {
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                    }
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('.dropdown')) {
                    dropdowns.forEach(dropdown => {
                        const menu = dropdown.querySelector('.dropdown-menu');
                        const arrow = dropdown.querySelector('.dropdown-arrow');
                        menu.classList.remove('show');
                        arrow.style.transform = 'rotate(0deg)';
                    });
                    activeDropdown = null;
                }
            });

            // Mobile nested menu functionality
            const mobileDropdowns = document.querySelectorAll('.mobile-dropdown');
            
            mobileDropdowns.forEach(dropdown => {
                const button = dropdown.querySelector('.mobile-dropdown-button');
                const menu = dropdown.querySelector('.nested-menu');
                const arrow = button.querySelector('i:last-child');

                button.addEventListener('click', function() {
                    menu.classList.toggle('show');
                    arrow.style.transform = menu.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0deg)';
                });
            });

            // Close mobile menu when clicking on a link
            const mobileLinks = document.querySelectorAll('#mobile-menu a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.remove('show');
                    hamburger.classList.remove('active');
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function(event) {
                if (!event.target.closest('nav') && mobileMenu.classList.contains('show')) {
                    mobileMenu.classList.remove('show');
                    hamburger.classList.remove('active');
                }
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Intersection Observer for animations
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            document.querySelectorAll('.card-hover').forEach(card => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>