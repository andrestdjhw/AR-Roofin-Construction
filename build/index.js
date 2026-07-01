/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/scripts/CertificateBadges.js"
/*!******************************************!*\
  !*** ./src/scripts/CertificateBadges.js ***!
  \******************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


/* ─── DATA ─────────────────────────────────────────────────────
   Edita labels/imágenes aquí, o pásalos por la prop `certificates`.
   ──────────────────────────────────────────────────────────── */

const DEFAULT_CERTIFICATES = [{
  id: "residential",
  label: "Residential Certified",
  caption: "Residential Certification",
  image: "/wp-content/uploads/2026/06/Certified-scaled.png"
}, {
  id: "commercial",
  label: "Commercial Certified",
  caption: "Commercial Certification",
  image: "/wp-content/uploads/2026/06/COMMERCIAL_CERTIFIED.png"
}];

/* ─── ICONS ────────────────────────────────────────────────────── */
const ShieldIcon = ({
  size = 16
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: size,
  height: size,
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("polyline", {
    points: "9 12 11 14 15 10"
  })]
});
const ExpandIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "13",
  height: "13",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.4",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M15 3h6v6M9 21H3v-6M21 3l-7 7M3 21l7-7"
  })
});
const CloseIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "18",
  height: "18",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 6 6 18M6 6l12 12"
  })
});
const MinIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "14",
  height: "14",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.6",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "5",
    y1: "12",
    x2: "19",
    y2: "12"
  })
});

/* ─── STYLES (inyectados una sola vez) ────────────────────────── */
const injectStyles = () => {
  if (document.getElementById("ar-cert-styles")) return;
  const style = document.createElement("style");
  style.id = "ar-cert-styles";
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
  `;
  document.head.appendChild(style);
};
injectStyles();

/* ─── COMPONENT ────────────────────────────────────────────────── */
function CertificateBadges({
  floating = true,
  // true = widget fijo; false = fila inline
  position = "right-middle",
  // "right-middle" | "bottom-left" | "bottom-right"
  title = "Certifications",
  // "" para ocultar
  certificates = DEFAULT_CERTIFICATES
}) {
  const [hovered, setHovered] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null);
  const [active, setActive] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(null); // certificado en el lightbox
  const [open, setOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false); // panel desplegado
  const closeBtnRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);

  // Lightbox: bloquear scroll + cerrar con ESC
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (!active) return;
    const prev = document.body.style.overflow;
    document.body.style.overflow = "hidden";
    const onKey = e => {
      if (e.key === "Escape") setActive(null);
    };
    document.addEventListener("keydown", onKey);
    closeBtnRef.current?.focus();
    return () => {
      document.body.style.overflow = prev;
      document.removeEventListener("keydown", onKey);
    };
  }, [active]);
  const isRightMid = position === "right-middle";
  const isBottomR = position === "bottom-right";
  const floatClass = isRightMid ? "ar-cert-float--rm" : isBottomR ? "ar-cert-float--br" : "ar-cert-float--bl";
  const popDir = !floating ? "up" : isRightMid || isBottomR ? "left" : "right";
  const renderBadge = cert => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
    type: "button",
    className: "ar-cert-badge",
    onMouseEnter: () => setHovered(cert.id),
    onMouseLeave: () => setHovered(null),
    onFocus: () => setHovered(cert.id),
    onBlur: () => setHovered(null),
    onClick: () => setActive(cert),
    "aria-label": `Ver ${cert.label}`,
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      className: "ar-cert-badge__icon",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ShieldIcon, {})
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      className: "ar-cert-badge__label",
      children: cert.label
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      className: "ar-cert-badge__expand",
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ExpandIcon, {})
    }), hovered === cert.id && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
      className: `ar-cert-pop ar-cert-pop--${popDir}`,
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
        src: cert.image,
        alt: cert.caption || cert.label
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "ar-cert-pop__hint",
        children: "Click para ampliar"
      })]
    })]
  }, cert.id);
  const lightbox = active && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
    className: "ar-cert-modal",
    onClick: e => {
      if (e.target === e.currentTarget) setActive(null);
    },
    role: "dialog",
    "aria-modal": "true",
    "aria-label": active.caption || active.label,
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ar-cert-modal__inner",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ar-cert-modal__head",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("span", {
          className: "ar-cert-modal__title",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ShieldIcon, {}), active.caption || active.label]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
          ref: closeBtnRef,
          type: "button",
          className: "ar-cert-modal__close",
          onClick: () => setActive(null),
          "aria-label": "Cerrar",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CloseIcon, {})
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "ar-cert-modal__body",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
          src: active.image,
          alt: active.caption || active.label
        })
      })]
    })
  });

  /* ── Modo inline ── */
  if (!floating) {
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ar-cert-wrap",
      children: [title ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "ar-cert-eyebrow",
        children: title
      }) : null, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "ar-cert-row",
        children: certificates.map(renderBadge)
      }), lightbox]
    });
  }

  /* ── Plegado: etiqueta (borde derecho) o botón redondo (esquina) ── */
  const collapsed = isRightMid ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
    type: "button",
    className: "ar-cert-tab",
    onClick: () => setOpen(true),
    "aria-label": "Ver certificaciones",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ShieldIcon, {
      size: 20
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      className: "ar-cert-tab__text",
      children: title || "Certifications"
    })]
  }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
    type: "button",
    className: "ar-cert-launch",
    onClick: () => setOpen(true),
    "aria-label": "Ver certificaciones",
    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(ShieldIcon, {
      size: 22
    })
  });

  /* ── Desplegado ── */
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "ar-cert-wrap",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: `ar-cert-float ${floatClass}`,
      children: open ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: `ar-cert-panel${isRightMid ? " ar-cert-panel--rm" : ""}`,
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "ar-cert-panel__head",
          children: [title ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
            className: "ar-cert-panel__title",
            children: title
          }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {}), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
            type: "button",
            className: "ar-cert-panel__min",
            onClick: () => setOpen(false),
            "aria-label": "Minimizar",
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(MinIcon, {})
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "ar-cert-list",
          children: certificates.map(renderBadge)
        })]
      }) : collapsed
    }), lightbox]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (CertificateBadges);

/***/ },

/***/ "./src/scripts/ContactForm.js"
/*!************************************!*\
  !*** ./src/scripts/ContactForm.js ***!
  \************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


/* ─── CONFIG ──────────────────────────────────────────────────── */

const EMAILJS_PUBLIC_KEY = "QEc-kIrnJ6-IWsn3c";
const EMAILJS_SERVICE_ID = "service_99yzkzs";
const EMAILJS_TEMPLATE_ID = "template_uoyikp2";
const RECAPTCHA_SITE_KEY = "6LctUw0tAAAAANOWE5Ouqf46G8z7C3RQ4QBykSIT";

/* ─── DATA ────────────────────────────────────────────────────── */
const CITIES_OR = ["Portland", "The Dalles", "Hood River", "Gresham", "Troutdale", "Cascade Locks", "Mosier", "Wasco", "Dufur"];
const CITIES_WA = ["Stevenson", "White Salmon", "North Bonneville", "Bingen", "Goldendale", "Dallesport", "Lyle", "Carson", "Wishram"];
const ROOF_TYPES = [{
  value: "shingles",
  label: "Asphalt Shingles"
}, {
  value: "metal",
  label: "Metal Roofing"
}, {
  value: "flat",
  label: "Flat Roof (TPO / PVC)"
}, {
  value: "unsure",
  label: "Not Sure"
}];
const SERVICES = [{
  value: "inspection",
  label: "Free Inspection"
}, {
  value: "installation",
  label: "Roof Installation"
}, {
  value: "repair",
  label: "Roof Repair"
}, {
  value: "emergency",
  label: "Emergency Roofing"
}, {
  value: "maintenance",
  label: "Roof Maintenance"
}, {
  value: "commercial",
  label: "Commercial Roofing"
}];

/* ─── ICONS ───────────────────────────────────────────────────── */
const PhoneIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"
  })
});
const SendIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "22",
    y1: "2",
    x2: "11",
    y2: "13"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("polygon", {
    points: "22 2 15 22 11 13 2 9 22 2"
  })]
});
const CheckIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "28",
  height: "28",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("polyline", {
    points: "20 6 9 17 4 12"
  })
});
const AlertIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("polygon", {
    points: "13 2 3 14 12 14 11 22 21 10 12 10 13 2"
  })
});
const SpinnerIcon = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "18",
  height: "18",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  style: {
    animation: "arSpin 0.8s linear infinite"
  },
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M21 12a9 9 0 1 1-6.219-8.56"
  })
});

/* ─── STYLES ──────────────────────────────────────────────────── */
const injectStyles = () => {
  if (document.getElementById("ar-contact-form-styles")) return;
  const style = document.createElement("style");
  style.id = "ar-contact-form-styles";
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
  `;
  document.head.appendChild(style);
};

