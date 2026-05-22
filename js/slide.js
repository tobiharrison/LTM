const slides = document.querySelectorAll(".slide");
const slider = document.querySelector(".slides");
const next = document.querySelector(".next");
const prev = document.querySelector(".prev");
const dotsContainer = document.querySelector(".dots");

let index = 0;

/* Create dots */
slides.forEach((_, i) => {
  let dot = document.createElement("span");
  if (i === 0) dot.classList.add("active");

  dot.addEventListener("click", () => {
    index = i;
    updateSlider();
  });

  dotsContainer.appendChild(dot);
});

const dots = document.querySelectorAll(".dots span");

function updateSlider() {
  slider.style.transform = `translateX(-${index * 100}%)`;

  dots.forEach((dot) => dot.classList.remove("active"));
  dots[index].classList.add("active");
}

/* Buttons */
next.addEventListener("click", () => {
  index = (index + 1) % slides.length;
  updateSlider();
});

prev.addEventListener("click", () => {
  index = (index - 1 + slides.length) % slides.length;
  updateSlider();
});

/* Auto play */
setInterval(() => {
  index = (index + 1) % slides.length;
  updateSlider();
}, 5000);
