/* ─── LIGHTBOX ─────────────────────────────────────────────────
   Uso en PHP:
     <a href="FOTO_GRANDE.jpg" data-lightbox="grupo" data-caption="Texto">
       <img src="FOTO_CHICA.jpg">
     </a>
   Los elementos con el mismo data-lightbox se navegan juntos
   (flechas, teclado ← → y Esc para cerrar).
   ──────────────────────────────────────────────────────────── */

const injectStyles = () => {
  if (document.getElementById("ar-lb-styles")) return
  const style = document.createElement("style")
  style.id = "ar-lb-styles"
  style.textContent = `
    .ar-lb { position: fixed; inset: 0; z-index: 10000; display: flex; align-items: center; justify-content: center;
      background: rgba(10,24,23,0.94); opacity: 0; visibility: hidden; transition: opacity .25s, visibility .25s; }
    .ar-lb.is-open { opacity: 1; visibility: visible; }
    .ar-lb__figure { margin: 0; max-width: min(1200px, 92vw); text-align: center; }
    .ar-lb__img { display: block; max-width: 100%; max-height: 80vh; margin: 0 auto; border-radius: 8px;
      box-shadow: 0 20px 60px rgba(0,0,0,0.5); }
    .ar-lb__caption { margin-top: 14px; color: rgba(255,255,255,0.8); font-size: 14px; letter-spacing: .3px; }
    .ar-lb__count { color: rgba(255,255,255,0.45); margin-left: 10px; font-size: 12px; }
    .ar-lb__btn { position: absolute; display: flex; align-items: center; justify-content: center;
      width: 48px; height: 48px; border: 0; border-radius: 50%; cursor: pointer;
      background: rgba(255,255,255,0.1); color: #fff; transition: background .2s; }
    .ar-lb__btn:hover { background: rgba(255,255,255,0.22); }
    .ar-lb__close { top: 20px; right: 20px; }
    .ar-lb__prev { left: 20px; top: 50%; transform: translateY(-50%); }
    .ar-lb__next { right: 20px; top: 50%; transform: translateY(-50%); }
    @media (max-width: 640px) {
      .ar-lb__prev, .ar-lb__next { top: auto; bottom: 20px; transform: none; }
    }
  `
  document.head.appendChild(style)
}

const icon = (d) =>
  `<svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">${d}</svg>`

export default function initLightbox() {
  const triggers = document.querySelectorAll("[data-lightbox]")
  if (!triggers.length) return

  injectStyles()

  const lb = document.createElement("div")
  lb.className = "ar-lb"
  lb.setAttribute("role", "dialog")
  lb.setAttribute("aria-modal", "true")
  lb.setAttribute("aria-label", "Project photo")
  lb.innerHTML = `
    <button type="button" class="ar-lb__btn ar-lb__close" aria-label="Close">${icon('<path d="M18 6 6 18M6 6l12 12"/>')}</button>
    <button type="button" class="ar-lb__btn ar-lb__prev" aria-label="Previous photo">${icon('<path d="m15 18-6-6 6-6"/>')}</button>
    <figure class="ar-lb__figure">
      <img class="ar-lb__img" alt="">
      <figcaption class="ar-lb__caption"></figcaption>
    </figure>
    <button type="button" class="ar-lb__btn ar-lb__next" aria-label="Next photo">${icon('<path d="m9 18 6-6-6-6"/>')}</button>
  `
  document.body.appendChild(lb)

  const img = lb.querySelector(".ar-lb__img")
  const caption = lb.querySelector(".ar-lb__caption")
  const prevBtn = lb.querySelector(".ar-lb__prev")
  const nextBtn = lb.querySelector(".ar-lb__next")

  let group = []
  let index = 0
  let lastFocus = null

  const show = (i) => {
    index = (i + group.length) % group.length
    const el = group[index]
    const text = el.dataset.caption || ""
    img.src = el.getAttribute("href")
    img.alt = text
    caption.innerHTML = ""
    caption.textContent = text
    if (group.length > 1) {
      const count = document.createElement("span")
      count.className = "ar-lb__count"
      count.textContent = `${index + 1} / ${group.length}`
      caption.appendChild(count)
    }
    prevBtn.style.display = nextBtn.style.display = group.length > 1 ? "" : "none"
  }

  const open = (el) => {
    group = Array.from(document.querySelectorAll(`[data-lightbox="${el.dataset.lightbox}"]`))
    lastFocus = document.activeElement
    show(group.indexOf(el))
    lb.classList.add("is-open")
    document.body.style.overflow = "hidden"
    lb.querySelector(".ar-lb__close").focus()
  }

  const close = () => {
    lb.classList.remove("is-open")
    document.body.style.overflow = ""
    if (lastFocus) lastFocus.focus()
  }

  triggers.forEach((el) => {
    el.addEventListener("click", (e) => {
      e.preventDefault()
      open(el)
    })
  })

  lb.querySelector(".ar-lb__close").addEventListener("click", close)
  prevBtn.addEventListener("click", () => show(index - 1))
  nextBtn.addEventListener("click", () => show(index + 1))
  lb.addEventListener("click", (e) => { if (e.target === lb) close() })

  document.addEventListener("keydown", (e) => {
    if (!lb.classList.contains("is-open")) return
    if (e.key === "Escape") close()
    if (e.key === "ArrowLeft" && group.length > 1) show(index - 1)
    if (e.key === "ArrowRight" && group.length > 1) show(index + 1)
  })
}