// Run once at module load — NOT inside the component
injectStyles();

/* ─── HELPERS ─────────────────────────────────────────────────── */
const loadScript = (src, id) => new Promise((resolve, reject) => {
  if (document.getElementById(id)) {
    resolve();
    return;
  }
  const s = document.createElement("script");
  s.src = src;
  s.id = id;
  s.async = true;
  s.onload = resolve;
  s.onerror = reject;
  document.head.appendChild(s);
});
const getRecaptchaToken = action => new Promise((resolve, reject) => {
  if (!window.grecaptcha) {
    reject(new Error("reCAPTCHA not loaded"));
    return;
  }
  window.grecaptcha.ready(() => {
    window.grecaptcha.execute(RECAPTCHA_SITE_KEY, {
      action
    }).then(resolve).catch(reject);
  });
});

/* ─── FIELD COMPONENT (outside ContactForm to prevent re-mount on state change) ── */
function Field({
  id,
  label,
  required,
  children,
  error,
  isLight
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "ar-cf-field",
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("label", {
      className: isLight ? "ar-cf-label light" : "ar-cf-label",
      htmlFor: id,
      children: [label, required && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "req",
        children: "*"
      })]
    }), children, error && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
      className: "ar-cf-error-msg",
      children: error
    })]
  });
}

