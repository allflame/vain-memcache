<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-cache
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-cache
 */
declare(strict_types = 1);

namespace Vain\Memcache\Memcached;

use Vain\Core\Connection\ConnectionInterface;
use Vain\Memcache\MemcacheInterface;

/**
 * Class Memcached
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class Memcached implements MemcacheInterface
{
    private $connection;

    /**
     * Memcache constructor.
     *
     * @param ConnectionInterface $connection
     */
    public function __construct(ConnectionInterface $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @inheritDoc
     */
    public function set(string $key, $value, int $ttl) : bool
    {
        return $this->connection->establish()->set($key, $value, $ttl);
    }

    /**
     * @inheritDoc
     */
    public function get(string $key)
    {
        if (false === ($result = $this->connection->establish()->get($key))) {
            return null;
        }

        return $result;
    }

    /**
     * @inheritDoc
     */
    public function add(string $key, $value, int $ttl) : bool
    {
        return $this->connection->establish()->add($key, $value, $ttl);
    }

    /**
     * @inheritDoc
     */
    public function del(string $key) : bool
    {
        return $this->connection->establish()->delete($key);
    }

    /**
     * @inheritDoc
     */
    public function has(string $key) : bool
    {
        return (false !== $this->get($key));
    }

    /**
     * @inheritDoc
     */
    public function expire(string $key, int $ttl) : bool
    {
        return $this->connection->establish()->touch($key, $ttl);
    }
}
