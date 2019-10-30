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
define( 'DB_NAME', 'cleanwell' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'vsyveniu' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '423ps4212' );

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
define( 'AUTH_KEY',         '@_H?s+Elf3GZi5$m%k7&J/@/8vPZ1R[kuo+$d^zcaAlxSxu:5S{;S`-{YGG8(5wS' );
define( 'SECURE_AUTH_KEY',  'p$)HZ0v?Wb-I(B1AMhUBw`R o{x9 &`>$@c0[<^Tt(3>xvxddr0]?p>}C;^Ia,.I' );
define( 'LOGGED_IN_KEY',    'OgRB#BcL{O+_O9?LG0tT$Jk*YeDcx8hFK/jz&$$H-bDxN*U+{e*n%S`Ap5!NdRTD' );
define( 'NONCE_KEY',        ')9nU8LtsPep>uT`~XU-|=}96+Vi`6WUf&c20r`eoCtV0_ejAdnM6(Co1GO(%e?%j' );
define( 'AUTH_SALT',        'i&dsWO53>wm86l]xNKvFk.:tz4 }YCsnr?wDRB>.NIA08%I_ ~CE%y&,~n?1n_nB' );
define( 'SECURE_AUTH_SALT', 'SSt0ORmP +WcsE?E*9F$r@@XbFiu&ExmV=8sWfg.Eweh7CBKIf-S N/Q kxXNK5+' );
define( 'LOGGED_IN_SALT',   'ojBYScT]ILoi.,BV0QyGjuVF<kf@``5HFkVkC6~|+RCi-BR_{AC>j-2%)*L/=B$[' );
define( 'NONCE_SALT',       'l97/@r3H_(>+VVWCo-ZYp^?>B4cOhx5BB@~~gBpNGDP;)ako`z)mvh1^dfd2SU8S' );

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