/* ─── MAIN COMPONENT ──────────────────────────────────────────── */
function ContactForm({
  theme = "dark",
  // "dark" | "light"
  title = "Get a Free Inspection",
  showTitle = true
}) {
  const isLight = theme === "light";
  const cls = base => isLight ? `${base} light` : base;
  const [form, setForm] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)({
    name: "",
    phone: "",
    email: "",
    city: "",
    service: "",
    roofType: "",
    message: ""
  });
  const [isEmergency, setIsEmergency] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [errors, setErrors] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)({});
  const [status, setStatus] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("idle"); // idle | sending | success | error
  const [errorMsg, setErrorMsg] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)("");
  const initialized = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(false);
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    if (initialized.current) return;
    initialized.current = true;

    // Load EmailJS
    loadScript("https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js", "emailjs-sdk").then(() => window.emailjs?.init(EMAILJS_PUBLIC_KEY)).catch(() => console.warn("EmailJS failed to load"));

    // Load reCAPTCHA v3
    loadScript(`https://www.google.com/recaptcha/api.js?render=${RECAPTCHA_SITE_KEY}`, "recaptcha-v3").catch(() => console.warn("reCAPTCHA failed to load"));
  }, []);
  const set = field => e => {
    setForm(prev => ({
      ...prev,
      [field]: e.target.value
    }));
    if (errors[field]) setErrors(prev => ({
      ...prev,
      [field]: ""
    }));
  };
  const validate = () => {
    const e = {};
    if (!form.name.trim()) e.name = "Name is required";
    if (!form.phone.trim()) e.phone = "Phone is required";
    if (!form.city) e.city = "Please select a city";
    setErrors(e);
    return Object.keys(e).length === 0;
  };
  const handleSubmit = async () => {
    if (!validate()) return;
    setStatus("sending");
    setErrorMsg("");
    try {
      // reCAPTCHA v3 token
      const token = await getRecaptchaToken("contact_form").catch(() => "unavailable");
      const templateParams = {
        from_name: form.name,
        phone: form.phone,
        email: form.email || "Not provided",
        city: form.city,
        service: form.service || "Not specified",
        roof_type: form.roofType || "Not specified",
        is_emergency: isEmergency ? "YES — EMERGENCY" : "No",
        // Banner row: red bg + visible text when emergency, slate bg + empty text when not
        emergency_banner_bg: isEmergency ? "#e8253a" : "#0f2322",
        emergency_banner_padding: isEmergency ? "14px 36px" : "0 36px",
        emergency_banner_text: isEmergency ? "⚡ EMERGENCY REQUEST — Respond immediately" : "",
        // Badge colors
        emergency_badge_bg: isEmergency ? "#fde8ea" : "#f0f7f6",
        emergency_badge_color: isEmergency ? "#e8253a" : "#6a9a9a",
        message: form.message || "No message provided",
        recaptcha: token
      };
      await window.emailjs.send(EMAILJS_SERVICE_ID, EMAILJS_TEMPLATE_ID, templateParams);
      setStatus("success");
    } catch (err) {
      console.error("Form submission error:", err);
      setStatus("error");
      setErrorMsg("Something went wrong. Please call us directly at 541-675-0577.");
    }
  };

  /* ── SUCCESS STATE ─── */
  if (status === "success") {
    return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      className: `ar-cf-wrap${!isLight ? " ar-cf-wrap--dark" : ""}`,
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ar-cf-success",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "ar-cf-success__icon",
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(CheckIcon, {})
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
          className: isLight ? "light" : "",
          children: isEmergency ? "We're on it." : "Message sent!"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
          className: isLight ? "light" : "",
          children: isEmergency ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
            children: ["For immediate help, call ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "tel:5416750577",
              className: isLight ? "light" : "",
              children: "541-675-0577"
            }), " now. We respond to emergencies 24/7."]
          }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
            children: ["We'll get back to you within 24 hours. For immediate help call ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "tel:5416750577",
              className: isLight ? "light" : "",
              children: "541-675-0577"
            }), "."]
          })
        })]
      })
    });
  }

  /* ── FORM ─── */
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: `ar-cf-wrap${!isLight ? " ar-cf-wrap--dark" : ""}`,
    children: [showTitle && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h3", {
      style: {
        fontFamily: "inherit",
        fontSize: "17px",
        fontWeight: 700,
        margin: "0 0 18px",
        color: isLight ? "#0f2322" : "#fff"
      },
      children: title
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: `ar-cf-emergency-bar${isEmergency ? " active" : ""}`,
      onClick: () => setIsEmergency(v => !v),
      role: "checkbox",
      "aria-checked": isEmergency,
      tabIndex: 0,
      onKeyDown: e => e.key === " " && setIsEmergency(v => !v),
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
        className: "ar-cf-emergency-bar__left",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "ar-cf-emergency-bar__dot"
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "ar-cf-emergency-bar__label",
          children: isEmergency ? "⚡ Emergency" : "This is an emergency"
        }), !isEmergency && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          className: "ar-cf-emergency-bar__sub",
          children: "\u2014 tap to flag"
        })]
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: `ar-cf-toggle${isEmergency ? " on" : ""}`,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          className: "ar-cf-toggle__knob"
        })
      })]
    }), isEmergency && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ar-cf-phone-banner",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        children: "For immediate help, call us now:"
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: "tel:5416750577",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(PhoneIcon, {}), "541-675-0577"]
      })]
    }), status === "error" && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ar-cf-error-banner",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(AlertIcon, {}), errorMsg]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ar-cf-row",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        id: "cf-name",
        label: "Full Name",
        required: true,
        error: errors.name,
        isLight: isLight,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          id: "cf-name",
          type: "text",
          className: cls("ar-cf-input") + (errors.name ? " error" : ""),
          placeholder: "Your name",
          value: form.name,
          onChange: set("name")
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        id: "cf-phone",
        label: "Phone",
        required: true,
        error: errors.phone,
        isLight: isLight,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          id: "cf-phone",
          type: "tel",
          className: cls("ar-cf-input") + (errors.phone ? " error" : ""),
          placeholder: "(541) 000-0000",
          value: form.phone,
          onChange: set("phone")
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ar-cf-row",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        id: "cf-email",
        label: "Email",
        isLight: isLight,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("input", {
          id: "cf-email",
          type: "email",
          className: cls("ar-cf-input"),
          placeholder: "you@email.com",
          value: form.email,
          onChange: set("email")
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        id: "cf-city",
        label: "City",
        required: true,
        error: errors.city,
        isLight: isLight,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("select", {
          id: "cf-city",
          className: cls("ar-cf-select") + (errors.city ? " error" : ""),
          value: form.city,
          onChange: set("city"),
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "",
            children: "Select city..."
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("optgroup", {
            label: "Oregon",
            children: CITIES_OR.map(c => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
              value: c,
              children: c
            }, c))
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("optgroup", {
            label: "Washington",
            children: CITIES_WA.map(c => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
              value: c,
              children: c
            }, c))
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "other",
            children: "Other / Not sure"
          })]
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      className: "ar-cf-row",
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        id: "cf-service",
        label: "Service Needed",
        isLight: isLight,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("select", {
          id: "cf-service",
          className: cls("ar-cf-select"),
          value: form.service,
          onChange: set("service"),
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "",
            children: "Select service..."
          }), SERVICES.map(s => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: s.value,
            children: s.label
          }, s.value))]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
        id: "cf-roof-type",
        label: "Roof Type",
        isLight: isLight,
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("select", {
          id: "cf-roof-type",
          className: cls("ar-cf-select"),
          value: form.roofType,
          onChange: set("roofType"),
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: "",
            children: "Select roof type..."
          }), ROOF_TYPES.map(r => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("option", {
            value: r.value,
            children: r.label
          }, r.value))]
        })
      })]
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(Field, {
      id: "cf-message",
      label: "Message",
      isLight: isLight,
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("textarea", {
        id: "cf-message",
        className: cls("ar-cf-textarea"),
        placeholder: "Tell us about your roof \u2014 any issues, age, material, or details that might help...",
        value: form.message,
        onChange: set("message")
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
      className: "ar-cf-submit",
      onClick: handleSubmit,
      disabled: status === "sending",
      children: status === "sending" ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SpinnerIcon, {}), " Sending..."]
      }) : isEmergency ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(AlertIcon, {}), " Send Emergency Request"]
      }) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(SendIcon, {}), " Send My Request"]
      })
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
      className: cls("ar-cf-note"),
      children: "Protected by Google reCAPTCHA v3. No spam. We respond within 24 hours \u2014 emergencies same day."
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ContactForm);

/***/ },

/***/ "./src/scripts/ExampleReactComponent.js"
/*!**********************************************!*\
  !*** ./src/scripts/ExampleReactComponent.js ***!
  \**********************************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


function ExampleReactComponent() {
  const [clickCount, setClickCount] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0);
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    className: "bg-gradient-to-r from-blue-500 to-indigo-600 text-white p-4 rounded-md",
    onClick: () => setClickCount(prev => prev + 1),
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h1", {
      className: "text-xl",
      children: "Hello from React!"
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
      className: "text-sm",
      children: ["You have clicked on this component", " ", /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
        className: "text-yellow-200 font-bold",
        children: clickCount
      }), " times."]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (ExampleReactComponent);

/***/ },

/***/ "./src/scripts/Footer.js"
/*!*******************************!*\
  !*** ./src/scripts/Footer.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


/* ── Icons ─────────────────────────────────────────────────────── */

const IconMail = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    x: "2",
    y: "4",
    width: "20",
    height: "16",
    rx: "2"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
  })]
});
const IconPhone = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"
  })
});
const IconPin = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "10",
    r: "3"
  })]
});
const IconClock = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "15",
  height: "15",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "12",
    r: "10"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("polyline", {
    points: "12 6 12 12 16 14"
  })]
});
const IconChevronRight = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "12",
  height: "12",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m9 18 6-6-6-6"
  })
});
const IconFacebook = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "17",
  height: "17",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
  })
});
const IconInstagram = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "17",
  height: "17",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    x: "2",
    y: "2",
    width: "20",
    height: "20",
    rx: "5",
    ry: "5"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "12",
    r: "3"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "17.5",
    cy: "6.5",
    r: "1",
    fill: "currentColor",
    stroke: "none"
  })]
});
const IconTikTok = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "17",
  height: "17",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.22 8.22 0 0 0 4.83 1.56V6.79a4.85 4.85 0 0 1-1.06-.1z"
  })
});
const IconGoogle = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "17",
  height: "17",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z",
    fill: "#4285F4"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z",
    fill: "#34A853"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z",
    fill: "#FBBC05"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.47 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z",
    fill: "#EA4335"
  })]
});
const IconBBB = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "17",
  height: "17",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    x: "2",
    y: "2",
    width: "20",
    height: "20",
    rx: "3",
    fill: "#003f87"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("text", {
    x: "12",
    y: "16",
    textAnchor: "middle",
    fill: "white",
    fontSize: "10",
    fontWeight: "bold",
    fontFamily: "serif",
    children: "BBB"
  })]
});
const IconShield = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "28",
  height: "28",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "1.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("polyline", {
    points: "9 12 11 14 15 10"
  })]
});

