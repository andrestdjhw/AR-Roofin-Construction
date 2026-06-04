<?php
/**
 * Template Name: Emergency Roofing
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   IMÁGENES — Pega aquí las URLs de tus medios de WordPress
   Media Library → click imagen → copiar URL → pegar abajo
   ════════════════════════════════════════════════════════════ */

// ── HERO ─────────────────────────────────────────────────────
$hero_bg_img        = '';   // Crew respondiendo a daño de tormenta o tarping

// ── PROCESO DE RESPUESTA ─────────────────────────────────────
$response_photo_img = '';   // Foto real de tarping / emergencia en acción

/* ══════════════════════════════════════════════════════════════ */
?>

<style>
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Light.woff"); ?>') format('woff');
    font-weight: 300; font-style: normal; font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Regular.woff"); ?>') format('woff');
    font-weight: 400; font-style: normal; font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Medium.woff"); ?>') format('woff');
    font-weight: 500; font-style: normal; font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Bold.woff"); ?>') format('woff');
    font-weight: 700; font-style: normal; font-display: swap;
  }
  @font-face {
    font-family: 'GT America';
    src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Black.woff"); ?>') format('woff');
    font-weight: 900; font-style: normal; font-display: swap;
  }

  :root {
    --slate: #0f2322;
    --red:   #e8253a;
    --clay:  #8b0a1a;
    --aqua:  #6a9a9a;
    --mist:  #c8e8e8;
    --light: #f5f6f5;
  }

  .er * { box-sizing: border-box; }
  .er { font-family: 'GT America', sans-serif; color: var(--slate); }
  .er h1, .er h2, .er h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.1; }
  .er .eyebrow {
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: var(--aqua);
    margin-bottom: 14px; display: block;
  }
  .er .section-inner { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

  /* ── HERO ──────────────────────────────────────────────────── */
  .er-hero {
    position: relative;
    min-height: 100vh;
    display: flex; align-items: center;
    overflow: hidden; background: var(--slate);
  }
  .er-hero__bg {
    position: absolute; inset: 0;
    background-size: cover; background-position: center;
    z-index: 0;
  }
  .er-hero__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(15,35,34,0.93) 0%, rgba(15,35,34,0.75) 60%, rgba(15,35,34,0.55) 100%);
    z-index: 1;
  }
  /* Red urgency bar at top */
  .er-hero__urgency-bar {
    position: absolute; top: 0; left: 0; right: 0;
    background: var(--red); z-index: 3;
    padding: 10px 24px;
    display: flex; align-items: center; justify-content: center; gap: 10px;
    font-size: 13px; font-weight: 700; color: #fff;
    letter-spacing: 0.5px;
  }
  .er-hero__urgency-dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: #fff;
    animation: urgencyPulse 1.2s ease-in-out infinite;
  }
  @keyframes urgencyPulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.4; transform: scale(0.7); }
  }
  .er-hero__content {
    position: relative; z-index: 2;
    max-width: 1200px; margin: 0 auto;
    padding: 80px 24px 60px;
    width: 100%;
  }
  .er-hero__breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12px; color: rgba(255,255,255,0.45);
    margin-bottom: 28px; letter-spacing: 0.5px;
  }
  .er-hero__breadcrumb a { color: rgba(255,255,255,0.45); text-decoration: none; transition: color .2s; }
  .er-hero__breadcrumb a:hover { color: var(--mist); }
  .er-hero__breadcrumb span { color: rgba(255,255,255,0.2); }
  .er-hero h1 {
    font-size: clamp(32px, 5vw, 68px);
    color: #fff; margin: 0 0 20px; max-width: 760px;
    line-height: 1.05;
  }
  .er-hero__sub {
    font-size: clamp(15px, 1.6vw, 18px);
    color: rgba(255,255,255,0.72); font-weight: 300;
    line-height: 1.7; max-width: 560px; margin: 0 0 44px;
  }

  /* CTA group */
  .er-hero__ctas { display: flex; flex-direction: column; gap: 16px; align-items: flex-start; }
  .er-hero__phone-btn {
    display: inline-flex; align-items: center; gap: 14px;
    padding: 18px 40px;
    background: var(--red); color: #fff;
    font-family: 'GT America', sans-serif;
    font-size: clamp(22px, 2.5vw, 32px);
    font-weight: 900; text-decoration: none;
    border-radius: 8px; letter-spacing: -0.5px;
    transition: background .2s, transform .15s;
    box-shadow: 0 8px 32px rgba(232,37,58,0.4);
  }
  .er-hero__phone-btn:hover { background: var(--clay); transform: translateY(-2px); }
  .er-hero__phone-icon {
    width: 36px; height: 36px; border-radius: 50%;
    background: rgba(255,255,255,0.15);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    animation: ringPulse 2s ease-in-out infinite;
  }
  @keyframes ringPulse {
    0%, 100% { box-shadow: 0 0 0 0 rgba(255,255,255,0.4); }
    50% { box-shadow: 0 0 0 8px rgba(255,255,255,0); }
  }
  .er-hero__secondary {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 13px 28px;
    background: transparent; color: rgba(255,255,255,0.85);
    font-family: 'GT America', sans-serif;
    font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    border: 1.5px solid rgba(255,255,255,0.35);
    transition: background .2s, border-color .2s;
  }
  .er-hero__secondary:hover { background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.6); }
  .er-hero__available {
    font-size: 12px; color: rgba(255,255,255,0.4);
    letter-spacing: 1px; text-transform: uppercase;
    display: flex; align-items: center; gap: 8px;
    margin-top: 4px;
  }
  .er-hero__available::before {
    content: ''; width: 6px; height: 6px;
    border-radius: 50%; background: #4ade80;
    animation: urgencyPulse 1.5s ease-in-out infinite;
  }

  /* ── EMERGENCY TYPES ───────────────────────────────────────── */
  .er-types { background: var(--slate); padding: 100px 0; }
  .er-types__header { text-align: center; margin-bottom: 60px; }
  .er-types__header h2 { font-size: clamp(26px, 3vw, 44px); color: #fff; margin: 0; }
  .er-types__grid {
    display: grid; grid-template-columns: repeat(2, 1fr); gap: 24px;
  }
  .er-type-card {
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 14px; padding: 36px 32px;
    display: flex; gap: 24px; align-items: flex-start;
    transition: background .25s, border-color .25s;
  }
  .er-type-card:hover {
    background: rgba(255,255,255,0.07);
    border-color: rgba(232,37,58,0.3);
  }
  .er-type-card__icon {
    width: 52px; height: 52px; border-radius: 12px;
    background: rgba(232,37,58,0.15);
    border: 1px solid rgba(232,37,58,0.25);
    display: flex; align-items: center; justify-content: center;
    color: var(--red); flex-shrink: 0;
  }
  .er-type-card h3 { font-size: 19px; color: #fff; margin: 0 0 10px; }
  .er-type-card p {
    font-size: 14.5px; color: rgba(255,255,255,0.55);
    line-height: 1.75; margin: 0; font-weight: 300;
  }

  /* Mid-page phone CTA bar */
  .er-phone-bar {
    background: var(--red); padding: 36px 24px;
    text-align: center;
  }
  .er-phone-bar__label {
    font-size: 12px; font-weight: 600; letter-spacing: 2px;
    text-transform: uppercase; color: rgba(255,255,255,0.7);
    display: block; margin-bottom: 10px;
  }
  .er-phone-bar__number {
    display: inline-block;
    font-size: clamp(32px, 5vw, 56px); font-weight: 900;
    color: #fff; text-decoration: none; line-height: 1;
    transition: opacity .2s;
  }
  .er-phone-bar__number:hover { opacity: 0.85; }
  .er-phone-bar__sub {
    display: block; font-size: 13px;
    color: rgba(255,255,255,0.65); margin-top: 10px;
  }

  /* ── RESPONSE PROCESS ──────────────────────────────────────── */
  .er-process { background: #fff; padding: 100px 0; }
  .er-process__header { text-align: center; margin-bottom: 72px; }
  .er-process__header h2 { font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0; }
  .er-process__layout {
    display: grid; grid-template-columns: 1fr 400px;
    gap: 72px; align-items: start;
  }
  .er-process__steps { display: flex; flex-direction: column; gap: 0; }
  .er-process__step {
    display: flex; gap: 24px; align-items: flex-start;
    padding: 32px 0;
    border-bottom: 1px solid #eee;
    position: relative;
  }
  .er-process__step:first-child { padding-top: 0; }
  .er-process__step:last-child { border-bottom: none; }
  .er-process__step-num {
    width: 48px; height: 48px; border-radius: 50%;
    background: var(--red); color: #fff;
    display: flex; align-items: center; justify-content: center;
    font-size: 18px; font-weight: 900; flex-shrink: 0;
    box-shadow: 0 4px 16px rgba(232,37,58,0.3);
  }
  .er-process__step-body h3 {
    font-size: 18px; color: var(--slate); margin: 0 0 8px;
  }
  .er-process__step-body p {
    font-size: 14.5px; color: #667; line-height: 1.7;
    margin: 0; font-weight: 300;
  }
  .er-process__photo {
    position: sticky; top: 100px;
    border-radius: 14px; overflow: hidden;
    height: 500px;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
  }
  .er-process__photo img {
    width: 100%; height: 100%; object-fit: cover; display: block;
  }
  .er-process__photo-placeholder {
    width: 100%; height: 100%;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    gap: 16px; color: rgba(255,255,255,0.12);
    font-size: 12px; letter-spacing: 1px; text-transform: uppercase;
  }
  .er-process__photo-badge {
    position: absolute; bottom: 20px; left: 20px; right: 20px;
    background: rgba(232,37,58,0.92);
    backdrop-filter: blur(8px); border-radius: 10px;
    padding: 16px 20px;
    display: flex; align-items: center; gap: 12px;
  }
  .er-process__photo-badge-dot {
    width: 10px; height: 10px; border-radius: 50%;
    background: #fff; flex-shrink: 0;
    animation: urgencyPulse 1.2s ease-in-out infinite;
  }
  .er-process__photo-badge span {
    font-size: 13px; font-weight: 700; color: #fff;
    line-height: 1.4;
  }

  /* ── INSURANCE ─────────────────────────────────────────────── */
  .er-insurance { background: var(--light); padding: 100px 0; }
  .er-insurance__inner {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 72px; align-items: center;
  }
  .er-insurance__copy h2 {
    font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0 0 20px;
  }
  .er-insurance__copy > p {
    font-size: 15.5px; color: #556; line-height: 1.8;
    font-weight: 300; margin: 0 0 32px;
  }
  .er-insurance__list {
    list-style: none; margin: 0; padding: 0;
    display: flex; flex-direction: column; gap: 14px;
  }
  .er-insurance__item {
    display: flex; align-items: flex-start; gap: 12px;
    font-size: 14.5px; color: var(--slate); line-height: 1.5;
  }
  .er-insurance__check {
    width: 22px; height: 22px; border-radius: 50%;
    background: rgba(106,154,154,0.15); border: 1px solid rgba(106,154,154,0.3);
    display: flex; align-items: center; justify-content: center;
    color: var(--aqua); flex-shrink: 0; margin-top: 1px;
  }
  .er-insurance__visual {
    background: var(--slate); border-radius: 14px; padding: 48px 40px;
    text-align: center; position: relative; overflow: hidden;
  }
  .er-insurance__visual::before {
    content: '';
    position: absolute; top: -60px; right: -60px;
    width: 240px; height: 240px;
    background: radial-gradient(circle, rgba(106,154,154,0.1) 0%, transparent 70%);
    pointer-events: none;
  }
  .er-insurance__visual-icon {
    width: 72px; height: 72px; border-radius: 16px;
    background: rgba(106,154,154,0.12);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 24px; color: var(--aqua);
  }
  .er-insurance__visual h3 {
    font-size: 20px; color: #fff; margin: 0 0 12px;
  }
  .er-insurance__visual p {
    font-size: 14px; color: rgba(255,255,255,0.5);
    line-height: 1.75; font-weight: 300; margin: 0 0 28px;
  }
  .er-insurance__visual-stats {
    display: grid; grid-template-columns: 1fr 1fr; gap: 16px;
    position: relative; z-index: 1;
  }
  .er-insurance__stat {
    background: rgba(255,255,255,0.05); border-radius: 10px; padding: 18px;
    border: 1px solid rgba(255,255,255,0.07);
  }
  .er-insurance__stat-num {
    font-size: 28px; font-weight: 900; color: var(--red);
    display: block; line-height: 1;
  }
  .er-insurance__stat-label {
    font-size: 11px; color: rgba(255,255,255,0.4);
    letter-spacing: 1px; text-transform: uppercase;
    display: block; margin-top: 6px;
  }

  /* ── FINAL CTA ─────────────────────────────────────────────── */
  .er-cta {
    background: var(--red); padding: 100px 24px;
    text-align: center; position: relative; overflow: hidden;
  }
  .er-cta::before {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(139,10,26,0.5) 0%, transparent 60%);
    pointer-events: none;
  }
  .er-cta__inner { position: relative; z-index: 1; max-width: 700px; margin: 0 auto; }
  .er-cta__eyebrow {
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: rgba(255,255,255,0.65);
    display: block; margin-bottom: 16px;
  }
  .er-cta h2 {
    font-size: clamp(24px, 3vw, 40px); color: #fff;
    margin: 0 0 24px;
  }
  .er-cta__phone {
    display: block;
    font-size: clamp(44px, 7vw, 80px); font-weight: 900;
    color: #fff; text-decoration: none;
    letter-spacing: -2px; line-height: 1;
    margin-bottom: 32px;
    transition: opacity .2s;
    text-shadow: 0 4px 24px rgba(0,0,0,0.2);
  }
  .er-cta__phone:hover { opacity: 0.85; }
  .er-cta__btn {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 16px 36px;
    background: #fff; color: var(--red);
    font-family: 'GT America', sans-serif;
    font-size: 16px; font-weight: 700;
    text-decoration: none; border-radius: 8px;
    transition: transform .15s, box-shadow .15s;
  }
  .er-cta__btn:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(0,0,0,0.2); }
  .er-cta__note {
    display: block; font-size: 13px;
    color: rgba(255,255,255,0.55); margin-top: 20px;
  }

  /* ── MOBILE STICKY CALL BAR ────────────────────────────────── */
  .er-sticky-call {
    display: none;
    position: fixed; bottom: 0; left: 0; right: 0; z-index: 9999;
    background: var(--red);
    padding: 14px 24px;
    align-items: center; justify-content: center; gap: 12px;
    box-shadow: 0 -4px 24px rgba(0,0,0,0.3);
  }
  .er-sticky-call a {
    display: flex; align-items: center; gap: 10px;
    color: #fff; text-decoration: none;
    font-size: 18px; font-weight: 900; letter-spacing: -0.5px;
  }
  .er-sticky-call__dot {
    width: 8px; height: 8px; border-radius: 50%; background: #fff;
    animation: urgencyPulse 1.2s ease-in-out infinite;
  }
  @media (max-width: 768px) {
    .er-sticky-call { display: flex; }
    .er { padding-bottom: 64px; }
  }

  /* ── RESPONSIVE ────────────────────────────────────────────── */
  @media (max-width: 1024px) {
    .er-process__layout { grid-template-columns: 1fr; }
    .er-process__photo { position: static; height: 320px; }
    .er-insurance__inner { grid-template-columns: 1fr; gap: 48px; }
  }
  @media (max-width: 768px) {
    .er-types__grid { grid-template-columns: 1fr; }
    .er-type-card { flex-direction: column; gap: 16px; }
    .er-hero__phone-btn { font-size: 22px; padding: 16px 28px; }
    .er-hero__phone-icon { width: 28px; height: 28px; }
  }
</style>

<div class="er">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="er-hero">
    <!-- Urgency bar -->
    <div class="er-hero__urgency-bar">
      <span class="er-hero__urgency-dot"></span>
      24/7 Emergency Response — We Answer Every Call
      <span class="er-hero__urgency-dot"></span>
    </div>

    <div class="er-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="er-hero__overlay"></div>
    <div class="er-hero__content">
      <nav class="er-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>›</span>
        <a href="/services">Services</a>
        <span>›</span>
        <span style="color:rgba(255,255,255,0.75);">Emergency Roofing</span>
      </nav>
      <span class="eyebrow" style="color:#ff8a95;">Emergency Roofing</span>
      <h1>Storm damage won't wait.<br>Neither do we.</h1>
      <p class="er-hero__sub">24/7 emergency roofing response across Oregon and Washington. Fallen trees, storm damage, severe leaks — we answer the phone and we show up.</p>
      <div class="er-hero__ctas">
        <a href="tel:5416450577" class="er-hero__phone-btn" onclick="gtag && gtag('event','conversion',{send_to:'AW-XXXXXXX/XXXXXXX'})">
          <div class="er-hero__phone-icon">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          Call Now: 541-645-0577
        </a>
        <a href="/contact" class="er-hero__secondary">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          Request Emergency Service
        </a>
        <span class="er-hero__available">Available right now — 24 hours a day, 7 days a week</span>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       EMERGENCY TYPES
  ═══════════════════════════════════════════════════════════ -->
  <section class="er-types">
    <div class="section-inner">
      <div class="er-types__header">
        <span class="eyebrow" style="color:var(--mist);">What We Respond To</span>
        <h2>Emergencies we handle.</h2>
      </div>
      <div class="er-types__grid">
        <?php
        $types = [
          [
            'title' => 'Fallen Trees',
            'body'  => 'A tree on your roof is dangerous and exposes your home immediately. We secure the area, remove what we can safely, tarp the opening, and begin permanent repair as soon as conditions allow.',
            'icon'  => '<path d="M17 8C8 10 5.9 16.17 3.82 22"/><path d="M9.1 7.4C10 9.6 11 11.4 14 13"/><path d="M8 22c0-5.2 4.2-8.9 8-10.3"/><circle cx="16" cy="6" r="4"/>',
          ],
          [
            'title' => 'Storm & Wind Damage',
            'body'  => 'Gorge winds reach 60–80 mph regularly. Lifted shingles, torn sections, and displaced metal work are common after every major storm. We assess, document, and repair.',
            'icon'  => '<path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/>',
          ],
          [
            'title' => 'Severe Leaks',
            'body'  => 'Active water intrusion into your home — whether from a sudden failure or a slow leak that finally broke through. We stop the water tonight and fix the source this week.',
            'icon'  => '<path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/>',
          ],
          [
            'title' => 'Hail & Impact Damage',
            'body'  => 'Hail and falling debris damage the protective surface of your roof in ways that aren\'t always visible. We inspect for hidden damage and document everything for your insurance.',
            'icon'  => '<path d="m4 14 1.5-1.5"/><path d="m10 14 1.5-1.5"/><path d="m4 8 1.5-1.5"/><path d="m10 8 1.5-1.5"/><path d="m7 11 1.5-1.5"/><path d="M7 3C4.69 5 3 7.82 3 11a9 9 0 0 0 9 9 9 9 0 0 0 9-9c0-3.18-1.69-6-4-8"/><path d="M11.5 3C13 5 14 7 14 11"/>',
          ],
        ];
        foreach ($types as $t) : ?>
          <div class="er-type-card">
            <div class="er-type-card__icon">
              <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $t['icon'] ?></svg>
            </div>
            <div>
              <h3><?= esc_html($t['title']) ?></h3>
              <p><?= esc_html($t['body']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       MID-PAGE PHONE BAR
  ═══════════════════════════════════════════════════════════ -->
  <div class="er-phone-bar">
    <span class="er-phone-bar__label">Emergency line — answered 24/7</span>
    <a href="tel:5416450577" class="er-phone-bar__number" onclick="gtag && gtag('event','conversion',{send_to:'AW-XXXXXXX/XXXXXXX'})">
      541-645-0577
    </a>
    <span class="er-phone-bar__sub">Same-day response · Licensed & insured · Oregon & Washington</span>
  </div>

  <!-- ═══════════════════════════════════════════════════════════
       RESPONSE PROCESS
  ═══════════════════════════════════════════════════════════ -->
  <section class="er-process">
    <div class="section-inner">
      <div class="er-process__header">
        <span class="eyebrow">Our Emergency Process</span>
        <h2>What happens when you call.</h2>
      </div>
      <div class="er-process__layout">
        <div class="er-process__steps">
          <?php
          $steps = [
            [
              'num'   => '1',
              'title' => 'You call. We answer.',
              'body'  => '24 hours a day, 7 days a week. No voicemail. No callback queue. A real person who can help — not a recording asking you to leave a message.',
            ],
            [
              'num'   => '2',
              'title' => 'We arrive and stop the water.',
              'body'  => 'Same-day response. We secure your property with tarps and temporary protection so your family and belongings are safe tonight. The emergency ends tonight.',
            ],
            [
              'num'   => '3',
              'title' => 'We document everything.',
              'body'  => 'Professional photos of every inch of damage. A detailed report. A written estimate. Everything your insurance company needs to process your claim — prepared by us, not by you.',
            ],
            [
              'num'   => '4',
              'title' => 'We fix it right.',
              'body'  => 'Permanent repair scheduled within the week. Same quality, same process, same final walkthrough as every AR Roofing project. The temporary fix is never the final answer.',
            ],
          ];
          foreach ($steps as $s) : ?>
            <div class="er-process__step">
              <div class="er-process__step-num"><?= $s['num'] ?></div>
              <div class="er-process__step-body">
                <h3><?= esc_html($s['title']) ?></h3>
                <p><?= esc_html($s['body']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="er-process__photo" style="position:relative;">
          <?php if($response_photo_img): ?>
            <img src="<?= esc_url($response_photo_img) ?>" alt="AR Roofing emergency response — tarping and storm damage repair" loading="lazy">
          <?php else: ?>
            <div class="er-process__photo-placeholder">
              <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
              <span>Emergency response photo</span>
            </div>
          <?php endif; ?>
          <div class="er-process__photo-badge">
            <div class="er-process__photo-badge-dot"></div>
            <span>Available right now<br>541-645-0577</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       INSURANCE ASSISTANCE
  ═══════════════════════════════════════════════════════════ -->
  <section class="er-insurance">
    <div class="section-inner">
      <div class="er-insurance__inner">
        <div class="er-insurance__copy">
          <span class="eyebrow">Insurance Assistance</span>
          <h2>We handle your insurance so you don't have to.</h2>
          <p>After storm damage, the last thing you want is a battle with your insurance company. We handle the entire documentation process so you can focus on your family.</p>
          <ul class="er-insurance__list">
            <?php
            $insurance_items = [
              'Professional photos of all damage from multiple angles',
              'Written damage report in the format adjusters require',
              'Detailed repair estimate matching insurance documentation standards',
              'Direct communication with your adjuster throughout the process',
              'Supplemental documentation if the initial claim is underpaid',
            ];
            foreach ($insurance_items as $item) : ?>
              <li class="er-insurance__item">
                <div class="er-insurance__check">
                  <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <?= esc_html($item) ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div class="er-insurance__visual">
          <div class="er-insurance__visual-icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
          </div>
          <h3>You focus on your family.</h3>
          <p>The roof and the paperwork are on us. We've navigated hundreds of insurance claims across Oregon and Washington.</p>
          <div class="er-insurance__visual-stats">
            <div class="er-insurance__stat">
              <span class="er-insurance__stat-num">24h</span>
              <span class="er-insurance__stat-label">Report delivery</span>
            </div>
            <div class="er-insurance__stat">
              <span class="er-insurance__stat-num">18+</span>
              <span class="er-insurance__stat-label">Years experience</span>
            </div>
            <div class="er-insurance__stat">
              <span class="er-insurance__stat-num">OR</span>
              <span class="er-insurance__stat-label">Licensed</span>
            </div>
            <div class="er-insurance__stat">
              <span class="er-insurance__stat-num">WA</span>
              <span class="er-insurance__stat-label">Licensed</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       FINAL CTA
  ═══════════════════════════════════════════════════════════ -->
  <section class="er-cta">
    <div class="er-cta__inner">
      <span class="er-cta__eyebrow">Save this number</span>
      <h2>You might need it tonight.</h2>
      <a href="tel:5416450577" class="er-cta__phone" onclick="gtag && gtag('event','conversion',{send_to:'AW-XXXXXXX/XXXXXXX'})">
        541-645-0577
      </a>
      <a href="/contact" class="er-cta__btn">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
        Request Emergency Service
      </a>
      <span class="er-cta__note">We answer 24 hours a day, 7 days a week. No voicemail.</span>
    </div>
  </section>

</div><!-- /.er -->

<!-- ═══════════════════════════════════════════════════════════
     MOBILE STICKY CALL BAR
═══════════════════════════════════════════════════════════ -->
<div class="er-sticky-call">
  <span class="er-sticky-call__dot"></span>
  <a href="tel:5416450577" onclick="gtag && gtag('event','conversion',{send_to:'AW-XXXXXXX/XXXXXXX'})">
    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
    Call Now: 541-645-0577
  </a>
</div>

<?php get_footer(); ?>