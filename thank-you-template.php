<?php
/**
 * Thank You — se muestra después de enviar el formulario de contacto.
 *
 * No es una página de WordPress: la cargan las rewrite rules de functions.php
 *   /thank-you/1/          → form del hero (home)
 *   /thank-you/2/          → form antes del footer (home)
 *   /contact/thank-you/3/  → form de la página de Contact
 * Si la URL trae ?emergency=1 se muestra el mensaje de emergencia.
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   CONFIGURACIÓN — edita solo aquí
   ════════════════════════════════════════════════════════════ */
$form_source   = ar_thank_you_source();                 // 1, 2 o 3
$is_emergency  = isset( $_GET['emergency'] ) && $_GET['emergency'] === '1';
$phone_display = '541-645-0577';
$phone_href    = '5416450577';
$hero_bg_img   = ar_jobsite_img(11, 1536);
/* ══════════════════════════════════════════════════════════════ */
?>

<style>
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Light.woff"); ?>') format('woff'); font-weight: 300; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Regular.woff"); ?>') format('woff'); font-weight: 400; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Medium.woff"); ?>') format('woff'); font-weight: 500; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Bold.woff"); ?>') format('woff'); font-weight: 700; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Black.woff"); ?>') format('woff'); font-weight: 900; font-style: normal; font-display: swap; }

  :root { --slate:#0f2322; --red:#e8253a; --clay:#8b0a1a; --aqua:#6a9a9a; --mist:#c8e8e8; --light:#f5f6f5; }

  .ty * { box-sizing: border-box; }
  .ty { font-family: 'GT America', sans-serif; color: var(--slate); }
  .ty h1, .ty h2, .ty h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.15; }
  .ty .eyebrow { font-size:11px; font-weight:600; letter-spacing:2.5px; text-transform:uppercase; color:var(--aqua); margin-bottom:14px; display:block; }
  .ty .section-inner { max-width:1200px; margin:0 auto; padding:0 24px; }

  /* ── HERO ─────────────────────────────────────────────────── */
  .ty-hero { position:relative; min-height:72vh; display:flex; align-items:center; overflow:hidden; background:var(--slate); padding:80px 0; }
  .ty-hero__bg { position:absolute; inset:0; background-size:cover; background-position:center; z-index:0; }
  .ty-hero__overlay { position:absolute; inset:0; background:linear-gradient(to top, rgba(15,35,34,0.95) 0%, rgba(15,35,34,0.80) 55%, rgba(15,35,34,0.65) 100%); z-index:1; }
  .ty-hero__content { position:relative; z-index:2; width:100%; text-align:center; }
  .ty-hero__icon { width:72px; height:72px; margin:0 auto 28px; border-radius:50%; display:flex; align-items:center; justify-content:center; background:rgba(106,154,154,0.18); border:1px solid rgba(106,154,154,0.4); color:var(--mist); }
  .ty-hero__icon--emergency { background:rgba(232,37,58,0.18); border-color:rgba(232,37,58,0.5); color:#ff8a96; }
  .ty-hero h1 { font-size:clamp(32px, 5vw, 60px); color:#fff; margin:0 auto 20px; max-width:760px; }
  .ty-hero__sub { font-size:17px; line-height:1.75; color:rgba(255,255,255,0.72); font-weight:300; max-width:600px; margin:0 auto 36px; }
  .ty-hero__sub a { color:var(--mist); font-weight:600; text-decoration:none; white-space:nowrap; }
  .ty-hero__btns { display:flex; gap:14px; justify-content:center; flex-wrap:wrap; }

  .ty .btn-primary { display:inline-flex; align-items:center; gap:8px; padding:14px 32px; background:var(--red); color:#fff; border-radius:6px; font-size:14px; font-weight:700; text-decoration:none; transition:background .2s, transform .2s; }
  .ty .btn-primary:hover { background:var(--clay); transform:translateY(-2px); }
  .ty .btn-ghost { display:inline-flex; align-items:center; gap:8px; padding:13px 32px; background:transparent; color:#fff; border:1.5px solid rgba(255,255,255,0.4); border-radius:6px; font-size:14px; font-weight:700; text-decoration:none; transition:background .2s, border-color .2s; }
  .ty .btn-ghost:hover { background:rgba(255,255,255,0.1); border-color:#fff; }

  /* ── NEXT STEPS ───────────────────────────────────────────── */
  .ty-next { background:var(--light); padding:88px 0 96px; }
  .ty-next__header { text-align:center; margin-bottom:48px; }
  .ty-next__header h2 { font-size:clamp(24px, 2.8vw, 36px); margin:0; }
  .ty-next__grid { display:grid; grid-template-columns:repeat(3, 1fr); gap:20px; }
  .ty-step { background:#fff; border-radius:14px; padding:32px 28px; box-shadow:0 2px 24px rgba(15,35,34,0.06); }
  .ty-step__num { display:inline-block; font-size:12px; font-weight:700; letter-spacing:1px; color:var(--red); margin-bottom:14px; }
  .ty-step h3 { font-size:17px; margin:0 0 10px; }
  .ty-step p { font-size:14.5px; line-height:1.75; color:#667; font-weight:300; margin:0; }

  @media (max-width:900px) {
    .ty-next__grid { grid-template-columns:1fr; }
  }
  @media (max-width:520px) {
    .ty-hero__btns { flex-direction:column; align-items:stretch; }
    .ty .btn-primary, .ty .btn-ghost { justify-content:center; }
  }
</style>

<div class="ty" data-form-source="<?= esc_attr($form_source) ?>">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="ty-hero">
    <div class="ty-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="ty-hero__overlay"></div>
    <div class="ty-hero__content">
      <div class="section-inner">

        <?php if ($is_emergency): ?>
          <div class="ty-hero__icon ty-hero__icon--emergency">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>
          </div>
          <span class="eyebrow" style="color:#ff8a96;">Emergency Request Received</span>
          <h1>We're on it.</h1>
          <p class="ty-hero__sub">
            Thank you for reaching out. Your emergency request is in our hands. For immediate help, call us now at
            <a href="tel:<?= esc_attr($phone_href) ?>"><?= esc_html($phone_display) ?></a> — we respond to emergencies 24/7.
          </p>
        <?php else: ?>
          <div class="ty-hero__icon">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
          </div>
          <span class="eyebrow" style="color:var(--mist);">Message Received</span>
          <h1>Thank you for filling out the form!</h1>
          <p class="ty-hero__sub">
            We got your request and we'll get back to you within 24 hours. Need help sooner? Call us at
            <a href="tel:<?= esc_attr($phone_href) ?>"><?= esc_html($phone_display) ?></a>.
          </p>
        <?php endif; ?>

        <div class="ty-hero__btns">
          <?php if ($is_emergency): ?>
            <a href="tel:<?= esc_attr($phone_href) ?>" class="btn-primary">
              <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              Call <?= esc_html($phone_display) ?>
            </a>
            <a href="/" class="btn-ghost">Back to Home</a>
          <?php else: ?>
            <a href="/" class="btn-primary">
              Back to Home
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
            </a>
            <a href="/roof-installation/" class="btn-ghost">See Our Work</a>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       QUÉ SIGUE
  ═══════════════════════════════════════════════════════════ -->
  <section class="ty-next">
    <div class="section-inner">
      <div class="ty-next__header">
        <span class="eyebrow">What Happens Next</span>
        <h2>Here's what to expect.</h2>
      </div>
      <div class="ty-next__grid">
        <?php
        $steps = [
          ['title' => 'We review your request',  'text' => 'Our team looks over the details you sent so we come prepared for your roof.'],
          ['title' => 'We call you back',        'text' => 'Expect a call within 24 hours to answer questions and schedule your free inspection.'],
          ['title' => 'Free on-site inspection', 'text' => 'We inspect your roof in person and give you a clear, written estimate — no pressure.'],
        ];
        foreach ($steps as $i => $step) : ?>
          <div class="ty-step">
            <span class="ty-step__num"><?= sprintf('%02d', $i + 1) ?></span>
            <h3><?= esc_html($step['title']) ?></h3>
            <p><?= esc_html($step['text']) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

</div><!-- /.ty -->

<?php get_footer(); ?>