/* ── Data ───────────────────────────────────────────────────────── */
const GEOTAG_URL = "https://www.google.com/maps/search/?api=1&query=400+Portway+Ave+Suite+304%2C+Hood+River%2C+OR+97031";
const SERVICES = [{
  label: "Roof Installation",
  href: "/services/roof-installation"
}, {
  label: "Roof Repair",
  href: "/services/roof-repair"
}, {
  label: "Emergency Roofing",
  href: "/services/emergency-roofing"
}, {
  label: "Roof Maintenance",
  href: "/services/roof-maintenance"
}];
const QUICK_LINKS = [{
  label: "Home",
  href: "/"
}, {
  label: "About Us",
  href: "/about"
}, {
  label: "Location",
  href: "/location"
}, {
  label: "Contact",
  href: "/contact"
}];
const SOCIALS = [{
  href: "https://www.facebook.com/ARRoofingConstructions?mibextid=wwXIfr&mibextid=wwXIfr",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconFacebook, {}),
  label: "Facebook"
}, {
  href: "https://www.instagram.com/arroofing_construction?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconInstagram, {}),
  label: "Instagram"
}, {
  href: "https://www.tiktok.com/@arroofing_construction?_r=1&_t=ZS-96w8DOpbhCq",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconTikTok, {}),
  label: "TikTok"
}, {
  href: "#",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconGoogle, {}),
  label: "Google My Business"
}, {
  href: "#",
  icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconBBB, {}),
  label: "Better Business Bureau"
}];

/* ── Link list helper ───────────────────────────────────────────── */
function FooterLinkList({
  items
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("ul", {
    style: {
      listStyle: "none",
      margin: 0,
      padding: 0,
      display: "flex",
      flexDirection: "column",
      gap: "10px"
    },
    children: items.map(({
      label,
      href
    }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
      children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
        href: href,
        style: {
          display: "flex",
          alignItems: "center",
          gap: "7px",
          color: "#aaa",
          textDecoration: "none",
          fontSize: "14px",
          transition: "color 0.2s ease"
        },
        onMouseEnter: e => e.currentTarget.style.color = "#fff",
        onMouseLeave: e => e.currentTarget.style.color = "#aaa",
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
          style: {
            color: "#6a9a9a",
            flexShrink: 0
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconChevronRight, {})
        }), label]
      })
    }, label))
  });
}

/* ── Column heading ─────────────────────────────────────────────── */
function FooterHeading({
  children
}) {
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
    style: {
      marginBottom: "20px"
    },
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("h4", {
      style: {
        color: "#fff",
        fontSize: "15px",
        fontWeight: "700",
        margin: "0 0 10px 0",
        letterSpacing: "0.2px"
      },
      children: children
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        width: "32px",
        height: "3px",
        backgroundColor: "#6a9a9a",
        borderRadius: "2px"
      }
    })]
  });
}

/* ── Main Component ─────────────────────────────────────────────── */
// ── ESTAMPADO DE FONDO ───────────────────────────────────────────
// Pega aquí la URL del medio que quieras usar como fondo del footer
const FOOTER_BG_IMG = "/wp-content/uploads/2026/06/Estampados_2_ARRC-scaled.png";
// ─────────────────────────────────────────────────────────────────

