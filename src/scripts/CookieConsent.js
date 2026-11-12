import React, { useEffect, useRef, useState } from "react"

/* ─── CONFIG ───────────────────────────────────────────────────
   STORAGE_KEY : dónde se guarda la decisión (localStorage + cookie).
   VERSION     : súbelo si cambian las categorías → se vuelve a preguntar.
   El footer abre el panel con window.arOpenCookieSettings() o
   disparando el evento "ar:open-cookie-settings".
   Cada vez que el usuario decide se dispara "ar:cookie-consent"
   con { detail: { necessary, analytics, marketing } } y, si existe
   gtag, se actualiza Google Consent Mode.
   ──────────────────────────────────────────────────────────── */
const STORAGE_KEY  = "ar_cookie_consent"
const VERSION      = 1
const MAX_AGE_DAYS = 180
const PRIVACY_URL  = "/privacy-policy#cookies"

const CATEGORIES = [
  {
    key: "necessary",
    title: "Strictly necessary",
    desc: "Required for the site to work: page delivery, security, and spam protection on our contact forms (reCAPTCHA). These can't be turned off.",
    locked: true,
  },
  {
    key: "analytics",
    title: "Analytics",
    desc: "Help us understand how visitors use the site — which pages are visited and how people find us — so we can improve it. Data is aggregated.",
  },
  {
    key: "marketing",
    title: "Marketing",
    desc: "Used to measure our ads (for example, Google Ads calls and form conversions) and show you relevant offers on other platforms.",
  },
]

/* ─── STORAGE ──────────────────────────────────────────────────── */
function readConsent() {
  try {
    const raw = localStorage.getItem(STORAGE_KEY)
    if (!raw) return null
    const data = JSON.parse(raw)
    if (data.v !== VERSION) return null
    if (Date.now() - data.ts > MAX_AGE_DAYS * 864e5) return null
    return data
  } catch (e) {
    return null
  }
}

function saveConsent(prefs) {
  const data = { v: VERSION, ts: Date.now(), necessary: true, analytics: !!prefs.analytics, marketing: !!prefs.marketing }
  try { localStorage.setItem(STORAGE_KEY, JSON.stringify(data)) } catch (e) {}
  // Cookie legible desde PHP por si algún día se condicionan scripts en el servidor
  const value = `a${data.analytics ? 1 : 0}m${data.marketing ? 1 : 0}`
  document.cookie = `${STORAGE_KEY}=${value}; max-age=${MAX_AGE_DAYS * 86400}; path=/; SameSite=Lax`
  applyConsent(data)
  return data
}

function applyConsent(data) {
  if (typeof window.gtag === "function") {
    const g = v => (v ? "granted" : "denied")
    window.gtag("consent", "update", {
      analytics_storage:  g(data.analytics),
      ad_storage:         g(data.marketing),
      ad_user_data:       g(data.marketing),
      ad_personalization: g(data.marketing),
    })
  }
  window.dispatchEvent(new CustomEvent("ar:cookie-consent", {
    detail: { necessary: true, analytics: data.analytics, marketing: data.marketing },
  }))
}

/* ─── ICONS ────────────────────────────────────────────────────── */
const CookieIcon = () => (
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.8" strokeLinecap="round" strokeLinejoin="round">
    <path d="M12 2a10 10 0 1 0 10 10 4 4 0 0 1-5-5 4 4 0 0 1-5-5"/>
    <path d="M8.5 8.5v.01"/><path d="M16 15.5v.01"/><path d="M12 12v.01"/><path d="M11 17v.01"/><path d="M7 14v.01"/>
  </svg>
)
const CloseIcon = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.4" strokeLinecap="round" strokeLinejoin="round">
    <path d="M18 6 6 18M6 6l12 12"/>
  </svg>
)

