<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   IMÁGENES — Pega aquí las URLs de tus medios de WordPress
   Media Library → click imagen → copiar URL → pegar abajo
   ════════════════════════════════════════════════════════════ */

// ── S01 HERO ─────────────────────────────────────────────────
$hero_poster_img          = '/wp-content/uploads/2026/06/Estampados_1_ARRC-scaled.png';   // Imagen fallback (si no hay video)
$hero_video_mp4           = '';   // Video drone .mp4

// ── S04 ABOUT ────────────────────────────────────────────────
$about_owner_img          = '';   // Foto de Antonio en el techo

// ── S05 SERVICES ─────────────────────────────────────────────
$service_installation_img = '/wp-content/uploads/2026/06/Roof_Installation_ARRC-scaled.jpg';   // Roof Installation
$service_repair_img       = '/wp-content/uploads/2026/06/Roof_Repair_ARRC-scaled.jpg';   // Roof Repair
$service_emergency_img    = '/wp-content/uploads/2026/06/Emergency_Roofing_ARRC-scaled.jpg';   // Emergency Roofing
$service_maintenance_img  = '/wp-content/uploads/2026/06/Roof_Maintenance_ARRC-scaled.jpg';   // Roof Maintenance

// ── S07 PROCESS ──────────────────────────────────────────────
$process_inspection_img   = '';   // Paso 01 — Inspección
$process_estimate_img     = '';   // Paso 02 — Estimado
$process_execution_img    = '';   // Paso 03 — Ejecución
$process_walkthrough_img  = '';   // Paso 04 — Walkthrough

// ── S08 PORTFOLIO ─────────────────────────────────────────────
$portfolio_1_img          = '';   // Hood River, OR
$portfolio_2_img          = '';   // The Dalles, OR
$portfolio_3_img          = '';   // Dufur, OR
$portfolio_4_img          = '';   // The Dalles, OR (comercial)
$portfolio_5_img          = '';   // Mosier, OR
$portfolio_6_img          = '';   // White Salmon, WA

// ── BACKGROUNDS ──────────────────────────────────────────────
$why_bg_img               = '';   // S06 Why Us — estampado/textura de fondo
$final_cta_bg_img         = '';   // S12 Final CTA — estampado/textura de fondo

/* ══════════════════════════════════════════════════════════════ */

/* ─── PALETTE ────────────────────────────────────────────────────
   Midnight Slate : #0f2322
   Ember Red      : #e8253a
   Deep Clay      : #8b0a1a
   Harbor Green   : #6a9a9a
   Mist Aqua      : #c8e8e8
──────────────────────────────────────────────────────────────── */
?>