function Footer() {
  const year = new Date().getFullYear();
  const footerStyle = {
    backgroundColor: "#0a1e1d",
    color: "#aaa",
    ...(FOOTER_BG_IMG && {
      backgroundImage: `url(${FOOTER_BG_IMG})`,
      backgroundSize: "cover",
      backgroundPosition: "center",
      position: "relative"
    })
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("footer", {
    style: footerStyle,
    children: [FOOTER_BG_IMG && /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      style: {
        position: "absolute",
        inset: 0,
        backgroundColor: "rgba(10,28,27,0.93)",
        zIndex: 0,
        pointerEvents: "none"
      }
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
      style: {
        position: "relative",
        zIndex: 1
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          backgroundColor: "#e8253a"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "max-w-7xl mx-auto px-6 py-8",
          style: {
            display: "flex",
            flexWrap: "wrap",
            alignItems: "center",
            justifyContent: "space-between",
            gap: "16px"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              gap: "16px"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                color: "rgba(255,255,255,0.85)"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconShield, {})
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                style: {
                  color: "#fff",
                  fontWeight: "700",
                  fontSize: "18px",
                  margin: 0,
                  lineHeight: 1.3
                },
                children: "Ready for a new roof? Get your free estimate today."
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
                style: {
                  color: "rgba(255,255,255,0.8)",
                  fontSize: "13px",
                  margin: "4px 0 0 0"
                },
                children: "Licensed & insured \u2014 Serving Portland, Oregon"
              })]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/contact",
            style: {
              display: "inline-block",
              padding: "11px 28px",
              backgroundColor: "#fff",
              color: "#e8253a",
              fontWeight: "700",
              fontSize: "14px",
              textDecoration: "none",
              borderRadius: "7px",
              whiteSpace: "nowrap",
              transition: "transform 0.15s ease, box-shadow 0.15s ease"
            },
            onMouseEnter: e => {
              e.currentTarget.style.transform = "translateY(-2px)";
              e.currentTarget.style.boxShadow = "0 6px 20px rgba(0,0,0,0.2)";
            },
            onMouseLeave: e => {
              e.currentTarget.style.transform = "translateY(0)";
              e.currentTarget.style.boxShadow = "none";
            },
            children: "Get a Free Quote"
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        className: "max-w-7xl mx-auto px-6 py-14",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          style: {
            display: "grid",
            gridTemplateColumns: "repeat(auto-fit, minmax(210px, 1fr))",
            gap: "48px"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/",
              style: {
                textDecoration: "none",
                display: "inline-flex",
                marginBottom: "18px"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
                src: "/wp-content/uploads/2026/06/AR_Logotipo.png",
                alt: "AR Roofing & Construction",
                style: {
                  height: "52px",
                  width: "auto",
                  display: "block",
                  filter: "brightness(0) invert(1)"
                }
              })
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("p", {
              style: {
                fontSize: "13.5px",
                lineHeight: "1.75",
                color: "#999",
                margin: "0 0 20px 0"
              },
              children: "Professional roofing solutions for residential and commercial properties across Portland, Oregon. Quality workmanship guaranteed."
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              style: {
                display: "flex",
                alignItems: "center",
                gap: "10px"
              },
              children: SOCIALS.map(({
                href,
                icon,
                label
              }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: href,
                "aria-label": label,
                title: label,
                style: {
                  width: "34px",
                  height: "34px",
                  backgroundColor: "#1a3332",
                  borderRadius: "7px",
                  display: "flex",
                  alignItems: "center",
                  justifyContent: "center",
                  color: "#aaa",
                  textDecoration: "none",
                  transition: "background-color 0.2s ease, color 0.2s ease"
                },
                onMouseEnter: e => {
                  e.currentTarget.style.backgroundColor = "#6a9a9a";
                  e.currentTarget.style.color = "#fff";
                },
                onMouseLeave: e => {
                  e.currentTarget.style.backgroundColor = "#222";
                  e.currentTarget.style.color = "#aaa";
                },
                children: icon
              }, label))
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
              children: "Our Services"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterLinkList, {
              items: SERVICES
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
              children: "Quick Links"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterLinkList, {
              items: QUICK_LINKS
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(FooterHeading, {
              children: "Contact Us"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("ul", {
              style: {
                listStyle: "none",
                margin: 0,
                padding: 0,
                display: "flex",
                flexDirection: "column",
                gap: "14px"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: "mailto:info@arroofingus.com",
                  style: {
                    display: "flex",
                    alignItems: "flex-start",
                    gap: "10px",
                    color: "#aaa",
                    textDecoration: "none",
                    fontSize: "14px",
                    transition: "color 0.2s ease"
                  },
                  onMouseEnter: e => e.currentTarget.style.color = "#fff",
                  onMouseLeave: e => e.currentTarget.style.color = "#aaa",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    style: {
                      color: "#6a9a9a",
                      marginTop: "1px",
                      flexShrink: 0
                    },
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconMail, {})
                  }), "info@arroofingus.com"]
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: "tel:5416750577",
                  style: {
                    display: "flex",
                    alignItems: "flex-start",
                    gap: "10px",
                    color: "#aaa",
                    textDecoration: "none",
                    fontSize: "14px",
                    transition: "color 0.2s ease"
                  },
                  onMouseEnter: e => e.currentTarget.style.color = "#fff",
                  onMouseLeave: e => e.currentTarget.style.color = "#aaa",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    style: {
                      color: "#6a9a9a",
                      marginTop: "1px",
                      flexShrink: 0
                    },
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconPhone, {})
                  }), "(541) 675 0577"]
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("li", {
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: GEOTAG_URL,
                  target: "_blank",
                  rel: "noopener noreferrer",
                  style: {
                    display: "flex",
                    alignItems: "flex-start",
                    gap: "10px",
                    color: "#aaa",
                    textDecoration: "none",
                    fontSize: "14px",
                    transition: "color 0.2s ease"
                  },
                  onMouseEnter: e => e.currentTarget.style.color = "#fff",
                  onMouseLeave: e => e.currentTarget.style.color = "#aaa",
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    style: {
                      color: "#6a9a9a",
                      marginTop: "1px",
                      flexShrink: 0
                    },
                    children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconPin, {})
                  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    children: "400 Portway Ave Suite 304, Hood River, OR 97031"
                  })]
                })
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("li", {
                style: {
                  display: "flex",
                  alignItems: "flex-start",
                  gap: "10px",
                  fontSize: "14px"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    color: "#6a9a9a",
                    marginTop: "1px",
                    flexShrink: 0
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconClock, {})
                }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  children: "Mon \u2013 Sat: 7:00 AM \u2013 6:00 PM"
                })]
              })]
            })]
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        style: {
          borderTop: "1px solid #222"
        },
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "max-w-7xl mx-auto px-6 py-5",
          style: {
            display: "flex",
            flexWrap: "wrap",
            alignItems: "center",
            justifyContent: "space-between",
            gap: "10px"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("p", {
            style: {
              fontSize: "13px",
              color: "#555",
              margin: 0
            },
            children: ["\xA9 ", year, " AR Roofing & Construction. All rights reserved."]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            style: {
              display: "flex",
              gap: "20px"
            },
            children: [{
              label: "Privacy Policy",
              href: "/privacy-policy"
            }, {
              label: "Terms of Service",
              href: "/terms"
            }].map(({
              label,
              href
            }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: href,
              style: {
                fontSize: "13px",
                color: "#555",
                textDecoration: "none",
                transition: "color 0.2s ease"
              },
              onMouseEnter: e => e.currentTarget.style.color = "#aaa",
              onMouseLeave: e => e.currentTarget.style.color = "#555",
              children: label
            }, label))
          })]
        })
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Footer);

/***/ },

/***/ "./src/scripts/Navbar.js"
/*!*******************************!*\
  !*** ./src/scripts/Navbar.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__);


const NAV_LINKS = [{
  label: "Home",
  href: "/"
}, {
  label: "About",
  href: "/about"
}, {
  label: "Services",
  href: "#",
  dropdown: [{
    label: "Roof Installation",
    href: "/services/roof-installation"
  }, {
    label: "Roof Repair",
    href: "/services/roof-repair"
  }, {
    label: "Emergency Roofing",
    href: "/services/emergency-roofing"
  }, {
    label: "Roof Maintenance",
    href: "/services/roof-maintenance"
  }]
}, {
  label: "Location",
  href: "/location"
}, {
  label: "Contact",
  href: "/contact"
}];
const GEOTAG_URL = "https://www.google.com/maps/search/?api=1&query=400+Portway+Ave+Suite+304%2C+Hood+River%2C+OR+97031";

/* ── SVG Icons ─────────────────────────────────────────────────── */
const IconMail = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "14",
  height: "14",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    x: "2",
    y: "4",
    width: "20",
    height: "16",
    rx: "2"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
  })]
});
const IconPhone = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "14",
  height: "14",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"
  })
});
const IconPin = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "14",
  height: "14",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "10",
    r: "3"
  })]
});
const IconChevron = ({
  open
}) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "12",
  height: "12",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2.5",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  style: {
    transition: "transform 0.25s ease",
    transform: open ? "rotate(180deg)" : "rotate(0deg)"
  },
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "m6 9 6 6 6-6"
  })
});
const IconMenu = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "22",
  height: "22",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "4",
    y1: "6",
    x2: "20",
    y2: "6"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "4",
    y1: "12",
    x2: "20",
    y2: "12"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("line", {
    x1: "4",
    y1: "18",
    x2: "20",
    y2: "18"
  })]
});
const IconX = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "22",
  height: "22",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 6 6 18M6 6l12 12"
  })
});