/* ─── STYLES (inyectados una sola vez) ────────────────────────── */
const injectStyles = () => {
  if (document.getElementById("ar-ck-styles")) return
  const style = document.createElement("style")
  style.id = "ar-ck-styles"
  style.textContent = `
    @keyframes arCkUp   { from { opacity:0; transform:translateY(18px); } to { opacity:1; transform:translateY(0); } }
    @keyframes arCkFade { from { opacity:0; } to { opacity:1; } }
    @keyframes arCkPop  { from { opacity:0; transform:translateY(12px) scale(.98); } to { opacity:1; transform:none; } }

    .ar-ck, .ar-ck * { box-sizing:border-box; font-family:'GT America','DM Sans',sans-serif; }

    /* Banner (primera visita) */
    .ar-ck-banner {
      position:fixed; z-index:1000; left:20px; bottom:20px; width:min(420px, calc(100vw - 32px));
      background:#0f2322; color:#d6e2e1; border-radius:16px; padding:22px;
      box-shadow:0 18px 50px rgba(5,15,15,0.35); border:1px solid rgba(106,154,154,0.25);
      animation:arCkUp .3s ease both;
    }
    .ar-ck-banner__head { display:flex; align-items:center; gap:10px; margin-bottom:10px; color:#fff; }
    .ar-ck-banner__icon { width:38px; height:38px; border-radius:10px; background:#1a3332; color:#6a9a9a; display:flex; align-items:center; justify-content:center; flex-shrink:0; }
    .ar-ck-banner__title { font-size:16px; font-weight:700; margin:0; }
    .ar-ck-banner__text { font-size:13px; line-height:1.65; margin:0 0 18px; color:#a9bcbb; }
    .ar-ck a.ar-ck-link { color:#fff; text-decoration:underline; text-underline-offset:2px; }
    .ar-ck a.ar-ck-link:hover { color:#6a9a9a; }
    .ar-ck-banner__actions { display:flex; flex-wrap:wrap; gap:8px; }
    .ar-ck-banner__actions .ar-ck-btn { flex:1 1 auto; }

    /* Botones */
    .ar-ck-btn {
      appearance:none; border:1px solid transparent; cursor:pointer; border-radius:8px;
      padding:10px 16px; font-size:13px; font-weight:700; line-height:1.2; white-space:nowrap;
      transition:background .18s, color .18s, border-color .18s, transform .15s;
    }
    .ar-ck-btn:hover { transform:translateY(-1px); }
    .ar-ck-btn:focus-visible { outline:2px solid #6a9a9a; outline-offset:2px; }
    .ar-ck-btn--primary { background:#e8253a; color:#fff; }
    .ar-ck-btn--primary:hover { background:#c91d30; }
    .ar-ck-btn--ghost { background:transparent; color:#fff; border-color:rgba(255,255,255,0.28); }
    .ar-ck-btn--ghost:hover { border-color:#fff; }
    .ar-ck-btn--outline { background:#fff; color:#0f2322; border-color:#d5dfde; }
    .ar-ck-btn--outline:hover { border-color:#0f2322; }
    .ar-ck-btn--dark { background:#0f2322; color:#fff; }
    .ar-ck-btn--dark:hover { background:#1e3e3d; }

    /* Modal de preferencias */
    .ar-ck-overlay {
      position:fixed; inset:0; z-index:1001; background:rgba(8,20,19,0.6);
      display:flex; align-items:center; justify-content:center; padding:16px;
      animation:arCkFade .2s ease both;
    }
    .ar-ck-modal {
      background:#fff; color:#0f2322; border-radius:18px; width:min(560px, 100%);
      max-height:calc(100vh - 32px); display:flex; flex-direction:column; overflow:hidden;
      box-shadow:0 24px 70px rgba(5,15,15,0.35); animation:arCkPop .25s ease both;
    }
    .ar-ck-modal__head { display:flex; align-items:flex-start; justify-content:space-between; gap:16px; padding:24px 24px 0; }
    .ar-ck-modal__eyebrow { font-size:10.5px; font-weight:700; letter-spacing:1.6px; text-transform:uppercase; color:#6a9a9a; margin:0 0 6px; }
    .ar-ck-modal__title { font-size:22px; font-weight:800; margin:0; line-height:1.2; }
    .ar-ck-modal__close { width:34px; height:34px; flex-shrink:0; border:none; border-radius:9px; background:#f5f6f5; color:#0f2322; cursor:pointer; display:flex; align-items:center; justify-content:center; }
    .ar-ck-modal__close:hover { background:#dde8e8; }
    .ar-ck-modal__body { padding:14px 24px 8px; overflow-y:auto; }
    .ar-ck-modal__intro { font-size:13.5px; line-height:1.65; color:#4d5f5e; margin:0 0 16px; }
    .ar-ck-modal__intro a.ar-ck-link { color:#0f2322; }
    .ar-ck-modal__intro a.ar-ck-link:hover { color:#6a9a9a; }

    .ar-ck-cat { display:flex; gap:16px; align-items:flex-start; justify-content:space-between; padding:16px 0; border-top:1px solid #eef2f2; }
    .ar-ck-cat__title { font-size:14.5px; font-weight:700; margin:0 0 4px; display:flex; align-items:center; gap:8px; }
    .ar-ck-cat__badge { font-size:10px; font-weight:700; letter-spacing:.8px; text-transform:uppercase; color:#6a9a9a; background:#eef4f4; padding:3px 7px; border-radius:100px; }
    .ar-ck-cat__desc { font-size:12.5px; line-height:1.6; color:#5d6e6d; margin:0; }

    /* Switch */
    .ar-ck-switch { position:relative; width:46px; height:26px; flex-shrink:0; margin-top:2px; }
    .ar-ck-switch input { position:absolute; inset:0; width:100%; height:100%; margin:0; opacity:0; cursor:pointer; z-index:1; }
    .ar-ck-switch input:disabled { cursor:not-allowed; }
    .ar-ck-switch__track { position:absolute; inset:0; border-radius:100px; background:#cfd9d8; transition:background .2s; }
    .ar-ck-switch__track::after { content:""; position:absolute; top:3px; left:3px; width:20px; height:20px; border-radius:50%; background:#fff; box-shadow:0 1px 3px rgba(0,0,0,0.2); transition:transform .2s; }
    .ar-ck-switch input:checked + .ar-ck-switch__track { background:#6a9a9a; }
    .ar-ck-switch input:checked + .ar-ck-switch__track::after { transform:translateX(20px); }
    .ar-ck-switch input:disabled + .ar-ck-switch__track { opacity:.6; }
    .ar-ck-switch input:focus-visible + .ar-ck-switch__track { outline:2px solid #0f2322; outline-offset:2px; }

    .ar-ck-modal__foot { display:flex; flex-wrap:wrap; justify-content:flex-end; gap:8px; padding:16px 24px 22px; border-top:1px solid #eef2f2; }

    @media (max-width:520px) {
      .ar-ck-banner { left:16px; bottom:16px; padding:18px; }
      .ar-ck-modal__foot .ar-ck-btn { flex:1 1 100%; }
    }
    @media (prefers-reduced-motion:reduce) {
      .ar-ck-banner, .ar-ck-overlay, .ar-ck-modal { animation:none; }
      .ar-ck-btn:hover { transform:none; }
    }
  `
  document.head.appendChild(style)
}
injectStyles()

