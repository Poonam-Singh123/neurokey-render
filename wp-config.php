<?php
/**
 * The base configuration for WordPress - Modified for Render
 */
 
// ** Render PostgreSQL Database Settings ** //
$db_url = getenv('DATABASE_URL');

if ($db_url) {
    $db_parsed = parse_url($db_url);
    
    define('DB_NAME', trim($db_parsed['path'], '/'));
    define('DB_USER', $db_parsed['user']);
    define('DB_PASSWORD', $db_parsed['pass']);
    define('DB_HOST', $db_parsed['host'] . ':' . $db_parsed['port']);
    define('DB_CHARSET', 'utf8');
    define('DB_COLLATE', '');
    
    // Force SSL for Render PostgreSQL
    putenv("PGSSLMODE=require");
} else {
    // Fallback for local development (you'll need to manually fill these)
    define('DB_NAME', 'neurokey');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_HOST', 'localhost');
    define('DB_CHARSET', 'utf8mb4');
    define('DB_COLLATE', '');
}

/**#@+
 * Authentication unique keys and salts. (Keep your existing ones)
 */
define( 'AUTH_KEY',         '-4{0eIh{A(xDbSwg9X_Ap[#~([CZfczMLrZuUxY@XT~hAwk4NR$Ep._:524Cy~?G' );
define( 'SECURE_AUTH_KEY',  ',mwfmthht7bS/QcIJgu}Lgjx:kg$q~u3>(c%IB88K(*KpqUNOq9yVw$-|!FGx6,{' );
define( 'LOGGED_IN_KEY',    'OGV!v%;Y&;A3FeGI8,4$?SVO6>#ldw!Br#jocED~51Rq<ivoF8TC!C{)A%yp=@~B' );
define( 'NONCE_KEY',        '3ylf7C/]PCF)2/e_{tpZY=;FK?=9,u >my$q/]k@;m+$slA@/CCt:4y<awNnbRg.' );
define( 'AUTH_SALT',        'H/!d(;k-tYw/DFh1 < /DbNCTaHW^x[f5cteSQ7{~B[]l_OZlJ}dG$fOCqS:Cl~[' );
define( 'SECURE_AUTH_SALT', 'fWu+6TaSu>x7KUWvZB7@uYN5I^L0fD{S]!*!i.0k >KYL}{(y)w%:_`|jdV}V9~N' );
define( 'LOGGED_IN_SALT',   'c6msvWOgr3P_YnAH}:zX><u[b[)^xW_(!3t|XqgEV8;,B9;PcTh2/WbI0ElzKu]l' );
define( 'NONCE_SALT',       'DqR|;=I{p&2^<:e#M0NQ}th!!s<~~QYp(*)HI.M~s>l[)erKIQG4f1nFlk62Sh3}' );

/**#@-*/

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

/* Render-Specific Optimizations */
define('WP_HOME', getenv('RENDER_EXTERNAL_URL') ?: 'http://localhost');
define('WP_SITEURL', getenv('RENDER_EXTERNAL_URL') ?: 'http://localhost');
define('DISABLE_WP_CRON', true); // Recommended for Render

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';