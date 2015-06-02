<?hh //strict

namespace Omega\Http;

/**
 * A class for managing, storing, and accessing data from superglobal variables.
 */
class SuperGlobal<T>
{
    private Map<T, T> $data;

    public function __construct(array<T> $data)
    {
        $this->data = $this->initialize($data);
    }

    private function initialize(array<T> $data)
    {
        foreach($data as $key => $value)
        {
            $this->data->add($key, $value);
        }
    }
}
