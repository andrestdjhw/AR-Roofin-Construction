<?php
/**
 * Template Name: Location
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   MAPAS — Pega el src del iframe de cada ciudad
   Google Maps → buscar ciudad → Share → Embed a map → copiar src
   ════════════════════════════════════════════════════════════ */

$locations = [

  // ── OREGON ────────────────────────────────────────────────
  [
    'city'    => 'Portland',
    'state'   => 'Oregon',
    'slug'    => 'portland',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89484.07363784768!2d-122.7635023!3d45.5050853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950b0b7da97427%3A0x1c36b9e6f6d18591!2sPortland%2C%20OR!5e0!3m2!1sen!2sus!4v1700000000000',
  ],
  [
    'city'    => 'The Dalles',
    'state'   => 'Oregon',
    'slug'    => 'the-dalles',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22474.15!2d-121.1787!3d45.5946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5496476b5cdd2c2d%3A0x8d6cd2a6b4c3!2sThe+Dalles%2C+OR!5e0!3m2!1sen!2sus!4v1700000000001',
  ],
  [
    'city'    => 'Hood River',
    'state'   => 'Oregon',
    'slug'    => 'hood-river',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11225.5!2d-121.5220!3d45.7054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5496c5c6f5a7!2sHood+River%2C+OR!5e0!3m2!1sen!2sus!4v1700000000002',
  ],
  [
    'city'    => 'Gresham',
    'state'   => 'Oregon',
    'slug'    => 'gresham',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22500.0!2d-122.4302!3d45.4984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54950f4!2sGresham%2C+OR!5e0!3m2!1sen!2sus!4v1700000000003',
  ],
  [
    'city'    => 'Troutdale',
    'state'   => 'Oregon',
    'slug'    => 'troutdale',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11226.0!2d-122.3887!3d45.5379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54951!2sTroutdale%2C+OR!5e0!3m2!1sen!2sus!4v1700000000004',
  ],
  [
    'city'    => 'Cascade Locks',
    'state'   => 'Oregon',
    'slug'    => 'cascade-locks',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11222.0!2d-121.8918!3d45.6693!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54965!2sCascade+Locks%2C+OR!5e0!3m2!1sen!2sus!4v1700000000005',
  ],
  [
    'city'    => 'Mosier',
    'state'   => 'Oregon',
    'slug'    => 'mosier',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5612.0!2d-121.4015!3d45.6829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54966!2sMosier%2C+OR!5e0!3m2!1sen!2sus!4v1700000000006',
  ],
  [
    'city'    => 'Wasco',
    'state'   => 'Oregon',
    'slug'    => 'wasco',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11210.0!2d-120.6921!3d45.5929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54967!2sWasco%2C+OR!5e0!3m2!1sen!2sus!4v1700000000007',
  ],
  [
    'city'    => 'Dufur',
    'state'   => 'Oregon',
    'slug'    => 'dufur',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5605.0!2d-121.1293!3d45.4543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54968!2sDufur%2C+OR!5e0!3m2!1sen!2sus!4v1700000000008',
  ],

  // ── WASHINGTON ────────────────────────────────────────────
  [
    'city'    => 'Stevenson',
    'state'   => 'Washington',
    'slug'    => 'stevenson',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11214.0!2d-121.8918!3d45.6943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54969!2sStevenson%2C+WA!5e0!3m2!1sen!2sus!4v1700000000009',
  ],
  [
    'city'    => 'White Salmon',
    'state'   => 'Washington',
    'slug'    => 'white-salmon',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5608.0!2d-121.4895!3d45.7243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54970!2sWhite+Salmon%2C+WA!5e0!3m2!1sen!2sus!4v1700000000010',
  ],
  [
    'city'    => 'North Bonneville',
    'state'   => 'Washington',
    'slug'    => 'north-bonneville',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5605.0!2d-121.9612!3d45.6468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54971!2sNorth+Bonneville%2C+WA!5e0!3m2!1sen!2sus!4v1700000000011',
  ],
  [
    'city'    => 'Bingen',
    'state'   => 'Washington',
    'slug'    => 'bingen',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5604.0!2d-121.4704!3d45.7143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54972!2sBingen%2C+WA!5e0!3m2!1sen!2sus!4v1700000000012',
  ],
  [
    'city'    => 'Goldendale',
    'state'   => 'Washington',
    'slug'    => 'goldendale',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11218.0!2d-120.8243!3d45.8204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54973!2sGoldendale%2C+WA!5e0!3m2!1sen!2sus!4v1700000000013',
  ],
  [
    'city'    => 'Dallesport',
    'state'   => 'Washington',
    'slug'    => 'dallesport',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5610.0!2d-121.1659!3d45.6093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54974!2sDallesport%2C+WA!5e0!3m2!1sen!2sus!4v1700000000014',
  ],
  [
    'city'    => 'Lyle',
    'state'   => 'Washington',
    'slug'    => 'lyle',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5607.0!2d-121.2879!3d45.6968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54975!2sLyle%2C+WA!5e0!3m2!1sen!2sus!4v1700000000015',
  ],
  [
    'city'    => 'Carson',
    'state'   => 'Washington',
    'slug'    => 'carson',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5609.0!2d-121.8187!3d45.7193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54976!2sCarson%2C+WA!5e0!3m2!1sen!2sus!4v1700000000016',
  ],
  [
    'city'    => 'Wishram',
    'state'   => 'Washington',
    'slug'    => 'wishram',
    'map_src' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5606.0!2d-120.6643!3d45.6518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54977!2sWishram%2C+WA!5e0!3m2!1sen!2sus!4v1700000000017',
  ],

];

