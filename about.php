<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Nunito+Sans:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Cinzel:wght@400;600;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/about.css" rel="stylesheet">
</head>

<body>

  <!-- Progress bar -->
  <div id="progress-bar"></div>

  <!-- Ambient -->
  <div class="ambient">
    <div class="amb-orb amb-orb-1"></div>
    <div class="amb-orb amb-orb-2"></div>
    <div class="amb-orb amb-orb-3"></div>
  </div>
  <div class="signal-texture"></div>

  <?php include('navbar.php'); ?>
  <!-- ═══════════════════════════════════════
     BREADCRUMB
════════════════════════════════════════ -->
  <div class="breadcrumb-strip">
    <div class="bc-inner">
      <a href="index.php"><i class="fas fa-home"></i> Home</a>
      <i class="fas fa-chevron-right"></i>
      <span>About LTM</span>
    </div>
  </div>

  <!-- ═══════════════════════════════════════
     HERO
════════════════════════════════════════ -->
  <section class="hero">
    <canvas class="hero-canvas" id="starCanvas"></canvas>

    <div class="hero-inner">
      <!-- Left: Text -->
      <div>
        <div class="hero-eyebrow reveal" style="transition-delay:0s">
          <div class="dot"></div>
          <span>A Special Ministry of Pastor Chris</span>
        </div>

        <h1 class="hero-h1 reveal" style="transition-delay:.12s">
          About <em>Loveworld</em><br>Television Ministry
        </h1>

        <div class="hero-rule reveal" style="transition-delay:.22s"></div>

        <p class="hero-sub reveal" style="transition-delay:.3s">
          The <strong>Loveworld Television Ministry</strong> is a special ministry of Pastor Chris, armed with the
          mandate of
          <strong>networking every home around the world</strong> with the divine presence of God through
          <strong>TV transmissions</strong>.
        </p>

        <div class="hero-badges reveal" style="transition-delay:.4s">
          <div class="hero-badge"><i class="fas fa-satellite-dish"></i> 465+ TV Stations</div>
          <div class="hero-badge"><i class="fas fa-globe"></i> 180+ Nations</div>
          <div class="hero-badge"><i class="fas fa-broadcast-tower"></i> 24/7 Broadcast</div>
          <div class="hero-badge"><i class="fas fa-users"></i> 1B+ Viewers</div>
        </div>
      </div>

      <!-- Right: Video Player -->
      <div class="hero-video-wrap reveal" style="transition-delay:.25s">
        <div class="video-card">
          <div class="video-screen">
            <video id="video" src="about.mp4" controls autoplay muted style="width:100%"></video>
            <div class="video-screen-bg">

            </div>
            <div class="grid-lines"></div>
            <div class="signal-rings">
              <div class="signal-ring"></div>
              <div class="signal-ring"></div>
              <div class="signal-ring"></div>
              <div class="signal-ring"></div>
            </div>
            <!-- <div class="play-center">
              <div class="play-label">Now Showing</div>
              <div class="play-title">LTV Africa Signal Expansion — Project Update 2025</div>
              <div class="play-btn-outer" style="margin-top:6px">
                <div class="play-btn-inner">
                  <i class="fas fa-play"></i>
                </div>
              </div>
            </div> -->
          </div>
          <div class="video-meta-bar" style="background:#0a0c22">
            <span class="vm-tag">🔴 Ongoing Project</span>
            <span class="vm-title">Africa Signal Expansion — Full Documentary</span>
            <span class="vm-duration">32:14</span>
          </div>
        </div>

        <!-- Floating badge -->
        <div class="hero-float-badge">
          <div class="fb-icon">📡</div>
          <div class="fb-text">
            <div class="fb-num">54</div>
            <div class="fb-label">African Nations Reached</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
     IMPACT STATS
════════════════════════════════════════ -->
  <div class="stats-section">
    <div class="stats-inner">
      <div class="stat-block reveal delay-1">
        <div class="stat-icon"><i class="fas fa-tv"></i></div>
        <div class="stat-num"><span class="counter" data-target="465">0</span><span class="suffix">+</span></div>
        <div class="stat-label">TV Stations</div>
        <div class="stat-sub">Coast-to-coast coverage</div>
      </div>
      <div class="stat-block reveal delay-2">
        <div class="stat-icon"><i class="fas fa-globe-africa"></i></div>
        <div class="stat-num"><span class="counter" data-target="180">0</span><span class="suffix">+</span></div>
        <div class="stat-label">Nations Worldwide</div>
        <div class="stat-sub">All 6 continents</div>
      </div>
      <div class="stat-block reveal delay-3">
        <div class="stat-icon"><i class="fas fa-users"></i></div>
        <div class="stat-num"><span class="counter" data-target="1">0</span><span class="suffix">B+</span></div>
        <div class="stat-label">Lives Reached</div>
        <div class="stat-sub">Saved, healed, delivered</div>
      </div>
      <div class="stat-block reveal delay-4">
        <div class="stat-icon"><i class="fas fa-clock"></i></div>
        <div class="stat-num"><span class="counter" data-target="24">0</span><span class="suffix">/7</span></div>
        <div class="stat-label">Live Broadcast</div>
        <div class="stat-sub">Non-stop transmission</div>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════
     SECTION 1 — OUR STORY