/* Social icons */
const IconFacebook = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
  })
});
const IconInstagram = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "none",
  stroke: "currentColor",
  strokeWidth: "2",
  strokeLinecap: "round",
  strokeLinejoin: "round",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    x: "2",
    y: "2",
    width: "20",
    height: "20",
    rx: "5",
    ry: "5"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "12",
    cy: "12",
    r: "3"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("circle", {
    cx: "17.5",
    cy: "6.5",
    r: "1",
    fill: "currentColor",
    stroke: "none"
  })]
});
const IconTikTok = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.22 8.22 0 0 0 4.83 1.56V6.79a4.85 4.85 0 0 1-1.06-.1z"
  })
});
const IconGoogle = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z",
    fill: "#4285F4"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z",
    fill: "#34A853"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z",
    fill: "#FBBC05"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("path", {
    d: "M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z",
    fill: "#EA4335"
  })]
});
const IconBBB = () => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("svg", {
  width: "16",
  height: "16",
  viewBox: "0 0 24 24",
  fill: "currentColor",
  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("rect", {
    x: "2",
    y: "2",
    width: "20",
    height: "20",
    rx: "3",
    fill: "#003f87"
  }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("text", {
    x: "12",
    y: "16",
    textAnchor: "middle",
    fill: "white",
    fontSize: "10",
    fontWeight: "bold",
    fontFamily: "serif",
    children: "BBB"
  })]
});

