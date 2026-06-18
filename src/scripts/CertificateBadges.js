import React, { useState, useEffect, useRef } from "react"

/* ─── DATA ─────────────────────────────────────────────────────
   Edita labels/imágenes aquí, o pásalos por la prop `certificates`.
   ──────────────────────────────────────────────────────────── */
const DEFAULT_CERTIFICATES = [
  {
    id: "residential",
    label: "Certified",
    caption: "Residential Certification",
    image: "/wp-content/uploads/2026/06/Certified-scaled.png",
  },
  {
    id: "commercial",
    label: "Commercial Certified",
    caption: "Commercial Certification",
    image: "/wp-content/uploads/2026/06/COMMERCIAL_CERTIFIED.png",
  },
]

/* ─── ICONS ────────────────────────────────────────────────────── */
const ShieldIcon = ({ size = 16 }) => (
  <svg width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><polyline points="9 12 11 14 15 10"/>
  </svg>
)
const ExpandIcon = () => (
  <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.4" strokeLinecap="round" strokeLinejoin="round">
    <path d="M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"/>
  </svg>
)
const CloseIcon = () => (
  <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <path d="M18 6 6 18M6 6l12 12"/>
  </svg>
)
const MinIcon = () => (
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.6" strokeLinecap="round" strokeLinejoin="round">
    <line x1="5" y1="12" x2="19" y2="12"/>
  </svg>
)

