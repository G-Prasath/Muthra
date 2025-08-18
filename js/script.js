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
  const carousel = document.getElementById("carousel");
  const slides = carousel.children;
  const totalSlides = slides.length;

  let index = 0;

  function showSlide(i) {
    index = (i + totalSlides) % totalSlides; // loop around
    carousel.style.transform = `translateX(-${index * 100}%)`;
  }

  document
    .getElementById("prevBtn")
    .addEventListener("click", () => showSlide(index - 1));
  document
    .getElementById("nextBtn")
    .addEventListener("click", () => showSlide(index + 1));

  // Auto-slide every 5s
  setInterval(() => {
    showSlide(index + 1);
  }, 3000);

  // ======================== Banner End ============================

  // ========================= Language Switcher Start =========================

  function hidePoweredByText() {
    let parentElements = document.querySelectorAll(
      "#google_translate_element .goog-te-gadget"
    );

    parentElements.forEach((parent) => {
      parent.childNodes.forEach((node) => {
        // Check if it's a plain text node and contains "Powered by"
        if (
          node.nodeType === 3 &&
          node.nodeValue.trim().includes("Powered by")
        ) {
          node.nodeValue = ""; // Remove the text
        }
      });
    });
  }

  // Run once at start
  hidePoweredByText();

  // Use MutationObserver to catch widget reloads and language changes
  const observer = new MutationObserver(() => {
    hidePoweredByText();
  });

  observer.observe(document.body, { childList: true, subtree: true });
});
