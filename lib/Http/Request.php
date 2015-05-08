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
    public array<T> $get;

    /**
     * $_POST data.
     */
    public array<T> $post;

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
        array<T> $get,
        array<T> $post,
        array<T> $server,
        array<T> $files,
        array<T> $cookies
    ) {
        $this->get = $get;
        $this->post = $post;
        $this->server = $server;
        $this->files = $files;
        $this->cookies = $cookies;
    }

    public function getPost(): array
    {
        return $this->post;
    }

    public function getGet(): array
    {
        return $this->get;
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
