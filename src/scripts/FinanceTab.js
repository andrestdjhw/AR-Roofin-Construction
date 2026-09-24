import React, { useState } from "react"

/* ─── DATA ─────────────────────────────────────────────────────
   Edita link/imagen aquí, o pásalos por props.
   ──────────────────────────────────────────────────────────── */
const DEFAULT_LINK  = "https://www.hfsfinancial.net/promo/6ab436cc7a506a7cf9542b68/"
const DEFAULT_IMAGE = "/wp-content/uploads/2026/06/Roof_Installation_ARRC-768x512.jpg"

/* ─── ICONS ────────────────────────────────────────────────────── */
const DollarIcon = ({ size = 16 }) => (
  <svg width={size} height={size} viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.2" strokeLinecap="round" strokeLinejoin="round">
    <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
  </svg>
)
const ArrowIcon = () => (
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.6" strokeLinecap="round" strokeLinejoin="round">
    <path d="M5 12h14M13 6l6 6-6 6"/>
  </svg>
)
const MinIcon = () => (
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.6" strokeLinecap="round" strokeLinejoin="round">
    <line x1="5" y1="12" x2="19" y2="12"/>
  </svg>
)

/* ─── STYLES (inyectados una sola vez) ────────────────────────── */
const injectStyles = () => {
  if (document.getElementById("ar-fin-styles")) return
  const style = document.createElement("style")
  style.id = "ar-fin-styles"
  style.textContent = `
    @keyframes arFinSlideR { from { opacity:0; transform:translateX(16px); } to { opacity:1; transform:translateX(0); } }

    .ar-fin-wrap, .ar-fin-wrap * { box-sizing:border-box; font-family:'GT America','DM Sans',sans-serif; }

    /* Pegada debajo de la pestaña de Certifications (centrada en top:30%, ~196px de alto).
       Se ancla por el borde superior para que el panel abierto crezca hacia abajo. */
    .ar-fin-float { position:fixed; z-index:900; right:0; top:calc(30% + 106px); }

    /* Pestaña (estado plegado) — mismo estilo que Certifications */
    .ar-fin-tab {
      display:flex; flex-direction:column; align-items:center; gap:11px;
      padding:18px 11px; border:none; cursor:pointer;
      background:#6a9a9a; color:#fff; border-radius:12px 0 0 12px;
      box-shadow:-6px 8px 28px rgba(15,35,34,0.22);
      transition:padding-right .18s, background .2s; animation:arFinSlideR .22s ease both;
    }
    .ar-fin-tab:hover { background:#0f2322; padding-right:16px; }
    .ar-fin-tab__text { writing-mode:vertical-rl; text-orientation:mixed; font-size:11px; font-weight:700; letter-spacing:1.8px; text-transform:uppercase; }

    /* Panel desplegado */
    .ar-fin-panel {
      background:#fff; border:1px solid #eef2f2; border-radius:16px 0 0 16px; padding:12px;
      box-shadow:-10px 10px 44px rgba(15,35,34,0.2);
      display:flex; flex-direction:column; gap:10px; width:260px;
      animation:arFinSlideR .22s ease both;
    }
    .ar-fin-panel__head { display:flex; align-items:center; justify-content:space-between; gap:18px; padding:2px 4px 0; }
    .ar-fin-panel__title { font-size:10.5px; font-weight:700; letter-spacing:1.6px; text-transform:uppercase; color:#6a9a9a; }
    .ar-fin-panel__min { width:24px; height:24px; border:none; border-radius:7px; background:#f5f6f5; color:#0f2322; cursor:pointer; display:flex; align-items:center; justify-content:center; transition:background .15s; }
    .ar-fin-panel__min:hover { background:#dde8e8; }

    /* Tarjeta con foto (link) */
    .ar-fin-card {
      position:relative; display:block; border-radius:12px; overflow:hidden; aspect-ratio:4/3;
      text-decoration:none; color:#fff; background:#0f2322;
    }
    .ar-fin-card img { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; transition:transform .35s ease; }
    .ar-fin-card:hover img { transform:scale(1.05); }
    .ar-fin-card:focus-visible { outline:2px solid #6a9a9a; outline-offset:2px; }
    .ar-fin-card__overlay {
      position:absolute; inset:0; display:flex; flex-direction:column; justify-content:flex-end; gap:10px; padding:16px;
      background:linear-gradient(to top, rgba(10,20,20,0.88) 0%, rgba(10,20,20,0.45) 55%, rgba(10,20,20,0.1) 100%);
    }
    .ar-fin-card__title { font-size:19px; font-weight:800; line-height:1.15; margin:0; text-shadow:0 2px 10px rgba(0,0,0,0.35); }
    .ar-fin-card__cta {
      align-self:flex-start; display:inline-flex; align-items:center; gap:7px;
      padding:8px 14px; border-radius:100px; background:#6a9a9a; color:#fff;
      font-size:12px; font-weight:700; letter-spacing:.8px; text-transform:uppercase; transition:background .2s;
    }
    .ar-fin-card:hover .ar-fin-card__cta { background:#0f2322; }
  `
  document.head.appendChild(style)
}
injectStyles()

/* ─── COMPONENT ────────────────────────────────────────────────── */
function FinanceTab({
  title = "Finance",
  link  = DEFAULT_LINK,
  image = DEFAULT_IMAGE,
}) {
  const [open, setOpen] = useState(false)

  return (
    <div className="ar-fin-wrap">
      <div className="ar-fin-float">
        {open ? (
          <div className="ar-fin-panel">
            <div className="ar-fin-panel__head">
              <span className="ar-fin-panel__title">{title}</span>
              <button type="button" className="ar-fin-panel__min" onClick={() => setOpen(false)} aria-label="Minimizar">
                <MinIcon />
              </button>
            </div>
            <a className="ar-fin-card" href={link} target="_blank" rel="noopener noreferrer">
              <img src={image} alt="Finance your roofing services" />
              <span className="ar-fin-card__overlay">
                <span className="ar-fin-card__title">Finance your Roofing Services</span>
                <span className="ar-fin-card__cta">Click Here <ArrowIcon /></span>
              </span>
            </a>
          </div>
        ) : (
          <button type="button" className="ar-fin-tab" onClick={() => setOpen(true)} aria-label="Ver opciones de financiamiento">
            <DollarIcon size={20} />
            <span className="ar-fin-tab__text">{title}</span>
          </button>
        )}
      </div>
    </div>
  )
}

export default FinanceTab
