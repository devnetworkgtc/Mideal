<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', '');

/** Nome utente del database MySQL */
define('DB_USER', '');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', '');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');
/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'RHtI5js6)l4aOs(YODc>ad1T*nSk8s|u>C#05n2]`58w,5<<q,4n?3ec{gXbfQ71');
define('SECURE_AUTH_KEY',  '(-<wx:Pvi~MClWAe0=!+-x/M{L&0&&66jsFZ!}T(ZEr=4b.u),jrU!qU!@}u/a:+');
define('LOGGED_IN_KEY',    'r@^_KC!wc0 vX?D2-51.p9gT%&68G)=fQ6Z!fR(J9[3#k<OR[[X5E3t73G&$tj=Q');
define('NONCE_KEY',        '(J|ZVn>R2*$ ;=(h70q8&u_iU)IMrMr07MnD-opJ2_=$qHxq|F`E{0p9b z/vh9e');
define('AUTH_SALT',        'wGGdHh-~b@_/Nm,Mb0W^y)]A,JJ*ayC!]^,6+kGFk*IR0u(?Km%h-7sMG;2?R1Di');
define('SECURE_AUTH_SALT', 'SOD(K%DngyJf83.-G-#H*Z1c+Udd*SkeSJp20;:En.8INN%O1kzQ_5;yi.%#_[(N');
define('LOGGED_IN_SALT',   'D65?oE2 @>O?jnz`r#&K0JXN]<qf;?*],m:0`=kQ &X5ZVXgkGlA}7lEPjLvUoxb');
define('NONCE_SALT',       '1GwMC;ovqrw887$P7nh<7%K (?d.Al%>dtw.B$+vcD3Ygm)6Z)F/x~,#L7;/,ta5');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');