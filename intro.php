<link
  href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Nunito+Sans:wght@300;400;600;700;800;900&family=Cinzel:wght@400;600;700;900&display=swap"
  rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
  /* ═══════════════════════════════════════════════════
   RESET & TOKENS
═══════════════════════════════════════════════════ */
  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  :root {
    --violet: #4b2fbf;
    --v2: #6b4fd8;
    --v3: #9b7ef8;
    --gold: #e8b840;
    --g2: #f5d470;
    --g3: #fff3c0;
    --ink: #1b1f4a;
    --cream: #faf9f6;
    --ease-out: cubic-bezier(.16, 1, .3, 1);
    --ease-spring: cubic-bezier(.34, 1.56, .64, 1);
  }

  html {
    scroll-behavior: smooth;
  }

  /* ═══════════════════════════════════════════════════
   INTRO SECTION
═══════════════════════════════════════════════════ */
  #intro-section {
    position: relative;
    width: 100vw;
    height: 100vh;
    min-height: 600px;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    perspective: 1200px;
  }

  /* ── VIDEO BACKGROUND ── */
  .intro-video-wrap {
    position: absolute;
    inset: 0;
    z-index: 0;
    overflow: hidden;
  }

  .intro-video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: scale(1.08);
    transition: transform 12s ease;
    filter: brightness(.55) saturate(1.2);
  }

  #intro-section.loaded .intro-video {
    transform: scale(1.0);
  }

  /* Fallback gradient when no video */
  .intro-video-fallback {
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse at 20% 30%, rgba(75, 47, 191, .55) 0%, transparent 55%),
      radial-gradient(ellipse at 80% 70%, rgba(27, 31, 74, .8) 0%, transparent 55%),
      radial-gradient(ellipse at 60% 20%, rgba(107, 79, 216, .3) 0%, transparent 45%),
      linear-gradient(145deg, #060820 0%, #1b1f4a 35%, #0a0c24 65%, #050816 100%);
  }

  /* ── LAYERED OVERLAYS ── */
  .intro-overlay-base {
    position: absolute;
    inset: 0;
    z-index: 1;
    background: linear-gradient(145deg,
        rgba(5, 6, 20, .82) 0%,
        rgba(15, 18, 52, .72) 30%,
        rgba(27, 31, 74, .58) 60%,
        rgba(5, 6, 20, .88) 100%);
  }

  .intro-overlay-vignette {
    position: absolute;
    inset: 0;
    z-index: 2;
    background:
      radial-gradient(ellipse at 50% 0%, transparent 40%, rgba(0, 0, 0, .6) 100%),
      radial-gradient(ellipse at 0% 50%, rgba(0, 0, 0, .3), transparent 60%),
      radial-gradient(ellipse at 100% 50%, rgba(0, 0, 0, .3), transparent 60%),
      radial-gradient(ellipse at 50% 100%, rgba(0, 0, 0, .65) 0%, transparent 60%);
  }

  /* Cinematic letterbox bars */
  .intro-bar-top {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: clamp(40px, 6vh, 80px);
    background: linear-gradient(to bottom, rgba(0, 0, 0, .85), transparent);
    z-index: 3;
    pointer-events: none;
  }

  .intro-bar-bottom {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: clamp(80px, 14vh, 160px);
    background: linear-gradient(to top, rgba(0, 0, 0, .95), transparent);
    z-index: 3;
    pointer-events: none;
  }

  /* ── ANIMATED GRAIN TEXTURE ── */
  .intro-grain {
    position: absolute;
    inset: -50%;
    width: 200%;
    height: 200%;
    z-index: 3;
    pointer-events: none;
    opacity: .025;
    animation: grainShift .12s steps(1) infinite;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
    background-size: 128px 128px;
  }

  @keyframes grainShift {
    0% {
      transform: translate(0, 0)
    }

    10% {
      transform: translate(-3%, -4%)
    }

    20% {
      transform: translate(4%, 2%)
    }

    30% {
      transform: translate(-2%, 5%)
    }

    40% {
      transform: translate(5%, -3%)
    }

    50% {
      transform: translate(-4%, 4%)
    }

    60% {
      transform: translate(3%, -5%)
    }

    70% {
      transform: translate(-5%, 3%)
    }

    80% {
      transform: translate(4%, 5%)
    }

    90% {
      transform: translate(-3%, -2%)
    }

    100% {
      transform: translate(2%, 4%)
    }
  }

  /* ── SIGNAL RINGS (3D depth) ── */
  .signal-rings {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotateX(72deg);
    z-index: 2;
    pointer-events: none;
    transform-style: preserve-3d;
  }

  .signal-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(75, 47, 191, .18);
    transform: translate(-50%, -50%);
    animation: ringExpand 5s ease-out infinite;
    left: 0;
    top: 0;
  }

  .signal-ring:nth-child(1) {
    width: 280px;
    height: 280px;
    animation-delay: 0s;
  }

  .signal-ring:nth-child(2) {
    width: 480px;
    height: 480px;
    animation-delay: 1s;
  }

  .signal-ring:nth-child(3) {
    width: 700px;
    height: 700px;
    animation-delay: 2s;
  }

  .signal-ring:nth-child(4) {
    width: 960px;
    height: 960px;
    animation-delay: 3s;
  }

  .signal-ring:nth-child(5) {
    width: 1260px;
    height: 1260px;
    animation-delay: 4s;
  }

  @keyframes ringExpand {
    0% {
      opacity: .5;
      transform: translate(-50%, -50%) scale(.8);
      border-color: rgba(75, 47, 191, .3);
    }

    50% {
      opacity: .25;
      border-color: rgba(75, 47, 191, .12);
    }

    100% {
      opacity: 0;
      transform: translate(-50%, -50%) scale(1.25);
      border-color: transparent;
    }
  }

  /* ── GRID LINES ── */
  .intro-grid {
    position: absolute;
    inset: 0;
    z-index: 2;
    pointer-events: none;
    background-image:
      linear-gradient(rgba(75, 47, 191, .04) 1px, transparent 1px),
      linear-gradient(90deg, rgba(75, 47, 191, .04) 1px, transparent 1px);
    background-size: 80px 80px;
    mask-image: radial-gradient(ellipse at center, black 20%, transparent 75%);
    -webkit-mask-image: radial-gradient(ellipse at center, black 20%, transparent 75%);
    animation: gridPulse 8s ease-in-out infinite;
  }

  @keyframes gridPulse {

    0%,
    100% {
      opacity: .6;
    }

    50% {
      opacity: 1.2;
    }
  }

  /* ── FLOATING PARTICLES ── */
  .particle-field {
    position: absolute;
    inset: 0;
    z-index: 3;
    pointer-events: none;
    overflow: hidden;
  }

  .particle {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
  }

  /* ── GOLD LIGHT SWEEP ── */
  .light-sweep {
    position: absolute;
    inset: 0;
    z-index: 3;
    pointer-events: none;
    background: linear-gradient(105deg,
        transparent 30%,
        rgba(232, 184, 64, .04) 45%,
        rgba(255, 255, 255, .06) 50%,
        rgba(232, 184, 64, .04) 55%,
        transparent 70%);
    background-size: 300% 100%;
    animation: sweep 8s ease-in-out infinite;
    animation-delay: 1.5s;
  }

  @keyframes sweep {
    0% {
      background-position: 200% 0;
      opacity: 0;
    }

    10% {
      opacity: 1;
    }

    100% {
      background-position: -100% 0;
      opacity: 0;
    }
  }

  /* ── RADIAL GLOW CENTER ── */
  .center-glow {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: min(800px, 90vw);
    height: min(800px, 90vw);
    background: radial-gradient(circle,
        rgba(75, 47, 191, .18) 0%,
        rgba(107, 79, 216, .1) 25%,
        rgba(232, 184, 64, .04) 50%,
        transparent 70%);
    border-radius: 50%;
    z-index: 2;
    pointer-events: none;
    animation: glowPulse 6s ease-in-out infinite;
  }

  @keyframes glowPulse {

    0%,
    100% {
      transform: translate(-50%, -50%) scale(1);
      opacity: .7;
    }

    50% {
      transform: translate(-50%, -50%) scale(1.15);
      opacity: 1;
    }
  }

  /* ═══════════════════════════════════════════════════
   CONTENT LAYER
═══════════════════════════════════════════════════ */
  .intro-content {
    position: relative;
    z-index: 10;
    text-align: center;
    max-width: min(900px, 90vw);
    padding: 0 24px;
    transform-style: preserve-3d;
    /* Scroll parallax handled by JS */
  }

  /* ── TOP BADGE ── */
  .intro-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(232, 184, 64, .08);
    border: 1px solid rgba(232, 184, 64, .22);
    backdrop-filter: blur(12px);
    border-radius: 40px;
    padding: 8px 20px;
    margin-bottom: 28px;
    opacity: 0;
    transform: translateY(30px) scale(.95);
    animation: fadeRise .9s var(--ease-out) .3s forwards;
  }

  .badge-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--gold);
    animation: badgePulse 2s ease-in-out infinite;
    box-shadow: 0 0 0 0 rgba(232, 184, 64, .6);
  }

  @keyframes badgePulse {

    0%,
    100% {
      box-shadow: 0 0 0 0 rgba(232, 184, 64, .5);
    }

    50% {
      box-shadow: 0 0 0 6px rgba(232, 184, 64, 0);
    }
  }

  .badge-text {
    font-size: .72rem;
    font-weight: 800;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--gold);
  }

  .badge-sep {
    width: 1px;
    height: 12px;
    background: rgba(232, 184, 64, .3);
  }

  .badge-sub {
    font-size: .65rem;
    font-weight: 600;
    letter-spacing: .1em;
    color: rgba(232, 184, 64, .65);
    text-transform: uppercase;
  }

  /* ── MINISTRY NAME ── */
  .intro-ministry {
    font-family: 'Cinzel', serif;
    font-size: clamp(.7rem, 1.4vw, .95rem);
    font-weight: 400;
    letter-spacing: .45em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .4);
    margin-bottom: 16px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeRise .8s var(--ease-out) .55s forwards;
  }

  /* ── MAIN HEADLINE ── */
  .intro-headline-wrap {
    margin-bottom: 10px;
    overflow: hidden;
  }

  .intro-headline {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(2.4rem, 7.5vw, 6.2rem);
    font-weight: 700;
    line-height: .95;
    letter-spacing: -.02em;
    color: #fff;
    display: block;
    opacity: 0;
    transform: translateY(60px) rotateX(18deg);
    animation: headlineRise .95s var(--ease-out) forwards;
  }

  .intro-headline:nth-child(1) {
    animation-delay: .65s;
  }

  .intro-headline:nth-child(2) {
    animation-delay: .8s;
  }

  .intro-headline .gold-word {
    color: transparent;
    background: linear-gradient(135deg, var(--gold) 0%, var(--g2) 50%, #fff 75%, var(--gold) 100%);
    background-clip: text;
    -webkit-background-clip: text;
    background-size: 250% 100%;
    animation: goldShimmer 5s linear 1.5s infinite;
  }

  @keyframes goldShimmer {
    0% {
      background-position: 200% 0;
    }

    100% {
      background-position: -100% 0;
    }
  }

  .intro-headline .stroke-word {
    color: transparent;
    -webkit-text-stroke: 1.5px rgba(255, 255, 255, .5);
  }

  @keyframes headlineRise {
    to {
      opacity: 1;
      transform: translateY(0) rotateX(0);
    }
  }

  /* ── RULE LINE ── */
  .intro-rule-wrap {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 16px;
    margin: 24px auto;
    opacity: 0;
    animation: fadeIn .7s var(--ease-out) 1.05s forwards;
  }

  .intro-rule-line {
    width: clamp(40px, 8vw, 90px);
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(232, 184, 64, .5));
  }

  .intro-rule-line.right {
    background: linear-gradient(90deg, rgba(232, 184, 64, .5), transparent);
  }

  .intro-rule-icon {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    border: 1px solid rgba(232, 184, 64, .3);
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .intro-rule-icon i {
    color: var(--gold);
    font-size: .65rem;
  }

  /* ── SUBHEADLINE ── */
  .intro-sub {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1rem, 2.2vw, 1.5rem);
    font-weight: 400;
    font-style: italic;
    color: rgba(255, 255, 255, .65);
    line-height: 1.65;
    max-width: 680px;
    margin: 0 auto 32px;
    opacity: 0;
    transform: translateY(24px);
    animation: fadeRise .85s var(--ease-out) 1.1s forwards;
  }

  .intro-sub strong {
    color: rgba(255, 255, 255, .9);
    font-weight: 600;
    font-style: normal;
  }

  /* ── STAT PILLS ── */
  .intro-stats {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-bottom: 36px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeRise .8s var(--ease-out) 1.3s forwards;
  }

  .stat-pill {
    display: flex;
    align-items: center;
    gap: 9px;
    background: rgba(255, 255, 255, .055);
    border: 1px solid rgba(255, 255, 255, .1);
    backdrop-filter: blur(14px);
    border-radius: 30px;
    padding: 9px 18px;
    transition: all .3s var(--ease-out);
    cursor: default;
  }

  .stat-pill:hover {
    background: rgba(75, 47, 191, .25);
    border-color: rgba(75, 47, 191, .4);
    transform: translateY(-3px) scale(1.04);
    box-shadow: 0 8px 24px rgba(75, 47, 191, .2);
  }

  .sp-num {
    font-family: 'Cinzel', serif;
    font-size: clamp(.85rem, 1.8vw, 1.05rem);
    font-weight: 700;
    color: var(--gold);
    line-height: 1;
  }

  .sp-sep {
    width: 1px;
    height: 16px;
    background: rgba(255, 255, 255, .12);
  }

  .sp-label {
    font-size: clamp(.6rem, 1.2vw, .72rem);
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .55);
  }

  /* ── CTA BUTTONS ── */
  .intro-ctas {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
    gap: 14px;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeRise .8s var(--ease-out) 1.5s forwards;
  }

  .cta-primary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: linear-gradient(135deg, var(--gold) 0%, #f5a623 60%, var(--gold) 100%);
    background-size: 200% 100%;
    color: var(--ink);
    font-family: 'Nunito Sans', sans-serif;
    font-size: clamp(.8rem, 1.4vw, .92rem);
    font-weight: 800;
    letter-spacing: .06em;
    text-transform: uppercase;
    padding: 15px 32px;
    border-radius: 50px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: all .35s var(--ease-out);
    box-shadow: 0 6px 28px rgba(232, 184, 64, .35), 0 0 0 0 rgba(232, 184, 64, .3);
    position: relative;
    overflow: hidden;
  }

  .cta-primary::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(255, 255, 255, .25), transparent);
    opacity: 0;
    transition: opacity .3s;
  }

  .cta-primary:hover {
    transform: translateY(-4px) scale(1.03);
    box-shadow: 0 16px 44px rgba(232, 184, 64, .5), 0 0 0 6px rgba(232, 184, 64, .1);
    background-position: 100% 0;
  }

  .cta-primary:hover::before {
    opacity: 1;
  }

  .cta-primary:active {
    transform: translateY(-1px) scale(1.01);
  }

  .cta-primary i {
    font-size: .85rem;
  }

  .cta-secondary {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, .07);
    color: #fff;
    font-family: 'Nunito Sans', sans-serif;
    font-size: clamp(.8rem, 1.4vw, .92rem);
    font-weight: 700;
    letter-spacing: .05em;
    text-transform: uppercase;
    padding: 14px 28px;
    border-radius: 50px;
    border: 1.5px solid rgba(255, 255, 255, .18);
    cursor: pointer;
    text-decoration: none;
    backdrop-filter: blur(12px);
    transition: all .3s var(--ease-out);
    position: relative;
    overflow: hidden;
  }

  .cta-secondary:hover {
    background: rgba(255, 255, 255, .14);
    border-color: rgba(255, 255, 255, .35);
    transform: translateY(-3px);
    box-shadow: 0 12px 32px rgba(0, 0, 0, .3);
  }

  /* ── FLOATING BADGES (left & right decorative) ── */
  .float-badge {
    position: absolute;
    z-index: 10;
    backdrop-filter: blur(14px);
    border-radius: 14px;
    padding: 14px 18px;
    display: flex;
    align-items: center;
    gap: 12px;
    box-shadow: 0 16px 48px rgba(0, 0, 0, .4);
    opacity: 0;
    animation: badgeFloat .9s var(--ease-spring) forwards;
  }

  .fb-left {
    left: clamp(16px, 5vw, 60px);
    top: 50%;
    margin-top: -20px;
    background: rgba(15, 18, 52, .75);
    border: 1px solid rgba(75, 47, 191, .25);
    animation-delay: 1.7s;
    animation-name: badgeFloatLeft;
  }

  .fb-right {
    right: clamp(16px, 5vw, 60px);
    top: 50%;
    margin-top: 40px;
    background: rgba(15, 18, 52, .75);
    border: 1px solid rgba(232, 184, 64, .2);
    animation-delay: 1.9s;
    animation-name: badgeFloatRight;
  }

  @keyframes badgeFloatLeft {
    from {
      opacity: 0;
      transform: translateX(-30px) scale(.9);
    }

    to {
      opacity: 1;
      transform: translateX(0) scale(1);
      animation: levitate 5s ease-in-out 2s infinite;
    }
  }

  @keyframes badgeFloatRight {
    from {
      opacity: 0;
      transform: translateX(30px) scale(.9);
    }

    to {
      opacity: 1;
      transform: translateX(0) scale(1);
    }
  }

  /* independent levitate */
  .fb-left {
    animation: badgeFloatLeft .9s var(--ease-spring) 1.7s forwards, levitate 5s ease-in-out 2.6s infinite;
  }

  .fb-right {
    animation: badgeFloatRight .9s var(--ease-spring) 1.9s forwards, levitate2 5.5s ease-in-out 2.8s infinite;
  }

  @keyframes levitate {

    0%,
    100% {
      transform: translateY(0)
    }

    50% {
      transform: translateY(-10px)
    }
  }

  @keyframes levitate2 {

    0%,
    100% {
      transform: translateY(0)
    }

    50% {
      transform: translateY(-8px)
    }
  }

  .fb-icon {
    font-size: 1.5rem;
    flex-shrink: 0;
  }

  .fb-num {
    font-family: 'Cinzel', serif;
    font-size: 1.1rem;
    font-weight: 700;
    color: var(--gold);
    line-height: 1;
  }

  .fb-label {
    font-size: .62rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .5);
    margin-top: 2px;
  }

  /* ── SCROLL INDICATOR ── */
  .scroll-indicator {
    position: absolute;
    bottom: clamp(24px, 4vh, 40px);
    left: 50%;
    transform: translateX(-50%);
    z-index: 10;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    opacity: 0;
    animation: fadeIn .8s var(--ease-out) 2.2s forwards;
  }

  .scroll-indicator-text {
    font-size: .63rem;
    font-weight: 700;
    letter-spacing: .22em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .35);
  }

  .scroll-mouse {
    width: 24px;
    height: 38px;
    border: 1.5px solid rgba(255, 255, 255, .2);
    border-radius: 12px;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    padding-top: 6px;
  }

  .scroll-wheel {
    width: 3px;
    height: 8px;
    background: rgba(255, 255, 255, .5);
    border-radius: 2px;
    animation: wheelScroll 2s ease-in-out infinite;
  }

  @keyframes wheelScroll {

    0%,
    100% {
      transform: translateY(0);
      opacity: .8;
    }

    50% {
      transform: translateY(10px);
      opacity: .15;
    }
  }

  .scroll-arrow {
    color: rgba(255, 255, 255, .3);
    font-size: .7rem;
    animation: arrowBounce 2s ease-in-out infinite;
  }

  @keyframes arrowBounce {

    0%,
    100% {
      transform: translateY(0)
    }

    50% {
      transform: translateY(4px)
    }
  }

  /* ── CORNER DECORATIONS ── */
  .corner-deco {
    position: absolute;
    z-index: 8;
    width: 60px;
    height: 60px;
    pointer-events: none;
    opacity: .25;
  }

  .corner-deco.tl {
    top: 20px;
    left: 20px;
    border-top: 1px solid var(--gold);
    border-left: 1px solid var(--gold);
    border-radius: 4px 0 0 0;
  }

  .corner-deco.tr {
    top: 20px;
    right: 20px;
    border-top: 1px solid var(--gold);
    border-right: 1px solid var(--gold);
    border-radius: 0 4px 0 0;
  }

  .corner-deco.bl {
    bottom: clamp(60px, 10vh, 100px);
    left: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, .2);
    border-left: 1px solid rgba(255, 255, 255, .2);
  }

  .corner-deco.br {
    bottom: clamp(60px, 10vh, 100px);
    right: 20px;
    border-bottom: 1px solid rgba(255, 255, 255, .2);
    border-right: 1px solid rgba(255, 255, 255, .2);
  }

  /* ── BOTTOM GRADIENT TRANSITION TO NEXT SECTION ── */
  .intro-transition-out {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: clamp(100px, 18vh, 200px);
    background: linear-gradient(to bottom, transparent, #faf9f6);
    z-index: 11;
    pointer-events: none;
  }

  /* ── LIVE INDICATOR ── */
  .intro-live-tag {
    position: absolute;
    top: clamp(16px, 3vh, 28px);
    right: clamp(16px, 3vw, 32px);
    z-index: 15;
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(192, 57, 43, .15);
    border: 1px solid rgba(229, 62, 62, .35);
    backdrop-filter: blur(14px);
    border-radius: 30px;
    padding: 7px 16px;
    opacity: 0;
    animation: fadeIn .7s var(--ease-out) 2s forwards;
  }

  .live-tag-dot {
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #ff4757;
    animation: livePulse 1.4s ease-in-out infinite;
    box-shadow: 0 0 0 0 rgba(255, 71, 87, .5);
  }

  @keyframes livePulse {

    0%,
    100% {
      box-shadow: 0 0 0 0 rgba(255, 71, 87, .5)
    }

    50% {
      box-shadow: 0 0 0 6px rgba(255, 71, 87, 0)
    }
  }

  .live-tag-text {
    font-size: .65rem;
    font-weight: 800;
    letter-spacing: .16em;
    text-transform: uppercase;
    color: #ff6b6b;
  }

  .live-tag-sep {
    width: 1px;
    height: 10px;
    background: rgba(255, 71, 87, .3);
  }

  .live-tag-count {
    font-size: .65rem;
    font-weight: 700;
    color: rgba(255, 255, 255, .5);
  }

  /* ── SHARED KEYFRAMES ── */
  @keyframes fadeRise {
    to {
      opacity: 1;
      transform: translateY(0) scale(1);
    }
  }

  @keyframes fadeIn {
    to {
      opacity: 1;
    }
  }

  /* ═══════════════════════════════════════════════════
   SCROLL PARALLAX — JS handles transforms
═══════════════════════════════════════════════════ */
  .intro-content {
    will-change: transform, opacity;
  }

  .intro-video {
    will-change: transform;
  }

  /* ═══════════════════════════════════════════════════
   RESPONSIVE
═══════════════════════════════════════════════════ */
  @media (max-width:768px) {
    #intro-section {
      position: relative;
      width: 100vw;
      height: 75vh;
      min-height: 600px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      perspective: 1200px;
    }

    .float-badge {
      display: none;
    }

    .intro-stats {
      gap: 7px;
    }

    .stat-pill {
      padding: 7px 13px;
    }

    .intro-ctas {
      gap: 10px;
    }

    .corner-deco {
      width: 36px;
      height: 36px;
    }

    .signal-rings {
      display: none;
    }
  }

  @media (max-width:480px) {
    .intro-headline {
      letter-spacing: -.03em;
    }

    .cta-primary,
    .cta-secondary {
      width: 100%;
      justify-content: center;
    }

    .intro-ctas {
      flex-direction: column;
      align-items: center;
    }
  }

  /* ── VIDEO MUTE BUTTON ── */
  .vid-mute-btn {
    position: absolute;
    bottom: clamp(60px, 10vh, 90px);
    right: clamp(16px, 3vw, 32px);
    z-index: 14;
    width: 38px;
    height: 38px;
    border-radius: 50%;
    background: rgba(255, 255, 255, .08);
    border: 1px solid rgba(255, 255, 255, .15);
    backdrop-filter: blur(10px);
    color: rgba(255, 255, 255, .6);
    font-size: .8rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all .25s;
    opacity: 0;
    animation: fadeIn .6s ease 2.5s forwards;
  }

  .vid-mute-btn:hover {
    background: rgba(255, 255, 255, .18);
    color: #fff;
    border-color: rgba(255, 255, 255, .3);
  }

  /* ── SCAN LINE ANIMATED ── */
  .scan-sweep {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, transparent 0%, rgba(75, 47, 191, .4) 50%, transparent 100%);
    z-index: 4;
    animation: scanSweep 6s linear infinite;
    pointer-events: none;
    opacity: .5;
  }

  @keyframes scanSweep {
    0% {
      top: -4px
    }

    100% {
      top: 100%
    }
  }

  /* ── HORIZONTAL ACCENT LINES ── */
  .h-line {
    position: absolute;
    left: 0;
    right: 0;
    height: 1px;
    pointer-events: none;
    z-index: 4;
  }

  .h-line.top {
    top: clamp(70px, 12vh, 110px);
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, .04) 30%, rgba(255, 255, 255, .08) 50%, rgba(255, 255, 255, .04) 70%, transparent);
  }

  .h-line.bottom {
    bottom: clamp(70px, 12vh, 110px);
    background: linear-gradient(90deg, transparent, rgba(232, 184, 64, .06) 30%, rgba(232, 184, 64, .12) 50%, rgba(232, 184, 64, .06) 70%, transparent);
  }

  /* ── BROADCAST CHANNEL INDICATOR ── */
  .channel-tag {
    position: absolute;
    top: clamp(16px, 3vh, 28px);
    left: clamp(16px, 3vw, 32px);
    z-index: 15;
    display: flex;
    align-items: center;
    gap: 9px;
    opacity: 0;
    animation: fadeIn .7s var(--ease-out) 2.1s forwards;
  }

  .ct-logo {
    width: 36px;
    height: 36px;
    border-radius: 9px;
    background: linear-gradient(135deg, var(--violet), var(--v2));
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 14px rgba(75, 47, 191, .4);
  }

  .ct-logo svg {
    width: 20px;
    height: 20px;
    fill: #fff;
  }


  .ct-name {
    font-family: 'Cinzel', serif;
    font-size: .7rem;
    font-weight: 700;
    color: rgba(255, 255, 255, .85);
    letter-spacing: .08em;
    line-height: 1.1;
  }

  .ct-sub {
    font-size: .58rem;
    color: rgba(255, 255, 255, .35);
    font-weight: 600;
    letter-spacing: .06em;
  }
