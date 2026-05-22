<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Give — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>

  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,700&family=Nunito+Sans:wght@300;400;600;700;800;900&family=Cinzel:wght@400;600;700;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/give.css" rel="stylesheet">
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
        class="fas fa-chevron-right"></i><span>Give</span></div>
  </div>

  <!-- HERO -->
  <div class="hero">
    <div class="hero-glow"></div>
    <div class="hero-grid"></div>
    <div class="hero-in">
      <div class="chip reveal"><i class="fas fa-heart"></i> Partner With LTM</div>
      <div class="hero-h1 reveal d1">GIVE</div>
      <div class="hero-rule reveal d1"></div>
      <p class="hero-sub reveal d2">Your gift directly funds the broadcast of Pastor Chris's teachings to
        <strong>billions of souls</strong> across 180+ nations. Every seed you sow carries <strong>eternal
          weight</strong> — lighting nations with the glorious Gospel.
      </p>
      <div class="hero-promise reveal d2">
        <div class="hp-item"><i class="fas fa-lock"></i> 100% Secure</div>
        <div class="hp-item"><i class="fas fa-globe"></i> Multi-Currency</div>
        <div class="hp-item"><i class="fas fa-heart"></i> Eternal Impact</div>
        <div class="hp-item"><i class="fas fa-receipt"></i> Receipt Available</div>
      </div>
    </div>
  </div>

  <!-- TICKER -->
  <div class="ticker">
    <div class="ticker-in">
      <div class="ticker-label"><i class="fas fa-chart-line"></i> Espees Exchange Rate</div>
      <div class="ticker-rates">
        <div class="rate-pill"><span>1 Espees</span><i class="fas fa-equals"
            style="font-size:.6rem;color:rgba(255,255,255,.3)"></i><span class="val">₦2,050</span></div>
        <div class="rate-pill"><span>1 Espees</span><i class="fas fa-equals"
            style="font-size:.6rem;color:rgba(255,255,255,.3)"></i><span class="val">$1.60</span></div>
        <div class="rate-pill"><span>1 Espees</span><i class="fas fa-equals"
            style="font-size:.6rem;color:rgba(255,255,255,.3)"></i><span class="val">£1.30</span></div>
      </div>
    </div>
  </div>

  <!-- GIVE SECTION -->
  <div class="give-section">
    <div class="give-grid">

      <!-- LEFT: FORM -->
      <div class="give-form-card reveal-l">
        <div class="gfc-header">
          <h2><i class="fas fa-heart" style="color:var(--gold);margin-right:8px"></i>Make Your Partnership</h2>
          <p>Your partnership fuels LTM's 2026 mission to reach the world</p>
        </div>
        <div class="gfc-body">

          <!-- Project selector -->
          <div class="proj-select-wrap">
            <span class="ps-label">Give Towards</span>
            <div class="proj-pills">
              <button class="proj-pill sel" onclick="selProj(this)">General Fund</button>
              <button class="proj-pill" onclick="selProj(this)">Pastor Chris at 30</button>
              <button class="proj-pill" onclick="selProj(this)">Every Screen a Sanctuary</button>
              <button class="proj-pill" onclick="selProj(this)">Flagship Programs</button>
              <button class="proj-pill" onclick="selProj(this)">TV Crusades</button>
              <button class="proj-pill" onclick="selProj(this)">Language Initiative</button>
            </div>
          </div>

          <!-- Payment Method Tabs -->
          <div class="method-tabs">
            <button class="method-tab active" onclick="setMethod('espees',this)">
              <i class="fas fa-bolt"></i><span>Espees</span>
            </button>
            <button class="method-tab" onclick="setMethod('kingspay',this)">
              <i class="fas fa-crown"></i><span>KingsPay</span>
            </button>
            <button class="method-tab" onclick="setMethod('parallex',this)">
              <i class="fas fa-university"></i><span>Parallex</span>
            </button>
          </div>

          <!-- Espees Panel -->
          <div class="method-panel active" id="panel-espees">
            <div class="method-detail-box">
              <div class="mdb-row"><span class="mdb-label">Platform</span><span class="mdb-val">Espees App</span></div>
              <div class="mdb-row"><span class="mdb-label">Merchant Code</span><span class="mdb-val">CELTM <button
                    class="copy-btn" onclick="copyTxt('CELTM',this)"><i class="fas fa-copy"></i></button></span></div>
              <div class="mdb-row"
                style="font-size:.75rem;color:var(--muted);border-top:1px solid var(--border);padding-top:8px;margin-top:8px">
                Download the <strong>Espees app</strong> → Search merchant <strong>CELTM</strong> → Enter your amount →
                Complete payment</div>
            </div>
          </div>

          <!-- KingsPay Panel -->
          <div class="method-panel" id="panel-kingspay">
            <div class="method-detail-box">
              <div class="mdb-row"><span class="mdb-label">Platform</span><span class="mdb-val">KingsPay</span></div>
              <div class="mdb-row"><span class="mdb-label">Naira (₦)</span><span class="mdb-val">CELTM <button
                    class="copy-btn" onclick="copyTxt('CELTM',this)"><i class="fas fa-copy"></i></button></span></div>
              <div class="mdb-row"><span class="mdb-label">Other Currencies</span><span class="mdb-val">CELTM2 <button
                    class="copy-btn" onclick="copyTxt('CELTM2',this)"><i class="fas fa-copy"></i></button></span></div>
            </div>
          </div>

          <!-- Parallex Panel -->
          <div class="method-panel" id="panel-parallex">
            <div class="method-detail-box">
              <div class="mdb-row"><span class="mdb-label">Bank</span><span class="mdb-val">Parallex Bank</span></div>
              <div class="mdb-row"><span class="mdb-label">Account No.</span><span class="mdb-val">1001324780 <button
                    class="copy-btn" onclick="copyTxt('1001324780',this)"><i class="fas fa-copy"></i></button></span>
              </div>
              <div class="mdb-row"><span class="mdb-label">Account Name</span><span class="mdb-val"
                  style="font-size:.82rem">Loveworld Television & Radio</span></div>
            </div>
          </div>

          <!-- Amount -->
          <div class="amount-presets">
            <button class="amt-preset" onclick="setAmt(this,'50')">50 ESP</button>
            <button class="amt-preset sel" onclick="setAmt(this,'100')">100 ESP</button>
            <button class="amt-preset" onclick="setAmt(this,'500')">500 ESP</button>
            <button class="amt-preset" onclick="setAmt(this,'1000')">1,000 ESP</button>
            <button class="amt-preset" onclick="setAmt(this,'5000')">5,000 ESP</button>
            <button class="amt-preset" onclick="setAmt(this,'')">Custom</button>
          </div>
          <div class="amount-row">
            <select class="cur-sel" id="mainCur" onchange="updateConv()">
              <option value="esp">Espees</option>
              <option value="ngn">Naira (₦)</option>
              <option value="usd">USD ($)</option>
              <option value="gbp">GBP (£)</option>
            </select>
            <input class="amt-input" id="mainAmt" type="number" value="100" placeholder="Amount" oninput="updateConv()">
          </div>
          <div class="conv-display" id="convDisplay"><i class="fas fa-exchange-alt"></i> <span>100 Espees = ₦205,000 ·
              $160.00 · £130.00</span></div>

          <!-- Donor Info -->
          <input class="form-input" type="text" placeholder="Your Full Name *">
          <input class="form-input" type="email" placeholder="Email Address *">
          <input class="form-input" type="tel" placeholder="Phone Number">
          <select class="form-input" style="margin-bottom:12px;cursor:pointer">
            <option value="">Select Country *</option>
            <option>Nigeria</option>
            <option>Ghana</option>
            <option>Kenya</option>
            <option>United States</option>
            <option>United Kingdom</option>
            <option>Canada</option>
            <option>Australia</option>
            <option>Other</option>
          </select>

          <button class="give-submit" onclick="handleGive(this)">
            <i class="fas fa-heart"></i> Complete My Partnership
          </button>
          <div class="secure-note"><i class="fas fa-lock"></i> Secured · Encrypted · Your data is protected</div>

          <div
            style="margin-top:18px;padding:14px;background:var(--off);border-radius:10px;font-size:.76rem;color:var(--muted);line-height:1.6;border:1px solid var(--border)">
            <strong style="color:var(--ink)">💌 After payment:</strong> Send proof to <strong
              style="color:var(--violet)">partners@loveworldtv.org</strong> or call our 24-hour line. A receipt and
            thank you letter will be sent to your email within 24 hours.
          </div>
        </div>
      </div>

      <!-- RIGHT: INFO PANELS -->
      <div class="give-right">

        <!-- Impact card -->
        <div class="impact-card reveal-r">
          <div class="ic-title"><i class="fas fa-chart-bar"></i> Your Partnership's Impact in 2026</div>
          <div class="ic-stats">
            <div class="ic-stat">
              <div class="ic-stat-num">465+</div>
              <div class="ic-stat-label">TV Stations</div>
            </div>
            <div class="ic-stat">
              <div class="ic-stat-num">180+</div>
              <div class="ic-stat-label">Nations</div>
            </div>
            <div class="ic-stat">
              <div class="ic-stat-num">1B+</div>
              <div class="ic-stat-label">Viewers</div>
            </div>
            <div class="ic-stat">
              <div class="ic-stat-num">8,123</div>
              <div class="ic-stat-label">Languages</div>
            </div>
          </div>
          <div class="ic-bar-wrap">
            <div class="ic-bar-label"><span>2026 Goal Progress</span><span>54%</span></div>
            <div class="ic-bar">
              <div class="ic-bar-fill" style="width:54%"></div>
            </div>
          </div>
          <div class="ic-bar-wrap">
            <div class="ic-bar-label"><span>Stations Expansion</span><span>68%</span></div>
            <div class="ic-bar">
              <div class="ic-bar-fill" style="width:68%"></div>
            </div>
          </div>
          <div class="ic-quote">"Through their partnership, we are lighting up the nations with this glorious Gospel of
            our Lord Jesus Christ." — LTM</div>
        </div>

        <!-- Reasons -->
        <div class="reasons-grid reveal-r d1">
          <div class="reason-card">
            <div class="rc-icon" style="background:rgba(232,184,64,.1)">💡</div>
            <div class="rc-text">
              <div class="rc-title">Every Seed Has Eternal Value</div>
              <div class="rc-desc">Your gift reaches souls who will never set foot in a church — only the TV screen
                stands between them and God's Word.</div>
            </div>
          </div>
          <div class="reason-card">
            <div class="rc-icon" style="background:rgba(75,47,191,.1)">🌍</div>
            <div class="rc-text">
              <div class="rc-title">5,000 Stations Need Funding</div>
              <div class="rc-desc">LTM's 2026 target is 5,000+ TV stations. Every partnership directly funds a new
                station, a new city, a new nation.</div>
            </div>
          </div>
          <div class="reason-card">
            <div class="rc-icon" style="background:rgba(192,57,43,.1)">✝️</div>
            <div class="rc-text">
              <div class="rc-title">Souls Are Being Won Daily</div>
              <div class="rc-desc">Lives are being saved, healed and delivered every single day through LTV broadcasts —
                your gift keeps it happening.</div>
            </div>
          </div>
        </div>

        <!-- Recent givers -->
        <!-- <div class="givers-card reveal-r d2">
          <div class="gc-title"><i class="fas fa-users"></i> Recent Partners</div>
          <div class="givers-list" id="giversList">
            <div class="giver-item">
              <div class="giver-av">TO</div>
              <div class="giver-info">
                <div class="gn">Tunde Okonkwo</div>
                <div class="ga">500 Espees · Nigeria</div>
              </div>
              <div class="giver-time">2 min ago</div>
            </div>
            <div class="giver-item">
              <div class="giver-av">SM</div>
              <div class="giver-info">
                <div class="gn">Sarah Mitchell</div>
                <div class="ga">100 Espees · UK</div>
              </div>
              <div class="giver-time">8 min ago</div>
            </div>
            <div class="giver-item">
              <div class="giver-av">EA</div>
              <div class="giver-info">
                <div class="gn">Emmanuel Asante</div>
                <div class="ga">200 Espees · Ghana</div>
              </div>
              <div class="giver-time">15 min ago</div>
            </div>
            <div class="giver-item">
              <div class="giver-av">RL</div>
              <div class="giver-info">
                <div class="gn">Rosa Lima</div>
                <div class="ga">50 Espees · Brazil</div>
              </div>
              <div class="giver-time">22 min ago</div>
            </div>
            <div class="giver-item">
              <div class="giver-av">KA</div>
              <div class="giver-info">
                <div class="gn">Kwame Acheampong</div>
                <div class="ga">1,000 Espees · Ghana</div>
              </div>
              <div class="giver-time">31 min ago</div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>

  <?php include('footer.php'); ?>
  <script src="js/script.js"></script>
  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>

  <script>
    window.addEventListener('scroll', () => {
      document.getElementById('pgbar').style.width = (window.scrollY / (document.documentElement.scrollHeight - window
        .innerHeight) * 100) + '%';
    });
    const io = new IntersectionObserver(e => e.forEach(x => {
      if (x.isIntersecting) x.target.classList.add('vis')
    }), {
      threshold: .08
    });
    document.querySelectorAll('.reveal,.reveal-l,.reveal-r').forEach(el => io.observe(el));

    function selProj(btn) {
      document.querySelectorAll('.proj-pill').forEach(b => b.classList.remove('sel'));
      btn.classList.add('sel')
    }

    function setMethod(m, tab) {
      document.querySelectorAll('.method-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      document.querySelectorAll('.method-panel').forEach(p => p.classList.remove('active'));
      document.getElementById('panel-' + m).classList.add('active');
    }

    function setAmt(btn, val) {
      document.querySelectorAll('.amt-preset').forEach(b => b.classList.remove('sel'));
      btn.classList.add('sel');
      if (val) {
        document.getElementById('mainAmt').value = val;
        updateConv();
      } else {
        document.getElementById('mainAmt').value = '';
        document.getElementById('mainAmt').focus();
      }
    }

    function fmt(n) {
      return n >= 1000 ? n.toLocaleString('en', {
        maximumFractionDigits: 0
      }) : n.toFixed(2)
    }

    function updateConv() {
      const cur = document.getElementById('mainCur').value;
      const amt = parseFloat(document.getElementById('mainAmt').value) || 0;
      const el = document.getElementById('convDisplay').querySelector('span');
      if (!amt) {
        el.textContent = 'Enter an amount to see conversion';
        return
      }
      if (cur === 'esp') el.innerHTML =
        `${fmt(amt)} Espees = <strong>₦${fmt(amt*2050)}</strong> · <strong>$${fmt(amt*1.60)}</strong> · <strong>£${fmt(amt*1.30)}</strong>`;
      else if (cur === 'ngn') {
        const e = amt / 2050;
        el.innerHTML =
          `₦${fmt(amt)} = <strong>${fmt(e)} ESP</strong> · <strong>$${fmt(e*1.60)}</strong> · <strong>£${fmt(e*1.30)}</strong>`;
      } else if (cur === 'usd') {
        const e = amt / 1.60;
        el.innerHTML =
          `$${fmt(amt)} = <strong>${fmt(e)} ESP</strong> · <strong>₦${fmt(e*2050)}</strong> · <strong>£${fmt(e*1.30)}</strong>`;
      } else {
        const e = amt / 1.30;
        el.innerHTML =
          `£${fmt(amt)} = <strong>${fmt(e)} ESP</strong> · <strong>₦${fmt(e*2050)}</strong> · <strong>$${fmt(e*1.60)}</strong>`;
      }
    }

    function copyTxt(t, btn) {
      navigator.clipboard.writeText(t).then(() => {
        btn.innerHTML = '<i class="fas fa-check"></i>';
        btn.style.background = 'var(--violet)';
        btn.style.color = '#fff';
        setTimeout(() => {
          btn.innerHTML = '<i class="fas fa-copy"></i>';
          btn.style.background = '';
          btn.style.color = ''
        }, 2000);
      });
    }

    function handleGive(btn) {
      const orig = btn.innerHTML;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing…';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-check-circle"></i> Thank You! Your Gift Is Received! 🙏';
        btn.style.background = 'linear-gradient(135deg,#27ae60,#2ecc71)';
        btn.style.boxShadow = '0 6px 24px rgba(39,174,96,.4)';
        setTimeout(() => {
          btn.innerHTML = orig;
          btn.style.background = '';
          btn.style.boxShadow = '';
          btn.disabled = false
        }, 6000);
      }, 2200);
    }
    updateConv();
  </script>
</body>

</html>