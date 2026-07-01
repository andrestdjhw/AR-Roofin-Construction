import React, { useState, useRef, useEffect, useLayoutEffect } from "react"

const NAV_LINKS = [
  { label: "Home", href: "/" },
  { label: "About", href: "/about" },
  {
    label: "Services",
    href: "#",
    dropdown: [
      { label: "Roof Installation", href: "/services/roof-installation" },
      { label: "Roof Repair", href: "/services/roof-repair" },
      { label: "Emergency Roofing", href: "/services/emergency-roofing" },
      { label: "Roof Maintenance", href: "/services/roof-maintenance" },
    ],
  },
  { label: "Location", href: "/location" },
  { label: "Contact", href: "/contact" },
]

const GEOTAG_URL =
  "https://www.google.com/maps/search/?api=1&query=400+Portway+Ave+Suite+304%2C+Hood+River%2C+OR+97031"

/* ── SVG Icons ─────────────────────────────────────────────────── */
const IconMail = () => (
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect x="2" y="4" width="20" height="16" rx="2"/>
    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
  </svg>
)

const IconPhone = () => (
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18a2 2 0 0 1 1.99-2.18H6.5a2 2 0 0 1 2 1.72c.13.96.36 1.9.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6.18 6.18l1.27-1.27a2 2 0 0 1 2.11-.45c.91.34 1.85.57 2.81.7A2 2 0 0 1 22 16.92z"/>
  </svg>
)

const IconPin = () => (
  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
    <circle cx="12" cy="10" r="3"/>
  </svg>
)

const IconChevron = ({ open }) => (
  <svg
    width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" strokeLinejoin="round"
    style={{ transition: "transform 0.25s ease", transform: open ? "rotate(180deg)" : "rotate(0deg)" }}
  >
    <path d="m6 9 6 6 6-6"/>
  </svg>
)

const IconMenu = () => (
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <line x1="4" y1="6" x2="20" y2="6"/><line x1="4" y1="12" x2="20" y2="12"/><line x1="4" y1="18" x2="20" y2="18"/>
  </svg>
)

const IconX = () => (
  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <path d="M18 6 6 18M6 6l12 12"/>
  </svg>
)

/* Social icons */
const IconFacebook = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
  </svg>
)

const IconInstagram = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
    <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
    <circle cx="12" cy="12" r="3"/>
    <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/>
  </svg>
)

const IconTikTok = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-2.88 2.5 2.89 2.89 0 0 1-2.89-2.89 2.89 2.89 0 0 1 2.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 0 0-.79-.05 6.34 6.34 0 0 0-6.34 6.34 6.34 6.34 0 0 0 6.34 6.34 6.34 6.34 0 0 0 6.33-6.34V8.69a8.22 8.22 0 0 0 4.83 1.56V6.79a4.85 4.85 0 0 1-1.06-.1z"/>
  </svg>
)

const IconGoogle = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
  </svg>
)

const IconBBB = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
    <rect x="2" y="2" width="20" height="20" rx="3" fill="#003f87"/>
    <text x="12" y="16" textAnchor="middle" fill="white" fontSize="10" fontWeight="bold" fontFamily="serif">BBB</text>
  </svg>
)

