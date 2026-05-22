<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connect With Us — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Nunito+Sans:wght@300;400;600;700;800&family=Cinzel:wght@400;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/connect.css" rel="stylesheet">
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
        class="fas fa-chevron-right"></i><span>Connect With Us</span></div>
  </div>

  <!-- PAGE HEADER -->
  <div class="page-header">
    <div class="ph-inner">
      <div class="chip reveal"><i class="fas fa-hands"></i> We're Here For You</div>
      <h1 class="ph-h1 reveal d1">Connect <em>With Us</em></h1>
      <div class="ph-rule reveal d1"></div>
      <p class="ph-sub reveal d2">Reach out, pray with us, receive salvation or share your heart. We are available 24/7
        for you.</p>
    </div>
  </div>

  <!-- ══════════════════════════════
     1. PRAYER REQUEST
══════════════════════════════ -->
  <div class="sec-divider">
    <div class="sd-line"></div>
    <div class="sd-chip"><i class="fas fa-pray"></i> Submit a Prayer Request</div>
    <div class="sd-line"></div>
  </div>

  <div class="sec-in">
    <!-- Banner -->
    <div class="banner-img reveal" style="margin-top:32px">
      <i class="fas fa-hands-praying"></i>
      <img src="request.jpeg" width="100%">
      <div class="banner-img-overlay">
        <div class="banner-text">
          <div class="banner-eyebrow">🙏 Prayer Department</div>
          <div class="banner-title">We Believe in the<br>Power of <em>Prayer</em></div>
        </div>
      </div>
      <!-- Decorative elements -->
      <div style="position:absolute;right:48px;top:50%;transform:translateY(-50%);text-align:right;z-index:2">
        <div
          style="font-family:'Cormorant Garamond',serif;font-size:clamp(.9rem,2vw,1.3rem);font-style:italic;color:rgba(255,255,255,.75);line-height:1.6;max-width:320px">
          "The effective, fervent prayer of a righteous man avails much." — James 5:16</div>
      </div>
    </div>

    <div class="split">
      <div class="reveal-l">
        <div class="prayer-block">
          <div class="prayer-block-header">
            <div class="prayer-block-icon"><i class="fas fa-pray"></i></div>
            <div>
              <div class="prayer-block-title">Your Prayer Request</div>
              <div class="prayer-block-sub">We pray for every request received</div>
            </div>
          </div>
          <p style="font-size:.92rem;color:#3a3d5c;line-height:1.78;margin-bottom:16px">Our dedicated team of prayer
            ministers intercedes for every prayer request received through this platform. Whether it's healing,
            provision, deliverance, direction or any other need — no request is too big or too small for God. Submit
            your request and expect a miraculous answer.</p>
          <div style="display:flex;flex-direction:column;gap:10px">
            <div style="display:flex;align-items:center;gap:10px;font-size:.83rem;color:#3a3d5c"><i
                class="fas fa-check-circle" style="color:var(--violet);font-size:.9rem;flex-shrink:0"></i><span>Every
                request is prayed over personally</span></div>
            <div style="display:flex;align-items:center;gap:10px;font-size:.83rem;color:#3a3d5c"><i
                class="fas fa-check-circle"
                style="color:var(--violet);font-size:.9rem;flex-shrink:0"></i><span>Available 24 hours, 7 days a
                week</span></div>
            <div style="display:flex;align-items:center;gap:10px;font-size:.83rem;color:#3a3d5c"><i
                class="fas fa-check-circle" style="color:var(--violet);font-size:.9rem;flex-shrink:0"></i><span>Your
                information is kept strictly confidential</span></div>
            <div style="display:flex;align-items:center;gap:10px;font-size:.83rem;color:#3a3d5c"><i
                class="fas fa-check-circle"
                style="color:var(--violet);font-size:.9rem;flex-shrink:0"></i><span>Follow-up ministry support
                available</span></div>
          </div>
        </div>
      </div>
      <div class="reveal-r d1">
        <div class="form-card">
          <div class="form-card-title"><i class="fas fa-envelope-open-text"></i> Submit Your Prayer Request</div>
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
                <option>Australia</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group"><label class="form-label">Prayer Request *</label><textarea class="form-input"
              placeholder="Share your prayer request here. Be as specific as you like — God hears every word."
              style="min-height:120px"></textarea></div>
          <button class="submit-btn" onclick="handleSubmit(this,'prayer-request')"><i class="fas fa-paper-plane"></i>
            Submit Prayer Request</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════
     2. PRAYER OF SALVATION
