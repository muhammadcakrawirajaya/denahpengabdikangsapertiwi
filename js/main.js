// LOGIN
var swiper = new Swiper(".swiper-container", {
  pagination: ".swiper-pagination",
  paginationClickable: true,
  parallax: true,
  speed: 600,
  autoplay: 3500,
  loop: true,
  grabCursor: true
});

// COUNTUP
const counts = document.querySelectorAll(".count");
const speed = 97;
const options = {
  threshold: 0.5,
};
const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
      upDate(entry.target);
      observer.unobserve(entry.target);
    }
  });
}, options);
counts.forEach((counter) => {
  observer.observe(counter);
});
function upDate(counter) {
  const target = Number(counter.getAttribute("data-target"));
  const count = Number(counter.innerText);
  const inc = target / speed;
  if (count < target) {
    counter.innerText = Math.floor(inc + count);
    setTimeout(() => upDate(counter), 15);
  } else {
    counter.innerText = target;
  }
}

// ABOUT TABS
var tabButton = document.getElementsByClassName("tab"),
  tabContent = document.getElementsByClassName("tab-content");
tabButton[0].classList.add("active");
tabContent[0].style.display = "block";
function tabsection(e, x) {
  var i;
  for (i = 0; i < tabButton.length; i++) {
    tabContent[i].style.display = "none";
    tabButton[i].classList.remove("active");
  }
  document.getElementById(x).style.display = "block";
  e.currentTarget.classList.add("active");
}

// TESTIMONIAL
$(".testimonials-container").owlCarousel({
  loop: true,
  autoplay: false,
  autoplayTimeout: 6000,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa-solid fa-arrow-left'></i>",
    "<i class='fa-solid fa-arrow-right'></i>",
  ],
  responsive: {
    0: {
      items: 1,
      nav: false,
    },
    600: {
      items: 1,
      nav: true,
    },
    768: {
      items: 2,
    },
  },
});