════════════════════════════════════════ -->
  <section class="sec story-sec">
    <div class="sec-inner">
      <div class="reveal">
        <div class="chip light"><i class="fas fa-history"></i> Our Journey</div>
        <h2 class="sec-h2">From One Station to<br><em>Every Continent</em></h2>
        <div class="sec-rule"></div>
        <p class="sec-lead">A story of extraordinary faith, relentless vision and the unstoppable mandate of God —
          charted over three remarkable decades.</p>
      </div>

      <div class="story-grid">
        <!-- Left: body text -->
        <div class="story-body reveal-left">
          <p>
            The Loveworld Television Ministry has grown from airing the flagship programs of our man of God
            <span class="hl">Pastor Chris on only one TV Station during the mid-nineties</span> to broadcasting now in
            all the continents of the world. Currently on
            <span class="hl-gold">over 465 TV stations</span> and reaching
            <span class="hl-gold">over 180 nations worldwide</span>; amongst these are stations with coast to coast
            coverage.
          </p>

          <div class="pullquote">
            <p>"The Loveworld Television Ministry transmits the Monthly Edition of Global Communion Service, Your
              Loveworld Specials, Praise Night Services, and several other programs via TV networks in several nations
              of the World."</p>
            <cite>— Loveworld Television Ministry</cite>
          </div>

          <p>
            Through our <span class="hl">Web, Mobile and IPTV platforms</span>, the Word reaches viewers wherever they
            are — in offices, homes, and across every time zone. Through the daily transmission of our flagship TV
            programs —
            <span class="hl-gold">Atmosphere for Miracles</span> &amp;
            <span class="hl-gold">Pastor Chris Teaching</span> — millions have been
            <strong>saved, healed and delivered</strong> into their inheritance in Christ.
          </p>

          <p>
            These flagship programs bring God's vision alive to all viewers around the world and have become the
            <span class="hl">most-watched television programs</span> on all television network stations that we feature
            on.
          </p>
        </div>

        <!-- Right: timeline -->
        <div class="reveal-right">
          <div class="timeline" id="timeline">
            <div class="tl-item">
              <div class="tl-dot"></div>
              <div class="tl-year">Mid-1990s</div>
              <div class="tl-heading">The Beginning — One Station</div>
              <div class="tl-body">The ministry begins airing Pastor Chris's flagship programs on a single TV station,
                planting the seed of a God-given vision to reach the whole world.</div>
            </div>
            <div class="tl-item">
              <div class="tl-dot"></div>
              <div class="tl-year">Early 2000s</div>
              <div class="tl-heading">Continental Expansion</div>
              <div class="tl-body">LTM crosses into multiple continents, securing airtime on stations across Africa,
                Europe and North America, growing into a truly global ministry.</div>
            </div>
            <div class="tl-item">
              <div class="tl-dot"></div>
              <div class="tl-year">2010s</div>
              <div class="tl-heading">Digital & Satellite Era</div>
              <div class="tl-body">Launch of dedicated Loveworld networks — Loveworld Arabic, Spanish, Asia and Pacific
                — alongside a 24-hour Call Center serving viewers worldwide.</div>
            </div>
            <div class="tl-item">
              <div class="tl-dot"></div>
              <div class="tl-year">2020s</div>
              <div class="tl-heading">465+ Stations · 180+ Nations</div>
              <div class="tl-body">A ministry on all six continents, with coast-to-coast coverage on hundreds of
                stations, Web TV, Mobile apps and IPTV reaching over one billion souls.</div>
            </div>
            <div class="tl-item">
              <div class="tl-dot"></div>
              <div class="tl-year">Now</div>
              <div class="tl-heading">The Mandate Continues</div>
              <div class="tl-body">With the Africa Signal Expansion, new studio infrastructure and the 1 Billion Souls
                Initiative, the vision burns brighter than ever.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
     SECTION 2 — THE MANDATE (dark)
