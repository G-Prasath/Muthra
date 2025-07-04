<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope Foundation - Charity & Trust</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
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
    </style>
</head>

<body class="bg-gray-50">

    <?php include_once './_templates/navbar.php'; ?>


  

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Mobile menu functionality
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburger = document.querySelector('.hamburger');

            mobileMenuButton.addEventListener('click', function () {
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

                button.addEventListener('mouseenter', function () {
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

                dropdown.addEventListener('mouseleave', function () {
                    timeoutId = setTimeout(() => {
                        menu.classList.remove('show');
                        arrow.style.transform = 'rotate(0deg)';
                        activeDropdown = null;
                    }, 150);
                });

                dropdown.addEventListener('mouseenter', function () {
                    if (timeoutId) {
                        clearTimeout(timeoutId);
                    }
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function (event) {
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

                button.addEventListener('click', function () {
                    menu.classList.toggle('show');
                    arrow.style.transform = menu.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0deg)';
                });
            });

            // Close mobile menu when clicking on a link
            const mobileLinks = document.querySelectorAll('#mobile-menu a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function () {
                    mobileMenu.classList.remove('show');
                    hamburger.classList.remove('active');
                });
            });

            // Close mobile menu when clicking outside
            document.addEventListener('click', function (event) {
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

            const observer = new IntersectionObserver(function (entries) {
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