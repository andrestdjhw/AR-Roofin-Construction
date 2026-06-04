<?php
/**
 * Template Name: Contact
 */
get_header(); ?>

<?php
/* ═══════════════════════════════════════════════════════════════
   CONFIGURACIÓN — Ajusta aquí los datos de contacto y el mapa
   ════════════════════════════════════════════════════════════ */

// ── GOOGLE MAPS ───────────────────────────────────────────────
// Pega aquí el src del iframe de Google Maps (Google Maps → Share → Embed)
$google_maps_embed = '';
// Ejemplo: 'https://www.google.com/maps/embed?pb=...'

// ── HERO BACKGROUND ──────────────────────────────────────────
$hero_bg_img = '';   // Opcional — imagen de fondo del hero

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

  .ct * { box-sizing: border-box; }
  .ct { font-family: 'GT America', sans-serif; color: var(--slate); }
  .ct h1, .ct h2, .ct h3 { font-family: 'GT America', sans-serif; font-weight: 900; line-height: 1.1; }
  .ct .eyebrow {
    font-size: 11px; font-weight: 600; letter-spacing: 2.5px;
    text-transform: uppercase; color: var(--aqua);
    margin-bottom: 14px; display: block;
  }
  .ct .section-inner { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

  /* ── HERO ──────────────────────────────────────────────────── */
  .ct-hero {
    position: relative;
    min-height: 38vh;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    overflow: hidden;
    background: var(--slate);
  }
  .ct-hero__bg {
    position: absolute; inset: 0;
    background-size: cover; background-position: center;
    z-index: 0;
  }
  .ct-hero__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(15,35,34,0.92) 0%, rgba(15,35,34,0.60) 60%, rgba(15,35,34,0.35) 100%);
    z-index: 1;
  }
  .ct-hero__content {
    position: relative; z-index: 2;
    max-width: 1200px; margin: 0 auto;
    padding: 32px 24px 56px;
  }
  .ct-hero__breadcrumb {
    display: flex; align-items: center; gap: 8px;
    font-size: 12px; color: rgba(255,255,255,0.5);
    margin-bottom: 20px; letter-spacing: 0.5px;
  }
  .ct-hero__breadcrumb a { color: rgba(255,255,255,0.5); text-decoration: none; transition: color .2s; }
  .ct-hero__breadcrumb a:hover { color: var(--mist); }
  .ct-hero__breadcrumb span { color: rgba(255,255,255,0.25); }
  .ct-hero h1 {
    font-size: clamp(28px, 4vw, 56px);
    color: #fff; margin: 0 0 16px; max-width: 680px;
  }
  .ct-hero__sub {
    font-size: clamp(14px, 1.5vw, 17px);
    color: rgba(255,255,255,0.70); font-weight: 300;
    line-height: 1.7; max-width: 560px; margin: 0;
  }

  /* ── MAIN CONTACT SECTION ──────────────────────────────────── */
  .ct-main {
    background: var(--light);
    padding: 80px 0 100px;
  }
  .ct-main__grid {
    display: grid;
    grid-template-columns: 440px 1fr;
    gap: 56px;
    align-items: start;
  }

  /* ── LEFT — Info + Map ─────────────────────────────────────── */
  .ct-info { display: flex; flex-direction: column; gap: 32px; }

  /* Phone CTA */
  .ct-phone {
    background: var(--slate);
    border-radius: 14px;
    padding: 32px;
    text-align: center;
  }
  .ct-phone__label {
    font-size: 11px; font-weight: 600; letter-spacing: 2px;
    text-transform: uppercase; color: var(--aqua);
    display: block; margin-bottom: 10px;
  }
  .ct-phone__number {
    display: block;
    font-size: clamp(28px, 3.5vw, 40px);
    font-weight: 900; color: #fff;
    text-decoration: none; line-height: 1;
    transition: color .2s;
  }
  .ct-phone__number:hover { color: var(--mist); }
  .ct-phone__sub {
    font-size: 12px; color: rgba(255,255,255,0.45);
    margin-top: 10px; display: block; letter-spacing: 0.5px;
  }
  .ct-phone__emergency {
    display: inline-flex; align-items: center; gap: 6px;
    background: rgba(232,37,58,0.15); border: 1px solid rgba(232,37,58,0.3);
    color: #ff6b7a; font-size: 11px; font-weight: 600;
    letter-spacing: 1px; text-transform: uppercase;
    padding: 5px 14px; border-radius: 100px; margin-top: 14px;
  }
  .ct-phone__emergency::before {
    content: ''; width: 6px; height: 6px;
    background: var(--red); border-radius: 50%;
    animation: pulse 1.5s ease-in-out infinite;
  }
  @keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.5; transform: scale(0.8); }
  }

  /* Contact details card */
  .ct-details {
    background: #fff;
    border-radius: 14px;
    padding: 28px 32px;
    display: flex; flex-direction: column; gap: 18px;
  }
  .ct-detail-item {
    display: flex; align-items: flex-start; gap: 14px;
  }
  .ct-detail-icon {
    width: 36px; height: 36px; border-radius: 8px;
    background: rgba(106,154,154,0.1);
    display: flex; align-items: center; justify-content: center;
    color: var(--aqua); flex-shrink: 0;
  }
  .ct-detail-label {
    font-size: 10px; font-weight: 700; letter-spacing: 1.5px;
    text-transform: uppercase; color: #aab; display: block;
    margin-bottom: 3px;
  }
  .ct-detail-value {
    font-size: 14px; color: var(--slate); font-weight: 500;
    line-height: 1.5;
  }
  .ct-detail-value a {
    color: var(--slate); text-decoration: none; transition: color .2s;
  }
  .ct-detail-value a:hover { color: var(--red); }

  /* Map */
  .ct-map {
    border-radius: 14px;
    overflow: hidden;
    height: 260px;
    background: linear-gradient(135deg, var(--slate), #1e3e3d);
    position: relative;
  }
  .ct-map iframe {
    width: 100%; height: 100%;
    border: none; display: block;
  }
  .ct-map__placeholder {
    width: 100%; height: 100%;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    gap: 12px; color: rgba(255,255,255,0.2);
    font-size: 12px; letter-spacing: 1px; text-transform: uppercase;
  }

  /* ── RIGHT — Form ──────────────────────────────────────────── */
  .ct-form-wrap {
    background: #fff;
    border-radius: 14px;
    padding: 48px;
    box-shadow: 0 2px 32px rgba(15,35,34,0.08);
  }
  .ct-form-wrap h2 {
    font-size: clamp(22px, 2.5vw, 32px);
    color: var(--slate); margin: 0 0 8px;
  }
  .ct-form-wrap > p {
    font-size: 14px; color: #778; line-height: 1.6;
    margin: 0 0 36px; font-weight: 300;
  }

  .ct-form-row {
    display: grid; grid-template-columns: 1fr 1fr;
    gap: 16px; margin-bottom: 16px;
  }
  .ct-form-field {
    display: flex; flex-direction: column; gap: 7px;
    margin-bottom: 16px;
  }
  .ct-form-field:last-of-type { margin-bottom: 0; }
  .ct-form-field label {
    font-size: 11px; font-weight: 700; letter-spacing: 1px;
    text-transform: uppercase; color: #889;
  }
  .ct-form-field label .req {
    color: var(--red); margin-left: 2px;
  }
  .ct-form-field input,
  .ct-form-field select,
  .ct-form-field textarea {
    background: var(--light);
    border: 1.5px solid #dde8e8;
    border-radius: 8px;
    padding: 12px 16px;
    color: var(--slate);
    font-family: 'GT America', sans-serif;
    font-size: 14px;
    outline: none;
    transition: border-color .2s, background .2s;
    width: 100%;
  }
  .ct-form-field input:focus,
  .ct-form-field select:focus,
  .ct-form-field textarea:focus {
    border-color: var(--aqua);
    background: #fff;
  }
  .ct-form-field input::placeholder,
  .ct-form-field textarea::placeholder { color: #bbc; }
  .ct-form-field textarea { resize: vertical; min-height: 110px; }
  .ct-form-field select { cursor: pointer; }

  .ct-form-submit {
    width: 100%; padding: 16px;
    background: var(--red); color: #fff;
    font-family: 'GT America', sans-serif;
    font-size: 16px; font-weight: 700;
    border: none; border-radius: 8px;
    cursor: pointer; margin-top: 8px;
    transition: background .2s, transform .15s;
    letter-spacing: 0.3px;
    display: flex; align-items: center; justify-content: center; gap: 10px;
  }
  .ct-form-submit:hover { background: var(--clay); transform: translateY(-2px); }

  .ct-form-note {
    text-align: center; margin-top: 14px;
    font-size: 12px; color: #aab; letter-spacing: 0.3px;
  }

  /* Success state */
  .ct-form-success {
    display: none;
    text-align: center; padding: 48px 32px;
  }
  .ct-form-success__icon {
    width: 64px; height: 64px; border-radius: 50%;
    background: rgba(106,154,154,0.15);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px; color: var(--aqua);
  }
  .ct-form-success h3 {
    font-size: 22px; color: var(--slate); margin: 0 0 10px;
  }
  .ct-form-success p {
    font-size: 15px; color: #778; line-height: 1.7; margin: 0;
  }

  /* ── TRUST STRIP ───────────────────────────────────────────── */
  .ct-trust {
    background: var(--slate);
    padding: 48px 0;
  }
  .ct-trust__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 0;
  }
  .ct-trust__item {
    display: flex; align-items: center; gap: 14px;
    padding: 20px 28px;
    border-right: 1px solid rgba(255,255,255,0.07);
  }
  .ct-trust__item:last-child { border-right: none; }
  .ct-trust__icon {
    width: 40px; height: 40px; border-radius: 8px;
    background: rgba(106,154,154,0.12);
    display: flex; align-items: center; justify-content: center;
    color: var(--aqua); flex-shrink: 0;
  }
  .ct-trust__text strong {
    display: block; font-size: 14px; font-weight: 700;
    color: #fff; margin-bottom: 2px;
  }
  .ct-trust__text span {
    font-size: 12px; color: rgba(255,255,255,0.45);
  }

  /* ── RESPONSIVE ────────────────────────────────────────────── */
  @media (max-width: 1024px) {
    .ct-main__grid { grid-template-columns: 1fr; gap: 40px; }
    .ct-info { flex-direction: row; flex-wrap: wrap; }
    .ct-phone { flex: 1; min-width: 240px; }
    .ct-details { flex: 1; min-width: 260px; }
    .ct-map { height: 220px; flex: 100%; }
    .ct-trust__grid { grid-template-columns: repeat(2, 1fr); }
    .ct-trust__item:nth-child(2) { border-right: none; }
  }
  @media (max-width: 768px) {
    .ct-form-wrap { padding: 32px 24px; }
    .ct-form-row { grid-template-columns: 1fr; }
    .ct-info { flex-direction: column; }
    .ct-trust__grid { grid-template-columns: 1fr; }
    .ct-trust__item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.07); }
    .ct-trust__item:last-child { border-bottom: none; }
  }