════════════════════════════════════════ -->
  <section class="sec mandate-sec">
    <div class="big-quote">"</div>
    <div class="sec-inner">
      <div class="reveal">
        <div class="chip dark"><i class="fas fa-broadcast-tower"></i> The Mandate</div>
        <h2 class="sec-h2 on-dark">Taking the Gospel to <em>Every Nation,<br>City, Town &amp; Village</em></h2>
        <div class="sec-rule gold-rule"></div>
        <p class="sec-lead on-dark">Our aim is to increase our ever-widening network of stations — this is how we fulfil
          the God-given mandate.</p>
      </div>

      <div class="mandate-grid">
        <!-- Left: body text -->
        <div class="mandate-body reveal-left">
          <p>
            <span class="on-dark hl-gold">The Atmosphere for Miracles with Pastor Chris</span> chronicles healings and
            miracles from our crusades and services, as we take God's divine presence right into the homes of viewers.
            Meanwhile,
            <span class="on-dark hl-gold">Pastor Chris Teaching</span> unravels mysteries and deep Truths from God's
            Word with a freshness that makes every viewer love the Word of God.
          </p>

          <p>
            Our aim is to increase our ever-widening network of stations — this is our way of fulfilling the
            <strong style="color:#fff">God-given mandate</strong> of taking the Gospel to every nation, city, town and
            village.
          </p>

          <p>
            The Loveworld Television Ministry also manages a
            <strong style="color:var(--gold)">24-hour Call Center</strong>, responsible for receiving and responding to
            feedback on our programs around the world. Many have received
            <strong style="color:#fff">salvation and healing</strong> just by contacting us through phone calls, text
            messages, and email.
          </p>

          <p style="color:rgba(255,255,255,.55)">
            We are so grateful to our partners who have worked with us these years to bring God's Word and His healing
            power into the lives of millions around the world; through their partnership,
            <strong style="color:var(--gold)">we are lighting up the nations</strong> with this glorious Gospel of our
            Lord Jesus Christ.
          </p>
        </div>

        <!-- Right: callout boxes -->
        <div class="callout-stack reveal-right">
          <div class="callout">
            <div class="callout-icon"><i class="fas fa-pray"></i></div>
            <div>
              <div class="callout-h">Salvation Through Television</div>
              <div class="callout-p">Millions have received the gift of salvation watching Pastor Chris minister on LTV
                — right in their homes and offices around the world.</div>
            </div>
          </div>
          <div class="callout">
            <div class="callout-icon"><i class="fas fa-heartbeat"></i></div>
            <div>
              <div class="callout-h">Healing &amp; Deliverance</div>
              <div class="callout-p">Documented healings of cancer, paralysis, blindness and every manner of disease —
                experienced by viewers tuning in from over 180 nations.</div>
            </div>
          </div>
          <div class="callout">
            <div class="callout-icon"><i class="fas fa-headset"></i></div>
            <div>
              <div class="callout-h">24-Hour Global Call Center</div>
              <div class="callout-p">A dedicated team available around the clock to receive testimonies, pray with
                viewers and minister the Word via phone, SMS and email.</div>
            </div>
          </div>
          <div class="callout">
            <div class="callout-icon"><i class="fas fa-hands-helping"></i></div>
            <div>
              <div class="callout-h">Partner-Powered Growth</div>
              <div class="callout-p">Our faithful partners have consistently driven every milestone — lighting up
                nations with the glorious Gospel of Jesus Christ.</div>
            </div>
          </div>
          <div class="callout">
            <div class="callout-icon"><i class="fas fa-mobile-alt"></i></div>
            <div>
              <div class="callout-h">Multi-Platform Transmission</div>
              <div class="callout-p">TV, Web, Mobile App and IPTV — LTM ensures no device and no viewer is out of reach
                of the Word of God.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
     FLAGSHIP PROGRAMS
