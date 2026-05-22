<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TV Directory — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,500&family=Nunito+Sans:wght@300;400;600;700;800&family=Cinzel:wght@400;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/tv_directory.css" rel="stylesheet">

</head>

<body>
  <div id="pgbar"></div>
  <div class="ambient">
    <div class="orb orb1"></div>
    <div class="orb orb2"></div>
  </div>

  <?php include('navbar.php'); ?>

  <div class="bc">
    <div class="bc-in"><a href="index.php"><i class="fas fa-home"></i> Home</a><i
        class="fas fa-chevron-right"></i><span>TV Directory</span></div>
  </div>

  <!-- PAGE HEADER -->
  <div class="page-header">
    <div class="header-bg-text">TV DIRECTORY</div>
    <div class="header-inner reveal">
      <div class="chip"><i class="fas fa-tv"></i> Global Broadcasting</div>
      <h1 class="page-h1">TV <em>Directory</em></h1>
      <div class="header-rule"></div>
      <p class="page-sub">Find every television station airing Pastor Chris's message around the world. Search by
        country or station to discover when and where to tune in near you.</p>
      <div class="stats-bar">
        <div class="sb-item"><i class="fas fa-broadcast-tower"></i><span>Stations: <span class="sb-num">45</span></span>
        </div>
        <div class="sb-item"><i class="fas fa-globe"></i><span>Countries: <span class="sb-num">20+</span></span></div>
        <div class="sb-item"><i class="fas fa-clock"></i><span>On Air: <span class="sb-num">24/7</span></span></div>
      </div>
    </div>
  </div>

  <!-- CONTROLS -->
  <div class="controls">
    <div class="controls-inner">
      <div class="search-wrap">
        <i class="fas fa-search"></i>
        <input type="text" id="searchInput" placeholder="Search stations, countries…" oninput="doFilter()">
      </div>
      <select class="country-sel" id="countryFilter" onchange="doFilter()">
        <option value="">All Countries</option>
        <option>Nigeria</option>
        <option>Kenya</option>
        <option>Togo</option>
        <option>DR Congo</option>
        <option>Burundi</option>
        <option>Malawi</option>
        <option>Uganda</option>
        <option>South Sudan</option>
        <option>Gambia</option>
        <option>Ghana</option>
        <option>Chad</option>
        <option>Philippines</option>
        <option>Suriname</option>
        <option>Canada</option>
        <option>Dominica</option>
        <option>Netherlands</option>
        <option>Sweden</option>
        <option>Seychelles</option>
        <option>Sao Tome</option>
      </select>
      <div class="view-toggle">
        <button class="vt-btn active" id="gridBtn" onclick="setView('grid')" title="Grid"><i
            class="fas fa-th"></i></button>
        <button class="vt-btn" id="listBtn" onclick="setView('list')" title="List"><i class="fas fa-list"></i></button>
      </div>
      <div class="results-count" id="resCount">45 stations found</div>
    </div>
  </div>

  <!-- MAIN -->
  <div class="main" id="mainContent"></div>

  <?php include('footer.php'); ?>
  <script>
    window.addEventListener('scroll', () => {
      const p = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
      document.getElementById('pgbar').style.width = (p * 100) + '%';
    });

    const FLAGS = {
      'Nigeria': '🇳🇬',
      'Kenya': '🇰🇪',
      'Togo': '🇹🇬',
      'DR Congo': '🇨🇩',
      'Burundi': '🇧🇮',
      'Malawi': '🇲🇼',
      'Uganda': '🇺🇬',
      'South Sudan': '🇸🇸',
      'Gambia': '🇬🇲',
      'Chad': '🇹🇩',
      'Philippines': '🇵🇭',
      'Suriname': '🇸🇷',
      'Canada': '🇨🇦',
      'Dominica': '🇩🇲',
      'Netherlands': '🇳🇱',
      'Sweden': '🇸🇪',
      'Seychelles': '🇸🇨',
      'Sao Tome': '🇸🇹',
      'Ghana': '🇬🇭',
      'Malawi South': '🇲🇼',
      'Malawi North': '🇲🇼',
      'Amsterdam': '🇳🇱',
      'Stolkham Sweden': '🇸🇪'
    };

    const STATIONS = [{
        n: 1,
        name: "RTEE (Radio Television Eternal Gospel)",
        sched: "SAT 8PM & SUN 9AM",
        tz: "UTC+2",
        country: "DR Congo"
      },
      {
        n: 2,
        name: "TV Zion",
        sched: "TUE 8PM",
        tz: "GMT",
        country: "Togo"
      },
      {
        n: 3,
        name: "RTDS TV",
        sched: "THU 8PM",
        tz: "GMT",
        country: "Togo"
      },
      {
        n: 4,
        name: "TN TV",
        sched: "SUN 7:00–7:30",
        tz: "",
        country: "Chad"
      },
      {
        n: 5,
        name: "Gitenga TV",
        sched: "FRI, SAT & SUN 7:00–8:00PM",
        tz: "GMT+2",
        country: "Burundi"
      },
      {
        n: 6,
        name: "BETV",
        sched: "MON–THU 7PM–8PM",
        tz: "GMT+2",
        country: "Burundi"
      },
      {
        n: 7,
        name: "Cable TV",
        sched: "MON, WED, FRI, SAT, SUN 6:30PM",
        tz: "GMT+4",
        country: "Seychelles"
      },
      {
        n: 8,
        name: "Zodiak TV",
        sched: "SUN 6:00–7:00PM",
        tz: "GMT+2",
        country: "Malawi South"
      },
      {
        n: 9,
        name: "TVS",
        sched: "SUN 8:00–8:30AM",
        tz: "GMT",
        country: "Sao Tome"
      },
      {
        n: 10,
        name: "PTV4",
        sched: "SUN 7:00AM",
        tz: "GMT+8",
        country: "Philippines"
      },
      {
        n: 11,
        name: "EBN TV",
        sched: "THU AFM 8:30 PCT · SAT 8:30PM",
        tz: "GMT+1",
        country: "Kenya"
      },
      {
        n: 12,
        name: "Kingdom TV",
        sched: "THU AFM 8:30 PCT · SAT 8:30PM",
        tz: "GMT+1",
        country: "Kenya"
      },
      {
        n: 13,
        name: "Elevate TV",
        sched: "THU 8:30 · SAT 8:30PM",
        tz: "GMT+1",
        country: "Kenya"
      },
      {
        n: 14,
        name: "Shalom TV",
        sched: "TUE 8:30PM",
        tz: "GMT-3",
        country: "Suriname"
      },
      {
        n: 15,
        name: "UCB TV",
        sched: "THU 9PM",
        tz: "GMT-3",
        country: "Suriname"
      },
      {
        n: 16,
        name: "TV Binneland",
        sched: "SAT 7PM",
        tz: "GMT-3",
        country: "Suriname"
      },
      {
        n: 17,
        name: "Joy TV",
        sched: "SUN 9:00–9:30AM",
        tz: "GMT-5",
        country: "Canada"
      },
      {
        n: 18,
        name: "Digicel TV",
        sched: "SAT & SUN 8:00PM",
        tz: "GMT-4",
        country: "Dominica"
      },
      {
        n: 19,
        name: "Times TV",
        sched: "WED & SUN 3:30–4:00PM",
        tz: "GMT+1",
        country: "Malawi North"
      },
      {
        n: 20,
        name: "Salto TV",
        sched: "WED 18:00–18:30 · FRI 18:00–18:30 · SAT 22:00–22:30",
        tz: "",
        country: "Amsterdam"
      },
      {
        n: 21,
        name: "Goodnews TV",
        sched: "SAT & SUN 3:00PM",
        tz: "GMT+3",
        country: "Uganda"
      },
      {
        n: 22,
        name: "Oppna Kanalen",
        sched: "FRI 4:00PM · SAT 10:30AM",
        tz: "GMT+1",
        country: "Stolkham Sweden"
      },
      {
        n: 23,
        name: "SSBC",
        sched: "SUN 7:00PM",
        tz: "GMT+3",
        country: "South Sudan"
      },
      {
        n: 24,
        name: "GRTS",
        sched: "SUN 7:00–7:30PM",
        tz: "GMT+1",
        country: "Gambia"
      },
      {
        n: 25,
        name: "UTV",
        sched: "SUN 8:00–8:30AM",
        tz: "GMT+1",
        country: "Kenya"
      },
      {
        n: 26,
        name: "Encounter Jesus Television",
        sched: "MON 11:00PM · WED 4:30AM · SAT 6:00PM WAT",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 27,
        name: "NTA Osogbo",
        sched: "THU 7:30–8:00PM",
        tz: "GMT+1",
        country: "Nigeria"
      },
      {
        n: 28,
        name: "Whole Word TV Warri",
        sched: "TUE 7:00PM · FRI 9:00PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 29,
        name: "Silverbird TV Port Harcourt",
        sched: "SUN 9:00AM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 30,
        name: "LN247 International",
        sched: "SUN–SAT 5:30AM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 31,
        name: "NTA Ibadan",
        sched: "THU 7:30–8:00PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 32,
        name: "Superscreen",
        sched: "WED & FRI 6:00AM, 12:30PM & 7:00PM · SAT 6:00AM · SUN 8:00AM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 33,
        name: "Haske TV Jalingo",
        sched: "FRI 6:30PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 34,
        name: "DITV Kaduna",
        sched: "SUN 9:00–9:30AM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 35,
        name: "Pathway",
        sched: "MON–SUN 12:30PM, 1:00PM & 7:00PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 36,
        name: "NTA Maiduguri",
        sched: "SUN 3:30PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 37,
        name: "NTA Uyo",
        sched: "TUE 7:30–8:00PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 38,
        name: "NTA Portharcourt",
        sched: "THU 7:30PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 39,
        name: "NTA Sokoto",
        sched: "SUN 7:30PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 40,
        name: "ITV Benin",
        sched: "FRI 5:00PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 41,
        name: "BATV Bauchi",
        sched: "SUN 6:30–7:00PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 42,
        name: "NTA Bauchi",
        sched: "SUN 8:30–9:00PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 43,
        name: "ESBS Enugu",
        sched: "SAT 4PM · SUN 5PM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 44,
        name: "Wazobia Max TV PH",
        sched: "SAT 7:30AM",
        tz: "",
        country: "Nigeria"
      },
      {
        n: 45,
        name: "Melody TV Uyo",
        sched: "TUE 7:30–8:00PM",
        tz: "",
        country: "Nigeria"
      },
    ];

    let currentView = 'grid';

    function setView(v) {
      currentView = v;
      document.getElementById('gridBtn').classList.toggle('active', v === 'grid');
      document.getElementById('listBtn').classList.toggle('active', v === 'list');
      render(getFiltered());
    }

    function getFiltered() {
      const q = document.getElementById('searchInput').value.toLowerCase();
      const c = document.getElementById('countryFilter').value.toLowerCase();
      return STATIONS.filter(s => {
        const match = (s.name + ' ' + s.sched + ' ' + s.country).toLowerCase();
        const cMatch = !c || s.country.toLowerCase().includes(c.toLowerCase()) || c === s.country.toLowerCase();
        return match.includes(q) && cMatch;
      });
    }

    function doFilter() {
      const f = getFiltered();
      document.getElementById('resCount').textContent = `${f.length} station${f.length!==1?'s':''} found`;
      render(f);
    }

    function render(list) {
      const main = document.getElementById('mainContent');
      if (!list.length) {
        main.innerHTML =
          `<div class="empty-state vis"><i class="fas fa-satellite-dish"></i><h3>No stations found</h3><p>Try adjusting your search or filter</p></div>`;
        return;
      }
      // Group by country
      const groups = {};
      list.forEach(s => {
        if (!groups[s.country]) groups[s.country] = [];
        groups[s.country].push(s);
      });
      let html = '';
      Object.keys(groups).sort().forEach((country, gi) => {
        const flag = FLAGS[country] || '📺';
        const stations = groups[country];
        html += `<div class="country-group" style="animation-delay:${gi*0.05}s">
      <div class="country-header">
        <div class="country-flag-icon">${flag}</div>
        <div>
          <div class="country-name">${country}</div>
        </div>
        <span class="country-count">${stations.length} station${stations.length>1?'s':''}</span>
        <div class="country-divider"></div>
      </div>
      <div class="${currentView==='grid'?'stations-grid':'stations-list'}">`;
        stations.forEach((s, i) => {
          const delayMs = i * 60;
          if (currentView === 'grid') {
            html += `<div class="station-card" style="animation-delay:${delayMs}ms">
          <div class="station-card-inner">
            <div class="card-strip"></div>
            <div class="card-body">
              <div class="card-num">#${String(s.n).padStart(2,'0')}</div>
              <div class="card-station">${s.name}</div>
              <div class="card-schedule">${s.sched}</div>
              <div class="card-tags">
                ${s.tz?`<span class="tag tag-tz"><i class="fas fa-clock"></i> ${s.tz}</span>`:''}
              </div>
              <div class="card-country-row">
                <span class="card-flag">${flag}</span>
                <span class="card-country">${s.country}</span>
                <div class="card-icon"><i class="fas fa-tv"></i></div>
              </div>
            </div>
          </div>
        </div>`;
          } else {
            html += `<div class="list-card" style="animation-delay:${delayMs}ms">
          <div class="lc-num">#${String(s.n).padStart(2,'0')}</div>
          <div class="lc-station">${s.name}</div>
          <div class="lc-sched">${s.sched}${s.tz?' · '+s.tz:''}</div>
          <div class="lc-country">${flag} ${s.country}</div>
          <div class="lc-action"><button class="tune-btn"><i class="fas fa-tv"></i> Tune In</button></div>
        </div>`;
          }
        });
        html += `</div></div>`;
      });
      main.innerHTML = html;
    }

    // init
    doFilter();

    // Scroll reveal for page header
    const io = new IntersectionObserver(e => e.forEach(x => {
      if (x.isIntersecting) x.target.classList.add('vis')
    }), {
      threshold: .1
    });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
  </script>
  <script src="js/script.js"></script>
  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>

</body>

</html>