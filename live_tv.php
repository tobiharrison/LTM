<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Live TV — Loveworld Television Ministry</title>
  <?php include('meta.php'); ?>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,600;0,700;1,500&family=Nunito+Sans:wght@300;400;600;700;800&family=Cinzel:wght@400;600;700&display=swap"
    rel="stylesheet">
  <!-- Add following section in the page's <head> tag -->
  <link rel="stylesheet" href="//releases.flowplayer.org/7.2.7/skin/skin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="css/index.css" rel="stylesheet">
  <link href="css/live_tv.css" rel="stylesheet">
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
        class="fas fa-chevron-right sep"></i><span>Live TV</span></div>
  </div>

  <!-- LIVE STRIP -->
  <div class="live-strip">
    <div class="ls-in">
      <div class="live-badge-big">
        <div class="lbb-dot"></div>
        <div class="lbb-text">Live Now</div>
      </div>
      <div class="ls-now"><strong>Rhapsody of Realities</strong> <span>— Pastor Chris Oyakhilome · Loveworld TV Channel
          1</span></div>
      <div class="ls-viewers"><i class="fas fa-eye"></i> <span id="viewerCount">1,247,830</span> watching</div>
      <button class="ls-share" title="Share" onclick="shareStream()"><i class="fas fa-share-alt"></i> Share
        Stream</button>
    </div>
  </div>

  <!-- MAIN GRID -->
  <div class="main-wrap">

    <!-- PLAYER COLUMN -->
    <div class="player-col">

      <!-- Channel Switcher -->
      <!-- <div class="channel-switcher">
        <div class="ch-btn active">
          <div class="ch-icon">LTV</div>
          <div class="ch-name">LTM WEB TV</div>
          <div class="ch-live"></div>
        </div>

      </div> -->

      <!-- Video Player -->
      <div class="player-card reveal">
        <!-- Add following section in the page's <body> tag, where you need the player to be shown -->
        <div class="flowplayer" data-live="true" data-share="false" data-ratio="0.5625">
          <video autoplay>
            <source type="application/x-mpegurl"
              src="https://go5lm6a6dawb-hls-live.5centscdn.com/6731_push_2945_001/ae3209c9c56c1cb112aca7dac4f9f3c1.sdp/playlist.m3u8">
          </video>
        </div>
      </div>

    </div><!-- /player-col -->

    <!-- SIDEBAR -->
    <div class="sidebar-col">

      <!-- Schedule -->
      <div class="schedule-card reveal">
        <div class="sc-header">
          <div class="sc-title"><i class="fas fa-calendar-alt"></i> Today's Schedule</div>
          <div class="sc-date" id="todayDate"></div>
        </div>
        <div class="schedule-list" id="scheduleList"></div>
      </div>

      <!-- Give Card -->
      <!-- <div class="give-card reveal">
        <div class="give-top">
          <div class="give-title"><i class="fas fa-heart"></i> Support LTM</div>
          <div class="give-sub">Your gift keeps the Gospel broadcasting 24/7 to 180+ nations</div>
        </div>
        <div class="give-body">
          <div class="give-amts">
            <button class="ga-btn" onclick="setGiveAmt(this,'50')">50 ESP</button>
            <button class="ga-btn sel" onclick="setGiveAmt(this,'100')">100 ESP</button>
            <button class="ga-btn" onclick="setGiveAmt(this,'500')">500 ESP</button>
            <button class="ga-btn" onclick="setGiveAmt(this,'')">Custom</button>
          </div>
          <div class="give-row">
            <select class="give-cur" id="giveCur" onchange="updateGiveConv()">
              <option value="esp">Espees</option>
              <option value="ngn">Naira (₦)</option>
              <option value="usd">USD ($)</option>
              <option value="gbp">GBP (£)</option>
            </select>
            <input class="give-inp" id="giveAmt" type="number" value="100" placeholder="Amount"
              oninput="updateGiveConv()">
          </div>
          <div style="font-size:.7rem;color:rgba(255,255,255,.35);display:flex;align-items:center;gap:5px"
            id="giveConv"><i class="fas fa-exchange-alt" style="color:var(--gold)"></i> 100 ESP = ₦205,000 · $160 · £130
          </div>
          <div class="give-methods">
            <div class="gm"><i class="fas fa-bolt"></i> Espees: CELTM</div>
            <div class="gm"><i class="fas fa-crown"></i> KingsPay: CELTM</div>
            <div class="gm"><i class="fas fa-university"></i> Parallex: 1001324780</div>
          </div>
          <button class="give-btn" onclick="handleGive(this)"><i class="fas fa-heart"></i> Give Now</button>
        </div>
      </div> -->

    </div><!-- /sidebar-col -->
  </div><!-- /main-wrap -->

  <!-- COMMENT SECTION -->
  <div class="comment-section">
    <div class="comment-wrap">

      <!-- Give strip -->
      <div class="give-strip">
        <div class="gs-text">
          <div class="gs-title"><i class="fas fa-broadcast-tower"></i> Keep LTM On Air</div>
          <div class="gs-sub">Partner with us to fund 5,000+ stations and reach 8,123 languages in 2026</div>
        </div>
        <button class="gs-btn" onclick="window.location.href='ltm-give.php'"><i class="fas fa-heart"></i> Give
          Now</button>
      </div>

      <div class="section-head">
        <div class="sh-title"><i class="fas fa-comments"></i> Live Chat & Comments <span class="sh-count"
            id="commentCount">(0)</span></div>
        <select class="sh-sort" id="sortSelect" onchange="sortComments(this.value)">
          <option value="newest">Newest First</option>
          <option value="top">Top Liked</option>
          <option value="oldest">Oldest First</option>
        </select>
      </div>

      <!-- Firebase status -->
      <div class="firebase-status" id="fbStatus">
        <div class="fs-dot" id="fsDot"></div>
        <span id="fsText">Connecting to live chat…</span>
      </div>

      <!-- User setup -->
      <div class="auth-bar" id="authBar" style="display:none">
        <div class="auth-av-input" id="userAvatar">?</div>
        <input type="text" id="displayNameInput" placeholder="Set your display name to join the chat…" maxlength="30">
        <button onclick="setDisplayName()"
          style="padding:8px 18px;border-radius:8px;border:none;background:var(--violet);color:#fff;font-family:'Nunito Sans',sans-serif;font-size:.78rem;font-weight:700;cursor:pointer;white-space:nowrap">Join
          Chat</button>
      </div>
      <div id="currentUserBar" style="display:none;margin-bottom:12px;display:none">
        <div style="display:flex;align-items:center;gap:9px;font-size:.75rem;color:rgba(255,255,255,.4)">
          <div class="user-av" id="currentUserAv" style="width:28px;height:28px;font-size:.68rem"></div>
          <span>Commenting as <strong style="color:rgba(255,255,255,.7)" id="currentUserName"></strong></span>
          <button onclick="changeName()"
            style="background:none;border:none;color:rgba(255,255,255,.3);font-size:.72rem;cursor:pointer;text-decoration:underline">change</button>
        </div>
      </div>

      <!-- Comment Input -->
      <div class="comment-input-wrap" id="commentInputWrap">
        <div class="comment-input-header">
          <div class="user-av" id="inputUserAv">?</div>
        </div>
        <textarea class="comment-textarea" id="commentTextarea" placeholder="Share your thoughts on this broadcast…"
          oninput="autoResize(this)" rows="2"></textarea>
        <div class="comment-input-footer">
          <div class="cif-left">
            <div class="emoji-wrap">
              <button class="cif-btn" onclick="toggleEmoji()" title="Emoji"><i class="fas fa-smile"></i></button>
              <div class="emoji-picker" id="emojiPicker">
                <span onclick="insertEmoji('🙏')">🙏</span><span onclick="insertEmoji('❤️')">❤️</span><span
                  onclick="insertEmoji('🔥')">🔥</span><span onclick="insertEmoji('✨')">✨</span><span
                  onclick="insertEmoji('🎉')">🎉</span><span onclick="insertEmoji('👏')">👏</span><span
                  onclick="insertEmoji('🙌')">🙌</span><span onclick="insertEmoji('💯')">💯</span><span
                  onclick="insertEmoji('😭')">😭</span><span onclick="insertEmoji('💪')">💪</span><span
                  onclick="insertEmoji('🌟')">🌟</span><span onclick="insertEmoji('📺')">📺</span>
              </div>
            </div>
            <button class="cif-btn" title="Attach"><i class="fas fa-image"></i></button>
          </div>
          <button class="post-btn" onclick="postComment()" id="postBtn"><i class="fas fa-paper-plane"></i> Post</button>
        </div>
      </div>

      <!-- Comments List -->
      <div class="comments-list" id="commentsList"></div>
      <button class="load-more-comments" id="loadMoreBtn" style="display:none" onclick="loadMoreComments()">
        <i class="fas fa-chevron-down"></i> Load More Comments
      </button>

    </div>
  </div>

  <?php include('footer.php'); ?>
  <!-- ═══════════════════════════════════
     FIREBASE INTEGRATION