════════════════════════════════════════ -->
  <section class="sec programs-sec">
    <div class="sec-inner">
      <div class="reveal">
        <div class="chip light"><i class="fas fa-star"></i> Flagship Programs</div>
        <h2 class="sec-h2">Our Most-Watched <em>Television Programs</em></h2>
        <div class="sec-rule"></div>
        <p class="sec-lead">These transformational broadcasts have become the most-watched programs on every network
          station we feature on — changing lives daily.</p>
      </div>

      <div class="programs-grid">
        <!-- Card 1 -->
        <div class="prog-card reveal-left">
          <div class="prog-hero prog-hero-1">
            <img src="afm.jpg">
            <div class="prog-hero-content">
              <div class="prog-badge">Flagship Show</div>
              <div class="prog-title">Atmosphere for Miracles<br>with Pastor Chris</div>
            </div>
          </div>
          <div class="prog-body">
            <p class="prog-desc">
              Chronicles <strong>healings and miracles</strong> from crusades and services, taking God's divine presence
              right into the homes of viewers worldwide. Every episode carries an atmosphere charged with faith,
              expectation and the supernatural power of God — and viewers experience it no matter where they watch from.
            </p>
            <div class="prog-stats">
              <div class="prog-stat">
                <div class="prog-stat-num">300+</div>
                <div class="prog-stat-label">Stations Airing</div>
              </div>
              <div class="prog-stat">
                <div class="prog-stat-num">Daily</div>
                <div class="prog-stat-label">Transmission</div>
              </div>
              <div class="prog-stat">
                <div class="prog-stat-num">180+</div>
                <div class="prog-stat-label">Nations</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="prog-card reveal-right">
          <div class="prog-hero prog-hero-2">
            <img src="pct.jpg">
            <div class="prog-hero-content">
              <div class="prog-badge">Flagship Show</div>
              <div class="prog-title">Pastor Chris Teaching</div>
            </div>
          </div>
          <div class="prog-body">
            <p class="prog-desc">
              Unravels <strong>mysteries and deep Truths</strong> from God's Word with a freshness that makes every
              viewer fall in love with the Word of God. Pastor Chris's unparalleled ability to simplify divine
              revelation has produced a new generation of Word-saturated believers across every continent.
            </p>
            <div class="prog-stats">
              <div class="prog-stat">
                <div class="prog-stat-num">465+</div>
                <div class="prog-stat-label">Stations Airing</div>
              </div>
              <div class="prog-stat">
                <div class="prog-stat-num">Daily</div>
                <div class="prog-stat-label">Transmission</div>
              </div>
              <div class="prog-stat">
                <div class="prog-stat-num">All</div>
                <div class="prog-stat-label">Continents</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Extra programs row -->
      <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-top:22px;" class="reveal">
        <div
          style="background:#fff;border-radius:14px;border:1px solid var(--border);padding:20px;display:flex;align-items:center;gap:13px;transition:all .25s;"
          onmouseenter="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(75,47,191,.12)'"
          onmouseleave="this.style.transform='';this.style.boxShadow=''">
          <div
            style="width:42px;height:42px;border-radius:12px;background:rgba(75,47,191,.1);display:flex;align-items:center;justify-content:center;flex-shrink:0">
            <i class="fas fa-globe" style="color:var(--violet)"></i>
          </div>
          <div>
            <div style="font-size:.85rem;font-weight:700;color:var(--ink)">Global Communion Service</div>
            <div style="font-size:.72rem;color:var(--muted)">Monthly · Worldwide Simulcast</div>
          </div>
        </div>
        <div
          style="background:#fff;border-radius:14px;border:1px solid var(--border);padding:20px;display:flex;align-items:center;gap:13px;transition:all .25s;"
          onmouseenter="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(75,47,191,.12)'"
          onmouseleave="this.style.transform='';this.style.boxShadow=''">
          <div
            style="width:42px;height:42px;border-radius:12px;background:rgba(232,184,64,.1);display:flex;align-items:center;justify-content:center;flex-shrink:0">
            <i class="fas fa-star" style="color:#9a6f00"></i>
          </div>
          <div>
            <div style="font-size:.85rem;font-weight:700;color:var(--ink)">Your LoveWorld Specials</div>
            <div style="font-size:.72rem;color:var(--muted)">Special Editions · All Networks</div>
          </div>
        </div>
        <div
          style="background:#fff;border-radius:14px;border:1px solid var(--border);padding:20px;display:flex;align-items:center;gap:13px;transition:all .25s;"
          onmouseenter="this.style.transform='translateY(-4px)';this.style.boxShadow='0 12px 32px rgba(75,47,191,.12)'"
          onmouseleave="this.style.transform='';this.style.boxShadow=''">
          <div
            style="width:42px;height:42px;border-radius:12px;background:rgba(229,62,62,.1);display:flex;align-items:center;justify-content:center;flex-shrink:0">
            <i class="fas fa-music" style="color:#c0392b"></i>
          </div>
          <div>
            <div style="font-size:.85rem;font-weight:700;color:var(--ink)">Praise Night Services</div>
            <div style="font-size:.72rem;color:var(--muted)">Live Simulcast · Global Broadcast</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
     GLOBAL REACH