/* ─── COMPONENT ────────────────────────────────────────────────── */
function CookieConsent() {
  const [consent, setConsent]   = useState(() => readConsent())
  const [showModal, setShowModal] = useState(false)
  const [prefs, setPrefs] = useState(() => {
    const c = readConsent()
    return { analytics: c ? c.analytics : false, marketing: c ? c.marketing : false }
  })
  const modalRef  = useRef(null)
  const returnRef = useRef(null)

  // Re-aplica la decisión guardada en cada carga (Consent Mode / listeners)
  useEffect(() => { if (consent) applyConsent(consent) }, [])

  // API pública para el link "Cookie Settings" del footer
  useEffect(() => {
    const open = () => {
      const c = readConsent()
      setPrefs({ analytics: c ? c.analytics : false, marketing: c ? c.marketing : false })
      returnRef.current = document.activeElement
      setShowModal(true)
    }
    window.arOpenCookieSettings = open
    window.addEventListener("ar:open-cookie-settings", open)
    return () => {
      window.removeEventListener("ar:open-cookie-settings", open)
      if (window.arOpenCookieSettings === open) delete window.arOpenCookieSettings
    }
  }, [])

  // Modal: foco inicial, Escape para cerrar, foco atrapado, sin scroll de fondo
  useEffect(() => {
    if (!showModal) return
    const node = modalRef.current
    const prevOverflow = document.body.style.overflow
    document.body.style.overflow = "hidden"
    const focusables = () => node.querySelectorAll("button, input:not([disabled]), a[href]")
    focusables()[0]?.focus()

    const onKey = e => {
      if (e.key === "Escape") { closeModal(); return }
      if (e.key !== "Tab") return
      const els = focusables()
      const first = els[0], last = els[els.length - 1]
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus() }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus() }
    }
    document.addEventListener("keydown", onKey)
    return () => {
      document.removeEventListener("keydown", onKey)
      document.body.style.overflow = prevOverflow
    }
  }, [showModal])

  const decide = p => {
    setConsent(saveConsent(p))
    closeModal()
  }

  function closeModal() {
    setShowModal(false)
    const back = returnRef.current
    returnRef.current = null
    if (back && typeof back.focus === "function") back.focus()
  }

  const openFromBanner = () => {
    returnRef.current = null
    setShowModal(true)
  }

  const acceptAll = () => decide({ analytics: true, marketing: true })
  const rejectAll = () => decide({ analytics: false, marketing: false })

  return (
    <div className="ar-ck">
      {!consent && !showModal && (
        <div className="ar-ck-banner" role="region" aria-label="Cookie consent">
          <div className="ar-ck-banner__head">
            <span className="ar-ck-banner__icon"><CookieIcon /></span>
            <p className="ar-ck-banner__title">We value your privacy</p>
          </div>
          <p className="ar-ck-banner__text">
            We use cookies to keep this site secure, understand how it's used, and measure our ads.
            You can accept all, reject the optional ones, or choose what to allow.{" "}
            <a className="ar-ck-link" href={PRIVACY_URL}>Read our Privacy Policy</a>.
          </p>
          <div className="ar-ck-banner__actions">
            <button type="button" className="ar-ck-btn ar-ck-btn--ghost" onClick={openFromBanner}>Customize</button>
            <button type="button" className="ar-ck-btn ar-ck-btn--ghost" onClick={rejectAll}>Reject all</button>
            <button type="button" className="ar-ck-btn ar-ck-btn--primary" onClick={acceptAll}>Accept all</button>
          </div>
        </div>
      )}

      {showModal && (
        <div className="ar-ck-overlay" onMouseDown={e => { if (e.target === e.currentTarget) closeModal() }}>
          <div
            ref={modalRef}
            className="ar-ck-modal"
            role="dialog"
            aria-modal="true"
            aria-labelledby="ar-ck-title"
          >
            <div className="ar-ck-modal__head">
              <div>
                <p className="ar-ck-modal__eyebrow">Cookie Settings</p>
                <h2 id="ar-ck-title" className="ar-ck-modal__title">Manage your preferences</h2>
              </div>
              <button type="button" className="ar-ck-modal__close" onClick={closeModal} aria-label="Close cookie settings">
                <CloseIcon />
              </button>
            </div>

            <div className="ar-ck-modal__body">
              <p className="ar-ck-modal__intro">
                Choose which cookies AR Roofing & Construction can use. You can change this anytime from the
                "Cookie Settings" link in the footer. See our <a className="ar-ck-link" href={PRIVACY_URL}>Privacy Policy</a> for details.
              </p>

              {CATEGORIES.map(cat => {
                const id = `ar-ck-${cat.key}`
                const checked = cat.locked ? true : prefs[cat.key]
                return (
                  <div className="ar-ck-cat" key={cat.key}>
                    <div>
                      <p className="ar-ck-cat__title">
                        <label htmlFor={id}>{cat.title}</label>
                        {cat.locked && <span className="ar-ck-cat__badge">Always on</span>}
                      </p>
                      <p className="ar-ck-cat__desc">{cat.desc}</p>
                    </div>
                    <span className="ar-ck-switch">
                      <input
                        id={id}
                        type="checkbox"
                        role="switch"
                        checked={checked}
                        disabled={cat.locked}
                        onChange={e => setPrefs(p => ({ ...p, [cat.key]: e.target.checked }))}
                      />
                      <span className="ar-ck-switch__track" aria-hidden="true" />
                    </span>
                  </div>
                )
              })}
            </div>

            <div className="ar-ck-modal__foot">
              <button type="button" className="ar-ck-btn ar-ck-btn--outline" onClick={rejectAll}>Reject all</button>
              <button type="button" className="ar-ck-btn ar-ck-btn--outline" onClick={() => decide(prefs)}>Save preferences</button>
              <button type="button" className="ar-ck-btn ar-ck-btn--dark" onClick={acceptAll}>Accept all</button>
            </div>
          </div>
        </div>
      )}
    </div>
  )
}

export default CookieConsent
