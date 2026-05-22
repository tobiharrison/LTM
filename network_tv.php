<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Watch — LTM Networks</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,500&family=Nunito+Sans:wght@300;400;600;700;800&family=Cinzel:wght@400;600;700;900&display=swap"
    rel="stylesheet">
  <!-- Add following section in the page's <head> tag -->
  <link rel="stylesheet" href="//releases.flowplayer.org/7.2.7/skin/skin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/network_tv.css" rel="stylesheet">

</head>

<body>
  <div id="pgbar"></div>
  <div class="ambient">
    <div class="orb o1" id="ambOrb1"></div>
    <div class="orb o2" id="ambOrb2"></div>
  </div>

  <?php include('navbar.php'); ?>

  <!-- NETWORK HEADER -->
  <div class="net-header" id="netHeader">
    <div class="nh-left">
      <div class="nh-logo" id="nhLogo"></div>
      <div class="nh-info">
        <div class="nh-name" id="nhName">Loveworld Network</div>
        <div class="nh-tagline" id="nhTagline">Broadcasting Live</div>
      </div>
    </div>
    <div class="nh-right">
      <div class="nh-live">
        <div class="nh-live-dot"></div>Live Now
      </div>
      <a href="ltm-networks.php" class="nh-back"><i class="fas fa-arrow-left"></i> All Networks</a>
    </div>
  </div>

  <!-- PAGE CONTENT -->
  <div class="page-wrap">

    <!-- LEFT: PLAYER + INFO -->
    <div class="player-area">

      <!-- Player -->
      <div class="player-wrap reveal">
        <div class="player-screen">
          <div class="ps-bg" id="playerBg"></div>
          <div class="ps-grid"></div>
          <div class="ps-scan"></div>
          <div class="ps-center">
            <!-- Add following section in the page's <body> tag, where you need the player to be shown -->
            <div class="flowplayer" data-live="true" data-share="false" data-ratio="0.5625">
              <video id="nhLink" autoplay>
                <source type="application/x-mpegurl" src="">
              </video>
            </div>
          </div>
          <div class="ps-viewers"><i class="fas fa-eye"></i> <span id="viewCount">0</span> watching</div>
        </div>

      </div>

      <!-- Stats row -->
      <div class="net-info-row reveal d1" id="netInfoRow"></div>

      <!-- About -->
      <div class="about-card reveal d2">
        <div class="about-card-title" id="aboutTitle"><i class="fas fa-info-circle"></i> About This Network</div>
        <div class="about-text" id="aboutText">Loading network information…</div>
      </div>

      <!-- Programs -->
      <div class="programs-card reveal">
        <div class="programs-header"><i class="fas fa-play-circle" style="font-size:.85rem"></i><span>Currently Airing &
            Upcoming</span></div>
        <div id="programsList"></div>
      </div>

    </div><!-- /player-area -->

    <!-- SIDEBAR -->
    <div class="sidebar">

      <!-- Today's Schedule -->
      <div class="side-card rr">
        <div class="side-card-header"><i class="fas fa-calendar-alt"></i>Today's Schedule</div>
        <div id="sideSchedule"></div>
      </div>

      <!-- Give -->
      <div class="give-side-card rr d1">
        <div class="gsc-title"><i class="fas fa-heart"></i> Support This Network</div>
        <div class="gsc-sub">Your gift keeps the Gospel broadcasting in every language to every nation</div>
        <div class="gsc-amts">
          <button class="gsc-amt" onclick="selGive(this,'50')">50 ESP</button>
          <button class="gsc-amt sel" onclick="selGive(this,'100')">100 ESP</button>
          <button class="gsc-amt" onclick="selGive(this,'500')">500 ESP</button>
          <button class="gsc-amt" onclick="selGive(this,'1000')">1,000 ESP</button>
        </div>
        <button class="gsc-btn" onclick="handleGive(this)"><i class="fas fa-heart"></i> Give Now</button>
      </div>

      <!-- Related Networks -->
      <div class="side-card rr d2">
        <div class="side-card-header"><i class="fas fa-broadcast-tower"></i> Other LTM Networks</div>
        <div id="relatedNetworks"></div>
      </div>

    </div>
  </div>

  <?php include('footer.php'); ?>

  <script>
    // ── NETWORK DATA ──
    const NETWORKS = {
      asia: {
        name: 'Loveworld Asia',
        short: 'LW Asia',
        code: 'AS',
        abbr: 'AS',
        link: 'https://go5lm6a6dawb-hls-live.5centscdn.com/6731_push_2485_001/371362a7b90a53e25ba495476393be88.sdp/playlist.m3u8',
        tagline: 'Reaching 600M+ souls across Asia',
        bg: 'linear-gradient(145deg,#030a18,#0f2a4a,#1a4a7a)',
        nc: '#2980b9',
        glow: 'rgba(41,128,185,.3)',
        logo_bg: 'linear-gradient(135deg,#1a3a6a,#2980b9)',
        viewers: 340000,
        desc: '<strong>Loveworld Asia</strong> is a language-based network station aimed at reaching over <strong>600 million souls</strong> across the Asian continent with the Gospel of our Lord Jesus in over <strong>400 unique languages</strong> in 19 countries.',
        stats: [{
          n: '600M+',
          l: 'Souls Reached'
        }, {
          n: '19',
          l: 'Nations'
        }, {
          n: '400+',
          l: 'Languages'
        }, {
          n: '24/7',
          l: 'Broadcast'
        }],
        programs: ['Rhapsody of Realities', 'Atmosphere for Miracles', 'Asian Gospel Hour', 'Pastor Chris Teaching',
          'Language of Faith', 'Eastern Praise Night'
        ],
        schedule: [{
          t: '06:00',
          s: 'Morning Prayer',
          live: false,
          next: false
        }, {
          t: '07:30',
          s: 'Asian Gospel Hour',
          live: false,
          next: false
        }, {
          t: '08:00',
          s: 'Rhapsody of Realities',
          live: true,
          next: false
        }, {
          t: '09:30',
          s: 'Atmosphere for Miracles',
          live: false,
          next: true
        }, {
          t: '11:00',
          s: 'Language of Faith',
          live: false,
          next: false
        }, {
          t: '13:00',
          s: 'Pastor Chris Teaching',
          live: false,
          next: false
        }, {
          t: '18:00',
          s: 'Eastern Praise Night',
          live: false,
          next: false
        }],
      },
      portuguese: {
        name: 'Loveworld Portuguese',
        short: 'LW Portuguese',
        code: 'PT',
        abbr: 'PT',
        link: 'https://go5lm6a6dawb-hls-live.5centscdn.com/6731_push_2486_001/3ce7f74492fd8981fe6b7badd2cdb256.sdp/playlist.m3u8',
        tagline: 'Broadcasting to 250M+ Portuguese speakers',
        bg: 'linear-gradient(145deg,#030d08,#0a2e14,#1a5c28)',
        nc: '#27ae60',
        glow: 'rgba(39,174,96,.3)',
        logo_bg: 'linear-gradient(135deg,#1a5c28,#27ae60)',
        viewers: 185000,
        desc: '<strong>Loveworld Portuguese</strong> is a dynamic TV network dedicated to <strong>daily broadcasting the Gospel</strong> to over <strong>250 million Portuguese-speaking Viewers</strong> across 15 nations worldwide, through inspiring programs and life-changing content.',
        stats: [{
          n: '250M+',
          l: 'Viewers'
        }, {
          n: '15',
          l: 'Nations'
        }, {
          n: 'Daily',
          l: 'Broadcast'
        }, {
          n: '24/7',
          l: 'Online'
        }],
        programs: ['Rhapsody de Realidades', 'Atmosfera para Milagres', 'Pastor Chris Ensina', 'Noite de Glória',
          'Evangelismo Familiar'
        ],
        schedule: [{
          t: '06:00',
          s: 'Oração da Manhã',
          live: false,
          next: false
        }, {
          t: '08:00',
          s: 'Rhapsody de Realidades',
          live: true,
          next: false
        }, {
          t: '09:30',
          s: 'Atmosfera para Milagres',
          live: false,
          next: true
        }, {
          t: '12:00',
          s: 'Pastor Chris Ensina',
          live: false,
          next: false
        }, {
          t: '19:00',
          s: 'Noite de Glória',
          live: false,
          next: false
        }],
      },
      spanish: {
        name: 'Loveworld Spanish',
        short: 'LW Spanish',
        code: 'ES',
        abbr: 'ES',
        link: 'https://go5lm6a6dawb-hls-live.5centscdn.com/6731_push_2487_002/5061625a4eef578bcbea3ecb51c9c331.sdp/playlist.m3u8',
        tagline: 'Transforming 500M+ Spanish speakers',
        bg: 'linear-gradient(145deg,#1a0505,#4a0e0e,#8b1414)',
        nc: '#c0392b',
        glow: 'rgba(192,57,43,.3)',
        logo_bg: 'linear-gradient(135deg,#8b1414,#c0392b)',
        viewers: 420000,
        desc: '<strong>Loveworld Spanish</strong> is a divinely orchestrated TV Network with a mission to reach and transform the lives of over <strong>500 million Spanish-speaking people</strong> across more than 20 nations.',
        stats: [{
          n: '500M+',
          l: 'Souls'
        }, {
          n: '20+',
          l: 'Nations'
        }, {
          n: 'Daily',
          l: 'Broadcast'
        }, {
          n: '24/7',
          l: 'Streaming'
        }],
        programs: ['Rapsody de Realidades', 'Atmósfera de Milagros', 'Pastor Chris Enseña', 'Noche de Gloria',
          'Evangelismo TV'
        ],
        schedule: [{
          t: '06:00',
          s: 'Oración Matutina',
          live: false,
          next: false
        }, {
          t: '08:00',
          s: 'Rapsody de Realidades',
          live: true,
          next: false
        }, {
          t: '09:30',
          s: 'Atmósfera de Milagros',
          live: false,
          next: true
        }, {
          t: '13:00',
          s: 'Pastor Chris Enseña',
          live: false,
          next: false
        }, {
          t: '19:00',
          s: 'Noche de Gloria',
          live: false,
          next: false
        }],
      },
      pacifics: {
        name: 'Loveworld Pacifics',
        short: 'LW Pacifics',
        code: 'PA',
        abbr: 'PA',
        link: 'https://go5lm6a6dawb-hls-live.5centscdn.com/6731_push_2488_001/bfbb1582812b8f8194c755a88c3abe9e.sdp/playlist.m3u8',
        tagline: 'Reaching 220M+ across Western Americas',
        bg: 'linear-gradient(145deg,#020814,#081830,#12305a)',
        nc: '#3498db',
        glow: 'rgba(52,152,219,.3)',
        logo_bg: 'linear-gradient(135deg,#12305a,#3498db)',
        viewers: 98000,
        desc: '<strong>Loveworld Pacifics</strong> cuts across <strong>Western Canada, Western United States, and Western Mexico</strong>, reaching over <strong>220 million people</strong> with the undiluted and infallible truth of God\'s Word.',
        stats: [{
          n: '220M+',
          l: 'Reached'
        }, {
          n: '3',
          l: 'Nations'
        }, {
          n: 'West',
          l: 'Americas'
        }, {
          n: '24/7',
          l: 'Live'
        }],
        programs: ['Rhapsody of Realities', 'Atmosphere for Miracles', 'Pacific Gospel Hour', 'Pastor Chris Teaching',
          'Western Praise'
        ],
        schedule: [{
          t: '06:00',
          s: 'Morning Devotion',
          live: false,
          next: false
        }, {
          t: '08:00',
          s: 'Rhapsody of Realities',
          live: true,
          next: false
        }, {
          t: '09:30',
          s: 'Atmosphere for Miracles',
          live: false,
          next: true
        }, {
          t: '14:00',
          s: 'Pacific Gospel Hour',
          live: false,
          next: false
        }, {
          t: '20:00',
          s: 'Western Praise',
          live: false,
          next: false
        }],
      },
      arabic: {
        name: 'Loveworld Arabic',
        short: 'LW Arabic',
        code: 'AR',
        abbr: 'عر',
        tagline: 'Penetrating the Arab world with God\'s Word',
        bg: 'linear-gradient(145deg,#100800,#2e1a00,#5c3400)',
        nc: '#e8b840',
        glow: 'rgba(232,184,64,.25)',
        logo_bg: 'linear-gradient(135deg,#5c3400,#e8b840)',
        viewers: 275000,
        desc: '<strong>LoveWorld Arabic</strong> is a language-based network that <strong>penetrates the Middle East and Northern Africa</strong> with the Arabic language, reaching over <strong>400 million souls</strong> with the Gospel of our Savior Jesus Christ daily.',
        stats: [{
          n: '400M+',
          l: 'Souls'
        }, {
          n: 'MENA',
          l: 'Region'
        }, {
          n: 'Arabic',
          l: 'Language'
        }, {
          n: 'Daily',
          l: 'Broadcast'
        }],
        programs: ['Rhapsody of Realities (Arabic)', 'Atmosphere for Miracles', 'Arabic Teaching Hour',
          'Evening Prayer', 'Middle East Gospel'
        ],
        schedule: [{
          t: '06:00',
          s: 'Morning Prayer (Arabic)',
          live: false,
          next: false
        }, {
          t: '08:00',
          s: 'Rhapsody of Realities',
          live: true,
          next: false
        }, {
          t: '09:30',
          s: 'Atmosphere for Miracles',
          live: false,
          next: true
        }, {
          t: '13:00',
          s: 'Arabic Teaching Hour',
          live: false,
          next: false
        }, {
          t: '19:00',
          s: 'Middle East Gospel',
          live: false,
          next: false
        }],
      }
    };

    // Get network from URL param
    const params = new URLSearchParams(window.location.search);
    const netKey = (params.get('network') || 'asia').toLowerCase();
    const net = NETWORKS[netKey] || NETWORKS.asia;

    // Apply network theme
    document.title = `Watch ${net.name} — LTM`;
    document.documentElement.style.setProperty('--nc', net.nc);
    document.getElementById('pgbar').style.background = `linear-gradient(90deg,${net.nc},#e8b840)`;
    document.getElementById('ambOrb1').style.background = net.nc;
    document.getElementById('ambOrb2').style.background = net.nc;

    // Header
    document.getElementById('nhLogo').textContent = net.abbr;
    document.getElementById('nhLogo').style.background = net.logo_bg;
    document.getElementById('nhName').textContent = net.name;
    document.getElementById('nhTagline').textContent = net.tagline;

    // Player
    const video = document.getElementById('nhLink');
    const source = video.querySelector('source');

    source.src = net.link;
    video.load();
    video.play();

    // Viewers
    let vCount = net.viewers;
    document.getElementById('viewCount').textContent = vCount.toLocaleString();
    setInterval(() => {
      vCount += Math.floor(Math.random() * 40 - 12);
      document.getElementById('viewCount').textContent = vCount.toLocaleString();
    }, 4000);

    // Stats row
    document.getElementById('netInfoRow').innerHTML = net.stats.map(s => `
  <div class="ni-card">
    <div class="ni-num" style="color:${net.nc}">${s.n}</div>
    <div class="ni-label">${s.l}</div>
  </div>`).join('');

    // About
    document.getElementById('aboutText').innerHTML = net.desc;

    // Programs
    document.getElementById('programsList').innerHTML = net.programs.map((p, i) => `
  <div class="prog-item">
    <div class="prog-thumb" style="background:${i===0?net.logo_bg:'rgba(255,255,255,.05)'}">
      <i class="fas ${i===0?'fa-play-circle':'fa-video'}"></i>
    </div>
    <div class="prog-info">
      <div class="prog-name">${p}</div>
      <div class="prog-time">${i===0?'Now Broadcasting · Live':i===1?'Up Next':'Available on Demand'}</div>
    </div>
    ${i===0?'<span class="prog-live">● Live</span>':''}
  </div>`).join('');

    // Schedule
    document.getElementById('sideSchedule').innerHTML = net.schedule.map(s => `
  <div class="sched-item-s ${s.live?'live-now':''}">
    <div class="sit-time ${s.live?'live':''}">${s.t}</div>
    <div class="sit-name">${s.s}</div>
    ${s.live?`<span class="sit-tag live">Live</span>`:s.next?`<span class="sit-tag next">Next</span>`:''}
  </div>`).join('');

    // Related networks
    const relKeys = Object.keys(NETWORKS).filter(k => k !== netKey);
    document.getElementById('relatedNetworks').innerHTML = relKeys.map(k => {
      const n = NETWORKS[k];
      return `<a href="?network=${k}" class="rel-net">
    <div class="rn-logo" style="background:${n.logo_bg}">${n.abbr}</div>
    <div class="rn-info"><div class="rn-name">${n.name}</div><div class="rn-region">${n.tagline}</div></div>
    <div class="rn-live"><div class="rn-live-dot"></div> Live</div>
  </a>`;
    }).join('');

    // Controls
    let playing = false;

    function togglePlay() {
      playing = !playing;
      document.getElementById('psPlayIcon').className = playing ? 'fas fa-pause' : 'fas fa-play';
      document.getElementById('ctrlPlayIcon').className = playing ? 'fas fa-pause' : 'fas fa-play';
      document.getElementById('playLabel').textContent = playing ? 'Now streaming live' : 'Click to watch live';
    }

    function toggleMute() {
      const i = document.getElementById('muteIcon');
      i.className = i.className.includes('mute') ? 'fas fa-volume-up' : 'fas fa-volume-mute';
    }

    function goFull() {
      const s = document.querySelector('.player-screen');
      if (s.requestFullscreen) s.requestFullscreen();
    }

    function shareStream() {
      if (navigator.share) navigator.share({
        title: `Watch ${net.name} Live`,
        url: window.location.href
      }).catch(() => {});
      else navigator.clipboard.writeText(window.location.href);
    }

    function selGive(btn, val) {
      document.querySelectorAll('.gsc-amt').forEach(b => b.classList.remove('sel'));
      btn.classList.add('sel');
    }

    function handleGive(btn) {
      const o = btn.innerHTML;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing…';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-check"></i> Thank You! 🙏';
        btn.style.background = 'linear-gradient(135deg,#27ae60,#2ecc71)';
        setTimeout(() => {
          btn.innerHTML = o;
          btn.style.background = '';
          btn.disabled = false
        }, 4000)
      }, 2000);
    }

    // Progress & reveal
    window.addEventListener('scroll', () => {
      document.getElementById('pgbar').style.width = (window.scrollY / (document.documentElement.scrollHeight - window
        .innerHeight) * 100) + '%';
    });
    const io = new IntersectionObserver(e => e.forEach(x => {
      if (x.isIntersecting) x.target.classList.add('vis')
    }), {
      threshold: .08
    });
    document.querySelectorAll('.reveal,.rl,.rr').forEach(el => io.observe(el));
  </script>
  <script src="js/script.js"></script>
  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>
  <!-- jQuery library, include only once in the website -->
  <script src="//code.jquery.com/jquery-1.12.4.min.js"></script>

  <!-- hls.js -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/hls.js/0.10.1/hls.light.min.js"></script>

  <!-- Flowplayer library -->
  <script src="//releases.flowplayer.org/7.2.7/flowplayer.min.js"></script>
</body>

</html>