<?php
define( 'DB_NAME', getenv( 'WP_DATABASE_NAME' ) );
define( 'DB_USER', getenv( 'WP_DATABASE_USER' ) );
define( 'DB_PASSWORD', getenv( 'WP_DATABASE_PASS' ) );
define( 'DB_HOST', getenv( 'WP_DATABASE_HOST' ) . ':' . getenv( 'WP_DATABASE_PORT' ) );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         '{UeSWs;1M+N]FG5kOT+AfW;CnlC0vdU?$suzeo|r1WePDjM|]2HX!iHqKCuz6(sm');
define('SECURE_AUTH_KEY',  ' !FMV7qw%Wc%)+WnFtG+H6bb_d_!X3m_v5<+kV@#=i/0-&^b s8b ;RtzX;0r9u6');
define('LOGGED_IN_KEY',    '^H;yd$-=e5,:M1 =^8:hh{7I[,1++=*]e?^PIVZ`*aOEed-oVcTS1ZEeD@UR*0| ');
define('NONCE_KEY',        'Y>sweI8kZW@+TV^s,2<h-,&_F?Tsr.|m0]Kv~Ak|%@5sZM#43k-B>E~0G0Q0KZ$K');
define('AUTH_SALT',        '6vMuDnB6jbAYHdedX<$EWo>W2d#(c%WVh6)faG,TIx;`]?Z%v4|2R+?$lsLP[|uz');
define('SECURE_AUTH_SALT', 'B~JRZe!g8=~|s%j%,CV1[$el)TT:>Gz>nMR%,P|I&y??:=|^yHh5fi]}?+mSG>q+');
define('LOGGED_IN_SALT',   '_|F:.0cqr7[FwU2-!N+1W-gmfGBJA*.QD=uP!hQ=h}q]Q;}a7Ls1U}N&N[lI~+-8');
define('NONCE_SALT',       'w;MGCxU0P/7+6n.Wg~;/eubk&O|%fdL-fMcBweEd4sZ7~QKtd/kQ7H|P3!Xz`u|+');

$table_prefix = 'wp_';

define( 'WP_DEBUG', !!getenv('WP_DEBUG') );
define( 'WP_CONTENT_DIR', __DIR__ . '/wp-content' );
define( 'WP_CONTENT_URL', '/wp-content' );

define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp');
define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