════════════════════════════════════ -->
  <!-- Firebase SDK -->
  <script type="module">
    import {
      initializeApp
    } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-app.js";
    import {
      getFirestore,
      collection,
      addDoc,
      getDocs,
      onSnapshot,
      doc,
      updateDoc,
      increment,
      arrayUnion,
      arrayRemove,
      query,
      orderBy,
      limit,
      serverTimestamp
    } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-firestore.js";
    import {
      getAuth,
      signInAnonymously,
      onAuthStateChanged
    } from "https://www.gstatic.com/firebasejs/10.12.0/firebase-auth.js";

    // ══ FIREBASE CONFIG — Replace with your project credentials ══
    const firebaseConfig = {
      apiKey: "YOUR_API_KEY",
      authDomain: "YOUR_AUTH_DOMAIN",
      projectId: "YOUR_PROJECT_ID",
      storageBucket: "YOUR_STORAGE_BUCKET",
      messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
      appId: "YOUR_APP_ID"
    };

    const app = initializeApp(firebaseConfig);
    const db = getFirestore(app);
    const auth = getAuth(app);

    // Stream ID — change per page/event
    const STREAM_ID = "ltm-live-channel-1";
    const commentsRef = collection(db, "streams", STREAM_ID, "comments");

    let currentUser = null;
    let currentUserDisplayName = localStorage.getItem('ltm_display_name') || null;
    let allComments = [];
    let lastVisible = null;
    const PAGE_SIZE = 15;

    // ── AUTH ──
    signInAnonymously(auth).catch(err => {
      console.warn("Firebase auth failed:", err);
      showOfflineMode();
    });

    onAuthStateChanged(auth, user => {
      if (user) {
        currentUser = user;
        document.getElementById('fsDot').classList.remove('offline');
        document.getElementById('fsText').textContent = 'Connected to live chat';
        document.getElementById('authBar').style.display = currentUserDisplayName ? 'none' : 'flex';
        document.getElementById('commentInputWrap').style.display = currentUserDisplayName ? 'block' : 'none';
        if (currentUserDisplayName) setupUserUI(currentUserDisplayName);
        startListening();
      }
    });

    function showOfflineMode() {
      document.getElementById('fsDot').classList.add('offline');
      document.getElementById('fsText').textContent = 'Using demo mode — connect Firebase to enable live chat';
      loadDemoComments();
    }

    // ── USER SETUP ──
    window.setDisplayName = function() {
      const name = document.getElementById('displayNameInput').value.trim();
      if (!name) return;
      localStorage.setItem('ltm_display_name', name);
      currentUserDisplayName = name;
      document.getElementById('authBar').style.display = 'none';
      document.getElementById('commentInputWrap').style.display = 'block';
      setupUserUI(name);
    };
    window.changeName = function() {
      localStorage.removeItem('ltm_display_name');
      currentUserDisplayName = null;
      document.getElementById('authBar').style.display = 'flex';
      document.getElementById('commentInputWrap').style.display = 'none';
    };

    function setupUserUI(name) {
      const initials = name.split(' ').map(w => w[0]).join('').toUpperCase().slice(0, 2);
      const hue = [...name].reduce((a, c) => a + c.charCodeAt(0), 0) % 360;
      const colors = [`hsl(${hue},60%,45%)`, `hsl(${(hue+40)%360},55%,35%)`];
      document.getElementById('inputUserAv').textContent = initials;
      document.getElementById('inputUserAv').style.background = `linear-gradient(135deg,${colors[0]},${colors[1]})`;
      const bar = document.getElementById('currentUserBar');
      bar.style.display = 'flex';
      document.getElementById('currentUserName').textContent = name;
      document.getElementById('currentUserAv').textContent = initials;
      document.getElementById('currentUserAv').style.background = `linear-gradient(135deg,${colors[0]},${colors[1]})`;
    }

    // ── POST COMMENT ──
    window.postComment = async function() {
      if (!currentUserDisplayName) {
        document.getElementById('authBar').style.display = 'flex';
        return;
      }
      const text = document.getElementById('commentTextarea').value.trim();
      if (!text || !currentUser) return;
      const btn = document.getElementById('postBtn');
      btn.disabled = true;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Posting…';
      try {
        await addDoc(commentsRef, {
          uid: currentUser.uid,
          name: currentUserDisplayName,
          text,
          likes: 0,
          likedBy: [],
          replyCount: 0,
          createdAt: serverTimestamp(),
        });
        document.getElementById('commentTextarea').value = '';
      } catch (e) {
        console.error(e);
        addLocalComment(currentUserDisplayName, text);
      }
      btn.disabled = false;
      btn.innerHTML = '<i class="fas fa-paper-plane"></i> Post';
    };

    // ── LISTEN TO COMMENTS ──
    function startListening() {
      const q = query(commentsRef, orderBy('createdAt', 'desc'), limit(PAGE_SIZE));
      onSnapshot(q, snap => {
        allComments = snap.docs.map(d => ({
          id: d.id,
          ...d.data()
        }));
        renderComments(allComments);
        document.getElementById('commentCount').textContent =
          `(${allComments.length}${snap.size >= PAGE_SIZE ? '+' : ''})`;
        if (snap.size >= PAGE_SIZE) {
          document.getElementById('loadMoreBtn').style.display = 'flex';
          lastVisible = snap.docs[snap.docs.length - 1];
        }
      });
    }

    // ── LIKE ──
    window.likeComment = async function(commentId, uid) {
      if (!currentUser) return;
      const ref = doc(db, "streams", STREAM_ID, "comments", commentId);
      const comment = allComments.find(c => c.id === commentId);
      if (!comment) return;
      const alreadyLiked = comment.likedBy && comment.likedBy.includes(currentUser.uid);
      try {
        if (alreadyLiked) {
          await updateDoc(ref, {
            likes: increment(-1),
            likedBy: arrayRemove(currentUser.uid)
          });
        } else {
          await updateDoc(ref, {
            likes: increment(1),
            likedBy: arrayUnion(currentUser.uid)
          });
        }
      } catch (e) {
        toggleLocalLike(commentId);
      }
    };

    // ── POST REPLY ──
    window.submitReply = async function(commentId, textareaId) {
      if (!currentUserDisplayName || !currentUser) return;
      const text = document.getElementById(textareaId).value.trim();
      if (!text) return;
      const repliesRef = collection(db, "streams", STREAM_ID, "comments", commentId, "replies");
      try {
        await addDoc(repliesRef, {
          uid: currentUser.uid,
          name: currentUserDisplayName,
          text,
          likes: 0,
          likedBy: [],
          createdAt: serverTimestamp(),
        });
        await updateDoc(doc(db, "streams", STREAM_ID, "comments", commentId), {
          replyCount: increment(1)
        });
        document.getElementById(textareaId).value = '';
        toggleReply(commentId);
        loadReplies(commentId);
      } catch (e) {
        addLocalReply(commentId, currentUserDisplayName, text);
      }
    };

    window.loadReplies = async function(commentId) {
      const repliesRef = collection(db, "streams", STREAM_ID, "comments", commentId, "replies");
      const snap = await getDocs(query(repliesRef, orderBy('createdAt', 'asc')));
      const replies = snap.docs.map(d => ({
        id: d.id,
        ...d.data()
      }));
      const container = document.getElementById('replies-' + commentId);
      if (container) {
        container.innerHTML = replies.map(r => buildReplyHTML(r, commentId)).join('');
      }
    };

    window.loadMoreComments = async function() {
      if (!lastVisible) return;
      const q = query(commentsRef, orderBy('createdAt', 'desc'), limit(PAGE_SIZE));
      const snap = await getDocs(q);
      const more = snap.docs.map(d => ({
        id: d.id,
        ...d.data()
      }));
      allComments = [...allComments, ...more];
      renderComments(allComments);
    };

    // ── RENDER ──
    function renderComments(comments) {
      const list = document.getElementById('commentsList');
      const sorted = sortList(comments, document.getElementById('sortSelect').value);
      list.innerHTML = sorted.map(c => buildCommentHTML(c)).join('');
      // attach listeners
      list.querySelectorAll('.like-btn-el').forEach(btn => {
        btn.addEventListener('click', () => likeComment(btn.dataset.id, btn.dataset.uid));
      });
      list.querySelectorAll('.reply-toggle-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          toggleReply(btn.dataset.id);
          loadReplies(btn.dataset.id);
        });
      });
    }

    function sortList(comments, mode) {
      if (mode === 'top') return [...comments].sort((a, b) => (b.likes || 0) - (a.likes || 0));
      if (mode === 'oldest') return [...comments].sort((a, b) => a.createdAt?.seconds - b.createdAt?.seconds);
      return [...comments].sort((a, b) => b.createdAt?.seconds - a.createdAt?.seconds);
    }

    window.sortComments = function(mode) {
      renderComments(allComments);
    };

    function buildCommentHTML(c) {
      const isYou = currentUser && c.uid === currentUser.uid;
      const liked = currentUser && c.likedBy && c.likedBy.includes(currentUser.uid);
      const initials = (c.name || '?').split(' ').map(w => w[0]).join('').toUpperCase().slice(0, 2);
      const hue = [...(c.name || '')].reduce((a, x) => a + x.charCodeAt(0), 0) % 360;
      const bg = `linear-gradient(135deg,hsl(${hue},60%,45%),hsl(${(hue+40)%360},55%,35%))`;
      const ts = c.createdAt?.seconds ? timeAgo(new Date(c.createdAt.seconds * 1000)) : 'just now';
      return `
  <div class="comment" id="comment-${c.id}">
    <div class="comment-main">
      <div class="comment-av" style="background:${bg}">${initials}
        ${isYou?`<div class="comment-av-badge" style="background:#27ae60">✓</div>`:''}
      </div>
      <div class="comment-body">
        <div class="comment-header">
          <span class="comment-name ${isYou?'':''}">
            ${escHtml(c.name||'Anonymous')}
          </span>
          ${isYou?`<span class="comment-tag tag-you">You</span>`:''}
          ${c.isAdmin?`<span class="comment-tag tag-admin">LTM Team</span>`:''}
          <span class="comment-time">${ts}</span>
        </div>
        <div class="comment-text">${escHtml(c.text||'')}</div>
        <div class="comment-actions">
          <button class="ca-btn like-btn-el ${liked?'liked':''}" data-id="${c.id}" data-uid="${c.uid}">
            <i class="fas fa-heart"></i> <span class="like-count">${c.likes||0}</span>
          </button>
          <button class="ca-btn reply-toggle-btn" data-id="${c.id}">
            <i class="fas fa-reply"></i> Reply ${c.replyCount>0?`(${c.replyCount})`:''}
          </button>
          <button class="ca-btn" onclick="copyComment('${c.id}')">
            <i class="fas fa-share"></i>
          </button>
        </div>
      </div>
    </div>
    <div class="reply-list" id="replies-${c.id}"></div>
    <div class="reply-input-wrap" id="replyWrap-${c.id}">
      <div class="user-av" style="background:${bg};width:32px;height:32px;font-size:.7rem;flex-shrink:0">${initials}</div>
      <textarea class="reply-textarea" id="replyTA-${c.id}" placeholder="Write a reply to ${escHtml(c.name||'this comment')}…" rows="2" oninput="autoResize(this)"></textarea>
      <button class="reply-submit-btn" onclick="submitReply('${c.id}','replyTA-${c.id}')">Reply</button>
    </div>
  </div>`;
    }

    function buildReplyHTML(r, parentId) {
      const isYou = currentUser && r.uid === currentUser.uid;
      const initials = (r.name || '?').split(' ').map(w => w[0]).join('').toUpperCase().slice(0, 2);
      const hue = [...(r.name || '')].reduce((a, x) => a + x.charCodeAt(0), 0) % 360;
      const bg = `linear-gradient(135deg,hsl(${hue},60%,45%),hsl(${(hue+40)%360},55%,35%))`;
      const ts = r.createdAt?.seconds ? timeAgo(new Date(r.createdAt.seconds * 1000)) : 'just now';
      return `
  <div class="comment" style="padding:12px 0;border-bottom:1px solid rgba(255,255,255,.03)">
    <div class="comment-main">
      <div class="comment-av" style="background:${bg};width:30px;height:30px;font-size:.68rem">${initials}</div>
      <div class="comment-body">
        <div class="comment-header">
          <span class="comment-name">${escHtml(r.name||'Anonymous')}</span>
          ${isYou?`<span class="comment-tag tag-you">You</span>`:''}
          <span class="comment-time">${ts}</span>
        </div>
        <div class="comment-text">${escHtml(r.text||'')}</div>
        <div class="comment-actions">
          <button class="ca-btn" onclick="likeReply('${parentId}','${r.id}')">
            <i class="fas fa-heart"></i> <span>${r.likes||0}</span>
          </button>
        </div>
      </div>
    </div>
  </div>`;
    }

    // ── DEMO COMMENTS (shown when Firebase not configured) ──
    function loadDemoComments() {
      document.getElementById('authBar').style.display = 'flex';
      const demos = [{
          id: 'd1',
          name: 'Blessing Okoro',
          text: 'Glory to God! This broadcast just healed my back pain. I was watching and suddenly felt heat and the pain is completely gone! 🙏🔥',
          likes: 47,
          likedBy: [],
          replyCount: 3,
          createdAt: {
            seconds: Date.now() / 1000 - 120
          },
          isAdmin: false
        },
        {
          id: 'd2',
          name: 'LTM Live Team',
          text: 'Welcome to the live broadcast of Rhapsody of Realities! Share this stream with your loved ones and let the Word of God transform lives. 📺✨',
          likes: 124,
          likedBy: [],
          replyCount: 8,
          createdAt: {
            seconds: Date.now() / 1000 - 300
          },
          isAdmin: true
        },
        {
          id: 'd3',
          name: 'Rania Hassan',
          text: 'Watching from Lebanon 🇱🇧 — Pastor Chris is teaching on Zoe, the God-kind of life. This is extraordinary revelation. Thank you LTM for reaching us!',
          likes: 38,
          likedBy: [],
          replyCount: 1,
          createdAt: {
            seconds: Date.now() / 1000 - 600
          },
          isAdmin: false
        },
        {
          id: 'd4',
          name: 'Emmanuel Chibuike',
          text: 'This program healed my daughter 3 years ago when she was given up by doctors. We keep watching and supporting. God bless LTM forever!',
          likes: 92,
          likedBy: [],
          replyCount: 5,
          createdAt: {
            seconds: Date.now() / 1000 - 900
          },
          isAdmin: false
        },
        {
          id: 'd5',
          name: 'Sarah Mitchell',
          text: 'Tuning in from London 🇬🇧 — it\'s 11pm here and I cannot sleep but this broadcast is worth every moment. God is so good!',
          likes: 29,
          likedBy: [],
          replyCount: 2,
          createdAt: {
            seconds: Date.now() / 1000 - 1200
          },
          isAdmin: false
        },
      ];
      allComments = demos;
      renderComments(demos);
      document.getElementById('commentCount').textContent = `(${demos.length})`;
    }

    function addLocalComment(name, text) {
      const newC = {
        id: 'local-' + Date.now(),
        name,
        text,
        likes: 0,
        likedBy: [],
        replyCount: 0,
        createdAt: {
          seconds: Date.now() / 1000
        }
      };
      allComments = [newC, ...allComments];
      renderComments(allComments);
    }

    function addLocalReply(commentId, name, text) {
      const replyHTML = buildReplyHTML({
        id: 'lr-' + Date.now(),
        name,
        text,
        likes: 0,
        likedBy: [],
        createdAt: {
          seconds: Date.now() / 1000
        }
      }, commentId);
      const container = document.getElementById('replies-' + commentId);
      if (container) container.insertAdjacentHTML('beforeend', replyHTML);
      toggleReply(commentId);
    }

    function toggleLocalLike(commentId) {
      const c = allComments.find(x => x.id === commentId);
      if (c) {
        c.likes = (c.likes || 0) + 1;
        renderComments(allComments);
      }
    }

    // Utils
    window.toggleReply = function(id) {
      const wrap = document.getElementById('replyWrap-' + id);
      if (!wrap) return;
      wrap.classList.toggle('open');
      if (wrap.classList.contains('open')) wrap.querySelector('textarea').focus();
    };
    window.toggleEmoji = function() {
      document.getElementById('emojiPicker').classList.toggle('open');
    };
    window.insertEmoji = function(e) {
      const ta = document.getElementById('commentTextarea');
      ta.value += e;
      ta.focus();
      document.getElementById('emojiPicker').classList.remove('open');
    };
    window.autoResize = function(el) {
      el.style.height = 'auto';
      el.style.height = el.scrollHeight + 'px';
    };
    window.copyComment = function(id) {
      const c = allComments.find(x => x.id === id);
      if (c) navigator.clipboard.writeText(c.text || '');
    };
    window.sortComments = function(v) {
      renderComments(allComments);
    };

    function escHtml(s) {
      return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
    }

    function timeAgo(d) {
      const s = Math.floor((Date.now() - d) / 1000);
      if (s < 60) return `${s}s ago`;
      if (s < 3600) return `${Math.floor(s/60)}m ago`;
      if (s < 86400) return `${Math.floor(s/3600)}h ago`;
      return `${Math.floor(s/86400)}d ago`;
    }
  </script>

  <!-- Non-module scripts -->
  <script>
    // Page bar
    window.addEventListener('scroll', () => {
      document.getElementById('pgbar').style.width = (window.scrollY / (document.documentElement.scrollHeight - window
        .innerHeight) * 100) + '%';
    });
    // Reveal
    const io = new IntersectionObserver(e => e.forEach(x => {
      if (x.isIntersecting) x.target.classList.add('vis')
    }), {
      threshold: .1
    });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));

    // Schedule data
    const SCHEDULE = [{
        time: '06:00',
        show: 'Morning Devotion',
        host: 'LTM Team',
        duration: '1h',
        status: 'past'
      },
      {
        time: '07:00',
        show: 'Praise & Worship Hour',
        host: 'Loveworld Singers',
        duration: '1h',
        status: 'past'
      },
      {
        time: '08:00',
        show: 'Rhapsody of Realities',
        host: 'Pastor Chris Oyakhilome',
        duration: '1h',
        status: 'live'
      },
      {
        time: '09:00',
        show: 'Atmosphere for Miracles',
        host: 'Pastor Chris Oyakhilome',
        duration: '1h',
        status: 'next'
      },
      {
        time: '10:00',
        show: 'Healing Streams',
        host: 'Pastor Deola Phillips',
        duration: '2h',
        status: 'upcoming'
      },
      {
        time: '12:00',
        show: 'Your LoveWorld Special',
        host: 'LTM Broadcast',
        duration: '1h',
        status: 'upcoming'
      },
      {
        time: '13:00',
        show: 'Midday Prayer',
        host: 'LTM Prayer Team',
        duration: '30m',
        status: 'upcoming'
      },
      {
        time: '13:30',
        show: 'Pastor Chris Teaching',
        host: 'Pastor Chris Oyakhilome',
        duration: '1h',
        status: 'upcoming'
      },
      {
        time: '14:30',
        show: 'Global Missions Update',
        host: 'LTM News',
        duration: '30m',
        status: 'upcoming'
      },
      {
        time: '15:00',
        show: 'Youth Alive',
        host: 'Loveworld Youth',
        duration: '1h',
        status: 'upcoming'
      },
      {
        time: '16:00',
        show: 'Ladies Inspired',
        host: 'Pastor Bola Oyakhilome',
        duration: '1h',
        status: 'upcoming'
      },
      {
        time: '17:00',
        show: 'Evening Devotion',
        host: 'LTM Team',
        duration: '1h',
        status: 'upcoming'
      },
      {
        time: '19:00',
        show: 'Night of Bliss Replay',
        host: 'Loveworld Special',
        duration: '2h',
        status: 'upcoming'
      },
      {
        time: '21:00',
        show: 'Pastor Chris Teaching',
        host: 'Pastor Chris Oyakhilome',
        duration: '1h',
        status: 'upcoming'
      },
      {
        time: '22:00',
        show: 'Midnight Prayer',
        host: 'LTM Prayer Team',
        duration: '2h',
        status: 'upcoming'
      },
    ];

    function buildSchedule() {
      const list = document.getElementById('scheduleList');
      list.innerHTML = SCHEDULE.map(s => `
    <div class="sched-item ${s.status==='live'?'current':s.status==='past'?'past':''}" onclick="selectShow('${s.show}','${s.host}')">
      <div class="sched-time-block"><div class="sched-time ${s.status==='live'?'current-time':''}">${s.time}</div></div>
      <div class="sched-bar ${s.status==='live'?'current-bar':''}"></div>
      <div class="sched-info">
        <div class="sched-show-name">${s.show}</div>
        <div class="sched-host">${s.host}</div>
        <div class="sched-duration">${s.duration}</div>
      </div>
      <div class="sched-status-badge">
        ${s.status==='live'?'<span class="ssb ssb-live">● Live</span>':s.status==='next'?'<span class="ssb ssb-next">Next</span>':''}
      </div>
    </div>`).join('');
    }
    buildSchedule();

    // Today date
    const d = new Date();
    document.getElementById('todayDate').textContent = d.toLocaleDateString('en-GB', {
      weekday: 'short',
      day: 'numeric',
      month: 'short'
    });

    // Viewer count animation
    let viewers = 1247830;
    setInterval(() => {
      viewers += Math.floor(Math.random() * 50 - 15);
      if (viewers < 1200000) viewers = 1200000;
      document.getElementById('viewerCount').textContent = viewers.toLocaleString();
    }, 3000);

    // Player controls
    let playing = false;

    function playStream() {
      playing = true;
      document.getElementById('ppIcon').className = 'fas fa-pause';
      document.getElementById('playIcon').className = 'fas fa-pause';
    }

    function shareStream() {
      if (navigator.share) {
        navigator.share({
          url: window.location.href
        }).catch(() => {});
      } else {
        navigator.clipboard.writeText(window.location.href);
      }
    }

    function togglePlay() {
      playing = !playing;
      document.getElementById('ppIcon').className = playing ? 'fas fa-pause' : 'fas fa-play';
    }

    function toggleMute() {
      const btn = document.getElementById('muteBtn');
      const icon = btn.querySelector('i');
      icon.className = icon.className.includes('mute') ? 'fas fa-volume-up' : 'fas fa-volume-mute';
    }

    function setVolume(v) {
      console.log('Volume:', v);
    }

    function toggleFullscreen() {
      const el = document.getElementById('playerScreen');
      if (el.requestFullscreen) el.requestFullscreen();
    }

    // Channel switcher
    document.querySelectorAll('.ch-btn').forEach(btn => {
      btn.addEventListener('click', () => {
        document.querySelectorAll('.ch-btn').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
        document.querySelector('.pc-show-name').textContent = 'Switching channel…';
        setTimeout(() => document.querySelector('.pc-show-name').textContent = 'Live Broadcast', 1500);
      });
    });

    function selectShow(show, host) {
      document.querySelector('.pc-show-name').textContent = show;
      document.querySelector('.pc-show-meta').textContent = host + ' · LTV Channel 1';
      document.querySelector('.player-show-title').textContent = show;
    }

    // Give
    function setGiveAmt(btn, val) {
      document.querySelectorAll('.ga-btn').forEach(b => b.classList.remove('sel'));
      btn.classList.add('sel');
      if (val) document.getElementById('giveAmt').value = val;
      else document.getElementById('giveAmt').value = '';
      updateGiveConv();
    }

    function updateGiveConv() {
      const cur = document.getElementById('giveCur').value;
      const amt = parseFloat(document.getElementById('giveAmt').value) || 0;
      const el = document.getElementById('giveConv');
      if (!amt) {
        el.innerHTML = '<i class="fas fa-exchange-alt" style="color:var(--gold)"></i> Enter amount to see conversion';
        return
      }
      if (cur === 'esp') el.innerHTML =
        `<i class="fas fa-exchange-alt" style="color:var(--gold)"></i> ${amt} ESP = ₦${(amt*2050).toLocaleString()} · $${(amt*1.6).toFixed(0)} · £${(amt*1.3).toFixed(0)}`;
      else if (cur === 'ngn') el.innerHTML =
        `<i class="fas fa-exchange-alt" style="color:var(--gold)"></i> ₦${amt.toLocaleString()} = ${(amt/2050).toFixed(2)} ESP`;
      else el.innerHTML =
        `<i class="fas fa-exchange-alt" style="color:var(--gold)"></i> $${amt} = ${(amt/1.6).toFixed(2)} ESP`;
    }

    function handleGive(btn) {
      const orig = btn.innerHTML;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Processing…';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = '<i class="fas fa-check"></i> Thank You! 🙏';
        btn.style.background = 'linear-gradient(135deg,#27ae60,#2ecc71)';
        setTimeout(() => {
          btn.innerHTML = orig;
          btn.style.background = '';
          btn.disabled = false
        }, 4000);
      }, 2000);
    }

    document.addEventListener('click', e => {
      if (!e.target.closest('.emoji-wrap')) document.getElementById('emojiPicker').classList.remove('open');
    });
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