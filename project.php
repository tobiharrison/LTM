<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2026 Projects — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Nunito+Sans:wght@300;400;600;700;800;900&family=Cinzel:wght@400;600;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/project.css" rel="stylesheet">

</head>

<body>
  <div id="pgbar"></div>
  <div class="ambient">
    <div class="orb o1"></div>
    <div class="orb o2"></div>
    <div class="orb o3"></div>
  </div>

  <?php include('navbar.php'); ?>

  <div class="bc">
    <div class="bc-in"><a href="index.php"><i class="fas fa-home"></i> Home</a><i
        class="fas fa-chevron-right"></i><span>2026 Projects</span></div>
  </div>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-grid"></div>
    <div class="hero-glow"></div>
    <div class="hero-inner">
      <div class="hero-ministry reveal">LOVEWORLD TELEVISION MINISTRY</div>
      <div class="hero-year reveal d1">2026</div>
      <div class="hero-projects-label reveal d2">PROJECTS</div>
      <div class="hero-rule reveal d2"></div>
      <div class="hero-subtitle reveal d3"><span>The Year Of Manifestation</span></div>
      <div class="hero-counts reveal d3">
        <div class="hc">
          <div class="hc-n">5</div>
          <div class="hc-l">Active Projects</div>
        </div>
        <div class="hc">
          <div class="hc-n">5,000+</div>
          <div class="hc-l">Target Stations</div>
        </div>
        <div class="hc">
          <div class="hc-n">8,123</div>
          <div class="hc-l">Languages</div>
        </div>
        <div class="hc">
          <div class="hc-n">1B+</div>
          <div class="hc-l">Souls to Reach</div>
        </div>
      </div>
    </div>
  </section>

  <!-- EXCHANGE RATE TICKER -->
  <div class="ticker">
    <div class="ticker-in">
      <div class="ticker-label"><i class="fas fa-chart-line"></i> Espees Exchange Rate</div>
      <div class="ticker-rates">
        <div class="rate-pill"><span>1 Espees</span><i class="fas fa-equals"></i><span class="val">₦2,050</span><span
            style="font-size:.65rem;color:rgba(255,255,255,.4)">Naira</span></div>
        <div class="rate-pill"><span>1 Espees</span><i class="fas fa-equals"></i><span class="val">$1.60</span><span
            style="font-size:.65rem;color:rgba(255,255,255,.4)">USD</span></div>
        <div class="rate-pill"><span>1 Espees</span><i class="fas fa-equals"></i><span class="val">£1.30</span><span
            style="font-size:.65rem;color:rgba(255,255,255,.4)">GBP</span></div>
        <div class="rate-pill" style="background:rgba(232,184,64,.1);border-color:rgba(232,184,64,.3)"><i
            class="fas fa-info-circle" style="color:var(--gold)"></i><span
            style="color:rgba(255,255,255,.7);font-size:.7rem">Rates updated daily</span></div>
      </div>
    </div>
  </div>

  <!-- PROJECTS -->
  <div class="projects-wrap">

    <!-- ══ PROJECT 1: PASTOR CHRIS ON TV AT 30 ══ -->
    <div class="project-card reveal" id="proj1">
      <div class="pc-band band-1"></div>
      <div class="pc-main">
        <div class="pc-visual" style="background:linear-gradient(145deg,#0c0920,#2d1b7a,#4b2fbf)">
          <div class="pc-num-bg">01</div>
          <div class="pc-logo-area">
            <div class="pc-logo">
              <img src="proj1.png" width="100px">
            </div>
            <div class="pc-badge">🏆 Milestone Project</div>
            <div class="pc-proj-num">Project 01 of 05</div>
          </div>
        </div>
        <div class="pc-info">
          <div class="pc-label"><i class="fas fa-star"></i> Milestone · Anniversary</div>
          <div class="pc-title">PASTOR CHRIS ON TV AT 30</div>
          <div class="pc-rule" style="background:linear-gradient(90deg,var(--gold),var(--v2))"></div>
          <div class="pc-desc">
            <strong>Celebrating Pastor Chris on TV at 30</strong> — three decades of transformational television
            ministry that has taken God's Word into billions of homes across 180+ nations. This milestone project
            commemorates 30 years of unbroken broadcast excellence, documenting every healing, every salvation and every
            breakthrough that has been recorded through the television screen. From one station in the mid-nineties to
            465+ TV stations today — this is the greatest broadcast celebration in Christian television history.
          </div>
          <div class="pc-highlights">
            <div class="pc-hl"><i class="fas fa-calendar-check"></i> 30 Years of TV Ministry</div>
            <div class="pc-hl"><i class="fas fa-globe"></i> 180+ Nations Reached</div>
            <div class="pc-hl"><i class="fas fa-film"></i> Documentary Series</div>
            <div class="pc-hl"><i class="fas fa-award"></i> Global Celebration Events</div>
          </div>
          <div class="pc-progress-wrap">
            <div class="pc-progress-label"><span>Campaign Progress</span><span>72%</span></div>
            <div class="pc-progress-bar">
              <div class="pc-progress-fill" style="width:72%;background:linear-gradient(90deg,var(--gold),#f5a623)"
                data-w="72"></div>
            </div>
          </div>
          <!-- GIVE SECTION -->
          <div class="pc-give">
            <div class="pc-give-title"><i class="fas fa-heart"></i> Support This Project</div>
            <div class="payment-options">
              <div class="pay-option selected" onclick="selectPay(this,'espees','proj1')">
                <div class="pay-icon">⚡</div>
                <div class="pay-name">Espees</div>
                <div class="pay-detail">Merchant: CELTM</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'kingspay','proj1')">
                <div class="pay-icon">👑</div>
                <div class="pay-name">KingsPay</div>
                <div class="pay-detail">CELTM (₦) · CELTM2 (Intl)</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'parallex','proj1')">
                <div class="pay-icon">🏦</div>
                <div class="pay-name">Parallex Bank</div>
                <div class="pay-detail">1001324780</div>
              </div>
            </div>
            <div class="give-amount-row">
              <button class="amount-btn" onclick="setAmt(this,'proj1','50')">50 ESP</button>
              <button class="amount-btn sel" onclick="setAmt(this,'proj1','100')">100 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj1','500')">500 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj1','1000')">1000 ESP</button>
            </div>
            <div class="give-input-row">
              <select class="give-currency-sel" id="cur-proj1" onchange="updateConv('proj1')">
                <option value="esp">Espees</option>
                <option value="ngn">Naira (₦)</option>
                <option value="usd">USD ($)</option>
                <option value="gbp">GBP (£)</option>
              </select>
              <input class="give-amount-input" id="amt-proj1" type="number" placeholder="Enter amount" value="100"
                oninput="updateConv('proj1')">
              <button class="give-now-btn" onclick="openModal('proj1','Pastor Chris on TV at 30')"><i
                  class="fas fa-heart"></i> Give Now</button>
            </div>
            <div class="espees-rate" id="conv-proj1"><i class="fas fa-info-circle"></i> <strong>100 Espees = ₦205,000 ·
                $160 · £130</strong></div>
          </div>
        </div>
      </div>
    </div>

    <!-- ══ PROJECT 2: EVERY SCREEN A SANCTUARY ══ -->
    <div class="project-card reveal" id="proj2">
      <div class="pc-band band-2"></div>
      <div class="pc-main">
        <div class="pc-visual" style="background:linear-gradient(145deg,#1b1f4a,#4b2fbf,#8b6ff0)">
          <div class="pc-num-bg">02</div>
          <div class="pc-logo-area">
            <div class="pc-logo">
              <img src="proj2.png" width="100px">
            </div>
            <div class="pc-badge">🌍 Evangelism</div>
            <div class="pc-proj-num">Project 02 of 05</div>
          </div>
        </div>
        <div class="pc-info">
          <div class="pc-label"><i class="fas fa-tv"></i> Household Evangelism</div>
          <div class="pc-title">EVERY SCREEN A SANCTUARY<br><span style="font-size:.85em;color:var(--muted)">— THE RACE
              FOR THE LAST MAN</span></div>
          <div class="pc-rule" style="background:linear-gradient(90deg,var(--violet),var(--v3))"></div>
          <div class="pc-desc">
            Turn <strong>TV screens into salvation altars</strong> via daily broadcasts of Pastor Chris teachings and
            household-focused evangelism. This project is a bold race against time — reaching the last man, the last
            woman, the last child before the Lord's return. Through strategic daily broadcasts across every available
            platform, every household becomes an opportunity for divine encounter, transformation, and eternal
            salvation.
          </div>
          <div class="pc-highlights">
            <div class="pc-hl"><i class="fas fa-home"></i> Household Focused</div>
            <div class="pc-hl"><i class="fas fa-broadcast-tower"></i> Daily Broadcasts</div>
            <div class="pc-hl"><i class="fas fa-cross"></i> Salvation Altars</div>
            <div class="pc-hl"><i class="fas fa-running"></i> The Last Soul</div>
          </div>
          <div class="pc-progress-wrap">
            <div class="pc-progress-label"><span>Campaign Progress</span><span>58%</span></div>
            <div class="pc-progress-bar">
              <div class="pc-progress-fill" style="width:58%;background:linear-gradient(90deg,var(--violet),var(--v3))"
                data-w="58"></div>
            </div>
          </div>
          <div class="pc-give">
            <div class="pc-give-title"><i class="fas fa-heart"></i> Fund This Mission</div>
            <div class="payment-options">
              <div class="pay-option selected" onclick="selectPay(this,'espees','proj2')">
                <div class="pay-icon">⚡</div>
                <div class="pay-name">Espees</div>
                <div class="pay-detail">Merchant: CELTM</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'kingspay','proj2')">
                <div class="pay-icon">👑</div>
                <div class="pay-name">KingsPay</div>
                <div class="pay-detail">CELTM · CELTM2</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'parallex','proj2')">
                <div class="pay-icon">🏦</div>
                <div class="pay-name">Parallex Bank</div>
                <div class="pay-detail">1001324780</div>
              </div>
            </div>
            <div class="give-amount-row">
              <button class="amount-btn" onclick="setAmt(this,'proj2','50')">50 ESP</button>
              <button class="amount-btn sel" onclick="setAmt(this,'proj2','100')">100 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj2','500')">500 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj2','1000')">1,000 ESP</button>
            </div>
            <div class="give-input-row">
              <select class="give-currency-sel" id="cur-proj2" onchange="updateConv('proj2')">
                <option value="esp">Espees</option>
                <option value="ngn">Naira (₦)</option>
                <option value="usd">USD ($)</option>
                <option value="gbp">GBP (£)</option>
              </select>
              <input class="give-amount-input" id="amt-proj2" type="number" placeholder="Enter amount" value="100"
                oninput="updateConv('proj2')">
              <button class="give-now-btn" onclick="openModal('proj2','Every Screen a Sanctuary')"><i
                  class="fas fa-heart"></i> Give Now</button>
            </div>
            <div class="espees-rate" id="conv-proj2"><i class="fas fa-info-circle"></i> <strong>100 Espees = ₦205,000 ·
                $160 · £130</strong></div>
          </div>
        </div>
      </div>
    </div>

    <!-- ══ PROJECT 3: TRANSMISSION OF FLAGSHIP PROGRAMS ══ -->
    <div class="project-card reveal" id="proj3">
      <div class="pc-band band-3"></div>
      <div class="pc-main">
        <div class="pc-visual" style="background:linear-gradient(145deg,#1a0505,#6b1414,#c0392b)">
          <div class="pc-num-bg">03</div>
          <div class="pc-logo-area">
            <div class="pc-logo">
              <img src="proj5.png" width="100px">
            </div>
            <div class="pc-badge" style="background:rgba(192,57,43,.9);color:#fff">📡 Broadcasting</div>
            <div class="pc-proj-num">Project 03 of 05</div>
          </div>
        </div>
        <div class="pc-info">
          <div class="pc-label"><i class="fas fa-satellite-dish"></i> Global Broadcast</div>
          <div class="pc-title">TRANSMISSION OF MINISTRY FLAGSHIP PROGRAMS</div>
          <div class="pc-rule" style="background:linear-gradient(90deg,#c0392b,#e8b840)"></div>
          <div class="pc-desc">
            Broadcast ministry programs on <strong>5,000+ TV stations worldwide</strong>, across multiple languages and
            time zones. This project ensures the flagship programs — <em>Atmosphere for Miracles</em> and <em>Pastor
              Chris Teaching</em> — are transmitted simultaneously across every continent, reaching every time zone with
            God's Word without delay, without interruption, and without compromise.
          </div>
          <div class="pc-highlights">
            <div class="pc-hl"><i class="fas fa-broadcast-tower"></i> 5,000+ Stations</div>
            <div class="pc-hl"><i class="fas fa-globe"></i> All Time Zones</div>
            <div class="pc-hl"><i class="fas fa-language"></i> Multiple Languages</div>
            <div class="pc-hl"><i class="fas fa-signal"></i> Uninterrupted Signal</div>
          </div>
          <div class="pc-progress-wrap">
            <div class="pc-progress-label"><span>Campaign Progress</span><span>44%</span></div>
            <div class="pc-progress-bar">
              <div class="pc-progress-fill" style="width:44%;background:linear-gradient(90deg,#c0392b,#e8b840)"
                data-w="44"></div>
            </div>
          </div>
          <div class="pc-give">
            <div class="pc-give-title"><i class="fas fa-heart"></i> Sponsor a Station</div>
            <div class="payment-options">
              <div class="pay-option selected" onclick="selectPay(this,'espees','proj3')">
                <div class="pay-icon">⚡</div>
                <div class="pay-name">Espees</div>
                <div class="pay-detail">Merchant: CELTM</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'kingspay','proj3')">
                <div class="pay-icon">👑</div>
                <div class="pay-name">KingsPay</div>
                <div class="pay-detail">CELTM · CELTM2</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'parallex','proj3')">
                <div class="pay-icon">🏦</div>
                <div class="pay-name">Parallex Bank</div>
                <div class="pay-detail">1001324780</div>
              </div>
            </div>
            <div class="give-amount-row">
              <button class="amount-btn" onclick="setAmt(this,'proj3','100')">100 ESP</button>
              <button class="amount-btn sel" onclick="setAmt(this,'proj3','500')">500 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj3','1000')">1,000 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj3','5000')">5,000 ESP</button>
            </div>
            <div class="give-input-row">
              <select class="give-currency-sel" id="cur-proj3" onchange="updateConv('proj3')">
                <option value="esp">Espees</option>
                <option value="ngn">Naira (₦)</option>
                <option value="usd">USD ($)</option>
                <option value="gbp">GBP (£)</option>
              </select>
              <input class="give-amount-input" id="amt-proj3" type="number" placeholder="Enter amount" value="500"
                oninput="updateConv('proj3')">
              <button class="give-now-btn" onclick="openModal('proj3','Flagship Programs Transmission')"><i
                  class="fas fa-heart"></i> Give Now</button>
            </div>
            <div class="espees-rate" id="conv-proj3"><i class="fas fa-info-circle"></i> <strong>500 Espees = ₦1,025,000
                · $800 · £650</strong></div>
          </div>
        </div>
      </div>
    </div>

    <!-- ══ PROJECT 4: TV CRUSADES AND OUTREACHES ══ -->
    <div class="project-card reveal" id="proj4">
      <div class="pc-band band-4"></div>
      <div class="pc-main">
        <div class="pc-visual" style="background:linear-gradient(145deg,#0a1a0a,#1a5c20,#27ae60)">
          <div class="pc-num-bg">04</div>
          <div class="pc-logo-area">
            <div class="pc-logo">
              <img src="proj4.png" width="100px">
            </div>
            <div class="pc-badge" style="background:rgba(27,122,58,.9);color:#fff">✝️ Crusades</div>
            <div class="pc-proj-num">Project 04 of 05</div>
          </div>
        </div>
        <div class="pc-info">
          <div class="pc-label"><i class="fas fa-church"></i> Church Growth · Evangelism</div>
          <div class="pc-title">TV CRUSADES AND OUTREACHES</div>
          <div class="pc-rule" style="background:linear-gradient(90deg,#27ae60,#e8b840)"></div>
          <div class="pc-desc">
            Boost <strong>daily and weekly broadcast</strong> to drive church growth and nation penetration. TV Crusades
            take the power of Crusade meetings directly into homes — no ticket needed, no transport required. Through
            strategic airtime, viewers experience the atmosphere of a live crusade from their living rooms, altars of
            salvation are established in every city and a new wave of church growth is unleashed across every nation.
          </div>
          <div class="pc-highlights">
            <div class="pc-hl"><i class="fas fa-church"></i> Church Growth Drive</div>
            <div class="pc-hl"><i class="fas fa-map-marked-alt"></i> Nation Penetration</div>
            <div class="pc-hl"><i class="fas fa-calendar-week"></i> Weekly Broadcasts</div>
            <div class="pc-hl"><i class="fas fa-pray"></i> Crusade Atmosphere</div>
          </div>
          <div class="pc-progress-wrap">
            <div class="pc-progress-label"><span>Campaign Progress</span><span>61%</span></div>
            <div class="pc-progress-bar">
              <div class="pc-progress-fill" style="width:61%;background:linear-gradient(90deg,#27ae60,#e8b840)"
                data-w="61"></div>
            </div>
          </div>
          <div class="pc-give">
            <div class="pc-give-title"><i class="fas fa-heart"></i> Sponsor a TV Crusade</div>
            <div class="payment-options">
              <div class="pay-option selected" onclick="selectPay(this,'espees','proj4')">
                <div class="pay-icon">⚡</div>
                <div class="pay-name">Espees</div>
                <div class="pay-detail">Merchant: CELTM</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'kingspay','proj4')">
                <div class="pay-icon">👑</div>
                <div class="pay-name">KingsPay</div>
                <div class="pay-detail">CELTM · CELTM2</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'parallex','proj4')">
                <div class="pay-icon">🏦</div>
                <div class="pay-name">Parallex Bank</div>
                <div class="pay-detail">1001324780</div>
              </div>
            </div>
            <div class="give-amount-row">
              <button class="amount-btn" onclick="setAmt(this,'proj4','50')">50 ESP</button>
              <button class="amount-btn sel" onclick="setAmt(this,'proj4','100')">100 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj4','250')">250 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj4','1000')">1,000 ESP</button>
            </div>
            <div class="give-input-row">
              <select class="give-currency-sel" id="cur-proj4" onchange="updateConv('proj4')">
                <option value="esp">Espees</option>
                <option value="ngn">Naira (₦)</option>
                <option value="usd">USD ($)</option>
                <option value="gbp">GBP (£)</option>
              </select>
              <input class="give-amount-input" id="amt-proj4" type="number" placeholder="Enter amount" value="100"
                oninput="updateConv('proj4')">
              <button class="give-now-btn" onclick="openModal('proj4','TV Crusades and Outreaches')"><i
                  class="fas fa-heart"></i> Give Now</button>
            </div>
            <div class="espees-rate" id="conv-proj4"><i class="fas fa-info-circle"></i> <strong>100 Espees = ₦205,000 ·
                $160 · £130</strong></div>
          </div>
        </div>
      </div>
    </div>

    <!-- ══ PROJECT 5: LANGUAGE PENETRATION INITIATIVE ══ -->
    <div class="project-card reveal" id="proj5">
      <div class="pc-band band-5"></div>
      <div class="pc-main">
        <div class="pc-visual" style="background:linear-gradient(145deg,#080e28,#1a3a8a,#2980b9)">
          <div class="pc-num-bg">05</div>
          <div class="pc-logo-area">
            <div class="pc-logo">
              <img src="proj3.png" width="100px">
            </div>
            <div class="pc-badge" style="background:rgba(41,128,185,.9);color:#fff">🌐 Languages</div>
            <div class="pc-proj-num">Project 05 of 05</div>
          </div>
        </div>
        <div class="pc-info">
          <div class="pc-label"><i class="fas fa-language"></i> Language · Penetration</div>
          <div class="pc-title">LANGUAGE PENETRATION INITIATIVE</div>
          <div class="pc-rule" style="background:linear-gradient(90deg,#2980b9,var(--gold))"></div>
          <div class="pc-desc">
            Broadcast Pastor Chris Teachings in <strong>8,123 languages</strong>, reaching <strong>every
              nation</strong>. No soul left behind because of language. This unprecedented linguistic missionary project
            translates and broadcasts the life-transforming message of Pastor Chris into every identifiable language on
            earth — from major world languages to remote tribal dialects — ensuring that every person hears the Word of
            God in their mother tongue, the language of their hearts.
          </div>
          <div class="pc-highlights">
            <div class="pc-hl"><i class="fas fa-language"></i> 8,123 Languages</div>
            <div class="pc-hl"><i class="fas fa-globe-africa"></i> Every Nation</div>
            <div class="pc-hl"><i class="fas fa-headphones"></i> Native Audio</div>
            <div class="pc-hl"><i class="fas fa-closed-captioning"></i> Subtitles & Dubbing</div>
          </div>
          <div class="pc-progress-wrap">
            <div class="pc-progress-label"><span>Campaign Progress</span><span>38%</span></div>
            <div class="pc-progress-bar">
              <div class="pc-progress-fill" style="width:38%;background:linear-gradient(90deg,#2980b9,var(--gold))"
                data-w="38"></div>
            </div>
          </div>
          <div class="pc-give">
            <div class="pc-give-title"><i class="fas fa-heart"></i> Sponsor a Language</div>
            <div class="payment-options">
              <div class="pay-option selected" onclick="selectPay(this,'espees','proj5')">
                <div class="pay-icon">⚡</div>
                <div class="pay-name">Espees</div>
                <div class="pay-detail">Merchant: CELTM</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'kingspay','proj5')">
                <div class="pay-icon">👑</div>
                <div class="pay-name">KingsPay</div>
                <div class="pay-detail">CELTM · CELTM2</div>
              </div>
              <div class="pay-option" onclick="selectPay(this,'parallex','proj5')">
                <div class="pay-icon">🏦</div>
                <div class="pay-name">Parallex Bank</div>
                <div class="pay-detail">1001324780</div>
              </div>
            </div>
            <div class="give-amount-row">
              <button class="amount-btn" onclick="setAmt(this,'proj5','50')">50 ESP</button>
              <button class="amount-btn sel" onclick="setAmt(this,'proj5','100')">100 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj5','500')">500 ESP</button>
              <button class="amount-btn" onclick="setAmt(this,'proj5','2000')">2,000 ESP</button>
            </div>
            <div class="give-input-row">
              <select class="give-currency-sel" id="cur-proj5" onchange="updateConv('proj5')">
                <option value="esp">Espees</option>
                <option value="ngn">Naira (₦)</option>
                <option value="usd">USD ($)</option>
                <option value="gbp">GBP (£)</option>
              </select>
              <input class="give-amount-input" id="amt-proj5" type="number" placeholder="Enter amount" value="100"
                oninput="updateConv('proj5')">
              <button class="give-now-btn" onclick="openModal('proj5','Language Penetration Initiative')"><i
                  class="fas fa-heart"></i> Give Now</button>
            </div>
            <div class="espees-rate" id="conv-proj5"><i class="fas fa-info-circle"></i> <strong>100 Espees = ₦205,000 ·
                $160 · £130</strong></div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- /projects-wrap -->

  <!-- ══════════════════════════════
     PAYMENT MODAL
