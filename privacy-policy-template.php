<?php
/**
 * Template Name: Privacy Policy
 *
 * NOTA LEGAL (no se imprime en el front-end):
 * Este documento es un borrador estructural. Antes de publicarlo, revísalo
 * con el cliente y, de ser posible, con un abogado en Oregon. Los puntos
 * marcados con  ⚠  en los comentarios requieren confirmación del cliente.
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

  /* Índice sticky */
  .lg-toc { position:sticky; top:120px; }
  .lg-toc__label { font-size:10px; font-weight:700; letter-spacing:1.5px; text-transform:uppercase; color:#aab; display:block; margin-bottom:14px; }
  .lg-toc__list { list-style:none; margin:0; padding:0; display:flex; flex-direction:column; }
  .lg-toc__list a { display:block; padding:7px 0 7px 14px; border-left:2px solid #dde8e8; font-size:13px; line-height:1.4; color:#667; text-decoration:none; transition:color .2s, border-color .2s; }
  .lg-toc__list a:hover { color:var(--slate); border-left-color:var(--aqua); }
  .lg-toc__list a.is-current { color:var(--red); border-left-color:var(--red); font-weight:600; }

  /* Contenido */
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

  /* Bloque de contacto final */
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
    'id'    => 'information-we-collect',
    'title' => 'Information we collect',
    'body'  => "
      <h3>Information you give us</h3>
      <p>When you fill out a form on this website, you choose what to send us. The contact form asks for:</p>
      <ul>
        <li><strong>Required:</strong> your name, your phone number, and the city where the property is located.</li>
        <li><strong>Optional:</strong> your email address, the service you need, your roof type, whether the request is an emergency, and anything you write in the message field.</li>
      </ul>
      <p>If you call us, email us, or message us on social media instead, we keep whatever you share in that conversation so we can respond and follow up on the job.</p>
      <h3>Information collected automatically</h3>
      <p>Our website host and the security services described below record standard technical information such as your IP address, browser type, device type, the pages you visit, and the date and time of your visit. We use this to keep the site running and to block abuse.</p>
      <p>We do not ask for and do not want sensitive information through this website. Please do not send us Social Security numbers, financial account numbers, or payment card details through the contact form.</p>
    ",
  ],

  [
    'id'    => 'how-we-use-it',
    'title' => 'How we use your information',
    'body'  => "
      <p>We use what you send us to:</p>
      <ul>
        <li>Respond to your request and schedule a free inspection or estimate.</li>
        <li>Prepare a written estimate and, if you hire us, carry out and document the work.</li>
        <li>Prioritize emergency requests and reach you quickly when a roof is actively failing.</li>
        <li>Keep records of jobs, warranties, and communications.</li>
        <li>Protect the website against spam and automated abuse.</li>
        <li>Meet our legal, licensing, and insurance obligations in Oregon and Washington.</li>
      </ul>
      <p>We do not sell your personal information, and we do not share it with third parties for their own advertising.</p>
    ",
  ],

  [
    'id'    => 'contact-form-emailjs',
    'title' => 'The contact form and EmailJS',
    'body'  => "
      <p>Our contact form is delivered by <strong>EmailJS</strong>, a third-party service that sends form submissions to our inbox. When you press send, the information in the form is transmitted to and processed by EmailJS servers on our behalf before it reaches us.</p>
      <p>EmailJS acts as a service provider: it handles the message so we can receive it, and it is not permitted to use your information for its own purposes. You can read how EmailJS handles data in its <a href=\"https://www.emailjs.com/legal/privacy-policy/\" target=\"_blank\" rel=\"noopener noreferrer\">privacy policy</a>.</p>
      <div class=\"lg-callout\">
        <p>Email is not a secure channel. If your matter is urgent, call us at <a href=\"tel:{$phone_href}\">{$phone_display}</a> instead of relying on the form.</p>
      </div>
    ",
  ],

  [
    'id'    => 'recaptcha',
    'title' => 'Google reCAPTCHA v3',
    'body'  => "
      <p>This site is protected by <strong>reCAPTCHA v3</strong> to tell real visitors apart from automated bots. reCAPTCHA runs in the background on pages that contain a form and analyzes signals such as your IP address, browser and device information, and how you interact with the page, in order to score how likely it is that you are a person.</p>
      <p>That information is collected and processed by Google, and it may be used to improve reCAPTCHA and Google's general security services. We only receive the resulting score — we do not receive the underlying data.</p>
      <p>Your use of reCAPTCHA is subject to the <a href=\"https://policies.google.com/privacy\" target=\"_blank\" rel=\"noopener noreferrer\">Google Privacy Policy</a> and the <a href=\"https://policies.google.com/terms\" target=\"_blank\" rel=\"noopener noreferrer\">Google Terms of Service</a>.</p>
    ",
  ],

  [
    'id'    => 'maps-and-embeds',
    'title' => 'Google Maps and other embedded content',
    'body'  => "
      <p>Our contact and service area pages display maps embedded from Google Maps. When a page with a map loads, your browser connects directly to Google to fetch it, which lets Google receive your IP address and set cookies under its own policies. The same applies to any other content we embed from an outside platform, such as a video player or a social media feed.</p>
      <p>We do not control what those companies collect. Review their privacy policies to understand their practices.</p>
    ",
  ],

  [
    'id'    => 'cookies',
    'title' => 'Cookies and similar technologies',
    'body'  => "
      <p>This website uses cookies and similar technologies for two purposes: keeping the site working (page delivery, security, and spam prevention through reCAPTCHA) and understanding how visitors use the site so we can improve it.</p>
      <p>Most browsers let you refuse or delete cookies in their settings. Blocking cookies from Google may prevent the contact form or the maps from working correctly.</p>
    ",
  ],

  [
    'id'    => 'sharing',
    'title' => 'When we share information',
    'body'  => "
      <p>We share your information only in these situations:</p>
      <ul>
        <li><strong>Service providers</strong> who help us operate — our web host, EmailJS, Google reCAPTCHA, and the tools we use to schedule work and keep job records.</li>
        <li><strong>Suppliers, manufacturers, or insurers</strong> when it is necessary to complete your job, process a warranty claim, or support an insurance claim on your roof.</li>
        <li><strong>Legal reasons</strong> — when the law requires it, or to protect our rights, our crew, or the safety of others.</li>
        <li><strong>A business transfer</strong> — if the company is sold or merged, customer records would transfer with it.</li>
      </ul>
      <p>We never sell your personal information and we do not trade it for advertising purposes.</p>
    ",
  ],

  [
    'id'    => 'retention',
    'title' => 'How long we keep it',
    'body'  => "
      <p>We keep inquiry information for as long as we need it to respond and follow up. If you become a customer, we keep job records, contracts, and warranty documentation for as long as the warranty runs and for as long as state law, our insurer, and our tax obligations require.</p>
      <p>You can ask us to delete an inquiry that did not turn into a job at any time.</p>
    ",
  ],

  [
    'id'    => 'security',
    'title' => 'How we protect it',
    'body'  => "
      <p>This site is served over an encrypted HTTPS connection, form submissions are protected by reCAPTCHA, and access to our inbox and job records is limited to the people who need it. No website or email system is perfectly secure, so we cannot guarantee absolute security — but we take reasonable steps to protect what you send us.</p>
    ",
  ],

  [
    'id'    => 'your-rights',
    'title' => 'Your privacy rights',
    'body'  => "
      <p>Depending on where you live, you may have the right to:</p>
      <ul>
        <li>Ask what personal information we hold about you and get a copy of it.</li>
        <li>Ask us to correct information that is wrong or out of date.</li>
        <li>Ask us to delete information we no longer need to keep.</li>
        <li>Opt out of marketing messages at any time.</li>
      </ul>
      <p>Oregon residents have these rights under the Oregon Consumer Privacy Act. Residents of other states may have similar rights under their own laws. To make a request, email us at <a href=\"mailto:{$email}\">{$email}</a> or call <a href=\"tel:{$phone_href}\">{$phone_display}</a>. We may need to verify your identity before we act on a request, and we will not treat you differently for making one.</p>
    ",
  ],

  [
    'id'    => 'calls-and-texts',
    'title' => 'Calls, texts, and emails from us',
    'body'  => "
      <p>When you give us your phone number or email address, you are asking us to get back to you about your roof. We may call, text, or email you about your inquiry, your estimate, scheduling, and the work itself. Message and data rates from your carrier may apply.</p>
      <p>You can stop marketing messages at any time by replying STOP to a text, using the unsubscribe link in an email, or telling us directly. We will still contact you about work that is already scheduled or in progress.</p>
    ",
  ],

  [
    'id'    => 'children',
    'title' => "Children's privacy",
    'body'  => "
      <p>This website is meant for adults arranging roofing work on a property. We do not knowingly collect information from anyone under 13. If you believe a child has sent us information, contact us and we will delete it.</p>
    ",
  ],

  [
    'id'    => 'third-party-links',
    'title' => 'Links to other sites',
    'body'  => "
      <p>Our site links to other places, including our social media profiles and manufacturer or certification pages. Once you follow one of those links, this policy no longer applies. We are not responsible for the content or privacy practices of sites we do not run.</p>
    ",
  ],

  [
    'id'    => 'changes',
    'title' => 'Changes to this policy',
    'body'  => "
      <p>We update this policy when our practices or the services we use change. The date at the top of the page shows the most recent revision. If the change is significant, we will make it clear on this page. Continuing to use the site after an update means you accept the revised policy.</p>
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
          <span style="color:rgba(255,255,255,0.75);">Privacy Policy</span>
        </nav>
        <span class="eyebrow" style="color:var(--mist);">Legal</span>
        <h1>Privacy Policy</h1>
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
            <?= $company ?> ("we," "us," or "our") builds and repairs roofs across Oregon and Washington.
            This policy explains what we collect through <?= esc_html($site_domain) ?>, why we collect it, and what
            control you have over it. If anything here is unclear, call us — we would rather explain it than
            have you guess.
          </p>

          <?php $i = 1; foreach ($sections as $s): ?>
            <section class="lg-section" id="<?= esc_attr($s['id']) ?>">
              <h2><span class="num"><?= str_pad($i, 2, '0', STR_PAD_LEFT) ?></span><?= esc_html($s['title']) ?></h2>
              <?= $s['body'] ?>
            </section>
          <?php $i++; endforeach; ?>

          <!-- Contacto -->
          <div class="lg-contact">
            <h3>Questions about your information?</h3>
            <p>Reach out and a real person will answer. We respond within 24 hours.</p>
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

  /* Scroll suave respetando prefers-reduced-motion */
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

  /* Marca la sección visible en el índice */
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