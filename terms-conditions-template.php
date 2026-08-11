<?php
/**
 * Template Name: Terms & Conditions
 *
 * NOTA LEGAL (no se imprime en el front-end):
 * Borrador estructural. Revisar con el cliente y con un abogado en Oregon
 * antes de publicar. Los puntos marcados con  ⚠  requieren datos reales
 * del cliente (números de licencia, vigencia de estimados, condado).
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   CONFIGURACIÓN — edita solo aquí
   ════════════════════════════════════════════════════════════ */
$last_updated   = 'August 11, 2026';
$company        = 'AR Roofing &amp; Construction';
$site_domain    = 'arroofingus.com';
$email          = 'info@arroofingus.com';
$phone_display  = '(541) 645 0577';          // ⚠ confirmar 645 vs 675
$phone_href     = '5416450577';              // ⚠ confirmar 645 vs 675
$address        = '403 Portway Ave #304, Hood River, OR 97031';
$or_license     = 'OR CCB# 000000';          // ⚠ pedir número real al cliente
$wa_license     = 'WA LIC# 000000';          // ⚠ pedir número real al cliente
$estimate_days  = '30';                      // ⚠ confirmar vigencia de estimados
$governing_law  = 'the State of Oregon';
$venue_county   = 'Hood River County, Oregon'; // ⚠ confirmar condado
$hero_bg_img    = '/wp-content/uploads/2026/06/Estampados_3_ARRC-scaled.png';
/* ══════════════════════════════════════════════════════════════ */
?>

