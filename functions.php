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