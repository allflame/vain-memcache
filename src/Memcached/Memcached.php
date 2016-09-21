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
declare(strict_types=1);

namespace Vain\Memcache\Memcached;

use Vain\Memcache\MemcacheInterface;

/**
 * Class Memcached
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class Memcached implements MemcacheInterface
{

    private $memcachedInstance;

    /**
     * Memcache constructor.
     *
     * @param \Memcached $memcachedInstance
     */
    public function __construct(\Memcached $memcachedInstance)
    {
        $this->memcachedInstance = $memcachedInstance;
    }

    /**
     * @inheritDoc
     */
    public function set(string $key, $value, int $ttl) : bool
    {
        return $this->memcachedInstance->set($key, $value, $ttl);
    }

    /**
     * @inheritDoc
     */
    public function get(string $key)
    {
        if (false === ($result = $this->memcachedInstance->get($key))) {
            return null;
        }

        return $result;
    }

    /**
     * @inheritDoc
     */
    public function add(string $key, $value, int $ttl) : bool
    {
        return $this->memcachedInstance->add($key, $value, $ttl);
    }

    /**
     * @inheritDoc
     */
    public function del(string $key) : bool
    {
        return $this->memcachedInstance->delete($key);
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
        return $this->memcachedInstance->touch($key, $ttl);
    }
}