<style>
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Light.woff"); ?>') format('woff');
    font-weight: 300;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Light-Italic.woff"); ?>') format('woff');
    font-weight: 300;
    font-style: italic;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Regular.woff"); ?>') format('woff');
    font-weight: 400;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Regular-Italic.woff"); ?>') format('woff');
    font-weight: 400;
    font-style: italic;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Medium.woff"); ?>') format('woff');
    font-weight: 500;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Medium-Italic.woff"); ?>') format('woff');
    font-weight: 500;
    font-style: italic;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Bold.woff"); ?>') format('woff');
    font-weight: 700;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Bold-Italic.woff"); ?>') format('woff');
    font-weight: 700;
    font-style: italic;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Black.woff"); ?>') format('woff');
    font-weight: 900;
    font-style: normal;
    font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Black-Italic.woff"); ?>') format('woff');
    font-weight: 900;
    font-style: italic;
    font-display: swap;
  }

  :root {
    --slate:   #0f2322;
    --red:     #e8253a;
    --clay:    #8b0a1a;
    --aqua:    #6a9a9a;
    --mist:    #c8e8e8;
    --light:   #f5f6f5;
    --white:   #ffffff;
    --text:    #1a2e2d;
    --muted:   #667;
  }

  .ar-home * { box-sizing: border-box; }
  .ar-home { font-family: 'GT America', sans-serif; color: var(--text); }
  .ar-home h1, .ar-home h2, .ar-home h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.15; }
  .ar-home .eyebrow {
    font-family: 'GT America', sans-serif;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--aqua);
    margin-bottom: 14px;
    display: block;
  }
  .ar-home .section-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
  }
  .ar-home .btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 14px 32px;
    background: var(--red);
    color: #fff;
    font-family: 'GT America', sans-serif;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 6px;
    transition: background .2s, transform .15s;
  }
  .ar-home .btn-primary:hover { background: var(--clay); transform: translateY(-2px); }
  .ar-home .btn-ghost {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 32px;
    background: transparent;
    color: #fff;
    font-family: 'GT America', sans-serif;
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    border-radius: 6px;
    border: 2px solid rgba(255,255,255,0.7);
    transition: border-color .2s, background .2s;
  }
  .ar-home .btn-ghost:hover { background: rgba(255,255,255,0.1); border-color: #fff; }

  /* ── S01 HERO ──────────────────────────────────────────────── */
  .ar-hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    align-items: center;
    overflow: hidden;
  }
  .ar-hero__video-wrap {
    position: absolute; inset: 0;
    z-index: 0;
  }
  .ar-hero__video-wrap video,
  .ar-hero__video-wrap img {
    width: 100%; height: 100%;
    object-fit: cover;
    object-position: center;
  }
  .ar-hero__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(
      135deg,
      rgba(15,35,34,0.82) 0%,
      rgba(15,35,34,0.60) 60%,
      rgba(15,35,34,0.45) 100%
    );
    z-index: 1;
  }
  .ar-hero__content {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 100px 24px 60px;
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 56px;
    align-items: stretch;
  }
  .ar-hero__left { display: flex; flex-direction: column; justify-content: space-between; }
  .ar-hero__right {
    background: rgba(10, 28, 27, 0.75);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 14px;
    padding: 36px 32px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .ar-hero__right h3 {
    font-family: 'GT America', sans-serif;
    font-size: 16px;
    font-weight: 700;
    color: #fff;
    margin: 0 0 20px;
  }
  .ar-hero__tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(106,154,154,0.2);
    border: 1px solid rgba(200,232,232,0.3);
    color: var(--mist);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 7px 16px;
    border-radius: 100px;
    margin-bottom: 20px;
  }
  .ar-hero__tag::before {
    content: '';
    width: 6px; height: 6px;
    background: var(--aqua);
    border-radius: 50%;
  }
  .ar-hero h1 {
    font-family: 'GT America', sans-serif;
    font-size: clamp(28px, 3.6vw, 52px);
    font-weight: 900;
    color: #fff;
    max-width: 600px;
    margin: 0 0 20px;
    line-height: 1.08;
  }
  .ar-hero h1 em {
    font-style: italic;
    color: var(--mist);
  }
  .ar-hero__sub {
    font-size: clamp(14px, 1.4vw, 16px);
    color: rgba(255,255,255,0.75);
    max-width: 500px;
    line-height: 1.7;
    margin: 0 0 28px;
    font-weight: 300;
  }
  .ar-hero__ctas {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    align-items: center;
  }
  .ar-hero__phone-label {
    font-size: 12px;
    color: rgba(255,255,255,0.5);
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-top: 24px;
  }
  .ar-hero__phone-label a {
    color: var(--mist);
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
  }
  .ar-hero__scroll {
    position: absolute;
    bottom: 32px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 6px;
    color: rgba(255,255,255,0.4);
    font-size: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;
  }
  .ar-hero__scroll-line {
    width: 1px;
    height: 40px;
    background: linear-gradient(to bottom, rgba(255,255,255,0.4), transparent);
    animation: scrollPulse 2s ease-in-out infinite;
  }
  @keyframes scrollPulse {
    0%, 100% { opacity: 0.4; transform: scaleY(1); }
    50% { opacity: 1; transform: scaleY(1.2); }
  }

  /* ── S02 TRUST BAR ─────────────────────────────────────────── */
  .ar-trustbar {
    background: var(--slate);
    padding: 18px 0;
    overflow: hidden;
    border-top: 2px solid var(--red);
  }
  .ar-trustbar__track {
    display: flex;
    gap: 0;
    width: max-content;
    animation: marquee 28s linear infinite;
  }
  .ar-trustbar__track:hover { animation-play-state: paused; }
  @keyframes marquee {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
  }
  .ar-trustbar__item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 0 36px;
    white-space: nowrap;
    color: rgba(255,255,255,0.85);
    font-size: 13px;
    font-weight: 500;
    letter-spacing: 0.5px;
  }
  .ar-trustbar__dot {
    width: 5px; height: 5px;
    background: var(--red);
    border-radius: 50%;
    flex-shrink: 0;
  }

  /* ── S03 PAIN POINTS ───────────────────────────────────────── */
  .ar-pain {
    background: var(--light);
    padding: 100px 0;
  }
  .ar-pain__header {
    text-align: center;
    margin-bottom: 60px;
  }
  .ar-pain__header h2 {
    font-size: clamp(30px, 3.5vw, 46px);
    color: var(--slate);
    margin: 0;
  }
  .ar-pain__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
  }
  .ar-pain__card {
    background: #fff;
    border-radius: 12px;
    padding: 40px 36px;
    box-shadow: 0 2px 20px rgba(15,35,34,0.07);
    border-top: 3px solid transparent;
    transition: border-color .25s, transform .25s, box-shadow .25s;
  }
  .ar-pain__card:hover {
    border-color: var(--red);
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(15,35,34,0.12);
  }
  .ar-pain__num {
    font-family: 'GT America', sans-serif;
    font-size: 52px;
    color: var(--red);
    line-height: 1;
    margin-bottom: 16px;
    opacity: 0.9;
  }
  .ar-pain__card h3 {
    font-size: 19px;
    color: var(--slate);
    margin: 0 0 14px;
    font-weight: 600;
  }
  .ar-pain__card p {
    font-size: 15px;
    line-height: 1.75;
    color: #556;
    margin: 0;
  }

  /* ── S04 ABOUT ─────────────────────────────────────────────── */
  .ar-about {
    background: #fff;
    padding: 100px 0;
  }
  .ar-about__inner {
    display: grid;
    grid-template-columns: 1fr 400px;
    gap: 72px;
    align-items: center;
  }
  .ar-about h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: var(--slate);
    margin: 0 0 24px;
  }
  .ar-about p {
    font-size: 15.5px;
    line-height: 1.8;
    color: #556;
    margin: 0 0 18px;
  }
  .ar-about__stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin: 40px 0;
    padding: 32px 0;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
  }
  .ar-about__stat-num {
    font-family: 'GT America', sans-serif;
    font-size: 40px;
    color: var(--red);
    line-height: 1;
    display: block;
  }
  .ar-about__stat-label {
    font-size: 12px;
    color: #889;
    letter-spacing: 0.5px;
    display: block;
    margin-top: 4px;
  }
  .ar-about__img {
    position: relative;
  }
  .ar-about__img img {
    width: 100%;
    height: 520px;
    object-fit: cover;
    border-radius: 12px;
    display: block;
  }
  .ar-about__img-badge {
    position: absolute;
    bottom: -20px;
    left: -20px;
    background: var(--red);
    color: #fff;
    padding: 20px 24px;
    border-radius: 10px;
    font-family: 'GT America', sans-serif;
    font-size: 13px;
    letter-spacing: 2px;
    line-height: 1.6;
    text-align: center;
    box-shadow: 0 8px 24px rgba(232,37,58,0.35);
  }
  .ar-about__img-badge strong {
    font-family: 'GT America', sans-serif;
    font-size: 36px;
    display: block;
    letter-spacing: 0;
  }

  /* ── S05 SERVICES ──────────────────────────────────────────── */
  .ar-services {
    background: var(--light);
    padding: 100px 0;
  }
  .ar-services__header {
    text-align: center;
    margin-bottom: 56px;
  }
  .ar-services__header h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: var(--slate);
    margin: 0;
  }
  .ar-services__grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 28px;
  }
  .ar-services__card {
    background: #fff;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 20px rgba(15,35,34,0.07);
    transition: transform .25s, box-shadow .25s;
    display: flex;
    flex-direction: column;
  }
  .ar-services__card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 48px rgba(15,35,34,0.13);
  }
  .ar-services__img {
    height: 220px;
    background: var(--slate);
    overflow: hidden;
    position: relative;
  }
  .ar-services__img img {
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform .5s ease;
  }
  .ar-services__card:hover .ar-services__img img { transform: scale(1.05); }
  .ar-services__img-placeholder {
    width: 100%; height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
  }
  .ar-services__body {
    padding: 32px;
    flex: 1;
    display: flex;
    flex-direction: column;
  }
  .ar-services__icon {
    width: 44px; height: 44px;
    background: rgba(232,37,58,0.1);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 18px;
    color: var(--red);
  }
  .ar-services__card h3 {
    font-size: 20px;
    color: var(--slate);
    margin: 0 0 12px;
  }
  .ar-services__card p {
    font-size: 14.5px;
    line-height: 1.75;
    color: #667;
    margin: 0 0 20px;
    flex: 1;
  }
  .ar-services__link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--red);
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: gap .2s;
  }
  .ar-services__link:hover { gap: 10px; }

  /* ── S06 WHY US ────────────────────────────────────────────── */
  .ar-why {
    background: var(--slate);
    padding: 100px 0;
    position: relative;
  }
  .ar-why__header {
    text-align: center;
    margin-bottom: 64px;
  }
  .ar-why__header h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: #fff;
    margin: 0;
  }
  .ar-why__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
    background: rgba(255,255,255,0.05);
    border-radius: 12px;
    overflow: hidden;
  }
  .ar-why__item {
    padding: 44px 36px;
    background: var(--slate);
    transition: background .25s;
    border: 1px solid rgba(255,255,255,0.05);
  }
  .ar-why__item:hover { background: #162e2d; }
  .ar-why__icon {
    width: 48px; height: 48px;
    border-radius: 10px;
    background: rgba(106,154,154,0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    color: var(--aqua);
  }
  .ar-why__item h3 {
    font-size: 17px;
    color: #fff;
    margin: 0 0 12px;
    font-family: 'GT America', sans-serif;
    font-weight: 600;
  }
  .ar-why__item p {
    font-size: 14px;
    line-height: 1.75;
    color: rgba(255,255,255,0.55);
    margin: 0;
  }
  .ar-why__cta {
    text-align: center;
    margin-top: 56px;
    padding-top: 56px;
    border-top: 1px solid rgba(255,255,255,0.08);
  }
  .ar-why__cta p {
    color: rgba(255,255,255,0.6);
    margin-bottom: 24px;
    font-size: 16px;
  }

  /* ── S07 PROCESS ───────────────────────────────────────────── */
  .ar-process {
    background: #fff;
    padding: 100px 0;
  }
  .ar-process__header {
    text-align: center;
    margin-bottom: 72px;
  }
  .ar-process__header h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: var(--slate);
    margin: 0;
  }
  .ar-process__step {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 72px;
    align-items: center;
    margin-bottom: 80px;
  }
  .ar-process__step:last-of-type { margin-bottom: 0; }
  .ar-process__step--reverse .ar-process__text { order: 2; }
  .ar-process__step--reverse .ar-process__visual { order: 1; }
  .ar-process__num {
    font-family: 'GT America', sans-serif;
    font-size: 80px;
    color: var(--red);
    opacity: 0.15;
    line-height: 1;
    margin-bottom: -16px;
  }
  .ar-process__text h3 {
    font-size: 24px;
    color: var(--slate);
    margin: 0 0 16px;
  }
  .ar-process__text p {
    font-size: 15px;
    line-height: 1.8;
    color: #667;
    margin: 0;
  }
  .ar-process__visual {
    border-radius: 12px;
    overflow: hidden;
    height: 320px;
    background: linear-gradient(135deg, #e8f5f5, #d0e8e8);
    position: relative;
  }
  .ar-process__visual img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
  }
  .ar-process__visual-placeholder {
    width: 100%; height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--aqua);
    opacity: 0.4;
  }
  .ar-process__cta {
    text-align: center;
    margin-top: 72px;
    padding: 48px;
    background: var(--light);
    border-radius: 12px;
  }
  .ar-process__cta p { color: #667; margin-bottom: 24px; font-size: 16px; }

  /* ── S08 PORTFOLIO ─────────────────────────────────────────── */
  .ar-portfolio {
    background: var(--slate);
    padding: 100px 0;
  }
  .ar-portfolio__header {
    text-align: center;
    margin-bottom: 56px;
  }
  .ar-portfolio__header h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: #fff;
    margin: 0;
  }
  .ar-portfolio__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
  }
  .ar-portfolio__card {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    aspect-ratio: 4/3;
    background: #162e2d;
    cursor: pointer;
  }
  .ar-portfolio__card img {
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform .5s ease;
  }
  .ar-portfolio__card:hover img { transform: scale(1.08); }
  .ar-portfolio__card-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(15,35,34,0.92) 0%, transparent 55%);
    display: flex;
    align-items: flex-end;
    padding: 24px;
    opacity: 0;
    transition: opacity .3s ease;
  }
  .ar-portfolio__card:hover .ar-portfolio__card-overlay { opacity: 1; }
  .ar-portfolio__card-info { color: #fff; }
  .ar-portfolio__card-type {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: var(--mist);
    display: block;
    margin-bottom: 4px;
  }
  .ar-portfolio__card-location {
    font-family: 'GT America', sans-serif;
    font-size: 17px;
    font-weight: 600;
  }
  .ar-portfolio__placeholder {
    width: 100%; height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
    color: rgba(255,255,255,0.2);
    font-size: 13px;
  }
  .ar-portfolio__cta {
    text-align: center;
    margin-top: 48px;
  }

  /* ── S09 SERVICE AREAS ─────────────────────────────────────── */
  .ar-areas {
    background: var(--light);
    padding: 100px 0;
  }
  .ar-areas__header {
    text-align: center;
    margin-bottom: 56px;
  }
  .ar-areas__header h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: var(--slate);
    margin: 0;
  }
  .ar-areas__layout {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 56px;
    align-items: start;
  }
  .ar-areas__col h4 {
    font-family: 'GT America', sans-serif;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--aqua);
    margin: 0 0 20px;
    display: flex;
    align-items: center;
    gap: 8px;
  }
  .ar-areas__col h4::after {
    content: '';
    flex: 1;
    height: 1px;
    background: var(--mist);
  }
  .ar-areas__tags {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }
  .ar-areas__tag {
    display: inline-block;
    padding: 7px 16px;
    background: #fff;
    border: 1px solid #dde8e8;
    border-radius: 100px;
    font-size: 13.5px;
    color: var(--slate);
    text-decoration: none;
    font-weight: 500;
    transition: background .2s, border-color .2s, color .2s;
  }
  .ar-areas__tag:hover {
    background: var(--slate);
    border-color: var(--slate);
    color: #fff;
  }
  .ar-areas__copy {
    margin-top: 56px;
    padding: 40px 48px;
    background: var(--slate);
    border-radius: 12px;
    color: rgba(255,255,255,0.75);
    font-size: 15.5px;
    line-height: 1.8;
    position: relative;
    overflow: hidden;
  }
  .ar-areas__copy::before {
    content: '"';
    font-family: 'GT America', sans-serif;
    font-size: 180px;
    color: rgba(106,154,154,0.1);
    position: absolute;
    top: -20px;
    left: 20px;
    line-height: 1;
  }
  .ar-areas__copy p { margin: 0; position: relative; z-index: 1; }

  /* ── S10 REVIEWS ───────────────────────────────────────────── */
  .ar-reviews {
    background: #fff;
    padding: 100px 0;
  }
  .ar-reviews__header {
    text-align: center;
    margin-bottom: 16px;
  }
  .ar-reviews__header h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: var(--slate);
    margin: 0;
  }
  .ar-reviews__badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #fff8f0;
    border: 1px solid #ffe0b2;
    border-radius: 100px;
    padding: 8px 20px;
    margin: 20px auto 48px;
    font-size: 14px;
    font-weight: 600;
    color: #e65100;
  }
  .ar-reviews__stars { color: #f4a600; letter-spacing: 2px; }
  .ar-reviews__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
  .ar-reviews__card {
    background: var(--light);
    border-radius: 12px;
    padding: 36px 32px;
    position: relative;
    transition: transform .25s, box-shadow .25s;
  }
  .ar-reviews__card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 36px rgba(15,35,34,0.1);
  }
  .ar-reviews__quote-icon {
    font-family: 'GT America', sans-serif;
    font-size: 64px;
    color: var(--red);
    opacity: 0.2;
    line-height: 0.5;
    display: block;
    margin-bottom: 16px;
  }
  .ar-reviews__stars-sm { color: #f4a600; font-size: 13px; margin-bottom: 14px; }
  .ar-reviews__card p {
    font-size: 14.5px;
    line-height: 1.75;
    color: #556;
    margin: 0 0 20px;
    font-style: italic;
  }
  .ar-reviews__author {
    font-size: 13px;
    font-weight: 700;
    color: var(--slate);
    letter-spacing: 0.3px;
  }
  .ar-reviews__cta { text-align: center; margin-top: 48px; }

  /* ── S11 FAQ ───────────────────────────────────────────────── */
  .ar-faq {
    background: var(--light);
    padding: 100px 0;
  }
  .ar-faq__header {
    text-align: center;
    margin-bottom: 56px;
  }
  .ar-faq__header h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: var(--slate);
    margin: 0;
  }
  .ar-faq__list {
    max-width: 820px;
    margin: 0 auto;
  }
  .ar-faq__item {
    border-bottom: 1px solid #dde8e8;
  }
  .ar-faq__question {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 22px 0;
    background: none;
    border: none;
    cursor: pointer;
    text-align: left;
    gap: 16px;
  }
  .ar-faq__label {
    font-family: 'GT America', sans-serif;
    font-size: 16px;
    font-weight: 600;
    color: var(--slate);
    flex: 1;
    text-align: left;
  }
  .ar-faq__icon {
    width: 28px; height: 28px;
    min-width: 28px;
    max-width: 28px;
    border-radius: 50%;
    background: var(--light);
    border: 1.5px solid #ccd8d8;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    flex-grow: 0;
    color: var(--slate);
    transition: background .2s, border-color .2s, color .2s;
    font-size: 16px;
    font-weight: 400;
    line-height: 1;
  }
  .ar-faq__item.active .ar-faq__icon {
    background: var(--red);
    border-color: var(--red);
    color: #fff;
  }
  .ar-faq__answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height .35s ease;
  }
  .ar-faq__answer p {
    padding-bottom: 24px;
    font-size: 15px;
    line-height: 1.8;
    color: #667;
    margin: 0;
  }

  /* ── S12 FINAL CTA ─────────────────────────────────────────── */
  .ar-final-cta {
    background: var(--slate);
    padding: 100px 0;
    position: relative;
    overflow: hidden;
  }
  .ar-final-cta::before {
    content: '';
    position: absolute;
    top: -100px; right: -100px;
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(106,154,154,0.08) 0%, transparent 70%);
    pointer-events: none;
  }
  .ar-final-cta__inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 72px;
    align-items: start;
  }
  .ar-final-cta__left h2 {
    font-size: clamp(28px, 3vw, 44px);
    color: #fff;
    margin: 0 0 16px;
  }
  .ar-final-cta__left p {
    color: rgba(255,255,255,0.6);
    font-size: 15.5px;
    line-height: 1.8;
    margin: 0 0 36px;
  }
  .ar-final-cta__btns {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
  }
  .ar-final-cta__form {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 14px;
    padding: 40px;
  }
  .ar-final-cta__form h3 {
    font-family: 'GT America', sans-serif;
    font-size: 17px;
    font-weight: 600;
    color: #fff;
    margin: 0 0 24px;
  }
  .ar-form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin-bottom: 14px;
  }
  .ar-form-field {
    display: flex;
    flex-direction: column;
    gap: 6px;
    margin-bottom: 14px;
  }
  .ar-form-field label {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.45);
  }
  .ar-form-field input,
  .ar-form-field select,
  .ar-form-field textarea {
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(255,255,255,0.12);
    border-radius: 7px;
    padding: 11px 14px;
    color: #fff;
    font-family: 'GT America', sans-serif;
    font-size: 14px;
    outline: none;
    transition: border-color .2s;
    width: 100%;
  }
  .ar-form-field input:focus,
  .ar-form-field select:focus,
  .ar-form-field textarea:focus {
    border-color: var(--aqua);
  }
  .ar-form-field input::placeholder,
  .ar-form-field textarea::placeholder { color: rgba(255,255,255,0.3); }
  .ar-form-field select option { background: var(--slate); color: #fff; }
  .ar-form-field textarea { resize: vertical; min-height: 90px; }
  .ar-form-submit {
    width: 100%;
    padding: 14px;
    background: var(--red);
    color: #fff;
    font-family: 'GT America', sans-serif;
    font-size: 15px;
    font-weight: 700;
    border: none;
    border-radius: 7px;
    cursor: pointer;
    transition: background .2s;
    margin-top: 6px;
    letter-spacing: 0.3px;
  }
  .ar-form-submit:hover { background: var(--clay); }

  /* ── RESPONSIVE ────────────────────────────────────────────── */
  @media (max-width: 1024px) {
    .ar-hero__content { grid-template-columns: 1fr; gap: 36px; padding-top: 100px; }
    .ar-hero__right { backdrop-filter: none; -webkit-backdrop-filter: none; }
    .ar-about__inner { grid-template-columns: 1fr; }
    .ar-about__img { display: none; }
    .ar-about__stats { grid-template-columns: repeat(2, 1fr); }
    .ar-process__step { grid-template-columns: 1fr; gap: 32px; }
    .ar-process__step--reverse .ar-process__text { order: 1; }
    .ar-process__step--reverse .ar-process__visual { order: 2; }
    .ar-final-cta__inner { grid-template-columns: 1fr; gap: 40px; }
  }
  @media (max-width: 768px) {
    .ar-pain__grid { grid-template-columns: 1fr; }
    .ar-services__grid { grid-template-columns: 1fr; }
    .ar-why__grid { grid-template-columns: 1fr; }
    .ar-portfolio__grid { grid-template-columns: repeat(2, 1fr); }
    .ar-reviews__grid { grid-template-columns: 1fr; }
    .ar-areas__layout { grid-template-columns: 1fr; gap: 36px; }
    .ar-hero__ctas { flex-direction: column; align-items: flex-start; }
    .ar-form-row { grid-template-columns: 1fr; }
    .ar-final-cta__form { padding: 28px 24px; }
    .ar-about__stats { grid-template-columns: repeat(4,1fr); }
  }
  @media (max-width: 480px) {
    .ar-portfolio__grid { grid-template-columns: 1fr; }
    .ar-about__stats { grid-template-columns: repeat(2,1fr); }
  }
</style>

<div class="ar-home">

  <!-- ═══════════════════════════════════════════════════════════
       S01 — HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-hero">
    <div class="ar-hero__video-wrap">
      <?php
      $hero_video = $hero_video_mp4;
      $hero_poster = $hero_poster_img ?: '/wp-content/uploads/ar-hero-poster.jpg';
      if ( $hero_video ) : ?>
        <video autoplay muted loop playsinline poster="<?= esc_url($hero_poster_img ?: '/wp-content/uploads/ar-hero-poster.jpg') ?>">
          <source src="<?= esc_url($hero_video_mp4) ?>" type="video/mp4">
        </video>
      <?php else : ?>
        <img src="<?= esc_url($hero_poster_img ?: '/wp-content/uploads/ar-hero-poster.jpg') ?>" alt="AR Roofing — Oregon Roofing Experts">
      <?php endif; ?>
    </div>
    <div class="ar-hero__overlay"></div>
    <div class="ar-hero__content">

      <!-- Left: copy -->
      <div class="ar-hero__left">
        <span class="ar-hero__tag">Oregon &amp; Washington Roofing Experts</span>
        <h1>Your Roof Protects<br><em>Everything</em> Underneath It.<br>We Protect Your Roof.</h1>
        <p class="ar-hero__sub">Family-owned roofing company serving 18 cities across Oregon and Washington. Roof installation, repair, emergency services, and maintenance. Licensed, insured, and on your roof within a week.</p>
        <div class="ar-hero__ctas">
          <a href="/contact" class="btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
            Get a Free Inspection
          </a>
          <a href="tel:5416450577" class="btn-ghost">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call 541-645-0577
          </a>
        </div>
        <p class="ar-hero__phone-label">Available 24/7 for emergencies &nbsp;·&nbsp; <a href="tel:5416450577">541-645-0577</a></p>
      </div>

      <!-- Right: form -->
      <div class="ar-hero__right">
        <h3>Get a Free Inspection</h3>
        <div class="ar-form-row">
          <div class="ar-form-field">
            <label for="hero-name">Full Name</label>
            <input type="text" id="hero-name" name="name" placeholder="Your name">
          </div>
          <div class="ar-form-field">
            <label for="hero-phone">Phone</label>
            <input type="tel" id="hero-phone" name="phone" placeholder="(541) 000-0000">
          </div>
        </div>
        <div class="ar-form-field">
          <label for="hero-email">Email</label>
          <input type="email" id="hero-email" name="email" placeholder="you@email.com">
        </div>
        <div class="ar-form-row">
          <div class="ar-form-field">
            <label for="hero-service">Service Needed</label>
            <select id="hero-service" name="service">
              <option value="">Select a service...</option>
              <option>Free Inspection</option>
              <option>Roof Installation</option>
              <option>Roof Repair</option>
              <option>Emergency Roofing</option>
              <option>Roof Maintenance</option>
              <option>Commercial</option>
            </select>
          </div>
          <div class="ar-form-field">
            <label for="hero-city">City</label>
            <input type="text" id="hero-city" name="city" placeholder="Hood River, OR">
          </div>
        </div>
        <div class="ar-form-field" style="flex:1; display:flex; flex-direction:column;">
          <label for="hero-message">Message</label>
          <textarea id="hero-message" name="message" placeholder="Tell us about your roof..." style="flex:1; min-height:72px; resize:none;"></textarea>
        </div>
        <button type="button" class="ar-form-submit">Send Message →</button>
      </div>

    </div>
    <div class="ar-hero__scroll">
      <div class="ar-hero__scroll-line"></div>
      <span>Scroll</span>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S02 — TRUST BAR
  ═══════════════════════════════════════════════════════════ -->
  <div class="ar-trustbar">
    <div class="ar-trustbar__track" aria-hidden="true">
      <?php
      $items = [
        '18+ Years Experience',
        'Licensed &amp; Insured',
        'Dual-State Licensed (OR &amp; WA)',
        '5-Star Google Rated',
        'Residential &amp; Commercial',
        '24/7 Emergency Response',
        'Free Inspections',
        'Family-Owned',
      ];
      // Duplicate 3× for seamless loop
      for ($i = 0; $i < 3; $i++) :
        foreach ($items as $item) : ?>
          <span class="ar-trustbar__item">
            <span class="ar-trustbar__dot"></span>
            <?= $item ?>
          </span>
        <?php endforeach;
      endfor; ?>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════════════════════
       S03 — PAIN POINTS
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-pain">
    <div class="section-inner">
      <div class="ar-pain__header">
        <span class="eyebrow">If any of this sounds familiar</span>
        <h2>Three problems. One solution.</h2>
      </div>
      <div class="ar-pain__grid">
        <?php
        $pain_cards = [
          [
            'num'   => '01',
            'title' => 'You see the damage but don\'t know how serious it is.',
            'body'  => 'A stain on the ceiling. Shingles in the yard after a storm. A gutter full of what looks like sand. You know something\'s not right, but you don\'t know if it\'s a $200 fix or a $15,000 problem.',
          ],
          [
            'num'   => '02',
            'title' => 'You\'ve heard too many contractor horror stories.',
            'body'  => 'The guy who took the deposit and vanished. The crew that left nails all over the driveway. The "emergency roofer" with out-of-state plates who showed up after the storm and did work that failed six months later.',
          ],
          [
            'num'   => '03',
            'title' => 'You don\'t know who to trust with the thing that protects your family.',
            'body'  => 'Your roof isn\'t a cosmetic upgrade. It\'s what stands between your family and Oregon\'s rain, wind, heat, and ice. You need someone who treats that responsibility seriously.',
          ],
        ];
        foreach ($pain_cards as $card) : ?>
          <div class="ar-pain__card">
            <div class="ar-pain__num"><?= $card['num'] ?></div>
            <h3><?= esc_html($card['title']) ?></h3>
            <p><?= esc_html($card['body']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S04 — ABOUT
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-about">
    <div class="section-inner">
      <div class="ar-about__inner">
        <div class="ar-about__copy">
          <span class="eyebrow">About AR Roofing</span>
          <h2>Owner on every roof. Every project. For eighteen years.</h2>
          <p>AR Roofing &amp; Construction is a family-operated roofing company serving 18 cities across Oregon and Washington. For over eighteen years, owner Antonio Robles has personally inspected every roof, supervised every project, and walked every final review with the client.</p>
          <p>We are not a call center. We are not a franchise. We are a local team that lives in the communities we serve. When we say the owner is on your roof, we mean it. Our clients don't get a salesperson — they get the person whose name is on the truck.</p>
          <p>We specialize in residential and commercial roofing: asphalt shingles, metal roofing, and flat roof systems (TPO and PVC). Every project receives the same level of care, transparency, and follow-through.</p>
          <div class="ar-about__stats">
            <?php
            $stats = [
              ['num' => '18+', 'label' => 'Years in Business'],
              ['num' => '18',  'label' => 'Cities Served'],
              ['num' => '5★',  'label' => 'Google Rated'],
              ['num' => '24/7','label' => 'Emergency Response'],
            ];
            foreach ($stats as $s) : ?>
              <div>
                <span class="ar-about__stat-num"><?= $s['num'] ?></span>
                <span class="ar-about__stat-label"><?= esc_html($s['label']) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
          <a href="/about" class="btn-primary" style="background:var(--slate);">
            Learn Our Story
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
          </a>
        </div>
        <div class="ar-about__img">
          <?php $about_img = $about_owner_img; if($about_img): ?>
          <img src="<?= $about_img ?>" alt="Antonio Robles — Owner, AR Roofing & Construction" loading="lazy">
          <?php else: ?>
          <div style="width:100%;height:520px;border-radius:12px;background:linear-gradient(135deg,var(--slate),#1e3e3d);display:flex;align-items:center;justify-content:center;">
            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
          </div>
          <?php endif; ?>
          <div class="ar-about__img-badge">
            <strong>18+</strong>
            YEARS<br>EXPERIENCE
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S05 — SERVICES
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-services">
    <div class="section-inner">
      <div class="ar-services__header">
        <span class="eyebrow">Our Services</span>
        <h2>Everything your property needs. One team you can trust.</h2>
      </div>
      <div class="ar-services__grid">
        <?php
        $services = [
          [
            'title' => 'Roof Installation',
            'body'  => 'Professional installation of residential and commercial roofs using premium materials. Asphalt shingles, metal roofing, TPO, and PVC systems. Complete tear-off, deck inspection, and new installation with a final walkthrough on every project.',
            'link'  => '/services/roof-installation',
            'img'   => $service_installation_img,
            'icon'  => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
          ],
          [
            'title' => 'Roof Repair',
            'body'  => 'Honest, efficient repair services for leaks, storm damage, missing shingles, and structural issues. We diagnose the real problem and fix what actually needs fixing — not what makes us the most money.',
            'link'  => '/services/roof-repair',
            'img'   => $service_repair_img,
            'icon'  => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
          ],
          [
            'title' => 'Emergency Roofing',
            'body'  => 'Storm damage, fallen trees, severe leaks — we respond 24 hours a day, 7 days a week. We stop the water, secure your property, and handle the insurance documentation so you don\'t have to.',
            'link'  => '/services/emergency-roofing',
            'img'   => $service_emergency_img,
            'icon'  => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
          ],
          [
            'title' => 'Roof Maintenance',
            'body'  => 'Extend your roof\'s life by five to ten years with professional inspections and preventive care. We check every layer, treat moss, clean gutters, and give you a clear report of your roof\'s condition twice a year.',
            'link'  => '/services/roof-maintenance',
            'img'   => $service_maintenance_img,
            'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
          ],
        ];
        foreach ($services as $svc) : ?>
          <div class="ar-services__card">
            <div class="ar-services__img">
              <img src="<?= esc_attr($svc['img']) ?>" alt="<?= esc_attr($svc['title']) ?> — AR Roofing Oregon" loading="lazy"
                   onerror="this.style.display='none';this.parentElement.querySelector('.ar-services__img-placeholder').style.display='flex'">
              <div class="ar-services__img-placeholder" style="display:none">
                <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><?= $svc['icon'] ?></svg>
              </div>
            </div>
            <div class="ar-services__body">
              <div class="ar-services__icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $svc['icon'] ?></svg>
              </div>
              <h3><?= esc_html($svc['title']) ?></h3>
              <p><?= esc_html($svc['body']) ?></p>
              <a href="<?= esc_url($svc['link']) ?>" class="ar-services__link">
                Learn More
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S06 — WHY CHOOSE US
  ═══════════════════════════════════════════════════════════ -->
  <?php $why_bg = $why_bg_img; ?>
  <section class="ar-why" <?php if($why_bg): ?>style="background-image:url('<?= $why_bg ?>');background-size:cover;background-position:center;"<?php endif; ?>>
  <?php if($why_bg_img): ?><div style="position:absolute;inset:0;background:rgba(15,35,34,0.92);z-index:0;"></div><?php endif; ?>
    <div class="section-inner" style="position:relative;z-index:1;">
      <div class="ar-why__header">
        <span class="eyebrow">Why AR Roofing</span>
        <h2 style="color:#fff;">In a market full of contractors, we deliver certainty.</h2>
      </div>
      <div class="ar-why__grid">
        <?php
        $why = [
          [
            'title' => 'Owner on Every Project',
            'body'  => 'Antonio Robles personally inspects every roof and supervises every project. The same person who gives you the estimate is the one on your roof. That\'s accountability you can\'t get from a call center.',
            'icon'  => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
          ],
          [
            'title' => 'We Tell You the Truth',
            'body'  => 'If your roof needs a repair, we\'ll repair it. If it needs a replacement, we\'ll show you exactly why. If it doesn\'t need anything, we\'ll tell you that too. We\'d rather earn your trust than make a sale.',
            'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
          ],
          [
            'title' => 'Licensed in Both States',
            'body'  => 'We meet every requirement the state demands — license, insurance, everything. In Oregon and Washington. Your investment is fully protected from day one through final walkthrough.',
            'icon'  => '<rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/>',
          ],
          [
            'title' => 'We Handle Your Insurance',
            'body'  => 'Storm damage? We document everything with professional photos, prepare the report your insurance company needs, and communicate directly with the adjuster. You don\'t have to learn insurance language just because a tree fell on your roof.',
            'icon'  => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/>',
          ],
          [
            'title' => 'We Start Within a Week',
            'body'  => 'Most projects begin within seven days of booking. Emergency response is same-day. We move fast because every day your roof has a problem is a day the damage gets worse.',
            'icon'  => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
          ],
          [
            'title' => 'Your Property, Cleaner Than We Found It',
            'body'  => 'Tarps on the ground before we start. Magnetic sweep for every nail when we\'re done. All debris bagged and hauled away. Our clients mention this in almost every review.',
            'icon'  => '<polyline points="20 6 9 17 4 12"/>',
          ],
        ];
        foreach ($why as $item) : ?>
          <div class="ar-why__item">
            <div class="ar-why__icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $item['icon'] ?></svg>
            </div>
            <h3><?= esc_html($item['title']) ?></h3>
            <p><?= esc_html($item['body']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="ar-why__cta">
        <p>Ready for a roofer you can trust?</p>
        <a href="/contact" class="btn-primary">Get a Free Inspection</a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S07 — PROCESS
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-process">
    <div class="section-inner">
      <div class="ar-process__header">
        <span class="eyebrow">Our Process</span>
        <h2>A clear process. No guesswork. No surprises.</h2>
      </div>

      <?php
      $steps = [
        [
          'num'     => '01',
          'title'   => 'Free Inspection & Consultation',
          'body'    => 'We come to your property, climb the roof, inspect every layer, and sit down with you to explain what we found — with photos. No cost. No obligation. No pressure to buy anything. Just a clear picture of where your roof stands.',
          'img'     => $process_inspection_img,
          'reverse' => false,
        ],
        [
          'num'     => '02',
          'title'   => 'Honest Recommendation & Estimate',
          'body'    => 'Based on the inspection, we give you a written estimate that explains exactly what needs to be done, what materials we\'ll use, and what it costs. We explain every line. If you have a cheaper quote from someone else, we\'ll show you why the numbers are different.',
          'img'     => $process_estimate_img,
          'reverse' => true,
        ],
        [
          'num'     => '03',
          'title'   => 'Expert Execution',
          'body'    => 'Our crew arrives on the scheduled date with all materials ready. We protect your property, work clean, and keep you updated. The owner is on-site supervising quality at every stage.',
          'img'     => $process_execution_img,
          'reverse' => false,
        ],
        [
          'num'     => '04',
          'title'   => 'Final Walkthrough & Ongoing Support',
          'body'    => 'When the job is done, we walk the entire project with you and show you exactly what we did. The project isn\'t finished until you say it\'s right. And if you call us six months later, we answer the phone.',
          'img'     => $process_walkthrough_img,
          'reverse' => true,
        ],
      ];
      foreach ($steps as $step) :
        $rev = $step['reverse'] ? 'ar-process__step--reverse' : '';
      ?>
        <div class="ar-process__step <?= $rev ?>">
          <div class="ar-process__text">
            <div class="ar-process__num"><?= $step['num'] ?></div>
            <h3><?= esc_html($step['title']) ?></h3>
            <p><?= esc_html($step['body']) ?></p>
          </div>
          <div class="ar-process__visual">
            <img src="<?= esc_attr($step['img']) ?>" alt="<?= esc_attr($step['title']) ?>" loading="lazy"
                 onerror="this.style.display='none';this.parentElement.querySelector('.ar-process__visual-placeholder').style.display='flex'">
            <div class="ar-process__visual-placeholder" style="display:none">
              <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <div class="ar-process__cta">
        <p>Ready to start? Call or request your free inspection.</p>
        <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;">
          <a href="/contact" class="btn-primary">Get a Free Inspection</a>
          <a href="tel:5416450577" class="btn-primary" style="background:var(--slate);">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call 541-645-0577
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S08 — PORTFOLIO
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-portfolio">
    <div class="section-inner">
      <div class="ar-portfolio__header">
        <span class="eyebrow" style="color:var(--mist);">Our Work</span>
        <h2 style="color:#fff;">Real Oregon homes. Real transformations.</h2>
      </div>
      <div class="ar-portfolio__grid">
        <?php
        $projects = [
          ['type' => 'Full Roof Replacement',   'location' => 'Hood River, OR',   'img' => $portfolio_1_img],
          ['type' => 'Emergency Storm Repair',   'location' => 'The Dalles, OR',   'img' => $portfolio_2_img],
          ['type' => 'Metal Roof Installation',  'location' => 'Dufur, OR',        'img' => $portfolio_3_img],
          ['type' => 'Commercial Flat Roof',     'location' => 'The Dalles, OR',   'img' => $portfolio_4_img],
          ['type' => 'Residential Repair',       'location' => 'Mosier, OR',       'img' => $portfolio_5_img],
          ['type' => 'Full Replacement',         'location' => 'White Salmon, WA', 'img' => $portfolio_6_img],
        ];
        foreach ($projects as $proj) : ?>
          <div class="ar-portfolio__card">
            <img src="<?= esc_attr($proj['img']) ?>"
                 alt="<?= esc_attr($proj['type']) ?> — <?= esc_attr($proj['location']) ?> — AR Roofing"
                 loading="lazy"
                 onerror="this.style.display='none';this.parentElement.querySelector('.ar-portfolio__placeholder').style.display='flex'">
            <div class="ar-portfolio__placeholder" style="display:none">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
              <span><?= esc_html($proj['location']) ?></span>
            </div>
            <div class="ar-portfolio__card-overlay">
              <div class="ar-portfolio__card-info">
                <span class="ar-portfolio__card-type"><?= esc_html($proj['type']) ?></span>
                <span class="ar-portfolio__card-location"><?= esc_html($proj['location']) ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="ar-portfolio__cta">
        <a href="/portfolio" class="btn-ghost">
          View Full Portfolio
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S09 — SERVICE AREAS
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-areas">
    <div class="section-inner">
      <div class="ar-areas__header">
        <span class="eyebrow">Service Areas</span>
        <h2>Protecting homes from Portland to Wishram.<br>18 cities. Two states.</h2>
      </div>
      <div class="ar-areas__layout">
        <div class="ar-areas__col">
          <h4>Oregon</h4>
          <div class="ar-areas__tags">
            <?php
            $or_cities = ['Portland','The Dalles','Hood River','Gresham','Troutdale','Cascade Locks','Mosier','Wasco','Dufur'];
            foreach ($or_cities as $city) : ?>
              <a href="/locations/<?= sanitize_title($city) ?>" class="ar-areas__tag"><?= esc_html($city) ?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="ar-areas__col">
          <h4>Washington</h4>
          <div class="ar-areas__tags">
            <?php
            $wa_cities = ['Stevenson','White Salmon','North Bonneville','Bingen','Goldendale','Dallesport','Lyle','Carson','Wishram'];
            foreach ($wa_cities as $city) : ?>
              <a href="/locations/<?= sanitize_title($city) ?>" class="ar-areas__tag"><?= esc_html($city) ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="ar-areas__copy">
        <p>Licensed and insured in both Oregon and Washington. We know what the Gorge winds do to a ridge cap, what five months of rain does to sheathing, and which side of a house in Hood River gets hit hardest. This isn't textbook knowledge. This is eighteen years of being on Oregon roofs in Oregon weather.</p>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S10 — REVIEWS
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-reviews">
    <div class="section-inner">
      <div class="ar-reviews__header">
        <span class="eyebrow">Client Reviews</span>
        <h2>Don't take our word for it. Read theirs.</h2>
      </div>
      <div style="text-align:center;">
        <span class="ar-reviews__badge">
          <span class="ar-reviews__stars">★★★★★</span>
          5.0 Google Reviews
        </span>
      </div>
      <div class="ar-reviews__grid">
        <?php
        $reviews = [
          [
            'name' => 'Ken Byers',
            'text' => 'Antonio and crew did an exemplary job... close attention to detail revealed the need to re-nail virtually all of the plywood sheathing and to replace a potentially leaky skylight. Every member of his crew demonstrated dedication toward customer service and a job well done.',
          ],
          [
            'name' => 'Rusty Neff',
            'text' => 'On each project they\'ve done exceptional work. The crew works quickly and goes out of their way to make sure we\'re happy. We keep them on speed dial.',
          ],
          [
            'name' => 'Steven Brantley',
            'text' => 'Extremely professional and high quality. Owner is responsive and very friendly. They identified and replaced damaged wood as they went. I don\'t think I found a single stray nail.',
          ],
        ];
        foreach ($reviews as $rev) : ?>
          <div class="ar-reviews__card">
            <span class="ar-reviews__quote-icon">"</span>
            <div class="ar-reviews__stars-sm">★★★★★</div>
            <p><?= esc_html($rev['text']) ?></p>
            <span class="ar-reviews__author">— <?= esc_html($rev['name']) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="ar-reviews__cta">
        <a href="https://g.page/r/ar-roofing/review" target="_blank" rel="noopener" class="btn-primary" style="background:var(--slate);">
          Read All Reviews on Google
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S11 — FAQ
  ═══════════════════════════════════════════════════════════ -->
  <section class="ar-faq">
    <div class="section-inner">
      <div class="ar-faq__header">
        <span class="eyebrow">Frequently Asked Questions</span>
        <h2>Your questions, answered.</h2>
      </div>
      <div class="ar-faq__list">
        <?php
        $faqs = [
          [
            'q' => 'How much does a new roof cost in Oregon?',
            'a' => 'It depends on five factors: roof size, pitch, material, layers to remove, and wood condition. Asphalt shingle roofs for a standard home start between $8,000 and $12,000. Metal starts between $15,000 and $25,000. We give free in-person estimates — never over the phone.',
          ],
          [
            'q' => 'Do you work with insurance companies?',
            'a' => 'Yes. We document storm damage with professional photos, prepare the report your insurance adjuster needs, and communicate directly with your insurance company throughout the process.',
          ],
          [
            'q' => 'How quickly can you start?',
            'a' => 'Most projects start within one week. Emergency response is same-day.',
          ],
          [
            'q' => 'Are you licensed in both Oregon and Washington?',
            'a' => 'Yes. We meet every requirement both states demand — license, insurance, everything. Your investment is fully protected.',
          ],
          [
            'q' => 'What types of roofing do you install?',
            'a' => 'Asphalt shingles, metal roofing, TPO, PVC, and flat roof systems. Residential and commercial.',
          ],
          [
            'q' => 'Do I really need a new roof, or just a repair?',
            'a' => 'Many roofs we inspect only need minor repairs. We\'ll tell you what\'s actually going on and give you honest options. If a repair will solve it, that\'s what we recommend.',
          ],
          [
            'q' => 'What areas do you serve?',
            'a' => '18 cities across Oregon and Washington, including Portland, Hood River, The Dalles, White Salmon, Gresham, Troutdale, Cascade Locks, Stevenson, Goldendale, and more.',
          ],
        ];
        foreach ($faqs as $i => $faq) : ?>
          <div class="ar-faq__item" id="faq-<?= $i ?>">
            <button class="ar-faq__question" onclick="arToggleFaq(<?= $i ?>)" aria-expanded="false">
              <span class="ar-faq__label"><?= esc_html($faq['q']) ?></span>
              <span class="ar-faq__icon" id="faq-icon-<?= $i ?>">+</span>
            </button>
            <div class="ar-faq__answer" id="faq-answer-<?= $i ?>">
              <p><?= esc_html($faq['a']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       S12 — FINAL CTA
  ═══════════════════════════════════════════════════════════ -->
  <?php $final_bg = $final_cta_bg_img; ?>
  <section class="ar-final-cta" <?php if($final_bg): ?>style="background-image:url('<?= $final_bg ?>');background-size:cover;background-position:center;"<?php endif; ?>>
  <?php if($final_bg): ?><div style="position:absolute;inset:0;background:rgba(15,35,34,0.88);z-index:0;"></div><?php endif; ?>
    <div class="section-inner">
      <div class="ar-final-cta__inner" style="position:relative;z-index:1;">
        <div class="ar-final-cta__left">
          <span class="eyebrow">Get Started Today</span>
          <h2>Your roof protects your family. Let us protect your roof.</h2>
          <p>Whether you need an inspection, a repair, or a complete replacement — AR Roofing has you covered. Serving 18 cities across Oregon and Washington. Licensed, insured, and ready to help.</p>
          <div class="ar-final-cta__btns">
            <a href="#contact-form" class="btn-primary">Get a Free Inspection</a>
            <a href="tel:5416450577" class="btn-ghost">Call 541-645-0577</a>
          </div>
        </div>
        <div class="ar-final-cta__form" id="contact-form">
          <h3>Send Us a Message</h3>
          <div class="ar-form-row">
            <div class="ar-form-field">
              <label for="ar-name">Full Name</label>
              <input type="text" id="ar-name" name="name" placeholder="Antonio Robles">
            </div>
            <div class="ar-form-field">
              <label for="ar-phone">Phone</label>
              <input type="tel" id="ar-phone" name="phone" placeholder="(541) 000-0000">
            </div>
          </div>
          <div class="ar-form-field">
            <label for="ar-email">Email</label>
            <input type="email" id="ar-email" name="email" placeholder="you@email.com">
          </div>
          <div class="ar-form-row">
            <div class="ar-form-field">
              <label for="ar-service">Service Needed</label>
              <select id="ar-service" name="service">
                <option value="">Select a service...</option>
                <option>Free Inspection</option>
                <option>Roof Installation</option>
                <option>Roof Repair</option>
                <option>Emergency Roofing</option>
                <option>Roof Maintenance</option>
                <option>Commercial</option>
              </select>
            </div>
            <div class="ar-form-field">
              <label for="ar-city">City</label>
              <input type="text" id="ar-city" name="city" placeholder="Hood River, OR">
            </div>
          </div>
          <div class="ar-form-field">
            <label for="ar-message">Message</label>
            <textarea id="ar-message" name="message" placeholder="Tell us about your roof..."></textarea>
          </div>
          <button type="button" class="ar-form-submit">Send Message →</button>
        </div>
      </div>
    </div>
  </section>

</div><!-- /.ar-home -->

<script>
function arToggleFaq(index) {
  const item    = document.getElementById('faq-' + index)
  const answer  = document.getElementById('faq-answer-' + index)
  const icon    = document.getElementById('faq-icon-' + index)
  const isOpen  = item.classList.contains('active')

  // Close all
  document.querySelectorAll('.ar-faq__item').forEach(function(el, i) {
    el.classList.remove('active')
    document.getElementById('faq-answer-' + i).style.maxHeight = '0'
    document.getElementById('faq-icon-' + i).textContent = '+'
    document.querySelectorAll('.ar-faq__question')[i].setAttribute('aria-expanded', 'false')
  })

  // Open clicked if it was closed
  if (!isOpen) {
    item.classList.add('active')
    answer.style.maxHeight = answer.scrollHeight + 'px'
    icon.textContent = '−'
    item.querySelector('.ar-faq__question').setAttribute('aria-expanded', 'true')
  }
}
</script>

<?php get_footer(); ?>