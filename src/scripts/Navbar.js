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
  "https://www.google.com/maps/search/?api=1&query=403+Portway+Ave+%23304%2C+Hood+River%2C+OR+97031"

// Enlaces provisionales (búsquedas) — reemplazar por el perfil oficial de GMB y de BBB cuando se tengan
const GMB_URL =
  "https://www.google.com/maps/search/?api=1&query=AR+Roofing+%26+Construction+403+Portway+Ave+%23304+Hood+River+OR+97031"
const BBB_URL =
  "https://www.bbb.org/search?find_country=USA&find_text=AR%20Roofing%20%26%20Construction&find_loc=Hood%20River%2C%20OR"

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
  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"/>
  </svg>
)

const IconInstagram = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.72 3.72 0 01-1.38-.9 3.72 3.72 0 01-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16M12 0C8.74 0 8.33.01 7.05.07 5.78.13 4.9.33 4.14.63a5.88 5.88 0 00-2.13 1.38A5.88 5.88 0 00.63 4.14C.33 4.9.13 5.78.07 7.05.01 8.33 0 8.74 0 12s.01 3.67.07 4.95c.06 1.27.26 2.15.56 2.91.31.79.73 1.46 1.38 2.13a5.88 5.88 0 002.13 1.38c.76.3 1.64.5 2.91.56C8.33 23.99 8.74 24 12 24s3.67-.01 4.95-.07c1.27-.06 2.15-.26 2.91-.56a5.88 5.88 0 002.13-1.38 5.88 5.88 0 001.38-2.13c.3-.76.5-1.64.56-2.91.06-1.28.07-1.69.07-4.95s-.01-3.67-.07-4.95c-.06-1.27-.26-2.15-.56-2.91a5.88 5.88 0 00-1.38-2.13A5.88 5.88 0 0019.86.63C19.1.33 18.22.13 16.95.07 15.67.01 15.26 0 12 0zm0 5.84a6.16 6.16 0 100 12.32 6.16 6.16 0 000-12.32zm0 10.16a4 4 0 110-8 4 4 0 010 8zm6.4-11.85a1.44 1.44 0 100 2.88 1.44 1.44 0 000-2.88z"/>
  </svg>
)

const IconTikTok = () => (
  <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5.8 20.1a6.34 6.34 0 0 0 10.86-4.43V8.36a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1.84-.4z"/>
  </svg>
)

const IconGoogle = () => (
  <svg width="16" height="16" viewBox="0 0 50 50" fill="currentColor" aria-hidden="true">
    <path d="M 9.2832031 4 C 7.488935 4 5.9052102 5.2051958 5.4277344 6.9355469 L 2 19.365234 L 2 19.5 C 2 23.078268 4.9217323 26 8.5 26 C 10.813035 26 12.845511 24.77516 13.998047 22.945312 C 15.146939 24.778014 17.180833 26 19.5 26 C 21.819167 26 23.853061 24.778014 25.001953 22.945312 C 26.154489 24.77516 28.186965 26 30.5 26 C 32.813993 26 34.847721 24.77447 36 22.943359 C 37.152279 24.77447 39.186007 26 41.5 26 C 45.078268 26 48 23.078268 48 19.5 L 48 19.365234 L 44.570312 6.9355469 C 44.092963 5.2056548 42.509782 4 40.714844 4 L 9.2832031 4 z M 9.2832031 6 L 14.851562 6 L 13.197266 18 L 4.4511719 18 L 7.3554688 7.46875 C 7.5959929 6.597101 8.3794712 6 9.2832031 6 z M 26 6 L 33.128906 6 L 34.783203 18 L 26 18 L 26 6 z M 15 18 L 24 18 L 24 19.5 C 24 19.668891 24.012611 19.834272 24.025391 20 L 15 20 L 15 19.5 L 15 18 z M 36.802734 18 L 45.548828 18 L 45.984375 19.580078 C 45.981749 19.724009 45.951091 19.859765 45.935547 20 L 37.050781 20 C 37.032383 19.833631 37 19.67153 37 19.5 L 37 19.431641 L 36.802734 18 z M 4.0644531 20 L 12.949219 20 C 12.699714 22.256206 10.826202 24 8.5 24 C 6.175282 24 4.3143567 22.254621 4.0644531 20 z M 26.099609 20 L 34.900391 20 C 34.642986 22.247621 32.820142 24 30.5 24 C 28.179858 24 26.357014 22.247621 26.099609 20 z M 14 25.974609 C 12.517 27.235609 10.599 28 8.5 28 C 6.845 28 5.306 27.519172 4 26.701172 L 4 43 C 4 44.654 5.346 46 7 46 L 43 46 C 44.654 46 46 44.654 46 43 L 46 26.701172 C 44.694 27.519172 43.155 28 41.5 28 C 39.401 28 37.483 27.235609 36 25.974609 C 34.517 27.235609 32.599 28 30.5 28 C 28.401 28 26.483 27.235609 25 25.974609 C 23.517 27.235609 21.599 28 19.5 28 C 17.401 28 15.483 27.235609 14 25.974609 z M 35.5 29 C 37.546 29 39.372453 29.952547 40.564453 31.435547 L 39.132812 32.867188 C 38.314813 31.740187 36.996 31 35.5 31 C 33.019 31 31 33.019 31 35.5 C 31 37.981 33.019 40 35.5 40 C 37.453 40 39.102609 38.742 39.724609 37 L 36 37 L 36 35 L 41.974609 35 C 41.986609 35.166 42 35.331 42 35.5 C 42 39.084 39.084 42 35.5 42 C 31.916 42 29 39.084 29 35.5 C 29 31.916 31.916 29 35.5 29 z"/>
  </svg>
)

