<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'ecsprog' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'cq<v$-%_zv6bgQsG:pfC(;cOb{67>)WnAb u=<Mc$^kDR;,M0vj<3,w*d<cl!0+l' );
define( 'SECURE_AUTH_KEY',  'Pd <mMiu42ZdpkzccS+C3Q{pOp0.5LkzQX#h-`sC{+dPB$@8#P!V4oI#1yS=99N#' );
define( 'LOGGED_IN_KEY',    'CJWst%LE#rBMb1FhWiZV=z61VL={fsc@{AB:!s@Jz*`CQ`b oHXTjtT%M)(q,e;l' );
define( 'NONCE_KEY',        'dIM|]a|n7(D6^Ia=Rtw`n5::kL}[JGI{Hy:.74zO}|:A0Ttzh(hfn1B/tXTS#{d{' );
define( 'AUTH_SALT',        'C;CPf5}zDchxJw>l* j4DCK=)|qjQq;Y.WMhd]-ms}U|BS>]hHfRO#PU9DG$*/FV' );
define( 'SECURE_AUTH_SALT', 'Yt@yr.;&0M(5ymX=+qRDY%Y<}0140rh4.IeLzsg~`{9^j[>ST}Po<yh`UlN!mt^j' );
define( 'LOGGED_IN_SALT',   'Fkkx rPTnI9*6zThx<#Jzn$rN_w_s=n}tDH|4uAyp..BrqN&k*g17_~?G6(GX.Gr' );
define( 'NONCE_SALT',       'W^bZJYKj,:@+^~GdcR%R1::AsW+L&(I)<W4^:ehPqQz#7eW-4odM<4=z._4M8 Ko' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