/* ── Main Component ─────────────────────────────────────────────── */
function Navbar() {
  const [mobileOpen, setMobileOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [dropdownOpen, setDropdownOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [mobileServicesOpen, setMobileServicesOpen] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [scrolled, setScrolled] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(false);
  const [showTopbar, setShowTopbar] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(true); // visible al inicio y al hacer scroll up
  const [headerH, setHeaderH] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0); // alto total (topbar + nav) para el espaciador
  const [topbarH, setTopbarH] = (0,react__WEBPACK_IMPORTED_MODULE_0__.useState)(0); // alto del topbar para el desplazamiento

  const closeTimer = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const dropdownRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const headerRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const topbarRef = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(null);
  const lastScrollY = (0,react__WEBPACK_IMPORTED_MODULE_0__.useRef)(0);

  // Mide el alto del header completo y del topbar.
  // useLayoutEffect para fijar el espaciador antes del primer pintado (sin salto).
  // Se re-mide en resize (en móvil el topbar está oculto, así que su alto pasa a 0).
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useLayoutEffect)(() => {
    const measure = () => {
      if (headerRef.current) setHeaderH(headerRef.current.offsetHeight);
      setTopbarH(topbarRef.current ? topbarRef.current.offsetHeight : 0);
    };
    measure();
    window.addEventListener("resize", measure);
    return () => window.removeEventListener("resize", measure);
  }, []);

  // Mostrar/ocultar el topbar según la dirección del scroll.
  (0,react__WEBPACK_IMPORTED_MODULE_0__.useEffect)(() => {
    const onScroll = () => {
      const y = window.scrollY < 0 ? 0 : window.scrollY;
      const tbH = topbarRef.current ? topbarRef.current.offsetHeight : 0;
      setScrolled(y > 10);
      const last = lastScrollY.current;
      if (Math.abs(y - last) < 4) return; // ignora micro-movimientos (anti-jitter)

      if (y <= tbH) {
        setShowTopbar(true); // cerca del tope → topbar siempre visible
      } else if (y > last) {
        setShowTopbar(false); // scroll down → ocultar topbar
      } else {
        setShowTopbar(true); // scroll up → revelar topbar
      }
      lastScrollY.current = y;
    };
    onScroll();
    window.addEventListener("scroll", onScroll, {
      passive: true
    });
    return () => window.removeEventListener("scroll", onScroll);
  }, []);
  const handleMouseEnter = () => {
    if (closeTimer.current) clearTimeout(closeTimer.current);
    setDropdownOpen(true);
  };
  const handleMouseLeave = () => {
    closeTimer.current = setTimeout(() => setDropdownOpen(false), 150);
  };
  return /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.Fragment, {
    children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
      "aria-hidden": "true",
      style: {
        height: headerH
      }
    }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("header", {
      ref: headerRef,
      style: {
        position: "fixed",
        top: 0,
        left: 0,
        right: 0,
        zIndex: 999,
        transform: `translateY(${showTopbar ? 0 : -topbarH}px)`,
        transition: "transform 0.3s ease",
        willChange: "transform"
      },
      children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
        ref: topbarRef,
        style: {
          backgroundColor: "#0f2322"
        },
        className: "hidden md:block",
        children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "max-w-7xl mx-auto px-6 py-2 flex items-center justify-between",
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "flex items-center gap-5 text-xs",
            style: {
              color: "#aaa"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "mailto:info@arroofingus.com",
              className: "flex items-center gap-1.5 hover:text-white transition-colors duration-200",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  color: "#6a9a9a"
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconMail, {})
              }), "info@arroofingus.com"]
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
              href: "tel:5416750577",
              className: "flex items-center gap-1.5 hover:text-white transition-colors duration-200",
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                style: {
                  color: "#6a9a9a"
                },
                children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconPhone, {})
              }), "(541) 675 0577"]
            })]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
            href: GEOTAG_URL,
            target: "_blank",
            rel: "noopener noreferrer",
            "aria-label": "400 Portway Ave Suite 304, Hood River, OR 97031",
            className: "flex items-center gap-1.5 text-xs hover:text-white transition-colors duration-200",
            style: {
              color: "#aaa"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
              style: {
                color: "#6a9a9a"
              },
              children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconPin, {})
            }), "400 Portway Ave Suite 304, Hood River, OR 97031"]
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "flex items-center gap-3",
            children: [{
              href: "https://www.facebook.com/ARRoofingConstructions?mibextid=wwXIfr&mibextid=wwXIfr",
              icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconFacebook, {}),
              label: "Facebook"
            }, {
              href: "https://www.instagram.com/arroofing_construction?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==",
              icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconInstagram, {}),
              label: "Instagram"
            }, {
              href: "https://www.tiktok.com/@arroofing_construction?_r=1&_t=ZS-96w8DOpbhCq",
              icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconTikTok, {}),
              label: "TikTok"
            }, {
              href: "#",
              icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconGoogle, {}),
              label: "Google My Business"
            }, {
              href: "#",
              icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconBBB, {}),
              label: "Better Business Bureau"
            }].map(({
              href,
              icon,
              label
            }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: href,
              "aria-label": label,
              title: label,
              style: {
                color: "#aaa"
              },
              className: "hover:text-white transition-colors duration-200",
              children: icon
            }, label))
          })]
        })
      }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("nav", {
        style: {
          backgroundColor: scrolled ? "rgba(255,255,255,0.98)" : "#ffffff",
          boxShadow: scrolled ? "0 2px 20px rgba(0,0,0,0.10)" : "0 1px 0 rgba(0,0,0,0.06)",
          transition: "box-shadow 0.3s ease, background-color 0.3s ease"
        },
        children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
          className: "max-w-7xl mx-auto px-6 grid items-center",
          style: {
            height: "68px",
            gridTemplateColumns: "1fr auto 1fr"
          },
          children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
            href: "/",
            style: {
              textDecoration: "none",
              display: "flex",
              alignItems: "center"
            },
            children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("img", {
              src: "/wp-content/uploads/2026/06/AR_Simplificado-scaled.png",
              alt: "AR Roofing & Construction",
              style: {
                height: "36px",
                width: "auto",
                display: "block"
              }
            })
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
            className: "hidden md:flex items-center justify-center gap-1",
            children: NAV_LINKS.map(link => link.dropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              ref: dropdownRef,
              className: "relative",
              onMouseEnter: handleMouseEnter,
              onMouseLeave: handleMouseLeave,
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                style: {
                  display: "flex",
                  alignItems: "center",
                  gap: "5px",
                  padding: "8px 14px",
                  fontSize: "14px",
                  fontWeight: "500",
                  color: dropdownOpen ? "#6a9a9a" : "#1a2e2d",
                  background: "none",
                  border: "none",
                  cursor: "pointer",
                  borderRadius: "6px",
                  transition: "color 0.2s ease"
                },
                children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconChevron, {
                  open: dropdownOpen
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
                style: {
                  position: "absolute",
                  top: "calc(100% + 8px)",
                  left: "50%",
                  backgroundColor: "#fff",
                  borderRadius: "10px",
                  boxShadow: "0 8px 32px rgba(0,0,0,0.13)",
                  border: "1px solid rgba(0,0,0,0.07)",
                  minWidth: "210px",
                  padding: "6px",
                  opacity: dropdownOpen ? 1 : 0,
                  visibility: dropdownOpen ? "visible" : "hidden",
                  transform: dropdownOpen ? "translateX(-50%) translateY(0)" : "translateX(-50%) translateY(-6px)",
                  transition: "opacity 0.2s ease, transform 0.2s ease, visibility 0.2s",
                  zIndex: 1000
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                  style: {
                    position: "absolute",
                    top: "-6px",
                    left: "50%",
                    transform: "translateX(-50%)",
                    width: "12px",
                    height: "12px",
                    backgroundColor: "#fff",
                    border: "1px solid rgba(0,0,0,0.07)",
                    borderRight: "none",
                    borderBottom: "none",
                    rotate: "45deg"
                  }
                }), link.dropdown.map(item => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                  href: item.href,
                  style: {
                    display: "flex",
                    alignItems: "center",
                    gap: "10px",
                    padding: "9px 14px",
                    fontSize: "13.5px",
                    color: "#1a2e2d",
                    textDecoration: "none",
                    borderRadius: "7px",
                    transition: "background 0.15s ease, color 0.15s ease"
                  },
                  onMouseEnter: e => {
                    e.currentTarget.style.backgroundColor = "#eaf4f4";
                    e.currentTarget.style.color = "#6a9a9a";
                  },
                  onMouseLeave: e => {
                    e.currentTarget.style.backgroundColor = "transparent";
                    e.currentTarget.style.color = "#1a2e2d";
                  },
                  children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                    style: {
                      width: "6px",
                      height: "6px",
                      borderRadius: "50%",
                      backgroundColor: "#6a9a9a",
                      flexShrink: 0
                    }
                  }), item.label]
                }, item.label))]
              })]
            }, link.label) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: link.href,
              style: {
                padding: "8px 14px",
                fontSize: "14px",
                fontWeight: "500",
                color: "#1a2e2d",
                textDecoration: "none",
                borderRadius: "6px",
                transition: "color 0.2s ease"
              },
              onMouseEnter: e => e.currentTarget.style.color = "#6a9a9a",
              onMouseLeave: e => e.currentTarget.style.color = "#1a2e2d",
              children: link.label
            }, link.label))
          }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            style: {
              display: "flex",
              alignItems: "center",
              justifyContent: "flex-end",
              gap: "12px"
            },
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/contact",
              className: "hidden md:inline-block",
              style: {
                padding: "9px 20px",
                backgroundColor: "#e8253a",
                color: "#fff",
                fontSize: "14px",
                fontWeight: "600",
                textDecoration: "none",
                borderRadius: "7px",
                transition: "background-color 0.2s ease, transform 0.15s ease",
                letterSpacing: "0.2px"
              },
              onMouseEnter: e => {
                e.currentTarget.style.backgroundColor = "#8b0a1a";
                e.currentTarget.style.transform = "translateY(-1px)";
              },
              onMouseLeave: e => {
                e.currentTarget.style.backgroundColor = "#e8253a";
                e.currentTarget.style.transform = "translateY(0)";
              },
              children: "Get a Free Quote"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("button", {
              className: "md:hidden",
              onClick: () => setMobileOpen(!mobileOpen),
              "aria-label": "Toggle menu",
              style: {
                background: "none",
                border: "none",
                cursor: "pointer",
                color: "#1a2e2d",
                padding: "4px"
              },
              children: mobileOpen ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconX, {}) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconMenu, {})
            })]
          })]
        }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
          style: {
            maxHeight: mobileOpen ? "600px" : "0",
            overflow: "hidden",
            transition: "max-height 0.35s ease",
            backgroundColor: "#fff",
            borderTop: mobileOpen ? "1px solid #f0f0f0" : "none"
          },
          children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
            className: "px-6 py-4 flex flex-col gap-1",
            children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              className: "flex flex-col gap-2 pb-4 mb-2",
              style: {
                borderBottom: "1px solid #f0f0f0"
              },
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: "mailto:info@arroofingus.com",
                className: "flex items-center gap-2 text-xs",
                style: {
                  color: "#666",
                  textDecoration: "none"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    color: "#6a9a9a"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconMail, {})
                }), " info@arroofingus.com"]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: "tel:5416750577",
                className: "flex items-center gap-2 text-xs",
                style: {
                  color: "#666",
                  textDecoration: "none"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    color: "#6a9a9a"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconPhone, {})
                }), " (541) 675 0577"]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("a", {
                href: GEOTAG_URL,
                target: "_blank",
                rel: "noopener noreferrer",
                className: "flex items-center gap-2 text-xs",
                style: {
                  color: "#666",
                  textDecoration: "none"
                },
                children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("span", {
                  style: {
                    color: "#6a9a9a"
                  },
                  children: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconPin, {})
                }), " 400 Portway Ave Suite 304, Hood River, OR 97031"]
              })]
            }), NAV_LINKS.map(link => link.dropdown ? /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("div", {
              children: [/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsxs)("button", {
                onClick: () => setMobileServicesOpen(!mobileServicesOpen),
                style: {
                  width: "100%",
                  display: "flex",
                  justifyContent: "space-between",
                  alignItems: "center",
                  padding: "10px 12px",
                  fontSize: "15px",
                  fontWeight: "500",
                  color: "#1a2e2d",
                  background: "none",
                  border: "none",
                  cursor: "pointer",
                  borderRadius: "7px",
                  textAlign: "left"
                },
                children: [link.label, /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconChevron, {
                  open: mobileServicesOpen
                })]
              }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
                style: {
                  maxHeight: mobileServicesOpen ? "300px" : "0",
                  overflow: "hidden",
                  transition: "max-height 0.3s ease"
                },
                children: link.dropdown.map(item => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                  href: item.href,
                  style: {
                    display: "block",
                    padding: "9px 12px 9px 28px",
                    fontSize: "14px",
                    color: "#555",
                    textDecoration: "none",
                    borderRadius: "7px"
                  },
                  onMouseEnter: e => e.currentTarget.style.color = "#6a9a9a",
                  onMouseLeave: e => e.currentTarget.style.color = "#555",
                  children: item.label
                }, item.label))
              })]
            }, link.label) : /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: link.href,
              style: {
                display: "block",
                padding: "10px 12px",
                fontSize: "15px",
                fontWeight: "500",
                color: "#1a2e2d",
                textDecoration: "none",
                borderRadius: "7px"
              },
              onMouseEnter: e => e.currentTarget.style.color = "#6a9a9a",
              onMouseLeave: e => e.currentTarget.style.color = "#1a2e2d",
              children: link.label
            }, link.label)), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
              href: "/contact",
              style: {
                display: "block",
                marginTop: "8px",
                padding: "12px",
                backgroundColor: "#e8253a",
                color: "#fff",
                fontSize: "14px",
                fontWeight: "600",
                textDecoration: "none",
                borderRadius: "7px",
                textAlign: "center"
              },
              children: "Get a Free Quote"
            }), /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("div", {
              className: "flex items-center gap-4 pt-4 mt-2",
              style: {
                borderTop: "1px solid #f0f0f0"
              },
              children: [{
                href: "https://www.facebook.com/ARRoofingConstructions?mibextid=wwXIfr&mibextid=wwXIfr",
                icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconFacebook, {}),
                label: "Facebook"
              }, {
                href: "https://www.instagram.com/arroofing_construction?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==",
                icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconInstagram, {}),
                label: "Instagram"
              }, {
                href: "https://www.tiktok.com/@arroofing_construction?_r=1&_t=ZS-96w8DOpbhCq",
                icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconTikTok, {}),
                label: "TikTok"
              }, {
                href: "#",
                icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconGoogle, {}),
                label: "Google My Business"
              }, {
                href: "#",
                icon: /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)(IconBBB, {}),
                label: "Better Business Bureau"
              }].map(({
                href,
                icon,
                label
              }) => /*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_1__.jsx)("a", {
                href: href,
                "aria-label": label,
                style: {
                  color: "#666"
                },
                children: icon
              }, label))
            })]
          })
        })]
      })]
    })]
  });
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Navbar);

/***/ },