const IconBBB = () => (
  <svg width="16" height="16" viewBox="0 0 30 30" fill="currentColor" aria-hidden="true">
    <path d="M11.166 20.194c.806.577 2.809 1.923 3.222 2.358.412.435.023 1.099.023 1.099l.618.252c.137-.298.962-1.397 1.511-2.084.496-.62.926-1.706.941-2.503.047-2.572-3.367-3.794-4.949-5.237-.778-.71-.16-1.122-.16-1.122l-.527-.343C9.808 14.926 7.662 17.686 11.166 20.194zM12.922 11.605c1.969 1.74 5.435 3.548 5.679 4.717.318 1.523-.412 2.382-.412 2.382l.394.321c.213-.304.451-.591.67-.891.892-1.222 1.752-2.463 2.629-3.695 2.004-2.818 1.254-5.49-1.765-7.648-1.537-1.098-3.032-2.26-4.584-3.339-.871-.733-.275-2.107-.275-2.107l-.367-.32c0 0-3.286 3.984-3.573 5.588C11.045 8.148 10.953 9.865 12.922 11.605zM23 27L22.341 25 7.659 25 7 27 11.19 27 11.822 29 18.217 29 18.816 27z"/>
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
          <div className="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">

            {/* Left: contact info */}
            <div className="flex items-center gap-5 text-xs" style={{ color: "#aaa" }}>
              <a href="mailto:info@arroofingus.com" className="flex items-center gap-1.5 hover:text-white transition-colors duration-200">
                <span style={{ color: "#6a9a9a" }}><IconMail /></span>
                info@arroofingus.com
              </a>
              <a href="tel:5416450577" className="flex items-center gap-1.5 hover:text-white transition-colors duration-200">
                <span style={{ color: "#6a9a9a" }}><IconPhone /></span>
                (541) 645 0577
              </a>
            </div>

            {/* Center: location (geotag → Google Maps) */}
            <a
              href={GEOTAG_URL}
              target="_blank"
              rel="noopener noreferrer"
              aria-label="403 Portway Ave #304, Hood River, OR 97031"
              className="flex items-center gap-1.5 text-xs hover:text-white transition-colors duration-200"
              style={{ color: "#aaa" }}
            >
              <span style={{ color: "#6a9a9a" }}><IconPin /></span>
              403 Portway Ave #304, Hood River, OR 97031
            </a>

            {/* Right: social icons */}
            <div className="flex items-center gap-3">
              {[
                { href: "https://www.facebook.com/ARRoofingConstructions?mibextid=wwXIfr&mibextid=wwXIfr", icon: <IconFacebook />, label: "Facebook" },
                { href: "https://www.instagram.com/arroofing_construction?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==", icon: <IconInstagram />, label: "Instagram" },
                { href: "https://www.tiktok.com/@arroofing_construction?_r=1&_t=ZS-96w8DOpbhCq", icon: <IconTikTok />, label: "TikTok" },
                { href: GMB_URL, icon: <IconGoogle />, label: "Google My Business" },
                { href: BBB_URL, icon: <IconBBB />, label: "Better Business Bureau" },
              ].map(({ href, icon, label }) => (
                <a
                  key={label}
                  href={href}
                  target="_blank"
                  rel="noopener noreferrer"
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
                <a href="tel:5416450577" className="flex items-center gap-2 text-xs" style={{ color: "#666", textDecoration: "none" }}>
                  <span style={{ color: "#6a9a9a" }}><IconPhone /></span> (541) 645 0577
                </a>
                <a
                  href={GEOTAG_URL}
                  target="_blank"
                  rel="noopener noreferrer"
                  className="flex items-center gap-2 text-xs"
                  style={{ color: "#666", textDecoration: "none" }}
                >
                  <span style={{ color: "#6a9a9a" }}><IconPin /></span> 403 Portway Ave #304, Hood River, OR 97031
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
                  { href: GMB_URL, icon: <IconGoogle />, label: "Google My Business" },
                  { href: BBB_URL, icon: <IconBBB />, label: "Better Business Bureau" },
                ].map(({ href, icon, label }) => (
                  <a key={label} href={href} target="_blank" rel="noopener noreferrer" aria-label={label} style={{ color: "#666" }}>{icon}</a>
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