<style>
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Light.woff"); ?>') format('woff'); font-weight: 300; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Regular.woff"); ?>') format('woff'); font-weight: 400; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Medium.woff"); ?>') format('woff'); font-weight: 500; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Bold.woff"); ?>') format('woff'); font-weight: 700; font-style: normal; font-display: swap; }
  @font-face { font-family: 'GT America'; src: url('<?php echo get_theme_file_uri("/fonts/GT-America-Expanded-Black.woff"); ?>') format('woff'); font-weight: 900; font-style: normal; font-display: swap; }

  :root { --slate:#0f2322; --red:#e8253a; --clay:#8b0a1a; --aqua:#6a9a9a; --mist:#c8e8e8; --light:#f5f6f5; }

  .lg * { box-sizing: border-box; }
  .lg { font-family: 'GT America', sans-serif; color: var(--slate); }
  .lg h1, .lg h2, .lg h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.15; }
  .lg .eyebrow { font-size:11px; font-weight:600; letter-spacing:2.5px; text-transform:uppercase; color:var(--aqua); margin-bottom:14px; display:block; }
  .lg .section-inner { max-width:1200px; margin:0 auto; padding:0 24px; }

  /* ── HERO ─────────────────────────────────────────────────── */
  .lg-hero { position:relative; min-height:34vh; display:flex; flex-direction:column; justify-content:flex-end; overflow:hidden; background:var(--slate); }
  .lg-hero__bg { position:absolute; inset:0; background-size:cover; background-position:center; z-index:0; }
  .lg-hero__overlay { position:absolute; inset:0; background:linear-gradient(to top, rgba(15,35,34,0.94) 0%, rgba(15,35,34,0.62) 60%, rgba(15,35,34,0.38) 100%); z-index:1; }
  .lg-hero__content { position:relative; z-index:2; width:100%; padding:32px 0 52px; }
  .lg-hero__breadcrumb { display:flex; align-items:center; gap:8px; font-size:12px; color:rgba(255,255,255,0.5); margin-bottom:20px; letter-spacing:0.5px; }
  .lg-hero__breadcrumb a { color:rgba(255,255,255,0.5); text-decoration:none; transition:color .2s; }
  .lg-hero__breadcrumb a:hover { color:var(--mist); }
  .lg-hero__breadcrumb span { color:rgba(255,255,255,0.25); }
  .lg-hero h1 { font-size:clamp(26px, 3.6vw, 48px); color:#fff; margin:0 0 16px; max-width:720px; }
  .lg-hero__meta { display:inline-flex; align-items:center; gap:8px; padding:6px 16px; border-radius:100px; background:rgba(106,154,154,0.14); border:1px solid rgba(106,154,154,0.3); color:var(--mist); font-size:12px; font-weight:600; letter-spacing:0.5px; }

  /* ── BODY ─────────────────────────────────────────────────── */
  .lg-body { background:var(--light); padding:72px 0 96px; }
  .lg-body__grid { display:grid; grid-template-columns:260px 1fr; gap:56px; align-items:start; }

  .lg-toc { position:sticky; top:120px; }
  .lg-toc__label { font-size:10px; font-weight:700; letter-spacing:1.5px; text-transform:uppercase; color:#aab; display:block; margin-bottom:14px; }
  .lg-toc__list { list-style:none; margin:0; padding:0; display:flex; flex-direction:column; }
  .lg-toc__list a { display:block; padding:7px 0 7px 14px; border-left:2px solid #dde8e8; font-size:13px; line-height:1.4; color:#667; text-decoration:none; transition:color .2s, border-color .2s; }
  .lg-toc__list a:hover { color:var(--slate); border-left-color:var(--aqua); }
  .lg-toc__list a.is-current { color:var(--red); border-left-color:var(--red); font-weight:600; }

  .lg-doc { background:#fff; border-radius:14px; padding:56px; box-shadow:0 2px 32px rgba(15,35,34,0.07); }
  .lg-doc__intro { font-size:16px; line-height:1.8; color:#556; font-weight:300; margin:0 0 12px; }
  .lg-section { padding-top:40px; scroll-margin-top:130px; }
  .lg-section:first-of-type { padding-top:32px; }
  .lg-section + .lg-section { border-top:1px solid #eef2f2; }
  .lg-section h2 { font-size:20px; color:var(--slate); margin:0 0 16px; display:flex; align-items:baseline; gap:12px; }
  .lg-section h2 .num { font-size:12px; font-weight:700; color:var(--aqua); letter-spacing:1px; flex-shrink:0; }
  .lg-section h3 { font-size:14.5px; font-weight:700; color:var(--slate); margin:22px 0 8px; }
  .lg-section p { font-size:14.5px; line-height:1.85; color:#667; font-weight:300; margin:0 0 14px; }
  .lg-section p:last-child { margin-bottom:0; }
  .lg-section ul { margin:0 0 14px; padding-left:0; list-style:none; display:flex; flex-direction:column; gap:9px; }
  .lg-section li { position:relative; padding-left:20px; font-size:14.5px; line-height:1.7; color:#667; font-weight:300; }
  .lg-section li::before { content:''; position:absolute; left:4px; top:10px; width:6px; height:6px; border-radius:50%; background:var(--aqua); }
  .lg-section a { color:var(--red); text-decoration:none; border-bottom:1px solid rgba(232,37,58,0.25); transition:border-color .2s; }
  .lg-section a:hover { border-bottom-color:var(--red); }
  .lg-section strong { font-weight:700; color:var(--slate); }

  .lg-callout { background:var(--light); border-left:3px solid var(--aqua); border-radius:8px; padding:18px 22px; margin:0 0 14px; }
  .lg-callout p { margin:0; font-size:13.5px; color:#556; }
  .lg-callout--alert { background:rgba(232,37,58,0.06); border-left-color:var(--red); }
  .lg-callout--alert p { color:#7a2530; }

  /* Licencias */
  .lg-license { display:flex; flex-wrap:wrap; gap:10px; margin:0 0 16px; }
  .lg-license span { display:inline-flex; align-items:center; gap:7px; padding:7px 16px; border-radius:100px; background:rgba(106,154,154,0.1); border:1px solid rgba(106,154,154,0.25); font-size:12px; font-weight:700; letter-spacing:0.5px; color:var(--aqua); }

  .lg-contact { background:var(--slate); border-radius:14px; padding:36px 40px; margin-top:40px; }
  .lg-contact h3 { font-size:18px; color:#fff; margin:0 0 8px; }
  .lg-contact p { font-size:14px; color:rgba(255,255,255,0.55); font-weight:300; line-height:1.7; margin:0 0 22px; }
  .lg-contact__rows { display:flex; flex-direction:column; gap:12px; }
  .lg-contact__row { display:flex; align-items:flex-start; gap:12px; font-size:14px; color:rgba(255,255,255,0.8); }
  .lg-contact__row svg { color:var(--aqua); flex-shrink:0; margin-top:3px; }
  .lg-contact__row a { color:rgba(255,255,255,0.8); text-decoration:none; transition:color .2s; }
  .lg-contact__row a:hover { color:#fff; }

  @media (max-width:1024px) {
    .lg-body__grid { grid-template-columns:1fr; gap:36px; }
    .lg-toc { position:static; top:auto; background:#fff; border-radius:12px; padding:22px 24px; }
    .lg-toc__list { display:grid; grid-template-columns:repeat(2,1fr); gap:2px 20px; }
  }
  @media (max-width:768px) {
    .lg-doc { padding:32px 24px; }
    .lg-contact { padding:28px 24px; }
    .lg-toc__list { grid-template-columns:1fr; }
  }
  @media (prefers-reduced-motion: reduce) { .lg * { scroll-behavior:auto !important; } }
</style>

<?php
/* ═══════════════════════════════════════════════════════════════
   CONTENIDO — cada entrada = una sección + una fila del índice
   ════════════════════════════════════════════════════════════ */
$sections = [

  [
    'id'    => 'acceptance',
    'title' => 'Accepting these terms',
    'body'  => "
      <p>By using {$site_domain}, sending us a form, or calling the number listed on this site, you agree to these terms. If you do not agree with them, please do not use the site.</p>
      <p>These terms cover your use of the website. They do not replace the written agreement you sign before we start work on your roof — that contract governs the job itself, and if the two ever conflict, the signed contract wins.</p>
    ",
  ],

  [
    'id'    => 'who-we-are',
    'title' => 'Who we are',
    'body'  => "
      <p>{$company} is a licensed and insured roofing contractor based at {$address}, serving 18 cities across Oregon and Washington.</p>
      <div class=\"lg-license\">
        <span>{$or_license}</span>
        <span>{$wa_license}</span>
      </div>
      <p>You can verify our license status with the Oregon Construction Contractors Board and the Washington State Department of Labor &amp; Industries. We encourage you to do it — for us and for anyone else you consider.</p>
    ",
  ],

  [
    'id'    => 'using-the-site',
    'title' => 'Using this website',
    'body'  => "
      <p>You may browse this site, read it, and use the forms to contact us about roofing work. You may not:</p>
      <ul>
        <li>Submit false information, someone else's contact details, or requests for properties you have no authority over.</li>
        <li>Use bots, scrapers, or automated tools against the site or the contact form.</li>
        <li>Attempt to break, overload, or gain unauthorized access to the site or the systems behind it.</li>
        <li>Copy our content, photos, or branding for your own commercial use.</li>
      </ul>
      <p>We may block access or refuse service to anyone who abuses the site or the form.</p>
    ",
  ],

  [
    'id'    => 'estimates',
    'title' => 'Free estimates and inspections',
    'body'  => "
      <p>We offer free roof inspections and written estimates with no obligation. Requesting one through this site is a request — not a booking and not a contract. A job exists only once we have inspected the property, issued a written estimate, and both sides have signed an agreement.</p>
      <p>Estimates are based on what is visible and accessible at the time of inspection. Conditions found after tear-off — rotted decking, hidden water damage, structural issues, code requirements — may change the scope and the price. We tell you before we proceed with any change, in writing.</p>
      <p>Unless the document says otherwise, an estimate is valid for {$estimate_days} days, after which material prices and scheduling may need to be reviewed.</p>
    ",
  ],

  [
    'id'    => 'emergency-requests',
    'title' => 'Emergency requests',
    'body'  => "
      <div class=\"lg-callout lg-callout--alert\">
        <p><strong>Do not rely on the form during an emergency.</strong> Web forms and email can be delayed or fail to arrive. If your roof is actively leaking or has been damaged by a storm, call <a href=\"tel:{$phone_href}\">{$phone_display}</a>.</p>
      </div>
      <p>The emergency flag on our contact form helps us triage requests, but marking a request as an emergency does not guarantee a specific response time or reserve a crew. Emergency response depends on weather, safety conditions, and current workload.</p>
      <p>If a roof poses an immediate danger to people or the structure, contact emergency services first.</p>
    ",
  ],

  [
    'id'    => 'contacting-you',
    'title' => 'How we contact you',
    'body'  => "
      <p>When you submit the form or give us your number, you agree that we may contact you by phone, text, or email about your request, your estimate, scheduling, and the work in progress. Standard message and data rates from your carrier may apply.</p>
      <p>You can opt out of marketing messages at any time by replying STOP, using the unsubscribe link in an email, or telling us directly. We will still reach you about work that is already scheduled or underway.</p>
    ",
  ],

  [
    'id'    => 'third-party-services',
    'title' => 'Third-party services on this site',
    'body'  => "
      <p>Parts of this site depend on services we do not run:</p>
      <ul>
        <li><strong>EmailJS</strong> delivers contact form submissions to our inbox.</li>
        <li><strong>Google reCAPTCHA v3</strong> protects our forms from bots. Your use of it is subject to the <a href=\"https://policies.google.com/privacy\" target=\"_blank\" rel=\"noopener noreferrer\">Google Privacy Policy</a> and <a href=\"https://policies.google.com/terms\" target=\"_blank\" rel=\"noopener noreferrer\">Terms of Service</a>.</li>
        <li><strong>Google Maps</strong> powers the maps on our contact and service area pages.</li>
      </ul>
      <p>If one of these services is unavailable, a form may fail to send. We are not liable for a submission that never reaches us — if you do not hear back within 24 hours, call us.</p>
      <p>How these services handle your information is explained in our <a href=\"/privacy-policy\">Privacy Policy</a>.</p>
    ",
  ],

  [
    'id'    => 'site-content',
    'title' => 'Accuracy of site content',
    'body'  => "
      <p>We keep this site as accurate as we can, but the descriptions of materials, service areas, timelines, and roof lifespans are general information — not a promise about your specific roof. Material lifespans depend on installation, ventilation, exposure, and maintenance. Manufacturer warranty terms come from the manufacturer, not from this website.</p>
      <p>Nothing on this site is engineering, insurance, or legal advice. For an answer about your property, book an inspection.</p>
    ",
  ],

  [
    'id'    => 'workmanship',
    'title' => 'Warranties on our work',
    'body'  => "
      <p>Warranty coverage for a completed job — both our workmanship warranty and any manufacturer warranty on materials — is set out in the documents you receive with that job. Statements on this website do not create, extend, or modify a warranty.</p>
      <p>The website itself is provided \"as is.\" We do not warrant that it will be uninterrupted, error-free, or free of harmful components.</p>
    ",
  ],

  [
    'id'    => 'photos',
    'title' => 'Project photos and reviews',
    'body'  => "
      <p>We photograph our work for our portfolio, this website, and our social media. Photos show the roof and the property exterior, never people or identifying details, and we never publish your address. Tell us before we start if you would prefer your project not be photographed and we will respect that.</p>
      <p>If you post a review or send us a testimonial, you allow us to publish it on this site and our social profiles, with your first name and city.</p>
    ",
  ],

  [
    'id'    => 'intellectual-property',
    'title' => 'Our content',
    'body'  => "
      <p>The text, photographs, layout, logo, and branding on this site belong to {$company} or to the parties who licensed them to us. You may share links to our pages. You may not copy, republish, or adapt our content for a competing business or any other commercial purpose without written permission.</p>
      <p>Manufacturer and certification logos shown on this site belong to their respective owners.</p>
    ",
  ],

  [
    'id'    => 'liability',
    'title' => 'Limitation of liability',
    'body'  => "
      <p>To the fullest extent allowed by law, {$company} is not liable for indirect, incidental, or consequential damages arising from your use of this website, from a form submission that fails to arrive, or from reliance on general information published here.</p>
      <p>This section applies to the website. It does not limit our responsibility for the work we perform on your property, which is covered by your signed contract, our workmanship warranty, and our liability insurance.</p>
    ",
  ],

  [
    'id'    => 'external-links',
    'title' => 'Links to other sites',
    'body'  => "
      <p>We link to manufacturer pages, licensing boards, and our social media profiles for your convenience. We do not control those sites and are not responsible for their content, accuracy, or practices.</p>
    ",
  ],

  [
    'id'    => 'governing-law',
    'title' => 'Governing law',
    'body'  => "
      <p>These terms are governed by the laws of {$governing_law}, without regard to conflict-of-law rules. Any dispute about this website will be handled in the state or federal courts located in {$venue_county}.</p>
      <p>If any part of these terms is found unenforceable, the rest stays in effect.</p>
    ",
  ],

  [
    'id'    => 'changes',
    'title' => 'Changes to these terms',
    'body'  => "
      <p>We may update these terms as our services or the tools behind this site change. The date at the top shows the most recent revision, and continuing to use the site after an update means you accept the revised terms.</p>
    ",
  ],

];
?>

<div class="lg">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="lg-hero">
    <div class="lg-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="lg-hero__overlay"></div>
    <div class="lg-hero__content">
      <div class="section-inner">
        <nav class="lg-hero__breadcrumb" aria-label="Breadcrumb">
          <a href="/">Home</a><span>›</span>
          <span style="color:rgba(255,255,255,0.75);">Terms &amp; Conditions</span>
        </nav>
        <span class="eyebrow" style="color:var(--mist);">Legal</span>
        <h1>Terms &amp; Conditions</h1>
        <span class="lg-hero__meta">
          <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          Last updated <?= esc_html($last_updated) ?>
        </span>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       DOCUMENTO
  ═══════════════════════════════════════════════════════════ -->
  <section class="lg-body">
    <div class="section-inner">
      <div class="lg-body__grid">

        <!-- Índice -->
        <aside class="lg-toc">
          <span class="lg-toc__label">On this page</span>
          <nav class="lg-toc__list" aria-label="Table of contents">
            <?php foreach ($sections as $s): ?>
              <a href="#<?= esc_attr($s['id']) ?>"><?= esc_html($s['title']) ?></a>
            <?php endforeach; ?>
          </nav>
        </aside>

        <!-- Contenido -->
        <article class="lg-doc">
          <p class="lg-doc__intro">
            These terms explain what you can expect from <?= esc_html($site_domain) ?> and what we expect from
            visitors who use it. They are written to be read, not to hide anything — if a section is unclear,
            call us at <a href="tel:<?= esc_attr($phone_href) ?>" style="color:var(--red);text-decoration:none;"><?= esc_html($phone_display) ?></a>.
          </p>

          <?php $i = 1; foreach ($sections as $s): ?>
            <section class="lg-section" id="<?= esc_attr($s['id']) ?>">
              <h2><span class="num"><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?></span><?= esc_html($s['title']) ?></h2>
              <?= $s['body'] ?>
            </section>
          <?php $i++; endforeach; ?>

          <!-- Contacto -->
          <div class="lg-contact">
            <h3>Questions about these terms?</h3>
            <p>Ask before you sign anything — with us or with anyone else.</p>
            <div class="lg-contact__rows">
              <div class="lg-contact__row">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                <a href="mailto:<?= esc_attr($email) ?>"><?= esc_html($email) ?></a>
              </div>
              <div class="lg-contact__row">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                <a href="tel:<?= esc_attr($phone_href) ?>"><?= esc_html($phone_display) ?></a>
              </div>
              <div class="lg-contact__row">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                <span><?= esc_html($address) ?></span>
              </div>
            </div>
          </div>
        </article>

      </div>
    </div>
  </section>

</div><!-- /.lg -->

<script>
(function(){
  var toc = document.querySelectorAll('.lg-toc__list a');
  var sections = document.querySelectorAll('.lg-section');
  if (!toc.length || !sections.length) return;

  var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  toc.forEach(function(link){
    link.addEventListener('click', function(e){
      var target = document.querySelector(link.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      target.scrollIntoView({ behavior: reduce ? 'auto' : 'smooth', block: 'start' });
      history.replaceState(null, '', link.getAttribute('href'));
    });
  });

  if (!('IntersectionObserver' in window)) return;
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if (!entry.isIntersecting) return;
      toc.forEach(function(l){ l.classList.remove('is-current'); });
      var current = document.querySelector('.lg-toc__list a[href="#' + entry.target.id + '"]');
      if (current) current.classList.add('is-current');
    });
  }, { rootMargin: '-140px 0px -70% 0px', threshold: 0 });
  sections.forEach(function(s){ io.observe(s); });
})();
</script>

<?php get_footer(); ?>