/* ─── STYLES (inyectados una sola vez) ────────────────────────── */
const injectStyles = () => {
  if (document.getElementById("ar-cert-styles")) return
  const style = document.createElement("style")
  style.id = "ar-cert-styles"
  style.textContent = `
    @keyframes arCertFade { from { opacity:0; } to { opacity:1; } }
    @keyframes arCertZoom { from { opacity:0; transform:scale(.94); } to { opacity:1; transform:scale(1); } }
    @keyframes arCertSlideR { from { opacity:0; transform:translateX(16px); } to { opacity:1; transform:translateX(0); } }

    .ar-cert-wrap, .ar-cert-wrap * { box-sizing:border-box; font-family:'GT America','DM Sans',sans-serif; }

    /* ── Floating shell ───────────────────────── */
    .ar-cert-float { position:fixed; z-index:900; }
    .ar-cert-float--rm { right:0; top:30%; transform:translateY(-50%); }
    .ar-cert-float--bl { left:22px; bottom:22px; }
    .ar-cert-float--br { right:22px; bottom:22px; }

    /* Pestaña / etiqueta (estado plegado en modo borde derecho) */
    .ar-cert-tab {
      display:flex; flex-direction:column; align-items:center; gap:11px;
      padding:18px 11px; border:none; cursor:pointer;
      background:#e8253a; color:#fff; border-radius:12px 0 0 12px;
      box-shadow:-6px 8px 28px rgba(15,35,34,0.22);
      transition:padding-right .18s, background .2s; animation:arCertSlideR .22s ease both;
    }
    .ar-cert-tab:hover { background:#8b0a1a; padding-right:16px; }
    .ar-cert-tab__text { writing-mode:vertical-rl; text-orientation:mixed; font-size:11px; font-weight:700; letter-spacing:1.8px; text-transform:uppercase; }

    /* Botón redondo (estado plegado en modo esquina) */
    .ar-cert-launch {
      width:54px; height:54px; border-radius:50%; border:none; cursor:pointer;
      background:#e8253a; color:#fff; display:flex; align-items:center; justify-content:center;
      box-shadow:0 10px 30px rgba(232,37,58,0.42); transition:transform .18s, background .2s; animation:arCertZoom .2s ease both;
    }
    .ar-cert-launch:hover { transform:translateY(-2px); background:#8b0a1a; }

    /* Panel desplegado */
    .ar-cert-panel {
      background:#fff; border:1px solid #eef2f2; border-radius:16px; padding:12px;
      box-shadow:0 14px 44px rgba(15,35,34,0.18);
      display:flex; flex-direction:column; gap:10px; width:max-content; max-width:280px;
      animation:arCertSlideR .22s ease both;
    }
    .ar-cert-panel--rm { border-radius:16px 0 0 16px; box-shadow:-10px 10px 44px rgba(15,35,34,0.2); }
    .ar-cert-panel__head { display:flex; align-items:center; justify-content:space-between; gap:18px; padding:2px 4px 0; }
    .ar-cert-panel__title { font-size:10.5px; font-weight:700; letter-spacing:1.6px; text-transform:uppercase; color:#6a9a9a; }
    .ar-cert-panel__min { width:24px; height:24px; border:none; border-radius:7px; background:#f5f6f5; color:#0f2322; cursor:pointer; display:flex; align-items:center; justify-content:center; transition:background .15s; }
    .ar-cert-panel__min:hover { background:#dde8e8; }

    /* ── Badges ───────────────────────────────── */
    .ar-cert-list { display:flex; flex-direction:column; gap:8px; }
    .ar-cert-row  { display:flex; flex-wrap:wrap; gap:14px; }   /* modo inline */
    .ar-cert-eyebrow { font-size:11px; font-weight:600; letter-spacing:2.5px; text-transform:uppercase; color:#6a9a9a; margin:0 0 14px; display:block; }

    .ar-cert-badge {
      position:relative; display:inline-flex; align-items:center; gap:10px; width:100%;
      padding:10px 15px; border-radius:10px; cursor:pointer; font-family:inherit; text-align:left;
      border:1.5px solid #dde8e8; background:#fff; color:#0f2322;
      transition:border-color .2s, background .2s, transform .18s, box-shadow .2s;
    }
    .ar-cert-badge:hover { border-color:#6a9a9a; background:#f7fbfb; }
    .ar-cert-badge:focus-visible { outline:2px solid #6a9a9a; outline-offset:2px; }
    .ar-cert-badge__icon { display:flex; color:#e8253a; flex-shrink:0; }
    .ar-cert-badge__label { font-size:13px; font-weight:700; letter-spacing:.3px; flex:1; white-space:nowrap; }
    .ar-cert-badge__expand { display:flex; color:#6a9a9a; opacity:.65; transition:opacity .2s; }
    .ar-cert-badge:hover .ar-cert-badge__expand { opacity:1; }

    .ar-cert-row .ar-cert-badge { width:auto; border-radius:100px; padding:11px 18px; box-shadow:0 1px 8px rgba(15,35,34,0.05); }
    .ar-cert-row .ar-cert-badge:hover { transform:translateY(-2px); box-shadow:0 8px 24px rgba(15,35,34,0.12); }

    /* ── Hover preview ────────────────────────── */
    .ar-cert-pop {
      position:absolute; z-index:40; background:#fff; border-radius:12px; padding:10px; width:240px;
      box-shadow:0 16px 48px rgba(15,35,34,0.25); pointer-events:none; animation:arCertFade .15s ease both;
    }
    .ar-cert-pop img { display:block; width:100%; height:auto; max-height:280px; object-fit:contain; border-radius:6px; }
    .ar-cert-pop__hint { display:block; text-align:center; font-size:10px; font-weight:600; letter-spacing:.5px; text-transform:uppercase; color:#889; margin-top:8px; }
    .ar-cert-pop::after { content:''; position:absolute; border:7px solid transparent; }

    .ar-cert-pop--left  { right:calc(100% + 14px); top:50%; transform:translateY(-50%); }
    .ar-cert-pop--left::after  { left:100%; top:50%; transform:translateY(-50%); border-left-color:#fff; }
    .ar-cert-pop--right { left:calc(100% + 14px); top:50%; transform:translateY(-50%); }
    .ar-cert-pop--right::after { right:100%; top:50%; transform:translateY(-50%); border-right-color:#fff; }
    .ar-cert-pop--up    { bottom:calc(100% + 12px); left:50%; transform:translateX(-50%); }
    .ar-cert-pop--up::after { top:100%; left:50%; transform:translateX(-50%); border-top-color:#fff; }

    /* ── Lightbox ─────────────────────────────── */
    .ar-cert-modal {
      position:fixed; inset:0; z-index:9999; background:rgba(10,20,20,0.85); backdrop-filter:blur(6px);
      display:flex; align-items:center; justify-content:center; padding:24px; animation:arCertFade .2s ease both;
    }
    .ar-cert-modal__inner {
      position:relative; background:#fff; border-radius:16px; overflow:hidden;
      max-width:760px; width:100%; max-height:90vh; display:flex; flex-direction:column;
      box-shadow:0 24px 80px rgba(0,0,0,0.45); animation:arCertZoom .22s ease both;
    }
    .ar-cert-modal__head { display:flex; align-items:center; justify-content:space-between; padding:16px 20px; border-bottom:1px solid #eee; flex-shrink:0; }
    .ar-cert-modal__title { display:flex; align-items:center; gap:9px; font-size:15px; font-weight:700; color:#0f2322; }
    .ar-cert-modal__title svg { color:#e8253a; }
    .ar-cert-modal__close { width:34px; height:34px; border:none; border-radius:9px; cursor:pointer; background:#f5f6f5; color:#0f2322; display:flex; align-items:center; justify-content:center; transition:background .15s; }
    .ar-cert-modal__close:hover { background:#dde8e8; }
    .ar-cert-modal__body { padding:22px; overflow:auto; background:#f5f6f5; display:flex; justify-content:center; }
    .ar-cert-modal__body img { max-width:100%; max-height:72vh; height:auto; object-fit:contain; border-radius:8px; box-shadow:0 4px 20px rgba(0,0,0,0.12); }

    @media (max-width:600px) {
      .ar-cert-pop { display:none; }                 /* en móvil: solo lightbox por click */
    }
  `
  document.head.appendChild(style)
}
injectStyles()