════════════════════════════════════════ -->
  <section class="sec reach-sec">
    <div class="sec-inner">
      <div class="reveal">
        <div class="chip light"><i class="fas fa-globe-americas"></i> Global Reach</div>
        <h2 class="sec-h2">Broadcasting to Every<br><em>Corner of the Earth</em></h2>
        <div class="sec-rule"></div>
      </div>

      <div class="reach-grid">
        <!-- Map visual -->
        <div class="reach-map-wrap reveal-left">
          <div class="reach-map">
            <!-- SVG stylized world/signal -->
            <svg viewBox="0 0 500 340" xmlns="http://www.w3.org/2000/svg">
              <!-- Background glow -->
              <defs>
                <radialGradient id="mapGlow" cx="50%" cy="50%" r="50%">
                  <stop offset="0%" stop-color="rgba(75,47,191,0.25)" />
                  <stop offset="100%" stop-color="rgba(0,0,0,0)" />
                </radialGradient>
                <filter id="glow">
                  <feGaussianBlur stdDeviation="3" result="blur" />
                  <feMerge>
                    <feMergeNode in="blur" />
                    <feMergeNode in="SourceGraphic" />
                  </feMerge>
                </filter>
              </defs>
              <ellipse cx="250" cy="170" rx="240" ry="155" fill="url(#mapGlow)" opacity=".6" />
              <!-- Grid lines (graticules) -->
              <g stroke="rgba(255,255,255,.07)" stroke-width="1" fill="none">
                <ellipse cx="250" cy="170" rx="240" ry="155" />
                <ellipse cx="250" cy="170" rx="180" ry="145" />
                <ellipse cx="250" cy="170" rx="110" ry="130" />
                <ellipse cx="250" cy="170" rx="40" ry="110" />
                <line x1="10" y1="170" x2="490" y2="170" />
                <line x1="250" y1="15" x2="250" y2="325" />
                <line x1="50" y1="80" x2="450" y2="80" />
                <line x1="30" y1="260" x2="470" y2="260" />
                <line x1="80" y1="40" x2="80" y2="300" />
                <line x1="170" y1="20" x2="170" y2="320" />
                <line x1="330" y1="20" x2="330" y2="320" />
                <line x1="420" y1="40" x2="420" y2="300" />
              </g>
              <!-- Continents (simplified shapes) -->
              <!-- Africa -->
              <path d="M230 140 L255 130 L275 145 L280 180 L270 220 L250 240 L235 225 L225 200 L220 170 Z"
                fill="rgba(75,47,191,.45)" stroke="rgba(75,47,191,.8)" stroke-width="1.5" filter="url(#glow)" />
              <!-- Europe -->
              <path d="M215 100 L230 95 L240 105 L235 120 L220 125 L210 115 Z" fill="rgba(75,47,191,.35)"
                stroke="rgba(75,47,191,.7)" stroke-width="1.2" />
              <!-- Asia -->
              <path d="M270 95 L330 85 L370 100 L380 130 L355 145 L320 140 L290 130 L275 115 Z"
                fill="rgba(75,47,191,.4)" stroke="rgba(75,47,191,.75)" stroke-width="1.2" />
              <!-- North America -->
              <path d="M80 100 L130 90 L150 115 L140 150 L115 160 L85 145 L70 120 Z" fill="rgba(107,79,216,.4)"
                stroke="rgba(107,79,216,.7)" stroke-width="1.2" />
              <!-- South America -->
              <path d="M130 175 L155 170 L165 200 L155 240 L135 250 L120 230 L118 200 Z" fill="rgba(107,79,216,.35)"
                stroke="rgba(107,79,216,.7)" stroke-width="1.2" />
              <!-- Oceania -->
              <path d="M360 210 L395 205 L405 225 L390 240 L365 235 Z" fill="rgba(75,47,191,.35)"
                stroke="rgba(75,47,191,.7)" stroke-width="1.2" />
              <!-- Signal dots — broadcast points -->
              <g fill="var(--gold)" filter="url(#glow)">
                <circle cx="250" cy="180" r="5">
                  <animate attributeName="r" values="4;7;4" dur="2s" repeatCount="indefinite" />
                  <animate attributeName="opacity" values="1;.4;1" dur="2s" repeatCount="indefinite" />
                </circle>
                <circle cx="110" cy="125" r="4">
                  <animate attributeName="r" values="3;6;3" dur="2.5s" repeatCount="indefinite" />
                </circle>
                <circle cx="310" cy="115" r="4">
                  <animate attributeName="r" values="3;6;3" dur="1.8s" repeatCount="indefinite" />
                </circle>
                <circle cx="225" cy="110" r="3.5">
                  <animate attributeName="r" values="2.5;5;2.5" dur="2.2s" repeatCount="indefinite" />
                </circle>
                <circle cx="140" cy="210" r="3.5">
                  <animate attributeName="r" values="2.5;5;2.5" dur="3s" repeatCount="indefinite" />
                </circle>
                <circle cx="380" cy="218" r="3">
                  <animate attributeName="r" values="2;5;2" dur="2.7s" repeatCount="indefinite" />
                </circle>
              </g>
              <!-- Connecting lines from center -->
              <g stroke="rgba(232,184,64,.2)" stroke-width="1" stroke-dasharray="4 4" fill="none">
                <line x1="250" y1="180" x2="110" y2="125" />
                <line x1="250" y1="180" x2="310" y2="115" />
                <line x1="250" y1="180" x2="225" y2="110" />
                <line x1="250" y1="180" x2="140" y2="210" />
                <line x1="250" y1="180" x2="380" y2="218" />
              </g>
              <!-- Label -->
              <text x="250" y="300" text-anchor="middle" fill="rgba(255,255,255,.3)" font-size="9"
                font-family="Cinzel,serif" letter-spacing="3">180+ NATIONS · 465+ STATIONS</text>
            </svg>

            <div class="reach-stat-pill rsp-1">
              <div class="rsp-icon">🌍</div>
              <div class="rsp-info">
                <div class="n">6</div>
                <div class="l">Continents Covered</div>
              </div>
            </div>
            <div class="reach-stat-pill rsp-2">
              <div class="rsp-icon">📡</div>
              <div class="rsp-info">
                <div class="n">465+</div>
                <div class="l">TV Stations</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Reach list -->
        <div class="reach-list reveal-right">
          <div class="reach-item">
            <div class="reach-item-icon ri-1"><i class="fas fa-satellite-dish"></i></div>
            <div class="reach-item-info">
              <div class="rh">465+ Television Stations</div>
              <div class="rs">Spanning all six continents with coast-to-coast coverage</div>
            </div>
          </div>
          <div class="reach-item">
            <div class="reach-item-icon ri-2"><i class="fas fa-globe"></i></div>
            <div class="reach-item-info">
              <div class="rh">180+ Nations Worldwide</div>
              <div class="rs">Every major nation receiving LTM programming</div>
            </div>
          </div>
          <div class="reach-item">
            <div class="reach-item-icon ri-3"><i class="fas fa-wifi"></i></div>
            <div class="reach-item-info">
              <div class="rh">Web · Mobile · IPTV</div>
              <div class="rs">Multi-platform transmission for every screen size</div>
            </div>
          </div>
          <div class="reach-item">
            <div class="reach-item-icon ri-4"><i class="fas fa-language"></i></div>
            <div class="reach-item-info">
              <div class="rh">Multi-Language Networks</div>
              <div class="rs">Arabic · Spanish · Asian · Pacific dedicated channels</div>
            </div>
          </div>
          <div class="reach-item">
            <div class="reach-item-icon ri-5"><i class="fas fa-clock"></i></div>
            <div class="reach-item-info">
              <div class="rh">24/7 Non-Stop Broadcast</div>
              <div class="rs">The Word of God never stops transmitting</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
     MISSION · VISION · VALUES
