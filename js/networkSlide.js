const nSlider = document.getElementById("network-slider");
const cards = document.querySelectorAll(".network-card");
const nNext = document.getElementById("network-next");
const nPrev = document.getElementById("network-prev");
const planet = document.getElementById("planet");

let index = 1; // center focus

// 👉 CLONE for infinite loop
const firstClone = cards[0].cloneNode(true);
const lastClone = cards[cards.length - 1].cloneNode(true);

nSlider.appendChild(firstClone);
nSlider.insertBefore(lastClone, nSlider.firstChild);

let allCards = document.querySelectorAll(".network-card");

function updateNslider(animate = true) {
  const wrapper = document.querySelector(".network-slider-wrapper"); // your container
  const offset = allCards[0].offsetWidth + 30;

  const containerWidth = wrapper.offsetWidth;
  const cardWidth = allCards[0].offsetWidth;

  // ✅ TRUE CENTER CALCULATION
  const centerOffset = containerWidth / 2 - cardWidth / 2;

  if (!animate) nSlider.style.transition = "none";
  else nSlider.style.transition = "transform 0.5s ease";

  nSlider.style.transform = `translateX(${centerOffset - index * offset}px)`;

  // Active state
  allCards.forEach((card) => card.classList.remove("active"));
  if (allCards[index]) allCards[index].classList.add("active");

  // Planet rotation
  planet.style.transform = `rotate(${index * 20}deg)`;
}

nNext.addEventListener("click", () => {
  index++;
  updateNslider();

  if (index === allCards.length - 2) {
    setTimeout(() => {
      index = 0;
      updateNslider(false);
    }, 500);
  }
});

/* PREV */
nPrev.addEventListener("click", () => {
  index--;
  updateNslider();

  if (index === 0) {
    setTimeout(() => {
      index = allCards.length - 3;
      updateNslider(false);
    }, 500);
  }
});

// =======================
// 🖱 DRAG / SWIPE SUPPORT
// =======================

let startX = 0;
let isDragging = false;

/* DESKTOP DRAG */
nSlider.addEventListener("mousedown", (e) => {
  isDragging = true;
  startX = e.clientX;
});

nSlider.addEventListener("mouseup", (e) => {
  if (!isDragging) return;

  let diff = e.clientX - startX;

  if (diff > 50) prev.click();
  if (diff < -50) next.click();

  isDragging = false;
});

nSlider.addEventListener("mouseleave", () => {
  isDragging = false;
});

/* TOUCH (MOBILE) */
nSlider.addEventListener("touchstart", (e) => {
  startX = e.touches[0].clientX;
});

nSlider.addEventListener("touchend", (e) => {
  let diff = e.changedTouches[0].clientX - startX;

  if (diff > 50) nPrev.click();
  if (diff < -50) nNext.click();
});

// 3D TILT EFFECT
allCards.forEach((card) => {
  card.addEventListener("mousemove", (e) => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;

    const centerX = rect.width / 99;
    const centerY = rect.height / 99;

    const rotateX = -(y - centerY) / 99;
    const rotateY = (x - centerX) / 99;

    card.style.transform += ` rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
  });

  card.addEventListener("mouseleave", () => {
    card.style.transform = "";
    updateNslider(); // reset properly
  });
});

// INIT
index = 1; // keep center
updateNslider(false);

//////////////////////////////////////////
//////////////////////////////////////////
//////////////////////////////////////////

/////////////////////////////
////////////////////////////

function createStars(canvasId, count, speed, size, alphaRange) {
  const canvas = document.getElementById(canvasId);
  const ctx = canvas.getContext("2d");

  let stars = [];
  let mouse = {
    x: 0,
    y: 0,
  };

  function resize() {
    canvas.width = window.innerWidth;
    canvas.height = canvas.parentElement.offsetHeight;
  }

  resize();
  window.addEventListener("resize", resize);

  // Mouse tracking
  window.addEventListener("mousemove", (e) => {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  });

  // Create stars
  for (let i = 0; i < count; i++) {
    stars.push({
      x: Math.random() * canvas.width,
      y: Math.random() * canvas.height,
      baseX: Math.random() * canvas.width,
      baseY: Math.random() * canvas.height,
      size: Math.random() * size,
      speed: Math.random() * speed,
      alpha: Math.random(),
      twinkleSpeed: Math.random() * 0.02,
    });
  }

  function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    stars.forEach((star) => {
      // ⭐ FLOATING MOTION
      star.y += star.speed;
      if (star.y > canvas.height) {
        star.y = 0;
        star.x = Math.random() * canvas.width; // re-randomize
      }

      // 🖱 PARALLAX (mouse reaction)
      const dx = (mouse.x - canvas.width / 2) * 0.0005;
      const dy = (mouse.y - canvas.height / 2) * 0.0005;

      // 🖱 PARALLAX (visual only — NOT permanent movement)
      const offsetX = (mouse.x - canvas.width / 2) * 0.02;
      const offsetY = (mouse.y - canvas.height / 2) * 0.02;

      // FINAL DRAW POSITION (does NOT change original position)
      let drawX = star.x + offsetX;
      let drawY = star.y + offsetY;

      // ♻️ WRAP AROUND (infinite effect)
      if (drawX > canvas.width) drawX -= canvas.width;
      if (drawX < 0) drawX += canvas.width;
      if (drawY > canvas.height) drawY -= canvas.height;
      if (drawY < 0) drawY += canvas.height;

      // ✨ TWINKLE
      star.alpha += star.twinkleSpeed;
      if (star.alpha > 1 || star.alpha < 0) {
        star.twinkleSpeed *= -1;
      }

      ctx.beginPath();
      ctx.arc(drawX, drawY, star.size, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(255,255,255,${star.alpha})`;
      ctx.fill();
    });

    requestAnimationFrame(animate);
  }

  animate();
}

/* 🌌 CREATE DEPTH LAYERS */
createStars("stars-back", 120, 0.2, 1.2); // far (slow, tiny)
createStars("stars-mid", 80, 0.4, 1.8); // mid
createStars("stars-front", 40, 0.7, 2.5); // front (bigger, faster)
createStars("stars-back2", 120, 0.2, 1.2); // far (slow, tiny)
createStars("stars-mid2", 80, 0.4, 1.8); // mid
createStars("stars-front2", 40, 0.7, 2.5); // front (bigger, faster)
