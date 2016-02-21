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
define('DB_NAME', 'base');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8WbfA+-6VNYuA`$RWH,H5wi~x*}t-wOvwKn!{zlH`+cnA8YY>b`+-pVr~6;K/2?!');
define('SECURE_AUTH_KEY',  '*O-#{i+y4+f/:voBohq+9D{Ztql1]x#tk! 94BqUn%8Hcag]%EZoL3~) $!`WE>|');
define('LOGGED_IN_KEY',    '`;-<kM:]?!B=~I|@~3WW&;]M)Z~cj&{EK72%7^-eSX9KkZ+5:[s-u1Bv&TC;=e7c');
define('NONCE_KEY',        '4Ds[x{R~bnrl,HfV}>$-@/dTpwQ/QIUDS9~B&P C,Ji0<A]@Jh:|0u71?szq9-M=');
define('AUTH_SALT',        '-b--uKt|Z7mTLe+!![NcvVR6U||,^EcNn<qT|t~7W Y5+w=2iE5UW{CY4S4p@4J9');
define('SECURE_AUTH_SALT', ';>3^[7Z1cy]TA1TWr(.$G[>i-)^+0,?zHq#cy*A0aMCy&95Q2eoJwq#DOeXZ29$-');
define('LOGGED_IN_SALT',   'Lq$G}HTPLpQM;*k@{y2Taw3F@,s-.OvG2)& 2l7 o|cjR`Q`(cZb2}Wq]vS7yLkF');
define('NONCE_SALT',       '|0?,iQ{w(Nfqp->k#kKr]XaouZ}Oq!C/Sf}&H>-AHmD3KG5+o^-8V;gs,RB+.P*~');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