</style>

<div class="ct">

  <!-- ═══════════════════════════════════════════════════════════
       HERO
  ═══════════════════════════════════════════════════════════ -->
  <section class="ct-hero">
    <div class="ct-hero__bg" <?php if($hero_bg_img): ?>style="background-image:url('<?= esc_url($hero_bg_img) ?>')"<?php endif; ?>></div>
    <div class="ct-hero__overlay"></div>
    <div class="ct-hero__content">
      <nav class="ct-hero__breadcrumb" aria-label="Breadcrumb">
        <a href="/">Home</a>
        <span>›</span>
        <span style="color:rgba(255,255,255,0.75);">Contact</span>
      </nav>
      <span class="eyebrow" style="color:var(--mist);">Get in Touch</span>
      <h1>Let's talk about your roof.</h1>
      <p class="ct-hero__sub">Free estimates. Free inspections. Honest answers. Reach us by phone, email, or the form below. We respond within 24 hours.</p>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       MAIN — INFO + FORM
  ═══════════════════════════════════════════════════════════ -->
  <section class="ct-main">
    <div class="section-inner">
      <div class="ct-main__grid">

        <!-- LEFT: Contact Info + Map -->
        <div class="ct-info">

          <!-- Phone CTA -->
          <div class="ct-phone">
            <span class="ct-phone__label">Call Us Directly</span>
            <a href="tel:5416450577" class="ct-phone__number" onclick="gtag && gtag('event','conversion',{send_to:'AW-XXXXXXX/XXXXXXX'})">
              541-645-0577
            </a>
            <span class="ct-phone__sub">Mon – Fri &nbsp;7:00 AM – 5:00 PM</span>
            <span class="ct-phone__emergency">24/7 Emergency Response</span>
          </div>

          <!-- Details -->
          <div class="ct-details">
            <?php
            $details = [
              [
                'label' => 'Email',
                'value' => '<a href="mailto:info@arroofingus.com">info@arroofingus.com</a>',
                'icon'  => '<rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>',
              ],
              [
                'label' => 'Service Area',
                'value' => '18 cities across Oregon &amp; Washington',
                'icon'  => '<path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/>',
              ],
              [
                'label' => 'Office Hours',
                'value' => 'Mon – Fri: 7:00 AM – 5:00 PM<br>Emergency: 24/7',
                'icon'  => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
              ],
              [
                'label' => 'Response Time',
                'value' => 'Within 24 hours on all inquiries',
                'icon'  => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12"/><path d="M1 1l22 22"/><path d="M16.72 11.06A10.94 10.94 0 0 1 19 12.55"/><path d="M5 5a10.9 10.9 0 0 0-1.956 2.428"/>',
              ],
            ];
            foreach ($details as $d) : ?>
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

          <!-- Map -->
          <div class="ct-map">
            <?php if($google_maps_embed): ?>
              <iframe
                src="<?= esc_url($google_maps_embed) ?>"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="AR Roofing service area map">
              </iframe>
            <?php else: ?>
              <div class="ct-map__placeholder">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                <span>Portland, Oregon</span>
              </div>
            <?php endif; ?>
          </div>

        </div>

        <!-- RIGHT: Form -->
        <div class="ct-form-wrap" id="contact-form">

          <div id="ct-form-fields">
            <span class="eyebrow">Send a Message</span>
            <h2>Get your free estimate today.</h2>
            <p>Fill out the form and we'll get back to you within 24 hours. For emergencies, call us directly at <a href="tel:5416450577" style="color:var(--red);font-weight:600;">541-645-0577</a>.</p>

            <div class="ct-form-row">
              <div class="ct-form-field">
                <label for="ct-name">Full Name <span class="req">*</span></label>
                <input type="text" id="ct-name" name="name" placeholder="Your full name" required>
              </div>
              <div class="ct-form-field">
                <label for="ct-phone">Phone <span class="req">*</span></label>
                <input type="tel" id="ct-phone" name="phone" placeholder="(541) 000-0000" required>
              </div>
            </div>

            <div class="ct-form-field">
              <label for="ct-email">Email</label>
              <input type="email" id="ct-email" name="email" placeholder="you@email.com">
            </div>

            <div class="ct-form-row">
              <div class="ct-form-field">
                <label for="ct-city">City <span class="req">*</span></label>
                <select id="ct-city" name="city" required>
                  <option value="">Select your city...</option>
                  <optgroup label="Oregon">
                    <option>Portland</option>
                    <option>The Dalles</option>
                    <option>Hood River</option>
                    <option>Gresham</option>
                    <option>Troutdale</option>
                    <option>Cascade Locks</option>
                    <option>Mosier</option>
                    <option>Wasco</option>
                    <option>Dufur</option>
                  </optgroup>
                  <optgroup label="Washington">
                    <option>Stevenson</option>
                    <option>White Salmon</option>
                    <option>North Bonneville</option>
                    <option>Bingen</option>
                    <option>Goldendale</option>
                    <option>Dallesport</option>
                    <option>Lyle</option>
                    <option>Carson</option>
                    <option>Wishram</option>
                  </optgroup>
                  <option value="other">Other / Not Sure</option>
                </select>
              </div>
              <div class="ct-form-field">
                <label for="ct-service">Service Needed</label>
                <select id="ct-service" name="service">
                  <option value="">Select a service...</option>
                  <option>Free Inspection</option>
                  <option>Roof Installation</option>
                  <option>Roof Repair</option>
                  <option>Emergency Roofing</option>
                  <option>Roof Maintenance</option>
                  <option>Commercial Roofing</option>
                  <option>Not Sure</option>
                </select>
              </div>
            </div>

            <div class="ct-form-field">
              <label for="ct-message">Message</label>
              <textarea id="ct-message" name="message" placeholder="Tell us about your roof — age, issue, material, anything helpful..."></textarea>
            </div>

            <button type="button" class="ct-form-submit" onclick="ctSubmitForm()">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
              Send My Request
            </button>
            <p class="ct-form-note">No spam. No sales calls. Just a response about your roof.</p>
          </div>

          <!-- Success message -->
          <div class="ct-form-success" id="ct-form-success">
            <div class="ct-form-success__icon">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
            </div>
            <h3>Message sent!</h3>
            <p>We'll get back to you within 24 hours.<br>For immediate help call <a href="tel:5416450577" style="color:var(--red);font-weight:600;">541-645-0577</a>.</p>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════
       TRUST STRIP
  ═══════════════════════════════════════════════════════════ -->
  <div class="ct-trust">
    <div class="section-inner">
      <div class="ct-trust__grid">
        <?php
        $trust = [
          [
            'title' => 'Free Estimates',
            'sub'   => 'No cost, no obligation',
            'icon'  => '<path d="M9 12l2 2 4-4"/><path d="M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9z"/>',
          ],
          [
            'title' => '24/7 Emergency',
            'sub'   => 'Same-day response',
            'icon'  => '<polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>',
          ],
          [
            'title' => 'Licensed & Insured',
            'sub'   => 'Oregon & Washington',
            'icon'  => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
          ],
          [
            'title' => 'Owner on Every Job',
            'sub'   => 'Antonio on your roof',
            'icon'  => '<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/>',
          ],
        ];
        foreach ($trust as $t) : ?>
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

</div><!-- /.ct -->

<script>
function ctSubmitForm() {
  const name    = document.getElementById('ct-name').value.trim()
  const phone   = document.getElementById('ct-phone').value.trim()
  const city    = document.getElementById('ct-city').value

  if (!name) { document.getElementById('ct-name').focus(); return; }
  if (!phone) { document.getElementById('ct-phone').focus(); return; }
  if (!city)  { document.getElementById('ct-city').focus(); return; }

  // ── Google Ads conversion tracking ───────────────────────────
  // Uncomment and replace with your conversion ID when ready:
  // if (typeof gtag !== 'undefined') {
  //   gtag('event', 'conversion', { send_to: 'AW-XXXXXXX/XXXXXXX' });
  // }

  // ── EmailJS (optional — configure in functions.php or here) ──
  // emailjs.send('service_id', 'template_id', {
  //   name, phone,
  //   email:   document.getElementById('ct-email').value,
  //   city,
  //   service: document.getElementById('ct-service').value,
  //   message: document.getElementById('ct-message').value,
  // });

  // Show success state
  document.getElementById('ct-form-fields').style.display = 'none'
  document.getElementById('ct-form-success').style.display = 'block'
}
</script>

<?php get_footer(); ?>