/* ── Main Component ─────────────────────────────────────────────── */
function Navbar() {
  const [mobileOpen, setMobileOpen] = useState(false)
  const [dropdownOpen, setDropdownOpen] = useState(false)
  const [mobileServicesOpen, setMobileServicesOpen] = useState(false)
  const [scrolled, setScrolled] = useState(false)
  const [showTopbar, setShowTopbar] = useState(true) // visible al inicio y al hacer scroll up
  const [headerH, setHeaderH] = useState(0)          // alto total (topbar + nav) para el espaciador
  const [topbarH, setTopbarH] = useState(0)          // alto del topbar para el desplazamiento

  const closeTimer = useRef(null)
  const dropdownRef = useRef(null)
  const headerRef = useRef(null)
  const topbarRef = useRef(null)
  const lastScrollY = useRef(0)

  // Mide el alto del header completo y del topbar.
  // useLayoutEffect para fijar el espaciador antes del primer pintado (sin salto).
  // Se re-mide en resize (en móvil el topbar está oculto, así que su alto pasa a 0).
  useLayoutEffect(() => {
    const measure = () => {
      if (headerRef.current) setHeaderH(headerRef.current.offsetHeight)
      setTopbarH(topbarRef.current ? topbarRef.current.offsetHeight : 0)
    }
    measure()
    window.addEventListener("resize", measure)
    return () => window.removeEventListener("resize", measure)
  }, [])

  // Mostrar/ocultar el topbar según la dirección del scroll.
  useEffect(() => {
    const onScroll = () => {
      const y = window.scrollY < 0 ? 0 : window.scrollY
      const tbH = topbarRef.current ? topbarRef.current.offsetHeight : 0

      setScrolled(y > 10)

      const last = lastScrollY.current
      if (Math.abs(y - last) < 4) return // ignora micro-movimientos (anti-jitter)

      if (y <= tbH) {
        setShowTopbar(true)        // cerca del tope → topbar siempre visible
      } else if (y > last) {
        setShowTopbar(false)       // scroll down → ocultar topbar
      } else {
        setShowTopbar(true)        // scroll up → revelar topbar
      }
      lastScrollY.current = y
    }
    onScroll()
    window.addEventListener("scroll", onScroll, { passive: true })
    return () => window.removeEventListener("scroll", onScroll)
  }, [])

  const handleMouseEnter = () => {
    if (closeTimer.current) clearTimeout(closeTimer.current)
    setDropdownOpen(true)
  }
  const handleMouseLeave = () => {
    closeTimer.current = setTimeout(() => setDropdownOpen(false), 150)
  }

  return (
    <>
      {/* Espaciador: reserva el alto total del header fijo para que el
          contenido no quede debajo. Se mantiene constante (no salta). */}
      <div aria-hidden="true" style={{ height: headerH }} />

      {/* ── HEADER FIJO (topbar + nav) ───────────────────────── */}
      <header
        ref={headerRef}
        style={{
          position: "fixed",
          top: 0,
          left: 0,
          right: 0,
          zIndex: 999,
          transform: `translateY(${showTopbar ? 0 : -topbarH}px)`,
          transition: "transform 0.3s ease",
          willChange: "transform",
        }}
      >
        {/* ── TOPBAR ───────────────────────────────────────────── */}
        <div ref={topbarRef} style={{ backgroundColor: "#0f2322" }} className="hidden md:block">
          <div className="max-w-7xl mx-auto px-6 py-2 flex items-center justify-between">

            {/* Left: contact info */}
            <div className="flex items-center gap-5 text-xs" style={{ color: "#aaa" }}>
              <a href="mailto:info@arroofingus.com" className="flex items-center gap-1.5 hover:text-white transition-colors duration-200">
                <span style={{ color: "#6a9a9a" }}><IconMail /></span>
                info@arroofingus.com
              </a>
              <a href="tel:5416750577" className="flex items-center gap-1.5 hover:text-white transition-colors duration-200">
                <span style={{ color: "#6a9a9a" }}><IconPhone /></span>
                (541) 675 0577
              </a>
            </div>

            {/* Center: location (geotag → Google Maps) */}
            <a
              href={GEOTAG_URL}
              target="_blank"
              rel="noopener noreferrer"
              aria-label="400 Portway Ave Suite 304, Hood River, OR 97031"
              className="flex items-center gap-1.5 text-xs hover:text-white transition-colors duration-200"
              style={{ color: "#aaa" }}
            >
              <span style={{ color: "#6a9a9a" }}><IconPin /></span>
              400 Portway Ave Suite 304, Hood River, OR 97031
            </a>

            {/* Right: social icons */}
            <div className="flex items-center gap-3">
              {[
                { href: "https://www.facebook.com/ARRoofingConstructions?mibextid=wwXIfr&mibextid=wwXIfr", icon: <IconFacebook />, label: "Facebook" },
                { href: "https://www.instagram.com/arroofing_construction?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==", icon: <IconInstagram />, label: "Instagram" },
                { href: "https://www.tiktok.com/@arroofing_construction?_r=1&_t=ZS-96w8DOpbhCq", icon: <IconTikTok />, label: "TikTok" },
                { href: "#", icon: <IconGoogle />, label: "Google My Business" },
                { href: "#", icon: <IconBBB />, label: "Better Business Bureau" },
              ].map(({ href, icon, label }) => (
                <a
                  key={label}
                  href={href}
                  aria-label={label}
                  title={label}
                  style={{ color: "#aaa" }}
                  className="hover:text-white transition-colors duration-200"
                >
                  {icon}
                </a>
              ))}
            </div>
          </div>
        </div>

        {/* ── MAIN NAVBAR ─────────────────────────────────────── */}
        <nav
          style={{
            backgroundColor: scrolled ? "rgba(255,255,255,0.98)" : "#ffffff",
            boxShadow: scrolled ? "0 2px 20px rgba(0,0,0,0.10)" : "0 1px 0 rgba(0,0,0,0.06)",
            transition: "box-shadow 0.3s ease, background-color 0.3s ease",
          }}
        >
          <div className="max-w-7xl mx-auto px-6 grid items-center" style={{ height: "68px", gridTemplateColumns: "1fr auto 1fr" }}>

            {/* Logo */}
            <a href="/" style={{ textDecoration: "none", display: "flex", alignItems: "center" }}>
              <img
                src="/wp-content/uploads/2026/06/AR_Simplificado-scaled.png"
                alt="AR Roofing & Construction"
                style={{ height: "36px", width: "auto", display: "block" }}
              />
            </a>

            {/* Desktop nav links */}
            {/* Center: nav links */}
            <div className="hidden md:flex items-center justify-center gap-1">
              {NAV_LINKS.map((link) =>
                link.dropdown ? (
                  <div
                    key={link.label}
                    ref={dropdownRef}
                    className="relative"
                    onMouseEnter={handleMouseEnter}
                    onMouseLeave={handleMouseLeave}
                  >
                    <button
                      style={{
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
                        transition: "color 0.2s ease",
                      }}
                    >
                      {link.label}
                      <IconChevron open={dropdownOpen} />
                    </button>

                    {/* Dropdown panel */}
                    <div
                      style={{
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
                        transform: dropdownOpen
                          ? "translateX(-50%) translateY(0)"
                          : "translateX(-50%) translateY(-6px)",
                        transition: "opacity 0.2s ease, transform 0.2s ease, visibility 0.2s",
                        zIndex: 1000,
                      }}
                    >
                      {/* Arrow */}
                      <div style={{
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
                        rotate: "45deg",
                      }} />
                      {link.dropdown.map((item) => (
                        <a
                          key={item.label}
                          href={item.href}
                          style={{
                            display: "flex",
                            alignItems: "center",
                            gap: "10px",
                            padding: "9px 14px",
                            fontSize: "13.5px",
                            color: "#1a2e2d",
                            textDecoration: "none",
                            borderRadius: "7px",
                            transition: "background 0.15s ease, color 0.15s ease",
                          }}
                          onMouseEnter={e => {
                            e.currentTarget.style.backgroundColor = "#eaf4f4"
                            e.currentTarget.style.color = "#6a9a9a"
                          }}
                          onMouseLeave={e => {
                            e.currentTarget.style.backgroundColor = "transparent"
                            e.currentTarget.style.color = "#1a2e2d"
                          }}
                        >
                          <span style={{
                            width: "6px",
                            height: "6px",
                            borderRadius: "50%",
                            backgroundColor: "#6a9a9a",
                            flexShrink: 0,
                          }} />
                          {item.label}
                        </a>
                      ))}
                    </div>
                  </div>
                ) : (
                  <a
                    key={link.label}
                    href={link.href}
                    style={{
                      padding: "8px 14px",
                      fontSize: "14px",
                      fontWeight: "500",
                      color: "#1a2e2d",
                      textDecoration: "none",
                      borderRadius: "6px",
                      transition: "color 0.2s ease",
                    }}
                    onMouseEnter={e => e.currentTarget.style.color = "#6a9a9a"}
                    onMouseLeave={e => e.currentTarget.style.color = "#1a2e2d"}
                  >
                    {link.label}
                  </a>
                )
              )}
            </div>

            {/* Right: CTA + mobile toggle */}
            <div style={{ display: "flex", alignItems: "center", justifyContent: "flex-end", gap: "12px" }}>
              {/* CTA — desktop only */}
              <a
                href="/contact"
                className="hidden md:inline-block"
                style={{
                  padding: "9px 20px",
                  backgroundColor: "#e8253a",
                  color: "#fff",
                  fontSize: "14px",
                  fontWeight: "600",
                  textDecoration: "none",
                  borderRadius: "7px",
                  transition: "background-color 0.2s ease, transform 0.15s ease",
                  letterSpacing: "0.2px",
                }}
                onMouseEnter={e => {
                  e.currentTarget.style.backgroundColor = "#8b0a1a"
                  e.currentTarget.style.transform = "translateY(-1px)"
                }}
                onMouseLeave={e => {
                  e.currentTarget.style.backgroundColor = "#e8253a"
                  e.currentTarget.style.transform = "translateY(0)"
                }}
              >
                Get a Free Quote
              </a>

              {/* Mobile menu toggle */}
              <button
                className="md:hidden"
                onClick={() => setMobileOpen(!mobileOpen)}
                aria-label="Toggle menu"
                style={{ background: "none", border: "none", cursor: "pointer", color: "#1a2e2d", padding: "4px" }}
              >
                {mobileOpen ? <IconX /> : <IconMenu />}
              </button>
            </div>
          </div>

          {/* ── MOBILE MENU ─────────────────────────────────── */}
          <div
            style={{
              maxHeight: mobileOpen ? "600px" : "0",
              overflow: "hidden",
              transition: "max-height 0.35s ease",
              backgroundColor: "#fff",
              borderTop: mobileOpen ? "1px solid #f0f0f0" : "none",
            }}
          >
            <div className="px-6 py-4 flex flex-col gap-1">

              {/* Mobile topbar info */}
              <div className="flex flex-col gap-2 pb-4 mb-2" style={{ borderBottom: "1px solid #f0f0f0" }}>
                <a href="mailto:info@arroofingus.com" className="flex items-center gap-2 text-xs" style={{ color: "#666", textDecoration: "none" }}>
                  <span style={{ color: "#6a9a9a" }}><IconMail /></span> info@arroofingus.com
                </a>
                <a href="tel:5416750577" className="flex items-center gap-2 text-xs" style={{ color: "#666", textDecoration: "none" }}>
                  <span style={{ color: "#6a9a9a" }}><IconPhone /></span> (541) 675 0577
                </a>
                <a
                  href={GEOTAG_URL}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="flex items-center gap-2 text-xs"
                  style={{ color: "#666", textDecoration: "none" }}
                >
                  <span style={{ color: "#6a9a9a" }}><IconPin /></span> 400 Portway Ave Suite 304, Hood River, OR 97031
                </a>
              </div>

              {NAV_LINKS.map((link) =>
                link.dropdown ? (
                  <div key={link.label}>
                    <button
                      onClick={() => setMobileServicesOpen(!mobileServicesOpen)}
                      style={{
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
                        textAlign: "left",
                      }}
                    >
                      {link.label}
                      <IconChevron open={mobileServicesOpen} />
                    </button>
                    <div
                      style={{
                        maxHeight: mobileServicesOpen ? "300px" : "0",
                        overflow: "hidden",
                        transition: "max-height 0.3s ease",
                      }}
                    >
                      {link.dropdown.map((item) => (
                        <a
                          key={item.label}
                          href={item.href}
                          style={{
                            display: "block",
                            padding: "9px 12px 9px 28px",
                            fontSize: "14px",
                            color: "#555",
                            textDecoration: "none",
                            borderRadius: "7px",
                          }}
                          onMouseEnter={e => e.currentTarget.style.color = "#6a9a9a"}
                          onMouseLeave={e => e.currentTarget.style.color = "#555"}
                        >
                          {item.label}
                        </a>
                      ))}
                    </div>
                  </div>
                ) : (
                  <a
                    key={link.label}
                    href={link.href}
                    style={{
                      display: "block",
                      padding: "10px 12px",
                      fontSize: "15px",
                      fontWeight: "500",
                      color: "#1a2e2d",
                      textDecoration: "none",
                      borderRadius: "7px",
                    }}
                    onMouseEnter={e => e.currentTarget.style.color = "#6a9a9a"}
                    onMouseLeave={e => e.currentTarget.style.color = "#1a2e2d"}
                  >
                    {link.label}
                  </a>
                )
              )}

              <a
                href="/contact"
                style={{
                  display: "block",
                  marginTop: "8px",
                  padding: "12px",
                  backgroundColor: "#e8253a",
                  color: "#fff",
                  fontSize: "14px",
                  fontWeight: "600",
                  textDecoration: "none",
                  borderRadius: "7px",
                  textAlign: "center",
                }}
              >
                Get a Free Quote
              </a>

              {/* Mobile social icons */}
              <div className="flex items-center gap-4 pt-4 mt-2" style={{ borderTop: "1px solid #f0f0f0" }}>
                {[
                  { href: "https://www.facebook.com/ARRoofingConstructions?mibextid=wwXIfr&mibextid=wwXIfr", icon: <IconFacebook />, label: "Facebook" },
                  { href: "https://www.instagram.com/arroofing_construction?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==", icon: <IconInstagram />, label: "Instagram" },
                  { href: "https://www.tiktok.com/@arroofing_construction?_r=1&_t=ZS-96w8DOpbhCq", icon: <IconTikTok />, label: "TikTok" },
                  { href: "#", icon: <IconGoogle />, label: "Google My Business" },
                  { href: "#", icon: <IconBBB />, label: "Better Business Bureau" },
                ].map(({ href, icon, label }) => (
                  <a key={label} href={href} aria-label={label} style={{ color: "#666" }}>{icon}</a>
                ))}
              </div>
            </div>
          </div>
        </nav>
      </header>
    </>
  )
}

export default Navbar