/***/ "./src/scripts/Person.js"
/*!*******************************!*\
  !*** ./src/scripts/Person.js ***!
  \*******************************/
(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
class Person {
  constructor(name) {
    this.name = name;
    this.greet();
  }
  greet() {
    console.log(`Hello, my name is ${this.name}.`);
  }
}
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (Person);

/***/ },

/***/ "react"
/*!************************!*\
  !*** external "React" ***!
  \************************/
(module) {

module.exports = window["React"];

/***/ },

/***/ "react-dom/client"
/*!***************************!*\
  !*** external "ReactDOM" ***!
  \***************************/
(module) {

module.exports = window["ReactDOM"];

/***/ },

/***/ "react/jsx-runtime"
/*!**********************************!*\
  !*** external "ReactJSXRuntime" ***!
  \**********************************/
(module) {

module.exports = window["ReactJSXRuntime"];

/***/ }

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		if (!(moduleId in __webpack_modules__)) {
/******/ 			delete __webpack_module_cache__[moduleId];
/******/ 			var e = new Error("Cannot find module '" + moduleId + "'");
/******/ 			e.code = 'MODULE_NOT_FOUND';
/******/ 			throw e;
/******/ 		}
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry needs to be wrapped in an IIFE because it needs to be isolated against other modules in the chunk.
(() => {
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! react */ "react");
/* harmony import */ var react__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(react__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! react-dom/client */ "react-dom/client");
/* harmony import */ var react_dom_client__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(react_dom_client__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./scripts/Navbar */ "./src/scripts/Navbar.js");
/* harmony import */ var _scripts_Footer__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./scripts/Footer */ "./src/scripts/Footer.js");
/* harmony import */ var _scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./scripts/ContactForm */ "./src/scripts/ContactForm.js");
/* harmony import */ var _scripts_Person__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./scripts/Person */ "./src/scripts/Person.js");
/* harmony import */ var _scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./scripts/ExampleReactComponent */ "./src/scripts/ExampleReactComponent.js");
/* harmony import */ var _scripts_CertificateBadges__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./scripts/CertificateBadges */ "./src/scripts/CertificateBadges.js");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! react/jsx-runtime */ "react/jsx-runtime");
/* harmony import */ var react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__);









const person1 = new _scripts_Person__WEBPACK_IMPORTED_MODULE_5__["default"]("Brad");

// Example component
if (document.querySelector("#render-react-example-here")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#render-react-example-here")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_ExampleReactComponent__WEBPACK_IMPORTED_MODULE_6__["default"], {}));
}

// Navbar
if (document.querySelector("#navbar")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#navbar")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_Navbar__WEBPACK_IMPORTED_MODULE_2__["default"], {}));
}

// Footer
if (document.querySelector("#footer")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#footer")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_Footer__WEBPACK_IMPORTED_MODULE_3__["default"], {}));
}

// Hero contact form (dark theme — inside the glassmorphism panel)
if (document.querySelector("#hero-contact-form")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#hero-contact-form")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {
    theme: "dark",
    title: "Get a Free Inspection",
    showTitle: true
  }));
}

// Final CTA contact form (dark theme — inside the dark CTA section)
if (document.querySelector("#final-contact-form")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#final-contact-form")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {
    theme: "dark",
    title: "Send Us a Message",
    showTitle: true
  }));
}

// Contact page form (light theme — inside white card)
if (document.querySelector("#ct-react-form")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#ct-react-form")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_ContactForm__WEBPACK_IMPORTED_MODULE_4__["default"], {
    theme: "light",
    title: "Get your free estimate today.",
    showTitle: true
  }));
}

// Floating certificate badges (etiqueta borde derecho, centrado)
if (document.querySelector("#certificate-badges")) {
  react_dom_client__WEBPACK_IMPORTED_MODULE_1___default().createRoot(document.querySelector("#certificate-badges")).render(/*#__PURE__*/(0,react_jsx_runtime__WEBPACK_IMPORTED_MODULE_8__.jsx)(_scripts_CertificateBadges__WEBPACK_IMPORTED_MODULE_7__["default"], {
    title: "Certifications"
  }));
}
})();

/******/ })()
;
//# sourceMappingURL=index.js.map