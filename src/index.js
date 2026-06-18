import React from "react"
import ReactDOM from "react-dom/client"
import Navbar from "./scripts/Navbar"
import Footer from "./scripts/Footer"
import ContactForm from "./scripts/ContactForm"
import Person from "./scripts/Person"
import ExampleReactComponent from "./scripts/ExampleReactComponent"
import CertificateBadges from "./scripts/CertificateBadges"



const person1 = new Person("Brad")

// Example component
if (document.querySelector("#render-react-example-here")) {
  ReactDOM.createRoot(document.querySelector("#render-react-example-here"))
    .render(<ExampleReactComponent />)
}

// Navbar
if (document.querySelector("#navbar")) {
  ReactDOM.createRoot(document.querySelector("#navbar"))
    .render(<Navbar />)
}

// Footer
if (document.querySelector("#footer")) {
  ReactDOM.createRoot(document.querySelector("#footer"))
    .render(<Footer />)
}

// Hero contact form (dark theme — inside the glassmorphism panel)
if (document.querySelector("#hero-contact-form")) {
  ReactDOM.createRoot(document.querySelector("#hero-contact-form"))
    .render(
      <ContactForm
        theme="dark"
        title="Get a Free Inspection"
        showTitle={true}
      />
    )
}

// Final CTA contact form (dark theme — inside the dark CTA section)
if (document.querySelector("#final-contact-form")) {
  ReactDOM.createRoot(document.querySelector("#final-contact-form"))
    .render(
      <ContactForm
        theme="dark"
        title="Send Us a Message"
        showTitle={true}
      />
    )
}

// Contact page form (light theme — inside white card)
if (document.querySelector("#ct-react-form")) {
  ReactDOM.createRoot(document.querySelector("#ct-react-form"))
    .render(
      <ContactForm
        theme="light"
        title="Get your free estimate today."
        showTitle={true}
      />
    )
}


// Floating certificate badges (etiqueta borde derecho, centrado)
if (document.querySelector("#certificate-badges")) {
  ReactDOM.createRoot(document.querySelector("#certificate-badges"))
    .render(<CertificateBadges title="Certifications" />)
}