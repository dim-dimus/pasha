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
define('DB_NAME', 'pasha');

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
define('AUTH_KEY',         '(^;hDT0SP#} ^=8a0{?hw^1nzrSS-UZ&>eZ~mP 2K+a$`WKx1[~2X*=a@W}V=LII');
define('SECURE_AUTH_KEY',  'p>c0_/R9@,rYG|.Z.wbsk7V5_*/c$c|EYpH-__Ir$ROH5yXE&|AmmH-H<U+ e%9v');
define('LOGGED_IN_KEY',    ',-3dhNOc{0%v<=y<odlE[Yxg#jYcbyL<W<x+QFvVT&(^5YmD^+]I5PbA G2GjH!_');
define('NONCE_KEY',        '!fN 7b 2{:xu8lTjc<ox%mw:d.f2Bi7hZM%f?6Bd*+y)<Bg^[px.?-o3wM>ka/M6');
define('AUTH_SALT',        'Uv[#17{rW4?:E`d-2R_qgaRbT<i@*`5WaHfa.7-t!h>(P93kjHAE{-xVj?^YqdyU');
define('SECURE_AUTH_SALT', '$Q:O->pp<7xkFD#m({h+rxD@t_2i>/+3>WBVjc^y@o26}{GHW`5!P]|:x9c4kr$`');
define('LOGGED_IN_SALT',   '[E8ptdy.BsE<qH;LJjr%P8n|);?X7?h,7PPj2DMaw _YsxAAi+XLZYgy,N_/O<Y6');
define('NONCE_SALT',       '-qkx&3,9!:(iuEJz:9Sj2oYVm!%vL{/)l$?+{X[d@^H6Bt:*lX<~jM~ve>C]-/EX');

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
