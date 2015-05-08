<?hh //strict

namespace Michael\Http;

/**
 * Class to encapsulate the HTTP requests to the application.
 *
 * Mostly a port of Symfony\Component\HttpFoundation\Request
 */
class Request<T>
{
    /**
     * $_GET data.
     */
    public array<T> $query;

    /**
     * $_POST data.
     */
    public array<T> $request;

    /**
     * $_SERVER data.
     */
    public array<T> $server;

    /**
     * $_FILES data.
     */
    public array<T> $files;

    /**
     * $_COOKIE data.
     */
    public array<T> $cookies;

    /**
     * Capture the request and build up the class.
     */
    public function __construct(
        array<T> $query,
        array<T> $request,
        array<T> $server,
        array<T> $files,
        array<T> $cookies
    ) {
        $this->query = $query;
        $this->request = $request;
        $this->server = $server;
        $this->files = $files;
        $this->cookies = $cookies;
    }

    public function getQuery(): array
    {
        return $this->query;
    }

    public function getRequest(): array
    {
        return $this->query;
    }

    public function getServer(): array
    {
        return $this->server;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function getCookie(): array
    {
        return $this->cookie;
    }
}
