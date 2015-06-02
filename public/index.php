<?hh

/**
 * Define the core paths - the app folder and document :root.
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
    $request = new Omega\Http\Request($_GET, $_POST, $_SERVER, $_FILES, $_COOKIE);

    echo '<pre>';
    var_dump($request->server->get('REQUEST_START_TIME'));
    echo '</pre>';
}

main();
