<?php
/**
 * Template Name: Roof Maintenance
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   IMÁGENES — Pega aquí las URLs de tus medios de WordPress
   Media Library → click imagen → copiar URL → pegar abajo
   ════════════════════════════════════════════════════════════ */

// ── HERO ─────────────────────────────────────────────────────
$hero_bg_img   = '/wp-content/uploads/2026/06/Estampados_3_ARRC-scaled.png';   // Antonio inspeccionando techo con herramientas

// ── SEASONAL ─────────────────────────────────────────────────
$spring_img    = '';   // Imagen primavera — techo post-invierno
$fall_img      = '';   // Imagen otoño — techo pre-invierno

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
    --green: #2d7a4f;
    --green-light: rgba(45,122,79,0.1);
    --red-light: rgba(232,37,58,0.08);
  }

  .rm * { box-sizing: border-box; }
  .rm { font-family: 'GT America', sans-serif; color: var(--slate); }
  .rm h1, .rm h2, .rm h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.1; }
  .rm .eyebrow {
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: var(--aqua);
    margin-bottom: 14px; display: block;
  }
  .rm .section-inner { max-width: 1200px; margin: 0 auto; padding: 0 24px; }
  .rm .btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 14px 32px; background: var(--red); color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    transition: background .2s, transform .15s;
  }
  .rm .btn-primary:hover { background: var(--clay); transform: translateY(-2px); }
  .rm .btn-ghost {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 13px 32px; background: transparent; color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    border: 2px solid rgba(255,255,255,0.6);
    transition: background .2s, border-color .2s;
  }
  .rm .btn-ghost:hover { background: rgba(255,255,255,0.1); border-color: #fff; }

  /* ── HERO ──────────────────────────────────────────────────── */
  .rm-hero {
    position: relative; min-height: 44vh;
    display: flex; flex-direction: column; justify-content: flex-end;
    overflow: hidden; background: var(--slate);
  }
  .rm-hero__bg {
    position: absolute; inset: 0;
    background-size: cover; background-position: center;
    z-index: 0;
  }
  .rm-hero__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(15,35,34,0.92) 0%, rgba(15,35,34,0.55) 60%, rgba(15,35,34,0.30) 100%);
    z-index: 1;
  }
  .rm-hero__content {
    position: relative; z-index: 2;
    max-width: 1200px; margin: 0 auto;
    padding: 32px 24px 60px;
  }
  .rm-hero__breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12px; color: rgba(255,255,255,0.5);
    margin-bottom: 20px; letter-spacing: 0.5px;
  }
  .rm-hero__breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color .2s; }
  .rm-hero__breadcrumb a:hover { color: var(--mist); }
  .rm-hero__breadcrumb span { color: rgba(255,255,255,0.25); }
  .rm-hero h1 {
    font-size: clamp(26px, 3.8vw, 52px);
    color: #fff; margin: 0 0 18px; max-width: 700px;
  }
  .rm-hero__sub {
    font-size: clamp(14px, 1.5vw, 17px);
    color: rgba(255,255,255,0.72); font-weight: 300;
    line-height: 1.7; max-width: 580px; margin: 0 0 32px;
  }
  .rm-hero__ctas { display: flex; flex-wrap: wrap; gap: 14px; }

  /* ── COST COMPARISON ───────────────────────────────────────── */
  .rm-cost { background: var(--light); padding: 100px 0; }
  .rm-cost__header { text-align: center; margin-bottom: 60px; }
  .rm-cost__header h2 { font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0; }
  .rm-cost__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 28px; margin-bottom: 48px; }

  .rm-cost__col {
    border-radius: 14px; overflow: hidden;
    box-shadow: 0 2px 20px rgba(15,35,34,0.07);
  }
  .rm-cost__col-header {
    padding: 24px 32px;
    display: flex; align-items: center; gap: 14px;
  }
  .rm-cost__col--bad .rm-cost__col-header { background: rgba(232,37,58,0.95); }
  .rm-cost__col--good .rm-cost__col-header { background: var(--green); }
  .rm-cost__col-header-icon {
    width: 40px; height: 40px; border-radius: 8px;
    background: rgba(255,255,255,0.15);
    display: flex; align-items: center; justify-content: center;
    color: #fff; flex-shrink: 0;
  }
  .rm-cost__col-header h3 {
    font-size: 16px; font-weight: 700; color: #fff; margin: 0;
  }
  .rm-cost__col-header span {
    font-size: 11px; color: rgba(255,255,255,0.7);
    display: block; margin-top: 2px; font-weight: 400;
  }
  .rm-cost__col-body { background: #fff; padding: 8px 0; }
  .rm-cost__item {
    display: flex; align-items: flex-start; gap: 14px;
    padding: 16px 28px;
    border-bottom: 1px solid #f0f0f0;
  }
  .rm-cost__item:last-child { border-bottom: none; }
  .rm-cost__item-icon { flex-shrink: 0; margin-top: 2px; }
  .rm-cost__item-icon--bad { color: var(--red); }
  .rm-cost__item-icon--good { color: var(--green); }
  .rm-cost__item-text {
    font-size: 14px; color: #445; line-height: 1.5; font-weight: 300;
  }
  .rm-cost__item-text strong { font-weight: 700; color: var(--slate); }

  /* ROI note */
  .rm-cost__note {
    text-align: center; max-width: 640px; margin: 0 auto;
    padding: 32px 40px;
    background: var(--slate); border-radius: 12px;
    color: rgba(255,255,255,0.7); font-size: 15.5px;
    line-height: 1.8; font-weight: 300;
    position: relative; overflow: hidden;
  }
  .rm-cost__note strong { color: #fff; font-weight: 700; }
  .rm-cost__note::before {
    content: '';
    position: absolute; top: -40px; right: -40px;
    width: 160px; height: 160px;
    background: radial-gradient(circle, rgba(106,154,154,0.12) 0%, transparent 70%);
    pointer-events: none;
  }

  /* ── WHAT WE CHECK ─────────────────────────────────────────── */
  .rm-checklist { background: #fff; padding: 100px 0; }
  .rm-checklist__inner {
    display: grid; grid-template-columns: 1fr 440px;
    gap: 72px; align-items: start;
  }
  .rm-checklist__copy h2 { font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0 0 16px; }
  .rm-checklist__copy > p {
    font-size: 15.5px; color: #556; line-height: 1.8;
    font-weight: 300; margin: 0 0 36px;
  }
  .rm-checklist__list {
    list-style: none; margin: 0; padding: 0;
    display: flex; flex-direction: column; gap: 0;
  }
  .rm-checklist__item {
    display: flex; align-items: flex-start; gap: 16px;
    padding: 18px 0; border-bottom: 1px solid #eef3f3;
    transition: background .15s;
  }
  .rm-checklist__item:first-child { padding-top: 0; }
  .rm-checklist__item:last-child { border-bottom: none; }
  .rm-checklist__icon {
    width: 36px; height: 36px; border-radius: 8px;
    background: rgba(106,154,154,0.1);
    display: flex; align-items: center; justify-content: center;
    color: var(--aqua); flex-shrink: 0;
  }
  .rm-checklist__text { flex: 1; }
  .rm-checklist__text strong {
    display: block; font-size: 14px; font-weight: 700;
    color: var(--slate); margin-bottom: 2px;
  }
  .rm-checklist__text span {
    font-size: 13px; color: #778; line-height: 1.5;
  }

  /* Report card */
  .rm-report-card {
    background: var(--light); border-radius: 14px; padding: 36px;
    position: sticky; top: 100px;
    border-left: 4px solid var(--aqua);
  }
  .rm-report-card__icon {
    width: 52px; height: 52px; border-radius: 12px;
    background: rgba(106,154,154,0.12);
    display: flex; align-items: center; justify-content: center;
    color: var(--aqua); margin-bottom: 20px;
  }
  .rm-report-card h3 { font-size: 18px; color: var(--slate); margin: 0 0 12px; }
  .rm-report-card p {
    font-size: 14px; color: #667; line-height: 1.75;
    margin: 0 0 24px; font-weight: 300;
  }
  .rm-report-card__items {
    display: flex; flex-direction: column; gap: 10px;
    margin-bottom: 28px;
  }
  .rm-report-card__item {
    display: flex; align-items: center; gap: 10px;
    font-size: 13.5px; color: var(--slate);
  }
  .rm-report-card__item::before {
    content: ''; width: 6px; height: 6px;
    border-radius: 50%; background: var(--aqua); flex-shrink: 0;
  }
  .rm-report-card__disclaimer {
    font-size: 12px; color: #aab; line-height: 1.6;
    font-style: italic; padding-top: 20px;
    border-top: 1px solid #dde8e8;
  }

  /* ── SEASONAL ──────────────────────────────────────────────── */
  .rm-seasonal { background: var(--light); padding: 100px 0; }
  .rm-seasonal__header { text-align: center; margin-bottom: 60px; }
  .rm-seasonal__header h2 { font-size: clamp(26px, 3vw, 44px); color: var(--slate); margin: 0; }
  .rm-seasonal__grid { display: grid; grid-template-columns: 1fr 1fr; gap: 28px; }
  .rm-seasonal__card {
    border-radius: 14px; overflow: hidden;
    box-shadow: 0 2px 20px rgba(15,35,34,0.07);
    background: #fff;
  }
  .rm-seasonal__img {
    height: 220px; overflow: hidden; position: relative;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
  }
  .rm-seasonal__img img {
    width: 100%; height: 100%; object-fit: cover;
    transition: transform .5s ease;
  }
  .rm-seasonal__card:hover .rm-seasonal__img img { transform: scale(1.04); }
  .rm-seasonal__img-placeholder {
    width: 100%; height: 100%;
    display: flex; align-items: center; justify-content: center;
    color: rgba(255,255,255,0.1);
  }
  .rm-seasonal__img-badge {
    position: absolute; top: 16px; left: 16px;
    padding: 6px 14px; border-radius: 100px;
    font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;
  }
  .rm-seasonal__card--spring .rm-seasonal__img-badge {
    background: rgba(45,122,79,0.9); color: #fff;
  }
  .rm-seasonal__card--fall .rm-seasonal__img-badge {
    background: rgba(232,37,58,0.85); color: #fff;
  }
  .rm-seasonal__body { padding: 32px; }
  .rm-seasonal__timing {
    font-size: 11px; font-weight: 700; letter-spacing: 1.5px;
    text-transform: uppercase; display: flex; align-items: center; gap: 8px;
    margin-bottom: 12px;
  }
  .rm-seasonal__card--spring .rm-seasonal__timing { color: var(--green); }
  .rm-seasonal__card--fall .rm-seasonal__timing { color: var(--red); }
  .rm-seasonal__body h3 { font-size: 20px; color: var(--slate); margin: 0 0 12px; }
  .rm-seasonal__body p { font-size: 14.5px; color: #667; line-height: 1.75; margin: 0 0 20px; font-weight: 300; }
  .rm-seasonal__tasks {
    list-style: none; margin: 0; padding: 0;
    display: flex; flex-direction: column; gap: 8px;
  }
  .rm-seasonal__task {
    display: flex; align-items: center; gap: 8px;
    font-size: 13px; color: #556;
  }
  .rm-seasonal__task::before {
    content: ''; width: 5px; height: 5px;
    border-radius: 50%; flex-shrink: 0;
  }
  .rm-seasonal__card--spring .rm-seasonal__task::before { background: var(--green); }
  .rm-seasonal__card--fall .rm-seasonal__task::before { background: var(--red); }

  /* ── FINAL CTA ─────────────────────────────────────────────── */
  .rm-cta {
    background: var(--slate); padding: 100px 0;
    text-align: center; position: relative; overflow: hidden;
  }
  .rm-cta::before {
    content: '';
    position: absolute; top: -80px; left: 50%; transform: translateX(-50%);
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(106,154,154,0.07) 0%, transparent 70%);
    pointer-events: none;
  }
  .rm-cta__inner { position: relative; z-index: 1; max-width: 600px; margin: 0 auto; }
  .rm-cta h2 { font-size: clamp(26px, 3vw, 42px); color: #fff; margin: 0 0 14px; }
  .rm-cta p { font-size: 16px; color: rgba(255,255,255,0.6); line-height: 1.75; margin: 0 0 40px; font-weight: 300; }
  .rm-cta__btns { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }

  /* ── RESPONSIVE ────────────────────────────────────────────── */
  @media (max-width: 1024px) {
    .rm-checklist__inner { grid-template-columns: 1fr; gap: 48px; }
    .rm-report-card { position: static; }
  }
  @media (max-width: 768px) {
    .rm-cost__grid { grid-template-columns: 1fr; }
    .rm-seasonal__grid { grid-template-columns: 1fr; }
    .rm-hero__ctas { flex-direction: column; align-items: flex-start; }
    .rm-cta__btns { flex-direction: column; align-items: center; }
  }
</style>

<div class="rm">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="rm-hero">
    <div class="rm-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="rm-hero__overlay"></div>
    <div class="rm-hero__content">
      <nav class="rm-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>›</span>
        <a href="/services">Services</a>
        <span>›</span>
        <span style="color:rgba(255,255,255,0.75);">Roof Maintenance</span>
      </nav>
      <span class="eyebrow" style="color:var(--mist);">Roof Maintenance</span>
      <h1>The boring investment that saves you thousands.</h1>
      <p class="rm-hero__sub">Professional inspections and preventive care that extend your roof's life by 5–10 years. Twice a year. Less than you'd spend on one emergency repair.</p>
      <div class="rm-hero__ctas">
        <a href="/contact" class="btn-primary">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
          Schedule Your Inspection
        </a>
        <a href="tel:5416450577" class="btn-ghost">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call 541-675-0577
        </a>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       COST COMPARISON
  ═══════════════════════════════════════════════════════════ -->
  <section class="rm-cost">
    <div class="section-inner">
      <div class="rm-cost__header">
        <span class="eyebrow">The Real Numbers</span>
        <h2>What neglect costs vs. what maintenance costs.</h2>
      </div>
      <div class="rm-cost__grid">

        <!-- Without maintenance -->
        <div class="rm-cost__col rm-cost__col--bad">
          <div class="rm-cost__col-header">
            <div class="rm-cost__col-header-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
            </div>
            <div>
              <h3>Without Maintenance</h3>
              <span>The expensive approach</span>
            </div>
          </div>
          <div class="rm-cost__col-body">
            <?php
            $bad_items = [
              ['strong' => 'Roof lifespan shortened 5–10 years', 'text' => 'Small issues become structural failures over time'],
              ['strong' => 'Hidden damage compounds silently', 'text' => 'You won\'t know until water is already inside'],
              ['strong' => 'Emergency repairs: $3,000–$8,000+', 'text' => 'Crisis repairs cost 10x more than preventive fixes'],
              ['strong' => 'Insurance exposure increases', 'text' => 'Uncertified or neglected roofs can affect premiums or coverage'],
              ['strong' => 'Energy bills rise', 'text' => 'Wet insulation and poor ventilation drive HVAC costs up'],
            ];
            foreach ($bad_items as $item) : ?>
              <div class="rm-cost__item">
                <div class="rm-cost__item-icon rm-cost__item-icon--bad">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                </div>
                <span class="rm-cost__item-text"><strong><?= esc_html($item['strong']) ?></strong><br><?= esc_html($item['text']) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- With maintenance -->
        <div class="rm-cost__col rm-cost__col--good">
          <div class="rm-cost__col-header">
            <div class="rm-cost__col-header-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            </div>
            <div>
              <h3>With Maintenance</h3>
              <span>The smart investment</span>
            </div>
          </div>
          <div class="rm-cost__col-body">
            <?php
            $good_items = [
              ['strong' => 'Full manufacturer lifespan achieved', 'text' => '20–25 years for asphalt, 40–70 for metal — as designed'],
              ['strong' => 'Problems caught small and cheap', 'text' => 'A $200 repair today prevents a $5,000 repair next year'],
              ['strong' => 'Annual cost: a few hundred dollars', 'text' => 'Twice-yearly visits that pay for themselves many times over'],
              ['strong' => 'Insurance sees a lower-risk property', 'text' => 'Documented maintenance history supports your claims'],
              ['strong' => 'Energy efficiency maintained year-round', 'text' => 'Proper ventilation and sealed insulation keep bills predictable'],
            ];
            foreach ($good_items as $item) : ?>
              <div class="rm-cost__item">
                <div class="rm-cost__item-icon rm-cost__item-icon--good">
                  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
                </div>
                <span class="rm-cost__item-text"><strong><?= esc_html($item['strong']) ?></strong><br><?= esc_html($item['text']) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

      <div class="rm-cost__note">
        The average AR Roofing maintenance visit costs <strong>a fraction of one emergency repair call</strong>. Most homeowners who start a maintenance program tell us it's the smartest roofing decision they ever made.
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       WHAT WE CHECK
  ═══════════════════════════════════════════════════════════ -->
  <section class="rm-checklist">
    <div class="section-inner">
      <div class="rm-checklist__inner">
        <div>
          <span class="eyebrow">What We Inspect</span>
          <h2 style="font-size:clamp(26px,3vw,44px);color:var(--slate);margin:0 0 16px;">What we check during a maintenance visit.</h2>
          <p style="font-size:15.5px;color:#556;line-height:1.8;font-weight:300;margin:0 0 36px;">Every visit covers the same thorough checklist. Nothing is skipped because conditions look fine from the ground — most problems are only visible from the roof.</p>
          <ul class="rm-checklist__list">
            <?php
            $checks = [
              [
                'title' => 'Shingle Condition',
                'desc'  => 'Cracks, curling, missing pieces, and seal integrity along every row',
                'icon'  => '<path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>',
              ],
              [
                'title' => 'Metal Work & Flashing',
                'desc'  => 'Around pipes, vents, chimneys, skylights, and all roof penetrations',
                'icon'  => '<path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>',
              ],
              [
                'title' => 'Gutter Condition & Debris',
                'desc'  => 'Clearance, attachment, slope, and drainage performance end-to-end',
                'icon'  => '<path d="M3 6h18"/><path d="M7 12h10"/><path d="M10 18h4"/>',
              ],
              [
                'title' => 'Moss & Algae Growth',
                'desc'  => 'Assessment and treatment before root systems damage shingles',
                'icon'  => '<path d="M17 8C8 10 5.9 16.17 3.82 22"/><path d="M9.1 7.4C10 9.6 11 11.4 14 13"/><circle cx="16" cy="6" r="4"/>',
              ],
              [
                'title' => 'Attic Ventilation',
                'desc'  => 'Airflow, moisture levels, and temperature — the hidden driver of early roof failure',
                'icon'  => '<path d="M9.59 4.59A2 2 0 1 1 11 8H2m10.59 11.41A2 2 0 1 0 10 16H2m15.73-8.27A2.5 2.5 0 1 1 19.5 12H2"/>',
              ],
              [
                'title' => 'Wood Deck Condition',
                'desc'  => 'Soft spots, delamination, and rot — inspected from inside the attic when accessible',
                'icon'  => '<rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>',
              ],
              [
                'title' => 'Drainage Performance',
                'desc'  => 'Water flow patterns, ponding risk, and drainage capacity for Oregon rain season',
                'icon'  => '<path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/>',
              ],
              [
                'title' => 'Overall Structural Integrity',
                'desc'  => 'Ridge line, fascia, and overall roof shape for signs of settlement or movement',
                'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>',
              ],
            ];
            foreach ($checks as $c) : ?>
              <li class="rm-checklist__item">
                <div class="rm-checklist__icon">
                  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $c['icon'] ?></svg>
                </div>
                <div class="rm-checklist__text">
                  <strong><?= esc_html($c['title']) ?></strong>
                  <span><?= esc_html($c['desc']) ?></span>
                </div>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Report card -->
        <div class="rm-report-card">
          <div class="rm-report-card__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
          </div>
          <h3>You get a written report.</h3>
          <p>After every visit, you receive a full inspection report with photos showing exactly what we found, what's in good shape, and what we recommend. No ambiguity. No guessing.</p>
          <div class="rm-report-card__items">
            <div class="rm-report-card__item">Photos of every area inspected</div>
            <div class="rm-report-card__item">Condition rating for each system</div>
            <div class="rm-report-card__item">Prioritized list of recommendations</div>
            <div class="rm-report-card__item">Estimated cost of any repairs needed</div>
            <div class="rm-report-card__item">Comparison to last visit (2nd visit+)</div>
          </div>
          <p class="rm-report-card__disclaimer">No pressure to act immediately on anything that isn't urgent. You get the information — you make the decision.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       SEASONAL SCHEDULE
  ═══════════════════════════════════════════════════════════ -->
  <section class="rm-seasonal">
    <div class="section-inner">
      <div class="rm-seasonal__header">
        <span class="eyebrow">Recommended Schedule</span>
        <h2>When to schedule maintenance in Oregon.</h2>
      </div>
      <div class="rm-seasonal__grid">

        <!-- Spring -->
        <div class="rm-seasonal__card rm-seasonal__card--spring">
          <div class="rm-seasonal__img">
            <?php if($spring_img): ?>
              <img src="<?= esc_url($spring_img) ?>" alt="Spring roof inspection Oregon — AR Roofing" loading="lazy">
            <?php else: ?>
              <div class="rm-seasonal__img-placeholder">
                <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>
              </div>
            <?php endif; ?>
            <span class="rm-seasonal__img-badge">Spring Visit</span>
          </div>
          <div class="rm-seasonal__body">
            <div class="rm-seasonal__timing">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              March – April
            </div>
            <h3>Post-winter assessment</h3>
            <p>Oregon winters are hard on roofs. Freeze-thaw cycles, wind events, and five months of continuous rain create damage that compounds if left unaddressed into the dry season.</p>
            <ul class="rm-seasonal__tasks">
              <li class="rm-seasonal__task">Check for freeze-thaw damage at seams and valleys</li>
              <li class="rm-seasonal__task">Assess impact from winter storm events</li>
              <li class="rm-seasonal__task">Inspect for moisture buildup in attic</li>
              <li class="rm-seasonal__task">Clear winter debris from gutters and valleys</li>
              <li class="rm-seasonal__task">Treat any moss growth before it spreads</li>
            </ul>
          </div>
        </div>

        <!-- Fall -->
        <div class="rm-seasonal__card rm-seasonal__card--fall">
          <div class="rm-seasonal__img">
            <?php if($fall_img): ?>
              <img src="<?= esc_url($fall_img) ?>" alt="Fall roof maintenance Oregon — AR Roofing" loading="lazy">
            <?php else: ?>
              <div class="rm-seasonal__img-placeholder">
                <svg width="56" height="56" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round"><path d="M17 8C8 10 5.9 16.17 3.82 22"/><path d="M9.1 7.4C10 9.6 11 11.4 14 13"/><circle cx="16" cy="6" r="4"/></svg>
              </div>
            <?php endif; ?>
            <span class="rm-seasonal__img-badge">Fall Visit</span>
          </div>
          <div class="rm-seasonal__body">
            <div class="rm-seasonal__timing">
              <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
              September – October
            </div>
            <h3>Pre-winter preparation</h3>
            <p>Going into Oregon's rain season with unresolved issues means five months of water finding every weakness. A fall visit ensures your roof is ready before the first major storm.</p>
            <ul class="rm-seasonal__tasks">
              <li class="rm-seasonal__task">Clear summer debris and tree buildup from gutters</li>
              <li class="rm-seasonal__task">Check and reseal any compromised flashing</li>
              <li class="rm-seasonal__task">Verify drainage is ready for heavy rain volume</li>
              <li class="rm-seasonal__task">Inspect shingles for summer heat damage</li>
              <li class="rm-seasonal__task">Confirm attic ventilation before cold weather</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       FINAL CTA
  ═══════════════════════════════════════════════════════════ -->
  <section class="rm-cta">
    <div class="section-inner">
      <div class="rm-cta__inner">
        <span class="eyebrow" style="color:var(--mist);">Start Today</span>
        <h2>Start with your free inspection.</h2>
        <p>We'll show you exactly where your roof stands, what it needs now, and what to watch over the next 12 months. No sales pitch. Just honest information about your roof.</p>
        <div class="rm-cta__btns">
          <a href="/contact" class="btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
            Schedule Now
          </a>
          <a href="tel:5416450577" class="btn-ghost">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call 541-675-0577
          </a>
        </div>
      </div>
    </div>
  </section>

</div><!-- /.rm -->

<?php get_footer(); ?>