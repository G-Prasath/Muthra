// ===================== Navbar Start ===========================

document.addEventListener("DOMContentLoaded", function () {
  // Mobile menu functionality
  const mobileMenuButton = document.getElementById("mobile-menu-button");
  const mobileMenu = document.getElementById("mobile-menu");
  const hamburger = document.querySelector(".hamburger");

  mobileMenuButton.addEventListener("click", function () {
    mobileMenu.classList.toggle("show");
    hamburger.classList.toggle("active");
  });

  // Desktop dropdown functionality
  const dropdowns = document.querySelectorAll(".dropdown");
  let activeDropdown = null;
  let timeoutId = null;

  dropdowns.forEach((dropdown) => {
    const button = dropdown.querySelector("button");
    const menu = dropdown.querySelector(".dropdown-menu");
    const arrow = dropdown.querySelector(".dropdown-arrow");

    button.addEventListener("mouseenter", function () {
      if (timeoutId) {
        clearTimeout(timeoutId);
      }

      // Close other dropdowns
      if (activeDropdown && activeDropdown !== dropdown) {
        activeDropdown.querySelector(".dropdown-menu").classList.remove("show");
        activeDropdown.querySelector(".dropdown-arrow").style.transform =
          "rotate(0deg)";
      }

      menu.classList.add("show");
      arrow.style.transform = "rotate(180deg)";
      activeDropdown = dropdown;
    });

    dropdown.addEventListener("mouseleave", function () {
      timeoutId = setTimeout(() => {
        menu.classList.remove("show");
        arrow.style.transform = "rotate(0deg)";
        activeDropdown = null;
      }, 150);
    });

    dropdown.addEventListener("mouseenter", function () {
      if (timeoutId) {
        clearTimeout(timeoutId);
      }
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener("click", function (event) {
    if (!event.target.closest(".dropdown")) {
      dropdowns.forEach((dropdown) => {
        const menu = dropdown.querySelector(".dropdown-menu");
        const arrow = dropdown.querySelector(".dropdown-arrow");
        menu.classList.remove("show");
        arrow.style.transform = "rotate(0deg)";
      });
      activeDropdown = null;
    }
  });

  // Mobile nested menu functionality
  const mobileDropdowns = document.querySelectorAll(".mobile-dropdown");

  mobileDropdowns.forEach((dropdown) => {
    const button = dropdown.querySelector(".mobile-dropdown-button");
    const menu = dropdown.querySelector(".nested-menu");
    const arrow = button.querySelector("i:last-child");

    button.addEventListener("click", function () {
      menu.classList.toggle("show");
      arrow.style.transform = menu.classList.contains("show")
        ? "rotate(180deg)"
        : "rotate(0deg)";
    });
  });

  // Close mobile menu when clicking on a link
  const mobileLinks = document.querySelectorAll("#mobile-menu a");
  mobileLinks.forEach((link) => {
    link.addEventListener("click", function () {
      mobileMenu.classList.remove("show");
      hamburger.classList.remove("active");
    });
  });

  // Close mobile menu when clicking outside
  document.addEventListener("click", function (event) {
    if (!event.target.closest("nav") && mobileMenu.classList.contains("show")) {
      mobileMenu.classList.remove("show");
      hamburger.classList.remove("active");
    }
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
        });
      }
    });
  });

  //   // Intersection Observer for animations
  //   const observerOptions = {
  //     threshold: 0.1,
  //     rootMargin: "0px 0px -50px 0px",
  //   };

  //   const observer = new IntersectionObserver(function (entries) {
  //     entries.forEach((entry) => {
  //       if (entry.isIntersecting) {
  //         entry.target.style.opacity = "1";
  //         entry.target.style.transform = "translateY(0)";
  //       }
  //     });
  //   }, observerOptions);

  //   // Observe elements for animation
  //   document.querySelectorAll(".card-hover").forEach((card) => {
  //     card.style.opacity = "0";
  //     card.style.transform = "translateY(30px)";
  //     card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
  //     observer.observe(card);
  //   });

  // ======================== Navbar End ===========================

  // ======================= Banner Start ===========================

  // Banner Slider Functionality
  const slides = document.querySelectorAll(".slide");
  const dots = document.querySelectorAll(".dot");
  const prevBtn = document.getElementById("prevSlide");
  const nextBtn = document.getElementById("nextSlide");
  const progressFill = document.getElementById("progressFill");

  let currentSlide = 0;
  let slideInterval;
  let progressInterval;
  const slideDelay = 5000; // 5 seconds per slide
  const progressUpdateInterval = 50; // Update progress every 50ms

  // Slide transition effects array
  const effects = [
    "fade-effect",
    "slide-effect",
    "zoom-effect",
    "rotate-effect",
  ];

  function showSlide(index) {
    // Remove active class from all slides and dots
    slides.forEach((slide) => slide.classList.remove("active"));
    dots.forEach((dot) => dot.classList.remove("active"));

    // Add active class to current slide and dot
    slides[index].classList.add("active");
    dots[index].classList.add("active");

    // Reset progress bar
    progressFill.style.width = "0%";

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
      progressFill.style.width = progress + "%";

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
  nextBtn.addEventListener("click", () => {
    stopSlideShow();
    nextSlide();
    startSlideShow();
  });

  prevBtn.addEventListener("click", () => {
    stopSlideShow();
    prevSlide();
    startSlideShow();
  });


  // Pause on hover
  const slider = document.getElementById("heroSlider");
  slider.addEventListener("mouseenter", stopSlideShow);
  slider.addEventListener("mouseleave", startSlideShow);

  // Touch/swipe support for mobile
  let touchStartX = 0;
  let touchEndX = 0;

  slider.addEventListener("touchstart", (e) => {
    touchStartX = e.changedTouches[0].screenX;
  });

  slider.addEventListener("touchend", (e) => {
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
  document.addEventListener("keydown", (e) => {
    if (e.key === "ArrowLeft") {
      stopSlideShow();
      prevSlide();
      startSlideShow();
    } else if (e.key === "ArrowRight") {
      stopSlideShow();
      nextSlide();
      startSlideShow();
    }
  });

  // Initialize slider
  showSlide(0);
  startSlideShow();
  // ======================== Banner End ============================
});
