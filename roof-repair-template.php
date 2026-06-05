<?php
/**
 * Template Name: Roof Repair
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   IMÁGENES — Pega aquí las URLs de tus medios de WordPress
   Media Library → click imagen → copiar URL → pegar abajo
   ════════════════════════════════════════════════════════════ */

// ── HERO ─────────────────────────────────────────────────────
$hero_bg_img     = '/wp-content/uploads/2026/06/Estampados_3_ARRC-scaled.png';   // Antonio inspeccionando o reparación en progreso

// ── REPAIR VS REPLACE ─────────────────────────────────────────
$split_left_img  = '';   // Imagen lado "When repair makes sense"
$split_right_img = '';   // Imagen lado "When replacement makes sense"

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

  .rr * { box-sizing: border-box; }
  .rr { font-family: 'GT America', sans-serif; color: var(--slate); }
  .rr h1, .rr h2, .rr h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.1; }
  .rr .eyebrow {
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: var(--aqua);
    margin-bottom: 14px; display: block;
  }
  .rr .section-inner { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
  .rr .btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 14px 32px; background: var(--red); color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    transition: background .2s, transform .15s;
  }
  .rr .btn-primary:hover { background: var(--clay); transform: translateY(-2px); }
  .rr .btn-ghost {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 13px 32px; background: transparent; color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    border: 2px solid rgba(255,255,255,0.6);
    transition: background .2s, border-color .2s;
  }
  .rr .btn-ghost:hover { background: rgba(255,255,255,0.1); border-color: #fff; }

  /* ── HERO ──────────────────────────────────────────────────── */
  .rr-hero {
    position: relative; min-height: 44vh;
    display: flex; flex-direction: column; justify-content: flex-end;
    overflow: hidden; background: var(--slate);
  }
  .rr-hero__bg {
    position: absolute; inset: 0;
    background-size: cover; background-position: center;
    z-index: 0;
  }
  .rr-hero__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(15,35,34,0.92) 0%, rgba(15,35,34,0.55) 60%, rgba(15,35,34,0.30) 100%);
    z-index: 1;
  }
  .rr-hero__content {
    position: relative; z-index: 2;
    max-width: 1200px; margin: 0 auto;
    padding: 32px 24px 60px;
  }
  .rr-hero__breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12px; color: rgba(255,255,255,0.5);
    margin-bottom: 20px; letter-spacing: 0.5px;
  }
  .rr-hero__breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color .2s; }
  .rr-hero__breadcrumb a:hover { color: var(--mist); }
  .rr-hero__breadcrumb span { color: rgba(255,255,255,0.25); }
  .rr-hero h1 {
    font-size: clamp(26px, 3.8vw, 52px);
    color: #fff; margin: 0 0 18px; max-width: 760px;
  }
  .rr-hero__sub {
    font-size: clamp(14px, 1.5vw, 17px);
    color: rgba(255,255,255,0.72); font-weight: 300;
    line-height: 1.7; max-width: 560px; margin: 0 0 32px;
  }
  .rr-hero__ctas { display: flex; flex-wrap: wrap; gap: 14px; }

  /* ── SIGNS ─────────────────────────────────────────────────── */
  .rr-signs { background: var(--light); padding: 100px 0; }
  .rr-signs__header { text-align: center; margin-bottom: 60px; }
  .rr-signs__header h2 {
    font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0;
  }
  .rr-signs__grid {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px;
    margin-bottom: 48px;
  }
  .rr-signs__card {
    background: #fff; border-radius: 12px; padding: 32px 28px;
    box-shadow: 0 2px 16px rgba(15,35,34,0.06);
    border-left: 3px solid transparent;
    transition: border-color .25s, transform .25s, box-shadow .25s;
    display: flex; align-items: flex-start; gap: 18px;
  }
  .rr-signs__card:hover {
    border-color: var(--red);
    transform: translateY(-3px);
    box-shadow: 0 10px 32px rgba(15,35,34,0.11);
  }
  .rr-signs__icon {
    width: 44px; height: 44px; border-radius: 10px;
    background: rgba(232,37,58,0.08);
    display: flex; align-items: center; justify-content: center;
    color: var(--red); flex-shrink: 0;
  }
  .rr-signs__card h3 {
    font-size: 15px; font-weight: 700; color: var(--slate);
    margin: 0 0 6px; line-height: 1.35;
  }
  .rr-signs__card p {
    font-size: 13.5px; line-height: 1.6; color: #778;
    margin: 0; font-weight: 300;
  }
  .rr-signs__note {
    max-width: 640px; margin: 0 auto;
    text-align: center; padding: 28px 36px;
    background: rgba(232,37,58,0.06);
    border: 1px solid rgba(232,37,58,0.15);
    border-radius: 12px;
    font-size: 15px; color: var(--slate); line-height: 1.7;
  }
  .rr-signs__note strong { color: var(--red); }

  /* ── REPAIR VS REPLACE ─────────────────────────────────────── */
  .rr-vs { background: #fff; padding: 100px 0; }
  .rr-vs__header { text-align: center; margin-bottom: 64px; }
  .rr-vs__header h2 {
    font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0 0 16px;
  }
  .rr-vs__header p {
    font-size: 16px; color: #667; line-height: 1.75;
    font-weight: 300; max-width: 680px; margin: 0 auto;
  }
  .rr-vs__grid {
    display: grid; grid-template-columns: 1fr 1fr; gap: 28px;
    margin-bottom: 56px;
  }
  .rr-vs__col {
    border-radius: 14px; overflow: hidden;
  }
  .rr-vs__col-img {
    height: 220px; overflow: hidden; position: relative;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
  }
  .rr-vs__col-img img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .5s ease;
  }
  .rr-vs__col:hover .rr-vs__col-img img { transform: scale(1.04); }
  .rr-vs__col-img-placeholder {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    color: rgba(255,255,255,0.1);
  }
  .rr-vs__col-body {
    padding: 32px;
    border: 1px solid #eee; border-top: none;
    border-radius: 0 0 14px 14px;
  }
  .rr-vs__col--repair .rr-vs__col-body { border-top: 3px solid var(--aqua); }
  .rr-vs__col--replace .rr-vs__col-body { border-top: 3px solid var(--red); }
  .rr-vs__col-label {
    font-size: 10px; font-weight: 700; letter-spacing: 2px;
    text-transform: uppercase; margin-bottom: 14px; display: block;
  }
  .rr-vs__col--repair .rr-vs__col-label { color: var(--aqua); }
  .rr-vs__col--replace .rr-vs__col-label { color: var(--red); }
  .rr-vs__col h3 { font-size: 20px; color: var(--slate); margin: 0 0 16px; }
  .rr-vs__col-list {
    list-style: none; margin: 0; padding: 0;
    display: flex; flex-direction: column; gap: 10px;
  }
  .rr-vs__col-list li {
    display: flex; align-items: flex-start; gap: 10px;
    font-size: 14px; color: #556; line-height: 1.5; font-weight: 300;
  }
  .rr-vs__col-list li::before {
    content: ''; width: 6px; height: 6px;
    border-radius: 50%; flex-shrink: 0; margin-top: 5px;
  }
  .rr-vs__col--repair .rr-vs__col-list li::before { background: var(--aqua); }
  .rr-vs__col--replace .rr-vs__col-list li::before { background: var(--red); }

  /* Trust statement */
  .rr-vs__trust {
    background: var(--light); border-radius: 14px;
    padding: 40px 48px; text-align: center;
    border-left: 4px solid var(--aqua);
    text-align: left; display: flex; gap: 24px; align-items: flex-start;
  }
  .rr-vs__trust-icon {
    width: 48px; height: 48px; border-radius: 10px;
    background: rgba(106,154,154,0.12);
    display: flex; align-items: center; justify-content: center;
    color: var(--aqua); flex-shrink: 0;
  }
  .rr-vs__trust-text p {
    font-size: 15.5px; color: var(--slate); line-height: 1.8;
    margin: 0; font-weight: 300;
  }
  .rr-vs__trust-text p em { font-style: normal; font-weight: 600; color: var(--slate); }

  /* ── COMMON REPAIRS ────────────────────────────────────────── */
  .rr-types { background: var(--slate); padding: 100px 0; }
  .rr-types__header { text-align: center; margin-bottom: 60px; }
  .rr-types__header h2 {
    font-size: clamp(26px, 3vw, 44px); color: #fff; margin: 0;
  }
  .rr-types__grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 2px;
    background: rgba(255,255,255,0.04);
    border-radius: 14px; overflow: hidden;
    margin-bottom: 56px;
  }
  .rr-types__item {
    padding: 36px 28px;
    background: var(--slate);
    border: 1px solid rgba(255,255,255,0.05);
    transition: background .25s;
  }
  .rr-types__item:hover { background: #162e2d; }
  .rr-types__icon {
    width: 44px; height: 44px; border-radius: 10px;
    background: rgba(106,154,154,0.12);
    display: flex; align-items: center; justify-content: center;
    color: var(--aqua); margin-bottom: 18px;
  }
  .rr-types__item h3 {
    font-size: 15px; font-weight: 700; color: #fff;
    margin: 0 0 8px; line-height: 1.3;
  }
  .rr-types__item p {
    font-size: 13px; color: rgba(255,255,255,0.45);
    margin: 0; line-height: 1.6; font-weight: 300;
  }

  /* ── FINAL CTA ─────────────────────────────────────────────── */
  .rr-cta {
    background: var(--slate); padding: 100px 0;
    text-align: center; position: relative; overflow: hidden;
    border-top: 1px solid rgba(255,255,255,0.06);
  }
  .rr-cta::before {
    content: '';
    position: absolute; top: -80px; left: 50%; transform: translateX(-50%);
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(106,154,154,0.07) 0%, transparent 70%);
    pointer-events: none;
  }
  .rr-cta__inner { position: relative; z-index: 1; max-width: 600px; margin: 0 auto; }
  .rr-cta h2 { font-size: clamp(26px, 3vw, 42px); color: #fff; margin: 0 0 14px; }
  .rr-cta p {
    font-size: 16px; color: rgba(255,255,255,0.6);
    line-height: 1.75; margin: 0 0 40px; font-weight: 300;
  }
  .rr-cta__btns { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }

  /* ── RESPONSIVE ────────────────────────────────────────────── */
  @media (max-width: 1024px) {
    .rr-types__grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 768px) {
    .rr-signs__grid { grid-template-columns: 1fr; }
    .rr-vs__grid { grid-template-columns: 1fr; }
    .rr-types__grid { grid-template-columns: repeat(2, 1fr); }
    .rr-hero__ctas { flex-direction: column; align-items: flex-start; }
    .rr-cta__btns { flex-direction: column; align-items: center; }
    .rr-vs__trust { flex-direction: column; gap: 16px; }
  }
  @media (max-width: 480px) {
    .rr-types__grid { grid-template-columns: 1fr; }
    .rr-signs__grid { grid-template-columns: 1fr; }
  }
</style>

<div class="rr">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="rr-hero">
    <div class="rr-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="rr-hero__overlay"></div>
    <div class="rr-hero__content">
      <nav class="rr-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>›</span>
        <a href="/services">Services</a>
        <span>›</span>
        <span style="color:rgba(255,255,255,0.75);">Roof Repair</span>
      </nav>
      <span class="eyebrow" style="color:var(--mist);">Roof Repair</span>
      <h1>Not every roof problem needs a new roof. Most don't.</h1>
      <p class="rr-hero__sub">Honest, efficient roof repair across Oregon and Washington. We fix what needs fixing — nothing more, nothing less.</p>
      <div class="rr-hero__ctas">
        <a href="/contact" class="btn-primary">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
          Schedule a Free Inspection
        </a>
        <a href="tel:5416450577" class="btn-ghost">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call 541-675-0577
        </a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       SIGNS
  ═══════════════════════════════════════════════════════════ -->
  <section class="rr-signs">
    <div class="section-inner">
      <div class="rr-signs__header">
        <span class="eyebrow">Warning Signs</span>
        <h2>How to know if your roof needs attention.</h2>
      </div>
      <div class="rr-signs__grid">
        <?php
        $signs = [
          [
            'title' => 'Ceiling stains that grow when it rains',
            'body'  => 'Water stains that expand after rain aren\'t cosmetic. They indicate active water intrusion — moisture finding a path through your roof and into your home.',
            'icon'  => '<path d="M12 2v6"/><path d="M12 22v-6"/><path d="m4.93 4.93 4.24 4.24"/><path d="m14.83 14.83 4.24 4.24"/><path d="M2 12h6"/><path d="M22 12h-6"/><path d="m4.93 19.07 4.24-4.24"/><path d="m14.83 9.17 4.24-4.24"/>',
          ],
          [
            'title' => 'Shingles on the ground after a storm',
            'body'  => 'Missing shingles leave exposed areas vulnerable to water damage. Even a few displaced shingles can allow significant moisture into the wood deck below.',
            'icon'  => '<path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/><path d="M22 10a3 3 0 0 0-3-3h-2.207M2 16.071A7 7 0 0 0 9 19"/>',
          ],
          [
            'title' => 'Sand-like granules in your gutters',
            'body'  => 'Asphalt shingles shed protective granules when they age. Heavy granule loss in gutters means your shingles are losing UV and weather protection — a clear sign of advanced wear.',
            'icon'  => '<path d="M3 6h18"/><path d="M7 12h10"/><path d="M10 18h4"/>',
          ],
          [
            'title' => 'Energy bills rising for no clear reason',
            'body'  => 'Compromised roofing or attic insulation can allow conditioned air to escape and outside air to infiltrate. If your HVAC costs are climbing, your roof may be part of the problem.',
            'icon'  => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>',
          ],
          [
            'title' => 'Musty smell in your attic or upper floor',
            'body'  => 'A persistent musty odor usually means moisture is accumulating somewhere it shouldn\'t. Roof leaks often go undetected until mold or mildew has already started growing.',
            'icon'  => '<path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/>',
          ],
          [
            'title' => 'Light visible through attic roof boards',
            'body'  => 'If you can see daylight through the roof deck when standing in your attic, water can get in just as easily. This is a serious warning that needs immediate attention.',
            'icon'  => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/>',
          ],
        ];
        foreach ($signs as $s) : ?>
          <div class="rr-signs__card">
            <div class="rr-signs__icon">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $s['icon'] ?></svg>
            </div>
            <div>
              <h3><?= esc_html($s['title']) ?></h3>
              <p><?= esc_html($s['body']) ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="rr-signs__note">
        Any one of these deserves a professional look. <strong>If you have two or more, don't wait.</strong> The longer a roof problem goes unaddressed, the more it costs to fix.
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       REPAIR VS REPLACE
  ═══════════════════════════════════════════════════════════ -->
  <section class="rr-vs">
    <div class="section-inner">
      <div class="rr-vs__header">
        <span class="eyebrow">Repair or Replace?</span>
        <h2>Here's how we decide.</h2>
        <p>When we inspect your roof, we're answering one question: does this need a repair, or does it need a full replacement? Here's the honest framework we use.</p>
      </div>

      <div class="rr-vs__grid">

        <!-- Repair -->
        <div class="rr-vs__col rr-vs__col--repair">
          <div class="rr-vs__col-img">
            <?php if($split_left_img): ?>
              <img src="<?= esc_url($split_left_img) ?>" alt="Roof repair — AR Roofing Oregon" loading="lazy">
            <?php else: ?>
              <div class="rr-vs__col-img-placeholder">
                <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
              </div>
            <?php endif; ?>
          </div>
          <div class="rr-vs__col-body">
            <span class="rr-vs__col-label">Usually a repair when...</span>
            <h3>The damage is localized</h3>
            <ul class="rr-vs__col-list">
              <li>Damage is limited to a specific section of the roof</li>
              <li>Only a few shingles are missing or damaged</li>
              <li>The leak has a single, identifiable entry point</li>
              <li>The wood deck underneath is solid in most areas</li>
              <li>Your roof is under 15 years old with no prior major work</li>
              <li>The fix costs hundreds, not thousands</li>
            </ul>
          </div>
        </div>

        <!-- Replace -->
        <div class="rr-vs__col rr-vs__col--replace">
          <div class="rr-vs__col-img">
            <?php if($split_right_img): ?>
              <img src="<?= esc_url($split_right_img) ?>" alt="Roof replacement — AR Roofing Oregon" loading="lazy">
            <?php else: ?>
              <div class="rr-vs__col-img-placeholder">
                <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
            <?php endif; ?>
          </div>
          <div class="rr-vs__col-body">
            <span class="rr-vs__col-label">Usually a replacement when...</span>
            <h3>The damage is widespread</h3>
            <ul class="rr-vs__col-list">
              <li>Damage spans multiple areas across the entire surface</li>
              <li>The wood deck is soft or rotted in multiple places</li>
              <li>You're past 75% of your roof's expected lifespan</li>
              <li>Multiple repairs have been done in recent years</li>
              <li>Your shingles are curling, cracking, or heavily granule-stripped across the surface</li>
              <li>Replacement offers better long-term value than continued repair</li>
            </ul>
          </div>
        </div>

      </div>

      <!-- Trust statement -->
      <div class="rr-vs__trust">
        <div class="rr-vs__trust-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/></svg>
        </div>
        <div class="rr-vs__trust-text">
          <p>We show you exactly what we're seeing, explain the cost of both options, and let you decide. <em>Our job is to give you the information. Your job is to choose what's right for your family and your budget.</em> We'd rather tell you a repair is all you need than sell you a replacement you don't.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       COMMON REPAIRS
  ═══════════════════════════════════════════════════════════ -->
  <section class="rr-types">
    <div class="section-inner">
      <div class="rr-types__header">
        <span class="eyebrow" style="color:var(--mist);">What We Fix</span>
        <h2>Common repairs we handle every week.</h2>
      </div>
      <div class="rr-types__grid">
        <?php
        $types = [
          [
            'title' => 'Leak Detection & Repair',
            'body'  => 'We find the source — not just the symptom — and fix it correctly.',
            'icon'  => '<path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/>',
          ],
          [
            'title' => 'Storm Damage Repair',
            'body'  => 'Wind, hail, debris — we assess and document everything for you.',
            'icon'  => '<path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"/>',
          ],
          [
            'title' => 'Missing or Damaged Shingles',
            'body'  => 'Replaced with matching material, properly sealed and secured.',
            'icon'  => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>',
          ],
          [
            'title' => 'Metal Work Repair',
            'body'  => 'Flashing, valleys, ridge caps — the metal details that fail first.',
            'icon'  => '<rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/>',
          ],
          [
            'title' => 'Vent & Pipe Seal Repair',
            'body'  => 'Failed boots and sealants around penetrations are a top source of leaks.',
            'icon'  => '<circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/>',
          ],
          [
            'title' => 'Gutter Repair & Cleaning',
            'body'  => 'Gutters that don\'t drain properly push water back under the roofline.',
            'icon'  => '<path d="M3 6h18"/><path d="M7 12h10"/><path d="M10 18h4"/>',
          ],
          [
            'title' => 'Wood Deck Repair',
            'body'  => 'Soft or rotted decking is replaced before any new roofing goes on.',
            'icon'  => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
          ],
          [
            'title' => 'Emergency Tarping',
            'body'  => 'Immediate protection for your property while permanent repair is scheduled.',
            'icon'  => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
          ],
        ];
        foreach ($types as $t) : ?>
          <div class="rr-types__item">
            <div class="rr-types__icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $t['icon'] ?></svg>
            </div>
            <h3><?= esc_html($t['title']) ?></h3>
            <p><?= esc_html($t['body']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       FINAL CTA
  ═══════════════════════════════════════════════════════════ -->
  <section class="rr-cta">
    <div class="section-inner">
      <div class="rr-cta__inner">
        <span class="eyebrow" style="color:var(--mist);">Get Started</span>
        <h2>Let's find out what your roof actually needs.</h2>
        <p>We'll inspect it, tell you exactly what we see, and give you honest options. No pressure. No upsell. Just the truth about your roof.</p>
        <div class="rr-cta__btns">
          <a href="/contact" class="btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
            Get a Free Inspection
          </a>
          <a href="tel:5416450577" class="btn-ghost">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call 541-675-0577
          </a>
        </div>
      </div>
    </div>
  </section>

</div><!-- /.rr -->

<?php get_footer(); ?>