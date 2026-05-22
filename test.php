<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cosmic Slider</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #4b489b, #733fc8);
    }

    .cosmic-section {
      text-align: center;
      padding: 80px 20px;
      position: relative;
      overflow: hidden;
      height: 100vh;
    }

    /* TITLE */
    .cosmic-section h2 {
      font-size: 32px;
      margin-bottom: 20px;
    }

    /* NAV */
    .nav {
      display: flex;
      justify-content: space-between;
      max-width: 600px;
      margin: auto;
      margin-bottom: 30px;
    }

    .nav span {
      cursor: pointer;
    }

    /* PLANET GLOW */
    .planet-bg {
      position: absolute;
      top: 40%;
      left: 50%;
      width: 300px;
      height: 300px;
      background: radial-gradient(circle, #ff7b00, transparent);
      border-radius: 50%;
      transform: translate(-50%, -50%);
      filter: blur(60px);
      animation: pulse 4s infinite alternate;
      z-index: 0;
    }

    @keyframes pulse {
      from {
        transform: translate(-50%, -50%) scale(1);
      }

      to {
        transform: translate(-50%, -50%) scale(1.2);
      }
    }

    /* CAROUSEL */
    .carousel {
      display: flex;
      justify-content: center;
      align-items: center;
      perspective: 1200px;
      position: relative;
      height: 300px;
    }

    /* CARD */
    .card {
      position: absolute;
      width: 200px;
      height: 240px;
      border-radius: 20px;
      overflow: hidden;
      transition:
        transform 0.5s ease,
        filter 0.5s,
        opacity 0.5s;
    }

    .card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    /* STATES */
    .card.active {
      transform: translateX(0) scale(1.2) translateZ(150px);
      z-index: 3;
    }

    .card.left {
      transform: translateX(-220px) scale(0.9) rotateY(20deg);
      filter: blur(2px);
      opacity: 0.6;
    }

    .card.right {
      transform: translateX(220px) scale(0.9) rotateY(-20deg);
      filter: blur(2px);
      opacity: 0.6;
    }

    .card.hidden {
      opacity: 0;
      transform: scale(0.5);
    }

    #planet3D {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      width: 780px;
      height: 780px;
      padding: 0px;
      margin: 20px auto;
      z-index: 1;

    }

    .space-bg {
      position: absolute;
      inset: 0;
      overflow: hidden;
      z-index: 0;
    }

    /* All layers stacked */
    .space-bg canvas {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
    }

    /* Depth illusion */
    #stars-back {
      z-index: 0;
    }

    #stars-mid {
      z-index: 1;
    }

    #stars-front {
      z-index: 2;
    }

    /* Glow blobs */
    .glow {
      position: absolute;
      border-radius: 50%;
      filter: blur(120px);
      opacity: 0.4;
    }

    .glow1 {
      width: 300px;
      height: 300px;
      background: #ff7b00;
      top: 20%;
      left: 10%;
    }

    .glow2 {
      width: 250px;
      height: 250px;
      background: #6a5cff;
      bottom: 10%;
      right: 15%;
    }

    /* Keep content above */
    .section {
      position: relative;
      z-index: 5;
    }

    .heading {
      text-align: center;
      color: #454343;
      font-size: 30px;
      font-weight: 700;
      position: relative;
      margin-bottom: 70px;
      text-transform: uppercase;
      z-index: 999;
    }

    .white-heading {
      color: #ffffff;
    }

    .heading:after {
      content: ' ';
      position: absolute;
      top: 100%;
      left: 50%;
      height: 40px;
      width: 180px;
      border-radius: 4px;
      transform: translateX(-50%);
      background: url(img/heading-line.png);
      background-repeat: no-repeat;
      background-position: center;
    }

    .white-heading:after {
      background: url(https://i.ibb.co/d7tSD1R/heading-line-white.png);
      background-repeat: no-repeat;
      background-position: center;
    }

    .heading span {
      font-size: 18px;
      display: block;
      font-weight: 500;
    }

    .white-heading span {
      color: #ffffff;
    }

    /*-----Testimonial-------*/

    .testimonial:after {
      position: absolute;
      top: -0 !important;
      left: 0;
      content: " ";
      background: url(img/testimonial.bg-top.png);
      background-size: 100% 100px;
      width: 100%;
      height: 100px;
      float: left;
      z-index: 99;
    }

    .testimonial {
      min-height: 375px;
      position: relative;
      background: url(https://i.ibb.co/PTJDkgb/testimonials.jpg);
      padding-top: 50px;
      padding-bottom: 50px;
      background-position: center;
      background-size: cover;
    }

    #testimonial4 .carousel-inner:hover {
      cursor: -moz-grab;
      cursor: -webkit-grab;
    }

    #testimonial4 .carousel-inner:active {
      cursor: -moz-grabbing;
      cursor: -webkit-grabbing;
    }

    #testimonial4 .carousel-inner .item {
      overflow: hidden;
    }

    .testimonial4_indicators .carousel-indicators {
      left: 0;
      margin: 0;
      width: 100%;
      font-size: 0;
      height: 20px;
      bottom: 15px;
      padding: 0 5px;
      cursor: e-resize;
      overflow-x: auto;
      overflow-y: hidden;
      position: absolute;
      text-align: center;
      white-space: nowrap;
    }

    .testimonial4_indicators .carousel-indicators li {
      padding: 0;
      width: 14px;
      height: 14px;
      border: none;
      text-indent: 0;
      margin: 2px 3px;
      cursor: pointer;
      display: inline-block;
      background: #ffffff;
      -webkit-border-radius: 100%;
      border-radius: 100%;
    }

    .testimonial4_indicators .carousel-indicators .active {
      padding: 0;
      width: 14px;
      height: 14px;
      border: none;
      margin: 2px 3px;
      background-color: #9dd3af;
      -webkit-border-radius: 100%;
      border-radius: 100%;
    }

    .testimonial4_indicators .carousel-indicators::-webkit-scrollbar {
      height: 3px;
    }

    .testimonial4_indicators .carousel-indicators::-webkit-scrollbar-thumb {
      background: #eeeeee;
      -webkit-border-radius: 0;
      border-radius: 0;
    }

    .testimonial4_control_button .carousel-control {
      top: 175px;
      opacity: 1;
      width: 40px;
      bottom: auto;
      height: 40px;
      font-size: 10px;
      cursor: pointer;
      font-weight: 700;
      overflow: hidden;
      line-height: 38px;
      text-shadow: none;
      text-align: center;
      position: absolute;
      background: transparent;
      border: 2px solid #ffffff;
      text-transform: uppercase;
      -webkit-border-radius: 100%;
      border-radius: 100%;
      -webkit-box-shadow: none;
      box-shadow: none;
      -webkit-transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
      transition: all 0.6s cubic-bezier(0.3, 1, 0, 1);
    }

    .testimonial4_control_button .carousel-control.left {
      left: 7%;
      top: 50%;
      right: auto;
    }

    .testimonial4_control_button .carousel-control.right {
      right: 7%;
      top: 50%;
      left: auto;
    }

    .testimonial4_control_button .carousel-control.left:hover,
    .testimonial4_control_button .carousel-control.right:hover {
      color: #000;
      background: #fff;
      border: 2px solid #fff;
    }

    .testimonial4_header {
      top: 0;
      left: 0;
      bottom: 0;
      width: 550px;
      display: block;
      margin: 30px auto;
      text-align: center;
      position: relative;
    }

    .testimonial4_header h4 {
      color: #ffffff;
      font-size: 30px;
      font-weight: 600;
      position: relative;
      letter-spacing: 1px;
      text-transform: uppercase;
    }

    .testimonial4_slide {
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      width: 70%;
      margin: auto;
      padding: 20px;
      position: relative;
      text-align: center;
    }

    .testimonial4_slide img {
      top: 0;
      left: 0;
      right: 0;
      width: 136px;
      height: 136px;
      margin: auto;
      display: block;
      color: #f2f2f2;
      font-size: 18px;
      line-height: 46px;
      text-align: center;
      position: relative;
      border-radius: 50%;
      box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
      -moz-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
      -o-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
      -webkit-box-shadow: -6px 6px 6px rgba(0, 0, 0, 0.23);
    }

    .testimonial4_slide p {
      color: #ffffff;
      font-size: 20px;
      line-height: 1.4;
      margin: 40px 0 20px 0;
    }

    .testimonial4_slide h4 {
      color: #ffffff;
      font-size: 22px;
    }

    .testimonial .carousel {
      padding-bottom: 50px;
    }

    .testimonial .carousel-control-next-icon,
    .testimonial .carousel-control-prev-icon {
      width: 35px;
      height: 35px;
    }

    .hero {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      text-align: center;
      color: #fff;
      background: linear-gradient(135deg, #4b2fbf, #1b1f4a);
      position: relative;
      padding: 0 20px;
    }

    .hero-content {
      max-width: 750px;
      z-index: 5;
    }

    .hero h1 {
      font-size: 58px;
      font-weight: 700;
      line-height: 1.1;
      margin-bottom: 10px;
    }

    .hero .tagline {
      font-size: 20px;
      font-weight: 500;
      color: #c9c9ff;
      margin-bottom: 20px;
    }

    .hero p {
      font-size: 18px;
      opacity: 0.9;
      margin-bottom: 30px;
    }

    .cta-wrapper {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .cta-btn.primary {
      background: #fff;
      color: #1b1f4a;
    }

    .cta-btn.secondary {
      background: transparent;
      border: 2px solid #fff;
      color: #fff;
    }

    .cta-btn:hover {
      transform: scale(1.07);
    }

    /* ===== SECTION BASE ===== */
    .intro-video-section {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
      perspective: 1000px;
    }

    /* ===== VIDEO ===== */
    .bg-video {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      top: 0;
      left: 0;
      transform: scale(1.1);
    }

    /* ===== OVERLAY ===== */
    .video-overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      background: linear-gradient(to bottom,
          rgba(0, 0, 0, 0.6),
          rgba(0, 0, 0, 0.85));
      backdrop-filter: blur(3px);
    }

    /* ===== CONTENT ===== */
    .intro-content {
      position: relative;
      z-index: 2;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      transform: translateZ(50px);
      padding: 20px;
    }

    /* ===== TEXT ===== */
    .intro-title {
      font-size: 48px;
      color: #fff;
      font-weight: 700;
      margin-bottom: 20px;
      opacity: 0;
      transform: translateY(40px);
    }

    .intro-sub {
      font-size: 18px;
      color: #ddd;
      margin-bottom: 30px;
      opacity: 0;
      transform: translateY(40px);
    }

    /* ===== BUTTONS ===== */
    .intro-buttons {
      display: flex;
      gap: 15px;
      opacity: 0;
      transform: translateY(40px);
    }

    .btn {
      padding: 12px 24px;
      border-radius: 30px;
      text-decoration: none;
      font-size: 14px;
      transition: 0.3s ease;
    }

    .btn.primary {
      background: #ffcc00;
      color: #000;
    }

    .btn.secondary {
      border: 1px solid #fff;
      color: #fff;
    }

    .btn:hover {
      transform: translateY(-3px) scale(1.05);
    }

    /* ===== ANIMATION ACTIVE ===== */
    .intro-active .intro-title,
    .intro-active .intro-sub,
    .intro-active .intro-buttons {
      opacity: 1;
      transform: translateY(0);
      transition: all 1s ease;
    }

    /* ===== PARALLAX SCROLL EFFECT ===== */
    .intro-video-section.scrolled .bg-video {
      transform: scale(1.2) translateY(40px);
    }
  </style>
</head>

<body>
  <section class="intro-video-section">
    <video autoplay muted loop playsinline class="bg-video">
      <source src="about.mp4" type="video/mp4">
    </video>

    <div class="video-overlay"></div>

    <div class="intro-content">
      <h1 class="intro-title">Broadcasting the Gospel to the Ends of the Earth</h1>
      <p class="intro-sub">
        Connecting nations through faith, media, and divine impact.
      </p>

      <div class="intro-buttons">
        <a href="tv_directory.php" class="btn primary">Watch Live</a>
        <a href="about.php" class="btn secondary">Learn More</a>
      </div>
    </div>
  </section>
  <!-- <section class="hero-body">
    <div class="space-bg"><canvas id="stars"></canvas></div>
    <div class="navbar-wrapper"></div><?php //include('navbar.php'); 
                                      ?></div>

    <section class="hero animate-hero">
      <div class="hero-content">
        <h1>Loveworld Television Ministry</h1>
        <h3 class="tagline">Inspiring Faith Through Global Broadcast</h3>
        <p>Uniting 5 dynamic networks to spread the Gospel to every corner of the earth.</p>

        <div class="cta-wrapper">
          <button class="cta-btn primary">Watch Live</button>
          <button class="cta-btn secondary">Learn More</button>
        </div>
      </div>
    </section>

    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    <div class="shape shape3"></div>

    <div class="floating-icons">
      <img src="asia.png" class="icon i1">
      <img src="pac.png" class="icon i2">
      <img src="clo.png" class="icon i3">
      <img src="port.png" class="icon i4">
      <img src="span.png" class="icon i5">
    </div>

    <div class="cloud-divider">
      <svg xmlns="[w3.org](http://www.w3.org/2000/svg)" viewBox="0 0 1440 320">
        <path fill="#f7f5f2" d="M0,64L48,101.3C96,139,192,213..." />
      </svg>
    </div>
  </section> -->

  <!-- <section class="cosmic-section">
    <div class="space-bg">
      <canvas id="stars-back"></canvas>
      <canvas id="stars-mid"></canvas>
      <canvas id="stars-front"></canvas>

      <div class="glow glow1"></div>
      <div class="glow glow2"></div>
    </div>
    <script>
      function createStars(canvasId, count, speed, size, alphaRange) {
        const canvas = document.getElementById(canvasId);
        const ctx = canvas.getContext("2d");

        let stars = [];
        let mouse = {
          x: 0,
          y: 0
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
            twinkleSpeed: Math.random() * 0.02
          });
        }

        function animate() {
          ctx.clearRect(0, 0, canvas.width, canvas.height);

          stars.forEach(star => {
            // ⭐ FLOATING MOTION
            star.y += star.speed;
            if (star.y > canvas.height) {
              star.y = 0;
              star.x = Math.random() * canvas.width;
            }

            // 🖱 PARALLAX (mouse reaction)
            const dx = (mouse.x - canvas.width / 2) * 0.0005;
            const dy = (mouse.y - canvas.height / 2) * 0.0005;

            star.x += dx * 20;
            star.y += dy * 20;

            // ✨ TWINKLE
            star.alpha += star.twinkleSpeed;
            if (star.alpha > 1 || star.alpha < 0) {
              star.twinkleSpeed *= -1;
            }

            ctx.beginPath();
            ctx.arc(star.x, star.y, star.size, 0, Math.PI * 2);
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
    </script>
    <h2>Our Cosmic Wardrobe</h2>
    <div id="planet3D"></div>
    <div class="nav">
      <span id="prev">← PLUTO</span>

      <span id="next">VENUS →</span>
    </div>

    
  <div class="planet-bg"></div>

  <!-- CAROUSEL -->
  <!-- <div class="carousel" id="carousel">

      <div class="card"><img src="https://images.unsplash.com/photo-1585386959984-a4155224a1ad"></div>
      <div class="card"><img src="https://images.unsplash.com/photo-1520975922284-9e0f9e7c39f8"></div>
      <div class="card"><img src="https://images.unsplash.com/photo-1541099649105-f69ad21f3246"></div>
      <div class="card"><img src="https://images.unsplash.com/photo-1600180758890-6b94519a8ba6"></div>
      <div class="card"><img src="https://images.unsplash.com/photo-1526178613552-2b45c6c302f0"></div>

    </div> -->
  </section> -->


  <script>
    // Trigger intro animation on load
    window.addEventListener("load", () => {
      document.querySelector(".intro-video-section")
        .classList.add("intro-active");
    });

    // Subtle parallax on scroll
    window.addEventListener("scroll", () => {
      const section = document.querySelector(".intro-video-section");
      const scrollY = window.scrollY;

      if (scrollY > 50) {
        section.classList.add("scrolled");
      } else {
        section.classList.remove("scrolled");
      }
    });

    const slider = document.getElementById("slider");
    const cards = document.querySelectorAll(".card");
    const next = document.getElementById("next");
    const prev = document.getElementById("prev");
    const planet = document.getElementById("planet");

    let index = 2; // center focus

    // 👉 CLONE for infinite loop
    const firstClone = cards[0].cloneNode(true);
    const lastClone = cards[cards.length - 1].cloneNode(true);

    slider.appendChild(firstClone);
    slider.insertBefore(lastClone, slider.firstChild);

    let allCards = document.querySelectorAll(".card");

    /* UPDATE SLIDER */
    function updateSlider(animate = true) {
      const offset = allCards[0].offsetWidth + 30;

      if (!animate) slider.style.transition = "none";
      else slider.style.transition = "transform 0.5s ease";

      slider.style.transform = `translateX(-${index * offset - offset * 2}px)`;

      allCards.forEach((card) => card.classList.remove("active"));
      if (allCards[index]) allCards[index].classList.add("active");

      // Planet rotation
      planet.style.transform = `rotate(${index * 20}deg)`;
    }

    /* NEXT */
    next.addEventListener("click", () => {
      index++;
      updateSlider();

      if (index === allCards.length - 2) {
        setTimeout(() => {
          index = 1;
          updateSlider(false);
        }, 500);
      }
    });

    /* PREV */
    prev.addEventListener("click", () => {
      index--;
      updateSlider();

      if (index === 0) {
        setTimeout(() => {
          index = allCards.length - 3;
          updateSlider(false);
        }, 500);
      }
    });

    // =======================
    // 🖱 DRAG / SWIPE SUPPORT
    // =======================

    let startX = 0;
    let isDragging = false;

    /* DESKTOP DRAG */
    slider.addEventListener("mousedown", (e) => {
      isDragging = true;
      startX = e.clientX;
    });

    slider.addEventListener("mouseup", (e) => {
      if (!isDragging) return;

      let diff = e.clientX - startX;

      if (diff > 50) prev.click();
      if (diff < -50) next.click();

      isDragging = false;
    });

    slider.addEventListener("mouseleave", () => {
      isDragging = false;
    });

    /* TOUCH (MOBILE) */
    slider.addEventListener("touchstart", (e) => {
      startX = e.touches[0].clientX;
    });

    slider.addEventListener("touchend", (e) => {
      let diff = e.changedTouches[0].clientX - startX;

      if (diff > 50) prev.click();
      if (diff < -50) next.click();
    });

    // INIT
    index = 2; // keep center
    updateSlider(false);
  </script>

  <script type="module">
    import * as THREE from 'https://unpkg.com/three@0.160.0/build/three.module.js';
    // THREE JS PLANET
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({
      alpha: true,
    });

    renderer.setSize(780, 780);
    document.getElementById("planet3D").appendChild(renderer.domElement);

    // Sphere
    const geometry = new THREE.SphereGeometry(2, 64, 64);

    // Texture (replace with your own planet texture)
    const texture = new THREE.TextureLoader().load("text.jpg", (tex) => {
      // This triggers once the image is actually ready
      material.map = tex;
      material.needsUpdate = true;
    });

    const material = new THREE.MeshStandardMaterial({
      map: texture,
    });
    const sphere = new THREE.Mesh(geometry, material);
    scene.add(sphere);

    // Light
    const light = new THREE.PointLight(0xffffff, 1.5);
    light.position.set(5, 5, 5);
    scene.add(light);

    const ambientLight = new THREE.AmbientLight(0xffffff, 1.5); // Soft white light
    scene.add(ambientLight);

    camera.position.z = 10;

    // Animate
    function animate() {
      requestAnimationFrame(animate);
      sphere.rotation.y += 0.005;
      renderer.render(scene, camera);
    }

    animate();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>


</html>