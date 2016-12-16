<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-memcache
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-memcache
 */

namespace Vain\Memcache\Cache\Factory;

use Vain\Core\Cache\CacheInterface;
use Vain\Core\Cache\Factory\AbstractCacheFactory;
use Vain\Core\Connection\ConnectionInterface;
use Vain\Memcache\Connection\MemcachedConnection;
use Vain\Memcache\Memcached\Memcached;

/**
 * Class MemcacheCacheFactory
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class MemcacheCacheFactory extends AbstractCacheFactory
{
    /**
     * @inheritDoc
     */
    public function createCache(array $configData, ConnectionInterface $connection) : CacheInterface
    {
        /**
         * @var MemcachedConnection $connection
         */
        return new Memcached($connection);
    }
}
