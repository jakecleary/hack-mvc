<?hh //strict

namespase Michael;

/**
 * Class to encapsulate the HTTP requests to the application.
 *
 * Mostly a port of Symfony\Component\HttpFoundation\Request
 */
class Request
{
    /**
     * Custom request parameters.
     */
    public Map $attributes;

    /**
     * $_GET data.
     */
    public Map $query;

    /**
     * $_POST data.
     */
    public Map $request;

    /**
     * $_SERVER data.
     */
    public Map $server;

    /**
     * $_FILES data.
     */
    public Map $files;

    /**
     * $_COOKIE data.
     */
    public Map $cookies;

    /**
     * Request headers (taken from $_SERVER).
     */
    public Map $headers;

    /**
     * Capture the request and build up the class.
     */
    public function __construct(
        array $attributes,
        array $query,
        array $request,
        array $server,
        array $files,
        array $cookies,
        array $headers
    ) {
        // TODO: Build the request object.
    }
}