════════════════════════════════════════ -->
  <section class="sec mvv-sec">
    <div class="sec-inner">
      <div class="reveal">
        <div class="chip dark"><i class="fas fa-compass"></i> Our Foundation</div>
        <h2 class="sec-h2 on-dark">Mission, Vision<br>&amp; <em>Core Values</em></h2>
        <div class="sec-rule gold-rule"></div>
      </div>

      <div class="mvv-grid">
        <div class="mvv-card reveal delay-1">
          <div class="mvv-number">01</div>
          <div class="mvv-icon"><i class="fas fa-crosshairs"></i></div>
          <div class="mvv-heading">Our Mission</div>
          <p class="mvv-text">To <strong>network every home around the world</strong> with the divine presence of God
            through television transmissions — fulfilling the Great Commission through the power of broadcast media, one
            screen at a time.</p>
        </div>
        <div class="mvv-card reveal delay-2">
          <div class="mvv-number">02</div>
          <div class="mvv-icon"><i class="fas fa-eye"></i></div>
          <div class="mvv-heading">Our Vision</div>
          <p class="mvv-text">A world where <strong>every person, in every nation</strong>, has access to the
            life-transforming Word of God — through free-to-air television, streaming platforms and mobile devices,
            without barrier or boundary.</p>
        </div>
        <div class="mvv-card reveal delay-3">
          <div class="mvv-number">03</div>
          <div class="mvv-icon"><i class="fas fa-heart"></i></div>
          <div class="mvv-heading">Our Values</div>
          <p class="mvv-text"><strong>Excellence in broadcasting</strong>, faithfulness to the Word, partnership and
            collaboration, compassion for souls, and the unwavering conviction that the Gospel must reach every nation,
            city, town and village.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
     24H CALL CENTER
