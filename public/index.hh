<?hh //strict

class Welcome
{
    public string $hello = 'Welcome';

    final public function __construct()
    {
        echo $this->hello;
    }
}

new Welcome;
