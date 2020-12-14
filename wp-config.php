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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'fitness' );

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
define( 'AUTH_KEY',         'ALD#+ r]- ]]^&UKfxvbeH1d;|H}<7=ZZE?_`Vl,c9Rm{~?E[T] ?5!mxL5O)j(I' );
define( 'SECURE_AUTH_KEY',  '/=sz+75EUOmj2jJpogiO3rg,/M#:6R:*MxTJ|A&86cZlG2UbG0wpNv;m@kXw-K}I' );
define( 'LOGGED_IN_KEY',    '5Pd~Jd`%yVilvd![I1g~9fo%,j6-x!`[r|UV}us_m(<tK?#Mf!gFc9F i)QCsA1T' );
define( 'NONCE_KEY',        'ES+iV.7TF}rV%x838Mi7rDWYz  -%+tRwlzRIJJjju|^)otkPB* 7)RM$e_GwQ6W' );
define( 'AUTH_SALT',        'H ;LMiB*{9]^-z<vlu4&|]uJ5ZkG6GnlzPWuF?T1Y<>}>xL;S,tFvsO 3s?+C-4[' );
define( 'SECURE_AUTH_SALT', '@a-|43 <?^.#%W-TxpdNAofQ}|`K/Tm@m50|@:?EW||*xh:y=!A*~GVj8z4v&50L' );
define( 'LOGGED_IN_SALT',   ' #KrI]l2=9@)=A~M>tf]Jh[kEvp EE9w*kxi-N9;FfoctQ6NzL8dwZ5KI;PbV0tb' );
define( 'NONCE_SALT',       '>hMHyhst|!*Vmc8>a}m/4!oG8v0r4)52u+%(.8~8tW^S`*WF$eTP5O^R_Y1i4v(<' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
