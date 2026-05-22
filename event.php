<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Nunito+Sans:wght@300;400;600;700;800&family=Cinzel:wght@400;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/event.css" rel="stylesheet">

</head>

<body>
  <div id="pgbar"></div>
  <div class="ambient">
    <div class="orb orb1"></div>
    <div class="orb orb2"></div>
    <div class="orb orb3"></div>
  </div>

  <?php include('navbar.php'); ?>

  <!-- BREADCRUMB -->
  <div class="bc">
    <div class="bc-in"><a href="index.php"><i class="fas fa-home"></i> Home</a><i
        class="fas fa-chevron-right"></i><span>Events</span></div>
  </div>

  <!-- PAGE HEADER -->
  <div class="page-header">
    <div class="header-bg-text">EVENTS</div>
    <div class="header-grid">
      <div class="reveal">
        <div class="chip"><i class="fas fa-calendar-alt"></i> Live &amp; Upcoming</div>
        <h1 class="page-h1">LTM <em>Events</em></h1>
        <p class="page-sub">Watch live broadcasts, ongoing services and upcoming events from the Loveworld Television
          Ministry — streaming the divine presence of God into your home.</p>
        <div class="header-rule"></div>
      </div>
      <div class="header-right reveal delay2">
        <div class="hstat">
          <div class="hstat-num">3</div>
          <div class="hstat-label">Live Now</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">12</div>
          <div class="hstat-label">This Month</div>
        </div>
        <div class="hstat">
          <div class="hstat-num">180+</div>
          <div class="hstat-label">Nations</div>
        </div>
      </div>
    </div>
  </div>

  <!-- FILTER BAR -->
  <div class="filter-bar">
    <div class="filter-in">
      <button class="filter-btn active" onclick="filterEvents('all',this)">All Events</button>
      <button class="filter-btn" onclick="filterEvents('live',this)">🔴 Live Now</button>
      <button class="filter-btn" onclick="filterEvents('upcoming',this)">Upcoming</button>
      <button class="filter-btn" onclick="filterEvents('service',this)">Services</button>
      <button class="filter-btn" onclick="filterEvents('communion',this)">Communion</button>
      <button class="filter-btn" onclick="filterEvents('praise',this)">Praise Night</button>
      <button class="filter-btn" onclick="filterEvents('healing',this)">Healing Streams</button>
      <div class="filter-search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search events..." oninput="searchEvents(this.value)">
      </div>
    </div>
  </div>

  <!-- LIVE BANNER -->
  <div class="live-banner">
    <div class="live-banner-inner">
      <div class="live-dot"></div>
      <div class="live-label">Live Now</div>
      <div class="live-text"><strong>Your LoveWorld Special</strong> <span>is streaming live across all LTM networks —
          180+ nations · 465+ stations</span></div>
      <a href="live_tv.php" class="live-watch-now"><i class="fas fa-play"></i> Watch Live</a>
    </div>
  </div>

  <!-- EVENTS FEED -->
  <div class="events-feed" id="eventsFeed">

    <!-- SECTION: LIVE NOW -->
    <div class="feed-section-label"><span class="fsl-text" style="color:#c0392b">🔴 Live Now</span>
      <div class="fsl-line"></div>
    </div>

    <!-- EVENT 1: LIVE -->
    <div class="event-card" data-cat="live communion" id="ec1">
      <div class="ecard-media grad-1">
        <div class="ecard-icon-deco"><i class="fas fa-globe"></i></div>
        <div class="media-badge"><span class="mbadge mbadge-live">🔴 Live</span><span class="mbadge mbadge-upcoming"
            style="background:rgba(0,0,0,.5)">Global Broadcast</span></div>
        <div class="media-logo"><i class="fas fa-satellite-dish"></i></div>
        <div class="media-watch-overlay">
          <div class="mwo-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="media-duration"><i class="fas fa-clock"></i> Live · 2h 14m elapsed</div>
      </div>
      <div class="event-info">
        <div class="ei-top">
          <div class="ei-meta">
            <div class="ei-date"><i class="fas fa-calendar"></i> April 21, 2025 &nbsp;·&nbsp; 8:00 AM GMT</div>
            <div class="ei-sep"></div>
            <div class="ei-cat">Global Communion</div>
          </div>
          <div class="ei-title">Monthly Global <em>Communion Service</em></div>
          <div class="ei-divider"></div>
          <div class="ei-desc">Join Pastor Chris and millions of believers worldwide for the Monthly Edition of the
            Global Communion Service — a sacred gathering of faith transmitted live across 465+ TV stations, Web, Mobile
            and IPTV to over 180 nations. Come expecting a visitation of God's presence and Word.</div>

        </div>
        <div class="ei-bottom">
          <a href="#" class="watch-btn live-btn"><i class="fas fa-play"></i> Watch Live Now</a>
          <button class="share-btn"><i class="fas fa-share-alt"></i></button>
        </div>
      </div>
    </div>

    <!-- EVENT 2: LIVE -->
    <div class="event-card" data-cat="live healing" id="ec2">
      <div class="ecard-media grad-5">
        <div class="ecard-icon-deco"><i class="fas fa-heartbeat"></i></div>
        <div class="media-badge"><span class="mbadge mbadge-live">🔴 Live</span><span class="mbadge mbadge-upcoming"
            style="background:rgba(0,0,0,.5)">Healing Service</span></div>
        <div class="media-logo"><i class="fas fa-heart"></i></div>
        <div class="media-watch-overlay">
          <div class="mwo-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="media-duration"><i class="fas fa-clock"></i> Live · 45m elapsed</div>
      </div>
      <div class="event-info">
        <div class="ei-top">
          <div class="ei-meta">
            <div class="ei-date"><i class="fas fa-calendar"></i> April 21, 2025 &nbsp;·&nbsp; 10:00 AM GMT</div>
            <div class="ei-sep"></div>
            <div class="ei-cat">Healing Streams</div>
          </div>
          <div class="ei-title">Healing Streams <em>Live Healing Service</em></div>
          <div class="ei-divider"></div>
          <div class="ei-desc">Experience the miraculous healing power of God as Pastor Chris ministers live from the
            Healing Streams platform. Thousands are healed of cancer, paralysis, blindness and every infirmity as the
            Spirit of God moves through television screens worldwide. Your miracle is a broadcast away.</div>

        </div>
        <div class="ei-bottom">
          <a href="#" class="watch-btn live-btn"><i class="fas fa-play"></i> Watch Live Now</a>
          <button class="share-btn"><i class="fas fa-share-alt"></i></button>
        </div>
      </div>
    </div>

    <!-- SECTION: UPCOMING -->
    <div class="feed-section-label" style="margin-top:16px"><span class="fsl-text">📅 Coming Up</span>
      <div class="fsl-line"></div>
    </div>

    <!-- EVENT 3: UPCOMING -->
    <div class="event-card" data-cat="upcoming praise" id="ec3">
      <div class="ecard-media grad-2">
        <div class="ecard-icon-deco"><i class="fas fa-music"></i></div>
        <div class="media-badge"><span class="mbadge mbadge-upcoming">Upcoming</span><span class="mbadge"
            style="background:rgba(232,184,64,.8);color:var(--ink)">Praise Night</span></div>
        <div class="media-logo"><i class="fas fa-star"></i></div>
        <div class="media-watch-overlay">
          <div class="mwo-btn"><i class="fas fa-bell"></i></div>
        </div>
        <div class="media-duration"><i class="fas fa-calendar"></i> Apr 26, 2025</div>
      </div>
      <div class="event-info">
        <div class="ei-top">
          <div class="ei-meta">
            <div class="ei-date"><i class="fas fa-calendar"></i> April 26, 2025 &nbsp;·&nbsp; 7:00 PM GMT</div>
            <div class="ei-sep"></div>
            <div class="ei-cat">Praise Night</div>
          </div>
          <div class="ei-title">Night of <em>Bliss Global</em> — April Edition</div>
          <div class="ei-divider"></div>
          <div class="ei-desc">The Night of Bliss is a globally broadcast praise and worship service that has
            transformed millions of lives through the power of worship and the Word. This April edition will be
            simulcast across all Loveworld networks in 180 nations simultaneously — an unmissable encounter with God.
          </div>


        </div>
        <div class="ei-bottom">
          <a href="#" class="watch-btn"><i class="fas fa-bell"></i> Set Reminder</a>
          <button class="remind-btn"><i class="fas fa-share-alt"></i> Share Event</button>
          <button class="share-btn"><i class="fas fa-bookmark"></i></button>
        </div>
      </div>
    </div>

    <!-- EVENT 4 -->
    <div class="event-card" data-cat="upcoming service" id="ec4">
      <div class="ecard-media grad-3">
        <div class="ecard-icon-deco"><i class="fas fa-book-open"></i></div>
        <div class="media-badge"><span class="mbadge mbadge-upcoming">Upcoming</span><span class="mbadge"
            style="background:rgba(0,0,0,.4);color:#fff">Sunday Service</span></div>
        <div class="media-logo"><i class="fas fa-church"></i></div>
        <div class="media-watch-overlay">
          <div class="mwo-btn"><i class="fas fa-bell"></i></div>
        </div>
        <div class="media-duration"><i class="fas fa-calendar"></i> Apr 27, 2025</div>
      </div>
      <div class="event-info">
        <div class="ei-top">
          <div class="ei-meta">
            <div class="ei-date"><i class="fas fa-calendar"></i> April 27, 2025 &nbsp;·&nbsp; 8:00 AM GMT</div>
            <div class="ei-sep"></div>
            <div class="ei-cat">Sunday Service</div>
          </div>
          <div class="ei-title">Your LoveWorld <em>Special — April</em></div>
          <div class="ei-divider"></div>
          <div class="ei-desc">Your LoveWorld Special is a monthly broadcast event hosted by Pastor Chris Oyakhilome,
            packed with anointed teachings, testimonies, special music ministrations and surprise guests. This April
            edition promises to be one for the history books — don't miss a moment of it.</div>

        </div>
        <div class="ei-bottom">
          <a href="#" class="watch-btn"><i class="fas fa-bell"></i> Set Reminder</a>
          <button class="remind-btn"><i class="fas fa-share-alt"></i> Share</button>
          <button class="share-btn"><i class="fas fa-bookmark"></i></button>
        </div>
      </div>
    </div>

    <!-- SECTION: RECENT -->
    <div class="feed-section-label" style="margin-top:16px"><span class="fsl-text">🎬 Recently Aired</span>
      <div class="fsl-line"></div>
    </div>

    <!-- EVENT 5 -->
    <div class="event-card" data-cat="recent communion" id="ec5">
      <div class="ecard-media grad-4">
        <div class="ecard-icon-deco"><i class="fas fa-cross"></i></div>
        <div class="media-badge"><span class="mbadge mbadge-recent">Watch Replay</span></div>
        <div class="media-logo"><i class="fas fa-play-circle"></i></div>
        <div class="media-watch-overlay">
          <div class="mwo-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="media-duration"><i class="fas fa-clock"></i> 2h 48m</div>
      </div>
      <div class="event-info">
        <div class="ei-top">
          <div class="ei-meta">
            <div class="ei-date"><i class="fas fa-calendar"></i> March 30, 2025</div>
            <div class="ei-sep"></div>
            <div class="ei-cat">Global Communion</div>
          </div>
          <div class="ei-title">March Global <em>Communion Service</em> — Full Replay</div>
          <div class="ei-divider"></div>
          <div class="ei-desc">Relive the powerful March edition of the Global Communion Service — an anointed gathering
            of believers worldwide that saw thousands healed, saved and delivered. Pastor Chris ministered the Word with
            an unprecedented depth of revelation that left the world transformed.</div>

        </div>
        <div class="ei-bottom">
          <a href="#" class="watch-btn"><i class="fas fa-play"></i> Watch Replay</a>
          <button class="remind-btn"><i class="fas fa-download"></i> Download</button>
          <button class="share-btn"><i class="fas fa-share-alt"></i></button>
        </div>
      </div>
    </div>

    <!-- EVENT 6 -->
    <div class="event-card" data-cat="recent healing" id="ec6">
      <div class="ecard-media grad-6">
        <div class="ecard-icon-deco"><i class="fas fa-hands"></i></div>
        <div class="media-badge"><span class="mbadge mbadge-recent">Watch Replay</span></div>
        <div class="media-logo"><i class="fas fa-heart"></i></div>
        <div class="media-watch-overlay">
          <div class="mwo-btn"><i class="fas fa-play"></i></div>
        </div>
        <div class="media-duration"><i class="fas fa-clock"></i> 4h 05m</div>
      </div>
      <div class="event-info">
        <div class="ei-top">
          <div class="ei-meta">
            <div class="ei-date"><i class="fas fa-calendar"></i> March 15, 2025</div>
            <div class="ei-sep"></div>
            <div class="ei-cat">Healing Streams</div>
          </div>
          <div class="ei-title">Healing Streams <em>Live Service</em> — March 2025</div>
          <div class="ei-divider"></div>
          <div class="ei-desc">Thousands were miraculously healed in this extraordinary Healing Streams service that
            took God's divine presence into homes across 180 nations. Documented healings of stage-4 cancer, deafness,
            paralysis and lifelong infirmities — all captured live and now available for replay.</div>

        </div>
        <div class="ei-bottom">
          <a href="#" class="watch-btn"><i class="fas fa-play"></i> Watch Replay</a>
          <button class="remind-btn"><i class="fas fa-download"></i> Download</button>
          <button class="share-btn"><i class="fas fa-share-alt"></i></button>
        </div>
      </div>
    </div>
  </div>

  <!-- LOAD MORE -->
  <div class="load-more-wrap">
    <button class="load-more-btn"><i class="fas fa-th-list"></i> Load More Events</button>
  </div>

  <?php include('footer.php'); ?>

  <script>
    window.addEventListener('scroll', () => {
      const p = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
      document.getElementById('pgbar').style.width = (p * 100) + '%';
    });
    // Reveal
    const io = new IntersectionObserver(e => e.forEach(x => {
      if (x.isIntersecting) {
        x.target.classList.add('vis')
      }
    }), {
      threshold: .08
    });
    document.querySelectorAll('.event-card,.reveal').forEach(el => io.observe(el));
    // Filter
    function filterEvents(cat, btn) {
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      document.querySelectorAll('.event-card').forEach(card => {
        const cats = card.dataset.cat || '';
        card.style.display = (cat === 'all' || cats.includes(cat)) ? '' : 'none';
      });
    }

    function searchEvents(val) {
      const q = val.toLowerCase();
      document.querySelectorAll('.event-card').forEach(card => {
        const txt = card.innerText.toLowerCase();
        card.style.display = txt.includes(q) ? '' : 'none';
      });
    }
    // Countdown
    function tick() {
      const now = new Date();
      const target = new Date('2025-04-26T19:00:00Z');
      let diff = Math.max(0, Math.floor((target - now) / 1000));
      const d = Math.floor(diff / 86400);
      diff %= 86400;
      const h = Math.floor(diff / 3600);
      diff %= 3600;
      const m = Math.floor(diff / 60);
      const s = diff % 60;
      const f = n => String(n).padStart(2, '0');
      document.getElementById('cd1-d').textContent = f(d);
      document.getElementById('cd1-h').textContent = f(h);
      document.getElementById('cd1-m').textContent = f(m);
      document.getElementById('cd1-s').textContent = f(s);
    }
    tick();
    setInterval(tick, 1000);
  </script>
  <script src="js/script.js"></script>
  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>

</body>

</html>