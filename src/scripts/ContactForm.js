import React, { useState, useEffect, useRef } from "react"

/* ─── CONFIG ──────────────────────────────────────────────────── */
const EMAILJS_PUBLIC_KEY  = "QEc-kIrnJ6-IWsn3c"
const EMAILJS_SERVICE_ID  = "service_99yzkzs"
const EMAILJS_TEMPLATE_ID = "template_uoyikp2"
const RECAPTCHA_SITE_KEY  = "6LctUw0tAAAAANOWE5Ouqf46G8z7C3RQ4QBykSIT"

/* ─── DATA ────────────────────────────────────────────────────── */
const CITIES_OR = [
  "Portland", "The Dalles", "Hood River", "Gresham",
  "Troutdale", "Cascade Locks", "Mosier", "Wasco", "Dufur",
]
const CITIES_WA = [
  "Stevenson", "White Salmon", "North Bonneville", "Bingen",
  "Goldendale", "Dallesport", "Lyle", "Carson", "Wishram",
]

const ROOF_TYPES = [
  { value: "shingles", label: "Asphalt Shingles" },
  { value: "metal",    label: "Metal Roofing" },
  { value: "flat",     label: "Flat Roof (TPO / PVC)" },
  { value: "unsure",   label: "Not Sure" },
]

const SERVICES = [
  { value: "inspection",   label: "Free Inspection" },
  { value: "installation", label: "Roof Installation" },
  { value: "repair",       label: "Roof Repair" },
  { value: "emergency",    label: "Emergency Roofing" },
  { value: "maintenance",  label: "Roof Maintenance" },
  { value: "commercial",   label: "Commercial Roofing" },
]

/* ─── ICONS ───────────────────────────────────────────────────── */
const PhoneIcon = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>
  </svg>
)
const SendIcon = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/>
  </svg>
)
const CheckIcon = () => (
  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <polyline points="20 6 9 17 4 12"/>
  </svg>
)
const AlertIcon = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/>
  </svg>
)
const SpinnerIcon = () => (
  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round"
    style={{ animation: "arSpin 0.8s linear infinite" }}>
    <path d="M21 12a9 9 0 1 1-6.219-8.56"/>
  </svg>
)

