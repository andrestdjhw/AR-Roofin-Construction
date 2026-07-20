import React from "react"

/* ── Icons ─────────────────────────────────────────────────────── */
const IconMail = () => (
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect x="2" y="4" width="20" height="16" rx="2"/>
    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
  </svg>
)

const IconPhone = () => (
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>
  </svg>
)

const IconPin = () => (
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
    <circle cx="12" cy="10" r="3"/>
  </svg>
)

const IconClock = () => (
  <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <circle cx="12" cy="12" r="10"/>
    <polyline points="12 6 12 12 16 14"/>
  </svg>
)

const IconChevronRight = () => (
  <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round">
    <path d="m9 18 6-6-6-6"/>
  </svg>
)

const IconFacebook = () => (
  <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
  </svg>
)

const IconInstagram = () => (
  <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
    <circle cx="12" cy="12" r="3"/>
    <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
  </svg>
)

const IconTikTok = () => (
  <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.22 8.22 0 0 0 4.83 1.56V6.79a4.85 4.85 0 0 1-1.06-.1z"/>
  </svg>
)

const IconGoogle = () => (
  <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.47 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
  </svg>
)

const IconBBB = () => (
  <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor">
    <rect x="2" y="2" width="20" height="20" rx="3" fill="#003f87"/>
    <text x="12" y="16" textAnchor="middle" fill="white" fontSize="10" fontWeight="bold" fontFamily="serif">BBB</text>
  </svg>
)

const IconShield = () => (
  <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="1.5" strokeLinecap="round" strokeLinejoin="round">
    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
    <polyline points="9 12 11 14 15 10"/>
  </svg>
)

/* ── Data ───────────────────────────────────────────────────────── */
const GEOTAG_URL =
  "https://www.google.com/maps/search/?api=1&query=403+Portway+Ave+%23304%2C+Hood+River%2C+OR+97031"

const SERVICES = [
  { label: "Roof Installation", href: "/services/roof-installation" },
  { label: "Roof Repair", href: "/services/roof-repair" },
  { label: "Emergency Roofing", href: "/services/emergency-roofing" },
  { label: "Roof Maintenance", href: "/services/roof-maintenance" },
]

const QUICK_LINKS = [
  { label: "Home", href: "/" },
  { label: "About Us", href: "/about" },
  { label: "Location", href: "/location" },
  { label: "Contact", href: "/contact" },
]

const SOCIALS = [
  { href: "https://www.facebook.com/ARRoofingConstructions?mibextid=wwXIfr&mibextid=wwXIfr", icon: <IconFacebook />, label: "Facebook" },
  { href: "https://www.instagram.com/arroofing_construction?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==", icon: <IconInstagram />, label: "Instagram" },
  { href: "https://www.tiktok.com/@arroofing_construction?_r=1&_t=ZS-96w8DOpbhCq", icon: <IconTikTok />, label: "TikTok" },
  { href: "#", icon: <IconGoogle />, label: "Google My Business" },
  { href: "#", icon: <IconBBB />, label: "Better Business Bureau" },
]

/* ── Link list helper ───────────────────────────────────────────── */
function FooterLinkList({ items }) {
  return (
    <ul style={{ listStyle: "none", margin: 0, padding: 0, display: "flex", flexDirection: "column", gap: "10px" }}>
      {items.map(({ label, href }) => (
        <li key={label}>
          <a
            href={href}
            style={{ display: "flex", alignItems: "center", gap: "7px", color: "#aaa", textDecoration: "none", fontSize: "14px", transition: "color 0.2s ease" }}
            onMouseEnter={e => e.currentTarget.style.color = "#fff"}
            onMouseLeave={e => e.currentTarget.style.color = "#aaa"}
          >
            <span style={{ color: "#6a9a9a", flexShrink: 0 }}><IconChevronRight /></span>
            {label}
          </a>
        </li>
      ))}
    </ul>
  )
}

/* ── Column heading ─────────────────────────────────────────────── */
function FooterHeading({ children }) {
  return (
    <div style={{ marginBottom: "20px" }}>
      <h4 style={{ color: "#fff", fontSize: "15px", fontWeight: "700", margin: "0 0 10px 0", letterSpacing: "0.2px" }}>
        {children}
      </h4>
      <div style={{ width: "32px", height: "3px", backgroundColor: "#6a9a9a", borderRadius: "2px" }} />
    </div>
  )
}

