// nav bar start 1
const navbar = document.getElementById("mainNavbar");
const openMenuBtn = document.getElementById("openMenu");
const closeMenuBtn = document.getElementById("closeMenu");
const navContent = document.getElementById("navContent");

// Navbar background on scroll
window.addEventListener("scroll", () => {
  navbar.classList.toggle("scrolled", window.scrollY > 50);
});

// Mobile menu toggle
openMenuBtn.addEventListener("click", () => {
  navContent.classList.add("show");
  openMenuBtn.style.display = "none";
  closeMenuBtn.style.display = "inline-block";
});

closeMenuBtn.addEventListener("click", () => {
  navContent.classList.remove("show");
  openMenuBtn.style.display = "inline-block";
  closeMenuBtn.style.display = "none";
});

// Prevent dropdown click on desktop
document.addEventListener("DOMContentLoaded", function () {
  const dropdownToggle = document.querySelector('#servicesDropdown');
  dropdownToggle.addEventListener('click', function (e) {
    if (window.innerWidth >= 992) {
      e.preventDefault(); // Disable click for desktop
    }
  });
});
// nav bar end 1

// View Categories start 2

// View Categories  2