// ---- BANNER SLIDER ----
let bannerIdx = 0;
const bannerSlides = document.querySelectorAll(".banner-slide");
const bannerDots = document.querySelectorAll("#bannerDots .slider-dot");

function updateBanner() {
  document.getElementById("bannerTrack").style.transform =
    `translateX(-${bannerIdx * 100}%)`;
  bannerSlides.forEach((s, i) => s.classList.toggle("active", i === bannerIdx));
  bannerDots.forEach((d, i) => d.classList.toggle("active", i === bannerIdx));
}

function bannerNext() {
  bannerIdx = (bannerIdx + 1) % bannerSlides.length;
  updateBanner();
}

function bannerPrev() {
  bannerIdx = (bannerIdx - 1 + bannerSlides.length) % bannerSlides.length;
  updateBanner();
}

function bannerGo(i) {
  bannerIdx = i;
  updateBanner();
}
setInterval(bannerNext, 5500);

// ---- PROJECTS SLIDER ----
let projIdx = 0;
const projSlides = document.querySelectorAll(".proj-slide");
const projDots = document.querySelectorAll("#projDots .proj-dot");

function updateProj() {
  document.getElementById("projTrack").style.transform =
    `translateX(-${projIdx * 100}%)`;
  projDots.forEach((d, i) => d.classList.toggle("active", i === projIdx));
}

function projNext() {
  projIdx = (projIdx + 1) % projSlides.length;
  updateProj();
}

function projPrev() {
  projIdx = (projIdx - 1 + projSlides.length) % projSlides.length;
  updateProj();
}

function projGo(i) {
  projIdx = i;
  updateProj();
}
setInterval(projNext, 4000);

// ---- PROJECTS SLIDER TWO ----
let projIdx2 = 0;
const projSlidess = document.querySelectorAll(".proj-slide2");
const projDotss = document.querySelectorAll("#projDots2 .proj-dot2");

function updateProjj() {
  document.getElementById("projTrack2").style.transform =
    `translateX(-${projIdx2 * 100}%)`;
  projDotss.forEach((d, i) => d.classList.toggle("active", i === projIdx2));
}

function projNextt() {
  projIdx2 = (projIdx2 + 1) % projSlidess.length;
  updateProjj();
}

function projPrevv() {
  projIdx2 = (projIdx2 - 1 + projSlidess.length) % projSlidess.length;
  updateProjj();
}

function projGoo(i) {
  projIdx2 = i;
  updateProjj();
}
setInterval(projNextt, 4000);

// ---- TESTIMONIALS SLIDER ----
let testiIdx = 0;
const testiSlides = document.querySelectorAll(".testi-slide");
const testiDots = document.querySelectorAll(".testi-dot");

function updateTesti() {
  document.getElementById("testiTrack").style.transform =
    `translateX(-${testiIdx * 100}%)`;
  testiDots.forEach((d, i) => d.classList.toggle("active", i === testiIdx));
}

function testiNext() {
  testiIdx = (testiIdx + 1) % testiSlides.length;
  updateTesti();
}

function testiPrev() {
  testiIdx = (testiIdx - 1 + testiSlides.length) % testiSlides.length;
  updateTesti();
}

function testiGo(i) {
  testiIdx = i;
  updateTesti();
}
setInterval(testiNext, 7000);

// ---- BLOG SLIDER ----
let blogIdx = 0;
const blogGroups = document.querySelectorAll(".blog-slide-group");
const blogDots = document.querySelectorAll(".blog-dot");

function updateBlog() {
  document.getElementById("blogTrack").style.transform =
    `translateX(-${blogIdx * 100}%)`;
  blogDots.forEach((d, i) => d.classList.toggle("active", i === blogIdx));
}

function blogNext() {
  blogIdx = (blogIdx + 1) % blogGroups.length;
  updateBlog();
}

function blogPrev() {
  blogIdx = (blogIdx - 1 + blogGroups.length) % blogGroups.length;
  updateBlog();
}

function blogGo(i) {
  blogIdx = i;
  updateBlog();
}

// ---- SCROLL REVEAL ----
const reveals = document.querySelectorAll(".reveal");
const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((e) => {
      if (e.isIntersecting) {
        e.target.classList.add("visible");
      }
    });
  },
  {
    threshold: 0.1,
    rootMargin: "0px 0px -40px 0px",
  },
);
reveals.forEach((r) => revealObserver.observe(r));

// ---- PARTICLE FIELD ----
(function createParticles() {
  const field = document.getElementById("particleField");
  const colors = [
    "rgba(75,47,191,0.4)",
    "rgba(232,184,64,0.3)",
    "rgba(107,79,216,0.35)",
    "rgba(27,31,74,0.2)",
  ];
  for (let i = 0; i < 28; i++) {
    const p = document.createElement("div");
    p.className = "particle";
    const size = Math.random() * 6 + 2;
    p.style.cssText = `
      width:${size}px;height:${size}px;
      left:${Math.random() * 100}%;
      bottom:${Math.random() * 20 - 10}%;
      background:${colors[Math.floor(Math.random() * colors.length)]};
      animation-duration:${Math.random() * 18 + 10}s;
      animation-delay:${Math.random() * 12}s;
    `;
    field.appendChild(p);
  }
})();

// ---- STAGGERED REVEAL ----
document
  .querySelectorAll(".testi-card, .blog-card, .network-item, .ep-card")
  .forEach((el, i) => {
    el.style.transitionDelay = `${i * 0.07}s`;
  });
