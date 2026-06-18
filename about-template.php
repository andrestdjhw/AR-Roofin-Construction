<?php
/**
 * Template Name: About
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   IMÁGENES — Pega aquí las URLs de tus medios de WordPress
   Media Library → click imagen → copiar URL → pegar abajo
   ════════════════════════════════════════════════════════════ */

// ── HERO ─────────────────────────────────────────────────────
$hero_bg_img      = '/wp-content/uploads/2026/06/Estampados_2_ARRC-scaled.png';   // Antonio y crew en el techo, mañana, Oregon

// ── OUR STORY ────────────────────────────────────────────────
$story_photo_img  = '/wp-content/uploads/2026/06/About_Home_AR_Roofing_Construction-scaled.jpg';   // Antonio en work gear, mirando a cámara

// ── MEET THE TEAM ────────────────────────────────────────────
$antonio_photo_img = '/wp-content/uploads/2026/06/CEO_AR_Roofing.png';  // Headshot o candid de Antonio
$crew_photo_img    = '/wp-content/uploads/2026/06/ARRC_Crew-scaled.jpg';  // Foto grupal del crew en obra

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

  .ab * { box-sizing: border-box; }
  .ab { font-family: 'GT America', sans-serif; color: var(--slate); }
  .ab h1, .ab h2, .ab h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.1; }

  .ab .eyebrow {
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: var(--aqua);
    margin-bottom: 14px; display: block;
  }
  .ab .section-inner { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

  .ab .btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 14px 32px; background: var(--red); color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    transition: background .2s, transform .15s;
  }
  .ab .btn-primary:hover { background: var(--clay); transform: translateY(-2px); }
  .ab .btn-ghost {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 13px 32px; background: transparent; color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    border: 2px solid rgba(255,255,255,0.6);
    transition: background .2s, border-color .2s;
  }
  .ab .btn-ghost:hover { background: rgba(255,255,255,0.1); border-color: #fff; }

  /* ── HERO ──────────────────────────────────────────────────── */
  .ab-hero {
    position: relative;
    min-height: 44vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    overflow: hidden;
    background: var(--slate);
  }
  .ab-hero__bg {
    position: absolute; inset: 0;
    background-size: cover; background-position: center top;
    z-index: 0;
  }
  .ab-hero__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(15,35,34,0.90) 0%, rgba(15,35,34,0.55) 60%, rgba(15,35,34,0.35) 100%);
    z-index: 1;
  }
  .ab-hero__content {
    position: relative; z-index: 2;
    width: 100%;
    padding: 32px 0 56px;
  }
  .ab-hero__breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12px; color: rgba(255,255,255,0.5);
    margin-bottom: 20px; letter-spacing: 0.5px;
  }
  .ab-hero__breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color .2s; }
  .ab-hero__breadcrumb a:hover { color: var(--mist); }
  .ab-hero__breadcrumb span { color: rgba(255,255,255,0.25); }
  .ab-hero h1 {
    font-size: clamp(28px, 4vw, 56px);
    color: #fff; margin: 0 0 18px;
    max-width: 700px;
  }
  .ab-hero__sub {
    font-size: clamp(14px, 1.5vw, 17px);
    color: rgba(255,255,255,0.75);
    font-weight: 300; line-height: 1.7;
    max-width: 560px; margin: 0;
  }

  /* ── STORY ─────────────────────────────────────────────────── */
  .ab-story { background: #fff; padding: 100px 0 80px; }
  .ab-story__grid {
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 72px; align-items: start;
  }
  .ab-story h2 {
    font-size: clamp(26px, 3vw, 42px);
    color: var(--slate); margin: 0 0 28px;
  }
  .ab-story p {
    font-size: 15.5px; line-height: 1.85;
    color: #556; margin: 0 0 20px; font-weight: 300;
  }
  .ab-story p:last-child { margin-bottom: 0; }

  /* Photo */
  .ab-story__photo {
    position: sticky; top: 100px;
  }
  .ab-story__photo-wrap {
    border-radius: 14px; overflow: hidden;
    height: 480px; position: relative;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
  }
  .ab-story__photo-wrap img {
    width: 100%; height: 100%;
    object-fit: cover; display: block;
  }
  .ab-story__photo-placeholder {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    color: rgba(255,255,255,0.1);
  }
  .ab-story__photo-badge {
    position: absolute; bottom: -18px; right: -18px;
    background: var(--red); color: #fff;
    padding: 18px 22px; border-radius: 10px;
    text-align: center; font-weight: 700;
    box-shadow: 0 8px 24px rgba(232,37,58,0.3);
    line-height: 1.4;
  }
  .ab-story__photo-badge strong {
    font-size: 34px; font-weight: 900; display: block; line-height: 1;
  }
  .ab-story__photo-badge span { font-size: 11px; letter-spacing: 1.5px; text-transform: uppercase; opacity: .85; }

  /* Timeline */
  .ab-timeline {
    margin-top: 72px; padding-top: 56px;
    border-top: 1px solid #eee;
  }
  .ab-timeline h3 {
    font-size: 13px; font-weight: 700; letter-spacing: 2px;
    text-transform: uppercase; color: var(--aqua);
    margin: 0 0 36px;
  }
  .ab-timeline__track {
    display: flex; align-items: flex-start;
    gap: 0; position: relative;
    overflow-x: auto; padding-bottom: 8px;
  }
  .ab-timeline__track::before {
    content: '';
    position: absolute; top: 18px; left: 0; right: 0;
    height: 2px; background: #eee; z-index: 0;
  }
  .ab-timeline__item {
    display: flex; flex-direction: column; align-items: center;
    flex: 1; min-width: 140px; position: relative; z-index: 1;
    padding: 0 12px;
  }
  .ab-timeline__dot {
    width: 36px; height: 36px;
    border-radius: 50%; background: var(--red);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 14px; flex-shrink: 0;
    box-shadow: 0 0 0 4px #fff, 0 0 0 6px rgba(232,37,58,0.2);
  }
  .ab-timeline__dot svg { color: #fff; }
  .ab-timeline__year {
    font-size: 12px; font-weight: 700; color: var(--red);
    letter-spacing: 1px; margin-bottom: 4px;
  }
  .ab-timeline__label {
    font-size: 12px; color: #778; text-align: center; line-height: 1.5;
  }

  /* ── VALUES ────────────────────────────────────────────────── */
  .ab-values { background: var(--light); padding: 100px 0; }
  .ab-values__header { margin-bottom: 64px; }
  .ab-values__header h2 {
    font-size: clamp(26px, 3vw, 42px); color: var(--slate); margin: 0;
  }
  .ab-values__list { display: flex; flex-direction: column; gap: 0; }
  .ab-values__item {
    display: grid;
    grid-template-columns: 72px 1fr;
    gap: 32px; align-items: start;
    padding: 44px 0;
    border-bottom: 1px solid #dde8e8;
    transition: background .2s;
  }
  .ab-values__item:first-child { border-top: 1px solid #dde8e8; }
  .ab-values__num {
    font-size: 48px; font-weight: 900; color: var(--red);
    opacity: 0.15; line-height: 1; padding-top: 4px;
  }
  .ab-values__body h3 {
    font-size: 20px; font-weight: 700; color: var(--slate);
    margin: 0 0 12px;
  }
  .ab-values__body p {
    font-size: 15px; line-height: 1.8; color: #667;
    margin: 0; font-weight: 300; max-width: 680px;
  }
  .ab-values__icon {
    width: 40px; height: 40px; border-radius: 8px;
    background: rgba(232,37,58,0.08);
    display: flex; align-items: center; justify-content: center;
    color: var(--red); margin-bottom: 14px;
  }

  /* ── STATS ─────────────────────────────────────────────────── */
  .ab-stats { background: var(--slate); padding: 72px 0; }
  .ab-stats__grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 0;
  }
  .ab-stats__item {
    text-align: center; padding: 32px 20px;
    border-right: 1px solid rgba(255,255,255,0.07);
  }
  .ab-stats__item:last-child { border-right: none; }
  .ab-stats__num {
    font-size: 42px; font-weight: 900; color: var(--red);
    display: block; line-height: 1; margin-bottom: 8px;
  }
  .ab-stats__label {
    font-size: 12px; color: rgba(255,255,255,0.5);
    letter-spacing: 1px; text-transform: uppercase; line-height: 1.5;
  }
  .ab-stats__cred {
    max-width: 680px; margin: 48px auto 0;
    text-align: center;
    font-size: 15px; color: rgba(255,255,255,0.55);
    line-height: 1.8; font-weight: 300;
    padding-top: 48px;
    border-top: 1px solid rgba(255,255,255,0.07);
  }

  /* ── TEAM ──────────────────────────────────────────────────── */
  .ab-team { background: #fff; padding: 100px 0; }
  .ab-team__header { text-align: center; margin-bottom: 72px; }
  .ab-team__header h2 {
    font-size: clamp(26px, 3vw, 42px); color: var(--slate); margin: 0;
  }
  .ab-team__grid {
    display: grid;
    grid-template-columns: 380px 1fr;
    gap: 64px; align-items: start;
  }

  /* Antonio card */
  .ab-team__owner-card {
    background: var(--light); border-radius: 14px; overflow: hidden;
  }
  .ab-team__owner-photo {
    height: 380px; overflow: hidden; position: relative;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
  }
  .ab-team__owner-photo img {
    width: 100%; height: 100%; object-fit: cover; object-position: top;
  }
  .ab-team__owner-photo-placeholder {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    color: rgba(255,255,255,0.1);
  }
  .ab-team__owner-info { padding: 28px 32px; }
  .ab-team__owner-name {
    font-size: 20px; font-weight: 900; color: var(--slate);
    margin: 0 0 4px;
  }
  .ab-team__owner-role {
    font-size: 12px; font-weight: 600; letter-spacing: 1.5px;
    text-transform: uppercase; color: var(--aqua); margin-bottom: 16px; display: block;
  }
  .ab-team__owner-bio {
    font-size: 14px; line-height: 1.75; color: #667;
    margin: 0 0 16px; font-weight: 300;
  }
  .ab-team__owner-tag {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(106,154,154,0.1); border: 1px solid rgba(106,154,154,0.25);
    color: var(--aqua); font-size: 11px; font-weight: 600;
    letter-spacing: 1px; text-transform: uppercase;
    padding: 5px 12px; border-radius: 100px;
  }

  /* Crew section */
  .ab-team__crew { display: flex; flex-direction: column; gap: 28px; }
  .ab-team__crew-photo {
    border-radius: 14px; overflow: hidden;
    height: 280px; background: linear-gradient(135deg, #1e3e3d, var(--slate));
    position: relative;
  }
  .ab-team__crew-photo img {
    width: 100%; height: 100%; object-fit: cover; display: block;
  }
  .ab-team__crew-photo-placeholder {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    color: rgba(255,255,255,0.1);
  }
  .ab-team__crew-copy h3 {
    font-size: 22px; color: var(--slate); margin: 0 0 14px;
  }
  .ab-team__crew-copy p {
    font-size: 15px; line-height: 1.8; color: #667;
    margin: 0; font-weight: 300;
  }

  /* ── FINAL CTA ─────────────────────────────────────────────── */
  .ab-cta {
    background: var(--slate); padding: 100px 0;
    text-align: center; position: relative; overflow: hidden;
  }
  .ab-cta::before {
    content: '';
    position: absolute; top: -80px; left: 50%; transform: translateX(-50%);
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(106,154,154,0.07) 0%, transparent 70%);
    pointer-events: none;
  }
  .ab-cta__inner { position: relative; z-index: 1; max-width: 640px; margin: 0 auto; }
  .ab-cta h2 {
    font-size: clamp(26px, 3vw, 42px); color: #fff; margin: 0 0 16px;
  }
  .ab-cta p {
    font-size: 16px; color: rgba(255,255,255,0.6);
    line-height: 1.75; margin: 0 0 40px; font-weight: 300;
  }
  .ab-cta__btns {
    display: flex; flex-wrap: wrap;
    gap: 14px; justify-content: center;
  }

  /* ── RESPONSIVE ────────────────────────────────────────────── */
  @media (max-width: 1024px) {
    .ab-story__grid { grid-template-columns: 1fr; gap: 48px; }
    .ab-story__photo { position: static; }
    .ab-story__photo-wrap { height: 360px; }
    .ab-team__grid { grid-template-columns: 1fr; gap: 48px; }
    .ab-stats__grid { grid-template-columns: repeat(3, 1fr); }
    .ab-stats__item:nth-child(3) { border-right: none; }
  }
  @media (max-width: 768px) {
    .ab-stats__grid { grid-template-columns: repeat(2, 1fr); gap: 0; }
    .ab-stats__item:nth-child(2) { border-right: none; }
    .ab-stats__item:nth-child(3) { border-right: 1px solid rgba(255,255,255,0.07); }
    .ab-timeline__item { min-width: 110px; }
    .ab-cta__btns { flex-direction: column; align-items: center; }
    .ab-values__item { grid-template-columns: 1fr; gap: 0; }
    .ab-values__num { font-size: 36px; margin-bottom: 8px; }
  }
  @media (max-width: 480px) {
    .ab-stats__grid { grid-template-columns: 1fr 1fr; }
    .ab-stats__item:nth-child(3) { border-right: none; }
  }
</style>

<div class="ab">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="ab-hero">
    <div class="ab-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="ab-hero__overlay"></div>
    <div class="ab-hero__content">
      <div class="section-inner">
        <nav class="ab-hero__breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span>›</span>
          <span style="color:rgba(255,255,255,0.75);">About</span>
        </nav>
        <span class="eyebrow" style="color:var(--mist);">About Us</span>
        <h1>We don't just fix roofs.<br>We protect families.</h1>
        <p class="ab-hero__sub">Family-owned. Owner on every job. Eighteen years of honest work across Oregon and Washington.</p>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       OUR STORY
  ═══════════════════════════════════════════════════════════ -->
  <section class="ab-story">
    <div class="section-inner">
      <div class="ab-story__grid">

        <div class="ab-story__copy">
          <span class="eyebrow">Our Story</span>
          <h2>Built with one truck and one promise.</h2>
          <p>Over eighteen years ago, Antonio Robles started AR Roofing &amp; Construction with a single truck and a commitment that still drives the company today: treat every home like it's your own.</p>
          <p>That commitment hasn't changed as the company has grown. Antonio still climbs every roof. He still inspects every project. He still sits down with every client to explain exactly what he found and what he recommends.</p>
          <p>AR Roofing is not a franchise. It is not a call center. It is a team of people who live in the communities they serve — from Portland to Wishram, from Hood River to Goldendale. When we say we're local, we mean that our kids go to school here, we shop at the same stores, and we see our clients at the gas station.</p>
          <p>That proximity is our accountability. We can't disappear after a job because we're not going anywhere.</p>
        </div>

        <div class="ab-story__photo">
          <div class="ab-story__photo-wrap">
            <?php if($story_photo_img): ?>
              <img src="<?= esc_url($story_photo_img) ?>" alt="Antonio Robles — AR Roofing & Construction" loading="lazy">
            <?php else: ?>
              <div class="ab-story__photo-placeholder">
                <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
            <?php endif; ?>
            <div class="ab-story__photo-badge">
              <strong>18+</strong>
              <span>Years<br>Experience</span>
            </div>
          </div>
        </div>

      </div>

      <!-- Timeline -->
      <div class="ab-timeline">
        <h3>Our Journey</h3>
        <div class="ab-timeline__track">
          <?php
          $milestones = [
            ['year' => '2006',  'label' => 'Founded in\nPortland, OR'],
            ['year' => '2010',  'label' => 'First 100\nprojects completed'],
            ['year' => '2015',  'label' => 'Expanded to\nWashington State'],
            ['year' => '2020',  'label' => '18 cities\nacross two states'],
            ['year' => 'Today', 'label' => '24/7 emergency\nresponse team'],
          ];
          foreach ($milestones as $m) : ?>
            <div class="ab-timeline__item">
              <div class="ab-timeline__dot">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="ab-timeline__year"><?= esc_html($m['year']) ?></span>
              <span class="ab-timeline__label"><?= nl2br(esc_html($m['label'])) ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       VALUES
  ═══════════════════════════════════════════════════════════ -->
  <section class="ab-values">
    <div class="section-inner">
      <div class="ab-values__header">
        <span class="eyebrow">Our Values</span>
        <h2>What we believe.</h2>
      </div>
      <div class="ab-values__list">
        <?php
        $values = [
          [
            'num'   => '01',
            'title' => 'Honesty Over Sales',
            'body'  => 'If your roof needs a repair, we repair it. If it needs replacement, we show you why. If it doesn\'t need anything, we tell you that too. We\'d rather earn your trust than close a deal.',
            'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
          ],
          [
            'num'   => '02',
            'title' => 'Quality Without Shortcuts',
            'body'  => 'The right number of nails per shingle. Proper protection underneath. Correct installation around every pipe, vent, and chimney. The details other contractors skip are the ones we focus on.',
            'icon'  => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
          ],
          [
            'num'   => '03',
            'title' => 'Respect for Your Property',
            'body'  => 'Tarps down before we start. Magnetic sweep for every nail. All debris removed. When we leave, your property looks better than when we arrived. Our reviews mention this more than anything else.',
            'icon'  => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/>',
          ],
          [
            'num'   => '04',
            'title' => 'Clear Communication',
            'body'  => 'We explain what we\'re doing and why in words that make sense. No jargon. No surprises. You get photos, a written report, and the confidence to make your own decision.',
            'icon'  => '<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>',
          ],
          [
            'num'   => '05',
            'title' => 'Follow-Through',
            'body'  => 'The job doesn\'t end when we leave. Every project includes a final walkthrough with the client. And if you call six months later because something doesn\'t look right, we answer the phone. We always answer the phone.',
            'icon'  => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>',
          ],
        ];
        foreach ($values as $v) : ?>
          <div class="ab-values__item">
            <div class="ab-values__num"><?= $v['num'] ?></div>
            <div class="ab-values__body">
              <div class="ab-values__icon">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $v['icon'] ?></svg>
              </div>
              <h3><?= esc_html($v['title']) ?></h3>
              <p><?= esc_html($v['body']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       STATS & CREDENTIALS
  ═══════════════════════════════════════════════════════════ -->
  <section class="ab-stats">
    <div class="section-inner">
      <div class="ab-stats__grid">
        <?php
        $stats = [
          ['num' => '18+',  'label' => 'Years in\nBusiness'],
          ['num' => '18',   'label' => 'Cities\nServed'],
          ['num' => '2',    'label' => 'States\nLicensed'],
          ['num' => '5★',   'label' => 'Google\nRated'],
          ['num' => '24/7', 'label' => 'Emergency\nResponse'],
        ];
        foreach ($stats as $s) : ?>
          <div class="ab-stats__item">
            <span class="ab-stats__num"><?= $s['num'] ?></span>
            <span class="ab-stats__label"><?= nl2br(esc_html($s['label'])) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="ab-stats__cred">Fully licensed and insured in Oregon and Washington. We meet every requirement both states demand. Your property and your investment are fully protected from the first call through the final walkthrough and beyond.</p>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       MEET THE TEAM
  ═══════════════════════════════════════════════════════════ -->
  <section class="ab-team">
    <div class="section-inner">
      <div class="ab-team__header">
        <span class="eyebrow">Meet the Team</span>
        <h2>The people behind your roof.</h2>
      </div>
      <div class="ab-team__grid">

        <!-- Antonio -->
        <div class="ab-team__owner-card">
          <div class="ab-team__owner-photo">
            <?php if($antonio_photo_img): ?>
              <img src="<?= esc_url($antonio_photo_img) ?>" alt="Antonio Robles — Owner & Lead Inspector, AR Roofing" loading="lazy">
            <?php else: ?>
              <div class="ab-team__owner-photo-placeholder">
                <svg width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
              </div>
            <?php endif; ?>
          </div>
          <div class="ab-team__owner-info">
            <h3 class="ab-team__owner-name">Antonio Robles</h3>
            <span class="ab-team__owner-role">Owner &amp; Lead Inspector</span>
            <p class="ab-team__owner-bio">Eighteen years on Oregon and Washington roofs. Personally inspects every project. The person who gives you the estimate is the person on your roof.</p>
            <span class="ab-team__owner-tag">
              <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
              Bilingual — English &amp; Spanish
            </span>
          </div>
        </div>

        <!-- Crew -->
        <div class="ab-team__crew">
          <div class="ab-team__crew-photo">
            <?php if($crew_photo_img): ?>
              <img src="<?= esc_url($crew_photo_img) ?>" alt="AR Roofing crew on a job site in Oregon" loading="lazy">
            <?php else: ?>
              <div class="ab-team__crew-photo-placeholder">
                <svg width="72" height="72" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
              </div>
            <?php endif; ?>
          </div>
          <div class="ab-team__crew-copy">
            <h3>The AR Roofing Crew</h3>
            <p>Experienced, trained, and committed to clean, professional work on every job. Our crew members are long-term team members, not day laborers rotated between companies. Every person on your roof knows what we expect — because they've been doing it our way for years.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       FINAL CTA
  ═══════════════════════════════════════════════════════════ -->
  <section class="ab-cta">
    <div class="section-inner">
      <div class="ab-cta__inner">
        <span class="eyebrow" style="color:var(--mist);">Get Started</span>
        <h2>Ready to work with a team that does things right?</h2>
        <p>The best way to find out if we're the right fit is a conversation. Tell us about your roof — we'll take it from there.</p>
        <div class="ab-cta__btns">
          <a href="/contact" class="btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
            Get a Free Inspection
          </a>
          <a href="tel:5416750577" class="btn-ghost">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call 541-675-0577
          </a>
        </div>
      </div>
    </div>
  </section>

</div><!-- /.ab -->

<?php get_footer(); ?>