══════════════════════════════ -->
  <div style="background:linear-gradient(180deg,var(--cream),#e8e4ff 50%,var(--cream));padding:10px 0">
    <div class="sec-divider">
      <div class="sd-line"></div>
      <div class="sd-chip"><i class="fas fa-cross"></i> Prayer of Salvation</div>
      <div class="sd-line"></div>
    </div>

    <div class="sec-in">
      <div class="banner-img reveal" style="margin-top:32px;background:linear-gradient(145deg,#0c1a0c,#1a5c20,#27ae60)">
        <img src="sal.jpeg" width="100%">
        <i class="fas fa-cross"></i>
        <div class="banner-img-overlay"
          style="background:linear-gradient(135deg,rgba(0, 0, 0, 0.9),rgba(0, 0, 0, 0.8) 60%,transparent)">
          <div class="banner-text">
            <div class="banner-eyebrow">✝️ Eternal Life</div>
            <div class="banner-title">The Most Important<br>Decision of Your <em>Life</em></div>
          </div>
        </div>
        <div style="position:absolute;right:48px;top:50%;transform:translateY(-50%);z-index:2;text-align:right">
          <div
            style="font-family:'Cormorant Garamond',serif;font-size:clamp(.9rem,2vw,1.3rem);font-style:italic;color:rgba(255,255,255,.75);max-width:320px;line-height:1.6">
            "For God so loved the world that He gave His only begotten Son…" — John 3:16</div>
        </div>
      </div>

      <div class="split">
        <div class="reveal-l">
          <div class="prayer-block" style="background:linear-gradient(145deg,#f0fff4,var(--white))">
            <div class="prayer-block-header">
              <div class="prayer-block-icon" style="background:linear-gradient(135deg,#27ae60,#1a7a3a)"><i
                  class="fas fa-cross"></i></div>
              <div>
                <div class="prayer-block-title">Prayer of Salvation</div>
                <div class="prayer-block-sub">Say this prayer and receive eternal life</div>
              </div>
            </div>
            <div class="prayer-text">
              <p>Kindly say this prayer with all your heart and believe it:</p><br>
              <p>O Lord God, I believe with all my heart in Jesus Christ, Son of the living God. I believe He died for
                me and God raised Him from the dead. I believe He is alive today. I confess with my mouth that Jesus
                Christ is the Lord of my life from this day. Through Him and in His Name, I have eternal life. I am born
                again. Thank you Lord, for saving my soul! I am now a child of God. <strong>Hallelujah!</strong></p>
            </div>
            <div class="prayer-action-note">
              <i class="fas fa-heart" style="color:#27ae60;margin-right:6px"></i>
              <strong>Congratulations! You are now born again.</strong> Kindly fill the form to receive materials to
              help build your new relationship with God.
            </div>
          </div>
        </div>
        <div class="reveal-r d1">
          <div class="form-card">
            <div class="form-card-title"><i class="fas fa-bible"></i> Receive Discipleship Materials</div>
            <p style="font-size:.83rem;color:var(--muted);margin-bottom:20px;line-height:1.6">Fill the form below and we
              will send you free materials to help you grow in your new relationship with God — including the Rhapsody
              of Realities devotional and a new believer's guide.</p>
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
                  <option>Australia</option>
                  <option>Other</option>
                </select>
              </div>
            </div>
            <div class="form-group"><label class="form-label">How did you hear about LTM?</label>
              <select class="form-input">
                <option value="">Select option</option>
                <option>Television</option>
                <option>Web TV / Streaming</option>
                <option>Social Media</option>
                <option>Friend / Family</option>
                <option>Church</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group"><label class="form-label">Message (Optional)</label><textarea class="form-input"
                placeholder="Share anything else you'd like us to know…" style="min-height:90px"></textarea></div>
            <button class="submit-btn gold-btn" onclick="handleSubmit(this,'salvation')"><i class="fas fa-heart"></i>
              I'm Born Again — Send My Materials</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ══════════════════════════════
     3. CONTACT US