════════════════════════════════════════ -->
  <section class="sec callcenter-sec">
    <div class="sec-inner">
      <div class="reveal">
        <div class="chip light"><i class="fas fa-headset"></i> Global Support</div>
        <h2 class="sec-h2">24-Hour <em>Call Center</em></h2>
        <div class="sec-rule"></div>
        <p class="sec-lead">Available around the clock — because God's work never sleeps and neither do we.</p>
      </div>

      <div class="callcenter-grid">
        <!-- Visual -->
        <div class="callcenter-visual reveal-left">
          <div class="cc-ring-outer">
            <div class="cc-ring-inner">
              <div class="cc-center">
                <i class="fas fa-headset"></i>
                <span>24 / 7</span>
              </div>
            </div>
          </div>
          <div class="cc-sat cc-sat-1"><i class="fas fa-phone"></i></div>
          <div class="cc-sat cc-sat-2"><i class="fas fa-envelope"></i></div>
          <div class="cc-sat cc-sat-3"><i class="fas fa-sms"></i></div>
          <div class="cc-sat cc-sat-4"><i class="fas fa-globe"></i></div>
        </div>

        <!-- Text -->
        <div class="reveal-right">
          <div class="callcenter-body">
            <p>
              The Loveworld Television Ministry manages a
              <strong>24-hour Call Center</strong> which is responsible for receiving and responding to feedback on our
              programs around the world.
              <span class="hl">Many have received salvation and healing</span> just by contacting us through phone
              calls, text messages, and email.
            </p>
            <p>
              Our trained ministry team is on hand at all times to pray with viewers, receive testimonies, provide
              follow-up care and connect new believers with local Loveworld churches — because every soul matters to us.
            </p>
          </div>

          <div class="cc-channels">
            <div class="cc-ch">
              <i class="fas fa-phone-alt"></i>
              <span>Phone Calls</span>
            </div>
            <div class="cc-ch">
              <i class="fas fa-sms"></i>
              <span>Text Messages</span>
            </div>
            <div class="cc-ch">
              <i class="fas fa-envelope"></i>
              <span>Email Support</span>
            </div>
            <div class="cc-ch">
              <i class="fab fa-whatsapp"></i>
              <span>WhatsApp</span>
            </div>
            <div class="cc-ch">
              <i class="fas fa-pray"></i>
              <span>Prayer Requests</span>
            </div>
            <div class="cc-ch">
              <i class="fas fa-bible"></i>
              <span>Salvation Calls</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
     PARTNERS
════════════════════════════════════════ -->
  <section class="sec partners-sec">
    <div class="sec-inner">
      <div class="reveal">
        <div class="chip light"><i class="fas fa-handshake"></i> Partnership</div>
        <h2 class="sec-h2">Built on the <em>Shoulders<br>of Faithful Partners</em></h2>
        <div class="sec-rule"></div>
      </div>

      <div class="partners-grid">
        <div class="partners-text reveal-left">
          <p>
            We are so grateful to our <span class="hl">partners who have worked with us</span> these years to bring
            God's Word and His healing power into the lives of millions around the world. Through their partnership,
            <span class="hl-gold">we are lighting up the nations</span> with this glorious Gospel of our Lord Jesus
            Christ.
          </p>
          <p>
            The partners of the Loveworld Television Ministry have
            <strong>consistently contributed to the growth we have experienced over the years</strong> — from one
            station to over 465 across 180 nations. Every dollar, every prayer and every act of faith from our partners
            has made this extraordinary expansion possible.
          </p>
          <p>
            When you become a partner of LTM, you are not just supporting a ministry — you are actively participating in
            the greatest soul-winning effort in the history of television. Your seed carries eternal weight and its
            fruit is counted in souls won, healed and delivered.
          </p>

          <div class="cta-row">
            <a href="project.php" class="partner-cta"><i class="fas fa-heart"></i> Become a Partner</a>
            <a href="give.php" class="partner-cta-ghost"><i class="fas fa-dollar-sign"></i> Give Now</a>
          </div>
        </div>

        <div class="partners-cards reveal-right">
          <div class="pc pc-1">
            <div class="pc-icon">🤝</div>
            <div class="pc-num">50K+</div>
            <div class="pc-label">Global Partners</div>
            <div class="pc-bar">
              <div class="pc-bar-fill" style="width:82%"></div>
            </div>
          </div>
          <div class="pc pc-2">
            <div class="pc-icon">🌍</div>
            <div class="pc-num">$2.4M</div>
            <div class="pc-label">2025 Project Goal</div>
            <div class="pc-bar">
              <div class="pc-bar-fill" style="width:68%"></div>
            </div>
          </div>
          <div class="pc pc-3">
            <div class="pc-icon">✨</div>
            <div class="pc-num">30+</div>
            <div class="pc-label">Years of Impact</div>
            <div class="pc-bar">
              <div class="pc-bar-fill" style="width:100%"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════
     CTA STRIP
════════════════════════════════════════ -->
  <section class="cta-strip">
    <h2>Join the <em>Mandate</em></h2>
    <p>Every home. Every nation. Every soul. Be a part of the movement networking the world with the divine presence of
      God.</p>
    <div class="cta-strip-btns">
      <a href="live_tv.php" class="cta-strip-btn csb-gold"><i class="fas fa-tv"></i> Watch LTV Live</a>
      <a href="project.php" class="cta-strip-btn csb-ghost"><i class="fas fa-heart"></i> Partner With Us</a>
      <a href="connect.php" class="cta-strip-btn csb-ghost"><i class="fas fa-envelope"></i> Contact Us</a>
    </div>
  </section>

  <?php include('footer.php'); ?>
  <!-- ═══════════════════════════════════════
     SCRIPTS