/* ── Main Component ─────────────────────────────────────────────── */
// ── ESTAMPADO DE FONDO ───────────────────────────────────────────
// Pega aquí la URL del medio que quieras usar como fondo del footer
const FOOTER_BG_IMG = "/wp-content/uploads/2026/06/Estampados_2_ARRC-scaled.png"
// ─────────────────────────────────────────────────────────────────

function Footer() {
  const year = new Date().getFullYear()

  const footerStyle = {
    backgroundColor: "#0a1e1d",
    color: "#aaa",
    ...(FOOTER_BG_IMG && {
      backgroundImage: `url(${FOOTER_BG_IMG})`,
      backgroundSize: "cover",
      backgroundPosition: "center",
      position: "relative",
    }),
  }

  return (
    <footer style={footerStyle}>
      {FOOTER_BG_IMG && (
        <div style={{
          position: "absolute", inset: 0,
          backgroundColor: "rgba(10,28,27,0.93)",
          zIndex: 0, pointerEvents: "none",
        }} />
      )}
      <div style={{ position: "relative", zIndex: 1 }}>

      {/* ── CTA Banner ──────────────────────────────────────── */}
      <div style={{ backgroundColor: "#e8253a" }}>
        <div
          className="max-w-7xl mx-auto px-6 py-8"
          style={{ display: "flex", flexWrap: "wrap", alignItems: "center", justifyContent: "space-between", gap: "16px" }}
        >
          <div style={{ display: "flex", alignItems: "center", gap: "16px" }}>
            <div style={{ color: "rgba(255,255,255,0.85)" }}>
              <IconShield />
            </div>
            <div>
              <p style={{ color: "#fff", fontWeight: "700", fontSize: "18px", margin: 0, lineHeight: 1.3 }}>
                Ready for a new roof? Get your free estimate today.
              </p>
              <p style={{ color: "rgba(255,255,255,0.8)", fontSize: "13px", margin: "4px 0 0 0" }}>
                Licensed & insured — Serving Portland, Oregon
              </p>
            </div>
          </div>
          <a
            href="/contact"
            style={{
              display: "inline-block",
              padding: "11px 28px",
              backgroundColor: "#fff",
              color: "#e8253a",
              fontWeight: "700",
              fontSize: "14px",
              textDecoration: "none",
              borderRadius: "7px",
              whiteSpace: "nowrap",
              transition: "transform 0.15s ease, box-shadow 0.15s ease",
            }}
            onMouseEnter={e => {
              e.currentTarget.style.transform = "translateY(-2px)"
              e.currentTarget.style.boxShadow = "0 6px 20px rgba(0,0,0,0.2)"
            }}
            onMouseLeave={e => {
              e.currentTarget.style.transform = "translateY(0)"
              e.currentTarget.style.boxShadow = "none"
            }}
          >
            Get a Free Quote
          </a>
        </div>
      </div>

      {/* ── Main Footer Body ────────────────────────────────── */}
      <div className="max-w-7xl mx-auto px-6 py-14">
        <div
          style={{
            display: "grid",
            gridTemplateColumns: "repeat(auto-fit, minmax(210px, 1fr))",
            gap: "48px",
          }}
        >

          {/* Col 1 — Brand */}
          <div>
            {/* Logo */}
            <a href="/" style={{ textDecoration: "none", display: "inline-flex", marginBottom: "18px" }}>
              <img
                src="/wp-content/uploads/2026/06/AR_Logotipo.png"
                alt="AR Roofing & Construction"
                style={{ height: "52px", width: "auto", display: "block", filter: "brightness(0) invert(1)" }}
              />
            </a>

            <p style={{ fontSize: "13.5px", lineHeight: "1.75", color: "#999", margin: "0 0 20px 0" }}>
              Professional roofing solutions for residential and commercial properties across Portland, Oregon. Quality workmanship guaranteed.
            </p>

            {/* Social icons */}
            <div style={{ display: "flex", alignItems: "center", gap: "10px" }}>
              {SOCIALS.map(({ href, icon, label }) => (
                <a
                  key={label}
                  href={href}
                  aria-label={label}
                  title={label}
                  style={{
                    width: "34px", height: "34px",
                    backgroundColor: "#1a3332",
                    borderRadius: "7px",
                    display: "flex", alignItems: "center", justifyContent: "center",
                    color: "#aaa",
                    textDecoration: "none",
                    transition: "background-color 0.2s ease, color 0.2s ease",
                  }}
                  onMouseEnter={e => {
                    e.currentTarget.style.backgroundColor = "#6a9a9a"
                    e.currentTarget.style.color = "#fff"
                  }}
                  onMouseLeave={e => {
                    e.currentTarget.style.backgroundColor = "#222"
                    e.currentTarget.style.color = "#aaa"
                  }}
                >
                  {icon}
                </a>
              ))}
            </div>
          </div>

          {/* Col 2 — Services */}
          <div>
            <FooterHeading>Our Services</FooterHeading>
            <FooterLinkList items={SERVICES} />
          </div>

          {/* Col 3 — Quick Links */}
          <div>
            <FooterHeading>Quick Links</FooterHeading>
            <FooterLinkList items={QUICK_LINKS} />
          </div>

          {/* Col 4 — Contact */}
          <div>
            <FooterHeading>Contact Us</FooterHeading>
            <ul style={{ listStyle: "none", margin: 0, padding: 0, display: "flex", flexDirection: "column", gap: "14px" }}>
              <li>
                <a
                  href="mailto:info@arroofingus.com"
                  style={{ display: "flex", alignItems: "flex-start", gap: "10px", color: "#aaa", textDecoration: "none", fontSize: "14px", transition: "color 0.2s ease" }}
                  onMouseEnter={e => e.currentTarget.style.color = "#fff"}
                  onMouseLeave={e => e.currentTarget.style.color = "#aaa"}
                >
                  <span style={{ color: "#6a9a9a", marginTop: "1px", flexShrink: 0 }}><IconMail /></span>
                  info@arroofingus.com
                </a>
              </li>
              <li>
                <a
                  href="tel:5416450577"
                  style={{ display: "flex", alignItems: "flex-start", gap: "10px", color: "#aaa", textDecoration: "none", fontSize: "14px", transition: "color 0.2s ease" }}
                  onMouseEnter={e => e.currentTarget.style.color = "#fff"}
                  onMouseLeave={e => e.currentTarget.style.color = "#aaa"}
                >
                  <span style={{ color: "#6a9a9a", marginTop: "1px", flexShrink: 0 }}><IconPhone /></span>
                  (541) 645 0577
                </a>
              </li>
              <li>
                <a
                  href={GEOTAG_URL}
                  target="_blank"
                  rel="noopener noreferrer"
                  style={{ display: "flex", alignItems: "flex-start", gap: "10px", color: "#aaa", textDecoration: "none", fontSize: "14px", transition: "color 0.2s ease" }}
                  onMouseEnter={e => e.currentTarget.style.color = "#fff"}
                  onMouseLeave={e => e.currentTarget.style.color = "#aaa"}
                >
                  <span style={{ color: "#6a9a9a", marginTop: "1px", flexShrink: 0 }}><IconPin /></span>
                  <span>403 Portway Ave #304, Hood River, OR 97031</span>
                </a>
              </li>
              <li style={{ display: "flex", alignItems: "flex-start", gap: "10px", fontSize: "14px" }}>
                <span style={{ color: "#6a9a9a", marginTop: "1px", flexShrink: 0 }}><IconClock /></span>
                <span>Mon – Sat: 7:00 AM – 6:00 PM</span>
              </li>
            </ul>
          </div>

        </div>
      </div>

      {/* ── Bottom Bar ──────────────────────────────────────── */}
      <div style={{ borderTop: "1px solid #222" }}>
        <div
          className="max-w-7xl mx-auto px-6 py-5"
          style={{ display: "flex", flexWrap: "wrap", alignItems: "center", justifyContent: "space-between", gap: "10px" }}
        >
          <p style={{ fontSize: "13px", color: "#555", margin: 0 }}>
            © {year} AR Roofing & Construction. All rights reserved.
          </p>
          <div style={{ display: "flex", gap: "20px" }}>
            {[
              { label: "Privacy Policy", href: "/privacy-policy" },
              { label: "Terms of Service", href: "/terms" },
            ].map(({ label, href }) => (
              <a
                key={label}
                href={href}
                style={{ fontSize: "13px", color: "#555", textDecoration: "none", transition: "color 0.2s ease" }}
                onMouseEnter={e => e.currentTarget.style.color = "#aaa"}
                onMouseLeave={e => e.currentTarget.style.color = "#555"}
              >
                {label}
              </a>
            ))}
          </div>
        </div>
      </div>

      </div>
    </footer>
  )
}

export default Footer