</style>


<!-- ═══════════════════════════════════════════════════
     INTRO SECTION — INSERT BEFORE <navbar> OR AT TOP
═══════════════════════════════════════════════════ -->
<section id="intro-section">

  <!-- VIDEO BACKGROUND -->
  <div class="intro-video-wrap">
    <!--
      Replace the src with your actual broadcast footage video.
      Recommended: landscape church broadcast, aerial city footage,
      satellite dish footage, or LTM highlights reel.
      For best quality: MP4 H.264, 1920×1080, 15–30fps, <15MB
    -->
    <video class="intro-video" id="introVideo" autoplay muted loop playsinline preload="auto" poster="">
      <!-- Primary source — replace with your actual video URL -->
      <source src="about.mp4" type="video/mp4">
      <!-- WebM fallback -->
      <source src="assets/videos/ltm-hero-reel.webm" type="video/webm">
      <!-- If no video loads, the CSS fallback gradient shows -->
    </video>
    <!-- Animated gradient fallback (always behind video) -->
    <div class="intro-video-fallback" id="videoFallback"></div>
  </div>

  <!-- OVERLAYS -->
  <div class="intro-overlay-base"></div>
  <div class="intro-overlay-vignette"></div>
  <div class="intro-grain"></div>
  <div class="intro-grid"></div>
  <div class="center-glow"></div>
  <div class="light-sweep"></div>
  <div class="scan-sweep"></div>

  <!-- Signal rings (3D depth rings behind content) -->
  <div class="signal-rings">
    <div class="signal-ring"></div>
    <div class="signal-ring"></div>
    <div class="signal-ring"></div>
    <div class="signal-ring"></div>
    <div class="signal-ring"></div>
  </div>

  <!-- Particles (injected by JS) -->
  <div class="particle-field" id="particleField"></div>

  <!-- Cinematic bars -->
  <div class="intro-bar-top"></div>
  <div class="intro-bar-bottom"></div>
  <div class="h-line top"></div>
  <div class="h-line bottom"></div>

  <!-- Corner decorations -->
  <div class="corner-deco tl"></div>
  <div class="corner-deco tr"></div>
  <div class="corner-deco bl"></div>
  <div class="corner-deco br"></div>

  <!-- Channel tag (top left) -->
  <!-- <div class="channel-tag">
    <div class="ct-logo">
      <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="8" fill="none" stroke="rgba(255,255,255,.5)" stroke-width="1.2" />
        <circle cx="10" cy="10" r="3.5" fill="rgba(232,184,64,.9)" />
        <line x1="10" y1="2" x2="10" y2="5.5" stroke="rgba(255,255,255,.6)" stroke-width="1" />
        <line x1="10" y1="14.5" x2="10" y2="18" stroke="rgba(255,255,255,.6)" stroke-width="1" />
        <line x1="2" y1="10" x2="5.5" y2="10" stroke="rgba(255,255,255,.6)" stroke-width="1" />
        <line x1="14.5" y1="10" x2="18" y2="10" stroke="rgba(255,255,255,.6)" stroke-width="1" />
      </svg>
    </div>
    <div class="ct-text">
      <div class="ct-name">Loveworld TV</div>
      <div class="ct-sub">A Ministry of Pastor Chris</div>
    </div>
  </div> -->

  <!-- Live indicator (top right) -->
  <!-- <div class="intro-live-tag">
    <div class="live-tag-dot"></div>
    <div class="live-tag-text">Live Now</div>
    <div class="live-tag-sep"></div>
    <div class="live-tag-count" id="liveCount">1.2M watching</div>
  </div> -->

  <!-- Video mute toggle -->
  <button class="vid-mute-btn" id="muteBtn" onclick="toggleMute()" title="Toggle sound">
    <i class="fas fa-volume-mute" id="muteIcon"></i>
  </button>

  <!-- Floating badges (desktop only) -->
  <!-- <div class="float-badge fb-left">
    <div class="fb-icon">📡</div>
    <div>
      <div class="fb-num">465+</div>
      <div class="fb-label">TV Stations</div>
    </div>
  </div>
  <div class="float-badge fb-right">
    <div class="fb-icon">🌍</div>
    <div>
      <div class="fb-num">180+</div>
      <div class="fb-label">Nations</div>
    </div>
  </div> -->

  <!-- ── MAIN CONTENT ── -->
  <div class="intro-content" id="introContent">

    <!-- Top badge -->
    <div class="intro-badge">
      <div class="badge-dot"></div>
      <div class="badge-text">2026 — Year of Manifestation</div>

    </div>

    <!-- Ministry name -->
    <div class="intro-ministry">Loveworld Television Ministry</div>

    <!-- Main headline — staggered lines -->
    <div class="intro-headline-wrap" aria-label="Networking Every Home With Divine Presence">
      <span class="intro-headline">Networking Every <em class="gold-word" style="font-style:normal">Home</em></span>
      <span class="intro-headline"><span class="stroke-word">With</span> Divine <em class="gold-word"
          style="font-style:normal">Presence</em></span>
    </div>

    <!-- Rule -->
    <div class="intro-rule-wrap">
      <div class="intro-rule-line"></div>
      <div class="intro-rule-icon"><i class="fas fa-satellite-dish"></i></div>
      <div class="intro-rule-line right"></div>
    </div>

    <!-- Subheadline -->
    <!-- <p class="intro-sub">
      A special ministry of <strong>Pastor Chris Oyakhilome</strong>,
      armed with the mandate of taking the
      <strong>Gospel to every nation, city, town and village</strong>
      — through the power of television.
    </p> -->

    <!-- Stat pills -->
    <!-- <div class="intro-stats">
      <div class="stat-pill">
        <div class="sp-num">465<span style="font-size:.7em;color:rgba(232,184,64,.7)">+</span></div>
        <div class="sp-sep"></div>
        <div class="sp-label">TV Stations</div>
      </div>
      <div class="stat-pill">
        <div class="sp-num">180<span style="font-size:.7em;color:rgba(232,184,64,.7)">+</span></div>
        <div class="sp-sep"></div>
        <div class="sp-label">Nations</div>
      </div>
      <div class="stat-pill">
        <div class="sp-num">1<span style="font-size:.7em;color:rgba(232,184,64,.7)">B+</span></div>
        <div class="sp-sep"></div>
        <div class="sp-label">Lives Reached</div>
      </div>
      <div class="stat-pill">
        <div class="sp-num">8,123</div>
        <div class="sp-sep"></div>
        <div class="sp-label">Languages</div>
      </div>
      <div class="stat-pill">
        <div class="sp-num">24<span style="font-size:.7em;color:rgba(232,184,64,.7)">/7</span></div>
        <div class="sp-sep"></div>
        <div class="sp-label">Broadcasting</div>
      </div>
    </div> -->

    <!-- CTAs -->
    <div class="intro-ctas">
      <a href="live_tv.php" class="cta-primary">
        <i class="fas fa-play"></i> Watch Live TV
      </a>

      <a href="give.php" class="cta-secondary" style="border-color:rgba(232,184,64,.25);color:var(--gold)">
        <i class="fas fa-heart"></i> Partner With LTM
      </a>
    </div>

  </div><!-- /intro-content -->

  <!-- Scroll indicator -->
  <div class="scroll-indicator">
    <div class="scroll-indicator-text">Scroll to explore</div>
    <div class="scroll-mouse">
      <div class="scroll-wheel"></div>
    </div>
    <i class="fas fa-chevron-down scroll-arrow"></i>
  </div>

  <!-- Smooth transition gradient out to hero -->
  <!-- <div class="intro-transition-out"></div> -->