/* ─── STYLES ──────────────────────────────────────────────────── */
const injectStyles = () => {
  if (document.getElementById("ar-contact-form-styles")) return
  const style = document.createElement("style")
  style.id = "ar-contact-form-styles"
  style.textContent = `
    @keyframes arSpin { to { transform: rotate(360deg); } }
    @keyframes arFadeUp {
      from { opacity: 0; transform: translateY(14px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes arSuccessPop {
      0%   { transform: scale(0.85); opacity: 0; }
      70%  { transform: scale(1.05); }
      100% { transform: scale(1);    opacity: 1; }
    }
    @keyframes arPulseRed {
      0%, 100% { box-shadow: 0 0 0 0 rgba(232,37,58,0.35); }
      50%      { box-shadow: 0 0 0 8px rgba(232,37,58,0); }
    }

    .ar-cf-wrap * { box-sizing: border-box; }
    .ar-cf-wrap {
      font-family: 'GT America', 'DM Sans', sans-serif;
      color: #0f2322;
      animation: arFadeUp .4s ease both;
      display: flex;
      flex-direction: column;
      height: 100%;
    }

    /* Emergency toggle */
    .ar-cf-emergency-bar {
      display: flex; align-items: center; justify-content: space-between;
      padding: 10px 16px; border-radius: 10px; margin-bottom: 14px;
      border: 1.5px solid #dde8e8;
      background: #f5f6f5;
      cursor: pointer; transition: background .2s, border-color .2s;
      user-select: none;
    }
    .ar-cf-emergency-bar.active {
      background: rgba(232,37,58,0.15);
      border-color: rgba(232,37,58,0.6);
      animation: arPulseRed 2s ease-in-out infinite;
    }
    .ar-cf-emergency-bar__left {
      display: flex; align-items: center; gap: 10px;
    }
    .ar-cf-emergency-bar__dot {
      width: 9px; height: 9px; border-radius: 50%;
      background: #bbc; transition: background .2s;
    }
    .ar-cf-emergency-bar.active .ar-cf-emergency-bar__dot {
      background: #e8253a;
      animation: arPulseRed 1.2s ease-in-out infinite;
    }
    .ar-cf-emergency-bar__label {
      font-size: 13px; font-weight: 700; color: #334;
    }
    .ar-cf-emergency-bar.active .ar-cf-emergency-bar__label { color: #e8253a; }
    .ar-cf-emergency-bar__sub {
      font-size: 12px; color: #aab; font-weight: 400; margin-left: 4px;
    }
    /* Dark theme overrides */
    .ar-cf-wrap--dark .ar-cf-emergency-bar {
      border-color: rgba(255,255,255,0.12);
      background: rgba(255,255,255,0.05);
    }
    .ar-cf-wrap--dark .ar-cf-emergency-bar__label { color: rgba(255,255,255,0.85); }
    .ar-cf-wrap--dark .ar-cf-emergency-bar.active .ar-cf-emergency-bar__label { color: #ff8a95; }
    .ar-cf-wrap--dark .ar-cf-emergency-bar__sub { color: rgba(255,255,255,0.4); }
    .ar-cf-wrap--dark .ar-cf-emergency-bar__dot { background: rgba(255,255,255,0.3); }

    /* Toggle switch */
    .ar-cf-toggle {
      width: 42px; height: 24px; border-radius: 12px;
      background: #ddd; position: relative;
      transition: background .2s; flex-shrink: 0;
    }
    .ar-cf-toggle.on { background: #e8253a; }
    .ar-cf-toggle__knob {
      width: 18px; height: 18px; border-radius: 50%;
      background: #fff; position: absolute; top: 3px; left: 3px;
      transition: transform .2s; box-shadow: 0 1px 4px rgba(0,0,0,0.2);
    }
    .ar-cf-toggle.on .ar-cf-toggle__knob { transform: translateX(18px); }

    /* Emergency phone bar */
    .ar-cf-phone-banner {
      background: #e8253a; border-radius: 10px;
      padding: 12px 20px; margin-bottom: 14px;
      display: flex; align-items: center; justify-content: space-between;
      gap: 12px; flex-wrap: wrap;
      animation: arFadeUp .3s ease both;
    }
    .ar-cf-phone-banner span {
      font-size: 13px; font-weight: 600; color: rgba(255,255,255,0.85);
    }
    .ar-cf-phone-banner a {
      display: inline-flex; align-items: center; gap: 8px;
      padding: 9px 20px; background: #fff; color: #e8253a;
      font-size: 15px; font-weight: 900; text-decoration: none;
      border-radius: 7px; transition: transform .15s;
      white-space: nowrap;
    }
    .ar-cf-phone-banner a:hover { transform: translateY(-1px); }

    /* Row */
    .ar-cf-row {
      display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-bottom: 12px;
    }

    /* Field */
    .ar-cf-field { display: flex; flex-direction: column; gap: 5px; margin-bottom: 12px; }
    .ar-cf-field:last-of-type { margin-bottom: 0; }
    /* Fields inside a row don't add their own bottom margin — the row handles it */
    .ar-cf-row .ar-cf-field { margin-bottom: 0; }
    .ar-cf-label {
      font-size: 11px; font-weight: 700; letter-spacing: 1px;
      text-transform: uppercase;
      color: rgba(255,255,255,0.45);
    }
    .ar-cf-label.dark { color: #889; }
    .ar-cf-label .req { color: #e8253a; margin-left: 2px; }

    .ar-cf-input, .ar-cf-select, .ar-cf-textarea {
      background: rgba(255,255,255,0.07);
      border: 1.5px solid rgba(255,255,255,0.12);
      border-radius: 8px; padding: 9px 13px;
      color: #fff; font-family: inherit; font-size: 14px;
      outline: none; width: 100%;
      transition: border-color .2s, background .2s;
    }
    .ar-cf-input.light, .ar-cf-select.light, .ar-cf-textarea.light {
      background: #f5f6f5; border-color: #dde8e8; color: #0f2322;
    }
    .ar-cf-input::placeholder, .ar-cf-textarea::placeholder { color: rgba(255,255,255,0.3); }
    .ar-cf-input.light::placeholder, .ar-cf-textarea.light::placeholder { color: #bbc; }
    .ar-cf-input:focus, .ar-cf-select:focus, .ar-cf-textarea:focus {
      border-color: #6a9a9a; background: rgba(255,255,255,0.11);
    }
    .ar-cf-input.light:focus, .ar-cf-select.light:focus, .ar-cf-textarea.light:focus {
      border-color: #6a9a9a; background: #fff;
    }
    .ar-cf-input.error, .ar-cf-select.error, .ar-cf-textarea.error {
      border-color: #e8253a !important;
    }
    .ar-cf-select option { background: #0f2322; color: #fff; }
    .ar-cf-select.light option { background: #fff; color: #0f2322; }
    .ar-cf-textarea { resize: vertical; min-height: 68px; }

    /* Field error message */
    .ar-cf-error-msg {
      font-size: 11px; color: #ff6b7a; margin-top: 2px;
    }

    /* Submit button */
    .ar-cf-submit {
      width: 100%; padding: 13px; margin-top: 6px;
      background: #e8253a; color: #fff;
      font-family: inherit; font-size: 15px; font-weight: 700;
      border: none; border-radius: 8px; cursor: pointer;
      display: flex; align-items: center; justify-content: center; gap: 10px;
      transition: background .2s, transform .15s;
      letter-spacing: 0.3px;
    }
    .ar-cf-submit:hover:not(:disabled) { background: #8b0a1a; transform: translateY(-2px); }
    .ar-cf-submit:disabled { opacity: 0.6; cursor: not-allowed; transform: none; }

    /* Note */
    .ar-cf-note {
      text-align: center; margin-top: 10px;
      font-size: 11.5px; color: rgba(255,255,255,0.35); line-height: 1.5;
    }
    .ar-cf-note.light { color: #aab; }

    /* Success */
    .ar-cf-success {
      text-align: center; padding: 40px 24px;
      animation: arSuccessPop .4s ease both;
    }
    .ar-cf-success__icon {
      width: 68px; height: 68px; border-radius: 50%;
      background: rgba(106,154,154,0.15); border: 2px solid rgba(106,154,154,0.3);
      display: flex; align-items: center; justify-content: center;
      margin: 0 auto 20px; color: #6a9a9a;
    }
    .ar-cf-success h3 {
      font-size: 22px; font-weight: 900; color: #fff; margin: 0 0 10px;
    }
    .ar-cf-success h3.light { color: #0f2322; }
    .ar-cf-success p { font-size: 14.5px; color: rgba(255,255,255,0.6); line-height: 1.7; margin: 0; }
    .ar-cf-success p.light { color: #667; }
    .ar-cf-success a { color: #c8e8e8; font-weight: 600; text-decoration: none; }
    .ar-cf-success a.light { color: #e8253a; }

    /* General error banner */
    .ar-cf-error-banner {
      background: rgba(232,37,58,0.1); border: 1px solid rgba(232,37,58,0.3);
      border-radius: 8px; padding: 12px 16px; margin-bottom: 14px;
      font-size: 13px; color: #ff6b7a; display: flex; align-items: center; gap: 10px;
    }

    @media (max-width: 520px) {
      .ar-cf-row { grid-template-columns: 1fr; gap: 0; }
      .ar-cf-row .ar-cf-field { margin-bottom: 12px; }
    }
  `
  document.head.appendChild(style)
}