══════════════════════════════ -->
  <div class="sec-divider">
    <div class="sd-line"></div>
    <div class="sd-chip"><i class="fas fa-envelope"></i> Contact Us</div>
    <div class="sd-line"></div>
  </div>

  <div class="sec-in">
    <div class="split" style="padding-bottom:100px">
      <!-- Contact Details -->
      <div class="reveal-l">
        <div style="margin-bottom:10px">
          <div
            style="font-size:.68rem;font-weight:800;letter-spacing:.16em;text-transform:uppercase;color:var(--violet);margin-bottom:8px;display:flex;align-items:center;gap:8px">
            <span
              style="width:20px;height:2px;background:var(--violet);border-radius:1px;display:inline-block"></span>Get
            In Touch
          </div>
          <h2
            style="font-family:'Cormorant Garamond',serif;font-size:clamp(1.6rem,3vw,2.4rem);font-weight:700;color:var(--ink);line-height:1.2;margin-bottom:12px">
            We'd Love to <em style="color:var(--violet);font-style:italic">Hear From You</em></h2>
          <p style="font-size:.9rem;color:var(--muted);line-height:1.75;margin-bottom:28px">Whether you have a question,
            want to know more about LTM, need prayer or want to partner with us — our team is always ready to respond.
          </p>
        </div>
        <div class="contact-details">
          <div class="connect-item">
            <div class="ci-icon"><i class="fas fa-map-marker-alt"></i></div>
            <div class="ci-info">
              <div class="ci-label">Address</div>
              <div class="ci-value">LTM Headquarters, Oregun Road,<br>Ikeja, Lagos State, Nigeria</div>
            </div>
          </div>
          <div class="connect-item">
            <div class="ci-icon"><i class="fas fa-phone-alt"></i></div>
            <div class="ci-info">
              <div class="ci-label">Phone</div>
              <div class="ci-value"><a href="tel:+2348012345678">+234 (0) 801 234 5678</a><br><a
                  href="tel:+2348023456789">+234 (0) 802 345 6789</a></div>
            </div>
          </div>
          <div class="connect-item">
            <div class="ci-icon"><i class="fas fa-envelope"></i></div>
            <div class="ci-info">
              <div class="ci-label">Email</div>
              <div class="ci-value"><a
                  href="mailto:info@loveworldtelevisionministry.org">info@loveworldtelevisionministry.org</a></div>
            </div>
          </div>
          <div class="connect-item">
            <div class="ci-icon"><i class="fas fa-headset"></i></div>
            <div class="ci-info">
              <div class="ci-label">24-Hour Prayer & Support</div>
              <div class="ci-value"><a href="tel:+2347001000000">+(234) 802 332 4188 LTV LINE</a></div>
            </div>
          </div>
          <div class="connect-item">
            <div class="ci-icon"><i class="fas fa-clock"></i></div>
            <div class="ci-info">
              <div class="ci-label">Office Hours</div>
              <div class="ci-value">Monday – Friday: 8:00 AM – 6:00 PM<br>Broadcast: 24/7 Worldwide</div>
            </div>
          </div>
        </div>
        <div class="social-connect">
          <a href="#" class="sc-btn"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="sc-btn"><i class="fab fa-twitter"></i></a>
          <a href="#" class="sc-btn"><i class="fab fa-instagram"></i></a>
          <a href="#" class="sc-btn"><i class="fab fa-youtube"></i></a>
          <a href="#" class="sc-btn"><i class="fab fa-telegram-plane"></i></a>
          <a href="#" class="sc-btn"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <!-- Contact Form -->
      <div class="reveal-r d1">
        <div class="form-card">
          <div class="form-card-title"><i class="fas fa-paper-plane"></i> Send Us a Message</div>
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
                <option>United States</option>
                <option>United Kingdom</option>
                <option>Canada</option>
                <option>Other</option>
              </select>
            </div>
          </div>
          <div class="form-group"><label class="form-label">Subject *</label>
            <select class="form-input">
              <option value="">Select subject</option>
              <option>General Enquiry</option>
              <option>Partnership</option>
              <option>Media & Press</option>
              <option>Technical Support</option>
              <option>Broadcast Enquiry</option>
              <option>Prayer Request</option>
              <option>Other</option>
            </select>
          </div>
          <div class="form-group"><label class="form-label">Your Message *</label><textarea class="form-input"
              placeholder="Write your message here…" style="min-height:130px"></textarea></div>
          <button class="submit-btn" onclick="handleSubmit(this,'contact')"><i class="fas fa-paper-plane"></i> Send
            Message</button>
        </div>
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

    function handleSubmit(btn, type) {
      const orig = btn.innerHTML;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting…';
      btn.disabled = true;
      setTimeout(() => {
        const msgs = {
          'prayer-request': '<i class="fas fa-check-circle"></i> Prayer Request Received — We Are Praying!',
          'salvation': '<i class="fas fa-check-circle"></i> Welcome to God\'s Family! 🎉 Materials on their way!',
          'contact': '<i class="fas fa-check-circle"></i> Message Sent! We\'ll respond within 24 hours.'
        };
        btn.innerHTML = msgs[type] || '<i class="fas fa-check-circle"></i> Submitted Successfully!';
        btn.style.background = 'linear-gradient(135deg,#27ae60,#2ecc71)';
        btn.style.boxShadow = '0 6px 22px rgba(39,174,96,.4)';
        setTimeout(() => {
          btn.innerHTML = orig;
          btn.style.background = '';
          btn.style.boxShadow = '';
          btn.disabled = false
        }, 5000);
      }, 2000);
    }
  </script>
</body>

</html>