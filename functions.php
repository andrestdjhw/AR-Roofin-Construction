<?php

function boilerplate_load_assets() {
  $theme_path = get_theme_file_path();

  /* ── JS: bundle de @wordpress/scripts ──────────────────────────
     build/index.asset.php (autogenerado por `wp-scripts build`) trae
     las dependencias y un "version" basado en hash de contenido.
     Usarlo => cache-busting automático + dependencias correctas.   */
  $asset_file = $theme_path . '/build/index.asset.php';
  if ( file_exists( $asset_file ) ) {
    $asset   = require $asset_file;
    $js_deps = $asset['dependencies'];
    $js_ver  = $asset['version'];
  } else {
    // Fallback si por algo no existe el asset file
    $js_deps = array( 'wp-element', 'react-jsx-runtime' );
    $js_path = $theme_path . '/build/index.js';
    $js_ver  = file_exists( $js_path ) ? filemtime( $js_path ) : '1.0';
  }
  wp_enqueue_script( 'ourmainjs', get_theme_file_uri( '/build/index.js' ), $js_deps, $js_ver, true );

  /* ── CSS: lo genera el CLI de Tailwind (no tiene asset file) ────
     Versionamos con filemtime() para bustear caché en cada build.  */
  $css_path = $theme_path . '/build/index.css';
  $css_ver  = file_exists( $css_path ) ? filemtime( $css_path ) : '1.0';
  wp_enqueue_style( 'ourmaincss', get_theme_file_uri( '/build/index.css' ), array(), $css_ver );
}
add_action( 'wp_enqueue_scripts', 'boilerplate_load_assets' );

function boilerplate_add_support() {
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'boilerplate_add_support' );
/* ── Fotos de obra (WP Media, uploads/2026/10/1.jpg … 15.jpg) ─────
   Devuelve la URL del tamaño que WordPress generó con ese ancho
   (ej. 1024 → 7-1024x577.jpg). Si no existe, usa la original.     */
function ar_jobsite_img( $num, $width = 1024 ) {
  $dir   = '/wp-content/uploads/2026/10/';
  $match = glob( ABSPATH . ltrim( $dir, '/' ) . $num . '-' . $width . 'x*.jpg' );
  return $match ? $dir . basename( $match[0] ) : $dir . $num . '.jpg';
}

/* ── Thank You (redirección después de enviar el formulario) ──────
   /thank-you/1/          → form del hero (home)
   /thank-you/2/          → form antes del footer (home)
   /contact/thank-you/3/  → form de la página de Contact
   No son páginas de WP: se resuelven con rewrite rules y se pintan
   con thank-you-template.php.                                      */
define( 'AR_THANK_YOU_SOURCES', array(
  1 => 'Home — Hero form',
  2 => 'Home — Final CTA form',
  3 => 'Contact page form',
) );
define( 'AR_THANK_YOU_RULES_VERSION', '1' );

function ar_thank_you_rewrites() {
  add_rewrite_rule( '^thank-you/([0-9]+)/?$', 'index.php?ar_thank_you=$matches[1]', 'top' );
  add_rewrite_rule( '^contact/thank-you/([0-9]+)/?$', 'index.php?ar_thank_you=$matches[1]', 'top' );

  // Refresca las reglas una sola vez (o cuando cambie la versión de arriba)
  if ( get_option( 'ar_thank_you_rules_version' ) !== AR_THANK_YOU_RULES_VERSION ) {
    flush_rewrite_rules( false );
    update_option( 'ar_thank_you_rules_version', AR_THANK_YOU_RULES_VERSION );
  }
}
add_action( 'init', 'ar_thank_you_rewrites' );

add_filter( 'query_vars', function ( $vars ) {
  $vars[] = 'ar_thank_you';
  return $vars;
} );

/* Número de formulario válido de la URL actual, o 0 si no es Thank You */
function ar_thank_you_source() {
  $id = (int) get_query_var( 'ar_thank_you' );
  return isset( AR_THANK_YOU_SOURCES[ $id ] ) ? $id : 0;
}

add_filter( 'template_include', function ( $template ) {
  if ( ! get_query_var( 'ar_thank_you' ) ) return $template;

  if ( ! ar_thank_you_source() ) {
    global $wp_query;
    $wp_query->set_404();
    status_header( 404 );
    return get_404_template() ?: $template;
  }

  global $wp_query;
  $wp_query->is_404 = false;
  status_header( 200 );
  return get_theme_file_path( '/thank-you-template.php' );
} );

add_filter( 'document_title_parts', function ( $parts ) {
  if ( ar_thank_you_source() ) $parts['title'] = 'Thank You';
  return $parts;
} );

// Que Google no indexe las páginas de gracias
add_filter( 'wp_robots', function ( $robots ) {
  if ( ar_thank_you_source() ) {
    $robots['noindex']  = true;
    $robots['nofollow'] = true;
  }
  return $robots;
} );