══════════════════════════════ -->
  <div class="modal-overlay" id="payModal" onclick="handleOverlayClick(event)">
    <div class="modal">
      <div class="modal-header">
        <div class="modal-title" id="modalProjectName">Support This Project</div>
        <button class="modal-close" onclick="closeModal()"><i class="fas fa-times"></i></button>
      </div>
      <div class="modal-body">

        <!-- ESPEES METHOD -->
        <div class="modal-pay-method" id="method-espees">
          <div class="mph-row">
            <div class="mph-icon"><i class="fas fa-bolt"></i></div>
            <div>
              <div class="mph-name">Pay via Espees</div>
              <div class="mph-desc">Fast, secure digital giving platform</div>
            </div>
          </div>
          <div class="mph-detail">
            <div class="mph-code-row"><span class="mph-code-label">Merchant Code</span><span class="mph-code-val">CELTM
                <button class="copy-btn" onclick="copyText('CELTM')"><i class="fas fa-copy"></i></button></span></div>
            <div class="mph-code-row" style="margin-top:6px"><span class="mph-code-label">App</span><span
                class="mph-code-val" style="font-size:.8rem;color:var(--muted)">Download the Espees app → Enter code
                CELTM → Input amount</span></div>
          </div>
        </div>

        <!-- KINGSPAY METHOD -->
        <div class="modal-pay-method" id="method-kingspay">
          <div class="mph-row">
            <div class="mph-icon"><i class="fas fa-crown"></i></div>
            <div>
              <div class="mph-name">Pay via KingsPay</div>
              <div class="mph-desc">Naira & International currencies accepted</div>
            </div>
          </div>
          <div class="mph-detail">
            <div class="mph-code-row"><span class="mph-code-label">Naira (₦)</span><span class="mph-code-val">CELTM
                <button class="copy-btn" onclick="copyText('CELTM')"><i class="fas fa-copy"></i></button></span></div>
            <div class="mph-code-row"><span class="mph-code-label">Other Currencies</span><span
                class="mph-code-val">CELTM2 <button class="copy-btn" onclick="copyText('CELTM2')"><i
                    class="fas fa-copy"></i></button></span></div>
          </div>
        </div>

        <!-- PARALLEX BANK -->
        <div class="modal-pay-method" id="method-parallex">
          <div class="mph-row">
            <div class="mph-icon"><i class="fas fa-university"></i></div>
            <div>
              <div class="mph-name">Parallex Bank Transfer</div>
              <div class="mph-desc">Direct bank transfer — Nigeria</div>
            </div>
          </div>
          <div class="mph-detail">
            <div class="mph-code-row"><span class="mph-code-label">Account Number</span><span
                class="mph-code-val">1001324780 <button class="copy-btn" onclick="copyText('1001324780')"><i
                    class="fas fa-copy"></i></button></span></div>
            <div class="mph-code-row"><span class="mph-code-label">Account Name</span><span class="mph-code-val"
                style="font-size:.82rem">Loveworld Television & Radio</span></div>
            <div class="mph-code-row"><span class="mph-code-label">Bank</span><span class="mph-code-val"
                style="font-size:.82rem">Parallex Bank</span></div>
          </div>
        </div>

        <!-- AMOUNT -->
        <div class="modal-amount-section">
          <div class="mal">Gift Amount</div>
          <div class="modal-amount-row">
            <select class="modal-cur-sel" id="modalCur" onchange="updateModalConv()">
              <option value="esp">Espees</option>
              <option value="ngn">Naira (₦)</option>
              <option value="usd">USD ($)</option>
              <option value="gbp">GBP (£)</option>
            </select>
            <input class="modal-amt-input" id="modalAmt" type="number" placeholder="Enter amount" value="100"
              oninput="updateModalConv()">
          </div>
          <div class="modal-conversion" id="modalConv"><i class="fas fa-info-circle"></i> 100 Espees = ₦205,000 ·
            $160.00 · £130.00</div>
        </div>

        <div
          style="background:var(--off);border-radius:10px;padding:12px 14px;font-size:.78rem;color:var(--muted);margin-bottom:14px;line-height:1.6">
          <strong style="color:var(--ink)">Note:</strong> After completing your transfer or payment, kindly send proof
          of payment to <strong style="color:var(--violet)">partners@loveworldtv.org</strong> or contact our 24-hour
          Call Center. Your gift is received with gratitude and every seed counts for eternity. 🙏
        </div>

        <button class="modal-submit" onclick="processPayment()">
          <i class="fas fa-lock"></i> Complete Secure Payment
        </button>
        <div class="modal-disclaimer">🔒 All transactions are encrypted and secure. Your gift directly funds the 2026
          LTM Projects.</div>
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  <script src="js/script.js"></script>
  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>

  <script>
    // Progress bar
    window.addEventListener('scroll', () => {
      const p = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
      document.getElementById('pgbar').style.width = (p * 100) + '%';
    });
    // Reveal
    const io = new IntersectionObserver(e => e.forEach(x => {
      if (x.isIntersecting) x.target.classList.add('vis')
    }), {
      threshold: .08
    });
    document.querySelectorAll('.reveal,.reveal-l,.reveal-r').forEach(el => io.observe(el));
    // Animate progress bars
    const pIO = new IntersectionObserver(e => e.forEach(x => {
      if (x.isIntersecting) {
        const f = x.target.querySelector('.pc-progress-fill');
        if (f && !f.dataset.animated) {
          f.dataset.animated = '1';
          f.style.width = '0';
          setTimeout(() => f.style.width = f.dataset.w + '%', 200);
        }
      }
    }), {
      threshold: .3
    });
    document.querySelectorAll('.project-card').forEach(c => pIO.observe(c));

    // Pay option selection
    function selectPay(el, method, projId) {
      el.closest('.payment-options').querySelectorAll('.pay-option').forEach(o => o.classList.remove('selected'));
      el.classList.add('selected');
    }

    // Amount presets
    function setAmt(btn, projId, val) {
      btn.closest('.give-amount-row').querySelectorAll('.amount-btn').forEach(b => b.classList.remove('sel'));
      btn.classList.add('sel');
      document.getElementById('amt-' + projId).value = val;
      updateConv(projId);
    }

    // Conversion display
    const rates = {
      esp: {
        ngn: 2050,
        usd: 1.60,
        gbp: 1.30
      },
      ngn: {
        esp: 1 / 2050,
        usd: 1.60 / 2050,
        gbp: 1.30 / 2050
      },
      usd: {
        esp: 1 / 1.60,
        ngn: 2050 / 1.60,
        gbp: 1.30 / 1.60
      },
      gbp: {
        esp: 1 / 1.30,
        ngn: 2050 / 1.30,
        usd: 1.60 / 1.30
      }
    };

    function fmt(n) {
      return n >= 1000 ? n.toLocaleString('en', {
        maximumFractionDigits: 0
      }) : n.toFixed(2)
    }

    function updateConv(projId) {
      const cur = document.getElementById('cur-' + projId).value;
      const amt = parseFloat(document.getElementById('amt-' + projId).value) || 0;
      const el = document.getElementById('conv-' + projId);
      if (!amt) {
        el.innerHTML = '<i class="fas fa-info-circle"></i> Enter an amount to see conversion';
        return
      }
      let html = '<i class="fas fa-info-circle"></i> ';
      if (cur === 'esp' || cur === 'ngn') {
        const esp = cur === 'esp' ? amt : amt / 2050;
        html += `<strong>${fmt(esp)} ESP = ₦${fmt(esp*2050)} · $${fmt(esp*1.60)} · £${fmt(esp*1.30)}</strong>`;
      } else if (cur === 'usd') {
        const esp = amt / 1.60;
        html += `<strong>${fmt(amt)} USD = ${fmt(esp)} ESP = ₦${fmt(esp*2050)} · £${fmt(esp*1.30)}</strong>`;
      } else {
        const esp = amt / 1.30;
        html += `<strong>${fmt(amt)} GBP = ${fmt(esp)} ESP = ₦${fmt(esp*2050)} · $${fmt(esp*1.60)}</strong>`;
      }
      el.innerHTML = html;
    }

    // Modal
    let currentProject = '';

    function openModal(projId, projName) {
      currentProject = projId;
      document.getElementById('modalProjectName').textContent = 'Give Towards: ' + projName;
      const amt = document.getElementById('amt-' + projId).value;
      const cur = document.getElementById('cur-' + projId).value;
      document.getElementById('modalAmt').value = amt;
      document.getElementById('modalCur').value = cur;
      // detect selected method
      const selPay = document.querySelector(`#${projId} .pay-option.selected .pay-name`);
      const method = selPay ? selPay.textContent.toLowerCase().replace(/\s/g, '').replace('espees', 'espees').replace(
        'kingspay', 'kingspay').replace('parallexbank', 'parallex') : 'espees';
      showMethod(method.includes('espees') ? 'espees' : method.includes('king') ? 'kingspay' : 'parallex');
      updateModalConv();
      document.getElementById('payModal').classList.add('open');
      document.body.style.overflow = 'hidden';
    }

    function showMethod(m) {
      ['espees', 'kingspay', 'parallex'].forEach(id => {
        const el = document.getElementById('method-' + id);
        if (el) el.style.display = id === m ? 'block' : 'none';
      });
    }

    function closeModal() {
      document.getElementById('payModal').classList.remove('open');
      document.body.style.overflow = '';
    }

    function handleOverlayClick(e) {
      if (e.target === document.getElementById('payModal')) closeModal()
    }

    function updateModalConv() {
      const cur = document.getElementById('modalCur').value;
      const amt = parseFloat(document.getElementById('modalAmt').value) || 0;
      const el = document.getElementById('modalConv');
      if (!amt) {
        el.innerHTML = '<i class="fas fa-info-circle"></i> Enter an amount';
        return
      }
      if (cur === 'esp') {
        el.innerHTML =
          `<i class="fas fa-exchange-alt"></i> ${fmt(amt)} ESP = ₦${fmt(amt*2050)} · $${fmt(amt*1.60)} · £${fmt(amt*1.30)}`;
      } else if (cur === 'ngn') {
        const e2 = amt / 2050;
        el.innerHTML =
          `<i class="fas fa-exchange-alt"></i> ₦${fmt(amt)} = ${fmt(e2)} ESP = $${fmt(e2*1.60)} · £${fmt(e2*1.30)}`;
      } else if (cur === 'usd') {
        const e2 = amt / 1.60;
        el.innerHTML =
          `<i class="fas fa-exchange-alt"></i> $${fmt(amt)} = ${fmt(e2)} ESP = ₦${fmt(e2*2050)} · £${fmt(e2*1.30)}`;
      } else {
        const e2 = amt / 1.30;
        el.innerHTML =
          `<i class="fas fa-exchange-alt"></i> £${fmt(amt)} = ${fmt(e2)} ESP = ₦${fmt(e2*2050)} · $${fmt(e2*1.60)}`;
      }
    }

    function copyText(t) {
      navigator.clipboard.writeText(t).then(() => {
        const btn = event.target.closest('.copy-btn');
        btn.innerHTML = '<i class="fas fa-check"></i>';
        setTimeout(() => btn.innerHTML = '<i class="fas fa-copy"></i>', 2000);
      });
    }

    function processPayment() {
      const btn = document.querySelector('.modal-submit');
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing…';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-check-circle"></i> Payment Instructions Sent!';
        btn.style.background = 'linear-gradient(135deg,#27ae60,#2ecc71)';
        setTimeout(() => {
          closeModal();
          btn.innerHTML = '<i class="fas fa-lock"></i> Complete Secure Payment';
          btn.style.background = '';
          btn.disabled = false;
        }, 2500);
      }, 2000);
    }
    // Init conversions
    ['proj1', 'proj2', 'proj3', 'proj4', 'proj5'].forEach(id => updateConv(id));
  </script>
</body>

</html>