</section>
<!-- ═══════════════════════════════════════════════════
     END INTRO SECTION — YOUR HERO SECTION FOLLOWS
═══════════════════════════════════════════════════ -->



<script>
  /* ═══════════════════════════════════════════════════
   INTRO SECTION JAVASCRIPT
═══════════════════════════════════════════════════ */

  // ── VIDEO HANDLING ──
  const video = document.getElementById('introVideo');
  const fallback = document.getElementById('videoFallback');
  const section = document.getElementById('intro-section');

  // Detect if video loaded
  video.addEventListener('canplay', () => {
    section.classList.add('loaded');
    fallback.style.opacity = '0';
    fallback.style.transition = 'opacity 1.2s ease';
  });
  video.addEventListener('error', () => {
    // Video failed — keep the animated fallback gradient
    fallback.style.opacity = '1';
    animateFallbackGradient();
  });
  // If video hasn't loaded after 2s, animate fallback
  setTimeout(() => {
    if (video.readyState < 2) animateFallbackGradient();
  }, 2000);

  function animateFallbackGradient() {
    section.classList.add('loaded'); // Still trigger zoom-out on bg
    let hue = 0;
    setInterval(() => {
      hue = (hue + .3) % 360;
      fallback.style.background = `
      radial-gradient(ellipse at 20% 30%, hsla(${hue+220},70%,30%,.55) 0%, transparent 55%),
      radial-gradient(ellipse at 80% 70%, hsla(${hue+240},60%,15%,.8) 0%, transparent 55%),
      radial-gradient(ellipse at 60% 20%, hsla(${hue+200},60%,25%,.3) 0%, transparent 45%),
      linear-gradient(145deg, #060820 0%, #1b1f4a 35%, #0a0c24 65%, #050816 100%)
    `;
    }, 50);
  }

  // ── MUTE TOGGLE ──
  let muted = true;

  function toggleMute() {
    muted = !muted;
    video.muted = muted;
    document.getElementById('muteIcon').className = muted ? 'fas fa-volume-mute' : 'fas fa-volume-up';
  }

  // ── LIVE VIEWER COUNT ──
  let viewers = 1247000;
  const liveCountEl = document.getElementById('liveCount');

  function formatViewers(n) {
    if (n >= 1000000) return (n / 1000000).toFixed(1) + 'M watching';
    if (n >= 1000) return (n / 1000).toFixed(1) + 'K watching';
    return n + ' watching';
  }
  setInterval(() => {
    viewers += Math.floor(Math.random() * 120 - 35);
    if (viewers < 900000) viewers = 900000;
    liveCountEl.textContent = formatViewers(viewers);
  }, 3500);

  // ── PARTICLES ──
  (function createParticles() {
    const field = document.getElementById('particleField');
    const COLORS = [
      'rgba(75,47,191,',
      'rgba(232,184,64,',
      'rgba(107,79,216,',
      'rgba(255,255,255,',
      'rgba(232,184,64,',
    ];
    for (let i = 0; i < 45; i++) {
      const p = document.createElement('div');
      p.className = 'particle';
      const size = Math.random() * 3.5 + 1;
      const color = COLORS[Math.floor(Math.random() * COLORS.length)];
      const opacity = (Math.random() * .35 + .1).toFixed(2);
      const dur = (Math.random() * 20 + 10).toFixed(1);
      const delay = -(Math.random() * 20).toFixed(1);
      const startX = Math.random() * 100;
      const drift = (Math.random() * 60 - 30).toFixed(0);
      p.style.cssText = `
      width:${size}px; height:${size}px;
      left:${startX}%;
      bottom:${Math.random() * 15 - 5}%;
      background:${color}${opacity});
      box-shadow:0 0 ${size*2}px ${color}${opacity});
      animation:particleRise ${dur}s linear ${delay}s infinite;
    `;
      field.appendChild(p);
    }

    // Inject keyframe
    const style = document.createElement('style');
    style.textContent = Array.from({
      length: 45
    }, (_, i) => `
    .particle:nth-child(${i+1}) {
      --drift:${Math.random()*60-30}px;
    }
  `).join('') + `
    @keyframes particleRise {
      0%   { transform:translateY(0) translateX(0) scale(1); opacity:0; }
      5%   { opacity:1; }
      95%  { opacity:.5; }
      100% { transform:translateY(-100vh) translateX(var(--drift,30px)) scale(.4); opacity:0; }
    }
  `;
    document.head.appendChild(style);
  })();

  // ── SCROLL PARALLAX & EXIT ANIMATION ──
  const introContent = document.getElementById('introContent');
  const introSection = document.getElementById('intro-section');
  const sectionHeight = () => introSection.offsetHeight;

  let ticking = false;

  function onScroll() {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(() => {
      const scrollY = window.scrollY;
      const sh = sectionHeight();
      const progress = Math.min(scrollY / sh, 1); // 0→1 as you scroll through section

      // Content: float up + fade as user scrolls
      const contentY = progress * -80; // moves up 80px
      const contentO = Math.max(0, 1 - progress * 2.2);
      const contentS = Math.max(.85, 1 - progress * .12);
      introContent.style.transform = `translateY(${contentY}px) scale(${contentS})`;
      introContent.style.opacity = contentO;

      // Video: slower parallax (zoom out further as user scrolls)
      const videoScale = 1.0 + progress * .08;
      video.style.transform = `scale(${videoScale})`;

      // Fade entire section after scrolling past it
      if (scrollY > sh * .3) {
        introSection.style.opacity = Math.max(0, 1 - (scrollY - sh * .3) / (sh * .7));
      } else {
        introSection.style.opacity = '1';
      }

      // Badges parallax
      const fbLeft = document.querySelector('.fb-left');
      const fbRight = document.querySelector('.fb-right');
      if (fbLeft) fbLeft.style.transform = `translateX(${progress * -40}px) translateY(${-20 + progress * -30}px)`;
      if (fbRight) fbRight.style.transform = `translateX(${progress * 40}px) translateY(${40 + progress * -30}px)`;

      ticking = false;
    });
  }

  window.addEventListener('scroll', onScroll, {
    passive: true
  });

  // ── MOUSE PARALLAX on content (subtle 3D tilt) ──
  // let mouseX = 0,
  //   mouseY = 0;
  // let contentX = 0,
  //   contentY = 0;
  // introSection.addEventListener('mousemove', (e) => {
  //   const rect = introSection.getBoundingClientRect();
  //   mouseX = ((e.clientX - rect.left) / rect.width - .5) * 2; // -1 to 1
  //   mouseY = ((e.clientY - rect.top) / rect.height - .5) * 2;
  // });

  (function mouseRAF() {
    // Smooth lerp toward mouse
    contentX += (mouseX - contentX) * .055;
    contentY += (mouseY - contentY) * .055;

    const tiltX = contentY * -6; // rotate X axis
    const tiltY = contentX * 6; // rotate Y axis
    const moveX = contentX * 14; // translate
    const moveY = contentY * 8;

    const scrollProgress = Math.min(window.scrollY / sectionHeight(), 1);
    if (scrollProgress < .5) {
      introContent.style.transform = `
      translateY(${scrollProgress * -80}px)
      translateX(${moveX}px)
      scale(${Math.max(.88, 1 - scrollProgress * .12)})
      perspective(1000px)
      rotateX(${tiltX}deg)
      rotateY(${tiltY}deg)
    `;
    }

    // Signal rings counter-parallax
    const rings = document.querySelector('.signal-rings');
    if (rings) {
      rings.style.transform =
        `translate(-50%,-50%) rotateX(72deg) translateX(${contentX * -8}px) translateY(${contentY * -5}px)`;
    }

    // Center glow follows mouse
    const glow = document.querySelector('.center-glow');
    if (glow) {
      glow.style.transform = `translate(calc(-50% + ${contentX * 20}px), calc(-50% + ${contentY * 14}px))`;
    }

    requestAnimationFrame(mouseRAF);
  })();

  // ── SMOOTH SCROLL TO HERO ──
  function smoothScrollToHero(e) {
    e.preventDefault();
    const target = document.getElementById('hero') || document.querySelector('#hero-section') || document.body;
    target.scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    });
  }

  // ── STAT PILLS 3D hover lift ──
  document.querySelectorAll('.stat-pill').forEach(pill => {
    pill.addEventListener('mousemove', (e) => {
      const rect = pill.getBoundingClientRect();
      const cx = e.clientX - rect.left - rect.width / 2;
      const cy = e.clientY - rect.top - rect.height / 2;
      pill.style.transform = `translateY(-4px) rotateX(${-cy*.3}deg) rotateY(${cx*.4}deg) scale(1.05)`;
    });
    pill.addEventListener('mouseleave', () => {
      pill.style.transform = '';
      pill.style.transition = 'all .5s var(--ease-out)';
    });
    pill.addEventListener('mouseenter', () => {
      pill.style.transition = 'transform .15s ease';
    });
  });

  // ── ANIMATED COUNTER for stats ──
  function animateCounter(el, target, suffix = '') {
    const dur = 2000;
    const step = 16;
    const inc = target / (dur / step);
    let current = 0;
    const fmt = n => n >= 1000 ? (n / 1000).toFixed(n >= 1000000 ? 1 : 0) + (n >= 1000000 ? 'M' : 'K') : Math.floor(n)
      .toLocaleString();
    const timer = setInterval(() => {
      current = Math.min(current + inc, target);
      el.textContent = fmt(current) + suffix;
      if (current >= target) {
        el.textContent = fmt(target) + suffix;
        clearInterval(timer);
      }
    }, step);
  }

  // Trigger counters when badges enter view
  const statObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const nums = entry.target.querySelectorAll('.sp-num');
        nums.forEach(el => {
          const raw = el.textContent.trim();
          if (raw.includes('465')) animateCounter(el, 465, '+');
          else if (raw.includes('180')) animateCounter(el, 180, '+');
          else if (raw.includes('1B')) {
            /* skip */
          } else if (raw.includes('8,123')) animateCounter(el, 8123, '');
        });
        statObs.disconnect();
      }
    });
  }, {
    threshold: .5
  });
  const statsEl = document.querySelector('.intro-stats');
  if (statsEl) statObs.observe(statsEl);

  // ── SECTION LOADED trigger ──
  window.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => section.classList.add('loaded'), 100);
  });
</script>
</body>

</html>