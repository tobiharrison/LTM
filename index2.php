<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <link href="css/navbar.css" rel="stylesheet">
</head>

<body>
  <section class="hero-body">
    <div class="space-bg">
      <canvas id="stars"></canvas>
    </div>
    <div class="navbar-wrapper">
      <?php include('navbar.php'); ?>
    </div>
    <!-- Hero -->
    <section class="hero animate-hero">
      <div class="row">
        <div class="col-6">
          <h1>LOVEWORLD TELEVISION MINISTRY</h1>
          <p>LTM Networks is a family of networks consisting of 5 distinct television networks with a common purpose</p>
          <button class="cta-btn">Click here</button>
        </div>
        <div class="col-6">
          <div class="project-section">
            <div class="project-slider" id="projectSlider">
              <img src="gcsn.jpg">
              <img src="gdopn.jpg">
              <img src="ylwn.jpg">
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- Background shapes -->
    <div class="shape shape1"></div>
    <div class="shape shape2"></div>
    <div class="shape shape3"></div>
    <!-- Floating Icons -->
    <div class="floating-icons">
      <img src="asia.png" class="icon i1">
      <img src="pac.png" class="icon i2">
      <img src="clo.png" class="icon i3">
      <img src="port.png" class="icon i4">
      <img src="span.png" class="icon i5">
    </div>
    <div class="cloud-divider">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none" style="width:100%;">
        <path fill="#ffffff" fill-opacity="1"
          d="M0,64L48,101.3C96,139,192,213,288,229.3C384,245,480,203,576,208C672,213,768,267,864,272C960,277,1056,235,1152,197.3C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>
    </div>
  </section>

  <script>
  const menuToggle = document.querySelector(".menu-toggle");
  const navLinks = document.querySelector(".nav-links");
  menuToggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
  });
  </script>

  <section class="about-body">
    <section class="about-section">
      <div class="about-shapes">
        <div class="shape a1"></div>
        <div class="shape a2"></div>
        <div class="shape a3"></div>
      </div>
      <div class="about-slider">
        <!-- Slides -->
        <div class="slides">
          <div class="slide active">
            <img src="1.jpeg" class="img-fluid" />
            <div class="overlay"></div>
            <div class=" px-3 pt-3 custom-btn-container">
              <p class="faith-btn">
                GLOBAL PRAYER AND FASTING APRIL EDITION
              </p>
              <!-- Bottom-left corner shape -->
              <div class="corner-shape bottom-left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <path d="m100,0H0v100C0,44.77,44.77,0,100,0Z" fill="#f7f5f2"></path>
                </svg>
              </div>
              <!-- Top-right corner shape -->
              <div class="corner-shape top-right">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <path d="m100,0H0v100C0,44.77,44.77,0,100,0Z" fill="#f7f5f2"></path>
                </svg>
              </div>
            </div>
          </div>
          <div class="slide">
            <img src="2.jpeg" class="img-fluid" />
            <div class="overlay"></div>
            <div class=" px-3 pt-3 custom-btn-container">
              <p class="faith-btn">
                HAPPY NEW WEEK
              </p>
              <!-- Bottom-left corner shape -->
              <div class="corner-shape bottom-left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <path d="m100,0H0v100C0,44.77,44.77,0,100,0Z" fill="#f7f5f2"></path>
                </svg>
              </div>
              <!-- Top-right corner shape -->
              <div class="corner-shape top-right">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <path d="m100,0H0v100C0,44.77,44.77,0,100,0Z" fill="#f7f5f2"></path>
                </svg>
              </div>
            </div>
          </div>
          <div class="slide">
            <img src="3.jpeg" class="img-fluid" />
            <div class="overlay"></div>
            <div class=" px-3 pt-3 custom-btn-container">
              <p class="faith-btn">
                GLOBAL COMMUNION SERVICE APRIL EDITION
              </p>
              <!-- Bottom-left corner shape -->
              <div class="corner-shape bottom-left">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <path d="m100,0H0v100C0,44.77,44.77,0,100,0Z" fill="#f7f5f2"></path>
                </svg>
              </div>
              <!-- Top-right corner shape -->
              <div class="corner-shape top-right">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                  <path d="m100,0H0v100C0,44.77,44.77,0,100,0Z" fill="#f7f5f2"></path>
                </svg>
              </div>
            </div>
          </div>
        </div>
        <!-- Arrows -->
        <button class="nav prev">&#10094;</button>
        <button class="nav next">&#10095;</button>
        <!-- Dots -->
        <div class="dots"></div>
      </div>
      <section class="schedule-section">
        <div class="container">
          <div class="row align-items-center">
            <!-- VIDEO -->
            <div class="col-lg-8">
              <div class="video-box">
                <video id="liveVideo" controls poster="poster.png">
                  <source src="vid.mp4" type="video/mp4">
                  Your browser does not support video.
                </video>
              </div>
            </div>
            <!-- SCHEDULE -->
            <div class="col-lg-4">
              <div class="schedule-box">
                <h3>Today's Broadcast</h3>
                <ul class="schedule-list" id="scheduleList"></ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
  </section>
  <section class="info-page">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute; top:0; left:0;">
      <path fill="#f7f5f2" fill-opacity="1"
        d="M0,0L120,10.7C240,21,480,43,720,48C960,53,1200,43,1320,37.3L1440,32L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z">
      </path>
    </svg>
    <div class="space-bg">
      <canvas id="stars"></canvas>
      <canvas id="stars-back"></canvas>
      <canvas id="stars-mid"></canvas>
      <canvas id="stars-front"></canvas>
      <div class="glow glow1"></div>
      <div class="glow glow2"></div>
      <div class="glow glow3"></div>
    </div>
    <section class="network-section">
      <h2>OUR LTM NETWORKS</h2>
      <p>LTM Networks is a family of networks consisting of 5 distinct television networks with a common purpose</p>
      <img src="earth2.png" class="planet" id="planet">
      <div class="network-nav">
        <span id="network-prev">← LEFT</span>

        <div class="planet-bg"></div>
        <span id="network-next">RIGHT →</span>
      </div>


      <div class="network-slider-wrapper">
        <div class="network-slider" id="network-slider">

          <div class="network-card">
            <img src="asia.png">
            <div class="network-card-name">
              <div class="network-title">LOVEWORLD ASIA</div>
              <div class="network-description"> Is a language-based network channel that beams to the Asian continent
              </div>
            </div>
          </div>
          <div class="network-card">
            <img src="port.png">
            <div class="network-card-name">
              <div class="network-title">LOVEWORLD PORTUGESE</div>
              <div class="network-description">
                is a dynamic TV network dedicated to broadcasting the Gospel to over 250 million
                Portuguese Viewers
              </div>
            </div>
          </div>
          <div class="network-card">
            <img src="pac.png">
            <div class="network-card-name">
              <div class="network-title">LOVEWORLD PACIFIC</div>
              <div class="network-description"> cuts across Western Canada, Western US, and Western Mexico,
                reaching over 220 million people
              </div>
            </div>
          </div>
          <div class="network-card">
            <img src="span.png">
            <div class="network-card-name">
              <div class="network-title">LOVEWORLD SPANISH</div>
              <div class="network-description"> is a divinely orchestrated TV Network with a mission to reach over 500
                million Spanish-speaking people
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="view-all">know more about Networks</div>
  </section>
  <section class="action-page">
    <h2>WHAT'S HAPPENING</h2>
    <p class="text">Stay tuned to what happening throung the Word of God</p>
    <div class="container">
      <div class="action-grid">
        <!-- 📰 BLOG -->
        <div class="blog-section">
          <div class="blog-item">
            <img src="blog1.jpeg">
            <div class="blog-text">
              <h4>New Broadcast Expansion</h4>
              <p>We are reaching more nations with the gospel...</p>
            </div>
            <a href="">→</a>
          </div>
          <div class="blog-item">
            <img src="blog2.jpeg">
            <div class="blog-text">
              <h4>Global Prayer Network</h4>
              <p>Join believers worldwide in prayer sessions...</p>
            </div>
            <a href="">→</a>
          </div>
          <div class="blog-item">
            <img src="blog3.jpeg">
            <div class="blog-text">
              <h4>New Broadcast Expansion</h4>
              <p>We are reaching more nations with the gospel...</p>
            </div>
            <a href="">→</a>
          </div>
        </div>
        <!-- 🎬 PROJECT SLIDER -->

      </div>
      <!-- 💬 TESTIMONIALS -->
      <section class="testimonial text-center">
        <div class="container">

          <div class="heading white-heading">
            Testimonial
          </div>
          <div id="testimonial4"
            class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
            data-bs-ride="carousel" data-bs-pause="hover" data-bs-interval="5000" data-bs-duration="2000">

            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="testimonial4_slide">
                  <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. </p>
                  <h4>Client 1</h4>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial4_slide">
                  <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. </p>
                  <h4>Client 2</h4>
                </div>
              </div>
              <div class="carousel-item">
                <div class="testimonial4_slide">
                  <img src="https://i.ibb.co/8x9xK4H/team.jpg" class="img-circle img-responsive" />
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book. </p>
                  <h4>Client 3</h4>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#testimonial4" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#testimonial4" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!---- footer ---->
  <?php include('footer.php'); ?>
  <script>
  const projectSlider = document.getElementById("projectSlider");
  let pIndex = 0;

  setInterval(() => {
    const total = projectSlider.children.length;
    pIndex = (pIndex + 1) % total;

    projectSlider.style.transform = `translateX(-${pIndex * 100}%)`;
  }, 3000);
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="js/hero.js"></script>
  <script src="js/slide.js" type="module"></script>
  <script src="js/schedule.js"></script>
  <script src="js/networkSlide.js" type="module"></script>
</body>

</html>