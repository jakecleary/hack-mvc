<?hh //strict

/**
 * Define the core paths - the app folder and document root.
 */
define('APP_FOLDER', realpath(__DIR__ . '/../'));
define('APP_PUBLIC', realpath(__DIR__));

/**
 * Include the autoloader.
 */
require_once APP_FOLDER . '/vendor/autoload.php';

/**
 * Let's go!
 */
function main(): void
{
    new Alpha\Welcome('goodbye');
}

main();