// Run once at module load — NOT inside the component
injectStyles()

/* ─── HELPERS ─────────────────────────────────────────────────── */
const loadScript = (src, id) => new Promise((resolve, reject) => {
  if (document.getElementById(id)) { resolve(); return }
  const s = document.createElement("script")
  s.src = src; s.id = id; s.async = true
  s.onload = resolve; s.onerror = reject
  document.head.appendChild(s)
})

const getRecaptchaToken = (action) => new Promise((resolve, reject) => {
  if (!window.grecaptcha) { reject(new Error("reCAPTCHA not loaded")); return }
  window.grecaptcha.ready(() => {
    window.grecaptcha.execute(RECAPTCHA_SITE_KEY, { action })
      .then(resolve).catch(reject)
  })
})

/* ─── FIELD COMPONENT (outside ContactForm to prevent re-mount on state change) ── */
function Field({ id, label, required, children, error, isLight }) {
  return (
    <div className="ar-cf-field">
      <label className={isLight ? "ar-cf-label light" : "ar-cf-label"} htmlFor={id}>
        {label}{required && <span className="req">*</span>}
      </label>
      {children}
      {error && <span className="ar-cf-error-msg">{error}</span>}
    </div>
  )
}

/* ─── MAIN COMPONENT ──────────────────────────────────────────── */
function ContactForm({
  theme = "dark",       // "dark" | "light"
  title = "Get a Free Inspection",
  showTitle = true,
}) {
  const isLight = theme === "light"
  const cls = (base) => isLight ? `${base} light` : base

  const [form, setForm] = useState({
    name: "", phone: "", email: "",
    city: "", service: "", roofType: "", message: "",
  })
  const [isEmergency, setIsEmergency] = useState(false)
  const [errors, setErrors]           = useState({})
  const [status, setStatus]           = useState("idle") // idle | sending | success | error
  const [errorMsg, setErrorMsg]       = useState("")
  const initialized = useRef(false)

  useEffect(() => {
    if (initialized.current) return
    initialized.current = true

    // Load EmailJS
    loadScript("https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js", "emailjs-sdk")
      .then(() => window.emailjs?.init(EMAILJS_PUBLIC_KEY))
      .catch(() => console.warn("EmailJS failed to load"))

    // Load reCAPTCHA v3
    loadScript(
      `https://www.google.com/recaptcha/api.js?render=${RECAPTCHA_SITE_KEY}`,
      "recaptcha-v3"
    ).catch(() => console.warn("reCAPTCHA failed to load"))
  }, [])

  const set = (field) => (e) => {
    setForm(prev => ({ ...prev, [field]: e.target.value }))
    if (errors[field]) setErrors(prev => ({ ...prev, [field]: "" }))
  }

  const validate = () => {
    const e = {}
    if (!form.name.trim())  e.name  = "Name is required"
    if (!form.phone.trim()) e.phone = "Phone is required"
    if (!form.city)         e.city  = "Please select a city"
    setErrors(e)
    return Object.keys(e).length === 0
  }

  const handleSubmit = async () => {
    if (!validate()) return
    setStatus("sending")
    setErrorMsg("")

    try {
      // reCAPTCHA v3 token
      const token = await getRecaptchaToken("contact_form").catch(() => "unavailable")

      const templateParams = {
        from_name:              form.name,
        phone:                  form.phone,
        email:                  form.email || "Not provided",
        city:                   form.city,
        service:                form.service || "Not specified",
        roof_type:              form.roofType || "Not specified",
        is_emergency:           isEmergency ? "YES — EMERGENCY" : "No",
        // Banner row: red bg + visible text when emergency, slate bg + empty text when not
        emergency_banner_bg:    isEmergency ? "#e8253a"                              : "#0f2322",
        emergency_banner_padding: isEmergency ? "14px 36px"                          : "0 36px",
        emergency_banner_text:  isEmergency ? "⚡ EMERGENCY REQUEST — Respond immediately" : "",
        // Badge colors
        emergency_badge_bg:     isEmergency ? "#fde8ea"  : "#f0f7f6",
        emergency_badge_color:  isEmergency ? "#e8253a"  : "#6a9a9a",
        message:                form.message || "No message provided",
        recaptcha:              token,
      }

      await window.emailjs.send(
        EMAILJS_SERVICE_ID,
        EMAILJS_TEMPLATE_ID,
        templateParams
      )

      setStatus("success")
    } catch (err) {
      console.error("Form submission error:", err)
      setStatus("error")
      setErrorMsg("Something went wrong. Please call us directly at 541-645-0577.")
    }
  }

  /* ── SUCCESS STATE ─── */
  if (status === "success") {
    return (
      <div className={`ar-cf-wrap${!isLight ? " ar-cf-wrap--dark" : ""}`}>
        <div className="ar-cf-success">
          <div className="ar-cf-success__icon"><CheckIcon /></div>
          <h3 className={isLight ? "light" : ""}>
            {isEmergency ? "We're on it." : "Message sent!"}
          </h3>
          <p className={isLight ? "light" : ""}>
            {isEmergency
              ? <>For immediate help, call <a href="tel:5416450577" className={isLight ? "light" : ""}>541-645-0577</a> now. We respond to emergencies 24/7.</>
              : <>We'll get back to you within 24 hours. For immediate help call <a href="tel:5416450577" className={isLight ? "light" : ""}>541-645-0577</a>.</>
            }
          </p>
        </div>
      </div>
    )
  }

  /* ── FORM ─── */
  return (
    <div className={`ar-cf-wrap${!isLight ? " ar-cf-wrap--dark" : ""}`}>

      {showTitle && (
        <h3 style={{
          fontFamily: "inherit", fontSize: "17px", fontWeight: 700, margin: "0 0 18px",
          color: isLight ? "#0f2322" : "#fff",
        }}>
          {title}
        </h3>
      )}

      {/* Emergency toggle */}
      <div
        className={`ar-cf-emergency-bar${isEmergency ? " active" : ""}`}
        onClick={() => setIsEmergency(v => !v)}
        role="checkbox"
        aria-checked={isEmergency}
        tabIndex={0}
        onKeyDown={(e) => e.key === " " && setIsEmergency(v => !v)}
      >
        <div className="ar-cf-emergency-bar__left">
          <div className="ar-cf-emergency-bar__dot" />
          <span className="ar-cf-emergency-bar__label">
            {isEmergency ? "⚡ Emergency" : "This is an emergency"}
          </span>
          {!isEmergency && (
            <span className="ar-cf-emergency-bar__sub">— tap to flag</span>
          )}
        </div>
        <div className={`ar-cf-toggle${isEmergency ? " on" : ""}`}>
          <div className="ar-cf-toggle__knob" />
        </div>
      </div>

      {/* Emergency phone banner */}
      {isEmergency && (
        <div className="ar-cf-phone-banner">
          <span>For immediate help, call us now:</span>
          <a href="tel:5416450577">
            <PhoneIcon />
            541-645-0577
          </a>
        </div>
      )}

      {/* General error */}
      {status === "error" && (
        <div className="ar-cf-error-banner">
          <AlertIcon />
          {errorMsg}
        </div>
      )}

      {/* Name + Phone */}
      <div className="ar-cf-row">
        <Field id="cf-name" label="Full Name" required error={errors.name} isLight={isLight}>
          <input
            id="cf-name" type="text"
            className={cls("ar-cf-input") + (errors.name ? " error" : "")}
            placeholder="Your name"
            value={form.name} onChange={set("name")}
          />
        </Field>
        <Field id="cf-phone" label="Phone" required error={errors.phone} isLight={isLight}>
          <input
            id="cf-phone" type="tel"
            className={cls("ar-cf-input") + (errors.phone ? " error" : "")}
            placeholder="(541) 000-0000"
            value={form.phone} onChange={set("phone")}
          />
        </Field>
      </div>

      {/* Email + City */}
      <div className="ar-cf-row">
        <Field id="cf-email" label="Email" isLight={isLight}>
          <input
            id="cf-email" type="email"
            className={cls("ar-cf-input")}
            placeholder="you@email.com"
            value={form.email} onChange={set("email")}
          />
        </Field>
        <Field id="cf-city" label="City" required error={errors.city} isLight={isLight}>
          <select
            id="cf-city"
            className={cls("ar-cf-select") + (errors.city ? " error" : "")}
            value={form.city} onChange={set("city")}
          >
            <option value="">Select city...</option>
            <optgroup label="Oregon">
              {CITIES_OR.map(c => <option key={c} value={c}>{c}</option>)}
            </optgroup>
            <optgroup label="Washington">
              {CITIES_WA.map(c => <option key={c} value={c}>{c}</option>)}
            </optgroup>
            <option value="other">Other / Not sure</option>
          </select>
        </Field>
      </div>

      {/* Service + Roof Type */}
      <div className="ar-cf-row">
        <Field id="cf-service" label="Service Needed" isLight={isLight}>
          <select
            id="cf-service"
            className={cls("ar-cf-select")}
            value={form.service} onChange={set("service")}
          >
            <option value="">Select service...</option>
            {SERVICES.map(s => (
              <option key={s.value} value={s.value}>{s.label}</option>
            ))}
          </select>
        </Field>
        <Field id="cf-roof-type" label="Roof Type" isLight={isLight}>
          <select
            id="cf-roof-type"
            className={cls("ar-cf-select")}
            value={form.roofType} onChange={set("roofType")}
          >
            <option value="">Select roof type...</option>
            {ROOF_TYPES.map(r => (
              <option key={r.value} value={r.value}>{r.label}</option>
            ))}
          </select>
        </Field>
      </div>

      {/* Message */}
      <Field id="cf-message" label="Message" isLight={isLight}>
        <textarea
          id="cf-message"
          className={cls("ar-cf-textarea")}
          placeholder="Tell us about your roof — any issues, age, material, or details that might help..."
          value={form.message} onChange={set("message")}
        />
      </Field>

      {/* Submit */}
      <button
        className="ar-cf-submit"
        onClick={handleSubmit}
        disabled={status === "sending"}
      >
        {status === "sending" ? (
          <><SpinnerIcon /> Sending...</>
        ) : isEmergency ? (
          <><AlertIcon /> Send Emergency Request</>
        ) : (
          <><SendIcon /> Send My Request</>
        )}
      </button>

      <p className={cls("ar-cf-note")}>
        Protected by Google reCAPTCHA v3.
        No spam. We respond within 24 hours — emergencies same day.
      </p>

    </div>
  )
}

export default ContactForm