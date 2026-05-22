<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700;900&family=Nunito:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Playfair+Display:ital,wght@0,600;0,700;1,500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="//releases.flowplayer.org/7.2.7/skin/skin.css">
  <link href="css/index.css" rel="stylesheet">
</head>

<body>

  <!-- Ambient Orbs -->
  <div class="orb orb-1"></div>
  <div class="orb orb-2"></div>
  <div class="orb orb-3"></div>

  <!-- Particle Field -->
  <div class="particle-field" id="particleField"></div>

  <?php include('navbar.php'); ?>

  <?php include('intro.php'); ?>

  <!-- ===== HERO: BANNER + E-CARD ===== -->
  <section class="hero-section">
    <!-- Banner Slider -->
    <div class="banner-slider-wrap">
      <div class="banner-track" id="bannerTrack">

        <!-- Slide 1 -->
        <div class="banner-slide active">
          <div class="slide-bg" style="background:linear-gradient(135deg,#0a0520 0%,#1b1f4a 40%,#4b2fbf 100%)">
            <img src="1.jpeg">
          </div>
          <div class="slide-overlay">
            <!-- <div class="slide-badge">📡 New Broadcast Season</div>
            <div class="slide-title">Networking Every Home<br>With Divine Presence</div> -->
            <!-- <div class="slide-desc">The Loveworld Television Ministry carries the mandate to reach every nation, every
              home — transmitting the light of God's Word across every screen on earth.</div> -->
            <a href="#" class="slide-cta"><i class="fas fa-play"></i> Watch Now</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="banner-slide">
          <div class="slide-bg" style="background:linear-gradient(160deg,#0e082b 0%,#2a0e6b 45%,#1b1f4a 100%)">
            <img src="2.jpeg">
          </div>
          <div class="slide-overlay">
            <a href="#" class="slide-cta"><i class="fas fa-play"></i> Watch Now</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="banner-slide">
          <div class="slide-bg" style="background:linear-gradient(150deg,#1a0a35 0%,#4b2fbf 50%,#e8b840 100%)">
            <img src="3.jpeg">
          </div>
          <div class="slide-overlay">
            <a href="#" class="slide-cta"><i class="fas fa-play"></i> Watch Now</a>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="banner-slide">
          <div class="slide-bg" style="background:linear-gradient(140deg,#04111f 0%,#1b1f4a 40%,#0f3460 100%)">
            <img src="4.jpeg">
          </div>
          <div class="slide-overlay">
            <a href="#" class="slide-cta"><i class="fas fa-play"></i> Watch Now</a>
          </div>
        </div>
      </div>

      <!-- Arrows -->
      <button class="slider-arrow prev" onclick="bannerPrev()"><i class="fas fa-chevron-left"></i></button>
      <button class="slider-arrow next" onclick="bannerNext()"><i class="fas fa-chevron-right"></i></button>

      <!-- Dots -->
      <div class="slider-nav" id="bannerDots">
        <div class="slider-dot active" onclick="bannerGo(0)"></div>
        <div class="slider-dot" onclick="bannerGo(1)"></div>
        <div class="slider-dot" onclick="bannerGo(2)"></div>
        <div class="slider-dot" onclick="bannerGo(3)"></div>
      </div>
    </div>

    <!-- E-Card -->
    <div class="ecard-wrap">
      <div class="ecard">
        <div class="ecard-header">
          <div class="ecard-tag">🔥 Ongoing Project</div>
          <!-- <div class="ecard-title">LTV Signal Expansion<br>Africa Initiative</div> -->
        </div>
        <div class="ecard-img">
          <div class="proj-slider-wrap2">
            <div class="proj-track2" id="projTrack2">
              <!-- Project 1 -->
              <div class="proj-slide2">
                <div class="ecard-img-bg">
                  <div class="ecard-icon">
                    <div class="ecard-icon-thumb">
                      <img src="proj1.png" width="80px">
                    </div>
                    <div class="ecard-icon-info">
                      <div class="ecard-title">PASTOR CHRIS ON TV AT 30</div>
                      <div class="ecard-text">
                        <strong>Celebrating Pastor Chris on TV at 30</strong> — three decades of transformational
                        television
                        ministry that has taken God's Word into billions of homes across 180+ nations.
                      </div>
                    </div>
                  </div>
                  <div class="ecard-progress-wrap">
                    <div class="ecard-progress-label">
                      <span>68% Funded</span>

                    </div>
                    <div class="ecard-progress-bar">
                      <div class="ecard-progress-fill"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Project 2 -->
              <div class="proj-slide2">
                <div class="ecard-img-bg">
                  <div class="ecard-icon">
                    <div class="ecard-icon-thumb">
                      <img src="proj2.png" width="80px">
                    </div>
                    <div class="ecard-icon-info">
                      <div class="ecard-title">PASTOR CHRIS ON TV AT 30</div>
                      <div class="ecard-text">
                        <strong>Celebrating Pastor Chris on TV at 30</strong> — three decades of transformational
                        television
                        ministry that has taken God's Word into billions of homes across 180+ nations.
                      </div>
                    </div>
                  </div>
                  <div class="ecard-progress-wrap">
                    <div class="ecard-progress-label">
                      <span>68% Funded</span>

                    </div>
                    <div class="ecard-progress-bar">
                      <div class="ecard-progress-fill"></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Project 3 -->
              <div class="proj-slide2">
                <div class="ecard-img-bg">
                  <div class="ecard-icon">
                    <div class="ecard-icon-thumb">
                      <img src="proj3.png" width="80px">
                    </div>
                    <div class="ecard-icon-info">
                      <div class="ecard-title">PASTOR CHRIS ON TV AT 30</div>
                      <div class="ecard-text">
                        <strong>Celebrating Pastor Chris on TV at 30</strong> — three decades of transformational
                        television
                        ministry that has taken God's Word into billions of homes across 180+ nations.
                      </div>
                    </div>
                  </div>
                  <div class="ecard-progress-wrap">
                    <div class="ecard-progress-label">
                      <span>68% Funded</span>

                    </div>
                    <div class="ecard-progress-bar">
                      <div class="ecard-progress-fill"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="proj-nav2">
            <div class="proj-dots2" id="projDots2">
              <div class="proj-dot2 active" onclick="projGoo(0)"></div>
              <div class="proj-dot2" onclick="projGoo(1)"></div>
              <div class="proj-dot2" onclick="projGoo(2)"></div>
            </div>
            <div class="proj-arrows2">
              <button class="proj-arrow2" onclick="projPrevv()"><i class="fas fa-chevron-left"></i></button>
              <button class="proj-arrow2" onclick="projNextt()"><i class="fas fa-chevron-right"></i></button>
            </div>
          </div>
          <div class="ecard-footer">
            <button class="ecard-btn primary">Donate Now</button>
            <button class="ecard-btn ghost">Learn More</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== MID ROW: WEB TV + NETWORKS + PROJECTS ===== -->
  <div class="mid-row">

    <!-- Web TV -->
    <div class="webtv-card reveal">
      <div class="card-header">
        <div class="card-title">
          <div class="dot"></div>
          LTV Web Television
        </div>
        <span class="live-badge">LIVE</span>
      </div>
      <div class="tv-screen">
        <!-- Add following section in the page's <body> tag, where you need the player to be shown -->
        <div class="flowplayer" data-live="true" data-share="false" data-ratio="0.5625">
          <video autoplay>
            <source type="application/x-mpegurl"
              src="https://go5lm6a6dawb-hls-live.5centscdn.com/6731_push_2945_001/ae3209c9c56c1cb112aca7dac4f9f3c1.sdp/playlist.m3u8">
          </video>
        </div>

        <!-- <div class="tv-screen-inner">
          <div class="tv-play-btn">
            <i class="fas fa-play"></i>
          </div>
          <div class="tv-channel-name">LOVEWORLD TV — CHANNEL 1</div>
          <div style="font-size:0.72rem;color:rgba(255,255,255,0.4)">Click to Watch Live</div>
        </div> -->
        <div class="tv-scanline"></div>
        <!-- Animated broadcast lines -->
        <div
          style="position:absolute;inset:0;background:linear-gradient(to bottom,rgba(75,47,191,0.08),transparent 30%,transparent 70%,rgba(27,31,74,0.2));pointer-events:none">
        </div>
      </div>
      <div class="schedule-list">
        <div class="schedule-title-row"><i class="fas fa-calendar-alt" style="margin-right:5px"></i>Today's Schedule
        </div>
        <div class="schedule-item">
          <div class="sched-time">06:00 AM</div>
          <div class="sched-bar"></div>
          <div class="sched-info">
            <div class="sched-show">Praise & Worship Hour</div>
            <div class="sched-host">Loveworld Choir</div>
          </div>
          <span class="sched-status upcoming">Upcoming</span>
        </div>
        <div class="schedule-item">
          <div class="sched-time">08:00 AM</div>
          <div class="sched-bar active"></div>
          <div class="sched-info">
            <div class="sched-show">Rhapsody of Realities</div>
            <div class="sched-host">Pastor Chris Oyakhilome</div>
          </div>
          <span class="sched-status on-air">On Air</span>
        </div>
        <div class="schedule-item">
          <div class="sched-time">10:00 AM</div>
          <div class="sched-bar"></div>
          <div class="sched-info">
            <div class="sched-show">Healing Streams Live</div>
            <div class="sched-host">Pastor Deola Phillips</div>
          </div>
          <span class="sched-status next">Up Next</span>
        </div>
        <div class="schedule-item">
          <div class="sched-time">02:00 PM</div>
          <div class="sched-bar"></div>
          <div class="sched-info">
            <div class="sched-show">Your LoveWorld Special</div>
            <div class="sched-host">Pastor Chris Oyakhilome</div>
          </div>
          <span class="sched-status upcoming">Upcoming</span>
        </div>
        <div class="schedule-item">
          <div class="sched-time">07:00 PM</div>
          <div class="sched-bar"></div>
          <div class="sched-info">
            <div class="sched-show">Night of Bliss Global</div>
            <div class="sched-host">Loveworld Special Broadcast</div>
          </div>
          <span class="sched-status upcoming">Upcoming</span>
        </div>
      </div>
    </div>


    <div class="net-proj-card">

      <!-- Loveworld Networks -->
      <div class="networks-card reveal">
        <div class="card-header">
          <div class="card-title">Loveworld Networks</div>
        </div>
        <div class="network-grid">
          <div class="network-item net-bg-portuguese">
            <div class="network-flag">
              <img src="port.png" width="40px">
            </div>
            <div class="network-name">Loveworld Portugese</div>
            <div class="network-region">Middle East</div>
          </div>
          <div class="network-item net-bg-spanish">
            <div class="network-flag">
              <img src="span.png" width="40px">
            </div>
            <div class="network-name">Loveworld Spanish</div>
            <div class="network-region">Latin America</div>
          </div>
          <div class="network-item net-bg-asia">
            <div class="network-flag">
              <img src="asia.png" width="40px">
            </div>
            <div class="network-name">Loveworld Asia</div>
            <div class="network-region">Asia Region</div>
          </div>
          <div class="network-item net-bg-pacific">
            <div class="network-flag">
              <img src="pac.png" width="40px">
            </div>
            <div class="network-name">Loveworld Pacific</div>
            <div class="network-region">Pacific Islands</div>
          </div>
        </div>
        <div class="networks-footer">
          <a href="network.php" class="view-more-btn">
            <i class="fas fa-th-large"></i> View More Networks
          </a>
        </div>
      </div>

      <!-- Projects Slider -->
      <div class="projects-card reveal">
        <div class="card-header">
          <div class="card-title">Flagship Programs</div>
        </div>
        <div class="proj-slider-wrap">
          <div class="proj-track" id="projTrack">

            <!-- Project 1 -->
            <div class="proj-slide">
              <div class="proj-img">
                <img src="ylw_s.jpeg">
                <div class="proj-img-overlay">
                  <span class="proj-category">Ongoing</span>
                </div>
              </div>
              <div class="proj-name">YOUR LOVEWORLD SPECIALS</div>
              <div class="proj-desc">Transmitting undiluted truth, and the concise revelation of God’s Word through the
                live broadcast of Your Loveworld Specials
              </div>
              <div class="proj-progress">
                <div class="proj-progress-label"><span>Funded</span><span>68%</span></div>
                <div class="proj-progress-bar">
                  <div class="proj-fill" style="width:68%"></div>
                </div>
              </div>
            </div>

            <!-- Project 2 -->
            <div class="proj-slide">
              <div class="proj-img" style="background:linear-gradient(145deg,#1a0e5a,#4b2fbf)">
                <img src="gcs_s.jpeg">
                <div class="proj-img-overlay">
                  <span class="proj-category">Ongoing</span>
                </div>
              </div>
              <div class="proj-name">GLOBAL COMMUNION SERVICE</div>
              <div class="proj-desc">The transmission of the monthly Global Communion Service with our Man of God on
                multiple Television Stations and Satellite Networks across the globe</div>
              <div class="proj-progress">
                <div class="proj-progress-label"><span>Funded</span><span>91%</span></div>
                <div class="proj-progress-bar">
                  <div class="proj-fill" style="width:91%"></div>
                </div>
              </div>
            </div>

            <!-- Project 3 -->
            <div class="proj-slide">
              <div class="proj-img" style="background:linear-gradient(145deg,#1b1f4a,#0f3460)">
                <img src="gdop_s.jpeg">
                <div class="proj-img-overlay">
                  <span class="proj-category">Ongoing</span>
                </div>
              </div>
              <div class="proj-name">GLOBAL DAY OF PRAYER</div>
              <div class="proj-desc">The quarterly transmission of the Global Day of Prayer on multiple Television
                Stations and Satellite Networks connects billions</div>
              <div class="proj-progress">
                <div class="proj-progress-label"><span>Funded</span><span>45%</span></div>
                <div class="proj-progress-bar">
                  <div class="proj-fill" style="width:45%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="proj-nav">
          <div class="proj-dots" id="projDots">
            <div class="proj-dot active" onclick="projGo(0)"></div>
            <div class="proj-dot" onclick="projGo(1)"></div>
            <div class="proj-dot" onclick="projGo(2)"></div>
          </div>
          <div class="proj-arrows">
            <button class="proj-arrow" onclick="projPrev()"><i class="fas fa-chevron-left"></i></button>
            <button class="proj-arrow" onclick="projNext()"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
      </div>
    </div>


  </div>

  <!-- ===== INSPIRING VIDEOS ===== -->
  <div class="dark-section">
    <div class="section-wrap" style="padding-bottom:40px">
      <div class="section-head">
        <div>
          <div class="section-label">✨ Featured Content</div>
          <div class="section-title">Inspiring <span>Videos</span></div>
          <div class="section-line"></div>
        </div>
        <a href="blog.php" class="see-all-btn">View More <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="videos-row">
        <!-- Main Player -->
        <div class="main-video-player reveal">
          <div class="video-screen">
            <video id="video" src="about.mp4" controls autoplay muted style="width:100%"></video>
            <div class="video-grid-overlay"></div>
            <div class="video-screen-inner">
              <div
                style="position:absolute;inset:0;background:radial-gradient(ellipse at center,rgba(75,47,191,0.3),rgba(27,31,74,0.8));">
              </div>
              <!-- <div style="text-align:center;position:relative;z-index:1;">
                <div
                  style="font-size:0.65rem;letter-spacing:0.2em;color:var(--gold);font-weight:700;text-transform:uppercase;margin-bottom:10px;">
                  Now Playing</div>
                <div style="font-family:'Cinzel',serif;font-size:1.1rem;font-weight:700;color:#fff;margin-bottom:6px;">
                  Faith Beyond Boundaries</div>
                <div style="font-size:0.75rem;color:rgba(255,255,255,0.5);margin-bottom:20px;">Pastor Chris Oyakhilome •
                  45:22</div>
                <div class="video-play-btn" style="margin:0 auto">
                  <i class="fas fa-play"></i>
                </div>
              </div> -->
            </div>
          </div>
          <div class="video-meta">
            <div class="video-meta-info">
              <div class="video-meta-title">Faith Beyond Boundaries — Full Message</div>
              <div class="video-meta-sub">Pastor Chris Oyakhilome · 2.4M views · Sunday Service</div>
            </div>
            <!-- <div class="video-controls">
              <button class="vc-btn"><i class="fas fa-thumbs-up"></i></button>
              <button class="vc-btn"><i class="fas fa-share"></i></button>
              <button class="vc-btn"><i class="fas fa-bookmark"></i></button>
            </div> -->
          </div>
        </div>

        <!-- Episode List -->
        <div class="episode-list reveal">

          <div class="ep-card playing">
            <div class="ep-thumb">
              <i class="fas fa-video"></i>
              <div class="ep-thumb-play"><i class="fas fa-play"></i></div>
            </div>
            <div class="ep-info">
              <div class="ep-title">Faith Beyond Boundaries</div>
              <div class="ep-host">Pastor Chris Oyakhilome</div>
              <div class="ep-duration"><i class="fas fa-clock"></i> 45:22</div>
            </div>
            <div class="ep-num">#01</div>
          </div>

          <div class="ep-card">
            <div class="ep-thumb" style="background:linear-gradient(135deg,#1b1f4a,#0f3460)">
              <i class="fas fa-video"></i>
              <div class="ep-thumb-play"><i class="fas fa-play"></i></div>
            </div>
            <div class="ep-info">
              <div class="ep-title">The Power of His Resurrection</div>
              <div class="ep-host">Pastor Chris Oyakhilome</div>
              <div class="ep-duration"><i class="fas fa-clock"></i> 58:14</div>
            </div>
            <div class="ep-num">#02</div>
          </div>

          <div class="ep-card">
            <div class="ep-thumb" style="background:linear-gradient(135deg,#2d1f7a,#4b2fbf)">
              <i class="fas fa-video"></i>
              <div class="ep-thumb-play"><i class="fas fa-play"></i></div>
            </div>
            <div class="ep-info">
              <div class="ep-title">Walking in Divine Health</div>
              <div class="ep-host">Pastor Deola Phillips</div>
              <div class="ep-duration"><i class="fas fa-clock"></i> 37:45</div>
            </div>
            <div class="ep-num">#03</div>
          </div>

          <div style="text-align:center;margin-top:8px;">
            <a href="#" class="see-all-btn" style="display:inline-flex;">View More Episodes <i
                class="fas fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ===== TESTIMONIALS ===== -->
  <section class="testimonials-section">
    <div class="section-wrap" style="padding-bottom:0">
      <div class="section-head">
        <div>
          <div class="section-label">💬 Testimonies</div>
          <div class="section-title">Lives <span>Transformed</span></div>
          <div class="section-line"></div>
        </div>
      </div>

      <div class="testi-carousel reveal">
        <div class="testi-track" id="testiTrack">

          <!-- Slide 1: 3 testimonials -->
          <div class="testi-slide">
            <div class="testi-card">
              <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
              <div class="testi-text">"I was diagnosed with stage 3 cancer in 2022. After watching the Healing Streams
                broadcast and receiving prayer, I went for my follow-up scan — the doctors found nothing. Total healing!
                Praise God for Loveworld TV reaching my home."</div>
              <div class="testi-author">
                <div class="testi-avatar">AM</div>
                <div class="testi-author-info">
                  <div class="name">Adaeze Mbadinuju</div>
                  <div class="location"><i class="fas fa-map-marker-alt"></i> Abuja, Nigeria</div>
                  <div class="testi-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="testi-card">
              <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
              <div class="testi-text">"Through the LTV Arabic channel, my entire family came to faith in Jesus Christ.
                We were watching one evening and the word pierced our hearts. My husband who had never prayed before got
                on his knees that night. Glory to God!"</div>
              <div class="testi-author">
                <div class="testi-avatar">RA</div>
                <div class="testi-author-info">
                  <div class="name">Rania Al-Hassan</div>
                  <div class="location"><i class="fas fa-map-marker-alt"></i> Beirut, Lebanon</div>
                  <div class="testi-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="testi-card">
              <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
              <div class="testi-text">"My son had been paralyzed for 7 years. We watched Pastor Chris minister on
                Loveworld TV and I prayed with him. Three days later he stood up, walked and is now running! LTM is
                truly carrying God's presence into homes."</div>
              <div class="testi-author">
                <div class="testi-avatar">JO</div>
                <div class="testi-author-info">
                  <div class="name">James Okonkwo</div>
                  <div class="location"><i class="fas fa-map-marker-alt"></i> Lagos, Nigeria</div>
                  <div class="testi-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2: 3 testimonials -->
          <div class="testi-slide">
            <div class="testi-card">
              <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
              <div class="testi-text">"I was deep in addiction for over a decade. One night I couldn't sleep and
                switched on the TV — Loveworld was airing. The Word set me free that very night. I've been clean for 4
                years now and serving God faithfully."</div>
              <div class="testi-author">
                <div class="testi-avatar">MC</div>
                <div class="testi-author-info">
                  <div class="name">Miguel Carvalho</div>
                  <div class="location"><i class="fas fa-map-marker-alt"></i> São Paulo, Brazil</div>
                  <div class="testi-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="testi-card">
              <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
              <div class="testi-text">"I started my business the same week I heard Pastor Chris teach about prosperity
                on LTV. Following those principles transformed everything — today I employ over 200 people. God used
                this ministry to change my destiny."</div>
              <div class="testi-author">
                <div class="testi-avatar">KT</div>
                <div class="testi-author-info">
                  <div class="name">Kenji Tanaka</div>
                  <div class="location"><i class="fas fa-map-marker-alt"></i> Tokyo, Japan</div>
                  <div class="testi-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>

            <div class="testi-card">
              <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
              <div class="testi-text">"After 18 years of barrenness, my husband and I were introduced to Loveworld TV by
                a neighbor. We kept confessing the Word. Today we have twins — a boy and a girl. We are forever grateful
                for this ministry."</div>
              <div class="testi-author">
                <div class="testi-avatar">GB</div>
                <div class="testi-author-info">
                  <div class="name">Grace Boateng</div>
                  <div class="location"><i class="fas fa-map-marker-alt"></i> Accra, Ghana</div>
                  <div class="testi-stars">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="testi-controls">
          <button class="testi-arrow" onclick="testiPrev()"><i class="fas fa-chevron-left"></i></button>
          <div class="testi-dots">
            <div class="testi-dot active" onclick="testiGo(0)"></div>
            <div class="testi-dot" onclick="testiGo(1)"></div>
          </div>
          <button class="testi-arrow" onclick="testiNext()"><i class="fas fa-chevron-right"></i></button>
        </div>

        <div style="text-align:center;margin-top:8px;padding-bottom:10px;">
          <a href="testimony.php" class="share-testi-btn">
            <i class="fas fa-pen-nib"></i> Share Your Testimony
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ===== BLOG SECTION ===== -->
  <section class="blog-section">
    <div class="section-wrap">
      <div class="section-head">
        <div>
          <div class="section-label">📰 Latest From the Blog</div>
          <div class="section-title">News & <span>Insights</span></div>
          <div class="section-line"></div>
        </div>
        <a href="blog.php" class="see-all-btn">View All Posts <i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="blog-slider-wrap reveal">
        <div class="blog-track" id="blogTrack">

          <!-- Group 1 -->
          <div class="blog-slide-group">
            <div class="blog-card">
              <div class="blog-img">
                <img src="blog1.jpg">
                <div class="blog-img-overlay"></div>
                <div class="blog-cat">Ministry</div>
              </div>
              <div class="blog-body">
                <div class="blog-date"><i class="fas fa-calendar"></i> April 20, 2026</div>
                <div class="blog-title">MAY GLOBAL COMMUNION SERVICE</div>
                <div class="blog-excerpt">GLOBAL COMMUNION SERVICE!It's the May Edition of the Global Communion Service
                  with Pastor Chris.Date: Sunday, 3rd May 2026.Time: 3 pm GMT+1Broadcasting Live on LTM Live</div>
                <a href="#" class="blog-read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>

            <div class="blog-card">
              <div class="blog-img" style="background:linear-gradient(145deg,#1a1558,#4b2fbf)">
                <img src="blog2.jpeg">
                <div class="blog-img-overlay"></div>
                <div class="blog-cat">Ministry</div>
              </div>
              <div class="blog-body">
                <div class="blog-date"><i class="fas fa-calendar"></i> March 28, 2025</div>
                <div class="blog-title">VIEWER'S AND LISTENER'S NETWORK CONFERENCE - LAGOS ZONE 2 EDITION</div>
                <div class="blog-excerpt">From Morocco to the UAE, testimonies pour in as the Arabic-language channel
                  spreads the Gospel in the heart language of millions.</div>
                <a href="#" class="blog-read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>

            <div class="blog-card">
              <div class="blog-img" style="background:linear-gradient(145deg,#1b1f4a,#2d1f7a)">
                <img src="blog3.jpeg">
                <div class="blog-img-overlay"></div>
                <div class="blog-cat">Ministry</div>
              </div>
              <div class="blog-body">
                <div class="blog-date"><i class="fas fa-calendar"></i> March 14, 2025</div>
                <div class="blog-title">GLOBAL PRAYER AND FASTING WITH PASTOR CHRIS - MARCH EDITION</div>
                <div class="blog-excerpt">Take a behind-the-scenes tour of the most advanced Christian television
                  production facility in Africa, built to serve billions for decades to come.</div>
                <a href="#" class="blog-read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Group 2 -->
          <div class="blog-slide-group">
            <div class="blog-card">
              <div class="blog-img" style="background:linear-gradient(145deg,#0e2240,#1b4a7a)">
                <img src="blog1.jpeg">
                <div class="blog-img-overlay"></div>
                <div class="blog-cat">Outreach</div>
              </div>
              <div class="blog-body">
                <div class="blog-date"><i class="fas fa-calendar"></i> February 20, 2025</div>
                <div class="blog-title">The 1 Billion Souls Initiative Reaches Major Milestone This Quarter</div>
                <div class="blog-excerpt">LTM partners celebrate as the soul-winning television campaign crosses the 500
                  million souls reached threshold in just under three years.</div>
                <a href="#" class="blog-read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>

            <div class="blog-card">
              <div class="blog-img" style="background:linear-gradient(145deg,#2a0e3a,#6b2fbf)">
                <i class="fas fa-music"></i>
                <div class="blog-img-overlay"></div>
                <div class="blog-cat">Events</div>
              </div>
              <div class="blog-body">
                <div class="blog-date"><i class="fas fa-calendar"></i> January 30, 2025</div>
                <div class="blog-title">Night of Bliss 2025 Simulcast Breaks Records with 2.3 Billion Viewers</div>
                <div class="blog-excerpt">The annual global praise night carried live on LTV channels worldwide set new
                  records for Christian broadcast audience figures.</div>
                <a href="#" class="blog-read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>

            <div class="blog-card">
              <div class="blog-img" style="background:linear-gradient(145deg,#1a2a0e,#2fbf4a)">
                <i class="fas fa-seedling"></i>
                <div class="blog-img-overlay"></div>
                <div class="blog-cat">Partnership</div>
              </div>
              <div class="blog-body">
                <div class="blog-date"><i class="fas fa-calendar"></i> January 8, 2025</div>
                <div class="blog-title">Why Partnering with LTM Is the Most Impactful Investment You Can Make</div>
                <div class="blog-excerpt">Discover how your monthly partnership finances broadcast infrastructure that
                  reaches millions with the Gospel every single day.</div>
                <a href="#" class="blog-read-more">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="blog-slider-controls">
          <button class="blog-arrow" onclick="blogPrev()"><i class="fas fa-chevron-left"></i></button>
          <div class="blog-dots">
            <div class="blog-dot active" onclick="blogGo(0)"></div>
            <div class="blog-dot" onclick="blogGo(1)"></div>
          </div>
          <button class="blog-arrow" onclick="blogNext()"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>


  <script src="js/index.js"></script>
  <script src="js/script.js"></script>
  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>
  <!-- Flowplayer library -->
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/hls.js/0.10.1/hls.light.min.js"></script>
  <script src="//releases.flowplayer.org/7.2.7/flowplayer.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
  <script>
  const video = document.getElementById('video');
  const src =
    "https://go5lm6a6dawb-hls-live.5centscdn.com/6731_push_2945_001/ae3209c9c56c1cb112aca7dac4f9f3c1.sdp/playlist.m3u8";

  if (Hls.isSupported()) {
    const hls = new Hls();
    hls.loadSource(src);
    hls.attachMedia(video);
  } else {
    video.src = src;
  }
  </script>
</body>

</html>