// Separar por estado
$oregon     = array_filter($locations, fn($l) => $l['state'] === 'Oregon');
$washington = array_filter($locations, fn($l) => $l['state'] === 'Washington');
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

  .lc * { box-sizing: border-box; }
  .lc { font-family: 'GT America', sans-serif; color: var(--slate); }
  .lc h1, .lc h2, .lc h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.1; }
  .lc .eyebrow {
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: var(--aqua);
    margin-bottom: 14px; display: block;
  }
  .lc .section-inner { max-width: 1280px; margin: 0 auto; padding: 0 24px; }
  .lc .btn-primary {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 14px 32px; background: var(--red); color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    transition: background .2s, transform .15s;
  }
  .lc .btn-primary:hover { background: var(--clay); transform: translateY(-2px); }
  .lc .btn-ghost {
    display: inline-flex; align-items: center; gap: 8px;
    padding: 13px 32px; background: transparent; color: #fff;
    font-family: 'GT America', sans-serif; font-size: 15px; font-weight: 600;
    text-decoration: none; border-radius: 6px;
    border: 2px solid rgba(255,255,255,0.6);
    transition: background .2s, border-color .2s;
  }
  .lc .btn-ghost:hover { background: rgba(255,255,255,0.1); border-color: #fff; }

  /* ── HERO ──────────────────────────────────────────────────── */
  .lc-hero {
    background: var(--slate);
    padding: 100px 0 64px;
    position: relative; overflow: hidden;
  }
  .lc-hero::before {
    content: '';
    position: absolute; top: -80px; right: -80px;
    width: 400px; height: 400px;
    background: radial-gradient(circle, rgba(106,154,154,0.08) 0%, transparent 70%);
    pointer-events: none;
  }
  .lc-hero__inner { position: relative; z-index: 1; }
  .lc-hero__breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12px; color: rgba(255,255,255,0.4);
    margin-bottom: 24px; letter-spacing: 0.5px;
  }
  .lc-hero__breadcrumb a { color: rgba(255,255,255,0.4); text-decoration: none; transition: color .2s; }
  .lc-hero__breadcrumb a:hover { color: var(--mist); }
  .lc-hero__breadcrumb span { color: rgba(255,255,255,0.2); }
  .lc-hero h1 {
    font-size: clamp(28px, 4vw, 56px);
    color: #fff; margin: 0 0 16px; max-width: 760px;
  }
  .lc-hero__sub {
    font-size: clamp(14px, 1.5vw, 17px);
    color: rgba(255,255,255,0.65); font-weight: 300;
    line-height: 1.7; max-width: 560px; margin: 0 0 40px;
  }

  /* State tabs */
  .lc-hero__tabs {
    display: flex; gap: 8px;
    border-bottom: 1px solid rgba(255,255,255,0.1);
    padding-bottom: 0;
  }
  .lc-hero__tab {
    padding: 10px 24px 14px;
    font-size: 14px; font-weight: 600; color: rgba(255,255,255,0.45);
    cursor: pointer; border-bottom: 3px solid transparent;
    transition: color .2s, border-color .2s;
    background: none; border-top: none; border-left: none; border-right: none;
    font-family: 'GT America', sans-serif;
  }
  .lc-hero__tab.active { color: #fff; border-bottom-color: var(--red); }
  .lc-hero__tab:hover:not(.active) { color: rgba(255,255,255,0.75); }

  /* ── GRID SECTION ──────────────────────────────────────────── */
  .lc-grid-section { background: var(--light); padding: 72px 0 100px; }
  .lc-state-block { display: none; }
  .lc-state-block.active { display: block; }

  .lc-state-header {
    display: flex; align-items: center; gap: 16px;
    margin-bottom: 40px; padding-bottom: 24px;
    border-bottom: 1px solid #dde8e8;
  }
  .lc-state-header h2 {
    font-size: clamp(22px, 2.5vw, 32px); color: var(--slate); margin: 0;
  }
  .lc-state-badge {
    display: inline-flex; align-items: center; gap: 6px;
    padding: 5px 14px; border-radius: 100px;
    font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase;
    background: rgba(106,154,154,0.1); border: 1px solid rgba(106,154,154,0.25);
    color: var(--aqua);
  }

  .lc-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }

  /* ── CITY CARD ─────────────────────────────────────────────── */
  .lc-card {
    background: #fff; border-radius: 14px; overflow: hidden;
    box-shadow: 0 2px 16px rgba(15,35,34,0.07);
    transition: transform .25s, box-shadow .25s;
    display: flex; flex-direction: column;
  }
  .lc-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 40px rgba(15,35,34,0.13);
  }

  /* Map */
  .lc-card__map {
    height: 200px; position: relative; overflow: hidden;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
    flex-shrink: 0;
  }
  .lc-card__map iframe {
    width: 100%; height: 100%; border: none; display: block;
    pointer-events: none; /* disable interaction on card — enable on modal */
    transition: opacity .3s;
  }
  .lc-card__map-overlay {
    position: absolute; inset: 0;
    background: transparent;
    cursor: pointer;
    z-index: 2;
  }
  .lc-card__map-expand {
    position: absolute; top: 10px; right: 10px;
    width: 30px; height: 30px; border-radius: 6px;
    background: rgba(15,35,34,0.75); backdrop-filter: blur(4px);
    display: flex; align-items: center; justify-content: center;
    color: #fff; z-index: 3; opacity: 0;
    transition: opacity .2s;
  }
  .lc-card:hover .lc-card__map-expand { opacity: 1; }

  /* Info */
  .lc-card__body { padding: 22px 24px; flex: 1; display: flex; flex-direction: column; }
  .lc-card__state-tag {
    font-size: 10px; font-weight: 700; letter-spacing: 1.5px;
    text-transform: uppercase; color: var(--aqua);
    display: block; margin-bottom: 6px;
  }
  .lc-card__city { font-size: 18px; font-weight: 900; color: var(--slate); margin: 0 0 10px; }
  .lc-card__meta {
    display: flex; align-items: center; gap: 6px;
    font-size: 12px; color: #889; margin-bottom: 16px;
  }
  .lc-card__meta svg { color: var(--aqua); flex-shrink: 0; }
  .lc-card__actions {
    display: flex; gap: 10px; margin-top: auto;
  }
  .lc-card__btn {
    flex: 1; padding: 10px 12px; text-align: center;
    font-family: 'GT America', sans-serif;
    font-size: 12px; font-weight: 600; text-decoration: none;
    border-radius: 7px; transition: background .2s, color .2s;
    display: flex; align-items: center; justify-content: center; gap: 6px;
  }
  .lc-card__btn--primary {
    background: var(--red); color: #fff;
  }
  .lc-card__btn--primary:hover { background: var(--clay); }
  .lc-card__btn--ghost {
    background: var(--light); color: var(--slate);
    border: 1px solid #dde8e8;
  }
  .lc-card__btn--ghost:hover { background: #e8f5f5; border-color: var(--aqua); color: var(--aqua); }

  /* ── MAP MODAL ─────────────────────────────────────────────── */
  .lc-modal {
    display: none; position: fixed; inset: 0; z-index: 9999;
    background: rgba(10,20,20,0.85); backdrop-filter: blur(6px);
    align-items: center; justify-content: center;
    padding: 24px;
  }
  .lc-modal.open { display: flex; }
  .lc-modal__inner {
    background: #fff; border-radius: 16px; overflow: hidden;
    width: 100%; max-width: 800px; max-height: 90vh;
    display: flex; flex-direction: column;
    box-shadow: 0 24px 80px rgba(0,0,0,0.4);
  }
  .lc-modal__header {
    padding: 18px 24px; display: flex; align-items: center; justify-content: space-between;
    border-bottom: 1px solid #eee;
  }
  .lc-modal__title { font-size: 17px; font-weight: 700; color: var(--slate); margin: 0; }
  .lc-modal__close {
    width: 32px; height: 32px; border-radius: 8px;
    background: var(--light); border: none; cursor: pointer;
    display: flex; align-items: center; justify-content: center;
    color: var(--slate); transition: background .15s;
  }
  .lc-modal__close:hover { background: #dde8e8; }
  .lc-modal__map { flex: 1; min-height: 480px; }
  .lc-modal__map iframe { width: 100%; height: 100%; border: none; display: block; }
  .lc-modal__footer {
    padding: 14px 24px; display: flex; gap: 12px;
    border-top: 1px solid #eee; background: var(--light);
  }

  /* ── STATS BAR ─────────────────────────────────────────────── */
  .lc-stats { background: var(--slate); padding: 56px 0; }
  .lc-stats__grid {
    display: grid; grid-template-columns: repeat(4, 1fr); gap: 0;
  }
  .lc-stats__item {
    text-align: center; padding: 28px 20px;
    border-right: 1px solid rgba(255,255,255,0.07);
  }
  .lc-stats__item:last-child { border-right: none; }
  .lc-stats__num {
    font-size: 40px; font-weight: 900; color: var(--red);
    display: block; line-height: 1; margin-bottom: 8px;
  }
  .lc-stats__label {
    font-size: 12px; color: rgba(255,255,255,0.45);
    letter-spacing: 1px; text-transform: uppercase; line-height: 1.5;
  }

  /* ── CTA ───────────────────────────────────────────────────── */
  .lc-cta {
    background: var(--slate); padding: 80px 0;
    text-align: center; position: relative; overflow: hidden;
    border-top: 1px solid rgba(255,255,255,0.06);
  }
  .lc-cta::before {
    content: '';
    position: absolute; top: -60px; left: 50%; transform: translateX(-50%);
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(106,154,154,0.07) 0%, transparent 70%);
    pointer-events: none;
  }
  .lc-cta__inner { position: relative; z-index: 1; max-width: 560px; margin: 0 auto; }
  .lc-cta h2 { font-size: clamp(24px, 3vw, 40px); color: #fff; margin: 0 0 14px; }
  .lc-cta p { font-size: 15px; color: rgba(255,255,255,0.55); line-height: 1.75; margin: 0 0 36px; font-weight: 300; }
  .lc-cta__btns { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }

  /* ── RESPONSIVE ────────────────────────────────────────────── */
  @media (max-width: 1024px) {
    .lc-cards-grid { grid-template-columns: repeat(2, 1fr); }
    .lc-stats__grid { grid-template-columns: repeat(2, 1fr); }
    .lc-stats__item:nth-child(2) { border-right: none; }
  }
  @media (max-width: 600px) {
    .lc-cards-grid { grid-template-columns: 1fr; }
    .lc-modal__map { min-height: 320px; }
    .lc-cta__btns { flex-direction: column; align-items: center; }
    .lc-stats__grid { grid-template-columns: repeat(2, 1fr); }
  }
</style>

<div class="lc">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="lc-hero">
    <div class="section-inner">
      <div class="lc-hero__inner">
        <nav class="lc-hero__breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a>
          <span>›</span>
          <span style="color:rgba(255,255,255,0.75);">Service Areas</span>
        </nav>
        <span class="eyebrow" style="color:var(--mist);">Service Areas</span>
        <h1>18 cities. Two states.<br>One team you can trust.</h1>
        <p class="lc-hero__sub">AR Roofing serves 18 cities across Oregon and Washington. Licensed and insured in both states. Whether you're in Portland or Wishram, the same team — the same standards — shows up at your door.</p>
        <div class="lc-hero__tabs">
          <button class="lc-hero__tab active" onclick="lcShowState('oregon', this)">
            Oregon &nbsp;<span style="opacity:.5;font-weight:400">(9 cities)</span>
          </button>
          <button class="lc-hero__tab" onclick="lcShowState('washington', this)">
            Washington &nbsp;<span style="opacity:.5;font-weight:400">(9 cities)</span>
          </button>
          <button class="lc-hero__tab" onclick="lcShowState('all', this)">
            All 18 Cities
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       STATS BAR
  ═══════════════════════════════════════════════════════════ -->
  <div class="lc-stats">
    <div class="section-inner">
      <div class="lc-stats__grid">
        <div class="lc-stats__item">
          <span class="lc-stats__num">18</span>
          <span class="lc-stats__label">Cities<br>Served</span>
        </div>
        <div class="lc-stats__item">
          <span class="lc-stats__num">2</span>
          <span class="lc-stats__label">States<br>Licensed</span>
        </div>
        <div class="lc-stats__item">
          <span class="lc-stats__num">18+</span>
          <span class="lc-stats__label">Years in<br>the Region</span>
        </div>
        <div class="lc-stats__item">
          <span class="lc-stats__num">24/7</span>
          <span class="lc-stats__label">Emergency<br>Response</span>
        </div>
      </div>
    </div>
  </div>

  <!-- ═══════════════════════════════════════════════════════════
       CITY CARDS GRID
  ═══════════════════════════════════════════════════════════ -->
  <section class="lc-grid-section">
    <div class="section-inner">

      <!-- Oregon -->
      <div class="lc-state-block active" id="lc-block-oregon">
        <div class="lc-state-header">
          <h2>Oregon</h2>
          <span class="lc-state-badge">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/></svg>
            9 cities
          </span>
        </div>
        <div class="lc-cards-grid">
          <?php foreach ($oregon as $loc) : ?>
            <?php echo lc_render_card($loc); ?>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Washington -->
      <div class="lc-state-block" id="lc-block-washington">
        <div class="lc-state-header">
          <h2>Washington</h2>
          <span class="lc-state-badge">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/></svg>
            9 cities
          </span>
        </div>
        <div class="lc-cards-grid">
          <?php foreach ($washington as $loc) : ?>
            <?php echo lc_render_card($loc); ?>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- All -->
      <div class="lc-state-block" id="lc-block-all">
        <div class="lc-state-header">
          <h2>All Service Areas</h2>
          <span class="lc-state-badge">
            <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/></svg>
            18 cities
          </span>
        </div>
        <div class="lc-cards-grid">
          <?php foreach ($locations as $loc) : ?>
            <?php echo lc_render_card($loc); ?>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       FINAL CTA
  ═══════════════════════════════════════════════════════════ -->
  <section class="lc-cta">
    <div class="section-inner">
      <div class="lc-cta__inner">
        <span class="eyebrow" style="color:var(--mist);">We Come to You</span>
        <h2>Don't see your city? Call us anyway.</h2>
        <p>Our 18-city list covers the core Columbia River Gorge corridor. If you're nearby and need roofing help, we want to hear about it.</p>
        <div class="lc-cta__btns">
          <a href="/contact" class="btn-primary">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
            Get a Free Inspection
          </a>
          <a href="tel:5416450577" class="btn-ghost">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            Call 541-645-0577
          </a>
        </div>
      </div>
    </div>
  </section>

</div><!-- /.lc -->

<!-- ═══════════════════════════════════════════════════════════
     MAP MODAL
═══════════════════════════════════════════════════════════ -->
<div class="lc-modal" id="lc-modal" onclick="lcCloseModal(event)">
  <div class="lc-modal__inner">
    <div class="lc-modal__header">
      <h3 class="lc-modal__title" id="lc-modal-title">City Name, State</h3>
      <button class="lc-modal__close" onclick="lcCloseModalBtn()" aria-label="Close map">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18M6 6l12 12"/></svg>
      </button>
    </div>
    <div class="lc-modal__map">
      <iframe id="lc-modal-iframe" src="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="City map"></iframe>
    </div>
    <div class="lc-modal__footer">
      <a href="/contact" class="lc-card__btn lc-card__btn--primary" style="flex:1;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
        Get a Free Inspection
      </a>
      <a href="tel:5416450577" class="lc-card__btn lc-card__btn--ghost" style="flex:1;">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        Call 541-645-0577
      </a>
    </div>
  </div>
</div>

<?php
/* ── Card render helper ─────────────────────────────────── */
function lc_render_card($loc) {
  $city    = esc_html($loc['city']);
  $state   = esc_html($loc['state']);
  $src     = esc_url($loc['map_src']);
  $slug    = esc_attr($loc['slug']);
  $encoded_city = esc_js($loc['city'] . ', ' . $loc['state']);
  $encoded_src  = esc_js($loc['map_src']);

  ob_start(); ?>
  <div class="lc-card">
    <div class="lc-card__map">
      <iframe
        src="<?= $src ?>"
        loading="lazy"
        allowfullscreen=""
        referrerpolicy="no-referrer-when-downgrade"
        title="<?= $city ?>, <?= $state ?> map"
      ></iframe>
      <!-- Click overlay to open modal -->
      <div class="lc-card__map-overlay" onclick="lcOpenModal('<?= $encoded_city ?>', '<?= $encoded_src ?>')" title="Expand map"></div>
      <div class="lc-card__map-expand" aria-hidden="true">
        <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/></svg>
      </div>
    </div>
    <div class="lc-card__body">
      <span class="lc-card__state-tag"><?= $state ?></span>
      <h3 class="lc-card__city"><?= $city ?></h3>
      <div class="lc-card__meta">
        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
        Roofing services available · 24/7 emergency
      </div>
      <div class="lc-card__actions">
        <a href="/contact?city=<?= $slug ?>" class="lc-card__btn lc-card__btn--primary">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/></svg>
          Free Estimate
        </a>
        <a href="tel:5416450577" class="lc-card__btn lc-card__btn--ghost">
          <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          Call Now
        </a>
      </div>
    </div>
  </div>
  <?php
  return ob_get_clean();
}
?>

<script>
/* ── State tab switching ─────────────────────────────────── */
function lcShowState(state, btn) {
  document.querySelectorAll('.lc-state-block').forEach(b => b.classList.remove('active'))
  document.querySelectorAll('.lc-hero__tab').forEach(t => t.classList.remove('active'))
  document.getElementById('lc-block-' + state).classList.add('active')
  btn.classList.add('active')
}

/* ── Map modal ───────────────────────────────────────────── */
function lcOpenModal(cityName, mapSrc) {
  document.getElementById('lc-modal-title').textContent = cityName
  document.getElementById('lc-modal-iframe').src = mapSrc
  document.getElementById('lc-modal').classList.add('open')
  document.body.style.overflow = 'hidden'
}
function lcCloseModalBtn() {
  document.getElementById('lc-modal').classList.remove('open')
  document.getElementById('lc-modal-iframe').src = ''
  document.body.style.overflow = ''
}
function lcCloseModal(e) {
  if (e.target === document.getElementById('lc-modal')) lcCloseModalBtn()
}
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') lcCloseModalBtn()
})
</script>

<?php get_footer(); ?>