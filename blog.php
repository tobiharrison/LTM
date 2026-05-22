<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Nunito+Sans:wght@300;400;600;700;800&family=Cinzel:wght@400;600;700&family=Playfair+Display:ital,wght@0,700;1,500&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">

</head>

<body>
  <div id="pgbar"></div>
  <div class="ambient">
    <div class="orb orb1"></div>
    <div class="orb orb2"></div>
    <div class="orb orb3"></div>
  </div>

  <?php include('navbar.php'); ?>

  <div class="bc">
    <div class="bc-in"><a href="index.php"><i class="fas fa-home"></i> Home</a><i
        class="fas fa-chevron-right sep"></i><span>Blog</span></div>
  </div>

  <!-- HERO -->
  <div class="hero">
    <div class="hero-bg-text">BLOG</div>
    <div class="hero-inner">
      <div class="reveal">
        <div class="chip"><i class="fas fa-newspaper"></i> LTM Blog</div>
        <h1 class="hero-h1">News, <em>Insights</em><br>&amp; Inspiration</h1>
        <div class="hero-rule"></div>
        <p class="hero-sub">Stay informed with the latest updates, ministry news, testimonies, broadcast milestones and
          inspiring articles from the Loveworld Television Ministry team.</p>
        <div class="hero-cats">
          <div class="hero-cat active">All</div>
          <div class="hero-cat">Ministry</div>
          <div class="hero-cat">Broadcast</div>
          <div class="hero-cat">Technology</div>
          <div class="hero-cat">Testimonies</div>
          <div class="hero-cat">Partnership</div>
          <div class="hero-cat">Events</div>
        </div>
      </div>
      <!-- Featured Preview -->
      <div class="hero-featured reveal d2">
        <div class="hf-img grad-a" style="height:200px">
          <i class="fas fa-satellite-dish" style="font-size:5rem;opacity:.15;color:#fff"></i>
          <div class="hf-img-overlay"></div>
          <span class="hf-cat">Broadcast</span>
          <span class="hf-featured"><i class="fas fa-star"></i> Featured</span>
        </div>
        <div class="hf-body">
          <div class="hf-date"><i class="fas fa-calendar"></i> April 18, 2025 · 6 min read</div>
          <div class="hf-title">LTM Launches New Satellite Covering All 54 African Nations — A Historic Milestone</div>
          <div class="hf-excerpt">Pastor Chris commissions the most powerful free-to-air broadcast infrastructure Africa
            has ever seen, reaching every nation on the continent...</div>
          <a href="#" class="hf-read">Read Story <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- CONTROLS -->
  <div class="controls">
    <div class="ctrl-in">
      <div class="ctrl-cats">
        <button class="ctrl-cat-btn active" onclick="filterBlog('all',this)">All Posts</button>
        <button class="ctrl-cat-btn" onclick="filterBlog('ministry',this)">Ministry</button>
        <button class="ctrl-cat-btn" onclick="filterBlog('broadcast',this)">Broadcast</button>
        <button class="ctrl-cat-btn" onclick="filterBlog('technology',this)">Technology</button>
        <button class="ctrl-cat-btn" onclick="filterBlog('testimony',this)">Testimonies</button>
        <button class="ctrl-cat-btn" onclick="filterBlog('partnership',this)">Partnership</button>
        <button class="ctrl-cat-btn" onclick="filterBlog('events',this)">Events</button>
      </div>
      <div class="ctrl-search">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search articles…" oninput="searchBlog(this.value)">
      </div>
    </div>
  </div>

  <!-- MAIN -->
  <div class="main">
    <!-- POSTS COLUMN -->
    <div id="postsCol">

      <div class="section-divider">
        <div class="sd-line"></div>
        <div class="sd-text">📌 FEATURED ARTICLE</div>
        <div class="sd-line"></div>
      </div>

      <!-- BLOG POST 1 — FEATURED LARGE -->
      <div class="featured-post-row reveal" data-cat="broadcast ministry">
        <div class="fp-img grad-a">
          <i class="bg-icon fas fa-satellite-dish"></i>
          <div class="fp-img-overlay"></div>
          <div class="fp-img-overlay-2"></div>
          <span class="fp-cat-tag">Broadcast</span>
          <span class="fp-featured-tag"><i class="fas fa-star"></i> Featured</span>
          <div class="fp-img-hover">
            <div class="fp-hover-btn"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
        <div class="fp-info">
          <div>
            <div class="fp-meta">
              <div class="fp-date"><i class="fas fa-calendar"></i> April 18, 2025</div>
              <div class="fp-sep"></div>
              <div class="fp-author"><i class="fas fa-user"></i> LTM Editorial</div>
              <div class="fp-cat-pill">Broadcast</div>
            </div>
            <h2 class="fp-title">LTM Launches New Free-to-Air Satellite Covering All 54 African Nations — A Historic
              Milestone</h2>
            <div class="fp-rule"></div>
            <p class="fp-excerpt">Pastor Chris commissions the most powerful free-to-air broadcast infrastructure on the
              continent — a new satellite uplink that will bring Loveworld programming to every home in all 54 African
              nations without subscription, antenna or cable. Experts call it the most ambitious evangelical broadcast
              project in African television history.</p>
            <div class="fp-tags">
              <span class="fp-tag">Africa</span><span class="fp-tag">Satellite</span><span class="fp-tag">Pastor
                Chris</span><span class="fp-tag">Free-to-Air</span>
            </div>
          </div>
          <div class="fp-bottom">
            <a href="#" class="read-btn"><i class="fas fa-book-open"></i> Read Article</a>
            <div class="read-time"><i class="fas fa-clock"></i> 6 min read</div>
            <button class="like-btn"><i class="fas fa-heart"></i> 2.4K</button>
            <button class="share-btn"><i class="fas fa-share-alt"></i></button>
          </div>
        </div>
      </div>

      <div class="section-divider" style="margin-top:16px">
        <div class="sd-line"></div>
        <div class="sd-text">📰 LATEST ARTICLES</div>
        <div class="sd-line"></div>
      </div>

      <!-- BLOG POST 2 -->
      <div class="featured-post-row reveal d1" data-cat="ministry testimony">
        <div class="fp-img grad-b">
          <i class="bg-icon fas fa-globe"></i>
          <div class="fp-img-overlay"></div>
          <div class="fp-img-overlay-2"></div>
          <span class="fp-cat-tag">Ministry</span>
          <div class="fp-img-hover">
            <div class="fp-hover-btn"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
        <div class="fp-info">
          <div>
            <div class="fp-meta">
              <div class="fp-date"><i class="fas fa-calendar"></i> April 12, 2025</div>
              <div class="fp-sep"></div>
              <div class="fp-author"><i class="fas fa-user"></i> LTM Editorial</div>
              <div class="fp-cat-pill">Ministry</div>
            </div>
            <h2 class="fp-title">How Loveworld Arabic Network Is Transforming Lives Across the Arab World</h2>
            <div class="fp-rule"></div>
            <p class="fp-excerpt">From Morocco to the UAE, testimonies pour in as the Arabic-language Loveworld channel
              spreads the Gospel in the mother tongue of 400 million people — documenting healings, salvations and
              life-transforming encounters with God's Word on television screens in Muslim-majority nations.</p>
            <div class="fp-tags">
              <span class="fp-tag">Arabic</span><span class="fp-tag">Middle East</span><span
                class="fp-tag">Testimonies</span>
            </div>
          </div>
          <div class="fp-bottom">
            <a href="#" class="read-btn"><i class="fas fa-book-open"></i> Read Article</a>
            <div class="read-time"><i class="fas fa-clock"></i> 5 min read</div>
            <button class="like-btn"><i class="fas fa-heart"></i> 1.8K</button>
            <button class="share-btn"><i class="fas fa-share-alt"></i></button>
          </div>
        </div>
      </div>

      <!-- BLOG POST 3 -->
      <div class="featured-post-row reveal d2" data-cat="technology broadcast">
        <div class="fp-img grad-c">
          <i class="bg-icon fas fa-tv"></i>
          <div class="fp-img-overlay"></div>
          <div class="fp-img-overlay-2"></div>
          <span class="fp-cat-tag">Technology</span>
          <div class="fp-img-hover">
            <div class="fp-hover-btn"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
        <div class="fp-info">
          <div>
            <div class="fp-meta">
              <div class="fp-date"><i class="fas fa-calendar"></i> March 28, 2025</div>
              <div class="fp-sep"></div>
              <div class="fp-author"><i class="fas fa-user"></i> Tech Team</div>
              <div class="fp-cat-pill">Technology</div>
            </div>
            <h2 class="fp-title">Inside LTM's New 4K Production Studio — Africa's Most Advanced Christian Broadcast
              Facility</h2>
            <div class="fp-rule"></div>
            <p class="fp-excerpt">Take a behind-the-scenes tour of the most technologically advanced Christian
              television production facility in Africa — a state-of-the-art studio complex built to produce world-class
              programming for billions of viewers for decades to come.</p>
            <div class="fp-tags">
              <span class="fp-tag">4K Studio</span><span class="fp-tag">Technology</span><span
                class="fp-tag">Infrastructure</span>
            </div>
          </div>
          <div class="fp-bottom">
            <a href="#" class="read-btn"><i class="fas fa-book-open"></i> Read Article</a>
            <div class="read-time"><i class="fas fa-clock"></i> 7 min read</div>
            <button class="like-btn"><i class="fas fa-heart"></i> 956</button>
            <button class="share-btn"><i class="fas fa-share-alt"></i></button>
          </div>
        </div>
      </div>

      <!-- BLOG POST 4 -->
      <div class="featured-post-row reveal" data-cat="ministry events">
        <div class="fp-img grad-e">
          <i class="bg-icon fas fa-music"></i>
          <div class="fp-img-overlay"></div>
          <div class="fp-img-overlay-2"></div>
          <span class="fp-cat-tag">Events</span>
          <div class="fp-img-hover">
            <div class="fp-hover-btn"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
        <div class="fp-info">
          <div>
            <div class="fp-meta">
              <div class="fp-date"><i class="fas fa-calendar"></i> March 14, 2025</div>
              <div class="fp-sep"></div>
              <div class="fp-author"><i class="fas fa-user"></i> Events Team</div>
              <div class="fp-cat-pill">Events</div>
            </div>
            <h2 class="fp-title">Night of Bliss 2025 Simulcast Shatters Records with 2.3 Billion Viewers Globally</h2>
            <div class="fp-rule"></div>
            <p class="fp-excerpt">The annual Night of Bliss global praise night, carried live on all LTV channels and
              streaming platforms worldwide, set new records for Christian broadcast viewership — surpassing 2.3 billion
              live viewers and generating over 180 million testimonies from a single event.</p>
            <div class="fp-tags">
              <span class="fp-tag">Night of Bliss</span><span class="fp-tag">Simulcast</span><span
                class="fp-tag">Records</span>
            </div>
          </div>
          <div class="fp-bottom">
            <a href="#" class="read-btn"><i class="fas fa-book-open"></i> Read Article</a>
            <div class="read-time"><i class="fas fa-clock"></i> 4 min read</div>
            <button class="like-btn"><i class="fas fa-heart"></i> 3.1K</button>
            <button class="share-btn"><i class="fas fa-share-alt"></i></button>
          </div>
        </div>
      </div>

      <!-- BLOG POST 5 -->
      <div class="featured-post-row reveal d1" data-cat="partnership ministry">
        <div class="fp-img grad-d">
          <i class="bg-icon fas fa-hands-helping"></i>
          <div class="fp-img-overlay"></div>
          <div class="fp-img-overlay-2"></div>
          <span class="fp-cat-tag">Partnership</span>
          <div class="fp-img-hover">
            <div class="fp-hover-btn"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
        <div class="fp-info">
          <div>
            <div class="fp-meta">
              <div class="fp-date"><i class="fas fa-calendar"></i> February 20, 2025</div>
              <div class="fp-sep"></div>
              <div class="fp-author"><i class="fas fa-user"></i> Partnership Office</div>
              <div class="fp-cat-pill">Partnership</div>
            </div>
            <h2 class="fp-title">Why Partnering With LTM Is the Most Eternally Significant Investment You Will Ever Make
            </h2>
            <div class="fp-rule"></div>
            <p class="fp-excerpt">Every dollar seeded into the Loveworld Television Ministry's broadcast expansion goes
              directly into reaching unreached souls — financing satellite uplinks, airtime on 465+ stations, mobile
              platforms and the 24-hour Call Center. Discover the eternal mathematics of LTM partnership.</p>
            <div class="fp-tags">
              <span class="fp-tag">Give</span><span class="fp-tag">Partnership</span><span class="fp-tag">Impact</span>
            </div>
          </div>
          <div class="fp-bottom">
            <a href="#" class="read-btn"><i class="fas fa-book-open"></i> Read Article</a>
            <div class="read-time"><i class="fas fa-clock"></i> 5 min read</div>
            <button class="like-btn"><i class="fas fa-heart"></i> 2.2K</button>
            <button class="share-btn"><i class="fas fa-share-alt"></i></button>
          </div>
        </div>
      </div>

      <!-- BLOG POST 6 -->
      <div class="featured-post-row reveal d2" data-cat="testimony broadcast">
        <div class="fp-img grad-g">
          <i class="bg-icon fas fa-globe-americas"></i>
          <div class="fp-img-overlay"></div>
          <div class="fp-img-overlay-2"></div>
          <span class="fp-cat-tag">Testimonies</span>
          <div class="fp-img-hover">
            <div class="fp-hover-btn"><i class="fas fa-arrow-right"></i></div>
          </div>
        </div>
        <div class="fp-info">
          <div>
            <div class="fp-meta">
              <div class="fp-date"><i class="fas fa-calendar"></i> January 30, 2025</div>
              <div class="fp-sep"></div>
              <div class="fp-author"><i class="fas fa-user"></i> LTM Stories</div>
              <div class="fp-cat-pill">Testimony</div>
            </div>
            <h2 class="fp-title">1 Billion Souls Initiative: The Progress Report That Will Leave You in Awe</h2>
            <div class="fp-rule"></div>
            <p class="fp-excerpt">The LTM-powered 1 Billion Souls Initiative has crossed the 500 million landmark — with
              documented conversions, healed bodies and delivered minds spanning 180 nations. We break down the numbers,
              the stories and what is still to be done in this exclusive progress report.</p>
            <div class="fp-tags">
              <span class="fp-tag">Souls</span><span class="fp-tag">Milestones</span><span class="fp-tag">Report</span>
            </div>
          </div>
          <div class="fp-bottom">
            <a href="#" class="read-btn"><i class="fas fa-book-open"></i> Read Article</a>
            <div class="read-time"><i class="fas fa-clock"></i> 8 min read</div>
            <button class="like-btn"><i class="fas fa-heart"></i> 4.7K</button>
            <button class="share-btn"><i class="fas fa-share-alt"></i></button>
          </div>
        </div>
      </div>

      <!-- LOAD MORE -->
      <div style="text-align:center;padding:16px 0 0">
        <button
          onclick="this.innerHTML='<i class=\'fas fa-spinner fa-spin\'></i> Loading…';setTimeout(()=>this.innerHTML='<i class=\'fas fa-check\'></i> All Posts Loaded',2000)"
          style="display:inline-flex;align-items:center;gap:9px;background:var(--white);border:1.5px solid var(--border);color:var(--violet);font-family:'Nunito Sans',sans-serif;font-size:.85rem;font-weight:700;padding:14px 32px;border-radius:28px;cursor:pointer;transition:all .25s;box-shadow:0 4px 18px rgba(27,31,74,.06)">
          <i class="fas fa-plus"></i> Load More Articles
        </button>
      </div>
    </div>

    <!-- SIDEBAR -->
    <div class="sidebar reveal d2">
      <!-- Trending -->
      <div class="sidebar-widget">
        <div class="sw-header"><i class="fas fa-fire"></i> Trending Now</div>
        <div class="sw-body">
          <div class="trending-item">
            <div class="ti-num">01</div>
            <div class="ti-info">
              <div class="ti-title">LTM Reaches 1 Billion Viewers Milestone</div>
              <div class="ti-meta">14.2K reads · 3 days ago</div>
            </div>
          </div>
          <div class="trending-item">
            <div class="ti-num">02</div>
            <div class="ti-info">
              <div class="ti-title">Night of Bliss Simulcast Records Broken</div>
              <div class="ti-meta">8.9K reads · 1 week ago</div>
            </div>
          </div>
          <div class="trending-item">
            <div class="ti-num">03</div>
            <div class="ti-info">
              <div class="ti-title">Loveworld Arabic: 400M Souls Reached</div>
              <div class="ti-meta">6.4K reads · 2 weeks ago</div>
            </div>
          </div>
          <div class="trending-item">
            <div class="ti-num">04</div>
            <div class="ti-info">
              <div class="ti-title">Inside LTM's New 4K Studio Complex</div>
              <div class="ti-meta">5.1K reads · 3 weeks ago</div>
            </div>
          </div>
          <div class="trending-item">
            <div class="ti-num">05</div>
            <div class="ti-info">
              <div class="ti-title">Africa Satellite Expansion — Full Story</div>
              <div class="ti-meta">4.8K reads · 1 month ago</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Categories -->
      <div class="sidebar-widget">
        <div class="sw-header"><i class="fas fa-folder-open"></i> Categories</div>
        <div class="cat-list">
          <div class="cat-item" onclick="filterBlog('all',null)">
            <div class="cat-item-left"><i class="fas fa-th"></i> All Articles</div><span class="cat-count">24</span>
          </div>
          <div class="cat-item" onclick="filterBlog('broadcast',null)">
            <div class="cat-item-left"><i class="fas fa-broadcast-tower"></i> Broadcast</div><span
              class="cat-count">8</span>
          </div>
          <div class="cat-item" onclick="filterBlog('ministry',null)">
            <div class="cat-item-left"><i class="fas fa-church"></i> Ministry</div><span class="cat-count">6</span>
          </div>
          <div class="cat-item" onclick="filterBlog('technology',null)">
            <div class="cat-item-left"><i class="fas fa-microchip"></i> Technology</div><span class="cat-count">4</span>
          </div>
          <div class="cat-item" onclick="filterBlog('testimony',null)">
            <div class="cat-item-left"><i class="fas fa-heart"></i> Testimonies</div><span class="cat-count">5</span>
          </div>
          <div class="cat-item" onclick="filterBlog('partnership',null)">
            <div class="cat-item-left"><i class="fas fa-handshake"></i> Partnership</div><span
              class="cat-count">4</span>
          </div>
          <div class="cat-item" onclick="filterBlog('events',null)">
            <div class="cat-item-left"><i class="fas fa-calendar-alt"></i> Events</div><span class="cat-count">5</span>
          </div>
        </div>
      </div>

      <!-- Newsletter -->
      <div class="sidebar-widget">
        <div class="sw-header"><i class="fas fa-envelope"></i> Newsletter</div>
        <div class="newsletter-body">
          <p>Get the latest articles, ministry updates and broadcast news delivered to your inbox every week.</p>
          <input class="nl-input" type="text" placeholder="Your full name">
          <input class="nl-input" type="email" placeholder="Your email address">
          <button class="nl-btn"><i class="fas fa-paper-plane"></i> Subscribe</button>
        </div>
      </div>

      <!-- Tags -->
      <div class="sidebar-widget">
        <div class="sw-header"><i class="fas fa-tags"></i> Popular Tags</div>
        <div class="tags-cloud">
          <span class="tag-cloud-item">Pastor Chris</span>
          <span class="tag-cloud-item">Africa</span>
          <span class="tag-cloud-item">Healing</span>
          <span class="tag-cloud-item">Satellite</span>
          <span class="tag-cloud-item">Testimony</span>
          <span class="tag-cloud-item">Networks</span>
          <span class="tag-cloud-item">Miracle</span>
          <span class="tag-cloud-item">LTV</span>
          <span class="tag-cloud-item">Arabic</span>
          <span class="tag-cloud-item">Spanish</span>
          <span class="tag-cloud-item">Partnership</span>
          <span class="tag-cloud-item">Broadcast</span>
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
    const p = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight);
    document.getElementById('pgbar').style.width = (p * 100) + '%';
  });
  const io = new IntersectionObserver(e => e.forEach(x => {
    if (x.isIntersecting) x.target.classList.add('vis')
  }), {
    threshold: .08
  });
  document.querySelectorAll('.featured-post-row,.reveal').forEach(el => io.observe(el));

  function filterBlog(cat, btn) {
    if (btn) {
      document.querySelectorAll('.ctrl-cat-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    }
    document.querySelectorAll('.featured-post-row').forEach(card => {
      const cats = card.dataset.cat || '';
      card.style.display = (cat === 'all' || cats.includes(cat)) ? '' : 'none';
    });
  }

  function searchBlog(val) {
    const q = val.toLowerCase();
    document.querySelectorAll('.featured-post-row').forEach(card => {
      card.style.display = card.innerText.toLowerCase().includes(q) ? '' : 'none';
    });
  }
  // Like button toggle
  document.querySelectorAll('.like-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      btn.classList.toggle('liked');
      if (btn.classList.contains('liked')) {
        btn.style.borderColor = '#e53e3e';
        btn.style.color = '#e53e3e'
      } else {
        btn.style.borderColor = '';
        btn.style.color = ''
      }
    });
  });
  </script>

</body>

</html>