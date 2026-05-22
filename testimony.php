<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Testimonies — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Nunito+Sans:wght@300;400;600;700;800&family=Cinzel:wght@400;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/testimony.css" rel="stylesheet">

</head>

<body>
  <div id="pgbar"></div>
  <div class="ambient">
    <div class="orb o1"></div>
    <div class="orb o2"></div>
  </div>

  <?php include('navbar.php'); ?>

  <div class="bc">
    <div class="bc-in"><a href="index.php"><i class="fas fa-home"></i> Home</a><i
        class="fas fa-chevron-right"></i><span>Testimonies</span></div>
  </div>

  <!-- HERO -->
  <div class="hero">
    <div class="hero-bg"></div>
    <div class="hero-grid"></div>
    <div class="hero-in">
      <div class="chip reveal"><i class="fas fa-star"></i> God Is Moving</div>
      <h1 class="hero-h1 reveal d1">Share Your <em>Testimony</em></h1>
      <div class="hero-rule reveal d1"></div>
      <p class="hero-sub reveal d2">If you have been impacted, blessed, received healing or salvation while watching
        Pastor Chris on TV, kindly fill the form to share your testimony with millions around the world.</p>
    </div>
  </div>

  <!-- SUBMIT TESTIMONY + GUIDELINES -->
  <div class="sec-divider">
    <div class="sd-line"></div>
    <div class="sd-chip"><i class="fas fa-pen-nib"></i> Submit Your Testimony</div>
    <div class="sd-line"></div>
  </div>

  <div class="sec-wrap">
    <div class="testi-submit-wrap">

      <!-- GUIDELINES -->
      <div class="guidelines-block reveal-l">
        <div class="gl-header">
          <div class="gl-icon"><i class="fas fa-video"></i></div>
          <div>
            <div class="gl-title">GUIDELINES ON HOW TO RECORD A BEAUTIFUL TESTIMONY</div>
            <div class="gl-sub">Follow these steps for a compelling, high-quality video</div>
          </div>
        </div>
        <div class="gl-intro">Make your story <strong>clear, interesting and life-changing</strong> using the following
          guidelines:</div>
        <div class="gl-list">
          <div class="gl-item">
            <div class="gl-num">1</div>
            <div class="gl-text">Locate a <strong>SERENE, LIGHT-REFLECTING AND CAPTIVATING ENVIRONMENT</strong> — good
              lighting makes all the difference.</div>
          </div>
          <div class="gl-item">
            <div class="gl-num">2</div>
            <div class="gl-text">To get the best portrayal, ensure your device is on <strong>LANDSCAPE</strong>, use a
              tripod, or place your gadget on a flat and stable surface.</div>
          </div>
          <div class="gl-item">
            <div class="gl-num">3</div>
            <div class="gl-text">Ensure you are <strong>POSITIONED at the center</strong> of the landscape view. Also,
              avoid <strong>PACING AROUND</strong> to eliminate a blurry or shaky outcome.</div>
          </div>
          <div class="gl-item">
            <div class="gl-num">4</div>
            <div class="gl-text">Speak <strong>AUDIBLY</strong> and avoid <strong>EXTERNAL NOISE</strong> while
              recording — find a quiet space before you begin.</div>
          </div>
          <div class="gl-item">
            <div class="gl-num">5</div>
            <div class="gl-text">Maintain a calm disposition all through the recording but feel free to <strong>express
                emotions</strong> where necessary.</div>
          </div>
          <div class="gl-item">
            <div class="gl-num">6</div>
            <div class="gl-text">Begin with your <strong>name and country</strong>, then describe what happened before,
              during, and after your miracle or encounter with God.</div>
          </div>
        </div>
        <div class="gl-final">
          <i class="fas fa-star"></i>
          <span>GIVE IT YOUR BEST — YOUR TESTIMONY WILL IMPACT MILLIONS!</span>
        </div>
      </div>

      <!-- TESTIMONY FORM -->
      <div class="testi-form-card reveal-r d1">
        <div
          style="font-family:'Cinzel',serif;font-size:.95rem;font-weight:700;color:var(--ink);margin-bottom:6px;display:flex;align-items:center;gap:9px">
          <i class="fas fa-heart" style="color:var(--violet)"></i> Your Testimony
        </div>
        <p style="font-size:.78rem;color:var(--muted);margin-bottom:22px;line-height:1.6">Every field marked * is
          required. Your testimony will be reviewed and may be published to inspire millions.</p>

        <div class="form-row">
          <div class="form-group"><label class="form-label">Full Name *</label><input class="form-input" type="text"
              placeholder="Your full name"></div>
          <div class="form-group"><label class="form-label">Email Address *</label><input class="form-input"
              type="email" placeholder="your@email.com"></div>
        </div>
        <div class="form-row">
          <div class="form-group"><label class="form-label">Phone Number</label><input class="form-input" type="tel"
              placeholder="+1 234 567 8900"></div>
          <div class="form-group"><label class="form-label">Country *</label>
            <select class="form-input">
              <option value="">Select country</option>
              <option>Nigeria</option>
              <option>Ghana</option>
              <option>Kenya</option>
              <option>South Africa</option>
              <option>United States</option>
              <option>United Kingdom</option>
              <option>Canada</option>
              <option>Brazil</option>
              <option>Other</option>
            </select>
          </div>
        </div>
        <div class="form-group"><label class="form-label">Type of Testimony *</label>
          <select class="form-input" id="testiType">
            <option value="">Select testimony type</option>
            <option value="salvation">Salvation</option>
            <option value="healing">Healing</option>
            <option value="finance">Financial Miracle</option>
            <option value="deliverance">Deliverance</option>
            <option value="others">Others</option>
          </select>
        </div>

        <!-- VIDEO UPLOAD TOGGLE -->
        <div class="video-toggle-wrap">
          <span class="vtw-label">Do you have a video testimony to upload?</span>
          <div class="vtw-options">
            <button class="vtw-btn" id="vidYes" onclick="toggleVideo('yes')"><i class="fas fa-video"></i> Yes, I have a
              video</button>
            <button class="vtw-btn sel" id="vidNo" onclick="toggleVideo('no')"><i class="fas fa-pen"></i> No, text
              only</button>
          </div>
          <div class="video-upload-area" id="videoUploadArea" onclick="document.getElementById('videoFile').click()">
            <input type="file" id="videoFile" accept="video/*" onchange="handleFile(this)">
            <i class="fas fa-cloud-upload-alt"></i>
            <p><strong>Click to upload</strong> or drag and drop your video here</p>
            <p style="margin-top:6px;font-size:.72rem">Supported: MP4, MOV, AVI · Max 500MB</p>
          </div>
        </div>

        <div class="form-group"><label class="form-label">Write Your Testimony *</label>
          <textarea class="form-input" id="testiText"
            placeholder="Tell us your story — what happened, when it happened, and how it changed your life. Be specific, be detailed, and let God's goodness shine through every word…"
            style="min-height:140px"></textarea>
        </div>
        <div class="form-group" style="display:flex;align-items:center;gap:10px">
          <input type="checkbox" id="consentCheck"
            style="width:16px;height:16px;accent-color:var(--violet);cursor:pointer">
          <label for="consentCheck" style="font-size:.78rem;color:var(--muted);cursor:pointer;line-height:1.5">I consent
            to my testimony being shared publicly on LTM platforms to inspire others</label>
        </div>
        <button class="submit-btn" onclick="handleTestiSubmit(this)"><i class="fas fa-paper-plane"></i> Submit My
          Testimony</button>
      </div>
    </div>
  </div>

  <!-- TESTIMONIALS CAROUSEL -->
  <section class="testi-sec">
    <div class="sec-wrap" style="padding-bottom:40px">
      <div style="margin-bottom:36px;text-align:center" class="reveal">
        <div
          style="font-size:.68rem;font-weight:800;letter-spacing:.16em;text-transform:uppercase;color:var(--violet);margin-bottom:10px">
          💬 Community Testimonies</div>
        <h2
          style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.7rem,3.5vw,2.4rem);font-weight:700;color:var(--ink);line-height:1.2">
          Lives <em style="color:var(--violet);font-style:italic">Transformed</em> by LTV</h2>
        <div
          style="width:44px;height:3px;background:linear-gradient(90deg,var(--violet),var(--gold));border-radius:2px;margin:14px auto 0">
        </div>
      </div>
      <div class="testi-carousel reveal d1">
        <div class="testi-track" id="testiTrack">
          <div class="testi-slide">
            <div class="testi-card">
              <div class="testi-qi"><i class="fas fa-quote-left"></i></div>
              <div class="testi-txt">"I was diagnosed with stage 3 cancer. After watching the Healing Streams broadcast
                and receiving prayer through LTV, I went for my follow-up scan — the doctors found nothing. Total
                healing! Praise God for Loveworld TV reaching my home."</div>
              <div class="testi-author">
                <div class="testi-av">AM</div>
                <div class="testi-ai">
                  <div class="name">Adaeze Mbadinuju</div>
                  <div class="loc"><i class="fas fa-map-marker-alt"></i> Abuja, Nigeria</div>
                  <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
            </div>
            <div class="testi-card">
              <div class="testi-qi"><i class="fas fa-quote-left"></i></div>
              <div class="testi-txt">"Through the LTV Arabic channel, my entire family came to faith in Jesus Christ. My
                husband who had never prayed before got on his knees that night. We are forever changed by the power of
                the Gospel on television."</div>
              <div class="testi-author">
                <div class="testi-av">RA</div>
                <div class="testi-ai">
                  <div class="name">Rania Al-Hassan</div>
                  <div class="loc"><i class="fas fa-map-marker-alt"></i> Beirut, Lebanon</div>
                  <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
            </div>
            <div class="testi-card">
              <div class="testi-qi"><i class="fas fa-quote-left"></i></div>
              <div class="testi-txt">"My son had been paralyzed for 7 years. We watched Pastor Chris minister on
                Loveworld TV and I prayed with him. Three days later he stood up, walked and is now running! LTM is
                truly carrying God's presence into homes."</div>
              <div class="testi-author">
                <div class="testi-av">JO</div>
                <div class="testi-ai">
                  <div class="name">James Okonkwo</div>
                  <div class="loc"><i class="fas fa-map-marker-alt"></i> Lagos, Nigeria</div>
                  <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="testi-slide">
            <div class="testi-card">
              <div class="testi-qi"><i class="fas fa-quote-left"></i></div>
              <div class="testi-txt">"I was deep in addiction for over a decade. One night I couldn't sleep and switched
                on the TV — Loveworld was airing. The Word set me free that very night. I've been clean for 4 years now
                and serving God faithfully."</div>
              <div class="testi-author">
                <div class="testi-av">MC</div>
                <div class="testi-ai">
                  <div class="name">Miguel Carvalho</div>
                  <div class="loc"><i class="fas fa-map-marker-alt"></i> São Paulo, Brazil</div>
                  <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
            </div>
            <div class="testi-card">
              <div class="testi-qi"><i class="fas fa-quote-left"></i></div>
              <div class="testi-txt">"After 18 years of barrenness, my husband and I were introduced to Loveworld TV. We
                kept confessing the Word. Today we have twins — a boy and a girl. We are forever grateful for this
                ministry."</div>
              <div class="testi-author">
                <div class="testi-av">GB</div>
                <div class="testi-ai">
                  <div class="name">Grace Boateng</div>
                  <div class="loc"><i class="fas fa-map-marker-alt"></i> Accra, Ghana</div>
                  <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
            </div>
            <div class="testi-card">
              <div class="testi-qi"><i class="fas fa-quote-left"></i></div>
              <div class="testi-txt">"I started my business the same week I heard Pastor Chris teach about prosperity on
                LTV. Following those principles transformed everything — today I employ over 200 people. God used this
                ministry to change my destiny."</div>
              <div class="testi-author">
                <div class="testi-av">KT</div>
                <div class="testi-ai">
                  <div class="name">Kenji Tanaka</div>
                  <div class="loc"><i class="fas fa-map-marker-alt"></i> Tokyo, Japan</div>
                  <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                      class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="testi-ctrl">
          <button class="tc-arr" onclick="testiPrev()"><i class="fas fa-chevron-left"></i></button>
          <div class="tc-dots">
            <div class="tc-dot active" onclick="testiGo(0)"></div>
            <div class="tc-dot" onclick="testiGo(1)"></div>
          </div>
          <button class="tc-arr" onclick="testiNext()"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </section>

  <!-- VIDEO TESTIMONIES -->
  <section class="video-testi-sec">
    <div style="max-width:1280px;margin:0 auto;padding:0 32px">
      <div class="sec-divider on-dark" style="padding:0 0 32px;margin:0">
        <div class="sd-line" style="background:rgba(255,255,255,.08)"></div>
        <div class="sd-chip" style="background:rgba(255,255,255,.06);border-color:rgba(255,255,255,.12);color:#fff"><i
            class="fas fa-video" style="color:var(--gold)"></i> Video Testimonies</div>
        <div class="sd-line" style="background:rgba(255,255,255,.08)"></div>
      </div>
      <div style="position:relative;overflow:hidden">
        <div class="video-testi-track" id="vTrack">
          <div class="video-testi-slide">
            <div class="vt-card">
              <div class="vt-screen">
                <div class="vt-play"><i class="fas fa-play"></i></div><span class="vt-duration">3:42</span>
              </div>
              <div class="vt-body">
                <div class="vt-name">Blessing Okoro</div>
                <div class="vt-type">✨ Healing</div>
                <div class="vt-loc"><i class="fas fa-map-marker-alt"></i> Port Harcourt, Nigeria</div>
              </div>
            </div>
          </div>
          <div class="video-testi-slide">
            <div class="vt-card" style="--vbg:rgba(39,174,96,.15)">
              <div class="vt-screen" style="background:linear-gradient(145deg,#0a2010,#1a5c20)">
                <div class="vt-play"><i class="fas fa-play"></i></div><span class="vt-duration">5:18</span>
              </div>
              <div class="vt-body">
                <div class="vt-name">Samuel Adeyemi</div>
                <div class="vt-type">💰 Financial Miracle</div>
                <div class="vt-loc"><i class="fas fa-map-marker-alt"></i> Accra, Ghana</div>
              </div>
            </div>
          </div>
          <div class="video-testi-slide">
            <div class="vt-card">
              <div class="vt-screen" style="background:linear-gradient(145deg,#1a0505,#5a1414)">
                <div class="vt-play"><i class="fas fa-play"></i></div><span class="vt-duration">4:05</span>
              </div>
              <div class="vt-body">
                <div class="vt-name">Maria Santos</div>
                <div class="vt-type">🙏 Salvation</div>
                <div class="vt-loc"><i class="fas fa-map-marker-alt"></i> São Paulo, Brazil</div>
              </div>
            </div>
          </div>
          <div class="video-testi-slide">
            <div class="vt-card">
              <div class="vt-screen" style="background:linear-gradient(145deg,#0d1a30,#1a3a6a)">
                <div class="vt-play"><i class="fas fa-play"></i></div><span class="vt-duration">6:22</span>
              </div>
              <div class="vt-body">
                <div class="vt-name">Emmanuel Chibuike</div>
                <div class="vt-type">⚡ Deliverance</div>
                <div class="vt-loc"><i class="fas fa-map-marker-alt"></i> Enugu, Nigeria</div>
              </div>
            </div>
          </div>
          <div class="video-testi-slide">
            <div class="vt-card">
              <div class="vt-screen" style="background:linear-gradient(145deg,#1a1558,#4b2fbf)">
                <div class="vt-play"><i class="fas fa-play"></i></div><span class="vt-duration">2:58</span>
              </div>
              <div class="vt-body">
                <div class="vt-name">Fatimah Al-Rashid</div>
                <div class="vt-type">🌟 Healing</div>
                <div class="vt-loc"><i class="fas fa-map-marker-alt"></i> Dubai, UAE</div>
              </div>
            </div>
          </div>
          <div class="video-testi-slide">
            <div class="vt-card">
              <div class="vt-screen" style="background:linear-gradient(145deg,#1a0a00,#5c2a00)">
                <div class="vt-play"><i class="fas fa-play"></i></div><span class="vt-duration">7:14</span>
              </div>
              <div class="vt-body">
                <div class="vt-name">David Nkemdirim</div>
                <div class="vt-type">💊 Medical Miracle</div>
                <div class="vt-loc"><i class="fas fa-map-marker-alt"></i> London, UK</div>
              </div>
            </div>
          </div>
        </div>
        <div style="display:flex;justify-content:center;gap:12px;margin-top:28px;align-items:center">
          <button onclick="vPrev()"
            style="width:40px;height:40px;border-radius:50%;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);color:#fff;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:.82rem;transition:all .2s"
            onmouseenter="this.style.background='rgba(75,47,191,.6)'"
            onmouseleave="this.style.background='rgba(255,255,255,.08)'"><i class="fas fa-chevron-left"></i></button>
          <div id="vDots" style="display:flex;gap:7px">
            <div class="tc-dot active" style="background:var(--gold);width:22px;border-radius:4px" onclick="vGo(0)">
            </div>
            <div class="tc-dot" onclick="vGo(1)"></div>
          </div>
          <button onclick="vNext()"
            style="width:40px;height:40px;border-radius:50%;background:rgba(255,255,255,.08);border:1px solid rgba(255,255,255,.15);color:#fff;cursor:pointer;display:flex;align-items:center;justify-content:center;font-size:.82rem;transition:all .2s"
            onmouseenter="this.style.background='rgba(75,47,191,.6)'"
            onmouseleave="this.style.background='rgba(255,255,255,.08)'"><i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

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

    // Video toggle
    function toggleVideo(v) {
      document.getElementById('vidYes').classList.toggle('sel', v === 'yes');
      document.getElementById('vidNo').classList.toggle('sel', v === 'no');
      document.getElementById('videoUploadArea').style.display = v === 'yes' ? 'block' : 'none';
    }

    function handleFile(input) {
      if (input.files[0]) {
        const area = document.getElementById('videoUploadArea');
        area.innerHTML =
          `<i class="fas fa-check-circle" style="color:var(--violet)"></i><p><strong>${input.files[0].name}</strong></p><p style="font-size:.72rem;margin-top:4px">Ready to upload · ${(input.files[0].size/1024/1024).toFixed(1)}MB</p>`;
        area.style.borderColor = 'var(--violet)';
        area.style.background = 'rgba(75,47,191,.04)';
      }
    }

    // Testimony submit
    function handleTestiSubmit(btn) {
      const orig = btn.innerHTML;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting…';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-check-circle"></i> Testimony Submitted — Thank You! 🙌';
        btn.style.background = 'linear-gradient(135deg,#27ae60,#2ecc71)';
        setTimeout(() => {
          btn.innerHTML = orig;
          btn.style.background = '';
          btn.disabled = false
        }, 5000);
      }, 2200);
    }

    // Testimonial carousel
    let tIdx = 0;
    const tSlides = document.querySelectorAll('.testi-slide');
    const tDots = document.querySelectorAll('.tc-dot');

    function updateTesti() {
      document.getElementById('testiTrack').style.transform = `translateX(-${tIdx*100}%)`;
      tDots.forEach((d, i) => d.classList.toggle('active', i === tIdx))
    }

    function testiNext() {
      tIdx = (tIdx + 1) % tSlides.length;
      updateTesti()
    }

    function testiPrev() {
      tIdx = (tIdx - 1 + tSlides.length) % tSlides.length;
      updateTesti()
    }

    function testiGo(i) {
      tIdx = i;
      updateTesti()
    }
    setInterval(testiNext, 8000);

    // Video carousel
    let vIdx = 0;
    const perView = 3;
    const vCards = document.querySelectorAll('.video-testi-slide');
    const totalV = Math.ceil(vCards.length / perView);

    function updateV() {
      document.getElementById('vTrack').style.transform = `translateX(-${vIdx*(100/perView*perView)}%)`
    }

    function vNext() {
      vIdx = (vIdx + perView) >= vCards.length ? 0 : vIdx + perView;
      document.getElementById('vTrack').style.transform = `translateX(-${vIdx*(100/3)}%)`;
      updateVDots()
    }

    function vPrev() {
      vIdx = Math.max(0, vIdx - perView);
      document.getElementById('vTrack').style.transform = `translateX(-${vIdx*(100/3)}%)`;
      updateVDots()
    }

    function vGo(i) {
      vIdx = i * perView;
      document.getElementById('vTrack').style.transform = `translateX(-${vIdx*(100/3)}%)`;
      updateVDots()
    }

    function updateVDots() {
      document.querySelectorAll('#vDots .tc-dot').forEach((d, i) => {
        const a = Math.floor(vIdx / perView) === i;
        d.classList.toggle('active', a);
        if (a) {
          d.style.background = 'var(--gold)';
          d.style.width = '22px';
          d.style.borderRadius = '4px'
        } else {
          d.style.background = 'rgba(255,255,255,.25)';
          d.style.width = '8px';
          d.style.borderRadius = '50%'
        }
      })
    }
  </script>

  <script src="js/script.js"></script>
  <!-- Google Translate Script -->
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" async defer></script>

</body>

</html>