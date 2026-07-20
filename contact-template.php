<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   CONFIGURACIÓN
   ════════════════════════════════════════════════════════════ */
$google_maps_embed = 'https://maps.google.com/maps?q=403+Portway+Ave+%23304%2C+Hood+River%2C+OR+97031&z=15&output=embed';
$hero_bg_img       = '/wp-content/uploads/2026/06/Estampados_3_ARRC-scaled.png';
/* ══════════════════════════════════════════════════════════════ */
?>

<style>
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Light.woff"); ?>') format('woff'); font-weight: 300; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Regular.woff"); ?>') format('woff'); font-weight: 400; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Medium.woff"); ?>') format('woff'); font-weight: 500; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Bold.woff"); ?>') format('woff'); font-weight: 700; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Black.woff"); ?>') format('woff'); font-weight: 900; font-style: normal; font-display: swap; }

  :root { --slate:#0f2322; --red:#e8253a; --clay:#8b0a1a; --aqua:#6a9a9a; --mist:#c8e8e8; --light:#f5f6f5; }

  .ct * { box-sizing: border-box; }
  .ct { font-family: 'GT America', sans-serif; color: var(--slate); }
  .ct h1, .ct h2, .ct h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.1; }
  .ct .eyebrow { font-size:11px; font-weight:600; letter-spacing:2.5px; text-transform:uppercase; color:var(--aqua); margin-bottom:14px; display:block; }
  .ct .section-inner { max-width:1200px; margin:0 auto; padding:0 24px; }

  .ct-hero { position:relative; min-height:38vh; display:flex; flex-direction:column; justify-content:flex-end; overflow:hidden; background:var(--slate); }
  .ct-hero__bg { position:absolute; inset:0; background-size:cover; background-position:center; z-index:0; }
  .ct-hero__overlay { position:absolute; inset:0; background:linear-gradient(to top, rgba(15,35,34,0.92) 0%, rgba(15,35,34,0.60) 60%, rgba(15,35,34,0.35) 100%); z-index:1; }
  .ct-hero__content { position:relative; z-index:2; width:100%; padding:32px 0 56px; }
  .ct-hero__breadcrumb { display:flex; align-items:center; gap:8px; font-size:12px; color:rgba(255,255,255,0.5); margin-bottom:20px; letter-spacing:0.5px; }
  .ct-hero__breadcrumb a { color:rgba(255,255,255,0.5); text-decoration:none; transition:color .2s; }
  .ct-hero__breadcrumb a:hover { color:var(--mist); }
  .ct-hero__breadcrumb span { color:rgba(255,255,255,0.25); }
  .ct-hero h1 { font-size:clamp(28px, 4vw, 56px); color:#fff; margin:0 0 16px; max-width:680px; }
  .ct-hero__sub { font-size:clamp(14px, 1.5vw, 17px); color:rgba(255,255,255,0.70); font-weight:300; line-height:1.7; max-width:560px; margin:0; }

  .ct-main { background:var(--light); padding:80px 0 100px; }
  .ct-main__grid { display:grid; grid-template-columns:440px 1fr; gap:56px; align-items:start; }

  .ct-info { display:flex; flex-direction:column; gap:32px; }

  .ct-phone { background:var(--slate); border-radius:14px; padding:32px; text-align:center; }
  .ct-phone__label { font-size:11px; font-weight:600; letter-spacing:2px; text-transform:uppercase; color:var(--aqua); display:block; margin-bottom:10px; }
  .ct-phone__number { display:block; font-size:clamp(28px, 3.5vw, 40px); font-weight:900; color:#fff; text-decoration:none; line-height:1; transition:color .2s; }
  .ct-phone__number:hover { color:var(--mist); }
  .ct-phone__sub { font-size:12px; color:rgba(255,255,255,0.45); margin-top:10px; display:block; letter-spacing:0.5px; }
  .ct-phone__emergency { display:inline-flex; align-items:center; gap:6px; background:rgba(232,37,58,0.15); border:1px solid rgba(232,37,58,0.3); color:#ff6b7a; font-size:11px; font-weight:600; letter-spacing:1px; text-transform:uppercase; padding:5px 14px; border-radius:100px; margin-top:14px; }
  .ct-phone__emergency::before { content:''; width:6px; height:6px; background:var(--red); border-radius:50%; animation:pulse 1.5s ease-in-out infinite; }
  @keyframes pulse { 0%,100%{opacity:1;transform:scale(1);} 50%{opacity:0.5;transform:scale(0.8);} }

  .ct-details { background:#fff; border-radius:14px; padding:28px 32px; display:flex; flex-direction:column; gap:18px; }
  .ct-detail-item { display:flex; align-items:flex-start; gap:14px; }
  .ct-detail-icon { width:36px; height:36px; border-radius:8px; background:rgba(106,154,154,0.1); display:flex; align-items:center; justify-content:center; color:var(--aqua); flex-shrink:0; }
  .ct-detail-label { font-size:10px; font-weight:700; letter-spacing:1.5px; text-transform:uppercase; color:#aab; display:block; margin-bottom:3px; }
  .ct-detail-value { font-size:14px; color:var(--slate); font-weight:500; line-height:1.5; }
  .ct-detail-value a { color:var(--slate); text-decoration:none; transition:color .2s; }
  .ct-detail-value a:hover { color:var(--red); }

  .ct-map { grid-column:1 / -1; border-radius:14px; overflow:hidden; height:400px; background:linear-gradient(135deg, var(--slate), #1e3e3d); position:relative; }
  .ct-map iframe { width:100%; height:100%; border:none; display:block; }
  .ct-map__placeholder { width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; gap:12px; color:rgba(255,255,255,0.2); font-size:12px; letter-spacing:1px; text-transform:uppercase; }

  .ct-form-wrap { background:#fff; border-radius:14px; padding:48px; box-shadow:0 2px 32px rgba(15,35,34,0.08); }

  .ct-trust { background:var(--slate); padding:48px 0; }
  .ct-trust__grid { display:grid; grid-template-columns:repeat(4,1fr); gap:0; }
  .ct-trust__item { display:flex; align-items:center; gap:14px; padding:20px 28px; border-right:1px solid rgba(255,255,255,0.07); }
  .ct-trust__item:last-child { border-right:none; }
  .ct-trust__icon { width:40px; height:40px; border-radius:8px; background:rgba(106,154,154,0.12); display:flex; align-items:center; justify-content:center; color:var(--aqua); flex-shrink:0; }
  .ct-trust__text strong { display:block; font-size:14px; font-weight:700; color:#fff; margin-bottom:2px; }
  .ct-trust__text span { font-size:12px; color:rgba(255,255,255,0.45); }

  @media (max-width:1024px) {
    .ct-main__grid { grid-template-columns:1fr; gap:40px; }
    .ct-info { flex-direction:row; flex-wrap:wrap; }
    .ct-phone { flex:1; min-width:240px; }
    .ct-details { flex:1; min-width:260px; }
    .ct-map { height:300px; flex:100%; }
    .ct-trust__grid { grid-template-columns:repeat(2,1fr); }
    .ct-trust__item:nth-child(2) { border-right:none; }
  }
  @media (max-width:768px) {
    .ct-form-wrap { padding:32px 24px; }
    .ct-info { flex-direction:column; }
    .ct-trust__grid { grid-template-columns:1fr; }
    .ct-trust__item { border-right:none; border-bottom:1px solid rgba(255,255,255,0.07); }
    .ct-trust__item:last-child { border-bottom:none; }
  }
</style>

<div class="ct">

  <section class="ct-hero">
    <div class="ct-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="ct-hero__overlay"></div>
    <div class="ct-hero__content">
      <div class="section-inner">
      <nav class="ct-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a><span>›</span>
        <span style="color:rgba(255,255,255,0.75);">Contact</span>
      </nav>
      <span class="eyebrow" style="color:var(--mist);">Get in Touch</span>
      <h1>Let's talk about your roof.</h1>
      <p class="ct-hero__sub">Free estimates. Free inspections. Honest answers. Reach us by phone, email, or the form below. We respond within 24 hours.</p>
      </div>
    </div>
  </section>

  <section class="ct-main">
    <div class="section-inner">
      <div class="ct-main__grid">

        <div class="ct-info">
          <div class="ct-phone">
            <span class="ct-phone__label">Call Us Directly</span>
            <a href="tel:5416450577" class="ct-phone__number">(541) 645 0577</a>
            <span class="ct-phone__sub">Mon &ndash; Fri &nbsp;7:00 AM &ndash; 5:00 PM</span>
            <span class="ct-phone__emergency">24/7 Emergency Response</span>
          </div>

          <div class="ct-details">
            <?php
            $details = [
              [ 'label' => 'Email',         'value' => '<a href="mailto:info@arroofingus.com">info@arroofingus.com</a>', 'icon' => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>' ],
              [ 'label' => 'Address',       'value' => '<a href="https://www.google.com/maps/search/?api=1&query=403+Portway+Ave+%23304%2C+Hood+River%2C+OR+97031" target="_blank" rel="noopener noreferrer">403 Portway Ave #304, Hood River, OR 97031</a>', 'icon' => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>' ],
              [ 'label' => 'Service Area',  'value' => '18 cities across Oregon &amp; Washington',              'icon' => '<path d="M3 11l19-9-9 19-2-8-8-2z"/>' ],
              [ 'label' => 'Office Hours',  'value' => 'Mon &ndash; Fri: 7:00 AM &ndash; 5:00 PM<br>Emergency: 24/7', 'icon' => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>' ],
              [ 'label' => 'Response Time', 'value' => 'Within 24 hours on all inquiries',                    'icon' => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12"/><path d="M1 1l22 22"/>' ],
            ];
            foreach ($details as $d): ?>
              <div class="ct-detail-item">
                <div class="ct-detail-icon">
                  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $d['icon'] ?></svg>
                </div>
                <div>
                  <span class="ct-detail-label"><?= esc_html($d['label']) ?></span>
                  <span class="ct-detail-value"><?= $d['value'] ?></span>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

        </div>

        <!-- RIGHT: Form (React ContactForm — theme light) -->
        <div class="ct-form-wrap" id="contact-form">
          <div id="ct-react-form"></div>
        </div>

        <!-- Map (full width, below both columns) -->
        <div class="ct-map">
          <?php if($google_maps_embed): ?>
            <iframe src="<?= esc_url($google_maps_embed) ?>" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="AR Roofing — 403 Portway Ave #304, Hood River, OR 97031"></iframe>
          <?php else: ?>
            <div class="ct-map__placeholder">
              <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
              <span>Hood River, Oregon</span>
            </div>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </section>

  <div class="ct-trust">
    <div class="section-inner">
      <div class="ct-trust__grid">
        <?php
        $trust = [
          [ 'title' => 'Free Estimates',    'sub' => 'No cost, no obligation',    'icon' => '<path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/>' ],
          [ 'title' => '24/7 Emergency',    'sub' => 'Same-day response',         'icon' => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>' ],
          [ 'title' => 'Licensed & Insured','sub' => 'Oregon & Washington',       'icon' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>' ],
          [ 'title' => 'Owner on Every Job','sub' => 'Antonio on your roof',      'icon' => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>' ],
        ];
        foreach ($trust as $t): ?>
          <div class="ct-trust__item">
            <div class="ct-trust__icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><?= $t['icon'] ?></svg>
            </div>
            <div class="ct-trust__text">
              <strong><?= esc_html($t['title']) ?></strong>
              <span><?= esc_html($t['sub']) ?></span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>