════════════════════════════════════════ -->
  <script>
    /* ── PROGRESS BAR ── */
    window.addEventListener('scroll', () => {
      const scrollTop = window.scrollY;
      const docH = document.documentElement.scrollHeight - window.innerHeight;
      const pct = docH > 0 ? (scrollTop / docH) * 100 : 0;
      document.getElementById('progress-bar').style.width = pct + '%';
    });

    /* ── STAR CANVAS (PARALLAX) ── */
    (function() {
      const canvas = document.getElementById('starCanvas');
      const ctx = canvas.getContext('2d');
      let stars = [],
        W, H, mx = 0,
        my = 0;

      function resize() {
        W = canvas.width = canvas.offsetWidth;
        H = canvas.height = canvas.offsetHeight;
      }

      function initStars() {
        stars = [];
        const n = Math.floor((W * H) / 8000);
        for (let i = 0; i < n; i++) {
          stars.push({
            x: Math.random() * W,
            y: Math.random() * H,
            r: Math.random() * 1.6 + .2,
            o: Math.random() * .8 + .2,
            speed: Math.random() * .3 + .05,
            layer: Math.random()
          });
        }
      }

      function draw() {
        ctx.clearRect(0, 0, W, H);
        const ox = (mx - W / 2) / W;
        const oy = (my - H / 2) / H;
        stars.forEach(s => {
          const px = s.x + ox * 22 * s.layer;
          const py = s.y + oy * 14 * s.layer;
          const grad = ctx.createRadialGradient(px, py, 0, px, py, s.r * 2.5);
          grad.addColorStop(0, `rgba(232,184,64,${s.o})`);
          grad.addColorStop(1, 'rgba(75,47,191,0)');
          ctx.beginPath();
          ctx.arc(px, py, s.r * 2.5, 0, Math.PI * 2);
          ctx.fillStyle = grad;
          ctx.fill();
        });
        requestAnimationFrame(draw);
      }

      document.addEventListener('mousemove', e => {
        mx = e.clientX;
        my = e.clientY;
      });
      window.addEventListener('resize', () => {
        resize();
        initStars();
      });
      resize();
      initStars();
      draw();
    })();

    /* ── SCROLL REVEAL ── */
    const revealEls = document.querySelectorAll('.reveal,.reveal-left,.reveal-right,.tl-item');
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) {
          e.target.classList.add('vis');
          // cascade timeline items
          if (e.target.classList.contains('tl-item')) {
            const items = document.querySelectorAll('.tl-item');
            items.forEach((item, i) => {
              setTimeout(() => item.classList.add('vis'), i * 150);
            });
          }
        }
      });
    }, {
      threshold: .12,
      rootMargin: '0px 0px -40px 0px'
    });
    revealEls.forEach(el => io.observe(el));

    /* ── ANIMATED COUNTERS ── */
    function animateCounter(el) {
      const target = parseInt(el.getAttribute('data-target'));
      const dur = 2000;
      const step = 16;
      const inc = target / (dur / step);
      let current = 0;
      const timer = setInterval(() => {
        current = Math.min(current + inc, target);
        el.textContent = Math.floor(current);
        if (current >= target) {
          el.textContent = target;
          clearInterval(timer);
        }
      }, step);
    }
    const counterObserver = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting && !e.target.dataset.counted) {
          e.target.dataset.counted = 'true';
          animateCounter(e.target);
        }
      });
    }, {
      threshold: .5
    });
    document.querySelectorAll('.counter').forEach(c => counterObserver.observe(c));

    /* ── 3D TILT on prog-card & mvv-card ── */
    document.querySelectorAll('.prog-card,.mvv-card').forEach(card => {
      card.addEventListener('mousemove', e => {
        const r = card.getBoundingClientRect();
        const cx = r.left + r.width / 2;
        const cy = r.top + r.height / 2;
        const rx = -(e.clientY - cy) / r.height * 10;
        const ry = (e.clientX - cx) / r.width * 10;
        card.style.transform = `translateY(-10px) rotateX(${rx}deg) rotateY(${ry}deg)`;
      });
      card.addEventListener('mouseleave', () => {
        card.style.transform = '';
      });
    });

    /* ── PARALLAX on dark sections ── */
    window.addEventListener('scroll', () => {
      const y = window.scrollY;
      document.querySelectorAll('.mandate-sec, .mvv-sec').forEach(sec => {
        const rect = sec.getBoundingClientRect();
        const offset = (rect.top + rect.height / 2) - window.innerHeight / 2;
        sec.style.backgroundPositionY = `calc(50% + ${offset * .05}px)`;
      });
    });
  </script>
  <script src="js/script.js"></script>
  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>

</body>

</html>