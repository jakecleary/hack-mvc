<?hh //strict

namespace Omega\Http;

/**
 * Class to encapsulate the HTTP requests to the application.
 *
 * Mostly a port of Symfony\Component\HttpFoundation\Request
 */
class Request<Tk, Tv>
{
    /**
     * $_GET data.
     */
    public Map<Tk, Tv> $get = Map{};

    /**
     * $_POST data.
     */
    public Map<Tk, Tv> $post = Map{};

    /**
     * $_SERVER data.
     */
    public Map<Tk, Tv> $server = Map{};

    /**
     * $_FILES data.
     */
    public Map<Tk, Tv> $files = Map{};

    /**
     * $_COOKIE data.
     */
    public Map<Tk, Tv> $cookie = Map{};

    /**
     * Capture the request and build up the class.
     */
    public function __construct(
        array<Tk, Tv> $get,
        array<Tk, Tv> $post,
        array<Tk, Tv> $server,
        array<Tk, Tv> $files,
        array<Tk, Tv> $cookies
    ) {
        // $this->get = $get;
        // $this->post = $post;
        // $this->server = $server;

        foreach($server as $key => $value) {
            $this->server[$key] = $value;
        }

        // $this->files = $files;
        // $this->cookies = $cookies;
    }

    private function store(string $global, array<Tk, Tv> $data): void
    {
        foreach($data as $key => $value)
        {
            $this->$global[$key] = $value;
        }
    }

    public function getPost(): Map<Tk, Tv>
    {
        return $this->post;
    }

    public function getGet(): Map<Tk, Tv>
    {
        return $this->get;
    }

    public function getServer(): Map<Tk, Tv>
    {
        return $this->server;
    }

    public function getFiles(): Map<Tk, Tv>
    {
        return $this->files;
    }

    public function getCookie(): Map<Tk, Tv>
    {
        return $this->cookie;
    }
}
