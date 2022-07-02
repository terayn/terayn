<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'magaz' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'tetrayn' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '924211' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'EaIl$9w.{-CsPE]$jx~vHJmeG`{>/.F}NBJKg|efl?6`8Wm.X>vVX^vjXtT[MEu@' );
define( 'SECURE_AUTH_KEY',  'kLLsj-6:^AtBWT)X8}_vK|[[YAjDH/B`O% @Q^~/a3VEl9VH)qjJ@[e<2ufp~jj!' );
define( 'LOGGED_IN_KEY',    'H~~;20x/@&H@1< =c{h,KVhdM_P@it96Rwr [} ;4JP>6jtRYInRA0i:qw09-ZY ' );
define( 'NONCE_KEY',        '3pOrj].gWv&s5>yt*bFq?MixI1n!1yd,Nr<y1/oV o6rumgv}LOGd$hPAO(J=U_o' );
define( 'AUTH_SALT',        '%KRNUd`1VGEaY@ri~P?2Pw_poz*xX,1#&o}1K#Fuo[C67l?}C#Y%/=c{4,l9S^|<' );
define( 'SECURE_AUTH_SALT', 'L!,h7S`Id|3MtDe=[on~hWA45m@}UD9ws9WLYR&ss3Jq07O5nULnwk9*B.r!1.eX' );
define( 'LOGGED_IN_SALT',   'a;FE1Hpqy]}34OwMBi<3nmA}Dak0-.*.qs!AN_vd^n)b]A!&,B]mFX;=[/MM|*<c' );
define( 'NONCE_SALT',       'fw<4?TeLA.)+t;jPSX6P=/%PJ{}n7JWt6Uc&2nvlTW>g]0:I,;m>}CCLy4pobra:' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