/* ─── COMPONENT ────────────────────────────────────────────────── */
function CertificateBadges({
  floating = true,                  // true = widget fijo; false = fila inline
  position = "right-middle",        // "right-middle" | "bottom-left" | "bottom-right"
  title = "Certifications",         // "" para ocultar
  certificates = DEFAULT_CERTIFICATES,
}) {
  const [hovered, setHovered] = useState(null)
  const [active, setActive]   = useState(null)   // certificado en el lightbox
  const [open, setOpen]       = useState(false)  // panel desplegado
  const closeBtnRef = useRef(null)

  // Lightbox: bloquear scroll + cerrar con ESC
  useEffect(() => {
    if (!active) return
    const prev = document.body.style.overflow
    document.body.style.overflow = "hidden"
    const onKey = (e) => { if (e.key === "Escape") setActive(null) }
    document.addEventListener("keydown", onKey)
    closeBtnRef.current?.focus()
    return () => {
      document.body.style.overflow = prev
      document.removeEventListener("keydown", onKey)
    }
  }, [active])

  const isRightMid = position === "right-middle"
  const isBottomR  = position === "bottom-right"
  const floatClass = isRightMid ? "ar-cert-float--rm" : isBottomR ? "ar-cert-float--br" : "ar-cert-float--bl"
  const popDir     = !floating ? "up" : (isRightMid || isBottomR ? "left" : "right")

  const renderBadge = (cert) => (
    <button
      key={cert.id}
      type="button"
      className="ar-cert-badge"
      onMouseEnter={() => setHovered(cert.id)}
      onMouseLeave={() => setHovered(null)}
      onFocus={() => setHovered(cert.id)}
      onBlur={() => setHovered(null)}
      onClick={() => setActive(cert)}
      aria-label={`Ver ${cert.label}`}
    >
      <span className="ar-cert-badge__icon"><ShieldIcon /></span>
      <span className="ar-cert-badge__label">{cert.label}</span>
      <span className="ar-cert-badge__expand"><ExpandIcon /></span>

      {hovered === cert.id && (
        <span className={`ar-cert-pop ar-cert-pop--${popDir}`}>
          <img src={cert.image} alt={cert.caption || cert.label} />
          <span className="ar-cert-pop__hint">Click para ampliar</span>
        </span>
      )}
    </button>
  )

  const lightbox = active && (
    <div
      className="ar-cert-modal"
      onClick={(e) => { if (e.target === e.currentTarget) setActive(null) }}
      role="dialog" aria-modal="true" aria-label={active.caption || active.label}
    >
      <div className="ar-cert-modal__inner">
        <div className="ar-cert-modal__head">
          <span className="ar-cert-modal__title"><ShieldIcon />{active.caption || active.label}</span>
          <button ref={closeBtnRef} type="button" className="ar-cert-modal__close" onClick={() => setActive(null)} aria-label="Cerrar">
            <CloseIcon />
          </button>
        </div>
        <div className="ar-cert-modal__body">
          <img src={active.image} alt={active.caption || active.label} />
        </div>
      </div>
    </div>
  )

  /* ── Modo inline ── */
  if (!floating) {
    return (
      <div className="ar-cert-wrap">
        {title ? <span className="ar-cert-eyebrow">{title}</span> : null}
        <div className="ar-cert-row">{certificates.map(renderBadge)}</div>
        {lightbox}
      </div>
    )
  }

  /* ── Plegado: etiqueta (borde derecho) o botón redondo (esquina) ── */
  const collapsed = isRightMid ? (
    <button type="button" className="ar-cert-tab" onClick={() => setOpen(true)} aria-label="Ver certificaciones">
      <ShieldIcon size={20} />
      <span className="ar-cert-tab__text">{title || "Certifications"}</span>
    </button>
  ) : (
    <button type="button" className="ar-cert-launch" onClick={() => setOpen(true)} aria-label="Ver certificaciones">
      <ShieldIcon size={22} />
    </button>
  )

  /* ── Desplegado ── */
  return (
    <div className="ar-cert-wrap">
      <div className={`ar-cert-float ${floatClass}`}>
        {open ? (
          <div className={`ar-cert-panel${isRightMid ? " ar-cert-panel--rm" : ""}`}>
            <div className="ar-cert-panel__head">
              {title ? <span className="ar-cert-panel__title">{title}</span> : <span />}
              <button type="button" className="ar-cert-panel__min" onClick={() => setOpen(false)} aria-label="Minimizar">
                <MinIcon />
              </button>
            </div>
            <div className="ar-cert-list">{certificates.map(renderBadge)}</div>
          </div>
        ) : collapsed}
      </div>
      {lightbox}
    </div>
  )
}

export default CertificateBadges