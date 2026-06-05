<?php
/**
 * Template Name: Roof Installation
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   IMÁGENES — Pega aquí las URLs de tus medios de WordPress
   Media Library → click imagen → copiar URL → pegar abajo
   ════════════════════════════════════════════════════════════ */

// ── HERO ─────────────────────────────────────────────────────
$hero_bg_img          = '/wp-content/uploads/2026/06/Estampados_3_ARRC-scaled.png';   // Drone shot de techo instalado, paisaje del Gorge

// ── MATERIALES ───────────────────────────────────────────────
$material_asphalt_img = '';   // Foto de techo de asphalt shingles
$material_metal_img   = '';   // Foto de techo de metal
$material_tpo_img     = '';   // Foto de sistema TPO
$material_pvc_img     = '';   // Foto de sistema PVC

// ── PROCESO ──────────────────────────────────────────────────
$process_1_img        = '';   // Paso 01 — Inspección y selección
$process_2_img        = '';   // Paso 02 — Tear-off
$process_3_img        = '';   // Paso 03 — Instalación
$process_4_img        = '';   // Paso 04 — Limpieza y walkthrough

// ── GALERÍA ───────────────────────────────────────────────────
$gallery_1_img        = '';   // Proyecto 1
$gallery_2_img        = '';   // Proyecto 2
$gallery_3_img        = '';   // Proyecto 3
$gallery_4_img        = '';   // Proyecto 4
$gallery_5_img        = '';   // Proyecto 5
$gallery_6_img        = '';   // Proyecto 6

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

  .ri * { box-sizing: border-box; }
  .ri { font-family: 'GT America', sans-serif; color: var(--slate); }
  .ri h1, .ri h2, .ri h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.1; }
  .ri .eyebrow {
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: var(--aqua);
    margin-bottom: 14px; display: block;
  }
  .ri .section-inner { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
  .ri .btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 14px 32px; background: var(--red); color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    transition: background .2s, transform .15s;
  }
  .ri .btn-primary:hover { background: var(--clay); transform: translateY(-2px); }
  .ri .btn-ghost {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 13px 32px; background: transparent; color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    border: 2px solid rgba(255,255,255,0.6);
    transition: background .2s, border-color .2s;
  }
  .ri .btn-ghost:hover { background: rgba(255,255,255,0.1); border-color: #fff; }

  /* ── HERO ──────────────────────────────────────────────────── */
  .ri-hero {
    position: relative; min-height: 44vh;
    display: flex; flex-direction: column; justify-content: flex-end;
    overflow: hidden; background: var(--slate);
  }
  .ri-hero__bg {
    position: absolute; inset: 0;
    background-size: cover; background-position: center;
    z-index: 0;
  }
  .ri-hero__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(15,35,34,0.92) 0%, rgba(15,35,34,0.55) 60%, rgba(15,35,34,0.30) 100%);
    z-index: 1;
  }
  .ri-hero__content {
    position: relative; z-index: 2;
    max-width: 1200px; margin: 0 auto;
    padding: 32px 24px 60px;
  }
  .ri-hero__breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12px; color: rgba(255,255,255,0.5);
    margin-bottom: 20px; letter-spacing: 0.5px;
  }
  .ri-hero__breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color .2s; }
  .ri-hero__breadcrumb a:hover { color: var(--mist); }
  .ri-hero__breadcrumb span { color: rgba(255,255,255,0.25); }
  .ri-hero h1 {
    font-size: clamp(28px, 4vw, 56px);
    color: #fff; margin: 0 0 18px; max-width: 720px;
  }
  .ri-hero__sub {
    font-size: clamp(14px, 1.5vw, 17px);
    color: rgba(255,255,255,0.72); font-weight: 300;
    line-height: 1.7; max-width: 600px; margin: 0 0 32px;
  }
  .ri-hero__ctas { display: flex; flex-wrap: wrap; gap: 14px; align-items: center; }

  /* ── MATERIALS ─────────────────────────────────────────────── */
  .ri-materials { background: var(--light); padding: 100px 0; }
  .ri-materials__header { text-align: center; margin-bottom: 60px; }
  .ri-materials__header h2 {
    font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0;
  }
  .ri-materials__grid {
    display: grid; grid-template-columns: repeat(2, 1fr); gap: 28px;
  }
  .ri-material-card {
    background: #fff; border-radius: 14px; overflow: hidden;
    box-shadow: 0 2px 20px rgba(15,35,34,0.07);
    transition: transform .25s, box-shadow .25s;
    display: flex; flex-direction: column;
  }
  .ri-material-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 48px rgba(15,35,34,0.13);
  }
  .ri-material-card__img {
    height: 240px; overflow: hidden; position: relative;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
  }
  .ri-material-card__img img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .5s ease;
  }
  .ri-material-card:hover .ri-material-card__img img { transform: scale(1.05); }
  .ri-material-card__img-placeholder {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
  }
  .ri-material-card__body { padding: 32px; flex: 1; display: flex; flex-direction: column; }
  .ri-material-card__tag {
    display: inline-block; margin-bottom: 14px;
    padding: 4px 12px; background: rgba(106,154,154,0.1);
    border: 1px solid rgba(106,154,154,0.25);
    border-radius: 100px; font-size: 10px; font-weight: 700;
    letter-spacing: 1.5px; text-transform: uppercase; color: var(--aqua);
  }
  .ri-material-card h3 {
    font-size: 22px; color: var(--slate); margin: 0 0 12px;
  }
  .ri-material-card p {
    font-size: 14.5px; line-height: 1.75; color: #667;
    margin: 0 0 20px; font-weight: 300; flex: 1;
  }
  .ri-material-card__best {
    display: flex; align-items: flex-start; gap: 10px;
    padding: 14px 16px; background: var(--light);
    border-radius: 8px; border-left: 3px solid var(--aqua);
  }
  .ri-material-card__best-label {
    font-size: 10px; font-weight: 700; letter-spacing: 1px;
    text-transform: uppercase; color: var(--aqua);
    white-space: nowrap; margin-top: 1px;
  }
  .ri-material-card__best-text {
    font-size: 13px; color: #556; line-height: 1.5;
  }

  /* ── PROCESS ───────────────────────────────────────────────── */
  .ri-process { background: #fff; padding: 100px 0; }
  .ri-process__header { text-align: center; margin-bottom: 72px; }
  .ri-process__header h2 {
    font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0;
  }
  .ri-process__step {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 72px; align-items: center; margin-bottom: 80px;
  }
  .ri-process__step:last-of-type { margin-bottom: 0; }
  .ri-process__step--reverse .ri-process__text { order: 2; }
  .ri-process__step--reverse .ri-process__visual { order: 1; }
  .ri-process__num {
    font-size: 80px; font-weight: 900; color: var(--red);
    opacity: 0.12; line-height: 1; margin-bottom: -16px;
  }
  .ri-process__text h3 {
    font-size: 24px; color: var(--slate); margin: 0 0 14px;
  }
  .ri-process__text p {
    font-size: 15px; line-height: 1.8; color: #667;
    margin: 0; font-weight: 300;
  }
  .ri-process__visual {
    border-radius: 14px; overflow: hidden;
    height: 340px; position: relative;
    background: linear-gradient(135deg, #e8f5f5, #c8e8e8);
  }
  .ri-process__visual img {
    width: 100%; height: 100%; object-fit: cover; display: block;
  }
  .ri-process__visual-placeholder {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    color: var(--aqua); opacity: 0.3;
  }

  /* ── INCLUDED ──────────────────────────────────────────────── */
  .ri-included { background: var(--slate); padding: 100px 0; }
  .ri-included__inner {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 72px; align-items: start;
  }
  .ri-included__left h2 {
    font-size: clamp(26px, 3vw, 44px); color: #fff; margin: 0 0 16px;
  }
  .ri-included__left p {
    font-size: 15px; color: rgba(255,255,255,0.55);
    line-height: 1.8; font-weight: 300; margin: 0;
  }
  .ri-included__list {
    list-style: none; margin: 0; padding: 0;
    display: flex; flex-direction: column; gap: 0;
  }
  .ri-included__item {
    display: flex; align-items: flex-start; gap: 14px;
    padding: 16px 0;
    border-bottom: 1px solid rgba(255,255,255,0.06);
    transition: background .2s;
  }
  .ri-included__item:first-child { padding-top: 0; }
  .ri-included__item:last-child { border-bottom: none; }
  .ri-included__check {
    width: 22px; height: 22px; border-radius: 50%;
    background: rgba(232,37,58,0.15); border: 1px solid rgba(232,37,58,0.3);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0; color: var(--red); margin-top: 1px;
  }
  .ri-included__text {
    font-size: 14.5px; color: rgba(255,255,255,0.80);
    line-height: 1.5; font-weight: 300;
  }

  /* ── GALLERY ───────────────────────────────────────────────── */
  .ri-gallery { background: var(--light); padding: 100px 0; }
  .ri-gallery__header { text-align: center; margin-bottom: 56px; }
  .ri-gallery__header h2 {
    font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0;
  }
  .ri-gallery__grid {
    display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;
  }
  .ri-gallery__card {
    position: relative; border-radius: 12px; overflow: hidden;
    aspect-ratio: 4/3; background: var(--slate); cursor: pointer;
  }
  .ri-gallery__card img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .5s ease;
  }
  .ri-gallery__card:hover img { transform: scale(1.07); }
  .ri-gallery__card-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(15,35,34,0.88) 0%, transparent 55%);
    display: flex; align-items: flex-end; padding: 20px;
    opacity: 0; transition: opacity .3s ease;
  }
  .ri-gallery__card:hover .ri-gallery__card-overlay { opacity: 1; }
  .ri-gallery__location {
    font-size: 14px; font-weight: 600; color: #fff;
    display: flex; align-items: center; gap: 6px;
  }
  .ri-gallery__location svg { color: var(--aqua); }
  .ri-gallery__placeholder {
    width: 100%; height: 100%;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    gap: 10px; color: rgba(255,255,255,0.15); font-size: 12px;
  }

  /* ── FINAL CTA ─────────────────────────────────────────────── */
  .ri-cta {
    background: var(--slate); padding: 100px 0;
    text-align: center; position: relative; overflow: hidden;
  }
  .ri-cta::before {
    content: '';
    position: absolute; top: -80px; left: 50%; transform: translateX(-50%);
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(106,154,154,0.07) 0%, transparent 70%);
    pointer-events: none;
  }
  .ri-cta__inner { position: relative; z-index: 1; max-width: 640px; margin: 0 auto; }
  .ri-cta h2 {
    font-size: clamp(26px, 3vw, 44px); color: #fff; margin: 0 0 14px;
  }
  .ri-cta p {
    font-size: 16px; color: rgba(255,255,255,0.6);
    line-height: 1.75; margin: 0 0 40px; font-weight: 300;
  }
  .ri-cta__btns { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }

  /* ── RESPONSIVE ────────────────────────────────────────────── */
  @media (max-width: 1024px) {
    .ri-process__step { grid-template-columns: 1fr; gap: 32px; }
    .ri-process__step--reverse .ri-process__text { order: 1; }
    .ri-process__step--reverse .ri-process__visual { order: 2; }
    .ri-included__inner { grid-template-columns: 1fr; gap: 48px; }
  }
  @media (max-width: 768px) {
    .ri-materials__grid { grid-template-columns: 1fr; }
    .ri-gallery__grid { grid-template-columns: repeat(2, 1fr); }
    .ri-hero__ctas { flex-direction: column; align-items: flex-start; }
    .ri-cta__btns { flex-direction: column; align-items: center; }
  }
  @media (max-width: 480px) {
    .ri-gallery__grid { grid-template-columns: 1fr; }
  }
</style>

<div class="ri">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="ri-hero">
    <div class="ri-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="ri-hero__overlay"></div>
    <div class="ri-hero__content">
      <nav class="ri-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>›</span>
        <a href="/services">Services</a>
        <span>›</span>
        <span style="color:rgba(255,255,255,0.75);">Roof Installation</span>
      </nav>
      <span class="eyebrow" style="color:var(--mist);">Roof Installation</span>
      <h1>A new roof installed right.<br>The first time.</h1>
      <p class="ri-hero__sub">Professional roof installation for homes and commercial buildings across Oregon and Washington. Asphalt shingles, metal, TPO, and PVC systems. Owner-supervised on every project.</p>
      <div class="ri-hero__ctas">
        <a href="/contact" class="btn-primary">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
          Get a Free Estimate
        </a>
        <a href="tel:5416450577" class="btn-ghost">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call 541-675-0577
        </a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       MATERIALS
  ═══════════════════════════════════════════════════════════ -->
  <section class="ri-materials">
    <div class="section-inner">
      <div class="ri-materials__header">
        <span class="eyebrow">What We Install</span>
        <h2>Four roofing systems. One standard of quality.</h2>
      </div>
      <div class="ri-materials__grid">
        <?php
        $materials = [
          [
            'tag'   => 'Residential',
            'title' => 'Asphalt Shingles',
            'body'  => 'The most popular choice for residential homes. Affordable upfront, wide range of styles and colors, and 20–25 years of protection with proper maintenance. We install architectural and three-tab shingles from premium manufacturers.',
            'best'  => 'Residential homes looking for reliable protection at an accessible price point.',
            'img'   => $material_asphalt_img,
            'icon'  => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>',
          ],
          [
            'tag'   => 'Residential & Commercial',
            'title' => 'Metal Roofing',
            'body'  => 'The long-term investment. Metal roofs last 40–70 years, reflect solar heat to lower energy costs, resist Gorge winds over 100 mph, and carry Class A fire rating. Virtually zero maintenance.',
            'best'  => 'Homeowners who want the last roof they\'ll ever need. High-wind or wildfire-risk areas like Dufur, Wasco, Goldendale, and Carson.',
            'img'   => $material_metal_img,
            'icon'  => '<rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/>',
          ],
          [
            'tag'   => 'Commercial',
            'title' => 'TPO Systems',
            'body'  => 'Single-ply membrane designed for flat and low-slope commercial roofs. Creates a continuous watertight seal across the entire surface. Energy efficient, UV resistant, and built for 20–30 years of performance.',
            'best'  => 'Commercial buildings, warehouses, offices, and multi-unit properties.',
            'img'   => $material_tpo_img,
            'icon'  => '<path d="M2 20h20"/><path d="M4 20V10l8-6 8 6v10"/>',
          ],
          [
            'tag'   => 'Industrial & Commercial',
            'title' => 'PVC Systems',
            'body'  => 'Similar to TPO but with superior chemical resistance. Ideal for buildings exposed to grease, oils, or industrial chemicals. Welded seams create an airtight barrier.',
            'best'  => 'Restaurants, food processing facilities, and industrial buildings.',
            'img'   => $material_pvc_img,
            'icon'  => '<path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>',
          ],
        ];
        foreach ($materials as $m) : ?>
          <div class="ri-material-card">
            <div class="ri-material-card__img">
              <?php if($m['img']): ?>
                <img src="<?= esc_url($m['img']) ?>" alt="<?= esc_attr($m['title']) ?> — AR Roofing Oregon" loading="lazy">
              <?php else: ?>
                <div class="ri-material-card__img-placeholder">
                  <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.12)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><?= $m['icon'] ?></svg>
                </div>
              <?php endif; ?>
            </div>
            <div class="ri-material-card__body">
              <span class="ri-material-card__tag"><?= esc_html($m['tag']) ?></span>
              <h3><?= esc_html($m['title']) ?></h3>
              <p><?= esc_html($m['body']) ?></p>
              <div class="ri-material-card__best">
                <span class="ri-material-card__best-label">Best&nbsp;for</span>
                <span class="ri-material-card__best-text"><?= esc_html($m['best']) ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       PROCESS
  ═══════════════════════════════════════════════════════════ -->
  <section class="ri-process">
    <div class="section-inner">
      <div class="ri-process__header">
        <span class="eyebrow">Our Process</span>
        <h2>How we install a roof, step by step.</h2>
      </div>
      <?php
      $steps = [
        [
          'num'     => '01',
          'title'   => 'Inspection & Material Selection',
          'body'    => 'We inspect your current roof, assess the structure underneath, and help you choose the right material for your home, your budget, and your climate. You get a written estimate that explains every line.',
          'img'     => $process_1_img,
          'reverse' => false,
        ],
        [
          'num'     => '02',
          'title'   => 'Preparation & Tear-Off',
          'body'    => 'We protect your property with tarps and barriers. The old roof comes off completely — every layer. We inspect every inch of the wood deck and replace any sections that are soft, damaged, or rotted.',
          'img'     => $process_2_img,
          'reverse' => true,
        ],
        [
          'num'     => '03',
          'title'   => 'Installation',
          'body'    => 'New protective layers go down first. Then the roofing material is installed with the correct nail pattern, proper sealing around every pipe, vent, and chimney, and attention to the details that determine how long your roof will last.',
          'img'     => $process_3_img,
          'reverse' => false,
        ],
        [
          'num'     => '04',
          'title'   => 'Cleanup & Final Walkthrough',
          'body'    => 'Magnetic sweep for every nail. All debris bagged and removed. Then we walk the project with you, show you what we did, and make sure everything meets your expectations. The job isn\'t done until you say it is.',
          'img'     => $process_4_img,
          'reverse' => true,
        ],
      ];
      foreach ($steps as $step) :
        $rev = $step['reverse'] ? 'ri-process__step--reverse' : '';
      ?>
        <div class="ri-process__step <?= $rev ?>">
          <div class="ri-process__text">
            <div class="ri-process__num"><?= $step['num'] ?></div>
            <h3><?= esc_html($step['title']) ?></h3>
            <p><?= esc_html($step['body']) ?></p>
          </div>
          <div class="ri-process__visual">
            <?php if($step['img']): ?>
              <img src="<?= esc_url($step['img']) ?>" alt="<?= esc_attr($step['title']) ?>" loading="lazy">
            <?php else: ?>
              <div class="ri-process__visual-placeholder">
                <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       WHAT'S INCLUDED
  ═══════════════════════════════════════════════════════════ -->
  <section class="ri-included">
    <div class="section-inner">
      <div class="ri-included__inner">
        <div class="ri-included__left">
          <span class="eyebrow" style="color:var(--aqua);">No surprises</span>
          <h2>What's included in every AR Roofing installation.</h2>
          <p>This is what you're paying for. Every item on this list is standard — not an add-on. If another quote doesn't include these, ask them why.</p>
        </div>
        <ul class="ri-included__list">
          <?php
          $items = [
            'Complete tear-off of existing roofing material (no layering over old roof)',
            'Full deck inspection with damaged wood replacement included',
            'Ice and water shield in vulnerable areas — valleys, edges, low-slope sections',
            'Premium underlayment across the entire surface',
            'Professional installation with manufacturer-specified nail patterns',
            'Proper sealing and counter-flashing around all penetrations',
            'Ridge cap and ventilation installation or upgrade',
            'Complete debris removal and magnetic nail sweep',
            'Final walkthrough with the owner — every project',
            'Written warranty documentation',
          ];
          foreach ($items as $item) : ?>
            <li class="ri-included__item">
              <div class="ri-included__check">
                <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              </div>
              <span class="ri-included__text"><?= esc_html($item) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       GALLERY
  ═══════════════════════════════════════════════════════════ -->
  <section class="ri-gallery">
    <div class="section-inner">
      <div class="ri-gallery__header">
        <span class="eyebrow">Our Work</span>
        <h2>Recent installations across Oregon and Washington.</h2>
      </div>
      <div class="ri-gallery__grid">
        <?php
        $gallery = [
          ['img' => $gallery_1_img, 'location' => 'Hood River, OR'],
          ['img' => $gallery_2_img, 'location' => 'The Dalles, OR'],
          ['img' => $gallery_3_img, 'location' => 'Dufur, OR'],
          ['img' => $gallery_4_img, 'location' => 'White Salmon, WA'],
          ['img' => $gallery_5_img, 'location' => 'Mosier, OR'],
          ['img' => $gallery_6_img, 'location' => 'Goldendale, WA'],
        ];
        foreach ($gallery as $g) : ?>
          <div class="ri-gallery__card">
            <?php if($g['img']): ?>
              <img src="<?= esc_url($g['img']) ?>"
                   alt="Roof installation <?= esc_attr($g['location']) ?> — AR Roofing"
                   loading="lazy">
            <?php else: ?>
              <div class="ri-gallery__placeholder">
                <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                <span><?= esc_html($g['location']) ?></span>
              </div>
            <?php endif; ?>
            <div class="ri-gallery__card-overlay">
              <span class="ri-gallery__location">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                <?= esc_html($g['location']) ?>
              </span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       FINAL CTA
  ═══════════════════════════════════════════════════════════ -->
  <section class="ri-cta">
    <div class="section-inner">
      <div class="ri-cta__inner">
        <span class="eyebrow" style="color:var(--mist);">Get Started</span>
        <h2>Ready for a roof installed right?</h2>
        <p>Free estimates. No obligation. We'll inspect your roof, explain your options, and give you a written estimate that covers everything. No surprises.</p>
        <div class="ri-cta__btns">
          <a href="/contact" class="btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
            Get a Free Estimate
          </a>
          <a href="tel:5416450577" class="btn-ghost">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call 541-675-0577
          </a>
        </div>
      </div>
    </div>
  </section>

</div><!-- /.ri -->

<?php get_footer(); ?>